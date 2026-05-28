<?php 
  $activePage = 'about';
  $base = '../';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Little Survivor Beach Resort</title>
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Little Survivor Beach Resort">
    <link rel="icon" type="image/png" href="/assets/images/logo.png" sizes="16x16 32x32">
    <link rel="stylesheet" href="/assets/css/styles.css">
  </head>
  <body>
    <header>
      <!--nav--> 
      <?php include $base . '/assets/includes/navbar.php'; ?>
    </header>

    <footer>
      <?php include $base . '/assets/includes/footer.php'; ?>
    </footer>

    <script src="<?= $base ?>assets/js/main.js"></script>
  </body>
</html>
