<?php

/**
 * Template Name: shop list page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page shop-list">
    <div class="shop-list__left">
        <h2 class="shop-list__title">ショップリスト</h2>
        <div class="tab" id="tab">
            <ul class="tab-contena">
                <li class="tab-elem" data-tabid="tab-page1">すべて</li>
                <li class="tab-elem" data-tabid="tab-page2">ファッション</li>
                <li class="tab-elem" data-tabid="tab-page3">フード</li>
                <li class="tab-elem" data-tabid="tab-page4">ライフスタイル</li>
                <li class="tab-elem" data-tabid="tab-page5">エンジョイ</li>
            </ul>
        </div>
    </div>
    <div id="tabbody" class="tabbody">
        <div class="tabbody-elem" id="tab-page1">
            <div class="page-body shop-list__body">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="shop-list__item">
                            <a class="shop-list__link" href="<?php the_permalink(); ?>">
                                <div class="shop-list__img">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('full');
                                    } ?>
                                </div>
                            </a>
                            <div class="shop-list__content">
                                <h3 class="subheading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="category">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'shop_cate');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo '<a href="' . get_permalink() . '">' . $term->name . '</a>';
                                        }
                                    endif;
                                    ?>
                                </p>
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_loc');
                                if ($terms) :

                                    foreach ($terms as $term) {
                                        echo '<p class="location"><a href="' . get_permalink() . '">' . $term->name . '</a></p>';
                                    }
                                endif;
                                ?>
                                <a href="<?php the_permalink(); ?>" class="detail">店舗詳細を見る<span class="icon">→</span></a>
                            </div>
                        </div>
                    <?php endwhile; ?>

                    <?php the_posts_navigation(); ?>

                <?php else : ?>
                    <p>現在、テナントはありません。</p>
                <?php endif; ?>

            </div>
        </div>
        <div class="tabbody-elem" id="tab-page2">
            <?php
            $args = array(
                'post_type' => 'shop',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_cate',
                        'field' => 'slug',
                        'terms' => 'fashion',
                        'operator' => 'IN'
                    ),
                )
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="shop-list__item">
                        <a class="shop-list__link" href="<?php the_permalink(); ?>">
                            <div class="shop-list__img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                        </a>
                        <div class="shop-list__content">
                            <h3 class="subheading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="category">
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_cate');
                                if ($terms) :
                                    foreach ($terms as $term) {
                                        echo '<a href="' . get_permalink() . '">' . $term->name . '</a>';
                                    }
                                endif;
                                ?>
                            </p>
                            <?php
                            $terms = get_the_terms($post->ID, 'shop_loc');
                            if ($terms) :

                                foreach ($terms as $term) {
                                    echo '<p class="location"><a href="' . get_permalink() . '">' . $term->name . '</a></p>';
                                }
                            endif;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="detail">店舗詳細を見る<span class="icon">→</span></a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在、テナントはありません。</p>
            <?php endif;
            ?>
        </div>
        <div class="tabbody-elem" id="tab-page3">
            <?php
            $args = array(
                'post_type' => 'shop',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_cate',
                        'field' => 'slug',
                        'terms' => 'food',
                        'operator' => 'IN'
                    ),
                )
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="shop-list__item">
                        <a class="shop-list__link" href="<?php the_permalink(); ?>">
                            <div class="shop-list__img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                        </a>
                        <div class="shop-list__content">
                            <h3 class="subheading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="category">
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_cate');
                                if ($terms) :
                                    foreach ($terms as $term) {
                                        echo '<a href="' . get_permalink() . '">' . $term->name . '</a>';
                                    }
                                endif;
                                ?>
                            </p>
                            <?php
                            $terms = get_the_terms($post->ID, 'shop_loc');
                            if ($terms) :

                                foreach ($terms as $term) {
                                    echo '<p class="location"><a href="' . get_permalink() . '">' . $term->name . '</a></p>';
                                }
                            endif;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="detail">店舗詳細を見る<span class="icon">→</span></a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在、テナントはありません。</p>
            <?php endif;
            ?>
        </div>
        <div class="tabbody-elem" id="tab-page4">
            <?php
            $args = array(
                'post_type' => 'shop',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_cate',
                        'field' => 'slug',
                        'terms' => 'usage',
                        'operator' => 'IN'
                    ),
                )
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="shop-list__item">
                        <a class="shop-list__link" href="<?php the_permalink(); ?>">
                            <div class="shop-list__img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                        </a>
                        <div class="shop-list__content">
                            <h3 class="subheading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="category">
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_cate');
                                if ($terms) :
                                    foreach ($terms as $term) {
                                        echo '<a href="' . get_permalink() . '">' . $term->name . '</a>';
                                    }
                                endif;
                                ?>
                            </p>
                            <?php
                            $terms = get_the_terms($post->ID, 'shop_loc');
                            if ($terms) :

                                foreach ($terms as $term) {
                                    echo '<p class="location"><a href="' . get_permalink() . '">' . $term->name . '</a></p>';
                                }
                            endif;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="detail">店舗詳細を見る<span class="icon">→</span></a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在、テナントはありません。</p>
            <?php endif;
            ?>
        </div>
        <div class="tabbody-elem" id="tab-page5">
            <?php
            $args = array(
                'post_type' => 'shop',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'shop_cate',
                        'field' => 'slug',
                        'terms' => 'enjoy',
                        'operator' => 'IN'
                    ),
                )
            );

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="shop-list__item">
                        <a class="shop-list__link" href="<?php the_permalink(); ?>">
                            <div class="shop-list__img">
                                <?php if (has_post_thumbnail()) {
                                    the_post_thumbnail('full');
                                } ?>
                            </div>
                        </a>
                        <div class="shop-list__content">
                            <h3 class="subheading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p class="category">
                                <?php
                                $terms = get_the_terms($post->ID, 'shop_cate');
                                if ($terms) :
                                    foreach ($terms as $term) {
                                        echo '<a href="' . get_permalink() . '">' . $term->name . '</a>';
                                    }
                                endif;
                                ?>
                            </p>
                            <?php
                            $terms = get_the_terms($post->ID, 'shop_loc');
                            if ($terms) :

                                foreach ($terms as $term) {
                                    echo '<p class="location"><a href="' . get_permalink() . '">' . $term->name . '</a></p>';
                                }
                            endif;
                            ?>
                            <a href="<?php the_permalink(); ?>" class="detail">店舗詳細を見る<span class="icon">→</span></a>
                        </div>
                    </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p>現在、テナントはありません。</p>
            <?php endif;
            ?>
        </div>
    </div>
</div>

<?php get_template_part(slug: "parts/footer"); ?>