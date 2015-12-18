<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo the_permalink(); ?>">
		<div class="entry-content">
           
               		<div class="csa-featured-img">
                   	<?php if ( has_post_thumbnail() ) {
		       		the_post_thumbnail('blog-size');
	           	}  ?>
                   
               		</div>
	    
		</div><!-- .entry-content -->
	</a> 
</article><!-- #post-## -->

