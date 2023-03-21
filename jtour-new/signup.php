<?php 
 include("controllers/config.php");
 $msg="";
if(isset($_POST['signup'])){
	
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password=md5($_POST['password']);
	$query2=mysqli_query($conn,"select * from users where email='$email'");
	$num=mysqli_num_rows($query2);
if($num<=0){

$sql=mysqli_query($conn,"insert into users(email,fullname,password)values('$email','$fullname','$password')");
$msg='successfull sign up';
}
if($num>=1)
	{
	$msg='email is taken';
	}
}?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
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
		      	<h3 class="mb-4 text-center">Sign Up</h3>
		      	<form method="post" class="signin-form">
				<?php if($msg!="") { echo $msg;}?>
					<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Full Name" name="fullname" required>
		      		</div>
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="Email" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="signup" class="form-control btn btn-primary submit px-3">Sign up</button>
	            </div>
	            <div class="form-group d-md-flex">
								<div class="mb-4 text-center" style="width:100%;">
									<a href="login.php" style="color: #fff"> Login</a>
								</div>
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

