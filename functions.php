<?php

/******************************************************************************
 *                                 theme                                      *
 *****************************************************************************/
 
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
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts', 99 );

/******************************************************************************
 *                          Image Credit                                      *
 *****************************************************************************/

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

/******************************************************************************
 *                          German Arrows                                     *
 *****************************************************************************/

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
 
/******************************************************************************
 *                          Image Caption                                     *
 *****************************************************************************/
 
function get_a2($a_text, $hrf, $title = null)
{
	if ( ! $title ) 
		$title = $a_text;
	$result = '<a title="' . $title . '" href="' . $hrf . '" target="_blank">' . $a_text . '</a>';
	return $result;
}
 
function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf/*, $author_name, $author_hrf*/)
{
	if ( $height ) 
		$height = ' height="' . (int) $height . '" ';
	$table_width = 'width="' . (10 + (int) $width) . 'px" ';
	$image_width = ' width="' . (int) $width . 'px" ';
	$caption_no_br = str_replace(array('<br />','<br/>','<br>'), '', $caption);
	$hrf = '"' . $hrf  . '" ';
	
	/*$source = '';
	if ($source_hrf && $source_title)
		$source = get_a2($source_title, $source_hrf);
	if ($source_hrf && (!$source_title))
		$source = get_a2('this page', $source_hrf);
	if ((!$source_hrf) && $source_title)
		$source = $source_title;
	
	$author = '';
	if ($author_hrf && $author_name)
		$author = get_a2($author_name, $author_hrf);
	if ($author_hrf && (!$author_name))
		$author = get_a2('this author', $source_hrf);
	if ((!$author_hrf) && $author_name)
		$author = $author_name;
	
	$source_and_author = '';
	if ($source && $author_name)
		$source_and_author = $source . ' via ' . $author;
	if ($source && (!$author))
		$source_and_author = $source;
	if ((!$source) && $author)
		$source_and_author = $author;
	
	if ($source_and_author)
		$source_and_author = 'Image credit: ' . $source_and_author . '';
	else
		$source_and_author = $source_hrf . 'm' . $source_title . 'm' . $author_hrf . 'm' . $author_name;*/
	
	$alt = ' alt="' . $caption_no_br . '" ';
	$alt2 = ' caption="' . $caption_no_br . '" sourcename="' . $sourcename . '" sourcehrf="' . $sourcehrf . '" ';
	
	
	/* '<li>' . $title . ': <a title="' . $title . '" href="' . $hrf . '" target="_blank">' . $hrf . '</a></li>'; class="magnific-image" */

	return '<div max' . $table_width . ' ' . $table_width . ' class="center"> ' 
	. '<a class="magnific-image" href=' . $hrf . ' title="' . $caption_no_br . '" >'
	. '<img style="padding: 0px 5px;" src=' . $hrf . $alt . $alt2. $image_width . $height . '/></a>' 
	. '<div style="padding: 0px 10px 10px 10px;" class="wp-caption-text">' . $caption . '</div>'
	. '</div>';
}
 
add_shortcode('yu_caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * The Caption shortcode equivalent.
 * The supported attributes for the shortcode are 'height', 'width', 
 * 'caption', 'source_hrf', 'source_title', 'author' and 'author_hrf'.
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
		'sourcename' => '', 
		'sourcehrf' => ''/*, 
		'author_name' => '',
		'author_hrf' => ''*/
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, $sourcename, $sourcehrf/*, $source_title, $author, $author_hrf */ );
	
	return $result;
	
}

?>
