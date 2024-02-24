<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Easy Ads | Sell Instantly!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div class="header1">
		<h2>Register</h2>
	</div>

	<form method="post" action="register.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username:</label>
			<input type="text" name="username" required="true" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email:</label>
			<input type="email" name="email" required value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Passoword:</label>
			<input type="password" name="password" required>
		</div>
		<div class="input-group">
			<label>Confirm Password:</label>
			<input type="password" name="cpassword" required>
		</div>
		<div class="input-group">
			</center><button type="submit" name="register" class="btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>