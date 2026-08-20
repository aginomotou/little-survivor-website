<?php
$activePage = 'cookie-policy';
$base = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Cookie Policy | Little Survivor Beach Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Cookie Policy for Little Survivor Beach Resort — how cookies are used on our website.">
  <link rel="icon" type="image/png" href="<?= $base ?>assets/images/logo.png" sizes="16x16 32x32">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="<?= $base ?>assets/css/global.css">
  <link rel="stylesheet" href="<?= $base ?>assets/css/pages/legal.css">
</head>

<body>
  <header>
    <!--nav-->
    <?php include $base . '/assets/includes/navbar.php'; ?>
  </header>

  <section class="legal-hero" aria-labelledby="cookie-hero-title">
    <div class="hero-content">
      <p class="legal-hero-eyebrow">Simple &amp; Transparent</p>
      <h1 class="legal-hero-title" id="cookie-hero-title">Cookie <em>Policy</em></h1>
      <p class="legal-hero-meta">Last updated: August 20, 2026</p>
    </div>
  </section>

  <div class="legal-wrap">

    <nav class="legal-nav" aria-label="Legal pages">
      <a href="<?= $base ?>pages/privacy-policy.php">Privacy Policy</a>
      <a href="<?= $base ?>pages/terms.php">Terms &amp; Conditions</a>
      <a href="<?= $base ?>pages/cookie-policy.php" aria-current="page">Cookie Policy</a>
    </nav>

    <section class="legal-section" aria-labelledby="cookie-intro">
      <h2 id="cookie-intro">1. What Are Cookies?</h2>
      <p>
        Cookies are small text files stored on your device by your web browser.
        They help websites remember your preferences, understand how the site is
        used, and enable features like embedded maps.
      </p>
    </section>

    <section class="legal-section" aria-labelledby="cookie-own">
      <h2 id="cookie-own">2. Cookies We Set</h2>
      <p>
        The Little Survivor Beach Resort website does not set any first-party
        tracking or advertising cookies, and we do not use analytics tools that
        identify you personally. Our contact forms do not rely on cookies.
      </p>
    </section>

    <section class="legal-section" aria-labelledby="cookie-third">
      <h2 id="cookie-third">3. Third-Party Services</h2>
      <p>
        Some features of our website load content from third-party services,
        which may set their own cookies on your device:
      </p>
      <ul>
        <li><strong>Google Maps</strong> &mdash; embedded map on our contact page. Google may set cookies to remember your map preferences.</li>
        <li><strong>Google Fonts</strong> &mdash; typefaces used across the site. Google may set cookies related to font delivery.</li>
        <li><strong>Font Awesome</strong> &mdash; icon fonts delivered from a CDN, which may set cookies.</li>
      </ul>
      <p>
        We do not control these third-party cookies. Please review the cookie
        policies of Google and Font Awesome for details.
      </p>
    </section>

    <section class="legal-section" aria-labelledby="cookie-manage">
      <h2 id="cookie-manage">4. Managing Cookies</h2>
      <p>
        You can control and delete cookies through your browser settings. Most
        browsers allow you to block cookies entirely or clear them after each
        visit. Blocking cookies will not stop our website from working &mdash;
        the site has no login or personalization that depends on cookies.
      </p>
      <p class="legal-note">
        Tip: in most browsers, cookie settings are found under Settings &rarr;
        Privacy &amp; Security (Chrome, Edge, Firefox) or Preferences &rarr; Privacy (Safari).
      </p>
    </section>

    <section class="legal-section" aria-labelledby="cookie-contact">
      <h2 id="cookie-contact">5. Contact</h2>
      <p>
        Questions about our use of cookies? Email us at
        <a href="mailto:littlesurvivorbeachresort@gmail.com">littlesurvivorbeachresort@gmail.com</a>
        or call <a href="tel:+639192601511">+63 919 260 1511</a>.
      </p>
    </section>

    <p class="legal-updated">Last updated: August 20, 2026</p>

  </div>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>