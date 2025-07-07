<?php
/**
 * Title: Hero section with call to action
 * Slug: magna-mater-prima/hero-section
 * Categories: theme, featured
 * Block Types: core/group, core/heading, core/paragraph, core/buttons
 *
 * @package magna-mater-prima
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'Welcome to Your Website', 'hero heading', 'magna-mater-prima' ); ?></h2>
    <!-- /wp:heading -->
    
    <!-- wp:paragraph {"align":"center","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Create something amazing with this flexible theme', 'hero description', 'magna-mater-prima' ); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button"><?php echo esc_html_x( 'Get Started', 'button text', 'magna-mater-prima' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->
