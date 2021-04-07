<?php
	$query = mysqli_query($con, $SQL);
	if($query){
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
?>