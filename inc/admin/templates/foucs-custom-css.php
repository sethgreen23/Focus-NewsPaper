<h1>Foucs NewsPaper Custom CSS</h1>
<h4> Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a> </h4>
<?php settings_errors(); ?>

<form id="save-custom-css-form" method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'foucs-custom-css-options' ); // Name The Option Group ?>
	<?php do_settings_sections( 'foucs-newspaper-custom-css' ); //Slug Name Of The Settings Page ?>
	<?php submit_button(); ?>
</form>