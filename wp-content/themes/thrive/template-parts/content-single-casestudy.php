<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="cs-secondary-banner clear">
            
        	<div class="cs-brand">
        		<?php 
				//vars
				$brandlogo = get_field('brand_logo');
				
				if( !empty($brandlogo) ):
					$urlbrand = $brandlogo['url'];
	                $altbrand = $brandlogo['alt'];
	                $sizebrand = 'full';
	                $thumbbrand = $brandlogo['sizes'][ $sizebrand ];
	            ?>
	        		<div class="brand-study-img"><img src="<?php echo  $urlbrand; ?>" alt="<?php echo $altbrand; ?>" /></div>
	        	<?php endif; ?>

            </div>
            
            <div class="cs-photo" style="background-image: url(<?php if( get_field('featured_photo') ): the_field('featured_photo'); endif; ?>)">
            </div>
        </div>
	<div class="entry-content clear">
            
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
