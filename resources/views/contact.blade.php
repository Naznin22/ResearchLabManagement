<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Contact : Science Labs</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Loading main css file -->
        <link rel="stylesheet" href="{{ asset('css/styleLast.css') }}" />
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		
		<div class="site-content">
			<header class="site-header" data-bg-image="">
				<div class="container">
					<div class="header-bar">
						<a href="index.html" class="branding">
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Research Lab Management</h1>
								{{-- <small class="site-description">Tagline goes here</small> --}}
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="home menu-item"><a href="/mainhome"><img src="images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a href="about">About</a></li>
								<li class="menu-item"><a href="services">Services</a></li>
								<li class="menu-item"><a href="indexTest">Our projects</a></li>
								<li class="menu-item"><a href="apply">Apply</a></li>

								<li class="menu-item current-menu-item"><a href="contact">Contact</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="page-head" style=background:url(images/page-head-3.jpg)>
				<div class="container">
					<h2 class="page-title">Contact</h2>
<small>This is where you contact</small>				</div>
			</div>

			<main class="main-content">
				
				<div class="fullwidth-block">
					<div class="container">
						 <div class="map" data-latitude="-6.897789" data-longitude="107.621735"></div>

						 <div class="row">
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Address</h2>
						 			<address>
						 				<p>Company Name INC.</p>
										<p>423 Avenue Street, Chicago, IL 60610</p>
									</address>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Telephone</h2>
						 			<p><strong>Office:</strong> +1 800 321 431</p>
									<p><strong>Support:</strong> +1 800 903 412</p>
						 		</div>
						 	</div>
						 	<div class="col-md-4">
						 		<div class="boxed-content">
						 			<h2 class="section-title">Email</h2>
						 			<p><strong>Office:</strong> <a href="mailto:office@companyname.com">office@companyname.com</a></p>
									<p><strong>Support:</strong> <a href="mailto:support@companyname.com">support@companyname.com</a></p>
						 		</div>
						 	</div>
						 </div>

						 <div class="row contact-form">
						 	<form action="{{Route('mail')}}">
						 		<div class="col-md-4">
						 			<p><input type="text" placeholder="Your name..."></p>
						 			<p><input type="text" placeholder="Email..."></p>
						 			<p><input type="text" placeholder="Website..."></p>
						 		</div>
						 		<div class="col-md-8">
						 			<p>
						 				<textarea name="" placeholder="Message"></textarea>
						 			</p>
						 			<p class="text-right">
						 				<input type="submit" value="Send message">
						 			</p>
						 		</div>
						 	</form>
						 </div>
					</div>
				</div>

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="#">
								<input type="text" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Our address</h3>
								<strong>Company name INC</strong>
								<address>592 Avenue Street, Los Angeles, CA 90012</address>
								<a href="tel:+1 800 931 812">+1 800 931 812</a> <br>
								<a href="mailto:office@companyname.com">office@companyname.com</a>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Press room</h3>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque</a></li> 
									<li><a href="#">Laudantium totam aperiam</a></li>
									<li><a href="#">Eaque ipsa quae illo inventore</a></li> 
									<li><a href="#">Veritatis et quasi architecto</a></li>
									<li><a href="#">Vitae dicta sunt explicabo</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Research summary</h3>
								<ul class="arrow-list">
									<li><a href="#">Accusantium doloremque</a></li> 
									<li><a href="#">Laudantium totam aperiam</a></li>
									<li><a href="#">Eaque ipsa quae illo inventore</a></li> 
									<li><a href="#">Veritatis et quasi architecto</a></li>
									<li><a href="#">Vitae dicta sunt explicabo</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Social media</h3>
								<p>Deserunt mollitia animi id est laborum dolorum fuga harum quidem rerum facilis.</p>
								<div class="social-links">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</div>
							</div>
						</div>
					</div> <!-- .row -->

					<p class="colophon">copyright 2014 Company name. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by VandelayDesign.com" target="_blank">VandelayDesign.com</a>. All rights reserved</p>
				</div> <!-- .container -->
			</footer>
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>