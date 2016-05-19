<?php
/**
* Template Name: Homepage
*/

	get_header();
	get_template_part('slider');
?>
<div class="content">
	<h1>Randburg electrical services</h1>
	<?php
		while ( have_posts() ) : the_post();
    ?>
    <div class="page-content">
		<?php the_content(); ?>
    </div>
    <?php
		endwhile;
	?>
	<h2 class="headline">Services</h2>
	<?php get_template_part('category', 'grid'); ?>
</div>

<?php
	get_template_part('static', 'twitter');
	get_footer();
?>
