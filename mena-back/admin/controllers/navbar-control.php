<?php 
error_reporting(0);
include("config.php");
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from navbar order by lang");
	$num=mysqli_num_rows($query);
	$query3=mysqli_query($conn,"select * from navbar where id='$id'");
	$row3=mysqli_fetch_array($query3);
				$msg="";
	if(isset($_POST['submit'])){
			$item=$_POST['item'];
	$link=$_POST['link'];
	$status=$_POST['status'];
	$lang=$_POST['lang'];
$sql=mysqli_query($conn,"insert into navbar(item,link,status,lang)values('$item','$link','$status','$lang')");
 				$msg ="<script> alert('successfull inserted'); window.location.href='../navbar.php'</script>";
echo $msg;
}
if (isset($_POST['upload3'])) {
	$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../images/" . $filename;
 		    $sql = "update logo set image='$filename'";
			 mysqli_query($conn, $sql);
				$msg2 ="<script> alert('successfull updated'); window.location.href='./navbar.php</script>";
echo $msg2;
   
    // Execute query
	  if (move_uploaded_file($tempname, $folder)) {
       // echo "<h3>  Image uploaded successfully!</h3>";
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }


}
?>