<?php

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
        case 3217:
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

	if ( $height ) {
		$img_style = $img_style . ' height: ' . (int) $height . 'px ';
	}
	if ( $width ) {
		$img_style = $img_style . ' width:' . (int) $width . 'px ';
	}
	$img_style = $img_style . '" ';
	
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
	
	$invisible_a_to_check_broken_links = ' <a href=' . $hrf . ' style="display:none">Invisible, to help broken links check</a>';
	if ( $sourcehrf )
		$invisible_a_to_check_broken_links = $invisible_a_to_check_broken_links . ' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
	
	if ( $comp )
		 $caption = 'COMPARANDUM: ' . $caption;
    
	return '<div class="outside_image"> ' 
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

/* got images metas given their names and folders */
function get_images_meta_id( $filenames ) {
    
    $an_upload_dir = trailingslashit(wp_upload_dir()['url']);
    $an_upload_dir_len = strlen($an_upload_dir);
    
    $filenames_as_params = array();
    $posts_per_filename = array();
    sort($filenames);
    $prev_fn = '';
    foreach ( $filenames as $fn ) {
        if ((strpos($fn, $an_upload_dir) !== 0) or ($fn === $prev_fn)) {
            continue;
        }       
        $prev_fn = $fn;
        $short_fn = substr($fn, $an_upload_dir_len);
        array_push($filenames_as_params, array(
                'value'   => $short_fn,
                'compare' => 'IS',
                'key'     => '_wp_attached_file',
            ));
        $posts_per_filename[$short_fn] = 0;
    }
    
    $metas = array();
    $counter = 0;
    $POSTS_PER_BATCH = 1000;
    while($counter < count($filenames_as_params)) {
        $meta_query_array = array_slice($filenames_as_params, $counter, $POSTS_PER_BATCH);
        $counter += $POSTS_PER_BATCH;
        $meta_query_array['relation'] = 'OR';
        $query_args = array(
            'nopaging'    => true,
            'post_type'   => 'attachment',
            'post_status' => 'inherit',
            'fields'      => 'ids',
            'meta_query'  => $meta_query_array
        );
        
        $query = new WP_Query( $query_args ); 
        if ( $query->have_posts() ) {
            foreach ( $query->posts as $post_id ) {
                $meta = wp_get_attachment_metadata( $post_id );
                if (is_array($meta)) {
                    if (array_key_exists('file', $meta)) {
                        $meta['attachment_id'] = $post_id;
                        $metas[$meta['file']] = $meta;
                        $posts_per_filename[$meta['file']] += 1;
                    }
                }
            }
        }
    }
    /*foreach ($posts_per_filename as $fn => $nb_metas) {
        if ($nb_metas !== 1) {
            error_log( 'found ' . $nb_metas. ' for file ' . $fn);
        }
    }
    error_log( 'metas done ' );*/
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
    if ( ! preg_match_all( '/<img[^>]+src\s*=\s*\"([^\"]*)\"([^>]*)>/', $content, $matches ) ) { // /<img [^>]+>/
        return $content;
    }
         
    $image_metas = get_images_meta_id( $matches[1] );
    
    $selected_images_srcset = $attachment_ids = array();
    
    foreach ($image_metas as $image_with_folder => $image_meta) {        
        $attachment_id = $image_meta['attachment_id'];
        $image_src =  '<img src="' . $image_with_folder . '">';
        $an_image_add_srcset_and_sizes 
            = wp_image_add_srcset_and_sizes($image_src, $image_meta, $attachment_id );
        if ( ! preg_match( '/srcset(\s*)=(\s*)\"([^\"]*)\"/', $an_image_add_srcset_and_sizes, $srcset ) ) { // /<img [^>]+>/
            continue;
        }
        $selected_images_srcset[ $image_with_folder ] = $srcset[0];
        // Overwrite the ID when the same image is included more than once.
        $attachment_ids[ $attachment_id ] = true;
    }

    if ( count( $attachment_ids ) > 1 ) {
        /*
         * Warm object cache for use with 'get_post_meta()'.
         *
         * To avoid making a database call for each image, a single query
         * warms the object cache with the meta information for all images.
         */
        update_meta_cache( 'post', array_keys( $attachment_ids ) );
    }
    
    $an_upload_dir = trailingslashit(wp_upload_dir()['url']);
    foreach ( $selected_images_srcset as $image => $image_srcset) {
        $pattern =  'src="' . $an_upload_dir . $image . '"';
        $content = str_replace($pattern, $pattern . ' ' . $image_srcset . ' ', $content );
    }
    
    return $content;
}
add_filter( 'the_content', 'yu_make_content_images_responsive', 20 );

function create_table($new_table_name, $new_table_columns) {
    
    global $wpdb;
    $table_name = $wpdb->prefix. $new_table_name;
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
    global $db_version;  

    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !==  $table_name) {
        $create_sql = "CREATE TABLE " . $table_name . " ( " . $new_table_columns . ")" . $charset_collate;
    }
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");
    dbDelta( $create_sql );
}

function register_table($new_table, $new_table_name) {
    global $wpdb;
    $table_name = $wpdb->prefix. $new_table_name;
    
    //register the new table with the wpdb object
    if (!isset($new_table))
    {
        $new_table = $table_name;
        //add the shortcut so you can use $wpdb->stats
        $wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
    }    
}

function images_tables_create() {

   create_table("images_sources", 
           "src VARCHAR(16) NOT NULL ,
            srcname NVARCHAR(1024) NOT NULL ,
            srchref_before NVARCHAR(1024) NOT NULL ,
            srchref_after  NVARCHAR(1024) NOT NULL DEFAULT '' ,
            PRIMARY KEY (src)");

   create_table("images_sources_captions", 
           "filename NVARCHAR(1024) NOT NULL ,
            src VARCHAR(16) NULL ,
            id NVARCHAR(1024) NULL ,
            srcname NVARCHAR(1024) NULL ,
            srchref NVARCHAR(1024) NULL ,
            caption NVARCHAR(1024) NULL ,
            srcset  NVARCHAR(2048) NOT NULL DEFAULT '' ,
            PRIMARY KEY (filename), 
            FOREIGN KEY (src) REFERENCES images_sources(src)");
    global $wpdb;
    register_table($wpdb->images_sources_captions, "images_sources_captions");
    register_table($wpdb->images_sources, "images_sources");
    generate_src();

}
//add_action( 'init', 'images_tables_create');

function insert_into_src($src, $srcname, $srchref_before, $srchref_after = ''){
    global $wpdb;
    $sql = "INSERT INTO {$wpdb->prefix}images_sources (src, srcname, srchref_before, srchref_after) VALUES (%s, %s, %s, %s) 
                ON DUPLICATE KEY UPDATE srcname = %s, srchref_before = %s, srchref_after = %s";
    $sql = $wpdb->prepare($sql, $src, $srcname, $srchref_before, $srchref_after);
    $wpdb->query($sql);
}

/**
 * generate_src
 */
function generate_src() {
    insert_into_src("wiki",     'Wikipedia Commons',                            'https://commons.wikimedia.org/wiki/File:');
    insert_into_src("RC",       'The Royal Collection',                         'https://www.royalcollection.org.uk/collection/');
    insert_into_src("Met",      'The Metropolitan Museum of Art',               'http://www.metmuseum.org/art/collection/search/');
    insert_into_src("ArtUK",    'Art UK',                                       'http://artuk.org/discover/artworks/');  
    insert_into_src("SKD",      '© Staatliche Kunstsammlungen Dresden',         'https://skd-online-collection.skd.museum/Details/Index/');    
    insert_into_src("BM",       '© Trustees of the British Museum',             'http://www.britishmuseum.org/research/collection_online/collection_object_details.aspx?objectId=', '&partId=1'); 
    insert_into_src("LA",       'The Los Angeles County Museum of Art',         'http://collections.lacma.org/node/'); 
    insert_into_src("Getty",    'The J.Paul Getty Museum Open Contents Program','http://www.getty.edu/art/collection/objects/'); 
    insert_into_src("MFA",      'Museum of Fine Arts, Boston',                  'http://www.mfa.org/collections/object/');  
    insert_into_src("WAM",      'The Walters Art Museum',                       'http://art.thewalters.org/detail/');    
    insert_into_src("KHM",      'Kunsthistorisches Museum Vienna',              'https://www.khm.at/objektdb/detail/');
    insert_into_src("HAM",      'Harvard Art Museums',                          'http://www.harvardartmuseums.org/collections/object/');
    insert_into_src("CBd",      'Campbell Bonner Magical Gems Database (CBd)',  'http://www2.szepmuveszeti.hu/talismans/cbd/');
    insert_into_src("RMN",      'Réunion des Musées Nationaux - Grand Palais',  'http://www.photo.rmn.fr/archive/', '.html');  
    insert_into_src("HM",       '© The State Hermitage Museum, St. Petersburg', 'https://www.hermitagemuseum.org/wps/portal/hermitage/digital-collection/', '/?lng=en');  
    insert_into_src("VA",       '© Victoria and Albert Museum, London',         'http://collections.vam.ac.uk/item/', '/');
    insert_into_src("Seals",    'Seals @ mernick.org.uk/seals',                 'http://www.mernick.org.uk/seals/');   
    insert_into_src("numisbids",'NumisBids',                                    'https://www.numisbids.com/n.php?p=lot&');    
    insert_into_src("ikmk",     'Munzkabinett, Staatliche Museen zu Berlin',    'http://ikmk.smb.museum/object?lang=en&id='); 
    insert_into_src("RJK",      'Rijksmuseum Amsterdam',                        'https://www.rijksmuseum.nl/en/collection/'); 
}


function insert_into_images($filename, $src, $id, $caption = ''){
    global $wpdb;
    $sql = "INSERT INTO {$wpdb->prefix}images_sources_captions (filename, src, id, caption) VALUES (%s, %s, %s, %s) 
                ON DUPLICATE KEY UPDATE src = %s, id = %s, caption = %s";
    $sql = $wpdb->prepare($sql, $src, $srcname, $srchref_before, $srchref_after);
    $wpdb->query($sql);
}    

function insert_into_images_any($filename, $srcname, $srchref, $caption = ''){
    global $wpdb;
    $sql = "INSERT INTO {$wpdb->prefix}images_sources_captions (filename, srcname, srchref, caption) VALUES (%s, %s, %s, %s) 
                ON DUPLICATE KEY UPDATE srcname = %s, srchref = %s, caption = %s";
    $sql = $wpdb->prepare($sql, $filename, $srcname, $srchref, $caption);
    $wpdb->query($sql);
} 

function select_image($filename) {
    global $wpdb;
    $result = $wpdb->get_row( "SELECT 
    caption, 
    COALESCE(srcname, sources.srcname) AS srcname, 
    COALESCE(srchref, CONCAT( sources.srchref_before, id, sources.srchref_after) ) AS srchref, 
    srcset 
    FROM {$wpdb->prefix}images_sources_captions INNER JOIN {$wpdb->prefix}images_sources sources ON src = sources.src
    WHERE filename = " . $filename );
    
    return $result;
    
}

?>
