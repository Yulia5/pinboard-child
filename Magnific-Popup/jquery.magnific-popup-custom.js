/*! Magnific Popup - v1.1.0 - 2016-02-20
 * Source: http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */

jQuery(document).ready(function($) {

    //$(document).ready(function() {});
    //run a script when the document structure is ready, but before all of the images have loaded

    window.onresize = function() {
        $('.images img').each(function(i, obj) {
            resize_an_image($(this));
        });
    }

    $('.images img').each(function() {
        var imgheight = get_attribute($(this).closest('.images'),   'imgheight');
        if (imgheight !== false) {
            var new_height = parseFloat(imgheight);
            var style_img = ' height: ' + new_height.toString() + 'px ';  
            $(this).attr('style', style_img);
        }
        
        $(this).load(function() {
            resize_an_image($(this));
        });
    });

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



    function resize_an_image(an_image) {

        var old_height = parseFloat(an_image.height());
        var old_width = parseFloat(an_image.width());
        var new_height = old_height;
        var new_width = old_width;
        var imgheight = get_attribute(an_image.closest('.images'), 'imgheight');
        if (imgheight !== false) {
            new_height = parseFloat(imgheight);
            if (new_height !== old_height) {
                new_width = Math.floor(old_width * (new_height / old_height));
            }
        }

        var max_width = document.body.clientWidth;
        var max_width_attr = get_attribute(an_image.closest('.entry'), 'width');
        if (max_width_attr !== false) {
            max_width = parseFloat(max_width_attr);
        }

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
        an_image.closest('.outside_image').children('.wp-caption-text').each(function() {
            $(this).css('width', new_width);
            // "this" is the current element in the loop
        });

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
