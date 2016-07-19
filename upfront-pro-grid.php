<?php
/**
 * Plugin Name:    Upfront Pro Grid
 * Plugin URI:     http://github.com/ufdev/upfront-pro-grid/
 * Description:    An improved grid overlay for Upfront.
 * Version:        1.0
 * Author:         Joseph Fusco
 * Author URI:     http://josephfus.co/
 * License:        GPLv2 or later
 * License URI:    LICENSE
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function upg_enqueue() {
	wp_enqueue_style( 'upg-style', plugins_url( '/upfront-pro-grid.css' , __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'upg_enqueue' );
