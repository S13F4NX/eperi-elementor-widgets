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
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add your title here', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'label_block' => true,
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

        <div class="infoBoxContent border_radius_24">
            <h2 class="title_size_3"><?php echo $settings['title']; ?></h2>
            <div class="copy_medium top_margin_32"><?php echo $settings['text']; ?></div>

            <div style="display: flex; gap: 20px; align-items: center;" class="top_margin_32">
                <div class="button button_light_secondary">
                    <?php if (!empty($settings['cta']['url'])) {
                        $this->add_link_attributes('cta', $settings['cta']);
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string('cta'); ?>>
                        Add CTA here
                    </a>
                </div>
                <div class="button button_light_tertiary">
                    <?php if (!empty($settings['link']['url'])) {
                        $this->add_link_attributes('link', $settings['link']);
                    }
                    ?>
                    <a <?php echo $this->get_render_attribute_string('link'); ?> style="display:flex; align-items:center; gap:5px">
                        <div>Add link here</div>
                        <div><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.2725 9.6337L10.2874 2.32095C9.99052 2.08346 9.55512 2.30116 9.55512 2.68708V8.88883H1.55556C1.00327 8.88883 0.555557 9.33655 0.555557 9.88883V10.1111C0.555557 10.6633 1.00327 11.1111 1.55556 11.1111H9.55512V17.3225C9.55512 17.6985 9.99052 17.9162 10.2775 17.6787L19.2725 10.3561C19.5001 10.1681 19.5001 9.82171 19.2725 9.6337Z" fill="#1D394B" />
                            </svg></div>
                    </a>
                </div>
            </div>
        </div>

<?php
    }
}
