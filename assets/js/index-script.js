$(document).ready(function () {
    
    var scrollCount = 0, 
        latestScrollTop = 0,
        doc = document.documentElement,
        top = 0;

    // Bind window scroll event
    $(window).scroll(function (event) {
        if($(document).width()>767){
            var scroll = $(window).scrollTop();
            if(scroll>242)
            {
                $("#nav-bar").css({
                    "position":"fixed",
                    "top":"0"
                });
                $("#sec-logo").show(0,function(){
                    $("#menu").css({
                        "paddingRight":"120px",
                    });
                });
                
                $("#head-text").hide();
                $("#content").css("paddingTop","160px");
                $("#loader").css("paddingTop","160px");
                $(".row-flex").fadeIn(3000);
            }
            if(scroll<242)
            {
                $("#nav-bar").css({
                    "position":"static"
                });
                $("#sec-logo").hide();
                $("#menu").css({
                    "paddingRight":"0px",
                });
                $("#head-text").fadeIn(300);
                $("#content").css("paddingTop","0px");
                $("#loader").css("paddingTop","0px");
            }
        }
        else{
            $("#nav-bar").css({
                "position":"static"
            });
            $("#sec-logo").hide();
            $("#menu").css({
                "paddingRight":"0px",
            });
            $("#head-text").fadeIn(300);
            $("#content").css("paddingTop","0px");
            $("#loader").css("paddingTop","0px");
        }
    });

    //Mobile
    $("#menubar").click(function(){
        $("#menu").slideToggle(200,function(){
            if($("#menu").is(":hidden")){
                $("#menubar").css({
                    "transform":"rotate(0deg)"
                });
            }else{
                $("#menubar").css({
                    "transform":"rotate(180deg)"
                });
            }
        });
        
    });
    selectMenu("The Club");
    $(".menu-item").click(function(){
        var body = $("html, body");
        if($(document).width()>767)
            body.stop().animate({scrollTop:261}, 500, 'swing');
        else
            $("#menubar").trigger('click');

        $(".menu-item").removeClass("menu-state-active");
        $(this).addClass("menu-state-active");
        selectMenu(this.innerHTML);
    });

});

function selectMenu(name)
{
    var request=""
    if(name=="The Club") request="theClub";
    if(name=="Events") request="eventsNews";
    if(name=="Media Gallery") request="mediaGallery";
    if(name=="Facilities") request="facilities";
    if(name=="Contact Us") request="contactUs";

    $("#loader").fadeIn();
    $("#content").html("");

    $.ajax({
        type: "post",
        url: "action.php",
        data:{getMenu:request},
        success: function (response) {
            $("#loader").slideUp(300,function(){
                $("#content").html(response);
            });
        }
    });
}