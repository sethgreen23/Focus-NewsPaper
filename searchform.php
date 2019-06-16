<?php
/**
 * The template for displaying search forms
 *
 * @package focus_newspaper
 */
?>

<form 
	method="get" 
	id="searchform" 
	action="<?php echo esc_url( home_url( '/' ) ); ?>" 
	role="search">
	<label 
		for="s" 
		class="assistive-text"><?php _e( 'Search', 'focus newspaper' ); ?>
	</label>
	<input 
		type="text" 
		class="field" 
		name="s" 
		value="<?php echo esc_attr( get_search_query() ); ?>" 
		id="s" />
	<input 
		type="submit" 
		class="submit" 
		name="submit" 
		id="searchsubmit" 
		value="<?php esc_attr_e( 'Search', 'focus focus newspaper' ); ?>" />
</form>
