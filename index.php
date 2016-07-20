<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		telephone = $_POST['telephone'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form'; 
		$to = 'example@domain.com'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>


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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="js/sss.js"></script>
    <link rel="stylesheet" href="css/sss.css" type="text/css" media="all">
    <script>
        jQuery(function($) {
        $('.slider').sss({
            slideShow : true, // Set to false to prevent SSS from automatically animating.
            startOn : 0, // Slide to display first. Uses array notation (0 = first slide).
            transition : 1500, // Length (in milliseconds) of the fade transition.
            speed : 8000, // Slideshow speed in milliseconds.
            showNav : false, // Set to false to hide navigation arrows.
        });
        });
    </script>
    <script>
        $(window).load(function() {
            // Animate loader off screen
            $(".se-pre-con").fadeOut("slow");;
        });
    </script>
</head>

<body>
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
                     <svg id="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 100">
                      <title>TrueNorse</title>
                      <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1">
                          <text class="text-1" transform="translate(-66 83.5)">TRUE</text>
                          <line class="cls-1" x1="16.38" x2="16.38" y1="83.46"/>
                          <line class="cls-2" y2="27.73" x1="16.41" y1="11.32"/>
                          <line class="cls-3" x2="26.63" y2="65.91" x1="16.29" y1="55.57"/>
                           <text class="text-1" transform="translate(30 83.5)">NORSE</text>
                        </g>
                      </g>
                    </svg>
            </a>
          </div>
          <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Home</a></li>
              <li class="active"><a href="#">Portfolio</a></li>
              <li><a href="#">Shop</a></li>
              <li><a href="#">Contact Us</a></li>
              <li>
                 <div id="soc-header">
                      <a href="#"><img src="img/facebook.png"/></a>
                      <a href="#"><img src="img/Instagram.png"/></a>
                      <a href="#"><img src="img/twitter.png"/></a>
                      <a href="#"><img src="img/Vimeo.png"/></a>
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
                <img class="col-md-6" src="img/diagram-1-1.png" />
                <img class="col-md-6" src="img/diagram-1-2.png" />
            </div>
            <div>
                <img class="col-md-6" src="img/diagram-2-1.png" />
                <img class="col-md-6" src="img/diagram-2-2.png" />
            </div>
                <div>
                <img class="col-md-6" src="img/diagram-3-1.png" />
                <img class="col-md-6" src="img/diagram-3-2.png" />
            </div>
            </div>    
        </div>
        <div class="bottom-center showme">
            <h4 style="color: #f2f2f2; font-weight: 100; font-style: oblique; font-size: 10pt;">scroll down</h4>
        </div>
    </div>
</div>
</section>
<section class="featured">
    <div id="featured" class="hideme container">
        <div id="item1" class="row">
          <div class="col-sm-6">
              <iframe id="video1" src="https://player.vimeo.com/video/63204198" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
              <div class="row">
                  <img class="col-xs-4" src="img/laurel-runner-up.png"/>
                  <img class="col-xs-4" src="img/laurel-best-mn.png"/>
                  <img class="col-xs-4" src="img/laurel-canadian-script.png"/>
              </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
                <h2 class="col-xs-12">GOLDEN</h2>
            </div>
            <div class="row">
                <h4 class="col-xs-12 oblique">10 min. | Short Film</h4>
            </div>
              <br>
            <p>Hank is a simple man, he has spent the last fifty years with his loving wife Maria. He is unaccustomed to change and set in his routines. On his fiftieth wedding anniversary Hank arrives home to find that his beloved Maria has passed away. Unable to process the situation Hank falls into his daily routines. A phone call from his daughter reminds Hank of the anniversary and he is determined to have one last perfect day with Maria. At dinner Hank comes to the realization that it is time to say goodbye to his partner.</p>
          </div>
        </div>
        <div id ="item2" class="row">
            <div class="col-sm-6 col-sm-push-6">
              <iframe id="video2" width="100%" src="https://www.youtube.com/embed/CPkFqDOXRVk" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <br>
                <div class="row">
                    <h2 class="col-xs-12">DR. SMITH'S NATIONAL COMMERCIAL</h2>
                </div>
                <div class="row">
                    <h4 class="col-xs-12 oblique">Director | Commercial</h4>
                </div>
                  <br>
                <p>Hank is a simple man, he has spent the last fifty years with his loving wife Maria. He is unaccustomed to change and set in his routines. On his fiftieth wedding anniversary Hank arrives home to find that his beloved Maria has passed away. Unable to process the situation Hank falls into his daily routines. A phone call from his daughter reminds Hank of the anniversary and he is determined to have one last perfect day with Maria. At dinner Hank comes to the realization that it is time to say goodbye to his partner.</p>
            </div>
        </div>
        <div id ="item3" class="row">
          <div class="col-sm-6">
              <iframe id="video3" src="https://player.vimeo.com/video/150197835" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
            <div class="col-sm-6">
                <div class="row">
                    <h2 class="col-xs-12">THE RED LOOKING GLASS</h2>
                </div>
                <div class="row">
                    <h4 class="col-xs-12 oblique">Director/DP | Music Narrative</h4>
                </div>
                  <br>
                <p>Order vinyl and buy the new digital album at <a href="https://www.reflectivore.bandcamp.com">reflectivore.bandcamp.com</a> now.</p>
                <p>The Red Looking Glass short film is a collaboration between Reflectivore and True Norse Films. As we began the process of marrying image and sound we realized that there were many layers of symbolism and literalism that reached beyond the piece. While the song is about loss, it is even more about the journey of a beautiful, intelligent, caring and inspirational person that served as mother, wife, and friend to some involved in this project. A person with a rare approach to making the most of her time, no matter how limited it was.</p>
                <p><a href="https://www.vimeo.com/148901039">Click Here to see the behind the scenes footage</a></p>
            </div>
        </div>
      </div>
</section>
<section id="bg-2">
    <div class="vertical-center">
        <div class="col-md-6 col-md-offset-4">
            <h1 style="color: #012340;">Who we are</h1>
            <p style="color: #012340; font-weight: 600;">True Norse Films is a production company based out of Minneapolis, MN. True Norse focuses on creating narratives that explore the intricacies of human relationships. We also offer creative approaches to photography and brand storytelling, to enhance your visibility in the online market place. True Norse Films was formed by brothers Kjell and Per Kvanbeck in the winter of 2012.</p>
        </div>
    </div>
</section>
<section id="gallery">
    <div >
        <h1 style="text-align: center;">More Work</h1>
        <ul id="myContent"> 			
            <li><div class="effect-moses"><img src="/img/proj/raidho-2.png" alt="" />
                <figcaption>
							<h2>Raidho</h2>
							<p>5 min | Short Film</p>
							<a href="https://player.vimeo.com/video/44048804?color=42dac3" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/deeply-2.png" alt="" />
                <figcaption>
							<h2>Deeply</h2>
							<p>3 min | Short Film</p>
							<a href="https://player.vimeo.com/video/102868220?" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/face.jpg" alt="" />
                <figcaption>
							<h2 style="text-align: right;">Air Between Us</h2>
							<p style="text-align: right;">9 min | Short Film</p>
							<a href="https://player.vimeo.com/video/121327040" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/fra-asken.png" alt="" />
                <figcaption>
							<h2>Fra Asken</h2>
							<p>11 min | Short Film</p>
							<a href="https://player.vimeo.com/video/137496371" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/2015-beard-cont.jpg" alt="" />
                <figcaption>
							<h2>MBMC Contest</h2>
							<p>3 min | Short</p>
							<a href="https://player.vimeo.com/video/130943487" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/living-narrative.jpg" alt="" />
                <figcaption>
							<h2>Living Narrative</h2>
							<p>1 min | Commercial</p>
							<a href="https://player.vimeo.com/video/138341234" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
            <li><div class="effect-moses"><img src="/img/proj/2015-beard-cont.jpg" alt="" />
                <figcaption>
							<h2></h2>
							<p>3 min | Short</p>
							<a href="https://player.vimeo.com/video/130943487" target="_blank">View more</a>
						</figcaption>
                </div>
            </li>
        </ul> 
    </div>
</section>
    
<section id="bg-3">
    <div class="container">
  		<div class="row">
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Form Example</h1>
				<form class="form-horizontal" role="form" method="post" action="index.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
				</form> 
			</div>
		</div>
	</div> 
</section>
    
<section class="footer">
    <div id="footer" class="container">
        <div class="row">
          <div class="col-sm-6">
              <a href="#">Link1</a>
              <a href="#">Link1</a>
              <a href="#">Link1</a>
              <a href="#">Link1</a>
            </div>
      </div>
    </div>
</section>
   
    
    
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

                $(this).animate({'opacity':'0', 'margin-top' : '7.5%'},0);

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
    
    <!-- Smooth Scroll -->
    <script type="text/javascript" src="js/smoothscroll.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    


</body>
    <div class="se-pre-con"><h2 id="load-msg">Loading, thank you for your patience.</h2></div>

</html>
