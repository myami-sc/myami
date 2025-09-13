<footer>
    <div class="l-footer">
        <div class="l-footer__inner">
            <div class="l-footer__contact">
                <div class="l-footer-info">
                    <div class="l-footer-info__img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sc_img.jpg')); ?>" class="img" alt="">
                    </div>
                    <div class="l-footer-info__box">
                        <div class="logo">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="img" alt="">
                        </div>
                        <div class="address">
                            <span>〒305-xxx</span>
                        </div>
                        <div class="name">マイアミショッピングセンター<span></span></div>
                        <div class="open"><span>9:30～21:00</span></div>
                        <div class="tel"><span>029-xxx-xxx</span></div>
                    </div>
                </div>
                <div class="l-footer-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.8196469312143!2d140.20710376387828!3d36.0421572607344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60226da6a190b77f%3A0x697d7580c52a0598!2z44Oe44Kk44Ki44Of44K344On44OD44OU44Oz44Kw44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1755062814785!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3969.6206782652607!2d140.2071038!3d36.0421573!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60226da6a190b77f%3A0x697d7580c52a0598!2z44Oe44Kk44Ki44Of44K344On44OD44OU44Oz44Kw44K744Oz44K_44O8!5e1!3m2!1sja!2sjp!4v1755568622447!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
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