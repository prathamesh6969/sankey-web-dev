<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simple
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<?php wp_head(); ?>


	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
	</script> -->
	<script>
		// mobile-menu
		jQuery(document).ready(function(){
			jQuery('.mobile-menu-icon').click(function ($)
			{
				jQuery('.mobile-menu').toggleClass('open');
				jQuery('.menu-item').toggleClass('animated fadeInLeft');
				jQuery('.connect-item').toggleClass('animated fadeInUpBig');
			});
			jQuery(".mobile-menu-exit").click(function ($)
			{
				jQuery('.menu-item').removeClass('animated fadeInLeft ');
				jQuery('.connect-item').removeClass('animated fadeInUpBig');
				jQuery('.mobile-menu').removeClass('open');
			});
		});

	</script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'simple' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></?php esc_html_e( 'Primary Menu', 'simple' ); ?></button>
			</?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav> -->
		<!-- #site-navigation -->
		<div class="top-nav">
            <a href="../index.html"><img src='http://localhost/wordpress/wp-content/uploads/2019/11/logo.png' alt="Sankey solutions"></a>
            <div id="top-nav-content">
                <a href="../writetoceo.html" >WRITE TO CEO</a>
                <div class="mobile-menu-icon">
                    <img src="http://localhost/wordpress/wp-content/uploads/2019/11/Hamburger2.svg" alt="">
				</div>
            </div>
        </div>
		<div class="mobile-menu">
                <div class="mobile-menu-exit"><i class="fa fa-times-circle fa-lg"></i></div>
                <div class="mobile-menu-item">
                        <div class="menu-item animation-1x "><a href="../journey.html">JOURNEY</a></div>
                        <div class="menu-item animation-2x"><a href="../team.html">TEAM</a></div>
                        <div class="menu-item animation-3x"><a href="../services.html">SERVICES</a></div>
                        <div class="menu-item animation-4x"><a href="../technologies.html">TECHNOLOGIES</a></div>
                        <div class="menu-item animation-5x"><a href="../blogs.html">BLOGS</a></div>
                        <div class="menu-item animation-6x"><a href="../events.html" >EVENTS</a></div>
                        <div class="menu-item animation-7x"><a href="../works.html" >WORKS</a></div>
                        <div class="menu-item animation-8x"><a href="../careers.html">CAREERS</a></div>
                        <div class="menu-item animation-9x"><a href="../contactus.html">CONTACT US</a></div>
				</div>
				
                <div class="mobile-menu-footer">
					<div class="social-icons">
                        <div class="connect-item animation-1x" > <a href="https://www.facebook.com/sankeysolutions/?epa=SEARCH_BOX"><i class="fa fa-facebook-square fa-lg"></i></a></div>
                        <div class="connect-item animation-3x"><a href="https://www.instagram.com/sankey_solutions/"><i class="fa fa-instagram fa-lg"></i></a></div>
                        <div class="connect-item animation-5x" ><a href="https://www.linkedin.com/company/sankey-solutions/"><i class="fa fa-linkedin fa-lg"></i></i></a></div>
                        <div class="connect-item animation-7x" ><a href="https://twitter.com/sankeysolutions"><i class="fa fa-twitter-square fa-lg"></i></a></div>
                    </div>
                    <div class="copyright-text">
                    Copyright <span>&#9400;</span> 2019 Sankey Solutions, All rights reserved
                    </div>
                </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
