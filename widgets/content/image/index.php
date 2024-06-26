<?php
class Eperi_Image_Widget extends \Elementor\Widget_Base
{

	public function get_name()
	{
		return 'image';
	}

	public function get_title()
	{
		return esc_html__('Image', 'elementor-addon');
	}

	public function get_icon()
	{
		return 'eicon-image';
	}

	public function get_categories()
	{
		return ['eperiContent'];
	}

	// public function get_keywords() {
	// 	return [ 'hello', 'world' ];
	// }

	public function get_style_depends()
	{
		return ['image'];
	}


	protected function register_controls()
	{

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__('Content', 'textdomain'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'image',
			[
				'label' => esc_html__('Choose Image', 'textdomain'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'toggle_border_radius_on_off',
			[
				'label' => esc_html__('Toggle Border Radius On-Off', 'textdomain'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__('On', 'textdomain'),
				'label_off' => esc_html__('Off', 'textdomain'),
				'return_value' => 'true',
				'default' => 'true',
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		// Get image url
?>
		<!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">Image</div> -->
		<img src="<?php echo esc_url($settings['image']['url']); ?>" alt="" class="default_image <?php if ('true' === $settings['toggle_border_radius_on_off']) {
																										echo 'border_radius_24';
																									} ?>">

<?php
	}
}
