<?php
class Eperi_Info_Box_Newsletter_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'infoBoxNewsletter';
    }

    public function get_title()
    {
        return esc_html__('Info Box Newsletter', 'elementor-addon');
    }

    public function get_icon()
    {
        return 'eicon-header';
    }

    public function get_categories()
    {
        return ['eperi'];
    }

    // public function get_keywords() {
    // 	return [ 'hello', 'world' ];
    // }

    public function get_style_depends()
    {
        return ['infoBoxNewsletter'];
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



        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
?>

        <div class="infoBoxContent" style="display:grid; grid-template-columns: 1fr 1fr;">
            <div>
                <h2><?php echo $settings['title']; ?></h2>
                <div><?php echo $settings['text']; ?></div>
            </div>
            <div>
                <form>
                    <input type="email" placeholder="Email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>

<?php
    }
}
