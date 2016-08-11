<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content">

        <div class="home-section-two">
      
            <?php if( have_rows('features_main_section_repeater') ): ?>
                <?php while( have_rows('features_main_section_repeater') ): the_row(); ?>

                    <?php 
                        //vars
                        $feattworptimg = get_sub_field('features_section_two_repeater_image'); 
                        $feattworptheadline = get_sub_field('features_section_two_headline');
                        $feattworpttext = get_sub_field('features_section_two_repeater_text');
                        $feattwointegratelogo = get_sub_field('features_section_two_integration_logo');
                        $feattwointegratetext = get_sub_field('features_section_two_integration_text');
                    ?>
                    <div class="home-section-two-section clear">
                        <?php if( !empty($feattworptimg) ):
                            $feattwourl = $feattworptimg['url'];
                            $feattwoalt = $feattworptimg['alt'];
                            $feattwosize = 'full';
                            $feattwothumb = $feattworptimg['sizes'][ $feattwosize ];
                          
                        ?>
                            <div class="home-part-two-image"><img src="<?php echo $feattwourl; ?>" alt="<?php echo $feattwoalt; ?>" /></div>
                        <?php endif; ?>
                        
                        <div class="home-section-two-text-container">
                    
                            <div class="home-two-text-block">
                                <?php if( $feattworptheadline): ?>
                                    <h3><?php echo $feattworptheadline; ?></h3>
                                <?php endif; ?>
                                <?php if( $feattworpttext): ?>
                                    <p><?php echo $feattworpttext; ?></p>
                                <?php endif; ?>
                                <?php if( !empty($feattwointegratelogo ) ):
                                    $feattwointurl = $feattwointegratelogo ['url'];
                                    $feattwointalt = $feattwointegratelogo ['alt'];
                                    $feattwointsize = 'full';
                                    $feattwointthumb = $feattwointegratelogo ['sizes'][ $feattwointsize ];
                                    
                                ?>
                                    <div class="home-two-inetgration-logo"><img src="<?php echo $feattwointurl; ?>" alt="<?php echo $feattwointalt; ?>" /></div>
                                <?php endif; ?>
                                <?php if( $feattwointegratetext): ?>
                                    <p class="integrate-text"><?php echo $feattwointegratetext; ?></p>
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
              $featthreeheadline = get_field('features_section_three_headline');
              $featthreedesc = get_field('features_section_three_description');
              ?>
              <?php if( $featthreeheadline): ?>
                      <h2><?php echo $featthreeheadline; ?></h2>
                  <?php endif; ?>
                    <?php if( $featthreedesc ): ?>
                      <p><?php echo $featthreedesc; ?></p>
                  <?php endif; ?>
            </div>

          <div class="home-section-three-buckets clear">
              <?php if( have_rows('features_section_three_repeater') ): ?>
                  <?php while( have_rows('features_section_three_repeater') ): the_row(); ?>

                  <?php 
                  //vars
                  $featthreerptimg = get_sub_field('features_section_three_repeater_image'); 
                  $featthreerptheadline = get_sub_field('features_section_three_repeater_headline');
                  $featthreerpttext = get_sub_field('features_section_three_repeater_description');
                  $featthreerptbtnurl = get_sub_field('features_section_three_repeater_link');
                  $featthreerptbtntext = get_sub_field('features_section_three_repeater_link_text');
                  ?>

                      <div class="home-section-three-bucket-block">

                          <?php if( !empty($featthreerptimg) ): ?>
                              <img src="<?php echo $featthreerptimg; ?>" alt="Thrive TRM Solution SVG" />
                          <?php endif; ?>

                          <div class="three-bucket-text-block">
                              <?php if( $featthreerptheadline): ?>
                                  <h3><?php echo $featthreerptheadline; ?></h3>
                              <?php endif; ?>
                              <?php if( $featthreerpttext): ?>
                                  <p><?php echo $featthreerpttext; ?></p>
                              <?php endif; ?>
                              <?php if( $featthreerptbtnurl): ?>
                                  <a href="<?php echo $featthreerptbtnurl; ?>">
                                    <?php if( $featthreerptbtntext): ?>
                                      <?php echo $featthreerptbtntext; ?>
                                  <?php endif; ?>
                                  </a>
                              <?php endif; ?>
                          </div>
                      </div>

                  <?php endwhile; ?>
              <?php endif; ?>
          </div> 
      </div>

      <?php 
          //vars preefooter
          $featsiximg = get_field('features_prefooter_background_image');
          $featsixheadline = get_field('features_prefooter_headline');
          $featsixblue = get_field('features_prefooter_blue_text');
          $featsixdesc = get_field('features_prefooter_description');
          $featsixurl = get_field('features_prefooter_button_link');
          $featsixbuttontext = get_field('features_prefooter_button_text');
                        
      ?>
      <div class="home-section-six clear" style="background-image: url(<?php if( get_field('features_prefooter_background_image') ): the_field('features_prefooter_background_image'); endif; ?>);">
          <div class="home-section-six-inner">
              <?php if( $featsixheadline): ?>
                  <h3><?php echo $featsixheadline; ?></h3>
              <?php endif; ?>
              <?php if( $featsixblue): ?>
                  <p class="blue-text"><?php echo $featsixblue; ?></p>
              <?php endif; ?>
              <div class="blue-arrow-down"><img src="http://thrivetrm.com/wp-content/themes/thrive/svg/arrow_down.svg" alt="arrow pointing down" /></div>
                  <?php if( $featsixdesc): ?>
                      <p class="hp-six-desc"><?php echo $featsixdesc; ?></p>
                  <?php endif; ?>
                  <?php if( $featsixurl): ?>
                      <a class="red-button" href="<?php echo $hpsixurl; ?>">
                        <?php if( $featsixbuttontext): ?>
                          <?php echo $featsixbuttontext; ?>
                      <?php endif; ?>
                      </a>
                  <?php endif; ?>
              </div>
          </div>

    </div><!-- .entry-content -->

</article><!-- #post-## -->