<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package lorainccc-welded
 */

get_header(); ?>
<div class="row page-content">
<div class="small-12 columns nopadding show-for-small-only"><!--Begin Mobile Side Menu -->
 <div class="small-12 medium-12 large-12 columns nopadding">
					<div class="row show-for-small-only sub-mobile-menu-row hide-for-print" style="background:#000;">
								<div class="small-2 columns" style="padding-top: 0.5rem;padding-left: 1.625rem;">
											<span data-responsive-toggle="sub-responsive-menu" data-hide-for="medium">
													<button class="menu-icon" type="button" data-toggle></button>
											</span> 
						</div>
						<div class="small-10 columns nopadding hide-for-print">
											<h3 class="sub-mobile-menu-header" style="padding-top: 6px;
						padding-left: 8px;color:#ffffff ;"><?php echo bloginfo('the-title'); ?></h3>
						</div>
					</div>
					<div id="sub-responsive-menu" class="show-for-small-only hide-for-print">
						<ul class="vertical menu" data-drilldown data-parent-link="true">

							<?php     wp_nav_menu(array(
																																																							'container' => false,
																																																							'menu' => __( 'Drill Menu', 'textdomain' ),
																																																							'menu_class' => 'vertical menu',
																																											'theme_location' => 'left-nav',
																																																							'menu_id' => 'sub-mobile-primary-menu',
																																																											//Recommend setting this to false, but if you need a fallback...
																																																							'fallback_cb' => 'lc_drill_menu_fallback',
																																																							'walker' => new lc_drill_menu_walker(),
																																																			));
																							?>

						</ul>
					</div>
 </div>
</div><!--End Mobile Side Menu -->
	<div class="small-12 medium-12 large-12 columns breadcrumb-container">
   <?php get_template_part( 'template-parts/content', 'breadcrumb' ); ?>
</div>
 	<?php	if ( has_nav_menu( 'left-nav' ) ) : ?>
<div class="medium-4 large-4 columns hide-for-small-only hide-for-print">
	<div class="small-12 medium-12 large-12 columns sidebar-widget">
	 <div class="small-12 medium-12 large-12 columns sidebar-menu-header">
   <h3><?php echo bloginfo('the-title'); ?></h3>
  </div>
 <div id="secondary" class="medium-12 columns secondary nopadding">
		<?php if ( has_nav_menu( 'left-nav' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'left-nav',
					) );
				?>
			</nav><!-- .main-navigation -->
				<?php endif; ?>
		<?php endif; ?>

	</div>
	</div>
 	<!--<div class="small-12 medium-12 large-12 columns">
				<?php //if ( is_active_sidebar( 'lccc-events-sidebar' ) ) { ?>
							<?php //dynamic_sidebar( 'lccc-events-sidebar' ); ?>
				<?php //} ?>
	</div>-->
	</div>
  	<?php	if ( has_nav_menu( 'left-nav' ) ) { ?>
				<div class="small-12 medium-8 large-8 columns error-content" style="padding-top: 0.8rem;">		
    <?php } else { ?>
         <div class="small-12 medium-10 large-8 medium-centered columns error-content" style="padding-top: 0.8rem;">
    <?php } ?> 
						<div id="primary" class="content-area">
										<main id="main" class="site-main" role="main">
													<?php if ( is_active_sidebar( 'lccc-four-o-four-sidebar' ) ) { ?>
															<?php dynamic_sidebar( 'lccc-four-o-four-sidebar' ); ?>
													<?php }else{
															the_widget('LCCC_four_O_four_Widget');
														}
        						the_widget('WP_Widget_Search');
					 							?>
										</main><!-- #main -->
						</div><!-- #primary -->
			</div>	
</div>
<?php get_footer(); ?>

