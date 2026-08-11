<?php
$activePage = 'about';
$base = '../';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Little Survivor Beach Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Little Survivor Beach Resort">
  <link rel="icon" type="image/png" href="/assets/images/logo.png" sizes="16x16 32x32">
  <link rel="stylesheet" href="/assets/css/global.css">
  <link rel="stylesheet" href="/assets/css/pages/about.css">
</head>

<body>
  <header>
    <!--nav-->
    <?php include $base . '/assets/includes/navbar.php'; ?>
  </header>

  <section class="hero" id="hero" aria-labelledby="about-hero-title">
    <div class="hero-bg--about" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">Our Origin</p>
      <h1 class="hero-title" id="about-hero-title">The Little <em>Survivor</em></h1>
      <p class="hero-sub">
        A family&rsquo;s dream, rooted in the shore, built with resilience and run with heart.
      </p>
      <a href="#contact-page" class="btn-frosted">Send Us a Message</a>
    </div>
  </section>

  <div class="about-strip" aria-label="Resort highlights">
    <div class="about-strip-inner">

      <div class="strip-item">
        <span class="strip-item-label">Established</span>
        <span class="strip-item-value">Est. 2025</span>
      </div>

      <div class="strip-item-divider" role="presentation"></div>

      <div class="strip-item">
        <span class="strip-item-label">Located in</span>
        <span class="strip-item-value">Botolan, Zambales</span>
      </div>

    </div>
  </div>

  <section class="about-story" id="story">

    <div class="about-story-img">
      <img src="https://images.unsplash.com/photo-1506953823976-52e1fdc0149a?w=900&q=80"
        alt="The beach at Little Survivor Resort"
        loading="lazy">
    </div>

    <div class="about-story-content reveal">
      <span class="section-tag">Where It Began</span>
      <h2 class="section-heading">Our <em>Story</em></h2>
      <div class="section-divider"></div>

      <p class="about-story-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p class="about-story-body">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
        omnis iste natus error sit voluptatem.
      </p>
      <p class="about-story-body">
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
      </p>
    </div>

  </section>

  <section class="about-philosophy" aria-labelledby="philosophy-heading">
    <div class="about-philosophy-inner">

      <div class="about-philosophy-header reveal">
        <span class="section-tag">What We Stand For</span>
        <h2 class="section-heading section-heading--light" id="philosophy-heading">
          Our <em>Philosophy</em>
        </h2>
        <div class="section-divider section-divider--muted section-divider--center"></div>
        <p class="section-body section-body--light section-body--center">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>

      <div class="about-pillars">

        <div class="about-pillar reveal">
          <div class="about-pillar-number" aria-hidden="true">01</div>
          <div class="about-pillar-title">Nature First</div>
          <p class="about-pillar-desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
            quis nostrud exercitation ullamco.
          </p>
        </div>

        <div class="about-pillar reveal reveal-d1">
          <div class="about-pillar-number" aria-hidden="true">02</div>
          <div class="about-pillar-title">Genuine Comfort</div>
          <p class="about-pillar-desc">
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
            sunt in culpa qui officia.
          </p>
        </div>

        <div class="about-pillar reveal reveal-d2">
          <div class="about-pillar-number" aria-hidden="true">03</div>
          <div class="about-pillar-title">Community &amp; Heart</div>
          <p class="about-pillar-desc">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
            doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore
            veritatis et quasi architecto.
          </p>
        </div>

      </div>
    </div>
  </section>

  <div class="about-location" id="location">

    <div class="about-location-bg" role="presentation">
      <img src="https://images.unsplash.com/photo-1505118380757-91f5f5632de0?w=1800&q=85"
        alt="Aerial view of Palawan coastline"
        loading="lazy">
    </div>
    <div class="about-location-overlay" role="presentation"></div>

    <div class="about-location-content reveal">
      <span class="section-tag">Botolan, Zambales</span>
      <h2 class="section-heading section-heading--light">
        The <em>Island</em>
      </h2>
      <div class="section-divider section-divider--muted"></div>

      <p class="about-location-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure.
      </p>
      <p class="about-location-body">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <!-- A few quick atmospheric facts about the destination -->
      <div class="about-location-fact">

        <div class="about-location-fact-item">
          <span class="about-location-fact-value">Botolan</span>
          <span class="about-location-fact-label">Zambales</span>
        </div>

        <div class="about-location-fact-divider" role="presentation"></div>

        <div class="about-location-fact-item">
          <span class="about-location-fact-value">Year-round</span>
          <span class="about-location-fact-label">Beach Season</span>
        </div>

      </div>
    </div>

  </div>

  <section class="about-team" id="team" aria-labelledby="team-heading">

    <div class="about-team-content reveal">
      <span class="section-tag">The People Behind It</span>
      <h2 class="section-heading" id="team-heading">Meet the <em>Team</em></h2>
      <div class="section-divider"></div>
      <p class="about-team-body">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <p class="about-team-body">
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde
        omnis iste natus error sit voluptatem.
      </p>
    </div>

    <div class="about-team-img">
      <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=900&q=80"
        alt="The Little Survivor Beach Resort team"
        loading="lazy">
    </div>

  </section>

  <section class="about-cta" aria-labelledby="about-cta-heading">

    <div class="about-cta-bg" role="presentation">
      <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1400&q=80"
        alt=""
        loading="lazy">
    </div>

    <div class="about-cta-content reveal">
      <span class="about-cta-tag">Come and See for Yourself</span>
      <h2 class="about-cta-title" id="about-cta-heading">
        Your Stay <em>Awaits</em>
      </h2>
      <p class="about-cta-sub">
        Whether you&rsquo;re planning a quiet escape or a full family adventure,
        Little Survivor is ready to welcome you to the shore.
      </p>
      <div class="about-cta-buttons">
        <a href="/pages/book.php" class="btn-primary">Book Your Stay</a>
        <a href="/pages/contact-us.php" class="btn-ghost">Get in Touch</a>
      </div>
    </div>

  </section>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>