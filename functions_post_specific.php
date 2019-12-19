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
        
    $im1 = do_shortcode('[yu_image_DB width="' . $w1 . '"]' . $f1 . '[/yu_image_DB]');
    $im2 = do_shortcode('[yu_image_DB width="' . $w2 . '"]' . $f2 . '[/yu_image_DB]');
    if (!! $f11) {
        $im11 = do_shortcode('[yu_image_DB width="' . $w1 . '"]' . $f11 . '[/yu_image_DB]');
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
    $im      =  do_shortcode('[yu_image_DB width="' . $w . '"]' . $f . '[/yu_image_DB]');

    $result = '<tr><td colspan="3"><table><tbody><tr><td style="vertical-align:'. $va .';" >' . $arrow_v . '</td><td>'
                         . $im . '</td><td>' . $arrow_iv . '</td></tr></tbody></table></td></tr>'; 
	return $result;
}
add_shortcode('DE_row_TB', 'DE_row_TB_shortcode');
 

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
 *                               The recept generator                         *
 *****************************************************************************/

function replace_br($content) {
	//$result = preg_replace('<br\W*?\/>*$','', $content);
	$result = preg_replace("/<br\W*?\/>/", ";</li><li>", trim($content));
	//remove ";</li><li>|" at the end of the line
	$result = $result . '|';
	$result = str_replace(";</li><li>|", "", $result);
	$result = str_replace("|", "", $result);
	return $result;
}

function MY_VERY_OWN_recept($attr, $content = null) {

	extract(shortcode_atts(array(
		'last_section' => ''
	), $attr));

	$result = "";

	$recept_parts = preg_replace("/\|<br\W*?\/>/", "|", $content);
	$recept_parts = preg_replace("/#<br\W*?\/>/", "#", $recept_parts);
	$recept_parts = preg_replace("/<br\W*?\/>\|/", "|", $recept_parts);
	$recept_parts = preg_replace("/<br\W*?\/>#/", "#", $recept_parts);
	$recept_parts = explode ('|', $recept_parts);	

	if (!! $recept_parts[0]) {
		$result = $result . do_shortcode("[yu_images_DB flushright='1']" . $recept_parts[0] . '[/yu_images_DB]');
	}
	if (!! $recept_parts[1]) {
		$result = $result . '<h9>Utensils</h9><ul class="utensils_ul"><li>' . replace_br($recept_parts[1]) . '.</li></ul>';
	}
	if (!! $recept_parts[2]) {
		$ingredients_parts = explode ('#', $recept_parts[2]);
		$result = $result . '<h9>Ingredients</h9>';
		if (!! $ingredients_parts[0]) {
			$result = $result . '<ul class="ingredients_ul"><li>' . replace_br($ingredients_parts[0]) . '.</li></ul>';
		}
		if (!! $ingredients_parts[1]) {
			$result = $result . '<ul class="spices_ul"><li>' . replace_br($ingredients_parts[1]) . '.</li></ul>';
		}
		if (!! $ingredients_parts[2]) {
			$result = $result . '<ul class="to_serve_ul"><li>' . replace_br($ingredients_parts[2]) . '.</li></ul>';
		}
	}
	if (!! $recept_parts[3]) {
		$result = $result . '<h9>Directions</h9><ol class="directions_ol"><li>' . replace_br($recept_parts[3]) . '.</li></ol>';
	}
	if (!! $recept_parts[4]) {
		$result = $result . '<h9>' . $last_section . '</h9><ul class="to_try"><li>' . replace_br($recept_parts[4]) . '.</li></ul>';
	}
/**/
	return $result;
}
add_shortcode('yu_recept', 'MY_VERY_OWN_recept');


?>