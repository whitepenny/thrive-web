<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

        <?php if( have_rows('single_solution_repeater') ): ?>
    	    <?php while( have_rows('single_solution_repeater') ): the_row(); ?>

    	    	<?php 
        	    //vars
        	    $headline = get_sub_field('solution_headline'); 
        	    $subtext = get_sub_field('solution_subtext');
        	    $text = get_sub_field('solution_text_content');
        	    $image = get_sub_field('solution_image');
                    
        	    
        	    ?>

            	<div class="solution-row clear">
            		<div class="solution-row-inner">

            			<div class="solution-text-block">
            				<?php if( $headline): ?>
				            	<h2><?php echo $headline; ?></h2>
				        	<?php endif; ?>
				        	<?php if( $subtext): ?>
				            	<span class="solution-subtext"><?php echo $subtext; ?></span>
				        	<?php endif; ?>
			            	<?php if( $text): ?>
			             		<p><?php echo $text; ?></p>
			         		<?php endif; ?>
                                       		<?php if( have_rows('solution_bullet_point') ): ?>
                                                        <div class="solution-bp-container">
    	    						<?php while( have_rows('solution_bullet_point') ): the_row(); ?>
                                        
                                              		<div class="hp-section-five-bullet-point">
	        	    	   	          	<span class="checkmark"><img src="/wp-content/themes/thrive/svg/check_circle.svg" alt="Checkmark in a circle" /></span>
	        	    	   		  
				             		<span class="bulletpoint"><?php if ( get_sub_field('the_bullet_points') ){ echo get_sub_field('the_bullet_points'); } ?></span>
				                  
	        	    	              		</div>
                                       		        <?php endwhile; ?>
                                                        </div><!--End bullet point container-->
                                                 <?php endif; ?>
            			</div>

            			<div class="solution-image-block">
            				<?php if( !empty($image) ):
								$url = $image['url'];
			                    $alt = $image['alt'];
			                    $size = 'full';
			                    $thumb = $image['sizes'][ $size ];
		                
				    		?>
		                    	<img src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
		                    <?php endif; ?>
            			</div>

            		</div>
            	</div>

    		<?php endwhile; ?>
    	<?php endif; ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->