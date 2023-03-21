<?php
$query=mysqli_query($conn,"select * from categories");

?>
  <section class="u-clearfix u-section-3" id="carousel_7f56">
      <h2 class="u-align-center u-text u-text-1">Categories</h2>
      <div class="u-expanded-width u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-always u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
		<?php while($row=mysqli_fetch_array($query)){
			?>
          <div class="u-gallery-item" data-href="categories.php?cname=<?php echo $row['cname'];?>" data-page-id="140030171">
            <div class="u-back-slide" data-image-width="768" data-image-height="1152">
              <img class="u-back-image u-expanded" src="<?php echo $row['image'];?>">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-1">
              <h3 class="u-gallery-heading" style="margin-left: -80px; margin-right: -80px; width: 500px;"><?php echo $row['cname'];?></h3>
              <p class="u-gallery-text" style="margin-left: -80px; margin-right: -80px; width: 500px; margin-top: 0px;"></p>
            </div>
          </div>
		<?php }?>
       
        
        </div>
      </div>
    </section>