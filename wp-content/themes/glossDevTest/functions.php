<?php
/* THEME SUPPORTS */
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

/* RENDER SCRIPTS */
function glossdev_scripts()
{
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css');
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('bootstrap-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array('jquery'), '3.0.0', true);
  wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/custom-scripts.js');
}

add_action('wp_enqueue_scripts', 'glossdev_scripts');


/* REGISTER MENU */
function register_my_menu()
{
  register_nav_menus(
    array(
      'header-menu' => __('Header Menu')
    )
  );
}
add_action('init', 'register_my_menu');

/* CUSTOM POST */
// Register Custom Post Type
// function custom_post_type() {

//   $args = array(
//     'labels'  => array(
//         'name' => 'Our Team',
//         'singular_name' =>'Our Team'
//     ),
//     'public'  => true,
//     'menu_icon' => 'dashicons-buddicons-buddypress-logo',
//     'supports'  => array('title', 'thumbnail'),

//   );

// 	register_post_type( 'our_team', $args );

// }
// add_action( 'init', 'custom_post_type');