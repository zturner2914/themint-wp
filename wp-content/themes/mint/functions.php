<?php

// enqueue scripts and styles
function mint_scripts() {
  wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css' );
  wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/stylesheet.css?v1.1' );
  wp_enqueue_script( 'drag-slider', get_template_directory_uri() . '/js/drag-slider.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'drag-slider' );
  wp_enqueue_script( 'Draggable', get_template_directory_uri() . '/js/Draggable.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'Draggable' );
  wp_enqueue_script( 'ThrowPropsPlugin', get_template_directory_uri() . '/js/ThrowPropsPlugin.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'ThrowPropsPlugin' );
  wp_enqueue_script( 'TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array('jquery'), '1.0', true );
  wp_enqueue_script( 'TweenMax' );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.45', true );
  wp_enqueue_script( 'main-js' );
  wp_localize_script( 'main-js', 'theme', array('templateDir' => get_bloginfo('template_url'), 'homeUrl' => get_bloginfo('url')));
}

add_action( 'wp_enqueue_scripts', 'mint_scripts' );

// register menu
function register_header_nav() {
  register_nav_menu('nav-menu',__( 'Nav Menu' ));
}
add_action( 'init', 'register_header_nav' );

if ( function_exists( 'add_theme_support' ) ):
  add_theme_support( 'menus' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'post-thumbnails' );
endif;

if ( function_exists('register_sidebars') ):
  register_sidebar(array(
    'name'=>'Sidebar',
    'id' => 'Sidebar',
    'before_title'=>'<h4>',
    'after_title'=>'</h4>'
  ));
endif;

add_editor_style( 'css/editor-style.css' );

function register_scripts() {
  if (!is_admin()) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    // wp_register_script( 'global', get_template_directory_uri() . '/js/global.js', array('jquery'));
    // wp_enqueue_script( 'global' );
  }
}
add_action('wp_enqueue_scripts', 'register_scripts');


/**
  * Remove emoji support
  */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//add options page
acf_add_options_page();

// disable admin bar
show_admin_bar(false);

?>
