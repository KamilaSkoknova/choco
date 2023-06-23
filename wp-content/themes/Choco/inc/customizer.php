<?php 

// pridanie sekcie do "prispôsobiť"/"customize"
function choco_customize_register( $wp_customize ){
    $wp_customize->add_section('copyright', array (
        'title' => 'Copyright',
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'copytext', array(
        'capability' => 'edit_theme_options',
        'default' => get_option('blogname'),
        'sanitize_callback' => '',
        'sanitize_js_callback' => '',
        'transport' => 'refresh', //postMessage
    ));

    $wp_customize->add_control('copytext', array(
        'type' => 'text',
        'priority' => 30,
        'section' => 'copyright',
        'label' => 'názov firmy',
    ));
}

add_action('customize_register', 'choco_customize_register');