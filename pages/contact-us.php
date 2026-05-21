<?php
$activePage = 'contact';
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

  <section class="hero" id="hero" aria-labelledby="contact-hero-title">

    <div class="contact-hero-bg hero-bg--contact" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">We&rsquo;d Love to Hear from You</p>
      <h1 class="hero-title" id="contact-hero-title">Get in <em>Touch</em></h1>
      <p class="hero-sub">
        Whether you have a question, a special request, or you&rsquo;re ready to
        start planning &mdash; our team is here and happy to help.
      </p>
      <a href="#" class="btn-frosted">Send Us a Message</a>
    </div>
  </section>

  <section class="contact-page" aria-labelledby="form-heading">
    <div class="contact-page-inner">

      <div class="">
        <span class="section-tag">Send a Message</span>
        <h2 class="section-heading" id="form-heading">We <em>Listen</em></h2>
        <div class="section-divider"></div>
        <p class="section-body">
          Not ready to book yet? Ask us anything &mdash; about rates, activities,
          getting here, or planning a special occasion. We&rsquo;ll get back to you
          within 24&nbsp;hours.
        </p>

        <form
          class="inquiry-form"
          id="inquiryForm"
          action=""
          method="post"
          novalidate
          aria-label="Send an inquiry to the resort">

          <div class="form-pot" aria-hidden="true">
            <label for="website"></label>
            <input
              type="text"
              id="website"
              name="website"
              tabindex="-1"
              autocomplete="off">
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
                placeholder="Juan">
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
                placeholder="Dela Cruz">
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
              placeholder="juandelacruz@gmail.com">
          </div>

          <div class="form-group">
            <label for="inquiry-type">
              What can we help you with? <span class="req" aria-hidden="true">*</span>
            </label>
            <select
              id="inquiry-type"
              name="inquiry_type"
              required
              aria-required="true">
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
              placeholder="Tell us what you have in mind—we'd love to help make it happen."></textarea>
            <span class="form-hint" id="charCount" aria-live="polite">0 / 1000</span>
          </div>

          <p class="form-privacy">
            Your details are used only to respond to your inquiry and will never be shared with
            third parties. See our Privacy Policy.
          </p>

          <div class="form-feedback" id="formFeedback" role="alert" aria-live="assertive"></div>

          <button type="submit" class="btn-submit" id="submitBtn">Send Message</button>
        </form>
      </div>

      <div class="">
        <span class="section-tag">Where to Find Us</span>
        <h2 class="section-heading">Our <em>Location</em></h2>
        <div class="section-divider"></div>
        <div class="map-wrapper">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3850.1020314938623!2d120.02013417301336!3d15.207581685353881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33942f1070647bc9%3A0xfb5727be3149caba!2sLittle%20Survivor%20Beach%20Resort!5e0!3m2!1sen!2sph!4v1779376457872!5m2!1sen!2sph"
            title="Little Survivor Beach Resort on Google Maps"
            width="600" height="450"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen>
          </iframe>
        </div>

        <div class="location-details">
          <div class="location-item">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div>
            <h4>Address</h4>
            <p>Pag-asa Beach, Coron Island<br>Palawan, Philippines 5316</p>
          </div>

          <div class="location-item">
            <div class="location-icon-wrap" aria-hidden="true">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div>
              <h4>Call or Text</h4>
              <a href="tel:+639178882024" aria-label="Call 0917 888 2024">0917 888 2024</a>
              <a href="tel:+639178882025" aria-label="Call 0917 888 2025">0917 888 2025</a>
            </div>

            <div class="location-item">
              <div class="location-icon-wrap" aria-hidden="true">
                <i class="fa-solid fa-clock"></i>
              </div>
              <div>
                <h4>Operating Hours</h4>
                <table class="hours-table" aria-label="Resort operating hours">
                  <tbody>
                    <tr>
                      <td>Front Desk</td>
                      <td>Open daily, 7:00am &ndash; 9:00pm</td>
                    </tr>
                    <tr>
                      <td>Check-In</td>
                      <td>2:00pm onwards</td>
                    </tr>
                    <tr>
                      <td>Check-Out</td>
                      <td>Until 12:00nn</td>
                    </tr>
                    <tr>
                      <td>Activities</td>
                      <td>8:00am &ndash; 5:00pm daily</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="location-item">
            <div class="location-icon-wrap" aria-hidden="true">
              <i class="fa-solid fa-square-parking"></i>
            </div>
            <div>
              <h4>Parking</h4>
              <p>Free on-site parking available for all guests.</p>
            </div>
          </div>

        </div>
        
      </div>
    </div>
    </div>
  </section>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>
</body>

</html>