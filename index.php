<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *  *
 * @link https://codex.wordpress.org/Template_Hierarchy
 **/

		get_header(); ?>
		<div id="site-content">
			<div id="wrapper">
				<?php if (has_nav_menu('portal')) {
					get_template_part('template-parts/navigation/portal');
				}
				?>
				<main>
<!--					<div id="page-header">-->
<!--						<h1 id="page-title">--><?php //single_post_title(); ?><!-- dsfsfsd</h1>-->
<!--					</div>-->

					<!-- Ehkä paska tapa, tee ehkä ylemmällä tavalla -->
					<?php while (have_posts() ) : the_post();
					get_template_part('template-parts/page/content');
					endwhile; ?>
				</main>
		</div>

		<?php get_footer();
