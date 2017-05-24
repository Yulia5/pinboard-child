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
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles_and_scripts', 999);

/******************************************************************************
 *                          German Arrows                                     *
 *****************************************************************************/

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
 *
 * @param array $attr Attributes attributed to the shortcode.
 * @param string $content Optional. Shortcode content.
 * @return string
 */
function MY_VERY_OWN_J_lines($attr, $content = null) {

	extract(shortcode_atts(array(
		'directions' => ''
	), $attr));

	$result = generate_RJ_lines($content, 'Juliet', $directions);	
	return $result;
}
add_shortcode('j_lines', 'MY_VERY_OWN_J_lines');
 
/******************************************************************************
 *                          Image Caption                                     *
 *****************************************************************************/
 
function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf)
{
	if ((! $width ) && (! $height ))
		$height = 200;
	
	$img_style = 'style="';
	$div_style = 'style="';

	if ( $height ) {
		$img_style = $img_style . ' height: ' . (int) $height . 'px ';
	}
	if ( $width ) {
		$img_style = $img_style . ' width:' . (int) $width . 'px ';
		$div_width = 'width:' . (10 + (int) $width) . 'px; ';
		$div_style = $div_style. $div_width . ' max-' . $div_width;
	}
	$div_style = $div_style . '" ';
	$img_style = $img_style . '" ';
	
	if ((!$height) && (!$width)) {
		$div_style = '';
		$img_style = '';		
	}
	
	$caption_no_br = str_replace(array('<br />','<br/>','<br>'), '', $caption);
	$hrf = '"' . $hrf  . '" ';
	
	$alt = ' alt="' . $caption_no_br . '" ';
	$alt2 = ' caption="' . $caption_no_br . '" sourcename="' . $sourcename . '" sourcehrf="' . $sourcehrf . '" ';
	
	if ( $sourcehrf )
		$invisible_a_to_check_broken_links = ' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
	else
		$invisible_a_to_check_broken_links = '';

	return '<div ' . $div_style . ' class="outside_image"> ' 
	. '<a class="magnific-image" href=' . $hrf . ' title="' . $caption_no_br . '" >'
	. '<img '. $img_style . 'src=' . $hrf . $alt . $alt2. '/></a>' 
	. '<div class="wp-caption-text">' . $caption . '</div>'
	. $invisible_a_to_check_broken_links . '</div>';
}

/**
 * The Caption shortcode equivalent.
 * The supported attributes for the shortcode are 'height', 'width', 
 * 'caption', 'sourcename' and 'sourcehrf'.
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
		'sourcehrf' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, $sourcename, $sourcehrf);	
	return $result;
}
add_shortcode('yu_caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * yu_caption_wiki
 */
function MY_VERY_OWN_img_caption_shortcode_wiki($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'filename' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Wikipedia Commons', 'https://commons.wikimedia.org/wiki/File:' . $filename);	
	return $result;
}
add_shortcode('yu_caption_wiki', 'MY_VERY_OWN_img_caption_shortcode_wiki');

/**
 * yu_caption_RC
 */
function MY_VERY_OWN_img_caption_shortcode_RC($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'The Royal Collection', 'https://www.royalcollection.org.uk/collection/' . $id);	
	return $result;
}
add_shortcode('yu_caption_RC', 'MY_VERY_OWN_img_caption_shortcode_RC');

/**
 * yu_caption_Met
 */
function MY_VERY_OWN_img_caption_shortcode_Met($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'The Metropolitan Museum of Art', 'http://www.metmuseum.org/art/collection/search/' . $id);	
	return $result;
}
add_shortcode('yu_caption_Met', 'MY_VERY_OWN_img_caption_shortcode_Met');

/**
 * yu_caption_ArtUK
 */
function MY_VERY_OWN_img_caption_shortcode_ArtUK($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Art UK', 'http://artuk.org/discover/artworks/' . $id);	
	return $result;
}
add_shortcode('yu_caption_ArtUK', 'MY_VERY_OWN_img_caption_shortcode_ArtUK');

/**
 * yu_caption_SDK
 */
function MY_VERY_OWN_img_caption_shortcode_SDK($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, '© Staatliche Kunstsammlungen Dresden',
                                   'http://skd-online-collection.skd.museum/en/contents/showSearch?id=' . $id);	
	return $result;
}
add_shortcode('yu_caption_SDK', 'MY_VERY_OWN_img_caption_shortcode_SDK');

 /**
 * yu_caption_BM
 */
function MY_VERY_OWN_img_caption_shortcode_BM($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, '© Trustees of the British Museum', 
									'http://www.britishmuseum.org/research/collection_online/collection_object_details.aspx?objectId=' . $id . '&partId=1');	
	return $result;
}
add_shortcode('yu_caption_BM', 'MY_VERY_OWN_img_caption_shortcode_BM');

 /**
 * yu_caption_LA
 */
function MY_VERY_OWN_img_caption_shortcode_LA($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'The Los Angeles County Museum of Art', 
									'http://collections.lacma.org/node/' . $id);	
	return $result;
}
add_shortcode('yu_caption_LA', 'MY_VERY_OWN_img_caption_shortcode_LA');


/**
 * yu_caption_Getty
 */
function MY_VERY_OWN_img_caption_shortcode_Getty($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'The J. Paul Getty Museum Open Contents Program', 
									'http://www.getty.edu/art/collection/objects/' . $id);	
	return $result;
}
add_shortcode('yu_caption_Getty', 'MY_VERY_OWN_img_caption_shortcode_Getty');


/**
 * yu_caption_MFA
 */
function MY_VERY_OWN_img_caption_shortcode_MFA($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Museum of Fine Arts, Boston', 
									'http://www.mfa.org/collections/object/' . $id);	
	return $result;
}
add_shortcode('yu_caption_MFA', 'MY_VERY_OWN_img_caption_shortcode_MFA');


/**
 * yu_caption_WAM  
 */
function MY_VERY_OWN_img_caption_shortcode_WAM($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'The Walters Art Museum', 
									'http://art.thewalters.org/detail/' . $id);	
	return $result;
}
add_shortcode('yu_caption_WAM', 'MY_VERY_OWN_img_caption_shortcode_WAM');

/**
 * yu_caption_KHM  
 */
function MY_VERY_OWN_img_caption_shortcode_KHM($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Kunsthistorisches Museum Vienna', 
									'https://www.khm.at/objektdb/detail/' . $id);
	return $result;
}
add_shortcode('yu_caption_KHM', 'MY_VERY_OWN_img_caption_shortcode_KHM');

/**
 * yu_caption_HAM  
 */
function MY_VERY_OWN_img_caption_shortcode_HAM($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Harvard Art Museums', 
									'http://www.harvardartmuseums.org/collections/object/' . $id);
	return $result;
}
add_shortcode('yu_caption_HAM', 'MY_VERY_OWN_img_caption_shortcode_HAM');

/**
 * yu_caption_CBd  
 */
function MY_VERY_OWN_img_caption_shortcode_CBd($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Campbell Bonner Magical Gems Database (CBd)', 
									'http://www2.szepmuveszeti.hu/talismans/cbd/' . $id);
	return $result;
}
add_shortcode('yu_caption_CBd', 'MY_VERY_OWN_img_caption_shortcode_CBd');


/**
 * yu_caption_RMN  
 */
function MY_VERY_OWN_img_caption_shortcode_RMN($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, 'Réunion des Musées Nationaux - Grand Palais', 
									'http://www.photo.rmn.fr/archive/' . $id . '.html');	
	return $result;
}
add_shortcode('yu_caption_RMN', 'MY_VERY_OWN_img_caption_shortcode_RMN');

/**
 * yu_caption_HM  
 */
function MY_VERY_OWN_img_caption_shortcode_HM($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, '© The State Hermitage Museum, St. Petersburg', 
									'https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/' . $id . '/?lng=en');	
	return $result;
}
add_shortcode('yu_caption_HM', 'MY_VERY_OWN_img_caption_shortcode_HM');

/**
 * yu_caption_VA  
 */
function MY_VERY_OWN_img_caption_shortcode_VA($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'id' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, '© Victoria and Albert Museum, London', 
									'http://collections.vam.ac.uk/item/' . $id . '/');	
	return $result;
}
add_shortcode('yu_caption_VA', 'MY_VERY_OWN_img_caption_shortcode_VA');

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
 * [yu_tube title = "" imdb_id = "" youtube_id = "" start = ""]
 */
function MY_VERY_OWN_youtube($attr, $content = null) {

	extract(shortcode_atts(array(
		'title' => '',
		'imdb_id' => '',
		'youtube_id' => '',
		'start' => ''
	), $attr));
	
	$youtube_shortcode = '[youtube https://www.youtube.com/watch?v=' . $youtube_id . '&start=' . $start . ']';	
	
	if ( $imdb_id )
		$before_video = '<a title="' . $title . '" href="http://www.imdb.com/title/' . $imdb_id . '/" target="_blank">"' . $title . '"</a>';
	else
		$before_video = $title;
	
	$result = $before_video . ':

<div style="width:500px; max-width:500px; display:block; margin: auto"> ' . do_shortcode($youtube_shortcode) . '</div>';

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

?>
