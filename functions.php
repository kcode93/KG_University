<?php 

//Loads Custom Css
function get_cst_styles(){
    // Define the path to custom CSS file
    $stylesheet_uri = get_template_directory_uri() . '/resources/css/main.css';
    // Enqueue the custom CSS file
    wp_enqueue_style('custom-style', $stylesheet_uri, array(), '1.0.0', 'all' );
}

//Loads Custom JavaScript
function get_cst_scripts() {
  // Define the path to your custom JavaScript file
  $font_awesome = get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/all.js';
  $script_uri = get_template_directory_uri() . '/resources/js/main.css';

  // Enqueue the custom JavaScript file
  wp_enqueue_script( 'font-awesome', $font_awesome, array(), '1.0.0', 'all' );
  wp_enqueue_script( 'custom-script', $script_uri, array(), '1.0.0', 'all' );
}

//pulls header.php from custom path
function get_cst_header() {
  $template_path = get_template_directory() . '/includes/header.php';
  if ( file_exists( $template_path ) ) {
    include( $template_path );
  }
}

//pulls footer.php from custom path
function get_cst_footer() {
  $template_path = get_template_directory() . '/includes/footer.php';
  if ( file_exists( $template_path ) ) {
    include( $template_path );
  }
}

add_action('wp_enqueue_scripts', 'get_cst_styles');
add_action('wp_enqueue_scripts', 'get_cst_scripts');


