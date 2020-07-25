<?php
/**
 * For displaying front page
 *
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
	</div>

<?php get_footer();
