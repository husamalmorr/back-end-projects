<?php include("./controllers/footer-controller.php");?>

<footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="index.php"><img style="width:150px;" src="./images/<?php echo $row4['image'];?>" alt="Logo"></a>
                            </div>
                            <ul class="mt-20">
                                <li><a href="<?php echo $row['fb'];?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?php echo $row['insta'];?>"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="<?php echo $row['link'];?>"><i class="fab fa-linkedin"></i></a></li>
                              
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Sitemap</h6>
                            </div>
                            <ul>
							<?php while($row3=mysqli_fetch_array($query3)){?>
                                <li><a href="<?php echo $row3['link'];?>"><i class="fa fa-angle-right"></i><?php echo $row3['item'];?></a></li>
                            <?php }?>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-link support mt-40">
                            <div class="footer-title pb-25">
                                <h6>Services</h6>
                            </div>
                            <ul>
							<?php while($row2=mysqli_fetch_array($query2)){?>
                                <li><a href="Services.php?id=<?php echo $row2['id'];?>"><i class="fa fa-angle-right"></i><?php echo $row2['item'];?></a></li>
							<?php }?>
                            </ul>
							
                        </div> <!-- support -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Contact Us</h6>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:white" href="<?php echo $row['location'];?>"><?php echo $row['locationname'];?> </a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:white" href="tel:<?php echo $row['phone1'];?>"><?php echo $row['phone1'];?> </a></p>
                                    </div>
                                </li>
								   <li>
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:white" href="tel:<?php echo $row['phone2'];?>"><?php echo $row['phone2'];?> </a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:white" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->
    </footer>