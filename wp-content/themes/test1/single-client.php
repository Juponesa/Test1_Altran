<?php get_header(); ?>

    <article id="client-<?php the_ID(); ?>">
        <?php $meta = get_post_meta(get_the_ID()); ?>

        <h1><?php echo $meta['client-name'][0]; ?></h1>

        <p>E-mail: <?php echo $meta['client-email'][0]; ?></p>
        <p>Telefone: <?php echo $meta['client-phone'][0]; ?></p>
    </article>


<?php get_footer(); ?>