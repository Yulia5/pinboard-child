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
	
	$('.images div a img').on('load', function() {
		/*$(this).css('height', $(this).closest('.images').attr('imgheight'));*/
    	var old_height = $(this).height();
		var old_width = $(this).width();
		
		$(this).css('height', $(this).closest('.images').attr('imgheight'));
		var new_height = $(this).height();
		var div_width = ((Math.floor(new_height * old_width / old_height)).toString() +'px');
		
		/*$(this).closest("div").css('width', div_width);
  		$(this).closest("div").css('max-width', div_width);*/
		
    	$(this).closest("div").find("div").css('width', div_width);
  		$(this).closest("div").find("div").css('max-width', div_width);	
  	});	
	    
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
				
				return '<strong>' + caption + '</strong>' + imagecredit;
			}
		}
	});

	// initialize magnific popup galleries with titles and descriptions
	$('.images').magnificPopup({
		callbacks : {
			open : function() {
				$('.mfp-description').append(this.currItem.el.attr('title'));
			},
			afterChange : function() {
				$('.mfp-description').empty().append(this.currItem.el.attr('title'));
			}
		},
		delegate : 'div a',
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
				
				return '<strong>' + caption + '</strong>' + imagecredit;
			}
		},
		gallery : {
			enabled : true,
			navigateByImgClick : true
		}
	});
	
}); 