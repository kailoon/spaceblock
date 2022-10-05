<?php
/**
 * Title: Join
 * Slug: spaceblock/join-card
 * Categories: spaceblock-section
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","layout":{"inherit":false,"contentSize":"","wideSize":""}} -->
<section class="wp-block-group alignwide">
  <!-- wp:group {"layout":{"contentSize":"1024px"}} -->
  <div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}}},"backgroundColor":"black","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group has-black-background-color has-background"
      style="padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px">
      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
      <div class="wp-block-group">
        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"-1px"}},"textColor":"white","fontSize":"lg"} -->
        <p class="has-white-color has-text-color has-lg-font-size"
          style="font-style:normal;font-weight:700;letter-spacing:-1px"><?php echo esc_html__('Get into the space and start flowing', 'spaceblock' ) ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"textColor":"senary","fontSize":"sm"} -->
        <p class="has-senary-color has-text-color has-sm-font-size"><?php echo esc_html__('Join the community to explore the space together.', 'spaceblock') ?>
        </p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-fill"} -->
        <div class="wp-block-button is-style-fill"><a
            class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background"
            href="<?php echo esc_url('#','spaceblock')?>"><?php echo esc_html__('Join ->','spaceblock') ?></a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->