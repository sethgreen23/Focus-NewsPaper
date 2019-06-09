<h1>Foucs Newspaper Theme Social Links</h1>

<h4> Development By: <a href="https://www.facebook.com/relationscode/" target="blank">Relat!onsCode</a> </h4>

<h3>Customize Theme Social Links</h3> 
<p>Add Some Links Will Show In <strong> Footer </strong> and some Will Show In <strong> Sidebare </strong> Widget</p>
<p> <strong>(Facebook & Twitter & Instagram & Youtube & Pinterest & Google+) </strong> This Link Will bee Show In <strong> Footer </strong> and <strong> Sidebare Widget</strong></p>
<p>but another Links Will Show Just In <strong> Sidebare Widget</strong></p>
<?php settings_errors(); ?>

<form class="foucs-general-form" method="post" action="options.php">
    <?php settings_fields('social-link-settings-group'); // Name The Option Group ?>
	<?php do_settings_sections('social_link'); // Slug Name Of The Settings Page?>
	<?php submit_button( 'Save Info', 'primary', 'btnSubmit' ); ?>
</form>