<?php
/**
 * Title: Features
 * Slug: spaceblock/section-features
 * Categories: spaceblock-section
 */
?>

<!-- wp:group {"align":"wide"} -->
<div class="wp-block-group alignwide">
  <!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0px"}}} -->
  <header class="wp-block-group">
    <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"lg"} -->
    <h2 class="has-lg-font-size" style="font-style:normal;font-weight:400"><?php echo esc_html__('Features','spaceblock' ) ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"is-style-description","fontSize":"sm"} -->
    <p class="is-style-description has-sm-font-size"><?php echo esc_html__('Basically, what this theme offers. Check it out!','spaceblock') ?></p>
    <!-- /wp:paragraph -->
  </header>
  <!-- /wp:group -->

  <!-- wp:columns -->
  <div class="wp-block-columns">
    <!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
    <div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
      <!-- wp:image {"align":"center","id":1139,"width":300,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image aligncenter size-full is-resized"><img
          src="<?php echo esc_url(get_template_directory_uri()) .  '/assets/img/styles-1.png' ?>" alt=""
          class="wp-image-1139" width="300" height="200" /></figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4,"textColor":"primary"} -->
      <h4 class="has-primary-color has-text-color"><?php echo esc_html__('Style Variations','spaceblock') ?></h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"is-style-description"} -->
      <p class="is-style-description"><?php echo esc_html__('Spaceblock includes 4 prebuilt colour schemes that you can choose from in the Global Styles panel. Change the entire site identity with a single click.', 'spaceblock') ?>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
    <div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
      <!-- wp:image {"align":"center","id":1140,"width":300,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image aligncenter size-full is-resized"><img
          src="<?php echo esc_url(get_template_directory_uri()) .  '/assets/img/edit.png' ?>" alt=""
          class="wp-image-1140" width="300" height="200" /></figure>


      <!-- /wp:image -->

      <!-- wp:heading {"level":4,"textColor":"primary"} -->
      <h4 class="has-primary-color has-text-color"><?php echo esc_html__('Full Site Editing','spaceblock') ?></h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"is-style-description"} -->
      <p class="is-style-description"><?php echo esc_html__('Built for WordPress 6.0 and Full Site Editing, so you can change the structure of your header, footer, and all other parts of the theme in the new Site Editor.','spaceblock') ?>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}}} -->
    <div class="wp-block-column" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px">
      <!-- wp:image {"align":"center","id":1141,"width":300,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
      <figure class="wp-block-image aligncenter size-full is-resized"><img
          src="<?php echo esc_url(get_template_directory_uri()) .  '/assets/img/speed.png' ?>" alt=""
          class="wp-image-1141" width="300" height="200" /></figure>
      <!-- /wp:image -->

      <!-- wp:heading {"level":4,"textColor":"primary"} -->
      <h4 class="has-primary-color has-text-color"><?php echo esc_html__('Global Styles','spaceblock') ?></h4>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"is-style-description"} -->
      <p class="is-style-description"><?php echo esc_html__('Spaceblock supports Global Styles, which allow you to modify the colours, type and spacing of your site.','spaceblock') ?>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->