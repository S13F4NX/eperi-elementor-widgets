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

        if (!empty($content)) {
            // Replace default bullets with the uploaded icon
            $content = str_replace('<li>', '<li><img src="' . $icon_url . '" alt="" class="custom-bullet-icon" /> ', $content);
            echo '<div class="richText copy_medium text-color  custom-bullet-list">';
            echo $content;
            echo '</div>';
        }
?>



        <style>
            .custom-bullet-list ul {
                list-style: none;
                padding-left: 0;
            }

            .custom-bullet-list li {
                display: flex;
                align-items: start;
                gap: 30px;
                margin-bottom: 16px;
            }

            .custom-bullet-icon {
                width: 24px;
                /* Adjust icon size as needed */
                height: 24px;
            }



            .richText p {
                margin: 0;
                margin-bottom: 20px;
            }

            .richText p:last-child {
                margin-bottom: 0 !important;
            }
        </style>
        <!-- <div class="richText listStyle copy_medium text-color"><?php echo $settings['text']; ?></div> -->
<?php
    }
}
