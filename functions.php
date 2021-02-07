<?php

function wata_theme_support(){
  //Adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  
  }
  
  function watra_register_styles(){
    $theme_data = wp_get_theme();
    $version = $theme_data->get( 'Version' );

    wp_enqueue_style('watra-style', get_template_directory_uri() . "/style.css", array(), $version,'all');

    wp_enqueue_style('watra-google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', array(), '1.0','all');
	  	  
	  
  }
  
  function watra_register_scripts(){

    wp_enqueue_script('watra-main', get_template_directory_uri() . "/assets/js/main.js", array(), "2.0", true);
	

	  
  }
  
function watra_menus(){
  $locations = array(
    'primary' => 'Górne menu nawigacji',
    'footer' => 'Menu stopki',
  );
  register_nav_menus($locations);
}

function watra_remove_admin_menus() {
    remove_menu_page('edit-comments.php');
    remove_menu_page('edit.php');
}



require get_template_directory() . '/inc/watra_customizer.php';

add_action('wp_enqueue_scripts','watra_register_styles');
add_action('wp_enqueue_scripts','watra_register_scripts');

add_action('after_setup_theme', 'wata_theme_support');
add_action('init', 'watra_menus');
add_action('admin_menu', 'watra_remove_admin_menus');
add_action('customize_register', 'watra_customizer');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
  

?>