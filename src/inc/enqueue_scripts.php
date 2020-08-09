<?php

/**
 * Register the Chips CSS for use.
 * 
 */
function register_modals() {
    
    if (is_front_page()) {
        return;
    }

    wp_register_style( 'andyp_modal_css', ANDYP_MODALS_PATH.'src/sass/style.css' );
    wp_enqueue_style(  'andyp_modal_css');
    
    wp_register_script( 'andyp_modal_js', ANDYP_MODALS_PATH.'src/js/lazyload.js' );
    wp_enqueue_script(  'andyp_modal_js');

}

/**
 * This says 'encode' but we're only registering.
 */
add_action( 'wp_enqueue_scripts', 'register_modals' );