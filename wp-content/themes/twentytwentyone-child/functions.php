<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */



// Enqueue scripts and styles
function twenty_twenty_one_child_scripts(){
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'twenty-twenty-one-style' ));
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_child_scripts' );
