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
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>المشرف| بحث عن طالب</title>
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
								<h3>بحث عن طالب </h3>
							</div>
							<div class="module-body">

 <form class="form-horizontal row-fluid" name="id" method="post">
	<div class="control-group">
											<div class="controls">
												<input type="search" placeholder="ابحث عن رقم الطالب"  name="studentid" class="span5 tip" >	
												
											</div>
											<br />
											<div class="search-box">
											<div class="controls">
												<input type="search" placeholder="ابحث عن اسم الطالب"  name="student" class="span5 tip" >	
												  <div class="result"></div>
											</div>
											</div>
											</div>
			<br /> <br />
										
	<div class="control-group">
											<div class="controls">
												<button type="submit" name="search" class="btn">بحث</button>
											<a href="search-student.php">	<button type="submit" name="search" class="btn">اعادة البحث</button> </a>
											</div>
										</div>
										</form>
			<br />
					
<?php 
 if(isset($_POST['search']))
{
	
	
$id=$_POST['studentid'];
$student=$_POST['student'];
$sql=mysqli_query($con,"select *  from students where studentid='$id' or studentname='$student'");

	
while ($rw=mysqli_fetch_array($sql)) {
	if ($rw != 0)

{
  ?>
  <form class="form-horizontal row-fluid" name="id" method="post">
  <div class="form-group">
  <label class="control-label"> رقم الطالب</label>
	<input type="text" placeholder="رقم الطالب" readonly="readonly" style="background:white" value="<?php echo $rw['studentid'] ?>" name="studentid" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
<label class="control-label"> اسم الطالب</label>	
	<input type="text" placeholder="اسم الطالب" readonly="readonly" style="background:white" value="<?php echo $rw['studentname'] ?>" name="student" class="span5 tip" >	
	</div> <br />
	  <div class="form-group">
	<label class="control-label"> الخصم</label>
	<input type="text" placeholder="قيمة الخصم " readonly="readonly" style="background:white"value="<?php echo $rw['discount'];?>" name="studentid" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
	    <label class="control-label">رقم الهاتف</label>
<input type="text"  placeholder="رقم الهاتف "  readonly="readonly" style="background:white"value="<?php echo $rw['phoneno1'];?>" name="phoneno1" class="span5 tip" >
</div> <br />
  <div class="form-group">
	<label class="control-label"> ملاحظات التواصل الاجتماعي</label>
	<input type="text"  placeholder="ملاحظات التواصل الاجتماعي" readonly="readonly" style="background:white" value="<?php echo $rw['facebook'];?>" name="facebook" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
	<label class="control-label"> المستوى السلوكي</label>
    <input type="text"  placeholder="المستوى السلوكي"  readonly="readonly" style="background:white"value="<?php echo $rw['behaivor'];?>" name="behaivor" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
	<label class="control-label"> المستوى الاكاديمي</label>
	<input type="text"  placeholder=" المستوى الاكاديمي" readonly="readonly" style="background:white" value="<?php echo $rw['academic'];?>" name="academic" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
	<label class="control-label">تفريد التعليم</label>
    <input type="text" value="<?php echo $rw['privateedu'];?>" readonly="readonly" style="background:white" placeholder=" تفريد التعليم"  name="privateedu" class="span5 tip" > 
	</div> <br />
	  <div class="form-group">
    <label class="control-label">الاهتمامات</label>
    <input type="text"  placeholder="اهتمامات الطالب"  readonly="readonly" style="background:white" value="<?php echo $rw['interests'];?>" name="interest" class="span5 tip" >
	</div> <br />
	  <div class="form-group">
    <label class="control-label">مكان الاقامة</label>
<input type="text"  placeholder="مكان الاقامة" readonly="readonly" style="background:white" value="<?php echo $rw['location'];?>" name="location" class="span5 tip" >
</div> <br />
  <div class="form-group">
    <label class="control-label">المواصلات</label>
<input type="text"  placeholder="المواصلات" readonly="readonly" style="background:white" value="<?php echo $rw['bus'];?>" name="bus" class="span5 tip" >
</div> <br />


</form>
	</div>
						</div>						

						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	
<?php
}
else
{
	echo "no result";
}
?>
<?php
}

?>
<?php
}
?>
 
										
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script src="js/jquery.table2excel.js"></script>
			
						
						</body> 
						<?php } ?>