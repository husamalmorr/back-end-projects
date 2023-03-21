  <?php include("./controllers/latest-courses-controller.php"); ?>

	<div id="counter-part" class="bg_cover pt-65 pb-110" style="background:whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><?php echo $num;?></span>+</span>
                        <p>Courses</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><?php echo $num2;?></span>+</span>
                        <p>Tracks</p>
                    </div> <!-- singel counter -->
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter"><?php echo $num3;?></span>+</span>
                        <p>Categories</p>
                    </div> <!-- singel counter -->
                </div>
              
            </div>
        </div> 
    </div>