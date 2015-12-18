 <?php
 /**
  * Template Name: Our Solutions Archive
 **/ 
 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="header-banner">
            	<div class="banner-mask"></div>
            		<div class="banner-message">
     		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                                 <p class="banner-description"><?php the_field('solutions_archive_description'); ?></p>
                         </div>
            </div>
            <div class="solutions-archive-inner-wrap">
		<?php $args = array(
						'post_type' => 'our-solutions'
					);
					$thequery = new WP_Query( $args ); ?>
                

				<?php if ( $thequery->have_posts() ) : ?>

		                        
					<?php while ( $thequery->have_posts() ) : $thequery->the_post(); ?>
		                             
						<?php get_template_part( 'template-parts/content', 'archive-our-solutions' ); ?>

					<?php endwhile; ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
            </div><!--End Archive inner wrap-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>