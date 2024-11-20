<?php

function ajouter_style()
{
     wp_enqueue_style('monstyle', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'ajouter_style', PHP_INT_MAX);




//activer image mise en avant
add_theme_support('post-thumbnails');
