 <?php include("./controllers/footer-controller.php");
 include("./controllers/nav-controller.php");
     $query11=mysqli_query($conn,"select * from coursesitems where status='on' and lang='ar'");

    include("./controllers/contact-us-form-controller.php");

 ?>
 <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center" style="margin-top:2px">
                            <ul>
                                <li><img src="./images/map.png" alt="icon"><span><a style="color:white" href="<?php echo $row['location'];?>"> <?php echo $row['locationname'];?></a> </span></li>
                                <li><img src="./images/email.png" alt="icon"><span><a <a style="color:white" href="mailto<?php echo $row['email'];?>"><?php echo $row['email'];?> </a> </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>ساعات العمل : <?php echo $row['workinghours'];?></p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->
        
        <div class="header-logo-support pt-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="index.php">
                                <img src="./images/<?php echo $row3['image'];?>" alt="Logo" style="width: 40%;
    margin-top: -45px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="./images/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>تحتاج مساعدة؟ اتصل بنا الآن</p>
                                    <span><a style="color:#07294d" href="tel:<?php echo $row['phone1'];?>"><?php echo $row['phone1'];?></span>
                                </div>
                            </div>
                            <div class="button float-left">
                                <a href="#" class="main-btn" data-toggle="modal" data-target="#exampleModal2" >سجل الآن</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header logo support -->
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg" style="width:max-content">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
								<?php while($row=mysqli_fetch_array($query)){?>
                                    <li class="nav-item">
                                        <a href="<?php echo $row['link'];?>"><?php echo $row['item'];?></a>
                                    </li>
								<?php }?>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                 
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
        
    </header>
	    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
	    <div class="col-lg-12"style="margin:auto;padding:60px;">
<div class="modal-content">
    <div class="contact-from">
                        <div class="section-title" style="text-align:right">
                            <h5>سجل الآن</h5>
                            <h2 style="color:#07294d">سجل معنا و استمتع بأفضل الدورات </h2>
                            <h5>يرجى ملء النموذج حتى نتمكن من إكمال طلبك</h5>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form method="post" action="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="name" type="text" placeholder="الإسم الكامل" data-error="Name is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="email" type="email" placeholder="البريد الإلكتروني" data-error="Valid email is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            									<input list="browsers" placeholder="إختر دورة" name="subject" id="browser" data-error="Subject is required." required="required">

<datalist id="browsers">
<?php while($row11=mysqli_fetch_array($query11)){?>
  <option value="<?php echo $row11['item'];?>">
<?php }?>
</datalist>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form --> 
                                    </div>

                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="رقم الهاتف" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="message" placeholder="رسالة" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button style="float:right" type="submit" name="send" class="main-btn">إرسال</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
</div>
</div>
</div>
</div>