
jQuery(document).ready(function($) {
	var thisTemplateDir = templateDir,
	$j = jQuery.noConflict(),
	win = $(window);
	//center labels vertically
	var centerLabels = function(){

		$j('ol.thumbnail-list li a.thumb-link').each(

			function(index){
				var thisLink = $(this);
				var itemLabel = thisLink.find('.label');
				var labelOH = itemLabel.outerHeight();
				var boxOH = thisLink.height();
				var labelTop = (boxOH - labelOH)/2 -14;
				itemLabel.css({ 'top': labelTop+'px'});
			}
		);
	};

	var resizeAdjustments = function(){
		//make columns equal height
		if($('.column').length >0){
			var leftCWrap = $(".column.leftcol .wrapper-feedlist");
			var rightCWrap = $(".column.rightcol .wrapper-feedlist");
			var leftH = leftCWrap.height();
			var rightH = rightCWrap.height();
			if (leftH >= rightH){
				rightCWrap.css({ height : leftH });
				//console.log("right: "+rightH+" now matches left:"+leftH);
			} else {
				leftCWrap.css({ height : rightH });
				//console.log("left: "+leftH+" now matches right:"+rightH);
			}
		}
		//center labels vertically
		if($('.thumbnail-list').length >0){
			centerLabels();
		}
	};
	
	
	win.resize(function(){
		$("#wrapper-page-content").imagesLoaded(function(){
			resizeAdjustments();
		});
	});
	
	win.trigger("resize");
	// Your JavaScript goes here
	$j('#elevate-me').hide();

	$j(function () {
		$j(window).scroll(function () {
			if ($j(this).scrollTop() > 200) {
				$j('#elevate-me').fadeIn(400);
			} else {
				$j('#elevate-me').fadeOut(400);
			}
		});

		$j('#elevate-me a').click(function (e) {
			e.preventDefault();
			$j('body,html').animate({
				scrollTop : 0
				}, 'slow');
				return false;
			});
		});


		$j("#secondary-header").waypoint(function(event, direction){
			$(this).parent().toggleClass("fixy", direction === 'down');
			event.stopPropagation();
		}, {
			offset: 45  // 56+3+1+16+1px : 77 - 32
		});

		//for thumbnail lists - position labels
		$j('.wrapper-feedlist').imagesLoaded(function(){
			centerLabels();
		});	



		var mosaic = $j('#mosaic');

		mosaic.imagesLoaded( function(){

			mosaic.masonry({
				itemSelector: '.boxy',
				columnWidth: function( containerWidth ) {
					return containerWidth / 5;
				},
				isFitWidth : true,
				animationOptions: {
					duration: 400
				}

			});
		});	

		//for folio project pages
		$('body.single-folio_project #rightcol .web-design .frame-image').prepend($('<div class="browser-strip"><span class="buttons"></span></div>'));

	});

