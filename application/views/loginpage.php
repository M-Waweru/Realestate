<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta name="google-signin-client_id" content="659303971462-acsge8jv7ieu4d7009hkfk0i7t2olm5g.apps.googleusercontent.com">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>
<body class="grey lighten-3">
	<div class="container">
		<div class="row">
			<div class="col s12 m6 offset-m3">
				<div class="card-panel">
					<div class="row center">
						<h3>Sign In</h3>
						<b>Continue with</b>
					</div>
					<form method="post" action="<?php echo site_url('accounts/signin_auth') ?>">
						<div class="row center">
							<div class="g-signin2" data-onsuccess="onSignIn"></div>
						</div>
						<div>
							<b>OR</b>
						</div>
						<p class="red-text"><?php echo validation_errors(); ?></p>
						<div class="input-field">
							<input type="text" name="emailadd" id="emailadd" required>
							<label for="emailadd">Email address</label>
						</div>
						<div class="input-field">
							<input type="password" name="pwd" id="pwd" required>
							<label for="pwd">Password</label>
						</div>
						<div class="row">
							<p class="red-text"><?php echo $this->session->flashdata('invalidcred') ?></p>
							<p>Don't have an account? <a href="<?php echo base_url('accounts/signup') ?>">Click here to sign up</a></p>
						</div>
						<div class="row">
							<button class="btn blue" type="submit">Sign In</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	function onSignIn(googleUser) {
		var profile = googleUser.getBasicProfile();
  		var id = profile.getId(); // Do not send to your backend! Use an ID token instead.
  		var name = profile.getName();
  		var imageurl = profile.getImageUrl();
  		var emailadd = profile.getEmail(); // This is null if the 'email' scope is not present.

  		window.location.replace("<?php echo site_url('accounts/googlesignin_auth') ?>?name="+name+"&emailadd="+emailadd+"");
  	}
  </script>
  </html>