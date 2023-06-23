<?php

function choco_public_scripts() {
    //fonts
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Cormorant:wght@500&family=Courgette&display=swap' );

    //styles
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/styles/bootstrap.min.css', [], 'all' );
    wp_enqueue_style( 'bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    //scripts - array() - if no dependency
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap.min.js', array(), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'choco_public_scripts' );