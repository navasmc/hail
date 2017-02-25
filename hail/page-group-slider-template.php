<?php
/**
 * Template Name: Group Slider screen
 *
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<div class="row">
<div class="col-md-12">
<?php while ( have_posts() ) : the_post(); 
?>
<?php 
the_content();
endwhile;
// End of the loop.?>
</div>
</div>


<!-- #Page-## -->
<?php

get_footer();




