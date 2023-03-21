<?php
$query=mysqli_query($conn,"select * from items LIMIT 6");

?>

    <section class="u-clearfix u-section-2" id="sec-25c1">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h1 class="u-align-center u-text u-text-1">Top Selling</h1>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
		  <?php while ($row=mysqli_fetch_array($query)){?>
            <div class="u-container-style u-list-item u-repeater-item" data-href="Details.php?id=<?php echo $row['id'];?>&name=<?php echo $row['name'];?>" data-page-id="284383698">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1200" data-image-height="1500" src="<?php echo $row['image'];?>">
                <h3 class="u-text u-text-default u-text-2"><?php echo $row['name'];?></h3>
                <p class="u-text u-text-3"><?php echo $row['details'];?></p>
                <a href="#" class="u-black u-border-none u-btn u-button-style u-btn-1">Shop Now</a>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2"><?php echo $row['price'];?>$</a>
              </div>
            </div>
<?php }?>
           
         
          
        
        
          </div>
        </div>
      </div>
    </section>