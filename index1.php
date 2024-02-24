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
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Passero+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="main1.css" />
	<script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
</head>
<body>
	<div class="Wrapper">
		<div class="nav">
			<div class="logo">
				<a href="index1.php">
				<img src="images/logo2.png" width="270px"></a>
			</div>
			<div class="menu">
				<ul>
					<li><button value='Submit Ad' style="border: 2px solid red;background-color:#000000;padding-right: 20px;padding: 10px 25px;border-radius: 4px;margin-left: 10px;vertical-align: 0%;font-size: 20px;"><a href="submitad.php" class="blah" style="color:red;padding: 5px;">Submit Ad</a></button></li>
					<li><a href="index1.php">Home</a></li>
					<li><a href="listing.php" name="listing">Listings</a></li>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="index1.php?logout=1"><img src="images/icon.png" height="30px" style="vertical-align: middle;">Logout</a></li>
				</ul> 
		    </div>
		</div>
		<br><br><br><br>
			<form method="post" action="search.php">
			<div class="search-box">
			<input class="search-txt" type="text" name="searcht" required placeholder="Type to Search">
			</div><div><button class="search-btn" name="searchbut"><img src="images/search.png"></button></div>
			</div>
			</form>	
		
		<div id="RightFloatAds" style="left:1300px; position: fixed; text-align: center; top: 100px;">
			<section>
  				<a href="https://www.amazon.com/"><img class="mySlides" src="images/ads/1.gif" style="width:160px;height:600px;"></a>
  				<a href="https://www.saltlife.com/"><img class="mySlides" src="images/ads/2.jpg" style="width:160px;height:600px;"></a>
  				<a href="https://www.mcdonalds.com/us/en-us.html"><img class="mySlides" src="images/ads/3.jpg" style="width:160px;height:600px;"></a>
  				<a href="https://www.jaguar.in/jaguar-range/f-type/index.html"><img class="mySlides" src="images/ads/4.jpg" style="width:160px;height:600px;"></a>
  				<a href="https://www.paramountequity.com/"><img class="mySlides" src="images/ads/5.jpg" style="width:160px;height:600px;"></a>
			</section>
			<script>
				var myIndex = 0;
				carousel();
				function carousel() {
				    var i;
				    var x = document.getElementsByClassName("mySlides");
				    for (i = 0; i < x.length; i++) {
				       x[i].style.display = "none";
				    }
				    myIndex++;
				    if (myIndex > x.length) {myIndex = 1}
				    x[myIndex-1].style.display = "block";
				    setTimeout(carousel, 3000);
				}
			</script>
		</div>
	    <div class="header">
	    	<br><br>
	    	<h1>Browse Categories</h1>
	    </div>
	    <br><br><br><br><br><br><br><br><br>
	    <div class="cattable">
	    	<table cellpadding="0" cellspacing="25px" width="70%" class="table1" style="padding-left: 130px;">
	    		<tr>
	    			<td class="property">
	    				<a href="property.php">
	    				<div class="card">
	    					<img src="images/property.png" alt="Properties" class="icon">
	    					<div class="container">
	    						<h4><b>Properties</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    			<td class="cars">
	    				<a href="cars.php">
	    				<div class="card">
	    					<img src="images/cars.png" alt="Cars" class="icon">
	    					<div class="container">
	    						<h4><b>Cars</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    			<td class="furniture">
	    				<a href="furniture.php">
	    				<div class="card">
	    					<img src="images/furniture.png" alt="Furniture" class="icon">
	    					<div class="container">
	    						<h4><b>Furniture</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    			<td class="mobiles">
	    				<a href="mobiles.php">
	    				<div class="card">
	    					<img src="images/mobiles.png" alt="Mobiles" class="icon">
	    					<div class="container">
	    						<h4><b>Mobiles</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    		</tr>
	    		<tr>
	    			<td class="fashion">
	    				<a href="fashion.php">
	    				<div class="card">
	    					<img src="images/fashion.png" alt="Fashion" class="icon">
	    					<div class="container">
	    						<h4><b>Fashion</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    			<td class="Electronics">
	    				<a href="elec.php">
	    				<div class="card">
	    					<img src="images/electronics.png" alt="Electronics" class="icon">
	    					<div class="container">
	    						<h4><b>Electronics</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    			<td class="pets">
	    				<a href="pets.php">
	    				<div class="card">
	    					<img src="images/pets.png" alt="Pets" class="icon">
	    					<div class="container">
	    						<h4><b>Pets</b></h4>
	    					</div>
	    				</div>
	    				</a>
	    			</td>
	    		</tr>
	    	</table>
	    </div>
	</div>
</body>
</html>