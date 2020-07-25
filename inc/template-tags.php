<?php
/**
 * Small template-like custom functions
 */

/** Creates site logo html */
function indecsteema_site_logo()
{
		$custom_logo_id = get_theme_mod('custom-logo');
		$logo = wp_get_attachment_image_src($custom_logo_id, 'full');
		if (has_custom_logo()) {
			the_custom_logo();
		}
		else {
			echo '<a href="'.get_site_url().'" class="custom-logo-link" rel="home" itemprop="url">';
			echo '<img class="custom-logo" alt="Spinni" itemprop="logo" src="'.get_stylesheet_directory_uri().'/assets/images/logo.png'.'">';
			echo '</a>';
		}
}

function indecsteema_site_description() {
	echo "<p>description</p>";
}

/** Include a skip to content link at the top of the page so that users can bypass the menu */
function indecsteema_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#main">'
	     .__('Skip to the content', 'indecsteema' ).'</a>';
}
