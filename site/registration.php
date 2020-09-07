<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Registration</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">	
		<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">	
	</head>
<body style="background-image: url(images/air.jpg);">
<div class="main">
<!--header -->
	<header style="background-image: url(images/h_top.jpg);">
		<div >
			<h1><a href="home.php" id="logo">Air lines</a></h1>
			<span id="slogan">Fast, Frequent &amp; Safe Flights</span>
			
		</div>
	</header>
		<h5>Registration form</h5>
<!--IF REGISTERED SUCCESFULLY-->
	<?php
		if (!isset($_SESSION['User'])) { 
			if (isset($_GET['register_action'])) {
				if ($_GET['register_action']=="success") { 
	?>
	Successfully Registered!
	<?php }
	}
	?>	
<!--IF USERNAME ALREADY TAKEN-->
	<?php
	    if (@$_GET['Already']==true) {
	?>
		<div class="alert-light text-danger">
	 <?php echo $_GET['Already']?>
	    </div>   	
	 <?php		
	}
	?>
<!--IF ANY EMPTY IN THE FORM-->		
	<?php
	    if (@$_GET['Empty']==true) {
	?>
		<div class="alert-light text-danger">
	 <?php echo $_GET['Empty']?>
	    </div>   	
	 <?php		
	}
	?>
      	<form method="POST" action="register_action.php" id="regForm">

			<div class="form-group">	
				<label>Full Name:</label><br>
				<input type="text" name="fullName"   class="form-control form-control-sm" /><br>
			</div>
			<div class="form-group">
				<label>Username:</label><br>
				<input type="text" name="name"   class="form-control form-control-sm" /><br>
			</div>
			<div class="form-group">
				<label>Password:</label><br>
				<input type="password" name="password"   class="form-control form-control-sm" /><br>
			</div>
			<div class="form-group">	
				<button type="submit" class="btn btn-success" name="regbtn">Register</button>
			</div>
		</form>
<div  class="page-footer font-small special-color-dark pt-4">
<p>Already a member? Click <a href="index.php">here</a> to login.</p>
</div>
</div>
<?php } else { ?>
You already logged in, Click <a href="logout.php">here</a> to logout.
<?php 
}
?>
</body>
</html>