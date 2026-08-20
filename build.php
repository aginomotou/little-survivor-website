<?php
/**
 * Static build script — renders every PHP page to plain HTML so the site
 * can be served from Vercel (which cannot execute PHP).
 *
 * Usage (from the repo root):  php build.php
 * Output:  ./dist/
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

$root = __DIR__;
$dist = $root . '/dist';

if (! is_dir($dist)) {
    mkdir($dist, 0777, true);
}

$pages = ['index.php' => 'index.html'];

foreach (glob($root . '/pages/*.php') as $file) {
    $name = basename($file, '.php');
    $pages['pages/' . $name . '.php'] = 'pages/' . $name . '.html';
}

foreach ($pages as $srcRel => $dstRel) {
    $source = $root . '/' . $srcRel;
    $target = $dist . '/' . $dstRel;

    if (! is_dir(dirname($target))) {
        mkdir(dirname($target), 0777, true);
    }

    ob_start();
    try {
        // Apache sets the working directory to the requested page's folder,
        // so relative includes like '../assets/includes/navbar.php' resolve
        // from the page's own directory. Mimic that here.
        chdir(dirname($source));
        $base = '';
        include $source;
        $html = ob_get_clean();
    } catch (Throwable $e) {
        ob_end_clean();
        fwrite(STDERR, "Failed to build {$srcRel}: {$e->getMessage()}\n");
        exit(1);
    } finally {
        chdir($root);
    }

    file_put_contents($target, $html);
    echo "built {$srcRel} -> {$dstRel}\n";
}

copyDir($root . '/assets', $dist . '/assets');
echo "copied assets/ -> dist/assets/\n";

function copyDir(string $src, string $dst): void
{
    if (! is_dir($dst)) {
        mkdir($dst, 0777, true);
    }

    foreach (scandir($src) as $entry) {
        if ($entry === '.' || $entry === '..') {
            continue;
        }

        $from = $src . '/' . $entry;
        $to   = $dst . '/' . $entry;

        if (is_dir($from)) {
            copyDir($from, $to);
        } else {
            copy($from, $to);
        }
    }
}

echo "\nBuild complete: " . count($pages) . " pages in {$dist}\n";
