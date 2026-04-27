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

add_filter('eventorganiser_event_properties', function ($args) {
    $args['show_in_rest'] = true;
    return $args;
});

add_filter('eventorganiser_event_tooltip', function ($description) {

    $thumbnail_url = get_the_post_thumbnail_url();
    $thumbnail = '<img  class="img" src="' . $thumbnail_url . '" alt="イベントイメージ">';
    $date_url = eo_get_the_start('Y - m - d');
    $date = '<span class="date">' . $date_url . '</span>';
    $time_url = eo_get_schedule_start('g:i') . ' - ' . eo_get_the_end('g:i');
    $time = '<span class="time">' . $time_url . '</span>';
    $content = get_the_content();
    $content = strip_shortcodes($content);
    $plain_text = strip_tags($content);
    $limit = 150;
    $venue_id = eo_get_venues();
    $venue_name = eo_get_venue_name($venue_id);
    $venue = '<span class="location">' . $venue_name . '</span>';

    if (mb_strlen($plain_text, 'UTF-8') > $limit) {
        $plain_text = mb_substr($plain_text, 0, $limit, 'UTF-8') . '[…]';
    }

    $text = '<p class="text">' . $plain_text . '</p>';

    $description = '<div class="wrap">' . $date . $time . $thumbnail . $text . $venue . '</div>';

    return $description;
});
