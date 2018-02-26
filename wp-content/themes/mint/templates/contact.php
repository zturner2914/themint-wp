<?php
/*
 * Template Name: Contact Page
 * Description: Contact page template
 */

get_header(); ?>

<!-- PAGE CONTENT -->


  <div class="container">
      <div class="contact-hero-copy">
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
      <div class="talent-hero-holder" style="background-image:url('img/map-mint.jpg');">
      </div>
  </div> -->

  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="contact-info">
            <h2><?php the_field('location_heading'); ?></h2>
            <?php the_field('location_description'); ?>
          </div>
          <div class="contact-info">
            <h2><?php the_field('phone_heading'); ?></h2>
            <?php the_field('phone_description'); ?>
          </div>
          <div class="contact-info">
            <h2><?php the_field('email_heading'); ?></h2>
            <?php the_field('email_description'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
