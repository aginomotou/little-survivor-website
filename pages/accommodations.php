<?php
$activePage = 'accommodations';
$base = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Little Survivor Beach Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Little Survivor Beach Resort">
  <link rel="icon" type="image/png" href="<?= $base ?>assets/images/logo.png" sizes="16x16 32x32">
  <link rel="stylesheet" href="<?= $base ?>assets/css/global.css">
  <link rel="stylesheet" href="<?= $base ?>assets/css/pages/accommodations.css">
</head>

<body>
  <header>
    <!--nav-->
    <?php include $base . '/assets/includes/navbar.php'; ?>
  </header>

  <section class="hero" id="hero" aria-labelledby="acc-hero-title">

    <div class="hero-bg--accommodations" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">Where You Stay</p>
      <h1 class="hero-title" id="acc-hero-title">Our <em>Accommodations</em></h1>
      <p class="hero-sub">
        Each space has been designed to frame the sea, invite the breeze,
        and envelop you in the comfort of island living.
      </p>
      <a href="#acc-section-heading" class="btn-frosted">View Accommodations</a>
    </div>

  </section>

  <div class="acc-strip" aria-label="Accommodation highlights">
    <div class="acc-strip-inner">

      <div class="strip-item">
        <span class="strip-item-label">Options</span>
        <span class="strip-item-value">2 Room Types</span>
      </div>

      <div class="strip-item-divider" role="presentation"></div>

      <div class="strip-item">
        <span class="strip-item-label">Stay Type</span>
        <span class="strip-item-value">Day Trip or Overnight</span>
      </div>

      <div class="strip-item-divider" role="presentation"></div>

      <div class="strip-item">
        <span class="strip-item-label">Starting From</span>
        <span class="strip-item-value">&#8369;2,000 / day</span>
      </div>

      <div class="strip-item-divider" role="presentation"></div>

      <div class="strip-item">
        <span class="strip-item-label">Inquiries</span>
        <span class="strip-item-value">Open Daily</span>
      </div>

    </div>
  </div>

  <section class="acc-section" aria-labelledby="acc-section-heading">
    <div class="acc-section-inner">

      <div class="acc-section-header reveal">
        <span class="section-tag">Where You Stay</span>
        <h2 class="section-heading" id="acc-section-heading">
          Our <em>Accommodations</em>
        </h2>
        <div class="section-divider section-divider--center"></div>
        <p class="section-body section-body--center">
          Whether you&rsquo;re coming for the day or staying the night,
          each space is crafted to make the most of island living.
        </p>
      </div>


      <!--skydeck suite-->
      <div class="acc-block reveal" id="skydeck-suite">

        <div class="acc-block-gallery">

          <!--main img-->
          <div class="acc-gallery-main" aria-label="Skydeck Suite main photo">
            <img id="skydeck-main-img"
              src="https://placehold.co/600x400/png"
              alt="Skydeck Suite — sea view terrace"
              loading="lazy">
            <span class="acc-gallery-badge">Skydeck Suite</span>
          </div>

          <!--thumbnails-->
          <div class="acc-gallery-thumbs" role="list" aria-label="Skydeck Suite photos">

            <div class="acc-gallery-thumb active"
              role="listitem"
              tabindex="0"
              aria-label="View photo 1 of Skydeck Suite"
              data-target="skydeck-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Skydeck Suite — sea view terrace">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

            <div class="acc-gallery-thumb"
              role="listitem"
              tabindex="0"
              aria-label="View photo 2 of Skydeck Suite"
              data-target="skydeck-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Skydeck Suite — loft interior">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

            <div class="acc-gallery-thumb"
              role="listitem"
              tabindex="0"
              aria-label="View photo 3 of Skydeck Suite"
              data-target="skydeck-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Skydeck Suite — private balcony view">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

          </div>
        </div><!-- /.acc-block-gallery -->

        <div class="acc-block-details">
          <h3 class="acc-block-name">Skydeck <em>Suite</em></h3>
          <div class="acc-block-divider"></div>

          <p class="acc-block-desc">
            An elevated coastal retreat offering sweeping sea views and private luxury.
            Ideal for a premium day escape or a peaceful overnight stay. The skydeck
            gives you a private vantage point above the shoreline &mdash; your own
            corner of the island to watch the world slow down.
          </p>

          <ul class="acc-block-features" role="list" aria-label="Room features">
            <li class="acc-block-feature">Private Skydeck</li>
            <li class="acc-block-feature">Loft Design</li>
            <li class="acc-block-feature">Beach Balcony</li>
          </ul>

          <div class="acc-block-pricing">
            <span class="acc-block-pricing-label">Day Trip Rate</span>
            <div class="acc-block-price-main">
              From &#8369;6,000 <span>/ day</span>
            </div>
            <p class="acc-block-price-note">
              *Overnight stays from &#8369;12,000
            </p>
          </div>

          <div class="acc-block-cta">
            <a href="/pages/book.php" class="btn-primary">Book Now</a>
            <a href="/pages/contact-us.php" class="btn-outline">Inquire</a>
          </div>
        </div><!-- /.acc-block-details -->

      </div><!-- /.acc-block (Skydeck) -->

      <div class="acc-block-separator" role="presentation"></div>

      <!--cabana-->
      <div class="acc-block acc-block--reverse reveal" id="cabana">

        <div class="acc-block-gallery">

          <div class="acc-gallery-main" aria-label="Cabana main photo">
            <img id="cabana-main-img"
              src="https://placehold.co/600x400/png"
              alt="Cabana — cozy cottage exterior"
              loading="lazy">
            <span class="acc-gallery-badge">Cabana</span>
          </div>

          <div class="acc-gallery-thumbs" role="list" aria-label="Cabana photos">

            <div class="acc-gallery-thumb active"
              role="listitem"
              tabindex="0"
              aria-label="View photo 1 of Cabana"
              data-target="cabana-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Cabana — cozy cottage exterior">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

            <div class="acc-gallery-thumb"
              role="listitem"
              tabindex="0"
              aria-label="View photo 2 of Cabana"
              data-target="cabana-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Cabana — air conditioned interior">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

            <div class="acc-gallery-thumb"
              role="listitem"
              tabindex="0"
              aria-label="View photo 3 of Cabana"
              data-target="cabana-main-img"
              data-src="https://placehold.co/600x400/png"
              data-alt="Cabana — resort access view">
              <img src="https://placehold.co/600x400/png"
                alt=""
                loading="lazy">
            </div>

          </div>
        </div><!-- /.acc-block-gallery -->

        <div class="acc-block-details">
          <h3 class="acc-block-name">The <em>Cabana</em></h3>
          <div class="acc-block-divider"></div>

          <p class="acc-block-desc">
            An intimate beachfront cottage balancing cozy island charm with
            air-conditioned comfort. Ideal for a relaxed day getaway or a
            peaceful overnight stay. The Cabana keeps things simple &mdash;
            cool, quiet, and close to everything the resort has to offer.
          </p>

          <ul class="acc-block-features" role="list" aria-label="Room features">
            <li class="acc-block-feature">Cozy Cottage</li>
            <li class="acc-block-feature">Air Conditioned</li>
            <li class="acc-block-feature">Resort Access</li>
          </ul>

          <div class="acc-block-pricing">
            <span class="acc-block-pricing-label">Day Trip Rate</span>
            <div class="acc-block-price-main">
              From &#8369;2,000 <span>/ day</span>
            </div>
            <p class="acc-block-price-note">
              *Overnight stays from &#8369;4,000
            </p>
          </div>

          <div class="acc-block-cta">
            <a href="/pages/book.php" class="btn-primary">Book Now</a>
            <a href="/pages/contact-us.php" class="btn-outline">Inquire</a>
          </div>
        </div><!-- /.acc-block-details -->

      </div><!-- /.acc-block (Cabana) -->

    </div><!-- /.acc-section-inner -->
  </section>

  <section class="acc-cta" aria-labelledby="acc-cta-heading">

    <div class="acc-cta-bg" role="presentation">
      <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1400&q=80"
        alt=""
        loading="lazy">
    </div>

    <div class="acc-cta-content reveal">
      <span class="acc-cta-tag">Ready to Stay?</span>
      <h2 class="acc-cta-title" id="acc-cta-heading">
        Reserve Your <em>Space</em>
      </h2>
      <p class="acc-cta-sub">
        Book your stay directly or send us a message for group rates,
        special occasions, or any questions before you arrive.
      </p>
      <div class="acc-cta-buttons">
        <a href="/pages/book.php" class="btn-primary">Book Now</a>
        <a href="/pages/contact-us.php" class="btn-ghost">Send an Inquiry</a>
      </div>
    </div>

  </section>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>