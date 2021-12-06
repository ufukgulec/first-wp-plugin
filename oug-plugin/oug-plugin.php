<?php

/**
 * Plugin Name: Ufuk Eklenti
 * Plugin URI: https://wordpress.com/
 * Description: İlk eklentimdir.
 * Version: 1.0
 * Author: orhanufuk-gulce
 * Author URI: https://wordpress.com/
 * Licence: GPLv2 or later
 * Text Domain: oug-plugin
 */
defined('ABSPATH') || exit;

function wpdocs_register_my_custom_menu_page()
{

    /*require_once 'include/nav.php';*/
    add_menu_page('İlk Eklentim', 'İlk Eklentim', 'manage_options', 'my_first_plugin', 'my_func', plugins_url('images\penguin.png'), 3);
    add_submenu_page('my_first_plugin', 'Detay', 'Detay', 'manage_options', 'my_first_sub_menu', 'my_sub_func');
}
add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

function my_func()
{
    require_once 'include/home.php';
}
function my_sub_func()
{
    require_once 'include/detay.php';
}
