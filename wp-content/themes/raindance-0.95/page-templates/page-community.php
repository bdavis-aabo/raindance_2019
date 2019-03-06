<?php /* Template Name: Page - Community Info */ ?>

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


  </section>
  <?php endwhile; endif; ?>

</div>

<?php get_footer() ?>
