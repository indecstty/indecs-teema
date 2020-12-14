<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<main>
	<section class="error-404 not-found">
		<h1><?= __("Page not found.", "indecsdomain");?></h1>
	</section>
</main>
<?php get_template_part("template-parts/page/partners");
get_footer();
