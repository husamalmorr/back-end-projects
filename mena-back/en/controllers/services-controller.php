<?php include("config.php");
$query=mysqli_query($conn,"select * from servicestitle where status='on' and lang='en'");
$query2=mysqli_query($conn,"select * from servicesitems where status='on' and lang='en'");
$row=mysqli_fetch_array($query);
$i=0;
?>