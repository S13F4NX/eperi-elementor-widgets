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
            'headline',
            [
                'label' => esc_html__('Headline', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                // 'default' => esc_html__('Add your headline here', 'textdomain'),
                'placeholder' => esc_html__('Type your headline here', 'textdomain'),
            ]
        );

        $this->add_control(
            'text',
            [
                'label' => esc_html__('Text', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                // 'default' => esc_html__('Add your headline here', 'textdomain'),
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

        $this->add_control(
            'topImage',
            [
                'label' => esc_html__('Choose Top Image', 'textdomain'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'label',
            [
                'label' => esc_html__('Button Label', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Add label here', 'textdomain'),
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
            'hubSpotCTA',
            [
                'label' => esc_html__('HubSpot CTA', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                // 'default' => esc_html__('Add your title here', 'textdomain'),
                'placeholder' => esc_html__('Type your title here', 'textdomain'),
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
                <a href="" class="breadcrumb subline">
                    <div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.726361 10.3663L9.71144 17.679C10.0083 17.9165 10.4437 17.6988 10.4437 17.3129V11.1111L18.4472 11.1111C18.9995 11.1111 19.4472 10.6634 19.4472 10.1111V9.8889C19.4472 9.33661 18.9995 8.8889 18.4472 8.8889L10.4437 8.8889V2.67748C10.4437 2.30146 10.0083 2.08376 9.72133 2.32125L0.726361 9.64389C0.498765 9.8319 0.498765 10.1782 0.726361 10.3663Z" fill="#1C1C1C" />
                        </svg>
                    </div>
                    <div>
                        page category – current page title <span class="dynamic">[DYNAMIC ⚡️]</span>
                    </div>
                </a>
                <div class="title_size_1"><?php echo nl2br($settings['headline']); ?></div>
            </div>

            <div class="top_margin_56" style="display: grid; grid-template-columns: 0.4fr 0.6fr; gap:100px">
                <div style="display:block">
                    <div style="position:relative; border-left:1px solid #00B4B4; padding-left:115px;">
                        <div class="copy_medium" style="width:100%"><?php echo $settings['text']; ?></div>
                        <?php

                        if (!empty($settings['hubSpotCTA'])) {
                            echo $settings['hubSpotCTA'];
                        } else { ?>
                            <div class="button button_light_primary top_margin_56">
                                <?php if (!empty($settings['cta']['url'])) {
                                    $this->add_link_attributes('cta', $settings['cta']);
                                }
                                ?>
                                <a <?php echo $this->get_render_attribute_string('cta'); ?>>
                                    <?php echo !empty($settings['label']) ? $settings['label'] : 'Mehr erfahren'; ?>
                                </a>
                            </div>
                        <?php } ?>
                        <div style="position:absolute; top:0px; left:0px; background-color:#00B4B4; width:4px; height:24px; border-radius: 0 0 4px 0"></div>
                    </div>
                </div>
                <div><img src="<?php echo esc_url($settings['image']['url']); ?>" alt="" class="default_image border_radius_24"></div>
            </div>

            <div class="topimage"><img src="<?php echo esc_url($settings['topImage']['url']); ?>" alt="" class="default_image border_radius_24"></div>

        </div>

<?php
    }
}
