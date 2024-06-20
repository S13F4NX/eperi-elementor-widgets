<?php
class Eperi_H2_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'h2';
    }

    public function get_title()
    {
        return esc_html__('H2', 'elementor-addon');
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
        return ['h2'];
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
                'label' => esc_html__('Headline', 'textdomain'),
                'label_block'    => true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => esc_html__('Add your headline here', 'textdomain'),
                'placeholder' => esc_html__('Type your headline here', 'textdomain'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">H2 Headline</div> -->
        <h2 class="title_size_2"><?php echo nl2br($settings['headline']); ?></h2>

<?php
    }
}
