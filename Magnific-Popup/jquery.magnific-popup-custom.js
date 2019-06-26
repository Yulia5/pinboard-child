/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {

    //$(document).ready(function() {});
    //run a script when the document structure is ready, but before all of the images have loaded
    
    window.onload = function() {
    }

    window.onresize = function() {
    }

    $('.images img').each(function() {

        var imgwidth = get_attribute($(this).closest('.images'), 'imgwidth');
        if (imgwidth !== false) {
            var new_width = parseFloat(imgwidth);
            set_max_size($(this), new_width, 'width');
            resize_outside_image($(this), new_width);
        }

        var imgheight = get_attribute($(this).closest('.images'), 'imgheight');
        if (imgheight !== false) {
            var new_height = parseFloat(imgheight);
            set_max_size($(this), new_height, 'height');
            // resize_outside_image must happen after loading, when the image sizes are known
        }

        $(this).load(function() {
            var imgheight = get_attribute($(this).closest('.images'), 'imgheight');
            if (imgheight !== false) {
                var new_height = parseFloat(imgheight);
                var old_height = parseFloat($(this).prop('naturalHeight'));
                var old_width = parseFloat($(this).prop('naturalWidth'));
                var new_width = Math.floor(old_width * (new_height / old_height));
                resize_outside_image($(this), new_width);
            }
        });
    });

    function resize_outside_image(an_image, max_image_width) {
        an_image.closest('.outside_image').each(function() {
            set_max_size($(this), max_image_width + 5, 'width'); //$(this).css('max-width', a_width);
        });
    }

    function get_attribute(an_object, attr_name) {
        if ( typeof an_object !== typeof undefined && an_object !== false && an_object !== 0) {
            var attr = an_object.attr(attr_name);
            // For some browsers, `attr` is undefined; for others, `attr` is false. Check for both.
            if ( typeof attr !== typeof undefined && attr !== false) {
                return attr;
            };
        };
        return false;
    }

    function set_max_size(an_object, a_size, a_size_name) {
        var style_img = ' max-' + a_size_name + ': ' + a_size.toString() + 'px ';  
        an_object.attr('style', style_img);
        return 0;
    }

    $('.magnific-image').magnificPopup({
        type : 'image',
        closeOnContentClick : true,
        closeOnBgClick : true,
        closeBtnInside : true,
        mainClass : 'mfp-no-margins', // class to remove default margin from left and right side
        image : {
            verticalFit : true,
            titleSrc : function(item) {
                var sourcehrf = item.el.find('img').attr('sourcehrf');
                var sourcename = item.el.find('img').attr('sourcename');
                var caption = item.el.find('img').attr('caption');
                var imagecredit = 'Image credit: ';
                if (caption) {
                    imagecredit = '.<br>' + imagecredit;
                }

                if (sourcehrf) {
                    if (!sourcename) {
                        sourcename = 'this website';
                    }
                    imagecredit += '<a title="' + sourcename + '" href="' + sourcehrf + '" target="_blank">' + sourcename + '</a>';
                } else if (sourcename) {
                    imagecredit += sourcename;
                } else {
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
                    if (caption) {
                        imagecredit = '.<br>' + imagecredit;
                    }

                    if (sourcehrf) {
                        if (!sourcename) {
                            sourcename = 'this website';
                        }
                        imagecredit += '<a title="' + sourcename + '" href="' + sourcehrf + '" target="_blank">' + sourcename + '</a>';
                    } else if (sourcename) {
                        imagecredit += sourcename;
                    } else {
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
