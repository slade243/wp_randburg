<?php
/**
* Template Name: Project
*/

  get_header();
?>

<div class="content">
	
	<h2><?php get_the_title($post) ?></h2>
	
	<?php
      while ( have_posts() ) : the_post();
        ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <?php
      endwhile;
      ?>
</div><!-- .content-area -->

<?php
	get_template_part('static', 'twitter');
	get_footer();
 ?>
