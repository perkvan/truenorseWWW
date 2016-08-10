<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "truenorsefilms@gmail.com";
 
    $email_subject = "Site Contact";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['website']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
    
    $website = $_POST['website']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Website: ".clean_string($website)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
}?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>True Norse</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,600italic,400italic,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    

    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sss.css" type="text/css" media="all">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="/js/sss.js"></script>
    <script>
        jQuery(function($) {
        $('.slider').sss({
            slideShow : true, // Set to false to prevent SSS from automatically animating.
            startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
            transition : 1500, // Length (in milliseconds) of the fade transition.
            speed : 6500, // Slideshow speed in milliseconds.
            showNav : false, // Set to false to hide navigation arrows.
        });
        });
    </script>
</head>

<body class="preload">
<section class="intro">
<div class="container">
    <div class="container example2">
      <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar2">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://truenorsefilms.com">
                <img id="logo" src="/img/True-Norse-black.png"/>
                <h3 id="logo-replace">True Norse Films</h3>
            </a>
          </div>
          <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="/index.php">Home</a></li>
              <li><a href="/about-us.html">About Us</a></li>
              <li><a href="/projects.html">Projects</a></li>
              <li><a href="home-contact">Contact Us</a></li>
              <li>
                 <div id="soc-header">
                      <a href="https://www.facebook.com/True-Norse-Films-447289181993942/"><i class="fa fa-facebook
                          "></i></a>
                      <a href="https://www.instagram.com/truenorsefilms/"><i class="fa fa-instagram"></i></a>
                      <a href="https://twitter.com/kkvanbeck"><i class="fa fa-twitter"></i></a>
                      <a href="https://vimeo.com/user2810479"><i class="fa fa-vimeo"></i></a>
                  </div>
              </li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
      </nav>
    </div>
    <div id="header">
        <div class="col-sm-12">
            <div class="slider">
            <div>
                <img class="col-md-6" src="/img/diagram-1-1.png" />
                <img class="col-md-6" src="/img/diagram-1-2.png" />
            </div>
            <div>
                <img class="col-md-6" src="/img/diagram-2-1.png" />
                <img class="col-md-6" src="/img/diagram-2-2.png" />
            </div>
                <div>
                <img class="col-md-6" src="/img/diagram-3-1.png" />
                <img class="col-md-6" src="/img/diagram-3-2.png" />
            </div>
            </div>    
        </div>
        <div class="bottom-center showme">
            <h4 style="color: #f2f2f2; font-weight: 100; font-style: oblique; font-size: 10pt;">scroll down</h4>
        </div>
    </div>
</div>
</section>
<section id="portfolio" class="featured">
    <div id="featured" class="hideme container">
        <div id="item1" class="row">
          <div class="col-md-6">
              <video playsinline muted autoplay loop poster id="video1" src="https://player.vimeo.com/external/63204198.hd.mp4?s=6e7aa97f997713aa9a42a29387b8f8d352549f36&profile_id=113" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></video>
              <div class="row">
                  <img class="col-xs-4" src="/img/laurel-runner-up.png"/>
                  <img class="col-xs-4" src="/img/laurel-best-mn.png"/>
                  <img class="col-xs-4" src="/img/laurel-canadian-script.png"/>
              </div>
          </div>
          <div class="col-md-6">
            <div style="margin-top: -20px;" class="row">
                <h1 style="font-size: 32pt;" class="col-xs-12">GOLDEN</h1>
            </div>
            <div class="row">
                <h4 class="col-xs-12 oblique">10 min. | Short Film</h4>
            </div>
              <br>
            <p>Hank is a simple man, he has spent the last fifty years with his loving wife Maria. He is unaccustomed to change and set in his routines. On his fiftieth wedding anniversary Hank arrives home to find that his beloved Maria has passed away. Unable to process the situation Hank falls into his daily routines. A phone call from his daughter reminds Hank of the anniversary and he is determined to have one last perfect day with Maria. At dinner Hank comes to the realization that it is time to say goodbye to his partner.</p>
            <p><a href="https://youtu.be/BbmS-NOgZIk">Click here to see an interview with Kjell Kvanbeck and Justin Newcomb.</a></p>
          </div>
        </div>
        <div id ="item2" class="row">
            <div class="col-md-6 col-md-push-6">
              <iframe id="video2" width="100%" src="https://www.youtube.com/embed/CPkFqDOXRVk" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <br>
                <br>
                <br>
                <div class="row">
                    <h1 style="font-size: 32pt;" class="col-xs-12">DR. SMITH'S NATIONAL COMMERCIAL</h1>
                </div>
                <div class="row">
                    <h4 class="col-xs-12 oblique">Director | Commercial</h4>
                </div>
                  <br>
                <p>Kjell directed Reach for the Doctor for Mission Pharmacal and the Deberry Group as part of their Reach for the Doctor campaign. Filmed on location in Fort Lauderdale Florida the spot was launched in the summer of 2016 across the United States and Mexico.</p>
            </div>
        </div>
        <div id ="item3" class="row">
          <div class="col-md-6">
              <iframe id="video3" src="https://player.vimeo.com/video/150197835" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
            <div class="col-md-6">
                <div class="row">
                    <h1 style="font-size: 32pt;" class="col-xs-12">THE RED LOOKING GLASS</h1>
                </div>
                <div class="row">
                    <h4 class="col-xs-12 oblique">Director/DP | Music Narrative</h4>
                </div>
                  <br>
                <p>Order vinyl and buy the new digital album at <a href="https://www.reflectivore.bandcamp.com">reflectivore.bandcamp.com</a> now.</p>
                <p>The Red Looking Glass short film is a collaboration between Reflectivore and True Norse Films. As we began the process of marrying image and sound we realized that there were many layers of symbolism and literalism that reached beyond the piece. While the song is about loss, it is even more about the journey of a beautiful, intelligent, caring and inspirational person that served as mother, wife, and friend to many who worked on this project. A person with a rare approach to making the most of her time, no matter how limited it was.</p>
                <p><a href="https://www.vimeo.com/148901039">Click Here to see the behind the scenes footage</a></p>
            </div>
        </div>
      </div>
</section>
<section id="services">
    <div class="container">
        <div class="vertical-center">
            <div class="row">
            <h1 style="text-align: center;margin-bottom: 5%; color: #f2f2f2; 
    text-shadow: 2px 2px 5px #333;">Services</h1>
            <div class="col-lg-3 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-video-camera"></i>
                    </div>
                    <div class="service-content">
                        <h3> Film </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum porta blandit. Fusce auctor risus turpis, et sodales sapien interdum at. Aenean sodales sed nibh ac tincidunt. Maecenas. </p>
                    </div>
                    <div class="read">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-camera"></i>
                    </div>
                    <div class="service-content">
                        <h3> Photography </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum porta blandit. Fusce auctor risus turpis, et sodales sapien interdum at. Aenean sodales sed nibh ac tincidunt. Maecenas. </p>
                    </div>
                    <div class="read">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-pencil"></i>
                    </div>
                    <div class="service-content">
                        <h3> Design </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum porta blandit. Fusce auctor risus turpis, et sodales sapien interdum at. Aenean sodales sed nibh ac tincidunt. Maecenas. </p>
                    </div>
                    <div class="read">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="serviceBox">
                    <div class="service-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <div class="service-content">
                        <h3> Web </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum porta blandit. Fusce auctor risus turpis, et sodales sapien interdum at. Aenean sodales sed nibh ac tincidunt. Maecenas. </p>
                    </div>
                    <div class="read">
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section id="gallery">
    <div class="container">
        <h1 style="text-align: center;">More Work</h1>
        <ul id="myContent"> 			
            <li><div class="effect-moses"><a href="https://vimeo.com/44048804" target="_blank"><img src="/img/proj/raidho-2.png" alt="" /></a>
                <figcaption>
							<p>Direction</p>
							<p>Writing</p>
							<p>Cinematography</p>
						</figcaption>
                </div>
                <div class="gallery-subcaption">
                    <h2>Raidho</h2>
                    <p>Additional text could go here to make these objects more acccessible immediately. Perhaps a quick blurb on why they should click.</p>
                    <p style="margin-top: 15px; display:inline-block; float: left; font-weight: bold; font-size: 10pt;">share:</p>
                    <a class="icon" href="http://www.facebook.com/sharer.php?u=https://vimeo.com/44048804" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                    <a class="icon" href="https://plus.google.com/share?url=https://vimeo.com/44048804" target="_blank">
                    <i class="fa fa-google"></i></a>
                    <a class="icon" href="https://twitter.com/share?url=https://vimeo.com/44048804&amp;text=Raidho%20by%20True%20Norse%20Films&amp;" target="_blank">
                    <i class="fa fa-twitter"></i></a>
                    <a href="https://vimeo.com/44048804" target="_blank">view film</a>
                </div>
            </li>
            <li><div class="effect-moses"><a href="https://vimeo.com/102868220" target="_blank"><img src="/img/proj/deeply-1.png" alt="" /></a>
                <figcaption>
							<p>Direction</p>
							<p>Writing</p>
							<p>Cinematography</p>
						</figcaption>
                </div>
                <div class="gallery-subcaption">
                    <h2>Deeply</h2>
                    <p>Additional text could go here to make these objects more acccessible immediately. Perhaps a quick blurb on why they should click.</p>
                    <p style="margin-top: 15px; display:inline-block; float: left; font-weight: bold; font-size: 10pt;">share:</p>
                    <a class="icon" href="http://www.facebook.com/sharer.php?u=https://vimeo.com/102868220" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                    <a class="icon" href="https://plus.google.com/share?url=https://vimeo.com/102868220" target="_blank">
                    <i class="fa fa-google"></i></a>
                    <a class="icon" href="https://twitter.com/share?url=https://vimeo.com/102868220&amp;text=Raidho%20by%20True%20Norse%20Films&amp;" target="_blank">
                    <i class="fa fa-twitter"></i></a>
                    <a href="https://vimeo.com/102868220" target="_blank">view film</a>
                </div>
            </li>
            <li><div class="effect-moses"><a href="https://vimeo.com/121327040" target="_blank"><img src="/img/proj/face-v2.jpg" alt="" /></a>
                <figcaption>
							<p>Direction</p>
							<p>Writing</p>
							<p>Graphic Design</p>
						</figcaption>
                </div>
                <div class="gallery-subcaption">
                    <h2>Air Between Us</h2>
                    <p>Additional text could go here to make these objects more acccessible immediately. Perhaps a quick blurb on why they should click.</p>
                    <p style="margin-top: 15px; display:inline-block; float: left; font-weight: bold; font-size: 10pt;">share:</p>
                    <a class="icon" href="http://www.facebook.com/sharer.php?u=https://vimeo.com/121327040" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                    <a class="icon" href="https://plus.google.com/share?url=https://vimeo.com/121327040" target="_blank">
                    <i class="fa fa-google"></i></a>
                    <a class="icon" href="https://twitter.com/share?url=https://vimeo.com/121327040&amp;text=Raidho%20by%20True%20Norse%20Films&amp;" target="_blank">
                    <i class="fa fa-twitter"></i></a>
                    <a href="https://vimeo.com/121327040" target="_blank">view film</a>
                </div>
            </li>
            <li><div class="effect-moses"><a href="https://vimeo.com/137496371" target="_blank"><img src="/img/proj/fra-asken.png" alt="" /></a>
                <figcaption>
							<p>Direction</p>
							<p>Writing</p>
							<p>Cinematography</p>
							<p>Editing</p>
						</figcaption>
                </div>
                <div class="gallery-subcaption">
                    <h2>Fra Asken</h2>
                    <p>Additional text could go here to make these objects more acccessible immediately. Perhaps a quick blurb on why they should click.</p>
                    <p style="margin-top: 15px; display:inline-block; float: left; font-weight: bold; font-size: 10pt;">share:</p>
                    <a class="icon" href="http://www.facebook.com/sharer.php?u=https://vimeo.com/137496371" target="_blank">
                    <i class="fa fa-facebook"></i></a>
                    <a class="icon" href="https://plus.google.com/share?url=https://vimeo.com/137496371" target="_blank">
                    <i class="fa fa-google"></i></a>
                    <a class="icon" href="https://twitter.com/share?url=https://vimeo.com/137496371&amp;text=Raidho%20by%20True%20Norse%20Films&amp;" target="_blank">
                    <i class="fa fa-twitter"></i></a>
                    <a href="https://vimeo.com/137496371" target="_blank">view film</a>
                </div>
            </li>
        </ul> 
        <a style="text-decoration: none;" href="/projects.html"><button>See more projects</button></a>
    </div>
</section>
    
<section id="bg-3">
    <div class="vertical-center row">
        <div class="container">  
          <form id="contact" action="index.php" method="post">
            <h2>Say Hello!</h2>
            <h4>Tell us about your project today!</h4>
            <fieldset>
              <input name="name" placeholder="Your name" type="text" tabindex="1" required>
            </fieldset>
            <fieldset>
              <input name="email" placeholder="Your Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
              <input name="telephone" placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
            </fieldset>
            <fieldset>
              <input name="website" placeholder="Your Web Site (optional)" type="url" tabindex="4">
            </fieldset>
            <fieldset>
              <textarea name="comments" placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
              <button style="font-family: 'Oswald', sans-serif;" name="submit" type="submit" id="contact-submit" data-submit="...Sending">SUBMIT</button>
            </fieldset>
          </form>
        <div>
            <h3 class="result hidden">Thank you, we will be in touch shortly</h3></div>
        </div>
    </div>
</section>
   <section id="home-contact" class="container">
    <footer class="footer-distributed">

			<div class="footer-left">
                
                <img style="height: 100px;width: auto;" src="/img/True-Norse-black.png" />

				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="/projects.html">Projects</a>
                    ·
                    <a href="/about-us.html">About us</a>
					·
					<a href="#bg-3">Contact</a>
				</p>

				<p class="footer-company-name">True Norse Films&copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p>Minneapolis, MN</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>(952) 221-6673</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:truenorsefilms@gmail.com">truenorsefilms@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					True Norse Films was established by brothers Kjell and Per Kvanbeck. Dedicated to creating high quality narrative and helping grow and develop businesses through media presence.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/True-Norse-Films-447289181993942/"><i class="fa fa-facebook"></i></a>
                      <a href="https://www.instagram.com/truenorsefilms/"><i class="fa fa-instagram"></i></a>
                      <a href="https://twitter.com/kkvanbeck"><i class="fa fa-twitter"></i></a>
                      <a href="https://vimeo.com/user2810479"><i class="fa fa-vimeo"></i></a>

				</div>

			</div>
        
        <p style="text-align: center; font-style: oblique; font-size: 9pt;">This website Designed and Developed by True Norse Productions.</p>

		</footer>
    </section>
    
    <script type="text/javascript">
        $(document).ready(function()
        {
         $(document).on('submit', '#contact', function()
         {

          var data = $(this).serialize();


          $.ajax({

          type : 'POST',
          url  : 'contact_form.php',
          data : data,
          success :  function(data)
               {
              $("#contact").fadeOut(500).hide(function()
              {
               $(".result").fadeIn(500).removeClass('hidden').show(function()
               {});
              });

               }
          });
          return false;
         });

        });
    </script>
    
    
    <script>
        
    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
        
    $(document).ready(function() {
    if(!isMobile) {

        /* Every time the window is scrolled ... */
        $(window).scroll( function(){
            

        /* Check the location of each desired element */
        $('.hideme').each( function(i){

            var bottom_of_object = $(this).offset().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'1', 'margin-top' : '8%'},750);

            }

        });
        $('.showme').each( function(i){

            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() - '300';

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                $(this).animate({'opacity':'0', 'margin-top' : '7.5%'},750);

            }

        });

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
    </script>
    
   <script>
    var vid = document.getElementById("video1"),
    videoButton = document.getElementById("video1");

    window.ismuted = true;

    videoButton.addEventListener("mouseover", function() {
        /*if (ismuted === true) {
          vid.muted = false;
          ismuted = false;
          } else {
              vid.muted = true;
              ismuted = true;
          };*/
        if (this.hasAttribute("controls")) {
             this.setAttribute("controls","controls")   
          } else {
             this.setAttribute("controls","controls")   
          }
        });
    </script>
    
    <script src="/js/pagetransition.js"></script>    
    
    <!-- Smooth Scroll -->
    <script type="text/javascript" src="/js/smoothscroll.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    


</body>
<div class="se-pre-con"><h2 id="load-msg">Loading, thank you for your patience.</h2></div>

</html>
