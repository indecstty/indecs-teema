<?php
/**
 * Header file for the Spinniteema theme
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); // Notify Wordpress that the head has ended for a hook ?>
</head>

<body <?php body_class(); // Classes for body provided by Wordpress?>>
	<?php wp_body_open(); // Notify Wordpress that the body has been opened for a hook

	// Hidden keyboard-focusable link to skip to main content
	indecsteema_skip_link();?>

	<!-- Header -->
	<header id="site-header">
		<?php if (has_nav_menu('primary' ) ) { // Primary navigation if set
			get_template_part( 'template-parts/navigation/primary');
		}?>
	</header>
