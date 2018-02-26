<?php
/*
 * Template Name: Work Page
 * Description: Work page template
 */

get_header(); $count = count(get_field('video', 'options'));
 $count;
$vidNum = rand(1,$count);

$vidNum;
?>

<div class="video-wrap">
  <video id="this2" poster="videos/video-1.jpg"  loop>
    <source id="this1" src="<?php echo content_url();; ?>/uploads/2017/12/video<?php echo $vidNum; ?>.mp4">
    </video>
  </div>
  <script type="text/javascript">
  getRandomArbitrary();
  function getRandomArbitrary() {

    var setEl = document.getElementById("this1");
    var vidTag = document.getElementById("this2");
    vidTag.load();
    vidTag.play();

  }
  </script>
  <div id="home-hero">
    <div class="home-hero-holder" style="background-image:url('<?php the_field('mobile_hero'); ?>');"></div>
    <div class="container">
        <div class="work-hero-copy">
          <div class="left-bracket">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-bracket.png" alt="">
          </div>
          <h1><?php the_field('hero_h1'); ?></h1>
          <div class="right-bracket">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-bracket.png" alt="">
          </div>
          <div class="hero-p-copy">
              <p><?php the_field('hero_description'); ?></p>
          </div>
        </div>
    </div>
</div>


<!-- PAGE CONTENT -->
<div>
  <div class="mobile-green-box">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 seconday-img-container no-padding">
          <img class="img-responsive" src="<?php the_field('hero_sub_image'); ?>" alt="">
        </div>
        <div class="col-sm-7 desktop-green-box">
          <h2><?php the_field('hero_sub_h2'); ?></h2>
          <?php the_field('hero_sub_description'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="drag-images">
  <div id="drag-icon">
    <div class="drg-copy">Drag</div>
  </div>
  <div class="di-cont grabbable">
    <div class="di-single-holder">
      <?php if( have_rows('work') ): $count = 0; while ( have_rows('work') ) : the_row(); if ($count % 1 == 0) { ?>
        <div class="di-single">
           <?php } ?>
        <img src="<?php the_sub_field('carousel_work'); ?>" class="img-responsive">
        <p><?php the_sub_field('image_title'); ?></p>
            <?php if ($count % 1 == 0) { ?>
            </div>
      <?php } $count++; endwhile; endif;?>
    </div>
  </div>
</section>


<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2>Candy for your eyes. Otherwise known as eye-candy.</h2>
        <p>See our full reel here!</p>
      </div>
      <div class="col-sm-12">
        <img src="img/Motorcycle.png" class="img-full" alt="">
      </div>
    </div>
  </div>
</section> -->



<?php get_footer(); ?>
