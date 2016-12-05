<?php
/**
 * The template for displaying posts in the Video post format.
 *
 * @since 1.0.0
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	    <?php get_template_part( 'template-parts/content', 'header' ); ?>

		<div class="entry-content description clearfix">
			<?php the_content( __( 'Read more', 'arcade-basic') );	?>
		</div><!-- .entry-content -->

	    <?php get_template_part( 'template-parts/content', 'footer' ); ?>
	</article><!-- #post -->