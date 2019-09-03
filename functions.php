<?php

/******************************************************************************
 *                                 theme                                      *
 *****************************************************************************/
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
} 
 
function enqueue_styles_and_scripts() {
	
	/* prevent jetpack from adding "scale" 
	wp_dequeue_script( 'devicepx' );*/
	
	/* parent theme style */
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	
	/* Magnific popup - http://dimsemenov.com/plugins/magnific-popup/ */
    $magnific_style = 'magnific-style';
    wp_enqueue_style($magnific_style, get_stylesheet_directory_uri().'/magnific-popup/magnific-popup.css', array($parent_style));
    wp_enqueue_script('magnific_popup_script', get_stylesheet_directory_uri().'/magnific-popup/jquery.magnific-popup.min.js', array('jquery'));
    wp_enqueue_script('magnific_popup_script_custom', get_stylesheet_directory_uri().'/magnific-popup/jquery.magnific-popup-custom.js', array('jquery'));
		
	/* child theme style */
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $magnific_style ) );
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css?family=Permanent Marker', false );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts', 999);


/**
 * Remove standard image sizes so that these sizes are not
 * created during the Media Upload process
 *
 * https://developer.wordpress.org/reference/functions/remove_image_size/
 */
function pinboard_child_theme_setup() {
    
    /* remove all pre-existing image sizes */   
    $image_size_names = array('thumbnail', 'medium', 'large', 'slider-thumb', 'blog-thumb', 'teaser-thumb', 
                              'gallery-1-thumb', 'gallery-2-thumb', 'gallery-3-thumb', 'image-thumb', 'video-thumb');
    foreach ($image_size_names as $image_size_name) {
        remove_image_size($image_size_name);
    }
    
    /* add image sizes adapted to the most frequently encountered cases - resizing by height */
    $image_heights = [150, 180, 200, 220, 250, 300, 400];   
    foreach ($image_heights as $image_height) {
        add_image_size( 'h' . strval($image_height), 9999, $image_height);
    }
    add_image_size( 'w700', 700);
    add_image_size( 'w500', 500);
    
    /* include image-related collection of functions */
    locate_template( array( 'functions_images.php' ), true, true );
    locate_template( array( 'functions_images_data.php' ), true, true );
}
add_action( 'after_setup_theme', 'pinboard_child_theme_setup', 11);

/******************************************************************************
 *        Lines (old English and modern English) for Romeo and Juliet         *
 *****************************************************************************/

/**
 * The shortcode for OM_Text.
 *
 * @return string
 */
function MY_VERY_OWN_OM_Text($attr, $content = null) {

	$result = '<div style="display: flex; padding: 0px;"><div class="oldEnglish"><b><font color="gray">ORIGINAL TEXT</font></b></div><div class="newEnglish"><b><font color="gray">MODERN TEXT</font></b></div></div>';	
	return $result;
}
add_shortcode('om_text', 'MY_VERY_OWN_OM_Text'); 
  
function generate_RJ_lines($hrf, $character, $directions)
{
	
	$separator_line = strpos($hrf, '|');
	$line_old = substr($hrf, 0, $separator_line);
	$line_new = substr($hrf, $separator_line+1);
	
	if ( strlen($directions) > 0 ) {
		$separator_dir = strpos($directions, '|');
		$dir_old = substr($directions, 0, $separator_dir);
		$dir_new = substr($directions, $separator_dir + 1);
		$line_old = '<i>(' . $dir_old . ')</i> ' . $line_old;
		$line_new = '<i>(' . $dir_new . ')</i> ' . $line_new;
	}
		
	$character = '<b>' . strtoupper($character) . '</b><br>';

	return '<div style="display: flex; padding: 0px;"><div class="oldEnglish">' . $character . $line_old . '</div><div class="newEnglish">' . $character . $line_new . '</div></div>';
}

/**
 * The shortcode for R lines.
 * The supported attribute for the shortcode is 'directions' (optional).
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional. Shortcode content.
 * @return string
 */
function MY_VERY_OWN_R_lines($attr, $content = null) {

	extract(shortcode_atts(array(
		'directions' => ''
	), $attr));

	$result = generate_RJ_lines($content, 'Romeo', $directions);	
	return $result;
}
add_shortcode('r_lines', 'MY_VERY_OWN_R_lines');

/**
 * The shortcode for J lines.
 * The supported attribute for the shortcode is 'directions' (optional).
 */
function MY_VERY_OWN_J_lines($attr, $content = null) {

	extract(shortcode_atts(array(
		'directions' => ''
	), $attr));

	$result = generate_RJ_lines($content, 'Juliet', $directions);	
	return $result;
}
add_shortcode('j_lines', 'MY_VERY_OWN_J_lines');

/**
 * The recept generator
 */
function replace_br($content) {
	//$result = preg_replace('<br\W*?\/>*$','', $content);
	$result = preg_replace("/<br\W*?\/>/", ";</li><li>", trim($content));
	//remove ";</li><li>|" at the end of the line
	$result = $result . '|';
	$result = str_replace(";</li><li>|", "", $result);
	$result = str_replace("|", "", $result);
	return $result;
}

function MY_VERY_OWN_recept($attr, $content = null) {

	extract(shortcode_atts(array(
		'last_section' => ''
	), $attr));

	$result = "";

	$recept_parts = preg_replace("/\|<br\W*?\/>/", "|", $content);
	$recept_parts = preg_replace("/#<br\W*?\/>/", "#", $recept_parts);
	$recept_parts = preg_replace("/<br\W*?\/>\|/", "|", $recept_parts);
	$recept_parts = preg_replace("/<br\W*?\/>#/", "#", $recept_parts);
	$recept_parts = explode ('|', $recept_parts);	

	if (!! $recept_parts[0]) {
		$result = $result . do_shortcode("[yu_images_DB flushright='1']" . $recept_parts[0] . '[/yu_images_DB]');
	}
	if (!! $recept_parts[1]) {
		$result = $result . '<h4>Utensils</h4><ul class="utensils_ul"><li>' . replace_br($recept_parts[1]) . '.</li></ul>';
	}
	if (!! $recept_parts[2]) {
		$ingredients_parts = explode ('#', $recept_parts[2]);
		$result = $result . '<h4>Ingredients</h4>';
		if (!! $ingredients_parts[0]) {
			$result = $result . '<ul class="ingredients_ul"><li>' . replace_br($ingredients_parts[0]) . '.</li></ul>';
		}
		if (!! $ingredients_parts[1]) {
			$result = $result . '<ul class="spices_ul"><li>' . replace_br($ingredients_parts[1]) . '.</li></ul>';
		}
		if (!! $ingredients_parts[2]) {
			$result = $result . '<ul class="to_serve_ul"><li>' . replace_br($ingredients_parts[2]) . '.</li></ul>';
		}
	}
	if (!! $recept_parts[3]) {
		$result = $result . '<h4>Directions</h4><ol class="directions_ol"><li>' . replace_br($recept_parts[3]) . '.</li></ol>';
	}
	if (!! $recept_parts[4]) {
		$result = $result . '<h4>' . $last_section . '</h4><ul class="to_try"><li>' . replace_br($recept_parts[4]) . '.</li></ul>';
	}
/**/
	return $result;
}
add_shortcode('yu_recept', 'MY_VERY_OWN_recept');

/**
 * MY_VERY_OWN_h
 */
function MY_VERY_OWN_h($attr, $content = null) {

	extract(shortcode_atts(array(
		'a' => ''
	), $attr));
	
	$result = '<h1><a name="' . $a . '"><span style="font-weight:normal;">' . $content . '</span></a></h1>';	
	return $result;
}
add_shortcode('yu_h', 'MY_VERY_OWN_h');

/**
 * MY_VERY_OWN_clearfloats
 */
function MY_VERY_OWN_clearfloats($attr, $content = null) {
	
	$result = '<p class="clearfloats"></p>';	
	return $result;
}
add_shortcode('yu_clearfloats', 'MY_VERY_OWN_clearfloats');

/**
 * MY_VERY_OWN_wiki_link
 */
function MY_VERY_OWN_wiki_link($attr, $content = null) {

	extract(shortcode_atts(array(
		'text' => '',
		'wikilink'	=> '',
		'title' => '',
		'language' => ''
	), $attr));
	
	if ( ! $wikilink ) {
		$wikilink = $text;
	}
	if ( ! $title ) {
		$title = $text;
	}
	if ( ! $language ) {
		$language = 'en';
	}	
	$result = '<a title="' . $title . '" href="http://' . $language . '.wikipedia.org/wiki/' . $wikilink . '" target="_blank">' . $text . '</a>';	
	return $result;
}
add_shortcode('yu_wiki', 'MY_VERY_OWN_wiki_link');

/**
 * MY_VERY_OWN_instagram_link
 */
function MY_VERY_OWN_instagram_link($attr, $content = null) {

	extract(shortcode_atts(array(
		'account' => '',
		'title' => ''
	), $attr));
	
	if ( ! $title ) {
		$title = $account;
	}
	$result = '<a title="@' . $title . '" href="https://www.instagram.com/' . $account . '" target="_blank" rel="noopener noreferrer">@' . $account . '</a>';	
	return $result;
}
add_shortcode('yu_insta', 'MY_VERY_OWN_instagram_link');

/**
 * MY_VERY_OWN_book
 */
function MY_VERY_OWN_book($attr, $content = null) {

	extract(shortcode_atts(array(
		'id' => '',
		'text' => '',
		'title' => ''
	), $attr));
	
	if ( ! $title ) {
		$title = $text;
	}

	$result = '<a title="' . $title . '" href="https://www.worldcat.org/oclc/' . $id . '" target="_blank" rel="noopener noreferrer">' . $text . '</a>';	
	return $result;
}
add_shortcode('yu_book', 'MY_VERY_OWN_book');

/**
 * MY_VERY_OWN_clear
 */
function MY_VERY_OWN_clear($attr, $content = null) {

	$result = '<p class="p_clear"></p>';	
	return $result;
}
add_shortcode('yu_clear', 'MY_VERY_OWN_clear');

/**
 * [yu_tube title = "" imdb_id = "" youtube_id = "" start = ""]
 */
function MY_VERY_OWN_youtube($attr, $content = null) {

	extract(shortcode_atts(array(
		'title' => '',
		'imdb_id' => '',
		'youtube_id' => '',
		'start' => '',
		'width' => '',
		'caption' => ''
	), $attr));
	
	$youtube_shortcode = '[youtube https://www.youtube.com/watch?v=' . $youtube_id . '&start=' . $start . ']';	
	
	if ( $imdb_id )
		$before_video = '<a title="' . $title . '" href="http://www.imdb.com/title/' . $imdb_id . '/" target="_blank">"' . $title . '"</a>';
	else
		$before_video = $title;

	if ( $caption )
		$yu_caption = '

	<div class="yu_tube_caption"><em>' . $caption . '</em></div>';  /**/
	else
		$yu_caption = '';

	if ( $width )
		$yu_width = ' style="width:' . $width . '"';
	else
		$yu_width = '';
		
	$result = $before_video . ':<br><div class="yu_tube_outside"><div class="yu_tube_inside"' . $yu_width . '> ' 
                                       . do_shortcode($youtube_shortcode) . ' </div>' . $yu_caption . '</div>';

	return $result;
}

add_shortcode('yu_tube', 'MY_VERY_OWN_youtube');

/**
 * [yu_amazon title = "" id = ""]
 */
function MY_VERY_OWN_amazon($attr, $content = null) {

	extract(shortcode_atts(array(
		'title' => '',
		'id' => ''
	), $attr));
	
	$result = '<a title="' . $title . '" href="https://www.amazon.co.uk/dp/' . $id . '" target="_blank">"' . $title . '"</a>';
	return $result;
}
add_shortcode('yu_amazon', 'MY_VERY_OWN_amazon');

/**
 * MY_VERY_OWN_self_link
 */
function MY_VERY_OWN_self_link($attr, $content = null) {

    extract(shortcode_atts(array(
        'text' => '',
        'post' => ''
    ), $attr));
      
    $result = '<a title="' . $text . '" href="http://www.yu51a5.com/' . $post . '" target="_blank">' . $text . '</a>';   
    return $result;
}
add_shortcode('yu_self', 'MY_VERY_OWN_self_link');

/**
 * MY_VERY_OWN_academia_link
 */
function MY_VERY_OWN_academia_link($attr, $content = null) {

    extract(shortcode_atts(array(
        'title' => '',
        'text' => '',
        'id' => ''
    ), $attr));
      
    if ( ! $title ) {
        $title = $text;
    }
    
    $result = '<a title="' . $title . '" href="https://www.academia.edu/' . $id . '" target="_blank">' . $text . '</a>';   
    return $result;
}
add_shortcode('yu_acad', 'MY_VERY_OWN_academia_link');

?>
