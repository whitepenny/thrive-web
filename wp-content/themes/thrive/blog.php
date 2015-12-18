<?php
/**
 * Template Name: Blog
 *
**/

  get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <div class="insights-header-banner">
                    	<div class="banner-mask"></div>
                    		<div class="banner-message">
             		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                                         <p class="banner-description"><?php the_field('insights_description'); ?></p>
                                 </div>
                    </div>
                    <div class="archive-inner-wrap">
                <?php query_posts(array('post_type' => 'post', 'paged' => get_query_var('paged') ) ); ?>

		<?php if ( have_posts() ) : ?>

                        
			<?php while ( have_posts() ) : the_post(); ?>
                             
				<?php get_template_part( 'template-parts/content', 'archive-posts' ); ?>

			<?php endwhile; ?>

			<div class="center pagination-container">
                            <?php wp_pagenavi(); ?>
 			</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
                    </div><!--End Archive inner wrap-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
