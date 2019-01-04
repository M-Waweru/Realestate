<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/materialize.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/styles.css') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<nav class="light-blue darken-4">
		<div class="nav-wrapper">
			<a href="<?php echo base_url() ?>" class="brand-logo">Real-Estate</a>
			<a href="#" data-target="mobilenav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="<?php echo site_url('accounts/login') ?>">Log In</a></li>
				<li><a href="<?php echo site_url('accounts/signup') ?>">Sign Up</a></li>
			</ul>
		</div>
	</nav>
	<br><br>

	<ul class="sidenav" id="mobilenav">
		<li><a href="<?php echo site_url('accounts/login') ?>">Log In</a></li>
		<li><a href="<?php echo site_url('accounts/signup') ?>">Sign Up</a></li>
	</ul>
</body>
<script src="<?php echo base_url('js/jquery-3.1.1.min.js') ?> "></script>
<script type="text/javascript" src="<?php echo base_url('/js/materialize.min.js') ?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.sidenav').sidenav();
	});
</script>
</html>