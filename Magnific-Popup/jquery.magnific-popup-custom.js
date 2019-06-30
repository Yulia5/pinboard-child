/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {

    function test_alert(an_element, a_message) {
        an_element.closest('.test').each(function() {
            alert(a_message);
        } );
    }

    $('.images img').each(function() {

        var imgwidth = get_float_attribute($(this).closest('.images'), 'imgwidth');
        var imgheight = get_float_attribute($(this).closest('.images'), 'imgheight');
        var nb_siblinds = $(this).closest('.outside_image').siblings('.outside_image').length;
        var is_flushright = object_exists($(this).closest('.flushright').prop('outerHTML'));
        //test_alert($(this), 'is_flushright: ' + is_flushright);

        // default values
        if (imgwidth == false && imgheight == false && nb_siblinds == 0) {
            if (is_flushright == false) {
                imgwidth = 500;
            } else {
                imgwidth = 300;
            }
        }

        if (imgwidth !== false) {
            set_max_size($(this), imgwidth, 'width');
            resize_outside_image($(this), imgwidth);
        }

        if (imgheight !== false) {
            set_max_size($(this), imgheight, 'height');

            // resize_outside_image if the image sizes are known
            if (this.complete) {
                var new_width = calculate_max_width($(this), imgheight);
                resize_outside_image($(this), new_width);
            }
        }

        $(this).load(function() {  
            var imgheight = get_float_attribute($(this).closest('.images'), 'imgheight');
            if (imgheight !== false) {
                var new_width = calculate_max_width($(this), imgheight);
                resize_outside_image($(this), new_width);
            }
        });
    });

    function calculate_max_width(an_image, imgheight) {       
        var old_height = parseFloat(an_image.prop('naturalHeight'));
        var old_width = parseFloat(an_image.prop('naturalWidth'));
        var new_width = Math.floor(old_width * (imgheight / old_height));        
        return new_width;
    }

    function resize_outside_image(an_image, max_image_width) {
        an_image.closest('.outside_image').each(function() {
            set_max_size($(this), max_image_width + 5, 'width'); 
        });
    }

    function object_exists(an_object) {
        var result = ( typeof an_object !== typeof undefined && an_object !== false && an_object !== 0);
        return result;
    }

    function get_attribute(an_object, attr_name) {
        if (object_exists(an_object)) {
            var attr = an_object.attr(attr_name);
            // For some browsers, `attr` is undefined; for others, `attr` is false. Check for both.
            if ( typeof attr !== typeof undefined && attr !== false) {
                return attr;
            };
        };
        return false;
    }

    function get_float_attribute(an_object, attr_name) {
        var text_attribute = get_attribute(an_object, attr_name);
        if (text_attribute !== false) {
            return parseFloat(text_attribute);
        }
        return false;
    }

    function set_max_size(an_object, a_size, a_size_name) {
        var style_img = ' max-' + a_size_name + ': ' + a_size.toString() + 'px ';  
        an_object.attr('style', style_img); //$(this).css('max-width', a_width);
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
                var an_image = item.el.find('img');
                var sourcehrf = get_attribute(an_image, 'sourcehrf');
                var sourcename = get_attribute(an_image, 'sourcename');
                var caption = get_attribute(an_image, 'caption');
                var result = 'Image credit: ';

                if (sourcehrf) {
                    if (!sourcename) {
                        sourcename = sourcehrf;
                    }
                    result += '<a title="' + sourcename + '" href="' + sourcehrf + '" target="_blank">' + sourcename + '</a>';
                } else if (sourcename) {
                    result += sourcename;
                } else {
                    result += 'me';
                }

                if (caption) {
                    result = '<strong>' + caption + '</strong>.<br>' + result;
                }

                if (result !== '') {
                    result = result + '<br /> &nbsp';
                }

                return result; 
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
