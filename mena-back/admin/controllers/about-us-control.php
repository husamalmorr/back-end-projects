<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from aboutus");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload'])) {
 
 $title = $_POST['title'];
 $details = $_POST['details'];
    $lang = $_POST['lang'];
    $status = $_POST['status'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../images/" . $filename;
	
    // Get all the submitted data from the form
    $sql = "INSERT INTO aboutus (title,details,image,status,lang) VALUES ('$title','$details','$filename','$status','$lang')";
  				$msg ="<script> alert('successfull inserted'); window.location.href='./about-us.php'</script>";
echo $msg;
    // Execute query
    mysqli_query($conn, $sql);
	  if (move_uploaded_file($tempname, $folder)) {
        //echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	
}
if (isset($_POST['upload2'])) {
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/" . $filename;
	 if($filename!=''){
 		    $sql = "update aboutus set image='$filename'";
				$msg2 ="<script> alert('successfull updated'); window.location.href='./about-us.php</script>";
echo $msg2;
    // Execute query
    mysqli_query($conn, $sql);
	  if (move_uploaded_file($tempname, $folder)) {
       // echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
 

}
}
?>
