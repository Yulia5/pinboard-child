<?php

/* theme */
function enqueue_styles_and_scripts() {
	
	/* prevent jetpack from adding "scale" */
	wp_dequeue_script( 'devicepx' );
	
	
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
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts', 99 );


add_shortcode('li_image_credit', 'li_image_credit_shortcode');

/**
 * Arrow down for Germany post shortcut.
 * The supported attributes for the shortcode are 'title' and 'hrf'.
 *
 * @since 2.6.0
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional. Shortcode content.
 * @return string
 */
function li_image_credit_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'title' => '',
		'hrf' => ''
	), $attr));	
 
	return '<li>' . $title . ': <a title="' . $title . '" href="' . $hrf . '" target="_blank">' . $hrf . '</a></li>';
}

add_shortcode('DE_arrowD', 'DE_arrowD_shortcode');

/**
 * Arrow down for Germany post shortcut.
 * The supported attributes for the shortcode are 'halign' and
 * 'valign'.
 *
 * @since 2.6.0
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional, ignored. Shortcode content.
 * @return string
 */
function DE_arrowD_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'halign' => 'right',
		'valign' => 'top'
	), $attr));	
 
	return '<img style="clear:both; align' . $halign 
	. '" src="http://www.yu51a5.com/wp-content/uploads/2015/01/arrowd.png" alt="" width="92" height="100" />';
}

add_shortcode('DE_arrow', 'DE_arrow_shortcode');

/**
 * Arrows LR for Germany post shortcut.
 * The supported attributes for the shortcode are
 * 'valign' and 'dir'.
 *
 * @since 2.6.0
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional, ignored. Shortcode content.
 * @return string
 */
function DE_arrow_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'valign' => 'top',
		'dir' => ''
	), $attr));
	
	return '<img style="clear:both; vertical-align: ' . $valign 
	. '" src="http://www.yu51a5.com/wp-content/uploads/2016/03/arrow' . $dir . '.png" alt="" width="100" />';
}
 
add_shortcode('yu_caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * The Caption shortcode equivalent.
 * The supported attributes for the shortcode are 'height', 'width', 
 * 'caption', 'source_hfr', 'source_title', 'author' and 'author_hrf'.
 *
 * @since 2.6.0
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional. Shortcode content.
 * @return string
 */
function MY_VERY_OWN_img_caption_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'source_hfr' => '', 
		'source_title' => '', 
		'author' => '',
		'author_hrf' => ''
	), $attr));

	if ( $height ) $height = ' height="' . (int) $height . '" ';
	$table_width = ' width="' . (10 + (int) $width) . 'px" ';
	$image_width = ' width="' . (int) $width . 'px" ';
	$alt = ' alt="' . str_replace(array('<br />','<br/>','<br>'), '', $caption) . '" ';
	$hrf = '"' . $content  . '" ';
	
	/* '<li>' . $title . ': <a title="' . $title . '" href="' . $hrf . '" target="_blank">' . $hrf . '</a></li>'; class="magnific-image" */

	return '<table' . $table_width . '> ' 
	. '<tr><td' . $table_width . '><a class="magnific-image" href=' . $hrf . ' title="' . $caption . '. Source: .">'
	. '<img src=' . $hrf . $alt . $image_width . $height . '/></a></td></tr>' 
	. '<tr><td' . $table_width . '><div style="padding: 0px 10px 10px 10px;" class="wp-caption-text">' . $caption . '</div></td></tr>'
	. '</table>';
}

?>
