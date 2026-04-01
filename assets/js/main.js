// Wrap the code in a function to avoid polluting the global scope
(function ($) {
    // Execute the code when the DOM is ready
    $(function () {
        // Declare variables
        var animationSpeed = 600;

        // Show content for initially active toggle titles in flat-toggle
        $('.flat-toggle .toggle-title.active').siblings('.toggle-content').show();

        // Toggle functionality for flat-toggle elements
        $('.flat-toggle.enable .toggle-title').on('click', function () {
            var $toggle = $(this).closest('.flat-toggle');
            $toggle.find('.toggle-content').slideToggle(animationSpeed);
            $(this).toggleClass('active');
        });

        // Toggle functionality for flat-accordion elements
        $('.flat-accordion .toggle-title').on('click', function () {
            var $this = $(this);
            if ($this.is('.active')) {
                $this.toggleClass('active').next().slideToggle(animationSpeed);
            } else {
                var $accordion = $this.closest('.flat-accordion');
                $accordion.find('.toggle-title.active').toggleClass('active').next().slideToggle(animationSpeed);
                $this.toggleClass('active').next().slideToggle(animationSpeed);
            }
        });

        // Sticky header functionality
        (function () {
            if ($('body').hasClass('header-sticky')) {
                var headerHeight = $('#header').height();

                $(window).on('load scroll', function () {
                    var scrollTop = $(window).scrollTop();

                    // Add downscrolled class if scrolled below a certain point
                    scrollTop > headerHeight + 30 ? $('#header').addClass('downscrolled') : $('#header').removeClass('downscrolled');

                    // Add upscrolled class if scrolled below another point
                    scrollTop > 145 ? $('#header').addClass('upscrolled') : $('#header').removeClass('upscrolled');
                });
            }
        })();

        // Fade out and remove elements with the class windows8
        $('.windows8').fadeOut('slow', function () {
            $(this).remove();
        });
    });
})(jQuery);



// !(function (e) {
    
//     e(function () {
//         var a, o;
//         (a = "desktop"),
            
//             (o = { duration: 600 }),
//             e(".flat-toggle .toggle-title.active").siblings(".toggle-content").show(),
//             e(".flat-toggle.enable .toggle-title").on("click", function () {
//                 e(this).closest(".flat-toggle").find(".toggle-content").slideToggle(o), e(this).toggleClass("active");
//             }),
//             e(".flat-accordion .toggle-title").on("click", function () {
//                 e(this).is(".active")
//                     ? (e(this).toggleClass("active"), e(this).next().slideToggle(o))
//                     : (e(this).closest(".flat-accordion").find(".toggle-title.active").toggleClass("active").next().slideToggle(o), e(this).toggleClass("active"), e(this).next().slideToggle(o));
//             }),
            
            
            
            
//             (function () {
//                 if (e("body").hasClass("header-sticky")) {
//                     var t = e("#header").height();
//                     e(window).on("load scroll", function () {
//                         e(window).scrollTop() > t + 30 ? e("#header").addClass("downscrolled") : e("#header").removeClass("downscrolled"),
//                             e(window).scrollTop() > 145 ? e("#header").addClass("upscrolled") : e("#header").removeClass("upscrolled");
//                     });
//                 }
//             })(),
//             e(".windows8").fadeOut("slow", function () {
//                 e(this).remove();
//             });
//     });
// })(jQuery);
