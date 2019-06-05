<h1>Foucs Newspaper Theme Info</h1>
<?php settings_errors(); ?>

<form class="foucs-general-form" method="post" action="options.php">
    <?php settings_fields('foucs-newspaper-settings-group'); // Name The Option Group ?>
	<?php do_settings_sections('foucs_newspaper'); // Slug Name Of The Settings Page?>
	<?php submit_button( 'Save Info', 'primary', 'btnSubmit' ); ?>
</form>

<div>
	Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a>
</div>