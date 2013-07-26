<?php
function cgs_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'cgs' ),
		'top' => __('Top Navigation', 'cgs')
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 450, 300, true );
	add_image_size( "slide", 770, 513, false );
	add_image_size( "avator", 220, 9999, false );
	add_image_size( "thumb270", 270, 9999, false );
	add_image_size( "avator_small", 120, 9999, false );
	add_image_size( '2_3_thumbnail', 100, 150, false );
	add_image_size( 'img_span2', 160, 9999, false);

	add_editor_style('assets/css/custom-editor-style.css');
	remove_action('template_redirect', 'roots_nice_search_redirect'); //fixed parent theme bug:redirect search.
}
add_action( 'after_setup_theme', 'cgs_setup' );

function cgs_scripts() {
	wp_register_script('cgs_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, false);
	wp_enqueue_script(
		'masonry',
		get_stylesheet_directory_uri() . '/assets/js/jquery.masonry.min.js',
		array('jquery')
	);
	wp_enqueue_script(
		'placeholder',
		get_stylesheet_directory_uri() . '/assets/js/jquery.placeholder.min.js',
		array('jquery')
	);
	wp_enqueue_script(
		'infinitescroll',
		get_stylesheet_directory_uri() . '/assets/js/jquery.infinitescroll.min.js',
		array('jquery')
	);
	wp_enqueue_script(
		'foldit',
		get_stylesheet_directory_uri() . '/assets/js/jquery.foldit.js',
		array('jquery')
	);
	wp_enqueue_script('cgs_main');
	// if ( is_home() ) {	//do not use responsive in homepage.
	// 	wp_dequeue_style( 'roots_bootstrap_responsive' );
	// 	wp_deregister_style('roots_bootstrap_responsive');
	// }
	wp_enqueue_style(
		'jquery_accordion',
		get_stylesheet_directory_uri() . '/assets/css/accordionImageMenu.css'
		);
}
add_action('wp_enqueue_scripts', 'cgs_scripts', 101);

?>