<?php include('server.php'); 
	if(empty($_SESSION['username'])){
		header('location: login.php');
	}
?> 
<?php 
	$db = mysqli_connect('localhost','root','','project');
	$key;
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM listings WHERE id = $id";
		$result = mysqli_query($db,$sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Easy Ads | Sell Instantly!</title>
	<link rel="stylesheet" type="text/css" href="main1.css">
	<link rel="stylesheet" type="text/css" href="adpage.css">
</head>
<body>
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
	<br><br><br><br><br><br>
	<div class="adpage" style="width: 1000px;margin:auto;padding:10px;">
		<?php 
		if(mysqli_num_rows($result)==0){
			echo "<h1 align='center'><p>No Ad listings.</p></h1>";
		}
		while ($row = mysqli_fetch_array($result)){
			$id=$row['id'];
			$adname=$row['ad_name'];
			$name=$row['name'];
			$price=$row['price'];
			$id=$row['id'];
			$phno=$row['phno'];
			$addes=$row['ad_des'];
			$cat=$row['category'];
			$date=$row['upload_date'];
			$image="<img src=".$row['image']." style='width:600px;height:400px;border:1px solid black;'>";
			if($row['image']==''){
				$image="<img src='images/no_image.png' style='width:600px;height:400px;border:1px solid black;'>"; 
			}
		}
		?>
		<div class="r" style="padding-left: 20px;">
				<div class="a1"><?php echo "<h2>$adname </h2>"; ?>
				<?php echo "<p>Added on $date | Ad ID: $id</p>"; ?>
				<?php echo "<p align='center'>$image</p>"; ?></div>
				
		</div>
		<div class="r" style="padding-left: 20px;">
				<div class="a1"><?php echo "<p align='right' style='margin-left:200px;'><img height='15' src='https://s4.olx.in/static/olxin/naspersclassifieds-regional/olxsa-atlas-web-olxin/static/img/inr_symbol.png?v=3'><strong style='font-size:30px;'>".$price."</strong></p>"; ?><br><br>
				<?php echo "Contact Details:<br>";
					echo "Name:  $name<br>";
					echo "Phone Number: $phno";
				?> </div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
		<hr>
		<div class="aa" style="padding-left: 20px;">
			<?php echo "<h3 >Ad Description: </h3>$addes"; ?>
		</div>
	</div><br><br>
</body>
</html>