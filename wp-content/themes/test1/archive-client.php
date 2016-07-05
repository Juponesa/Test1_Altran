<?php get_header(); ?>

    <h1><?php post_type_archive_title() ?></h1>

<?php
$args = array('post_type' => 'client');
$loop = new WP_Query($args);
while ($loop->have_posts()): $loop->the_post();

    $meta = get_post_meta(get_the_ID()); ?>

    <h2><a href="<?php the_permalink() ?>"><?php echo $meta['client-name'][0]; ?></a></h2>
    <?php endwhile; ?>

<?php get_footer(); ?>