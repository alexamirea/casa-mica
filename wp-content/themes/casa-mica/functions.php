<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 6/14/2020
 * Time: 10:37
 */

function add_theme_scripts() {
// Enqueue stylesheets and load them into the header
	wp_enqueue_style( 'style', get_stylesheet_uri(), false, 1.0, all );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css', false, 1.0, all );
	wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', false, 1.0, all );
	wp_enqueue_style( 'slick-theme-css', get_template_directory_uri() . '/assets/css/slick-theme.css', 'slick-css', 1.0, all );
	wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui-1.12.1/jquery-ui.min.css', 'jquery', 1.0, all );

	// Enqueue scripts and load them where necessary
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', '', 1.0, true);
	wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.4.1.min.js', 'jquery', 1.0, true);
	wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui-1.12.1/jquery-ui.min.js', 'jquery', 1.0, true);
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', '', 1.0, true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.js', '', 1.0, true);
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/custom.js', 'jquery', 1.0, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );




