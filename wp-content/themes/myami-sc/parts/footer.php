<footer>
    <div class="l-footer">
        <div class="l-footer__inner">
            <div class="l-footer__contact">
                <div class="l-footer-info">
                    <div class="l-footer-info__box">
                        <div class="logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="img" alt="">
                        </div>
                        <div class="name"><span>マイアミショッピングセンター</span></div>
                        <div class="address">
                            <span class="post">〒300-0331</span>
                            <span>茨城県稲敷郡阿見町大字阿見2958</span>
                        </div>
                        <div class="open"><span>9:30～21:00</span></div>
                    </div>
                </div>
                <div class="l-footer-gallery">
                    <div class="l-footer-gallery__box">
                        <div class="l-footer-gallery__item"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt=""></div>
                        <div class="l-footer-gallery__item"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_02.jpg')); ?>" class="img" alt=""></div>
                        <div class="l-footer-gallery__item"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt=""></div>
                        <div class="l-footer-gallery__item"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="img" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="l-footer__menu">
                <nav class="l-footer-nav">
                    <ul class="l-footer-nav__list">
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('event')); ?>" class="l-footer-nav__link --event"><span class="l-footer-nav__text">会社概要</span></a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('floor')); ?>" class="l-footer-nav__link --floor"><span class="l-footer-nav__text">プライバシーポリシー</span></a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('access')); ?>" class="l-footer-nav__link --access"><span class="l-footer-nav__text">サイト利用規約</span></a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-footer-nav__link --shop"><span class="l-footer-nav__text">採用情報</span></a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-footer-nav__link --shop"><span class="l-footer-nav__text">イベント募集</span></a>
                        </li>
                        <li class="l-footer-nav__item">
                            <a href="<?php echo esc_url(home_url('shop')); ?>" class="l-footer-nav__link --shop"><span class="l-footer-nav__text">お問い合わせ</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <p class="l-footer__copyright">&copy; Mayami Shopping Center. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>