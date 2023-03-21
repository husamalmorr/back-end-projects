<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from coursesitems");
	$query2=mysqli_query($conn,"select distinct item from tracksitems");
	$query3=mysqli_query($conn,"select * from category");
	$num=mysqli_num_rows($query);
if (isset($_POST['upload'])) {
 
 $item = $_POST['item'];
 $category = $_POST['category'];
    $status = $_POST['status'];
    $price = $_POST['price'];
    $duration = $_POST['duration'];
    $features = $_POST['features'];
    $description = $_POST['description'];
    $track = $_POST['track'];
    $status = $_POST['status'];
	   $lang = $_POST['lang'];
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "../images/" . $filename;
	
    // Get all the submitted data from the form
    $sql = "INSERT INTO coursesitems (item,description,features,price,duration,image,category,track,status,lang) VALUES 
	('$item','$description','$features','$price','$duration','$filename','$category','$track','$status','$lang')";
 				$msg ="<script> alert('successfull inserted'); window.location.href='./courses.php</script>";
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
