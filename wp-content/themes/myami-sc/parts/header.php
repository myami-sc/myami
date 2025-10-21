<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
            wp_title('|', true, 'left'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.3/dist/lenis.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
                <nav class="l-header-nav" id="js-h-nav">
                    <ul class="l-header-nav__list">
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('event')); ?>" class="l-header-nav__link --event"><span class="l-header-nav__text">イベント</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('floor')); ?>" class="l-header-nav__link --floor"><span class="l-header-nav__text">フロアガイド</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-header-nav__link --shop"><span class="l-header-nav__text">ショップリスト</span></a>
                        </li>
                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('access')); ?>" class="l-header-nav__link --access"><span class="l-header-nav__text">アクセス</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="hamburger" id="js-hamburger">
                    <nav class="hamburger-nav" onwheel="event.stopPropagation()">
                        <div class="hamburger-nav__menu">
                            <div class="menu-container">
                                <div class="head">
                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="logo img" alt="マイアミショッピングセンターロゴ">
                                </div>
                                <div class="body">
                                    <div class="m-inner">
                                        <h3 class="subheading"><span>こだわりを探す</span></h3>
                                        <div class="box">
                                            <div class="box__item"><a href="">ファッションにこだわる</a></div>
                                            <div class="box__item"><a href="">食べ物にこだわる</a></div>
                                            <div class="box__item"><a href="">使い方にこだわる</a></div>
                                            <div class="box__item"><a href="">遊びにこだわる</a></div>
                                        </div>
                                        <h3 class="subheading">MENU</h3>
                                        <ul class="list">
                                            <li><a href="#">ホーム</a></li>
                                            <li><a href="#">イベント</a></li>
                                            <li><a href="#">ショップガイド</a></li>
                                            <li><a href="#">フロアガイド</a></li>
                                            <li><a href="#">アクセス</a></li>
                                            <li><a href="#">営業時間</a></li>
                                        </ul>
                                        <div class="bnr">
                                            <div class="bnr__item">
                                                <a href="" class="bnr__link">
                                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt="">
                                                </a>
                                            </div>
                                            <div class="bnr__item">
                                                <a href="" class="bnr__link">
                                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt="">
                                                </a>
                                            </div>
                                            <div class="bnr__item">
                                                <a href="" class="bnr__link">
                                                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="contact"><a href="#">お問合せ</a></div>
                                        <ul class="list-sub">
                                            <li class="list-sub__item">
                                                <a href="http://" class="list-sub__link">
                                                    <div class="i-insta">
                                                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png')); ?>" class="img" alt="">
                                                    </div>
                                                    <span class="i-insta__text">Instagram</span>
                                                </a>
                                            </li>
                                            <li class="list-sub__item">
                                                <a href="http://" class="list-sub__link">
                                                    <span class="list-sub__text">privacypolicy</span>
                                                </a>
                                            </li>
                                            <li class="list-sub__item">
                                                <a href="http://" class="list-sub__link">
                                                    <span class="list-sub__text">company</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <figure class="btm-left">
                                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png')); ?>" class="img" alt="">
                                    </figure>
                                    <figure class="btm-right">

                                    </figure>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <div class="toggle-btn">
                        <span></span>
                        <span></span>
                    </div>
                    <div class="mask"></div>
                    <div class="hamburger-text"><span>MENU</span><span>CLOSE</span></div>
                </div>
            </div>
        </div>
    </header>