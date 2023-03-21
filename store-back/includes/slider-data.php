<?php
$query=mysqli_query($conn,"select * from slider where id=1");
$row=mysqli_fetch_array($query);
$query2=mysqli_query($conn,"select * from slider where id=2");
$row2=mysqli_fetch_array($query2);
?>


 <section class="u-clearfix u-valign-middle u-section-1" id="sec-dadc">
      <div class="u-carousel u-expanded-width u-gallery u-gallery-slider u-layout-carousel u-no-transition u-show-text-always u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-d83f">
        <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
          <li data-u-target="#carousel-d83f" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
          <li data-u-target="#carousel-d83f" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
        </ol>
		
        <div class="u-carousel-inner u-gallery-inner" role="listbox">
          <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
            <div class="u-back-slide"  data-image-width="768" data-image-height="899">
              <img class="u-back-image u-expanded" src="<?php echo $row2['image'];?>">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-1">
              <h3 class="u-gallery-heading"><?php echo $row2['title'];?></h3>
              <p class="u-gallery-text"><?php echo $row2['sub-title'];?></p>
            </div>
          </div>
          <div class="u-carousel-item u-gallery-item u-carousel-item-2">
            <div class="u-back-slide" data-image-width="1600" data-image-height="899">
              <img class="u-back-image u-expanded" src="<?php echo $row['image'];?>">
            </div>
            <div class="u-align-center u-over-slide u-shading u-valign-middle u-over-slide-2">
              <h3 class="u-gallery-heading"><?php echo $row['title'];?></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
        </div> 
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-opacity u-opacity-70 u-carousel-control-1" href="#carousel-d83f" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
          </span>
        </a>
        <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-opacity u-opacity-70 u-text-white u-carousel-control-2" href="#carousel-d83f" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
          <span class="sr-only">
            <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
          </span>
        </a>
      </div>
      <a href="all.php" class="u-black u-border-none u-btn u-button-style u-btn-1">Shop NOW</a>
    </section>