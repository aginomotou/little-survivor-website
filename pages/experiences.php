<?php
$activePage = 'experiences';
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
  <header>
    <!--nav-->
    <?php include $base . '/assets/includes/navbar.php'; ?>
  </header>

  <!--hero-->
  <section class="hero" id="hero" aria-labelledby="exp-hero-title">
    <div class="hero-bg--experiences" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">Island Escapes</p>
      <h1 class="hero-title" id="exp-hero-title">Curated <em>Experiences</em></h1>
      <p class="hero-sub">
        From the thrill of the shore to the stillness of the open water &mdash;
        every experience here is yours to discover at your own pace.
      </p>
      <a href="#" class="btn-frosted">Send Us a Message</a>
    </div>
  </section>

  <section class="experiences-intro">
    <div class="experiences-intro-inner">
      <p class="experiences-intro-quote">
        &ldquo;The best memories are made when you stop planning and start doing.&rdquo;
      </p>
      <div class="experiences-intro-line"></div>
      <p class="experiences-intro-body">
        Whether you&rsquo;re after the rush of an ATV along the shoreline, a quiet float
        on the water, or simply an afternoon of laughter with family &mdash; Little Survivor
        has something for every kind of guest. Below are the activities available during
        your stay.
      </p>
    </div>
  </section>

  <!--atv-->
  <div class="activity-block activity-block--light" id="atv">
    <div class="activity-img">
      <img
        src="https://placehold.co/600x400/png"
        alt="Guest riding an ATV along the beach shoreline"
        loading="lazy">
    </div>
    <div class="activity-content">
      <span class="activity-rate activity-rate--paid">Paid Activity</span>
      <h2 class="activity-title">ATV <em>Beach Ride</em></h2>
      <div class="activity-divider"></div>
      <p class="activity-desc">
        Tear across the full length of our beachfront on an all-terrain vehicle.
        It&rsquo;s the most exhilarating way to feel the wind and take in the shore
        &mdash; ideal for thrill-seekers and first-timers alike.
      </p>
      <p class="activity-desc">
        Helmets and basic safety gear are provided. No prior experience required.
        Guests under 18 must be accompanied by an adult.
      </p>
      <div class="activity-price">
        &#8369;1,600 <span class="activity-price-unit">/ hour</span>
      </div>
    </div>
  </div>

  <!--banana boat-->
  <div class="activity-block activity-block--sand activity-block--reverse" id="banana-boat">
    <div class="activity-img">
      <img
        src="https://placehold.co/600x400/png"
        alt="Guests on a banana boat being towed across the bay"
        loading="lazy">
    </div>
    <div class="activity-content">
      <span class="activity-rate activity-rate--paid">Paid Activity</span>
      <h2 class="activity-title">Banana <em>Boat Ride</em></h2>
      <div class="activity-divider"></div>
      <p class="activity-desc">
        Hold on tight as you skim across the bay on our inflatable banana boat.
        A classic crowd-pleaser that never gets old &mdash; equal parts screaming
        and laughing, every single time.
      </p>
      <p class="activity-desc">
        Suitable for all ages. Life vests are provided. Up to 6 guests per ride.
      </p>
      <div class="activity-price">
        &#8369;200 <span class="activity-price-unit">/ ride</span>
      </div>
    </div>
  </div>

  <!--dragon boat-->
  <div class="activity-block activity-block--dark" id="dragon-boat">
    <div class="activity-img">
      <img
        src="https://placehold.co/600x400/png"
        alt="Guests paddling a dragon boat on calm water"
        loading="lazy">
    </div>
    <div class="activity-content">
      <span class="activity-rate activity-rate--paid">Paid Activity</span>
      <h2 class="activity-title">Dragon <em>Boat</em></h2>
      <div class="activity-divider"></div>
      <p class="activity-desc">
        Paddle in rhythm with your group aboard a traditional dragon boat.
        It takes coordination, teamwork, and a little friendly competition &mdash;
        making it perfect for families, barkadas, and team outings.
      </p>
      <p class="activity-desc">
        Life vests provided. Best enjoyed in groups of 6 or more.
      </p>
      <div class="activity-price">
        &#8369;200 <span class="activity-price-unit">/ ride</span>
      </div>
    </div>
  </div>

  <!--free-->
  <section class="free-activities" aria-labelledby="free-heading">
    <div class="free-activities-inner">

      <div class="free-activities-header">
        <span class="section-tag">Complimentary for All Guests</span>
        <h2 class="section-heading" id="free-heading">Included in <em>Your Stay</em></h2>
        <div class="section-divider section-divider--center"></div>
        <p class="section-body section-body--center">
          No extra charge, no sign-up needed &mdash; just show up and enjoy.
        </p>
      </div>

      <div class="free-activities-grid">

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-volleyball"></i>
          </div>
          <div class="free-card-name">Beach Volleyball</div>
          <p class="free-card-desc">
            A regulation net right on the sand. Drop-in play is always open
            &mdash; whether you&rsquo;re picking teams or just rallying with friends.
          </p>
          <span class="free-card-badge">Complimentary</span>
        </div>

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-person-swimming"></i>
          </div>
          <div class="free-card-name">Inflatable Pool</div>
          <p class="free-card-desc">
            A relaxed splash zone set up by the shore &mdash; perfect for younger
            guests or anyone who prefers a calmer alternative to the open water.
          </p>
          <span class="free-card-badge">Complimentary</span>
        </div>

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <div class="free-card-name">Darts</div>
          <p class="free-card-desc">
            A classic game that suits any pace of day. Whether it&rsquo;s a
            friendly round after lunch or a full tournament with your group.
          </p>
          <span class="free-card-badge">Complimentary</span>
        </div>

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-chess-board"></i>
          </div>
          <div class="free-card-name">Board Games</div>
          <p class="free-card-desc">
            A selection of board games available at the main area &mdash;
            a great way to slow down, gather around a table, and just be present.
          </p>
          <span class="free-card-badge">Complimentary</span>
        </div>

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-ticket"></i>
          </div>
          <div class="free-card-name">Bingo</div>
          <p class="free-card-desc">
            Cards available upon request. A familiar favourite that brings guests
            together &mdash; easy to pick up, impossible not to enjoy.
          </p>
          <span class="free-card-badge">Price per card</span>
        </div>

        <div class="free-card">
          <div class="free-card-icon" aria-hidden="true">
            <i class="fa-solid fa-diamond"></i>
          </div>
          <div class="free-card-name">Card Games</div>
          <p class="free-card-desc">
            Standard card decks available for any game your group prefers.
            Available upon request, subject to availability.
          </p>
          <span class="free-card-badge">Complimentary</span>
        </div>

      </div>
    </div>
  </section>

  <section class="experiences-cta" aria-labelledby="cta-heading">
    <div class="experiences-cta-bg" role="presentation"></div>
    <div class="experiences-cta-content">
      <span class="experiences-cta-tag">Ready to Experience It?</span>
      <h2 class="experiences-cta-title" id="cta-heading">
        Your <em>Adventure</em> Awaits
      </h2>
      <p class="experiences-cta-sub">
        Every activity is available during your stay. Get in touch to ask about
        group rates, special arrangements, or to plan your visit.
      </p>
      <div class="experiences-cta-buttons">
        <a href="/pages/book.php" class="btn-primary">Book Your Stay</a>
        <a href="/pages/contact-us.php" class="btn-ghost--dark">Contact Us</a>
      </div>
    </div>
  </section>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>