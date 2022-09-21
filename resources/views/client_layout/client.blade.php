<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bookland.dexignzone.com/xhtml/books-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Sep 2022 01:50:47 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:title" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:description" content="Bookland-Book Store Ecommerce Website"/>
	<meta property="og:image" content="../../makaanlelo.com/tf_products_007/bookland/xhtml/social-image.html"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}" />
	
	<!-- PAGE TITLE HERE -->
	<title>Bookland-Book Website</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('icons/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/swiper/swiper-bundle.min.css')}}">
	
	
	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="{{asset('https://fonts.googleapis.com/')}}">
	<link rel="preconnect" href="{{asset('https://fonts.gstatic.com/')}}" crossorigin>
	<link href="{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap')}}" rel="stylesheet">

</head>

<body>
<div class="page-wraper">
	<div id="loading-area" class="preloader-wrapper-1">
		<div class="preloader-inner">
			<div class="preloader-shade"></div>
			<div class="preloader-wrap"></div>
			<div class="preloader-wrap wrap2"></div>
			<div class="preloader-wrap wrap3"></div>
			<div class="preloader-wrap wrap4"></div>
			<div class="preloader-wrap wrap5"></div>
		</div> 
	</div>
	<!-- Header -->
	<header class="site-header mo-left header style-1">
		<!-- Main Header -->
		<div class="header-info-bar">
			<div class="container clearfix">
				<!-- Website Logo -->
				<div class="logo-header logo-dark">
					<a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
				</div>
				
				<!-- EXTRA NAV -->
				<!-- header search nav -->
				<div class="header-search-nav">
					<form  action="" class="header-item-search">
						<div class="input-group search-input">
							<select class="default-select" name="category">
								<option  value="">Category</option>
								<option value="Photography">Photography </option>
								<option value="Art">Arts</option>
								<option value="Adventure">Adventure</option>
								<option value="Action">Action</option>
								<option value="Games">Games</option>
								<option value="Movies">Movies</option>
								<option value="Comics">Comics</option>
								<option value="Biographies">Biographies</option>
								<option value="Children’s Books">Children’s Books</option>
								<option value="Historical">Historical</option>
								<option value="Contemporary">Contemporary</option>
								<option value="Classics">Classics</option>
								<option value="Education">Education</option>
							</select>
							<input type="text" name="search" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
							<button class="btn" type="submit"><i class="flaticon-loupe"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
		<!-- Main Header -->
		<div class="sticky-header main-bar-wraper navbar-expand-lg">
			<div class="main-bar clearfix">
				<div class="container clearfix">
					<!-- Website Logo -->
					<div class="logo-header logo-dark">
						<a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
					</div>
					
					<!-- Nav Toggle Button -->
					<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>

					
					<!-- Main Nav -->
					<div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header logo-dark">
							<a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
						</div>
						<form class="search-input">
							<div class="input-group">
								<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Search Books Here">
								<button class="btn" type="button"><i class="flaticon-loupe"></i></button>
							</div>
						</form>
						<ul class="nav navbar-nav">
							<li ><a href="/"><span>Home</span></a></li>
                            <li ><a href="#"><span>Categories</span></a></li>
							<li><a href="about-us.html"><span>About Us</span></a></li>
						</ul>
						<div class="dz-social-icon">
							<ul>
								<li><a class="fab fa-facebook-f" target="_blank" href="#"></a></li>
								<li><a class="fab fa-twitter" target="_blank" href="#"></a></li>
								<li><a class="fab fa-linkedin-in" target="_blank" href="#"></a></li>
								<li><a class="fab fa-instagram" target="_blank" href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Main Header End -->
		
	</header>
	<!-- Header End -->
	
	<div class="page-content bg-grey">
            @yield('content')
		
		<!-- Client Start-->
		<div class="bg-white py-5">
			<div class="container">
			<!--Client Swiper -->
				<div class="swiper client-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide"><img src="{{asset('images/client/client1.svg')}}" alt="client"></div>
						<div class="swiper-slide"><img src="{{asset('images/client/client2.svg')}}" alt="client"></div>
						<div class="swiper-slide"><img src="{{asset('images/client/client3.svg')}}" alt="client"></div>
						<div class="swiper-slide"><img src="{{asset('images/client/client4.svg')}}" alt="client"></div>
						<div class="swiper-slide"><img src="{{asset('images/client/client5.svg')}}" alt="client"></div>	
					</div>
				</div>
			</div>
		</div>
		<!-- Client End-->
		
		<!-- Feature Box -->
		<section class="content-inner">
			<div class="container">
				<div class="row sp15">
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg">
								<i class="fa-solid fa-users icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">125,663</h2>
								<p class="font-20">Happy Customers</p>
							</div>
						</div>
					</div>
					<div class=" col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-book icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">50,672</h2>
								<p class="font-20">Book Collections</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-store icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">1,562</h2>
								<p class="font-20">Our Stores</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-6">
						<div class="icon-bx-wraper style-2 m-b30 text-center">
							<div class="icon-bx-lg"> 
								<i class="fa-solid fa-leaf icon-cell"></i>
							</div>
							<div class="icon-content">
								<h2 class="dz-title counter m-b0">457</h2>
								<p class="font-20">Famous Writers</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Box End -->
		
	</div>
	<button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
</div>

<!-- JAVASCRIPT FILES ========================================= -->
<script src="{{asset('js/jquery.min.js')}}"></script><!-- JQUERY MIN JS -->
<script src="{{asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script><!-- BOOTSTRAP MIN JS -->
<script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script><!-- BOOTSTRAP SELECT MIN JS -->
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script><!-- SWIPER JS -->
<script src="{{asset('vendor/counter/waypoints-min.js')}}"></script><!-- WAYPOINTS JS -->
<script src="{{asset('vendor/counter/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
<script src="{{asset('vendor/countdown/counter.js')}}"></script><!-- COUNTER JS -->
<script src="{{asset('js/dz.carousel.js')}}"></script><!-- DZ CAROUSEL JS -->
<script src="{{asset('js/dz.ajax.js')}}"></script><!-- AJAX -->
<script src="{{asset('js/custom.js')}}"></script><!-- CUSTOM JS -->

</body>

<!-- Mirrored from bookland.dexignzone.com/xhtml/books-grid-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Sep 2022 01:51:05 GMT -->
</html>