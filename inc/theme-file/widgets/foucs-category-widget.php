<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET POPULAR POST
    =============================
    *** Will Use Class WP_Query in this Function
*/

class Foucs_Categories_Widget extends WP_Widget {

    // setup the widget name, description, etc...
    public function __construct() {
        $foucs_category_widget = array (
            'classname'     => 'foucs-widget-category',
            'description'   => 'Custom Foucs NewsPaper Categories Widget',
        );
        parent::__construct('foucs_category', 'Foucs Categories' ,  $foucs_category_widget);
    }

     // back-end display of widget
	public function form( $instance ) {  
        $defaults = array('count' => 'on');
        $count     = (!empty($instance['count']) ? $instance['count'] : '');
        // Title Post Show
        $title     = (!empty($instance['title']) ? $instance['title'] : 'Categories');
        // Number Post Show
        $post_num  = (!empty($instance['post_num']) ? $instance['post_num'] : 5); ?>
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
            <label for="<?php echo esc_attr( $this->get_field_id( 'post_num' ) ) ?>">PostNumber:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'post_num' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'post_num' ) ) ?>" 
                value="<?php echo esc_attr( $post_num ) ?>">
        </p>

            <p>
                <input 
                    class="checkbox" 
                    type="checkbox" <?php checked($instance['count'] == "on") ?> 
                    id="<?php echo esc_attr( $this->get_field_id( 'count' ) ) ?>" 
                    name="<?php echo esc_attr( $this->get_field_name( 'count' ) ) ?>" >
                
                <label for="<?php echo esc_attr( $this->get_field_id( 'count' ) ) ?>" title="Show post counts"><?php _e('Show post counts', 'foucs_category'); ?></label>
            </p>
        <?php
    }

     // update widget
	public function update( $new_instance, $old_instance ) {
        $instance = array('count' => 'true');
        // Title Post Show
        $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
        // Number Post Show
        $instance['count'] = strip_tags($new_instance['count']);
        $instance[ 'post_num' ] = ( !empty( $new_instance[ 'post_num' ] ) ? absint( strip_tags( $new_instance[ 'post_num' ] ) ) : 5 );
        return $instance;
    }

    // front-end display of widget
	public function widget( $args, $instance ) {
        extract($args);
        $post_num = absint( $instance[ 'post_num' ] ); // Number Post Show
        $title = apply_filters('widget_title', $instance['title']);
        $args = array(
            'taxonomy'               => 'category',
            'orderby'                => 'count',
            'order'                  => 'DESC',
            'number'                 => $post_num,
            'hide_empty'             => false,
        );
        $foucs_query = new WP_Term_Query($args);

        echo $before_widget;

        if ($title) echo $before_title . $title . $after_title;
        ?>
            <ul class="all-taxonomy">
            <?php 
            
                foreach ( $foucs_query->get_terms() as $term ) { 
                    ?>
                    <li class="taxonomy">
                        <a href="<?php echo get_term_link( $term ) // Get The Category Link?>">
                            <span class="name">
                                <?php echo esc_html($term->name) // Show Category Name?>
                            </span>
                        </a>
                        <?php
                        if(isset($instance['count']) && $instance['count'] != ''){?>
                                
                            <span class="count-num"><?php echo esc_html($term->count); // Show Count Post In Category?></span>
                            <?php 
                         }
                        ?>
                    </li>
                <?php
                }?>
            </ul>
            <?php
            echo $after_widget;
    }
    
}

// Called Function & Register Widget
add_action( 'widgets_init', function() {
	register_widget( 'Foucs_Categories_Widget' );
} );