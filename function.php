<?php
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
    function add_scripts_and_styles() {
        wp_enqueue_style('main', get_stylesheet());
    }

    // add_action( 'wp_enqueue_scripts', 'timber_style');
    // function timber_style() {
    //     wp_enqueue_style('main-style', get_stylesheet_uri());   
    // }
?>