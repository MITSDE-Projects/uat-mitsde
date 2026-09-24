document.addEventListener("DOMContentLoaded", () => {
  // ── Hamburger mobile menu ──────────────────────────────────────
  const hamburger = document.querySelector(".hamburger");
  const mobileMenu = document.getElementById("mobileMenu");
  const navbar = document.querySelector(".navbar");

  function setMenuTop() {
    if (!navbar) return;
    const bottom = navbar.getBoundingClientRect().bottom;
    document.documentElement.style.setProperty(
      "--mobile-menu-top",
      bottom + 8 + "px",
    );
  }

  if (hamburger && mobileMenu) {
    setMenuTop();
    window.addEventListener("resize", setMenuTop);

    hamburger.addEventListener("click", (e) => {
      e.stopPropagation();
      const isOpen = mobileMenu.classList.toggle("open");
      hamburger.classList.toggle("open", isOpen);
    });

    // Close when any menu link or button is clicked
    mobileMenu.querySelectorAll("a, button").forEach((el) => {
      el.addEventListener("click", () => {
        mobileMenu.classList.remove("open");
        hamburger.classList.remove("open");
      });
    });

    // Close when clicking outside
    document.addEventListener("click", (e) => {
      if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
        mobileMenu.classList.remove("open");
        hamburger.classList.remove("open");
      }
    });
  }

});

// Country Code selection
$(".country-code").intlTelInput({
  initialCountry: "in",
  separateDialCode: true,
});

// faq accordion
(function () {
  document.querySelectorAll(".faq-q").forEach(function (btn) {
    btn.addEventListener("click", function () {
      var item = btn.closest(".faq-item");
      var isOpen = item.classList.contains("is-open");
      document.querySelectorAll(".faq-item").forEach(function (i) {
        i.classList.remove("is-open");
      });
      if (!isOpen) item.classList.add("is-open");
      btn.setAttribute("aria-expanded", !isOpen);
    });
  });
})();


// Specialisation pill switcher
(function () {
  var pills = document.querySelectorAll('.ph-spec-pill');
  pills.forEach(function (pill) {
    pill.addEventListener('click', function () {
      pills.forEach(function (p) { p.classList.remove('is-active'); });
      pill.classList.add('is-active');
    });
  });
})();

// Sticky pill nav — scrollspy. Highlights the pill matching the section
// currently in view, and keeps it scrolled into view within the pill strip
// itself (not just the page) when it changes on scroll. No-ops entirely on
// pages without a .ph-specs-wrap, so it costs nothing there.
(function () {
  var wraps = document.querySelectorAll('.ph-specs-wrap');
  if (!wraps.length) return;

  wraps.forEach(function (wrap) {
    var pills = wrap.querySelectorAll('.ph-spec-pill');
    var sections = [];
    pills.forEach(function (p) {
      var a = p.closest('a');
      var id = a && (a.getAttribute('href') || '').replace('#', '');
      var el = id && document.getElementById(id);
      if (el) sections.push({ el: el, pill: p });
    });
    if (!sections.length) return;

    var activePill = null;
    function onScroll() {
      var scrollY = window.scrollY + 140;
      var current = sections[0];
      sections.forEach(function (s) {
        if (scrollY >= s.el.offsetTop) current = s;
      });
      pills.forEach(function (p) { p.classList.remove('is-active'); });
      current.pill.classList.add('is-active');
      if (current.pill !== activePill) {
        activePill = current.pill;
        // Bring the newly-active pill into view within the horizontally
        // scrollable pill strip — only on real change, so this doesn't
        // fight the user's own manual swiping of the pills.
        activePill.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
      }
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  });
})();

// Scroll-reveal
(function () {
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('sr-visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0 });

  document.querySelectorAll('section:not(.hero)').forEach(function (el) {
    el.classList.add('sr');
    observer.observe(el);
  });
})();
