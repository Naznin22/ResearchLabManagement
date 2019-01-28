<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/style.css ">
	   <link rel="stylesheet" href="./css/animate.css">
        <title>Laravel</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

         <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            /* .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            } */

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            /* .m-b-md {
                margin-bottom: 30px;
            } */
        </style>
    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

            <header>
                    <div class="container">
                        <div id="branding">
                            <h1>Research Lab Management</h1>
                        </div>
                        <nav>
                         <ul>
                             <li> <a href="index">Researches</a> </li>
                             {{-- <li> <a href="Workshops.html">Workshops</a> </li> --}}
                             <li> <a href="Newsportal.html">News</a> </li>
                             <li> <a href="indexApply">Applications</a> </li>
                         </ul>
                        </nav>	
					</div>
					
					<div class="container">
							{{-- <a class="navbar-brand" href="{{ url('/') }}">
								{{ config('app.name', 'Laravel') }}
							</a>  --}}
							{{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
								<span class="navbar-toggler-icon"></span>
							</button> --}}
				
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<!-- Left Side Of Navbar -->
								<ul class="navbar-nav mr-auto">
				
								</ul>
				
								<!-- Right Side Of Navbar -->
								<ul class="navbar-nav ml-auto">
									<!-- Authentication Links -->
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
                </header>
            
                <section id="showcase">
                    <div class="container fadeInDown animated">
                        <h1>Easy and Affordable Lab Management</h1>
                        <p>Working on online projects is made easy</p>
                    </div>
                </section>
            {{-- <div class="content">
                <div class="title m-b-md">
                    Research Management Lab   
                </div> --}}

                {{-- <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div> --}}
            </div>
		</div>

		<section id="blank">
				<div class="container">
					
				</div>
		</section>
		
			 <section id = "boxes">
				<div class="container">
					<div class="box">
						<img src="./images/workshop.jpg">
						<a href="Workshop.html"><h3>Join Workshop Now</h3></a>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
					</div>
				
					<div class="box">
						<img src="./images/guy_with_books.png">
						<h3>Check What's New</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
					</div>
				
					<div class="box">
						<img src="./images/Idea_Exchange.png">
						<h3>Find Your Scopes</h3>
						 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
					</div>
				
				</div>	
			</section>
		 
			
		
			<footer>
			  <p>Research Lab Management, Copyright &copy; 2017</p>
			</footer>
    </body>
</html>
