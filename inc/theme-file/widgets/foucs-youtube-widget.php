<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET YOUTUBE CHANNEL
    =============================
*/

class Foucs_youtube_channel_Widget extends WP_Widget {

    public function __construct() {

        $foucs_youtube_widget = array (
            'classname'     => 'foucs_youtube_channel_widget',
            'description'   => 'Custom Foucs NewsPaper youtube Channel Widget',
        );
        parent::__construct('foucs_youtube_widget', 'Focus Youtube Channel', $foucs_youtube_widget);

    }

    // back-end display of widget
    public function form( $instance ) {
        $title   = (!empty($instance['title']) ? $instance['title'] : 'Youtube');
        $channel = (!empty($instance['channel']) ? $instance['channel'] : 'UCPzB16fs2IIFH_oVDT3F5kw');
        $layout  = (!empty($instance['layout']) ? $instance['layout'] : 'full');
        $theme   = (!empty($instance['theme']) ? $instance['theme'] : 'default');
        $count   = (!empty($instance['count']) ? $instance['count'] : 'default');?>

        <p> 
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ) ?>">Title:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'title' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'title' ) ) ?>" 
                value="<?php echo esc_attr( $title ) ?>">
        </p>

        <p> 
            <label for="<?php echo esc_attr( $this->get_field_id( 'channel' ) ) ?>">Channel Name or ID:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'channel' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'channel' ) ) ?>" 
                value="<?php echo esc_attr( $channel) ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'layout' )); ?>">Layout:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'layout' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'layout' )); ?>" 
                    type="text">
                <option value="default" <?php echo ($layout == 'default')?'selected':''; ?>>Default</option>
                <option value="full" <?php echo ($layout == 'full')?'selected':''; ?>>Full</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'theme' )); ?>">Theme:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'theme' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'theme' )); ?>" 
                    type="text">
                <option value="default" <?php echo ($theme == 'default')?'selected':''; ?>>Default</option>
                <option value="dark" <?php echo ($theme == 'dark')?'selected':''; ?>>Dark</option>
            </select>
        </p>

        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'count' )); ?>">Subscriber count:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'count' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'count' )); ?>" 
                    type="text">
                <option value="default" <?php echo ($count == 'default')?'selected':''; ?>>Default</option>
                <option value="hidden" <?php echo ($count == 'hidden')?'selected':''; ?>>Hidden</option>
            </select>
        </p>
    <?php

    }

     // update widget
     public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title']   = (!empty($new_instance['title'])? strip_tags($new_instance['title']) : '');
        $instance['channel'] = (!empty($new_instance['channel'])? strip_tags($new_instance['channel']) : '');
        $instance['layout']  = (!empty($new_instance['layout']) ? strip_tags($new_instance['layout']) : '');
        $instance['theme']   = (!empty($new_instance['theme']) ? strip_tags($new_instance['theme']) : '');
        $instance['count']   = (!empty($new_instance['count']) ? strip_tags($new_instance['count']) : '');

        return $instance;
    }


    // front-end display of widget
	public function widget( $args, $instance ) {
        extract($args);
        $title   = apply_filters( 'widget_title', $instance[ 'title' ]);
        $channel = esc_attr($instance['channel']);
        $layout  = esc_attr($instance['layout']);
        $theme   = esc_attr($instance['theme']);
        $count   = esc_attr($instance['count'] );

        echo $before_widget;

            if ($title) echo $before_title . $title . $after_title;?>

            <div 
                class="g-ytsubscribe you-style" 
                data-channelid="<?php echo $channel ?>" 
                data-channel="<?php echo $channel ?>" 
                data-layout="<?php echo $layout?>" 
                data-theme="<?php echo $theme ?>" 
                data-count="<?php echo $count?>">
            </div>
        <?php
        echo $after_widget;
    }
}

add_action('widgets_init', function(){
    register_widget('Foucs_youtube_channel_Widget');
});