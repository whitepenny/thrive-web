<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       
	<header class="entry-header">
               <div class="featured-img">
                   <?php if ( has_post_thumbnail() ) {
                       echo '<a href="'; echo the_permalink(); echo '">';
		       the_post_thumbnail('archive-size');
                       echo '</a>';
	           }  ?> 
               </div>
		

		
	</header><!-- .entry-header -->

	<div class="entry-content">
                <h2 class="entry-title"><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
		<p class="discover-link"><a href="<?php echo the_permalink() ?>">Discover <?php the_title(); ?></a></p>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

