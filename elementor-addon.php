<?php
/**
 * Plugin Name: Eperi Elementor Addon
 * Description: Add custom Eperi widgets to Elementor.
 * Version:     0.0.1
 * Author:      Stefan Koehler
 * Author URI:  https://www.linkedin.com/in/stefankoehler82/
 * Text Domain: elementor-addon
 */

function register_eperi_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/image.php' );
	// require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Eperi_Image_Widget() );
	// $widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_eperi_widget' );

function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'eperi',
		[
			'title' => esc_html__( 'Eperi', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);
	// $elements_manager->add_category(
	// 	'second-category',
	// 	[
	// 		'title' => esc_html__( 'Second Category', 'textdomain' ),
	// 		'icon' => 'fa fa-plug',
	// 	]
	// );

}
add_action( 'elementor/elements/categories_registered', 'add_elementor_widget_categories' );