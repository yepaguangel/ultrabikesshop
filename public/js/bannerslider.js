$(document).ready(function() {
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: false,
        padding: 0,
        onCycleTo: function(data) {
            if ($('.carousel-item.red').is('.active')) {
                //console.log('entro uno');
                setTimeout(function() {
                    $('.carousel-item h1').removeClass('hide fadeOutRight').addClass('animated fadeInDown');
                    $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('hide fadeOutRight').addClass('animated fadeInUp');
                    //$('.parallax-container').removeClass('animated fadeOutLeft').addClass('animated fadeInLeft')
                }, 200);
            } else {
                //console.log('salio uno');
                //$('.parallax-container').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                $('.carousel-item h1').removeClass('fadeInDown').addClass('fadeOutRight');
                $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('fadeInUp').addClass('fadeOutRight')
            }
            if ($('.carousel-item.blue').is('.active')) {
                //console.log('entro uno');
                setTimeout(function() {
                    $('.carousel-item h1').removeClass('hide fadeOutRight').addClass('animated fadeInDown');
                    $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('hide fadeOutRight').addClass('animated fadeInUp');
                    //$('.parallax-container').removeClass('animated fadeOutLeft').addClass('animated fadeInLeft')
                }, 200);
            } else {
                //console.log('salio uno');
                //$('.parallax-container').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                $('.carousel-item h1').removeClass('fadeInDown').addClass('fadeOutRight');
                $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('fadeInUp').addClass('fadeOutRight')
            }
            if ($('.carousel-item.amber').is('.active')) {
                //console.log('entro uno');
                setTimeout(function() {
                    $('.carousel-item h1').removeClass('hide fadeOutRight').addClass('animated fadeInDown');
                    $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('hide fadeOutRight').addClass('animated fadeInUp');
                    //$('.parallax-container').removeClass('animated fadeOutLeft').addClass('animated fadeInLeft')
                }, 200);
            } else {
                //console.log('salio uno');
                //$('.parallax-container').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                $('.carousel-item h1').removeClass('fadeInDown').addClass('fadeOutRight');
                $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('fadeInUp').addClass('fadeOutRight')
            }
            if ($('.carousel-item.green').is('.active')) {
                //console.log('entro uno');
                setTimeout(function() {
                    $('.carousel-item h1').removeClass('hide fadeOutRight').addClass('animated fadeInDown');
                    $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('hide fadeOutRight').addClass('animated fadeInUp');
                    //$('.parallax-container').removeClass('animated fadeOutLeft').addClass('animated fadeInLeft')
                }, 200);
            } else {
                //console.log('salio uno');
                //$('.parallax-container').removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                $('.carousel-item h1').removeClass('fadeInDown').addClass('fadeOutRight');
                $('.carousel-item h2, .carousel-item h3, .carousel-item h4').removeClass('fadeInUp').addClass('fadeOutRight')
            }
        }
    }, setTimeout(stop, run));

    var carousel_interval = 10000;
    $('.carousel').carousel();
    var int;

    function run() {
        int = setInterval(function() {
            $('.carousel').carousel('next');
        }, carousel_interval);
    }

    function stop() {
        clearInterval(int);
    }
    $('.carousel').hover(stop, run);
});