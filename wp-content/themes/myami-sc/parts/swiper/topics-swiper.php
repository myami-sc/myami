<div class="swiper-outer">
    <div class="swiper topics-swiper">
        <div class="swiper-wrapper">
            <?php
            $events = eo_get_events(array(
                'numberposts'      => 5,
                'showpastevents'   => true,
                'orderby'          => 'eventstart',
                'order'            => 'ASC'
            ));

            if ($events) :
                foreach ($events as $post) :
                    setup_postdata($post);
            ?>
                    <div class="swiper-slide">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="thumbnail">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', array('class' => 'img'));
                                } else {
                                    echo '<img src="' . esc_url(get_theme_file_uri('assets/images/logo.png')) . '" class="img">';
                                }
                                ?>
                            </div>
                            <div class="content">
                                <?php
                                $cats = get_the_terms(get_the_ID(), 'event-category');
                                if ($cats) {
                                    foreach ($cats as $cat) {
                                        echo '<span class="cate">' . esc_html($cat->name) . '</span>';
                                    }
                                }
                                ?>
                                <span class="date">
                                    <?php
                                    $start = eo_get_the_start('Ymd');
                                    $end   = eo_get_the_end('Ymd');

                                    if ($start === $end) {
                                        echo eo_get_the_start('Y.n.j (D)');
                                    } else {
                                        echo eo_get_the_start('Y.n.j (D)') . ' - ' . eo_get_the_end('Y.n.j (D)');
                                    }
                                    ?>
                                </span>
                                <h3 class="subheading"><?php the_title(); ?></h3>
                                <?php if (eo_get_venue()) { ?>
                                    <p class="venue"><?php eo_venue_name(); ?></p>
                                <?php } ?>
                            </div>
                        </a>
                    </div>
            <?php
                endforeach;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
    <div class="swiper-scrollbar swiper-scrollbar-topics"></div>
    <div class="swiper-button-prev topics-prev"></div>
    <div class="swiper-button-next topics-next"></div>
</div>