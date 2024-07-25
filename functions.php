<?php 
//Loads Custom Css
function get_cst_styles(){
    //Style Paths
    $CUSTOM_CSS_PATH = '/resources/css/main.css';
    $GOOGLE_FONTS_FIRST_PRECONNECT = "https://fonts.googleapis.com";
    $GOOGLE_FONTS_SECOND_PRECONNECT = "https://fonts.gstatic.com";
    $GOOGLE_FONTS_CDN = "https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap";

    // Define the path to custom CSS file
    $stylesheet_uri = get_theme_file_uri($CUSTOM_CSS_PATH);
    $googleFonts_C1 = get_theme_file_uri($GOOGLE_FONTS_FIRST_PRECONNECT);
    $googleFonts_C2 = get_theme_file_uri($GOOGLE_FONTS_SECOND_PRECONNECT);
    $googlFonts = get_theme_file_uri($GOOGLE_FONTS_CDN);

    // Enqueue the custom CSS file
    //customName,pathToStyle,dependencies,version,loadb4BodyClosingTag
    wp_enqueue_style('google-fonts-c1', $googleFonts_C1, array(), '1.0', 'all');
    wp_enqueue_style('google-fonts-c2', $googleFonts_C2, array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', $googlFonts, array(), '1.0', 'all' );
    wp_enqueue_style('custom-style', $stylesheet_uri, array(), '1.0', 'all');
}

//Loads Custom JavaScript
function get_cst_scripts() {
  //Script Paths
  $FONT_AWESOME_PATH = '/node_modules/@fortawesome/fontawesome-free/js/all.js';
  $CUSTOM_JS_PATH = '/resources/js/main.css';
  $SLIDER_PATH = 'resources/js/index.js';
  
  // Define the path to your custom JavaScript file
  $font_awesome = get_theme_file_uri($FONT_AWESOME_PATH);
  $sliderJS =  get_theme_file_uri($SLIDER_PATH);
  $script_uri = get_theme_file_uri($CUSTOM_JS_PATH);
  
  // Enqueue the custom JavaScript file
  //customName,pathToScript,dependencies,version,loadb4BodyClosingTag
  wp_enqueue_script( 'font-awesome', $font_awesome, array(), '1.0', true);
  wp_enqueue_script( 'slider-script', $sliderJS, array(), '1.0', true);
  wp_enqueue_script( 'custom-script', $script_uri, array(), '1.0', true);
}

//Loads Custom Page Template 
// function get_cst_page_template($template) {
//   $CST_PAGE_TEMP_PATH = '/templates/page.php';
//   if (is_page()) {
//     $custom_page_template = locate_template($CST_PAGE_TEMP_PATH);
//     if ($custom_page_template) {
//       return $custom_page_template;
//     }
//   }
//   return $template;
// }

//Loads Custom Post Template 
// function get_cst_single_template($template) {
//   $CST_SINGLE_TEMP_PATH = '/templates/single.php';
//   if (is_single()) {
//     $custom_single_template = locate_template($CST_SINGLE_TEMP_PATH);
//     if ($custom_single_template) {
//       return $custom_single_template;
//     }
//   }
//   return $template;
// }

//Loads Theme Custom Setups
function theme_cst_support(){
  //adds dynami page title
  add_theme_support('title-tag');

  //maps navigation menu location
  register_nav_menu('primaryThemeNavMenu', 'Primary Theme Navigation Menu');

  //maps footer menu location
  register_nav_menu('primaryFooterMenu', 'Primary Footer Menu');

  //maps footer menu location
  register_nav_menu('secondaryFooterMenu', 'Secondary Footer Menu');
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

//Loads All Styles & Scripts for Website
add_action('wp_enqueue_scripts', 'get_cst_styles');
add_action('wp_enqueue_scripts', 'get_cst_scripts');

//Loads Custom Page(s) & Post(s) paths
//add_filter('template_include', 'get_cst_page_template');
//add_filter('template_include', 'get_cst_single_template');

//Loads Custom Theme Support
add_action('after_setup_theme', 'theme_cst_support');
