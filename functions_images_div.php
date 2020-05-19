<?php

/**
 * Function for basic field validation (present and neither empty nor only white space)
 */
function is_empty_string2($str) {
    return (!isset($str) || trim($str)==='');
}

function post_ID_to_folder_name($post_id)
{
    switch ($post_id) {
        case 376: 
            return 'yoga';
        case 8: 
            return 'similar_different';
        case 1895: 
            return 'rj';
        case 6463: 
        case 6468:
        case 6471:
        case 6474:
        case 6477:
        case 4737:
        case 6490:
        case 6492:
        case 6495:
        case 6497:
        case 6500:
        case 6503:
        case 6506:
        case 6526:
            return 'horsemen';
        case 13: 
            return 'hamlet';
        case 10: 
        case 3217:
            return 'goldenbronzehorsemen';
        case 205: 
            return 'germany';
        case 3209: 
            return 'berets';
        case 652: 
            return 'allchurch';
        case 3499:
        case 3556:
        case 3641:
            return 'persia_greece';
        case 3818:
        case 3873:
        case 3920:
        case 4066:
            return 'SocialScience';
    }
    return '';
} 
 
function get_folder_name() {
    $post = get_post();
    if ( ! empty( $post ) ) {
        $folder_name = post_ID_to_folder_name($post->ID);
    } else {
        $folder_name = null;
    }
    return $folder_name;
}

function add_if_not_empty($label, $contents) {
	if (is_empty_string2($contents)) {
        return '';
    }
    return ' ' . $label . '="' . $contents . '" ';
}

function add_int_if_not_empty($label, $contents) {
	if ( $contents ) {
		return ' ' . $label . ' = "' . (int) $contents . '"';
	}
	return '';
}

function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name, 
                                $srcset, $style, $class, $add_caption_width, $capitals)
{
	// $caption and $img_attr
	if ( $comp ) {
		$caption = 'COMPARANDUM: ' . $caption;
    }
    if (! is_empty_string2($capitals)) {
        $caption = strtoupper($capitals) . ' <br/>' . $caption;
    } 
	
    $caption_no_br = preg_replace("/<br\W*?\/>/", "\n", $caption);
    $caption_no_linebreaks = preg_replace("/<br\W*?\/>/", "", $caption);
    $img_attr = add_if_not_empty('style', $style) . add_if_not_empty('class', $class) 
    	      . add_if_not_empty('alt', $caption_no_linebreaks) . add_if_not_empty('caption', $caption_no_br)
    	      . add_if_not_empty('sourcename', $sourcename) . add_if_not_empty('sourcehrf', $sourcehrf) . add_if_not_empty('srcset', $srcset);

    // $hrf's   
    $hrf = trim($hrf, " ");
    if ( substr( $hrf, 0, 4 ) !== "http" ) {
        $hrf = yu_upload_dir() . $hrf;
    }
    if (! $folder_name) {
        $folder_name = get_folder_name();
    }
    if (!! $folder_name) {
        $index_slash = strrpos($hrf, "/");
        $hrf = substr($hrf, 0, $index_slash) . "/" . $folder_name . substr($hrf, $index_slash);
    }	

    $invisible_a_to_check_broken_links = ' <a href="' . $hrf . '" style="display:none">Invisible, to help broken links check</a>';                           
    if (! is_empty_string2($sourcehrf)) {
        $invisible_a_to_check_broken_links .= 
        	' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
    }
    
    // $div_attr
    $div_attr = add_int_if_not_empty('imgheight', $height) 
              . add_int_if_not_empty('imgwidth', $width) 
              . add_int_if_not_empty('add_caption_width', $add_caption_width);

    // $result_image
	$result_image = '<div class="outside_image"' . $div_attr . '> ' 
                    . '<img '. $img_attr . 'src="' . $hrf . '" />' 
                    . '<div class="wp-caption-text">' . $caption . '</div>'
                    . $invisible_a_to_check_broken_links . '</div>';
    
	return $result_image;
	//return "";
}

/**
 * yu_image_DB
 */
function MY_VERY_OWN_image_DB_shortcode($attr, $content = null) {

    extract(shortcode_atts(array(
        'height' => '',
        'width' => '',
        'comp' => '', 
        'folder_name' => '',
        'style' => '',
        'class' => '',
        'add_caption_width' => '',
        'capitals' => '' 
    ), $attr));
    
    $content = trim($content);
    if ((! $folder_name) && (strrpos($content, "/") === false)) {
        $folder_name = get_folder_name();
    }
    if (!! $folder_name) {
        $filename = trailingslashit($folder_name) . $content;
    } else {
        $filename = $content;
    }   
    
    $image_info_from_DB = select_image($filename);   

    $result = generate_caption_HTML($content, $height, $width, 
                    $image_info_from_DB->caption, $image_info_from_DB->srcname, $image_info_from_DB->srchref, 
                    $comp, $folder_name, $image_info_from_DB->srcset, $style, $class, $add_caption_width, $capitals);    
    return $result;
}
add_shortcode('yu_image_DB', 'MY_VERY_OWN_image_DB_shortcode');

/**
 * yu_images_DB
 */
function add_db_images($image_params_name) {
    $image_params_name_array = explode ('|', $image_params_name[0]);
    $image_name = array_pop($image_params_name_array);
    $image_params = ' ' . implode(' ', $image_params_name_array);
    $result = do_shortcode('[yu_image_DB' . $image_params . ']' . $image_name . "[/yu_image_DB]");
    return $result;
}

function MY_VERY_OWN_images_DB_shortcode($attr, $content = null) {
    extract(shortcode_atts(array(
        'imgheight' => '',
        'imgwidth' => '',
        'flushright' => '',
        'flushleft' => '' 
    ), $attr));
    
    $content = preg_replace("/<br\s*?\/?>/", "\n", $content); // for convenience, not treating <br>'s as a special case in regex
    $content = preg_replace("/<p\s*?\/?>/", "", $content); // ignoring new paragraphs markups automatically added by wordpress editor!
    $content = preg_replace_callback('/[^\s]+?(?=\s|$)/s', 'add_db_images', $content);
    $content = str_replace("\n", "<br/>", $content); // adding <br>'s back
    
    // adding div's
    if (!! $flushright) {
        $result = '<p style="clear:right"></p><div class="images_right" ';
    } elseif (!! $flushleft) {
        $result = '<p style="clear:left"></p><div class="images_left" ';
    } else {
    	$result = '<p style="clear:both"></p><div class="images_center" ';
    }  
    $result .=  add_int_if_not_empty('imgheight', $imgheight) . add_int_if_not_empty('imgwidth', $imgwidth) . '>' . $content . "</div>";  
    
    return $result;
}
add_shortcode('yu_images_DB', 'MY_VERY_OWN_images_DB_shortcode');

?>