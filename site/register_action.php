<?php
include_once("connection.php");
	
	$fullName=$_POST['fullName'];	
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$regbtn=$_POST['regbtn'];
	
	if (isset($regbtn)) {
		if (empty($fullName) || empty($name) || empty($pass)) {
			header("location:registration.php?Empty= Please fill all the fields");
		}
		else{
	$s="SELECT * FROM users WHERE name='$name'";
	$result=mysqli_query($con,$s);
	$num=mysqli_num_rows($result);
			if ($num==1) {
				header("Location: registration.php?Already=Username already taken, Please try another one.");
			}
			else{
	$reg="INSERT INTO users (full_name,name,password) VALUES ('$fullName','$name','".md5($pass)."')";
				if (mysqli_query($con,$reg)) {
					header("Location: registration.php?register_action=success");
				}
				else {
					echo $mysqli->error;
				}
			}
		}
	}	
?>
