<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Modal lazyloaded iFrames',
        'icon'      => 'image-filter-frames',
        'color'     => '#673AB7',
        'path'      => __FILE__,
    ]);
} );