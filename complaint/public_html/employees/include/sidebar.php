
<?php 
$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
error_reporting(E_ERROR | E_PARSE);
?>

<style>
.widget-menu > li > a{
	background-color: #1c2282de;
color:white;
}
.widget-menu > li > a:hover {
	background-color: white;
	color:#4c4460;

}
.widget-menu > li > a:hover .menu-icon {
	color:black;
}
.widget-menu > li > a .menu-icon {
	color:white;
}

</style>


<div class="span3">
					<div class="sidebar">


<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									ادارة الشكوى
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="notprocess-complaint.php">
											<i class="icon-tasks"></i>
											لم تتم معالجة الشكوى بعد
											<?php


{
	$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
	
	if($_SESSION['alogin']==="admin")
{
		$date=date('Y-m-d G:i:s A');
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.date>='$date' ");
$num1 = mysqli_num_rows($rt);
}
else
{
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
while($row2=mysqli_fetch_array($ret2)){
  if($_SESSION['alogin']===$row2['username'])
{
	$st2="قسم الاي تي";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st2' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}
} 
 $ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
while($row3=mysqli_fetch_array($ret3)){
  if($_SESSION['alogin']===$row3['username'])
{
	$st3='قسم اللوازم';
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.state='$st3' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}
}
 $ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
while($row4=mysqli_fetch_array($ret4)){
  if($_SESSION['alogin']===$row4['username'])
{
	$st4="القسم التربوي و الارشاد";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st4' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}
}
 $ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
while($row5=mysqli_fetch_array($ret5)){
  if($_SESSION['alogin']===$row5['username'])
{
	$st5="قسم المالية";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st5' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}  
}
 $ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
while($row6=mysqli_fetch_array($ret6)){
  if($_SESSION['alogin']===$row6['username'])
{
	$st6="قسم المواصلات";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.state='$st6' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}  
}
 $ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
while($row7=mysqli_fetch_array($ret7)){
  if($_SESSION['alogin']===$row7['username'])
{
	$st7="القسم الاكاديمي";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status is null and tblcomplaints.state='$st7' and tblcomplaints.date>='$date'");
$num1 = mysqli_num_rows($rt);
}  
}
}?>

		
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
										</a>
									</li>
									
									<li>
										<a href="inprocess-complaint.php">
											<i class="icon-tasks"></i>
											شكوى معلقة
                   <?php 

{ 	if($_SESSION['alogin']==="admin")
{
  $status="in process";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
}
else
{
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
while($row2=mysqli_fetch_array($ret2)){
  if($_SESSION['alogin']===$row2['username'])
{
	$st2="قسم الاي تي";
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st2'");
$num1 = mysqli_num_rows($rt);
}

}
$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
while($row3=mysqli_fetch_array($ret3)){
  if($_SESSION['alogin']===$row3['username'])
{
	$st3='قسم اللوازم';
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st3'");
$num1 = mysqli_num_rows($rt);
}
}
$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
while($row4=mysqli_fetch_array($ret4)){
  if($_SESSION['alogin']===$row4['username'])
{
	$st4="القسم التربوي و الارشاد";
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st4'");
$num1 = mysqli_num_rows($rt);
}
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
while($row5=mysqli_fetch_array($ret5)){
  if($_SESSION['alogin']===$row5['username'])
{
	$st5="قسم المالية";
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st5'");
$num1 = mysqli_num_rows($rt);
}
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
while($row6=mysqli_fetch_array($ret6)){
  if($_SESSION['alogin']===$row6['username'])
{
	$st6="قسم المواصلات";
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st6'");
$num1 = mysqli_num_rows($rt);
}
}
$ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
while($row7=mysqli_fetch_array($ret7)){
  if($_SESSION['alogin']===$row7['username'])
{
	$st7="القسم الاكاديمي";
	 $status="in process";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st7'");
$num1 = mysqli_num_rows($rt);
}
}

}

	
	?>
	<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>
										</a>
									</li>
									<li>
										<a href="closed-complaint.php">
											<i class="icon-inbox"></i>
											شكوى مغلقة
	     <?php 
                    
{ 	if($_SESSION['alogin']==="admin")
{
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status'");
$num1 = mysqli_num_rows($rt);
}
else
{
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
while($row2=mysqli_fetch_array($ret2)){
  if($_SESSION['alogin']===$row2['username'])
{ 
	$st2="قسم الاي تي";
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st2'");
$num1 = mysqli_num_rows($rt);
}
}

$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
while($row3=mysqli_fetch_array($ret3)){
  if($_SESSION['alogin']===$row3['username'])
{
	$st3='قسم اللوازم';
	 $status="closed";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st3'");
$num1 = mysqli_num_rows($rt);
}
}

$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
while($row4=mysqli_fetch_array($ret4)){
  if($_SESSION['alogin']===$row4['username'])
{
	$st4="القسم التربوي و الارشاد";
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st4'");
$num1 = mysqli_num_rows($rt);
}
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
while($row5=mysqli_fetch_array($ret5)){
  if($_SESSION['alogin']===$row5['username'])
{
	$st5="قسم المالية";
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st5'");
$num1 = mysqli_num_rows($rt);
}
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
while($row6=mysqli_fetch_array($ret6)){
  if($_SESSION['alogin']===$row6['username'])
{
	$st6="قسم المواصلات";
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st6'");
$num1 = mysqli_num_rows($rt);
}
}
$ret7=mysqli_query($con,"SELECT username FROM eacademic where username = '".$_SESSION['alogin']."'");
while($row7=mysqli_fetch_array($ret7)){
  if($_SESSION['alogin']===$row7['username'])
{
	$st7="القسم الاكاديمي";
  $status="closed";                   
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where status='$status' and tblcomplaints.state='$st7'");
$num1 = mysqli_num_rows($rt);
}
}
}


	
	?><b class="label green pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?>

										</a>
									</li>
									<li>
										<a href="deadline-complaint.php">
											<i class="icon-tasks"></i>
											انتهى وقت حل الشكوى
											<?php


{
	
	if($_SESSION['alogin']==="admin")
{
	$date=date('Y-m-d G:i:s A');
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.date<='$date' ");
$num1 = mysqli_num_rows($rt);
}
else{
$ret2=mysqli_query($con,"SELECT username FROM it where username = '".$_SESSION['alogin']."'");
while($row2=mysqli_fetch_array($ret2)){

 if($_SESSION['alogin']===$row2['username'])
{
		$date=date('Y-m-d G:i:s A');
	$st2="قسم الاي تي";
$st='Time Finished';
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st2' and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
}
}

$ret3=mysqli_query($con,"SELECT username FROM guide where username = '".$_SESSION['alogin']."'");
while($row3=mysqli_fetch_array($ret3)){

 if($_SESSION['alogin']===$row3['username'])
{
	$date=date('Y-m-d G:i:s A');
	$st3='قسم اللوازم';
$st='Time Finished';
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.state='$st3' and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
}
}
$ret4=mysqli_query($con,"SELECT username FROM edu where username = '".$_SESSION['alogin']."'");
while($row4=mysqli_fetch_array($ret4)){
  if($_SESSION['alogin']===$row4['username'])
{
	$date=date('Y-m-d G:i:s A');
	$st4="القسم التربوي و الارشاد";
$st='Time Finished';
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st4'  and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
}
}
$ret5=mysqli_query($con,"SELECT username FROM money where username = '".$_SESSION['alogin']."'");
while($row5=mysqli_fetch_array($ret5)){
  if($_SESSION['alogin']===$row5['username'])
{
$st='Time Finished';
	$date=date('Y-m-d G:i:s A');
	$st5="قسم المالية";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.state='$st5' and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
} 
}
$ret6=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
while($row6=mysqli_fetch_array($ret6)){
  if($_SESSION['alogin']===$row6['username'])
{
$st='Time Finished';
	$date=date('Y-m-d G:i:s A');
	$st6="قسم المواصلات";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where  tblcomplaints.state='$st6' and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
} 
}
$ret7=mysqli_query($con,"SELECT username FROM ebus where username = '".$_SESSION['alogin']."'");
while($row7=mysqli_fetch_array($ret7)){
  if($_SESSION['alogin']===$row7['username'])
{
$st='Time Finished';
	$date=date('Y-m-d G:i:s A');
	$st7="القسم الاكاديمي";
$rt = mysqli_query($con,"SELECT * FROM tblcomplaints where tblcomplaints.state='$st7' and tblcomplaints.date<='$date'");
$num1 = mysqli_num_rows($rt);
} 
}
}
 ?>

	
											<b class="label orange pull-right"><?php echo htmlentities($num1); ?></b>
<?php } ?> 
										</a>
									</li>
								</ul>
							</li>
							
							
						
						</ul>
	<?php 

$ret=mysqli_query($con,"SELECT username from admin");
$num=mysqli_fetch_array($ret);
if($_SESSION['alogin']==="admin2"||$_SESSION['alogin']==="admin3"||$_SESSION['alogin']==="admin4"||$_SESSION['alogin']==="admin5" )
{ ?>
						<ul  style="display:none"class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> اضف فئة</a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>اضف تصنيف فرعي </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>اضف قسم</a></li>
                          
                        
                            </ul><!--/.widget-nav-->
<?php } ?>
	<?php 


if($_SESSION['alogin']==="admin")
{ ?>
						<ul  class="widget widget-menu unstyled">
                                <li><a href="category.php"><i class="menu-icon icon-tasks"></i> اضف فئة</a></li>
                                <li><a href="subcategory.php"><i class="menu-icon icon-tasks"></i>اضف تصنيف فرعي </a></li>
                                <li><a href="state.php"><i class="menu-icon icon-paste"></i>اضف قسم</a></li>
								<li><a href="students.php"><i class="menu-icon icon-paste"></i>سجل الطلاب</a></li>
								<li><a href="search-student.php"><i class="menu-icon icon-paste"></i>بحث عن طالب</a></li>
                          
                        
                            </ul><!--/.widget-nav-->
<?php } ?>

						<ul class="widget widget-menu unstyled">
						<?php 

if($_SESSION['alogin']==="admin2"||$_SESSION['alogin']==="admin3"||$_SESSION['alogin']==="admin4"||$_SESSION['alogin']==="admin5" )
{ ?>
							<li style="display:none"><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>سجل دخول المستخدم </a></li>
<?php } ?>
						<?php 

if($_SESSION['alogin']==="admin") 
	
{?>
							<li><a href="user-logs.php"><i class="menu-icon icon-tasks"></i>سجل دخول المستخدم </a></li>
								

<?php }?>

						<li>
								<a href="logout.php">
									<i class="menu-icon icon-signout"></i>
									تسجيل الخروج
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
