<div class="swiper-outer">
    <div class="swiper topics-swiper-fashion">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'post_type' => 'shop',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_cate',
                        'field' => 'slug',
                        'terms' => 'fashion',
                    ),
                )
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

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
                                <h3 class="subheading"><?php the_title(); ?></h3>
                                <p class="category">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'shop_cate');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo $term->name;
                                        }
                                    endif;
                                    ?>
                                </p>
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_loc');
                                if ($terms) :

                                    foreach ($terms as $term) {
                                        echo '<p class="location">' . $term->name . '</p>';
                                    }
                                endif;
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
    <div class="swiper-scrollbar swiper-scrollbar-fashion"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>