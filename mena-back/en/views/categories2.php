  <?php include("./controllers/categories-controller.php");?>
  <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(../images/<?php echo $row3['image'];?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo $_GET['track'];?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['track'];?></li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
 <section id="courses-part" class="pt-120 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="courses-top-search">
                        <ul class="nav float-left" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active show" id="courses-grid-tab" data-toggle="tab" href="#courses-grid" role="tab" aria-controls="courses-grid" aria-selected="true"><i class="fa fa-th-large"></i></a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-list-tab" data-toggle="tab" href="#courses-list" role="tab" aria-controls="courses-list" aria-selected="false" class=""><i class="fa fa-th-list"></i></a>
                            </li>
                        </ul> <!-- nav -->
                        
                     
                    </div> <!-- courses top search -->
                </div>
            </div> <!-- row -->
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade active show" id="courses-grid" role="tabpanel" aria-labelledby="courses-grid-tab">
                    <div class="row">
                    <?php
                   while($row=mysqli_fetch_array($query)){?>
                <div class="col-lg-4">
                    <div class="singel-course">
                        <div class="thum">
                            <div class="image">
                                <img src="../images/<?php echo $row['image'];?>" style="height:auto;" alt="Course">
                            </div>
                           
                        </div>
                        <div class="cont"> 
                            <a href="Course-details.php?id=<?php echo $row['id'];?>"><h4><?php echo $row['item'];?></h4></a>
                            <div class="course-teacher">
							<div class="name">
                                    <a class="main-btn"style="padding:10px;" href="Course-details.php?id=<?php echo $row['id'];?>" tabindex="0"><h6>Find More</h6></a>
                                </div>
                                <div class="admin">
                                    <ul>
                                        <li><a href="#"><span><?php echo $row['duration'];?> Hours</span></a></li>
                                        <li><a href="#"><span><?php echo $row['category'];?></span></a></li>
                                    </ul>
                                </div>
								
                            </div>
                        </div>
                    </div> <!-- singel course -->
                </div>
				   <?php }?>
                      
                    
                     
                      
                    </div> <!-- row -->
                </div>
                <div class="tab-pane fade" id="courses-list" role="tabpanel" aria-labelledby="courses-list-tab">
                    <div class="row">
                    <?php
                   while($row2=mysqli_fetch_array($query2)){?>
                <div class="col-lg-12">
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
                                    <a class="main-btn"style="padding:10px;margin-top:15px;" href="Course-details.php?id=<?php echo $row2['id'];?>" tabindex="0"><h6>Apply Now</h6></a>
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
                     
                       
                    
                    </div> <!-- row -->
                </div>
            </div> <!-- tab content -->
    
        </div> <!-- container -->
    </section>