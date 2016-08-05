jQuery(document).ready(function ($) {
            $(window).load(function () {
                $('.se-pre-con').fadeOut('slow', function () {
                });
                $("body").removeClass("preload");
            });
        $('a').click(function(e){
            redirect = $(this).attr('href');
            e.preventDefault();
            $('body').fadeOut(400, function(){
                document.location.href = redirect
            });
        });
        });
