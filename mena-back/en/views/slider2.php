        <?php include("./controllers/slider-controller.php"); ?>

  <section id="slider-part" class="slider-active">
  				<?php while($row=mysqli_fetch_array($query)){?>

        <div class="single-slider bg_cover pt-150" style="background-image: url(../images/<?php echo $row['bg'];?>)" data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s"><?php echo $row['title'];?></h1>
                            <p data-animation="fadeInUp" data-delay="1.3s"><?php echo $row['subtitle'];?></p>
                            <ul>
                                <li><a href="Slider-services.php?id=<?php echo $row['id'];?>" data-animation="fadeInUp" data-delay="1.6s" class="main-btn" href="#">Read More</a></li>
                            </ul>
                        </div>
                    </div>
				
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
        <?php }?>
    </section>