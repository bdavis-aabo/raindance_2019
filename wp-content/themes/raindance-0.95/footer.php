<nav class="navbar navbar-footer navbar-fixed-bottom">
  <div class="container">
    <div class="footer-contents">
      <img src="<?php bloginfo('template_directory') ?>/assets/images/raindance-logo.svg" alt="" class="aligncenter footer-logo" />
      <?php if(!is_page('new-homes')): ?>
        <a class="footer-link prospect" data-toggle="modal" data-target="#contactModal">Stay in touch...<em>click here</em></a>
      <?php else: ?>
        <a class="footer-link prospect" data-toggle="modal" data-target="#builderModal">Get in touch...<em>with our builders</em></a>
      <?php endif; ?>
    </div>
    <div class="footer-bottom">
      <div class="purple-bg">
        <h2>New Homes from NoCo's finest crop of homebuilders. Anticipated prices begin in the $300s<br />2 miles East of I-25 on Crossroads Boulevard in Windsor, CO</h2>
      </div>
        <p class="disclaimer">
          <img src="<?php bloginfo('template_directory') ?>/assets/images/eho-icon.jpg" class="alignnone" /> &copy;2018 RainDance. All pricing, product specifications, amenities and landscaping is subject to change without prior notice.</p>
    </div>
  </div>
  <a class="scrollToTop"><i class="fa fa-chevron-up"></i></a>
</nav>

<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
      <h2 class="modal-title" id="myModalLabel">Stay in touch...</h2>
      <p>Simply fill out the form below to receive timely information about the progress of RainDance and the new homes coming soon.<br />We promise not to bug you too often.</p>
      </div>
      <div class="modal-body">
        <?php get_template_part('home/contact-form') ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="builderModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times"></i></span></button>
      <h2 class="modal-title" id="myModalLabel">Learn more about the homebuilders...</h2>
      <p>Simply fill out the form below and select the homebuilder(s) that interest you most. Your interest will be shared with them immediately so they can get in touch with you. You’ll also receive timely information about RainDance and the new homes coming soon.<br />
        We promise not to bug you too often.</p>
      </div>
      <div class="modal-body">
        <?php get_template_part('home/builder-form') ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('home/video') ?>


<?php if(!is_front_page()): ?>
<!-- Conversion Pixel - CO_Fort Collins_Raindance_SV_Landing Page - DO NOT MODIFY -->
<script src="https://secure.adnxs.com/px?id=1009905&t=1" type="text/javascript"></script>
<!-- End of Conversion Pixel -->

<!-- Conversion Pixel - CO_Fort Collins_Raindance- Consumer_SV_Landing Page - DO NOT MODIFY -->
<script src="https://secure.adnxs.com/px?id=1022592&t=1" type="text/javascript"></script>
<!-- End of Conversion Pixel -->
<?php endif; ?>


<?php wp_footer() ?>
</body>
</html>
