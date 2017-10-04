<?php

/******************************************************************************
 *                          German Arrows                                     *
 *****************************************************************************/
 
function DE_row_shortcode($attr, $content = null) {

    extract(shortcode_atts(array(
        'f1' => '',
        'f11' => '',
        'w1' => '225',
        'f2' => '',
        'w2' => '225',        
        'dir' => ''), $attr)); 
        
    $im1 = '<div class="images">' . do_shortcode('[yu_image_DB width="' . $w1 . '"]' . $f1 . '[/yu_image_DB]') . '</div>';
    $im2 = '<div class="images">' . do_shortcode('[yu_image_DB width="' . $w2 . '"]' . $f2 . '[/yu_image_DB]') . '</div>';
    if (!! $f11) {
        $im11 = '<div class="images">' . do_shortcode('[yu_image_DB width="' . $w1 . '"]' . $f11 . '[/yu_image_DB]') . '</div>';
        $im1 = '<table id="table_g2"><tbody><tr><td>' . $im1 . '<br/>' . $im11 . '</td></tr></tbody></table>';       
    } else {
        $arrow_d = '<br/>' . do_shortcode('[yu_image_DB height="100"]arrowd.png[/yu_image_DB]');
        if ($dir === 'R') {
            $im2 = $im2 . $arrow_d; 
        }
        if ($dir === 'L') {
            $im1 = $im1 . $arrow_d; 
        }
    }
    $arrow_m = do_shortcode('[yu_image_DB width="100"]arrow' . $dir . '.png[/yu_image_DB]');
    $result = '<tr><td>' . $im1 . '</td><td width="110" >' . $arrow_m . '</td><td >' . $im2 . '</td></tr>';
  
    return $result;
}
add_shortcode('DE_row', 'DE_row_shortcode');

function DE_row_TB_shortcode($attr, $content = null) {

	extract(shortcode_atts(array(
		'dir' => '',
		'w' => '225',
        'f' => '',
		'va' => ''), $attr));	
    
    $arrow_v = do_shortcode('[yu_image_DB width="100"                            ]arrow' . $dir . '.png[/yu_image_DB]');
    $arrow_iv= do_shortcode('[yu_image_DB width="100"  style="visibility: hidden"]arrow' . $dir . '.png[/yu_image_DB]');
    $im      =  '<div class="images">' . do_shortcode('[yu_image_DB width="' . $w . '"]' . $f . '[/yu_image_DB]') . '</div>';

    $result = '<tr><td colspan="3"><table><tbody><tr><td style="vertical-align:'. $va .';" >' . $arrow_v . '</td><td>'
                         . $im . '</td><td>' . $arrow_iv . '</td></tr></tbody></table></td></tr>'; 
	return $result;
}
add_shortcode('DE_row_TB', 'DE_row_TB_shortcode');
 
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
 
function get_folder_name() {
    $post = get_post();
    if ( ! empty( $post ) ) {
        $folder_name = post_ID_to_folder_name($post->ID);
    } else {
        $folder_name = null;
    }
    return $folder_name;
}

// Function for basic field validation (present and neither empty nor only white space)
function is_empty_string($question) {
    return (!isset($question) || trim($question)==='');
}

function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name, 
                                $srcset = null, $style = null, $class = null)
{
	
	$img_attr = 'style="';

    if ( $style ) {
        $img_attr = $img_attr . $style . ';';
    }

	if ( $height ) {
		$img_attr = $img_attr . ' height: ' . (int) $height . 'px;';
	}
	if ( $width ) {
		$img_attr = $img_attr . ' width:' . (int) $width . 'px;';
	}
	$img_attr = $img_attr . '" ';
    if ( $class ) {
        $img_attr = $img_attr . ' class="' . $class . '"';
    }
    
	
	$caption_no_br = str_replace(array('<br />','<br/>','<br>'), '', $caption);
	$hrf = trim($hrf, " ");
	if ( substr( $hrf, 0, 7 ) !== "http://" ) {
		$hrf = trailingslashit(wp_upload_dir()['url']) . $hrf;
	}
    if (! $folder_name) {
        $folder_name = get_folder_name();
    }
    if (!! $folder_name) {
        $index_slash = strrpos($hrf, "/");
        $hrf = substr($hrf, 0, $index_slash) . "/" . $folder_name . substr($hrf, $index_slash);
    }
    $hrf = '"' . $hrf . '" ';
	
	$invisible_a_to_check_broken_links = ' <a href=' . $hrf . ' style="display:none">Invisible, to help broken links check</a>';
    if (! is_empty_string($caption_no_br)) {
        $img_attr = $img_attr . ' alt="' . $caption_no_br . '" caption="' . $caption_no_br . '"';
    }
    if (! is_empty_string($sourcename)) {
        $img_attr = $img_attr . ' sourcename="' . $sourcename . '"';
    }
    if (! is_empty_string($sourcehrf)) {
        $img_attr = $img_attr . ' sourcehrf="' . $sourcehrf . '"';
        $invisible_a_to_check_broken_links = $invisible_a_to_check_broken_links 
            . ' <a href="' . $sourcehrf . '" style="display:none">Invisible, to help broken links check</a>';
    }    
    if (! is_empty_string($srcset)) {
        $img_attr = $img_attr . ' srcset="' . $srcset . '"';
    }
     	
	if ( $comp ) {
		 $caption = 'COMPARANDUM: ' . $caption;
    }
    
	return '<div class="outside_image"> ' 
	. '<a class="magnific-image" href=' . $hrf . ' title="' . $caption_no_br . '" >'
	. '<img '. $img_attr . 'src=' . $hrf . '/></a>' 
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
	$result = generate_caption_HTML($content, $height, $width, $caption, $name_href->srcname, $name_href->srchref, $comp, $folder_name);	
	return $result;
}
add_shortcode('yu_image', 'MY_VERY_OWN_image_caption_shortcode');

/**
 * yu_image_DB
 */
function MY_VERY_OWN_image_DB_shortcode($attr, $content = null) {

    extract(shortcode_atts(array(
        'height' => '',
        'width' => '',
        'comp' => '', 
        'folder_name' => '',
        'style' => '',
        'class' => '' 
    ), $attr));
    
    $content = trim($content);
    if ((! $folder_name) && (strrpos($content, "/") === false)) {
        $folder_name = get_folder_name();
    }
    if (!! $folder_name) {
        $filename = trailingslashit($folder_name) . $content;
    } else {
        $filename = $content;
    }   
    
    $image_info_from_DB = select_image($filename);   

    $result = generate_caption_HTML($content, $height, $width, 
                    $image_info_from_DB->caption, $image_info_from_DB->srcname, $image_info_from_DB->srchref, 
                    $comp, $folder_name, $image_info_from_DB->srcset, $style, $class);    
    return $result;
}
add_shortcode('yu_image_DB', 'MY_VERY_OWN_image_DB_shortcode');

/* get images metas given their names and folders */
function get_images_meta_id_srcset( $filenames ) {
        
    $filenames_as_params = array();
    $posts_per_filename = array();
    sort($filenames);
    $prev_fn = '';
    foreach ( $filenames as $fn ) {
        if ($fn === $prev_fn) {
            continue; // a duplicate
        }       
        array_push($filenames_as_params, array(
                'value'   => $fn,
                'compare' => 'IS',
                'key'     => '_wp_attached_file',
            ));
        $posts_per_filename[$fn] = 0;
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
    
    $potential_problems = array();
    foreach ($posts_per_filename as $fn => $nb_metas) {
        if ($nb_metas !== 1) {
            $potential_problems[$fn] = 'found ' . $nb_metas . ' metas';
        }
    }     
    
    $selected_images_srcset = $attachment_ids = array();
    
    foreach ($metas as $image_with_folder => $image_meta) {        
        $attachment_id = $image_meta['attachment_id'];
        $attachment_ids[ $attachment_id ] = true;

        $image_src =  '<img src="' . $image_with_folder . '">';
        $an_image_add_srcset_and_sizes 
            = wp_image_add_srcset_and_sizes($image_src, $image_meta, $attachment_id );
        if ( preg_match( '/srcset(\s*)=(\s*)\"([^\"]*)\"/', $an_image_add_srcset_and_sizes, $srcset ) ) {
            $selected_images_srcset[ $image_with_folder ] = $srcset[0];
        }       
    } 
    
    $result['potential_problems'] = $potential_problems;   
    $result['selected_images_srcset'] = $selected_images_srcset;   
    $result['attachment_ids'] = array_keys($attachment_ids);   
    
    return $result;
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
    $pattern = '`<img[^>]+src\s*=\s*\"' . preg_quote (trailingslashit(wp_upload_dir()['url']), '/' ) . '([^\"]*)\"([^>]*)>`';
    if ( ! preg_match_all( $pattern, $content, $matches ) ) {
        return $content;
    }
    // extract src if not srcset ??? '/<img [^>]+>/'
         
    $image_ids_srcsets = get_images_meta_id_srcset( $matches[1]);
    $attachment_ids = $image_ids_srcsets['attachment_ids'];
    $selected_images_srcset = $image_ids_srcsets['selected_images_srcset'];
    
    if ( count( $attachment_ids ) > 1 ) {
        /*
         * Warm object cache for use with 'get_post_meta()'.
         *
         * To avoid making a database call for each image, a single query
         * warms the object cache with the meta information for all images.
         */
        update_meta_cache( 'post', $attachment_ids );
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
    $table_name = $wpdb->prefix . $new_table_name;
    global $charset_collate;
    $charset_collate = $wpdb->get_charset_collate();
        
    if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") !==  $table_name) {
        $create_sql = "CREATE TABLE " . $table_name . " ( " . $new_table_columns . ") " . $charset_collate;   
        require_once(ABSPATH . "wp-admin/includes/upgrade.php");
        dbDelta( $create_sql );
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
           "filename NVARCHAR(330) NOT NULL ,
            src VARCHAR(16) NULL ,
            id NVARCHAR(1024) NULL ,
            srcname NVARCHAR(1024) NULL ,
            srchref NVARCHAR(1024) NULL ,
            caption NVARCHAR(1024) NULL ,
            srcset  NVARCHAR(2048) NOT NULL DEFAULT '' ,
            PRIMARY KEY (filename), 
            FOREIGN KEY (src) REFERENCES images_sources(src)");
    global $wpdb;
    
    $wpdb->images_sources_captions = "{$wpdb->prefix}images_sources_captions";
    $wpdb->images_sources = "{$wpdb->prefix}images_sources";
    $wpdb->tables[] = "{$wpdb->prefix}images_sources_captions";
    $wpdb->tables[] = "{$wpdb->prefix}images_sources";
    
    generate_src();
    populate_images();
}
add_action( 'init', 'images_tables_create');

function insert_into_src($src, $srcname, $srchref_before, $srchref_after = ''){
    global $wpdb;
    $sql = "INSERT INTO " . $wpdb->images_sources . " (src, srcname, srchref_before, srchref_after) VALUES (%s, %s, %s, %s) 
                ON DUPLICATE KEY UPDATE srcname = %s, srchref_before = %s, srchref_after = %s";
    $sql = $wpdb->prepare($sql, $src, $srcname, $srchref_before, $srchref_after, $srcname, $srchref_before, $srchref_after);
    $wpdb->query($sql);
}

function insert_into_images($filename, $src_or_srcname, $id_or_srchref, $caption = ''){
    global $wpdb;
    $sql = "INSERT INTO " . $wpdb->images_sources_captions . " (filename, ";
    if (($id_or_srchref === '') or ($id_or_srchref === null) or (strncmp($id_or_srchref, 'http', 4) === 0)  ) {
        $sql = $sql . "srcname, srchref, caption) VALUES (%s, %s, %s, %s) ON DUPLICATE KEY UPDATE srcname = %s, srchref = %s, caption = %s";            
    } else {
        $sql = $sql . "src, id, caption) VALUES (%s, %s, %s, %s) ON DUPLICATE KEY UPDATE src = %s, id = %s, caption = %s";
    }
    $sql = $wpdb->prepare($sql, $filename, 
                            $src_or_srcname, $id_or_srchref, $caption, 
                            $src_or_srcname, $id_or_srchref, $caption);
    $wpdb->query($sql);
} 

function update_srcsets($force_update = false) { //not used
    global $wpdb;
    $sql = "SELECT filename FROM " . $wpdb->images_sources_captions;
    if (! $force_update) {
        $sql = $wpdb->prepare($sql . " WHERE srcset = %s", '');
    }
    $filenames_to_update = $wpdb->get_col($sql); 
    
    $images_meta_id_srcset = get_images_meta_id_srcset( $filenames_to_update );
    $selected_images_srcset = $result['selected_images_srcset']; 
    $sql = "UPDATE " . $wpdb->images_sources_captions . " SET srcset = %s WHERE filename = %s";
    foreach($selected_images_srcset as $filename => $srcset) {
        $sql2 = $wpdb->prepare($sql, $srcset, $filename);
        $wpdb->query($sql2);
    }  
}

function select_image($filename) {
    global $wpdb;
    $sql = "SELECT 
        caption, 
        COALESCE(images_tbl.srcname, sources_tbl.srcname) AS srcname, 
        COALESCE(images_tbl.srchref, CONCAT( sources_tbl.srchref_before, images_tbl.id, sources_tbl.srchref_after) ) AS srchref, 
        srcset 
        FROM " . $wpdb->images_sources_captions . " images_tbl 
        INNER JOIN " . $wpdb->images_sources . " sources_tbl 
        ON COALESCE(images_tbl.src, %s) = sources_tbl.src
        WHERE filename = %s";
    $sql = $wpdb->prepare($sql, '', $filename);    
    $result = $wpdb->get_row($sql);    
    return $result; 
}

function generate_img_source_name_href($src, $id) {
    global $wpdb;
    $sql = "SELECT srcname, CONCAT(srchref_before, %s, srchref_after) ) AS srchref FROM " . $wpdb->images_sources . " WHERE src = %s";
    $sql = $wpdb->prepare($sql, $id, $src);    
    $result = $wpdb->get_row($sql);    
    return $result; 
}

?>
