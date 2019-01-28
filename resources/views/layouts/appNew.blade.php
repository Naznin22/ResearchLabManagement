

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
        {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" /> --}}
		
	   <link rel="stylesheet" href="./css/animate.css">
        <title>Laravel</title>

        {{-- <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}

        
    </head>
    <body>
            
					<nav class="navbar navbar-default " role="navigation">
							<div class="container=fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
										<span class="sr-only">Toggle</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="/mainhome">Research Lab Management</a>
								</div>
								<div class="collapse navbar-collapse" id="navbar-collapse-main">
									<ul class="nav navbar-nav navbar-right">
											<li> <a href="index">Researches</a> </li>
											<li> <a href="news">News</a> </li>
											<li> <a href="apply">Apply</a> </li>

											@if (Route::has('login'))
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
											
										@endif
										
									</ul>
								</div>
							</div>
                        </nav>

                        @include('inc.messages')  
						@yield('content')

						<footer class="container-fluid text-center">
								<div class="col-sm-4">
									<h3>Contact us</h3>
									<br>
									<h4>contact info here</h4>
								</div>
								<div class="col-sm-4">
									<h3>Connect</h3>
									<a href="#" class="fa fa-facebook"></a>
									<a href="#" class="fa fa-twitter"></a>
									<a href="#" class="fa fa-google"></a>
									<a href="#" class="fa fa-linkedin"></a>
									<a href="#" class="fa fa-youtube"></a>
									<a href="#" class="fa fa-instagram"></a>
								</div>
								<div class="col-sm-4">
									
								</div>
							</footer>
    </body>
</html>
					
					
            
						
		