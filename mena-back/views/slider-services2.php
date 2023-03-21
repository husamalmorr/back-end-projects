<?php include("./controllers/slider-services-controller.php");
?>
<section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(./images/<?php echo $row['bg'];?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><?php echo $row['title'];?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">الصفحة الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['title'];?></li>
                            </ol>
                        </nav>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<?php echo $row['description'];
?>
