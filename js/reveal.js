    
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        
    $(document).ready(function() {
    if(!isMobile) {
        
        $(window).bind("load", function() {
        $('.hideme').each( function(i){
                $(this).delay(250).animate({'opacity':'1', 'margin-top' : '8%'},750);
        });
        
        setTimeout(function(){ 
        $('.showme').each( function(i){
                $(this).delay(250).animate({'opacity':'0', 'margin-top' : '7.5%'},750);
        });
        }, 3000);
        });
        
    } else {
        $('.hideme').each( function(i){ 
            $(this).animate({'opacity':'1', 'margin-top' : '0'},0);
        });
        
        $('.showme').each( function(i){
           $(this).animate({'opacity':'0'},0);
        });
    }
    });