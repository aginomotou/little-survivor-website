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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/navbar.php'; ?>
  </header>

  <section class="hero" id="hero" aria-labelledby="accommodations-hero-title">
    <div class="hero-bg--accommodations" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">We&rsquo;d Love to Hear from You</p>
      <h1 class="hero-title" id="accommodations-hero-title">Get in <em>Touch</em></h1>
      <p class="hero-sub">
        Whether you have a question, a special request, or you&rsquo;re ready to
        start planning &mdash; our team is here and happy to help.
      </p>
      <a href="#contact-page" class="btn-frosted">Send Us a Message</a>
    </div>
  </section>

  <footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>