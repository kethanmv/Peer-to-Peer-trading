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
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">
		<?php include('errors.php') ?>
		<div class="input-group">
			<label>Username:</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-group">
			<label>Passowrd:</label>
			<input type="password" required name="password">
		</div>
		<div class="input-group">
			</center><button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			Not yet a  a member? <a href="register.php">Sign up</a>
		</p>
	</form>
</body>
</html>