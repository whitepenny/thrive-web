<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
       
	<header class="entry-header">
               <div class="featured-img">
                   <?php if ( has_post_thumbnail() ) {
                       echo '<a href="'; echo the_permalink(); echo '">';
		       the_post_thumbnail('blog-size');
                       echo '</a>';
	           }  ?> 
               </div>
		

		<div class="entry-meta">
		    <?php thrive_posted_on_single(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
                <h2 class="entry-title"><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
                <div class="single-cats">
                        <span class="filed-under">Filed Under: </span><?php thrive_entry_footer(); ?>
                    </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thrive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->