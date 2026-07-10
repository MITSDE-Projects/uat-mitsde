// document.addEventListener("DOMContentLoaded", function () {

//   const slides = document.querySelectorAll(".mobileTestimonial-slide");
//   const dots = document.querySelectorAll(".mobileTestimonial-indicator span");

//   let index = 0;

//   function showSlide(i) {
//     slides.forEach(s => s.classList.remove("active"));
//     dots.forEach(d => d.classList.remove("active"));

//     slides[i].classList.add("active");
//     dots[i].classList.add("active");
//   }

//   dots.forEach((dot, i) => {
//     dot.addEventListener("click", () => {
//       index = i;
//       showSlide(index);
//     });
//   });

// });




document.addEventListener("DOMContentLoaded", function () {

  const slides = document.querySelectorAll(".mobileTestimonial-slide");
  const dots = document.querySelectorAll(".mobileTestimonial-indicator span");

  let index = 0;
  let interval;

  function showSlide(i) {
    slides.forEach(s => s.classList.remove("active"));
    dots.forEach(d => d.classList.remove("active"));

    slides[i].classList.add("active");
    dots[i].classList.add("active");
  }

  function startAutoSlide() {
    interval = setInterval(() => {
      index = (index + 1) % slides.length;
      showSlide(index);
    }, 3000); // 👉 change time here (3 sec)
  }

  function stopAutoSlide() {
    clearInterval(interval);
  }

  // 👉 dot click (manual control)
  dots.forEach((dot, i) => {
    dot.addEventListener("click", () => {
      index = i;
      showSlide(index);
      stopAutoSlide();
      startAutoSlide(); // restart after click
    });
  });

  // 👉 start auto
  showSlide(index);
  startAutoSlide();

});
