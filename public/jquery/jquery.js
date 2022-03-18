$(document).ready(() => {

    // setting owl carousel

    let navText = ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"]

    $('#hero-carousel').owlCarousel({
        items: 1,
        dots: false,
        loop: true,
        nav: true,
        navText: navText,
        autoplay: true,
        autoplayHoverPause: true
    })

    $('.movies-slide').owlCarousel({
        items: 2,
        dots: false,
        nav: true,
        navText: navText,
        margin: 15,
        responsive: {
            500: {
                items: 2
            },
            1280: {
                items: 4
            },
            1600: {
                items: 6
            }
        }
    })

    $(document).on('click', '.play-btn a', function() {
        $('.play').addClass('active-popup');
    });
    /*==popup-Close==================================*/
    $(document).on('click', '.close-movie', function() {
        $('.play').removeClass('active-popup');
    });
    /*==auto-play-when-popup-open===================*/
    $('.play-btn a').click(function() {
        $('#m-video')[0].play();
    });
    /*==Close-video-when-poppup-close==============*/
    $('.close-movie').click(function() {
        $('#m-video')[0].pause();
    });

})