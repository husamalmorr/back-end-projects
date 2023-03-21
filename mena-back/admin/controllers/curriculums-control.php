<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from curriculums");
	$query3=mysqli_query($conn,"select * from coursesitems");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload'])) {
 
 $item = $_POST['item'];
 $description = $_POST['description'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
	;
    // Get all the submitted data from the form
    $sql = "INSERT INTO curriculums (item,description,status,lang) VALUES ('$item','$description','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./curriculums.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
	
}
?>
