<?php session_start();?>
<?php include('include/config.php');
error_reporting(E_ERROR | E_PARSE); ?>
<?php


if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
if(isset($_POST['submit']))
{

	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$state=$_POST['state'];

$row=mysqli_fetch_array($sql);
echo $row['stateName'];
	$id=intval($_GET['id']);
	if($_GET['state'] ==='قسم الاي تي')
	{
	 	$statename='قسم الاي تي';
$sql= mysqli_query($con,"select stateName from state where stateName ='$statename' ");
$sql2=mysqli_query($con,"update it set username='$username', password='$password'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
		if($_GET['state'] ==='قسم اللوازم')
	{
$sql=mysqli_query($con,"update guide set username='$username', password='$password' where id='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
			if($_GET['state'] =='القسم التربوي و الارشاد')
	{
$sql=mysqli_query($con,"update edu set username='$username', password='$password' where id='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
				if($_GET['state'] =='قسم المالية')
	{
$sql=mysqli_query($con,"update money set username='$username', password='$password' where id='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
				if($_GET['state'] =='قسم المواصلات')
	{
$sql=mysqli_query($con,"update ebus set username='$username', password='$password' where id='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
					if($_GET['state'] =='القسم الاكاديمي')
	{
$sql=mysqli_query($con,"update eacademic set username='$username', password='$password' where id='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";
	}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المدير| تعديل بيانات الموظف</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>
<?php include('include/header.php');?>

	<div class="wrapper">
		<div class="container">
			<div class="row">
<?php include('include/sidebar.php');?>				
			<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3> تعديل بيانات الموظف</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong></strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<br />

			<form class="form-horizontal row-fluid" name="Category" method="post" >
<div class="control-group">
<label class="control-label" for="basicinput">اسم الموظف </label>
<div class="controls">
<input type="text" placeholder="ادخل اسم الموظف"  name="username" value="<?php echo  htmlentities($_GET['username']);?>" class="span8 tip" required>
</div>
</div> <br />
<div class="control-group">
<label class="control-label" for="basicinput">كلمة السر</label>
<div class="controls">
    
	
<input type="text" placeholder="ادخل كلمة السر الجديدة"  name="password" value="<?php echo  htmlentities($_GET['password']);?>" class="span8 tip" required>
</div>
</div> <br />  
<div class="control-group" >
<label class="control-label" for="basicinput">القسم </label>
<div class="controls">
<input type="text" placeholder="ادخل اسم القسم"  name="state" readonly value="<?php echo  htmlentities($_GET['state']);?>" class="span8 tip" required>
</div>
</div> <br /> 


							

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">تحديث</button>
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
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>
