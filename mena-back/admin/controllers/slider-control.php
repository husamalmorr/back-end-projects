<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from slider");
	$num=mysqli_num_rows($query);
	$query4=mysqli_query($conn,"select distinct title from slider");
	$query5=mysqli_query($conn,"select distinct description from slider");

if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $title = $_POST['title'];
    $subtitle = $_POST['list'];
    $status = $_POST['status'];
    $lang = $_POST['lang'];
    $folder = "../images/" . $filename;
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO slider (title,subtitle,bg,status,lang) VALUES ('$title','$subtitle','$filename','$status','$lang')";
 
    // Execute query
    mysqli_query($conn, $sql);
	 if (move_uploaded_file($tempname, $folder)) {
       // echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
	  				$msg ="<script> alert('successfull inserted'); window.location.href='./slider.php'</script>";
echo $msg;
    // Now let's move the uploaded image into the folder: image
   
}
if (isset($_POST['upload3'])) {
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/" . $filename;
	 if($filename!=''){
 		    $sql = "update slider set bg='$filename'";
				$msg2 ="<script> alert('successfull updated'); window.location.href='./slider.php</script>";
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
if (isset($_POST['upload4'])) {
$description=$_POST['description'];
$title=$_POST['title'];
 		    $sql = "update slider set description='$description' where title='$title'";
				$msg3 ="<script> alert('successfull updated'); window.location.href='./slider.php</script>";
echo $msg3;
    // Execute query
    mysqli_query($conn, $sql);
 


}
?>
