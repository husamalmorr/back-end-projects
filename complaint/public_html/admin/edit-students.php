<?php session_start();?>
<?php include('include/config.php');
date_default_timezone_set('Asia/Amman');// change according timezone

error_reporting(E_ERROR | E_PARSE); ?>
<?php


if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
if(isset($_POST['submit']))
{

	$student=$_POST['student'];
	$discount=$_POST['discount'];
	$phone1=$_POST['phoneno1'];
	$fbaccounts=$_POST['fbaccounts'];
	$fb=$_POST['facebook'];
	$behaivor=$_POST['behaivor'];
	$academic=$_POST['academic'];
	$private=$_POST['privateedu'];
	$interest=$_POST['interest'];
	$location=$_POST['location'];
	$bus=$_POST['bus'];
	$id=intval($_GET['id']);
$sql=mysqli_query($con,"update students set studentname='$student', discount='$discount', phoneno1='$phone1',bus='$bus' where studentid='$id'");
$_SESSION['msg']="تم التحديث بنجاح !!";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| تعديل الفئة</title>
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
								<h3> تعديل بيانات الطالب</h3>
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
<?php
$id=intval($_GET['id']);
$query=mysqli_query($con,"select * from students where studentid='$id' ");
while($row=mysqli_fetch_array($query))
{
?>									

<div class="control-group">
<label class="control-label" for="basicinput">اسم الطالب </label>
<div class="controls">
<input type="text" placeholder="ادخل اسم الطالب"  name="student" value="<?php echo  htmlentities($row['studentname']);?>" class="span8 tip" required>
</div>
</div> <br />
<div class="form-group">
<label class="control-label">الخصم</label>
<div class="controls">
<select name="discount" id="discount" class="form-control" onChange="getCat(this.value);" required="">
<?php $sql=mysqli_query($con,"select per from percent ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
           <option name="discount" value="<?php echo $rw['per']?>" ><?php echo $rw['per']?></option>
<?php
}
?>
</select>
 </div>
 </div> <br />
<div class="control-group">
<label class="control-label" for="basicinput">رقم هاتف  </label>
<div class="controls">
<input type="text" placeholder="ادخل رقم هاتف اولياء الامور"  name="phoneno1" value="<?php echo  htmlentities($row['phoneno1']);?>" class="span8 tip" required>
</div>
</div>



<br />
<div class="form-group">
<label class="control-label">المستوى السلوكي</label>
<div class="controls">
<select name="behaivor" id="behaivor" class="form-control" onChange="getCat(this.value);" required="">
<?php $sql=mysqli_query($con,"select behave2 from behave ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
 <option name="behaivor"value="<?php echo $rw['behave2']?>" ><?php echo $rw['behave2']?></option>
<?php
}
?>
</select>
 </div>
 </div> <br />
<br />
<div class="form-group">
<label class="control-label">المستوى الاكاديمي</label>
<div class="controls">
<select name="academic" id="academic" class="form-control" onChange="getCat(this.value);" required="">
<?php $sql=mysqli_query($con,"select academy2 from academy ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
 <option name="academic"value="<?php echo $rw['academy2']?>" ><?php echo $rw['academy2']?></option>
<?php
}
?>
</select>
 </div>
 </div> <br />
<br />
<br />
<div class="form-group">
<label class="control-label"> مكان الاقامة</label>
<div class="controls">
<select name="location" id="location" class="form-control" onChange="getCat(this.value);" required="">
<?php $sql=mysqli_query($con,"select location2 from location2 ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option name="location" value="<?php echo $rw['location2']?>" ><?php echo $rw['location2']?></option>
				   
				  
<?php
}
?>
</select>
 </div>
 </div> <br />
<br />
<div class="form-group">
<label class="control-label"> المواصلات</label>
<div class="controls">
<select name="bus" id="bus" class="form-control" onChange="getCat(this.value);" required="">
<?php $sql=mysqli_query($con,"select bus2 from bus2 ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option name="bus" value="<?php echo $rw['bus2']?>" ><?php echo $rw['bus2']?></option>
<?php
}
?>
</select>
 </div>
 </div> <br />



									<?php } ?>	

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
