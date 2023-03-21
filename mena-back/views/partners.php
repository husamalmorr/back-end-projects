<?php include("./controllers/partners-controller.php");?>
 
    <section class="u-align-center u-clearfix u-section-8 active" id="partners">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <h2 class="u-text u-text-custom-color-2 u-text-default u-text-1">الشركاء</h2>
        <div class="u-expanded-width u-layout-grid u-list u-list-1">
          <div class="u-repeater u-repeater-1">
		 
            <div class="u-container-style u-list-item u-repeater-item"style="display: contents;">
			 <?php while($row=mysqli_fetch_array($query)){?>
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-image u-image-default u-image-1" data-image-width="387" data-image-height="134" src="images/<?php echo $row['image'];?>">
              </div>
			       <?php }?>  
            </div>
        
      
      
            </div>
          </div>
        </div>
      </div>
    </section>