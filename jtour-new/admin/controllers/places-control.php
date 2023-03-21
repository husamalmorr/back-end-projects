<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from places");
	$num=mysqli_num_rows($query);
		$query2=mysqli_query($conn,"select * from details inner join places on details.name=places.name");
		$query3=mysqli_query($conn,"select * from likes inner join places on likes.placename=places.name");
	$num3=mysqli_num_rows($query3);

$query4=mysqli_query($conn,"select * from cities");
if (isset($_POST['add'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $pname = $_POST['pname'];
    $cname = $_POST['cname'];
    $info = $_POST['info'];
    $address = $_POST['address'];
    $type = $_POST['type'];
    $folder = "../public/" . $filename;
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO places (name,image,cityname,type,details,location) VALUES ('$pname','$filename','$cname','$type','$info','$address')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  place uploaded successfully!</h3>";
		echo mysqli_error($conn);
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}

?>