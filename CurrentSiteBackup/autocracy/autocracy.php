<?php
add_action('admin_init', 'theme_options_init');
add_action('admin_menu', 'theme_options_add_page');
/**
 * Init plugin options to white list our options
 */
function theme_options_init() {
    register_setting('sample_options', 'sample_theme_options', 'theme_options_validate');
    register_setting( 'system_options', 'system_theme_options', 'system_options_validate' );
    register_setting( 'footer_options', 'footer_theme_options', 'footer_options_validate' );
}
/**
 * Load up the menu page
 */
function theme_options_add_page() {
    add_theme_page(__('Homepage Manager', 'sampletheme'), __('Homepage Manager', 'sampletheme'), 'edit_theme_options', 'theme_options', 'theme_options_do_page');
    add_theme_page( __( 'System Manager', 'sampletheme' ), __( 'System Manager', 'sampletheme' ), 'edit_theme_options', 'system_options', 'system_options_do_page' );
    add_theme_page( __( 'Footer Manager', 'sampletheme' ), __( 'Footer Manager', 'sampletheme' ), 'edit_theme_options', 'footer_options', 'footer_options_do_page' );  
}
?>