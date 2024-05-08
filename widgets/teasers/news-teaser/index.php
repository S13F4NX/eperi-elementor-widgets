<?php
class Eperi_News_Teaser_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'newsTeaser';
    }

    public function get_title()
    {
        return esc_html__('News teaser', 'elementor-addon');
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
        return ['newsTeaser'];
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
            'image',
            [
                'label' => esc_html__('Choose Image', 'textdomain'),
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

        <div style="background-color:red; color:white; display:inline; padding:0px 5px">NewsTeaser</div>

        <div class="newsTeaser">
            <div><img src="<?php echo esc_url($settings['image']['url']); ?>" alt=""></div>
            <div>
                <h2><?php echo $settings['title']; ?></h2>
                <div><?php echo $settings['text']; ?></div>

                <?php if (!empty($settings['link']['url'])) {
                    $this->add_link_attributes('link', $settings['link']);
                }
                ?>
                <a <?php echo $this->get_render_attribute_string('link'); ?>>
                    Add link here
                </a>
            </div>
        </div>

<?php
    }
}
