<?php

  add_theme_support('post-thumbnails', array('post', 'page'));

  function my_function_admin_bar(){ return false; }
  add_filter( 'show_admin_bar' , 'my_function_admin_bar');

  function add_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js', false, '2.2.3', true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('functions', get_template_directory_uri() .'/js/functions.js', array('jquery'), '1.0', true);
  } add_action('wp_footer', 'add_scripts');


?>
