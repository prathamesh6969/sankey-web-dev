<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <div class="site-info">
			<a href="</?php echo esc_url( __( 'https://wordpress.org/', 'simple' ) ); ?>">
				</?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'simple' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				</?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'simple' ), 'simple', '<a href="http://sankeysolutions.com/">Sankey Solutions</a>' );
				?>
		</div> -->
		<!-- .site-info -->
		<div class="footer animated fadeInUp animation-2x">
                <div class="connect ">
                <div class="connect-item "> <a href="https://www.facebook.com/sankeysolutions/?epa=SEARCH_BOX" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a></div>
                <div class="connect-item "><a href="https://www.instagram.com/sankey_solutions/" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></div>
                <div class="connect-item "><a href="https://twitter.com/sankeysolutions" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a></div> 
                <div class="connect-item "><a href="https://www.linkedin.com/company/sankey-solutions/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></div> 
                </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
