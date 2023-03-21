<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($con,"SELECT * FROM users WHERE userEmail='".$_POST['username']."' and password='".md5($_POST['password'])."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
	
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($con,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['login']=$_POST['username'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($con,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$errormsg="اسم المستخدم او كلمة السر غير صحيحة";
$extra="login.php";

}
}




?>









<!DOCTYPE html>
<html dir="ltr" xml:lang="en" class="yui3-js-enabled" lang="en"><head>
    <title>نظام ادارة الشكاوي</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="index_files/yui_combo.css"><script type="text/javascript" async="" src="index_files/analytics.js"></script><script charset="utf-8" id="yui_3_17_2_1_1614087532109_8" src="index_files/yui_combo_003.php" async=""></script><script charset="utf-8" id="yui_3_17_2_1_1614087532109_19" src="index_files/yui_combo_002.php" async=""></script><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="index_files/all.css">

  <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

<meta name="robots" content="noindex"><link href="index_files/css.css" rel="stylesheet" type="text/css"><!-- Global site tag (gtag.js) - Google Analytics --><script async="" src="index_files/js"></script>
           
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body id="page-login-index"  style="  background-image:url('userimages/bg.jpg');" class="format-site  path-login gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam remui-edwiser-org--demo1 pagelayout-login course-1 context-1 notloggedin  jsenabled">

<div id="page-wrapper">

    <div>
<script>
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


    <div id="page" class="container-fluid mt-0">
        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <section id="region-main" class="col-12" aria-label="Content">
                    <span class="notifications" id="user-notifications"></span>
                    <div role="main"><span id="maincontent"></span><div class="row justify-content-center">
    <div class="page-brand-info">
        <!--
         -->
        <div class="d-sm-none d-md-none d-lg-block text-white">
        <div class="col-12 text-center m-0 p-0">
            <div class="col-12 m-0 p-0">
       
                <h1>نظام ادارة الشكاوي </h1>
            </div>
        
            <div class="col-12 text-center mt-5 p-0">
              
            </div>
            <div class="row login-profiles p-20"style="position:relative;right:-12.5rem">
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
                   <a href="index.php" style="color:white; text-decoration:none">  <img  src="userimages/user.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المستخدم</h5>
                  
                 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="../" style="color:white; text-decoration:none">  <img  src="userimages/home.png"/>  </a> 
      <h5 class="text-uppercase mt-2" >الصفحة الرئيسية</h5>             
                </div>
  

            </div>
        
        </div>        </div>
    </div>
    <div class="p-0 loginform">
        <div class="card">
            <div class="card-block p-5">
                       
                <div class="d-sm-block d-md-block d-lg-none text-black">
                    <   <div class="col-12 text-center m-0 p-0">
            <div class="col-12 m-0 p-0">
       
                <h1>نظام ادارة الشكاوي </h1>
            </div>
        
            <div class="col-12 text-center mt-5 p-0">
              
            </div>
            <div class="row login-profiles p-20">
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
                   <a href="index.php" style="color:white; text-decoration:none">  <img  src="userimages/user.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المستخدم</h5>
                  
                 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="../" style="color:white; text-decoration:none">  <img  src="userimages/home.png"/>  </a> 
      <h5 class="text-uppercase mt-2" >الصفحة الرئيسية</h5>             
                </div>
  

            </div>
        
        </div> 
                        
                    
                    </div>                </div>
                <div class="card-body">


                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <h3 class="mb-4">تسجيل دخول مستقبل الشكوى</h3>
                            <form class="my-3"  method="post" id="login">
							<span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>
                                <input id="anchor" type="hidden" name="anchor" value="">
                                <script>document.getElementById('anchor').value = location.hash;</script>
                                <input type="hidden" name="logintoken" value="Q8A1dyuL59GGdb1S95uG84yyHcqjgppd">
                                <div class="form-group">
                                    <label for="username" class="sr-only">
                                            
                                    </label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="اسم المستخدم" autocomplete="username">
                                </div>
                                <div class="form-group">
                    
                                    <input type="password" name="password" id="password" value="" class="form-control span5 tip" placeholder="كلمة السر" autocomplete="current-password">
                                </div>
                                                 <label class="checkbox">
		                <span class="pull-right">
		                    <a href="forget-password.php"> نسيت كلمة السر؟</a>
		
		                </span>
		            </label>

                                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4" style="background-color:#ff7f27" id="loginbtn">تسجيل الدخول</button>
                            </form>
                        </div>

                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>
                    
                </section>
            </div>
        </div>
    </div>

   <footer>
            <div class="row">
                <div class="col-lg-12">
                   <b class="copyright" style="color:white" >&copy; 2021 نظام ادارة الشكاوي </b> <span style="color:white"> جميع الحقوق محفوظة. </span>
                </div>
            </div>
            <!-- /.row -->
			 <div style="margin-left:250px;">
		 <div class="aligncenter">
    
    
    </div>
	</div>
        </footer>
           
            



        </div>
 


</body></html>