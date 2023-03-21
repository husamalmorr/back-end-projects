<?php error_reporting(E_ERROR | E_PARSE);?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
	<body>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="../">
			  		نظام ادارة الشكاوي | المشرف
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
											

					<ul class="nav pull-right">

	 
	 
	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2_=mysqli_query($con,"SELECT username FROM supervisorit where username = '".$_SESSION['alogin']."'");
$row22=mysqli_fetch_array($ret2_);
if($_SESSION['alogin']===$row22['username'])
{ 
$st2="قسم الاي تي";
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate FROM tblcomplaints where date<='$date' and state='$st2' and mfeedback is not null ORDER BY complaintNumber DESC  ");
$num4=mysqli_num_rows($rt_);

}
$ret3_=mysqli_query($con,"SELECT username,password FROM supervisorguide where username = '".$_SESSION['alogin']."'");
$row33=mysqli_fetch_array($ret3_);
if($_SESSION['alogin']===$row33['username'])
{ 

$st3="قسم اللوازم";
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate FROM tblcomplaints where date<='$date' and state='$st3' and mfeedback is not null ORDER BY complaintNumber DESC  ");
$num4=mysqli_num_rows($rt_);

}
$ret4_=mysqli_query($con,"SELECT username FROM supervisoredu where username = '".$_SESSION['alogin']."'");
$row44=mysqli_fetch_array($ret4_);

 if($_SESSION['alogin']===$row44['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate FROM tblcomplaints where date<='$date' and state='$st4' and mfeedback is not null ORDER BY complaintNumber DESC ");

$num4=mysqli_num_rows($rt_);
}
$ret5_=mysqli_query($con,"SELECT username FROM supervisormoney where username = '".$_SESSION['alogin']."'");
$row55=mysqli_fetch_array($ret5_);

 if($_SESSION['alogin']===$row55['username'])
{ 
$st5='قسم المالية';
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate  FROM tblcomplaints where date<='$date' and  state='$st5' and mfeedback is not null ORDER BY complaintNumber DESC ");
$num4=mysqli_num_rows($rt_);
}
$ret6_=mysqli_query($con,"SELECT username FROM supervisorbus where username = '".$_SESSION['alogin']."'");
$row66=mysqli_fetch_array($ret6_);

 if($_SESSION['alogin']===$row66['username'])
{ 
$st6='قسم المواصلات';
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate  FROM tblcomplaints where date<='$date' and  state='$st6' and mfeedback is not null ORDER BY complaintNumber DESC ");
$num4=mysqli_num_rows($rt_);
}
$ret7_=mysqli_query($con,"SELECT username FROM supervisoracademic where username = '".$_SESSION['alogin']."'");
$row77=mysqli_fetch_array($ret7_);

 if($_SESSION['alogin']===$row77['username'])
{ 
$st7='القسم الاكاديمي';
$rt_ = mysqli_query($con,"SELECT complaintNumber , mfeedback,regDate  FROM tblcomplaints where date<='$date' and  state='$st7' and mfeedback is not null ORDER BY complaintNumber DESC ");
$num4=mysqli_num_rows($rt_);
}
?>
<b  class="label orange pull-right" style="margin-left:6px; background:red" ><?php  echo htmlentities($num4); ?> </b>  <b name="clicked"> تنبيهات المدير </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num6=mysqli_fetch_array($rt_))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center"><?php echo htmlentities($num6['mfeedback']);?><a style="color:blue"  href =" complaint-details.php?cid= <?php echo htmlentities($num6['complaintNumber']);?>">	عرض التفاصيل </a>
 <label> تاريخ الشكوى:<?php echo htmlentities($num6['regDate']);?> </label>							</li>
				
											
										
																

								<li class="divider"> </li>
								
<?php }?>  
							</ul>
 </li>
 </li>
 	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2=mysqli_query($con,"SELECT username FROM supervisorit where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2'  and date<='$date'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret2=mysqli_query($con,"SELECT username FROM supervisorguide where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 

$st2='قسم اللوازم';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2'and date<='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);

}
$ret4=mysqli_query($con,"SELECT username FROM supervisoredu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st4' and date<='$date'  ORDER BY complaintNumber DESC ");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM supervisormoney where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st5' and date<='$date'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM supervisorbus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st6' and date<='$date'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM supervisoracademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st7' and date<='$date' ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
?>
<b  class="label orange pull-right" style="margin-left:6px; background:red" ><?php  echo htmlentities($num1); ?> </b>  <b name="clicked">اشعارات انتهاء الوقت المحدد </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num2=mysqli_fetch_array($rt))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center"> انتهى وقت الشكوى رقم<?php echo htmlentities($num2['complaintNumber']);?><a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> 
							 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label>
							</li>
				
											
										
																

								<li class="divider"> </li>
								
<?php }?>  
							</ul>
 </li>
 </li>
 	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2=mysqli_query($con,"SELECT username FROM supervisorit where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and status='in process'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret2=mysqli_query($con,"SELECT username FROM supervisorguide where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 

$st2='قسم اللوازم';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and status='in process'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret4=mysqli_query($con,"SELECT username FROM supervisoredu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st4' and status='in process'  ORDER BY complaintNumber DESC ");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM supervisormoney where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st5' and status='in process'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM supervisorbus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st6' and status='in process'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM supervisoracademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st7' and status='in process'   ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);
}
?>
<b  class="label orange pull-right" style="margin-left:6px; background:red" ><?php  echo htmlentities($num1); ?> </b>  <b name="clicked">اشعارات شكوى قيد العمل </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num2=mysqli_fetch_array($rt))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center"> يتم العمل على الشكوى رقم<?php echo htmlentities($num2['complaintNumber']);?><a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> 
							
				 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?>
				 </label> </li>
				 </li>
											
										
																

								<li class="divider"> </li>
								
<?php }?>  
							</ul>
 </li>
 </li>


 	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2=mysqli_query($con,"SELECT username FROM supervisorit where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and status='closed'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);

}
$ret2=mysqli_query($con,"SELECT username FROM supervisorguide where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 

$st2='قسم اللوازم';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and status='closed'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret4=mysqli_query($con,"SELECT username FROM supervisoredu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st4' and status='closed'  ORDER BY complaintNumber DESC ");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM supervisormoney where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st5' and status='closed'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM supervisorbus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st6' and status='closed'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM supervisoracademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback, regDate  FROM tblcomplaints where  state='$st7' and status='closed' ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
?>
<b  class="label orange pull-right" style="margin-left:6px; background:red" ><?php  echo htmlentities($num1); ?> </b>  <b name="clicked"> اشعارات شكوى محلولة </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num2=mysqli_fetch_array($rt))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center"> تم حل الشكوى رقم <?php echo htmlentities($num2['complaintNumber']);?><a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> </li>
														 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label> </li>

											
										
																

								<li class="divider"> </li>
								
<?php }?>  
							</ul>
 </li>
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