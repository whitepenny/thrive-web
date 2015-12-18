<?php
/**
 * Template Name: FAQ
**/
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                       
			<?php while ( have_posts() ) : the_post(); ?>

                <div class="header-banner" style="background-image: url('<?php if ( has_post_thumbnail() ) {
		            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
		            echo $large_image_url[0];
		            } ?>')">
                    <div class="banner-mask"></div>
                        <div class="banner-message">
             		    <h1 class="banner-title"><?php the_title(); ?></h1>
                            <p class="banner-description"><?php the_field('faq_description'); ?></p>
                        </div>
                </div>

				<?php get_template_part( 'template-parts/content', 'faq' ); ?>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>