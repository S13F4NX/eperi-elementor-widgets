<?php
class Eperi_Image_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'image';
	}

	public function get_title() {
		return esc_html__( 'Image', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-image';
	}

	public function get_categories() {
		return [ 'eperi' ];
	}

	// public function get_keywords() {
	// 	return [ 'hello', 'world' ];
	// }

	public function get_style_depends() {
		return [ 'image' ];
	}


	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'textdomain' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {
		$settings = $this->get_settings_for_display();

		// Get image url
		echo '<img src="' . esc_url( $settings['image']['url'] ) . '" alt="">';

		// // Get image by id
		// echo wp_get_attachment_image( $settings['image']['id'], 'thumbnail' );
	}



}