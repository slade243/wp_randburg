<?php
/**
* Template Name: Homepage
*/

get_header();
/* $pages = get_pages(array('exclude' => get_the_ID())); */
$pages = get_pages(array('child_of' => '61'));
?>
<?php get_template_part('slider'); ?>
<div class="content">
	<h3><?php echo "Services"; ?></h3>
	<div id="categories-grid">
		<ul>
			<?php foreach ( $pages as $page ) : ?>
				<li class="item">
					<a href="<?php echo get_page_link($page->ID); ?>">
						<div class="category-header" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page->ID)); ?>)">
							<div class="accent"></div>
						</div>
						<span><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>

<?php get_template_part('page', 'bottom-body'); ?>

<div id="categories-grid">
  <ul>
    <?php foreach ( $pages as $page ) : ?>
        <li class="item">
            <div class="header" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page->ID)); ?>)">
              <div class="accent"></div>
            </div>
            <span><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></span>
        </li>
    <?php endforeach; ?>
  </ul>
</div>

<?php get_footer(); ?>
