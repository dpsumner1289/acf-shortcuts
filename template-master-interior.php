<?php
/**
 * Template Name: Master Interior Template
 */
?>
<?php
$partnerslogocounter = 1;
// check if the flexible content field has rows of data
if( have_rows('master_interior') ):

     // loop through the rows of data
    while ( have_rows('master_interior') ) : the_row(); ?>

      <?php  if( get_row_layout() == 'hero_band' ): ?>

                         <!-- Banner - Main
               ================================================== -->
               <div class="banner-main">
                   <?php $bannerimage = get_sub_field('hero_background_image'); ?>
                    <figure><img src="<?php echo $bannerimage['url']; ?>" alt="<?php echo $bannerimage['alt']; ?>" /></figure>

                    <div class="banner-txt">
                    <div class="container heightDepend">
                        <div class= "pagetitle"><div class="container"><h1><?php the_title(); ?></h1></div></div>
                         <aside>
                         <span><?php the_sub_field('hero_text'); ?></span>
                         </aside>
                         <?php $herolabel = get_sub_field('hero_button_label'); ?>
                         <?php if (!empty($herolabel)) { ?>
                           <div class="view-txt">
                         <a href="<?php the_sub_field('hero_button_link'); ?>" class="btn"><?php the_sub_field('hero_button_label'); ?></a>
                         </div>
                       <?php  } ?>

                    </div>
                    </div>

               </div>
              <?php endif; ?>
               <!-- ENDS -->
      <?php  if( get_row_layout() == 'staff_band' ): ?>

                    <!-- Content - Main staff Band
          ================================================== -->


          <div class="content-main padtop">
          <div class="container">
               <div class="article-list article-list3-four">
                    <h2><?php the_sub_field('staff_band_title'); ?></h2>

                    <?php 

                      $posts = get_sub_field('staff_members');

                      if( $posts ): ?>
                        <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                          <li class="panel staff-li">
                         <div role="tab" class="cap-txt">
                         <a href="<?php echo get_post_permalink($p->ID); ?>">
                           <h2><?php the_field('name', $p->ID); ?></h2>
                         <p><?php the_field('title', $p->ID); ?></p>
                         </a>
                         <a class="mobi-accord active" data-toggle="collapse" data-parent="#accordion" href="#collapse1"></a>
                         </div>

                         <div id="collapse1" class="accord-cont collapse in" role="tabpanel">
                            <figure><a href="<?php echo get_post_permalink($p->ID); ?>"><?php echo get_the_post_thumbnail($p->ID, 'medium'); ?></a></figure>
                          </div>
                          </li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
               </div>
               </div></div>
               <!-- ENDS -->
               <?php endif; ?>

       <?php  if( get_row_layout() == 'board_band' ): ?>
                   <div class="content-main padtop">
          <div class="container">
                    <!-- Content - Main Board Band
          ================================================== -->

               <div class="article-list article-list2 fourthumbs">
                    <h2><?php the_sub_field('board_band_title'); ?></h2>

                    <?php 

                      $posts = get_sub_field('board_members');

                      if( $posts ): ?>
                        <ul class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                        <li class="panel staff-li">
                         <div role="tab" class="cap-txt">
                         <a href="<?php echo get_post_permalink($p->ID); ?>">
                         <h2><?php the_field('name', $p->ID); ?></h2>
                         <p><?php the_field('title', $p->ID); ?></p>
                         </a>
                         <a class="mobi-accord active" data-toggle="collapse" data-parent="#accordion" href="#collapse1"></a>
                         </div>

                         <div id="collapse1" class="accord-cont collapse in" role="tabpanel">
                         <figure><a href="<?php echo get_post_permalink($p->ID); ?>"><?php echo get_the_post_thumbnail($p->ID, 'medium'); ?></a></figure>
                         <p>In late 2010, Jason Hanna (Coincident), Sam White (Promethean Power Systems), Jeremy Pitts (Oscomp Systems), and Adam Rein (Altaeros Energies) were looking for affordable space to build prototypes near MIT.</p>
                         <p><a href="#">Read Full Bio</a></p>
                         </div>
                    </li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
               </div>
               </div></div>
               <!-- ENDS -->
               <?php endif; ?>
                  <?php  if( get_row_layout() == 'advisory_band' ): ?>
                     <div class="content-main padtop">
          <div class="container">
                    <!-- Content - Main ADvisory Band
          ================================================== -->

              <div class="article-list article-list2 fourthumbs">
                    <h2><?php the_sub_field('advisory_band_title'); ?></h2>

                    <?php 

                      $posts = get_sub_field('advisory_members');

                      if( $posts ): ?>
                        <ul class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                        <?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
                          <li class="panel staff-li">
                              <div role="tab" class="cap-txt">
                              <a href="<?php echo get_post_permalink($p->ID); ?>">
                              <h2><?php the_field('name', $p->ID); ?></h2>
                             <p><?php the_field('title', $p->ID); ?></p>

                              </a>
                              <a class="mobi-accord active" data-toggle="collapse" data-parent="#accordion2" href="#collapse21"></a>
                              </div>

                              <div id="collapse21" class="accord-cont collapse in" role="tabpanel">
                             <figure><a href="<?php echo get_post_permalink($p->ID); ?>"><?php echo get_the_post_thumbnail($p->ID, 'medium'); ?></a></figure>
                              <p>In late 2010, Jason Hanna (Coincident), Sam White (Promethean Power Systems), Jeremy Pitts (Oscomp Systems), and Adam Rein (Altaeros Energies) were looking for affordable space to build prototypes near MIT.</p>
                              <p><a href="#">Read Full Bio</a></p>
                              </div>
                          </li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
               </div>
               <!-- ENDS -->
               </div></div>
               <?php endif; ?>

              <?php  if( get_row_layout() == 'wysiwyg_band' ): ?>
                         <div class="content-main padtop">
                        <div class="container">
                          <div class="section-6">
                            <div class="container-sml aboutuspage">
                         <!--  wysiwyg section
               ================================================== -->
                <?php the_sub_field('wysiwyg_body'); ?>
               <!-- ENDS -->
              </div>
            </div>
              </div>
              </div>
              <?php endif; ?>

                <?php  if( get_row_layout() == 'wysiwyg_map_band' ): ?>
                           <div class="content-main map-sect">
                          <div class="container-full-small" style="padding:0;">
                            <div class="section-6" style="padding:0;">
                              <div class="container-fluid aboutuspage" style="padding:0;">
                           <!--  wysiwyg section
                 ================================================== -->
                  <?php the_sub_field('wysiwyg_map_body'); ?>
                 <!-- ENDS -->
                </div>
              </div>
                </div>
                </div>
                <?php endif; ?>

              <?php  if( get_row_layout() == 'cta_band' ): ?>

                         <!--  CTA Band
               ================================================== -->
<?php $ctaband = get_sub_field('cta_background_image'); ?>
                    <div class="banner-bg masterprallex" style="background-image:url(<?php echo $ctaband['url']; ?>)">

                         <!--<figure><img src="<?php //echo $ctaband['url']; ?>" alt="<?php //echo $ctaband['alt']; ?>" /></figure>-->

                         <div class="banner-cont">
                         <div class="outer-bg">
                         <div class="inner-bg">
                         <div class="container-sml">

                              <div class="article">
                              <?php the_sub_field('cta_text'); ?>
                              </div>
                              <?php $ctabuttonlabel = get_sub_field('cta_button_label'); if (!empty($ctabuttonlabel)) { ?>
                               <div class="btn-out">
                              <a href="<?php the_sub_field('cta_button_link'); ?>" class="btn"><?php the_sub_field('cta_button_label'); ?></a>
                              </div>
                            <?php  } ?>


                         </div>
                         </div>
                         </div>
                         </div>

                    </div>
               <!-- ENDS -->
               <?php endif; ?>

                <?php  if( get_row_layout() == 'partner_band' ): ?>
                         <!-- Section - 3
                         ================================================== -->
                         <div class="content-main patner">
                         <div class="container">
                           <div class="partners-logo">
                              <h2><?php the_sub_field('partner_band_title'); ?></h2>
                              <?php if(get_sub_field('partner')): ?>
                              <ul>
                                <?php
                  
                                while(has_sub_field('partner')):
                                  $partnerslogo = get_sub_field('partner_logo');
                                  ?>
                                <li><a href="#" data-toggle="modal" data-target="#lightbox<?php echo $partnerslogocounter ?>"><img src="<?php echo $partnerslogo['url']; ?>" alt="<?php echo $partnerslogo['alt']; ?>" /></a></li>

                                  <div id="lightbox<?php echo $partnerslogocounter ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                                      <div class="modal-content">
                                        <div class="modal-body">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <div class="section-cont1">
                                            <figure><img src="<?php echo $partnerslogo['url']; ?>" alt="<?php echo $partnerslogo['alt']; ?>" /></figure>
                                            <aside>
                                              <h2 style="padding-bottom:10px; font-weight:bold;"> <?php the_sub_field('partner_name'); ?></h2>
                                              <?php the_sub_field('partner_description'); ?>
                                              <div class="btn-out"><a href="<?php the_sub_field('partner_button_link'); ?>" target="_blank" class="btn"><?php the_sub_field('partner_button_label'); ?></a></div>
                                            </aside>
                                          </div>
                                          <div style="clear: both;"></div>
                                        </div>
                                      </div>

                                  </div>
                                </div>
                                  <?php
                                  $partnerslogocounter++;
                                endwhile;
                                ?>
                              </ul>
                              <?php endif; ?>

                         </div>

                         </div>
                         </div>
               <!-- ENDS -->
               <?php endif; ?>

                <?php  if( get_row_layout() == 'image_gallery_band' ): ?>

                         <!-- Galler Band
                         ================================================== -->
                         <div class="content-main padtop">
                         <div class="container">
                           <div class="article-list">
                              <h2><?php the_sub_field('image_gallery_band_title'); ?></h2>
                              <?php if(get_sub_field('image_gallery')): ?>
                              <ul>
                              <?php while(has_sub_field('image_gallery')): ?>
                                   <?php 
                                   //$imagegallery = get_sub_field('image'); 
                                   $cta_image = get_sub_field('image');
                                   $cta_id = $cta_image['id'];
                                   $cta_size = 'cta-size';


                                   $resized_img = wp_get_attachment_image( $cta_id, $cta_size );
                                   ?>
                                   <li><!-- <a href="#" class="link-full"> -->
                                   <figure><?php echo $resized_img; ?><!-- <img src="<?php /* echo $imagegallery['url']; ?>" alt="<?php echo $imagegallery['alt']; */ ?>" /> --></figure>
                                   <?php $caption = get_sub_field('caption'); if (!empty($caption)) { ?>
                                   <div class="cap-txt">
                                   <h2><?php the_sub_field('caption'); ?></h2>
                                   </div>
                                <?php  } ?>

                                   <!-- </a> --></li>
                              <?php endwhile; ?>
                              </ul>
                              <?php endif; ?>

                         </div>

                         </div>
                         </div>

               <!-- ENDS -->
               <?php endif; ?>


                <?php  if( get_row_layout() == 'careers_band' ): ?>
                         <!-- Galler Band
                         ================================================== -->
                         <div class="content-main padtop">
                         <div class="container">
                           <div class="section-careers">
                            <h2><?php the_sub_field('careers_title'); ?></h2>
                            <div class="event-box-out">
                              <div class="btn-bg">
                             <div class="filter-button-group button-group js-radio-button-group">
                              <button class="button is-checked" data-filter="*">All</button>
                                  <?php $type_arr = array(); ?>
                                  <?php if( have_rows('careers') ): ?>
                                  <?php while( have_rows('careers') ): the_row(); ?>
                                  <?php 
                                    $type_arr[] = get_sub_field('type');
                                  ?>
                                  <?php endwhile; ?>
                                  <?php endif; ?>
                                  <?php //print_r(array_unique($type_arr)); 
                                  $result = array_unique($type_arr);
                                  foreach($result as $item):
                                   echo '<button class="button" data-filter=".'.str_replace(' ', '_', $item).'">'.$item.'</button>';
                                    //echo '<span>'.$item.'</span>';
                               endforeach; ?>
                                  </div>
                                </div>

                            <div class="grid">
                          <?php if(get_sub_field('careers')): ?>
                              <?php while(has_sub_field('careers')): ?>
                            <?php $item = get_sub_field('type'); ?>
                         <div class="event-box element-item <?php echo str_replace(' ', '_', $item) ?>" data-category="<?php echo get_sub_field('type'); ?>">
                              <div class="article">
                              <aside>
                              <?php the_sub_field('bodycar'); ?>
                              </aside>
                              </div>

                              <a href="<?php the_sub_field('link'); ?>" class="btn"><span><?php the_sub_field('label'); ?></span></a>
                         
                         </div>
                              <?php endwhile; ?>
                             <?php endif; ?>
                          </div>

                         </div>
                         </div>
                         </div>
                         </div>

               <!-- ENDS -->

               <?php endif; ?>

                               <?php  if( get_row_layout() == 'text_block_band' ): ?>
                         <!-- Text Block Band
                         ================================================== -->
                       <div class="section-3 padtop">
                         <div class="container">
                          <div class="article-bg">
                          <?php if(get_sub_field('text_blocks')): ?>
                              <?php while(has_sub_field('text_blocks')): ?>
                             <article>
                             <div class="heading-txt">
                             <?php $textblockimage  = get_sub_field('icon'); ?>
                             <div class="icon"><img src="<?php echo $textblockimage['url']; ?>" alt="<?php echo $textblockimage['alt']; ?>" /></div>
                             <div class="txt">
                             <h2><?php the_sub_field('block_title'); ?></h2>
                             </div>
                             </div>
                             <h3><?php the_sub_field('block_subtitle'); ?></h3>
                            <?php the_sub_field('block_text'); ?>
                            <?php $link = get_sub_field('block_button_label'); if($link) { ?>
                             <div class="btn-out">
                             <a href="<?php the_sub_field('block_button_link'); ?>" class="btn"><?php the_sub_field('block_button_label'); ?></a>
                             </div>
                             <?php }?>
                             </article>
                              <?php endwhile; ?>
                             <?php endif; ?>
                           </div>
                           </div>
                         </div>


               <!-- ENDS -->
               <?php endif; ?>

                <?php  if( get_row_layout() == 'alternating_blocks_band' ): ?>
                         <!-- Alternating  Band
                         ================================================== -->
                      <div class="content-main padtop">
                        <div class="container">
                          <?php
                          if(get_sub_field('alternating_blocks')):
                            $cont_class = 1;
                            while(has_sub_field('alternating_blocks')):
                               $cont_class = ($cont_class == 1)?2:1;
                              ?>
                           <div class="section-cont<?= $cont_class ?>">
                           <?php $alternatingblocks = get_sub_field('image'); ?>
                              <figure><img src="<?php echo $alternatingblocks['url']; ?>" alt="<?php echo $alternatingblocks['alt']; ?>" /></figure>
                              <aside>
                              <h2> <?php the_sub_field('title'); ?></h2>
                              <?php the_sub_field('body'); ?>
                              </aside>
                             <div style="clear: both;"></div>
                           </div>
                              <?php
                            endwhile;
                          endif;
                          ?>
                        </div>

                      </div>

               <!-- ENDS -->
       <?php endif; ?>

   <?php endwhile;

else :

    // no layouts found

endif;

?>



<script>
function setModalMaxHeight(element) {
  this.$element     = $(element);
  this.$content     = this.$element.find('.modal-content');
  var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
  var dialogMargin  = $(window).width() < 768 ? 20 : 60;
  var contentHeight = $(window).height() - (dialogMargin + borderWidth);
  var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
  var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
  var maxHeight     = contentHeight - (headerHeight + footerHeight);

  this.$content.css({
      'overflow': 'hidden'
  });

  this.$element
    .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
  });
}

jQuery('.modal').on('show.bs.modal', function() {
  $(this).show();
  setModalMaxHeight(this);
});

jQuery(window).resize(function() {
  if ($('.modal.in').length != 0) {
    setModalMaxHeight($('.modal.in'));
  }
});
</script>

<script type="text/javascript">

jQuery(document).ready(function($) {
  // init Isotope
var $grid = jQuery('.grid').isotope({
    itemSelector: '.element-item',
    layoutMode: 'fitRows'
  });
$grid.isotope({ filter: '*' });

  // bind filter button click
  $('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});

  // bind sort button click
  /*
  $('#sorts').on('click', 'button', function() {
    var sortByValue = $(this).attr('data-sort-by');
    $container.isotope({
      sortBy: sortByValue
    });
  });
*/
  // change is-checked class on buttons
  /*
  $('.button-group').each(function(i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $(this).addClass('is-checked');
    });
  });
*/
});
</script>
