<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Little Survivor Beach Resort</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Little Survivor Beach Resort">
  <link rel="icon" type="image/png" href="/assets/images/logo.png" sizes="16x16 32x32">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="/assets/css/global.css">
  <link rel="stylesheet" href="/assets/css/pages/home.css">
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
      <a href="#experience" class="btn-frosted">Explore the Resort</a>
    </div>
    
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
        <div class="reveal reveal-d2">
          <a href="pages/experiences.php" class="btn-outline">View All Experiences</a>
       </div>
      </div>

      <div class="exp-grid reveal">

        <div class="exp-card exp-card--large">
          <img src="https://placehold.co/600x400/png"
          alt="ATV Beach Ride" loading="lazy">
          <div class="exp-overlay"></div>
          <div class="exp-content">
            <span class="exp-tag">Paid &bull; &#8369 1,600/hour</span>
            <div class="exp-title">ATV Beach Ride</div>
            <p class="exp-desc">Tear across the shoreline on an all-terrain vehicle—the most 
              thrilling way to see the full length of our beachfront.
            </p>
          </div>
        </div>

        <div class="exp-card">
          <img src="https://placehold.co/600x400/png">
          <div class="exp-overlay"></div>
          <div class="exp-content">
            <span class="exp-tag">Paid &bull; &#8369 200/ride</span>
            <div class="exp-title">Banana Boat</div>
            <p class="exp-desc">
              Hold on and laugh—our banana boat is a classic crowd-pleaser skimming across the 
              bay with the whole family.
            </p>
          </div>
        </div>

        <div class="exp-card">
          <img src="https://placehold.co/600x400/png">
          <div class="exp-overlay"></div>
          <div class="exp-content">
            <span class="exp-tag">Paid &bull; &#8369 200/ride</span>
            <div class="exp-title">Dragon Boat</div>
            <p class="exp-desc">
              Paddle in sync with your crew aboard a traditional dragon boat—equal parts spectacle 
              and adventure on the water.
            </p>
          </div>
        </div>

        <div class="exp-card">
          <img src="https://placehold.co/600x400/png">
          <div class="exp-overlay"></div>
          <div class="exp-content">
            <span class="exp-tag">Lorem &bull; Lorem</span>
            <div class="exp-title">Lorem</div>
            <p class="exp-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>

        <div class="exp-card">
          <img src="https://placehold.co/600x400/png">
          <div class="exp-overlay"></div>
          <div class="exp-content">
            <span class="exp-tag">Lorem &bull; Lorem</span>
            <div class="exp-title">Lorem</div>
            <p class="exp-desc">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
              incididunt ut labore et dolore magna aliqua.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!--accommodations-->
  <section id="accommodations" aria-labelledby="acc-heading">
    <div class="acc-inner">

      <div class="acc-header reveal">
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
            <img src="https://placehold.co/600x400/png"
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
            <img src="https://placehold.co/600x400/png"
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
      <div class="acc-cta reveal">
        <a href="/pages/accommodations.php" class="btn-primary">View All Accommodations</a>
      </div>
    </div>
  </section>

  <!--amenities-->
 <section id="amenities" class="amen-section" aria-labelledby="amen-heading">
  <div class="amen-inner">
 
    <!-- Header — same pattern as other sections -->
    <div class="amen-header reveal">
      <span class="section-tag">What Awaits You</span>
      <h2 class="section-heading" id="amen-heading">Resort <em>Amenities</em></h2>
      <div class="section-divider section-divider--center"></div>
      <p class="section-body section-body--center">
        Every comfort considered, every space thoughtfully arranged &mdash;
        so all you focus on is the feeling of being exactly where you should be.
      </p>
    </div>
 
    <!-- Two-column split: indoor list left, outdoor photos right -->
    <div class="amen-body">
 
      <!-- Left: indoor amenities as a clean factsheet -->
      <div class="amen-indoors reveal">
        <div class="amen-indoors-label">
          <span class="section-tag">Common Areas</span>
          <h3 class="amen-indoors-title">Inside the <em>Resort</em></h3>
          <div class="section-divider"></div>
        </div>
        <ul class="amen-list" role="list">
          <li class="amen-list-item">
            <i class="fa-solid fa-music" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Entertainment Area with KTV</div>
              <p class="amen-list-desc">Open-air space for gatherings, celebrations, and late evenings.</p>
            </div>
          </li>
          <li class="amen-list-item">
            <i class="fa-solid fa-utensils" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Dining Area</div>
              <p class="amen-list-desc">Covered beachside space for sharing meals throughout the day.</p>
            </div>
          </li>
          <li class="amen-list-item">
            <i class="fa-solid fa-kitchen-set" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Shared Kitchen</div>
              <p class="amen-list-desc">Equipped with a chiller and freezer for guest use.</p>
            </div>
          </li>
          <li class="amen-list-item">
            <i class="fa-solid fa-shower" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Comfort Rooms</div>
              <p class="amen-list-desc">2 toilets with shower and 1 dedicated shower room.</p>
            </div>
          </li>
          <li class="amen-list-item">
            <i class="fa-solid fa-volleyball" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Beach Volleyball Court</div>
              <p class="amen-list-desc">Regulation net on the sand, complimentary for all guests.</p>
            </div>
          </li>
          <li class="amen-list-item">
            <i class="fa-solid fa-water" aria-hidden="true"></i>
            <div class="amen-list-content">
              <div class="amen-list-name">Private Beach</div>
              <p class="amen-list-desc">A quiet stretch of beachfront exclusively for guests.</p>
            </div>
          </li>
        </ul>
 
        <a href="/pages/amenities.php" class="btn-outline amen-explore-btn">
          View All Amenities
        </a>
      </div>
 
      <!-- Right: two stacked outdoor photos -->
      <div class="amen-photos reveal reveal-d1">
 
        <div class="amen-photo-item">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=800&q=85"
               alt="Private beach shoreline at Little Survivor Beach Resort"
               loading="lazy">
          <div class="amen-photo-caption">
            <span>Private Beach</span>
          </div>
        </div>
 
        <div class="amen-photo-item">
          <img src="https://images.unsplash.com/photo-1473116763249-2faaef81ccda?w=800&q=85"
               alt="Sunset over the beach"
               loading="lazy">
          <div class="amen-photo-caption">
            <span>Sunset Every Evening</span>
          </div>
        </div>
 
      </div>
 
    </div>
  </div>
</section>

  <!--gallery-->
  <section id="gallery" aria-labelledby="gal-heading">
    <div class="gal-inner">

      <div class="gal-header reveal">
        <span class="section-tag">Through The Lens</span>
        <h2 class="section-heading section-heading--light" id="gal-heading">A <em>Visual</em> Story</h2>
        <div class="section-divider section-divider--center section-divider--muted"></div>
        <p class="section-body section-body--center section-body--light">
          Every frame a memory waiting to be made—sunlit mornings, golden evenings,
          and the infinite blue between.
        </p>
      </div>

      <div class="gal-grid reveal" role="list" aria-label="Resort photo gallery">
        <div class="gal-item gal-item--featured" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-4" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-3" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-4" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-3" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-4" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-4" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

        <div class="gal-item gal-item--span-4" role="listitem">
          <img src="https://placehold.co/600x400/png"
          alt="Placeholder" loading="lazy">
        </div>

      </div>

      <div class="gal-cta reveal">
        <a href="/pages/gallery.php" class="btn-ghost">Explore Full Gallery</a>
      </div>

    </div>
  </section>

  <!--reviews-->
  <section id="reviews" aria-labelledby="rev-heading">
    <div class="rev-inner">

    <div class="rev-header reveal">
      <span class="section-tag">Guest Stories</span>
      <h2 class="section-heading" id="rev-heading">Words from <em>Our Guests</em></h2>
      <div class="section-divider section-divider--center"></div>
      <p class="section-body section-body--center">
        "The most honest measure of our resort is not found in our words, but in the
        memories our guests carry home.""
      </p>
    </div>

    <div class="rev-grid">
      <div class="rev-card reveal">
        <div class="rev-stars" aria-label="5 out of 5 stars"></div>
        <p class="rev-text">
          "Sulit ang stay dito. Hindi crowded. Comfortable, peaceful at may privacy. May clear water,
          amazing mountain view, powdery sand. Perfect for family and friends' getaway. Enjoy lahat,
          adults and kids. Will surely come back again."
        </p>
        <div class="rev-author">
          <img src="https://placehold.co/600x400/png"
            alt="Wilma F." class="rev-avatar" loading="lazy">
          <div>
            <div class="rev-name">Wilma F.</div>
            <div class="rev-origin">Antipolo, Rizal</div>
          </div>
        </div>
      </div>

      <div class="rev-card reveal reveal-d1">
        <div class="rev-stars" aria-label="5 out of 5 stars"></div>
        <p class="rev-text">
          "If you're looking for a place where your family can unplug, reconnect, and make beautiful
          memories together, Little Survivor Beach Resort is the perfect destination. We left with
          full hearts, sandy feet, and a promise to return next year!"
        </p>
        <div class="rev-author">
          <img src="https://placehold.co/600x400/png"
            alt="Ymak M." class="rev-avatar" loading="lazy">
          <div>
            <div class="rev-name">Ymak M.</div>
            <div class="rev-origin">Quezon City, Metro Manila</div>
          </div>
        </div>
      </div>

      <div class="rev-card reveal reveal-d2">
        <div class="rev-stars" aria-label="5 out of 5 stars"></div>
        <p class="rev-text">
          "Great place for family and barkada where you can relax and enjoy the scenery. We stayed
          for 3d2n and it was perfect!!! The place is well maintained and the owners are friendly too!
          They went over and beyond to make our stay enjoyable! I highly recommend this place!"
        </p>
        <div class="rev-author">
          <img src="https://placehold.co/600x400/png"
            alt="Roralaine T." class="rev-avatar" loading="lazy">
          <div>
            <div class="rev-name">Roralaine T.</div>
            <div class="rev-origin">Malolos, Bulacan</div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </section>

  <!--about-->
  <section id="about" aria-labelledby="about-heading">

    <div class="about-img">
      <img src="https://placehold.co/600x400/png"
        alt="Placeholder" loading="lazy">
    </div>

    <div class="about-content reveal">
      <span class="section-tag">Our Origin</span>
      <h2 class="section-heading section-heading--light" id="about-heading">
        The Little <em>Survivor</em> Story
      </h2>
      <div class="section-divider section-divider--muted"></div>
      <p class="about-body">
          Born from the resilient spirit of the island and the people who call it home,
          The Little Survivor is more than a resort—it is a testament to nature's quiet
          endurance and the human desire to belong somewhere truly beautiful.
      </p>
      <p class="about-body about-body--extended">
          Founded by a family who rebuilt after storms and planted roots deeper than any
          hardship, our resort carries the soul of the shore in every stone, every palm,
          every sunset we share with our guests.
      </p>
      <a href="/pages/about.php" class="btn-ghost">Discover Our Story</a>
    </div>

  </section>

  <!--contact-->
  <section id="contact" aria-labelledby="contact-heading">
    <div class="contact-inner">

      <div class="reveal">
        <span class="section-tag">Reach Out</span>
        <h2 class="section-heading" id="contact-heading">Plan Your <em>Escape</em></h2>
        <div class="section-divider"></div>
        <p class="section-body">
          Whether you're planning a honeymoon, a family retreat, or a private event on
          the shore, our team is ready to craft your perfect stay.
        </p>
        <div class="contact-details">
          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true">
              <i class="fa-solid fa-location-dot"></i>
            </div>
            <div class="contact-item-text">
              <h4>Location</h4>
              <p>Purok 8, Barangay Panan <br>Botolan, 2202 Zambales <br>Philippines</p>
            </div>
          </div>
        </div>

        <div class="contact-details">
          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="contact-item-text">
              <h4>Call or Text</h4>
              <a href="tel:+63 919 260 1511" aria-label="Call us at +63 919 260 1511">+63 919 260 1511</a>
            </div>
          </div>
        </div>

        <div class="contact-details">
          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true">
              <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="contact-item-text">
              <h4>Email</h4>
              <a href="mailto:littlesurvivorbeachresort@gmail.com" 
              aria-label="Email us at littlesurvivorbeachresort@gmail.com">
              littlesurvivorbeachresort@gmail.com</a>
            </div>
          </div>
        </div>
      </div>

      <!--forms-->
      <div class="reveal reveal-d1">
        <form
          class="inquiry-form"
          id="inquiryForm"
          action=""
          method="post"
          novalidate
          aria-label="Send an inquiry to the resort"
        >

          <div class="form-pot" aria-hidden="true">
          <label for="website"></label>
          <input
            type="text"
            id="website"
            name="website"
            tabindex="-1"
            autocomplete="off"
          >
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="firstName">First Name <span class="req" aria-hidden="true">*</span></label>
              <input
                type="text"
                id="firstName"
                name="firstName"
                autocomplete="given-name"
                required
                aria-required="true"
                maxlength="60"
                placeholder="Juan"
              >
            </div>
            <div class="form-group">
              <label for="lastName">Last Name <span class="req" aria-hidden="true">*</span></label>
              <input
                type="text"
                id="lastName"
                name="lastName"
                autocomplete="family-name"
                required
                aria-required="true"
                maxlength="60"
                placeholder="Dela Cruz"
              >
            </div>
          </div>

          <div class="form-group">
            <label for="email">Email Address <span class="req" aria-hidden="true">*</span></label>
            <input
              type="email"
              id="email"
              name="email"
              autocomplete="email"
              required
              aria-required="true"
              maxlength="254"
              placeholder="juandelacruz@gmail.com"
            >
          </div>

          <div class="form-group">
            <label for="inquiry-type">
              What can we help you with? <span class="req" aria-hidden="true">*</span>
            </label>
            <select
              id="inquiry-type"
              name="inquiry_type"
              required
              aria-required="true"
            >
              <option value="" disabled selected>Select a topic...</option>
              <option value="rates">Room Rates &amp; Availability</option>
              <option value="activities">Activities &amp; Experiences</option>
              <option value="group">Group or Event Booking</option>
              <option value="special">Special Occassions</option>
              <option value="other">General Question</option>
            </select>
          </div>

          <div class="form-group">
            <label for="message">Your Message <span class="req" aria-hidden="true">*</span></label>
            <textarea
              id="message"
              name="message"
              required
              aria-required="true"
              maxlength="1000"
              rows="5"
              placeholder="Tell us what you have in mind—we'd love to help make it happen."
            ></textarea>
            <span class="form-hint" id="charCount" aria-live="polite">0 / 1000</span>
          </div>

          <p class="form-privacy">
            Your details are used only to respond to your inquiry and will never be shared with
            third parties. See our Privacy Policy.
          </p>

          <div class="form-feedback" id="formFeedback" role="alert" aria-live="assertive"></div>

          <button type="submit" class="btn-submit" id="submitBtn">Send Message</button>
          </button>
        </form>
      </div>
    </div>

  </section>

  <footer>
    <!--footer-->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="/assets/js/main.js"></script>
</body>

</html>