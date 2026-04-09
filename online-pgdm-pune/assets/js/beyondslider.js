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



const beyondTrack = document.querySelector('.beyondSlider-track');
const beyondCards = document.querySelectorAll('.beyondSlider-card');
const beyondDotsContainer = document.querySelector('.beyondSlider-dots');

let beyondIndex = 0;
let autoSlide;

/* ===== CREATE DOTS ===== */
beyondCards.forEach((_, i) => {
    const dot = document.createElement('span');
    dot.classList.add('beyondSlider-dot');
    if (i === 0) dot.classList.add('active');

    dot.addEventListener('click', () => {
        moveBeyondSlider(i);
        resetAutoSlide();   // 🔥 reset timer on click
    });

    beyondDotsContainer.appendChild(dot);
});

const beyondDots = document.querySelectorAll('.beyondSlider-dot');

/* ===== MOVE SLIDER ===== */
function moveBeyondSlider(index) {
    beyondIndex = index;

    const cardWidth = beyondCards[0].getBoundingClientRect().width + 20;
    beyondTrack.style.transform = `translateX(-${cardWidth * index}px)`;

    beyondDots.forEach(dot => dot.classList.remove('active'));
    beyondDots[beyondIndex].classList.add('active');
}

/* ===== AUTO SLIDE ===== */
function startAutoSlide() {
    autoSlide = setInterval(() => {
        beyondIndex++;

        if (beyondIndex >= beyondCards.length) {
            beyondIndex = 0;  // 🔁 loop
        }

        moveBeyondSlider(beyondIndex);
    }, 3000); // ⏱ change speed here (3 sec)
}

/* ===== RESET AUTO SLIDE ON DOT CLICK ===== */
function resetAutoSlide() {
    clearInterval(autoSlide);
    startAutoSlide();
}

/* ===== INIT ===== */
startAutoSlide();
