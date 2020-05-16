/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {

    function test_alert(an_element, a_message) {
        an_element.closest('.test').each(function() {
            alert(a_message);
        } );
    }

    $(document.body).append('<div id="aLightboxModalOutside" onclick="close_lightbox()"><div id="aLightboxModal">\
                                 <div class="close_cursor" onclick="close_lightbox()">X</div><br/>\
                                 <div id="aLightboxModal_outside_image">\
                                 <a class="prev" onclick="go_back(event)">&#10094;</a>\
                                 <a class="next" onclick="go_forward(event)">&#10095;</a>\
                                 <div id="aLightboxModal_content"><div class="aLightboxModal_container"><img id="aLightboxModal_image" src=""></div></div>\
                                 <div id="aLightboxModal_title"></div></div>\
                             </div><div id="target"></div></div>');
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
            resize_outside_image(outside_image, imgwidth);
        }

        if (imgheight !== false) {
            set_max_size(img, imgheight, 'height');

            // resize_outside_image if the image sizes are known
            if (this.complete) {
                var new_width = calculate_max_width($(this), imgheight);
                resize_outside_image(outside_image, new_width);
            }
        }

        $(this).on('load', function() {  
            var img = $(this);
            var imgheight = get_desired_image_size(img, 'height');

            if (imgheight !== false) {
                var new_width = calculate_max_width(img, imgheight);
                resize_outside_image(outside_image, new_width);
            }
        });
    });

    function calculate_max_width(an_image, imgheight) {       
        var old_height = parseFloat(an_image.prop('naturalHeight'));
        var old_width = parseFloat(an_image.prop('naturalWidth'));
        var new_width = Math.floor(old_width * (imgheight / old_height));        
        return new_width;
    }

    function resize_outside_image(outside_image, max_image_width) {
        width_to_use = max_image_width;
        add_caption_width = get_float_attribute(outside_image, 'add_caption_width');
        if (add_caption_width !== false) {
            width_to_use += add_caption_width;
        }

        set_max_size(outside_image, width_to_use + 5, 'width'); 
        outside_image.find('.wp-caption-text').each(function() {
            set_max_size($(this), width_to_use, 'width');
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
     
        var imgsize = get_float_attribute(img, attr_name);
        if (imgsize == false) {
            imgsize = get_float_attribute(img, 'max-' + attr_name);
        }

        var outside_image = img.parent();
        if (imgsize == false) {
            imgsize = get_float_attribute(outside_image, 'img' + attr_name);
        }

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

    function get_caption(sourcename, sourcehrf, caption) {
      var result = '';
      if (caption) {
        result = '<strong>' + caption + '</strong><br/>' + result;
      }

      result += 'Image credit: '
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

      return result;
    }

    function concatenateAttributes($images) {
      let $attribute_labels = get_attribute_labels()
      let attribute_values = "";
      for (let i = 0; i < $images.length; i++) {
        for (let a = 0; a < $attribute_labels.length; a++) {
          attribute_values += $images[i].getAttribute($attribute_labels[a]) + '|';
        }
      }

      let $target = $("#target")[0];
      $target.setAttribute('attributes', attribute_values);
    }

    function deconcatenateAttributes() {
      let $attribute_labels = get_attribute_labels()
      let $target = $("#target")[0];
      let $attribute_values = $target.getAttribute('attributes');

      let result = [];
      let i = -1
      let a = 0
      let s = -1
      while (true) {
        let new_s = $attribute_values.indexOf("|", s + 1);
        if (new_s === -1) {
          if (i > 0) {
            result[i]['after'] = false
          }
          break;
        }
        if (a === 0) {
          i++;
          result.push({
            before: (i > 0),
            after: true
          }); // added i-th element
        }
        result[i][$attribute_labels[a]] = $attribute_values.substring(s + 1, new_s);
        s = new_s
        a = (a + 1) % $attribute_labels.length
      }
      i = 0
      return result;
    }

    function get_attribute_labels() {
      let $attribute_labels = ['caption', 'sourcehrf', 'sourcename', 'src'];
      return $attribute_labels
    }

    function display_in_lightbox(an_image_before_after) {
      $("#aLightboxModal_image").attr('src', an_image_before_after['src']);

      let full_caption = get_caption(
        an_image_before_after['sourcename'],
        an_image_before_after['sourcehrf'],
        an_image_before_after['caption']);
      $("#aLightboxModal_title").html(full_caption);

      if (an_image_before_after['before']) {
        $(".prev").show();
      } else {
        $(".prev").hide();
      }
      if (an_image_before_after['after']) {
        $(".next").show();
      } else {
        $(".next").hide();
      }
    }

    function check_there_is_an_image_before_after(img_src) {
      let result = {
        before: null,
        after: null
      }

      let $all_img_attributes = deconcatenateAttributes()

      for (let i = 0; i < $all_img_attributes.length; i++) {
        if (img_src === $all_img_attributes[i]['src']) {
          if (i > 0) {
            result['before'] = $all_img_attributes[i - 1]
          }
          if (i < ($all_img_attributes.length - 1)) {
            result['after'] = $all_img_attributes[i + 1]
          }
          break;
        }
      }

      return result
    }

    function go_back(event) {
      event.stopPropagation();
      let img_src = $("#aLightboxModal_image").attr('src');
      let $before_after = check_there_is_an_image_before_after(img_src);
      display_in_lightbox($before_after['before'])
    }

    function go_forward(event) {
      event.stopPropagation();
      let img_src = $("#aLightboxModal_image").attr('src');
      let $before_after = check_there_is_an_image_before_after(img_src);
      display_in_lightbox($before_after['after'])
      $("#aLightboxModalOutside").show();
    }

    $('.outside_image img').click(function() {

      let $all_images = $(this).parent().parent().find('img');

      concatenateAttributes($all_images)

      b_a = check_there_is_an_image_before_after($(this).attr('src'))
      let $this_image_before_after = {
        before: !!(b_a['before']),
        after: !!(b_a['after'])
      }
      let $attribute_labels = get_attribute_labels()
      for (al = 0; al < $attribute_labels.length; al++) {
        $this_image_before_after[$attribute_labels[al]] = $(this).attr($attribute_labels[al]);
      }

      display_in_lightbox($this_image_before_after)
      $("#aLightboxModalOutside").show();
    });

    function close_lightbox() {
      $("#aLightboxModalOutside").hide();
      $("#aLightboxModal_image").attr("src", "");
      $("#aLightboxModal_hidden_images").html("");
      $("#aLightboxModal_title").html("");
    };



});
