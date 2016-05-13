<?php

  add_theme_support('post-thumbnails', array('post', 'page'));

  // include files via shortcode
function include_file($atts) {
	extract(shortcode_atts(array('filepath' => 'NULL'), $atts));
	if ($filepath!='NULL' && file_exists(TEMPLATEPATH.$filepath)){
	ob_start();
	include(TEMPLATEPATH.$filepath);
	$content = ob_get_clean();
	return $content;
	}
}

add_shortcode('include', 'include_file');
?>
