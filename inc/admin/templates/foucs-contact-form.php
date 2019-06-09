<h1>Foucs NewsPaper Contact Form</h1>
<?php settings_errors(); ?>

<h4> Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a> </h4>

<p>Use this <strong>shortcode</strong> to activate the Contact Form inside a Page or a Post Jast Add This Shortcode and Enjoy</p>
<p><code>[contact_form]</code></p>



<form class="foucs-general-form" method="post" action="options.php">
    <?php settings_fields('foucs-contact-options'); // Name The Option Group ?>
	<?php do_settings_sections('foucs-newspaper-contactform'); // Slug Name Of The Settings Page?>
	<?php submit_button( 'Save Contact', 'primary', 'btnSubmit' ); ?>
</form>