<?php 
include("config.php");
	$query=mysqli_query($conn,"select * from career order by date DESC");
	$num=mysqli_num_rows($query);
error_reporting(0);
if (isset($_POST['upload2'])) {
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/" . $filename;
	 if($filename!=''){
 		    $sql = "update contactus set image='$filename'";
				$msg2 ="<script> alert('successfull updated'); window.location.href='./contact-us.php</script>";
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
