<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta name="google-signin-client_id" content="659303971462-acsge8jv7ieu4d7009hkfk0i7t2olm5g.apps.googleusercontent.com">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body style="padding-top: 150px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-6 col-lg-offset-4">
				<p class="text-danger"><?php echo $this->session->flashdata('loginfirst') ?></p>
				<div class="form-title">
					<h3>Sign In</h3>
				</div>
				<form method="post" action="<?php echo site_url('accounts/signin_auth') ?>">
					<div class="form-row">
						<b>Continue with</b>
					</div>
					<div class="form-row center" style="padding: 5px;">
						<div class="g-signin2" data-onsuccess="onSignIn"></div>
					</div>
					<div>
						<b>OR</b>
					</div>
					<p class="red-text"><?php echo validation_errors(); ?></p>
					<div class="form-group">
						<label for="emailadd">Email address</label>
						<input class="form-control" type="text" name="emailadd" id="emailadd" required>
					</div>
					<div class="form-group">
						<label for="pwd">Password</label>
						<input class="form-control" type="password" name="pwd" id="pwd" required>
					</div>
					<div class="form-row">
						<p id="capserror" style="display: none; color: red;">WARNING! Caps lock is ON.</p>
						<p class="text-danger"><?php echo $this->session->flashdata('invalidcred') ?></p>
						<p>Don't have an account? <a href="<?php echo base_url('accounts/signup') ?>">Click here to sign up</a></p>
					</div>
					<div class="form-row">
						<button class="btn btn-primary" type="submit">Sign In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var pwdinput = document.getElementById("pwd");
	var capserror = document.getElementById("capserror");
	pwdinput.addEventListener("keyup", function(event) {

		if (event.getModifierState("CapsLock")) {
			capserror.style.display = "block";
		} else {
			capserror.style.display = "none"
		}
	});

	function onSignIn(googleUser) {
		var profile = googleUser.getBasicProfile();
  		var id = profile.getId(); // Do not send to your backend! Use an ID token instead.
  		var name = profile.getName();
  		var imageurl = profile.getImageUrl();
  		var emailadd = profile.getEmail(); // This is null if the 'email' scope is not present.
  		var id_token = googleUser.getAuthResponse().id_token;

  		window.location.replace("<?php echo site_url('accounts/googlesignin_auth') ?>?name="+name+"&emailadd="+emailadd+"");
  	}
  </script>
  </html>