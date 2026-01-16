<?php get_template_part(slug: "parts/header"); ?>

<div id="smooth-wrapper">
	<div id="smooth-content">
		<main class="main">
			<section class="t-kv">
				<div class="inner">
					<div class="kv">
						<?php get_template_part(slug: "parts/swiper/main-swiper"); ?>
					</div>
					<div class="scroll">
						<span>Scroll</span>
					</div>
				</div>
			</section>
			<section class="section --overlap">
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
										echo '<div class="n-p-card js-fade-in"><div class="thumbnail">';

										if (has_post_thumbnail()) {
											the_post_thumbnail('thumbnail', array('class' => 'img'));
										} else {
											echo '<img src="' . esc_url(get_theme_file_uri('assets/images/logo.png')) . '" class="img" alt="画像">';
										}

										echo '</div><div class="description"><p class="title">' . get_the_title() . '</p><p class="date">' . get_the_date('Y.n.j') . '</p></div></div></a>';
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
										echo '<li class="n-list-item"><span class="date">' . get_the_date('Y.n.j') . '</span><a href="' . get_permalink() . '" class="n-list-link">' . get_the_title() . '</a></li>';
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
					<video class="js-parallax img" src="<?php echo esc_url(get_theme_file_uri('assets/images/video/tbgv03.mp4')); ?>" autoplay muted loop playsinline></video>
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>衣・着るものにこだわる（動画を流す）</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>食・食べ物にこだわる（静止画）</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>事・使い方にこだわる（静止画）</span></div>
									</div>
								</a>
							</div>

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
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>食・食べ物にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>事・使い方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>遊・遊び方にこだわる</span></div>
									</div>
								</a>
							</div>
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
					<video class="js-parallax-2 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/video/tbgv02.mp4')); ?>" autoplay muted loop playsinline></video>
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>事・使い方にこだわる食べ物にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>遊・遊び方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>衣・着るものにこだわる</span></div>
									</div>
								</a>
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
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img js-fade-up">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>遊・遊び方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>衣・着るものにこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
									<div class="wrap">
										<div class="subheading"><span>食・食べ物にこだわる</span></div>
									</div>
								</a>
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
					<video class="js-parallax-3 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/video/tbgv01.mp4')); ?>" autoplay muted loop playsinline></video>
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
			<section class="section">
				<div class="guide-area --bg-color">
					<a href="">
						<div class="guide-area__wrap">
							<div class="guide-area__left">
								<h2 class="guide-area__title">Recruit</h2>
								<p class="guide-area__description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
							<div class="button">
								<span>recruit</span>
							</div>
						</div>
					</a>
				</div>
			</section>
			<section class="section">
				<div class="guide-area">
					<a href="">
						<div class="guide-area__wrap">
							<div class="guide-area__left">
								<h2 class="guide-area__title">Event Contact</h2>
								<p class="guide-area__description">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
							</div>
							<div class="button">
								<span>event</span>
							</div>
						</div>
					</a>
				</div>
			</section>
		</main>
	</div>
</div>

<?php get_template_part(slug: "parts/footer"); ?>