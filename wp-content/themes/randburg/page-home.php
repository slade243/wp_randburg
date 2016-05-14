<?php
/**
* Template Name: Homepage
*/

	get_header();
	get_template_part('slider'); 
?>
<div class="content">
	<h3>Services</h3>
	<?php get_template_part('category', 'grid'); ?>
</div>

<?php
	get_template_part('static', 'twitter');
	get_footer();
?>
