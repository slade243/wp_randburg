<?php
/**
* Template Name: Homepage
*/

get_header();

$pages = get_pages(array('child_of' => get_the_ID()));
?>

<!--  <div id="categories-grid">
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
 -->
<?php get_footer(); ?>
