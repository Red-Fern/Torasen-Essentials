<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

// Generate unique id for aria-controls.
$unique_id = wp_unique_id('p-');

$activeTab = $attributes['activeTab'] ?? 0;

?>

<div
    <?php echo get_block_wrapper_attributes(); ?>
    data-wp-interactive="rfAccordion"
    <?php echo wp_interactivity_data_wp_context(['activeTab' => $activeTab]); ?>
>
    <?php echo $content; ?>
</div>
