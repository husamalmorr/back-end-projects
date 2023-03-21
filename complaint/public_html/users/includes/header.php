<?php 
error_reporting(0);
include('includes/config.php');
date_default_timezone_set('Asia/Amman');// change according timezone

if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{
	 $userid=$_SESSION['id'];
?>
 <html>
 <head> 
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
 
 </head>
 <body> 
 <header class="header black-bg">
 <style type="text/css">
 .dropdown-menu{overflow:hidden; overflow-y:scroll;}
.dropdown-menu{height:300px; width:18%;}
 </style>

              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="dashboard.php" class="logo"><b>نظام ادارة الشكاوي</b></a>
                
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php" style="background-color:#ff7f27;border:0;">تسجيل الخروج</a></li>
            	</ul>
			
            </div>
			 <div>
			 <ul class="nav pull-right" style="border:0;">
								<li style=""class="nav-user dropdown" style="border:none;">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border:none; margin-top: 1.5rem;background:transparent;""> 
<?php
								$date=date('Y-m-d G:i:s A',time () );
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where status='Time Finished'or date>='$date' ");
$rt3 = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where status is null and userId='$userid' and  date>='$date' ");
$num3=mysqli_num_rows($rt3);
$num1=mysqli_num_rows($rt);
 ?>
<b class="label orange pull-right" style="background-color:red;" > <?php  echo htmlentities($num3); ?> </b><b>الشكاوي التي لم يتم حلها &nbsp </b>
											</a>
											<ul class="dropdown-menu" style="width:200px"> 
								
										


										<?php
											while($num3=mysqli_fetch_array($rt3))
											{ ?>
							
						 <li style="text-align:center;">  لم يتم الاطلاع على الشكوى رقم <?php echo htmlentities($num3['complaintNumber']);?><a  style="color:blue"href ="complaint-details.php?cid= <?php echo htmlentities($num3['complaintNumber']);?>">	عرض التفاصيل </a> 
						 <label> تاريخ الشكوى:<?php echo htmlentities($num3['regDate']);?> </label> </li>

				
										
										
																

								<li class="divider"> </li>
								
								<?php }?> 
							</ul>
 </li>
</ul>
</div>
 <div>
			 <ul class="nav pull-right" style="border:0;">
								<li style=""class="nav-user dropdown" style="border:0;">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border:none; margin-top: 1.5rem;background:transparent;"> 
<?php 
										$date=date('Y-m-d G:i:s A');

$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where status='in process' and userId='$userid' ");
$num3=mysqli_num_rows($rt3);
$num1=mysqli_num_rows($rt); ?>

<b class=" label yellow pull-right" style="background:#dbdb1d"> <?php  echo htmlentities($num1); ?> </b> 
<b>شكاوي قيد العمل &nbsp </b> 
											</a> 
											<ul class="dropdown-menu" style="width:200px"> 
											
											<?php
											while($num2=mysqli_fetch_array($rt))
											{ ?>
						
						 <li style="text-align:center;"> يتم العمل على شكوى رقم 
						 <?php echo htmlentities($num2['complaintNumber']);?>
						 <a style="color:blue" href =" complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a>
						 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label>
						 </li>

				
										
										
																

								<li class="divider"> </li>
								
								<?php }?> 
								
										


										<?php
											while($num3=mysqli_fetch_array($rt3))
											{ ?>
							
						 <li style="text-align:center;">  لم يتم الاطلاع على الشكوى رقم <?php echo htmlentities($num3['complaintNumber']);?><a  href ="complaint-details.php?cid= <?php echo htmlentities($num3['complaintNumber']);?>">	عرض التفاصيل </a> 
                         <label> تاريخ الشكوى:<?php echo htmlentities($num3['regDate']);?> </label> </li>
				
										
										
																

								<li class="divider"> </li>
								
								<?php }?> 
							</ul>
 </li>
</ul>
</div>
 <div>
			 <ul class="nav pull-right" style="border:0;">
								<li style=""class="nav-user dropdown" style="border:0;">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border:none; margin-top: 1.5rem;background:trnasparent;"> 
<?php
										$date=date('Y-m-d G:i:s A');
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where status='closed' and userId='$userid' ");
$num1=mysqli_num_rows($rt);
 ?>
<b class="label green pull-right" style="background-color:green;" > <?php  echo htmlentities($num1); ?> </b><b>شكاوي مغلقة &nbsp </b>
											</a>
											<ul class="dropdown-menu" style="width:200px"> 
											
											<?php
											while($num2=mysqli_fetch_array($rt))
											{ ?>
						
						 <li style="text-align:center;"> تم حل الشكوى رقم 
						 <?php echo htmlentities($num2['complaintNumber']);?>
						<a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a>
						 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label>
						 </li>

				
										
										
																

								<li class="divider"> </li>
								
								<?php }?> 
								
									
							</ul>
 </li>
</ul>
</div>
 <div>
			 <ul class="nav pull-right" style="border:0;">
								<li style=""class="nav-user dropdown" style="border:0;">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="border:none; margin-top: 1.5rem;background:transparent;""> 
<?php
									$date=date('Y-m-d G:i:s A',time () );
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate,date FROM tblcomplaints where date<='$date' ");
$num3=mysqli_num_rows($rt3);
$num1=mysqli_num_rows($rt);
 ?>
<b class="label orange pull-right" style="background-color:red;" > <?php  echo htmlentities($num1); ?> </b><b>شكاوي انتهى وقتها  &nbsp </b>
											</a>
											<ul class="dropdown-menu" style="width:200px"> 
											
											<?php
											while($num2=mysqli_fetch_array($rt))
											{ ?>
						
						 <li style="text-align:center;"> لم يتم حل الشكوى رقم 
						 <?php echo htmlentities($num2['complaintNumber']);?>
						 <a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a>
						 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label>
						


						 </li>

				
										
										
																

								<li class="divider"> </li>
								
								<?php }?> 
								
										


								
							</ul>
 </li>
</ul>
</div>
<script>
function myFunction() {
  var x = document.getElementByclassName("close");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
} 
</script>
        </header>
		</body>
</html>
<?php }?>