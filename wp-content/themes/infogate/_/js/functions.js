// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){

		// Header
		
		$('header #claves ul').prepend('<li>Claves:</li>');
		
		$('header a.buscar').click(function(){
			$('.gbuscar').animate({width: 'toggle'});
		});
		
		var headUp = $('header').offset().top;
		console.log(headUp);
		   
		$(window).scroll(function () { 

		   $('#full').css({
		      'top' : ($(this).scrollTop()/3)+"px"
		   });   
		   
		    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
				if ($(window).scrollTop() > headUp){
		           $('header').css({'position' : 'fixed', 'top' : 0 });
		           $('#nav-mob').css({'position' : 'fixed', 'top' : 70 });
		        } else {
			       $('header').css({'position' : 'absolute', 'top' : 30 });
			       $('#nav-mob').css({'position' : 'absolute', 'top' : 100 });
		        }
			} else {
				if ($(window).scrollTop() > headUp){
		           $('header').css({'position' : 'fixed', 'top' : 0 });
		           $('#nav-mob').css({'position' : 'fixed', 'top' : 70 });
		        } else {
			       $('header').css({'position' : 'absolute', 'top' : 30 });
			       $('#nav-mob').css({'position' : 'absolute', 'top' : 100 });
		        }
			}
		   
		   
		
		});
		
		$('#nav li').removeClass('menu-item');
		$("#nav li").removeClass (function (index, css) {
		    return (css.match (/(^|\s)menu-item-\S+/g) || []).join(' ');
		});
		  
		
		
		
		$('.destacados article:nth-child(1)').addClass('art-uno');
		$('.destacados article:nth-child(2)').addClass('art-dos');
		$('.destacados article:nth-child(2n+2)').addClass('art-par');
		
		equalheight = function(container){

		var currentTallest = 0,
		     currentRowStart = 0,
		     rowDivs = new Array(),
		     $el,
		     topPosition = 0;
		 $(container).each(function() {
		
		   $el = $(this);
		   $($el).height('auto')
		   topPostion = $el.position().top;
		
		   if (currentRowStart != topPostion) {
		     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		       rowDivs[currentDiv].height(currentTallest);
		     }
		     rowDivs.length = 0; // empty the array
		     currentRowStart = topPostion;
		     currentTallest = $el.height();
		     rowDivs.push($el);
		   } else {
		     rowDivs.push($el);
		     currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
		  }
		   for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
		     rowDivs[currentDiv].height(currentTallest);
		   }
		 });
		}
		
		$(window).load(function() {
		  equalheight('.destacados article');
		  equalheight('.ultimas article');
		});
		
		
		$(window).resize(function(){
		  equalheight('.destacados article');
		  equalheight('.ultimas article');
		});
		
		
		var $j = jQuery.noConflict(); 

$j(function(){

    var offset = 0;
	var i = 0;
//     $j("#postContainer").load("pro/infogate/mas-portadas/?offset="+offset);
    $j("#another").click(function(){
	    
	    $('#white').fadeIn(400);
	    $('#load').fadeIn(400);
	    
	    i += 1;

        $j('#postContainer').append('<div class="holacre hola-' + i + '"></div>');
        
        offset = offset+4;
    
        $j("#postContainer .hola-" + i )
            .fadeIn(300)
            .load("/mas-portadas/?offset="+offset, function() {
                $j(this).slideDown();
                $j(this).children('article:nth-child(2n+2)').addClass('art-par');
                var elementHeights = $('.hola-' + i + ' article').map(function() {
				    return $(this).height();
				}).get();
				var maxHeight = Math.max.apply(null, elementHeights);
				$('.hola-' + i + ' article').height(maxHeight + 200);
				$('#white').fadeOut(400);
				$('#load').fadeOut(400);
            });
            
        return false;
        
    });

});


$j(function(){

    var offset = 2;
	var i = 0;
//     $j("#postContainer").load("pro/infogate/mas-portadas/?offset="+offset);
    $j("#another2").click(function(){
	    
	    $('#white').fadeIn(400);
	    $('#load').fadeIn(400);
	    
	    i += 1;

        $j('#postContainer2').append('<div class="chaocre chao-' + i + '"></div>');
        
        offset = offset+5;
    
        $j("#postContainer2 .chao-" + i )
            .fadeIn()
            .load("/mas-posts/?offset="+offset, function() {
                $j(this).slideDown();
                $('#white').fadeOut(400);
				$('#load').fadeOut(400);
            });
            
        return false;
        
    });

});

		// Single
		
		var winW = $(window).width()
			wrapW = $('#wrapper').width()
			lat = winW - wrapW
			lat2 = lat / 2;
		
		$('.single-post .head').css({'width' : winW, 'margin-left' : -lat2, 'padding-left' : lat2, 'padding-right' : lat2});
		$('.single-opinion .head').css({'width' : winW, 'margin-left' : -lat2, 'padding-left' : lat2, 'padding-right' : lat2});
		$('.archive .head').css({'width' : winW, 'margin-left' : -lat2, 'padding-left' : lat2, 'padding-right' : lat2});
		$('.page .head').css({'width' : winW, 'margin-left' : -lat2, 'padding-left' : lat2, 'padding-right' : lat2});
		
		
		// Mobile 
		
		$('header a.menu').click(function(){
			$('#nav-mob').slideToggle(300);
			$('header a.menu .fa-bars').toggle(1);
			$('header a.menu .fa-times').toggle(1);
		});

	});

}(window.jQuery || window.$));