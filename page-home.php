<?php
/**
 * The template for displaying the home page.
 *
 *
 * @package lorainccc-welded
 */

get_header(); 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header home-header">
        <?php get_template_part( 'template-parts/content', 'banner' ); ?>
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
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
</article>
<?php get_footer(); ?>