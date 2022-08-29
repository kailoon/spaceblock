<?php
/**
 * Title: Normal Grid Query
 * Slug: spaceblock/query-grid
 * Categories: spaceblock-query
 */
?>
<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query">
  <!-- wp:post-template -->
  <!-- wp:post-featured-image {"isLink":true} /-->

  <!-- wp:post-date /-->

  <!-- wp:post-title {"isLink":true} /-->
  <!-- /wp:post-template -->

  <!-- wp:query-pagination -->
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