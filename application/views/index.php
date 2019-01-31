<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>Cathbri RealEstate</title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo base_url() ?>img/core-img/favicon.ico">

	<!-- Core Stylesheet -->
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
	<!-- <link href="<?php echo base_url() ?>css/bootstrap/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Responsive CSS -->
	<link href="<?php echo base_url() ?>css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
	<!-- Preloader -->
<!-- 	<div id="preloader">
		<div class="dorne-load"></div>
	</div> -->

	<!-- ***** Search Form Area ***** -->
	<div class="dorne-search-form d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="search-close-btn" id="closeBtn">
						<i class="pe-7s-close-circle" aria-hidden="true"></i>
					</div>
					<form action="<?php echo base_url('search') ?>" method="get">
						<input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Destinations or Events">
						<input type="submit" class="d-none" value="submit">
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- ***** Header Area Start ***** -->
	<header class="header_area" id="header">
		<div class="container-fluid h-100">
			<div class="row h-100">
				<div class="col-12 h-100">
					<nav class="h-100 navbar navbar-expand-lg">
						<a class="navbar-brand" href="<?php echo base_url() ?>">Cathbri RealEstate</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#dorneNav" aria-controls="dorneNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
						<!-- Nav -->
						<div class="collapse navbar-collapse" id="dorneNav">
							<ul class="navbar-nav mr-auto" id="dorneMenu">
								<li class="nav-item active">
									<a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="<?php echo base_url('listing/typelisting?type=sale') ?>">For Sale</a>
										<a class="dropdown-item" href="<?php echo base_url('listing/typelisting?type=rent') ?>">For Rent</a>
										<a class="dropdown-item" href="<?php echo base_url('listing/typelisting?type=new') ?>">New Developments</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
										<a class="dropdown-item" href="<?php echo base_url('listing/categorylisting?category=flats') ?>">Flats and apartments</a>
										<a class="dropdown-item" href="<?php echo base_url('listing/categorylisting?category=houses') ?>">Houses</a>
										<a class="dropdown-item" href="<?php echo base_url('listing/categorylisting?category=commercial') ?>">Commercial</a>
										<a class="dropdown-item" href="<?php echo base_url('listing/categorylisting?category=land') ?>">Land</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('welcome/contactus') ?>">Contact</a>
								</li>
							</ul>
							<!-- Search btn -->
							<div class="dorne-search-btn">
								<a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
							</div>
							<!-- Signin btn -->
							<?php 
							if ($this->session->userdata('emailadd')!=''){
								echo "<div class='dorne-signin-btn'>";
								echo "<a href='".base_url('accounts/manageacc')."'>Account<a>";
								echo "</div>";
								echo "<div class='dorne-signin-btn'>";
								echo "<a href='".base_url('accounts/logout')."'>Logout<a>";
								echo "</div>";
							} else {
								echo "<div class='dorne-signin-btn'>";
								echo "<a href=".base_url('accounts/login').">Sign in or Register</a>";
								echo "</div>";
							}
							?>
							<!-- Add listings btn -->
							<div class="dorne-add-listings-btn">
								<a href="<?php echo base_url('listing/stepone') ?>" class="btn dorne-btn">+ Add Listings</a>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- ***** Header Area End ***** -->

	<!-- ***** Welcome Area Start ***** -->
	<section class="dorne-welcome-area bg-img bg-overlay" style="background-image: url(<?php echo base_url() ?>img/homepage-img/nairobiorangesky.jpg);">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-12 col-md-10">
					<div class="hero-content">
						<h2>Find your new home</h2>
						<h4>This is your trusted home guide</h4>
					</div>
					<!-- Hero Search Form -->
					<div class="hero-search-form">
						<!-- Tabs -->
						<div class="nav nav-tabs" id="heroTab" role="tablist">
							<a class="nav-item nav-link active" id="navforsale-tab" data-toggle="tab" href="#navforsale" role="tab" aria-controls="navforsale" aria-selected="true">For Sale</a>
							<a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab" aria-controls="nav-events" aria-selected="false">For Rent</a>
						</div>
						<!-- Tabs Content -->
						<div class="tab-content" id="nav-tabContent">
							<div class="tab-pane fade show active" id="navforsale" role="tabpanel" aria-labelledby="navforsale-tab">
								<h6>What are you looking for?</h6>
								<form action="<?php echo base_url('search') ?>" method="get">
									<select class="custom-select">
										<option selected>Locations</option>
										<option value="1">New York</option>
										<option value="2">Latvia</option>
										<option value="3">Dhaka</option>
										<option value="4">Melbourne</option>
										<option value="5">London</option>
									</select>
									<select class="custom-select">
										<option selected>All Catagories</option>
										<option value="1">Flats and apartments</option>
										<option value="2">Houses</option>
										<option value="3">Commercial</option>
										<option value="4">Land</option>
									</select>
									<select class="custom-select">
										<option selected>Price Range</option>
										<option value="1">$100 - $499</option>
										<option value="2">$500 - $999</option>
										<option value="3">$1000 - $4999</option>
									</select>
									<button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
								</form>
							</div>
							<div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
								<h6>What are you looking for?</h6>
								<form action="<?php echo base_url('search') ?>" method="get">
									<select class="custom-select">
										<option selected>Locations</option>
										<option value="1">New York</option>
										<option value="2">Latvia</option>
										<option value="3">Dhaka</option>
										<option value="4">Melbourne</option>
										<option value="5">London</option>
									</select>
									<select class="custom-select">
										<option selected>All Catagories</option>
										<option value="1">Flats and apartments</option>
										<option value="2">Houses</option>
										<option value="3">Commercial</option>
										<option value="4">Land</option>
									</select>
									<select class="custom-select">
										<option selected>Price Range</option>
										<option value="1">$100 - $499</option>
										<option value="2">$500 - $999</option>
										<option value="3">$1000 - $4999</option>
									</select>
									<button type="submit" class="btn dorne-btn"><i class="fa fa-search pr-2" aria-hidden="true"></i> Search</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero Social Btn -->
		<div class="hero-social-btn">
			<div class="social-title d-flex align-items-center">
				<h6>Follow us on Social Media</h6>
				<span></span>
			</div>
			<div class="social-btns">
				<a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
				<a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
			</div>
		</div>
	</section>
	<!-- ***** Welcome Area End ***** -->

	<!-- ***** Catagory Area Start ***** -->
<!-- 	<section class="dorne-catagory-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="all-catagories">
						<div class="row">
							<div class="col-12 col-sm-6 col-md">
								<div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
									<div class="catagory-content">
										<img src="<?php echo base_url() ?>img/core-img/icon-1.png" alt="">
										<a href="#">
											<h6>Hotels</h6>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md">
								<div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
									<div class="catagory-content">
										<img src="<?php echo base_url() ?>img/core-img/icon-2.png" alt="">
										<a href="#">
											<h6>Restaurants</h6>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md">
								<div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
									<div class="catagory-content">
										<img src="<?php echo base_url() ?>img/core-img/icon-3.png" alt="">
										<a href="#">
											<h6>Shopping</h6>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-md">
								<div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
									<div class="catagory-content">
										<img src="<?php echo base_url() ?>img/core-img/icon-4.png" alt="">
										<a href="#">
											<h6>Beauty &amp; Spa</h6>
										</a>
									</div>
								</div>
							</div>
							<div class="col-12 col-md">
								<div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
									<div class="catagory-content">
										<img src="<?php echo base_url() ?>img/core-img/icon-5.png" alt="">
										<a href="#">
											<h6>Cinema</h6>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ***** Catagory Area End ***** -->

	<!-- ***** About Area Start ***** -->
	<section class="dorne-about-area section-padding-0-100">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="about-content text-center">
						<h2>Discover your next home with <br><span>Dorne</span></h2>
						<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce quis tempus elit. Sed efficitur tortor neque, vitae aliquet urna varius sit amet. Ut rhoncus, nunc nec tincidunt volutpat, ex libero.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** About Area End ***** -->

	<!-- ***** Features Restaurant Area Start ***** -->
	<section class="dorne-features-restaurant-area bg-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section-heading text-center">
						<span></span>
						<h4>Featured Homes</h4>
						<p>Swipe Left or Right</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="features-slides owl-carousel">
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo site_url() ?>img/bg-img/feature-6.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">8.5</a>
								<a href="#"><img src="<?php echo site_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>Martha’s bar</h5>
									<p>Manhathan</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo site_url() ?>img/bg-img/feature-6.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">8.5</a>
								<a href="#"><img src="<?php echo site_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>Martha’s bar</h5>
									<p>Manhathan</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo base_url() ?>img/bg-img/feature-7.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">9.5</a>
								<a href="#"><img src="<?php echo base_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>Delux Restaurant</h5>
									<p>Paris</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo base_url() ?>img/bg-img/feature-8.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">8.2</a>
								<a href="#"><img src="<?php echo base_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>Jim’s corner Pub</h5>
									<p>Madrid</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo base_url() ?>img/bg-img/feature-9.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">8.7</a>
								<a href="#"><img src="<?php echo base_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>tower Risto bar</h5>
									<p>Sydney</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<!-- Single Features Area -->
						<div class="single-features-area">
							<img src="<?php echo base_url() ?>img/bg-img/feature-10.jpg" alt="">
							<!-- Rating & Map Area -->
							<div class="ratings-map-area d-flex">
								<a href="#">9.8</a>
								<a href="#"><img src="<?php echo base_url() ?>img/core-img/map.png" alt=""></a>
							</div>
							<div class="feature-content d-flex align-items-center justify-content-between">
								<div class="feature-title">
									<h5>Pizzeria venezia</h5>
									<p>Hong Kong</p>
								</div>
								<div class="feature-favourite">
									<a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Features Restaurant Area End ***** -->

	<!-- ***** Clients Area Start ***** -->
<!-- 	<div class="dorne-clients-area section-padding-100">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="clients-logo d-md-flex align-items-center justify-content-around">
						<img src="<?php echo base_url() ?>img/clients-img/1.png" alt="">
						<img src="<?php echo base_url() ?>img/clients-img/2.png" alt="">
						<img src="<?php echo base_url() ?>img/clients-img/3.png" alt="">
						<img src="<?php echo base_url() ?>img/clients-img/4.png" alt="">
						<img src="<?php echo base_url() ?>img/clients-img/5.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- ***** Clients Area End ***** -->

	<!-- ****** Footer Area Start ****** -->
	<footer class="dorne-footer-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 d-md-flex align-items-center justify-content-between">
					<div class="footer-text">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
					<div class="footer-social-btns">
						<a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
						<a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ****** Footer Area End ****** -->

	<!-- jQuery-2.2.4 js -->
	<script src="<?php echo base_url() ?>js/jquery/jquery-2.2.4.min.js"></script>
	<!-- Popper js -->
	<script src="<?php echo base_url() ?>js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap-4 js -->
	<script src="<?php echo base_url() ?>js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="<?php echo base_url() ?>js/others/plugins.js"></script>
	<!-- Active JS -->
	<script src="<?php echo base_url() ?>js/active.js"></script>
</body>

</html>