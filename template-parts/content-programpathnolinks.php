<?php

$programargs = array(
    'post_type' => 'lc_program_paths',
				'post_status' => 'publish',
  );
  $programpaths = new WP_Query($programargs);
					if ( $programpaths->have_posts() ) :
        while ( $programpaths->have_posts() ) : $programpaths->the_post();

  $post_id = get_the_ID();
  $linkvalue = get_post_meta( $post_id, 'lc_program_path_link_field', true );
  $linklabel = get_post_meta( $post_id, 'lc_program_path_link_label_field', true );


  $titleId = get_the_title();
  $titleId = strtolower( str_replace( ' ', '_', $titleId ) );

    ?>
        <section class="row programpaths" aria-label="<?php echo $titleId; ?>" role="region">
											<div class="small-12 medium-3 large-3 columns">
            <?php the_post_thumbnail(); ?>
											</div>
											<div class="small-12 medium-9 large-9 columns gtwymenu-content">
													<?php the_title('<h2>','</h2>' );?>
													<?php the_content('<p>','</p>'); ?>
									</div>
								</section>

    <?php
        endwhile;
					endif;
 wp_reset_query();

?>