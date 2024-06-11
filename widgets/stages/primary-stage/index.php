<?php
class Eperi_Primary_Stage_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'primaryStage';
    }

    public function get_title()
    {
        return esc_html__('Primary Stage', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['eperiStages'];
    }

    // public function get_keywords() {
    // 	return [ 'hello', 'world' ];
    // }

    public function get_style_depends()
    {
        return ['primaryStage'];
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

        <div class="primaryStage bottom_margin_56 top_margin_40">
            <div class="">
                <div class="subline">Pagecategory – current Page title</div>
                <div class="title_size_1">Headline Primary Stage pagetitle</div>
            </div>

            <div class="top_margin_56" style="display: grid; grid-template-columns: 0.3fr 0.7fr; gap:100px">
                <div style="display:block">
                    <div style="position:relative; border-left:1px solid #00B4B4; padding-left:115px;">
                        <div class="copy_medium">Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. </div>
                        <div class="button button_light_primary top_margin_56">Eperi Button</div>
                        <div style="position:absolute; top:0px; left:0px; background-color:#00B4B4; width:4px; height:24px; border-radius: 0 0 4px 0"></div>
                    </div>
                </div>
                <div><img src="<?php echo esc_url($settings['image']['url']); ?>" alt="" class="default_image border_radius_24"></div>
            </div>
        </div>

<?php
    }
}
