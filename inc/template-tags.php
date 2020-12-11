<?php
/**
 * Small template-like custom functions
 */



/** Include a skip to content link at the top of the page so that users can bypass the menu */
function indecsteema_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#main">'
	     .__('Skip to the content', 'indecsteema' ).'</a>';
}
