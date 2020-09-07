<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
<meta charset="utf-8">
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
		<form method="POST" action="process.php" id="loginForm">
<!--IF NOTHING ENTERED IN HE FIELDS AND WHEN CLICKED LOGIN-->
	<?php
    	if (@$_GET['Empty']==true) {
    ?>	<div class="alert-light text-danger">
    		<?php echo $_GET['Empty']?>
    	</div>   	
    <?php	}
    ?>
<!--IF USERNAME OR PASSWORD INCORRECT -->	
	<?php
    		if (@$_GET['Invalid']==true) {
    ?>	<div class="alert-light text-danger">
    		<?php echo $_GET['Invalid']?>
    	</div>   	
    <?php		}
    ?>	

				<div class="form-group">
						<label>Username</label><br>
						<input type="text" name="name" class="form-control form-control-sm" />
				</div>
				<div class="form-group">
						<label>Password</label><br>
						<input type="password" name="password" class="form-control form-control-sm" />
				</div>
				<div class="form-group">
						<button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
				</div>
				<div>Not a member yet? Click <a href="registration.php" >here</a> to register
				</div>
				</form>
		</div>
</body>
</html>
