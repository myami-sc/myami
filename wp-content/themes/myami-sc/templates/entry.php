<?php

/**
 * Template Name: entry page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-entry">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body">
                <div class="p-inner">
                    <section>
                        <h2 class="r-title">イベントに関する</h2>

                    </section>
                    <section>
                        <h2 class="r-title">出店に関する</h2>

                    </section>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>