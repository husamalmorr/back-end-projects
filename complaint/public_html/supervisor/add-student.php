<?php session_start();?>
<?php include('include/config.php');?>
<?php
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
 if(isset($_POST['submit']))
{
	$id=$_POST['studentid'];
	$student=$_POST['student'];
	$discount=$_POST['discount'];
	$phone1=$_POST['phoneno1'];
	
	$fb=$_POST['facebook'];
	$behaivor=$_POST['behaivor'];
	$academic=$_POST['academic'];
	$private=$_POST['privateedu'];
	$interest=$_POST['interest'];
	$location=$_POST['location'];
	$bus=$_POST['bus'];
	
$sql=mysqli_query($con,"insert into students(studentid,studentname,discount,phoneno1,facebook,behaivor,academic,privateedu,interests,location,bus) values('$id','$student','$discount','$phone1','$fb','$behaivor','$academic','$private','$interest','$location','$bus')");
$_SESSION['msg']="تم اضافة الفئة !!";

}

if(isset($_GET['del']))
		  {
		          mysqli_query($con,"delete from students where studentid = '".$_GET['id']."'");
                  $_SESSION['delmsg']="تم حذف الفئة !!";
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

  
  

<div class="col-sm-3">

<div class="col-sm-4">

<div class="module">
							<div class="module-head">
								<h3>اضافة طالب </h3>
							</div>
							<div class="module-body">

									<?php if(isset($_POST['submit']))
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong></strong>	<?php echo htmlentities($_SESSION['msg']);?><?php echo htmlentities($_SESSION['msg']="");?>
									</div>
<?php } ?>


									<?php if(isset($_GET['del']))
{?>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong></strong> 	<?php echo htmlentities($_SESSION['delmsg']);?><?php echo htmlentities($_SESSION['delmsg']="");?>
									</div>
<?php } ?>

									<br />

			<form class="form-horizontal row-fluid" name="id" method="post" >
									
<div class="control-group">
<label class="control-label" for="basicinput">رقم الطالب</label>
<div class="controls">
<input type="text" placeholder="ادخل رقم الطالب"  name="studentid" class="span8 tip" required>
</div>
</div>


<div class="control-group">
<label class="control-label" for="basicinput">اسم الطالب</label>
<div class="controls">
<input type="text" placeholder="ادخل اسم الطالب"  name="student" class="span8 tip" required>
</div>
</div>
<br />
<div class="form-group">
<label class="control-label">الخصم</label>
<div class="controls">
<select name="discount" id="discount" class="form-control" onChange="getCat(this.value);" required="">
<option value="">اختر قيمة الخصم</option>
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
<label class="control-label" for="basicinput">رقم هاتف </label>
<div class="controls">
<input type="text"  placeholder="ادخل رقم هاتف "  name="phoneno1" class="span8 tip" required>
</div>
</div>

<div class="control-group">
<label class="control-label" for="basicinput">ملاحظات التواصل الاجتماعي </label>
<div class="controls">
<input type="text"  placeholder="ادخل ملاحظات التواصل الاجتماعي"  name="facebook" class="span8 tip" required>
</div>
</div>

<br />
<div class="form-group">
<label class="control-label">المستوى السلوكي</label>
<div class="controls">
<select name="behaivor" id="behaivor" class="form-control" onChange="getCat(this.value);" required="">
<option value="">اختر المستوى السلوكي</option>
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
<option value="">اختر المستوى الاكاديمي</option>
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
<div class="form-group">
<label class="control-label"> تفريد التعليم</label>
<div class="controls">
<select name="privateedu" id="privateedu" class="form-control" onChange="getCat(this.value);" required="">
<option value="">الخيارات</option>
<?php $sql=mysqli_query($con,"select private2 from private ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
 <option  name="privateeduvalue="<?php echo $rw['private2']?>" ><?php echo $rw['private2']?></option>
				  
<?php
}
?>
</select>
 </div>
 </div> <br />
<div class="control-group">
<label class="control-label" for="basicinput">الاهتمامات</label>
<div class="controls">
<input type="text"  placeholder="ادخل اهتمامات الطالب"  name="interest" class="span8 tip" required>
</div>
</div>
<br />
<div class="form-group">
<label class="control-label"> مكان الاقامة</label>
<div class="controls">
<select name="location" id="location" class="form-control" onChange="getCat(this.value);" required="">
<option value="">اختر مكان الاقامة</option>
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
<option value="">الخيارات</option>
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


	<div class="control-group">
											<div class="controls">
												<button type="submit" name="submit" class="btn">انشاء</button>
											</div>
										</div>
									</form>
							</div>
						</div>
						</body> 
						<?php } ?>