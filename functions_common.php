<?php

/**
 * MY_VERY_OWN_link
 */
function MY_VERY_OWN_link($href, $text, $title) {
	if ( ! $title ) {
		$title = $text;
	}
	$result = '<a title="' . $title . '" href="' . $href . '" target="_blank" rel="noopener noreferrer">' . $text . '</a>';	
	return $result;
}


function yu_upload_dir() {
    return trailingslashit(wp_upload_dir()['url']);
}

?>