<?php

/**
 * Template Name: entry page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-entry">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <div class="entry-info">
                        <h2 class="subheading">EVENT NEWS</h2>
                        <div class="marquee">
                            <div class="marquee__track">

                                <?php
                                $args = array(
                                    'post_type' => 'e-info',
                                    'posts_per_page' => 1
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
                    <section class="entry-upper">
                        <div class="left">
                            <h2 class="entry-title"><span class="sub">催事・イベントに関するお問い合わせ</span>ENTRY</h2>
                            <p class="text">イベントのお問い合わせは、メールにて承っております。<br />
                                <a href="<?php echo esc_url(home_url('events/guide')); ?>"><span>お問い合わせ方法</span></a>を必ずお読みいただいてから、お問い合わせください。<br />
                                3営業日以内（土日祝日を除く）に、担当者よりメールにて返信させていただきます。<br />
                                ※ご提供いただきましたお客様の個人情報は、お問い合わせの目的のみで利用します。
                            </p>
                            <div class="link-area">
                                <button><a href="<?php echo esc_url(home_url('events/guide')); ?>"><span>お問い合わせ方法</span></a></button>
                                <button><a href="<?php echo esc_url(home_url('events/space')); ?>"><span>募集スペース</span></a></button>
                                <button><a href="<?php echo esc_url(home_url('events/file')); ?>"><span>申請書類</span></a></button>
                            </div>
                        </div>
                        <div class="right">
                            <img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_e_contact.png')); ?>" class="img fluffy" alt="">
                        </div>
                    </section>
                    <section class="entry-lower">
                        <?php the_content() ?>
                    </section>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>