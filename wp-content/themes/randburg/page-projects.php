<?php
/**
* Template Name: Projects
*/
  get_header();
  $pages = get_pages(array('child_of' => get_the_ID()));
?>
<div class="topBanner">

</div>
<div class="content">
	<h3><?php echo "Projects"; ?></h3>
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

<?php
	get_template_part(page, bottomBody);
	get_footer();
 ?>

