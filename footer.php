<?php
/** The template for displaying the footer */

?>
		<footer id="site-footer">
			<div class="footer-inner footer-grid">
				<?php if (is_active_sidebar('footer_widgets')) : ?>
					<?php dynamic_sidebar('footer_widgets'); ?>
				<?php endif;
				if (has_nav_menu('social')) {
					get_template_part('template-parts/navigation/social');
				}?>
			</div>
		</footer>
		<?php if (!function_exists( 'wp_footer')) { // Tell Wordpress we have closed the footer
			function wp_footer() {
				do_action('wp_footer');
			}
		}
		wp_footer();
		?>

<!-- This should be included the proper Wordpress way -->
<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<symbol id="icon-angle-down" viewBox="0 0 21 32">
			<path class="path1" d="M19.196 13.143q0 0.232-0.179 0.411l-8.321 8.321q-0.179 0.179-0.411 0.179t-0.411-0.179l-8.321-8.321q-0.179-0.179-0.179-0.411t0.179-0.411l0.893-0.893q0.179-0.179 0.411-0.179t0.411 0.179l7.018 7.018 7.018-7.018q0.179-0.179 0.411-0.179t0.411 0.179l0.893 0.893q0.179 0.179 0.179 0.411z"></path>
		</symbol>
	</defs>
</svg>
</body>
</html>
