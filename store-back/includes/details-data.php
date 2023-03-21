 <?php 
 $sessionid=$_SESSION['loginid'];
 $id=$_GET['id'];
 $name=$_GET['name'];
 $query=mysqli_query($conn,"select * from items where id= '$id'");
 $row=mysqli_fetch_array($query);
  $query2=mysqli_query($conn,"select * from items");
  $cname=$row['cname'];
  	 $image=$row['image'];
	 $titlename=$row['name'];
	 $quantity=1;
 if(isset($_POST['add'])){
	 $itemname=$_POST['title'];
	 $price=$_POST['price'];
	 $size=$_POST['size'];
	 $query3=mysqli_query($conn,"insert into cart (itemname,category,price,total,quantity,image,size,sessionid)values('$itemname','$cname','$price','$price','$quantity','$image','$size','$sessionid')");

 }
 $query4=mysqli_query($conn,"select * from cart where sessionid='$sessionid' and itemname='$name'");
 $num=mysqli_num_rows($query4);
 $row4=mysqli_fetch_array($query4);
?>
     <section class="u-clearfix u-section-1" id="sec-a597">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-sheet-1">
        <div class="u-carousel u-expanded-width-sm u-expanded-width-xs u-gallery u-gallery-slider u-layout-carousel u-lightbox u-no-transition u-show-text-none u-gallery-1" data-interval="5000" data-u-ride="carousel" id="carousel-8ddc">
          <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
            <li data-u-target="#carousel-8ddc" data-u-slide-to="0" class="u-active u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li>
				<?php if ( $row['image2']!=null){?>
				<li data-u-target="#carousel-8ddc" data-u-slide-to="1" class="u-grey-70 u-shape-circle" style="width: 10px; height: 10px;"></li> <?php }?>
          </ol>
          <div class="u-carousel-inner u-gallery-inner" role="listbox">
            <div class="u-active u-carousel-item u-gallery-item u-carousel-item-1">
              <div class="u-back-slide" data-image-width="768" data-image-height="1152">
                <img class="u-back-image u-expanded u-image-contain" name="image" src="<?php echo $row['image'];?>">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-1">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
			<?php if ( $row['image2']!=null){?>
            <div class="u-carousel-item u-gallery-item u-carousel-item-2">
              <div class="u-back-slide" data-image-width="1200" data-image-height="1500">
                <img class="u-back-image u-expanded" src="<?php echo $row['image2'];?>">
              </div>
              <div class="u-align-center u-over-slide u-shading u-valign-bottom u-over-slide-2">
                <h3 class="u-gallery-heading"></h3>
                <p class="u-gallery-text"></p>
              </div>
            </div>
			<?php }?>
          </div>
		  <?php if($row['image2']!=null){?>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-1" href="#carousel-8ddc" role="button" data-u-slide="prev">
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
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-carousel-control-2" href="#carousel-8ddc" role="button" data-u-slide="next">
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
		  <?php }?>
        </div>
	<form method="post" action="">
	                <img style="display:none" class="u-back-image u-expanded u-image-contain" name="image" src="<?php echo $row['image'];?>">

<select name="size" class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-3 u-text-body-alt-color u-text-hover-white u-btn-1" style="    padding-right: 40px">
      
		  <option name="large" value="L" class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-3 u-text-body-alt-color u-text-hover-white u-btn-1">L&nbsp;<span class="u-icon u-text-white u-icon-1"><svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path></svg><img></span>
        </option>
		 <option name="medium"value="M" class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-3 u-text-body-alt-color u-text-hover-white u-btn-1">M<span class="u-icon u-text-white u-icon-1"><svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path></svg><img></span>
        </option>
			 <option  name="small" value="S" class="u-black u-border-none u-btn u-btn-round u-button-style u-radius-3 u-text-body-alt-color u-text-hover-white u-btn-1">S<span class="u-icon u-text-white u-icon-1"><svg class="u-svg-content" viewBox="0 0 490.677 490.677" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M489.272,37.339c-1.92-3.307-5.44-5.333-9.259-5.333H10.68c-3.819,0-7.339,2.027-9.259,5.333    c-1.899,3.307-1.899,7.36,0.021,10.667l234.667,405.333c1.899,3.307,5.419,5.333,9.237,5.333s7.339-2.027,9.237-5.333 L489.251,48.005C491.149,44.72,491.149,40.645,489.272,37.339z"></path></svg><img></span>
        </option>
		</select>
         <h1> <input value="<?php echo $row['name'];?>" class="u-text u-text-default u-text-1" name="title" style="width:auto;border:none;"></h1>
        <p class="u-large-text u-text u-text-variant u-text-2"><?php echo $row['details'];?></p>
        <input value="<?php echo $row['price'];?>$"name="price" class="u-text u-text-default u-text-3" style="width:150px;border:none" readonly >
		<?php if($num<1){?>
        <input type="submit" value="Add to Cart" name="add" class="u-black u-border-none u-btn u-button-style u-btn-2">
		<?php }else {?>
		        <input type="button" value="Item Added"  class="u-black u-border-none u-btn u-button-style u-btn-2">
		<?php }?>
		</form>
      </div>
    </section>
<section class="u-clearfix u-section-2" id="sec-25c1">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
        <h1 class="u-align-left u-text u-text-1">More Items</h1>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
		  <?php while ($row2=mysqli_fetch_array($query2)){?>
            <div class="u-container-style u-list-item u-repeater-item" data-href="Details.php?id=<?php echo $row2['id'];?>&name=<?php echo $row2['name'];?>" data-page-id="284383698">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1200" data-image-height="1500" src="<?php echo $row2['image'];?>">
                <h3 class="u-text u-text-default u-text-2"><?php echo $row2['name'];?></h3>
                <p class="u-text u-text-3"><?php echo $row2['details'];?></p>
                <a href="#" class="u-black u-border-none u-btn u-button-style u-btn-1">Shop Now</a>
                <a href="" class="u-active-none u-border-2 u-border-hover-palette-2-base u-border-palette-2-light-1 u-btn u-button-style u-hover-none u-none u-text-body-color u-btn-2"><?php echo $row2['price'];?>$</a>
              </div>
            </div>
<?php }?>
           
         
          
        
        
          </div>
        </div>
      </div>
    </section>
      