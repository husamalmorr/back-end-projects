<?php 
include("config.php");
		$query=mysqli_query($conn,"select * from places inner join likes on likes.detailsid=places.id");
	$num=mysqli_num_rows($query);
?>