<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hail
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container">
<div class="row">
   <div class="col-md-12">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding text-center">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /></a>
			 			
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
		<!--	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hail' ); ?></button>
		-->	
		<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		
		<div class="col-md-12">
			<?php wp_nav_menu(array(
							  'menu' => 'primary',
							  'depth' => 2,
							  'container' => false,
							  'menu_class' => 'nav',
							  //Process nav menu using our custom nav walker
							  'walker' => new wp_bootstrap_navwalker())  ); ?>
		     </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
