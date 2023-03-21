<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from admins");
	$num=mysqli_num_rows($query);
		$query2=mysqli_query($conn,"select distinct item from coursesitems");
	$num2=mysqli_num_rows($query2);
		$query3=mysqli_query($conn,"select * from servicesitems");
	$num3=mysqli_num_rows($query3);
		$query4=mysqli_query($conn,"select * from tracksitems");
	$num4=mysqli_num_rows($query4);
?>