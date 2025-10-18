<?php

function readova_scripts() {
    // --- Styles ---
    wp_enqueue_style('readova-fonts',get_template_directory_uri() . '/css/fonts.css', array(), null);
    wp_enqueue_style('readova-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('readova-bootstrap-icons-css', get_template_directory_uri() . '/css/bootstrap-icons.css', array(), null);
    wp_enqueue_style('readova-font-awesome-css', get_template_directory_uri() . '/fontawesome/css/all.min.css', array(), '7.1.10');
    wp_enqueue_style('readova-aos-css', get_template_directory_uri() . '/css/aos.css', array(), null);
    wp_enqueue_style('readova-main-css', get_template_directory_uri() . '/css/main.css');

    // --- Dequeue WordPress' built-in jQuery ---
    wp_deregister_script('jquery');

    wp_register_script(
        'jquery',
        get_template_directory_uri() . '/js/jquery.min.js',
        array(),
        '2.2.3',
        true
    );

    // --- Enqueue older jquery version ---
    wp_enqueue_script('jquery');

    // --- Other scripts ---
    wp_enqueue_script('readova-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('readova-click-scroll-js', get_template_directory_uri() . '/js/click-scroll.js', array('jquery'), null, true);
    wp_enqueue_script('readova-font-awesome-js', get_template_directory_uri() . '/fontawesome/js/all.js', array(), '7.1.10');
    wp_enqueue_script('readova-aos-js', get_template_directory_uri() . '/js/aos.js', array(), true);
    wp_enqueue_script('readova-typed-js', get_template_directory_uri() . '/js/typed.umd.js', array(), true);
    wp_enqueue_script('readova-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery','readova-aos-js','readova-typed-js'), null, true);

}

function readova_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}

add_action('wp_enqueue_scripts', 'readova_scripts');

add_action('wp_head', 'readova_preconnect', 1);


