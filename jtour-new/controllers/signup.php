<?php 
include("config.php");
if(isset($_POST['submit'])){
	$msg="";
	$msg2="";

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);
	$query2=mysqli_query($conn,"select * from users where email='$email'");
	$num=mysqli_num_rows($query2);
if($cpassword==$password && $num<=0){

$sql=mysqli_query($conn,"insert into users(email,fullname,password)values('$email','$fullname','$password')");
$msg="<script> alert('successfull sign up'); window.location.href='../login.html';
 </script> ";
echo $msg;

}
else 
{
	if($cpassword!=$password)
{
$msg="<script> alert('password not match'); window.location.href='../registration.html'</script>";
echo $msg;
}
else 
{
	if($num>=1)
	{
	$msg2="<script> alert('email is taken');window.location.href='../registration.html'</script> ";
	echo $msg2;

	}

}
}
}?>