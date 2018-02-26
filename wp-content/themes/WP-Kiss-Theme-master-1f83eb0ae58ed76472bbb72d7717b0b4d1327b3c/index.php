<?php get_header(); ?>

<div class="video-wrap">
  <video id="this2" poster="videos/video-1.jpg"  loop>
    <source id="this1" src="videos/video1.mp4">
    </video>
  </div>
  <script type="text/javascript">
  getRandomArbitrary(1,5);
  function getRandomArbitrary(min, max) {
    var myRand = Math.random() * (max - min) + min;
    myRand = Math.round(myRand);
    var setEl = document.getElementById("this1");
    var vidTag = document.getElementById("this2");
    console.log(myRand);
    if(myRand == 1){
      vidTag.setAttribute("poster", "videos/video-1.jpg")
      setEl.setAttribute("src", "videos/video1.mp4");
    }else if (myRand == 2){
      vidTag.setAttribute("poster", "videos/video-2.jpg")
      setEl.setAttribute("src", "videos/video2.mp4");
    }else if (myRand == 3){
      vidTag.setAttribute("poster", "videos/video-3.jpg")
      setEl.setAttribute("src", "videos/video3.mp4");
    }else if (myRand == 4){
      vidTag.setAttribute("poster", "videos/video-4.jpg")
      setEl.setAttribute("src", "videos/video4.mp4");
    }else{
      vidTag.setAttribute("poster", "videos/video-5.jpg")
      setEl.setAttribute("src", "videos/video5.mp4");
    }
    vidTag.load();
    vidTag.play();

  }
  </script>
<div id="home-hero">
    <!-- <div class="home-hero-holder hidden-xs" style="background-image:url('images/feed/desktop-hero.jpg');"></div> -->
  <div class="home-hero-holder" style="background-image:url('videos/mobile-hero-1.jpg');"></div>
  <div class="container">
      <div class="home-hero-copy">
        <div class="left-bracket">
          <img src="img/left-bracket.png" alt="">
        </div>
        <h1>Hello, we are The Mint.</h1>
        <div class="right-bracket">
          <img src="<?php echo get_stylesheet_directory_uri(); ?> /img/right-bracket.png" alt="">
        </div>
        <div class="hero-p-copy">
            <p>We are a project-based content studio that offers minty-fresh thinking, strategy, content development, and production for whatever is on your to-make list.</p>
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
        <img class="img-responsive" src="img/Home_secondaryimage.png" alt="">
      </div>
      <div class="col-sm-7 desktop-green-box">
        <h2>A peek behind the process.</h2>
        <p>Our nifty and nimble way of working matches talent to task, by casting the right players to your project. We pull from our in-house team as well as our extensive freelance roster, and partner with vendors who are the best in the biz, to get from A to Z in the most efficient way possible—while still maintaining our ridiculously high standards of quality, of course.</p>
        <a href="about.html" class="btn-secondary">See how it works</a>
      </div>
    </div>
  </div>
</div>
</div>

<div id="home-carousel" class="carousel-wrapper gray-box">
<div class="container no-padding">
  <div class="row">
    <div class="col-sm-12 carousel-header">
      <h2>We’re a jack of these trades.</h2>
    </div>
  </div>
  <div class="row">
  <div class="carouselbox active">
    <div class="carousel-left-arrow">
      <div class="prev">
        <img class="mobile-carousel-arrow" src="<?php echo get_stylesheet_directory_uri(); ?> /img/mobile-left-arrow.png" alt="">
        <img class="desktop-carousel-arrow" src="<?php echo get_stylesheet_directory_uri(); ?> /img/Carousel_arrow_left.svg" alt="">
      </div>
    </div>
    <div class="carousel-content">
      <ol class="content">
        <li class="item current" data-item="content-text">
          <div class="content-holder">
            <svg class="svg-icons" xmlns="http://www.w3.org/2000/svg" width="52" height="70" viewbox="0 0 52 70"><style type="text/css">
.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
</style><g transform="translate(-831 -1324)translate(820 1325)translate(12 0)"><polygon class="st0" points="50 68 0 68 0 0 32.4 0 50 17.7 "/><polyline class="st0" points="33 0 33 18 50 18 "/><path class="st0" d="M12 21h13"/><path class="st0" d="M12 30h27"/><path class="st0" d="M12 39h27"/><path class="st0" d="M12 48h27"/><path class="st0" d="M12 57h27"/></g></svg>
            <p class="carousel-img-text">content</p>
            <div class="carousel-item-list">
              <p>microsite &amp; banner design</p>
              <p>programmatic creative &amp; production</p>
              <p>development</p>
              <p>social conent</p>
              <p>content deployment</p>
              <p>digital media</p>
            </div>
          </div>
        </li>
        <li class="item" data-item="creative">
          <div class="creative-holder">
            <svg class="svg-icons" xmlns="http://www.w3.org/2000/svg" width="75" height="70" viewbox="0 0 75 70"><style type="text/css">
.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
</style><path class="st0" d="M11.7 63.8c-14.2-14.4-14.2-37.7 0-52.1C25.9-2.6 49-2.6 63.2 11.8c14.2 14.4 14.2 37.7 0 52.1 -6.8 6.9-17.8 6.9-24.6 0L25.1 50.3c-3-3-7.4 1.6-4.5 4.5 2.5 2.5 2.5 6.5 0 9.1C18.2 66.3 14.1 66.3 11.7 63.8L11.7 63.8z"/><path class="st0" d="M54.3 25.3c-1.9 1.9-5 1.9-6.9 0 -1.9-1.9-1.9-5 0-6.9 1.9-1.9 5-1.9 6.9 0C56.2 20.3 56.2 23.4 54.3 25.3L54.3 25.3z"/><path class="st0" d="M56 39.8c-1.3-1.3-1.3-3.5 0-4.8 1.3-1.3 3.5-1.3 4.8 0 1.3 1.3 1.3 3.5 0 4.8S57.3 41.1 56 39.8L56 39.8z"/><path class="st0" d="M45.8 57.8c-2.5-2.5-2.5-6.5 0-8.9 2.5-2.5 6.5-2.5 8.9 0 2.5 2.5 2.5 6.5 0 8.9C52.3 60.2 48.3 60.2 45.8 57.8L45.8 57.8z"/><path class="st0" d="M34.3 15.4c1.9 1.9 1.9 5 0 6.9 -1.9 1.9-5 1.9-6.9 0 -1.9-1.9-1.9-5 0-6.9C29.3 13.5 32.4 13.5 34.3 15.4L34.3 15.4z"/></svg>
            <p class="carousel-img-text">creative</p>
            <div class="carousel-item-list">
              <p>copywriting</p>
              <p>art direction</p>
              <p>design</p>
            </div>
          </div>
        </li>
        <li class="item" data-item="production">
          <div class="prod-holder">
            <svg class="svg-icons" xmlns="http://www.w3.org/2000/svg" width="94" height="70" viewbox="0 0 94 70"><style type="text/css">
.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
</style><g transform="translate(-153 -1324)translate(149 1325)translate(5 0)"><polygon class="st0" points="0 68 92 68 92 0 0 0 "/><path class="st0" d="M0 24h92"/><path class="st0" d="M0 12h92"/><polyline class="st0" points="18 0 30 12 18 24 "/><polyline class="st0" points="42 0 54 12 42 24 "/><polyline class="st0" points="66 0 78 12 66 24 "/></g></svg>
            <p class="carousel-img-text">production</p>
            <div class="carousel-item-list">
              <p>broadcast spots</p>
              <p>video</p>
              <p>on-line</p>
              <p>programming</p>
              <p>adaptions</p>
              <p>versioning</p>
              <p>microsite development</p>
              <p>banners ads</p>
              <p>social content</p>
              <p>radio</p>
              <p>print &amp; collateral</p>
            </div>
          </div>
        </li>
        <li class="item" data-item="digital">
          <div class="digital-holder">
              <svg class="svg-icons" id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="89" height="70" viewbox="0 0 89 70"><style>.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}</style><title>Group 6</title><g id="Designs"><g id="Home"><g id="Group-11"><g id="Group-6"><path id="Stroke-98" class="st0" d="M88 61.8c0 4.2-3.4 7.6-7.6 7.6H8.6C4.4 69.4 1 66 1 61.8V8.9c0-4.2 3.4-7.6 7.6-7.6h71.9c4.2 0 7.6 3.4 7.6 7.6v52.9H88z"/><path id="Stroke-99" class="st0" d="M1 20.4h87"/><path class="st1" id="Stroke-100" d="M16 10.4c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/><path class="st1" id="Stroke-101" d="M28 10.4c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/><path class="st1" id="Stroke-102" d="M39 10.4c0 1.1-.9 2-2 2s-2-.9-2-2 .9-2 2-2 2 .9 2 2z"/><path id="Stroke-103" class="st0" d="M11 29.4l6 6.5-6 6.5"/></g></g></g></g></svg>
                <p class="carousel-img-text">digital</p>
              <div class="carousel-item-list">
                <p>project strategy</p>
                <p>connections planning</p>
                <p>content mapping</p>
                <p>content deployment</p>
                <p>content iteration</p>
              </div>
            </div>
        </li>
        <li class="item prod-sup-top-pos" data-item="production-support">
          <div class="prod-support-holder">
            <svg class="svg-icons" xmlns="http://www.w3.org/2000/svg" width="86" height="77" viewbox="0 0 86 77"><style type="text/css">
.st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
</style><path class="st0" d="M42.1 65.1h-34c-4 0-7.2-3.2-7.2-7.1V8.1C1 4.2 4.2 1 8.2 1h68c4 0 7.2 3.2 7.2 7.1v26.7"/><path class="st0" d="M1 19.2h82.3"/><path class="st1" d="M14.9 10.1c0 0.9-0.7 1.6-1.6 1.6s-1.6-0.7-1.6-1.6 0.7-1.6 1.6-1.6S14.9 9.2 14.9 10.1L14.9 10.1z"/><path class="st1" d="M25.6 10.1c0 0.9-0.7 1.6-1.6 1.6s-1.6-0.7-1.6-1.6 0.7-1.6 1.6-1.6S25.6 9.2 25.6 10.1L25.6 10.1z"/><path class="st1" d="M37.3 10.1c0 0.9-0.7 1.6-1.6 1.6s-1.6-0.7-1.6-1.6 0.7-1.6 1.6-1.6S37.3 9.2 37.3 10.1L37.3 10.1z"/><path class="st0" d="M66.2 29.9H29.9"/><path class="st0" d="M16 29.9h3.2"/><path class="st0" d="M44.8 40.5h-15"/><path class="st0" d="M16 40.5h3.2"/><path class="st0" d="M44.8 51.2h-15"/><path class="st0" d="M16 51.2h3.2"/><path class="st0" d="M84.4 75.8c0-8.9-7.4-16-16.6-16s-16.6 7.2-16.6 16H84.4L84.4 75.8z"/><path class="st0" d="M76.9 50.2c0-5.3-4.3-9.6-9.6-9.6 -5.3 0-9.6 4.3-9.6 9.6s4.3 9.6 9.6 9.6C72.6 59.8 76.9 55.5 76.9 50.2L76.9 50.2z"/></svg>
              <p class="carousel-img-text">production support</p>
              <div class="carousel-item-list">
                <p>production management</p>
                <p>business affairs</p>
                <p>legal clearance</p>
                <p>broadcast &amp; digital distribution</p>
                <p>trafficking</p>
                <p>production billing</p>
                <p>accounting</p>
                <p>insurance</p>
              </div>
          </div>
        </li>
      </ol>
    </div>
    <div class="carousel-right-arrow">
      <div class="next">
        <img class="mobile-carousel-arrow" src="img/mobile-right-arrow.png" alt="">
        <img class="desktop-carousel-arrow" src="img/Carousel_arrow_right.svg" alt="">
      </div>
    </div>
  </div>
  </div>
</div>
<div class="home-carousel-wrapper container">
  <div class="row">
    <div class="col-sm-12 col-md-9 col-lg-8 carousel-copy-container">
      <div class="production">
        <h2>PRODUCTION</h2>
        <p>Taking the ideas and making them an actual thing. That’s our production expertise. Doesn’t matter what it is or where it will live, we build all that stuff like it’s our job. Because, well, it is.</p>
        <p><span>WHAT WE DO:</span> broadcast spots, video, on-line video/DVE, programming, adaptions, versioning, microsite development, banner ads, social content, radio, print, and collateral </p>
      </div>
      <div class="digital">
        <h2>Digital</h2>
        <p>If it’s on the interwebs, it’s in our wheelhouse. And just because we call it the interwebs doesn’t mean we’re old fashioned. We did that on purpose. You know, for giggles. </p>
        <p><span>WHAT WE DO:</span> microsite and banner design, programmatic creative and production, development, social content, content deployment, digital media </p>
      </div>
      <div class="production-support">
        <h2>PRODUCTION SUPPORT</h2>
        <p>Don’t have a production department? No problem. We’ve got your behind-the-scenes covered. Because the business part of content production is important, too.</p>
        <p><span>WHAT WE DO:</span> production management, business affairs, legal clearance, broadcast and digital distribution, trafficking, production billing and accounting, insurance</p>
      </div>
      <div class="creative">
        <h2>creative</h2>
        <p>Smart ideas, funny ideas, crazy yet strategically sound ideas, we have them all. We’ve got witty words, pretty pictures, and delightful designs. Mix them all together, and that cake is delicious. </p>
        <p><span>WHAT WE DO:</span> copywriting, art direction, design</p>
      </div>
      <div class="content-text">
        <h2>content</h2>
        <p>What is content, anyway? Well, it’s everything. As soon as it’s a glimmer in your eye, come and get us. Start to finish, planning to analytics, wham-bam you’re welcome Ma’am. Or Sir. </p>
        <p><span>WHAT WE DO:</span> project strategy, connections planning, content mapping, content deployment, content iteration</p>
      </div>
    </div>
  </div>
</div>
</div>


<section class="home-work-section">
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <h2>Fruits of our labors.</h2>
      <p>We’re pretty proud of our work. Ok, we’re really, really, really proud of it. Check out some of the things we’ve created for great clients like this:</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="client-logos">
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logos/gm-logo.png" alt=""></a>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logos/3m-logo.png" alt=""></a>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logos/johnsonville.png" alt=""></a>
        <a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?> /img/logos/keybank.png" alt=""></a>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="client-logos">
        <a href=""><img src="img/logos/mh-yoghurt.png" alt=""></a>
        <a href=""><img src="img/logos/syngenta.png" alt=""></a>
        <a href=""><img src="img/logos/jam-logo.png" alt=""></a>
        <a href=""><img src="img/logos/popeyes.png" alt=""></a>
      </div>
    </div>
  </div>
  <div class="work-button">
    <a href="work.html" class="btn-default">see work</a>
  </div>
</div>
</section>


<div class="gray-box-bottom">
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <h2>Hey you. Yes, you.</h2>
      <p>We’re always on the prowl for great creative and production talent. Do you fit that description? Send over your reel or portfolio link, and let’s make it happen.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <a href="talent.html" class="btn-default">sign me up</a>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
