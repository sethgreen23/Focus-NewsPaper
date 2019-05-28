<h1>Foucs NewsPaper Custom CSS</h1>
<?php settings_errors(); ?>

<form id="save-custom-css-form" method="post" action="options.php" class="sunset-general-form">
	<?php settings_fields( 'foucs-custom-css-options' ); ?>
	<?php do_settings_sections( 'foucs-newspaper-custom-css' ); ?>
	<?php submit_button(); ?>
</form>

<div>
	Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a>
</div>