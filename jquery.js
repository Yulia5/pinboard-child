/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {

    function test_alert(an_element, a_message) {
        an_element.closest('.test').each(function() {
            alert(a_message);
        } );
    }

    $(document.body).append('<div id="aLightboxModalOutside"><div id="aLightboxModal">\
                                 <div class="close_cursor">X</div><br/>\
                                 <div id="aLightboxModal_outside_image">\
                                 <div id="aLightboxModal_content"><div class="aLightboxModal_container"><img id="aLightboxModal_image" src=""></div></div>\
                                 <div id="aLightboxModal_title"></div></div>\
                             </div></div>');
    $("#aLightboxModalOutside").hide();

    $('.toc_button').click(function() {
        if ($(this).val() === "-") {
            $(this).val("+");
        } else {
            $(this).val("-");          
        }
        $('#div_' + this.id).toggle();
    });    

    $('.images img').each(function() {

        var imgwidth = get_float_attribute($(this).closest('.images'), 'imgwidth');
        var imgheight = get_float_attribute($(this).closest('.images'), 'imgheight');
        var nb_siblinds = $(this).closest('.outside_image').siblings('.outside_image').length;
        var is_flushright = object_exists($(this).closest('.flushright').prop('outerHTML'));
        var is_flushright2 = object_exists($(this).closest('.flushright2').prop('outerHTML'));

        // default values
        if (imgwidth == false && imgheight == false) {
            if (is_flushright || is_flushright2) {
                imgwidth = 300;
            } else {
                imgwidth = 500;
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

    function get_caption(an_image) {
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
            result = '<strong>' + caption + '</strong><br/>' + result;
        }
        return result; 
    }

    $('.outside_image img').click(function() {
        img_src = $(this).attr('src');
        caption = get_caption($(this));
        $("#aLightboxModal_image").attr("src", img_src);
        $("#aLightboxModal_title").html(caption);
        $("#aLightboxModalOutside").show();
    });

    $('.close_cursor').click(function() {
        $("#aLightboxModalOutside").hide();
        $("#aLightboxModal_image").attr("src", "");
        $("#aLightboxModal_title").html("");
    });

});
