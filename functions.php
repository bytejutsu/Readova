<?php

function readova_scripts() {
    // --- Styles ---
    wp_enqueue_style('readova-fonts','https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap', array(), null);
    wp_enqueue_style('readova-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('readova-bootstrap-icons-css', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), null);
    wp_enqueue_style('readova-main-css', get_template_directory_uri() . '/css/main.css');

    // --- Dequeue WordPress' built-in jQuery ---
    wp_deregister_script('jquery');

    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery-2.2.3.min.js',
        array(),
        '2.2.3',
        true
    );

    // --- Enqueue older jquery version ---
    wp_enqueue_script('jquery');

    // --- Other scripts ---
    wp_enqueue_script('readova-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery2'), null, true);
    wp_enqueue_script('readova-sticky-js', get_template_directory_uri() . '/js/jquery.sticky.js', array('jquery2'), null, true);
    wp_enqueue_script('readova-click-scroll-js', get_template_directory_uri() . '/js/click-scroll.js', array(), null, true);
    wp_enqueue_script('readova-custom-js', get_template_directory_uri() . '/js/custom.js', array(), null, true);

}

function readova_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

add_action('wp_enqueue_scripts', 'readova_scripts');

add_action('wp_head', 'readova_preconnect', 1);

