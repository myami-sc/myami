<?php

/**
 * Template Name: essentials page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-essentials">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <div class="essentials-container">
                        <div class="essentials-content"><?php the_content(); ?></div>
                        <div class="essentials-bottom">
                            <div class="btn"><a href="<?php echo esc_url(home_url('news-list')); ?>"><span>ENTRY</span></a></div>
                            <button class="btn02"><a href="<?php echo esc_url(home_url('recruit')); ?>"><span>一覧に戻る</span></a></button>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>