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

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>

		<img src="" alt="">

		<?php
	}
}