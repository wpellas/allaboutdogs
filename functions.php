<?php

// Navigation Menu
function add_nav_menus() {
  register_nav_menus( array(
      'nav menu'=>'Navigation Bar',
      'footer menu'=> 'Footer Bar',
  ));
}
add_action('init', 'add_nav_menus');
//////////////////////////////////////

// Maximum post content length
function excerpt_length() {
  return 50;
}
add_filter('excerpt_length', 'excerpt_length', 999);
function excerpt_more() {
  return '...';
}
add_filter('excerpt_more', 'excerpt_more', 21);
//////////////////////////////////////

// Products Page
function create_posttype() {
  register_post_type( 'products',
    array(
      'labels' => array(
        'name' => ( 'Products' ),
        'singular_name' => ( 'Product' ),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'products'),
      'show_in_rest' => true,
      'menu_icon'             => 'dashicons-megaphone',
      'supports' => array( 'title', 'thumbnail', 'custom-fields')
  )
    );
  register_post_type( 'employees',
  array(
    'labels' => array(
      'name' => ( 'Employees' ),
      'singular_name' => ( 'Employee' ),
    ),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array('slug' => 'employees'),
    'show_in_rest' => true,
    'menu_icon'             => 'dashicons-admin-users',
    'supports' => array( 'title', 'thumbnail' )
  )
    );
}
add_action( 'init', 'create_posttype' );
//////////////////////////////////////

// Custom Categories Category
function custom_taxonomies(){
    
    register_taxonomy( 'product-category', 'products', array(
      'labels' => array(
        'name'              => _x( 'Product Category', 'products' ),
        'singular_name'     => _x( 'Product Category', 'products' ),
      ),
        'hierarchical'      => true, 
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'product-category')
      )
    );
    register_taxonomy( 'employee-category', 'employees', array(
      'labels' => array(
        'name'              => _x( 'Employee Category', 'employees' ),
        'singular_name'     => _x( 'Employee Category', 'employees' ),
      ),
        'hierarchical'      => true, 
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'has_archive'       => true,
        'rewrite'           => array('slug' => 'employee-category')
      )
    ); 
}
add_action('init', 'custom_taxonomies');
//////////////////////////////////////

// CSS and JavaScript documents
function my_theme_enqueue_style() {
  wp_enqueue_style(
    'stylesheet',
    get_stylesheet_uri()
  );
  wp_enqueue_script(
    'script',
    get_stylesheet_directory_uri() . '/assets/script.js',
    // 'module',
  );
  wp_enqueue_style(
    'stylesheet',
    get_stylesheet_directory_uri() . '/node_modules/simplelightbox/dist/simplelight-box.css'
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_style');

// function add_data_attribute($tag, $handle) {
//   if ( 'script' !== $handle )
//    return $tag;

//   return str_replace( ' src', ' type="module"', $tag );
// }
// add_filter('script_loader_tag', 'add_data_attribute', 10, 2);
//////////////////////////////////////

// Tailwind Setup
function tailwindcss_setup_scripts() {
  wp_enqueue_style( 'tailwindcss_setup_style', get_stylesheet_uri(), array() );
  wp_style_add_data( 'tailwindcss_setup_style', 'rtl', 'replace' );

  wp_enqueue_style( 'tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array() );
}
add_action( 'wp_enqueue_scripts', 'tailwindcss_setup_scripts' );
//////////////////////////////////////

// ACF Settings
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
  ));
}
//////////////////////////////////////

// Access Post Thumbnails
add_theme_support('post-thumbnails');
//////////////////////////////////////
?>