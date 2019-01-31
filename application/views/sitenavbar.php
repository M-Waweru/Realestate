<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<!-- Title -->
	<title>RealEstate</title>

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
	<div id="preloader">
		<div class="dorne-load"></div>
	</div>

	<!-- ***** Search Form Area ***** -->
	<div class="dorne-search-form d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="search-close-btn" id="closeBtn">
						<i class="pe-7s-close-circle" aria-hidden="true"></i>
					</div>
					<form action="#" method="get">
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
						<a class="navbar-brand" href="<?php echo base_url() ?>">RealEstate</a>
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
										<a class="dropdown-item" href="index.html">Home</a>
										<a class="dropdown-item" href="explore.html">Explore</a>
										<a class="dropdown-item" href="listing.html">Listing</a>
										<a class="dropdown-item" href="contact.html">Contact</a>
									</div>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listings <i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown2">
										<a class="dropdown-item" href="index.html">Home</a>
										<a class="dropdown-item" href="explore.html">Explore</a>
										<a class="dropdown-item" href="listing.html">Listing</a>
										<a class="dropdown-item" href="contact.html">Contact</a>
									</div>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="contact.html">Contact</a>
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
								echo "<a href=''>Account<a>";
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