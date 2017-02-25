<?php
/**
 * Template Name: Content screen
 *
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="row">
<?php while ( have_posts() ) : the_post(); 
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
?>
<div class="col-md-12">
<div style="background: url('<?php echo $feat_image;?>');height:682px;background-size:100% auto;background-repeat: no-repeat;">
<div class="right-content">
	<?php 
	the_title( '<h3>', '</h3>' );
	the_content();			
	 ?>
</div>
</div>
</div>	
<?php endwhile; // End of the loop.?>
</div>


<!-- #Page-## -->
<?php

get_footer();




