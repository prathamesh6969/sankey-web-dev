<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package simple
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main-single">
			<div class="left">
				<a href="home/"><div class="back-button"></div></a>
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );

						the_post_navigation();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
			</div>
			<div class="right">
			<?php
				get_sidebar();
			?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_footer();