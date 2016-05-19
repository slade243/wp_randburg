<?php
	get_header();
	get_template_part('banner', 'featured');
?>
<div class="content">

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
