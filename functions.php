<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Charger le fichier JavaScript de manière asynchrone
function foce_child_enqueue_scripts() {
    wp_enqueue_script('foce-child-js', get_stylesheet_directory_uri() . '/javascript.js', [], null, true);
  }
  
  add_action('wp_enqueue_scripts', 'foce_child_enqueue_scripts');

wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js');