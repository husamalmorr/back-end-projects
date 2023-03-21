<?php 

include('config.php');
	$time=date('y-m-d');

if(isset($_GET['taskid']))
{
	$taskid=$_GET['taskid'];
	$status="منجز اليوم";
	$status2="غير منجز اليوم";
	$sql2=mysqli_query($con,"select * from daily where id='$taskid'");
	$row2=mysqli_fetch_array($sql2);
	if($_GET['status']=="غير منجز اليوم")
	{
	$sql=mysqli_query($con,"update daily set status='$status' , addedtime='$time' where id='$taskid'");

	}
if($_GET['status']=='منجز اليوم' && $time>$row2['addedtime'])
	{
					$sql=mysqli_query($con,"update daily set status='$status2'where id='$taskid'");

	}
}
	
	
	$id=$_GET['id'];
echo '<script> 
location.href = "https://juclinic.000webhostapp.com/page-day-tasks/'.$id.'"; 
</script>';

?>