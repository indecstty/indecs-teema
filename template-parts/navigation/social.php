<?php
/** Displays social media menu */

?>

<nav class="social-media-navigation" aria-label="<?php esc_attr_e('Social media navigation', 'indecsteema');?>">
	<h2 class="social-media-nav-title"><?= __('Social media', 'indecsteema') ?></h2>
	<?php wp_nav_menu(
		array(
			'theme_location' => 'social',
//			'items_wrap' => '%3$s',
			'menu_id' => 'social-media-menu',
			'depth' => 1,
			'link_before' => '<span class="screen-reader-text">',
			'link_after' => '</span>',
			'fallback_cb' => '',
		)
	);
	?>
</nav>
