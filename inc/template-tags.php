<?php
/**
 * Small template-like custom functions
 */



/** Include a skip to content link at the top of the page so that users can bypass the menu */
function indecsteema_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#main">'
	     .__('Skip to the content', 'indecsteema' ).'</a>';
}

function indecsteema_nav_menu_social_icons( $item_output, $item, $depth, $args ) {
//	wp_die("kuole");
	// Change SVG icon inside social links menu if there is supported URL.
	if ( 'social' === $args->theme_location ) {
		$svg = Indecsteema_SVG_Icons::get_social_link_svg( $item->url );

		// If URL not supported, use generic link svg
		if ( empty( $svg ) ) {
			$svg = indecsteema_get_theme_svg( 'link' );
		}
		$item_output = str_replace( $args->link_after, '</span>' . $svg, $item_output );
	}

	return $item_output;
}

add_filter( 'walker_nav_menu_start_el', 'indecsteema_nav_menu_social_icons', 10, 4 );
