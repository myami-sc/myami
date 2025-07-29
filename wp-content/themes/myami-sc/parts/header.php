<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
            wp_title('|', true, 'left'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header" id="header">
        <div class="l-header__inner">
            <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
            <<?php echo $html_tag; ?> class="l-header-logo">
                <a href="<?php echo esc_url(home_url()); ?>" class="l-header-logo__link">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="l-header-logo__img img" alt="マイアミショッピングセンターロゴ">
                </a>
            </<?php echo $html_tag; ?>>

            <div class="l-header__menu">
                <nav class="l-header-nav">
                    <ul class="l-header-nav__list">
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('event')); ?>" class="l-header-nav__link --event"><span class="l-header-nav__text">イベント</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('floor')); ?>" class="l-header-nav__link --floor"><span class="l-header-nav__text">フロアガイド</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-header-nav__link --shop"><span class="l-header-nav__text">ショップガイド</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('access')); ?>" class="l-header-nav__link --access"><span class="l-header-nav__text">アクセス</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>