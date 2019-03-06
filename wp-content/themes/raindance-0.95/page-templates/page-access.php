<?php /* Template Name: Page - Access */ ?>

<?php get_header() ?>
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <section class="page-heroimage">
    <picture>
      <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url() ?>">
      <source media="(min-width: 650px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-667.jpg">
      <source media="(min-width: 375px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-375.jpg">
      <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive heroimage')); ?>
    </picture>
  </section>

  <section class="page-contents">
    <div class="container">
      <div class="content-section">
        <?php the_content() ?>
      </div>
    </div>

    <div class="container access-bottom">
      <div class="row">
        <div class="col-md-6">
          <div class="button-section">
            <a href="https://www.google.com/maps/dir//Raindance,+6999-6119+Crossroads+Blvd,+Windsor,+CO+80550/@40.4375539,-104.9727222,13.46z/data=!4m8!4m7!1m0!1m5!1m1!1s0x876eae7825727383:0xb61340574e3c4c97!2m2!1d-104.93677!2d40.4359884" title="Driving Directions - RainDance" target="_blank">
              <img src="<?php bloginfo('template_directory') ?>/assets/images/directions-btn.jpg" alt="Driving Directions - RainDance" class="img-responsive aligncenter" />
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="button-section">
            <a class="modal-btn" data-toggle="modal" data-target="#map-modal">
              <img src="<?php bloginfo('template_directory') ?>/assets/images/modelmap-btn.jpg" alt="Driving Directions - RainDance" class="img-responsive aligncenter" />
            </a>

            <div class="modal fade" id="map-modal" tabindex="-1" role="dialog" aria-lebelledby="mapmodal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                    <h2 class="modal-title">RainDance Model Directory Map</h2>
                  </div>
                  <div class="modal-body">
                    <img src="<?php bloginfo('template_directory') ?>/assets/images/Raindance-Model-Home-Directory_v2.jpg" class="img-responsive aligncenter" />
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>
  <?php endwhile; endif; ?>



</div>

<?php get_footer() ?>
