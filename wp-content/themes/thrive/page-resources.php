<?php
/**
 * Template Name: Resources
 *
**/

 get_header(); ?>

 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/foundation/css/foundation.css">
 <style>
 	.alert
 	{
 		border: 1px solid #e74c3c;
	    border-radius: 20px;
	    color: #fff !important;
	    padding: 10px 30px;
	    transition: all 0.27s ease 0s;
	    text-decoration: none;
	    background-color: #e74c3c;
 	}
 	.solutions-archive-inner-wrap h3
 	{
 		margin:0px;
 		padding:0px;
 		line-height: 1 !important;
 		font-size: 1.75em;
 	}
 	.solutions-archive-inner-wrap
 	{ padding-bottom:2em; }
 	.clear {clear:both;}
 </style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="header-banner" style="background-image: url('/wp-content/uploads/2015/12/medium-blue-bg2.png'); position: relative;">
            	<div class="banner-mask"></div>
            		<div class="banner-message">
     		        	<h1 class="banner-title"><?php the_title(); ?></h1>
                                 <span class="banner-description"><?php $content = apply_filters('the_content', $post->post_content); 
echo $content;   ?></span>
                         </div>
            </div>
            <div class="solutions-archive-inner-wrap">
				<?php
				// check if the repeater field has rows of data
				if( have_rows('resource_list') ):
				 	// loop through the rows of data
				    while ( have_rows('resource_list') ) : the_row();
				        // display a sub field value
					?>
						<div class="row" style="padding-bottom:4.5em;">
							<div class="small-12 medium-6 large-2 columns">
								<img src="<?php echo the_sub_field('image'); ?>">
							</div>
							<div class="small-12 medium-6 large-10 columns">
							<h3><?php echo the_sub_field('title'); ?></h3>
						        <?php echo the_sub_field('description');?>
						        <a href="<?php echo the_sub_field('link_url');?>" class="alert button radius" target="_blank">Download Resource</a>
					        </div>
						</div>
				        
			        <?php 
				    endwhile;
				else :
				    // no rows found
				    echo "<p>No Resources Found...</p>";
				endif;

				?>
            </div><!--End Archive inner wrap-->
            <div class="clear"></div>
		</main><!-- #main -->
	</div><!-- #primary -->

	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/js/vendor/foundation.js"></script>

	<script src="<?php echo get_template_directory_uri(); ?>/js/foundation/js/app.js"></script>
<?php get_footer(); ?>