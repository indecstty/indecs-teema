<?php
/**
 * Functions for Indecsteema theme
 */

/** Include required files */
require get_template_directory()."/inc/template-tags.php";
require get_template_directory()."/inc/icons.php";


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
	load_theme_textdomain('indecsdomain', get_template_directory()."/languages");

	// Add navigation menus
	register_nav_menus( (array(
		'portal' => __('Portal', 'indecsdomain'),
		'primary' => __('Primary Menu', 'indecsdomain'),
		'social' => __('Social Media Menu', 'indecsdomain')))
	);

	// Add custom logo
	add_theme_support('custom-logo',
		array(
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

add_theme_support('custom-header');

}
add_action('after_setup_theme', 'indecsteema_setup');

// Replaces no-js class from document with js, if javascript is available
function indecsteema_no_js_class() {
	?>
<script>
	document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
</script><?php
}
add_action('wp_head', 'indecsteema_no_js_class');

// Add widget area to footer
function indecsteema_widgets_init() {
	register_sidebar(array(
		'name' => 'Footer widget area',
		'id' => 'footer_widgets',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
}
add_action('widgets_init', 'indecsteema_widgets_init');

function indecsteema_fonts_url() {
//	$font_families = array();
//	$font_families[] = 'Lato:300,300i,400,400i,700,700i';
//	$font_families[] = 'Roboto:300,300i,400,400i,500,500i,700,700i';
//
//	$query_args = array(
//		'family' => urlencode(implode('|', $font_families)),
//		'subset' => urlencode('latin, latin-ext'),
//		);
//
//	$fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css2');
//	return esc_url_raw($fonts_url);


	return "https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap";
}

function indecsteema_resource_hints($urls, $relation_type) {
	if (wp_style_is('indecsteema-fonts', 'queue') && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}
	return $urls;
}
add_filter('wp_resource_hints', 'indecsteema_resource_hints', 10, 2);

function indecsteema_enqueue_scripts_and_styles() {
	wp_enqueue_style('indecsteema-style', get_stylesheet_uri());
	wp_enqueue_style('indecsteema-fonts', indecsteema_fonts_url(), array(), null);
	wp_enqueue_style('icons', "https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css");
	wp_enqueue_script('primary-menu', get_template_directory_uri()."/js/primary-menu.js", null, null, true);
}
add_action('wp_enqueue_scripts', 'indecsteema_enqueue_scripts_and_styles');
