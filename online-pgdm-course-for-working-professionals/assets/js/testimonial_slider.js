
// const stepTrack = document.querySelector('.stepTestimonialSlider-track');
// const stepSlides = document.querySelectorAll('.stepTestimonialSlider-slide');
// const stepDotsContainer = document.querySelector('.stepTestimonialSlider-dots');

// let stepIndex = 0;
// let stepAutoSlide;

// stepSlides.forEach((_, i) => {
//   const dot = document.createElement('span');
//   dot.classList.add('stepTestimonialSlider-dot');
//   if (i === 0) dot.classList.add('active');

//   dot.addEventListener('click', () => {
//     moveStepSlider(i);
//     resetAutoSlide();  
//   });

//   stepDotsContainer.appendChild(dot);
// });

// const stepDots = document.querySelectorAll('.stepTestimonialSlider-dot');


// function moveStepSlider(index) {
//   stepIndex = index;
//   stepTrack.style.transform = `translateX(-${index * 100}%)`;

//   stepDots.forEach(dot => dot.classList.remove('active'));
//   stepDots[stepIndex].classList.add('active');
// }


// function startAutoSlide() {
//   stepAutoSlide = setInterval(() => {
//     stepIndex++;

//     if (stepIndex >= stepSlides.length) {
//       stepIndex = 0; 
//     }

//     moveStepSlider(stepIndex);
//   }, 3000); 
// }

// function resetAutoSlide() {
//   clearInterval(stepAutoSlide);
//   startAutoSlide();
// }


// startAutoSlide();


(function () {
  const stepTrack = document.querySelector('.stepTestimonialSlider-track');
  const stepDotsContainer = document.querySelector('.stepTestimonialSlider-dots');

  // Get ORIGINAL slides only
  const originalSlides = Array.from(document.querySelectorAll('.stepTestimonialSlider-slide'));
  const total = originalSlides.length;

  let stepIndex = 0;
  let stepAutoSlide;
  let isJumping = false;

  /* ===== CLONE SLIDES ===== */
  originalSlides.forEach(slide => {
    const clone = slide.cloneNode(true);
    clone.classList.add('clone');
    stepTrack.appendChild(clone);
  });

  /* ===== CREATE DOTS (only for originals) ===== */
  originalSlides.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.classList.add('stepTestimonialSlider-dot');
    if (i === 0) dot.classList.add('active');

    dot.addEventListener('click', () => {
      if (isJumping) return;
      stepIndex = i;
      moveStepSlider(stepIndex, true);
      resetAutoSlide();
    });

    stepDotsContainer.appendChild(dot);
  });

  const stepDots = document.querySelectorAll('.stepTestimonialSlider-dot');

  /* ===== MOVE ===== */
  function moveStepSlider(index, animate = true) {
    stepTrack.style.transition = animate ? 'transform 0.5s ease' : 'none';
    stepTrack.style.transform = `translateX(-${index * 100}%)`;

    // Update dots
    stepDots.forEach(d => d.classList.remove('active'));
    stepDots[index % total].classList.add('active');
  }

  /* ===== AUTO SLIDE ===== */
  function startAutoSlide() {
    stepAutoSlide = setInterval(() => {
      if (isJumping) return;

      stepIndex++;
      moveStepSlider(stepIndex, true);

      // When we reach clones — silently reset
      if (stepIndex >= total) {
        isJumping = true;
        setTimeout(() => {
          stepIndex = 0;
          moveStepSlider(0, false); // no animation jump
          isJumping = false;
        }, 510);
      }

    }, 3000);
  }

  function resetAutoSlide() {
    clearInterval(stepAutoSlide);
    startAutoSlide();
  }

  /* ===== INIT ===== */
  moveStepSlider(0, false);
  startAutoSlide();

})();