<h1>Foucs Newspaper Theme Options</h1>
<?php settings_errors(); ?>

<form class="foucs-general-form" method="post" action="options.php">
    <?php settings_fields('foucs-newspaper-options-group'); // Name The Option Group ?>
	<?php do_settings_sections('foucs-newspaper-options'); // Slug Name Of The Settings Page?>
	<?php submit_button( 'Save options', 'primary', 'btnSubmit' ); ?>
</form>

<div>
	Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a>
</div>