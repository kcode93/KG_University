<?php 
//Loads Custom Css
function get_cst_styles(){
    //Style Paths
    $CUSTOM_CSS_PATH = '/resources/css/main.css';
    $GOOGLE_FONTS_FIRST_PRECONNECT = "https://fonts.googleapis.com";
    $GOOGLE_FONTS_SECOND_PRECONNECT = "https://fonts.gstatic.com";
    $GOOGLE_FONTS_CDN = "https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap";

    // Define the path to custom CSS file
    $stylesheet_uri = get_template_directory_uri() . $CUSTOM_CSS_PATH;
    $googleFonts_C1 =  get_template_directory_uri() . $GOOGLE_FONTS_FIRST_PRECONNECT;
    $googleFonts_C2 =  get_template_directory_uri() . $GOOGLE_FONTS_SECOND_PRECONNECT;
    $googlFonts = get_template_directory_uri() . $GOOGLE_FONTS_CDN;

    // Enqueue the custom CSS file
    wp_enqueue_style('google-fonts-c1', $googleFonts_C1, array(), '1.0.0', 'all' );
    wp_enqueue_style('google-fonts-c2', $googleFonts_C2, array(), '1.0.0', 'all' );
    wp_enqueue_style('google-fonts', $googlFonts, array(), '1.0.0', 'all' );
    wp_enqueue_style('custom-style', $stylesheet_uri, array(), '1.0.0', 'all' );
}

//Loads Custom JavaScript
function get_cst_scripts() {
  //Script Paths
  $FONT_AWESOME_PATH = '/node_modules/@fortawesome/fontawesome-free/js/all.js';
  $CUSTOM_JS_PATH = '/resources/js/main.css';
  $SLIDER_PATH = 'resources/js/index.js';
  
  // Define the path to your custom JavaScript file
  $font_awesome = get_template_directory_uri() . $FONT_AWESOME_PATH;
  $sliderJS =  get_theme_file_uri($SLIDER_PATH);//preferred option
  $script_uri = get_template_directory_uri() . $CUSTOM_JS_PATH;
  
  // Enqueue the custom JavaScript file
  wp_enqueue_script( 'font-awesome', $font_awesome, array(), '1.0.0', 'all' );
  wp_enqueue_script( 'slider-script', $sliderJS, array(), '1.0.0', 'all' );
  wp_enqueue_script( 'custom-script', $script_uri, array(), '1.0.0', 'all' );
}

//pulls header.php from custom path
function get_cst_header() {
  //Path
  $HEADER_PATH = '/includes/header.php';

  $template_path = get_template_directory() . $HEADER_PATH;
  if ( file_exists( $template_path ) ) {
    include( $template_path );
  }
}

//pulls footer.php from custom path
function get_cst_footer() {
   //Path
  $FOOTER_PATH = '/includes/footer.php';

  $template_path = get_template_directory() . $FOOTER_PATH; 
  if ( file_exists( $template_path ) ) {
    include( $template_path );
  }
}

add_action('wp_enqueue_scripts', 'get_cst_styles');
add_action('wp_enqueue_scripts', 'get_cst_scripts');
