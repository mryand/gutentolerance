<?php
/**
 * Plugin Name: GutenTolerance
 * Description: Improves the Gutenberg authoring experience
 * Author: Matt Ryan
 * Author URI: https://empatheticinterfaces.com
 */

add_action( 'admin_enqueue_scripts', function() {
	wp_enqueue_style( 'gutentolerance-css', plugin_dir_url( __FILE__ ) . 'css/gutentolerance.css', [] );
	wp_enqueue_script( 'gutentolerance-script', plugin_dir_url( __FILE__ ) . 'js/gutentolerance.js', [] );
} );
