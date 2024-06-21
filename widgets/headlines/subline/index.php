<?php
class Eperi_Subline_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'subline';
    }

    public function get_title()
    {
        return esc_html__('Subline', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['eperiHeadlines'];
    }

    // public function get_keywords() {
    // 	return [ 'hello', 'world' ];
    // }

    public function get_style_depends()
    {
        return ['subline'];
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
            'headline',
            [
                'label' => esc_html__('Subline', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                // 'default' => esc_html__('Add your subline here', 'textdomain'),
                'placeholder' => esc_html__('Type your subline here', 'textdomain'),
            ]
        );

        $this->add_control(
            'headline_color',
            [
                'label' => esc_html__('Headline Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .headline-color' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">H4 Headline</div> -->
        <h4 class="title_size_4 headline-color"><?php echo $settings['headline']; ?></h4>

<?php
    }
}
