<?php
include_once(ABSPATH.'wp-admin/includes/plugin.php');
if (is_plugin_active('logo-slider-wp/logo-slider-wp.php')) {
	?>
<aside class="partners fade-in">
	<h2><?= __("Partnered with", 'indecsdomain')?></h2>
	<?php
	echo do_shortcode('[logo-slider]'); ?>
</aside>

<?php
}
