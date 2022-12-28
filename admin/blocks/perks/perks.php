<?php

/**
 * Perks Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$classes = 'perks';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}

$styles = array("");
$style  = implode('; ', $styles);

?>
<?php if (have_rows('perk')) : ?>
    <!-- Block - Perks -->
    <section class="container <?php echo esc_attr($classes); ?>" style="<?php echo esc_attr($style); ?>">
        <?php while (have_rows('perk')) : the_row();
            $title = get_sub_field('title');
            $text = get_sub_field('text'); ?>
            <div class="perk">
                <span class="title"><?php echo $title; ?></span>
                <p><?php echo $text; ?></p>
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>