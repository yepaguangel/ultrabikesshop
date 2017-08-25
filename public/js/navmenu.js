$(document).ready(function() {
    /*** MENU FIJO ***/

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            $('.barnav').addClass("navbar-fixed");
            $('.shoppingbtn').appendTo('.shopmenu');
        } else {
            $('.barnav').removeClass("navbar-fixed");
            $('.shoppingbtn').appendTo('.shopbtntop');
            $('.tabtop').removeClass('fixedtabtop')
        }
    });

    $(window).scroll(function() {
        if ($(this).scrollTop() >= $('.bgbanner').height()) {
            $('.tabtop').addClass('fixedtabtop')
        } else {
            $('.tabtop').removeClass('fixedtabtop')
        }
    });

    $('.dropdown-button').dropdown({
        inDuration: 300,
        outDuration: 225,
        //hover: true, // Activate on hover
        gutter: 0, // Spacing from edge
    });

    /*** CIERRA MENU FIJO ***/
});