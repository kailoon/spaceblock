<?php
/**
 * Title: Single Post Header Center Aligned.
 * Slug: spaceblock/header-single-center
 * Categories: spaceblock-header
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","right":"20px","bottom":"20px","left":"20px"}}},"layout":{"inherit":false,"contentSize":"800px"}} -->
<div class="wp-block-group alignwide" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px">
  <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:post-terms {"term":"category"} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:post-title {"textAlign":"center","level":1} /-->

  <!-- wp:post-author {"textAlign":"center"} /-->
</div>
<!-- /wp:group -->