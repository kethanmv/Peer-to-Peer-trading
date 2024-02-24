<?php include('server.php'); 
	if(empty($_SESSION['username'])){
		header('location: login.php');
	}
?> 
<?php 
	$db = mysqli_connect('localhost','root','','project');
	$key;
	if(isset($_POST['searchbut'])) {
		$key = $_POST['searcht'];
		$key = htmlspecialchars($key);
		$key = mysqli_real_escape_string($db,$key);
		$result = mysqli_query($db,"SELECT * FROM listings
            WHERE (`ad_name` LIKE '%".$key."%') OR (`ad_des` LIKE '%".$key."%')") or die(mysqli_error($db));
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Easy Ads | Sell Instantly!</title>
	<link rel="stylesheet" type="text/css" href="main1.css">
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
	<br/><br/>
	<div class="container1" style="width:1000px;margin:auto;padding: 50px;">
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
			$cat=$row['category'];
			$date=$row['upload_date'];
			$image="<td rowspan='2' style='width:130px;'><img src=".$row['image']." style='width:130px;height:130px;border:1px solid black;'></td>";
			if($row['image']==''){
				$image="<td rowspan='2' style='width:130px;'><img src='images/no_image.png' style='width:130px;height:130px;border:1px solid black;'></td>"; 
			}
			echo "<a href='ad.php?id=$id' style='text-decoration:none;color:black;'><table cellspacing='2px' class='listing-table' align='center' style='border:1px solid #000000;border-radius:5px;width:900px;height:140px;background-color:#ffff99'>";
			echo "
				<tr>".$image."
				<td valign='top' align='left'><h3 style='font-size:20px;'><span style='text-align:left;'>$adname</h3></span><p><small><span>".$name."</span></small></p></td>
				<td style='width:150px;' valign='top'><p><img height='15' src='https://s4.olx.in/static/olxin/naspersclassifieds-regional/olxsa-atlas-web-olxin/static/img/inr_symbol.png?v=3'><strong style='font-size:30px;'>".$price."</strong></p></td>
				</tr>
				<tr><td valign='top'>Category>>$cat</td><td width='150px'>$date</td></tr>";
			echo "</table></a><br>";
		}
		?>
	</div>
</body>
</html>