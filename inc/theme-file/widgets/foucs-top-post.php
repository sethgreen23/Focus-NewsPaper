<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET POPULAR POST
    =============================
    *** Will Use Class WP_Query in this Function
*/
class Foucs_Top_Post_Widgit extends WP_widget {

    // setup the widget name, description, etc...
    public function __construct() {
        $foucs_top_widget = array (
            'classname'     => 'foucs-widget-top-post',
            'description'   => 'Custom Foucs NewsPaper Top Post Widget',
        );
        parent::__construct('foucs_top_post', 'Foucs Top Post' ,  $foucs_top_widget);
    }

   // back-end display of widget
	public function form( $instance ) {
        // Output admin widget options form

        $title = (!empty($instance['title']) ? $instance['title'] : 'Top Post');
        $post_num  = (!empty($instance['post_num']) ? $instance['post_num'] : 5); ?>

        <p> 
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ) ?>">Title: </label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'title' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'title' ) ) ?>" 
                value="<?php echo esc_attr( $title ) ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'post_num' ) ) ?>">PostNumber: </label>
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
    public function update($new_instance, $old_instance) {
        $instance = array();
        // Title Post Show
        $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ? strip_tags( $new_instance[ 'title' ] ) : '' );
        // Number Post Show
        $instance[ 'post_num' ] = ( !empty( $new_instance[ 'post_num' ] ) ? absint( strip_tags( $new_instance[ 'post_num' ] ) ) : 0 );
        
        return $instance;
    }

    // front-end display of widget
	public function widget( $args, $instance ) {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $post_num = absint( $instance[ 'post_num' ] ); // Number Post Show
        $top_post_widget = (array(
            'post_type'		 => 'post',
            'meta_key'       => 'foucs_posts_views',
            'order'          => 'DESC',
            'orderby'		 => 'meta_value_num', // Ordring Number 
            'posts_per_page' => $post_num,  // Numder Post Show
            'post_status'    => 'publish', // Show Onley Post Status Puplish
        ));
        $top_post_query = new WP_Query($top_post_widget);

        echo $before_widget;
        if ($title) echo $before_title . $title . $after_title; ?>
        <div class="foucs-top-post-widget">
            <?php 
                if($top_post_query->have_posts()){ // Check Have Posts Or No
                    while($top_post_query->have_posts()){
                        $top_post_query->the_post(); //Echo Post?>
                        <div class="body-post">
<!-- Start top post img --->
                            <div class="img-top overflow zoom">
                                <div class="post-img">
                                    <?php foucs_check_post_image()?>
                                </div>
                            </div><!-- End top post img --->
<!-- Start top post title --->
                            <div class="top-post-title">
                                <a href="<?php esc_url(the_permalink()) // Get The Link Of Post ?>">
                                    <?php the_title('<h2 class="text-capitalize post-title">', '</h2>')// Echo Name Post ?>
                                </a>
                            </div><!-- End top post title --->
                        </div>
            <?php
                    } // End While
                } // End If
                wp_reset_postdata(); 
                wp_reset_query();
            ?>

        </div>
        <?php
        echo $after_widget;
    }
}

add_action('widgets_init', function(){
    register_widget('Foucs_Top_Post_Widgit');
});