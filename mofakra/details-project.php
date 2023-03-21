<?php if ( empty(session_id()) ) session_start(); ?>
<?php 
error_reporting(0);
include("config.php");
		$id=$_SESSION['id'];
		$query=mysqli_query($con,"select*from users where id='$id'");
		$row=mysqli_fetch_array($query);
		$username=$row['username'];
		$email=$row['email'];

		?>
				<?php 

if($_SESSION['id']!=$_GET['id'])
	{
	    echo "login first";
	 $url="https://juclinic.000webhostapp.com/page-login/";
	   echo ("<script>location.href='$url'</script>");

	    
}
?>

<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?> 


<!DOCTYPE html>
<html lang="ar">
  
  <head>
      <base href="https://juclinic.000webhostapp.com/" />
<style>
.conainer {width: 50px;  font-family: 'Arial';margin-left: auto;
    margin-right: 90px;
    margin-top: -6.8rem;}
.circle_percent {font-size:48px; width:1em; height:1em; position: relative; background: #eee; border-radius:50%; overflow:hidden; display:inline-block; margin:20px;}
.circle_inner {position: absolute; left: 0; top: 0; width: 1em; height: 1em; clip:rect(0 1em 1em .5em);}
.round_per {position: absolute; left: 0; top: 0; width: 1em; height: 1em; background: #2ecc4a; clip:rect(0 1em 1em .5em); transform:rotate(180deg); transition:1.05s;}
.percent_more .circle_inner {clip:rect(0 .5em 1em 0em);}
.percent_more:after {position: absolute; left: .5em; top:0em; right: 0; bottom: 0; background: #2ecc4a; content:'';}
.circle_inbox {position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; background: #fff; z-index:3; border-radius: 50%;}
.percent_text {position: absolute; font-size: 10px; left: 50%; top: 50%; transform: translate(-50%,-50%); z-index: 3;}
</style>
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
          <div class="back-button"><a href="javascript:history.go(-1)"> <i class="fa fa-arrow-left" style="color:white"> </i> </a> </div>
          <!-- Page Title-->
          <div class="page-heading">
            <h6 class="mb-0">تفاصيل المشروع</h6>
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
          <h6 class="user-name mb-0"><?php echo $username;?> </h6><span><?php echo $email;?> </span>
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
		

            <!-- Page Item-->
			<?php 
						$projectid=$_GET['projectid'];

			$query=mysqli_query($con,"select * from projects inner join main on projects.projectname=main.projectname and projects.owner=main.owner where projects.id='$projectid'");
			$num=mysqli_num_rows($query);
			if($num>0)
			{
			while($row=mysqli_fetch_array($query))
			{ 
			?>

            <!-- Page Item--><a class="page--item" href="details-tasks/<?php echo $row['id'];?>/<?php echo $_GET['id'];?>"><?php echo htmlentities($row['mainname'])?>  <br /> <br /> 
						 <sub style="display: contents;">  <?php echo htmlentities($row['projectname']);?></sub> 
						 				 				  <a class="btn btn-danger" style="float: right; margin-top: -5rem;margin-right: 2rem;padding: 5px; z-index: 1;position: relative;" href="edit-main-task/<?php echo $row['id'];?>/<?php echo $_GET['id'];?>"> <i class="fa fa-edit"></i></a> 
										  
										  <?php 
										  $id=$row['id'];
										  $query2=mysqli_query($con,"select *from sub inner join main on sub.mainname=main.mainname where main.id='".$id."'"); 
										  $done="منجز";
									
									
										  $query3=mysqli_query($con,"select *from sub inner join main on sub.mainname=main.mainname where main.id='".$id."' and sub.status='$done'"); 
$num2=mysqli_num_rows($query2);										  
$num3=mysqli_num_rows($query3);			
$avg2="0";						  
?>
				  <div class="conainer" >
  <div class="circle_percent" data-percent="<?php  if($num3==0) {echo $avg2;
										   $sql4=mysqli_query($con,"update main set percent='$avg2' where id='$id'");
										   } else
											   { $avg=(($num3/$num2)*100);  
										   echo $avg; 
										   										   $sql6=mysqli_query($con,"update main set percent='$avg' where id='$id'");

										   }?>">
    	<div class="circle_inner">
        	<div class="round_per"></div>
        </div>
    </div>
	</div>


			 </a>
			<?php }?>

		
			<?php } 
			else 
			{?> 
		<p> لا يوجد بيانات </p> 
			<?php }?>
    
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
				<script>
	$(".circle_percent").each(function() {
    var $this = $(this),
		$dataV = $this.data("percent"),
		$dataDeg = $dataV * 3.6,
		$round = $this.find(".round_per");
	$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");	
	$this.append('<div class="circle_inbox"><span class="percent_text"></span></div>');
	$this.prop('Counter', 0).animate({Counter: $dataV},
	{
		duration: 2000, 
		easing: 'swing', 
		step: function (now) {
            $this.find(".percent_text").text(Math.ceil(now)+"%");
        }
    });
	if($dataV >= 51){
		$round.css("transform", "rotate(" + 360 + "deg)");
		setTimeout(function(){
			$this.addClass("percent_more");
		},1000);
		setTimeout(function(){
			$round.css("transform", "rotate(" + parseInt($dataDeg + 180) + "deg)");
		},1000);
	} 
});
</script>
  </body>


</html>