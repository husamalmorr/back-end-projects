<?php include("./controllers/footer-controller.php");?>

<footer  style="height:fit-content"class="u-clearfix u-footer u-image u-footer" id="sec-eed2" data-image-width="1512" data-image-height="492"><div class="u-clearfix u-expanded-width u-gutter-10 u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-15-lg u-size-15-xl u-size-16-md u-size-30-sm u-size-30-xs u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1"><!--position-->
                <div data-position="" class="u-expanded-width-md u-expanded-width-sm u-position u-position-1"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-1"><!--block_header_content--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact Us</font></font><!--/block_header_content--></h5><!--/block_header-->
                    </div>
                  </div>
                </div>
                <div data-position="" class="u-position u-position-2">
                  <div class="u-block">
                    <div class="u-block-container u-clearfix">
                      <h5 class="u-align-center-md u-align-center-sm u-align-center-xs u-block-header u-h-spacing-0 u-text u-text-body-alt-color u-v-spacing-0 u-text-2"><!--block_header_content--><span class="u-file-icon u-icon u-text-white"><img src="images/18.png" alt=""></span>
                        <span ><a href="mailto:<?php echo $row['email'];?>"style="font-size: small;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row['email'];?></font></font></a></span><!--/block_header_content-->
                      </h5>
                    </div>
                  </div>
                </div>
                <div data-position="" class="u-expanded-width-md u-position u-position-3"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-left-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-3"><!--block_header_content--> &nbsp;<span class="u-file-icon u-icon u-text-white"><img src="images/19.png" alt=""></span>&nbsp;<a href="tel:+962<?php echo $row['phone1'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row['phone1'];?></font></font></a> <!--/block_header_content-->
                      </h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-expanded-width-md u-position u-position-4"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-left-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-4"><!--block_header_content--> &nbsp;<span class="u-file-icon u-icon u-text-white"><img src="images/19.png" alt=""></span>&nbsp;<a href="tel:+962<?php echo $row['phone2'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row['phone2'];?></font></font></a><!--/block_header_content-->
                      </h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
                <div data-position="" class="u-position u-position-5"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-left-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-5"><!--block_header_content--> &nbsp;<span class="u-file-icon u-icon u-text-white"><img src="images/20.png" alt=""></span>&nbsp;<a href="tel:<?php echo $row['phone3'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row['phone3'];?></font></font></a><!--/block_header_content-->
                      </h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-14-md u-size-15-lg u-size-15-xl u-size-30-sm u-size-30-xs u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2"><!--position-->
                <div data-position="" class="u-expanded-width-xs u-position u-position-6"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                    <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-6"><!--block_header_content--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Services</font></font><!--/block_header_content--></h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
				<?php while($row2=mysqli_fetch_array($query2)){?>
                <div data-position="" class="u-position u-position-7"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                       <a href="Services.php?id=<?php echo $row2['id'];?>"> <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-7"><!--block_header_content--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row2['item'];?></font></font><!--/block_header_content--></h5></a><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
				<?php }?>
              </div>
            </div>
            <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-13-md u-size-14-lg u-size-14-xl u-size-29-xs u-size-30-sm u-layout-cell-3">
              <div class="u-container-layout u-container-layout-3"><!--position-->
                <div data-position="" class="u-position u-position-11"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-11"><!--block_header_content--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sitemap</font></font><!--/block_header_content--></h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position--><!--position-->
          
                <?php while($row3=mysqli_fetch_array($query3)){?>
                <div data-position="" class="u-expanded-width-md u-position u-position-15"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-15"><!--block_header_content--><a href="<?php echo $row3['link'];?>"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $row3['item'];?></font></font></a> <!--/block_header_content--></h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
				<?php }?>
				 <div data-position="" class="u-expanded-width-md u-position u-position-15"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"><!--block_header-->
                      <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-15"><!--block_header_content--><a href="Contact-Us.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contact Us</font></font></a> <!--/block_header_content--></h5><!--/block_header-->
                    </div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
            <div class="u-align-center-sm u-align-center-xs u-align-left-md u-align-right-lg u-align-right-xl u-container-style u-layout-cell u-right-cell u-size-16-lg u-size-16-xl u-size-17-md u-size-30-sm u-size-31-xs u-layout-cell-4">
              <div class="u-container-layout u-container-layout-4">
              <a href="index.php">  <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/<?php echo $row4['image'];?>" alt="" data-image-width="110" data-image-height="76"> </a>
								 <h5 class="u-align-center-xs u-block-header u-text u-text-body-alt-color u-v-spacing-0 u-text-15" style="text-align:center;display:none;"><!--block_header_content--><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">اشترك معنا بالنشرة الإسبوعية</font></font> <!--/block_header_content--></h5><!--/block_header-->

                <div class="u-align-left u-container-style u-group u-shape-rectangle u-white u-group-1" style="display:none">
				
                  <div class="u-container-layout u-container-layout-5">
				  <form method="post" action="#">
                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="إرسال" data-page-id="782017353" class="u-border-none u-btn u-button-style u-custom-color-3 u-hover-palette-1-dark-1 u-btn-1"></font></font>
                    <h6 class="u-text u-text-default-lg u-text-default-xl u-text-16"><input type="mail" style="border:none;" placeholder="بريدك الالكتروني"> </h6>
					</form>
                  </div>
                </div><!--position-->
                <div data-position="" class="u-position u-position-16"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"></div>
                  </div><!--/block-->
                </div><!--/position-->
                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                  <a class="u-social-url" title="فيسبوك" target="_blank" href="<?php echo $row['fb'];?>"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-text-white u-icon-5"><img src="images/22.png" alt=""></span>
                  </a>
                  <a class="u-social-url" title="الانستغرام" target="_blank" href="<?php echo $row['insta'];?>"><span class="u-file-icon u-icon u-social-icon u-social-instagram u-text-white u-icon-6"><img src="images/23.png" alt=""></span>
                  </a>
                  <a class="u-social-url" title="ينكدين" target="_blank" href="<?php echo $row['link'];?>"><span class="u-file-icon u-icon u-social-icon u-social-linkedin u-text-white u-icon-7"><img src="images/24.png" alt=""></span>
                  </a>
                </div><!--position-->
                <div data-position="" class="u-hidden-xs u-position u-position-17"><!--block-->
                  <div class="u-block">
                    <div class="u-block-container u-clearfix"></div>
                  </div><!--/block-->
                </div><!--/position-->
              </div>
            </div>
          </div>
        </div>
      </div><h4 class="u-align-center u-text u-text-17"><span class="u-file-icon u-icon u-text-white u-icon-8"><img src="images/25.png" alt=""></span>
        <span class="u-text-body-alt-color"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&nbsp; All Rights Reserved&nbsp;</font></font></span>
      </h4></footer>