<?php

/**
 * Template Name: access page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <h2 class="p-title">Access Guide</h2>
                    <p class="p-subtitle">アクセスガイド</p>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>