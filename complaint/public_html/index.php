<?php
include('config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['fullname'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$contactno=$_POST['contactno'];
	$status=1;
	$query2=mysqli_query($con,"select * from users");
	$row=mysqli_fetch_array($query2);
		if($email===$row['userEmail']|| $contactno===$row['contactNo'])
	{
	    $msg='البريد الالكتروني او رقم هاتف مسجل من قبل';
	}

	
	    if($email!=$row['userEmail']&& $contactno!=$row['contactNo'])
	    {
		$query=mysqli_query($con,"insert into users(fullName,userEmail,password,contactNo,status) values('$fullname','$email','$password','$contactno','$status')");
	$msg="تم التسجيل بنجاح, يمكنك الان تسجيل الدخول!";
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

<body id="page-login-index"  style="  background-image:url('img/bg.jpg');" class="format-site  path-login gecko dir-ltr lang-en yui-skin-sam yui3-skin-sam remui-edwiser-org--demo1 pagelayout-login course-1 context-1 notloggedin  jsenabled">

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
                <h3>الدخول بصفة</h3>
            </div>
            <div class="row login-profiles p-20">
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
                   <a href="users/index.php" style="color:white; text-decoration:none">  <img  src="img/user.png"/>  </a> 
<h5 class="text-uppercase mt-2" >مستقبل الشكوى</h5>
                  
                 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="employees/index.php" style="color:white; text-decoration:none">  <img  src="img/employee.png"/>  </a> 
      <h5 class="text-uppercase mt-2" >الموظف</h5>             
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="supervisor/index.php" style="color:white; text-decoration:none">  <img  src="img/supervisor.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المشرف</h5>
                  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="admin/index.php" style="color:white; text-decoration:none">  <img  src="img/admin.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المدير</h5>
                 
                </div>
            </div>
        
        </div>        </div>
    </div>
    <div class="p-0 loginform">
        <div class="card">
            <div class="card-block p-5">
                       
                <div class="d-sm-block d-md-block d-lg-none text-black">
                            <div class="col-12 text-center m-0 p-0">
            <div class="col-12 m-0 p-0">
       
                <h1>نظام ادارة الشكاوي </h1>
            </div>
        
            <div class="col-12 text-center mt-5 p-0">
                <h3>الدخول بصفة</h3>
            </div>
            <div class="row login-profiles p-20">
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
                   <a href="users/index.php" style="color:white; text-decoration:none">  <img  src="img/user.png"/>  </a> 
<h5 class="text-uppercase mt-2" >مستقبل الشكوى</h5>
                  
                 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="employees/index.php" style="color:white; text-decoration:none">  <img  src="img/employee.png"/>  </a> 
      <h5 class="text-uppercase mt-2" >الموظف</h5>             
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="supervisor/index.php" style="color:white; text-decoration:none">  <img  src="img/supervisor.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المشرف</h5>
                  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 profile-content">
 <a href="admin/index.php" style="color:white; text-decoration:none">  <img  src="img/admin.png"/>  </a> 
<h5 class="text-uppercase mt-2" >المدير</h5>
                 
                </div>
            </div>
        
        </div>  
                        <div class="col-12 text-center mt-5 p-0">
                          
                        </div>
                        
                    
                    </div>                </div>
                <div class="card-body">


                    <div class="row justify-content-md-center">
                        <div class="col-md-12">
                            <h3 class="mb-4">التسجيل الجديد لمستقبل الشكوى</h3>
                            <?php echo htmlentities ($msg); ?>
                            <form class="my-3"  method="post" id="login">
                                <input id="anchor" type="hidden" name="anchor" value="">
                                <script>document.getElementById('anchor').value = location.hash;</script>
                                <input type="hidden" name="logintoken" value="Q8A1dyuL59GGdb1S95uG84yyHcqjgppd">
                                <div class="form-group">
                                    <label for="username" class="sr-only">
                                            hg
                                    </label>
                                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="الاسم الكامل" autocomplete="username">
                                </div>
                                <div class="form-group">
                    
                                    <input type="password" name="password" id="password" value="" class="form-control span5 tip" placeholder="كلمة السر" autocomplete="current-password">
                                </div>
								<div class="form-group">
                    
                                    <input type="email" name="email" id="email" value="" class="form-control" placeholder="البريد الالكتروني" autocomplete="current-password">
                                </div>
                                   	<div class="form-group">
                    
                                    <input type="text" name="contactno" id="contactno" value="" class="form-control" placeholder="رقم الهاتف" autocomplete="current-password">
                                </div>
                                   

                                <button type="submit" name="submit" style="background-color:#ff7f27" class="btn btn-primary btn-block mt-4" id="loginbtn">تسجيل</button>
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