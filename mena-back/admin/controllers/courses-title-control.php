<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from latesttitle");
	$num=mysqli_num_rows($query);
if (isset($_POST['upload'])) {
 
 $title = $_POST['title'];
 $subtitle = $_POST['subtitle'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
    // Get all the submitted data from the form
    $sql = "INSERT INTO latesttitle (title,subtitle,status,lang) VALUES ('$title','$subtitle','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./courses-title.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);

	
}
?>
