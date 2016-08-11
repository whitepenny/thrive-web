<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">

		<div class="home-section-one clear">
           
			<?php 
			//vars
			$hponebgimg = get_field('home_top_background_image');
			$hponeheadline = get_field('home_section_one_headline');
			$hponedesc = get_field('home_section_one_description');
			
			?>

			<div class="hp-section-one-gradient" <?php if( $hponebgimg): ?>style="background-image: url(<?php echo $hponebgimg;?>);"<?php endif; ?>></div>
            <div class="home-part-one-text">
            	<?php if( $hponeheadline): ?>
            		<h1><?php echo $hponeheadline; ?></h1>
        		<?php endif; ?>
            	<?php if( $hponedesc ): ?>
             		<p><?php echo $hponedesc; ?></p>
         		<?php endif; ?>
            </div>

            
		</div>
        
        <div class="home-section-one-logos">
        	<div class="home-section-one-logos-inner">
	        	<?php if( have_rows('section_one_logos') ): ?>
	        	    <?php while( have_rows('section_one_logos') ): the_row(); 

		        	    // vars
						$hponelogos = get_sub_field('home_section_one_logo_image'); 
					?>
	                <div class="hp-one-logo">
	                    <?php if( !empty($hponelogos) ):
							$logourl = $hponelogos['url'];
		                    $logoalt = $hponelogos['alt'];
		                    $logosize = 'full';
		                    $logothumb = $hponelogos['sizes'][ $logosize ];
		                
				    	?>
	                    	<img src="<?php echo $logourl; ?>" alt="<?php echo $logoalt; ?>" />
	                    <?php endif; ?>
	                </div>

	        	    <?php endwhile; ?>
	        	<?php endif; ?>
        	</div>
        </div>

		<div class="home-section-two">
			
			<?php if( have_rows('home_section_two_repeater') ): ?>
        	    <?php while( have_rows('home_section_two_repeater') ): the_row(); ?>

	        	    <?php 
	        	    //vars
	        	    $hptworptimg = get_sub_field('home_section_two_repeater_image'); 
	        	    $hptworptheadline = get_sub_field('home_section_two_repeater_headline');
	        	    $hptworpttext = get_sub_field('home_section_two_repeater_text');
	        	    $hptwointegratelogo = get_sub_field('home_section_two_integration_logo');
	        	    $hptwointegratetext = get_sub_field('home_section_two_integration_text');
	        	    $hptworptbtnurl = get_sub_field('home_section_two_button_link');
	        	    $hptworptbtntext = get_sub_field('home_section_two_button_text');
	        	    ?>
	        	    <div class="home-section-two-section clear">
	        	    	<?php if( !empty($hptworptimg) ):
					    	$hptwourl = $hptworptimg['url'];
			                $hptwoalt = $hptworptimg['alt'];
			                $hptwosize = 'full';
			                $hptwothumb = $hptworptimg['sizes'][ $hptwosize ];
		                
				    	?>
	                    	<div class="home-part-two-image"><img src="<?php echo $hptwourl; ?>" alt="<?php echo $hptwoalt; ?>" /></div>
	                    <?php endif; ?>
		        	    <div class="home-section-two-text-container">
		        	    	
	                        <div class="home-two-text-block">
			                    <?php if( $hptworptheadline): ?>
				            		<h3><?php echo $hptworptheadline; ?></h3>
				        		<?php endif; ?>
				            	<?php if( $hptworpttext): ?>
				             		<p><?php echo $hptworpttext; ?></p>
				         		<?php endif; ?>
				         		<?php if( !empty($hptwointegratelogo ) ):
							    	$hptwointurl = $hptwointegratelogo ['url'];
					                $hptwointalt = $hptwointegratelogo ['alt'];
					                $hptwointsize = 'full';
					                $hptwointthumb = $hptwointegratelogo ['sizes'][ $hptwointsize ];
				                
						    	?>
			                    	<div class="home-two-inetgration-logo"><img src="<?php echo $hptwointurl; ?>" alt="<?php echo $hptwointalt; ?>" /></div>
	                    		<?php endif; ?>
				         		<?php if( $hptwointegratetext): ?>
				         			<p class="integrate-text"><?php echo $hptwointegratetext; ?></p>
				         		<?php endif; ?>
				         		<?php if( $hptworptbtnurl): ?>
				             		<a class="red-button" href="<?php echo $hptworptbtnurl; ?>">
				             			<?php if( $hptworptbtntext): ?>
						             		<?php echo $hptworptbtntext; ?>
						         		<?php endif; ?>
				             		</a>
				         		<?php endif; ?>
				         	</div>
		        	    </div>
		        	    <div class="clear"></div>
                	</div>
        	    <?php endwhile; ?>
        	<?php endif; ?>

		</div> 

		<div class="home-section-three">
			<div class="home-section-three-text-block">
				<?php 
				//vars
				$hpthreeheadline = get_field('home_section_three_headline');
				$hpthreedesc = get_field('home_section_three_description_');
				?>
				<?php if( $hpthreeheadline): ?>
            		<h2><?php echo $hpthreeheadline; ?></h2>
        		<?php endif; ?>
            	<?php if( $hpthreedesc ): ?>
             		<p><?php echo $hpthreedesc; ?></p>
         		<?php endif; ?>
			</div>

			<div class="home-section-three-buckets clear">
				<?php if( have_rows('home_section_three_repeater') ): ?>
	        	    <?php while( have_rows('home_section_three_repeater') ): the_row(); ?>

	        	    <?php 
	        	    //vars
	        	    $hpthreerptimg = get_sub_field('section_three_repeater_image'); 
	        	    $hpthreerptheadline = get_sub_field('section_three_repeater_headline');
	        	    $hpthreerpttext = get_sub_field('section_three_repeater_description');
	        	    $hpthreerptbtnurl = get_sub_field('section_three_repeater_link');
	        	    $hpthreerptbtntext = get_sub_field('section_three_repeater_link_text');
	        	    ?>

                    <div class="home-section-three-bucket-block">

		        	    	<?php if( !empty($hpthreerptimg) ): ?>
		                    	<img src="<?php echo $hpthreerptimg; ?>" alt="Thrive TRM Solution SVG" />
		                    <?php endif; ?>

                            <div class="three-bucket-text-block">
			                    <?php if( $hpthreerptheadline): ?>
				            		<h3><?php echo $hpthreerptheadline; ?></h3>
				        		<?php endif; ?>
				            	<?php if( $hpthreerpttext): ?>
				             		<p><?php echo $hpthreerpttext; ?></p>
				         		<?php endif; ?>
				         		<?php if( $hpthreerptbtnurl): ?>
				             		<a href="<?php echo $hpthreerptbtnurl; ?>">
				             			<?php if( $hpthreerptbtntext): ?>
						             		<?php echo $hpthreerptbtntext; ?>
						         		<?php endif; ?>
				             		</a>
				         		<?php endif; ?>
				         	</div>
		        	    </div>

	        	    <?php endwhile; ?>
	        	<?php endif; ?>

			</div> 
		</div>
        <div id="stats-section">
        <div class="home-section-four-prequel" id="stats-prequel"></div>

		<div class="home-section-four clear" id="the-stats">
			<div class="home-section-four-inner">

				<?php if( have_rows('section_four_counter_repeater') ): ?>
	        	    <?php while( have_rows('section_four_counter_repeater') ): the_row(); ?>

	        	    	<?php 
		        	    //vars
		        	    $hpfournumber = get_sub_field('section_four_counter_repeater_number'); 
		        	    $hpfourrpttext = get_sub_field('section_four_counter_repeater_text');
		        	    ?>
                        <div class="home-section-stats-block">
                        	<?php if( $hpfournumber): ?>
				            	<div class="stats-number"><span class="count" data-from="0" data-to="<?php echo $hpfournumber; ?>" data-speed="2700"></span></div>
				            	<div class="block stats-up-arrow"><img src="/wp-content/themes/thrive/svg/arrow_up.svg" alt="up facing arrow" /></div>
				        	<?php endif; ?>
				        	<?php if( $hpfourrpttext): ?>
			             		<p><?php echo $hpfourrpttext; ?></p>
			         		<?php endif; ?>
                        </div>

	        		<?php endwhile; ?>
	        	<?php endif; ?>

			</div>
		</div>
        </div><!--/stats-section-->
		
	<!-- <div class="home-section-five clear">
			<?php 
			//vars
			$hpfiveimg = get_field('home_section_five_image');
			$hpfiveheadline = get_field('home_section_five_headline');
			
			?>
			<div class="home-section-five-inner">
				<div class="home-section-five-image">
					<?php if( !empty($hpfiveimg) ):
						$hpfiveurl = $hpfiveimg['url'];
	                    $hpfivealt = $hpfiveimg['alt'];
	                    $hpfivesize = 'full';
	                    $hpfivethumb = $hpfiveimg['sizes'][ $hpfivesize ];
                
		    		?>
                    	<img src="<?php echo $hpfiveurl; ?>" alt="<?php echo $hpfivealt; ?>" />
                    <?php endif; ?>
				</div>

				<div class="home-section-five-checklist">
					<?php if( $hpfiveheadline): ?>
	             		<h2><?php echo $hpfiveheadline; ?></h2>
	         		<?php endif; ?>

	         		<?php if( have_rows('home_section_five_repeater') ): ?>
	        	    	<?php while( have_rows('home_section_five_repeater') ): the_row(); ?>

	        	    		<?php
	        	    		//vars
	        	    		$hpbulletpoint = get_sub_field('home_section_five_bullet_points'); 
	        	    		?>

	        	    	    <div class="hp-section-five-bullet-point">
	        	    	   		<span class="checkmark"><img src="/wp-content/themes/thrive/svg/check_circle.svg" alt="Checkmark in a circle" /></span>
	        	    	   		<?php if( $hpbulletpoint): ?>
				             		<span class="bulletpoint"><?php echo $hpbulletpoint; ?></span>
				         		<?php endif; ?>
	        	    	    </div>

	        	    	<?php endwhile; ?>
	        	    <?php endif; ?>

				</div>
			</div>
		</div> -->

		<?php 
		//vars section six
		//$hpsiximg = get_field('home_section_six_background_image');
		$hpsixheadline = get_field('home_section_six_headline');
		$hpsixblue = get_field('home_section_six_blue_text');
		$hpsixdesc = get_field('home_section_six_description');
		$hpsixurl = get_field('home_section_six_button_link');
		$hpsixbuttontext = get_field('home_section_six_button_text');
          	    		
		?>
		<div class="home-section-six clear" style="background-image: url(<?php if( get_field('home_section_six_background_image') ): the_field('home_section_six_background_image'); endif; ?>);">
			<div class="home-section-six-inner">
				<?php if( $hpsixheadline): ?>
			        <h3><?php echo $hpsixheadline; ?></h3>
			    <?php endif; ?>
			    <?php if( $hpsixblue): ?>
			        <p class="blue-text"><?php echo $hpsixblue; ?></p>
			    <?php endif; ?>
				<div class="blue-arrow-down"><img src="http://thrivetrm.com/wp-content/themes/thrive/svg/arrow_down.svg" alt="arrow pointing down" /></div>
			    <?php if( $hpsixdesc): ?>
			        <p class="hp-six-desc"><?php echo $hpsixdesc; ?></p>
			    <?php endif; ?>
			    <?php if( $hpsixurl): ?>
			        <a class="red-button" href="<?php echo $hpsixurl; ?>">
			        	<?php if( $hpsixbuttontext): ?>
					        <?php echo $hpsixbuttontext; ?>
					    <?php endif; ?>
			        </a>
			    <?php endif; ?>
			</div>
		</div>
		
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
