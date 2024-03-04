<?php
// child style enqueue
add_action('wp_enqueue_scripts', 'th_portfolio_styles');
function th_portfolio_styles(){
    $themeVersion = wp_get_theme()->get('Version');
    // Enqueue our style.css with our own version
    wp_enqueue_style('th-portfolio-styles', get_template_directory_uri() . '/style.css',array(), $themeVersion);
}