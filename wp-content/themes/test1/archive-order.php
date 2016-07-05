<?php get_header(); ?>

    <h1><?php post_type_archive_title() ?></h1>

<?php
$args = array('post_type' => 'order');
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();

    $meta = get_post_meta(get_the_ID());
    ?>

    <h2><a href="<?php the_permalink() ?>">
            <?php echo get_post_meta($meta['order-client'][0])['client-name'][0] . ' | ' . get_post_meta($meta['order-product'][0])['product-name'][0]; ?>
        </a></h2>
<?php endwhile; ?>

<?php get_footer(); ?>