<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from category");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload'])) {
 $category = $_POST['category'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
    // Get all the submitted data from the form
    $sql = "INSERT INTO category (name,status,lang) VALUES ('$category','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./category.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
	
}
?>
