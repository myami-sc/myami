<?php

/**
 * Template Name: recruit page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-recruit">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="recruit-upper">
                    <div class="p-title">
                        <h2 class="en">RECRUIT</h2>
                        <p class="jp">採用情報</p>
                    </div>
                    <div class="gallery">
                        <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt=""></div>
                        <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_02.jpg')); ?>" class="img" alt=""></div>
                        <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt=""></div>
                        <div class="figure"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="img" alt=""></div>
                    </div>
                </div>
                <div class="recruit-middle">
                    <h2 class="r-title">地域に愛される場所を、一緒につくる仲間を募集しています。</h2>
                    <p class="description">お客様対応からご要望まで、柔軟に伺い、お客様満足度を高める。<br />そんな私たちの仲間を募集しています。みなさまのご応募、心よりお待ち致します。</p>
                    <div class="r-link-list">
                        <div class="r-item --r01"><a href="<?php echo esc_url(home_url('recruit/essentials01')); ?>"><span>サービスカウンター</span></a></div>
                        <div class="r-item --r02"><a href="<?php echo esc_url(home_url('recruit/essentials02')); ?>"><span>施設警備員</span></a></div>
                        <div class="r-item --r03"><a href="<?php echo esc_url(home_url('recruit/essentials03')); ?>"><span>館内清掃員</span></a></div>
                        <div class="r-item --r04"><a href="<?php echo esc_url(home_url('recruit/essentials04')); ?>"><span>経理事務</span></a></div>
                    </div>
                    <div class="r-link-list --full">
                        <div class="r-item --r05"><a href="<?php echo esc_url(home_url('events')); ?>"><span>MESSAGE</span></a></div>
                    </div>
                    <div class="r-link-list --full">
                        <div class="r-item --r06"><a href="<?php echo esc_url(home_url('events')); ?>"><span>テナント求人募集一覧</span></a></div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>