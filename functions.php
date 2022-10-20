<?php

function eink_files() {
    wp_enqueue_script('eink-js', get_theme_file_uri('/script.js'), NULL, microtime(), true);
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
    wp_enqueue_style('eink_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'eink_files');
add_theme_support('post-thumbnails');
