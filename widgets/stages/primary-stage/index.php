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

        <div class="tertiaryStage">
            <!-- <div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div> -->

            <div style="grid-column: col-start / span 12;">
                <div class="breadcrumb">Pagecategory – current Page title</div>
                <div class="title">Headline Tertiary Stage pagetitle</div>

            </div>
            <div style="grid-column: 2 / span 9">
                <div>Stage description</div>
                <div>CTAs</div>
            </div>
            <div style="grid-column: col-start 11 / span 2;" class="stageImage">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
            </div>

        </div>

<?php
    }
}