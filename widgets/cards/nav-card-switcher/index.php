<?php
class Eperi_Nav_Card_Switcher_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'navCardSwitcher';
    }

    public function get_title()
    {
        return esc_html__('Nav Card Switcher', 'elementor-addon');
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
        return ['navCardSwitcher'];
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

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'link_text',
            [
                'label' => __('Link Text', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Link Text', 'plugin-name'),
                'label_block' => true,
            ]
        );


        $repeater->add_control(
            'link_url',
            [
                'label' => __('Link URL', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('https://your-link.com', 'plugin-name'),
                'show_external' => true, // Show the 'open in new tab' option
                'default' => [
                    'url' => '',
                    'is_external' => false,
                    'nofollow' => false,
                ],
            ]
        );

        $this->add_control(
            'links_list',
            [
                'label' => __('Links List', 'plugin-name'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'link_text' => __('Link #1', 'plugin-name'),
                        'link_url' => ['url' => '#'],
                    ],
                    [
                        'link_text' => __('Link #2', 'plugin-name'),
                        'link_url' => ['url' => '#'],
                    ],
                ],
                'title_field' => '{{{ link_text }}}',
            ]
        );



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>


        <div class="navCardSwitcher border_radius_24">
            <h3 class="title_size_4"><?php echo $settings['title']; ?></h3>
            <div class="copy_medium top_margin_16"><?php echo $settings['text']; ?></div>

            <?php if (!empty($settings['cta']['url'])) {
                $this->add_link_attributes('link', $settings['cta']);
            }
            ?>



            <div class="selector">
                <div> <select name="cars" id="cars">
                        <?php $settings = $this->get_settings_for_display();
                        $links = $settings['links_list'];

                        if (!empty($links)) {
                            foreach ($links as $link) {
                                $target = $link['link_url']['is_external'] ? ' target="_blank"' : '';
                                $nofollow = $link['link_url']['nofollow'] ? ' rel="nofollow"' : '';
                                echo '<option><a href="' . esc_url($link['link_url']['url']) . '"' . $target . $nofollow . '>' . esc_html($link['link_text']) . '</a></option>';
                            }
                        } ?>
                        <!-- <option value="label1">Label 1</option>
                        <option value="label2">Label 2</option>
                        <option value="label3">Label 3</option>
                        <option value="label4">Label 4</option> -->
                    </select></div>
                <div>
                    <button class="button button_light_secondary">Mehr entdecken</button>
                </div>

            </div>




        </div>
<?php
    }
}
