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
									<img src="images/sust_logo.png" alt="" class="logo" style="height:70px; width:70px">
									<div class="logo-type">
										{{-- <h1 class="site-title">Research Lab Management</h1> --}}
										<h2 >Research Lab Management</h2>
										{{-- <small class="site-description">Tagline goes here</small> --}}
									</div>
								</a>
		
								<nav class="main-navigation">
									<button class="menu-toggle"><i class="fa fa-bars"></i></button>
									<ul class="menu">
											<li class="menu-item"><a href="/"><img src="images/home-icon.png" alt="Home"></a></li>
											<li class="menu-item current-menu-item"><a href="people">People</a></li>
											<li class="menu-item"><a href="projects">Our projects</a></li>
											<li class="menu-item"><a href="/apply">Apply</a></li>
											{{-- <li class="menu-item"><a href="about">About</a></li> --}}
											<li class="menu-item"><a href="services">Services</a></li>
											<li class="menu-item"><a href="contact">Contact</a></li>
										</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

            <div class="page-head" style=background:url(images/page-head-3.jpg)>
				<div class="container">
					<h2 class="page-title">Our People</h2>
                    {{-- <small>Search here and find projects you're interested in </small> --}}
                  
				</div>
			</div>

			
			
			<main class="main-content">
			<div class="fullwidth-block" data-bg-color="#edf2f4">
					<div class="container">
						{{-- <h2 class="section-title">Our team</h2> --}}
						<div class="row">

								@if(count($people) > 0 )
								@foreach($people as $people)
								
								<div class="col-md-3">
										<div class="team">
											<img src="/storage/file/{{$people->profile->file}}" alt="" class="team-image">
											{{-- <img src="images/person-1.jpg" alt="" class="team-image"> --}}
											{{-- <h3 class="team-name">{{$profile->user->name}}</h3> --}}
										<h2><a href="/profiles/{{$people->profile->id}}">{{$people->profile->user->name}} </a></h2>
										{{-- <h2><a href="/profile">{{$profile->user->name}} </a></h2> --}}

                                            <h1>{{ $people->profile->profession}}</h1>
                                            
                                        </div>
                                </div>
                                
                                <div class="col-md-6">
											<address>
                                                    <h2>Contact Information </h2>
                                            <p>{{$people->profile->address}}</p>
                                            <p>Phone: {{$people->profile->phone_number}} </p>
                                            <p>Email: {{$people->profile->user->email}} </p><br><br>
                                            <h2>Education</h2>
                                            <p>
                                                @foreach ($people->profile->educations as $education)
                                                    <ul>
                                                        <li> {{$education->education}}  </li>
                                                    </ul>
                                                @endforeach
                                            </p><br><br>
                                            <h2>Research Interests</h2>
                                            <p> {{$people->profile->personal_experience}} </p>
                                        </address>
										</div>
									</div>
									
							@endforeach<br><br>
						</ol>
                            @else 
							<h2>Nothing found!</h2>
                            @endif
                            </div>


				

				


			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3">
							<div class="widget">
								<h3 class="widget-title">Admin or User login</h3>
								<ul class="arrow-list">
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
								</ul>
							</div>
                        </div>
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