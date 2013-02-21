
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
			
		//for folio project pages
		//$('body.single-folio_project #rightcol .frame-image').prepend($('<div class="browser-strip"><span class="buttons"></span></div>'));	
		$('body.single-folio_project #rightcol .web-design .frame-image').prepend($('<div class="browser-strip"><span class="buttons"></span></div>'));
		
		//Currently CARDS
		if($('#currently').length >0){
			$('.card .front').hover(function(){
				$(this).addClass('hover');
				var myTransition = ($.browser.webkit)  ? '-webkit-transition' :
                ($.browser.mozilla) ? '-moz-transition' : 
                ($.browser.msie)    ? '-ms-transition' :
                ($.browser.opera)   ? '-o-transition' : 'transition',
        		frontOverCSS = { backgroundColor : '#d6ea11', cursor : 'pointer' };
                
    			frontOverCSS[myTransition] = 'all 0.4s ease';
    			$(this).css(frontOverCSS);
				$(this).parent().css({ borderColor : '#4d4d4d' });
			
			}, function(){
				$(this).removeClass('hover');
				var myTransition = ($.browser.webkit)  ? '-webkit-transition' :
                ($.browser.mozilla) ? '-moz-transition' : 
                ($.browser.msie)    ? '-ms-transition' :
                ($.browser.opera)   ? '-o-transition' : 'transition',
        		frontOutCSS = { backgroundColor : '#fff' };
                
    			frontOutCSS[myTransition] = 'all 0.4s ease';
    			$(this).css(frontOutCSS);
				$(this).parent().css({ borderColor : '#e6e6e6' });
			});
			
			
			$('.card .front').click(function(){
				//$(this).parent().find('.back').toggle();
				$(this).parent().find('.back').fadeIn(200);
			});	
			
			//position back content on each card
			$('.back').each(function(i){
				var cardBack = $(this).find(".focusring");
				var backContent = cardBack.find(".content-card");
				
				var backH = cardBack.height();
				var backContentH = backContent.height();
				backContent.css({ marginTop : (backH - backContentH)/4 + "px" });
				
			});
			
			
			$('.card .back .button-close').click(function(){
				$(this).closest('.back').hide();
			});
			
		}
						

	});

