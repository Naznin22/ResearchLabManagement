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
								<li class="menu-item"><a href="about">About</a></li>
								<li class="menu-item"><a href="services">Services</a></li>
								<li class="menu-item current-menu-item"><a href="projects">Our projects</a></li>
								<li class="menu-item"><a href="contact">Contact</a></li>
							</ul>
						</nav>

						<div class="mobile-navigation"></div>
					</div>
				</div>
			</header>

		

			<main class="main-content">
			
                <div class="fullwidth-block">
                    <div class="container">
						
                <h1> {{$project->Project_Title}} </h1>
                <h1>Id : {{$project->Project_ID}}</></br>
                <h1>Budget : {{$project->Budget}}</h1></br>
                <h1>Completion :  {{$project->Completion}}</h1></br>
				<h1>Details :  {{$project->Project_details}} </h1>
				<h1>Members: 
				@foreach ($project->members as $member) 
				<a href="/profile">{{$member->project_members}}</a>
				@endforeach
			</h1>
				{{-- <h1>&nbsp;&nbsp;&nbsp; Members: &nbsp;&nbsp;&nbsp;&nbsp; {{$project->members}}</h1> --}}
				
				
				
				<h1><a href="/profile">Profiles>></a></h1>
                </div>
                </div>     
                                         
			

			</main> <!-- .main-content -->

		
		</div>

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>