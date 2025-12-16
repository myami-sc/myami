<?php

/**
 * Template Name: shop single page
 */
?>

<?php get_template_part(slug: "parts/header"); ?>


<div class="page shop">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="page-body shop__body">
                <div class="p-inner">
                    <div class="shop__container">
                        <div class="shop__content"><?php the_content(); ?></div>
                        <div class="shop__bottom">
                            <h3 class="subheading">SHOP INFO</h3>
                            <p class="subheading-jp">店舗情報</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>フロア</th>
                                        <td>
                                            <?php
                                            $terms = get_the_terms($post->ID, 'shop_loc');
                                            if ($terms) :

                                                foreach ($terms as $term) {
                                                    echo '<p>' . $term->name . '</p>';
                                                }
                                            endif;
                                            ?>
                                            <span class="icon right"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_net2_b.png')); ?>" class="img" alt=""></span>
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
                                            <span class="icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_net2_b.png')); ?>" class="img" alt=""></span>
                                            <?php $tel = get_field('tel');
                                            if ($tel): ?>
                                                <a href="tel:+<?php echo $tel; ?>">
                                                    <?php echo $tel; ?>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>WEB</th>
                                        <td>
                                            <span class="icon"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_net2_b.png')); ?>" class="img" alt=""></span>
                                            <?php $web = get_field('web');
                                            if ($web): ?>
                                                <a href="<?php echo $web; ?>">
                                                    <?php echo $web; ?>
                                                </a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    <?php endwhile;
    endif; ?>
</div>

<?php get_template_part(slug: "parts/footer"); ?>