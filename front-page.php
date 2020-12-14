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
	<main>
		<?php while (have_posts() ) : the_post();
			get_template_part('template-parts/page/content');
		endwhile; ?>
	</main>
	<?php get_template_part("template-parts/page/partners"); ?>

<?php get_footer();
