<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');
            wp_title('|', true, 'left'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/colorbox.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.3/dist/lenis.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php $header_class = is_front_page() ? 'l-header --top' : 'l-header'; ?>

    <header class="<?php echo $header_class; ?>" id="header">
        <div class="l-header__inner">

            <?php
            $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div';
            ?>

            <?php echo '<' . $html_tag . ' class="l-header-logo">'; ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="l-header-logo__link">
                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="l-header-logo__img img" alt="マイアミショッピングセンターロゴ">
            </a>
            <?php echo '</' . $html_tag . '>'; ?>
            <?php if (is_front_page()) : ?>
                <div class="l-header__news">
                    <h2 class="subheading">NEWS</h2>
                    <div class="marquee">
                        <div class="marquee__track">

                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 1,
                                'category_name' => 'news'
                            );

                            $the_query = new WP_Query($args);

                            if ($the_query->have_posts()) :
                                while ($the_query->have_posts()) : $the_query->the_post();
                            ?>

                                    <a href="<?php the_permalink(); ?>" class="marquee__item">
                                        <?php the_title(); ?>（<?php echo get_the_date('Y年n月j日'); ?>）
                                    </a>

                            <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <div class="l-header__menu">

                <nav class="l-header-nav" id="js-h-nav">
                    <ul class="l-header-nav__list">

                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('events')); ?>" class="l-header-nav__link --event">
                                <span class="text">イベント情報</span>
                            </a>
                        </li>

                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('floor')); ?>" class="l-header-nav__link --floor">
                                <span class="text">フロアガイド</span>
                            </a>
                        </li>

                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-header-nav__link --shop">
                                <span class="text">ショップリスト</span>
                            </a>
                        </li>

                        <li class="l-header-nav__item">
                            <a href="<?php echo esc_url(home_url('access')); ?>" class="l-header-nav__link --access">
                                <span class="text">アクセス</span>
                            </a>
                        </li>

                    </ul>
                </nav>

                <div class="hamburger --current" id="js-hamburger">

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
                                            <div class="box__item"><a href="#">ファッションにこだわる</a></div>
                                            <div class="box__item"><a href="#">食べ物にこだわる</a></div>
                                            <div class="box__item"><a href="#">使い方にこだわる</a></div>
                                            <div class="box__item"><a href="#">遊びにこだわる</a></div>
                                        </div>

                                        <h3 class="subheading">MENU</h3>

                                        <ul class="list">
                                            <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
                                            <li><a href="<?php echo esc_url(home_url('news-list')); ?>">ニュース</a></li>
                                            <li><a href="<?php echo esc_url(home_url('events')); ?>">イベント</a></li>
                                            <li><a href="<?php echo esc_url(home_url('shop')); ?>">ショップガイド</a></li>
                                            <li><a href="<?php echo esc_url(home_url('floor')); ?>">フロアガイド</a></li>
                                            <li><a href="<?php echo esc_url(home_url('access')); ?>">アクセス</a></li>
                                        </ul>
                                        <div class="bnr">
                                            <div class="bnr__item"> <a href="" class="bnr__link"> <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt=""> </a> </div>
                                            <div class="bnr__item"> <a href="" class="bnr__link"> <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt=""> </a> </div>
                                            <div class="bnr__item"> <a href="" class="bnr__link"> <img src="<?php echo esc_url(get_theme_file_uri('assets/images/bnr/bnr_img_01.png')); ?>" class="img" alt=""> </a> </div>
                                        </div>
                                        <div class="btn02">
                                            <a href="<?php echo esc_url(home_url('contact')); ?>">お問合せ</a>
                                        </div>

                                        <div class="hours">
                                            <p class="h-ttl">営業時間</p>
                                            <p class="h-txt">9：00 - 21：00</p>
                                        </div>

                                        <ul class="list-sub">

                                            <li class="list-sub__item">
                                                <a href="https://www.instagram.com/myami__sc/" class="list-sub__link">
                                                    <div class="i-link">
                                                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png')); ?>" class="img" alt="">
                                                    </div>
                                                    <span class="i-link__text">Instagram</span>
                                                </a>
                                            </li>

                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('recruit')); ?>" class="list-sub__link">
                                                    <span class="list-sub__text">採用情報</span>
                                                </a>
                                            </li>

                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('about')); ?>" class="list-sub__link">
                                                    <span class="list-sub__text">会社概要</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="list-sub">
                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('privacy')); ?>" class="list-sub__link"> <span class="list-sub__text">プライバシーポリシー</span>
                                                </a>
                                            </li>
                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('terms')); ?>" class="list-sub__link"> <span class="list-sub__text">サイト利用規約</span>
                                                </a>
                                            </li>
                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('entry')); ?>" class="list-sub__link"> <span class="list-sub__text">イベント申込み</span>
                                                </a>
                                            </li>
                                            <li class="list-sub__item">
                                                <a href="<?php echo esc_url(home_url('space#store')); ?>" class="list-sub__link"> <span class="list-sub__text">出店情報</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </nav>

                    <div class="toggle-btn">
                        <span></span>
                        <span></span>
                    </div>

                    <div class="mask"></div>

                    <div class="hamburger-text">
                        <span>MENU</span>
                        <span>CLOSE</span>
                    </div>

                </div>

            </div>
        </div>
    </header>