<?php
class Eperi_Logo_Wall_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'logoWall';
    }

    public function get_title()
    {
        return esc_html__('Logo Wall', 'elementor-addon');
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
        return ['logoWall'];
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
            'logos',
            [
                'label' => esc_html__('Add Logos', 'textdomain'),
                'type' => \Elementor\Controls_Manager::GALLERY,
                'show_label' => false,
                'default' => [],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>
        <div>
            <h1>Logo Wall</h1>
            <div style="display:flex; gap:20px; border:1px solid red;">
                <?php
                foreach ($settings['logos'] as $image) {
                    echo '<img src="' . esc_attr($image['url']) . '" style="width:203px; height:203px; border:1px solid green;">';
                }
                ?>
            </div>
        </div>
<?php
    }
}
