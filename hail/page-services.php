<?php 
/**
 * Template Name: Services screen
 *
 * @package WordPress
 * @subpackage Hail
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<style>
	#content {
		background:none;   
    border: 1px solid black !important;
    }
</style> 
<div class="row">

<?php $args = array(
	'posts_per_page'   => -1,
	'offset'           => 0,
	'category'         => 'services',
	'category_name'    => '',
	'post_type'        => 'post',	
	'post_status'      => 'publish',
	'suppress_filters' => true 
);
$posts_array = get_posts( $args );

?>
<div class="col-md-12">


<ul class="services-ul">
<li><h2 class="service-title"><?php echo get_the_title();?></h2></li>
	<?php 
	foreach($posts_array as $row):
	?>
	<li><a href="<?php echo $row->guid?>"><?php echo get_the_post_thumbnail( $row->ID, 'thumbnail' ); ?><span><?php echo( $row->post_title );?></span></a></li>
	<?php
	endforeach;
    //var_dump($posts_array);
    ?>
</ul>
</div>

<?php?>	

</div>
<!-- #Page-## -->
<?php

get_footer();
?>

