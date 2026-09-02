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

// Scroll-reveal
(function () {
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('sr-visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });

  document.querySelectorAll('section:not(.hero)').forEach(function (el) {
    el.classList.add('sr');
    observer.observe(el);
  });
})();
