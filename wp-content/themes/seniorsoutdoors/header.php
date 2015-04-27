<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package seniorsoutdoors
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="/liz_finalproject_wp/wp-content/themes/seniorsoutdoors/js/jquery.flexslider.js"></script>
<script type="text/javascript" charset="utf-8">
$(window).load(function() {
	$('.flexslider').flexslider();
});
</script> 
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'seniorsoutdoors' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<img class="logo" src="http://localhost:8888/liz_finalproject_wp/wp-content/themes/seniorsoutdoors/images/so_logo_small.png" alt="Seniors Outdoors logo">
<!--			<img class="logo" src="http://burtonux.com/liz_finalproject_wp/wp-content/themes/seniorsoutdoors/images/so_logo_small.png" alt="Seniors Outdoors logo">
-->		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'seniorsoutdoors' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
