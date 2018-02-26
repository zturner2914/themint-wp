<?php
/*
 * Template Name: Talent Page
 * Description: Talent page template
 */

get_header(); ?>
<!-- PAGE CONTENT -->

  <div class="container">
      <div class="talent-hero-copy">
        <div class="left-bracket">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-left-bracket.png" alt="">
        </div>
        <h1><?php the_field('hero_h1'); ?></h1>
        <div class="right-bracket">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-right-bracket.png" alt="">
        </div>
      </div>
  </div>

  <!-- <div id="talent-hero">
      <div class="talent-hero-holder" style="background-image:url('img/Sketer_background.png');">
        <div class="container">
          <div class="skater">
            <img src="img/Sketer_foreground.png" alt="">
          </div>
        </div>
      </div>
  </div> -->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-8 talent-body-copy">
          <?php the_field('talent_description'); ?>
          <p class="green-p"><?php the_field('talent_contact'); ?></p>
        </div>
      </div>
    </div>
  </section>


<?php get_footer(); ?>
