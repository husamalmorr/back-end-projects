<?php include("config.php");
session_start();
$userid=$_SESSION['id'];
$name=$_GET['name'];
$query=mysqli_query($conn,"select * from details where name='$name'");
$row=mysqli_fetch_array($query);
$detailsid=$row['id'];
if(isset($_POST['like'])){
	$query2=mysqli_query($conn,"insert into likes(userid,placename,detailsid)values('$userid','$name','$detailsid')");
header("location:../details1.php?name='$name'");

}
?>