   <?php 
   include("./controllers/footer-controller.php");
   include("./controllers/contact-us-form-controller.php");
   $query11=mysqli_query($conn,"select * from coursesitems where status='on' and lang='ar'");

?>
   <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(./images/contact.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>تواصل معنا</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">تواصل معنا</li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!--====== PAGE BANNER PART ENDS ======-->
    
    <!--====== CONTACT PART START ======-->
    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-from">
                        <div class="section-title" style="text-align:right">
                            <h5>تواصل معنا</h5>
                            <h2>ابقى على تواصل معنا </h2>
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
                <div class="col-lg-4">
                    <div class="contact-address">
                        <div class="contact-heading">
                            <h5 style="text-align:right">العنوان</h5>
                            <p  style="text-align:right" >.إذا كانت لديك أي أسئلة أخرى ، فلا تتردد في الاتصال بنا</p>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:#505050" href="<?php echo $row['location'];?>"><?php echo $row['locationname'];?> </a></p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a style="color:#505050" href="tel:<?php echo $row['phone1'];?>"><?php echo $row['phone1'];?> </a></p>
                                        <p><a style="color:#505050" href="tel:<?php echo $row['phone2'];?>"> <?php echo $row['phone2'];?> </a></p>
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                                <div class="singel-address">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="cont">
                                        <p><a  style="color:#505050" href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?> </a> </p>
                                
                                    </div>
                                </div> <!-- singel address -->
                            </li>
                            <li>
                          
                            </li>
                        </ul>
                    </div> <!-- contact address -->
                
                </div>
            </div> <!-- row -->
        </div> <!-- container -->

    </section>