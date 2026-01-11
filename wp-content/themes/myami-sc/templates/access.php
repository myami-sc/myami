<?php

/**
 * Template Name: access page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-access">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="a-bg">
            </div>
            <section class="a-main">
                <div class="a-main__left">
                    <h2 class="p-title">Access</h2>
                    <p class="p-subtitle">交通アクセス</p>

                    <ul class="anchor-link">
                        <li><a href="#google" onclick="lenis.scrollTo('#google'); return false;">GoogleMap</a></li>
                        <li><a href="#gallery" onclick="lenis.scrollTo('#gallery'); return false;">周辺イメージ</a></li>
                        <li><a href="#others" onclick="lenis.scrollTo('#others'); return false;">電車・バス</a></li>
                    </ul>
                </div>
                <div class="a-main__right">
                    <figure>
                        <figcaption>
                            <span>マイアミSCは、<br />東京や水戸から１時間。<br />ICからも近く、<br />アクセスのしやすい<br />場所にございます。</span>
                        </figcaption>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                    </figure>
                </div>
            </section>
            <section class="a-map" id="google">
                <div class="a-map__img">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.1026579286386!2d140.20746397635477!3d36.04220041005988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60226da6a190b77f%3A0x697d7580c52a0598!2z44Oe44Kk44Ki44Of44K344On44OD44OU44Oz44Kw44K744Oz44K_44O8!5e0!3m2!1sja!2sjp!4v1766713688373!5m2!1sja!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="a-map__info">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="logo img" alt="マイアミショッピングセンターロゴ">
                    <p class="logo-kana">マイアミショッピングセンター</p>
                    <p class="address"><span>&#8376;300-0331</span>茨城県稲敷郡阿見町阿見2222</p>
                    <div class="btn"><a href="https://maps.app.goo.gl/orfqHzZt5Ux5U8rf6" target="_blank"><span class="icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_map_pin.png')); ?>" class="img" alt=""></span><span class="text">GoogleMapで見る</span></a></div>
                </div>
            </section>
            <section class="a-gallery" id="gallery">
                <div class="area">
                    <figure class="b-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                        <figcaption>
                            <span>駐車場入り口 &#9312;</span>
                        </figcaption>
                    </figure>
                    <figure class="s-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                    </figure>
                    <figure class="s-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                    </figure>
                </div>
                <div class="area">
                    <figure class="b-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                        <figcaption>
                            <span>駐車場入り口 &#9313;</span>
                        </figcaption>
                    </figure>
                    <figure class="m-img">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                    </figure>
                </div>
            </section>
            <section class="a-info" id="others">
                <ul class="list">
                    <li class="item js-hover-item --current">
                        <div class="item-inner">
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
                            </figure>
                            <figcaption>車でお越しの場合</figcaption>
                            <div class="detail">
                                <div class="parking">
                                    <p>駐車のご案内</p>
                                    <dl>
                                        <dt><span class="icon">P</span>お客様用駐車場</dt>
                                        <dd>年中</dd>
                                        <dd><span class="decoration">終日無料</span></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item js-hover-item">
                        <div class="item-inner">
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="">
                            </figure>
                            <figcaption>電車でお越し場合</figcaption>
                            <div class="detail">
                                <div class="parking">
                                    <p>駐車のご案内</p>
                                    <dl>
                                        <dt><span class="icon">P</span>お客様用駐車場</dt>
                                        <dd>年中</dd>
                                        <dd><span class="free">終日無料</span></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="item js-hover-item">
                        <div class="item-inner">
                            <figure>
                                <img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="">
                            </figure>
                            <figcaption>バスでお越しの場合</figcaption>
                            <div class="detail">
                                <div class="parking">
                                    <p>駐車のご案内</p>
                                    <dl>
                                        <dt><span class="icon">P</span>お客様用駐車場</dt>
                                        <dd>年中</dd>
                                        <dd><span class="free">終日無料</span></dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </section>
            <section>
                <div class="parallax-box">
                    <img class="js-parallax-4 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" autoplay muted loop playsinline></img>
                    <p>みなさまのお越しを<br />心よりお待ちしております。<br />気をつけてお越しくださいませ。</p>
                </div>
            </section>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>