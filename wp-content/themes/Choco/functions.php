<?php

define ('THEME_DIRECTORY', get_template_directory());

//THEME SETTINGS
if ( ! function_exists('choco_setup')) {
    function choco_setup(){
        load_theme_textdomain('choco', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        add_theme_support('html5', array (
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        add_theme_support('customize-selective-refresh-widgets');

        add_theme_support('custom', [
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ]);

        add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio'));

        register_nav_menus( array (
            'primary' => esc_html__('Primary', 'choco'),
        ));
    }
}

add_action('after_setup_theme', 'choco_setup');

function choco_content_width() {
    $GLOBALS['content_width'] = apply_filters('choco_content_width', 1170);
}

add_action('after_setup_theme', 'choco_content_width');

function choco_sidebar_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__('Sidebar', 'choco'),
        'id' => 'default-sidebar',
        'description' => esc_html__('Pridať widget', 'choco'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));
}

add_action('widgets_init', 'choco_sidebar_widgets_init');

require_once THEME_DIRECTORY . '/inc/frontend.php';
require_once THEME_DIRECTORY . '/inc/customizer.php';
require_once THEME_DIRECTORY . '/inc/shortcodes.php';
require_once THEME_DIRECTORY . '/inc/helping.php';
require_once THEME_DIRECTORY . '/inc/admin-menu-settings.php';
