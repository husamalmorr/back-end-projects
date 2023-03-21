<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from cities");
	$num=mysqli_num_rows($query);

if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $name = $_POST['name'];
    $folder = "../public/" . $filename;
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO cities (image,name) VALUES ('$filename','$name')";
 
    // Execute query
    mysqli_query($conn, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
?>
