<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET CALENDER
    =============================
*/

class Foucs_Calender_Widget extends WP_Widget {
    // setup the widget name, description, etc...
    public function __construct() {
        $foucs_calender_widget = array (
            'classname'     => 'foucs-widget-Calender',
            'description'   => 'Custom Foucs NewsPaper Calender Widget',
        );
        parent::__construct('foucs_calender', 'Foucs Calender' ,  $foucs_calender_widget);
    }
    // back-end display of widget
    public function form($instance) {
        $title = (!empty ($instance['title']) ? $instance['title'] : 'Date'); ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('title'))?>">Title: </label>
            <input 
                type="text" 
                class="widefat" 
                name="<?php echo esc_attr($this->get_field_name('title'))?>" 
                id="<?php echo esc_attr($this->get_field_id('title'))?>" 
                value="<?php echo esc_attr($title)?>">
        </p>
    <?php
    }
    // update widget
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = (!empty( $new_instance[ 'title' ] ) ? strip_tags($new_instance['title']) : 'Date');

        return $instance;
    }

    // front-end display of widget
    public function widget ($args, $instance ) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        echo $before_widget;
        if($title) echo $before_title . $title . $after_title; ?>

        <div class="foucs_date_widget">
            <span class="month d-block text-capitalize text-center"><?php echo date('F')?></span>
            <span class="week d-block text-capitalize text-center"><?php  echo date('l')?></span>
            <span class="day d-block text-capitalize text-center"><?php   echo date('d')?></span>
            <span class="year d-block text-capitalize text-center"><?php  echo date('Y')?></span>
        </div>

        <?php
        echo $after_widget;
    }
}
add_action('widgets_init', function(){
    register_widget ('Foucs_Calender_Widget');
});