<?php

/**
 * Template Name: max default block page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="max-default-block">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <?php the_content() ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>