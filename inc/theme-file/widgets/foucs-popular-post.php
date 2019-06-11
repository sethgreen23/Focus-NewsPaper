<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET POPULAR POST
    =============================
    *** Will Use Class WP_Query in this Function
*/

class Foucs_Popular_Post_Widget extends WP_Widget {

    // setup the widget name, description, etc...
    public function __construct() {
        $foucs_popular_widget = array (
            'classname'     => 'foucs-widget-popular-post',
            'description'   => 'Custom Foucs NewsPaper Popular Post Widget',
        );
        parent::__construct('foucs_popular_post', 'Foucs Popular Post' ,  $foucs_popular_widget);
    }

     // back-end display of widget
	public function form( $instance ) {
        // Output admin widget options form
        
        // Title Post Show
        $title     = (!empty($instance['title']) ? $instance['title'] : 'Popular Post');
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

    <?php    
    }

    // update widget
	public function update( $new_instance, $old_instance ) {
		
        $instance = array();
        // Title Post Show
        $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
        // Number Post Show
		$instance[ 'post_num' ] = ( !empty( $new_instance[ 'post_num' ] ) ? absint( strip_tags( $new_instance[ 'post_num' ] ) ) : 0 );
		
		return $instance;
		
    }

    // front-end display of widget
	public function widget( $args, $instance ) {
		
		$post_num = absint( $instance[ 'post_num' ] ); // Number Post Show
		
		$popular_post_args = array(
			'post_type'			=> 'post',
			'posts_per_page'	=> $post_num, // Number Post Show
			'meta_key'			=> 'foucs_posts_views', // Name Meta Key Views Post
			'orderby'			=> 'meta_value_num', // Ordring Number Views Post
			'order'				=> 'DESC'
        );
        // Wp_Query Class
        $popular_post_query = new WP_Query( $popular_post_args );
		
        echo $args[ 'before_widget' ];

        if( !empty( $instance[ 'title' ] ) ){ //Chick If Have Title Widget Or No
			
            echo $args[ 'before_title' ] . apply_filters( 'widget_title', $instance[ 'title' ] ) . $args[ 'after_title' ];
        }?>
<!--- Start popular-post-widget-body -->
        <div class="popular-post-widget-body"><?php
            if( $popular_post_query->have_posts() ){
                // Start Loop
                while( $popular_post_query->have_posts() ){
                      $popular_post_query->the_post();?>
<!--- Start popular-posts -->
                        <div class="popular-posts">
<!--- Start popular-post-link -->
                            <a class="popular-post-link" href="<?php echo esc_url(get_the_permalink()); ?>">
<!--- Start popular-post-title -->
                                <h5 class="popular-post-title"> 
                                    <?php echo get_the_title(); ?> 
                                </h5> <!--- End popular-post-title -->
                            </a><!--- End popular-post-link -->
<!--- Start popular-post-view -->
                            <span class="popular-post-view">
                                <?php foucs_post_views() ?> Veiws
                            </span><!--- End popular-post-view -->
                        </div><!--- End popular-posts -->
                        <?php
                } // End While
                wp_reset_postdata(); 
                wp_reset_query();
            } // End If
                ?>
        </div><!--- End popular-post-widget-body -->
        <?php

        echo $args[ 'after_widget' ];
    }
    
}

// Called Function & Register Widget
add_action( 'widgets_init', function() {
	register_widget( 'Foucs_Popular_Post_Widget' );
} );
