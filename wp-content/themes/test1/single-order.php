<?php get_header(); ?>

    <article>
        <h1>Pedido</h1>
        <?php $meta = get_post_meta(get_the_ID()); ?>
        <h3>Cliente: <?php echo get_post_meta($meta['order-client'][0])['client-name'][0]; ?></h3>
        <p>E-mail: <?php echo get_post_meta($meta['order-client'][0])['client-email'][0]; ?></p>
        <p>Telefone: <?php echo get_post_meta($meta['order-client'][0])['client-phone'][0]; ?></p>
        <h3>Produto: <?php echo get_post_meta($meta['order-product'][0])['product-name'][0]; ?></h3>
        <p>Descrição: <?php echo get_post_meta($meta['order-product'][0])['product-description'][0]; ?></p>
        <p>Preço: R$<?php echo get_post_meta($meta['order-product'][0])['product-price'][0]; ?></p>
    </article>

<?php get_footer(); ?>