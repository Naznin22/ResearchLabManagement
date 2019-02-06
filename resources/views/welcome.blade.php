<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Science Labs</title>

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
			<div id="home" style="background:url(images/back_1.jpg) no-repeat center center fixed">
				<div class="landing-text" style="color:white">
					<h1>Research Lab Management</h1>
					<h3>Learn the basic building blocks.</h3>
					{{-- <a href="#Here" class="btn btn-default btn-lg">Get Started</a> --}}
				</div>
			</div>
		<div class="site-content">
			<header class="site-header collapsed-nav" data-bg-image="">
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
								<li class="home menu-item current-menu-item"><a href="/mainhome_for_user"><img src="images/home-icon.png" alt="Home"></a></li>
								<li class="menu-item"><a href="about">About</a></li>
								<li class="menu-item"><a href="services">Services</a></li>
								{{-- <li class="menu-item"><a href="projects">Our projects</a></li>
								<li class="menu-item"><a href="/apply">Apply</a></li> --}}
								
								<li class="menu-item"><a href="contact">Contact</a></li>
								<li class="menu-item">
								</ul>

								<ul>
									 
								@guest
								<li class="nav-item">
									<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
								</li>
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>
		
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
		
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
							{{-- </li> --}}
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
						
					
							
			</header>

			
			<main class="main-content">
				
			
				<div class="fullwidth-block">
						<div class="row">
								<div class="container">
										<h1>Recent Works</h1>
								</div>
								
							</div>
					<div class="container">
						<div class="row">
								@if(count($projects) > 0 )
								@foreach($projects as $project)
								
							<div class="col-md-3 col-sm-6">
								<div class="feature">
									{{-- <img src="images/icon-research-small.png" alt="" class="feature-image"> --}}
									<h2 class="feature-title"><a href="/projects/{{$project->Project_ID}}">{{$project->Project_Title}}</a></h2>
									{{-- <p>“We hope the nanofabrication community will be excited about the release of this software</p> --}}
								<p>{{str_limit($project->Project_details,200)}}</p>
									<a href="/projects" class="button">Learn more</a>
								</div>
							</div>
							@endforeach
                            @else 
                                    <p>No projects found!</p>
                            @endif
							{{ $projects->appends([ 's' => $s ])->links() }}
							
							
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				
{{-- 
				<div class="fullwidth-block">
					<div class="container">
						<div class="project-list">
							

                            @if(count($projects) > 0 )
                            @foreach($projects as $project)
                            <div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="images/news_1.jpg" alt="Project"></figure>
                                    <h2><a href="/projects/{{$project->Project_ID}}">  {{$project->Project_Title}}</a></h2>
								</div>
                            </div>
                            @endforeach
                            @else 
                                    <p>No projects found!</p>
                            @endif
							{{ $projects->appends([ 's' => $s ])->links() }}
							
						</div>
					</div>
				</div> --}}

				<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<h2 class="section-title">Latest News</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/news_1.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Laboratory Management Web Application Goes Nationwide</a></h2>
									<small class="date">2 oct 2014</small>
									<p>“We hope the nanofabrication community will be excited about the release of this software</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/news_2.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Laboratory Management Web Application Goes Nationwide</a></h2>
									<small class="date">2 oct 2014</small>
									<p>“We hope the nanofabrication community will be excited about the release of this software</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="post">
									<figure class="featured-image"><img src="images/news_3.jpg" alt=""></figure>
									<h2 class="entry-title"><a href="">Laboratory Management Web Application Goes Nationwide</a></h2>
									<small class="date">2 oct 2014</small>
									<p>“We hope the nanofabrication community will be excited about the release of this software</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block -->

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<h2 class="section-title">Our mission and vision</h2>
								<p>“We hope the nanofabrication community will be excited about the release of this software</p>
								<p>“We hope the nanofabrication community will be excited about the release of this software</p>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">Research summaries</h2>
								<ul class="arrow-list has-border">
									<li><a href="#">New Discovery</a></li>
									<li><a href="#">New Discovery</a></li>
									<li><a href="#">New Discovery</a></li>
									<li><a href="#">New Discovery</a></li>
								</ul>
								<a href="#" class="button">Show more</a>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block cta" data-bg-image="images/cta-bg.jpg">
					<div class="container">
						<h2 class="cta-title">Our Success</h2>
						<p>“We hope the nanofabrication community will be excited about the release of this software</p>
						<a href="services" class="button">See details</a>
					</div>
				</div>

				{{-- <div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						<div class="subscribe-form">
							<h2>Join our newsletter</h2>
							<form action="#">
								<input type="text" placeholder="Enter your email">
								<input type="submit" value="Subscribe">
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