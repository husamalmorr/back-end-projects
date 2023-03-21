<?php include("config.php");
$query=mysqli_query($conn,"select * from testititle where status='on' and lang='ar'");
$query2=mysqli_query($conn,"select * from testiitems where status='on' and lang='ar'");

$row=mysqli_fetch_array($query);
?>