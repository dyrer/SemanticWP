<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package semantic-ui-wp-theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer ui segment" role="contentinfo">
				
		<div class="site-info ui grid">
			<div class="ui row">
				<div class="ui column">
					&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> - All Rights Reserved
			<?php do_action( 'semantic_ui_wp_theme_credits' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php printf( __( '%s', 'semantic-ui-wp-theme' ), 'WordPress' ); ?></a>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'semantic-ui-wp-theme' ), 'semantic-ui-wp-theme', '<a href="http://athanasiadis.me" rel="designer">dyrer</a>@<a href="http://www.hyperwebhost.net">Hyper Webhost</a>' ); ?>
				</div>
			</div>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->

	</div>
	<div class="one wide column">&nbsp;</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
