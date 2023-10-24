<?php
/**
 * Title: Sample
 * Slug: namespace/sample
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( NAMESPACE_IMAGE_URL . 'sample.jpeg' ); ?>","id":-1,"dimRatio":70,"minHeight":70,"minHeightUnit":"vh","contentPosition":"bottom left","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="min-height:70vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background wp-image--1" alt="" src="<?php echo esc_url( NAMESPACE_IMAGE_URL . 'sample.jpeg' ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->