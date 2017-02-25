<?php 
/**
 * Template Name: Tab screen
 *
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive-tabs.css">

  <style>
 
  .jumbotron { margin: 0 0 50px 0; }
  .jumbotron h1 { margin-top: 0; }
  .jumbotron p { margin-bottom: 0; }
  .row h3 { margin: 25px 0; }
  .nav-tabs { margin-bottom: 10px; }
  </style>
<div class="row">

<?php while ( have_posts() ) : the_post(); 
?>
<div class="col-md-5">
	<?php 
    echo do_shortcode("[metaslider id=25]"); 
?>
</div>
<div class="col-md-7">
	<?php  the_title( '<h3 class="tab_title">', '</h3>' );the_content();?>      
</div>
<?php endwhile;  // End of the loop.?>	

</div>
<!-- #Page-## -->
<?php

get_footer();
?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bootstrap-responsive-tabs.min.js"></script>
<script>
jQuery('.responsive-tabs').responsiveTabs({
  accordionOn: ['xs', 'sm']
});
</script>
