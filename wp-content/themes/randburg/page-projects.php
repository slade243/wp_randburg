<?php
/**
* Template Name: Projects
*/

  get_header();
  get_template_part('banner', 'featured');
?>
<div class="content">
	<h3>Projects</h3>
	<?php get_template_part('category', 'grid'); ?>
</div>

<?php
	get_template_part('static', 'twitter');
	get_footer();
 ?>

