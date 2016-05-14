<?php 
	$page = get_the_ID();
?>
<div class="topBanner" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id($page->ID)); ?>)">
	
</div>