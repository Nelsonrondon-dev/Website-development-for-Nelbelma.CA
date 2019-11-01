;(function($){
    "use strict"


    var nav_offset_top = $('header').height() + 50; 
/*-------------------------------------------------------------------------------
Navbar 
-------------------------------------------------------------------------------*/

//* Navbar Fixed  
function navbarFixed(){
    if ( $('.header_area').length ){ 
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();   
            if (scroll >= nav_offset_top ) {
                $(".header_area").addClass("navbar_fixed");
            } else {
                $(".header_area").removeClass("navbar_fixed");
            }
        });
    };
};
navbarFixed();









if(document.getElementById("number-section")){
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
}


//------- Owl Carusel  js --------//




$(document).ready(function() {

    $('.active-testimonial-carusel').owlCarousel({
        items: 2,
        loop: true,
        margin: 30,
        autoplayHoverPause: true,
        smartSpeed:500,
        dots: true,
// autoplay: true,
responsive: {
    0: {
        items: 1
    },
    480: {
        items: 1,
    },
    992: {
        items: 2,
    }
}
});



      /*-------------------------------------------------------------------------------
    Brand Slider 
    -------------------------------------------------------------------------------*/
    $(".brand-carousel").owlCarousel({
        items: 1,
        autoplay:false,
        loop:true,
        nav:false,
        margin: 30,
        dots:false,
        responsive: {
            0: {
                items: 1,
            },
            420: {
                items: 1,
            },
            480: {
                items: 3,
            },
            768: {
                items: 3,
            },
            992: {
                items: 5,
            }
        }
      });






});




//------- mailchimp --------//  
function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
}
mailChimp();

//-------- Counter js --------//
$(window).on("load", function() {


    $('.portfolio-filter ul li').on('click', function () {
        $('.portfolio-filter ul li').removeClass('active');
        $(this).addClass('active');

        var data = $(this).attr('data-filter');
        $workGrid.isotope({
            filter: data
        });
    });

    if (document.getElementById('portfolio')) {
        var $workGrid = $('.portfolio-grid').isotope({
            itemSelector: '.all',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer'
            }
        });
    }
});


 //* nav_searchFrom
 function searchFrom() {
    if ($('.nav_searchFrom').length) {
        $('.nav_searchFrom').on('click', function () {
            $('.searchForm').toggleClass('show');
            return false
        });
        $('.form_hide').on('click', function () {
            $('.searchForm').removeClass('show')
        });
    };
};

//*  Main slider js 
function home_main_slider() {
    if ($('.slider_inner').length) {
        $('.slider_inner').camera({
            loader: true,
            navigation: true,
            autoPlay: false,
            time: 4000,
            playPause: false,
            pagination: false,
            thumbnails: false,
            overlayer: true,
            hover: false,
            minHeight: '500px',
        });
    }
}

//* Isotope Js
function portfolio_isotope() {
    if ($('.portfolio_item, .portfolio_2 .portfolio_filter ul li').length) {
        // Activate isotope in container
        $(".portfolio_item").imagesLoaded(function () {
            $(".portfolio_item").isotope({
                itemSelector: ".single_facilities",
                layoutMode: 'masonry',
                percentPosition: true,
                masonry: {
                    columnWidth: ".grid-sizer, .grid-sizer-2"
                }
            });
        });

        // Activate isotope in container
        $(".portfolio_2").imagesLoaded(function () {
            $(".portfolio_2").isotope({
                itemSelector: ".single_facilities",
                layoutMode: 'fitRows',
            });
        });
        // Add isotope click function
        $(".portfolio_filter ul li").on('click', function () {
            $(".portfolio_filter ul li").removeClass("active");
            $(this).addClass("active");

            var selector = $(this).attr("data-filter");
            $(".portfolio_item, .portfolio_2").isotope({
                filter: selector,
                animationOptions: {
                    duration: 450,
                    easing: "linear",
                    queue: false,
                }
            });
            return false;
        });
    }
};

//* Stellar 
(function () {
    $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
    });
});

//* counterUp JS
function counterUp() {
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 900,
        });
    }
};

//* Testimonial Carosel
function testimonialsCarosel() {
    if ($('.testimonial_carosel').length) {
        $('.testimonial_carosel').owlCarousel({
            loop: true,
            items: 1,
            autoplay: false,
        });
    };
};
//* Testimonial Carosel
function partnersCarosel() {
    if ($('.partners').length) {
        $('.partners').owlCarousel({
            loop: true,
            items: 5,
            margin: 110,
            autoplay: true,
            response: true,
            responsive: {
                300: {
                    items: 1,
                    margin: 0,
                },
                500: {
                    items: 3,
                },
                700: {
                    items: 3,
                },
                800: {
                    items: 4,
                    margin: 40,
                },
                1000: {
                    items: 5,
                },
            }
        });
    };
};




/*Function Calls*/
searchFrom();
new WOW().init();
home_main_slider();
testimonialsCarosel();
portfolio_isotope();
counterUp();
partnersCarosel();
mainNavbar();

})(jQuery)




/*
   carrusel Nuestras Marcas
*/

/*
Slider de mision y vision
*/



