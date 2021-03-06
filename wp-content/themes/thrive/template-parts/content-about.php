<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">

		<div class="about-section-one">
			<?php 
			//vars
			$partoneimage = get_field('about_part_one_image');
			$partoneheadline = get_field('about_part_one_headline');
			$partonetext = get_field('about_part_one_text');
			if( !empty($partoneimage) ):
				$urlone = $partoneimage['url'];
                $altone = $partoneimage['alt'];
                $sizeone = 'full';
                $thumbone = $partoneimage['sizes'][ $sizeone ];
            
	    	?>
            	<div class="about-part-one-image"><img src="<?php echo $urlone; ?>" alt="<?php echo $altone; ?>" /></div>
            <?php endif; ?>
            <div class="about-part-one-text">
                <div class="about-part-one-text-container">
            		<?php if( $partoneheadline): ?>
                		<h2><?php echo $partoneheadline; ?></h2>
            		<?php endif; ?>
                	<?php if( $partonetext ): ?>
                 		<?php echo $partonetext; ?>
             		<?php endif; ?>
            	</div>
            </div>
		</div><!--/section one-->

		<div class="about-section-two clear">
            <div class="staff-intro">
				<h2>Thrive Team</h2>

				<?php $parttwodesc = get_field('about_part_two_description'); 
				if ($parttwodesc): ?>
				    <p><?php echo $parttwodesc; ?></p>
			    <?php endif; ?>
			</div>
                
            <?php if( have_rows('about_part_two_staff_repeater') ): ?>

	        <div class="our-staff-blocks">

	            <?php while( have_rows('about_part_two_staff_repeater') ): the_row(); 
	                // vars
	                $staffname = get_sub_field('staff_name');
					$staffemail = get_sub_field('staff_email');
					$stafflinkedin = get_sub_field('staff_linkedin');
					$stafftitle = get_sub_field('staff_title');
					$staffphoto = get_sub_field('staff_photo'); 
				?>

				
                    <div class="staff-single-block">
                    <?php if( !empty($staffphoto) ):
						$url = $staffphoto['url'];
	                    $title = $staffphoto['title'];
	                    $alt = $staffphoto['alt'];
	                    $size = 'square-size';
	                    $thumb = $staffphoto['sizes'][ $size ];
	                
			    	?>
                    	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
                    <?php endif; ?>
                        <div class="about-text-block">
	                        <?php if( $staffname): ?>
	                        	<span class="staff-name"><?php echo $staffname; ?></span>
	                    	<?php endif; ?>
	                        
	                     	<?php if( $stafflinkedin ): ?>
	                         	<span class="staff-email"><a href="<?php echo $stafflinkedin; ?>">LinkedIn</a></span>
	                     	<?php endif; ?>
	                     	<?php if( $stafftitle ): ?>
	                         	<span class="staff-title"><?php echo $stafftitle; ?></span>
	                     	<?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
	        </div>
	    </div> 

	    <!-- Advisors -->
	    <div class="about-section-two about-section-two-advisors clear">
            <div class="staff-intro">
				<h2>Advisory Team</h2>
			</div>
                
            <?php if( have_rows('about_part_two_advisory_repeater') ): ?>

	        <div class="our-staff-blocks our-advisors-blocks">

	            <?php while( have_rows('about_part_two_advisory_repeater') ): the_row(); 
	                // vars
	                $advisorname = get_sub_field('advisor_name');
					$advisoremail = get_sub_field('advisor_email');
					$advisorlinkedin = get_sub_field('advisor_linkedin');
					$advisortitle = get_sub_field('advisor_title');
					$advisorphoto = get_sub_field('advisor_photo'); 
				?>

				
                    <div class="staff-single-block">
                    <?php if( !empty($advisorphoto) ):
						$aurl = $advisorphoto['url'];
	                    $atitle = $advisorphoto['title'];
	                    $aalt = $advisorphoto['alt'];
	                    $asize = 'square-size';
	                    $athumb = $advisorphoto['sizes'][ $asize ];
	                
			    	?>
                    	<img src="<?php echo $athumb; ?>" alt="<?php echo $aalt; ?>" />
                    <?php endif; ?>
                        <div class="about-text-block">
	                        <?php if( $advisorname): ?>
	                        	<span class="staff-name"><?php echo $advisorname; ?></span>
	                    	<?php endif; ?>
	                        
	                     	<?php if( $advisorlinkedin ): ?>
	                         	<span class="staff-email"><a href="<?php echo $advisorlinkedin; ?>">LinkedIn</a></span>
	                     	<?php endif; ?>
	                     	<?php if( $advisortitle ): ?>
	                         	<span class="staff-title"><?php echo $advisortitle; ?></span>
	                     	<?php endif; ?>
                        </div>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>
	        </div>
	    </div> 

        <?php 
        //vars
        $partthreeimage = get_field('about_part_three_image');
        $partthreetext = get_field('about_part_three_text');
        ?>
	    <div class="about-section-three" style="background-image: url('<?php if(!empty($partthreeimage)) { echo $partthreeimage; } ?>');">
	    	<div class="about-part-three-message">
	    		<img src="/wp-content/themes/thrive/svg/graph.svg" alt="graph" class="graph-svg">
	    		<?php if( $partthreetext ): ?>
	                <p class="about-part-three-text"><?php echo $partthreetext; ?></p>
	            <?php endif; ?>
	    	</div>

	    </div><!--/section three-->

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