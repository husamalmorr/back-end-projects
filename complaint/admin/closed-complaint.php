<?php session_start();?>
<?php include('include/config.php');error_reporting(E_ERROR | E_PARSE); ?>
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
	<title>المشرف| الشكاوي المغلقة</title>
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
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+500+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
<script>
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;
    var _select;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}
    
		function _onSelectEvent(e) {
			_select = e.target;
			var tables = document.getElementsByClassName(_select.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filterSelect);
				});
			});
		}

		function _filter(row) {
      
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';

		}
    
		function _filterSelect(row) {
     
			var text_select = row.textContent.toLowerCase(), val_select = _select.options[_select.selectedIndex].value.toLowerCase();
			row.style.display = text_select.indexOf(val_select) === -1 ? 'none' : 'table-row';

		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				var selects = document.getElementsByClassName('select-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
				Arr.forEach.call(selects, function(select) {
         select.onchange  = _onSelectEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
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
							
							<div class="module-body table">
<div class="col-sm-4">
<?php 
$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']==="admin")
{?>
<select name="state" required="required" type="search" class="select-table-filter" data-table="order-table">
 <option value="">جميع الاقسام</option> 
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
<option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option> <?php }?>
<?php
}
?>
</select>
<select name="state" required="required" type="search" class="select-table-filter" data-table="order-table">
 <option value="">جميع التصنيفات</option> 
<?php $sql=mysqli_query($con,"select subcategory from subcategory ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['subcategory']);?>"><?php echo htmlentities($rw['subcategory']);?></option>
<?php
}
?>
</select>
<select name="reg" required="required" type="search" class="select-table-filter" data-table="order-table">
 <option value="">التاريخ</option> 

<?php 
$date=date('Y-m-d G:i:s A');
$st='closed';
$sql=mysqli_query($con,"select regDate from tblcomplaints where status='$st' ");
while ($rw=mysqli_fetch_array($sql)) {
	$date_=$rw['regDate'];
	$date2=date('Y-m-d', strtotime($date_));
?>


    <option value="<?php echo htmlentities($date2);?>"><?php echo htmlentities($date2);?></option>
  <?php }?>
</select>


							
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1  order-table table table-bordered table-striped	 display" >
									<thead>
										<tr>
											<th>رقم الشكوى</th>
											<th> مستقبل الشكوى</th>
											<th>تاريخ الشكوى</th>
											<th>الحالة</th>
											
											<th>التفاصيل</th>
											<th>القسم</th>
										 <th> تصنيف فرعي </th>
										</tr>
									</thead>
								
<tbody>
<?php 
	 
$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']==="admin")
{ 
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st'");
}
else
{
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2='قسم الاي تي';
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st' and tblcomplaints.state='$st2'");
}

$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
$row3=mysqli_fetch_array($ret3);

 if($_SESSION['alogin']===$row3['username'])
{ 
$st3='قسم اللوازم';
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st' and tblcomplaints.state='$st3'");
}

$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي والارشاد';
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st' and tblcomplaints.state='$st4'");
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$st='closed';
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status='$st' and tblcomplaints.state='$st5'");
}
}
while($row=mysqli_fetch_array($query))
{
?>										
										<tr>
											<td><?php echo htmlentities($row['complaintNumber']);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['regDate']);?></td>
										
											<td><button type="button" class="btn btn-success">Closed</button></td>
											
											<td>   <a href="complaint-details.php?cid=<?php echo htmlentities($row['complaintNumber']);?>"> عرض التفاصيل</a> 
											</td>
											<td><?php echo htmlentities($row['state']);?></td>
													<td><?php echo htmlentities($row['subcategory']);?></td>
											</tr>

										<?php  } ?>
										</tbody>
								</table>
						
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