<?php

/**
 * Plugin Name: Eperi Elementor Addon
 * Description: Add custom Eperi widgets to Elementor.
 * Version:     0.0.1
 * Author:      Stefan Koehler
 * Author URI:  https://www.linkedin.com/in/stefankoehler82/
 * Text Domain: elementor-addon
 */

function register_eperi_widget($widgets_manager)
{

	require_once(__DIR__ . '/widgets/stages/tertiary-stage/index.php');
	$widgets_manager->register(new \Eperi_Tertiary_Stage_Widget());

	require_once(__DIR__ . '/widgets/image/image.php');
	$widgets_manager->register(new \Eperi_Image_Widget());

	require_once(__DIR__ . '/widgets/logo-wall/index.php');
	$widgets_manager->register(new \Eperi_Logo_Wall_Widget());

	require_once(__DIR__ . '/widgets/cards/nav-card-single/index.php');
	$widgets_manager->register(new \Eperi_Nav_Card_Single_Widget());

	require_once(__DIR__ . '/widgets/cards/nav-card-double/index.php');
	$widgets_manager->register(new \Eperi_Nav_Card_Double_Widget());

	require_once(__DIR__ . '/widgets/info-box-content/index.php');
	$widgets_manager->register(new \Eperi_Info_Box_Content_Widget());


	require_once(__DIR__ . '/widgets/info-box-newsletter/index.php');
	$widgets_manager->register(new \Eperi_Info_Box_Newsletter_Widget());

	require_once(__DIR__ . '/widgets/buttons/primary-button/index.php');
	$widgets_manager->register(new \Eperi_Primary_Button_Widget());

	require_once(__DIR__ . '/widgets/buttons/secondary-button/index.php');
	$widgets_manager->register(new \Eperi_Secondary_Button_Widget());

	require_once(__DIR__ . '/widgets/teasers/social-media-teaser/index.php');
	$widgets_manager->register(new \Eperi_Social_Media_Teaser_Widget());

	require_once(__DIR__ . '/widgets/cards/testimonial/index.php');
	$widgets_manager->register(new \Eperi_Testimonial_Card_Widget());
}
add_action('elementor/widgets/register', 'register_eperi_widget');

function elementor_test_widgets_dependencies()
{

	/* Scripts */
	// wp_register_script( 'widget-script-1', plugins_url( 'assets/js/widget-script-1.js', __FILE__ ) );
	// wp_register_script( 'widget-script-2', plugins_url( 'assets/js/widget-script-2.js', __FILE__ ), [ 'external-library' ] );
	// wp_register_script( 'external-library', plugins_url( 'assets/js/libs/external-library.js', __FILE__ ) );

	wp_register_style('tertiaryStage', plugins_url('widgets/stages/tertiary-stage/style.css', __FILE__));
	wp_register_style('image', plugins_url('widgets/image/image.css', __FILE__));
	wp_register_style('logoWall', plugins_url('widgets/logo-wall/style.css', __FILE__));
	wp_register_style('navCardSingle', plugins_url('widgets/cards/nav-card-single/style.css', __FILE__));
	wp_register_style('navCardDouble', plugins_url('widgets/cards/nav-card-double/style.css', __FILE__));
	wp_register_style('infoBoxContent', plugins_url('widgets/info-box-content/style.css', __FILE__));
	wp_register_style('infoBoxNewsletter', plugins_url('widgets/info-box-newsletter/style.css', __FILE__));
	wp_register_style('primaryButton', plugins_url('widgets/buttons/primary-button/style.css', __FILE__));
	wp_register_style('secondaryButton', plugins_url('widgets/buttons/secondary-button/style.css', __FILE__));
	wp_register_style('socialMediaTeaser', plugins_url('widgets/teasers/social-media-teaser/style.css', __FILE__));
	wp_register_style('testimonialCard', plugins_url('widgets/cards/testimonial/style.css', __FILE__));

	wp_register_style('external-framework', plugins_url('assets/css/libs/external-framework.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'elementor_test_widgets_dependencies');

function add_elementor_widget_categories($elements_manager)
{

	$elements_manager->add_category(
		'eperi',
		[
			'title' => esc_html__('Eperi', 'textdomain'),
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
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');
