<?php
/*
 * Template Name: 404 page
 * Description: 404 page template
 */

get_header(); ?>

<div class="container">
    <div class="contact-hero-copy">
      <div class="left-bracket">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-left-bracket.png" alt="">
      </div>
      <h1>404 Page Not Found</h1>
      <div class="right-bracket">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/green-right-bracket.png" alt="">
      </div>
    </div>
</div>

<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
          <h2>We're sorry, but the page you were looking for couldn't be found. Please check your URL or return to our home page.</h2>
          <a href="<?php echo home_url(); ?>" class="btn-default">back to home</a>  
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
