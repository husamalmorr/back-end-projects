<?php date_default_timezone_set('Asia/Amman');?>
<!DOCTYPE html>
<html lang="ar">
  
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#ff4f2c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="green">
<meta name="apple-mobile-web-app-title" content="FreeCodeCamp">
<link rel="apple-touch-icon" href="img/title.png" sizes="72x72">
<link rel="apple-touch-icon" href="img/title.png" sizes="96x96">
<link rel="apple-touch-icon" href="img/title.png" sizes="128x128">
<link rel="apple-touch-icon" href="img/title.png" sizes="144x144">
<link rel="apple-touch-icon" href="img/title.png" sizes="152x152">
<link rel="apple-touch-icon" href="img/title.png" sizes="192x192">
<link rel="apple-touch-icon" href="img/title.png" sizes="384x384">
<link rel="apple-touch-icon" href="img/title.png" sizes="512x512">

<meta name="msapplication-TileImage" content="img/title.png">
<meta name="msapplication-TileColor" content="green">

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
    <!-- Hero Block Wrapper-->
    <div class="hero-block-wrapper bg-primary">
      <!-- Styles-->
      <div class="hero-block-styles">
        <div class="hb-styles1"></div>
        <div class="hb-styles2"></div>
        <div class="hb-styles3"></div>
      </div>
      <div class="container">                   
        <!-- Hero Block Content-->
        <div class="hero-block-content"><img class="mb-4" src="img/bg-img/19.png" alt="">
          <h2 class="display-4 text-white mb-3">اهلا بك بمفكرتي</h2>
          <h3 class="text-white">التطبيق الاول لبدء مشروعك بنجاح</h3><a class="btn btn-warning btn-lg w-100" href="page-login/">ابدأ الان</a>
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
	<script>
        // Load ServiceWorker
    window.addEventListener('load', function () {
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('service-worker.js')
                    .then(function (registration) {
                        return registration.pushManager.getSubscription().then(function (subscription) {
                            console.log("subscription", subscription)
                            if (subscription) {
                                return subscription
                            }
                            return registration.pushManager.subscribe({
                                userVisibleOnly: true
                            })
                        })
                    }).then(function (subscription) {
                        var endpoint = subscription.endpoint
                        console.log("pushManager endpoint:", endpoint)
                    }).catch(function (error) {
                        console.log("serviceWorker error:", error)
                    })
            }
        })
	
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