<?php 

include('config.php');
if(isset($_GET['subid']))
{
	$subid=$_GET['subid'];
	$status="منجز";
	$status2="غير منجز";
	if($_GET['status']=="غير منجز")
	{
	$sql=mysqli_query($con,"update sub set status='$status' where id='$subid'");
	}
	else
	{
			$sql=mysqli_query($con,"update sub set status='$status2' where id='$subid'");

	}
	$id=$_GET['id'];
	$subid=$_GET['subid'];
echo '<script> 
location.href = "https://juclinic.000webhostapp.com/page-main-tasks/'.$id.'"; 
</script>';

}
?>