<?php
class Eperi_Benefit_Icon_Card_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'benefitIconCard';
    }

    public function get_title()
    {
        return esc_html__('Benefit Icon', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['eperiCards'];
    }

    // public function get_keywords() {
    // 	return [ 'hello', 'world' ];
    // }

    public function get_style_depends()
    {
        return ['benefitIconCard'];
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
            'icon',
            [
                'label' => esc_html__('Icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
                // 'recommended' => [
                //     'fa-brands' => [
                //         'facebook',
                //         'twitter',
                //         'instagram',
                //     ],
                // ],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add your title here', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
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

        <div style="background-color:red; color:white; display:inline; padding:0px 5px">Benefit Icon</div>

        <div class="benefitIconCard" style="max-width: 200px;">
            <div>
                <div class="my-icon-wrapper">
                    <?php \Elementor\Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']); ?>
                </div>
                <div><?php echo $settings['title']; ?></div>
                <div><?php echo $settings['text']; ?></div>
            </div>
        </div>

<?php
    }
}
