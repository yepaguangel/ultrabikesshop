function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}

$('#carousel02').owlCarousel({
    loop: true,
    margin: 10,

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

$(document).ready(function() {

    /**
     * Stop an iframe or HTML5 <video> from playing
     * @param  {Element} element The element that contains the video
     */


    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        //startingTop: '4%', // Starting top style attribute
        //endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            $('.loading').addClass('hide');
            $('.carruselitem').removeClass('hide').addClass('slideInLeft');
            $('.carousel').carousel({
                dist: 0,
                no_wrap: true,
                padding: 20
            });

        },
        complete: function() {
                $('.loading').removeClass('hide');
                $('.carruselitem').removeClass('slideInLeft').addClass('hide');
            } // Callback for Modal close
    });




});
