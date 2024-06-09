<?php
class Eperi_Rich_Text_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'richText';
    }

    public function get_title()
    {
        return esc_html__('Rich Text', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
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
        return ['richText'];
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
            'text',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => esc_html__('Add your text here', 'textdomain'),
                'placeholder' => esc_html__('Type your text here', 'textdomain'),
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">Rich Text</div> -->
        <div class="richText copy_medium"><?php echo $settings['text']; ?></div>

<?php
    }
}
