<?php include("config.php");
$query=mysqli_query($conn,"select * from footercontact where status='on' and lang='ar'");
$query2=mysqli_query($conn,"select * from servicesitems where status='on' and lang='ar'");
$query3=mysqli_query($conn,"select * from navbar where status='on'and lang='ar' LIMIT 4");
$query4=mysqli_query($conn,"select * from logo");
$row4=mysqli_fetch_array($query4);
$row=mysqli_fetch_array($query);
?>


