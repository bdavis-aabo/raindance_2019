<?php /* Template Name: Page - Festival */ ?>

<?php get_header() ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<section class="page-heroimage">
  <picture>
    <source media="(min-width: 768px)" srcset="<?php echo get_the_post_thumbnail_url() ?>">
    <source media="(min-width: 650px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-667.jpg">
    <source media="(min-width: 375px)" srcset="<?php bloginfo('template_directory') ?>/assets/images/<?php echo $post->post_name ?>-375.jpg">
    <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive heroimage')); ?>
  </picture>

  <img src="<?php bloginfo('template_directory') ?>/assets/images/festival-identity.png" alt="<?php the_title() ?>" class="img-responsive festival-logo" />
</section>

<section class="page-contents festival-contents">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content-section">
          <?php the_content() ?>
        </div>
      </div>
    </div>
    <div class="row">
      <?php if(have_rows('festival_lightboxes')): $_row = 0; while(have_rows('festival_lightboxes')): the_row(); ?>
      <div class="col-sm-6 col-md-3">
        <button data-target="<?php echo 'modal-'.$_row ?>" class="btn festival-btn <?php echo get_sub_field('lightbox_color').'-btn' ?>">
          <?php echo get_sub_field('lightbox_title') ?>
        </button>
      </div>
      <?php $_row++; endwhile; endif; ?>
    </div>
    <div class="row">
      <div class="col-md-12">
        <a class="btn full-btn gray-btn" href="<?php echo get_field('festival_rules') ?>" target="_blank">Click here for official sweepstakes rules</a>
        <div class="builder-logos">
          <a href="/new-homes" title="RainDance Colorado - New Homes">
            <img src="<?php bloginfo('template_directory') ?>/assets/images/builder-logos.jpg" alt="RainDance Colorado - Homebuilders" class="aligncenter img-responsive" />
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


<?php if(have_rows('festival_lightboxes')): $_lbox = 0; ?>
<div class="overlay-mask"></div>
<?php while(have_rows('festival_lightboxes')): the_row(); ?>
  <div class="festival-lightbox" id="<?php echo 'modal-'.$_lbox ?>">
    <div class="lightbox-titlebar <?php echo get_sub_field('lightbox_color').'-bg' ?>">
      <?php echo get_sub_field('lightbox_title') ?>
    </div>

    <div class="lightbox-contents">
      <?php echo get_sub_field('lightbox_content') ?>

      <?php if(get_sub_field('lightbox_title') != 'Win $25,000!'): ?>
        <h2 class="script purple-txt">Stay in touch...</h2>
        <div class="lightbox-form">
          <?php echo do_shortcode('[contact-form-7 id="272" title="Lightbox Form"]'); ?>
        </div>
      <?php endif; ?>
    </div>

      <a class="box-close"><i class="fas fa-times"></i></a>
  </div>
<?php $_lbox++; endwhile; ?>
<?php endif; ?>

<?php endwhile; endif; ?>


</div>

<?php get_footer() ?>
