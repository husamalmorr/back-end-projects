





<style> 
.side-menu > li > a{
	background-color: #1c2282de;
color:white;
}
.sub-menu > li > a{
	background-color: #1c2282de;
color:white;
}
.side-menu > li > a:hover {
	background-color: white;
	color:#4c4460;

}


.side-menu > li > a:hover .menu-icon {
	color:black;
}
.side-menu > li > a .menu-icon {
	color:white;
}
span{
color:white;
}
span:hover{
background-color:white;
color:black;
}


i {
	color:white;
}
ul.sidebar-menu li ul.sub li {
	background-color:white;
}

#sidebar > ul > li.active > ul.sub, #sidebar > ul > li > ul.sub > li > a {
    display: block;
    color: black;
}
</style>


<aside>
          <div id="sidebar"  class="nav-collapse " style="background-color:#ff7f27;color:white">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                              <?php $query=mysqli_query($con,"select fullName,userImage from users where userEmail='".$_SESSION['login']."'");
 while($row=mysqli_fetch_array($query)) 
 {
 ?> 
                  <p class="centered"><a href="profile.php">
<?php $userphoto=$row['userImage'];
if($userphoto==""):
?>
<img src="userimages/noimage.png"  class="img-circle" width="70" height="70" >
<?php else:?>
  <img src="userimages/<?php echo htmlentities($userphoto);?>" class="img-circle" width="70" height="70">

<?php endif;?>
</a>
</p>
 
                  <h5 class="centered"><?php echo htmlentities($row['fullName']);?></h5>
                  <?php } ?>
                    
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>لوحة القيادة</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span>اعدادات الحساب</span>
                      </a>
                      <ul class="sub" style="background-color:#ff7f27">
                          <li><a  href="profile.php">الملف الشخصي</a></li>
                          <li><a  href="change-password.php">تغير كلمة السر</a></li>
                        
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="register-complaint.php" >
                          <i class="fa fa-book"></i>
                          <span>اضافة شكوى</span>
                      </a>
                    </li>
					 
						  				

                         
                    
                    </li>
                  </li>
                  <li class="sub-menu">
                      <a href="complaint-history.php" >
                          <i class="fa fa-tasks"></i>
                          <span>الشكاوى المضافة</span>
                      </a>
                      
                  </li>
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>