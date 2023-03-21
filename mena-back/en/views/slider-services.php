<?php include("./controllers/slider-services-controller.php");?>
<section style="background-image:linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('../images/<?php echo $row['bg'];?>');" class="u-clearfix u-image u-shading u-section-1" id="sec-4524" data-image-width="587" data-image-height="435">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h2 class="u-custom-font u-font-montserrat u-text u-text-default u-text-1" style="color:white;"><?php echo $row['title'];?></h2>
		
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-73db">
       <div class="u-container-style u-tab-pane u-tab-pane-2 u-tab-active" id="tab-081f" role="tabpanel" aria-labelledby="link-tab-081f">
	      <div class="u-container-layout u-container-layout-6">
                <p class="u-align-right u-text u-text-6" style="font-weight: 700;
   margin-top: auto;
    font-size: 18pt;">Description</p>
              </div>
              <div class="u-container-layout u-container-layout-6">
                <p class="u-align-right u-text u-text-6" style="font-weight: 100;
    margin-top: auto;
    font-size: 12pt;"><?php echo $row['description'];?></p>
              </div>
            </div>
			
    </section>