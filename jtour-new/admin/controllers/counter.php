<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from users");
	$num=mysqli_num_rows($query);
		$query2=mysqli_query($conn,"select * from admin");
	$num2=mysqli_num_rows($query2);
		$query3=mysqli_query($conn,"select * from cities");
	$num3=mysqli_num_rows($query3);
		$query4=mysqli_query($conn,"select * from places");
	$num4=mysqli_num_rows($query4);
?>