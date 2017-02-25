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

		       <?php
while ( have_posts() ) : the_post();  
the_content();
?>	
<?php

endwhile;
// End of the loop.
?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
