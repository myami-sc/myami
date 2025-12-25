<?php get_template_part(slug: "parts/header"); ?>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="main">
			<div class="inner">
				<div class="kv">
					<?php get_template_part(slug: "parts/swiper/main-swiper"); ?>
				</div>
				<div class="scroll">
					<span>Scroll</span>
				</div>
			</div>
			<section class="section">
				<div class="s-slider-inner">
					<h2 class="s-title">Topics</h2>
					<div class="s-contents">
						<div class="s-item --slider">
							<h3 class="subheading">EVENT</h3>
							<?php get_template_part(slug: "parts/swiper/topics-swiper"); ?>
						</div>
					</div>
				</div>
				<div class="s-inner">
					<div class="s-contents">
						<div class="s-item --news">
							<div class="news-pickup">
								<h2 class="s-title js-fade-in">Pick Up</h2>
								<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 1,
									'category_name' => 'pick-up'
								);
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()) :
									echo '<a href="" class="n-p-link">';
									while ($the_query->have_posts()) : $the_query->the_post();
										echo '<div class="n-p-card js-fade-in">';

										if (has_post_thumbnail()) {
											the_post_thumbnail('thumbnail', array('class' => 'img'));
										} else {
											echo '<img src="' . esc_url(get_theme_file_uri('assets/images/logo.png')) . '" class="img" alt="画像">';
										}

										echo '<div class="description"><p class="title">' . get_the_title() . '</p><p class="date">' . get_the_date('Y.n.j') . '</p></div></div></a>';
									endwhile;
									echo '</ul>';
									wp_reset_postdata();
								endif;
								?>
								<div class="btn"><a href="<?php echo esc_url(home_url('news-list')); ?>"><span>一覧を見る</span></a></div>
							</div>
							<div class="news-wrap">
								<h3 class="subheading">NEWS　最新のお知らせ</h3>
								<?php
								$args = array(
									'post_type' => 'post',
									'posts_per_page' => 5,
									'post_status' => 'publish',
									'orderby' => 'date',
									'order' => 'DESC',
								);
								$the_query = new WP_Query($args);

								if ($the_query->have_posts()) :
									echo '<ul class="n-list">';
									while ($the_query->have_posts()) : $the_query->the_post();
										echo '<li class="n-list-item"><a href="' . get_permalink() . '" class="n-list-link"><span class="date">' . get_the_date('Y.n.j') . '</span>' . get_the_title() . '</a></li>';
									endwhile;
									echo '</ul>';
									wp_reset_postdata();
								else :
									echo '投稿が見つかりませんでした';
								endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="parallax-box">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="js-parallax img" alt="">
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
							</div>
							<div class="m-v-content">
								<h3 class="m-v-title --jp"><span>おしゃれ</span>をこだわる</h3>
								<p class="m-v-title --en">Particular<span>Meal</span></p>
							</div>
							<div class="btn"><a href=""><span>詳しく見る</span></a></div>
						</div>
					</div>
				</div>
				<div class="s-slider-inner">
					<div class="s-contents">
						<div class="s-item --slider">
							<?php get_template_part(slug: "parts/swiper/topics-swiper-fashion"); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
							</div>
							<div class="m-v-content">
								<h3 class="m-v-title --jp"><span>食べ物</span>をこだわる</h3>
								<p class="m-v-title --en">Particular<span>Meal</span></p>
							</div>
							<div class="btn"><a href=""><span>詳しく見る</span></a></div>
						</div>
					</div>
				</div>
				<div class="s-slider-inner">
					<div class="s-contents">
						<div class="s-item --slider">
							<?php get_template_part(slug: "parts/swiper/topics-swiper-food"); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="parallax-box">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="js-parallax-2 img" alt="">
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
							</div>
							<div class="m-v-content">
								<h3 class="m-v-title --jp"><span>遊び</span>をこだわる</h3>
								<p class="m-v-title --en">Particular<span>wear</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="s-slider-inner">
					<div class="s-contents">
						<div class="s-item --slider">
							<?php get_template_part(slug: "parts/swiper/topics-swiper-enjoy"); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
							</div>
							<div class="m-v-content">
								<h3 class="m-v-title --jp"><span>使い方</span>をこだわる</h3>
								<p class="m-v-title --en">Particular<span>wear</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="s-slider-inner">
					<div class="s-contents">
						<div class="s-item --slider">
							<?php get_template_part(slug: "parts/swiper/topics-swiper-lifestyle"); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="parallax-box">
					<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="js-parallax-3 img" alt="">
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="s-item">
							<div class="sns-grid">
								<div class="sns-grid__box">
									<h2 class="sns-title">Instagram</h2>
									<div class="sns-icon">
										<a href="http://">
											<img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png')); ?>" class="img" alt="">
										</a>
									</div>
									<div class="sns-belt">
										<a href="">
											<span>FOLLOW ME</span>
											<span>THANK YOU !!</span>
											<img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_cursor_w.png')); ?>" class="img" alt="">
											<img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_check_w.png')); ?>" class="img" alt="">
										</a>
									</div>
								</div>
								<div class="sns-grid__box">
									<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
	</div>
</div>

<?php get_template_part(slug: "parts/footer"); ?>