
document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".bigger_slider");
  const cards = document.querySelectorAll(".bigger_slider .bigger_sec_card");
  const indicators = document.querySelectorAll(".bigger_slider_indicator span");

  if (!slider) return;

  function updateIndicator() {
    let sliderCenter = slider.scrollLeft + (slider.offsetWidth / 2);

    let closestIndex = 0;
    let closestDistance = Infinity;

    cards.forEach((card, i) => {
      let cardCenter = card.offsetLeft + (card.offsetWidth / 2);
      let distance = Math.abs(sliderCenter - cardCenter);

      if (distance < closestDistance) {
        closestDistance = distance;
        closestIndex = i;
      }
    });

    indicators.forEach(dot => dot.classList.remove("active"));
    if (indicators[closestIndex]) {
      indicators[closestIndex].classList.add("active");
    }
  }

  // 👉 Scroll update
  slider.addEventListener("scroll", updateIndicator);

  // 👉 Click to slide
  indicators.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      cards[i].scrollIntoView({
        behavior: "smooth",
        inline: "center"
      });
    });
  });

});
