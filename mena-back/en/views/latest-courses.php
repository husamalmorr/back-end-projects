<?php include("./controllers/latest-courses-controller.php");?>
<section class="u-clearfix u-section-4" id="carousel_52ee">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-align-center u-text u-text-custom-color-2 u-text-default u-text-1"> <?php echo $row['title'];?></h2>
        <p class="u-align-center u-text u-text-grey-60 u-text-2"> <?php echo $row['subtitle'];?></p>
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xs u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
		  <?php while($row2=mysqli_fetch_array($query2)){?>
            <div class="u-align-right-xl u-border-2 u-border-grey-10 u-container-style u-list-item u-radius-11 u-repeater-item u-shape-round">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-image u-image-round u-preserve-proportions u-radius-11 u-image-1" src="../images/<?php echo $row2['image'];?>" alt="" data-image-width="6000" data-image-height="4000">
                <h3 class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-default-xl u-text-grey-50 u-text-3"> <?php echo $row2['duration'];?> Hours</h3>
                <h3 class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xs u-text u-text-default-xl u-text-grey-50 u-text-4"><?php echo $row2['category'];?></h3>
                <h3 class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-custom-color-2 u-text-default u-text-5"><?php echo $row2['item'];?></h3>
                <h3 class="u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-text u-text-default u-text-grey-50 u-text-6"><?php echo $row2['track'];?></h3>
                <a href="Course-details.php?id=<?php echo $row2['id'];?>" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-2">Sign up Now</a>
                <img style="display:none"class="u-image u-image-contain u-image-default u-image-2" src="images/58738756f3a71010b5e8ef44.png" alt="" data-image-width="1280" data-image-height="263">
              </div>
            </div>
		  <?php }?>
          </div>
          <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-custom-color-3 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="Course-details.php" role="button">
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
          <a class="u-absolute-vcenter-lg u-absolute-vcenter-md u-absolute-vcenter-sm u-absolute-vcenter-xl u-custom-color-3 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="Course-details.php" role="button">
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
      </div>
    </section>