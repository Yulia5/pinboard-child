<?php

function enqueue_styles_and_scripts() {
	
	/* general */
	wp_enqueue_style( 'add_google_fonts', 'https://fonts.googleapis.com/css?family=Permanent Marker', false );

	/* dequeue */
	$to_remove_style = 'pinboard';
	wp_dequeue_style( $to_remove_style );
    wp_deregister_style( $to_remove_style );
	
	/* parent theme */
	$parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );	
		
	/* child theme */
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css',
                      array( $parent_style ),
                      wp_get_theme()->get('Version') );
	wp_enqueue_script('aux_script', get_stylesheet_directory_uri().'/jquery.js', array('jquery'));
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
    
    /* include php files */
    $php_file_names = array('functions_common', 'functions_images_div', 'functions_images_database', 
                              'functions_images_data', 'functions_post_specific', 'functions_links');
    foreach ($php_file_names as $php_file_name) {
        locate_template( array( $php_file_name . '.php' ), true, true );
    }
}
add_action( 'after_setup_theme', 'pinboard_child_theme_setup', 11);
add_filter( 'big_image_size_threshold', '__return_false' );
/******************************************************************************
 *                         Table Of Contents                                  *
 *****************************************************************************/

// source: https://www.codepicky.com/wordpress-table-of-contents/
function yu_generate_one_TOC($content) {

    $start_text = strpos($content[0], '}') + 1;

	$hasTitle = preg_match('/\{yu_TOC title=("|&#8221;)(.*?)\1\s*\}/', $content[0], $matchedTitle);
    $toc_title = ($hasTitle) ? $matchedTitle[2] : 'Table Of Contents';
	$id_title = sanitize_title($toc_title);

    $indices = array(0, 0, 0, 0, 0, 0, 0, 0, 0);
	$tableOfContents = "";
	$old_level = 0;
	$maybe_button = "";
	// Insert the IDs and create the TOC.
    $content = preg_replace_callback('#<(h[1-9])(.*?)>(.*?)</\1>#si', function ($matches) use (&$indices, &$tableOfContents, &$old_level, &$id_title, &$toc_title, &$maybe_button) {
        $tag = $matches[1];
        $toc_entry_title = strip_tags($matches[3]);

        $new_level = intval($tag[1]);
        $indices[$new_level - 1]++;
        for ($l = $new_level; $l < 9; $l++) {
    		$indices[$l] = 0;
		}
		$id_candidate = $id_title . '-' ;
        for ($l = 0; $l < $new_level; $l++) {
    		$id_candidate .= strval($indices[$l]) . '-' ;
		}
		$id_candidate .= sanitize_title($toc_entry_title);

        $hasId = preg_match('#id=("|&#8221;)(.*?)\1[\s>]#si', $matches[2], $matchedIds);
		$id = $hasId ? $matchedIds[2] : $id_candidate;
        
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

/******************************************************************************
 *                             Formatting                                     *
 *****************************************************************************/

/**
 * MY_VERY_OWN_clearfloats
 */
function MY_VERY_OWN_clearfloats($attr, $content = null) {
	
	$result = '<p class="clearfloats"></p>';	
	return $result;
}
add_shortcode('yu_clearfloats', 'MY_VERY_OWN_clearfloats');

/**
 * MY_VERY_OWN_clear
 */
function MY_VERY_OWN_clear($attr, $content = null) {

	$result = '<p class="p_clear"></p>';	
	return $result;
}
add_shortcode('yu_clear', 'MY_VERY_OWN_clear');

/**
 * MY_VERY_OWN_quote
 */
function MY_VERY_OWN_quote($attr, $content = null) {

    extract(shortcode_atts(array(
        'url' => '',
        'text' => '',
        'author' => ''
    ), $attr));
      
    $result = '<div class="yu_quote"><blockquote cite="' . $url . '">' . $text . '</blockquote><p class="yu_p_quote">' . $author . '</p></div>';
    
    return $result;
}
add_shortcode('yu_quote', 'MY_VERY_OWN_quote');

?>
