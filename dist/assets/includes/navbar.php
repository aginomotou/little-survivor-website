<?php $activePage = $activePage ?? ''; ?>

<nav class="navbar" id="navbar">
  <div class="nav-left">
    <ul class="nav-links">
      <li><a href="<?= $base ?>pages/accommodations.php" class="<?= $activePage === 'accommodations' ? 'active' : '' ?>">Accommodations</a></li>
      <li><a href="<?= $base ?>pages/amenities.php" class="<?= $activePage === 'amenities' ? 'active' : '' ?>">Amenities</a></li>
      <li><a href="<?= $base ?>pages/experiences.php" class="<?= $activePage === 'experiences' ? 'active' : '' ?>">Experiences</a></li>
    </ul>
  </div>
  <div class="nav-logo">
    <a href="<?= $base ?>index.php" class="home" aria-label="Little Survivor Beach Resort — home">
      <img src="<?= $base ?>assets/images/logo.png" class="logo" alt="Little Survivor Beach Resort Logo">
    </a>
  </div>
  <div class="nav-right">
    <ul class="nav-links">
      <li><a href="<?= $base ?>pages/gallery.php" class="<?= $activePage === 'gallery' ? 'active' : '' ?>">Gallery</a></li>
      <li><a href="<?= $base ?>pages/about.php" class="<?= $activePage === 'about' ? 'active' : '' ?>">About</a></li>
      <li><a href="<?= $base ?>pages/contact-us.php" class="<?= $activePage === 'contact' ? 'active' : '' ?>">Contact Us</a></li>
      <li><a href="<?= $base ?>pages/book.php" class="btn-book">Book Now</a></li>
    </ul>
  </div>

  <button
    class="hamburger"
    id="hamburger"
    type="button"
    aria-label="Open menu"
    aria-controls="mobileMenu"
    aria-expanded="false"
  >
    <span></span>
    <span></span>
    <span></span>
  </button>
</nav>

<div class="mobile-menu" id="mobileMenu" aria-hidden="true">
  <ul>
    <li><a href="<?= $base ?>pages/accommodations.php" class="<?= $activePage === 'accommodations' ? 'active' : '' ?>">Accommodations</a></li>
    <li><a href="<?= $base ?>pages/amenities.php" class="<?= $activePage === 'amenities' ? 'active' : '' ?>">Amenities</a></li>
    <li><a href="<?= $base ?>pages/experiences.php" class="<?= $activePage === 'experiences' ? 'active' : '' ?>">Experiences</a></li>
    <li><a href="<?= $base ?>pages/gallery.php" class="<?= $activePage === 'gallery' ? 'active' : '' ?>">Gallery</a></li>
    <li><a href="<?= $base ?>pages/about.php" class="<?= $activePage === 'about' ? 'active' : '' ?>">About</a></li>
    <li><a href="<?= $base ?>pages/contact-us.php" class="<?= $activePage === 'contact' ? 'active' : '' ?>">Contact Us</a></li>
  </ul>
  <a href="<?= $base ?>pages/book.php" class="btn-book-mobile">Book Now</a>
</div>