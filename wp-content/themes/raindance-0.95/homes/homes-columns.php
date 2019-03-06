<?php
  $_args = array('post_type' => 'home-builders','post_status' => 'publish','pagename' => $post->post_name,'posts_per_page' => 1);
  $_builders = new WP_Query($_args);
?>

<?php if($_builders->have_posts()): ?>
<section class="builder-columns">
  <div class="container">
  <?php while($_builders->have_posts()): $_builders->the_post() ?>
    <div class="row">
      <div class="col-md-8">
        <div class="builder-left">
        <?php if(have_rows('collections')): $_rows = get_field('collections'); ?>
          <?php if(count($_rows) <= 1): ?>
          <div class="collection-information">
            <?php while(have_rows('collections')): the_row(); ?>
              <?php if(get_sub_field('collection_gallery')): $_images = get_sub_field('collection_gallery'); $_i = 0; $_s = 0;?>
              <div id="carousel-<?php echo $_panelname ?>" class="model-carousel carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                  <?php foreach($_images as $_image): ?>
                  <div class="item <?php if($_s == 0): echo 'active'; endif; ?>">
                    <img src="<?php echo $_image['url'] ?>" alt="<?php echo $_image['title'] ?>" class="img-responsive" />
                  </div>
                  <?php $_s++; endforeach; ?>
                </div>

                <ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block">
                  <?php foreach($_images as $_image): ?>
                  <li data-target="<?php echo '#carousel-' . $_panelname ?>" <?php if($_i == 0): echo 'class="active"'; endif; ?> data-slide-to="<?php echo $_i; ?>">
                    <?php echo wp_get_attachment_image($_image['ID'], 'model-thumb', '', array('class' => 'aligncenter img-responsive')); ?>
                    <div class="thumb-mask"></div>
                  </li>
                  <?php $_i++; endforeach; ?>
                </ol>
              </div>
              <?php endif; ?>
            <?php endwhile; ?>
          </div>
        <?php else: ?>
          <div class="collection-tabs">
            <ul class="nav nav-pills" role="tablist">
            <?php $_t = 0; while(have_rows('collections')): the_row(); $_tabname = strtolower(str_replace(' ', '-', get_sub_field('collection_name'))); ?>
              <li role="presentation" <?php if($_t == 0): ?>class="active"<?php endif; ?>>
                <a href="#<?php echo $_tabname ?>" aria-controls="<?php echo $_tabname ?>" data-toggle="tab">
                  <?php echo get_sub_field('collection_name') ?>
                </a>
              </li>
            <?php $_t++; endwhile; ?>
            </ul>

            <div class="tab-content">
            <?php $_p = 0; while(have_rows('collections')): the_row(); $_panelname = strtolower(str_replace(' ', '-', get_sub_field('collection_name'))); ?>
              <div role="tabpanel" class="tab-pane fade <?php if($_p == 0): ?>in active<?php endif; ?>" id="<?php echo $_panelname ?>">
                <?php echo get_sub_field('collection_information') ?>
                <?php if(get_sub_field('collection_gallery')): $_images = get_sub_field('collection_gallery'); $_i = 0; $_s = 0;?>
                <div id="carousel-<?php echo $_panelname ?>" class="model-carousel carousel slide" data-ride="carousel">
                  <div class="carousel-inner" role="listbox">
                    <?php foreach($_images as $_image): ?>
                    <div class="item <?php if($_s == 0): echo 'active'; endif; ?>">
                      <img src="<?php echo $_image['url'] ?>" alt="<?php echo $_image['title'] ?>" class="img-responsive" />
                    </div>
                    <?php $_s++; endforeach; ?>
                  </div>

                  <ol class="carousel-indicators visible-sm-block hidden-xs-block visible-md-block visible-lg-block">
                    <?php foreach($_images as $_image): ?>
                    <li data-target="<?php echo '#carousel-' . $_panelname ?>" <?php if($_i == 0): echo 'class="active"'; endif; ?> data-slide-to="<?php echo $_i; ?>">
                      <?php echo wp_get_attachment_image($_image['ID'], 'model-thumb', '', array('class' => 'aligncenter img-responsive')); ?>
				              <div class="thumb-mask"></div>
                    </li>
                    <?php $_i++; endforeach; ?>
                  </ol>
                </div>
                <?php endif; ?>
              </div>
            <?php $_p++; endwhile; ?>
            </div>
          </div>
        <?php endif; ?>

        <?php endif; ?>
        </div>
      </div><!-- end /col-md-8 -->

      <div class="col-md-4">
        <div class="builder-right">
        <?php if(get_field('homebuilder_logo') != ''): $_logo = get_field('homebuilder_logo'); ?>
          <img src="<?php echo $_logo['url'] ?>" class="img-responsive aligncenter" alt="<?php the_title() ?>" />
        <?php endif; ?>

          <div class="builder-office">
            <strong>Sales office Information</strong>
            <p class="office-details">
              <?php echo get_field('homebuilder_address') ?><br />
              <strong>Phone: </strong><?php echo get_field('homebuilder_phone') ?><br />
              <strong>Hours: </strong><?php echo get_field('homebuilder_hours') ?>
            </p>
          </div>

          <?php if(have_rows('collections')): while(have_rows('collections')): the_row() ?>
            <h3 class="collection-name">
              <?php
                if(get_sub_field('collection_name') != ''): echo get_sub_field('collection_name') . ':<br />'; endif;
                echo get_sub_field('collection_number_models') . ' floorplans available<br />';
                if(get_sub_field('collection_starting_price') != ''): echo 'starting in the ' . get_sub_field('collection_starting_price');
                else: echo 'pricing coming soon'; endif;
              ?>
            </h3>
            <p class="collection-detailed-info"><?php echo get_sub_field('collection_details') ?></p>
          <?php endwhile; endif; ?>

          <a href="" class="btn purple-btn builder-contact-btn" title="Contact <?php the_title() ?>" data-builder="<?php the_title() ?>" data-toggle="modal" data-target="#builderModal">Contact <?php the_title() ?></a>
        </div>
      </div>

    </div>
  <?php endwhile; ?>
  </div>
</section>
<?php endif; wp_reset_query(); ?>
