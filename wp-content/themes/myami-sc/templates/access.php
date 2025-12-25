<?php

/**
 * Template Name: access page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="a-bg">
            </div>
            <div class="a-main">
                <h2 class="p-title">Access</h2>
                <p class="p-subtitle">交通アクセス</p>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>