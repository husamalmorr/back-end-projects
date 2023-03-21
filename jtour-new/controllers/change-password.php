<?php 
include("config.php");
session_start();
$msg="";
$id=$_SESSION['id'];
$query=mysqli_query($conn,"select * from users where id='$id'");
$row=mysqli_fetch_array($query);
if(isset($_POST['submit'])){
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
if($oldpassword==$row['password'])
{
$query2=mysqli_query($conn,"update users set password='$newpassword' where id='$id'");
$msg="<script> window.location.href='../done-change.html'</script> ";
echo $msg;
}
else {
$msg="<script> alert('old password is incorrect');window.location.href='../change-password.php'</script> ";
	echo $msg;
}
}
