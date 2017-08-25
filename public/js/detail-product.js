(function(window, document, undefined) {
    'use strict';

    // Initialize the media query
    var mediaQuery = window.matchMedia('(max-width: 992px)');

    // Add a listen event
    mediaQuery.addListener(doSomething);

    // Function to do something with the media query
    function doSomething(mediaQuery) {
        if (mediaQuery.matches) {
            $('.tabs-detail').removeClass('tabs-vertical');
        } else {
            $('.tabs-detail').addClass('tabs-vertical');
        }
    }

    // On load
    doSomething(mediaQuery);
})(window, document);

$(document).ready(function() {
    $('#carousel01').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        lazyLoad: true,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
                nav: false
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 4,
                nav: false,
                loop: true
            }
        }
    });

    $('.rating').addRating({
        max : 5,
    });

});