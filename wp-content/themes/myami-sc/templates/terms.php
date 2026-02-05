<?php

/**
 * Template Name: terms page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-terms">
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