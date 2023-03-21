<?php session_start();
error_reporting(~E_WARNING);
$query5=mysqli_query($conn,'select * from cart where sessionid="'.$_SESSION['loginid'].'"');
$num5=mysqli_num_rows($query5);
?>
<header class="u-align-center-xs u-clearfix u-header u-sticky u-sticky-4cb4 u-white u-header" id="sec-eb0f"><div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-left u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="MD">
          <div class="menu-collapse u-custom-font u-font-titillium-web" style="font-size: 1rem; letter-spacing: 0px; font-weight: 400;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 2px 0px; font-size: calc(1em + 4px);">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-custom-font u-font-titillium-web u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="index.php" style="padding: 10px;">Home</a>
</li><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="all.php" style="padding: 10px;">Explore</a>
</li><?php if($_SESSION['username']!=0){?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="Cart.php" style="padding: 10px;">Cart 
 <span style="background:black;color:white;     padding-inline-start: 7px;
    padding-inline-end: 7px; border-radius:50%;"> <?php echo $num5;?> </span></a>
</li> <?php }?><?php if($_SESSION['username']==0){?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="Login.php" style="padding: 10px;">Cart</a>
</li> <?php }?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="index.php#carousel_7f56" data-page-id="22520343" style="padding: 10px;">Categories</a>
</li><?php if($_SESSION['username']==0){?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="Login.php" style="padding: 10px;">Login</a>
</li><?php }?> <?php if($_SESSION['username']!=0){?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="logout.php" style="padding: 10px;">Logout</a>
</li><?php }?> <?php if($_SESSION['username']!=0){?><li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-black u-text-grey-25 u-text-hover-black" href="#" style="padding: 10px;">Welcome <?php echo $_SESSION['username'];?> </a>
</li> <?php }?> </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
				<?php if($_SESSION['username']!=0){?> <li class="u-nav-item"><a class="u-button-style u-nav-link" href="#" style="padding: 10px;">Welcome <?php echo $_SESSION['username'];?></a>
				</li> <?php }?> 
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px;">Home</a>
				<li class="u-nav-item"><a class="u-button-style u-nav-link" href="all.php" style="padding: 10px;">Explore</a>
				
</li><?php if($_SESSION['username']!=0){?><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Cart.php" style="padding: 10px;">Cart <span style="background:white;color:black;     padding-inline-start: 8px;
    padding-inline-end: 8px; border-radius:50%;"> <?php echo $num5;?> </span></a>
</li><?php }?><?php if($_SESSION['username']==0){?><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php" style="padding: 10px;">Cart</a>
</li><?php }?> <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php#carousel_7f56" data-page-id="22520343" style="padding: 10px;">Categories</a>

</li><?php if($_SESSION['username']==0){?><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.php" style="padding: 10px;">Login</a>
</li> <?php }?><?php if($_SESSION['username']!=0){?><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php" style="padding: 10px;">Logout</a>
</li> <?php }?> </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header> 