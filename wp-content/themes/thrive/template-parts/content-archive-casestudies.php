<?php if( get_field('link_from_archive_page') )
    {
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('csa-linked-article'); ?>>
        <a href="<?php echo the_permalink(); ?>">
            <div class="entry-content">
           
                <div class="csa-featured-img">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail('blog-size');
                    }  ?>
                   
                </div>
      
            </div><!-- .entry-content -->
        </a> 
        <span class="csa-readmore cat-links"><a href="<?php the_permalink(); ?>">Read Success Story</a></span>
    </article><!-- #post-## -->

<?php }
 else
    {
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <div class="csa-bounding-box">
          <div class="entry-content">
               
              <div class="csa-featured-img">
                  <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail('blog-size');
                  }  ?>
                       
              </div>
          
          </div><!-- .entry-content -->
      </div> 
    </article><!-- #post-## -->
<?php
}
?>