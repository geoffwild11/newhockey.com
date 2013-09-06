<?php
	$con=mysqli_connect("127.0.0.1:3306", "root", "" ,"new_hockey");

	// Check connection
	if (mysqli_connect_errno($con))
  	{
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	}

  	else
  	{
  		echo "Connected to NEW Hockey database";
  	}

  	mysqli_close($con);
?>