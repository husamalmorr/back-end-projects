<?php 
error_reporting(0);
include("config.php");
	$id=$_GET['id'];

	$query=mysqli_query($conn,"select * from admins");
	$num=mysqli_num_rows($query);
	$query3=mysqli_query($conn,"select * from admins where id='$id'");
	$row3=mysqli_fetch_array($query3);
				$msg="";
	if(isset($_POST['submit'])){
			$name=$_POST['name'];
	$email=$_POST['email'];
	$password=md5($_POST['password']); 
if($num2<=0)
{
$sql=mysqli_query($conn,"insert into admins(email,name,password)values('$email','$name','$password')");
		$msg ="<script> alert('successfull inserted'); window.location.href='../admin.php'</script>";
 echo $msg;
}
else {
			$msg="<script> alert('user already exist'); window.location.href='../admin.php'; </script> ";
			echo $msg;
	}
	}
?>