<?php
	session_start();

	$username = "";
	$email = "";
	$errors = array();
	$db = mysqli_connect('localhost','root','','project');

	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$email = mysqli_real_escape_string($db,$_POST['email']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$cpassword = mysqli_real_escape_string($db,$_POST['cpassword']);

		$sql_u="SELECT * FROM users WHERE username='$username'";
		$sql_e="SELECT * FROM users WHERE email='$email'";
		$res_u=mysqli_query($db,$sql_u) or die(mysqli_error($db));
	    $res_e=mysqli_query($db,$sql_e) or die(mysqli_error($db));

	    if (mysqli_num_rows($res_u)>0) {
	    	array_push($errors,"Username already taken.");
	    }
	    if (mysqli_num_rows($res_e)>0) {
	    	array_push($errors,"Email already exists.");
	    }
		
		if ($password!=$cpassword) {
			array_push($errors,"Passwords don't match.");
		}

		if(count($errors)==0){
			$password = md5($cpassword);
			$sql = "INSERT INTO users (username,email,password) VALUES('$username','$email','$password')";
			mysqli_query($db,$sql);
			$_SESSION['username'] = $username;
			$_SESSION['login'] = true;
			header("location: index1.php");
		}
	}

	if(isset($_POST['login'])){
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result) == 1){
			$_SESSION['username'] = $username;
			$_SESSION['login'] = "You are now logged in";
			header('location:index1.php');
		}
		else{
			array_push($errors, "Wrong username/password.");
		}
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location:index1.php');
	}

	date_default_timezone_set('Asia/Kolkata');
	$adtitle='';
	$category='';
	$price=0;
	$addes='';
	$name='';
	$image1='';
	$target_dir='';
	$phno=0;
	$today=date("Y-m-d");
	if(isset($_POST['submitadd'])){
		$adtitle = $_POST['adtitle'];
		$category = $_POST['category'];
		$addes = $_POST['description'];

		if((isset($_FILES['file']['name']))&& (!empty($_FILES['file']['name']))){
		$image = $_FILES['file']['name'];
		$destination_path = getcwd().DIRECTORY_SEPARATOR;
		//$target_dir = "../upload/";
		$target_file = $destination_path . basename($_FILES["file"]["name"]);
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$image_base64=base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
		$image1 = 'data:image/'.$imageFileType.';base64,'.$image_base64;
		move_uploaded_file($_FILES["file"]["tmp_name"],$target_dir.$image1);
		}
		
		$price = $_POST['cost'];
		$name = $_POST['name'];
		$phno = $_POST['phnumber'];
		$today=date("Y-m-d H:i:s");
		$sql1 = "INSERT INTO listings (ad_name,category,ad_des,image,price,name,phno,upload_date) VALUES('$adtitle','$category','$addes','".$image1."','$price','$name','$phno','$today')";
		mysqli_query($db,$sql1);
		sleep(2);
		header('location:index1.php');
		
	}
	
?>