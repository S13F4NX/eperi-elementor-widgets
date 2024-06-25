<?php
class Eperi_Secondary_Button_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'secondaryButton';
    }

    public function get_title()
    {
        return esc_html__('Secondary Button', 'elementor-addon');
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
        return ['secondaryButton'];
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
            'cta',
            [
                'label' => esc_html__('Call to action', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => false,
                    'nofollow' => false,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );

        $this->add_control(
            'label',
            [
                'label' => esc_html__('Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Add label here', 'textdomain'),
            ]
        );






        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div class="button button_light_secondary">
            <?php if (!empty($settings['cta']['url'])) {
                $this->add_link_attributes('cta', $settings['cta']);
            }
            ?>
            <a <?php echo $this->get_render_attribute_string('cta'); ?>>
                <?php echo $settings['label']; ?>
            </a>
        </div>


<?php
    }
}
