<?php
/**
* Template Name: Projects
*/

  get_header();
?>
<div class="content">
	<h4>Projects</h4>
	<?php get_template_part('category', 'grid'); ?>
</div>

<?php
	get_template_part('static', 'twitter');
	get_footer();
 ?>

