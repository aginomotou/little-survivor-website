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

//hamburger / mobile menu
var hamburger  = document.getElementById("hamburger");
var mobileMenu = document.getElementById("mobileMenu");

if (hamburger && mobileMenu) {
  function setMenu (open) {
    hamburger.classList.toggle("open", open);
    hamburger.setAttribute("aria-expanded", String(open));
    hamburger.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    mobileMenu.classList.toggle("open", open);
    mobileMenu.setAttribute("aria-hidden", String(!open));
    document.body.style.overflow = open ? "hidden" : "";
  }

  hamburger.addEventListener("click", function () {
    setMenu(!mobileMenu.classList.contains("open"));
  });

  //close the menu when a link is chosen
  mobileMenu.querySelectorAll("a").forEach(function (link) {
    link.addEventListener("click", function () {
      setMenu(false);
    });
  });

  //close on Escape and return focus to the button
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && mobileMenu.classList.contains("open")) {
      setMenu(false);
      hamburger.focus();
    }
  });
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

//accommodations
var thumbs = document.querySelectorAll('.acc-gallery-thumb');
 
thumbs.forEach(function (thumb) {
  thumb.addEventListener('click', function () {
    switchImage(thumb);
  });
 
  /* Keyboard support — Enter or Space also triggers the switch */
  thumb.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      switchImage(thumb);
    }
  });
});
 
 
function switchImage(thumb) {
 
  /* Get the target main image id, new src, and new alt from data attributes */
  var targetId = thumb.getAttribute('data-target');
  var newSrc   = thumb.getAttribute('data-src');
  var newAlt   = thumb.getAttribute('data-alt');
 
  var mainImg  = document.getElementById(targetId);
  if (!mainImg) return;
 
  /* Remove active state from all thumbs in the same gallery group */
  var siblingThumbs = thumb.closest('.acc-gallery-thumbs').querySelectorAll('.acc-gallery-thumb');
 
  siblingThumbs.forEach(function (sib) {
    sib.classList.remove('active');
  });
 
  /* Mark clicked thumb as active */
  thumb.classList.add('active');
 
  /* Fade the main image out, swap src, fade back in */
  mainImg.classList.add('switching');
 
  /* Wait for fade-out (matches the CSS transition duration of 0.35s) */
  setTimeout(function () {
    mainImg.src = newSrc;
    mainImg.alt = newAlt;
 
    /* Once the new image loads, fade it back in */
    mainImg.onload = function () {
      mainImg.classList.remove('switching');
    };
 
    /* Fallback: remove class after 0.5s even if onload doesn't fire */
    setTimeout(function () {
      mainImg.classList.remove('switching');
    }, 500);
 
  }, 350);
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

//gallery and lightbox markup only exist on the gallery page; skip this block
//elsewhere so the inquiry form handler below is always registered
if (lightbox) {

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

}

//inquiry form: live character counter + AJAX submission
var inquiryForm = document.getElementById("inquiryForm");

if (inquiryForm) {
  // The site root is derived from this script tag's own src ("<base>/assets/js/main.js").
  // This works on every page regardless of pathname (e.g. after Vercel redirects
  // /pages/x.php to /pages/x) and under subpath deployments.
  var scripts = document.getElementsByTagName("script");
  var thisScript = scripts[scripts.length - 1];
  var scriptSrc = thisScript ? thisScript.src : "";
  var SCRIPT_MARKER = "/assets/js/main.js";
  var siteBase = scriptSrc.indexOf(SCRIPT_MARKER) !== -1
    ? scriptSrc.substring(0, scriptSrc.indexOf(SCRIPT_MARKER))
    : "";
  var API_ENDPOINT = window.location.origin + siteBase +
    "/backend/public/api/inquiries";

  var messageInput = document.getElementById("message");
  var charCount    = document.getElementById("charCount");
  var submitBtn    = document.getElementById("submitBtn");
  var formFeedback = document.getElementById("formFeedback");

  var DEFAULT_BTN_TEXT = submitBtn ? submitBtn.textContent : "Send Message";

  function showFeedback (message, isError) {
    formFeedback.textContent = message;
    formFeedback.classList.add("visible");
    formFeedback.classList.toggle("is-error", !!isError);
    formFeedback.classList.toggle("is-success", !isError);
  }

  function clearFeedback () {
    formFeedback.classList.remove("visible", "is-error", "is-success");
  }

  function setLoading (loading) {
    submitBtn.disabled = loading;
    submitBtn.textContent = loading ? "Sending..." : DEFAULT_BTN_TEXT;
  }

  //character counter
  if (messageInput && charCount) {
    function updateCharCount () {
      charCount.textContent = messageInput.value.length + " / 1000";
    }
    messageInput.addEventListener("input", updateCharCount);
    updateCharCount();
  }

  function buildPayload () {
    var honeypot = document.getElementById("website");
    return {
      first_name: document.getElementById("firstName").value.trim(),
      last_name:  document.getElementById("lastName").value.trim(),
      email:      document.getElementById("email").value.trim(),
      topic:      document.getElementById("inquiry-type").value,
      message:    document.getElementById("message").value.trim(),
      website:    honeypot ? honeypot.value : ""
    };
  }

  inquiryForm.addEventListener("submit", function (e) {
    e.preventDefault();
    clearFeedback();

    //honeypot: silently ignore bot submissions
    var honeypot = document.getElementById("website");
    if (honeypot && honeypot.value) {
      showFeedback("Thank you! Your inquiry has been received.", false);
      inquiryForm.reset();
      return;
    }

    setLoading(true);

    fetch(API_ENDPOINT, {
      method: "POST",
      headers: {
        "Accept": "application/json",
        "Content-Type": "application/json"
      },
      body: JSON.stringify(buildPayload())
    })
      .then(function (response) {
        return response.json().catch(function () {
          return null;
        }).then(function (data) {
          return { ok: response.ok, status: response.status, data: data };
        });
      })
      .then(function (result) {
        if (result.ok && result.data && result.data.message) {
          showFeedback(result.data.message, false);
          inquiryForm.reset();
          if (charCount) { updateCharCount(); }
          return;
        }

        if (result.status === 422 && result.data && result.data.errors) {
          var firstError = Object.values(result.data.errors)[0];
          var message    = Array.isArray(firstError) ? firstError[0] : firstError;
          showFeedback(message || "Please check the form and try again.", true);
          return;
        }

        if (result.status === 429) {
          showFeedback("You've sent too many messages. Please wait about a minute and try again.", true);
          return;
        }

        showFeedback("Something went wrong on our end. Please try again later.", true);
      })
      .catch(function () {
        showFeedback("We couldn't reach the server. Please check your connection and try again.", true);
      })
      .finally(function () {
        setLoading(false);
      });
  });
}