<?php
/**
 * Template Name: Home screen
 *
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="row">
		 <div class="col-md-8" id="left-area">
		 	 <div class="panel panel-default" id="panel-1">
		    	<div class="panel-heading">Panel Heading</div>
		    	<div class="panel-body">Panel Content</div>
		 	 </div>
		 	<div class="panel panel-default" id="panel-2">
		 	 <div class="panel-heading bg-default">Panel Heading</div>
			  <div class="panel-body">A Basic Panel</div>
			</div>
			<div class="panel panel-default" id="panel-3">
		 	 <div class="panel-heading bg-default">Panel Heading</div>
			  <div class="panel-body">A Basic Panel</div>
			</div>
		 </div> 
		 <div class="col-md-4" id="right-area">
		 	 <div class="panel panel-default" id="panel-side-1">
		    	<div class="panel-heading">Panel Heading</div>
		    	<div class="panel-body">Panel Content</div>
		 	 </div>
		 	 <div class="panel panel-default" id="panel-side-2">
			  <div class="panel-body">Panel Content</div>
			</div>
			<div class="panel panel-default" id="panel-side-3">
			  <div class="panel-body">Panel Content</div>
			</div>
		 </div>
			
		</div>
		
		
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
