<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />

<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<header>
  <div class="custom-container">
    <a href="index.html">
      <div class="left-nav">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mint-logo.png" alt="the mint">
      </div>
    </a>
    <div class="hamburger-icon clearfix">
      <svg id="hamOne" class="ham-bar"><rect class="rected" height="3" /></svg>
      <svg id="hamTwo" class="ham-bar"><rect width="19" height="3" /></svg>
      <svg id="hamThree" class="ham-bar"><rect class="rected-two" height="3" /></svg>
    </div>
    <nav>
      <div class="container">
        <ul class="main-menu">
          <li><a href="index.html">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="work.html">WORK</a></li>
          <li><a href="talent.html">TALENT</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </div>
      <div class="container">
        <div class="nav-footer">
          <div class="row">
            <div class="col-sm-6">
              <p class="green-p">studio: <a href="tel:612-342-9788">[612] 342-9788</a></p>
              <p class="green-p">mobile: <a href="tel:612-270-9071">[612] 270-9071</a></p>
            </div>
            <div class="col-sm-6">
              <p class="green-p"><a href="mailto:kditoro@thestudiomint.com">kditoro@thestudiomint.com</a></p>
              <p class="green-p"><a target="_blank" href="https://www.google.com/maps/place/150+S+5th+St+%23900,+Minneapolis,+MN+55402/data=!4m2!3m1!1s0x52b3329bb6d67ea5:0xdab0808c6f6fdd49?sa=X&ved=0ahUKEwj9p_DP29nWAhVOfiYKHXJMCbsQ8gEIJTAA">150 S. 5th Street, Suite 900 Minneapolis, MN 55402</a></p>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>

</header>
