<?php include("config.php");
$id=urldecode($_GET['id']);

$query=mysqli_query($conn,"select * from servicesitems where id='$id' and status='on' and lang='en'");
$row=mysqli_fetch_array($query);

?>