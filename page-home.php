<?php get_header(); ?>
<?php /* Template Name: Frontpage */ ?>
			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'inner-wrap' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<header class="article-header">

								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

							</header> <?php // end .article header ?>

							<section class="entry-content" itemprop="articleBody">
								<?php
									// the content (pretty self explanatory huh)
									echo '<div style="background-image: url('; the_post_thumbnail_url( $size ); echo '); background-size: cover; color: white; padding: 0.5em;">';
									 the_content();
									 echo '</div>';
										
								//---------------------------------
								// ----------- CALLOUTS -----------
								//---------------------------------
									// check if the repeater field has rows of data
									if( have_rows('hm_callouts') ):
									
									 	// loop through the rows of data
									    while ( have_rows('hm_callouts') ) : the_row();
									        // display callouts
									        
											echo '<div class="" style="width: 25%; display: inline-block; margin: 1em 2%; float: left;">
												<div class"" style="width:50px; display: block;"><img src="', the_sub_field('cta_icon'), '"></div>
												<h3 class"">', the_sub_field('cta_title'), '</h3>
												<div class"">', the_sub_field('cta_text'), '</div>
											</div>';
									        
									    endwhile;
									
									else :
									    // no rows found
									endif;
										// end callouts ?>
								
							</section> <?php // end .content-entry ?>

							<footer class="article-footer">
							</footer> <?php // end .article-footer ?>

						</article> <?php // end #post-<id> .inner-wrap ?>

						<?php endwhile; else : ?>

							<article id="post-not-found" class="article-wrap">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
									<p><?php _e( 'This is the error message in the page.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article> <?php // end #post-not-found .inner-wrap ?>

						<?php endif; ?>

					</main> <?php // end #main .main-wrap ?>

				</div> <?php // end #inner-content .wrap ?>
			</div> <?php // end #content ?>

<?php get_footer(); ?>
