<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
     <link rel="icon" type="image/ico" sizes="16x16" href="images/logoiconIC.png">
    <title>MOBO</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="keywords" content="Software,Solutions,Services,Binary,2,Quantum,Techbase,Pondicherry,ERP,websites,Company,Technology,Angular,Cloud Computing" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	  <?php
	   $con = mysqli_connect("sql104.epizy.com","epiz_24635884","","epiz_24635884_mobo");
	   if(isset($_POST["submit"]))
	   {
		   $date=date("Y-m-d");
		   $sql = "INSERT INTO  contact(name,email,subject,message,date)VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["subject"]."','".$_POST["message"]."','$date')";
        
			if (mysqli_query($con, $sql)) 
			{
				?>
				<div class="alert alert-success" role="alert">
				     Message sent
				</div>
				<?php
			}
			else
		    {
				?>
				<div class="alert alert-success" role="alert">
				    Error ! try again
				</div>
				<?php
			}

	   }
	  
	?>
</head>

<body>

	

	<div class="body-inner"> 

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner"  >
	<a class="navbar-brand navbar-bg myhead" href="index.html">
	   
		 <img class="img-fluid float-right logoimg" src="images/logoiconic.png" alt="logo">
		</a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto headermenu">
					<li class="nav-item">
						<a class="nav-link " href="index.html" aria-haspopup="true"aria-expanded="false">Home</a>
					
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.html" aria-haspopup="true" aria-expanded="false">
							About
						</a>
					
					</li>
					<li class="nav-item">
						<a class="nav-link" href="service.html"  aria-haspopup="true" aria-expanded="false">
							Services
						</a>
					</li>
						<li class="nav-item">
						<a class="nav-link" href="blog-rightside.html"  aria-haspopup="true"
							aria-expanded="false">
							Blog
						</a>
						
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="contact.php"  aria-haspopup="true"
							aria-expanded="false">
							Contact
						</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<div id="banner-area">
	<img src="images/banner/banner1.jpg" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Contact Us</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Map start here -->
		<div class="map" id="map_canvas" data-latitude="12.001139" data-longitude="-79.752567"
			data-marker="images/marker.png"></div>
		<!--/ Map end here -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="col-md-7">
				<form id="contact-form" action="contact.php" method="post" role="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control" name="subject" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>Are you to ready join us ??</p>
					<br>
					<p><i class="fa fa-home info"></i> 6, Chettikuppam Madura (R.V) & Chetinagar (p),East Street,VILLUPURAM</br>604303 </p>
					<p><i class="fa fa-phone info"></i> moboinnovators@gmail.com</p>
					<p><i class="fa fa-envelope-o info"></i>7358637362</p>
					<p><i class="fa fa-globe info"></i> www.mobotechnologies.com</p>
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->

	<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="blog-rightside.html">PROTECT IT - STAYING SAFE ON PUBLIC WIFI</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by Admin</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div><!-- 1st Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="blog-rightside.html">TOP 10 TECHNOLOGIES TO LEARN IN 2019</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
	            </p>
	          </div>
	        </div><!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="blogr-rightside.html">TECH APPROACHES TO OFFSETTING THE ECOLOGICAL DISASTER OF DEFORESTATION</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by Admin</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Our Service</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	                <p>Web Developement</p>
					<p>App Developement</p>
					<p>Hybrid App Development</p>
					<p>Software Developement</p>
					<p>Digital Marketing</p>
					<p>Cyber Security</p>
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">About Mobo</h3>
	        <p>We are a emerging startup  company in the path of changing the future and guardians of the digital world.</p>
	        <h4>Address</h4>
	        <p>6, Chettikuppam Madura (R.V) & Chetinagar (p),East Street,VILLUPURAM </br> 604303</p>
	        <div class="row">
	          <div class="col-md-8">
	            <h4>Email:</h4>
	            <p>moboinnovators@gmail.com</p>
	          </div>
	          <div class="col-md-6">
	            <h4>Phone No.</h4>
	            <p>7358637362</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Email Address" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="https://www.facebook.com/Mobo-private-limited-2285530295024111/?ref=aymt_homepage_panel&eid=ARDyBWK01URArlaPgeNhW9mtLLmVbC5wp_snHSx8VevPiglgx5EWNdjOV53jqdzFDThCD0qXlylOGTT3">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="https://www.youtube.com/channel/UCLKnphUQBO4T4rrGv_u1uJw/discussion?view_as=subscriber">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="https://www.linkedin.com/groups/13771369/">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Skype" href="https://web.skype.com/">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	          
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019. <span> <a
	              href="https://themefisher.com"></a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
 <script type="text/javascript" >
	function myMap() {
	  var myCenter = new google.maps.LatLng(12.100595,79.905414);
	  var mapCanvas = document.getElementById("map_canvas");
	  var mapOptions = {center: myCenter, zoom: 10};
	  var map = new google.maps.Map(mapCanvas, mapOptions);
	  var marker = new google.maps.Marker({position:myCenter});
	  marker.setMap(map);
	}
	</script>
  <script  type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBjPzMCvReUhc-EqTkLHcui5BUOH-G0UZQ&callback=myMap'></script>
<!-- Main Script -->
<script src="js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5d9475a4db28311764d6de0c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>