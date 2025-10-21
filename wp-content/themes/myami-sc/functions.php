<?php
function add_files()
{
    wp_enqueue_script('swiperBundle', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, false);
    wp_enqueue_script('simpleParallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@6.2.1/dist/vanilla/simpleParallaxVanilla.umd.min.js', array(), false, false);
    wp_enqueue_script('gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, false);
    wp_enqueue_script('ScrollTrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array(), false, false);
    wp_enqueue_script('ScrollSmoother', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollSmoother.min.js', array(), false, false);
    wp_enqueue_script('ScrollTo', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollToPlugin.min.js', array(), false, false);
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'add_files');

function theme_name_files()
{
    wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '', true);
    wp_enqueue_script('swiper', get_theme_file_uri('/assets/js/swiper.js'), array('swiperBundle'), '', true);
    wp_enqueue_script('parallax', get_theme_file_uri('/assets/js/parallax.js'), array('simpleParallax'), '', true);
    wp_enqueue_script('colorbox', get_theme_file_uri('/assets/js/jquery.colorbox-min.js'), array(), '', true);
}
add_action('wp_enqueue_scripts', 'theme_name_files');


add_action('init', function () {
    add_theme_support('post-thumbnails');
});

add_action('init', function () {
    register_nav_menus([
        'globalNav' => 'グローバルナビゲーション',
        'footerNav' => 'フッターナビゲーション',
    ]);
});

// add_action('init', function () {
//     register_post_type('music', [
//         'label' => '音楽',
//         'supports' => ['title', 'editor', 'thumbnail', 'page-attributes'],
//         'public' => true,
//         'has_archive' => true,
//         'hierarchical' => true,
//     ]);
// });

// register_taxonomy('genre', 'music', [
//     'label' => '音楽ジャンル',
//     'hierarchical' => true,
//     'show_in_rest' => true,
// ]);
