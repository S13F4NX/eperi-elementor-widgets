<?php
class Eperi_Lastest_News_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'lastestNews';
    }

    public function get_title()
    {
        return esc_html__('Lastest News', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['eperiDynamic'];
    }

    // public function get_keywords() {
    // 	return [ 'hello', 'world' ];
    // }

    public function get_style_depends()
    {
        return ['lastestNews'];
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



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div style="background-color:red; color:white; display:inline; padding:0px 5px">Latest News (Dyanmik control ⚡️)</div>

        <div class="latestNews">
            <div style="display: grid; grid-template-columns: 1fr 1fr 1fr;">
                <div>Render News here</div>
                <div>Render News here</div>
                <div>Render News here</div>
            </div>
            <div>CTA</div>
        </div>

<?php
    }
}
