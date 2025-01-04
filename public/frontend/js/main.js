(function ($) {
    "use strict";

    //header sticky
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 245) {
            $(".header-sticky").removeClass("sticky");
        } else {
            $(".header-sticky").addClass("sticky");
        }
    });

    //blog event
    $(document).ready(function () {
        $('.event_active').slick({
            dots: false,
            infinite: true,
            autoplay: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            fade: true,
            slidesToScroll: 1,
        });
    });
    //product slide
    $(document).ready(function () {
        $('.product_slid_active').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            arrows: false,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    });

    //product brand
    $(document).ready(function () {
        $('.product_brand').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            arrows: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '0px',
            draggable: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerMode: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        centerMode: true,
                    }
                }
            ]
        });
    });

    // brand clicle
    $('.brand_circle').slick({
        centerMode: true,
        autoplay: true,
        centerPadding: '5px',
        arrows: false,
        slidesToShow: 5,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            }
        ]
    });

    // scrollToTop
    $.scrollUp({
        scrollName: 'scrollUp',
        topDistance: '300',
        topSpeed: 300,
        animation: 'fade',
        animationInSpeed: 200,
        animationOutSpeed: 200,
        scrollText: '<i class="fa-solid fa-arrow-up"></i>',
        activeOverlay: false,
    });

    // preloader
    window.onload = function () {
        const preloader = document.getElementById("preloader");
        preloader.style.display = "none"; // Hide the preloader
    };

    // chatting
    document.addEventListener('DOMContentLoaded', function () {
        const chatSystem = document.querySelector('.chatSystem');
        const chattingOption = document.querySelector('.chatting_option');

        chatSystem.addEventListener('click', function () {
            if (chattingOption.style.display === 'none' || chattingOption.style.display === '') {
                chattingOption.style.display = 'block';
            } else {
                chattingOption.style.display = 'none';
            }
        });
    });

})(jQuery);