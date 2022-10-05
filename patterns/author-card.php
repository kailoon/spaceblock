<?php
/**
 * Title: Author Card
 * Slug: spaceblock/author-card
 * Categories: spaceblock-section
 */
?>
<!-- wp:group {"tagName":"section","align":"wide","layout":{"inherit":false,"contentSize":"","wideSize":""}} -->
<section class="wp-block-group alignwide">
  <!-- wp:group {"layout":{"contentSize":"1024px"}} -->
  <div class="wp-block-group">
    <!-- wp:columns {"style":{"spacing":{"blockGap":"40px","padding":{"top":"60px","right":"60px","bottom":"60px","left":"60px"}},"border":{"width":"2px"}}} -->
    <div class="wp-block-columns"
      style="border-width:2px;padding-top:60px;padding-right:60px;padding-bottom:60px;padding-left:60px">
      <!-- wp:column {"width":"20%"} -->
      <div class="wp-block-column" style="flex-basis:20%">
        <!-- wp:image {"id":1908,"width":171,"height":256,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large is-resized"><img
            src="<?php echo esc_url(get_template_directory_uri()) .  '/assets/img/image-from-rawpixel-id-3342550-jpeg.jpg' ?>"
            alt="<?php echo esc_attr__( 'Positive women talking during interview in studio
', 'spaceblock' ) ?>" class=" wp-image-1908" width="171" height="256" /></figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"80%"} -->
      <div class="wp-block-column" style="flex-basis:80%">
        <!-- wp:heading {"level":3,"style":{"color":{"text":"#979797"}},"fontSize":"base"} -->
        <h3 class="has-text-color has-base-font-size" style="color:#979797"><?php echo esc_html__('Darrell Steward', 'spaceblock') ?></h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"quaternary","fontSize":"md"} -->
        <p class="has-quaternary-color has-text-color has-md-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html('Twitter specialist. Zombie enthusiast. Tv fanatic. Lifelong gamer. Food geek. Wannabe travel nerd. Pop culture
          evangelist.', 'spaceblock') ?></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:column -->

      <!-- wp:column {"width":"20%"} -->
      <div class="wp-block-column" style="flex-basis:20%">
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
          <!-- wp:button -->
          <div class="wp-block-button"><a class="wp-block-button__link"
              href="<?php echo esc_url('#','spaceblock')?>"><?php echo esc_html__('View Author','spaceblock')?></a>
          </div>
          <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
      </div>
      <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
  </div>
  <!-- /wp:group -->
</section>
<!-- /wp:group -->