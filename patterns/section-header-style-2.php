<?php
/**
 * Title: Section header style 2
 * Slug: spaceblock/section-header-style-2
 * Categories: spaceblock-section
 */
?>
<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"20px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<header class="wp-block-group">
  <!-- wp:image {"id":1177,"width":30,"height":30,"sizeSlug":"full","linkDestination":"none"} -->
  <figure class="wp-block-image size-full is-resized"><img
      src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/img/Rocket.png'; ?>" alt=""
      class="wp-image-1177" width="30" height="30" /></figure>
  <!-- /wp:image -->

  <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
  <div class="wp-block-group">
    <!-- wp:heading {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"md"} -->
    <h2 class="has-md-font-size" style="font-style:italic;font-weight:400">Sticky Posts with icon</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"className":"is-style-description","fontSize":"sm"} -->
    <p class="is-style-description has-sm-font-size">Featured posts section to accommodate 4 posts. Either based on
      category, tags or sticky posts.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</header>
<!-- /wp:group -->