$(document).ready(function() {
    $('.carousel').carousel({
        dist: 0,
        shift: 0,
        padding: 20,
    });
    $('#carousel02').owlCarousel({
        loop: true,
        margin: 10,
        autoplayHoverPause: true,
        lazyLoad: true,
        autoplay: true,
        thumbs: true,

        // When only using images in your slide (like the demo) use this option to dynamicly create thumbnails without using the attribute data-thumb.
        thumbImage: false,

        // Enable this if you have pre-rendered thumbnails in your html instead of letting this plugin generate them. This is recommended as it will prevent FOUC
        thumbsPrerendered: true,

        // Class that will be used on the thumbnail container
        thumbContainerClass: 'owl-thumbs',

        // Class that will be used on the thumbnail item's
        thumbItemClass: 'owl-thumb-item',
        responsiveClass: true,
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
    
});