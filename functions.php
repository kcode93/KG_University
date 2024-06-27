<?php 

function get_cst_styles(){
    // Define the path to custom CSS file
    $stylesheet_uri = get_template_directory_uri() . '/resources/css/main.css';
    // Enqueue the custom CSS file
    wp_enqueue_style('custom-style', $stylesheet_uri, array(), '1.0.0', 'all' );
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


