<?php session_start();?>

<?php
include('include/config.php');

error_reporting(E_ERROR | E_PARSE);
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
date_default_timezone_set('Asia/Amman');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );


if(isset($_POST['submit']))
{
	
	$state=$_POST['stateName'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
if($state=='قسم الاي تي'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisorit(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف !!"  or die(mysql_error());
    } 
	else{
      $_SESSION['delmsg']=" اسم المستخدم موجود!";
    

}
}
if($state=='القسم التربوي و الارشاد'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisoredu(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف!!"  or die(mysql_error());
    } 
	else{
          $_SESSION['delmsg']=" اسم المستخدم موجود!";

    

}
}
if($state=='قسم اللوازم'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisorguide(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف!!"  or die(mysql_error());
    } 
	else{
         $_SESSION['delmsg']=" اسم المستخدم موجود!";

    

}
}
if($state=='قسم المالية'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisormoney(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف!!"  or die(mysql_error());
    } 
	else{
           $_SESSION['delmsg']=" اسم المستخدم موجود!";

    

}
}
if($state=='القسم الاكاديمي'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisoracademic(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف!!"  or die(mysql_error());
    } 
	else{
           $_SESSION['delmsg']=" اسم المستخدم موجود!";

    

}
}
if($state=='قسم المواصلات'){
$resultset_1 = mysqli_query($con,"select * from supervisorit where username='$username' ") ;
$resultset_2 = mysqli_query($con,"select * from supervisorguide where username='$username' ") ;
$resultset_3 = mysqli_query($con,"select * from supervisoredu where username='$username' ") ;
$resultset_4 = mysqli_query($con,"select * from supervisormoney where username='$username' ") ;
$resultset_5 = mysqli_query($con,"select * from supervisorbus where username='$username' ") ;
$resultset_6 = mysqli_query($con,"select * from supervisoracademic where username='$username' ") ;
$count = mysqli_num_rows($resultset_1);
$count2 = mysqli_num_rows($resultset_2);
$count3 = mysqli_num_rows($resultset_3);
$count4 = mysqli_num_rows($resultset_4);
$count5 = mysqli_num_rows($resultset_5);
$count6 = mysqli_num_rows($resultset_6);
   if($count == 0 && $count2 == 0 && $count3 == 0 && $count4 == 0 && $count5 == 0 && $count6 == 0)
    {
       $sql3=mysqli_query($con,"insert into supervisorbus(username,password,states) values('$username','$password','$state')");
$_SESSION['msg']="تم اضافة مشرف!!"  or die(mysql_error());
    } 
	else{
           $_SESSION['delmsg']=" اسم المستخدم موجود!";

    

}


}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المدير|اضافة مشرف</title>
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
								<h3>اضافة مشرف</h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit'])&& $count == 0)
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<?php  echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
									<?php } ?>
																		<?php if(isset($_POST['submit'])&& $count != 0)
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
									
<?php }?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong></strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="Category" method="post" >
									

<div class="control-group">
<label class="control-label" for="basicinput">اسم الموظف</label>
<div class="controls">
<input type="text" placeholder="ادخل اسم المشرف"  name="username" class="span5 tip" id="username" onBlur="userAvailability()" required>
<span id="user-availability-status1" style="font-size:12px;"></span>

</div>
</div>
<div class="control-group">
<label class="control-label" for="basicinput">كلمة السر</label>
<div class="controls">
<input type="text" placeholder="ادخل كلمة السر"  name="password" class="span5 tip" required>
</div>
</div>
<br /> 
<div class="col-sm-4">
<div class="control-group">
<label class="control-label" for="basicinput">القسم </label> &nbsp &nbsp &nbsp
<select name="stateName" required="required" class="form-control">

<option value="">اختر القسم</option>
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
<?php
}
?>

</select> 
</div>
</div> <br />

	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" id="submit" class="btn" style="color: white;background-color: #ec1c24;">انشاء</button>
													<a href="supervisor-details.php"><button type="button" class="btn" style="color: white;background-color: #ec1c24;">ادارة المشرفين</button> </a>
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
