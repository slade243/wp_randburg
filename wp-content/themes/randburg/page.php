<?php
  get_header();
?>
<div id="primary" class="content-area">
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
	get_template_part(page, twitterfeed);
	get_footer();
 ?>

