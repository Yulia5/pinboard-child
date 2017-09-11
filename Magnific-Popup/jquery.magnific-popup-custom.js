/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

	

    
	/*
$(function() {
  $('.images div a img').on('load', function() {
	$(this).style.height = $(this).closest('.images').attr('imgheight');
  	var imgheight = $(this).closest('.images').attr('imgheight');
  	var imgwidth = $(this).width * imgheight / $(this).height;
  	alert($(this).width);
  	alert(imgheight);
  	alert($(this).height);
  	/*this.parent().style.width = Math.floor($(this).closest('.images').attr('imgheight')).toString() +'px';
  	
    $(this).css('height', $(this).closest('.images').attr('imgheight'));
  });
});*/

jQuery(document).ready(function($) {
	
	window.onload = function() {
		$('img').each(function(i, obj) {
	    resize_an_image($(this));
		});
	}
	
	window.onresize = function() {
		$('img').each(function(i, obj) {
	    resize_an_image($(this));
		});
	}
	
	function resize_an_image(an_image) {    
    	var old_height = parseFloat(an_image.height());
		var old_width = parseFloat(an_image.width());
		var new_height = old_height;
		var new_width = old_width;
		
  		if ( an_image.closest('.images').length ) {
    		var imgheight = an_image.closest('.images').attr('imgheight');
			if (typeof imgheight !== typeof undefined && imgheight !== false) {
    			new_height = parseFloat(imgheight);
            	if (new_height !== old_height) {
					new_width = Math.floor(old_width * (new_height / old_height));
			    } 
        	}
		}    
		var max_width = document.body.clientWidth;      
    	if (max_width < new_width) {
			new_height = Math.floor(new_height * (max_width / new_width));
			new_width = max_width;
		}
	  	if (new_height !== old_height) {
			an_image.css('height', new_height);
		}
		if (new_width !== old_width) {
			an_image.css('width', new_width);
		}
    	return 0;
	}
	    
	$('.magnific-image').magnificPopup({
		type : 'image',
		closeOnContentClick: true,
		closeOnBgClick: true,
		closeBtnInside: true,
		mainClass : 'mfp-no-margins', // class to remove default margin from left and right side
		image : {
			verticalFit : true,
			titleSrc : function(item) {
				var sourcehrf = item.el.find('img').attr('sourcehrf');
				var sourcename = item.el.find('img').attr('sourcename');	
				var caption = item.el.find('img').attr('caption');		
				var imagecredit = 'Image credit: ';
				if (caption)
				{
					imagecredit = '.<br>' + imagecredit;
				}
				
				if (sourcehrf)
				{
					if (!sourcename)
					{
						sourcename = 'this website';
					}
					imagecredit += '<a title="' + sourcename + '" href="' + sourcehrf + '" target="_blank">' +  sourcename + '</a>';
				}
				else if (sourcename)
				{
					imagecredit += sourcename;
				}
				else
				{
					imagecredit = '';
				}
				
				return '<strong>' + caption + '</strong>' + imagecredit + '<br /> &nbsp';
			}
		}
	});


	// initialize magnific popup galleries with titles and descriptions
	$('.images').each(function() {
      $(this).magnificPopup({
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
			titleSrc : function(item) {
				var sourcehrf = item.el.find('img').attr('sourcehrf');
				var sourcename = item.el.find('img').attr('sourcename');	
				var caption = item.el.find('img').attr('caption');		
				var imagecredit = 'Image credit: ';
				if (caption)
				{
					imagecredit = '.<br>' + imagecredit;
				}
				
				if (sourcehrf)
				{
					if (!sourcename)
					{
						sourcename = 'this website';
					}
					imagecredit += '<a title="' + sourcename + '" href="' + sourcehrf + '" target="_blank">' +  sourcename + '</a>';
				}
				else if (sourcename)
				{
					imagecredit += sourcename;
				}
				else
				{
					imagecredit = '';
				}
				
				return '<strong>' + caption + '</strong>' + imagecredit + '<br /> &nbsp';
			}
		},
		gallery : {
			enabled : true,
			navigateByImgClick : true
		}
	  });
	});
	
}); 