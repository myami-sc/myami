<?php

/**
 * Template Name: 404 page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page-404">
    <img src="<?php echo esc_url(get_theme_file_uri('assets/images/sc_mascot.png')); ?>" class="img" alt="マイアミショッピングセンターマスコット" data-no-lazy="1" data-skip-lazy="1">
    <h1>404 NOT FOUND</h1>
    <h2>Page is not found</h2>
    <p>申し訳ございません。<br />お探しのページは見つかりませんでした。</p>
    <div class="btn02">
        <a href="<?php echo esc_url(home_url('/')); ?>">TOPへ戻る</a>
    </div>
</div>