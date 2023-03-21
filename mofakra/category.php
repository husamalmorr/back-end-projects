<?php if ( empty(session_id()) ) session_start(); ?>

<?php 
include("config.php");
		$id=$_SESSION['id'];
		$query=mysqli_query($con,"select*from users where id='$id'");
		$row=mysqli_fetch_array($query);
		$username=$row['username'];
		$email=$row['email'];
		?>
				<?php 
error_reporting(0);
if($_SESSION['id']!=$_GET['id'])
	{
	    echo "login first";
	 $url="https://juclinic.000webhostapp.com/page-login/";
	   echo ("<script>location.href='$url'</script>");

	    
}
?>

<?php 
$_SESSION['alogin']=$row['username'];
if(strlen($_SESSION['alogin'])===0 && $_SESSION['id']==$_GET['id'])
	{	
header('location:page-login.php');
}
?>



<!DOCTYPE html>
<html lang="ar">
  
  <head>
  <style> 
  .list-group
  {
	      text-align: right;
    font-family: 'FontAwesome';
  }
  #size
  {
	      font-size: 17px;
		  color:black;
  }
  .fas
  {
	  float:left;
	  font-size:17px;
  }
  .photo {
    height: 48px;
    width: 48px;
    flex-shrink: 0;
    min-width: 48px;
    border-radius: 50%;
    background-color: rgb(242, 242, 242);
    object-fit: cover;
    margin-right: 10px;
    margin-left: 0px;
}
img{
    height: 48px;
    width: 48px;
    flex-shrink: 0;
    min-width: 48px;
    border-radius: 50%;
    background-color: rgb(242, 242, 242);
    object-fit: cover;
    margin-right: 10px;
    margin-left: 0px;
}

  </style>
  
  <base href="https://juclinic.000webhostapp.com/" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#ff4f2c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>مفكرتي</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="css/apexcharts.css">
    
    <!-- Core Stylesheet-->
		<link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
</head>
  <body>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
      <div class="spinner-grow text-primary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Header Content-->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <!-- Back Button-->
          <div class="back-button"></div>
          <!-- Page Title-->
          <div class="page-heading">
            <h6 class="mb-0">التصنيفات</h6>
          </div>
          <!-- Navbar Toggler-->
          <div class="navbar--toggler" id="affanNavbarToggler"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
      </div>
    </div>
    <!-- Dark mode switching-->
    <div class="dark-mode-switching">
      <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="dark-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
</svg>
          <p class="mb-0">التحويل للوضع الليلي</p>
        </div>
        <div class="light-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg>
          <p class="mb-0">التحويل للوضع الضؤي</p>
        </div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="sidenav-wrapper" id="sidenavWrapper">
      <!-- Go Back Button-->
      <div class="go-back-btn" id="goBack">
        <svg class="bi bi-x" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"></path>
          <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"></path>
        </svg>
      </div>

      
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="sidenav-style1"></div>
        <!-- User Thumbnail-->
        <!-- User Info-->
        <div class="user-info">
          <h6 class="user-name mb-0"><?php echo $username;?> </h6><span><?php echo $email;?></span>
        </div>
      </div>


      <!-- Sidenav Nav-->
 <?php include('sidenav.php')?>
      <!-- Social Info-->
      <!-- Copyright Info-->
 
    </div>
     <div class="page-content-wrapper py-3">
      <div class="container">
        <div class="card">
          <div class="card-body p-3">
		  
     
<div class="container">
  <div class="row">
    <div class="col-12" style="margin: auto;
    margin-left: 13px;
    padding: 0px;
    width: 95%;">
      <ul class="list-group">

        <a href="projects/<?php echo $_GET['id'];?>/<?php echo "الشخصي";?>"> <li id="size" class="list-group-item d-flex justify-content-between align-items-center">
          الشخصي
          <div class="image-parent">
              <img src="img/1.jpg" class="img-fluid" alt="quixote">
          </div>
        </li> </a>
               <a href="projects/<?php echo $_GET['id'];?>/<?php echo "المهني";?>"> <li  id="size" class="list-group-item d-flex justify-content-between align-items-center">
 المهني 
          <div class="image-parent">
              <img src="img/2.jpg" class="img-fluid" alt="lay">
              </div>
        </li></a>
        <a href="projects/<?php echo $_GET['id'];?>/<?php  echo "التعليمي";?>"> <li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
         التعليمي
          <div class="image-parent">
              <img src="img/3.png" class="img-fluid" alt="things">
              </div>
        </li> </a>
		      <a href="projects/<?php echo $_GET['id'];?>/<?php echo "الديني";?>"> <li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
       الديني 
          <div class="image-parent">
              <img src="img/4.png" class="img-fluid" alt="things">
              </div>
        </li> </a>
			     <a href="projects/<?php echo $_GET['id'];?>/<?php  echo "اجتماعي";?>"><li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
        اجتماعي
          <div class="image-parent">
              <img src="img/5.png" class="img-fluid" alt="things">
              </div>
        </li> </a>
			   <a href="projects/<?php echo $_GET['id'];?>/<?php echo "الصحي";?>">	   <li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
       الصحي 
          <div class="image-parent">
              <img src="img/6.png" class="img-fluid" alt="things">
              </div>
        </li> </a>
					     <a href="projects/<?php echo $_GET['id'];?>/<?php echo "المادي";?>"> <li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
        المادي 
          <div class="image-parent">
              <img src="img/8.jpg" class="img-fluid" alt="things">
              </div>
        </li> </a>
				 <a href="projects/<?php echo $_GET['id'];?>/<?php  echo "اخرى";?>">	   <li id="size" class="list-group-item d-flex justify-content-between align-items-center">  
         اخرى 
          <div class="image-parent">
              <img src="img/7.jpg" class="img-fluid" alt="things">
              </div>
        </li> </a>
      </ul>
		
    </div>
  </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


    <!-- Footer Nav-->
<?php include('footer-tabs.php');?>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/default/internet-status.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/default/dark-mode-switch.js"></script>
    <script src="js/ion.rangeSlider.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/default/active.js"></script>
    <script src="js/default/clipboard.js"></script>
    <!-- PWA-->
    <script src="js/pwa.js"></script>
    <script src="https://global.localizecdn.com/localize.js"></script>
<script>!function(a){if(!a.Localize){a.Localize={};for(var e=["translate","untranslate","phrase","initialize","translatePage","setLanguage","getLanguage","getSourceLanguage","detectLanguage","getAvailableLanguages","untranslatePage","bootstrap","prefetch","on","off","hideWidget","showWidget"],t=0;t<e.length;t++)a.Localize[e[t]]=function(){}}}(window);</script>

<script>
  Localize.initialize({
    key: 'clTYhmrERpyzg',
    rememberLanguage: true,
  });
  </script>
  </body>


</html>