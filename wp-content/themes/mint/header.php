<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-3614263-2', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<header>
  <div class="custom-container">
    <a href="<?php echo home_url(); ?>">
      <div class="left-nav">
        <img src="<?php the_field('mint_logo', 'option'); ?>" alt="the mint">
      </div>
    </a>
    <div class="hamburger-icon clearfix">
      <svg id="hamOne" class="ham-bar"><rect class="rected" height="3" /></svg>
      <svg id="hamTwo" class="ham-bar"><rect width="19" height="3" /></svg>
      <svg id="hamThree" class="ham-bar"><rect class="rected-two" height="3" /></svg>
    </div>
    <nav>
      <div class="container">
        <?php
          wp_nav_menu( array(
            'menu_class'=> 'main-menu'
          ));
        ?>
      </div>
      <div class="container">
        <div class="nav-footer">
          <div class="row">
            <div class="col-sm-6">
              <?php the_field('header_phone', 'option'); ?>
            </div>
            <div class="col-sm-6">
              <?php the_field('header_addresses', 'option'); ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>



</header>
