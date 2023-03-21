<?php include("config.php");
$query=mysqli_query($conn,"select * from navbar where status='on'and lang='ar'");
$query2=mysqli_query($conn,"select * from navbar where status='on'and lang='ar'");
$query3=mysqli_query($conn,"select * from logo");
$row3=mysqli_fetch_array($query3);
?>


