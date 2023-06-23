<?php

function choco_edit_admin_menus() {
    //pre odstránenie položky v menu vzhľadom na rolu
    remove_menu_page('edit-comments.php');
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');

    if( ! current_user_can ('administrator')) {
        remove_menu_page('tools.php');
    }

    if( ! current_user_can ('administrator') && ! current_user_can ('editor')) {
        remove_menu_page('edit-comments.php');
    }
}

add_filter('admin_menu', 'choco_edit_admin_menus', 999);
