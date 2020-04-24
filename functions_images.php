<?php

require_once( __DIR__ . '/functions_common.php');

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
        case 6463: 
        case 6468:
        case 6471:
        case 6474:
        case 6477:
        case 4737:
        case 6490:
        case 6492:
        case 6495:
        case 6497:
        case 6500:
        case 6503:
        case 6506:
        case 6526:
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
        case 3499:
        case 3556:
        case 3641:
            return 'persia_greece';
        case 3818:
        case 3873:
        case 3920:
        case 4066:
            return 'SocialScience';
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

function generate_caption_HTML($hrf, $height, $width, $caption, $sourcename, $sourcehrf, $comp, $folder_name, 
                                $srcset, $style, $class, $no_image)
{    
    $caption_no_br = preg_replace("/<br\W*?\/>/", "\n", $caption);

    $hrf = trim($hrf, " ");
    if ( substr( $hrf, 0, 4 ) !== "http" ) {
        $hrf = yu_upload_dir() . $hrf;
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
    	
	$img_attr = 'style="';
    if ( $no_image ) {
        $img_attr = $img_attr . ' display:none;';            
    } else {
        if ( $style ) {
            $img_attr = $img_attr . $style . ';';
        }
       	if ( $height ) {
    		$img_attr = $img_attr . ' max-height: ' . (int) $height . 'px;';
    	}
    	if ( $width ) {
    		$img_attr = $img_attr . ' max-width:' . (int) $width . 'px;';
    	}
    }
	$img_attr = $img_attr . '" ';
    
    if ( $class ) {
        $img_attr = $img_attr . ' class="' . $class . '"';
    }
    
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
    
    if ( $no_image ) {
        $result_no_image = MY_VERY_OWN_link($sourcehrf, $caption_no_br); 
        return $result_no_image;
    }
    
    $result_image = '<div class="outside_image"> ' 
                    . '<img '. $img_attr . 'src=' . $hrf . ' />' 
                    . '<div class="wp-caption-text">' . $caption . '</div>'
                    . $invisible_a_to_check_broken_links . '</div>';
    
	return $result_image;
}

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
        'class' => '',
        'no_image' => '' 
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
                    $comp, $folder_name, $image_info_from_DB->srcset, $style, $class, $no_image);    
    return $result;
}
add_shortcode('yu_image_DB', 'MY_VERY_OWN_image_DB_shortcode');

/**
 * yu_images_DB
 */
function add_db_images($image_params_name) {
    $image_params_name_array = explode ('|', $image_params_name[0]);
    $image_name = array_pop($image_params_name_array);
    $image_params = ' ' . implode(' ', $image_params_name_array);
    $result = do_shortcode('[yu_image_DB' . $image_params . ']' . $image_name . "[/yu_image_DB]");
    return $result;
}

function MY_VERY_OWN_images_DB_shortcode($attr, $content = null) {
    extract(shortcode_atts(array(
        'imgheight' => '',
        'imgwidth' => '',
        'flushright' => '' 
    ), $attr));

    $style = "";
    if (!! $imgheight) {
        $style = ' imgheight = "' . $imgheight . '"'. $style;
    }
    if (!! $imgwidth) {
        $style = ' imgwidth = "' . $imgwidth . '"'. $style;
    }
    
    $content = preg_replace("/<br\W*?\/>/", "\n", $content); // for convenience, not treating <br>'s as a special case in regex
    $result = preg_replace_callback('/[^\s\r\t\n]+?(?=\s|\r|\t|\n|$)/s', 'add_db_images', $content);
    $result = str_replace("\n", "<br/>", $result); // adding <br>'s back
    
    // adding div's
    $result = '<div class="images" ' . $style . '>' . $result . "</div>";  
    if (!! $flushright) {
        $result = '<div class="flushright2">' . $result . "</div>";
    }   
    $result = '<p class="clearfloats"></p>' . $result; // clear previous floats

    return $result;
}
add_shortcode('yu_images_DB', 'MY_VERY_OWN_images_DB_shortcode');


/* get images metas given their names and folders */
function get_images_meta_id_srcset( $filenames ) {

    error_log('count filenames ' . count($filenames));
        
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
    error_log('count posts_per_filename ' . count($posts_per_filename));
    
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
    error_log('count selected_images_srcset ' . count($selected_images_srcset));
    error_log('matches selected_images_srcset ' . print_r($selected_images_srcset, true));
    
    $result['potential_problems'] = $potential_problems;   
    $result['selected_images_srcset'] = $selected_images_srcset;   
    $result['attachment_ids'] = array_keys($attachment_ids);   
    
    return $result;
}

/**
 * Filters 'img' elements in post content to add 'srcset' and 'sizes' attributes.
 */
function yu_make_content_images_responsive( $content ) {
    //error_log('yu_make_content_images_responsive 1 ' . print_r(substr($content, 0, 1000)));

    //$content = preg_replace_callback('/\[yu_images_DB.*?(?=\])\].+?(?=\[)\[\/yu_images_DB\]/s', 'do_shortcode', $content);    

    //error_log('yu_make_content_images_responsive 2 ' . print_r(substr($content, 0, 10000)));

    //$content = preg_replace_callback('/\[yu_image_DB.*?(?=\])\].+?(?=\[)\[\/yu_image_DB\]/s', 'do_shortcode', $content);    

    //error_log('yu_make_content_images_responsive 3 ' . print_r(substr($content, 0, 10000)));

    $pattern = '`<img[^>]+src\s*=\s*\"' . preg_quote (yu_upload_dir(), '/' ) . '([^\"]*)\"([^>]*)>`';
    $has_matches = preg_match_all( $pattern, $content, $matches );
    error_log('has_matches img ' . count($matches));
    if ( ! $has_matches ) {
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
    
    foreach ( $selected_images_srcset as $image => $image_srcset) {
        $pattern =  'src="' . yu_upload_dir() . $image . '"';
        //error_log('has_matches pattern ' . $pattern . ' ' . $image_srcset . ' ');
        $content = str_replace($pattern, $pattern . ' ' . $image_srcset . ' ', $content );
    }
    
    return $content;
}
add_filter( 'the_content', 'yu_make_content_images_responsive', 100 );

/*
 * used by function_images_data.php
 */
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

/*
 * used by function_images_data.php
 */
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

/*
 * used by function_images_data.php
 */
function insert_into_src($src, $srcname, $srchref_before, $srchref_after = ''){
    global $wpdb;
    $sql = "INSERT INTO " . $wpdb->images_sources . " (src, srcname, srchref_before, srchref_after) VALUES (%s, %s, %s, %s) 
                ON DUPLICATE KEY UPDATE srcname = %s, srchref_before = %s, srchref_after = %s";
    $sql = $wpdb->prepare($sql, $src, $srcname, $srchref_before, $srchref_after, $srcname, $srchref_before, $srchref_after);
    $wpdb->query($sql);
}

/*
 * used by function_images_data.php
 */
function insert_into_images($filename, $src_or_srcname, $id_or_srchref, $caption = ''){
    global $wpdb;
    $sql = "INSERT INTO " . $wpdb->images_sources_captions . " (filename, ";
    if (($id_or_srchref === '') or ($id_or_srchref === null) or (strncmp($id_or_srchref, 'http', 4) === 0)  ) {
        $sql = $sql . "srcname, srchref, caption, src, id) VALUES (%s, %s, %s, %s, NULL, NULL) ON DUPLICATE KEY UPDATE srcname = %s, srchref = %s, caption = %s, src = NULL, id = NULL";            
    } else {
        $sql = $sql . "src, id, caption, srcname, srchref) VALUES (%s, %s, %s, %s, NULL, NULL) ON DUPLICATE KEY UPDATE src = %s, id = %s, caption = %s, srcname = NULL, srchref = NULL";
    }
    $sql = $wpdb->prepare($sql, $filename, 
                            $src_or_srcname, $id_or_srchref, $caption, 
                            $src_or_srcname, $id_or_srchref, $caption);
    $wpdb->query($sql);
}

/*
 * used by yu_image_DB
 */
function select_image($filename) {
    global $wpdb;
    $sql = "SELECT 
        COALESCE(caption, %s) AS caption, 
        COALESCE(images_tbl.srcname, sources_tbl.srcname) AS srcname, 
        COALESCE(images_tbl.srchref, 
                 CASE WHEN (images_tbl.srcname IS NOT NULL) THEN %s ELSE NULL END, 
                 CONCAT( sources_tbl.srchref_before, images_tbl.id, sources_tbl.srchref_after) ) AS srchref, 
        srcset 
        FROM " . $wpdb->images_sources_captions . " images_tbl 
        INNER JOIN " . $wpdb->images_sources . " sources_tbl 
        ON COALESCE(images_tbl.src, %s) = sources_tbl.src
        WHERE filename = %s";
    $sql = $wpdb->prepare($sql, '', '', '', $filename);    
    $result = $wpdb->get_row($sql);    
    if ($result === null) {
        error_log('select_image 2 ' . $sql);
        error_log('select_image result is null ');
        $sql = "SELECT * FROM " . $wpdb->images_sources_captions . " images_tbl 
                        WHERE filename = %s";
        $sql = $wpdb->prepare($sql, $filename);    
        $result = $wpdb->get_row($sql);                            
        error_log('select_image 22 ' . $sql);
        error_log('select_image 22 result ' . print_r($result, true));
    }
    return $result; 
}

?>
