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

	require_once( __DIR__ . '/widgets/hello-world-widget-1.php' );
	require_once( __DIR__ . '/widgets/hello-world-widget-2.php' );

	$widgets_manager->register( new \Elementor_Hello_World_Widget_1() );
	$widgets_manager->register( new \Elementor_Hello_World_Widget_2() );

}
add_action( 'elementor/widgets/register', 'register_eperi_widget' );