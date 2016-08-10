
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
var vid = document.getElementById("bgvid"),
videoButton = document.getElementById("vidbutton");

window.ispaused = true;
var expanded = false;
if (!isMobile) {
    $("#vidbutton").on("click keyup", function(e) {
        if (e.type == "click" || e.keyCode == 27 || e.keyCode == 8) {
        vid.paused ? vid.play() : vid.pause();
        if (!expanded){
              $(this).animate({'left' : '15px', 'bottom' : '15px', 'font-size' : '20pt'}, {duration : 400}).css("z-index", "9999");
              expanded = true;
          }
          else
          {
             $(this).animate({'left' : '47.5%', 'bottom' : '50%', 'font-size' : '80pt'}, {duration: 400}).css("z-index", "0");
              expanded = false;
          };
        $("#bgvid").toggleClass("fullscreen");
        $("#vidbutton").toggleClass("fa-pause-circle");
        }
    });
} else {
        $("#vidbutton").on("click keyup", function(e) {
        if (e.type == "click" || e.keyCode == 27 || e.keyCode == 8) {
        vid.paused ? vid.play() : vid.pause();
        if (!expanded){
              $(this).animate({'left' : '15px', 'bottom' : '15px', 'font-size' : '20pt'}, {duration : 400}).css("z-index", "9999");
              expanded = true;
          }
          else
          {
             $(this).animate({'bottom' : '10%', 'font-size' : '80pt'}, {duration: 400}).css("z-index", "100");
              expanded = false;
          };
        $("#bgvid").toggleClass("fullscreen");
        $("#vidbutton").toggleClass("fa-pause-circle");
        }
    });
}