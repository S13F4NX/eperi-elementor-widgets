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
	// Boilerplates
	require_once(__DIR__ . '/widgets/boilerplate/index.php');
	$widgets_manager->register(new \Eperi_Boilerplate_Widget());

	require_once(__DIR__ . '/widgets/stages/primary-stage/index.php');
	$widgets_manager->register(new \Eperi_Primary_Stage_Widget());

	require_once(__DIR__ . '/widgets/stages/secondary-stage/index.php');
	$widgets_manager->register(new \Eperi_Secondary_Stage_Widget());

	require_once(__DIR__ . '/widgets/stages/tertiary-stage/index.php');
	$widgets_manager->register(new \Eperi_Tertiary_Stage_Widget());



	require_once(__DIR__ . '/widgets/logo-wall/index.php');
	$widgets_manager->register(new \Eperi_Logo_Wall_Widget());

	// Headlines
	require_once(__DIR__ . '/widgets/headlines/h1/index.php');
	$widgets_manager->register(new \Eperi_H1_Widget());

	require_once(__DIR__ . '/widgets/headlines/h2/index.php');
	$widgets_manager->register(new \Eperi_H2_Widget());

	require_once(__DIR__ . '/widgets/headlines/h3/index.php');
	$widgets_manager->register(new \Eperi_H3_Widget());

	require_once(__DIR__ . '/widgets/headlines/h4/index.php');
	$widgets_manager->register(new \Eperi_H4_Widget());

	// Cards & Teasers
	require_once(__DIR__ . '/widgets/cards/nav-card/index.php');
	$widgets_manager->register(new \Eperi_Nav_Card_Widget());

	require_once(__DIR__ . '/widgets/cards/nav-card-switcher/index.php');
	$widgets_manager->register(new \Eperi_Nav_Card_Switcher_Widget());

	require_once(__DIR__ . '/widgets/cards/content-card-horizontal/index.php');
	$widgets_manager->register(new \Eperi_Content_Card_Horizontal_Widget());

	require_once(__DIR__ . '/widgets/cards/content-card-vertical/index.php');
	$widgets_manager->register(new \Eperi_Content_Card_Vertical_Widget());

	require_once(__DIR__ . '/widgets/cards/text-cta-card/index.php');
	$widgets_manager->register(new \Eperi_Text_Cta_Card_Widget());

	require_once(__DIR__ . '/widgets/cards/job-offer-card/index.php');
	$widgets_manager->register(new \Eperi_Job_Offer_Card_Widget());

	require_once(__DIR__ . '/widgets/cards/benefit-icon-card/index.php');
	$widgets_manager->register(new \Eperi_Benefit_Icon_Card_Widget());

	require_once(__DIR__ . '/widgets/teasers/blog-teaser/index.php');
	$widgets_manager->register(new \Eperi_Blog_Teaser_Widget());

	require_once(__DIR__ . '/widgets/teasers/news-teaser/index.php');
	$widgets_manager->register(new \Eperi_News_Teaser_Widget());




	// Content elements
	require_once(__DIR__ . '/widgets/content/rich-text/index.php');
	$widgets_manager->register(new \Eperi_Rich_Text_Widget());

	require_once(__DIR__ . '/widgets/content/image/index.php');
	$widgets_manager->register(new \Eperi_Image_Widget());

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

	// Dynamic Content
	require_once(__DIR__ . '/widgets/dynamic-content/latest-news/index.php');
	$widgets_manager->register(new \Eperi_Lastest_News_Widget());

	require_once(__DIR__ . '/widgets/dynamic-content/hubspot-form/index.php');
	$widgets_manager->register(new \Eperi_HubSpot_Form_Widget());
}
add_action('elementor/widgets/register', 'register_eperi_widget');

function elementor_test_widgets_dependencies()
{

	/* Scripts */
	// wp_register_script( 'widget-script-1', plugins_url( 'assets/js/widget-script-1.js', __FILE__ ) );
	// wp_register_script( 'widget-script-2', plugins_url( 'assets/js/widget-script-2.js', __FILE__ ), [ 'external-library' ] );
	// wp_register_script( 'external-library', plugins_url( 'assets/js/libs/external-library.js', __FILE__ ) );

	/* Styles */


	wp_register_style('boilerplate', plugins_url('widgets/boilerplate/style.css', __FILE__));

	// Stages
	wp_register_style('primaryStage', plugins_url('widgets/stages/primary-stage/style.css', __FILE__));
	wp_register_style('secondaryStage', plugins_url('widgets/stages/secondary-stage/style.css', __FILE__));
	wp_register_style('tertiaryStage', plugins_url('widgets/stages/tertiary-stage/style.css', __FILE__));

	// Cards & Teasers
	wp_register_style('navCard', plugins_url('widgets/cards/nav-card/style.css', __FILE__));
	wp_register_style('navCardSwitcher', plugins_url('widgets/cards/nav-card-switcher/style.css', __FILE__));
	wp_register_style('contentCardHorizontal', plugins_url('widgets/cards/content-card-horizontal/style.css', __FILE__));
	wp_register_style('contentCardVertical', plugins_url('widgets/cards/content-card-vertical/style.css', __FILE__));
	wp_register_style('textCtaCard', plugins_url('widgets/cards/text-cta-card/style.css', __FILE__));
	wp_register_style('jobOfferCard', plugins_url('widgets/cards/job-offer-card/style.css', __FILE__));
	wp_register_style('benefitIconCard', plugins_url('widgets/cards/benefit-icon-card/style.css', __FILE__));
	wp_register_style('blogTeaser', plugins_url('widgets/teasers/blog-teaser/style.css', __FILE__));
	wp_register_style('newsTeaser', plugins_url('widgets/teasers/news-teaser/style.css', __FILE__));


	wp_register_style('image', plugins_url('widgets/image/content/image.css', __FILE__));
	wp_register_style('logoWall', plugins_url('widgets/logo-wall/style.css', __FILE__));

	wp_register_style('infoBoxContent', plugins_url('widgets/info-box-content/style.css', __FILE__));
	wp_register_style('infoBoxNewsletter', plugins_url('widgets/info-box-newsletter/style.css', __FILE__));
	wp_register_style('primaryButton', plugins_url('widgets/buttons/primary-button/style.css', __FILE__));
	wp_register_style('secondaryButton', plugins_url('widgets/buttons/secondary-button/style.css', __FILE__));
	wp_register_style('socialMediaTeaser', plugins_url('widgets/teasers/social-media-teaser/style.css', __FILE__));
	wp_register_style('testimonialCard', plugins_url('widgets/cards/testimonial/style.css', __FILE__));

	// Dynamic Content
	wp_register_style('lastestNews', plugins_url('widgets/dynamic-content/latest-news/style.css', __FILE__));
	wp_register_style('hubSpotForm', plugins_url('widgets/dynamic-content/hubspot-form/style.css', __FILE__));

	wp_register_style('external-framework', plugins_url('assets/css/libs/external-framework.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'elementor_test_widgets_dependencies');

function add_elementor_widget_categories($elements_manager)
{
	$elements_manager->add_category(
		'eperiBoilerplates',
		[
			'title' => esc_html__('Eperi Boilerplates', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'eperiStages',
		[
			'title' => esc_html__('Eperi Stages', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'eperiHeadlines',
		[
			'title' => esc_html__('Eperi Headlines', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'eperiContent',
		[
			'title' => esc_html__('Eperi Content', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'eperiCards',
		[
			'title' => esc_html__('Eperi Cards & Teasers', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);

	$elements_manager->add_category(
		'eperiDynamic',
		[
			'title' => esc_html__('Eperi Dynamic Content', 'textdomain'),
			'icon' => 'fa fa-plug',
		]
	);
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');
