<?php
/*
 * Template Name: Generic Page
 * Description: Generic page template
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
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <?php if (have_posts()) :
					while (have_posts()) :
						the_post();
						the_content();
					endwhile;
				endif; ?>
      </div>
    </div>
  </div>
</section>



<?php get_footer(); ?>
