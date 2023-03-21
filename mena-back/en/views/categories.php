  <?php include("./controllers/categories-controller.php");?>
  <section class="u-clearfix u-image u-shading u-section-1" id="sec-4524" data-image-width="587" data-image-height="435">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1" style="color:white;"><?php echo $_GET['track'];?></h2>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-73db">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-center u-tabs u-tabs-1">
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane" id="tab-081f" role="tabpanel" aria-labelledby="link-tab-081f">
              <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                <div class="u-expanded-width u-layout-grid u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
				  <?php while($row=mysqli_fetch_array($query)){?>
                    <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round" style="height:360px;">
                      <div class="u-container-layout u-similar-container u-container-layout-2">
                        <img class="u-expanded-width u-image u-image-round u-radius-11 u-image-1" src="../images/1.jpg" alt="" data-image-width="6000" data-image-height="4000">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-1"> <?php echo $row['duration'];?> Hours</h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-2"><?php echo $row['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-3"><?php echo $row['item'];?></h3>
                        <a href="Course-details.php?id=<?php echo $row['id'];?>" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-1">Sign up Now</a>
                        <img class="u-image u-image-contain u-image-default u-image-2" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>
				  <?php }?>
                  
                  </div>
                </div>
              </div>
            </div>
           
       
          
          </div>
        </div>
      </div>
    </section>