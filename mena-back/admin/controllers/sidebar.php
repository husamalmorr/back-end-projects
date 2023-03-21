  <div id="sidebar">
    <header>
	<?php
	include("config.php");
	$logo=mysqli_query($conn,"select * from logo");
	$row=mysqli_fetch_array($logo);
	?>
      <a href="#"><img style="width:100px;"src="../images/<?php echo $row['image'];?>" /> </a>
    </header>
    <ul class="nav">
	<?php $path = basename($_SERVER['PHP_SELF']); ?>
<?php if ($path=="dashboard.php"){?>
      <li class="active">
        <a href="dashboard.php" style="color:black">
          <i class="zmdi zmdi-view-dashboard "></i> Dashboard
        </a>
      </li>
<?php }else{?>
  <li>
        <a href="dashboard.php">
          <i class="zmdi zmdi-view-dashboard "></i> Dashboard
        </a>
      </li> 
<?php }?>
<?php if ($path=="admin.php"){?>
      <li class="active">
        <a href="admin.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Admins
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="admin.php">
          <i class="zmdi zmdi-widgets"></i> Admins
        </a>
      </li>
<?php }?>
<?php if ($path=="navbar.php"){?>
      <li class="active">
        <a href="navbar.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Navbar
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="navbar.php">
          <i class="zmdi zmdi-widgets"></i> Navbar
        </a>
      </li>
<?php }?>
<?php if ($path=="slider.php"){?>
      <li class="active">
        <a href="slider.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Slider
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="slider.php">
          <i class="zmdi zmdi-widgets"></i> Slider
        </a>
      </li>
<?php }?>
<?php if ($path=="slider-description.php"){?>
      <li class="active">
        <a href="slider-description.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Slider Description
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="slider-description.php">
          <i class="zmdi zmdi-widgets"></i> Slider Description
        </a>
      </li>
<?php }?>
<?php if ($path=="services.php"){?>
      <li class="active">
        <a href="services.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Services
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="services.php">
          <i class="zmdi zmdi-widgets"></i> Services
        </a>
      </li>
<?php }?>
<?php if ($path=="category.php"){?>
      <li class="active">
        <a href="category.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Categories
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="category.php">
          <i class="zmdi zmdi-widgets"></i> Categories
        </a>
      </li>
<?php }?>
<?php if ($path=="tracks.php"){?>
      <li class="active">
        <a href="tracks.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Tracks
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="tracks.php">
          <i class="zmdi zmdi-widgets"></i> Tracks
        </a>
      </li>
<?php }?>
<?php if ($path=="courses.php"){?>
      <li class="active">
        <a href="courses.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Courses
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="courses.php">
          <i class="zmdi zmdi-widgets"></i> Courses
        </a>
      </li>
<?php }?>
<?php if ($path=="curriculums.php"){?>
      <li class="active">
        <a href="curriculums.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i> Curriculums
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="curriculums.php">
          <i class="zmdi zmdi-widgets"></i> Curriculums
        </a>
      </li>
<?php }?>
<?php if ($path=="about-us.php"){?>
      <li class="active">
        <a href="about-us.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  About Us
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="about-us.php">
          <i class="zmdi zmdi-widgets"></i>  About Us
        </a>
      </li>
<?php }?>
<?php if ($path=="contact-us.php"){?>
      <li class="active">
        <a href="contact-us.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  Contact Us
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="contact-us.php">
          <i class="zmdi zmdi-widgets"></i>  Contact Us
        </a>
      </li>
<?php }?>
<?php if ($path=="career.php"){?>
      <li class="active">
        <a href="career.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  Career
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="career.php">
          <i class="zmdi zmdi-widgets"></i>  Career
        </a>
      </li>
<?php }?>
<?php if ($path=="testi.php"){?>
      <li class="active">
        <a href="testi.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  Testimonial
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="testi.php">
          <i class="zmdi zmdi-widgets"></i>  Testimonial
        </a>
      </li>
<?php }?>
<?php if ($path=="partners.php"){?>
      <li class="active">
        <a href="partners.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  Partners
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="partners.php">
          <i class="zmdi zmdi-widgets"></i>  Partners
        </a>
      </li>
<?php }?>
<?php if ($path=="footer-contact.php"){?>
      <li class="active">
        <a href="footer-contact.php" style="color:black">
          <i class="zmdi zmdi-widgets"></i>  Footer Contact
        </a>
      </li>
<?php }else {?>
    <li>
        <a href="footer-contact.php">
          <i class="zmdi zmdi-widgets"></i>  Footer Contact
        </a>
      </li>
<?php }?>
	     <li>
        <a href="logout.php">
          <i class="zmdi zmdi-info-outline"></i> Logout
        </a>
      </li>
     
    
    </ul>
  </div>