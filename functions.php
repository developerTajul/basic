<?php 

/**
*
* Starter Theme Setup
*
*/
add_action('after_setup_theme', 'starter_theme_setup');

function starter_theme_setup(){

	add_theme_support('title-tag');

}



/***
*
* enqueue scripts and styles
*
*/



/**
*
* Starter Theme frontend css files
*
*
*/
add_action('wp_enqueue_scripts', 'starter_css_files');

function starter_css_files(){

	wp_enqueue_style('starter-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '1.0.1', 'all');

	wp_enqueue_style('starter-font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');

	wp_enqueue_style('starter-animate', get_template_directory_uri().'/css/animate.min.css');

	wp_enqueue_style('starter-prettyPhoto', get_template_directory_uri().'/css/prettyPhoto.css');

	wp_enqueue_style('starter-main', get_template_directory_uri().'/css/main.css');

	wp_enqueue_style('starter-responsive', get_template_directory_uri().'/css/responsive.css');

	wp_enqueue_style( 'starter-style', get_stylesheet_uri() );



}




/**
*
* Starter Theme frontend js files
*
*
*/
add_action('wp_enqueue_scripts', 'starter_js_files');

function starter_js_files(){
	wp_enqueue_script('starter-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.0.1', true);

	wp_enqueue_script('starter-prettyPhoto', get_template_directory_uri().'/js/jquery.prettyPhoto.js', array('jquery'), '3.0.2', true);

	wp_enqueue_script('starter-isotope', get_template_directory_uri().'/js/jquery.isotope.min.js', array('jquery'), '3.0.2', true);
}




/**
* Starter Theme
* conditional js & css files
*
*
*/
add_action('wp_enqueue_scripts', 'starter_conditional_js_files');

function starter_conditional_js_files(){
	// Load the html5 shiv.
	wp_enqueue_script( 'starter-html5shiv', get_template_directory_uri().'/js/html5shiv.js', array(), '5.0.1', true);
	wp_script_add_data( 'starter-html5shiv', 'conditional', 'lt IE 9' );


	// Load the respond.
	wp_enqueue_script('starter-respond', get_template_directory_uri().'/js/respond.min.js');
	wp_script_add_data( 'starter-respond', 'conditional', 'lt IE 9' );
}












/**
 * Enqueue scripts and styles.
 */
// function comet_scripts() {
// 	wp_enqueue_style( 'comet-style', get_stylesheet_uri() );

// 	wp_enqueue_script( 'comet-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

// 	wp_enqueue_script( 'comet-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'comet_scripts' );