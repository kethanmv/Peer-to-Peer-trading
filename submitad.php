<?php include('server.php'); 
	if(empty($_SESSION['username'])){
		header('location: login.php');
	}
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Easy Ads | Sell Instantly!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="register.css">
	<link rel="stylesheet" type="text/css" href="main1.css">
</head>
<body>
	<div class="nav">
			<div class="logo">
				<a href="index1.php">
				<img src="images/logo2.png" width="270px" style="vertical-align: 40%;"></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index1.php">Home</a></li>
					<li><a href="listing.php" name="listing">Listings</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="index1.php?logout=1"><img src="images/icon.png" height="30px" style="vertical-align: middle;">Logout</a></li>
				</ul> 
		    </div>
	</div>
	<br><br><br><br><br><br>
	<div class="header1">
		<h2>Submit a Free Classified Ad</h2>
	</div>
	<form action="submitad.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Ad Details</legend>
		<div class="input-group">
			<label>Ad Title:</label>
			<input type="text" name="adtitle" required="true">
		</div>
		<div class="input-group">
			<label>Category:</label>
			<select name="category">
				<option value="properties">Properties</option>
				<option value="cars">Cars</option>
				<option value="furniture">Furniture</option>
				<option value="mobiles">Mobiles</option>
				<option value="fashion">Fashion</option>
				<option value="electronics">Electronics</option>
				<option value="pets">Pets</option>	
			</select>
		</div>
		<div class="input-group">
			<label>Ad Description:</label>
			<textarea name="description" rows="5" cols="55" style="border: 1px solid gray;border-radius:5px;"></textarea>
		</div>
		<div class="input-group">
			<label>Upload Photos:</label>
			<input type="file" name="file" accept="image/jpeg,image/gif,image/png,image/jpg" multiple="multiple">
		</div>
		<div class="input-group" id="pu">
			<label>Price:</label>
			<input type="number" name="cost" min="0" step="any" required="required">
			<span class="unit">₹    </span>			
		</div>
		</fieldset>
		<br>
		<fieldset>
			<legend>Contact Details</legend>
		<div class="input-group">
			<label>Name:</label>
			<input type="text" name="name" required>
		</div>
		<div class="input-group">
			<label>Phone number:</label>
			<input type="tel" name="phnumber" required>
		</div>
		</fieldset>
		<div class="input-group">
			</center><button type="submit" name="submitadd" class="btn">Submit</button>
		</div>
	</form>
	<br><br>
</body>
</html>