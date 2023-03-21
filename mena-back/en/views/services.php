<?php include("./controllers/services-controller.php");?>

	<section id="services" class="u-clearfix u-section-3" style="background:whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-45" style="margin-top:35px">
					  <h5><?php echo $row['title'];?></h5>
                        <h2 style="font-weight:700"><?php echo $row['subtitle'];?> </h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
			<div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1" style="    width: 100%;
    margin: auto;">
          <div class="u-repeater u-repeater-1">
		  <?php while($row2=mysqli_fetch_array($query2)){?>
           <div style="background-image:linear-gradient(0deg,  rgba(7,41,77,0.6), rgba(7,41,77,0.6)),url('../images/<?php echo $row2['bg'];?>');" class="u-align-center-lg u-align-center-md u-align-center-xl u-border-2 u-border-grey-10 u-container-style u-image u-list-item u-radius-10 u-repeater-item u-shading u-shape-round u-image-1" data-image-width="1440" data-image-height="1080">
		   
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h2 class="u-align-center-sm u-align-center-xs u-text u-text-default u-text-9">0<?php echo $i=$i+1;?></h2>
                <h3 class="u-align-left-sm u-align-left-xs u-text u-text-default-xl u-text-10"> <?php echo $row2['item'];?></h3>
                <h3 class="u-align-center-sm u-align-center-xs u-text u-text-default u-text-11"><?php echo $row2['subitem'];?></h3>
                <img class="u-image u-image-default u-image-8" src="../images/<?php echo $row2['image2'];?>" alt="" data-image-width="256" data-image-height="256">
                <a href="Services.php?id=<?php echo $row2['id'];?>" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-btn-3" style="transition:0.3s">Find out more</a>
                <img class="u-image u-image-contain u-image-default u-image-9" src="../images/<?php echo $row2['image1'];?>" alt="" data-image-width="820" data-image-height="214">
              </div>
		   
            </div> 
			<?php }?>
          </div>
        </div>
      </div>
      
        </div> <!-- container -->
    </section>