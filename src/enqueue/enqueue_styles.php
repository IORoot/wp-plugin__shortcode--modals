<?php

/**
 * Enqueue the modal styles
 * 
 */
function register_modal_style() {
    
    wp_register_style( 'andyp_modal_css', '/wp-content/plugins/andyp_modals/src/sass/style.css' );
    wp_enqueue_style('andyp_modal_css');
}


add_action( 'wp_enqueue_scripts', 'register_modal_style' );