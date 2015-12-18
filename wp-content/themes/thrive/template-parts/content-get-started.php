<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
                
                <!--</div>-->
		<div class="get-started-address">
                    <?php if( have_rows('get_started_addresses') ): ?>
	        	    <?php while( have_rows('get_started_addresses') ): the_row(); 
                                  // vars
				  $svgs = get_sub_field('path_to_svg');
                                  $addy = get_sub_field('contact_info');
                            ?>
                            <div class="address-list-item clear">
                               <?php if( $svgs): ?>
                                    <img src="<?php echo $svgs; ?>" alt="icon" />
                                <?php endif; ?>
                                <?php if( $addy): ?>
                                <?php echo $addy; ?>
                                <?php endif; ?>
                                
                            </div>
                    
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'thrive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'thrive' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
