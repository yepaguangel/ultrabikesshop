$(document).ready(function() {

    /**
     * Stop an iframe or HTML5 <video> from playing
     * @param  {Element} element The element that contains the video
     */


    $('#modal2').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .5, // Opacity of modal background
        inDuration: 300, // Transition in duration
        outDuration: 200, // Transition out duration
        //startingTop: '4%', // Starting top style attribute
        //endingTop: '10%', // Ending top style attribute
        ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            jQuery("iframe").each(function() {
                jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"playVideo","args":""}', '*')
            });
        },
        complete: function() {
                jQuery("iframe").each(function() {
                    jQuery(this)[0].contentWindow.postMessage('{"event":"command","func":"pauseVideo","args":""}', '*')
                });

            } // Callback for Modal close
    });




});
