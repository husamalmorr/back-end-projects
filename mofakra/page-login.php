<?php
session_start();
error_reporting(0);
if($_SESSION['alogin']===0)
{
}
include("config.php");
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=md5($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$password'");
$num=mysqli_num_rows($ret);
$row=mysqli_fetch_array($ret);

        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['username'];
        $id= $_SESSION["id"];
        } else {
         $message = "اسم المستخدم او كلمة المرور خاطئة";
        }
           if(isset($_SESSION["id"])) {
    header("Location:https://juclinic.000webhostapp.com/page-home/$id");
    }
    }
         if(($_SESSION["id"]!=null)) {
             $id=$_SESSION["id"];
    header("Location:https://juclinic.000webhostapp.com/page-home/$id");
    echo"ssss";
         }
 
 

?>



<!DOCTYPE html>
<html lang="ar">
  
  <head>
        <base href="https://juclinic.000webhostapp.com/" />
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
    <!-- Back Button-->
    <div class="login-back-button"><a href="./"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a></div>
    <!-- Login Wrapper Area-->
    <div class="login-wrapper d-flex align-items-center justify-content-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5">
            <div class="text-center px-4"><img class="login-intro-img" src="img/bg-img/36.png" alt=""></div>
            <!-- Register Form-->
            <div class="register-form mt-4 px-4">
              <h6 class="mb-3 text-center">تسجيل الدخول الى مفكرتي</h6>
			  <center> <?php if($message!="") { echo $message; } ?> </center>
              <form method="post" action="">
                <div class="form-group">
                  <input class="form-control" type="text" name="username" placeholder="اسم المستخدم">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" name="password" placeholder="كلمة المرور">
                </div>
                <button class="btn btn-primary w-100" type="submit" name="submit">تسجيل الدخول</button>
              </form>
            </div>
            <!-- Login Meta-->
            <div class="login-meta-data text-center"><a class="stretched-link forgot-password d-block mt-3 mb-1" href="page-forget-password.html">نسيت كلمة المرور؟</a>
              <p class="mb-0">ليس لديك حساب؟ <a class="stretched-link" href="page-register.php">سجل الان</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
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