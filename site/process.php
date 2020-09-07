<?php
require_once('connection.php');
session_start();

	$name=$_POST['name'];
	$pass=$_POST['password'];
	$login=$_POST['login'];
	
	if (isset($login)) {
		if (empty($name) || empty($pass)) {
			header("location:index.php?Empty= Please fill the blanks");
		}
		else{
	$check="SELECT * FROM users WHERE name='$name' AND password='".md5($pass)."'";
	$result=mysqli_query($con,$check);
	$num=mysqli_num_rows($result);
			if ($num==1) {
				$_SESSION['User']=$name;
				header("location:home.php");
			}
			else{
				header("location:index.php? Invalid=<p>Please enter correct user name and password</p>");
			}
		}
	}
?>