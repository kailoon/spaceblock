<?php
/**
 * Title: Section header style 1
 * Slug: spaceblock/section-header-style-1
 * Categories: spaceblock-section
 */
?>
<!-- wp:group {"tagName":"header"} -->
<header class="wp-block-group">
  <!-- wp:separator {"backgroundColor":"quaternary","className":"is-style-wide"} -->
  <hr
    class="wp-block-separator has-text-color has-quaternary-color has-alpha-channel-opacity has-quaternary-background-color has-background is-style-wide" />
  <!-- /wp:separator -->

  <!-- wp:heading {"level":4} -->
  <h4><?php echo esc_html__('Trending','spaceblock') ?></h4>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textColor":"tertiary","className":"is-style-description","fontSize":"sm"} -->
  <p class="is-style-description has-tertiary-color has-text-color has-sm-font-size"><?php echo esc_html__('Posts from selected category.','spaceblock') ?></p>
  <!-- /wp:paragraph -->
</header>
<!-- /wp:group -->