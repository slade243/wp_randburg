<?php
	if (is_page('Home')) {
		$pages = get_pages(array('child_of' => get_page_by_title('Services')->ID ));
	} else {
		$pages = get_pages(array('child_of' => get_the_ID()));
	}
 ?>

<div id="categories-grid">
	<ul>
		<?php foreach ( $pages as $page ) : ?>
			<li class="item">
				<a href="<?php echo get_page_link($page->ID); ?>">
					<div class="category-image" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page->ID)); ?>)"></div>
					<div class="category-content">
						<h3><?php echo $page->post_title; ?></h3>
						<p><?php echo get_post_meta($page->ID, '_featured_text', true); ?></p>
					</div>
					<div class="category-overlay"></div>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
