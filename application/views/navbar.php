<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
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
	<header style="background-color: #341a79;" class="header_area" id="header">
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
</body>
<script src="<?php echo base_url() ?>js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?php echo base_url() ?>js/bootstrap/popper.min.js"></script>
<!-- Bootstrap-4 js -->
<script src="<?php echo base_url() ?>js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="<?php echo base_url() ?>js/others/plugins.js"></script>
<!-- Active JS -->
<script src="<?php echo base_url() ?>js/active.js"></script>
</html>