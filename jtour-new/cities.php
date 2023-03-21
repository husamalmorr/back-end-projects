<?php 
session_start();
 	  if($_SESSION['loginid']==0)
	  {
	 header("location:login.php");
	  }
include("controllers/config.php");
$query2=mysqli_query($conn,"select * from cities");
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Cities</title>
    <link rel="stylesheet" href="css/main.css" media="screen">
<link rel="stylesheet" href="css/cities.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    

    <meta name="theme-color" content="#478ac9">
  <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><?php include("controllers/header.php");?>
          <b class="u-text u-text-custom-color-1 u-text-default u-text-2" style="margin:auto;margin-top:10px"><h3> Explore Cities </h3></b>

    <section class="u-clearfix u-section-1" id="sec-e785">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-expanded-width-xl u-expanded-width-xs u-layout-grid u-list u-list-2">
          <div class="u-repeater u-repeater-2">
		  	<?php while ($row2=mysqli_fetch_array($query2)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="200" data-href="city-category.php?id=<?php echo $row2['id'];?>&cityname=<?php echo $row2['name'];?>" title="<?php echo $row2['name'];?>">
										<img class="u-image-1" src="public/<?php echo $row2['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 200px;
	margin-top:4px;
">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo $row2['name'];?><span style="font-weight: 700;"></span>
                </h5>
              </div>
            </div>
			
           
			<?php }?>
           
            
           
          </div>
        </div>
     
      </div>
    </section>
    
    
    
  
  
</body></html>