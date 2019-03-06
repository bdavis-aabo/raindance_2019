<?php /* Template Name: Page - Builder Grid */ ?>

<?php
  $_builders = new WP_Query();
  $_builders->query('post_type=home-builders&post_status=publish&posts_per_page=-1&order=asc&orderby=menu_order');
?>


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

  <section class="page-contents builder-contents">
    <div class="container">
      <div class="content-section">
        <?php the_content() ?>
      </div>
    </div>
  </section>
  <?php endwhile; endif; ?>

  <section class="builder-list">
    <div class="container">
      <div class="row">
      <?php while($_builders->have_posts()): $_builders->the_post() ?>
        <div class="col-md-4 col-sm-6 col-xs-6 builder">
          <div class="builder-info">
            <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter')); ?>
            <h2 class="builder-title"><?php the_title() ?></h2>
            <span class="builder-details"><?php echo get_field('homebuilder_model_details') ?></span>
            <?php echo get_field('homebuilder_introduction') ?>
            <span class="builder-pricing"><?php echo get_field('homebuilder_pricing') ?></span><br /><br />

            <?php if(get_field('homebuilder_page') != ''): ?>
              <a href="<?php echo get_field('homebuilder_page') ?>" class="btn purple-btn" title="<?php the_title() ?>">view the homes</a>
            <?php else: ?>
              <a class="btn purple-btn builder-contact-btn" data-toggle="modal" data-target="#builderModal" data-builder="<?php the_title() ?>">get in touch</a>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>

      <?php if($_builders->post_count % 2 != 0): ?>
        <div class="col-xs-6 col-sm-6 col-md-4 builder">
          <div class="builder-info">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/modeldirectory-thumb.jpg" class="img-responsive aligncenter" />
            <h2 class="builder-title">Raindance Model Directory</h2>
            <span class="builder-details">&nbsp;</span>
            <p>See where each homebuilder will have homes available and where their model homes are located. Then, Get In Touch with your homebuilder(s) of choice for more information.</p>
            <span class="builder-pricing">&nbsp;</span><br /><br />
            <a class="btn purple-btn" data-toggle="modal" data-target="#map-modal">View the Map</a>
          </div>
        </div>
      <?php endif; ?>
      </div>
    </div>
  </section>
</div>

<?php if(is_page('new-homes')): ?>
<div class="access-bottom">
  <div class="modal fade" id="map-modal" tabindex="-1" role="dialog" aria-lebelledby="mapmodal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
          <h2 class="modal-title">RainDance Model Directory Map</h2>
        </div>
        <div class="modal-body">
          <img src="<?php bloginfo('template_directory') ?>/assets/images/Raindance-Model-Home-Directory_v4.jpg" class="img-responsive aligncenter" />
        </div>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer() ?>
