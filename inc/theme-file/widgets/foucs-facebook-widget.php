<?php	
/*
	
@package foucs_newspaper
	
	=============================
		WIDGET FACEBOOK PAGE
    =============================
*/

class Foucs_Facebook_Page_Widget extends WP_Widget {

    public function __construct() {

        $foucs_facebook_widget = array (
            'classname'     => 'foucs_facebook_page_widget',
            'description'   => 'Custom Foucs NewsPaper Faceboook Page Widget',
        );
        parent::__construct('foucs_facebook_widget', 'Focus Faceboook Page', $foucs_facebook_widget);

    }

    // back-end display of widget
    public function form( $instance ) {
        $title         = (!empty($instance['title']) ? $instance['title'] : 'Facebook');
        $page_name     = (!empty($instance['page_name']) ? $instance['page_name'] : 'Relations Code‎‏');
        $page_url      = (!empty($instance['page_url']) ? $instance['page_url'] : 'https://www.facebook.com/relationscode/');
        $width         = (!empty($instance['width']) ? $instance['width'] : '300');
        $height        = (!empty($instance['height']) ? $instance['height'] : '70');
        $tabs          = (!empty($instance['tabs']) ? $instance['tabs'] : '');
        $hide_cover    = (!empty($instance['hide_cover']) ? $instance['hide_cover'] : 'false');
        $show_facepile = (!empty($instance['show_facepile']) ? $instance['show_facepile'] : 'true');
        $hide_cta      = (!empty($instance['hide_cta']) ? $instance['hide_cta'] : 'false');
        $small_header  = (!empty($instance['small_header']) ? $instance['small_header'] : 'false');
        $adapt_container_width = (!empty($instance['adapt_container_width']) ? $instance['adapt_container_width'] : 'true'); ?>


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
            <label for="<?php echo esc_attr( $this->get_field_id( 'page_name' ) ) ?>">Page Name:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'page_name' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'page_name' ) ) ?>" 
                value="<?php echo esc_attr( $page_name ) ?>">
        </p>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'page_url' ) ) ?>">Page Url:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'page_url' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'page_url' ) ) ?>" 
                value="<?php echo esc_attr( $page_url ) ?>">
        </p>

        <p> 
            <label for="<?php echo esc_attr( $this->get_field_id( 'width' ) ) ?>">Add Width:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'width' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'width' ) ) ?>" 
                value="<?php echo esc_attr( $width  ) ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'height' ) ) ?>">Add Height:</label>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id( 'height' ) ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name( 'height' ) ) ?>" 
                value="<?php echo esc_attr( $height  ) ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'tabs' ) ) ?>">Tabs:</label>
            <p> You Can Use This Tabs <strong>[timeline,events,messages]</strong></p>
            <p> You Can Use one or Two Or Three Like:</p>
            <p>timeline</p>
            <p>timeline,messages</p>
            <p>timeline,events,messages</p>
            <input 
                type="text" 
                class="widefat" 
                id="<?php echo esc_attr( $this->get_field_id('tabs') ) ?>" 
                name="<?php echo esc_attr( $this->get_field_name('tabs') ) ?>" 
                value="<?php echo esc_attr($tabs) ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'hide_cover' )); ?>">Hide Cover:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'hide_cover' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'hide_cover' )); ?>" 
                    type="text">
                <option value="true" <?php echo ($hide_cover == 'true')?'selected':''; ?>>True</option>
                <option value="false" <?php echo ($hide_cover == 'false')?'selected':''; ?>>False</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'show_facepile' )); ?>">Show Friend:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'show_facepile' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'show_facepile' )); ?>" 
                    type="text">
                <option value="true" <?php echo ($show_facepile == 'true')?'selected':''; ?>>True</option>
                <option value="false" <?php echo ($show_facepile == 'false')?'selected':''; ?>>False</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'hide_cta' )); ?>">Hide Caver:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'hide_cta' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'hide_cta' )); ?>" 
                    type="text">
                <option value="true" <?php echo ($hide_cta  == 'true')?'selected':''; ?>>True</option>
                <option value="false" <?php echo ($hide_cta == 'false')?'selected':''; ?>>False</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'small_header' )); ?>">Small Header:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'small_header' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'small_header' )); ?>" 
                    type="text">
                <option value="true" <?php echo ($small_header == 'true')?'selected':''; ?>>True</option>
                <option value="false" <?php echo ($small_header == 'false')?'selected':''; ?>>False</option>
            </select>
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id( 'adapt_container_width' )); ?>">Container Width:</label> 
            <select class="widefat" 
                    id="<?php echo esc_attr($this->get_field_id( 'adapt_container_width' )); ?>" 
                    name="<?php echo esc_attr($this->get_field_name( 'adapt_container_width' )); ?>" 
                    type="text">
                <option value="true" <?php echo ($adapt_container_width == 'true')?'selected':''; ?>>True</option>
                <option value="false" <?php echo ($adapt_container_width == 'false')?'selected':''; ?>>False</option>
            </select>
        </p>
    <?php

    }

     // update widget
     public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title']     = (!empty($new_instance['title'])? strip_tags($new_instance['title']) : '');
        $instance['page_name'] = (!empty($new_instance['page_name'])? strip_tags($new_instance['page_name']) : '');
        $instance['page_url']  = (!empty($new_instance['page_url']) ? strip_tags($new_instance['page_url']) : '');
        $instance['width']     = (!empty($new_instance['width']) ? strip_tags($new_instance['width']) : '');
        $instance['height']    = (!empty($new_instance['height']) ? strip_tags($new_instance['height']) : '');
        $instance['tabs']      = (!empty($new_instance['tabs']) ? strip_tags($new_instance['tabs'] ): '');
        $instance['hide_cover']    = (!empty($new_instance['hide_cover']) ? strip_tags($new_instance['hide_cover']) : '');
        $instance['show_facepile'] = (!empty($new_instance['show_facepile']) ? strip_tags($new_instance['show_facepile']) : '');
        $instance['hide_cta']      = (!empty($new_instance['hide_cta']) ? strip_tags($new_instance['hide_cta']) : '');
        $instance['small_header']  = (!empty($new_instance['small_header']) ? strip_tags($new_instance['small_header']) : '');
        $instance['adapt_container_width'] = (!empty($new_instance['adapt_container_width']) ? strip_tags($new_instance['adapt_container_width']) : '');

        return $instance;
    }


    // front-end display of widget
	public function widget( $args, $instance ) {
        extract($args);
        $title     = apply_filters( 'widget_title', $instance[ 'title' ]);
        $page_name = esc_attr($instance['page_name']);
        $page_url  = esc_attr($instance['page_url']);
        $width     = esc_attr($instance['width']);
        $height    = esc_attr($instance['height'] );
        $tabs      = esc_attr($instance['tabs']);
        $hide_cover     = esc_attr($instance['hide_cover']);
        $show_facepile  = esc_attr($instance['show_facepile']);
        $hide_cta       = esc_attr($instance['hide_cta']);
        $small_header   = esc_attr($instance['small_header']);
        $adapt_container_width  = esc_attr($instance['adapt_container_width']);

        echo $before_widget;

            if ($title) echo $before_title . $title . $after_title;?>
            
            <div id="fb-root"></div>
            <div 
                class="fb-page" 
                data-href="<?php echo $page_url ?>" 
                data-tabs="<?php echo $tabs ?>" 
                data-width="<?php echo $width ?>" 
                data-height="<?php echo $height ?>" 
                data-small-header="<?php echo $small_header ?>" 
                data-adapt-container-width="<?php echo $adapt_container_width ?>" 
                data-hide-cover="<?php echo $hide_cover ?>" 
                data-show-facepile="<?php echo $show_facepile ?>">
                <blockquote 
                    cite="<?php echo $page_url  ?>" 
                    class="fb-xfbml-parse-ignore">
                    <a href="<?php echo $page_url ?>">‏‎<?php echo $page_name ?></a>
                </blockquote>
            </div>
            <script 
                async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3">
            </script>
        <?php
        echo $after_widget;
    }
}

add_action('widgets_init', function(){
    register_widget('Foucs_Facebook_Page_Widget');
});