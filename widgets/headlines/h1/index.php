<?php
class Eperi_H1_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'h1';
    }

    public function get_title()
    {
        return esc_html__('H1', 'elementor-addon');
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
        return ['h1'];
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
                'type' => \Elementor\Controls_Manager::TEXT,
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

        <!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">H1 Headline</div> -->
        <h1 class="title_size_1"><?php echo $settings['headline']; ?></h1>

<?php
    }
}
