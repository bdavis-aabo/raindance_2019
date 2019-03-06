<?php /* Template Name: Page - Builder Details */ ?>

<?php get_header() ?>

  <?php if(have_posts()): while(have_posts()): the_post() ?>
    <section class="builder-heroimage">
      <picture>
        <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url() ?>">
        <source media="(min-width: 650px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-667.jpg">
        <source media="(min-width: 375px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-375.jpg">
        <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive heroimage')); ?>
      </picture>
    </section>

    <section class="builder-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content-section">
              <h1 class="builder-title"><?php the_title() ?></h1>
              <?php the_content() ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; endif; /* main page content */ ?>

  <?php get_template_part('homes/homes-columns') ?>

  <?php get_template_part('homes/homes-qmi') ?>



<?php get_footer() ?>
