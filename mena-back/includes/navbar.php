<?php include("./controllers/nav-controller.php");?>

<header class="u-clearfix u-header u-sticky u-sticky-9119 u-white u-header" id="sec-cdf0"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="750" data-image-height="750">
          <img src="images/<?php echo $row3['image'];?>" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-decoration u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
			<?php while($row=mysqli_fetch_array($query)){?>
			<li class="u-nav-item"><a href="<?php echo $row['link'];?>"class="u-border-2 u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link" href="index.php" style="padding: 10px 12px;"><?php echo $row['item'];?></a>
</li>

			<?php }?>
</ul>
</div>
        
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-container-style u-custom-color-2 u-inner-container-layout u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-spacing-15 u-unstyled u-nav-7">
				<?php while($row2=mysqli_fetch_array($query2)){?>
				<li class="u-nav-item"><a class="u-button-style u-nav-link active" href="<?php echo $row2['link'];?>"><?php echo $row2['item'];?></a>
	
</li>
				<?php }?>
										<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contact-Us.php">تواصل معنا</a>
	
</li>
</ul>

              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-80"></div>
          </div>
        <style class="offcanvas-style">            .u-offcanvas .u-sidenav { flex-basis: 250px !important; }            .u-offcanvas:not(.u-menu-open-right) .u-sidenav { margin-left: -250px; }            .u-offcanvas.u-menu-open-right .u-sidenav { margin-right: -250px; }            @keyframes menu-shift-left    { from { left: 0;        } to { left: 250px;  } }            @keyframes menu-unshift-left  { from { left: 250px;  } to { left: 0;        } }            @keyframes menu-shift-right   { from { right: 0;       } to { right: 250px; } }            @keyframes menu-unshift-right { from { right: 250px; } to { right: 0;       } }            </style></nav>
        <a href="Contact-Us.php" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-hidden-md u-hidden-sm u-hidden-xs u-radius-30 u-text-body-alt-color u-btn-1">تواصل معنا</a>
       </div> </div></header>