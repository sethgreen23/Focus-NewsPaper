<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET SOCIAL LINKS
    =============================
*/

class Foucs_Social_Links_Widgets extends WP_Widget {

    // setup the widget name, description, etc...
    public function __construct() {
        $foucs_social_widget = array (
            'classname'     => 'foucs-social-link-post',
            'description'   => 'Custom Foucs NewsPaper Social Links Widget',
        );
        parent::__construct('foucs_social-link', 'Foucs Social Link' ,  $foucs_social_widget);
    }

     // back-end display of widget
	public function form( $instance ) {
        // Output admin widget options form
        
        $name_title = 'Follow';
        // Title Post Show
        $title= (!empty($instance['title']) ? $instance['title'] : $name_title );?>

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
            <strong>No options for this Widget!</strong><br/>You can control the fields of this Widget from 
                <a href="./admin.php?page=social_link">This Page</a>
        </p>

    <?php    
    }

     // update widget
	public function update( $new_instance, $old_instance ) {
        $name_title = 'Follow';
		
        $instance = array();
        // Title Post Show
        $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : $name_title );
		
		return $instance;
		
    }

    // front-end display of widget
	public function widget( $args, $instance ) {
		
        echo $args[ 'before_widget' ];

        if( !empty( $instance[ 'title' ] ) ){ //Chick If Have Title Widget Or No
			
            echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
        }
      
        ob_start();
        include 'widget-template/custom-social-link.php';
        ob_end_flush();

        echo $args[ 'after_widget' ];
    }
    
}

// Called Function & Register Widget
add_action( 'widgets_init', function() {
	register_widget( 'Foucs_Social_Links_Widgets' );
} );
