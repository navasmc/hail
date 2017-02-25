<?php 
/**
 * page Contact Us
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.custom-scrollbar.css"/>
<style>
	.site-content{
		background: #878787 !important;
	}
</style>
<div class="row">
<?php
while ( have_posts() ) : the_post();  
//the_content();
?>	
<div class="col-md-6"><div class="contact-location">

  <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo get_option( 'location_map' ); ?>&hl=es;z=7&amp;output=embed"></iframe> </li>

 </div></div>
<div class="col-md-6">
<div class="contact-right-content">	
<?php  the_title( '<h3 class="contact_title">', '</h3>' );?>  
	<?php echo get_option( 'contact_address'); ?> 
</div>
    
	
</div>
<?php

endwhile;
// End of the loop.
?>	
</div>
<!-- #Page-## -->
<?php
get_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.custom-scrollbar.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".content-right-body").customScrollbar();
    });
</script>
