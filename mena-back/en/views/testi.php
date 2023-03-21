  <?php include("./controllers/testi-controller.php");?>

 <section id="testimonial" class="bg_cover pt-115 pb-115" data-overlay="8" style="background: #07294d;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-40">
                        <h5><?php echo $row['title'];?></h5>
                        <h2><?php echo $row['subtitle'];?></h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row testimonial-slied mt-40">
			<?php while($row2=mysqli_fetch_array($query2)){?>
                <div class="col-lg-6">
                    <div class="singel-testimonial">
                        <div class="testimonial-thum">
                            <img src="../images/<?php echo $row2['image'];?>" alt="Testimonial">
                            <div class="quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        <div class="testimonial-cont">
                            <p><?php echo $row2['details'];?> </p>
                            <h6><?php echo $row2['name'];?></h6>
                            <span><?php echo $row2['major'];?></span>
                        </div>
                    </div> <!-- singel testimonial -->
                </div>
			<?php }?>
            
            </div> <!-- testimonial slied -->
        </div> <!-- container -->
    </section>