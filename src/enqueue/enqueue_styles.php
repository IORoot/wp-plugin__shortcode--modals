<?php

/**
 * Enqueue the modal styles
 * 
 */
function register_modal_style() {
    
    wp_register_style( 'andyp_modal_css', '/wp-content/plugins/andyp_modals/src/sass/style.css' );
    wp_enqueue_style(  'andyp_modal_css');

    wp_register_script( 'andyp_modal_js', '/wp-content/plugins/andyp_modals/src/js/lazyload.js' );
    wp_enqueue_script(  'andyp_modal_js');
}


add_action( 'wp_enqueue_scripts', 'register_modal_style' );