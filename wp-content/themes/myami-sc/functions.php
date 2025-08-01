<?php
function add_script_files()
{
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'add_script_files');

add_action('init', function () {
    add_theme_support('post-thumbnails');
});

add_action('init', function () {
    register_nav_menus([
        'globalNav' => 'グローバルナビゲーション',
        'footerNav' => 'フッターナビゲーション',
    ]);
});

add_action('init', function () {
    register_post_type('music', [
        'label' => '音楽',
        'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
        'public' => true,
        'has_archive' => true,
        'hierarchical' => true,
    ]);
});

register_taxonomy('genre', 'music', [
    'label' => '音楽ジャンル',
    'hierarchical' => true,
    'show_in_rest' => true,
]);
