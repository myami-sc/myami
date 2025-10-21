<?php

/**
 * Template Name: floor page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <h2 class="p-title">Floor Guide</h2>
                    <p class="p-subtitle">フロアガイド</p>
                    <?php
                    $page_id = 12;
                    $page_content = get_the_content('', false, $page_id);
                    $image_urls = array();

                    if (preg_match_all('/<img[^>]+src="([^"]+)"[^>]*>/i', $page_content, $matches)) {
                        $image_urls = $matches[1];
                    }

                    foreach ($image_urls as $url) {
                        echo '<div class="figure">';
                        echo '<img src="' . esc_url($url) . '" class="img colorbox-img" alt="画像">';
                        echo '</div>';
                    }

                    ?>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>