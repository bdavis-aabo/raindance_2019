<?php /* Template Name: Page - Realtor Forum */ ?>

<?php get_header() ?>

<?php while(have_posts()): the_post() ?>
<section class="page-heroimage">
  <?php echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img-responsive aligncenter heroimage')); ?>
</section>

<section class="page-section page-content">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="realtor-content">
          <?php the_content() ?>
          <button class="modal-btn broker-btn purple-btn btn" data-toggle="modal" data-target="#contactModal">join the forum</button>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer() ?>
