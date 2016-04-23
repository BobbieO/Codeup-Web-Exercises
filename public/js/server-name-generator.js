"use strict";
(function(){
    // page loads with castle, wizard, desk-miniScroll, warrior
    $(document).ready(function(){

        //small delay until text
        function delayedTalk() {
            $(".wizTalk").fadeOut("slow");
        };

        setTimeout(delayedTalk, 1000);

        function order() {
            $(".warTalk").text("Grab the scroll to receive your orders.").fadeIn("slow");
        }
        
        setTimeout(order, 2000);
        
        


    });





//text alert "click on scroll"

//javascript changes view to big scroll background with php
    //generator thing

})();