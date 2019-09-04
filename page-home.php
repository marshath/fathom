<?php get_header(); ?>
<?php /* Template Name: Frontpage */ ?>
			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<section class="splash-hero" style="background-image: url('<?php the_post_thumbnail_url( $size ); ?>');">
							
							<?php /* <div class="splash-title">
								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							</div> */ ?>
							
							<div class="splash-text">
								<?php // comments
									the_content();
								?>
							</div>
						</section> <?php // end .splash-hero ?>
						
						<section class="feature-callouts">
						<?php   //---------------------------------
								// ----------- CALLOUTS -----------
								//---------------------------------
								// check if the repeater field has rows of data
								if( have_rows('hm_callouts') ):
								
								 	// loop through the rows of data
								    while ( have_rows('hm_callouts') ) : the_row();
								        // display callouts
								        
										echo '<div class="feature-callouts-item">
											<div class="cta-icon"><img src="', the_sub_field('cta_icon'), '"></div>
											<h3 class="cta-title">', the_sub_field('cta_title'), '</h3>
											<p class="cta-text">', the_sub_field('cta_text'), '</p>
										</div>';
								        
								    endwhile;
								
								else :
								    // no rows found
								endif;
									// end callouts ?>

						</section> <?php // end ?>

						<?php endwhile; else : 
						endif; ?>

					</main> <?php // end #main .main-wrap ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
