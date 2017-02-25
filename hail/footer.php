<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hail
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'hail' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'hail' ), 'Hail' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'hail' ), 'hail', '<a href="#" rel="designer">hail.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	</div><!--.col-md-12-->
	
	</div><!--.row-->
</div><!-- #page or .container -->

<?php wp_footer(); ?>

</body>
</html>
