<?php

/*
 * @package   Modals
 * @author    Andy Pearson <andy@londonparkour.com>
 * @copyright 2020 LondonParkour
 *
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - CSS-Only Modal Shortcodes
 * Plugin URI:        http://londonparkour.com
 * Description:       Uses <label> to trigger a modal that loads an iFrame.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Text Domain:       andyp-modal
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                             The Modal Class                             │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/shortcode/modal.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                             The Shortcode                               │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/shortcode/create_shortcode.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                             The Shortcode                               │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/enqueue/enqueue_styles.php';

