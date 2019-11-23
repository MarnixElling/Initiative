$(document).ready(function(){
    /* settings bar */
    $(".cogmenu").click(function(){
        if($(".cogmenu").hasClass("active")) {
            $(".sidebar, .cogmenu").removeClass("active");
        } else {
            $(".sidebar, .cogmenu").addClass("active");
        }
    });
    /* skillset bar */
    $(".showmore").click(function(){
        if($(".cogmenu").hasClass("active")) {
            $(".fa-chevron-down, .details").removeClass("active");
        } else {
            $(".fa-chevron-down, .details").addClass("active");
        }
    });
});