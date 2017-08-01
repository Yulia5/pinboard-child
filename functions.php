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
 
function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp)
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
		$div_style = $div_style. $div_width . '  max-width:100%; ';
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
	
	if ( $comp )
		 $caption = 'COMPARANDUM: ' . $caption;

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
		'sourcehrf' => '',
		'comp' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, $sourcename, $sourcehrf, $comp);	
	return $result;
}
add_shortcode('yu_caption', 'MY_VERY_OWN_img_caption_shortcode');

/**
 * yu_image
 */
function MY_VERY_OWN_image_caption_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'height' => '',
		'width'	=> '',
		'caption' => '',
		'src' => '',
		'id' => '',
		'comp' => ''
	), $attr));
	
	$name_href = generate_img_source_name_href($src, $id);
	
	$separator_line = strpos($name_href, '|');
	$src_name = substr($name_href, 0, $separator_line);
	$src_href = substr($name_href, $separator_line+1);	

	$result = generate_caption_HTML($content, $height, $width, $caption, $src_name, $src_href, $comp);	
	return $result;
}
add_shortcode('yu_image', 'MY_VERY_OWN_image_caption_shortcode');

/**
 * generate_img_source_name_href
 */
function generate_img_source_name_href($src, $id) {
	switch ($src) {
    	case "wiki":
        	return 'Wikipedia Commons|https://commons.wikimedia.org/wiki/File:' . $id;
    	case "RC":
        	return 'The Royal Collection|https://www.royalcollection.org.uk/collection/' . $id;
    	case "Met":
        	return 'The Metropolitan Museum of Art|http://www.metmuseum.org/art/collection/search/' . $id;
    	case "ArtUK": // yu_caption_ArtUK
        	return 'Art UK|http://artuk.org/discover/artworks/' . $id;	
		case "SDK": // yu_caption_SDK
        	return '© Staatliche Kunstsammlungen Dresden|http://skd-online-collection.skd.museum/en/contents/showSearch?id=' . $id;	
		case "BM": // yu_caption_BM
        	return '© Trustees of the British Museum|http://www.britishmuseum.org/research/collection_online/collection_object_details.aspx?objectId=' . $id . '&partId=1';	
		case "LA": // yu_caption_LA
        	return 'The Los Angeles County Museum of Art|http://collections.lacma.org/node/' . $id;	
		case "Getty": // yu_caption_Getty
        	return 'The J. Paul Getty Museum Open Contents Program|http://www.getty.edu/art/collection/objects/' . $id;	
		case "MFA": // yu_caption_MFA
        	return 'Museum of Fine Arts, Boston|http://www.mfa.org/collections/object/' . $id;	
		case "WAM": // yu_caption_WAM  
        	return 'The Walters Art Museum|http://art.thewalters.org/detail/' . $id;	
		case "KHM": // yu_caption_KHM  
        	return 'Kunsthistorisches Museum Vienna|https://www.khm.at/objektdb/detail/' . $id;
		case "HAM":// yu_caption_HAM  
        	return  'Harvard Art Museums|http://www.harvardartmuseums.org/collections/object/' . $id;
		case "CBd": // yu_caption_CBd  
			return 'Campbell Bonner Magical Gems Database (CBd)|http://www2.szepmuveszeti.hu/talismans/cbd/' . $id;
		case "RMN": // yu_caption_RMN  
			return 'Réunion des Musées Nationaux - Grand Palais|http://www.photo.rmn.fr/archive/' . $id . '.html';	
		case "HM": // yu_caption_HM  
			return '© The State Hermitage Museum, St. Petersburg|https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/' . $id . '/?lng=en';	
		case "VA": // yu_caption_VA  
			return '© Victoria and Albert Museum, London|http://collections.vam.ac.uk/item/' . $id . '/';
		case "Seals": // yu_caption_Seals 
			return 'seals @ mernick.org.uk/seals|http://www.mernick.org.uk/seals/' . $id;	
	}
	return $src . '|http://' . $src . '/' . $id;
}

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

<div style="width:500px; max-width:100%; display:block; margin: auto"> ' . do_shortcode($youtube_shortcode) . '</div>';

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
