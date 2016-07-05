<?php get_header(); ?>

    <article id="client-<?php the_ID(); ?>">
        <?php $meta = get_post_meta(get_the_ID()); ?>

        <h1><?php echo $meta['product-name'][0]; ?></h1>

        <p>Descrição: <?php echo $meta['product-description'][0]; ?></p>
        <p>Preço: R$<?php echo $meta['product-price'][0]; ?></p>
    </article>


<?php get_footer(); ?>