 <?php
 session_start();
  if($_SESSION['loginid'] == null)
	  {
	 header("location:login.php");
	  }
include("controllers/config.php");
$id=$_SESSION['loginid'];
	 $msg="";
 if(isset($_POST['change'])){
	 $sql=mysqli_query($conn,"select * from users where id='$id'");
	 $row=mysqli_fetch_array($sql);
$oldpassword=md5($_POST['oldpassword']);
$newpassword=md5($_POST['newpassword']);
 if($oldpassword==$row['password']){
$query=mysqli_query($conn,"update users set password='$newpassword' where id='$id'");

	  $msg="your password has been updated";
	  }
 else {
		  $msg="your old password is not correct"; }
 }

 ?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Change Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(public/bg.jpg); background-attachment:fixed">
	<section style="padding: 7em 0;display:block">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section">Jtour</h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Change Password</h3>
		      	<form method="post" class="signin-form">
				<?php if($msg!="") { echo $msg;}?>
		      		<div class="form-group">
		      			<input type="password" class="form-control" placeholder="Current Password" name="oldpassword" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder=" New Password" name="newpassword" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="change" class="form-control btn btn-primary submit px-3">Change Password</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		         
								</div>
							
	            </div>
				<div class="mb-4 text-center" style="width:100%;">
				<a href="index.php"> back to home </a>
				</div>
	          </form>
	          
	        
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

