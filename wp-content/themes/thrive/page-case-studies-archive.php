<?php
/**
 * Template Name: Case Studies Archive
 *
**/

  get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="csa-header-banner">
            	<div class="banner-mask"></div>
            		<div class="banner-message">
     		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                        <p class="banner-description"><?php the_field('csa_description'); ?></p>
                    </div>
            </div>

            

            <div class="cs-archive-inner-wrap">
                <div class="client-logos">
                <?php if( have_rows('client_logos') ): ?>

                <ul>

                <?php while( have_rows('client_logos') ): the_row(); 

                    $image = get_sub_field('logo');

                    ?>

                    <li>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

                    </li>

                <?php endwhile; ?>

                </ul>

                <?php endif; ?>            
            </div>

		       	<?php  $args = array(
						'post_type' => 'case-study'
					);
					$csquery = new WP_Query( $args ); ?>
				<?php if ( $csquery->have_posts() ) : ?>

		                        
					<?php while ( $csquery->have_posts() ) : $csquery->the_post(); ?>
		                             
						<?php get_template_part( 'template-parts/content', 'archive-casestudies' ); ?>

					<?php endwhile; ?>

			

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</div><!--End Archive inner wrap-->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>