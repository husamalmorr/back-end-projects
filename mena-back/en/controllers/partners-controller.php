<?php include("config.php");
$query=mysqli_query($conn,"select * from partners where status='on' and lang='en'");
?>