<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from tracksitems order by category,lang");
	$query6=mysqli_query($conn,"select * from category");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload'])) {
 
 $item = $_POST['item'];
 $category = $_POST['category'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../images/" . $filename;
	;
    // Get all the submitted data from the form
    $sql = "INSERT INTO tracksitems (item,category,image,status,lang) VALUES ('$item','$category','$filename','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./tracks.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
	  if (move_uploaded_file($tempname, $folder)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	
}
?>
