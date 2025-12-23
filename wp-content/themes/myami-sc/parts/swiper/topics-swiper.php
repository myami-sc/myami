<div class="swiper-outer">
    <div class="swiper topics-swiper">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type'      => 'tribe_events',
                'post_status'  => 'publish',
                'posts_per_page' => 5,
                'meta_key' => '_EventStartDate',
                'orderby' => '_EventStartDate',
                'order' => 'DESC',
                'eventDisplay' => 'custom'
            );

            $events_query = new WP_Query($args);
            if ($events_query->have_posts()) : while ($events_query->have_posts()) : $events_query->the_post(); ?>

                    <div class="swiper-slide">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <div class="thumbnail">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('thumbnail', array('class' => 'img'));
                                } else {
                                    echo '<img src="' . esc_url(get_theme_file_uri('assets/images/logo.png')) . '" class="img" alt="画像">';
                                }
                                ?>
                            </div>
                            <div class="content">
                                <?php
                                $cats = get_the_category();
                                if ($cats) {
                                    foreach ($cats as $cat) {
                                        echo '<span class="cate">' . $cat->cat_name . '</span>';
                                    }
                                }
                                ?>
                                <span class="date"><?php echo get_the_date('Y.n.j'); ?></span>
                                <h3 class="subheading"><?php the_title(); ?></h3>
                                <?php $tags = get_the_tags();
                                if ($tags) {
                                    foreach ($tags as $tag) {
                                        echo '<p class="tag">' . $tag->name . '</p>';
                                    }
                                }
                                ?>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif;
            ?>
        </div>
    </div>
    <div class="swiper-scrollbar swiper-scrollbar-topics"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>