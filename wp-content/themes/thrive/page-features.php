<?php
/**
 * Template Name: Features
 *
**/

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
              <div class="csa-header-banner">
                 <div class="banner-mask"></div>
                  <div class="banner-message">
                      <?php 
                      //vars
                      $featdesc = get_field('features_description');
                      ?>
                      <h1 class="banner-title"><?php the_title(); ?></h1>
                          <?php if( $featdesc ): ?>
                              <p class="banner-description"><?php echo $featdesc; ?></p>
                          <?php endif; ?>
                  </div>
              </div>

              <?php while ( have_posts() ) : the_post(); ?>

                  <?php get_template_part( 'template-parts/content', 'features' ); ?>


              <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>