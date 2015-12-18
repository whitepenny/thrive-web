<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="header-banner">
            	<div class="banner-mask"></div>
        		<div class="banner-message">
 		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                    <p class="banner-description"><?php the_field('case_study_description'); ?></p>
                </div>
            </div>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-casestudy' ); ?>

			<?php get_template_part( 'template-parts/content', 'prefooter' ); ?>
			

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>