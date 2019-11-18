<?php
/**
 * Plugin Name: GutenTolerance
 * Description: Improves the Gutenberg authoring experience
 * Version: 1.0.3
 * Author: Matt Ryan
 * Author URI: https://empatheticinterfaces.com
 */

include_once('includes/settings.php');
include_once('includes/admin_classes.php');

add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 'gutentolerance-css', plugin_dir_url( __FILE__ ) . 'css/gutentolerance.css', [] );
    wp_enqueue_script( 'gutentolerance-script', plugin_dir_url( __FILE__ ) . 'js/gutentolerance.js', [] );
} );
