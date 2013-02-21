
jQuery(document).ready(function($) {

	var $j = jQuery.noConflict();
	//flag
	var flipped = 0;


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


		//if there is a "#sticky", listen for window scroll
		if($("#sticky").length>0){
			var stickyDiv = $("#sticky");
			var stickyOffsetTop = stickyDiv.offset().top;
			/*
			$(window).scroll(function() {
				
				if ($j(this).scrollTop() > stickyOffsetTop) {
					stickyDiv.addClass("fast");
					console.log("fix it!");
				} else {
					console.log("release it!");
					stickyDiv.removeClass("fast");
				}
			});
			*/
		}

		//for thumbnail lists - position labels
		$j('.wrapper-feedlist').imagesLoaded(
			function(){
				$j('ol.thumbnail-list li a.thumb-link').each(

					function(index){
						var thisLink = $(this);
						var itemLabel = thisLink.find('.label');
						var labelOH = itemLabel.outerHeight();
						var boxOH = thisLink.height();
						var labelTop = (boxOH - labelOH)/2;
						itemLabel.css({ 'top': labelTop+'px'});
						//console.log('labelOH = '+labelOH+'boxOH ='+boxOH+'top of label = '+labelTop);
					}
				);
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
			
			//CARDS
			$('.card .front').hover(function(){
				$(this).addClass('hover');
			}, function(){
				$(this).removeClass('hover');
			});
			
			$('.card .focusring').click(function(){
				$(this).closest('.card').find('.back').toggle();
			});	
			
			$('.card .back .close').click(function(){
				$(this).closest('.back').toggle();
				console.log($(this).attr('class'));
			});			

		});

