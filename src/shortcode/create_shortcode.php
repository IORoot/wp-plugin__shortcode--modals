<?php

/**
 * Create the class and return results.
 */
function andyp_modal_callback($atts){

    wp_register_style( 'andyp_modal_css', ANDYP_MODALS_PATH.'src/sass/style.css' );
    wp_enqueue_style(  'andyp_modal_css');

    wp_register_script( 'andyp_modal_js', ANDYP_MODALS_PATH.'src/js/lazyload.js' );
    wp_enqueue_script(  'andyp_modal_js');

    $args = shortcode_atts( 
        array(
            'id' => '',
            'src' => '',
        ), $atts );

    $modal = new andyp_modal($args);
    
    echo $modal->output();

    return;
}

add_shortcode( 'andyp_modal', 'andyp_modal_callback' );