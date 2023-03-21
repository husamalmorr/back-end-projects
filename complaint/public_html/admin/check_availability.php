<?php 
require_once("include/config.php");
error_reporting(E_ERROR | E_PARSE);
if(!empty($_POST["username"])) {
	$username= $_POST["username"];
	
		$result =mysqli_query($con,"SELECT username FROM it WHERE username='$username'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> username already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> username available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}


?>
