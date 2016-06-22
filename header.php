<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mirai
 */

?>
<!--
 _____ _           _                     _         ____  _          _
|_   _| |__   __  | |    ___  _ __   ___| |_   _  |  _ \(_)_  _____| |
 | | | '_ \ / _ \ | |   / _ \| '_ \ / _ \ | | | | | |_) | \ \/ / _ \ |
 | | | | | |  __/ | |__| (_) | | | |  __/ | |_| | |  __/| |>  <  __/ |
 |_| |_| |_|\___| |_____\___/|_| |_|\___|_|\__, | |_|   |_/_/\_\___|_|
                                           |___/
Freelance Web Design & Development
by The Lonely Pixel
https://www.thelonelypixel.co.uk
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
	  <div class="container">
	    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

	    <!-- Desktop Navigation -->
	    <nav class="nav-primary">
	      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	    </nav>

	    <!-- Mobile Navigation -->
	    <div class="mobile-trigger">
				<span></span>
			</div>
			<nav class="nav-mobile">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>

	  </div>
	</header>

	<div id="content" class="site-content">
