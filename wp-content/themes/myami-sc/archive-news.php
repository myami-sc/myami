<?php

/**
 * Template Name: news archive page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>
<div class="news-list-page">
    <h2 class="news-list-page__title">NEWS</h2>
    <div class="news-list">
        <ul class="news-list__tab">
            <li class="news-list__tab-item"><a href="<?php echo esc_url(home_url('news-list')); ?>" class="news-list__tab-link">すべて</a></li>
            <li class="news-list__tab-item --current"><a href="<?php echo esc_url(home_url('news-list/news')); ?>" class="news-list__tab-link">ニュース</a></li>
            <li class="news-list__tab-item"><a href="<?php echo esc_url(home_url('news-list/shop-news')); ?>" class="news-list__tab-link">ショップニュース</a></li>
        </ul>
        <div class="news-list__body">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -3,
                'paged' => $paged,
                'category_name' => 'news'
            );
            $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()): ?>
                    <?php $the_query->the_post(); ?>

                    <div class="news-list__item">
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
            <?php endif; ?>
            <div class="pagination">
                <?php
                if ($the_query->max_num_pages > 1) {
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%/',
                        'current' => max(1, $paged),
                        'mid_size' => 1,
                        'total' => $the_query->max_num_pages
                    ));
                }
                wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_template_part(slug: "parts/footer"); ?>