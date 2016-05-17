<?php

  add_theme_support('post-thumbnails', array('post', 'page'));

  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

  function add_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', false, '2.2.3', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-mobile', get_template_directory_uri() .'js/jquery.mobile.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('functions', get_template_directory_uri() .'/js/functions.js', array('jquery', 'jquery-mobile'), '1.0', true);
  } add_action('wp_footer', 'add_scripts');



  /* Featured Text */

  add_action('add_meta_boxes', 'action_add_meta_boxes', 0);
  add_action('save_post', 'save_featured_text_meta_box', 10, 2);

  function action_add_meta_boxes() {
  	add_meta_box('featured_text', __('Featured Text'), 'inner_featured_text_meta_box', 'page', 'side', 'default');
  }

  function inner_featured_text_meta_box($post) {
    $value = get_post_meta($post->ID, '_featured_text', true);
    wp_nonce_field('featured_text_nonce_action', 'featured_text_nonce');

    echo '<textarea name="_featured_text" class="widefat">'. $value .'</textarea>';
  }

  function save_featured_text_meta_box($post_id, $post) {
    $nonce_name   = isset($_POST['featured_text_nonce']) ? $_POST['featured_text_nonce'] : '';
    $nonce_action = 'featured_text_nonce_action';

    if (!isset($nonce_name)) return;
    if (!wp_verify_nonce($nonce_name, $nonce_action)) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (wp_is_post_autosave($post_id)) return;
    if (wp_is_post_revision($post_id)) return;
    if (!isset($_POST['_featured_text'])) return;

    $featured_text = $_POST['_featured_text'];
    update_post_meta($post_id, '_featured_text', $featured_text);
  }

?>
