 <div class="single-header-banner">
     <div class="banner-mask"></div>
     <div class="single-banner-message">
        <span class="single-banner-title">Insights</span>               
     </div>
 </div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php thrive_posted_on_single(); ?><span class="sep"> | </span><?php thrive_entry_footer(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
            <div class="featured-img">
                <?php if ( has_post_thumbnail() ) {
			the_post_thumbnail('blog-size');
		}  ?> 
            </div>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
