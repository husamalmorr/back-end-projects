<?php include("./controllers/tracks-controller.php");?>
<section class="u-align-center u-clearfix u-white u-section-5" id="tracks">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-custom-color-2 u-text-default u-text-1"> <?php echo $row['title'];?></h2>
        <p class="u-align-center u-text u-text-grey-60 u-text-2"> <?php echo $row['subtitle'];?></p>
        <div class="u-expanded-width-lg u-expanded-width-xl u-tab-links-align-center u-tabs u-tabs-1">
          <ul class="u-spacing-15 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">عرض الكل</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false"> تكنولوجيا</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">الأعمال</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-4" id="link-tab-2715" href="#tab-2715" role="tab" aria-controls="tab-2715" aria-selected="false">اللغات</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-5" id="link-tab-a19f" href="#tab-a19f" role="tab" aria-controls="tab-a19f" aria-selected="false">الهندسة</a>
            </li>
			<li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-text-active-white u-text-grey-60 u-text-hover-grey-75 u-tab-link-5" id="link-tab-a19f" href="#tab-a19f2" role="tab" aria-controls="tab-a19f" aria-selected="false">التعليم</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-align-center u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
				  <?php while($row2=mysqli_fetch_array($query2)){?>
                   <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row2['image'];?>" alt="" data-image-width="6000" data-image-height="4000">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row2['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"><?php echo $row2['item'];?> </h3>
                        <a href="Categories.php?track=<?php echo $row2['item'];?>&category='<?php echo $row2['category'];?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>
				  <?php }?>
                   
                  </div>
				  
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
				  <?php while($row3=mysqli_fetch_array($query3)){?>
				  <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row3['image'];?>" alt="" data-image-width="6000" data-image-height="4000">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row3['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"> <?php echo $row3['item'];?></h3>
                        <a href="Categories.php?track=<?php echo urldecode($row3['item']);?>&category='<?php echo trim($row3['category']);?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>
                    
				  <?php } ?> 
					
                
                 
					
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-2917" role="tabpanel" aria-labelledby="link-tab-2917">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
				   <?php while($row4=mysqli_fetch_array($query4)){?>
				  <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row4['image'];?>" alt="" data-image-width="6000" data-image-height="4000">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row4['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"> <?php echo $row4['item'];?></h3>
                        <a href="Categories.php?track=<?php echo $row4['item'];?>&category='<?php echo $row4['category'];?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>     
				   <?php } ?> 					
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-tab-pane u-white u-tab-pane-4" id="tab-2715" role="tabpanel" aria-labelledby="link-tab-2715">
              <div class="u-container-layout u-valign-bottom u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
                  <div class="u-repeater u-repeater-2">
				   <?php while($row5=mysqli_fetch_array($query5)){?>
                    <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row5['image'];?>" alt="" data-image-width="1200" data-image-height="900">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row5['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"> <?php echo $row5['item'];?> </h3>
                        <a href="Categories.php?track=<?php echo $row5['item'];?>&category='<?php echo $row5['category'];?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>
				   <?php } ?> 
                  </div>
                </div>
              </div>
            </div>
            <div class="u-align-center u-container-style u-tab-pane u-white u-tab-pane-5" id="tab-a19f" role="tabpanel" aria-labelledby="link-tab-a19f">
              <div class="u-container-layout u-valign-top-xl u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
				  <?php while($row6=mysqli_fetch_array($query6)){?>
                    <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-7">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row6['image'];?>" alt="" data-image-width="1200" data-image-height="900">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row6['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"><?php echo $row6['item'];?> </h3>
                        <a href="Categories.php?track=<?php echo $row6['item'];?>&category='<?php echo $row6['category'];?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
                      </div>
                    </div>
<?php } ?> 
                  </div>
                </div>
              </div>
            </div>
			<div class="u-align-center u-container-style u-tab-pane u-white u-tab-pane-5" id="tab-a19f2" role="tabpanel" aria-labelledby="link-tab-a19f2">
              <div class="u-container-layout u-container-layout-6">
                <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-layout-grid u-list u-list-2">
                  <div class="u-repeater u-repeater-2">
				  <?php while($row7=mysqli_fetch_array($query7)){?>
                    <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
                      <div class="u-container-layout u-similar-container u-container-layout-8">
                        <img class="u-expanded-width-md u-image u-image-round u-radius-11 u-image-9" src="images/<?php echo $row7['image'];?>" alt="" data-image-width="1200" data-image-height="900">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-15"></h3>
                     <h3 class="u-text u-text-default u-text-grey-50 u-text-16"><?php echo $row7['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-17"><?php echo $row7['item'];?></h3>
                        <a href="Categories.php?track=<?php echo $row7['item'];?>&category='<?php echo $row7['category'];?>'" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-5">إعرف أكثر</a>
                        <img class="u-image u-image-contain u-image-default u-image-10" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
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