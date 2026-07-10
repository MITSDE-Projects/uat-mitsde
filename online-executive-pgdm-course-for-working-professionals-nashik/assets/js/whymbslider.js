
document.addEventListener("DOMContentLoaded", function () {

  const slider = document.querySelector(".number_slider");
  const cards = document.querySelectorAll(".number_slider .number_card");
  const up = document.querySelector(".arrow_top");
  const down = document.querySelector(".arrow_bottom");

  if (!slider || cards.length === 0) return;

  let index = 0;
  const visible = 4;
  const gap = 15;

  function isMobile() {
    return window.innerWidth <= 600;
  }

  function getCardHeight() {
    return cards[0].offsetHeight + gap;
  }

  function scrollToIndex() {
    if (!isMobile()) return;

    slider.scrollTo({
      top: index * getCardHeight(),
      behavior: "smooth"
    });
  }

  // 👉 Arrow controls (mobile only)
  if (down && up) {
    down.addEventListener("click", () => {
      if (!isMobile()) return;

      if (index < cards.length - visible) {
        index++;
        scrollToIndex();
      }
    });

    up.addEventListener("click", () => {
      if (!isMobile()) return;

      if (index > 0) {
        index--;
        scrollToIndex();
      }
    });
  }

  // 👉 Set height ONLY on mobile
  function setHeight() {
    if (isMobile()) {
      let cardHeight = cards[0].offsetHeight;
      slider.style.height = (cardHeight * 4 + gap * 3) + "px";
      slider.style.overflow = "hidden";
    } else {
      slider.style.height = "auto"; // reset desktop
      slider.style.overflow = "visible";
    }
  }

  setHeight();
  window.addEventListener("resize", setHeight);

});
