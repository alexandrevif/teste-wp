<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function load_scripts()
{
    //css
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('style-css', get_stylesheet_uri());
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css');
    wp_enqueue_style('google-font-roboto', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', '', false, true);
    //js
    wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.6.0.min.js', '', false, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', '', false, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');