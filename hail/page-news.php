<?php 
/**
 * page news
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */
get_header(); ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.custom-scrollbar.css"/>
<div class="row">
<?php while ( have_posts() ) : the_post();  
the_content();
endwhile;
// End of the loop.?>	
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
