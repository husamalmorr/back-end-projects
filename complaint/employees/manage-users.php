<?php session_start();?>
<?php include('include/config.php'); ?>
<?php


if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st'");
$row=mysqli_fetch_array($query)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| ادارة المستخدمين</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
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
								<h3>ادارة المستخدمين</h3>
							</div>
							<div class="module-body table">



							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>#</th>
											<th> الاسم</th>
											<th>البريد الالكتروني </th>
											<th>رقم الهاتف</th>
											<th>تاريخ التسجيل </th>
											<th>التفاصيل</th>
										
										</tr>
									</thead>
									<tbody>

<?php $query=mysqli_query($con,"select * from users");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>									
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($row['fullName']);?></td>
											<td><?php echo htmlentities($row['userEmail']);?></td>
											<td> <?php echo htmlentities($row['contactNo']);?></td>
										
											<td><?php echo htmlentities($row['regDate']);?></td>

<td><a href="javascript:void(0);" onClick="popUpWindow('userprofile.php?uid=<?php echo htmlentities($row['id']);?>');" title="View Details">
<button type="button" class="btn btn-primary">عرض التفاصيل</button>
											</a>
		<?php 

$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']==="admin2"||$_SESSION['alogin']==="admin3"||$_SESSION['alogin']==="admin4"||$_SESSION['alogin']==="admin5" )
{ ?>										
<a style="display:none"href="manage-users.php?uid=<?php echo htmlentities($row['id']);?>&&action=del" title="Delete" onClick="return confirm('هل متأكد من حذف المستخدم؟')">
<button type="button" class="btn btn-danger">حذف</button></a> <?php }?>
	<?php 

$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']==="admin")
{ ?>										
<a href="manage-users.php?uid=<?php echo htmlentities($row['id']);?>&&action=del" title="Delete" onClick="return confirm('هل متأكد من حذف المستخدم؟ ')">
<button type="button" class="btn btn-danger">حذف</button></a> <?php }?>

 
										</td>
											
										<?php $cnt=$cnt+1; } ?>
										
								</table>
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
<?php } ?>