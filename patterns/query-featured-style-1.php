<?php
/**
 * Title: Query Featured Style 1
 * Slug: spaceblock/query-featured-style-1
 * Categories: spaceblock-query
 */
?>

<!-- wp:query {"queryId":3,"query":{"perPage":"5","pages":"0","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"only","inherit":false,"taxQuery":{"category":[]}},"displayLayout":{"type":"list","columns":4},"align":"wide","className":"is-style-featured-category-1"} -->
<div class="wp-block-query alignwide is-style-featured-category-1">
  <!-- wp:post-template -->
  <!-- wp:post-featured-image {"isLink":true,"className":"is-style-default"} /-->

  <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}}} -->
  <div class="wp-block-group">
    <!-- wp:post-title {"isLink":true} /-->
    <!-- wp:post-excerpt /-->
    <!-- wp:post-author {"avatarSize":24} /-->
  </div>
  <!-- /wp:group -->
  <!-- /wp:post-template -->
</div>
<!-- /wp:query -->