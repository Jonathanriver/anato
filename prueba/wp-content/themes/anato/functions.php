<?php 

function theme_scripts(){
    wp_enqueue_style('home', get_template_directory_uri().'/css/home.css');

}

add_action('wp_enqueue_scripts', 'theme_scripts')


?>