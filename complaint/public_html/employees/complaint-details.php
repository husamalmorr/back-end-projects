<?php session_start();?>
<?php include('include/config.php'); ?>
<?php


if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Amman');// change according timezone
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
	<title>Admin| Complaint Details</title>
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

						


	<div class="module" style="box-shadow: 1px 2px 3px 2px #6262628a;background: aliceblue;">
							<div class="module-head">
								<h3 style="color:white">تفاصيل الشكوى</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									
									<tbody>

<?php $st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name,category.categoryName as catname from tblcomplaints join users on users.id=tblcomplaints.userId join category on category.id=tblcomplaints.category where tblcomplaints.complaintNumber='".$_GET['cid']."'");
while($row=mysqli_fetch_array($query))
{

?>									
										<tr>
											<td><b>رقم الشكوى</b></td>
											<td><?php echo htmlentities($row['complaintNumber']);?></td>
											<td><b>مستقبل الشكوى</b></td>
											<td> <?php echo htmlentities($row['name']);?></td>
											<td><b>تاريخ الشكوى</b></td>
											<td><?php echo htmlentities($row['regDate']);?>
											</td>
										</tr>

<tr>
											<td><b>الفئة </b></td>
											<td><?php echo htmlentities($row['catname']);?></td>
											<td><b>التصنيف الفرعي</b></td>
											<td> <?php echo htmlentities($row['subcategory']);?></td>
											<td><b>نوع الشكوى</b></td>
											<td><?php echo htmlentities($row['complaintType']);?>
											</td>
											
											
										</tr>
<tr><td><b>اسم و رقم المشتكي</b></td>
											<td><?php echo htmlentities($row['studentn']);?>
											</td>
											<td><b>القسم </b></td>
											<td><?php echo htmlentities($row['state']);?></td>
												<td>	<b>تاريخ انتهاء وقت الشكوى</b></td>
											<td><?php echo htmlentities($row['date']);?>
											</td>
										</tr>
<tr>
											<td><b>تفاصيل الشكوى </b></td>
											
											<td colspan="5"> <?php echo htmlentities($row['complaintDetails']);?></td>
											
										</tr>

											</tr>
<tr>
											<td><b>ملف(ان وجد) </b></td>
											
											<td colspan="5"> <?php $cfile=$row['complaintFile'];
if($cfile=="" || $cfile=="NULL")
{
  echo "File NA";
}
else{?>
<a href="../users/complaintdocs/<?php echo htmlentities($row['complaintFile']);?>" target="_blank"/> عرض الملف</a>
<?php } ?></td>
</tr>

<tr>
<td><b>الحالة النهائية</b></td>
											
											<td colspan="5"><?php if($row['status']=="")
											{ echo "Not Process Yet";
} else {
										 echo htmlentities($row['status']);
										 }?></td>
											
										</tr>

<?php $ret=mysqli_query($con,"select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='".$_GET['cid']."'");
while($rw=mysqli_fetch_array($ret))
{
?>
<tr>
<td><b>ملاحظة</b></td>
<td colspan="5"><?php echo  htmlentities($rw['remark']); ?> <b>تاريخ الملاحظة :</b><?php echo  htmlentities($rw['rdate']); ?></td>
</tr>

<tr>
<td><b>الحالة</b></td>
<td colspan="5"><?php echo  htmlentities($rw['sstatus']); ?></td>
</tr>
<?php }?>





<tr>
											<td><b>التفاصيل</b></td>
											
											<td> 
											<?php if($row['status']=="closed"){

												} else {?>
<a href="javascript:void(0);" onClick="popUpWindow('updatecomplaint.php?cid=<?php echo htmlentities($row['complaintNumber']);?>');" title="Update order">
											 <button type="button" class="btn btn-primary"style="background:#1c2282de">تعديل </button></td>
											</a><?php } ?></td>
											<td colspan="4"> 
											<a href="javascript:void(0);" onClick="popUpWindow('userprofile.php?uid=<?php echo htmlentities($row['userId']);?>');" title="Update order">
											 <button type="button" style="background:#1c2282de" class="btn btn-primary">عرض بيانات المستخدم</button></a></td>
											
										</tr>
										<?php  } ?>
										
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