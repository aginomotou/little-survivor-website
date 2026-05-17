<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Little Survivor Beach Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Little Survivor Beach Resort">
  <link rel="icon" type="image/png" href="/assets/images/logo.png" sizes="16x16 32x32">
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
  <header>
    <!--nav-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/navbar.php'; ?>
  </header>
  <!--hero-->
  <section class="hero" id="hero">
    <div class="hero-bg" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">Beachfront Paradise &bull; Island Living</p>
      <h1 class="hero-title">Find Your Calm<br>by <em>the Coast</em></h1>
      <p class="hero-sub">A peaceful beachfront retreat where nature, comfort,
        and island living come together.</p>
      <a href="#experience" class="btn-explore">Explore the Resort</a>
    </div>

    <!--<div class="hero-scroll" aria-hidden="true">
                <span>Scroll</span>
                <div class="scroll-line"></div>
              </div><-->
  </section>

  <!--experiences-->
  <section id="experiences" aria-labelledby="exp-heading">
    <div class="exp-inner">

      <div class="exp-header">
        <div class="reveal">
          <span class="section-tag">Island Escapes</span>
          <h2 class="section-heading" id="exp-heading">Curated <em>Experiences</em></h2>
          <div class="section-divider"></div>
          <p class="section-body">
            Dive into the soul of the island, From dawn reef walks to twilight feasts on
            the shore, every experience is crafted to leave a mark on your heart.
          </p>
        </div>
      </div>
      <div class="reveal reveal-d2">
        <a href="pages/experiences.php" class="btn-outline">View All Experiences</a>
      </div>
    </div>
  </section>

  <!--accommodations-->
  <section id="accommodations" aria-labelledby="acc-heading">
    <div class="acc-inner">

      <div class="acc-header">
        <span class="section-tag">Where You Stay</span>
        <h2 class="section-heading" id="acc-heading">Featured <em>Accommodations</em></h2>
        <div class="section-divider section-divider--center"></div>
        <p class="section-body section-body--center">
          Each villa has been thoughtfully designed to frame the sea, invite the breeze,
          and envelop you in the finest comforts of island living.
        </p>
      </div>

      <div class="acc-grid">

        <div class="acc-card reveal">
          <div class="acc-img">
            <img src="https://images.unsplash.com/photo-1676089774867-4c95eafda312?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Skydeck Suite" loading="lazy">
          </div>
          <div class="acc-body">
            <h3 class="acc-title">Skydeck Suite</h3>
            <p class="acc-desc">An elevated coastal retreat offering sweeping sea views 
              and private luxury. Ideal for a premium day escape or a peaceful overnight stay.
            </p>
            <ul class="acc-amenities" role="list">
              <li class="acc-amenity">Private Skydeck</li>
              <li class="acc-amenity">Loft Design</li>
              <li class="acc-amenity">Beach Balcony</li>
            </ul>
            <div class="acc-price-desc">Day Trip Rate</div>
            <div class="acc-price"><span>From</span> &#8369 6,000 <span>/ day</span></div>
            <div class="acc-price-note">*Overnight stays from &#8369 12,000</div>
          </div>
        </div>

        <div class="acc-card reveal reveal-d1">
          <div class="acc-img">
            <img src="https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="Cabana" loading="lazy">
          </div>
          <div class="acc-body">
            <h3 class="acc-title">Cabana</h3>
            <p class="acc-desc">
              An intimate beachfront cottage balancing cozy island charm with air-conditioned comfort. 
              Ideal for a relaxed day getaway or a peaceful overnight stay.
            </p>
            <ul class="acc-amenities" role="list">
              <li class="acc-amenity">Cozy Cottage</li>
              <li class="acc-amenity">Air Conditioned</li>
              <li class="acc-amenity">Resort Access</li>
            </ul>
            <div class="acc-price-desc">Day Trip Rate</div>
            <div class="acc-price"><span>From</span> &#8369 2,000 <span>/ day</span></div>
            <div class="acc-price-note">*Overnight stays from &#8369 4,000</div>
          </div>
        </div>
      </div>
      <div class="acc-cta">
        <a href="/pages/accommodations.php" class="btn-primary">View All Accommodations</a>
      </div>
    </div>
  </section>

  <!--gallery-->
  <section id="gallery" aria-labelledby="gal-heading">
    <div class="gal-inner">

      <div class="gal-header">
        <span class="section-tag">Through The Lens</span>
        <h2 class="section-heading" id="gal-heading">A <em>Visual</em> Story</h2>
        <div class="section-divider section-divider--center"></div>
      </div>
    </div>
  </section>

  <!--reviews-->
  <section id="reviews" aria-labelledby="rev-heading">
    <div class="rev-inner">

    <div class="rev-header">
      <span class="section-tag">Guest Stories</span>
      <h2 class="section-heading" id="rev-heading">Words from <em>Our Guests</em></h2>
      <div class="section-divider section-divider--center"></div>
      <p class="section-body section-body--center">
        The most honest measure of our resort is not found in our words, but in the
        memories our guests carry home.
      </p>
    </div>
    </div>
  </section>

  <!--about-->
  <section id="about" aria-labelledby="about-heading">
    <div class="about-inner">

      <div class="about-header">
        <span class="section-tag">Our Origin</span>
        <h2 class="section-heading" id="about-heading">The Little <em>Survivor</em> Story</h2>
        <div class="section-divider"></div>
        <p class="story-body">
          Born from the resilient spirit of the island and the people who call it home,
          The Little Survivor is more than a resort—it is a testament to nature's quiet
          endurance and the human desire to belong somewhere truly beautiful.
        </p>
        <p class="story-body">
          Founded by a family who rebuilt after storms and planted roots deeper than any
          hardship, our resort carries the soul of the shore in every stone, every palm,
          every sunset we share with our guests.
        </p>
        <a href="/pages/about.php" class="btn-ghost">Discover Our Story</a>
      </div>
    </div>
  </section>

  <!--contact-->
  <section id="contact" aria-labelledby="contact-heading">
    <div class="contact-inner">
      <div class="contact-header">
        <span class="section-tag">Reach Out</span>
        <h2 class="section-heading" id="contact-heading">Plan Your <em>Escape</em></h2>
        <div class="section-divider"></div>
        <p class="section-body">
          Whether you're planning a honeymoon, a family retreat, or a private event on
          the shore, our team is ready to craft your perfect stay.
        </p>
      </div>
    </div>
  </section>
</body>

</html>