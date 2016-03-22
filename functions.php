<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

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
 * The supported attributes for the shortcode are 'height', 'width', and
 * 'caption'.
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
		'caption' => ''
	), $attr));

	if ( $height ) $height = 'height="' . (int) $height . '" ';

	return '<table width="' . (10 + (int) $width) . '"> <tr> <td width="' . (10 + (int) $width) . '"> <a href="'
	. $content . '"><img src="' . $content . '" alt=" ' . str_replace(array('<br />','<br/>','<br>'), '', $caption) . ' " width="' . (int) $width . '" ' . $height 
	. ' /></a> </td></tr><tr> <td width="' . (10 + (int) $width)
	. '"> <div style="padding: 0px 10px 10px 10px;" class="wp-caption-text">' . $caption . '</div></td></tr></table>';
}

?>