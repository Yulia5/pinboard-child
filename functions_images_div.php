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

function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name, 
                                $srcset, $style, $class, $no_image)
{    
    $caption_no_br = preg_replace("/<br\W*?\/>/", "\n", $caption);

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
    $hrf = '"' . $hrf . '" ';
    
    $invisible_a_to_check_broken_links = ' <a href=' . $hrf . ' style="display:none">Invisible, to help broken links check</a>';                           
    	
    $img_attr = 'style="';
    if ( $no_image ) {
        $img_attr = $img_attr . ' display:none;';            
    } else {
        if ( $style ) {
            $img_attr = $img_attr . $style . ';';
        }
       	if ( $height ) {
    		$img_attr = $img_attr . ' max-height: ' . (int) $height . 'px;';
    	}
    	if ( $width ) {
    		$img_attr = $img_attr . ' max-width:' . (int) $width . 'px;';
    	}
    }
	$img_attr = $img_attr . '" ';
    
    if ( $class ) {
        $img_attr = $img_attr . ' class="' . $class . '"';
    }
    
    if (! is_empty_string2($caption_no_br)) {
        $img_attr = $img_attr . ' alt="' . $caption_no_br . '" caption="' . $caption_no_br . '"';
    }
    if (! is_empty_string2($sourcename)) {
        $img_attr = $img_attr . ' sourcename="' . $sourcename . '"';
    }
    if (! is_empty_string2($sourcehrf)) {
        $img_attr = $img_attr . ' sourcehrf="' . $sourcehrf . '"';
        $invisible_a_to_check_broken_links = $invisible_a_to_check_broken_links 
            . ' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
    }    
    if (! is_empty_string2($srcset)) {
        $img_attr = $img_attr . ' srcset="' . $srcset . '"';
    }
     
	if ( $comp ) {
		$caption = 'COMPARANDUM: ' . $caption;
    }
    /*
    if ( $no_image ) {
        $result_no_image = MY_VERY_OWN_link($sourcehrf, $caption_no_br); 
        return $result_no_image;
    }*/
    
    $result_image = '<div class="outside_image"> ' 
                    . '<img '. $img_attr . 'src=' . $hrf . ' />' 
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
        'no_image' => '' 
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
                    $comp, $folder_name, $image_info_from_DB->srcset, $style, $class, $no_image);    
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
        'flushright' => '' 
        'flushleft' => '' 
    ), $attr));

    $style = "";
    if (!! $imgheight) {
        $style = ' imgheight = "' . $imgheight . '"'. $style;
    }
    if (!! $imgwidth) {
        $style = ' imgwidth = "' . $imgwidth . '"'. $style;
    }
    
    $content = preg_replace("/<br\W*?\/>/", "\n", $content); // for convenience, not treating <br>'s as a special case in regex
    $result = preg_replace_callback('/[^\s\r\t\n]+?(?=\s|\r|\t|\n|$)/s', 'add_db_images', $content);
    $result = str_replace("\n", "<br/>", $result); // adding <br>'s back
    
    // adding div's
    $result =  $style . '>' . $result . "</div>";  
    if (!! $flushright) {
        $result = '<p style="clear:right"></p><div class="images_right" ' . $result;
    } elseif (!! $flushleft) {
        $result = '<p style="clear:left"></p><div class="images_left" ' . $result;
    } else {
    	$result = '<div class="images_center" ' . $result;
    }  

    return $result;
}
add_shortcode('yu_images_DB', 'MY_VERY_OWN_images_DB_shortcode');

?>