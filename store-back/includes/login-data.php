 <?php
	 $msg="";
 if(isset($_POST['login'])){
$username=$_POST['username'];
$password=md5($_POST['password']);
 $query=mysqli_query($conn,"select * from users where username='$username'and password='$password'");
 $row=mysqli_fetch_array($query);
 $num=mysqli_num_rows($query);

 if($num>0){
session_start();
 	   $_SESSION['loginid']=$row['id'];
 $_SESSION['username']=$row['username'];
	 header("location:./index.php");
 }
 else {
		 $msg="wrong username or password";
 
 }
 }
 ?>
 
 <section class="u-align-center u-clearfix u-section-1" id="carousel_37a8">
      <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-1" src="images/slider-1.jpg" alt="" data-image-width="1600" data-image-height="899">
        <div class="u-container-style u-custom-border u-expanded-width-md u-expanded-width-sm u-group u-shape-rectangle u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-palette-2-base u-text-1">Login&nbsp;</h2>
            <div class="u-form u-login-control u-form-1">
			<?php if($msg!="") { echo $msg;}?>
              <form method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form"  name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name u-label-top">
                  <label for="username-a30d" class="u-label u-label-1">Username *</label>
                  <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-1" required="">
                </div>
                <div class="u-form-group u-form-password u-label-top">
                  <label for="password-a30d" class="u-label u-label-2">Password *</label>
                  <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-border-8 u-border-white u-input u-input-rectangle u-radius-50 u-white u-input-2" required="">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-label-3">Remember me</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit u-label-top">
                  <input type="submit" value="LOGIN" name="login" class="u-black u-border-none u-btn u-btn-round u-btn-submit u-button-style u-radius-50 u-text-active-palette-2-base u-text-hover-palette-2-base u-btn-1">
                </div>
              </form>
            </div>
            <div class="u-align-center u-container-style u-expanded-width u-group u-white u-group-2">
              <div class="u-container-layout u-container-layout-2">
                <a href="#" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-btn u-button-style u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-hover-palette-2-light-2 u-text-palette-2-base u-btn-2">Forgot password?</a>
                <a href="#" class="u-border-1 u-border-active-palette-2-light-2 u-border-hover-palette-2-light-2 u-btn u-button-style u-login-control u-login-create-account u-none u-text-active-palette-2-light-2 u-text-hover-palette-2-light-2 u-text-palette-2-base u-btn-3">Don't have an account?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    