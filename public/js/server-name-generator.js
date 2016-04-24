"use strict";
(function(){
    // page loads with castle, wizard, desk-miniScroll, warrior
    $(document).ready(function(){

        //text change with delay on page load
        function delayedTalk() {
            $(".wizTalk").fadeOut("slow", function() {
                $(this).html("Grab the scroll to receive your orders.").fadeIn("slow");
            });
        };

        setTimeout(delayedTalk, 2000);

    });





//text alert "click on scroll"

//javascript changes view to big scroll background with php
    //generator thing

})();