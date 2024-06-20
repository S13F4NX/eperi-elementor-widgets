<?php
class Eperi_Text_Cta_Card_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'textCtaCard';
    }

    public function get_title()
    {
        return esc_html__('Text CTA Card', 'elementor-addon');
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
        return ['textCtaCard'];
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
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'placeholder' => esc_html__('Type your text here', 'textdomain'),
            ]
        );

        $this->add_control(
            'cta',
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

        $this->add_control(
            'cta_label',
            [
                'label' => esc_html__('CTA Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
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

        $this->add_control(
            'link_label',
            [
                'label' => esc_html__('Link Label', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>


        <div class="textCtaCard border_radius_24">
            <h3 class="title_size_4"><?php echo $settings['title']; ?></h3>
            <div class="copy_medium top_margin_16"><?php echo $settings['text']; ?></div>

            <?php if (!empty($settings['cta']['url'])) {
                $this->add_link_attributes('link', $settings['cta']);
            }
            ?>
            <a <?php echo $this->get_render_attribute_string('cta'); ?> class="button button_light_primary top_margin_32">
                <?php echo $settings['cta_label']; ?>
            </a>

            <div class="top_margin_24">
                <?php if (!empty($settings['link']['url'])) {
                    $this->add_link_attributes('link', $settings['link']);
                }
                ?>
                <a <?php echo $this->get_render_attribute_string('link'); ?> class="button_light_tertiary">
                    <?php echo $settings['link_label']; ?>
                </a>

            </div>
        </div>
<?php
    }
}
