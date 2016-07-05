<?php

/* Disable WordPress Admin Bar. */
show_admin_bar(false);

/* Add import CSS and JS file*/
function _import()
{
    _register_style('open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800');
    _register_style('style', css_url() . '/style.css');
    _register_script('app', js_url() . '/app.js', array('jquery'));
}

add_action('wp_enqueue_scripts', '_import', 10);

function _register_style($handle, $src, $depts = array(), $ver = null, $media = false)
{
    wp_dequeue_style($handle);
    wp_deregister_style($handle);
    wp_register_style($handle, $src, $depts, $ver, $media);
    wp_enqueue_style($handle);
}

function _register_script($handle, $src, $depts = array(), $ver = null, $in_footer = true)
{
    wp_dequeue_script($handle);
    wp_deregister_script($handle);
    wp_register_script($handle, $src, $depts, $ver, $in_footer);
    wp_enqueue_script($handle);
}

function css_url()
{
    return get_template_directory_uri() . '/css';
}

function js_url()
{
    return get_template_directory_uri() . '/js';
}