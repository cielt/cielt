jQuery(document).ready(function($) {
//jQuery cycle slideshow if div exists
var startSlideshow = function(){
	if(jQuery('#slideshow').length>0){
		
		var cyclePrev = $('<a id="slideshow-prev">prev</a>');
		var cycleNext = $('<a id="slideshow-next">next</a>');
		var cycleCount = $('<span id="counter"></span>');
		var cycleNav = $('<div id="cycle-nav" class="clearfix"></div>');
		var cycleNavWrapper = $('<div class="wrapper-cycle-nav clearfix"></div>');
		
		cycleNav.append(cycleNext, cyclePrev, cycleCount);
		cycleNavWrapper.append(cycleNav, cycleCount);
		cycleNavWrapper.appendTo('#rightcol .box-content');

		//total slide count
		var slideTotal = $('#slideshow').children().length;
		function onAfter(curr,next,opts) {
			var caption = (opts.currSlide + 1) + ' / ' + opts.slideCount;
			$('#counter').html(caption);
		}

		jQuery('#slideshow').cycle({ 
			after:     onAfter,
			fx:     'fade', 
			speed:  '800', 
			timeout: 0, 
			prev:  '#slideshow-prev',
			next:  '#slideshow-next',
			slideExpr: 'img:not(.placeholder)',
        	// Don't let the plugin handle the sizes
        	slideResize: 1,
        	containerResize: 1,
			width: 'auto'
		});
	}
}

startSlideshow();
});