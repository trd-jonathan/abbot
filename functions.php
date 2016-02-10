<?php 
	function style_script_enqueue(){
	wp_enqueue_style('abbot-style', get_template_directory_uri() . '/css/abbot.css', array(), '1.0', 'all');
	//wp_enqueue_script('jqueryjs', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true);
	wp_enqueue_script('abbot-script', get_template_directory_uri() . '/js/abbot.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'style_script_enqueue');


	add_theme_support( menus );

$defaults = array(
	'default-image'          => '',
	'width'                  => 100,
	'height'                 => 100,
	'flex-height'            => false,
	'flex-width'             => false,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Header Menu', 'theme-slug' ) );
}

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items.get_search_form();

    return $items;
}

?>
