 <?php include("./controllers/tracks-controller.php");?>

 <section id="tracks" class="category-2-items pt-50 pb-80 gray-bg">
        <div class="container">
		        <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5><?php echo $row['title'];?></h5>
                        <h2><?php echo $row['subtitle'];?></h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">
			<?php while($row2=mysqli_fetch_array($query2)){?>
                <div class="col-lg-3 col-md-6">
                    <div class="singel-items text-center mt-30">
                        <div class="items-image">
                            <img src="../images/<?php echo $row2['image'];?>" alt="Category">
                        </div>
                        <div class="items-cont">
                            <a href="Categories.php?track=<?php echo $row2['item'];?>">
                                <h5><?php echo $row2['item'];?></h5>
                                <span><?php echo $row2['category'];?></span>
                            </a>
                        </div>
                    </div> <!-- singel items -->
                </div>
			<?php }?>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>