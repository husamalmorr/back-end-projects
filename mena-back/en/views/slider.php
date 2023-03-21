<?php include("./controllers/slider-controller.php");?>
<section class="u-clearfix u-image u-section-1" id="carousel_def8" data-image-width="1440" data-image-height="573" style="background-image:url('../images/<?php echo $row6['bg'];?>');">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div id="carousel-ee08" data-interval="5000" data-u-ride="false" class="u-carousel u-expanded-width-sm u-expanded-width-xs u-slider u-slider-1" data-pause="false">
          <ol class="u-carousel-indicators u-hidden u-opacity u-opacity-55 u-carousel-indicators-1">
            <li data-u-target="#carousel-ee08" class="u-active u-border-1 u-border-white u-shape-circle u-white" data-u-slide-to="0" style="height: 10px; width: 10px;"></li>
            <li data-u-target="#carousel-ee08" class="u-border-1 u-border-white u-shape-circle u-white" data-u-slide-to="1" style="height: 10px; width: 10px;"></li>
          </ol>
          <div class="u-carousel-inner" role="listbox" style="">
            <div class="u-active u-carousel-item u-container-style u-shape-rectangle u-slide">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-align-right u-large-text u-text u-text-body-alt-color u-text-variant u-text-1"><?php echo $row2['title'];?></p>
				
				<ul class="u-align-justify u-custom-list u-hidden-xs u-spacing-30 u-text u-text-body-alt-color u-text-2">
				<?php while($row=mysqli_fetch_array($query)){?>
                  <li style="padding-left: 10px;">
                <p class="u-align-right u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><b><?php echo $row['list'];?></b><span class="u-file-icon u-icon u-icon-1" id="icon"><img src="../images/<?php echo $row['image'];?>" alt=""></span>
                </p>
				</li>
				
				
				<?php }?> 
				</ul>
                <a href="Slider-services.php?id=<?php echo $row7['id'];?>" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-text-body-alt-color u-btn-1">find out more</a>
              </div>
            </div>
            <div class="u-carousel-item u-container-style u-slide">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-align-right u-large-text u-text u-text-body-alt-color u-text-variant u-text-6"><b><?php echo $row3['title'];?></b><b></b>
                </p>
				<ul class="u-align-justify u-custom-list u-hidden-xs u-spacing-30 u-text u-text-body-alt-color u-text-5">
				<?php while($row4=mysqli_fetch_array($query4)){?>
				 <li style="padding-left: 10px;">
                <p class="u-align-right u-large-text u-text u-text-body-alt-color u-text-variant u-text-2"><b><?php echo $row4['list'];?></b><span class="u-file-icon u-icon u-icon-1" id="icon"><img src="../images/<?php echo $row4['image'];?>" alt=""></span>
                </p>
				</li>
				<?php }?>
				</ul>
				
           
         
              
             
                <a href="Slider-services.php?id=<?php echo $row8['id'];?>" class="u-align-left u-border-none u-btn u-btn-round u-button-style u-custom-color-3 u-radius-50 u-text-body-alt-color u-btn-1">find out more</a>
              </div>
            </div>
          </div>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-prev u-spacing-10 u-text-body-alt-color u-carousel-control-1" href="#carousel-ee08" role="button" data-u-slide="prev">
            <span aria-hidden="true">
              <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 256 256"><g><polygon points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128"></polygon>
</g></svg>
            </span>
          </a>
          <a class="u-absolute-vcenter u-carousel-control u-carousel-control-next u-spacing-10 u-text-body-alt-color u-carousel-control-2" href="#carousel-ee08" role="button" data-u-slide="next">
            <span aria-hidden="true">
              <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
            </span>
            <span class="sr-only">
              <svg viewBox="0 0 306 306"><g id="chevron-right"><polygon points="94.35,0 58.65,35.7 175.95,153 58.65,270.3 94.35,306 247.35,153"></polygon>
</g></svg>
            </span>
          </a>
        </div>
        <div class="u-expanded-width-sm u-expanded-width-xs u-form u-radius-15 u-white u-form-1">
          <form action="#" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;">
            <p class="u-align-right u-form-group u-form-text u-text u-text-11">Apply now</p>
            <p class="u-align-right u-form-group u-form-text u-text u-text-grey-60 u-text-12">Hurry up to develop your educational skills by registering with us</p>
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-2211" class="u-label">Name</label>
              <input type="text" placeholder="Full Name" id="name-2211" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="email-2211" class="u-label">Email</label>
              <input type="email" placeholder="E-mail" id="email-2211" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
            </div>
            <div class="u-form-group u-form-phone u-label-none u-form-group-5">
              <label for="phone-d1e3" class="u-label">Phone</label>
              <div class="iti iti--allow-dropdown">
                <div class="iti__flag-container">
                  <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="United States: +1" aria-activedescendant="iti-0__item-us-preferred"><!--div class="iti__flag iti__us"></div-->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="112px" height="112px" viewBox="0 0 112 112" enable-background="new 0 0 112 112" xml:space="preserve" style="width: 1.2em; height: 1.2em;"><path fill="#EDEDED" d="M51.3,63.9V96h-3.5V70.7L11,96H7.1l39.8-27.3h-7.8L0,95.5v-7.8l27.5-19H0v-4.8C0,63.9,51.3,63.9,51.3,63.9z
	 M61.7,96h3.4V70.7l37,25.3h9.9v-0.8L73.2,68.7H81l31,21.2v-3.1L85.4,68.7H112v-4.8H61.7V96z M51.3,16h-3.5v26.9L8.8,16H0v0.8
	l40.9,28.1h-7.7L0,22.1v3.8l27.5,19H0v4.8h51.3V16z M67.3,44.9L109.4,16h-5.1L65.1,42.9V16h-3.4v33.7H112v-4.8H85.4L112,26.6v-7
	L75,44.9H67.3z"></path><path fill="#1A237B" d="M65.1,42.9V16h39.2L65.1,42.9z M47.8,16h-39l39,26.9V16z M112,44.9V26.6L85.4,44.9H112z M112,86.8V68.7H85.4
	L112,86.8z M11,96h36.8V70.7L11,96z M65.1,96h37l-37-25.3V96z M0,68.7v19l27.5-19H0z M0,25.9v19h27.5L0,25.9z"></path><path fill="#BD0034" d="M112,16v3.6L75,44.9h-7.7L109.4,16H112z M73.2,68.7L112,95.2v-5.3L81,68.7H73.2z M40.9,44.9L0,16.8v5.3
	l33.2,22.8C33.2,44.9,40.9,44.9,40.9,44.9z M39.1,68.7L0,95.5V96h7.1l39.8-27.3H39.1z M61.7,16H51.3v33.7H0v14.2h51.3V96h10.4V63.9
	H112V49.7H61.7V16z"></path></svg>
                    <div class="iti__arrow"></div>
                  </div>
                </div>
                <input type="tel" value="+962" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="phone No" id="phone-d1e3" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white" required="">
              </div>
            </div>
            <div class="u-form-group u-form-select u-label-none u-form-group-6">
              <label for="select-d817" class="u-label">Dropdown</label>
              <div class="u-form-select-wrapper">
                <select id="select-d817" name="select" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white">
				<?php while($row5=mysqli_fetch_array($query5)){?>
                  <option value="<?php echo $row5['title'];?>" data-calc=""><?php echo $row5['title'];?></option>
				<?php } ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-left u-form-group u-form-submit u-label-none">
              <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-3 u-radius-10 u-btn-3">Sign up Now</a>
              <input type="submit" value="submit" class="u-form-control-hidden">
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
            <input type="hidden" name="formServices" value="12a886a51242b6da95a9423987d98033">
          </form>
        </div>
      </div>
    </section>
   
   
   
   