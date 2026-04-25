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
							<h3 class="subtitle">EVENT - <span class="black">直前のイベント情報</span> -</h3>
							<?php get_template_part(slug: "parts/swiper/topics-swiper"); ?>
						</div>
					</div>
				</div>
				<div class="s-inner">
					<div class="s-contents">
						<div class="--pc">
							<div class="s-item --news">
								<div class="news-pickup">
									<h2 class="s-title js-fade-in">Pick Up</h2>
									<?php
									$args = array(
										'post_type'      => 'post',
										'posts_per_page' => 1,
										'category_name'  => 'pick-up'
									);
									$the_query = new WP_Query($args);

									if ($the_query->have_posts()) :
										while ($the_query->have_posts()) : $the_query->the_post();
									?>
											<a href="<?php the_permalink(); ?>" class="n-p-link">
												<div class="n-p-card js-fade-in">
													<div class="thumbnail">
														<?php if (has_post_thumbnail()) : ?>
															<?php the_post_thumbnail('thumbnail', array('class' => 'img')); ?>
														<?php else : ?>
															<img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="img" alt="マイアミショッピングセンターロゴ">
														<?php endif; ?>
													</div>
													<div class="description">
														<p class="title"><?php the_title(); ?></p>
														<p class="date"><?php echo get_the_date('Y.n.j'); ?></p>
													</div>
												</div>
											</a>
										<?php endwhile;
										wp_reset_postdata();
									else : ?>
										<p class="no-post">現在、おすすめの記事はありません。</p>
									<?php endif; ?>

									<div class="btn">
										<a href="<?php echo esc_url(home_url('news-list')); ?>"><span>一覧を見る</span></a>
									</div>
								</div>
								<div class="news-wrap js-fade-in">
									<h3 class="subtitle">NEWS - <span class="black">最新のお知らせ</span> -</h3>
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
						<div class="--sp">
							<div class="s-item --news">
								<div class="news-pickup">
									<h2 class="s-title js-fade-in">Pick Up</h2>
									<?php
									$args = array(
										'post_type'      => 'post',
										'posts_per_page' => 1,
										'category_name'  => 'pick-up'
									);
									$the_query = new WP_Query($args);

									if ($the_query->have_posts()) :
										while ($the_query->have_posts()) : $the_query->the_post();
									?>
											<a href="<?php the_permalink(); ?>" class="n-p-link">
												<div class="n-p-card js-fade-in">
													<div class="thumbnail">
														<?php if (has_post_thumbnail()) : ?>
															<?php the_post_thumbnail('thumbnail', array('class' => 'img')); ?>
														<?php else : ?>
															<img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo.png')); ?>" class="img" alt="マイアミショッピングセンターロゴ">
														<?php endif; ?>
													</div>
													<div class="description">
														<p class="title"><?php the_title(); ?></p>
														<p class="date"><?php echo get_the_date('Y.n.j'); ?></p>
													</div>
												</div>
											</a>
										<?php endwhile;
										wp_reset_postdata();
									else : ?>
										<p class="no-post">現在、おすすめの記事はありません。</p>
									<?php endif; ?>

									<div class="btn"><a href="<?php echo esc_url(home_url('news-list')); ?>"><span>一覧を見る</span></a></div>
								</div>
								<div class="news-wrap">
									<h3 class="subtitle">NEWS - <span class="black">最新のお知らせ</span> -</h3>
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
				</div>
			</section>
			<section class="section">
				<div class="parallax-box js-fade-in">
					<img class="js-parallax img" src="<?php echo esc_url(get_theme_file_uri('assets/images/background/bk_top01.jpg')); ?>" alt="背景イメージ">
				</div>
			</section>
			<section id="t-fashion" class="section --overlap">
				<div class="s-inner js-fade-in">
					<h2 class="s-title">Fashion</h2>
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="ファッションイメージ">
									<div class="wrap">
										<div class="subheading"><span>おしゃれにこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_02.jpg')); ?>" class="img" alt="フードイメージ">
									<div class="wrap">
										<div class="subheading"><span>食べ物にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="ライフスタイルイメージ">
									<div class="wrap">
										<div class="subheading"><span>使い方にこだわる</span></div>
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
			<section id="t-food" class="section">
				<div class="s-inner js-fade-in">
					<h2 class="s-title">Food</h2>
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_02.jpg')); ?>" class="img" alt="フードイメージ">
									<div class="wrap">
										<div class="subheading"><span>食べ物にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="ライフスタイルイメージ">
									<div class="wrap">
										<div class="subheading"><span>使い方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="img" alt="エンジョイイメージ">
									<div class="wrap">
										<div class="subheading"><span>遊び方にこだわる</span></div>
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
				<div class="parallax-box js-fade-in">
					<img class="js-parallax-2 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/background/bk_top02.jpg')); ?>" alt="背景イメージ">
				</div>
			</section>
			<section id="t-lifestyle" class="section --overlap">
				<div class="s-inner js-fade-in">
					<h2 class="s-title">Life Style</h2>
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="ライフスタイルイメージ">
									<div class="wrap">
										<div class="subheading"><span>使い方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="img" alt="エンジョイイメージ">
									<div class="wrap">
										<div class="subheading"><span>遊び方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" class="img" alt="ファッションイメージ">
									<div class="wrap">
										<div class="subheading"><span>おしゃれにこだわる</span></div>
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
			<section id="t-enjoy" class="section">
				<div class="s-inner js-fade-in">
					<h2 class="s-title">Enjoy</h2>
					<div class="s-contents">
						<div class="main-visual">
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_03.jpg')); ?>" class="img" alt="エンジョイイメージ">
									<div class="wrap">
										<div class="subheading"><span>遊び方にこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_04.jpg')); ?>" class="img" alt="ファッションイメージ">
									<div class="wrap">
										<div class="subheading"><span>おしゃれにこだわる</span></div>
									</div>
								</a>
							</div>
							<div class="m-v-img">
								<a href="">
									<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_05.jpg')); ?>" class="img" alt="フードイメージ">
									<div class="wrap">
										<div class="subheading"><span>食べ物にこだわる</span></div>
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
			<section class="section">
				<div class="parallax-box js-fade-in">
					<img class="js-parallax-3 img" src="<?php echo esc_url(get_theme_file_uri('assets/images/background/bk_top03.jpg')); ?>" alt="背景イメージ">
				</div>
			</section>
			<section class="section --overlap">
				<div class="s-inner">
					<div class="s-contents">
						<div class="s-item">
							<div class="sns-grid js-fade-in">
								<div class="sns-grid__box">
									<h2 class="sns-title">Instagram</h2>
									<div class="sns-icon">
										<a href="https://www.instagram.com/myami__sc/">
											<img src="<?php echo esc_url(get_theme_file_uri('assets/images/icon/i_sns_in.png')); ?>" class="img" alt="インスタグラムアイコン">
										</a>
									</div>
									<div class="sns-belt">
										<a href="https://www.instagram.com/myami__sc/" target="_blank">
											<span>FOLLOW US</span>
											<span>THANK YOU !!</span>
										</a>
									</div>
								</div>
								<div class="sns-grid__box">
									<?php echo do_shortcode('[instagram-feed feed=3]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="guide-area --bg-color">
					<a href="<?php echo esc_url(home_url('recruit')); ?>">
						<div class="guide-area__wrap">
							<div class="guide-area__left">
								<h2 class="guide-area__title">Recruit</h2>
								<p class="guide-area__description">求人情報についてはこちら</p>
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
					<a href="<?php echo esc_url(home_url('events/entry')); ?>">
						<div class="guide-area__wrap">
							<div class="guide-area__left">
								<h2 class="guide-area__title">Event Entry</h2>
								<p class="guide-area__description">イベント出店や受付についてのお問い合わせはこちら</p>
							</div>
							<div class="button">
								<span>entry</span>
							</div>
						</div>
					</a>
				</div>
			</section>
		</main>
	</div>
</div>

<?php get_template_part(slug: "parts/footer"); ?>