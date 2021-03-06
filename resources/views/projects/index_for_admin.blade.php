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
											<li class="menu-item "><a href="/"><img src="images/home-icon.png" alt="Home"></a></li>
											<li class="menu-item"><a href="people">People</a></li>
											<li class="menu-item  current-menu-item"><a href="projects">Our projects</a></li>
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
					<h2 class="page-title">Our Projects</h2>
                    <small>Search here and find projects you're interested in </small>
                    <form action="{{route('projects.index')}}"  method="get">
                        <input type="text" class="form-control" name="s" class="form-inline" placeholder="Search Project by Name"
                        value=" {{isset($s) ? $s : '' }} ">
                        <button type="submit" class ="btn btn-success">Search</button>
                 </form>
				</div>
			</div>

			<main class="main-content">
				{{-- <div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">A laboratory is a facility that provides controlled conditions</h2>
						<p>
                                Come join us and help grow a world class research team to support our Connectivity Lab. Work with the commercial side of the Connectivity Lab to transition...
                                Desired Experience: Leadership Experience</p> 

						<p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p>
					</div>
				</div> --}}

				<div class="fullwidth-block">
					<div class="container">
						<div class="project-list">
							
							
                            @if(count($projects) > 0)
                            @foreach($projects as $project)
                            {{-- <div class="project">
								<div class="project-content">
									<figure class="project-image"><img src="images/news_1.jpg" alt="Project"></figure> 
                                    <h2><a href="/projects/{{$project->Project_ID}}">  {{$project->Project_Title}}</a></h2>
								</div>
							</div> --}}
							
							<div class="fullwidth-block" id="{{$project->Project_ID}}">
									<div class="container">
										<h2 class="section-title">{{$project->Project_Title}}</h2>

										
									<p style="Times New Roman"> {{$project->Project_details}}</p><br>
									<div class="row">
											<a href="/storage/file/{{$project->file}}" target="_blank">Read more</a>									</div><br><br>
									<div class="row">
									@foreach ($project->members as $member)
										<div class="col-md-3">
											<div class="team">
												<img src="/storage/file/{{$member->profile->file}}" alt="" class="team-image">
												<h2><a href="/profiles/{{$member->profile->id}}"> {{$member->project_members}}</a> </h2>
											</div>
										</div>
								@endforeach
										{{-- <p>perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</p> --}}
									</div>
								</div>

                            @endforeach
                            @else 
                                    <p>No projects found!</p>
                            @endif
							{{ $projects->appends([ 's' => $s ])->links() }} 
							</div>
						</div>
					</div>
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
								<div class="col-mid-3" >
										<a href="/mainhome" class="btn btn-default" style="float: left;">Go to admin page</a> 
									</div>
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