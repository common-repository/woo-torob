<?php
/**
 * Plugin Name: Woo Torob - استخراج محصولات ووکامرس برای ترب
 * Plugin URI:  https://kanishop.ir/?utm_source=wordpressorg&utm_medium=link&utm_campaign=wootorobplugin&utm_id=wootorob
 * Description: افزونه هماهنگ کننده ووکامرس با موتور جستجوی تُرُب
 * Version:     1.0.1
 * Author:      اسماعیل ابراهیمی
 * Author URI:  https://kanishop.ir/?utm_source=wordpressorg&utm_medium=link&utm_campaign=wootorobplugin&utm_id=wootorob
 */

include_once plugin_dir_path( __FILE__ ) .'torob-engine.php';
include_once plugin_dir_path( __FILE__ ) .'woo-torob-settings.php';

function wootooplu_load_custom_torob_wp_admin_style() {
    wp_register_style( 'ks-torob-admin-style', plugin_dir_url( __FILE__ ) . '/assets/css/torob.css' );
    wp_enqueue_style( 'ks-torob-admin-style' );
}
add_action( 'admin_enqueue_scripts', 'wootooplu_load_custom_torob_wp_admin_style' );

function wootooplu_torob_add_plugin_page_settings_link( $links ) {
    $links[] = '<a style="color:red !important;font-weight:bold !important;" href="' .
        admin_url( 'options-general.php?page=woo-torob-help' ) .
        '">راهنمای تُرُب</a>';
    return $links;
}
add_filter('plugin_action_links_'.plugin_basename(__FILE__), 'wootooplu_torob_add_plugin_page_settings_link');

