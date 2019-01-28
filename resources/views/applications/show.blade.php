<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Projects : Science Labs</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
        <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<!-- Loading main css file -->
        {{-- <link rel="stylesheet" href="style.css"> --}}
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
							{{-- <img src="images/logo.png" alt="" class="logo"> --}}
							<div class="logo-type">
								<h1 class="site-title">Research Lab Management</h1>
								{{-- <small class="site-description">Tagline goes here</small> --}}
							</div>
						</a>

						<nav class="main-navigation">
							<button class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="/mainhome_for_user"><img src="images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a href="about.html">About</a></li>
								<li class="menu-item"><a href="services.html">Services</a></li>
								<li class="menu-item current-menu-item"><a href="projects.html">Applications</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

			<div class="page-head" style=background:url(images/page-head-3.jpg)>
				<div class="container">
					<h2 class="page-title">Applications</h2>
                    {{-- <small>Search here and find projects you're interested in </small> --}}
                  
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Details about the Applicant</h2>
						<p>All fields need to be filled. In the 'subject' field give the name of the project you want to work in. In the 'body' field give a summary of your application</p> 
            <p>Here are the applications and click to see thei details</p>
						<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
					</div>
				</div>

				
                                

        <div class="fullwidth-block">
            <div class="container">
              <div class="project-list">
        
            
                    <h1> {{$application->user_name}} </h1>
                    <medium>&nbsp;&nbsp;&nbsp; Applicant : &nbsp;&nbsp;&nbsp;&nbsp; {{$application->user_id}}</medium></br>
                    <medium>&nbsp;&nbsp;&nbsp; Subject :&nbsp;&nbsp;&nbsp;&nbsp; {{$application->subject}}</medium></br>
                    <medium>&nbsp;&nbsp;&nbsp; Application Body : &nbsp;&nbsp;&nbsp;&nbsp; {{$application->body}} </medium>
              </div>
              
            </div>
          </div>
    
                                         
			

				{{-- <div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Send him/her mail</h2>
						<form action="{{Route('mail')}}">
								<input type="text" placeholder="Enter  email">
								<input type="submit" value="Send">
							</form>
						</div>
					</div>
				</div> --}}

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
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>