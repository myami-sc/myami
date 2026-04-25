<?php

/**
 * Template Name: shop single page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page shop-single">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body shop-single__body">
                <div class="p-inner">
                    <div class="shop-single__container">
                        <h2 class="shop-single__title"><?php the_title(); ?></h2>
                        <div class="shop-single__content"><?php the_content(); ?></div>
                        <div class="shop-single__bottom">
                            <h3 class="subheading">SHOP INFO</h3>
                            <p class="subheading-jp">店舗情報</p>
                            <div class="shop-info">
                                <div class="thumbnail">
                                    <?php if (has_post_thumbnail()) the_post_thumbnail('full'); ?>
                                </div>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>フロア</th>
                                            <td>
                                                <div class="icon-area">
                                                    <?php
                                                    $terms = get_the_terms($post->ID, 'shop_loc');
                                                    if ($terms) :

                                                        foreach ($terms as $term) {
                                                            echo '<span>' . $term->name . '</span>';
                                                        }
                                                    endif;
                                                    ?>
                                                    <span class="icon right"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_pin.png')); ?>" class="img" alt="フロアピンアイコン"></span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>カテゴリー</th>
                                            <td>
                                                <?php
                                                $terms = get_the_terms($post->ID, 'shop_cate');
                                                if ($terms) :
                                                    foreach ($terms as $term) {
                                                        echo $term->name;
                                                    }
                                                endif;
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>営業時間</th>
                                            <td>
                                                <?php $time = get_field('time');
                                                if ($time): ?>
                                                    <?php echo $time; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>定休日</th>
                                            <td>
                                                <?php $day_off = get_field('day_off');
                                                if ($day_off): ?>
                                                    <?php echo $day_off; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>電話番号</th>
                                            <td>
                                                <div class="icon-area">
                                                    <?php $tel = get_field('tel');
                                                    if ($tel): ?>
                                                        <a href="tel:+<?php echo $tel; ?>">
                                                            <?php echo $tel; ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>提供サービス</th>
                                            <td>
                                                <?php $offer = get_field('offer');
                                                if ($offer): ?>
                                                    <?php echo $offer; ?>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>WEB</th>
                                            <td>
                                                <div class="icon-area">
                                                    <span class="icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_net2_b.png')); ?>" class="img" alt="インターネットアイコン"></span>
                                                    <?php $web = get_field('web');
                                                    if ($web): ?>
                                                        <a href="<?php echo $web; ?>" target="_blank">
                                                            <?php echo $web; ?>
                                                        </a>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>