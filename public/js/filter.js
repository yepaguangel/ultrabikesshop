/*** MEDIA QUERY ****/

$(document).ready(function() {

    var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
    
    $('.input-cont').click(function(event) {
        $('#autocomplete-input').focus();
    });
    
    $('#referencia').click(function(event) {
        $(this).focus()
    });

    $('.btn-search').click(function(event) {
        $('.filtermenu').addClass('animated slideOutLeft').css('position', 'absolute');
        $('.barsearch').removeClass('hide').addClass('animated slideInRight');
        setTimeout(function() {
            $('#autocomplete-input').focus();
        }, 600);
    });

    $('.search-close').click(function(event) {
        $('.filtermenu').removeClass('slideOutLeft').addClass('slideInLeft').css('position', 'relative');
        $('.barsearch').removeClass('slideInRight').addClass('hide')
    });


    (function(window, document, undefined) {
        'use strict';

        // Initialize the media query
        var mediaQuery = window.matchMedia('(max-width: 992px)');

        // Add a listen event
        mediaQuery.addListener(doSomething);

        // Function to do something with the media query
        function doSomething(mediaQuery) {
            if (mediaQuery.matches) {
                //console.log('mediaQuery');
                $('#shopfilter').appendTo('#spacefilter').addClass('animated fadeInDown space').removeClass('carousel-fixed-item');
                $('.contentbanner').addClass('modifybanner');
                $('.filters .white-text').hide();
                $('.btnfilter').click(function() {
                    if ($('.filters .white-text').is(":hidden")){
                        $( ".filters .white-text" ).slideDown("slow");
                    } else {
                        $( ".filters .white-text" ).slideUp()
                    }
                    
                });
                //document.body.style.backgroundColor = 'CornflowerBlue';
            } else {
                //console.log('desktop');
                $('#shopfilter').appendTo('.carousel-slider').removeClass('space').addClass('carousel-fixed-item');
                $('.contentbanner').removeClass('modifybanner');
                $('.filters .white-text').show();
                //document.body.style.backgroundColor = 'FireBrick';
            }
        }

        // On load
        doSomething(mediaQuery);

        // Modernizr
        //window.addEventListener('resize', function() {
        //  if (Modernizr.mq('(min-width: 560px)')) {
        //    document.body.style.backgroundColor = 'CornflowerBlue';
        //  } else {
        //    document.body.style.backgroundColor = 'FireBrick';
        //  }
        //}, false);

    })(window, document);

    /*** CIERRA MEDIA QUERY ****/

});
