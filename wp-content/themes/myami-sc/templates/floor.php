<?php

/**
 * Template Name: floor page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-floor">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <h2 class="p-title">Floor Guide</h2>
                    <p class="p-subtitle">フロアガイド</p>
                    <div class="floor-container">
                        <?php
                        $page = get_post(12);

                        if ($page) {

                            $page_content = apply_filters('the_content', $page->post_content);

                            if (preg_match_all('/<img[^>]+src="([^"]+)"[^>]*>/i', $page_content, $matches)) {

                                foreach ($matches[1] as $index => $url) {

                                    $floor = $index + 1;
                        ?>
                                    <div class="floor-item">
                                        <h3 class="subheading">
                                            <span class="icon"><?php echo $floor; ?>F</span>Map
                                        </h3>
                                        <div class="figure">
                                            <img src="<?php echo esc_url($url); ?>" class="img colorbox-img" alt="<?php echo $floor; ?>F フロアマップ">
                                            <div class="figcaption">
                                                <div class="guid-icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_full_screen02.png')); ?>" class="img" alt=""></div>
                                                <p class="guid-txt">拡大する</p>
                                            </div>
                                        </div>
                                    </div>
                        <?php
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>