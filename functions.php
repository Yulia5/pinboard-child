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
    wp_enqueue_script('aux_script', get_stylesheet_directory_uri().'/jquery.js', array('jquery'));
		
	/* child theme style */
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
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
    locate_template( array( 'functions_post_specific.php' ), true, true );
}
add_action( 'after_setup_theme', 'pinboard_child_theme_setup', 11);

/******************************************************************************
 *                             General Purpose                                *
 *****************************************************************************/

// source: https://www.codepicky.com/wordpress-table-of-contents/
function yu_generate_one_TOC($content) {

    $start_text = strpos($content[0], '}') + 1;

	$hasTitle = preg_match('/\{yu_TOC title=("|&#8221;)(.*?)\1\s*\}/', $content[0], $matchedTitle);
    $toc_title = ($hasTitle) ? $matchedTitle[2] : 'Table Of Contents';
	$id_title = sanitize_title($toc_title);

    $index = 1;
	$tableOfContents = "";
	$old_level = 0;
	$maybe_button = "";
	// Insert the IDs and create the TOC.
    $content = preg_replace_callback('#<(h[1-9])(.*?)>(.*?)</\1>#si', function ($matches) use (&$index, &$tableOfContents, &$old_level, &$id_title, &$toc_title, &$maybe_button) {
        $tag = $matches[1];
        $toc_entry_title = strip_tags($matches[3]);
        $hasId = preg_match('#id=("|&#8221;)(.*?)\1[\s>]#si', $matches[2], $matchedIds);
		$id = $hasId ? $matchedIds[2] : ($id_title . '-' . $index++ . '-' . sanitize_title($toc_entry_title));

        $new_level = intval($tag[1]);
        
        $tableOfContents_entry = "<div class='item-$tag' id='toc_item_$id'><a href='#$id'>$toc_entry_title</a>";
        if ($new_level > $old_level) { // $new_level = $old_level + 1
        	// adding a button + other html from the previous iteration
        	$tableOfContents .= $maybe_button . $tableOfContents_entry;
		} else {
        	for ($x = $new_level; $x < $old_level; $x++) {
     			$tableOfContents_entry = "</div>" . $tableOfContents_entry;
		 	}
		 	$tableOfContents .= "</div>" . $tableOfContents_entry;	
		}    
        	
        // creating html in case it is needed at the next iteration
        $maybe_button = '<input class="toc_button" id="button_toc_' . $id . '"  type="button" value="+" /></div><div class="div_toc_initial" id="div_button_toc_' . $id . '">';
        
        $old_level = $new_level;

        return "<$tag $matches[2] id='$id'>$matches[3]</$tag><a href='#toc_item_$id'>↑ Back To $toc_title ↑</a>";
     }, $content);

    // make sure all divs are closed
    $nb_opening_divs = preg_match_all('/<div(.*?)>/i', $tableOfContents, $matches);
    $nb_closing_divs = preg_match_all('/<\/div>/i', $tableOfContents, $matches);
    for ($x = $nb_closing_divs; $x < $nb_opening_divs; $x++) {
     	$tableOfContents .= "</div>";
	}
	
    $result = "<h1><a id='$id_title'>$toc_title</a></h1>" . '<div>' . $tableOfContents . '</div>' . trim(substr($content[0], $start_text)); 
    return $result;
}

function yu_generate_TOCs($content) {
	$result = preg_replace_callback('/\{yu_TOC.*?(?=\})\}.+?(?=\{yu_TOC|$)/s', 'yu_generate_one_TOC', $content);
    return $result;
}
add_filter('the_content', 'yu_generate_TOCs');

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

/**
 * MY_VERY_OWN_quote
 */
function MY_VERY_OWN_quote($attr, $content = null) {

    extract(shortcode_atts(array(
        'url' => '',
        'text' => '',
        'author' => ''
    ), $attr));
      
    $result = '<div style="max-width: 50%; text-align: right; float: right;"><blockquote cite="' . $url . '">' . $text . '</blockquote><p style="font-size: smaller;">' . $author . '</p></div>';
    
    return $result;
}
add_shortcode('yu_quote', 'MY_VERY_OWN_quote');
?>
