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

add_shortcode('wp_caption', 'MY_VERY_OWN_img_caption_shortcode');
add_shortcode('caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * The Caption shortcode.
 *
 * Allows a plugin to replace the content that would otherwise be returned. The
 * filter is 'img_caption_shortcode' and passes an empty string, the attr
 * parameter and the content parameter values.
 *
 * The supported attributes for the shortcode are 'id', 'align', 'width', and
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
		'width'	=> '',
		'caption' => ''
	), $attr));

	return '<table width="' . (10 + (int) $width) . '"> <tr> <td> '
	. do_shortcode( $content ) . '</td></tr><tr> <td> <p class="wp-caption-text">' . $caption . '</p></td></tr></table>';
}

?>