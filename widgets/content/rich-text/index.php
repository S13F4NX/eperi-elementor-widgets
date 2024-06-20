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
            'bulletIcon',
            [
                'label' => esc_html__('Choose bullet icon', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
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
?>



        <style>
            .richText ul {
                list-style-type: none;
                /* Remove default bullets */
                padding-left: 0px;
                /* Adjust as needed */
            }

            .richText li {
                position: relative;
                padding-left: 60px;
                margin-bottom: 16px;
                /* Space for the custom icon */
            }



            .richText ul li::before {
                content: '';
                /* Replace with the path to your icon */
                background-size: contain;
                /* Ensure the image fits within the defined size */
                background-repeat: no-repeat;
                /* Prevent the image from repeating */
                position: absolute;
                left: 0;
                top: 20px;
                transform: translateY(-50%);
                /* Center the icon vertically */
                width: 32px;
                /* Define the width of the icon */
                height: 32px;
                /* Define the height of the icon */

                background-color: #00b4b4 !important;
                -webkit-mask-image: url('<?php echo esc_url($settings['bulletIcon']['url']) ?>');
                mask-image: url('<?php echo esc_url($settings['bulletIcon']['url']) ?>');
            }



            .richText p {
                margin: 0;
                margin-bottom: 20px;
            }

            .richText p:last-child {
                margin-bottom: 0 !important;
            }
        </style>
        <div class="richText copy_medium"><?php echo $settings['text']; ?></div>


<?php
    }
}
