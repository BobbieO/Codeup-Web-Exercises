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

        //click event to change background when clicking on scroll
        $(".miniScroll").click(function(event) {
            $(".miniScroll").hide();
            $(".wizTalk").css("color","transparent");
            $(".container").css(
                {
                    "background-image": "url(/img/scroll.png)",
                    "background-repeat": "no-repeat",
                    "background-position": "center",
                    "background-size": "50%"
                });
        })








    });
//text alert "click on scroll"

//javascript changes view to big scroll background with php
    //generator thing

})();