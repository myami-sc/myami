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
                        <div class="news-single__content"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>