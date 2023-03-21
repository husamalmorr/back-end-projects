   <?php 
   include("./controllers/footer-controller.php");
   include("./controllers/career-form-controller.php");
?>
   <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(./images/contact.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>إنضم الى فريقنا</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">إنضم الى فريقنا</li>
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
                <div class="col-lg-12">
                    <div class="contact-from">
                        <div class="section-title" style="text-align:right">
                            <h5>إنضم إلى فريقنا</h5>
                            <h2>كون جزء من فريقنا </h2>
                            <h5>يرجى ملء النموذج حتى نتمكن من إكمال طلبك</h5>
                        </div> <!-- section title -->
                        <div class="main-form pt-45">
                            <form method="post" action=""enctype="multipart/form-data">
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
                                       <div class="mb-3">
  <label for="formFileMultiple" class="form-label" style="text-align:right;float:right;margin:5px">السيرة الذاتية</label>
  <input class="form-control" name="uploadfile" type="file" id="formFileMultiple" multiple>
</div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="phone" type="text" placeholder="رقم الهاتف" data-error="Phone is required." required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <textarea name="message" placeholder="أخبرنا عن نفسك" data-error="Please,leave us a message." required="required"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div> <!-- singel form -->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                            <button style="float:right" type="submit" name="send2" class="main-btn">إرسال</button>
                                        </div> <!-- singel form -->
                                    </div> 
                                </div> <!-- row -->
                            </form>
                        </div> <!-- main form -->
                    </div> <!--  contact from -->
                </div>
    
            </div> <!-- row -->
        </div> <!-- container -->

    </section>