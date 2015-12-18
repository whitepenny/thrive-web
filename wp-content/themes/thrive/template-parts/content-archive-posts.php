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
                    
                    <div class="single-cats">
                        <?php thrive_entry_footer(); ?>
                    </div>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
                <h2 class="entry-title"><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thrive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

