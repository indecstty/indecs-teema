<?php
/**
 * Functions for Indecsteema theme
 */

/** Include required files */
require get_template_directory() . "/inc/template-tags.php";


function indecsteema_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/* Let Wordpress manage the document title. By adding theme support, we declare that this theme does not use a
	 *hard-coded <title> tag in the document head, and expect Wordpress to provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Add translation
	load_theme_textdomain('indecsteema', get_template_directory()."/languages");

	// Add navigation menus
	register_nav_menus( (array(
		'portal' => __('Portal', 'indecsteema'),
		'primary' => __('Primary Menu', 'indecsteema'),
		'social' => __('Social Links Menu', 'indecsteema')))
	);

	// Add custom logo
	$logo_width = 120;
	$logo_height = 90;
	add_theme_support('custom-logo',
		array(
			'height' => $logo_height,
			'width' => $logo_width,
			'flex-height' => true,
			'flex-width' => true,
			)
	);

// The following might not be that important

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support(
	'html5',
	array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'script',
		'style',
	)
);

// Add support for full and wide align images.
add_theme_support('align-wide');

// Add support for responsive embeds.
add_theme_support('responsive-embeds');

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

}

add_action('after_setup_theme', 'indecsteema_setup');

function indecsteema_enqueue_scripts_and_styles() {
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('icons', "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css");
}
add_action('wp_enqueue_scripts', 'indecsteema_enqueue_scripts_and_styles');
