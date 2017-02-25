<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hail
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	   <div class="row">
	   <div class="col-md-6"><?php  echo get_the_post_thumbnail( $post->ID, 'large' ); ?></div>
	   <div class="col-md-6">
		<?php
			
         
          the_content();
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'hail' ),
				'after'  => '</div>',
			) );
		?></div>
	</div><!-- .entry-content -->
</div>
</article><!-- #post-## -->
