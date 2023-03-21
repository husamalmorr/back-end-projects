<?php session_start();?>
<?php include('include/config.php'); error_reporting(E_ERROR | E_PARSE);?>
<?php
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Amman');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$query=mysqli_query($con,"select complaintNumber from tblcomplaints");
$row=mysqli_fetch_array($query);
$row['complaintNumber']=$_GET['cid'];
$complaintno=$row['complaintNumber'];
if(isset($_POST['send']))
{


$feedback=$_POST['feedback'];
$cid=$_GET['cid'];
$query=mysqli_query($con,"insert into tblcomplaints(feedback) values('$feedback')");
$query=mysqli_query($con,"UPDATE tblcomplaints set feedback='$feedback' where complaintNumber='$complaintno'");
$query=mysqli_query($con,"delete from tblcomplaints  where date is null");

$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username']){ 
$st2="قسم الاي تي";
$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null and tblcomplaints.state='$st2'");
}

$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
$row3=mysqli_fetch_array($ret3);

 if($_SESSION['alogin']===$row3['username'])
{ 
$st3='قسم اللوازم';

$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null and tblcomplaints.state='$st3'");
}

$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';

$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null and tblcomplaints.state='$st4'");
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username']){ 
$st5='قسم المالية';

$query=mysqli_query($con,"select tblcomplaints.*,users.fullName as name from tblcomplaints join users on users.id=tblcomplaints.userId where tblcomplaints.status is null and tblcomplaints.state='$st5'");
}

?>


	

<?php }?>

								


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| ارسال تنبيه</title>
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
<script type="text/javascript">
$(document).ready(function(){
    $('#student').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('#student').val($(this).text());
        $(this).parent(".result").empty();
    });
});
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

  
  

<div class="col-sm-3">

<div class="col-sm-4">

<div class="module">
							<div class="module-head">
								<h3>ارسال تنبيه </h3>
							</div>
							<div class="module-body">

 <form class="form-horizontal row-fluid" name="id" method="post">
	<div class="control-group">
											
											<br />
											<div class="search-box">
	
<?php 
$cid=$_GET['cid'];
$sql=mysqli_query($con,"select complaintNumber from tblcomplaints where sid='$cid'");

$row=mysqli_fetch_array($sql);
$feedback=$_POST['feedback'];
$cid=$_GET['cid'];
$complaintno=$row['complaintNumber'];
$query=mysqli_query($con,"insert into tblcomplaints(feedback) values('$feedback')");
$query=mysqli_query($con,"UPDATE tblcomplaints set feedback='$feedback' where complaintNumber='$complaintno'");
$query=mysqli_query($con,"delete from tblcomplaints  where date is null");
?>
  <input  name ='feedback' type='text'class="span5 tip" value="يرجى العمل على حل الشكوى رقم <?php echo htmlentities($cid);?>">

												

											</div>
											</div>
											</div>
			<br /> <br /> 
										
	<div class="control-group">
				<div class="module-body">

									<?php if(isset($_POST['send']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<?php echo htmlentities($_SESSION['msg']="تم الارسال بنجاح!!");?>
									</div>
									<?php } ?>
											<div class="controls">
												<button type="submit" name="send" class="btn">ارسال</button>
											</div>
										</div>
										</form>



 
										

			
							</div>
						</div>
						</div>
</div>						
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script src="js/jquery.table2excel.js"></script>
						</body> 
						<?php } ?>