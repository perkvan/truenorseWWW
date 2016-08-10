

var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;


$(document).ready(function ($) {
    if(!isMobile) {
            $(window).bind("load", function() {
                $('.se-pre-con').fadeOut('slow', function () {
                });
                $("body").removeClass("preload");
            });
        /*$('a').click(function(e){
            redirect = $(this).attr('href');
            e.preventDefault();
            $('body').fadeOut(400, function(){
                document.location.href = redirect
            });
        });*/
        } else {
            $("body").removeClass("preload");
            $(".se-pre-con").remove();
        }
});

