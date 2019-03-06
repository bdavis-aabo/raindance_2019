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
            <a class="btn purple-btn" data-toggle="modal" data-target="#builderModal">get in touch</a>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
    </div>
  </section>

</div>

<?php get_footer() ?>
