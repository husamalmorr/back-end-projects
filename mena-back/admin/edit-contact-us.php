<?php session_start();
error_reporting(0);
 	  if($_SESSION['id']==0)
	  {
	 header("location:index.html");
	  }
	  include("controllers/config.php");

$id=$_GET['id'];
	$status="done";
 		    $sql = "update contactus set status='$status'where id='$id'";
			 mysqli_query($conn, $sql);
				$msg ="<script> alert('successfull updated'); window.location.href='./contact-us.php'</script>";
echo $msg;

    // Execute query
   
 
	 
	  ?>