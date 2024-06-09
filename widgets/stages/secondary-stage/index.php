<?php
class Eperi_Secondary_Stage_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'secondaryStage';
    }

    public function get_title()
    {
        return esc_html__('Secondary Stage', 'elementor-addon');
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
        return ['secondaryStage'];
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
            'headline',
            [
                'label' => esc_html__('Headline', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => esc_html__('Add your headline here', 'textdomain'),
                'placeholder' => esc_html__('Type your headline here', 'textdomain'),
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

        <div class="secondaryStage ">

            <div class="stageTeaser border_radius_24">
                <div class="breadcrumb subline">Breadcrumb</div>
                <h1 class="title_size_1 top_margin_8"><?php echo $settings['headline']; ?></h1>
                <!-- <div class="top_margin_56">Demo anfragen</div>
                <div class="top_margin_16">Kontakt</div> -->
            </div>

            <div class="stageImage">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
            </div>

            <!-- 
            <div style="grid-column: col-start / span 12;">
                <div class="breadcrumb">Pagecategory – current Page title</div>
                <div class="title">Headline Tertiary Stage pagetitle</div>

            </div>
            <div style="grid-column: 2 / span 9">
                <div>Stage description</div>
                <div>CTAs</div>
            </div>
            <div style="grid-column: col-start 11 / span 2;" class="stageImage">
                
            </div> -->

        </div>

<?php
    }
}
