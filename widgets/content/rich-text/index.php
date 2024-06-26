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

        $this->add_control(
            'text_color',
            [
                'label' => esc_html__('Text Color', 'textdomain'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .text-color' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->add_control(
            'bulletIcon',
            [
                'label' => esc_html__('Choose bullet icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $icon_url = esc_url($settings['bulletIcon']['url']);
        $content = $settings['text'];

        $icon = $settings['bulletIcon'];

        // $icon_html = \Elementor\Icons_Manager::render_icon($icon, ['aria-hidden' => 'true', 'class' => 'custom-bullet-icon']);

        ob_start();
        \Elementor\Icons_Manager::render_icon($settings['bulletIcon'], ['aria-hidden' => 'true']);
        $icon_html = ob_get_clean();

        if (!empty($content)) {
            $content = str_replace('<li>', '<li> ' . $icon_html . ' ', $content);
        }
?>



        <style>
            .customBulletList ul {
                list-style: none;
                padding-left: 0;
            }

            .customBulletList li {
                display: flex;
                align-items: start;
                gap: 30px;
                margin-bottom: 16px;
            }

            .customBulletList li svg {
                width: 24px !important;
                fill: #00B4B4;

            }

            .richText p {
                margin: 0;
                margin-bottom: 20px;
            }

            .richText p:last-child {
                margin-bottom: 0 !important;
            }
        </style>
        <div class="richText customBulletList copy_medium text-color"><?php echo $content; ?></div>
<?php
    }
}
