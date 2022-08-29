<?php
/**
 * Title: Normal List Query
 * Slug: spaceblock/query-list-normal
 * Categories: spaceblock-query
 */
?>
<!-- wp:query {"queryId":10,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"inherit":true}} -->
<div class="wp-block-query">
  <!-- wp:post-template -->
  <!-- wp:post-author {"avatarSize":24} /-->

  <!-- wp:post-title {"isLink":true,"fontSize":"xl"} /-->

  <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
  <div class="wp-block-group">
    <!-- wp:post-date /-->

    <!-- wp:post-terms {"term":"category"} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"40px"}}}} /-->

  <!-- wp:separator {"className":"is-style-wide"} -->
  <hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" />
  <!-- /wp:separator -->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
  <!-- wp:query-pagination-previous /-->

  <!-- wp:query-pagination-numbers /-->

  <!-- wp:query-pagination-next /-->
  <!-- /wp:query-pagination -->

  <!-- wp:query-no-results -->
  <!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
  <p></p>
  <!-- /wp:paragraph -->
  <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->