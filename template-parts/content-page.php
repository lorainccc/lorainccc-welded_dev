<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package LCCC Framework
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="main-content-section">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'lccc-framework' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

 	<footer class="entry-footer">
		 <?php 
		 //edit_post_link( esc_html__( 'Edit', 'lccc-framework' ), '<span class="edit-link">', '</span>' ); 
		 ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
