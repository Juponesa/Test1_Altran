<?php

/**
 * Add meta boxes.
 *
 * @return void
 */
function custom_meta()
{
    add_meta_box("client_meta", "Detalhes do Cliente", "custom_meta_callback", "client");
    add_meta_box("product_meta", "Detalhes do Produto", "custom_meta_callback", "product");
    add_meta_box("order_meta", "Detalhes do Pedido", "custom_meta_callback", "order");
}

/**
 * @param $post
 *
 * @return void
 */
function custom_meta_callback($post)
{
    $post_data = new Post_Data($post->ID);

    switch ($post->post_type) {
        case "client":
            $post_data->input('client-name', 'Nome: ');
            $post_data->input('client-email', 'E-mail: ', 'email');
            $post_data->input('client-phone', 'Telefone: ');
            break;
        case "product":
            $post_data->input('product-name', 'Nome: ');
            $post_data->input('product-description', 'Descrição: ');
            $post_data->input('product-price', 'Preço: ', 'number', ['step' => '0.01']);
            break;
        case "order":
            $post_data->select('order-client', 'client-name', 'Nome do cliente: ', get_clients());
            $post_data->select('order-product', 'product-name', 'Nome do produto: ', get_products());
            break;
    }
}
add_action('add_meta_boxes', 'custom_meta');

/**
 * @return WP_Query
 */
function get_clients()
{
    $args = array('post_type' => 'client');

    return new WP_Query($args);
}

/**
 * @return WP_Query
 */
function get_products()
{
    $args = array('post_type' => 'product');

    return new WP_Query($args);
}

/**
 * Saves the custom meta input.
 *
 * @return void
 */
function custom_meta_save($post_id)
{
    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);
    $is_valid_nonce = (isset($_POST['sm_nonce']) && wp_verify_nonce($_POST['sm_nonce'],
            basename(__FILE__))) ? 'true' : 'false';

    if ($is_autosave || $is_revision || !$is_valid_nonce) {
        return;
    }

    $post_data = new Post_Data($post_id);
    $post_data->save('client-name');
    $post_data->save('client-email');
    $post_data->save('client-phone');

    $post_data->save('product-name');
    $post_data->save('product-description');
    $post_data->save('product-price');

    $post_data->save('order-client');
    $post_data->save('order-product');
}
add_action('save_post', 'custom_meta_save');