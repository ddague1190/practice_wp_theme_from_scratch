<?php


function scooter_theme_files()
{
    wp_enqueue_script('main-js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
    wp_enqueue_style('extra_styles', get_theme_file_uri('/build/style-index.css'));
    // wp_enqueue_style('main_styles', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts', 'scooter_theme_files');


function scooter_theme_features()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}


add_action('after_setup_theme', 'scooter_theme_features');
