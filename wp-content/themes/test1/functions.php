<?php

function _import()
{
    _register_style('open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
    _register_style('style', css_url() . '/style.css');
}

add_action('wp_enqueue_scripts', '_import', 10);

function _register_style($handle, $src, $depts = array(), $ver = null, $media = false)
{
    wp_dequeue_style($handle);
    wp_deregister_style($handle);
    wp_register_style($handle, $src, $depts, $ver, $media);
    wp_enqueue_style($handle);
}

function css_url()
{
    return get_template_directory_uri() . '/css';
}