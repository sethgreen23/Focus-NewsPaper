<?php
/**
 * The template for displaying search forms
 *
 * @package focus_newspaper
 */
?>
<div class="search-box">
	<form 
		method="get" 
		id="searchform" 
		action="<?php echo esc_url( home_url( '/' ) ); ?>" 
		role="search">
		<input 
			type="text" 
			class="input-search" 
			name="s" 
			placeholder="Search"
			value="<?php echo esc_attr( get_search_query() ); ?>" 
			id="s" /><a class="icon-search" href="#"><i class="fas fa-search"></i></a>
	</form>
</div>
