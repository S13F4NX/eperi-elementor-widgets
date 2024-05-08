<?php
class Eperi_HubSpot_Form_Widget extends \Elementor\Widget_Base
{

    public function get_name()
    {
        return 'hubSpotForm';
    }

    public function get_title()
    {
        return esc_html__('HubSpot Form', 'elementor-addon');
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
        return ['hubSpotForm'];
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

        <div style="background-color:red; color:white; display:inline; padding:0px 5px">HubSpot Form (Dyanmik control ⚡️)</div>

        <div class="hubSpotForm">
            <form>
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>

<?php
    }
}
