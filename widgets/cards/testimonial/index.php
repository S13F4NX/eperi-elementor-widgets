<?php
class Eperi_Testimonial_Card_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'testimonialCard';
    }

    public function get_title()
    {
        return esc_html__('Testimonial Card', 'elementor-addon');
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
        return ['testimonialCard'];
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
            'firstName',
            [
                'label' => esc_html__('First name', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add first name here', 'textdomain'),
                'placeholder' => esc_html__('Add first name here', 'textdomain'),
            ]
        );

        $this->add_control(
            'lastName',
            [
                'label' => esc_html__('Last lame', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add last name here', 'textdomain'),
                'placeholder' => esc_html__('Add last name here', 'textdomain'),
            ]
        );

        $this->add_control(
            'jobTitle',
            [
                'label' => esc_html__('Job title', 'textdomain'),
                'label_block' => true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add job title here', 'textdomain'),
                'placeholder' => esc_html__('Add job title here', 'textdomain'),
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

        <div class="testimonialCard">
            <div class="cardImage"><img src="<?php echo esc_url($settings['image']['url']); ?>" alt=""></div>
            <div class="cardText border_radius_16">
                <div class="title_size_4"><?php echo $settings['firstName']; ?> <?php echo $settings['lastName']; ?></div>
                <div class=""><?php echo $settings['jobTitle']; ?></div>
                <div class="copy_medium top_margin_16"><?php echo $settings['text']; ?></div>
            </div>
        </div>

<?php
    }
}
