<?php
  get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <div class="insights-header-banner">
                    	<div class="banner-mask"></div>
                    		<div class="banner-message">
             		        	<h1 class="banner-title"><?php if (function_exists('is_tag') && is_tag()) {
		    single_tag_title("Insights Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_category()) {
		         single_cat_title( 'Insights Archive - ' ); }
		      elseif (is_archive()) {
		         echo 'Insights Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         wp_title(''); }
		      else {
		          echo ''; } ?></h1>
                                         
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
