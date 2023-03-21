<?php 
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>نظام ادارة الشكاوي | الشكاوي المضافة</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <link href="assets/css/table-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
<?php include("includes/header.php");?>
<?php include("includes/sidebar.php");?>

      <section id="main-content">
          <section class="wrapper">
		  
          	<h3><i class="fa fa-angle-right"></i>الشكاوى المضافة</h3>
				<input type="search" class="light-table-filter" data-table="order-table" placeholder="بحث" />
  <select type="search" class="select-table-filter" data-table="order-table">
    <option value="">اختر الحالة</option>  
    <option value="Not Process Ye">Not Process Yet</option>  
    <option value="In Process">In Process</option>  
	 <option value="Closed">Closed</option>  
	  <option value="Time finished">Time Finished</option>  
  <select>

		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
                          <section id="unseen">
                            <table cellpadding="0" cellspacing="0" border="0"  class=" datatable-1 order-table table table-bordered table-striped	 display" >
                              <thead>
                              <tr style="text-align: center">
                                  <th style="text-align: center">رقم الشكوى</th>
                                  <th style="text-align: center">تاريخ التسجيل</th>
                                  <th style="text-align: center">تاريخ اخر تحديث</th>
                                  <th style="text-align: center">الحالة</th>
                                  <th style="text-align: center">التفاصيل</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
  <?php $query=mysqli_query($con,"select * from tblcomplaints where userId='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{
  ?>
                              <tr>
                                  <td align="center"><?php echo htmlentities($row['complaintNumber']);?></td>
                                  <td align="center"><?php echo htmlentities($row['regDate']);?></td>
                                 <td align="center"><?php echo  htmlentities($row['lastUpdationDate']);

                                 ?></td>
                                  <td align="center"><?php 
                                  $date=date('Y-m-d G:i:s A');
                                    $status=$row['status'];
                                    if($row['date']>=$date)
                                    { ?>
                                      <button type="button" class="btn btn-theme04">Not Process Yet</button>
                                   <?php }
 if($status=="in process" && $row['date']===null){ ?>
<button type="button" class="btn btn-warning">In Process</button>
<?php }
if($status=="closed" && $row['date']===null) {
?>
<button type="button" class="btn btn-success">Closed</button>
<?php }

if($row['date']<=$date && $row['date']!=null) {
?>
<button type="button" class="btn btn-info">Time Finished</button>
<?php } ?>

                                   <td align="center">
                                   <a href="complaint-details.php?cid=<?php echo htmlentities($row['complaintNumber']);?>">
<button type="button" class="btn btn-primary" style="background-color:#ff7f27; border:0;">عرض التفاصيل</button></a>
                                   </td>
                                </tr>
                              <?php } ?>
                            
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		  	
		  	

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
<?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
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


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    

  </body>
</html>
<?php } ?>
