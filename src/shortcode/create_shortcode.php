<?php

/**
 * Create the class and return results.
 */
function andyp_modal_callback($atts){

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