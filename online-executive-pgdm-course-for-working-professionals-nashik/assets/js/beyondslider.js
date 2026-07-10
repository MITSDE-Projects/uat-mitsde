//  const beyondTrack = document.querySelector('.beyondSlider-track');
//         const beyondCards = document.querySelectorAll('.beyondSlider-card');
//         const beyondDotsContainer = document.querySelector('.beyondSlider-dots');

//         let beyondIndex = 0;

//         // Create dots
//         beyondCards.forEach((_, i) => {
//             const dot = document.createElement('span');
//             dot.classList.add('beyondSlider-dot');
//             if (i === 0) dot.classList.add('active');
//             dot.addEventListener('click', () => moveBeyondSlider(i));
//             beyondDotsContainer.appendChild(dot);
//         });

//         const beyondDots = document.querySelectorAll('.beyondSlider-dot');

//         function moveBeyondSlider(index) {
//             beyondIndex = index;
//             const cardWidth = beyondCards[0].getBoundingClientRect().width + 20;
//             beyondTrack.style.transform = `translateX(-${cardWidth * index}px)`;

//             beyondDots.forEach(dot => dot.classList.remove('active'));
//             beyondDots[index].classList.add('active');
//         }



// const beyondTrack = document.querySelector('.beyondSlider-track');
// const beyondCards = document.querySelectorAll('.beyondSlider-card');
// const beyondDotsContainer = document.querySelector('.beyondSlider-dots');

// let beyondIndex = 0;
// let autoSlide;


// beyondCards.forEach((_, i) => {
//     const dot = document.createElement('span');
//     dot.classList.add('beyondSlider-dot');
//     if (i === 0) dot.classList.add('active');

//     dot.addEventListener('click', () => {
//         moveBeyondSlider(i);
//         resetAutoSlide();   
//     });

//     beyondDotsContainer.appendChild(dot);
// });

// const beyondDots = document.querySelectorAll('.beyondSlider-dot');


// function moveBeyondSlider(index) {
//     beyondIndex = index;

//     const cardWidth = beyondCards[0].getBoundingClientRect().width + 20;
//     beyondTrack.style.transform = `translateX(-${cardWidth * index}px)`;

//     beyondDots.forEach(dot => dot.classList.remove('active'));
//     beyondDots[beyondIndex].classList.add('active');
// }

// function startAutoSlide() {
//     autoSlide = setInterval(() => {
//         beyondIndex++;

//         if (beyondIndex >= beyondCards.length) {
//             beyondIndex = 0;  
//         }

//         moveBeyondSlider(beyondIndex);
//     }, 3000); 
// }


// function resetAutoSlide() {
//     clearInterval(autoSlide);
//     startAutoSlide();
// }

// startAutoSlide();

(function () {
  const beyondTrack = document.querySelector('.beyondSlider-track');
  const beyondDotsContainer = document.querySelector('.beyondSlider-dots');

  // Get ORIGINAL cards only
  const originalCards = Array.from(document.querySelectorAll('.beyondSlider-card'));
  const total = originalCards.length;

  let beyondIndex = 0;
  let autoSlide;
  let isJumping = false; // prevent double-tick during silent reset

  /* ===== CLONE CARDS ===== */
  originalCards.forEach(card => {
    const clone = card.cloneNode(true);
    clone.classList.add('clone');
    beyondTrack.appendChild(clone);
  });

  /* ===== CREATE DOTS (only for originals) ===== */
  originalCards.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.classList.add('beyondSlider-dot');
    if (i === 0) dot.classList.add('active');

    dot.addEventListener('click', () => {
      if (isJumping) return;
      beyondIndex = i;
      moveSlider(beyondIndex, true);
      resetAutoSlide();
    });

    beyondDotsContainer.appendChild(dot);
  });

  const beyondDots = document.querySelectorAll('.beyondSlider-dot');

  /* ===== MOVE ===== */
  function moveSlider(index, animate = true) {
    const cardWidth = originalCards[0].getBoundingClientRect().width + 20;
    beyondTrack.style.transition = animate ? 'transform 0.5s ease' : 'none';
    beyondTrack.style.transform = `translateX(-${cardWidth * index}px)`;

    // Update dots
    beyondDots.forEach(d => d.classList.remove('active'));
    beyondDots[index % total].classList.add('active');
  }

  /* ===== AUTO SLIDE ===== */
  function startAutoSlide() {
    autoSlide = setInterval(() => {
      if (isJumping) return;

      beyondIndex++;
      moveSlider(beyondIndex, true);

      // When we reach clones — silently reset
      if (beyondIndex >= total) {
        isJumping = true;
        setTimeout(() => {
          beyondIndex = 0;
          moveSlider(0, false); // no animation jump
          isJumping = false;
        }, 510); // slightly after transition ends
      }

    }, 3000);
  }

  function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
  }

  /* ===== INIT ===== */
  moveSlider(0, false);
  startAutoSlide();

})();