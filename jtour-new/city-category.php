<?php 
session_start();
  if($_SESSION['loginid'] == null)
	  {
	 header("location:login.php");
	  }
include("controllers/config.php");
$cityname=$_GET['cityname'];
$query2=mysqli_query($conn,"select * from places where cityname='$cityname' and type='Tourist'");
$query3=mysqli_query($conn,"select * from places where cityname='$cityname' and type='Religous'");
$query4=mysqli_query($conn,"select * from places where cityname='$cityname' and type='Cafe'");
$query5=mysqli_query($conn,"select * from places where cityname='$cityname' and type='Resturants'");
if(isset($_POST['submit'])){
	$placename=$_POST['search'];
	$sql=mysqli_query($conn,"select * from places where placename='$placename'");
$msg="<script> window.location='search.php?placename=$placename';
 </script> ";
 echo $msg;
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>City Categgory</title>
    <link rel="stylesheet" href="css/main.css" media="screen">
<link rel="stylesheet" href="css/city-category.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    

    <meta name="theme-color" content="#478ac9">
  <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><?php include("controllers/header.php");?>
    <section class="u-clearfix u-section-1" id="sec-e785">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <div class="u-container-style u-expanded-width u-grey-5 u-group u-radius-20 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
             <form method="post">
            <input type="submit" name="submit" value="Search" class="u-border-2 u-border-grey-75 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-palette-1-dark-1 u-radius-20 u-btn-1">
            <input  style="background: transparent;border: none;position: absolute;"type="search" placeholder="Search For Places......." name="search" class="u-text u-text-grey-50 u-text-1"/>
			</form>
          </div>
        </div>
        <div class="u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-3" id="tourist-btn">Tourist Places</h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-3"id="religous-btn">Religous Places</h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-3" id="cafe-btn">Cafes</h4>
              </div>
            </div>
            <div class="u-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <h4 class="u-text u-text-custom-color-1 u-text-default u-text-3" id="resturant-btn">Resturants</h4>
              </div>
            </div>
          
        
            
			
			
			
			
          </div>
          <a class="u-gallery-nav u-gallery-nav-prev u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-1 u-gallery-nav-1" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
            </span>
          </a>
          <a class="u-gallery-nav u-gallery-nav-next u-opacity u-opacity-70 u-spacing-10 u-text-custom-color-1 u-gallery-nav-2" href="#" role="button">
            <span aria-hidden="true">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width-xl u-expanded-width-xs u-layout-grid u-list u-list-2" id="tourist">
          <div class="u-repeater u-repeater-2">
		  	<?php while ($row2=mysqli_fetch_array($query2)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="200" data-href="Details.php?id=<?php echo $row2['id'];?>&placename=<?php echo $row2['name'];?>" title="<?php echo $row2['name'];?>">
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
			
           
			<?php }if(mysqli_num_rows($query2)==0){?>
             <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo "no data were found"?><span style="font-weight: 700;"></span>
                </h5>
              </div>
			<?php }?>
           
            
           
          </div>
        </div>
		  <div class="u-expanded-width-xl u-expanded-width-xs u-layout-grid u-list u-list-2" id="religous" style="display:none">
          <div class="u-repeater u-repeater-2">
		  	<?php while ($row3=mysqli_fetch_array($query3)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="200" data-href="Details.php?id=<?php echo $row3['id'];?>&placename=<?php echo $row3['name'];?>" title="<?php echo $row3['name'];?>">
										<img class="u-image-1" src="public/<?php echo $row3['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 200px;
	margin-top:4px;
">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo $row3['name'];?><span style="font-weight: 700;"></span>
                </h5>
              </div>
            </div>
			
           
			<?php }if(mysqli_num_rows($query3)==0){?>
             <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo "no data were found"?><span style="font-weight: 700;"></span>
                </h5>
              </div>
			<?php }?>
           
            
           
          </div>
        </div>
		 <div class="u-expanded-width-xl u-expanded-width-xs u-layout-grid u-list u-list-2" id="cafe" style="display:none">
          <div class="u-repeater u-repeater-2">
		  	<?php while ($row4=mysqli_fetch_array($query4)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="200" data-href="Details.php?id=<?php echo $row4['id'];?>&placename=<?php echo $row4['name'];?>" title="<?php echo $row4['name'];?>">
										<img class="u-image-1" src="public/<?php echo $row4['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 200px;
	margin-top:4px;
">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo $row4['name'];?><span style="font-weight: 700;"></span>
                </h5>
              </div>
            </div>
			
           
			<?php }if(mysqli_num_rows($query4)==0){?>
             <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo "no data were found"?><span style="font-weight: 700;"></span>
                </h5>
              </div>
			<?php }?>
           
            
           
          </div>
        </div> 
		
		<div class="u-expanded-width-xl u-expanded-width-xs u-layout-grid u-list u-list-2" id="resturants" style="display:none">
          <div class="u-repeater u-repeater-2">
		  	<?php while ($row5=mysqli_fetch_array($query5)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="200" data-href="Details.php?id=<?php echo $row5['id'];?>&placename=<?php echo $row5['name'];?>" title="<?php echo $row5['name'];?>">
										<img class="u-image-1" src="public/<?php echo $row5['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 200px;
	margin-top:4px;
">
              <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo $row5['name'];?><span style="font-weight: 700;"></span>
                </h5>
              </div>
            </div>
			
           
			<?php } if(mysqli_num_rows($query5)==0){?>
             <div class="u-container-layout u-similar-container u-container-layout-10">
                <h5 class="u-text u-text-default u-text-10"><?php echo "no data were found"?><span style="font-weight: 700;"></span>
                </h5>
              </div>
			<?php }?>
            </div>
            
           
          </div>
        </div>
     
      </div>
    </section>
    
    
    
  <script> 
  $(document).ready(function(){
	  $("#tourist-btn").click(function(){
		  $("#tourist").fadeIn();
		  $("#religous").hide();
		  $("#cafe").hide();
		  $("#resturants").hide();
		  $(this).removeClass("u-text-3");
		  $(this).addClass("u-text-2");
		  $("#religous-btn").removeClass("u-text-2");
		  $("#religous-btn").addClass("u-text-3");
		  $("#cafe-btn").removeClass("u-text-2");
		  $("#cafe-btn").addClass("u-text-3");
		  $("#resturant-btn").removeClass("u-text-2");
		  $("#resturant-btn").addClass("u-text-3");
	  });
	   $("#religous-btn").click(function(){
		  $("#religous").fadeIn();
		  $("#tourist").hide();
		  $("#cafe").hide();
		  $("#resturants").hide();
		  $(this).addClass("u-text-2");
		  $(this).removeClass("u-text-3");
		   $("#tourist-btn").removeClass("u-text-2");
		   $("#tourist-btn").addClass("u-text-3");
		   $("#cafe-btn").removeClass("u-text-2");
		   $("#cafe-btn").addClass("u-text-3");
		   $("#resturant-btn").removeClass("u-text-2");
		   $("#resturant-btn").addClass("u-text-3");

	  });
	     $("#cafe-btn").click(function(){
		  $(this).addClass("u-text-2");
		  $(this).removeClass("u-text-3");
		  $("#cafe").fadeIn();
		  $("#tourist").hide();
		  $("#religous").hide();
		  $("#resturants").hide();
		   $("#tourist-btn").removeClass("u-text-2");
		   $("#religous-btn").removeClass("u-text-2");
		  $("#tourist-btn").addClass("u-text-3");
		  $("#religous-btn").addClass("u-text-3");
		  $("#resturant-btn").removeClass("u-text-2");
		  $("#resturant-btn").addClass("u-text-3");

	  });
	   $("#resturant-btn").click(function(){
		  $(this).addClass("u-text-2");
		  $(this).removeClass("u-text-3");
		  $("#resturants").fadeIn();
		  $("#tourist").hide();
		  $("#religous").hide();
		  $("#cafe").hide();
		   $("#tourist-btn").removeClass("u-text-2");
		   $("#religous-btn").removeClass("u-text-2");
		  $("#tourist-btn").addClass("u-text-3");
		  $("#religous-btn").addClass("u-text-3");
		  $("#cafe-btn").removeClass("u-text-2");
		  $("#cafe-btn").addClass("u-text-3");

	  });
  });
  </script>
</body></html>