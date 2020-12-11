<?php
/**
 * Displays primary navigation
 */

?>
<nav id="main-navigation" class="main-navigation" aria-label="<?php _e('Main menu', 'indecsdomain');?>">
	<?php the_custom_logo(); // Logo if set ?>
	<label for="menu-toggle">
		<svg width="80" height="80" viewBox="0 0 100 100">
			<path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
			<path class="line line2" d="M 20,50 H 80" />
			<path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
		</svg>
	</label>
	<input type="checkbox" id="menu-toggle" class="menu-toggle">
	<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_id' => 'primary-menu',
			'container' => 'false',
			'walker' => new Indecsteema_Nav_Walker(),
			)); ?>
</nav>
