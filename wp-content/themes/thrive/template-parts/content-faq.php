<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
                
            <?php if( have_rows('faq_repeater') ): ?>

	        <div class="faq-blocks">

	             <?php while( have_rows('faq_repeater') ): the_row(); 
                        // vars
			$faq_q = get_sub_field('the_question');
			$faq_a = get_sub_field('the_answer');
		     ?>
                             <div class="faq-single-block">
                                 <img src="/wp-content/themes/thrive/svg/check_hexagon.svg" class="faq-checkmark" alt="checkmark in hexagon" />    
                                 <div class="faq-text-block">
                                     <?php if( $faq_q ): ?>
		                         <h2><?php echo $faq_q; ?></h2>
		                     <?php endif; ?>
                                     <?php if( $faq_a ): ?>
		                         <p><?php echo $faq_a; ?></p>
		                     <?php endif; ?>
                                 </div>
                             </div>

                     <?php endwhile; ?>

             <?php endif; ?>
	        </div><!--End FAQ Blocks-->


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