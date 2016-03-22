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

add_shortcode('yu_caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * The Caption shortcode.
 *
 * Allows a plugin to replace the content that would otherwise be returned. The
 * filter is 'img_caption_shortcode' and passes an empty string, the attr
 * parameter and the content parameter values.
 *
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
	. '"> <p class="wp-caption-text">' . $caption . '</p></td></tr></table>';
}

?>