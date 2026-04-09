
const stepTrack = document.querySelector('.stepTestimonialSlider-track');
const stepSlides = document.querySelectorAll('.stepTestimonialSlider-slide');
const stepDotsContainer = document.querySelector('.stepTestimonialSlider-dots');

let stepIndex = 0;
let stepAutoSlide;

/* ===== CREATE DOTS ===== */
stepSlides.forEach((_, i) => {
  const dot = document.createElement('span');
  dot.classList.add('stepTestimonialSlider-dot');
  if (i === 0) dot.classList.add('active');

  dot.addEventListener('click', () => {
    moveStepSlider(i);
    resetAutoSlide();   // 🔥 reset timer
  });

  stepDotsContainer.appendChild(dot);
});

const stepDots = document.querySelectorAll('.stepTestimonialSlider-dot');

/* ===== MOVE SLIDER ===== */
function moveStepSlider(index) {
  stepIndex = index;
  stepTrack.style.transform = `translateX(-${index * 100}%)`;

  stepDots.forEach(dot => dot.classList.remove('active'));
  stepDots[stepIndex].classList.add('active');
}

/* ===== AUTO SLIDE ===== */
function startAutoSlide() {
  stepAutoSlide = setInterval(() => {
    stepIndex++;

    if (stepIndex >= stepSlides.length) {
      stepIndex = 0; // 🔁 loop
    }

    moveStepSlider(stepIndex);
  }, 3000); // ⏱ change speed here
}

/* ===== RESET TIMER ===== */
function resetAutoSlide() {
  clearInterval(stepAutoSlide);
  startAutoSlide();
}

/* ===== INIT ===== */
startAutoSlide();
