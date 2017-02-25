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
	<div id="header-bar">
	
		<div class="navbar-inner">
		<ul class="nav nav-pills pull-right">
			<li class="hidden-sm hidden-xs">
				<a href="http://yafound.com/Mefnd/wp-login.php?action=login" class="ua5 ">Login</a></li><li class="hidden-sm hidden-xs"><a href="http://yafound.com/Mefnd/wp-login.php?action=register" class="ua6 ">Register</a>
			</li>
		</ul>
		<ul class="nav nav-pills pull-left">
			<li> 
				<a class="" href="#" onclick="GMApMyLocation();" data-toggle="modal" data-target="#MyLocationModal"><div class="flag flag-ae wlt_locationflag"></div> Change Location</a>
			 </li>
		 </ul>
		</div>
	</div>	
	<div id="logo-bar">
		<div class="navbar-inner">
		
		<div class="pull-left log-sec-1">
		<ul class="nav nav-pills pull-left">
			<li> 
				<a class="" href="#"><img src="<?php echo get_stylesheet_directory_uri();  ?>/img/logo.png"/></a>
			 </li>
		 </ul>
		</div>
		<div class="pull-right log-sec-2">
			<ul class="nav nav-pills" id="navigation">
				<li class="hidden-sm hidden-xs"><a>Used Cars</a></li>
				<li class="hidden-sm hidden-xs"><a>Classifieds</a></li>
				<li class="hidden-sm hidden-xs"><a>Property</a></li>
				<li class="hidden-sm hidden-xs"><a>Jobs</a></li>
				<li class="hidden-sm hidden-xs"><a>Contact Us</a></li>
			</ul>
			 <div class="input-group" id="searchbox">
			  <input type="text" class="form-control" placeholder="What are you Looking for." aria-describedby="basic-addon2">
			  <span class="input-group-addon" id="basic-addon2">Search</span>
			</div>
		</div>	
		</div>
	</div>
	</header>
	<!-- #masthead -->
	<div id="content" class="site-content">
