<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/preview/theme/theconference/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Aug 2018 06:04:56 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
 {{-- <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css"> 
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

<link rel="stylesheet" type="text/css" href="styles/news_responsive.css"> --}}
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{ asset('css/style2.css') }}" />
</head>
<body style="background:white">

{{-- <div class="super_container"> --}}

	<!-- Menu -->
{{-- 
	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
						<div class="logo_content">
							<div class="logo_text logo_text_not_ie">The Conference</div>
							<div class="logo_sub">August 06, 2018 - Miami Marina Bay</div>
						</div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item"><a href="indexApply">Research</a></li>
				{{-- <li class="menu_item"><a href="#"></a></li> --}}
				{{-- <li class="menu_item"><a href="#">Speakers</a></li>
				<li class="menu_item"><a href="apply">Apply</a></li>
				<li class="menu_item"><a href="news">News</a></li> --}}
				{{-- <li class="menu_item"><a href="contact.html">Contact</a></li> 
			</ul>
		</div>
		<div class="menu_social">
			<div class="menu_social_title">Follow uf on Social Media</div>
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div> --}}

		<!-- Header -->

		{{-- <header class="header" id="header"> --}}
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
		{{-- </header> --}}

		{{-- <div class="home_content_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content d-flex flex-row align-items-end justify-content-start">
							<div class="current_page">News</div>
							<div class="breadcrumbs ml-auto">
								<ul>
									<li><a href="index-2.html">Home</a></li>
									<li>News</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- News -->

	{{-- <div class="news"> --}}
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<div class="news_items">

						<!-- News Item -->
						<div class="news_item">
							<div class="news_image_container">
								<div class="news_image"><img src="images/news_1.jpg" alt=""></div>
								<div class="date_container">
									<a href="#">
										<span class="date_content d-flex flex-column align-items-center justify-content-center">
											<div class="date_day">15</div>
											<div class="date_month">May</div>
										</span>
									</a>	
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">10 Tips to start learning Laravel</a></div>
								<div class="news_info">
									<ul>
										<!-- News Author -->
										<li>
											<div class="news_author_image"><img src="images/news_author_1.jpg" alt=""></div>
											<span>by <a href="#">Michael Smith</a></span>
										</li>
										<!-- Tags -->
										<li><span>in <a href="events">Events</a></span></li>
										<!-- Comments -->
										<li><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
								</div>
								<div class="button news_button"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Item -->
						<div class="news_item">
							<div class="news_image_container">
								<div class="news_image"><img src="images/news_2.jpg" alt=""></div>
								<div class="date_container">
									<a href="#">
										<span class="date_content d-flex flex-column align-items-center justify-content-center">
											<div class="date_day">15</div>
											<div class="date_month">May</div>
										</span>
									</a>	
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">Ideas for a better skill in Competitive Programming</a></div>
								<div class="news_info">
									<ul>
										<!-- News Author -->
										<li>
											<div class="news_author_image"><img src="images/news_author_1.jpg" alt=""></div>
											<span>by <a href="#">Michael Smith</a></span>
										</li>
										<!-- Tags -->
										<li><span>in <a href="events">Events</a></span></li>
										<!-- Comments -->
										<li><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
								</div>
								<div class="button news_button"><a href="#">Read More</a></div>
							</div>
						</div>

						<!-- News Item -->
						<div class="news_item">
							<div class="news_image_container">
								<div class="news_image"><img src="images/news_3.jpg" alt=""></div>
								<div class="date_container">
									<a href="#">
										<span class="date_content d-flex flex-column align-items-center justify-content-center">
											<div class="date_day">15</div>
											<div class="date_month">May</div>
										</span>
									</a>	
								</div>
							</div>
							<div class="news_body">
								<div class="news_title"><a href="#">Tips to have an amazing conefrence call</a></div>
								<div class="news_info">
									<ul>
										<!-- News Author -->
										<li>
											<div class="news_author_image"><img src="images/news_author_1.jpg" alt=""></div>
											<span>by <a href="#">Michael Smith</a></span>
										</li>
										<!-- Tags -->
										<li><span>in <a href="events">Events</a></span></li>
										<!-- Comments -->
										<li><a href="#">3 Comments</a></li>
									</ul>
								</div>
								<div class="news_text">
									<p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accu msan molestie. Vestibulum ante ipsum primis in faucibus orci luctus.</p>
								</div>
								<div class="button news_button"><a href="#">Read More</a></div>
							</div>
						</div>

						{{-- <!-- Pagination -->
						<div class="pagination">
							<ul>
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
							</ul>
						</div> --}}
					</div>

				{{-- </div> --}}

				{{-- <!-- Sidebar -->
				{{-- class="col-lg-4" 
				<div -- class="col-lg-4" 
					<div class="sidebar">
						 <div class="tickets">
							<div class="background_image" style="background-image:url(images/tickets.jpg)"></div>
							<div class="tickets_inner text-center">
								<div class="tickets_title">Buy Tickets</div>
								<div class="tickets_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis id expl icabo. Esum dolor sit amet, consect etur adipisi cing elit. Perferendis id explica bo.</div>
								<div class="tickets_next"><a href="#">See Next Event</a></div>
								<div class="button tickets_button"><a href="#">Buy Tickets Now!</a></div>
							</div>
						</div> 
						<div class="sidebar_categories">
							<div class="sidebar_categories_title">Categories</div>
							<ul class="categories_list">
								<li><a href="#">The Speakers</a></li>
								<li><a href="#">Tips & Tricks</a></li>
								<li><a href="#">Events & Lifestyle</a></li>
								<li><a href="#">Marketing</a></li>
								<li><a href="#">Uncategorized</a></li>
							</ul>
						</div>
						<div class="latest_posts">
							<div class="latest_posts_title">Latest Posts</div>
							<div class="latest_container">

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_1.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">A big discovery in science</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_2.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">Marketing for everybody</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

								<!-- Latest -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_image"><img src="images/latest_3.jpg" alt=""></div></div>
									<div class="latest_content">
										<div class="latest_title"><a href="#">New ways to improve ypurself</a></div>
										<div class="latest_date">April 02, 2017</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- Call to action -->

	{{-- <div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_content text-center">
						<div class="cta_title">Get your tickets now!</div>
						<div class="button cta_button"><a href="#">Find out more</a></div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-lg-4 footer_col">
						<div class="footer_about">
							<div>
								<a href="#">
									<div class="logo_container d-flex flex-row align-items-start justify-content-start">
										<div class="logo_image"><div><img src="images/logo.png" alt=""></div></div>
										<div class="logo_content">
											<div id="logo_text" class="logo_text logo_text_not_ie">The Conference</div>
											<div class="logo_sub">August 25, 2018 - Miami Marina Bay</div>
										</div>
									</div>
								</a>	
							</div>
							<div class="footer_about_text">
								<p>Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
							</div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col">
						<div class="footer_links">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Speakers</a></li>
								<li><a href="#">Event Dates</a></li>
								<li><a href="#">Information</a></li>
								<li><a href="#">Calendar</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-3 footer_col">
						<div class="footer_links">
							<ul>
								<li><a href="#">Logistics</a></li>
								<li><a href="#">Our Partners</a></li>
								<li><a href="#">Testimonials</a></li>
								<li><a href="#">Price Plans</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-lg-2 footer_col">
						<div class="footer_links">
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Speakers</a></li>
								<li><a href="#">Event Dates</a></li>
								<li><a href="#">Information</a></li>
								<li><a href="#">Calendar</a></li>
							</ul>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="footer_extra">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_extra_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-start justify-content-center">
							<div class="footer_social">
								<div class="footer_social_title">Follow us on Social Media</div>
								<ul class="footer_social_list">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="footer_extra_right ml-lg-auto text-lg-right">
								<div class="footer_extra_links">
									<ul>
										<li><a href="contact.html">Contact us</a></li>
										<li><a href="#">Sitemap</a></li>
										<li><a href="#">Privacy</a></li>
									</ul>
								</div>
								<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
		
{{-- </div> --}}

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>

<!-- Mirrored from colorlib.com/preview/theme/theconference/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Aug 2018 06:04:58 GMT -->
</html>