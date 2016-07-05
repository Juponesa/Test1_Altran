<?php

/**
 * @return void
 */
function product_register()
{
    create_post_type('product', 'produto', 'produtos');
}
add_action('init', 'product_register');

/**
 * @return void
 */
function client_register()
{
    create_post_type('client', 'cliente', 'clientes');
}
add_action('init', 'client_register');

/**
 * @return void
 */
function order_register()
{
    create_post_type('order', 'pedido', 'pedidos');
}
add_action('init', 'order_register');

/**
 * @param $name
 * @param $singular
 * @param $plural
 *
 * @return void
 */
function create_post_type($name, $singular, $plural)
{
    $labels = array(
        'name' => _x(ucfirst($plural), 'post type general name'),
        'singular_name' => _x(ucfirst($singular), 'post type singular name'),
        'add_new' => _x('Adicionar novo', 'event'),
        'add_new_item' => __("Adicionar novo $singular"),
        'edit_item' => __("Editar $singular"),
        'new_item' => __("Novo $singular"),
        'view_item' => __("Visualizar $singular"),
        'search_items' => __("Procurar $plural"),
        'not_found' => __("Nenhum $singular encontrado"),
        'not_found_in_trash' => __("Nenhum $singular encontrado na lixeira"),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'rewrite' => ['slug' => $plural],
        'has_archive' => true,
        'supports' => array('title')
    );
    register_post_type($name, $args);
}