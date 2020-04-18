<?php

/**
 * MY_VERY_OWN_link
 * generates a link that opens in a new tab
 */
function MY_VERY_OWN_link($href, $text, $title) {
	if ( ! $title ) {
		$title = $text;
	}
	$result = '<a title="' . $title . '" href="' . $href . '" target="_blank" rel="noopener noreferrer">' . $text . '</a>';	
	return $result;
}

/**
 * yu_upload_dir via https
 */
function yu_upload_dir() {
	$result = trailingslashit(wp_upload_dir()['url']);
	$result = str_replace('http://', 'https://', $result);
    return $result;
}

?>