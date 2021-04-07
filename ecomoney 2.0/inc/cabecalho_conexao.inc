<?php
	$con = mysqli_connect("localhost", "ecomoney", "123");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	$db = mysqli_select_db($con, "ecomoney");
	if(!$db) {
		echo mysqli_error($con);
	}
?>