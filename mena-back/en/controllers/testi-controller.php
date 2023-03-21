<?php include("config.php");
$query=mysqli_query($conn,"select * from testititle where status='on' and lang='en'");
$query2=mysqli_query($conn,"select * from testiitems where status='on' and lang='en'");

$row=mysqli_fetch_array($query);
?>