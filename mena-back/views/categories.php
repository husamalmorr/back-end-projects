  <?php include("./controllers/categories-controller.php");?>
  <section class="u-clearfix u-image u-shading u-section-1" id="sec-4524" data-image-width="587" data-image-height="435">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1" style="color:white;"><?php echo $_GET['track'];?></h2>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-73db">
      <div class="u-clearfix u-sheet u-valign-middle-sm u-sheet-1">
        <div class="u-expanded-width u-tab-links-align-center u-tabs u-tabs-1">
          <ul class="u-spacing-30 u-tab-list u-unstyled" role="tablist" style="display:none">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-custom-color-3 u-button-style u-tab-link u-tab-link-1" id="link-tab-081f" href="#tab-081f" role="tab" aria-controls="tab-081f" aria-selected="true">التسويق الإلكتروني</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-tab-link-2" id="link-tab-4d57" href="#tab-4d57" role="tab" aria-controls="tab-4d57" aria-selected="false"> الأعمال و الإستثمار</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-tab-link-3" id="link-tab-3a42" href="#tab-3a42" role="tab" aria-controls="tab-3a42" aria-selected="false"><b>إدارة المخاطر</b>
              </a>
            </li>
            <li class="u-tab-item u-tab-item-4" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-tab-link-4" id="tab-d7e7" href="#link-tab-d7e7" role="tab" aria-controls="link-tab-d7e7" aria-selected="false"><b>إدارة الموارد البشرية</b>
              </a>
            </li>
            <li class="u-tab-item u-tab-item-5" role="presentation">
              <a class="u-active-custom-color-3 u-button-style u-tab-link u-tab-link-5" id="tab-6219" href="#link-tab-6219" role="tab" aria-controls="link-tab-6219" aria-selected="false"><b>التدقيق الداخلي</b>
              </a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-button-style u-tab-link u-tab-link-6" id="link-tab-5623" href="#tab-5623" role="tab" aria-controls="tab-5623" aria-selected="false"><b>خدمة العملاء</b>
              </a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane" id="tab-081f" role="tabpanel" aria-labelledby="link-tab-081f">
              <div class="u-container-layout u-valign-bottom-lg u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-container-layout-1">
                <div class="u-expanded-width u-layout-grid u-list u-list-1">
                  <div class="u-repeater u-repeater-1">
				  <?php while($row=mysqli_fetch_array($query)){?>
                    <div class="u-align-right u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round" style="height:360px;">
                      <div class="u-container-layout u-similar-container u-container-layout-2">
                        <img class="u-expanded-width u-image u-image-round u-radius-11 u-image-1" src="images/1.jpg" alt="" data-image-width="6000" data-image-height="4000">
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-1"> <?php echo $row['duration'];?> ساعة</h3>
                        <h3 class="u-text u-text-default u-text-grey-50 u-text-2"><?php echo $row['category'];?></h3>
                        <h3 class="u-text u-text-custom-color-2 u-text-default u-text-3"><?php echo $row['item'];?></h3>
                        <a href="Course-details.php?id=<?php echo $row['id'];?>" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-1">سجل الآن</a>
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