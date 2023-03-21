<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from servicesitems");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload'])) {
 
 $item = $_POST['item'];
 $subitem = $_POST['subitem'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
    $details = $_POST['details'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../images/" . $filename;
	$filename2 = $_FILES["uploadfile2"]["name"];
    $tempname2 = $_FILES["uploadfile2"]["tmp_name"];
	$folder2 = "../images/" . $filename2;
	$filename3 = $_FILES["uploadfile3"]["name"];
    $tempname3= $_FILES["uploadfile3"]["tmp_name"];
	$folder3 = "../images/" . $filename3;
    // Get all the submitted data from the form
    $sql = "INSERT INTO servicesitems (item,subitem,details,image1,image2,bg,status,lang) VALUES ('$item','$subitem','$details','$filename','$filename2','$filename3','$status','$lang')";
	    mysqli_query($conn, $sql);

  				$msg ="<script> alert('successfull inserted'); window.location.href='./services.php'</script>";
echo $msg;
    // Execute query
	  if (move_uploaded_file($tempname, $folder)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
		  if (move_uploaded_file($tempname2, $folder2)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
		  if (move_uploaded_file($tempname3, $folder3)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	
}
?>
