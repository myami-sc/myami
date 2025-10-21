<?php

/**
 * Template Name: shop page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page shop">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body shop__body">
                <div class="p-inner">
                    <div class="shop__container">
                        <div class="shop__upper"></div>
                        <div class="shop__content">shop</div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>