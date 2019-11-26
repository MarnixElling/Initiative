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
    $(".frontend").click(function(){
        if($(".arrow1").hasClass("active")) {
            $(".arrow1").removeClass("active");
            $(".details1").removeClass("view");
        } else {
            $(".arrow1").addClass("active");
            $(".details1").addClass("view");
            if($(".arrow2, .arrow3, .arrow4").hasClass("active")) {
                $(".arrow2, .arrow3, .arrow4").removeClass("active");
            }
            if($(".details2, .details3, .details4").hasClass("view")) {
                $(".details2, .details3, .details4").removeClass("view");
            }
        }
    });
    $(".backend").click(function(){
        if($(".arrow2").hasClass("active")) {
            $(".arrow2").removeClass("active");
            $(".details2").removeClass("view");
        } else {
            $(".arrow2").addClass("active");
            $(".details2").addClass("view");
            if($(".arrow1, .arrow3, .arrow4").hasClass("active")) {
                $(".arrow1, .arrow3, .arrow4").removeClass("active");
            }
            if($(".details1, .details3, .details4").hasClass("view")) {
                $(".details1, .details3, .details4").removeClass("view");
            }
        }
    });
    $(".design").click(function(){
        if($(".arrow3").hasClass("active")) {
            $(".arrow3").removeClass("active");
            $(".details3").removeClass("view");
        } else {
            $(".arrow3").addClass("active");
            $(".details3").addClass("view");
            if($(".arrow1, .arrow2, .arrow4").hasClass("active")) {
                $(".arrow1, .arrow2, .arrow4").removeClass("active");
            }
            if($(".details1, .details2, .details4").hasClass("view")) {
                $(".details1, .details2, .details4").removeClass("view");
            }
        }
    });
    $(".prof").click(function(){
        if($(".arrow4").hasClass("active")) {
            $(".arrow4").removeClass("active");
            $(".details4").removeClass("view");
        } else {
            $(".arrow4").addClass("active");
            $(".details4").addClass("view");
            if($(".arrow1, .arrow2, .arrow3").hasClass("active")) {
                $(".arrow1, .arrow2, .arrow3").removeClass("active");
            }
            if($(".details1, .details2, .details3").hasClass("view")) {
                $(".details1, .details2, .details3").removeClass("view");
            }
        }
    });
});