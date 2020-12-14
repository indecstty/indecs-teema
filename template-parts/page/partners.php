<aside class="partners">
	<h2><?php _e('Partnered with', 'indecsdomain')?></h2>
	<?php
	include_once(ABSPATH.'wp-admin/includes/plugin.php');
	if (is_plugin_active("logo-slider-wp/logo-slider-wp.php")) {
		echo do_shortcode('[logo-slider]');
	}
	?></aside><?php
