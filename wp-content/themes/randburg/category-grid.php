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
					<div class="category-header" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page->ID)); ?>)"></div>
					<span class="dash"><span><?php echo apply_filters( 'the_title', $page->post_title, $page->ID ); ?></span></span>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
