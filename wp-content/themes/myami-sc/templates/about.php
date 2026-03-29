<?php

/**
 * Template Name: about page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-about">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <section>
                    <div class="parallax-box">
                        <img class="js-parallax-4 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" autoplay muted loop playsinline></img>
                        <div class="p-inner">
                            <h2 class="p-title js-fade-title">ABOUT US</h2>
                            <p class="p-subtitle js-fade-text">会社情報</p>
                        </div>
                    </div>
                </section>
                <section class="ab-main">
                    <div class="ab-main__left">
                        <div class="p-inner">
                            <h2 class="p-title">PROFILE</h2>
                            <p class="p-subtitle">会社概要</p>
                        </div>
                        <div class="parallax-box">
                            <img class="js-parallax-4 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" autoplay muted loop playsinline></img>
                        </div>
                    </div>
                    <div class="ab-main__right">
                        <ul>
                            <li>
                                <h3 class="subheading">商号</h3>
                                <p class="text">株式会社 阿見商業開発</p>
                            </li>
                            <li>
                                <h3 class="subheading">代表取締役</h3>
                                <p class="text">松元 光司</p>
                            </li>
                            <li>
                                <h3 class="subheading">所在地</h3>
                                <p class="text">茨城県稲敷郡阿見町阿見2958</p>
                            </li>
                            <li>
                                <h3 class="subheading">設立</h3>
                                <p class="text">昭和62年5月17日</p>
                            </li>
                            <li>
                                <h3 class="subheading">資本金</h3>
                                <p class="text">3,200万円</p>
                            </li>
                            <li>
                                <h3 class="subheading">株主</h3>
                                <p class="text">6名</p>
                            </li>
                            <li>
                                <h3 class="subheading">役員</h3>
                                <dl>
                                    <dt>代表取締役</dt>
                                    <dd>松元 光司</dd>
                                </dl>
                                <dl>
                                    <dt>取締役</dt>
                                    <dd>鳥羽 良太朗</dd>
                                </dl>
                                <dl>
                                    <dt>取締役</dt>
                                    <dd>山口 健太郎</dd>
                                </dl>
                                <dl>
                                    <dt>監査役</dt>
                                    <dd>朝岡 工晴</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </section>
                <section class="common-area">
                    <div class="p-inner">
                        <h2 class="p-title">OTHERS</h2>
                        <p class="p-subtitle">関連情報</p>
                    </div>
                    <div class="grid-column">
                        <div class="grid-column-list">
                            <article>
                                <a href="<?php echo esc_url(home_url('about/history')); ?>">
                                    <figure class="list-img"><img class="img" src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" autoplay muted loop playsinline></img></figure>
                                    <h3 class="list-title">沿革</h3>
                                    <span class="arrow"></span>
                                </a>
                            </article>
                            <article>
                                <a href="<?php echo esc_url(home_url('contact')); ?>">
                                    <figure class="list-img"><img class="img" src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" autoplay muted loop playsinline></img></figure>
                                    <h3 class="list-title">お問い合わせ</h3>
                                    <span class="arrow"></span>
                                </a>
                            </article>
                        </div>
                    </div>
                </section>
                <section class="mb">
                    <div class="flowing-ttl">
                        <div class="flowing-ttl__item">MAYAMI</div>
                        <div class="flowing-ttl__item">MAYAMI</div>
                        <div class="flowing-ttl__item">MAYAMI</div>
                        <div class="flowing-ttl__item">MAYAMI</div>
                        <div class="flowing-ttl__item">MAYAMI</div>
                    </div>
                    <div class="flowing-ttl reverse">
                        <div class="flowing-ttl__item">SHOPING CENTER</div>
                        <div class="flowing-ttl__item">SHOPING CENTER</div>
                        <div class="flowing-ttl__item">SHOPING CENTER</div>
                        <div class="flowing-ttl__item">SHOPING CENTER</div>
                        <div class="flowing-ttl__item">SHOPING CENTER</div>
                    </div>
                </section>
                <section class="ab-lower">
                    <div class="guide-area">
                        <a href="<?php echo esc_url(home_url('recruit')); ?>">
                            <div class="guide-area__wrap">
                                <div class="guide-area__left">
                                    <h2 class="guide-area__title">Recruit<span class="sp-icon --sp"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_arrow.png')); ?>" class="img" alt=""></span></h2>
                                    <p class="guide-area__description">人と街が集まる場所で、<br />
                                        毎日を支える仕事をしませんか。<br />
                                        <br />
                                        私たちのショッピングセンターは、<br />
                                        「買い物をする場所」だけでなく、<br />
                                        地域の方が安心して集える空間づくりを大切にしています。
                                    </p>
                                </div>
                                <div class="guide-area__right">
                                    <span class="guide-area__text marker">「採用情報」<br />あなたの気配りが、<br />この場所の“心地よさ”に<br class="--sp">なります。</span>
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo esc_url(home_url('space#store')); ?>">
                            <div class="guide-area__wrap">
                                <div class="guide-area__left">
                                    <h2 class="guide-area__title">Opening<br class="--sp"> a <br class="--sp">Store<span class="sp-icon --sp"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_arrow.png')); ?>" class="img" alt=""></span></h2>
                                    <p class="guide-area__description">地域に根差したショッピングセンターとして、<br class="--pc">
                                        当施設では法人様の出店を広く募集しております。<br />
                                        <br />
                                        物販・サービス・催事など、<br />
                                        さまざまな業種でご利用いただける環境を<br class="--pc">
                                        ご用意しております。
                                    </p>
                                </div>
                                <div class="guide-area__right">
                                    <span class="guide-area__text marker">「出店情報」<br />法人様を対象とした<br />出店事業者様を募集して<br class="--sp">おります。</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>