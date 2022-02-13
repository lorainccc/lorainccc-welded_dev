<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package lorainccc-welded
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php
		if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<div id="footer-widgets" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				</div>
			
		<?php endif; ?>
		<!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s-practice-practice' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', '_s-practice-practice' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', '_s-practice-practice' ), '_s-practice-practice', '<a href="http://davebrogan.com">Dave Brogan</a>' );
				?>
		</div>--><!-- .site-info -->
		<img class="footer-spark footer-spark-left" alt="" src="http://davidb551.sg-host.com/wp-content/uploads/2022/01/corner-spark-bottom-left.svg" />
		<img class="footer-spark footer-spark-right" alr="" src="http://davidb551.sg-host.com/wp-content/uploads/2022/01/corner-spark-bottom-right.svg" />
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>