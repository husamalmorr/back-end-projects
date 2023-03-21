<?php include("./controllers/latest-courses-controller.php");?>
    <section id="course-part" class="pt-115 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-45">
                        <h5><?php echo $row['title'];?></h5>
                        <h2><?php echo $row['subtitle'];?></h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row course-slied mt-30">
			<?php
                   while($row2=mysqli_fetch_array($query2)){?>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="../images/<?php echo $row2['image'];?>" style="height:auto;" alt="Course">
                            </div>
                           
                        </div>
                        <div class="cont"> 
                            <a href="Course-details.php?id=<?php echo $row2['id'];?>"><h4><?php echo $row2['item'];?></h4></a>
                            <div class="course-teacher">
							<div class="name">
                                    <a class="main-btn"style="padding:10px;margin-top:15px;" href="Course-details.php?id=<?php echo $row2['id'];?>" tabindex="0"><h6>Find More</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><span><?php echo $row2['duration'];?> Hours</span></a></li>
                                        <li><a href="#"><span><?php echo $row2['category'];?></span></a></li>
                                    </ul>
                                </div>
								
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
				   <?php }?>
               
          
            </div> <!-- course slied -->
        </div> <!-- container -->
    </section>