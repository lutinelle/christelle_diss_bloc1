<?php

function mytheme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','en tete de menu');
    register_nav_menu('footer','menu bas page');
}
function mytheme_register_style(){
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap_icon','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css');
    wp_enqueue_style('bootstrap_icon');

}
function mytheme_menu_class(array $classes): array{
    $classes[] = 'nav-item col-6 col-sm';
    return $classes;

}
function mytheme_menu_li(array $attrs): array{
    $attrs['class'] = 'nav-link ';
    return $attrs;

}

add_action('wp_enqueue_scripts','mytheme_register_style');

add_action('after_setup_theme', 'mytheme_support');
add_filter('nav_menu_css_class','mytheme_menu_class');
add_filter('nav_menu_link_attributes','mytheme_menu_li');
