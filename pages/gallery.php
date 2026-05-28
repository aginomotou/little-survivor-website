<?php
$activePage = 'gallery';
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

  <section class="hero" id="hero" aria-labelledby="gallery-hero-title">
    <div class="hero-bg--gallery" role="presentation"></div>
    <div class="hero-overlay" role="presentation"></div>

    <div class="hero-content">
      <p class="hero-eyebrow">Through the Lens</p>
      <h1 class="hero-title" id="gallery-hero-title">A Visual <em>Story</em></h1>
      <p class="hero-sub">
        Every frame a memory waiting to be made &mdash; sunlit mornings,
        golden evenings, and the infinite blue between.
      </p>
      <a href="#gallery-section" class="btn-frosted">Send Us a Message</a>
    </div>
  </section>

  <section class="gallery-section" id="gallery-section" aria-labelledby="gallery-heading">
    <div class="gallery-inner">

      <h2 class="sr-only" id="gallery-heading">Resort Photo Gallery</h2>

      <nav class="gallery-filter-bar" aria-label="Filter gallery by category">

        <button class="gallery-filter-btn active" data-filter="all" aria-pressed="true">All</button>

        <button class="gallery-filter-btn" data-filter="beach" aria-pressed="false">The Beach</button>

        <button class="gallery-filter-btn" data-filter="accommodation" aria-pressed="false">Accommodation</button>

        <button class="gallery-filter-btn" data-filter="activities" aria-pressed="false">Activities</button>

        <button class="gallery-filter-btn" data-filter="dining" aria-pressed="false">Dining</button>

      </nav>

      <div class="gallery-grid" id="galleryGrid" role="list" aria-label="Gallery photos">

        <!--beach-->
        <div class="gallery-item" data-category="beach" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">The Beach</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="beach" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">The Beach</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="beach" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">The Beach</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="beach" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">The Beach</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="beach" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">The Beach</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <!--accommodations-->
        <div class="gallery-item" data-category="accommodation" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Accommodation</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="accommodation" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Accommodation</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="accommodation" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Accommodation</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="accommodation" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Accommodation</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <!--activities-->
        <div class="gallery-item" data-category="activities" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Activities</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="activities" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Activities</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="activities" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Activities</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="activities" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Activities</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <!--dining-->
        <div class="gallery-item" data-category="dining" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Dining</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="dining" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Dining</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-item" data-category="dining" role="listitem" tabindex="0" aria-label="Open photo: ">
          <img src="https://placehold.co/600x400/png" alt="" loading="lazy">
          <div class="gallery-item-overlay">
            <span class="gallery-item-caption">Dining</span>
          </div>
          <div class="gallery-item-zoom" aria-hidden="true">
            <i class="fa-solid fa-magnifying-glass-plus"></i>
          </div>
        </div>

        <div class="gallery-empty" id="galleryEmpty" aria-live="polite">
          <p>No photos in this category yet.</p>
        </div>

      </div>
    </div>

  </section>

  <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Photo viewer" aria-hidden="true">

    <button class="lightbox-close" id="lightboxClose" aria-label="Close photo viewer">
      <i class="fa-solid fa-xmark" aria-hidden="true"></i>
    </button>

    <button class="lightbox-prev" id="lightboxPrev" aria-label="Previous photo">
      <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
    </button>

    <div class="lightbox-img-wrap">
      <img id="lightboxImg" src="" alt="">
      <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>

    <button class="lightbox-next" id="lightboxNext"
      aria-label="Next photo"> <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
    </button>

    <div class="lightbox-counter" id="lightboxCounter" aria-live="polite"></div>

  </div>

  <footer>
    <?php include $base . '/assets/includes/footer.php'; ?>
  </footer>

  <script src="<?= $base ?>assets/js/main.js"></script>
</body>

</html>