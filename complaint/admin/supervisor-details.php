<?php session_start();?>
<?php include('include/config.php');?>
<?php

if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}

else{
date_default_timezone_set('Asia/Amman');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );



if(isset($_GET['del']))
		  {
		      $sql=mysqli_query($con,"select states from supervisorguide union select states from supervisorit
		     union select states from supervisoredu union select states from supervisorbus
		      union select states from supervisormoney union select states from supervisoracademic");
		     while($rw=mysqli_fetch_array($sql)) {
		      if($rw['states'] ==='قسم اللوازم') 
		      {
		          mysqli_query($con,"delete from supervisorguide where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  if($rw['states'] ==='قسم الاي تي') 
		      {
		          mysqli_query($con,"delete from supervisorit where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  if($rw['states'] ==='القسم التربوي و الارشاد') 
		      {
		          mysqli_query($con,"delete from supervisoredu where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  if($rw['states'] ==='قسم المواصلات') 
		      {
		          mysqli_query($con,"delete from supervisorbus where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  if($rw['states'] ==='القسم الاكاديمي') 
		      {
		          mysqli_query($con,"delete from supervisoracademic where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  if($rw['states'] ==='قسم المالية') 
		      {
		          mysqli_query($con,"delete from supervisormoney where username = '".$_GET['username']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
		  }
		  }
		  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| الشكاوي التي لم تتم معالجنها</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
<script>
function exportTableToExcel(table, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById('table');
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
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
							
							<div class="module-body table" style="background: white;width: 111%;margin-left: -28px;">

  
  

<div class="col-sm-3">
<?php 
$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']===$num['username'])
	$option=$_POST['state2'];
{?>

  

  <input type="search" class="light-table-filter" data-table="order-table" placeholder="بحث" />
											
<?php }?>	
<div class="col-sm-4">

<select name="state" required="required" type="search" class="select-table-filter" data-table="order-table">
 <option name="state2" value="">اختر القسم </option> 
<?php $sql=mysqli_query($con,"select stateName from state ");
while ($rw=mysqli_fetch_array($sql)) {


  ?>
  
  <option value="<?php echo htmlentities($rw['stateName']);?>"><?php echo htmlentities($rw['stateName']);?></option>
  
<?php
}
?>

</select>
</div>
											


									<table cellpadding="0" cellspacing="0" border="0" class=" datatable-1 order-table table table-bordered table-striped	 display" width="100%" style="font-size:10px" id="table">
									<thead>
										<tr>
										   
										    <th  style=" display:none;color: white;background-color: #ec1c24;">رقم الموظف</th>
										    <th  style="color: white;background-color: #ec1c24;">اسم الموظف</th>
											   <th  style="color: white;background-color: #ec1c24;">كلمة السر</th>
											     <th  style="color: white;background-color: #ec1c24;">القسم</th>
										
											<th  style="color: white;background-color: #ec1c24;">التعديل</th>
										</tr>
									</thead>

<tbody>

<?php 
$sql=mysqli_query($con,"select stateName from state  ");
$rw=mysqli_fetch_array($sql);
$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);

if($_SESSION['alogin']===$num['username'])
{ 
 $query=mysqli_query($con,"select id,username,password,states from supervisorit union select id,username,password,states from supervisormoney union select id,username,password,states from supervisoredu 
union select id,username,password,states from supervisorguide union select id,username,password,states from supervisorbus union select id,username,password,states from supervisoracademic ");      
 
}
while($row=mysqli_fetch_array($query))
{
	
?>		

										<tr>
											<td style="display:none"><?php echo htmlentities($row['id']);?></td>
										<td><?php echo htmlentities($row['username']);?></td>
											<td><?php echo htmlentities($row['password']);?></td>
											<td><?php echo htmlentities($row['states']);?></td>
											
											
							               
<td>
											<a href="edit-supervisor.php?state=<?php echo $row['states']?>&username=<?php echo $row['username']?>&id=<?php echo $row['id']?>&password=<?php echo $row['password']?>" ><i class="icon-edit"></i></a>
											<a href="supervisor-details.php?username=<?php echo $row['username']?>&del=delete" onClick="return confirm('هل متأكد من حذف العنصر؟')"><i class="icon-remove-sign"></i></a></td>
											</tr>

										<?php } ?>


										</tbody>
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
	<script src="js/jquery.table2excel.js"></script>
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