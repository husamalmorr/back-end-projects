<?php include("config.php");
$query=mysqli_query($conn,"select * from aboutus where status='on' and lang='en'");
$row=mysqli_fetch_array($query);
?>