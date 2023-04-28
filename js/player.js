$(document).ready(function () {



    $('.menu_player').hover( function (){
        $(".menu_player").delay(300).animate({
            left: "0"
     
        },{duration:400})
    },
    function (){
        $(".menu_player").stop(true).animate({
            left: "-11em"
     
        },{duration:400});
    });

});