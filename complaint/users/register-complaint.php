<?php
date_default_timezone_set('Asia/Amman');// change according timezone
session_start();
error_reporting(0);
include('includes/config.php');


if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if(isset($_POST['submit']))
{

$uid=$_SESSION['id'];
$category=$_POST['category'];
$subcat=$_POST['subcategory'];
$complaintype=$_POST['complaintype'];
$state=$_POST['stateName'];
$noc=$_POST['noc'];
$complaintdetials=$_POST['complaindetails'];
$studentn=$_POST['studentn'];
$compfile=$_FILES["compfile"]["name"];
$sid=$_POST['sid'];


$date =date("Y-m-d ",strtotime($_POST['date']));

$hours=date("G:i:s",strtotime($_POST['hours']));

		$hd=$date.''.$hours;
	$sql2=mysqli_query($con,"select regDate from tblcomplaints");	

$regdate=$row['regDate'];
$date_=date('Y-m-d G:i:s',time () );

move_uploaded_file($_FILES["compfile"]["tmp_name"],"complaintdocs/".$_FILES["compfile"]["name"]);
date_default_timezone_set('Asia/Amman');// change according timezone

$query = "INSERT INTO tblcomplaints (userId,category,subcategory,complaintType,state,noc,complaintDetails,complaintFile,studentn,sid,date,regDate)
VALUES ('$uid','$category','$subcat','$complaintype','$state','$noc','$complaintdetials','$compfile','$studentn','$sid','$hd','$date_')";
$sql_=mysqli_query($con,"select complaintNumber,regDate from tblcomplaints  order by complaintNumber desc limit 1");
while($row=mysqli_fetch_array($sql_)){
if (mysqli_query($con, $query)) {
   
 $cmpn=$row['complaintNumber'];
$complainno=$cmpn+1;
echo '<script> alert("تم اضافة الشكوى بنجاح و رقم الشكوى هو  "+"'.$complainno.'")</script>';
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


}
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>نظام ادارة الشكاوي | اضافة شكاوي</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap-daterangepicker/daterangepicker.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
	<style type="text/css">
	
	</style>
    <script>
function getCat(val) {
  //alert('val');

  $.ajax({
  type: "POST",
  url: "getsubcat.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
    
  }
  });
  }
  function getUsers(val) {
  //alert('val');

  $.ajax({
  type: "POST",
  url: "getUsers.php",
  data:'catid='+val,
  success: function(data){
    $("#sid").html(data);
    
  }
  });
  }

  </script>

  </head>

  <body>

  <section id="container" >
     <?php include("includes/header.php");?>
      <?php include("includes/sidebar.php");?>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> اضافة شكوى</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	

                     



                      <form class="form-horizontal style-form" method="post" name="complaint" enctype="multipart/form-data" >

<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">الفئة</label>
<div class="col-sm-4">
<select name="category" id="category" class="form-control" onChange="getCat(this.value);" required="">
<option value="">اختر الفئة</option>
<?php $sql=mysqli_query($con,"select id,categoryName from category ");
while ($rw=mysqli_fetch_array($sql)) {
  ?>
  <option value="<?php echo htmlentities($rw['id']);?>"><?php echo htmlentities($rw['categoryName']);?></option>
<?php
}
?>
</select>
 </div>
<label class="col-sm-2 col-sm-2 control-label">التصنيف الفرعي </label>
 <div class="col-sm-4">
<select name="subcategory" id="subcategory" class="form-control" >
<option value="">اختر تصنيف فرعي</option>
</select>
</div>
 </div>




<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">النوع</label>
<div class="col-sm-4">
<select name="complaintype" class="form-control" required="">
                <option value=" شكوى"> شكوى</option>
                  <option value="استفسار عام">استفسار عام</option>
                </select> 
</div> <br />
   <label class="col-sm-2 col-sm-2 control-label">القسم</label>
<div class="col-sm-4">
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
<br /> <br /> <br />




<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<label class="col-sm-2 col-sm-2 control-label">اسم الطالب</label> 
	<div class="col-sm-4">
	        <select class="form-control select2" id="studentn" name="studentn" onChange="getUsers(this.value);" required="required">
	           <?php 
    
          
$sql=mysqli_query($con,"select * from students  ");
         while ($rw=mysqli_fetch_array($sql)){

             echo "<option value='".$rw['studentid'].$rw['studentname']."'>".$rw['studentname']."</option>";
          }
          ?>
	        </select>
	   
 	</div>
<script>
    $('.select2').select2();

</script>
<label class="col-sm-2 col-sm-2 control-label">رقم الطالب</label>
<div class="col-sm-4">
<select id="sid" name="sid" required="required" class="form-control">

  <option value="0">اختر رقم الطالب</option>


</select>

</div>


<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">&nbsp &nbsp تفاصيل الشكوى </label>
<div class="col-sm-5">
<textarea  name="complaindetails" required="required" cols="10" rows="10" class="form-control" maxlength="2000"></textarea>

</div>

<label class="col-sm-2 col-sm-2 control-label">تاريخ انتهاء الشكوى</label>
<div class="col-sm-4">
<select  id="date" name="date" required="required" class="form-control">

<?php
for($i=0;$i<=12;$i++){
	date_default_timezone_set('Asia/amman');
   echo "<option>".date("Y-m-d ",strtotime("+$i days"))."</option>";   
  
}

?>

</select>
</div>
<label class="col-sm-5 col-sm-5 control-label">وقت انتهاء الشكوى</label>
<div class="col-sm-4">
<select  id="hours" name="hours" required="required" class="form-control">

<?php
for($i=1;$i<=20;$i++){
	date_default_timezone_set('Asia/amman');
 echo "<option>".date("h:i A ",strtotime("+$i hours"))."</option>";  
}
?>

</select>
   
</div>
<div class="form-group">
<label class="col-sm-2 col-sm-2 control-label">مستند متعلق بالشكوى </label>
<div class="col-sm-4">
<input type="file" name="compfile" class="form-control" value="">
</div>
</div>




                          <div class="form-group">
                           <div class="col-sm-5" style="padding-left:25% ">
<button  type="submit" name="submit"  class="btn btn-primary" style="background-color:#ff7f27;">تأكيد</button>
</div>
</div>

                          </form>
                          </div>
                          </div>
                          </div>
                          
          	
          	
		</section>
      </section>
    <?php include("includes/footer.php");?>
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->

	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
	

	
	<script src="assets/js/form-component.js"></script>    
	<script src="getUsers.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>
