<?php
class Eperi_Nav_Card_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'navCard';
    }

    public function get_title()
    {
        return esc_html__('Nav Card', 'elementor-addon');
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
        return ['navCard'];
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

        <!-- <div style="background-color:red; color:white; display:inline; padding:0px 5px">Nav Card</div> -->

        <div class="navCard border_radius_16">

            <h3 class="title_size_3 "><?php echo $settings['title']; ?></h3>
            <div class="navLink">
                <?php if (!empty($settings['link']['url'])) {
                    $this->add_link_attributes('link', $settings['link']);
                }
                ?>
                <a <?php echo $this->get_render_attribute_string('link'); ?>><svg width="24" height="24" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.3452 6.67038L9.25865 0.0889053C8.99147 -0.124837 8.59961 0.0710926 8.59961 0.418424V6.00077C8.58647 6.00026 8.57327 6 8.56 6L1.5 6C0.947715 6 0.5 6.44772 0.5 7C0.5 7.55229 0.947715 8 1.5 8L8.56 8C8.57327 8 8.58647 7.99974 8.59961 7.99923V13.5903C8.59961 13.9287 8.99147 14.1246 9.24974 13.9109L17.3452 7.32051C17.5501 7.1513 17.5501 6.83959 17.3452 6.67038Z" fill="black" />
                    </svg></a>
            </div>
        </div>

<?php
    }
}
