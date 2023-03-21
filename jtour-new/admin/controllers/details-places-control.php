<?php 
include("config.php");
$name=urldecode($_GET['name']);
		$query=mysqli_query($conn,"select * from places where name='$name'");
	$num=mysqli_num_rows($query);
		$query2=mysqli_query($conn,"select COUNT(placename) from likes where placename='$name'");
	$num=mysqli_num_rows($query2);
?>