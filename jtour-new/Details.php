<?php 
error_reporting(0);
session_start();
 	  if($_SESSION['loginid']==0)
	  {
		  echo $_SESSION['loginid'];
	 header("location:login.php");
	  }
include("controllers/config.php");
$id=$_GET['id'];
$userid=$_SESSION['loginid'];
$placename=$_GET['placename'];
$query=mysqli_query($conn,"select * from places where id='$id'");
$query2=mysqli_query($conn,"select * from places");
$query3=mysqli_query($conn,"select * from likes where placename='$placename'");
$num=mysqli_num_rows($query3);
$row3=mysqli_fetch_array($query3);
$row=mysqli_fetch_array($query);
if(isset($_POST['like'])){
	$query2=mysqli_query($conn,"insert into likes(userid,placename,detailsid)values('$userid','$placename','$id')");
header("Refresh:0");

}
if(isset($_POST['dislike'])){
	$query2=mysqli_query($conn,"delete from likes where userid='$userid' and placename='$placename' and detailsid='$id'");
header("Refresh:0");

}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Details</title>
    <link rel="stylesheet" href="css/main.css" media="screen">
<link rel="stylesheet" href="css/Details.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/main.js" defer=""></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    
    
    
    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Details">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><?php include("controllers/header.php");?>
    <section class="u-clearfix  u-section-1" id="sec-2b3d" data-image-width="447" data-image-height="255">
							<img class="u-image-1" src="public/<?php echo $row['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 460px;
">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-default u-title u-text-1"><?php echo $row['name'];?> <br /> <span style="font-size:15pt;position:absolute"><?php echo $row['cityname'];?> </span> </h1>
      </div>
    </section>
    <section class="u-align-left u-clearfix u-section-2" id="sec-9a6d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="fr-view u-clearfix u-rich-text u-text u-text-1">
          <h1 style="text-align: left;">
            <span style="font-weight: 700;">Brief about <?php echo $row['name'];?></span>
          </h1>
    <p><?php echo $row['details'];?></p>
     		<a href="<?php echo $row['location'];?>">  <button style="color:white;background:green;border:none;border-radius:5%;padding:8px;"> Get Location </button> </a>
	<p> <?php echo $num;?> liked this places  <?php if($_SESSION['loginid']==$row3['userid'] && $_GET['placename']==$row3['placename']){?> 
	<form method="post"> <button type="submit" name="dislike" style="background:transparent;border:none;"><i class="fa fa-heart" aria-hidden="true" style="color:#069b66"> liked</i> 
	</form>
	<?php } else {?>
<form method="post">	
<button type="submit" name="like" style="background:transparent;border:none;"> <i class="fa fa-heart-o" aria-hidden="true" style="color:#069b66"> like</i> </button>
 </form> <?php }?>
</p>

        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-9d30">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-custom-color-1 u-text-default u-text-1">Explore More Places</h3>
        <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
          <div class="u-repeater u-repeater-1">
		  <?php while($row2=mysqli_fetch_array($query2)){?>
            <div class="u-container-style u-image u-image-round u-list-item u-radius-10 u-repeater-item u-shading" data-image-width="447" data-image-height="255" data-href="Details.php?id=<?php echo $row2['id'];?>&placename=<?php echo $row2['name'];?>" title="<?php echo $row2['name'];?>">
									<img class="u-image-1" src="public/<?php echo $row2['image'];?>" style="    position: absolute;
    border-radius: inherit;
    object-fit: fill;
    width: 100%;
    height: 200px;
">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <h4 class="u-text u-text-default u-text-2"><?php echo $row2['name'];?><span style="font-weight: 700;"></span>
                </h4>
              </div>
            </div>
          
         
		  <?php }?>
         
          </div>
          <a class="u-absolute-vcenter u-custom-color-1 u-gallery-nav u-gallery-nav-prev u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-gallery-nav-1" href="#" role="button">
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
          <a class="u-absolute-vcenter u-custom-color-1 u-gallery-nav u-gallery-nav-next u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
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
      </div>
    </section>
    
    
    
   
  
</body></html>