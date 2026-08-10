//navbar
var navbar = document.getElementById("navbar");

if (navbar) {
  window.addEventListener("scroll", function () {
      if (window.scrollY > 60) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    },
    { passive: true },
  );
}

var revealElements = document.querySelectorAll('.reveal');
 
if (revealElements.length > 0) {
  if ('IntersectionObserver' in window) {
 
    var revealObserver = new IntersectionObserver(function (entries) {
      
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');

          revealObserver.unobserve(entry.target);
        }
      });
 
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    });
 
    revealElements.forEach(function (el) {
      revealObserver.observe(el);
    });
 
  } else {
    revealElements.forEach(function (el) {
      el.classList.add('visible');
    });
  }
}

//faq
var faqButtons = document.querySelectorAll(".faq-question");

faqButtons.forEach(function (btn) {
  btn.addEventListener("click", function () {
    var item = btn.parentElement;
    var answer = item.querySelector(".faq-answer");
    var isOpen = item.classList.contains("open");

    var openItem = document.querySelector(".faq-item.open");

    if (openItem) {
      openItem.classList.remove("open");
      openItem
        .querySelector(".faq-question")
        .setAttribute("aria-expanded", "false");
      openItem.querySelector(".faq-answer").setAttribute("aria-hidden", "true");
    }

    if (!isOpen) {
      item.classList.add("open");
      btn.setAttribute("aria-expanded", "true");
      answer.setAttribute("aria-hidden", "false");
    }
  });
});

//gallery
var filterButtons = document.querySelectorAll(".gallery-filter-btn");
var galleryItems = document.querySelectorAll(".gallery-item[data-category]");
var galleryEmpty = document.getElementById("galleryEmpty");

var lightbox = document.getElementById("lightbox");
var lightboxImg = document.getElementById("lightboxImg");
var lightboxCaption = document.getElementById("lightboxCaption");
var lightboxCounter = document.getElementById("lightboxCounter");
var lightboxClose = document.getElementById("lightboxClose");
var lightboxPrev = document.getElementById("lightboxPrev");
var lightboxNext = document.getElementById("lightboxNext");

var visibleItems = [];
var currentIndex = 0;

//for filtering by category  
filterButtons.forEach(function (btn) {
  btn.addEventListener("click", function () {
    filterButtons.forEach(function (b) {
      b.classList.remove("active");
      b.setAttribute("aria-pressed", "false");
    });
    btn.classList.add("active");
    btn.setAttribute("aria-pressed", "true");

    var filter = btn.getAttribute("data-filter");

    galleryItems.forEach(function (item) {
      if (filter === "all" || item.getAttribute("data-category") === filter) {
        item.classList.remove("hidden");
      } else {
        item.classList.add("hidden");
      }
    });

    rebuildVisibleItems();

    var anyVisible = visibleItems.length > 0;
    galleryEmpty.classList.toggle("visible", !anyVisible);
  });
});

function rebuildVisibleItems () {
  visibleItems = [];
  galleryItems.forEach(function (item) {
    if (!item.classList.contains('hidden')) {
      visibleItems.push(item);
    }
  });
}
 
rebuildVisibleItems();

function openLightbox (index) {
  currentIndex = index;
  var item     = visibleItems[currentIndex];
  var img      = item.querySelector('img');
  var caption  = item.querySelector('.gallery-item-caption');
 
  lightboxImg.src = img.src;
  lightboxImg.alt = img.alt;
  lightboxCaption.textContent = caption ? caption.textContent : '';
  updateCounter();
 
  lightbox.classList.add('active');
  lightbox.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
 
  lightboxClose.focus();
}

function closeLightbox () {
  lightbox.classList.remove('active');
  lightbox.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
  lightboxImg.src = '';
 
  if (visibleItems[currentIndex]) {
    visibleItems[currentIndex].focus();
  }
}

function showPrev () {
  currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length;
  openLightbox(currentIndex);
}
 
function showNext () {
  currentIndex = (currentIndex + 1) % visibleItems.length;
  openLightbox(currentIndex);
}
 
function updateCounter () {
  lightboxCounter.textContent = (currentIndex + 1) + ' / ' + visibleItems.length;
}

galleryItems.forEach(function (item, index) {
  item.addEventListener('click', function () {
    var visibleIndex = visibleItems.indexOf(item);
    if (visibleIndex !== -1) {
      openLightbox(visibleIndex);
    }
  });
 
  item.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      var visibleIndex = visibleItems.indexOf(item);
      if (visibleIndex !== -1) {
        openLightbox(visibleIndex);
      }
    }
  });
});

lightboxClose.addEventListener('click', closeLightbox);
lightboxPrev.addEventListener('click', showPrev);
lightboxNext.addEventListener('click', showNext);
 
lightbox.addEventListener('click', function (e) {
  if (e.target === lightbox) {
    closeLightbox();
  }
});
 
document.addEventListener('keydown', function (e) {
  if (!lightbox.classList.contains('active')) return;
 
  if (e.key === 'Escape')      { closeLightbox(); }
  if (e.key === 'ArrowLeft')   { showPrev(); }
  if (e.key === 'ArrowRight')  { showNext(); }
});