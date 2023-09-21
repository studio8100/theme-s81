<?php 

function theme_files() {
    wp_enqueue_style('theme_main_styles', get_stylesheet_uri());
}

    add_action('wp_enqueue_scripts', 'theme_files');
