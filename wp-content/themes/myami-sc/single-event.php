<?php

/**
 * Template Name: event single page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page event-single">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body event-single__body">
                <div class="event-single__container">
                    <div class="event-single__upper">
                        <h2 class="event-single__title">EVENTS</h2>
                        <?php
                        $date_url = eo_get_the_start('Y - m - d');
                        $date = '<span class="date">' . $date_url . '</span>';
                        $time_url = eo_get_schedule_start('g:i a') . ' - ' . eo_get_the_end('g:i a');
                        $time = '<span class="time">' . $time_url . '</span>';
                        $venue_name = eo_get_venue_name();
                        $venue = '<span class="location">' . $venue_name . '</span>';

                        echo '<div class="wrap">' . $date . $time . $venue . '</div>';
                        ?>
                        <h2 class="title"><?php the_title(); ?></h2>
                        <?php
                        $thumbnail_url = get_the_post_thumbnail_url();
                        $thumbnail = '<div class="thumbnail"><img class="img" src="' . $thumbnail_url . '" alt=""></div>';
                        echo $thumbnail
                        ?>
                    </div>
                    <div class="event-single__content">

                        <?php the_content(); ?>
                    </div>
                    <div class="event-single__bottom">
                        <h3 class="subheading">詳細</h3>
                        <div class="content">
                            <div class="detail --left">
                                <dl>
                                    <dt>日付：</dt>
                                    <dd>
                                        <?php echo eo_get_the_start('Y . m . d') . ' - ' . eo_get_the_end('Y . m . d'); ?>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>時間：</dt>
                                    <dd>
                                        <?php echo eo_get_schedule_start('g:i a') . ' - ' . eo_get_the_end('g:i a'); ?>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>場所：</dt>
                                    <dd>
                                        <?php echo eo_get_venue_name(); ?>
                                    </dd>
                                </dl>
                            </div>
                            <div class="detail --right">
                                <dl>
                                    <dd>
                                        <?php
                                        $venue = eo_get_venue_name();
                                        $location = esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png'));
                                        $location2 = esc_url(get_theme_file_uri('assets/images/sc_img_02.jpg'));
                                        $location3 = esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png'));


                                        if ($venue === "C入口丸柱") {
                                            echo '<img  class="img" src="' . $location . '" alt="">';
                                        }
                                        if ($venue === "ポケットパーク") {
                                            echo '<img  class="img" src="' . $location2 . '" alt="">';
                                        };

                                        ?>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>