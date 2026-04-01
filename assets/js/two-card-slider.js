$(document).ready(function() {
    var slider = $('.slider');
    slider.slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        infinite: true, // Enables infinite looping
        autoplay: true, // Enables automatic sliding
        autoplaySpeed: 2000, // Slides every 2 seconds
        speed: 600, // Smooth transition speed
        pauseOnHover: false, // Keep autoplay running on hover
        centerMode: false, // Ensures even spacing of slides
     
    });

    $('.prev').click(function() {
        slider.slick('slickPrev');
    });
    $('.next').click(function() {
        slider.slick('slickNext');
    });
});