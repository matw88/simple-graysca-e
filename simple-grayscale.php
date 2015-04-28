<?php
/*
Plugin Name: Simple Grayscale
Description: In simple way allows you to change colors of your website to grayscale using only few lines of CSS. You can use it for eg. mourning.
Version: 1.0.0
Author: Mateusz Wojtuła
Author URI: http://www.matw.pl/
License: GPLv2 or later
*/
defined( 'ABSPATH' ) or die( 'Something went wrong!' );

/**
 * Enqueue grayscale styles
 */
function sp_grayscale_styles() {
	wp_enqueue_style( 'style-name', plugins_url( 'grayscale.css', __FILE__ ) );
}

add_action( 'wp_enqueue_scripts', 'sp_grayscale_styles' );
