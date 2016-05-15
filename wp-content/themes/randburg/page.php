<?php
	get_header();
	get_template_part('banner', 'featured');
?>
<div id="primary" class="content">
  <main id="main" class="site-main" role="main">

	<?php
      while ( have_posts() ) : the_post();
        ?>
        <div class="page-content">
          <?php the_content(); ?>
        </div>
        <?php
      endwhile;
      ?>
  </main><!-- .site-main -->
</div><!-- .content-area -->

<?php
	get_template_part('static', 'twitter');
	get_footer();
 ?>
