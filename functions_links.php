<?php

 
require_once( __DIR__ . '/functions_common.php');


/******************************************************************************
 *                             Links                                          *
 *****************************************************************************/

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
	if ( ! $language ) {
		$language = 'en';
	}	
	$result = MY_VERY_OWN_link('http://' . $language . '.wikipedia.org/wiki/' . $wikilink, $text, $title);
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
	
	$result = MY_VERY_OWN_link('https://www.instagram.com/' . $account, '@' . $account, $title);
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

	$result = MY_VERY_OWN_link('https://www.worldcat.org/oclc/' . $id, $text, $title);
	return $result;
}
add_shortcode('yu_book', 'MY_VERY_OWN_book');

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
		$before_video = MY_VERY_OWN_link('http://www.imdb.com/title/' . $imdb_id . '/', $title, $title);
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
	
	$result = MY_VERY_OWN_link('https://www.amazon.co.uk/dp/' . $id, $title, $title);
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
      
    $result = MY_VERY_OWN_link(home_url( $path = '/', $scheme = https ) . $post, $text, $text);  
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
         
    $result = MY_VERY_OWN_link('https://www.academia.edu/' . $id, $text, $title);
    return $result;
}
add_shortcode('yu_acad', 'MY_VERY_OWN_academia_link');

?>
