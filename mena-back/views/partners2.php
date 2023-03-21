      <?php include("./controllers/partners-controller.php"); ?>

	<div id="partners" class="pt-40 pb-80 white-bg">
        <div class="container">
            <div class="row patnar-slied">
			<?php while($row=mysqli_fetch_array($query)){?>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <img src="./images/<?php echo $row['image'];?>" style="height:140px;padding:35px" alt="Logo">
                    </div>
                </div>
			<?php }?>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> 