<?php
	$con = new mysqli('localhost','root','','airline_reservation_db');

		if (!$con)
		 {
			die('Please check your connection'.mysqli_error());
		}

?>