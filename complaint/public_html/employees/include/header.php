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
			  		نظام ادارة الشكاوي | الموظف
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
											

					<ul class="nav pull-right">
	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st2'  and date<='$date' ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
$row3=mysqli_fetch_array($ret3);
if($_SESSION['alogin']===$row3['username'])
{ 

$st2="قسم اللوازم";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st2' and date<='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);

}
$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st4' and date<='$date'  ORDER BY complaintNumber DESC");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st5' and date<='$date' ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st6' and date<='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st7' and date<='$date'  ORDER BY complaintNumber DESC ");
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
							
						 
							<li> <li style="text-align:center">  
							انتهى وقت الشكوى رقم<?php echo htmlentities($num2['complaintNumber']);?><a style="color:blue" href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> 
										 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label> </li>

											
										
																

								<li class="divider"> </li>
								
<?php }?>  
							</ul>
 </li>
 </li>


	 <li class="nav-user dropdown">
<a href="#" class="dropdown-toggle collapse" data-toggle="dropdown"> 
<?php 
									$date=date('Y-m-d G:i:s A');

									
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 
$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and status is null  and date>='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);

}
$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
$row3=mysqli_fetch_array($ret3);
if($_SESSION['alogin']===$row3['username'])
{ 

$st2="قسم اللوازم";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback ,regDate FROM tblcomplaints where  state='$st2' and status is null  and date>='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);

}
$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback ,regDate FROM tblcomplaints where  state='$st4' and status is null and date>='$date'  ORDER BY complaintNumber DESC ");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback ,regDate  FROM tblcomplaints where  state='$st5' and status is null  and date>='$date'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st6' and status is null  and date>='$date'  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st7' and status is null  and date>='$date'  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
?>
<b  class="label orange pull-right" style="margin-left:6px; background:red" ><?php  echo htmlentities($num1); ?> </b>  <b name="clicked">اشعارات وصول شكوى جديدة </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num2=mysqli_fetch_array($rt))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center">
							لقد وصلك شكوى رقم <?php echo htmlentities($num2['complaintNumber']);?><a style="color:blue" href =" complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> 
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

									

$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
$row2=mysqli_fetch_array($ret2);
if($_SESSION['alogin']===$row2['username'])
{ 

$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate FROM tblcomplaints where  state='$st2' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);

}
$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
$row3=mysqli_fetch_array($ret3);

 if($_SESSION['alogin']===$row3['username'])
{ 
$st3='قسم اللوازم';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st3' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC");
$num1=mysqli_num_rows($rt);
}
$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
$row4=mysqli_fetch_array($ret4);

 if($_SESSION['alogin']===$row4['username'])
{ 
$st4='القسم التربوي و الارشاد';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate  FROM tblcomplaints where  state='$st4' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC");

$num1=mysqli_num_rows($rt);
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
$row5=mysqli_fetch_array($ret5);

 if($_SESSION['alogin']===$row5['username'])
{ 
$st5='قسم المالية';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st5' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
$row6=mysqli_fetch_array($ret6);

 if($_SESSION['alogin']===$row6['username'])
{ 
$st6='قسم المواصلات';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st6' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
$ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
$row7=mysqli_fetch_array($ret7);

 if($_SESSION['alogin']===$row7['username'])
{ 
$st7='القسم الاكاديمي';
$rt = mysqli_query($con,"SELECT complaintNumber , feedback,regDate   FROM tblcomplaints where  state='$st7' and date<='$date' and feedback is not null  ORDER BY complaintNumber DESC ");
$num1=mysqli_num_rows($rt);
}
?>
<b  class="label  pull-right" style="margin-left:6px; background:orange" ><?php  echo htmlentities($num1); ?> </b>  <b name="clicked"> تنبيهات المشرف </b>
											</a>
							<ul class="dropdown-menu" style="overflow:hidden; overflow-y:scroll;height:300px; width:25%;">
											<?php
										
											while($num2=mysqli_fetch_array($rt))
											{ 
		?> 
							
						 
							<li> <li style="text-align:center" >
							<?php echo $num2['feedback'];?><a style="color:blue"  href ="complaint-details.php?cid= <?php echo htmlentities($num2['complaintNumber']);?>">	عرض التفاصيل </a> 
							 <label> تاريخ الشكوى:<?php echo htmlentities($num2['regDate']);?> </label>
							</li>
				
											
										
																

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