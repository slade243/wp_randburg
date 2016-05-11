<?php
/**
* Template Name: Homepage
*/

get_header();

$pages = get_pages(array('exclude' => get_the_ID()));
?>
<div class="slideshow">
	<?php do_action('slideshow_deploy', '27'); ?>
</div>
<div class="content">
</div>


<?php get_footer(); ?>
