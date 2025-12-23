<?php

/**
 * Template Name: news single page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page news-single">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body news-single__body">
                <div class="p-inner">
                    <div class="news-single__container">
                        <div class="news-single__upper">
                            <div class="content">
                                <span class="date"><?php echo get_the_date('Y.n.j'); ?></span>
                                <?php
                                $cats = get_the_category();
                                if ($cats) {
                                    foreach ($cats as $cat) {
                                        echo '<span class="cate">' . $cat->cat_name . '</span>';
                                    }
                                }
                                ?>
                            </div>
                            <h2 class="title"><?php the_title(); ?></h2>
                        </div>
                        <div class="news-single__content"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>