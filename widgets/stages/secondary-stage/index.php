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
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                // 'default' => esc_html__('Add your headline here', 'textdomain'),
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

        $this->add_control(
            'link1',
            [
                'label' => esc_html__('Link 1', 'textdomain'),
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
            'label1',
            [
                'label' => esc_html__('Label 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Add label here', 'textdomain'),
            ]
        );

        $this->add_control(
            'icon1',
            [
                'label' => esc_html__('Icon 1', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->add_control(
            'link2',
            [
                'label' => esc_html__('Link 2', 'textdomain'),
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
            'label2',
            [
                'label' => esc_html__('Label 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => esc_html__('Add label here', 'textdomain'),
            ]
        );

        $this->add_control(
            'icon2',
            [
                'label' => esc_html__('Icon 2', 'textdomain'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-circle',
                    'library' => 'fa-solid',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div class="secondaryStage border">

            <div class="stageTeaser border_radius_24">
                <a href="" class="breadcrumb subline">
                    <div>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.726361 10.3663L9.71144 17.679C10.0083 17.9165 10.4437 17.6988 10.4437 17.3129V11.1111L18.4472 11.1111C18.9995 11.1111 19.4472 10.6634 19.4472 10.1111V9.8889C19.4472 9.33661 18.9995 8.8889 18.4472 8.8889L10.4437 8.8889V2.67748C10.4437 2.30146 10.0083 2.08376 9.72133 2.32125L0.726361 9.64389C0.498765 9.8319 0.498765 10.1782 0.726361 10.3663Z" fill="white" />
                        </svg>
                    </div>
                    <div>
                        page category – current page title <span class="dynamic">[DYNAMIC ⚡️]</span>
                    </div>
                </a>
                <h1 class="title_size_1 top_margin_8"><?php echo nl2br($settings['headline']); ?></h1>

                <?php

                if (!empty($settings['label1'])) { ?>
                    <div class=" top_margin_56">
                        <a href="<?php echo $this->get_render_attribute_string('link1'); ?>" class="stageLink">
                            <?php echo !empty($settings['label1']) ? $settings['label1'] : 'Mehr erfahren'; ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['icon1'], ['aria-hidden' => 'true', 'class' => 'icon_svg']); ?>
                        </a>
                    </div>
                <?php } ?>



                <?php if (!empty($settings['label2'])) { ?>
                    <div class="top_margin_16">
                        <a href="<?php echo $this->get_render_attribute_string('link2'); ?>" class="stageLink">
                            <?php echo !empty($settings['label2']) ? $settings['label2'] : 'Mehr erfahren'; ?>
                            <?php \Elementor\Icons_Manager::render_icon($settings['icon2'], ['aria-hidden' => 'true', 'class' => 'icon_svg']); ?>
                        </a>
                    </div>
                <?php } ?>

            </div>
            <div class="stageImage">
                <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
            </div>

        </div>

<?php
    }
}
