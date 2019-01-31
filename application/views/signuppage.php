<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="google-signin-client_id" content="659303971462-acsge8jv7ieu4d7009hkfk0i7t2olm5g.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body style="padding-top: 150px;">
	<div class="container">
		<div class="row">
			<div class="col-xs-10 col-sm-10 col-md-8 col-lg-6 col-lg-offset-4">
				<div class="card-panel">
					<div class="form-title">
						<h3>Please Sign Up Below</h3>
					</div>
					<form name="signupform" method="post" action="<?php echo base_url('accounts/signup_auth') ?>">
						<div class="form-row">
							<b>Continue with</b>
						</div>
						<div class="form-row center">
							<div class="g-signin2" data-onsuccess="onSignUp">
							</div>
						</div>
						<div>
							<b>OR</b>
						</div>
						<div class="form-row">
							<p class="text-danger"><?php echo validation_errors(); ?></p>
						</div>
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input class="form-control" type="text" name="fullname" id="fullname" required>
						</div>
						<div class="form-group">
							<label for="emailadd">Email address</label>
							<input class="form-control" type="email" name="emailadd" id="emailadd" required>
						</div>
						<div class="form-group">
							<label for="pwd">Password</label>
							<input class="form-control" type="password" name="pwd" id="pwd" required>
							<p class="text-danger"><?php echo $this->session->flashdata('passlength'); ?></p>
						</div>
						<div class="form-group">
							<label for="pwdagain">Confirm password</label>
							<input class="form-control" type="password" name="pwdagain" id="pwdagain" required>
							<p class="text-danger"><?php echo $this->session->flashdata('passconfirm'); ?></p>
						</div>
						<div class="form-row">
							<p id="capserror" style="display: none; color: red;">WARNING! Caps lock is ON.</p>
							<p class="text-danger"><?php echo $this->session->flashdata('emailinuse'); ?></p>
							<p>Already have an account? <a href="<?php echo base_url('accounts/login') ?>">Click here to sign in</a></p>
						</div>
						<div class="form-row">
							<button class="btn btn-primary" type="submit">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	var pwdinput = document.getElementById("pwd");
	var pwdagaininput = document.getElementById("pwdagain");
	var capserror = document.getElementById("capserror");
	pwdinput.addEventListener("keyup", function(event) {

		if (event.getModifierState("CapsLock")) {
			capserror.style.display = "block";
		} else {
			capserror.style.display = "none"
		}
	});

	pwdagaininput.addEventListener("keyup", function(event) {

		if (event.getModifierState("CapsLock")) {
			capserror.style.display = "block";
		} else {
			capserror.style.display = "none"
		}
	});

	function onSignUp(googleUser) {
		var profile = googleUser.getBasicProfile();
  		var id = profile.getId(); // Do not send to your backend! Use an ID token instead.
  		var name = profile.getName();
  		var imageurl = profile.getImageUrl();
  		var emailadd = profile.getEmail(); // This is null if the 'email' scope is not present.
  		var id_token = googleUser.getAuthResponse().id_token;
  		console.log("Success"+name);

  		window.location.replace("<?php echo site_url('accounts/googlesignout_auth') ?>?id="+id+"&name="+name+"&emailadd="+emailadd+"");
  	}
  </script>
  </html>