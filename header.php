<?php
/**
 * Header file for the Spinniteema theme
 */

?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale="1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open();

	// Hidden keyboard-focusable link to skip to content
	indecsteema_skip_link();?>
	<div id="site-wrapper">
		<header id="site-header" role="banner">

			<!-- Branding -->
			<div id="header-titles">
				<?php indecsteema_site_logo();
				indecsteema_site_description(); ?>
			</div>

			<!-- Navigation -->
			<div class="navigation-wrapper">
				<?php if (has_nav_menu('primary' ) ) {
					get_template_part( 'template-parts/navigation/primary');
				}?>
			</div><!-- .navigation-wrapper -->
		</header>
