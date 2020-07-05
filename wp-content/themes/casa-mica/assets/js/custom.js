/**
 * Created by alexa on 6/10/2020.
 */
$(document).ready(function(){

    $('.slick-carousel-1').slick({
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        // centerMode: true,
        mobileFirst: true,
        pauseOnHover: false,
        fade: true,
        speed: 900,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        slidesToShow: 1
        //start responsive option
        // responsive: [
        //     {
        //         breakpoint: 600, //at 600px wide, only 2 slides will show
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2
        //         }
        //     }
        // ]
    });
    $('.slick-carousel-2').slick({
        autoplay: true,
        autoplaySpeed: 3300,
        arrows: false,
        // centerMode: true,
        mobileFirst: true,
        pauseOnHover: false,
        fade: true,
        speed: 900,
        cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
        slidesToShow: 1
        //start responsive option
        // responsive: [
        //     {
        //         breakpoint: 600, //at 600px wide, only 2 slides will show
        //         settings: {
        //             slidesToShow: 2,
        //             slidesToScroll: 2
        //         }
        //     }
        // ]
    });

    $('#datetimepicker_in').datepicker({
        dateFormat: 'dd-mm-yy'
    });
    $('#datetimepicker_out').datepicker({
        dateFormat: 'dd-mm-yy'
    });
});

