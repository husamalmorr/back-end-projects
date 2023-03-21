<?php include("config.php");
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from slider where id='$id' and status='on' and lang='en'");
$row=mysqli_fetch_array($query);
?>