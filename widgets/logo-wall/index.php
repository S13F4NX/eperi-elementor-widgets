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
        <div class="logoWall" style="margin-left:-110px;">
            <div style="width:74px">
                <div style="background-color:#00B4B4; width:4px; height:24px; border-radius: 0 0 4px 0"></div>
                <div style="background-color:#00B4B4; width:1px; height:179px"></div>
            </div>
            <?php
            foreach ($settings['logos'] as $image) { ?>
                <div class="logo border_radius_12">
                    <img src="<?php echo esc_attr($image['url']); ?>" alt="">
                </div>
            <?php }
            ?>
        </div>
<?php
    }
}
