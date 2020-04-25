<head>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
jQuery(document).ready(function($){
	jQuery('#blogs-link').css({
		"color" : "#03729B"
	});
});
</script>
</head>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main post-model">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	    <div class="right-nav">
                <div class="right-nav-content" id="journey"><a href="../journey.html">JOURNEY</a></div>
                <div class="right-nav-content" id="team"><a href="../team.html" >TEAM</a></div>
                <div class="right-nav-content" id="services"><a href="../services.html" >SERVICES</a></div>
                <div class="right-nav-content" id="technology"><a href="../technologies.html">TECHNOLOGIES</a></div>
                <div class="right-nav-content" id="blogs"><a id="blogs-link" href="home/" >BLOGS</a></div>
                <div class="right-nav-content" id="events"><a href="../events.php" >EVENTS</a></div>
                <div class="right-nav-content" id="works"><a href="../works.html" >WORKS</a></div>
        </div>
        <div class="left-nav">
                <div id="career"><a href="../careers.html" >CAREERS</a></div>
                <div id="contactus" ><a href="../contactus.html" >CONTACT US</a></div>
        </div>

<?php
// get_sidebar();
get_footer();
