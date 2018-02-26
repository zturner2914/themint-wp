$(function() {
  var $diSingle = $('.di-single'),
  		$win = $(window),
      winWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
  		singleCount = $diSingle.length,
  		diWidth=0;

      $(window).on('load',function() {
      setSliderWidth();
    });
  function setSliderWidth(){
  	$diSingle.each(function(){
	  	var disWidth = $(this).outerWidth();
	  	diWidth = diWidth+disWidth;
	  });
	  $('.di-single-holder').css({'width': diWidth+'px'});
  }


  Draggable.create(".di-cont", {type:"scrollLeft", edgeResistance:0.75, throwProps:true});



 	$('#drag-images').on('touchstart mouseenter',function(){
 		$('#drag-icon').animate({opacity: 0	}, 500, function() {
    	$(this).css('z-index',-1);
  	});
 	});

 	$('#drag-images').on('touchend mouseleave',function(){
 		$('#drag-icon').css('z-index',100);
 		$('#drag-icon').animate({opacity: 1	}, 500);
 	});

  $win.resize(function() {
   	diWidth=0;
     winWidth = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
   	setSliderWidth();
   });


});
