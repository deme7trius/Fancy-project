<?php
/*
Template Name: Home
 */  
get_header(); ?>
<main>
 <div class="container demo-1">
  <div class="content">
    <div id="large-header" class="large-header">
      <canvas id="demo-canvas"></canvas>
      <h1 class="main-title"><?php echo get_field('title'); ?> <span class="thin"><?php echo get_field('thin_title'); ?></span><br><?php echo get_field('sub_title'); ?><br><?php echo get_field('second_sub_title'); ?></h1>
    </div>
  </div>
</div>
</div>
<div class="clearfix sect pt80 pb80">
  <div class="wrap">
    <h2><?php echo get_field('section_two_top_title'); ?></h2>
    <h3><?php echo get_field('section_two_bottom_title'); ?></h3>
    <p><?php echo get_field('section_two_text'); ?></p>
    <a href="#" class="button"><?php echo get_field('section_two_button_text'); ?></a>
  </div>
</div>
<div class="clearfix mobileslider" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/mobile-bg.jpg)">
  <section id="highlights" class="clearfix zenith_slider">


    <!--The First row-->  
    <div class="row left-row">
      <ul>
        <?php 
        $count1=0;
        if (have_rows('zenith_slider')):
          while (have_rows('zenith_slider')):the_row();
        $count1++;
        ?>
        <li class="highlight lhgh" data-index="<?php echo $count1; ?>">

          <div class="highlight-title">
            <h3><?php echo get_sub_field('slide_title'); ?></h3>
           <?php echo get_sub_field('slide_icon'); ?>
            <!-- <span class="fa fa-cogs fa-2x" ></span> -->
          </div><!-- .highlight-title --> 

         <p><?php echo get_sub_field('slide_text'); ?></p>
       <!-- .highlight .lhgh -->
        <?php 
        if ($count1==3) {
         break;
       }
       endwhile;
       endif; 
       ?>
 </li>
     </ul>
   </div><!-- .row .left-row -->

   <div class="highlights-phone col-md-4 col-xs-12 wht">

     <div class="phone-holder">

      <div id="fon"></div>

      <?php 
      $count2=0;
      if (have_rows('zenith_slider')):
        while (have_rows('zenith_slider')):the_row();
      $count2++;
      ?>
      <div class="hgh-linner hgi" data-index="<?php echo $count2; ?>">
        <img src="<?php echo get_sub_field('slide_image'); ?>"/>     
      </div>
      <?php 
        if ($count2==6) {
         break;
       }
      endwhile;
      endif; 
      ?>



    </div>

  </div>

  <!--The Second row-->
  <div class="row col-md-4 col-xs-8 right-row">
  <ul>
        <?php 
        $count1=0;
        if (have_rows('zenith_slider')):
          while (have_rows('zenith_slider')):the_row();
        $count1++;
        ?>
        <li class="highlight lhgh" data-index="<?php echo $count1; ?>">

          <div class="highlight-title">
            <h3><?php echo get_sub_field('slide_title'); ?></h3>
           <?php echo get_sub_field('slide_icon'); ?>
            <!-- <span class="fa fa-cogs fa-2x" ></span> -->
          </div><!-- .highlight-title --> 

         <p><?php echo get_sub_field('slide_text'); ?></p>
        </li><!-- .highlight .lhgh -->
        <?php 
        if ($count1==3) {
         break;
       }
       endwhile;
       endif; 
       ?>

     </ul>

</div><!-- .row .right-row -->

</section><!--Highlights close-->   
</div>
<div class="clearfix testimonials pt80 pb80">
  <div class="wrap">
    <h2><?php echo get_field('testimonials_title'); ?></h2>
    <h3><?php echo get_field('testimonials_subtitle'); ?></h3>
    <div class="testimonial w50 fl">
      <img src="<?php echo get_field('testimonial_box_one_image'); ?>"/>
      <div class="text">
        <h4><?php echo get_field('testimonial_box_one_title'); ?></h4>
        <p><?php echo get_field('testimonial_box_one_text'); ?></p>
        <h5><?php echo get_field('testimonial_box_one_author'); ?></h5>
      </div>
    </div>
    <div class="testimonial w50 fl">
      <img src="<?php echo get_field('testimonial_box_two_image'); ?>"/>
      <div class="text">
        <h4><?php echo get_field('testimonial_box_two_title'); ?></h4>
        <p><?php echo get_field('testimonial_box_two_text'); ?></p>
        <h5><?php echo get_field('testimonial_box_two_author'); ?></h5>
      </div>
    </div>
    <div class="testimonial w50 fl">
      <img src="<?php echo get_field('testimonial_box_three_image'); ?>"/>
      <div class="text">
        <h4><?php echo get_field('testimonial_box_three_title'); ?></h4>
        <p><?php echo get_field('testimonial_box_three_text'); ?></p>
        <h5><?php echo get_field('testimonial_box_three_author'); ?></h5>
      </div>
    </div>
    <div class="testimonial w50 fl">
      <img src="<?php echo get_field('testimonial_box_four_image'); ?>"/>
      <div class="text">
        <h4><?php echo get_field('testimonial_box_four_title'); ?></h4>
        <p><?php echo get_field('testimonial_box_four_text'); ?></p>
        <h5><?php echo get_field('testimonial_box_four_author'); ?></h5>
      </div>
      <?php

// check if the flexible content field has rows of data
if( get_field('flexible_content_field_name') ):

  // loop through the rows of data
    while ( has_sub_field('flexible_content_field_name') ) :

     if( get_row_layout() == 'paragraph' ):

          the_sub_field('text');

        elseif( get_row_layout() == 'download' ): 

          $file = get_sub_field('file');

        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
    </div>
  </div>
</div>
<div class="clearfix support pb80 pt80"  style="background-image:url(<?php echo get_field('planet_section_bg'); ?>">
  <div class="wrap">
    <h2><?php echo get_field('planet_section_title'); ?></h2>
    <p><?php echo get_field('planet_section_text'); ?></p>
    <a href="#" class="button"><?php echo get_field('planet_section_button_text'); ?></a>
  </div>
</div>
<div class="clearfix progress pt80 pb80">
  <div class="wrap">
    <div class="bars w50 fl">
      <section id="trigger">
        <h2><?php echo get_field('progress_title'); ?></h2>
        <p><?php echo get_field('progress_text'); ?></p>
        <h3><?php echo get_field('bar_title_one'); ?></h3>
        <div class="meter">
          <div class="w30">
            <h4 class="fr">30%</h4></div>
          </div> 
          <h3><?php echo get_field('bar_title_two'); ?></h3>
          <div class="meter">
            <div class="w70">
              <h4 class="fr">70%</h4></div>
            </div>
            <h3><?php echo get_field('bar_title_three'); ?></h3>
            <div class="meter">
              <div class="w90">
                <h4 class="fr">90%</h4></div>
              </div>

            </section>
          </div>
          <div class="images tac w50 fl">
            <img src="<?php echo get_field('progress_image'); ?>"/>
          </div>
        </div>
      </div>
      <div class="clearfix owl pt80 pb80">
        <div class="layer"></div>
        <div class="wrap">
          <h2><?php echo get_field('clients_title'); ?></h2>
          <p> <?php echo get_field('clients_text'); ?></p>
        </div>
        <div class="owl-carousel owl-theme">
          <div> <img src="<?php echo get_field('logo_image'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image__two'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image__three'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image__four'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_five'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_six'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_seven'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_eight'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_nine'); ?>"/> </div>
          <div> <img src="<?php echo get_field('logo_image_ten'); ?>"/> </div>
        </div>
      </div>
      <div class="clearfix bottomInfo pt80 pb80">
        <div class="wrap">
          <div class="w25 fl">
            <h2>
              <?php echo get_field('bottom_section_one_title'); ?>
            </h2>
            <div class="w100">
              <i class="fa fa-map-marker fl" aria-hidden="true"></i>
              <p><?php echo get_field('bottom_location_text'); ?></p>
            </div>
            <div class="w100">
              <i class="fa fa-mobile fl" aria-hidden="true"></i>
              <p><a href="tel:<?php echo get_field('bottom_mobile_'); ?>"></a><?php echo get_field('bottom_mobile_'); ?></p>
            </div>
            <div class="w100">
              <i class="fa fa-envelope fl" aria-hidden="true"></i>
              <p><a href="mailTo:<?php echo get_field('bottom_mail'); ?>"></a><?php echo get_field('bottom_mail'); ?></p>
            </div>
          </div>
          <div class="w25 fl tac">
            <h2>
              Section heading
            </h2>
            <p class="w100">Lorem ipsum dolor sit amet,</p>
            <p class="w100">Lorem ipsum dolor sit amet,</p>
            <img src="<?php echo get_template_directory_uri(); ?>/images/bw.png"/>
          </div>
          <div class="w25 fl">
            <h2 class="mb10">
              Section heading
            </h2>
            <a href="#" class="button">Click</a>
            <a href="#" class="button">Click YOU</a>
            <a href="#" class="button">Click IT PLEASE</a>
            <a href="#" class="button">Click HER</a>
            <a href="#" class="button">Click THE DOG</a>
            <a href="#" class="button">Click FFS</a>
            <a href="#" class="button">Click EM ALL</a>
            <a href="#" class="button">Click</a>
            <a href="#" class="button">Just click this</a>
          </div>
          <div class="w25 fl">
            <h2>
              Section heading
            </h2>
            <div class="w100 pl20">
              <a href="facebook.com">
                <i class="fa fa-facebook fl" aria-hidden="true"></i></a>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
              </div>
              <div class="w100 pl20">
                <a href="twitter.com">
                  <i class="fa fa-twitter" aria-hidden="true"></i></a>
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                </div>
                <div class="w100 pl20">
                  <a href="linkedin.com">
                    <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <?php get_footer(); ?>