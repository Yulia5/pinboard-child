/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {
	
	$('.magnific-image').magnificPopup({
		type : 'image',
		closeBtnInside : false,
		mainClass : 'mfp-no-margins', // class to remove default margin from left and right side
		image : {
			verticalFit : true
		}
	});
	/*
	$('a[href*=".jpg"], a[href*=".jpeg"], a[href*=".png"], a[href*=".gif"]').each(function() {

		
			$(this).magnificPopup({				
				type : 'image',
				closeOnContentClick : true,
				mainClass : 'mfp-no-margins',
				image : {
					verticalFit : true
				}				
			});

	});

	// initialize magnific popup galleries with titles and descriptions
	$('.gallery').magnificPopup({
		callbacks : {
			open : function() {
				$('.mfp-description').append(this.currItem.el.attr('title'));
			},
			afterChange : function() {
				$('.mfp-description').empty().append(this.currItem.el.attr('title'));
			}
		},
		delegate : 'a',
		type : 'image',
		image : {
			markup : '<div class="mfp-figure">' + '<div class="mfp-close"></div>' + '<div class="mfp-img"></div>' + '<div class="mfp-bottom-bar">' + '<div class="mfp-title"></div>' + '<div class="mfp-description" style="text-align: left;font-size: 12px;line-height: 16px;color: #f3f3f3;word-break: break-word;padding-right: 36px;"></div>' + '<div class="mfp-counter"></div>' + '</div>' + '</div>',
			titleSrc : function(item) {
				return '<strong>' + item.el.find('img').attr('alt') + '</strong>';
			}
		},
		gallery : {
			enabled : true,
			navigateByImgClick : true
		}
	});*/
}); 