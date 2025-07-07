<?php
/**
 * Title: Flexible grid layout
 * Slug: magna-mater-prima/grid-layout
 * Categories: theme, layout
 * Block Types: core/group
 *
 * @package magna-mater-prima
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"grid-container","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide grid-container" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
    <!-- wp:group {"className":"grid-layout"} -->
    <div class="wp-block-group grid-layout">
        <!-- wp:group {"className":"grid-item"} -->
        <div class="wp-block-group grid-item">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php echo esc_html_x( 'Item 1', 'grid item', 'magna-mater-prima' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_x( 'Add your content here. This grid adapts to any number of items.', 'grid content', 'magna-mater-prima' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"grid-item"} -->
        <div class="wp-block-group grid-item">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php echo esc_html_x( 'Item 2', 'grid item', 'magna-mater-prima' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_x( 'Responsive grid automatically adjusts columns based on screen size.', 'grid content', 'magna-mater-prima' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"grid-item"} -->
        <div class="wp-block-group grid-item">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php echo esc_html_x( 'Item 3', 'grid item', 'magna-mater-prima' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_x( 'Add more items by duplicating the grid-item group.', 'grid content', 'magna-mater-prima' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        
        <!-- wp:group {"className":"grid-item"} -->
        <div class="wp-block-group grid-item">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading"><?php echo esc_html_x( 'Item 4', 'grid item', 'magna-mater-prima' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p><?php echo esc_html_x( 'Perfect for products, services, team members, or any content.', 'grid content', 'magna-mater-prima' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
