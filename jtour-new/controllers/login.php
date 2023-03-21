<?php 
include("config.php");
if(isset($_POST['submit'])){
$msg="";
$email=$_POST['email'];
$password=md5($_POST['password']);
	$query2=mysqli_query($conn,"select * from users where email='$email' and password='$password'");
	$num=mysqli_num_rows($query2);
	$row=mysqli_fetch_array($query2);
if($num>0){
session_start();
$_SESSION["name"] = $row['fullname'];
$_SESSION["id"] = $row['id'];
$msg="<script> window.location.href='../home.php';
 </script> ";
 echo $msg;
}
else
{
$msg="<script> alert('wrong email or password'); window.location.href='../index.html'</script>";
echo $msg;
}
}?>