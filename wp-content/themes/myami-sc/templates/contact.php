<?php

/**
 * Template Name: contact page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-contact">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <section class="c-block">
                        <div class="guide-area --bg-color">
                            <a href="<?php echo esc_url(home_url('recruit/r-form')); ?>">
                                <div class="guide-area__wrap">
                                    <div class="guide-area__left">
                                        <h2 class="guide-area__title">Recruit Form</h2>
                                        <p class="guide-area__description">採用についてのお問い合わせはこちら</p>
                                    </div>
                                    <div class="button">
                                        <span>recruit</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section class="c-block">
                        <div class="guide-area">
                            <a href="<?php echo esc_url(home_url('events/entry')); ?>">
                                <div class="guide-area__wrap">
                                    <div class="guide-area__left">
                                        <h2 class="guide-area__title">Event Entry</h2>
                                        <p class="guide-area__description">イベント出店についてのお問い合わせはこちら</p>
                                    </div>
                                    <div class="button">
                                        <span>event</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                    <section class="c-block">
                        <div class="guide-area --bg-color">
                            <a href="<?php echo esc_url(home_url('contact/form')); ?>">
                                <div class="guide-area__wrap">
                                    <div class="guide-area__left">
                                        <h2 class="guide-area__title">Contact Form</h2>
                                        <p class="guide-area__description">館内や施設に関してのお問い合わせはこちら</p>
                                    </div>
                                    <div class="button">
                                        <span>contact</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>