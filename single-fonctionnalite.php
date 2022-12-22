<?php get_header(); ?>

<section class="hero">
    <div class="container cols">
        <div class="image-wrapper">
            <video loop autoplay muted playsinline>
                <source src="<?php echo get_field("feature_icon_animated")["url"]; ?>" type="video/mp4">
            </video>
        </div>
        <div class="content-wrapper">
            <span class="category"><?php echo get_field("feature_parent"); ?></span>
            <h1 class="title" <?php if (get_field("feature_pill")) : ?> data-pill="<?php echo get_field("feature_pill_label"); ?>" <?php endif; ?>><?php echo get_field("feature_title") ?: get_the_title(); ?></h1>
            <div class="description"><?php echo get_field("feature_introduction"); ?></div>
            <?php if (get_field('feature_button_content')) : ?>
                <a href="<?php echo get_field('feature_button_content')["url"]; ?>" target="<?php echo get_field('feature_button_content')["target"]; ?>" class="btn btn-<?php echo get_field('feature_button_style')["color"]; ?>"><?php echo get_field('feature_button_content')["title"]; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php the_content(); ?>

<!-- Related - Fonctionnalités -->
<?php if (get_field("feature_related_features")) : ?>
    <?php get_template_part(
        'template-parts/related',
        'fonctionnalite',
        array(
            'related' => get_field("feature_related_features"),
        )
    ); ?>
<?php endif; ?>

<!-- Outro - Boutons -->
<?php if (get_field('outro_1_button', 'option')["content"] || get_field('outro_2_button', 'option')["content"]) : ?>
    <?php get_template_part('template-parts/outro', 'buttons', array(
        'title' => get_field('outro_1_title', 'option'),
        'button_1' => get_field('outro_1_button', 'option')["content"] ? get_field('outro_1_button', 'option') : false,
        'button_2' => get_field('outro_2_button', 'option')["content"] ? get_field('outro_2_button', 'option') : false,
    )); ?>
<?php endif; ?>

<?php get_footer(); ?>