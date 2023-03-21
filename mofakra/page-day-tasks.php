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
error_reporting(0);
if($_SESSION['id']==null)
	{
	    echo "login first";
	 $url="https://juclinic.000webhostapp.com/page-login/";
	   echo ("<script>location.href='$url'</script>");

	    
}
?>
<!DOCTYPE html>
<html lang="ar">
  
  <head>
      <base href="https://juclinic.000webhostapp.com/" />
<style> 










@import url('https://fonts.googleapis.com/css?family=Comfortaa:300,400,700');
.chip {
    padding: 0 12px;
    background-color: #f0ebeb;
    border-radius: 100px;
    display: inline-flex;
    margin: 4px;
    color: rgba(0, 0, 0, .87);
    align-items: center;
    height: 32px;
    font-size: 14px;
    cursor: pointer;
    border: none;
}

.chip .icon {
    font-size: 16px;
    color: rgba(0, 0, 0, .54);
    width: 20px;
    text-align: center;
}

.chip .icon--leadind {
    margin: 2px 4px 0 -4px;
}

.chip .icon--trailing {
    margin: 2px -4px 0 4px;
}

.chips__choice .chip.chip--active {
    color: rgb(var(--primary-color));
    background-color: rgba(var(--primary-color), 0.2);
}

.chips__filter .chip .chip--check {
    display: none;
}

.chip .active{
background:#ea4c62;
color:white;
}
</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#ff4f2c
">
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
          <div class="back-button"> <a href="add-day-task/<?php echo $_GET['id'];?>"> <i class="fa fa-plus" style="color:white"> </i> </a> </div>
          <!-- Page Title-->
          <div class="page-heading">
            <h6 class="mb-0">المهام اليومية</h6>
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
          <h6 class="user-name mb-0"><?php  echo $username;?> </h6><span><?php echo $email;?></span>
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
		  <div class="chips__filter"style="    margin-left: 10px;
">
    	<div class="chip" id="all-chips">
        <span class="icon icon--leadind chip--check">
            <i class="fa fa-check"></i>
        </span>
     <span id="all">جميع المهام</span>
    </div>
    	<div class="chip" id="done-chips">
        <span class="icon icon--leadind chip--check">
            <i class="fas fa-check"></i>
        </span>
   <span id="done"> منجز اليوم </span> 
    </div>
    	<div class="chip" id="wrong-chips">
        <span class="icon icon--leadind chip--check">
            <i class="fas fa-check"></i>
        </span>
    <span id="wrong"> غير منجز اليوم </span> 
    </div>
 
	</div>

			<?php 
			$num=mysqli_num_rows($query);
			if($num>0)
			{
				$id=$_GET['id'];
			$query=mysqli_query($con,"select * from daily where owner='$id' ORDER BY addedtime DESC");
			while($row=mysqli_fetch_array($query))
			{
			?>
            <!-- Page Item--><div class="test"> <a class="page--item" href="edit-day-task/<?php echo $row['id'];?>/<?php echo $_GET['id'];?>"><?php echo htmlentities($row['taskname'])?>  <br /> <br /> 
						 <sub style="display: contents;"> <?php echo htmlentities($row['status']);?> </sub>
						 	  <?php if($row['status']=='غير منجز اليوم' && $row['owner']==$id)
										  {?>
 <a class="btn btn-danger" style="float: right;     padding: 2px; margin-top: -5rem;margin-right: 2rem;padding: 5px; z-index: 1;position: relative;" href="update-day-task/<?php echo $row['id'];?>/<?php echo $_GET['id'];?>/<?php echo $row['status'];?> "><i class="fa fa-times">غير منجز</i></a> 

										  <?php } 
										  else 
										  {
											  ?>
						 				  <a class="btn btn-success" style="float: right; margin-top: -5rem;margin-right: 2rem;padding: 5px; z-index: 1;position: relative;" href="update-day-task/<?php echo $row['id'];?>/<?php echo $_GET['id'];?>/<?php echo $row['status'];?> "> <i class="fa fa-check"> منجز</i> </a> 
										  <?php }?>


			 </a>
			 </div>
			<?php }?> 
			<?php } 
			else 
			{?> 
		<p> لا يوجد بيانات </p> 
			<?php }?>
			


            <!-- Page Item-->
 
    
</div>
</div>
</div>

</div>

    <!-- Footer Nav-->
  <?php include('footer-tabs.php')?>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="	https://cdnjs.cloudflare.com/ajax/libs/sammy.js/0.7.6/sammy.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sammy.js/0.7.6/sammy.min.js
"></script>
<script>

$(document).ready(function(){
	$('#done').click(function(){

$(".test .page--item:contains('منجز')").show();
$(".test .btn-success:contains('منجز')").show();
$(".test .page--item:contains('غير منجز')").hide();
$(".test .btn-danger:contains('غير منجز')").hide();
		 $(this).addClass("active");
				 $("#wrong").removeClass("active");
  $("#all").removeClass("active");
 $("#all-chips").css('background-color','#f0ebeb');
        $("#all-chips").css('background-color','#f0ebeb');
        $("#done-chips").css('background-color','#ea4c62');
        $("#wrong-chips").css('background-color','#f0ebeb');

	});
		$('#wrong').click(function(){
			
$(".test .page--item:contains('منجز')").hide();
$(".test .btn-success:contains('منجز')").hide();
$(".test .btn-danger:contains('غير منجز')").show();
$(".test .page--item:contains('غير منجز')").show();
  $(this).addClass("active");
  $("#all").removeClass("active");
  $("#done").removeClass("active");
        $("#all-chips").css('background-color','#f0ebeb');
        $("#done-chips").css('background-color','#f0ebeb');
        $("#wrong-chips").css('background-color','#ea4c62');
	});
		$('#all').click(function(){
			
$(".test .page--item").show();
$(".btn-success:contains('منجز')").show();
$(".test .btn-danger:contains('غير منجز')").show();
        $(this).addClass("active");
		 $("#wrong").removeClass("active");
  $("#done").removeClass("active");
   $("#all-chips").css('background-color','#ea4c62');
        $("#wrong-chips").css('background-color','#f0ebeb');
        $("#done-chips").css('background-color','#f0ebeb');


	});
});
</script>
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