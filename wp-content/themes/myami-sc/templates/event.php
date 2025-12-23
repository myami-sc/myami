<?php

/**
 * Template Name: event page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">

                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>