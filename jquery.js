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
                                 <a class="prev" onclick="go_back()">&#10094;</a>\
                                 <a class="next" onclick="go_forward()">&#10095;</a>\
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

    $('.outside_image img').each(function() {
        var img = $(this);
        var outside_image = $(this).parent();

        var imgwidth = get_desired_image_size(img, 'width');
        var imgheight = get_desired_image_size(img, 'height');
        var nb_siblinds = outside_image.siblings('.outside_image').length;
        var is_flushright = object_exists(outside_image.parent('.images_right').prop('outerHTML'));

        // default values
        if (imgwidth == false && imgheight == false) {
            if (is_flushright) {
                imgwidth = 300;
            } else {
                imgwidth = 500;
            }
        }

        if (imgwidth !== false) {
            set_max_size(img, imgwidth, 'width');
            resize_outside_image(img, imgwidth);
        }

        if (imgheight !== false) {
            set_max_size(img, imgheight, 'height');

            // resize_outside_image if the image sizes are known
            if (this.complete) {
                var new_width = calculate_max_width($(this), imgheight);
                resize_outside_image(img, new_width);
            }
        }

        $(this).on('load', function() {  
            var img = $(this);
            var imgheight = get_desired_image_size(img, 'height');

            if (imgheight !== false) {
                var new_width = calculate_max_width(img, imgheight);
                resize_outside_image(img, new_width);
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
            $(this).find('.wp-caption-text').each(function() {
                set_max_size($(this), max_image_width, 'width');
            });
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

    function get_desired_image_size(img, attr_name) {

        var outside_image = img.parent();
        var imgsize = get_float_attribute(outside_image, attr_name);

        if (imgsize == false) {
            var gallery = outside_image.parent();
            imgsize = get_float_attribute(gallery, 'img' + attr_name);
        }
        return imgsize;
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

    // Next/previous controls

    function go_back() {
        return 0;
    }

    function go_forward() {
        return 0;
    }
/*
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }*/

});
