<?php
class Eperi_Info_Box_Content_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'infoBoxContent';
    }

    public function get_title()
    {
        return esc_html__('Info Box Content', 'elementor-addon');
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
        return ['infoBoxContent'];
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

        $this->add_control(
            'cta',
            [
                'label' => esc_html__('Call to action', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );


        $this->add_control(
            'link',
            [
                'label' => esc_html__('Link', 'textdomain'),
                'type' => \Elementor\Controls_Manager::URL,
                'options' => ['url', 'is_external', 'nofollow'],
                'default' => [
                    'url' => '',
                    'is_external' => true,
                    'nofollow' => true,
                    // 'custom_attributes' => '',
                ],
                'label_block' => true,
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div class="infoBoxContent">
            <div>
                <h2><?php echo $settings['title']; ?></h2>
                <div><?php echo $settings['text']; ?></div>

                <div style="display: flex; gap: 20px;">
                    <div>
                        <?php if (!empty($settings['cta']['url'])) {
                            $this->add_link_attributes('cta', $settings['cta']);
                        }
                        ?>
                        <a <?php echo $this->get_render_attribute_string('cta'); ?>>
                            Add CTA here
                        </a>
                    </div>
                    <div>
                        <?php if (!empty($settings['link']['url'])) {
                            $this->add_link_attributes('link', $settings['link']);
                        }
                        ?>
                        <a <?php echo $this->get_render_attribute_string('link'); ?>>
                            Add link here
                        </a>
                    </div>
                </div>

            </div>
        </div>

<?php
    }
}
