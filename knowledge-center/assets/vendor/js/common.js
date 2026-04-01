// Slide animation to Bootstrap dropdown when it is being shown
	$('.dropdown').on('show.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        $('.nav-backdrop').show().css('opacity', '0.5');
        $('body').addClass('overflow-hidden');
	});
	$('.dropdown').on('hide.bs.dropdown', function() {
		$(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        $('.nav-backdrop').hide().css('opacity', '0');
        $('body').removeClass('overflow-hidden');
	});
// Stop dropdown from closing on click inside
	document.querySelectorAll('.dropdown-menu').forEach(function(element){
		element.addEventListener('click', function (e) {
		  e.stopPropagation();
		});
	})
// Country Code selection	
	$(".country-code").intlTelInput({
		initialCountry: "in",
		separateDialCode: true,
	});

// Owl Carousel
    // $('.school-courses').owlCarousel({
    //     margin:24,
    //     nav:true,
    //     navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"],
    //     dots:false,
    //     responsive:{
    //         0:{
    //             items:1
    //         },
    //         480:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         1200:{
    //             items:3
    //         }
    //     }
    // })
    $('.testimonial-slide').owlCarousel({
        margin:24,
        nav:true,
        navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"],
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.logoLeft').owlCarousel({
        loop:true,
        autoplay:true,
        slideTransition: 'linear',
        autoplayTimeout: 3000,
        autoplaySpeed: 3000,
        margin:30,
        nav:false,
        dots:false,
        responsive:{
            0:{
                items:2.1,
                margin:16
            },
            600:{
                items:3.5
            },
            1000:{
                items:5.5
            }
        }
    })






