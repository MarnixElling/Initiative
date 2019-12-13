$(document).ready(function(){
    /* SETTINGS BAR */
    $(".cogmenu").click(function(){
        if($(".cogmenu").hasClass("active")) {
            $(".sidebar, .cogmenu").removeClass("active");
        } else {
            $(".sidebar, .cogmenu").addClass("active");
        }
    });
    /* SKILLSET BAR */
    $(".frontend").click(function(){
        if($(".arrow1").hasClass("active")) {
            $(".arrow1").removeClass("active");
            $(".details1").removeClass("view");
            $(".front-end").addClass("inactive");
        } else {
            $(".arrow1").addClass("active");
            $(".details1").addClass("view");
            $(".front-end").removeClass("inactive");
            $(".back-end").addClass("inactive");
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
            $(".back-end").addClass("inactive");
        } else {
            $(".arrow2").addClass("active");
            $(".details2").addClass("view");
            $(".back-end").removeClass("inactive");
            $(".front-end").addClass("inactive");
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
            $(".front-end").addClass("inactive");
            $(".back-end").addClass("inactive");
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
            $(".front-end").addClass("inactive");
            $(".back-end").addClass("inactive");
            if($(".arrow1, .arrow2, .arrow3").hasClass("active")) {
                $(".arrow1, .arrow2, .arrow3").removeClass("active");
            }
            if($(".details1, .details2, .details3").hasClass("view")) {
                $(".details1, .details2, .details3").removeClass("view");
            }
        }
    });
    /* CHECKS SELECTED VIEW */
    $(".showmore").click(function(){
        if($(".details1").hasClass("view")) {
            $(".a-details").addClass("shown");
        } else {
            $(".a-details").removeClass("shown");
        }
        if($(".details2").hasClass("view")) {
            $(".b-details").addClass("shown");
        } else {
            $(".b-details").removeClass("shown");
        }
        if($(".details3").hasClass("view")) {
            $(".c-details").addClass("shown");
        } else {
            $(".c-details").removeClass("shown");
        }
        if($(".details4").hasClass("view")) {
            $(".d-details").addClass("shown");
        } else {
            $(".d-details").removeClass("shown");
        }
    });
    /* FRONTEND LANGUAGES EXPLAINED */
    $(".HTML1").mouseover(function(){
        $(".HTML").addClass("explanation");
    })
    $(".HTML1").mouseout(function(){
        $(".HTML").removeClass("explanation");
    })
    $(".SCSS2").mouseover(function(){
        $(".SCSS").addClass("explanation");
    })
    $(".SCSS2").mouseout(function(){
        $(".SCSS").removeClass("explanation");
    })
    $(".Bootstrap3").mouseover(function(){
        $(".Bootstrap").addClass("explanation");
    })
    $(".Bootstrap3").mouseout(function(){
        $(".Bootstrap").removeClass("explanation");
    })
    $(".jQuery4").mouseover(function(){
        $(".jQuery").addClass("explanation");
    })
    $(".jQuery4").mouseout(function(){
        $(".jQuery").removeClass("explanation");
    })
    /* BACKEND LANGUAGES EXPLAINED */
    $(".PHP1").mouseover(function(){
        $(".PHP").addClass("explanation");
    })
    $(".PHP1").mouseout(function(){
        $(".PHP").removeClass("explanation");
    })
    $(".MySQL2").mouseover(function(){
        $(".MySQL").addClass("explanation");
    })
    $(".MySQL2").mouseout(function(){
        $(".MySQL").removeClass("explanation");
    })
    $(".Javascript3").mouseover(function(){
        $(".Javascript").addClass("explanation");
    })
    $(".Javascript3").mouseout(function(){
        $(".Javascript").removeClass("explanation");
    })
    /* LANGUAGE OPTIONS */
    $(".dutch").click(function(){
        $(".dutch").addClass("selected");
        $(".english").removeClass("selected");
        $(".german").removeClass("selected");
    });
    $(".english").click(function(){
        $(".dutch").removeClass("selected");
        $(".english").addClass("selected");
        $(".german").removeClass("selected");
    });
    $(".german").click(function(){
        $(".dutch").removeClass("selected");
        $(".english").removeClass("selected");
        $(".german").addClass("selected");
    });
    /* EMAIL CONFIRMATION CHECKER */
    $('#form').on('submit', function(e) {
        if ($('.email1').val() !== $('.email2').val()) {
            e.preventDefault();
            $('.error').append('<p>Emails komen niet overheen!</p>')
        }
    });
    /* SMOOTH SCROLL ANCHOR POINTS */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    /* SCROLL DISTANCE CHECKER */
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 1000) {
            document.getElementById("scrolltop").style.display = "block";
        } else {
            document.getElementById("scrolltop").style.display = "none";
        }
    }
    /* HEADER SCROLL CHECKER */
    $(function(){
        var shrinkHeader = 200;
        $(window).scroll(function() {
            var scroll = getCurrentScroll();
            if (scroll > shrinkHeader){
                $('.navigation').addClass('invisible');
                $('.grow').addClass('visible');
            } else if (scroll < shrinkHeader){
                $('.navigation').removeClass('invisible');
                $('.grow').removeClass('visible');
            }
        });
    });
    function getCurrentScroll() {
        return window.pageYOffset ||
        document.documentElement.scrollTop;
    }
    // Process translation
    $(function () {
        $('.translate').click(function () {
            var lang = $(this).attr('id');

            $('.lang').each(function (index, item) {
                $(this).text(arrLang[lang][$(this).attr('key')]);
            });
        });
    }); 
});
