$(function() {


var $header = $('header');
var nh = 0;
var lastScrollTop = 0;
var $nav = $('nav');
$('.rected').attr('width', 11 + 'px');
$('.rected-two').attr('width', 15 + 'px');


  $('.hamburger-icon').click(function(){

		if($header.hasClass('mobile-open')){
        $('.rected').attr('width', 11 + 'px');
        $('.rected-two').attr('width', 15 + 'px');
			$header.removeClass('mobile-open');
			$nav.removeAttr('style');
		}else{
			wH = $(window).height();
      $('.rected, .rected-two').attr('width', 30 + 'px');
			$header.addClass('mobile-open');
			$nav.css('height',wH+'px');
		}
	});


  // Window Srollling Event
  $(window).scroll(function(event){
     sPos = $(document).scrollTop();

     var st = $(this).scrollTop();
     if (st > lastScrollTop && sPos>100){
         // downscroll code
        $('header').addClass('min-head');
     } else {
        // upscroll code
        if(st + $(window).height() < $(document).height()) {
           $('header').removeClass('min-head').addClass('nav-down');
       }
     }
      lastScrollTop = st;
  });

  var $win = $(window);
  var resizeTimer = 0;
  $win.resize(function() {
    wH = $win.height();
    wW = $win.width();
    $header.removeClass('mobile-open');
    $nav.removeAttr('style');
    $('.rected').attr('width', 11 + 'px');
    $('.rected-two').attr('width', 15 + 'px');
  });


//right arrow functionality
$('.next').click(function(){
  var nextItem = $('.current').removeClass('current').next();
$('.active-text').removeClass('active-text');
  if (!nextItem.length) {
       nextItem = $('.item').first();
   }
   nextItem.addClass('current');
   showText();
});

//left arrow functionality
$('.prev').click(function(){
  var prevItem = $('.current').removeClass('current').prev();
  $('.active-text').removeClass('active-text');
  if (!prevItem.length) {
      prevItem = $('.item').last();
   }
   prevItem.addClass('current');
   showText();
});
//click image functionality
$('.item').click(function(){
  $('.active-text').removeClass('active-text');
  if($(this).hasClass('current')) {

  } else {
    $('.current').removeClass('current');
    $(this).addClass('current');
  }
showText();
});



//matching the current image with its text content
var $dataT;
var textCat;

var showText = function() {
  $('.item').each(function(i, obj){
    if($(this).hasClass('current')){
      $dataT = $(this).attr('data-item');
    }
  });
    $('.carousel-copy-container').children().each(function(i, obj){
      var textCat = $(this);
        textCat.attr('class');
        if(textCat.attr('class') == $dataT ) {
          textCat.addClass('active-text');
        }
    });
};
showText();



});
