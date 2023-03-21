<?php 
include("config.php");
	$query=mysqli_query($conn,"select distinct title , description,lang,status from slider");
	$num=mysqli_num_rows($query);
if (isset($_POST['upload4'])) {
$description=$_POST['description'];
$title=$_POST['title'];
 		    $sql = "update slider set description='$description' where title='$title'";
				$msg3 ="<script> alert('successfull updated'); window.location.href='./slider-description.php</script>";
echo $msg3;
    // Execute query
    mysqli_query($conn, $sql);
 


}
?>
