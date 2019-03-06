<?php
  $_args = array(
    'post_type'       =>  'quickmoves',
    'builder'         =>  $post->post_name,
    'orderby'         =>  'menu_order',
    'order'           =>  'ASC',
    'posts_per_page'  =>  5,
    'hide_empty'      =>  1
  );
  $_quickmoves = new WP_Query($_args);
?>

<section class="builder-qmis">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="builder-qmi-info">
          <h1>Quick Move-In Homes from <?php the_title() ?></h1>
        </div>
      </div>
    </div>

    <div class="row">
      <?php if($_quickmoves->have_posts()): while($_quickmoves->have_posts()): $_quickmoves->the_post(); $_qmiImage = get_field('qmi_image'); ?>
      <div class="col-md-3 col-sm-6 col-xs-6 builder-qmi">
        <div class="qmi-home">
          <img src="<?php echo $_qmiImage['url'] ?>" alt="<?php the_title() ?>" class="qmi-img img-responsive aligncenter" />
          <div class="qmi-details">
            <h3 class="qmi-home-name"><?php the_title() ?></h3>
            <span class="qmi-address"><?php echo get_field('qmi_address') ?></span>
            <p class="qmi-detailed-info">
              <?php echo get_field('qmi_square_footage') ?> | <?php echo get_field('qmi_bedrooms') ?> bed | <?php echo get_field('qmi_bathrooms') ?> bath<br />
              <?php echo get_field('qmi_garage') ?>
            </p>
          </div>
          <a href="<?php echo get_field('qmi_link') ?>" class="purple-btn btn" title="qmi home title" target="_blank">view this home</a>
        </div>
      </div>
      <?php endwhile; else: ?>
      <div class="col-md-12">
        <div class="builder-qmi-info">
          <p>There are no quick move-in homes currently available from this builder. Please call the sales office for more information.</p>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>


<?php wp_reset_query() ?>
