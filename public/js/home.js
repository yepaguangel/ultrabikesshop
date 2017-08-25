$(document).ready(function() {

    $('.parallax').parallax();
    $('select').material_select();
    $('.scrollspy').scrollSpy();
    $('.modal').modal();
    $(".button-collapse").sideNav({
        menuWidth: 250, // Default is 300
        edge: 'right', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true, // Choose whether you can drag to open on touch screens,
        onOpen: function(el) { $('.ctrlnav').text('close'); },
        onClose: function(el) { $('.ctrlnav').text('menu'); }
    });

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



    $('#carousel03').owlCarousel({
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

    $('#carousel04').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        lazyLoad: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: false,
                loop: true
            }
        }
    });

    $('#carousel05').owlCarousel({
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
                items: 4,
                nav: false
            },
            1000: {
                items: 6,
                nav: false,
                loop: true
            }
        }
    });

    /*function autoplay() {
        $('.carousel').carousel('next');
        setTimeout(autoplay, 4000);
    };*/

});