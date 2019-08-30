<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap">

					<main id="main" class="main-wrap" role="main" itemscope itemprop="mainContentOfPage">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<section id="post-<?php the_ID(); ?>" class="inner-wrap project-form" role="article">

							<header class="article-header">
								<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
							</header> <?php // end .article header ?>

							<section class="entry-content" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <?php // end .content-entry ?>

							<footer class="article-footer">
							</footer> <?php // end .article-footer ?>

						</section> <?php // end #post-<id> .inner-wrap ?>

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
