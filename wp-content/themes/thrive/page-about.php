<?php
/**
 * Template Name: About
 *
**/

  get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="header-banner">
            	<div class="banner-mask"></div>
        		<div class="banner-message">
 		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                    <p class="banner-description"><?php the_field('about_description'); ?></p>
                </div>
            </div>
                   
                

		<?php if ( have_posts() ) : ?>

                        
			<?php while ( have_posts() ) : the_post(); ?>
                             
				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
                    
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
