<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="google-signin-client_id" content="659303971462-acsge8jv7ieu4d7009hkfk0i7t2olm5g.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body class="grey lighten-3">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				<div class="card-panel">
					<div class="row center">
						<h3>Please Sign Up Below</h3>
						<b>Continue with</b>
					</div>
					<form method="post" action="<?php echo site_url('accounts/signup_auth') ?>">
						<div class="row center">
							<div class="g-signin2" data-onsuccess="onSignUp">
							</div>
						</div>
						<div>
							<b>OR</b>
						</div>
						<div class="row">
							<p class="red"><?php echo validation_errors(); ?></p>
						</div>
						<div class="input-field">
							<input type="text" name="fullname" id="fullname" required>
							<label for="fullname">Full Name</label>
						</div>
						<div class="input-field">
							<input type="email" name="emailadd" id="emailadd" required>
							<label for="emailadd">Email address</label>
						</div>
						<div class="input-field">
							<input type="password" name="pwd" id="pwd" required>
							<label for="pwd">Password</label>
						</div>
						<div class="input-field">
							<input type="password" name="pwdagain" id="pwdagain" required>
							<label for="pwdagain">Confirm password</label>
						</div>
						<div class="row">
							<p class="red"><?php echo $this->session->flashdata('emailinuse'); ?></p>
							<p>Already have an account? <a href="<?php echo base_url('accounts/login') ?>">Click here to sign in</a></p>
						</div>
						<div class="row">
							<button class="btn blue" type="submit">Sign Up</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function onSignUp(googleUser) {
		var profile = googleUser.getBasicProfile();
  		var id = profile.getId(); // Do not send to your backend! Use an ID token instead.
  		var name = profile.getName();
  		var imageurl = profile.getImageUrl();
  		var emailadd = profile.getEmail(); // This is null if the 'email' scope is not present.
  		console.log("Success"+name);

  		window.location.replace("<?php echo site_url('accounts/googlesignout_auth') ?>?id="+id+"&name="+name+"&emailadd="+emailadd+"");
  	}
  </script>
  </html>