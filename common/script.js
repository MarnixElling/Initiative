$(document).ready(function(){
    $(".cogmenu").click(function(){
        if($(".cogmenu").hasClass("active")) {
            $(".sidebar, .cogmenu").removeClass("active");
        } else {
            $(".sidebar, .cogmenu").addClass("active");
        }
    });
});