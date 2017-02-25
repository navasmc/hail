<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hail
 */

get_header(); ?>
<style>
	#content {
		background:none;   
    border: 1px solid black !important;
    }
</style>
<div class="single-content">
	<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-service', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			/*if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>

	</div>
<?php

get_footer();
