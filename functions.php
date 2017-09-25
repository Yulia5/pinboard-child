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
	. '" src="http://www.yu51a5.com/wp-content/uploads/germany/arrowd.png" alt="" width="92" height="100" />';
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
	. '" src="http://www.yu51a5.com/wp-content/uploads/germany/arrow' . $dir . '.png" alt="" width="100" />';
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
 
function post_ID_to_folder_name($post_id)
{
    switch ($post_id) {
        case 376: 
            return 'yoga';
        case 8: 
            return 'similar_different';
        case 1895: 
            return 'rj';
        case 1522: 
            return 'horsemen';
        case 13: 
            return 'hamlet';
        case 10: 
            return 'goldenbronzehorsemen';
        case 205: 
            return 'germany';
        case 3209: 
            return 'berets';
        case 652: 
            return 'allchurch';
    }
    return '';
} 
 
function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name)
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
	}
	$div_style = $div_style . '" ';
	$img_style = $img_style . '" ';
	
	if ((!$height) && (!$width)) {
		$div_style = '';
		$img_style = '';		
	}
	
	$caption_no_br = str_replace(array('<br />','<br/>','<br>'), '', $caption);
	$hrf = trim($hrf, " ");
	if ( substr( $hrf, 0, 7 ) !== "http://" ) {
		$hrf = trailingslashit(wp_upload_dir()['url']) . $hrf;
	}
    if (! $folder_name) {
        $post = get_post();
        if ( ! empty( $post ) ) {
            $folder_name = post_ID_to_folder_name($post->ID);
        }
    }
    if (!! $folder_name) {
        $index_slash = strrpos($hrf, "/");
        $hrf = substr($hrf, 0, $index_slash) . "/" . $folder_name . substr($hrf, $index_slash);
    }
    $hrf = '"' . $hrf . '" ';
	
	$alt = ' alt="' . $caption_no_br . '" ';
	$alt2 = ' caption="' . $caption_no_br . '" sourcename="' . $sourcename . '" sourcehrf="' . $sourcehrf . '" ';
	
	$invisible_a_to_check_broken_links = ' <a href="' . $hrf . '" style="display:none">Invisible, to help broken links check</a>';
	if ( $sourcehrf )
		$invisible_a_to_check_broken_links = $invisible_a_to_check_broken_links . ' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
	
	if ( $comp )
		 $caption = 'COMPARANDUM: ' . $caption;
    
    $attachment_id = get_post_thumbnail_id( $post->ID ); 
    $img_src = wp_get_attachment_image_url( $attachment_id, 'cover-size' ); 
    $img_srcset = wp_get_attachment_image_srcset( $attachment_id, 'cover-size' );
    

	return '<div class="outside_image"> ' 
	. '<a class="magnific-image" href=' . $hrf . ' title="' . $caption_no_br . '" >'
	. '<img class="img-responsive" '. $img_style . 'src=' . $hrf . $alt . $alt2. '/></a>' 
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
		'comp' => '', 
		'folder_name' => ''
	), $attr));

	$result = generate_caption_HTML($content, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name);	
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
		'comp' => '', 
        'folder_name' => ''
	), $attr));
	
	$name_href = generate_img_source_name_href($src, $id);
	
	$separator_line = strpos($name_href, '|');
	$src_name = substr($name_href, 0, $separator_line);
	$src_href = substr($name_href, $separator_line+1);	

	$result = generate_caption_HTML($content, $height, $width, $caption, $src_name, $src_href, $comp, $folder_name);	
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
		case "SKD": // yu_caption_SDK
        	return '© Staatliche Kunstsammlungen Dresden|https://skd-online-collection.skd.museum/Details/Index/' . $id;	
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
		case "numisbids": 
			return 'NumisBids|https://www.numisbids.com/n.php?p=lot&' . $id;	
		case "ikmk": 
			return 'Munzkabinett, Staatliche Museen zu Berlin|http://ikmk.smb.museum/object?lang=en&id=' . $id;	
		case "RJK": 
			return 'Rijksmuseum Amsterdam|https://www.rijksmuseum.nl/en/collection/' . $id;	
	}
	return $src . '|';
}

/**
 * MY_VERY_OWN_h
 */
function MY_VERY_OWN_h($attr, $content = null) {

	extract(shortcode_atts(array(
		'a' => ''
	), $attr));
	
	$result = '<h3><a name="' . $a . '"><span style="font-weight:normal;">' . $content . '</span></a></h3>';	
	return $result;
}
add_shortcode('yu_h', 'MY_VERY_OWN_h');

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

/**
 * Remove standard image sizes so that these sizes are not
 * created during the Media Upload process
 *
 * https://developer.wordpress.org/reference/functions/remove_image_size/
 */
function pinboard_child_theme_setup( $sizes) {
	/* remove all pre-existing image sizes */	
	$image_size_names = array('thumbnail', 'medium', 'large', 'slider-thumb', 'blog-thumb', 'teaser-thumb', 'gallery-1-thumb', 'gallery-2-thumb', 'gallery-3-thumb', 'image-thumb', 'video-thumb');
	$image_size_names_length = count($image_size_names);
	for($x = 0; $x < $image_size_names_length; $x++) {
    	remove_image_size($image_size_names[$x]);
	}
	/* add image sizes adapted to the most frequently encountered cases - resizing by height */
	$image_heights = [150, 180, 200, 220, 250, 300, 400];	
	$image_heights_count = count($image_heights);
	for($x = 0; $x < $image_heights_count; $x++) {
		add_image_size( 'h' . strval($image_heights[$x]), 9999, $image_heights[$x] );
	}
	add_image_size( 'w700', 700);
}
add_action( 'after_setup_theme', 'pinboard_child_theme_setup', 11);

/* got images metas given their names and folders */
function get_images_meta_id( $filenames ) {
    
    $meta_query_array = array('relation' => 'OR');
    foreach ( $filenames as $fn ) {
        array_push($meta_query_array, array(
                'value'   => '"' . $fn . '"',
                'compare' => 'LIKE',
                'key'     => '_wp_attachment_metadata',
            ));
    }
    
    $query_args = array(
        'post_type'   => 'attachment',
        'post_status' => 'inherit',
        'fields'      => 'ids',
        'meta_query'  => $meta_query_array
    );
    
    $query = new WP_Query( $query_args ); 
    error_log( '$query *' . print_r($query, true)  . '*');
    $metas = array();
    if ( $query->have_posts() ) {
        foreach ( $query->posts as $post_id ) {
            $meta = wp_get_attachment_metadata( $post_id );
            $meta['attachment_id'] = $post_id;
            $metas[$meta['file']] = $meta;
        }
    }
    error_log( '$metas is ' . print_r($metas, true) );
    return $metas;
}

/**
 * Filters 'img' elements in post content to add 'srcset' and 'sizes' attributes.
 *
 * @since 4.4.0
 *
 * @see wp_image_add_srcset_and_sizes()
 *
 * @param string $content The raw post content to be filtered.
 * @return string Converted content with 'srcset' and 'sizes' attributes added to images.
 */
function yu_make_content_images_responsive( $content ) {
    error_log( " in wp_make_content_images_responsive" );
     error_log( " content is " . $content );   
    if ( ! preg_match_all( '/\[(yu_image|yu_caption)([^\[]+)\]([\s]*)([^\[]+)(?<!\s)([\s]*)\[/', $content, $matches ) ) { // /<img [^>]+>/
        return $content;
    }
    error_log( " 2. in wp_make_content_images_responsive" );

    foreach( $matches[4] as $image ) {
        error_log( '*'. $image . '*' );  
    }
         
    $image_count = count($matches[0]);
    for($x = 0; $x < $image_count; $x++) {
        $images_with_folder[$x] = $matches[4][$x];
        preg_match('/folder_name(\s*)=(\s*)"[^"]+"/', $matches[0][$x], $matches_folder_name);
        error_log('count($matches_folder_name) is ' . count($matches_folder_name));
               
        if (count($matches_folder_name) === 0) {
            $post = get_post();
            if ( ! empty( $post ) ) {
                $folder_name = post_ID_to_folder_name($post->ID);
            }
            else {
                $folder_name = false;
            }
        } else {
            $folder_name = $matches_folder_name[-1];
        }
        if (!! $folder_name) {
            $images_with_folder[$x] = $folder_name . "/" . $images_with_folder[$x];
        }       
    }
    $image_metas = get_images_meta_id( $images_with_folder );
    
    $selected_images = $attachment_ids = array();
    
    foreach ($image_metas as $image_with_folder => $image_meta) {        
        $attachment_id = $image_meta['attachment_id'];
        error_log('wp_upload_dir() is ' . print_r(wp_upload_dir(), true) );
        $image_src =  '<img src="' . $image_with_folder . '">';
        error_log('image_src is ' . $image_src);
        error_log( 'wp_image_add_srcset_and_sizes is ' . 
            wp_image_add_srcset_and_sizes($image_src, $image_meta, $attachment_id ) );
        $selected_images[ $image ] = $attachment_id;
        // Overwrite the ID when the same image is included more than once.
        $attachment_ids[ $attachment_id ] = true;
    }

    /*foreach( $matches[3] as $image ) {
        
        if ( false === strpos( $image, ' srcset=' ) && preg_match( '/wp-image-([0-9]+)/i', $image, $class_id ) &&
            ( $attachment_id = absint( $class_id[1] ) ) ) {

            /*
             * If exactly the same image tag is used more than once, overwrite it.
             * All identical tags will be replaced later with 'str_replace()'.
             */
            /*$selected_images[ $image ] = $attachment_id;
            // Overwrite the ID when the same image is included more than once.
            $attachment_ids[ $attachment_id ] = true;
        }
    }*/

    if ( count( $attachment_ids ) > 1 ) {
        /*
         * Warm object cache for use with 'get_post_meta()'.
         *
         * To avoid making a database call for each image, a single query
         * warms the object cache with the meta information for all images.
         */
        update_meta_cache( 'post', array_keys( $attachment_ids ) );
    }
    
    foreach ( $selected_images as $image => $attachment_id ) {
        $image_meta = wp_get_attachment_metadata( $attachment_id );
        $content = str_replace( $image, wp_image_add_srcset_and_sizes( $image, $image_meta, $attachment_id ), $content );
    }

    return $content;
}
add_filter( 'the_content', 'yu_make_content_images_responsive', 20 )



/*if ( ! function_exists( 'pinboard_widgets_init' ) ) :*/
/**
 * Registers theme widget areas
 *
 * @uses register_sidebar()
 *
 * @since Pinboard 1.0
 *//*
function  pinboard_widgets_init() {
	$title_tag = pinboard_get_option( 'widget_title_tag' );
	
	register_sidebar(
		array(
			'name' => 'Header',
			'id' => 'id_sidebar_Header',
			'description' => 'Displays in the header. Intended exclusively for displaying ads of standard dimentions.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget -->',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Sidebar Top',
			'id' => 'id_sidebar_Sidebar_Top',
			'description' => 'Displays in in the main sidebar stacked at the top.',
			'before_widget' => '<div class="column onecol"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Sidebar Left',
			'id' => 'id_sidebar_Sidebar_Left',
			'description' => 'Displays in in the main sidebar floated to the left.',
			'before_widget' => '<div class="column onecol"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Sidebar Right',
			'id' => 'id_sidebar_Sidebar_Right',
			'description' => 'Displays in in the main sidebar floated to the right.',
			'before_widget' => '<div class="column onecol"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Sidebar Bottom',
			'id' => 'id_sidebar_Sidebar_Bottom',
			'description' => 'Displays in in the main sidebar stacked at the bottom.',
			'before_widget' => '<div class="column onecol"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	$columns = pinboard_get_option( 'footer_columns' );
	if( 1 == $columns )
		$grid_class = 'onecol';
	elseif( 2 == $columns )
		$grid_class = 'twocol';
	elseif( 3 == $columns )
		$grid_class = 'threecol';
	elseif( 4 == $columns )
		$grid_class = 'fourcol';
	register_sidebar(
		array(
			'name' => 'Footer',
			'id' => 'id_sidebar_Footer',
			'description' => 'Displays in in the footer area.',
			'before_widget' => '<div class="column ' . $grid_class . '"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => '404 Page',
			'id' => 'id_sidebar_404_Page',
			'description' => 'Displays on 404 Pages in the content area.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget -->',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Wide',
			'id' => 'id_sidebar_Wide',
			'description' => 'Displays on the front page and spans full width.',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget -->',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	$columns = pinboard_get_option( 'boxes_columns' );
	if( 1 == $columns )
		$grid_class = 'onecol';
	elseif( 2 == $columns )
		$grid_class = 'twocol';
	elseif( 3 == $columns )
		$grid_class = 'threecol';
	elseif( 4 == $columns )
		$grid_class = 'fourcol';
	register_sidebar(
		array(
			'name' => 'Boxes',
			'id' => 'id_sidebar_Boxes',
			'before_widget' => '<div class="column ' . $grid_class . '"><aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget --></div>',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Footer Wide',
			'id' => 'id_sidebar_Footer_Wide',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside><!-- .widget -->',
			'before_title' => '<' . $title_tag . ' class="widget-title">',
			'after_title' => '</' . $title_tag . '>'
		)
	);
}
endif;

add_action( 'widgets_init', 'pinboard_widgets_init' );*/

?>
