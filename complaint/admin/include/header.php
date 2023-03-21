<?php error_reporting(E_ERROR | E_PARSE);
include('include/config.php');?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

</style>
    </head>
	<body>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="../">
			  		نظام ادارة الشكاوي | المدير
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
											

					<ul class="nav pull-right">
					<li style=""class="nav-user dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
<?php
										$date=date('Y-m-d G:i:s A');
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where date<='$date' order by complaintNumber DESC");
$num1=mysqli_num_rows($rt);

?>
<b class="label orange pull-right" style="background-color:red" ><?php  echo htmlentities($num1); ?> </b>  <b> اشعارات انتهاء الوقت المحدد &nbsp </b>
											</a>
											<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
											while($num1=mysqli_fetch_array($rt))
											{ ?>
							
						
							 <li style="text-align:center;">انتهى وقت الشكوى رقم <?php echo htmlentities ($num1['complaintNumber']);?> <a style="color:blue" href =" complaint-details.php?cid= <?php echo htmlentities($num1['complaintNumber']);?>">	عرض التفاصيل </a> 
							  <label> تاريخ الشكوى:<?php echo htmlentities($num1['regDate']);?> </label></li>
				
											
										
																

								<li class="divider"> </li>
								
								<?php }?> 
							</ul>
 </li>   
							
 
						<li><a href="#"> 
							<?php echo $_SESSION['alogin'] ?>
						</a>  </li>

						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/icon.jpg" class="nav-avatar" />
								
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="change-password.php">تغير كلمة السر</a></li>
								<li class="divider"></li>
								<li><a href="logout.php">تسجيل الخروج</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
</div><!-- /navbar -->  

</body>