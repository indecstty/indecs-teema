<?php
/**
 * For displaying front page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 **/

get_header();
$portal_bg = ' style="background: url(' . get_header_image() . ') no-repeat left center fixed;background-size:cover"';
?>
	<div class="portal-wrapper" <?= $portal_bg ?>>
		<nav class="portal-navigation" aria-label="<?php _e('Subsite navigation', 'indecsdomain');?>">
			<?php if (has_nav_menu('portal')) {
				get_template_part('template-parts/navigation/portal');
			}
			?>
		</nav>
	</div>
	<section class="site-content">
			<main class="text-block">
				<!--					<div id="page-header">-->
				<!--						<h1 id="page-title">--><?php //single_post_title(); ?><!-- dsfsfsd</h1>-->
				<!--					</div>-->

				<!-- Ehkä paska tapa, tee ehkä ylemmällä tavalla -->
				<?php while (have_posts() ) : the_post();
					get_template_part('template-parts/page/content');
				endwhile; ?>
			</main>
	</section>
	<aside class="partners">
		<h1>partners</h1>
	</aside>

<?php get_footer();
