 <div class="single-header-banner">
     <div class="banner-mask"></div>
     <div class="single-banner-message">
        <span class="single-banner-title">Insights</span>               
     </div>
 </div>

<style>
.callout
{
	float:left;
	width: 280px;
	margin: 25px 40px 40px -120px;
}
/*medium */
@media only screen and (min-width: 40.063em) { 
	.callout
	{
		margin: 25px 40px 40px -45px;
	}
}
/*small */
@media only screen and (max-width: 40em) { 
	.callout
	{
		margin: 0px 0px 1.5em 0px;
		float:none;
	}
}
/*large */
@media only screen and (min-width: 64.063em) { 
	.callout
	{
		margin: 25px 40px 40px -120px;
	}
}
.entry-content h2
{
	clear:none !important;
}

</style>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php thrive_posted_on_single(); ?><span class="sep"> | </span><?php thrive_entry_footer(); ?>
		</div><!-- .entry-meta -->
                <div class="single-post-social-top">
                     <?php echo sharing_display(); ?>
                </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
            <div class="featured-img">
                <?php if ( has_post_thumbnail() ) {
			/*the_post_thumbnail('blog-size');*/
                        the_post_thumbnail('full');
		}  ?> 
            </div>
            <div class="posted-on"><span>Posted by <?php the_field('who_wrote_it'); ?></span>
            </div>
            <!-- we need to do our injection here -->
		<?php 

			$content = apply_filters('the_content',$post->post_content); 

			$resource_image = get_field('resource_image');
			$resource_url = get_field('resource_url');

			//only do this if there is an image and url
			if($resource_image != "" && $resource_url != "")
			{
				$callout = "<div class='callout'><a href='" . $resource_url . "'><img src='" . $resource_image . "'></a></div>";
				$pos = strpos($content, '</p>') + 4; // get the position directly after the first closing p tag, add 4 for the count of </p>
				$content = substr($content, 0, $pos) . $callout . substr($content, $pos);
			}
			//the_content(); 
			//echo $callout;
			echo $content;
		?>
		
		<?php  
			$bottom_cta_image = get_field('bottom_cta_image');
			$bottom_cta_url = get_field('bottom_cta_url');
			if($bottom_cta_image != "" && $bottom_cta_url != "")
			{
				echo "<div class='bottom-cta'><a href='" . $bottom_cta_url . "'><img src='" . $bottom_cta_image . "'></a></div>";
			}
		?>
		

	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
