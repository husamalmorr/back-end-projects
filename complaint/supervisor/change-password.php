<?php 
session_start();
error_reporting(0);
?>
<?php include('include/config.php') ?>

<?php

if(strlen($_SESSION['alogin'])===0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Amman');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
$sql=mysqli_query($con,"SELECT password,username FROM  supervisorit where password='".md5($_POST['password'])."' && username='".$_SESSION['alogin']."'");
$num=mysqli_fetch_array($sql);
if($_SESSION['alogin']===$num['username'])
{
 $con=mysqli_query($con,"update supervisorit set password='".md5($_POST['newpassword'])."', updationDate='$currentTime' where username='".$_SESSION['alogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}

$sql2=mysqli_query($con,"SELECT password,username FROM  supervisorguide where password='".md5($_POST['password'])."'");
$num2=mysqli_fetch_array($sql2);
if($_SESSION['alogin']===$num2['username'])
{
 $con2=mysqli_query($con,"update supervisorguide set password='".md5($_POST['newpassword'])."', updationDate='$currentTime' where username='".$_SESSION['alogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}

$sql3=mysqli_query($con,"SELECT password,username FROM  supervisoredu where password='".md5($_POST['password'])."'");
$num3=mysqli_fetch_array($sql3);
if($_SESSION['alogin']===$num3['username'])
{
 $con3=mysqli_query($con,"update supervisoredu set password='".md5($_POST['newpassword'])."' where username='".$_SESSION['alogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}
$sql4=mysqli_query($con,"SELECT password,username FROM  supervisormoney where password='".md5($_POST['password'])."'");
$num4=mysqli_fetch_array($sql4);
if($_SESSION['alogin']===$num4['username'])
{
 $con4=mysqli_query($con,"update supervisormoney set password='".md5($_POST['newpassword'])."' where username='".$_SESSION['alogin']."'");
$_SESSION['msg']="Password Changed Successfully !!";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| تغير كلمة السر</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper" style="background-image:url(/images/bg.jpg) #e6e6e6">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module" style="box-shadow: 1px 2px 3px 2px #6262628a;">
							<div class="module-head" style="color: white; background-color:  #46be8a;">
								<h3 style="color:white">تغير كلمة السر للمشرف</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>
									<br />

			<form class="form-horizontal row-fluid" name="chngpwd" method="post" onSubmit="return valid();">
									
<div class="control-group">
<label class="control-label" for="basicinput">كلمة السر الحالية</label>
<div class="controls">
<input type="password" placeholder="ادخل كلمة السر الحالية"  name="password" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">كلمة السر الجديدة</label>
<div class="controls">
<input type="password" placeholder="ادخل كلمة السر الجديدة"  name="newpassword" class="span8 tip" required>
</div>
</div>






										

										<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn" style="background-color:  #46be8a;color:white" >تأكيد</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

<?php include('include/footer.php');?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
<?php } ?>