<?php get_template_part(slug: "parts/header"); ?>


<main class="main">
	<div class="inner">
		<div class="kv">
			<?php get_template_part(slug: "parts/swiper/main-swiper"); ?>
		</div>
	</div>
	<section class="section">
		<div class="s-slider-inner">
			<h2 class="s-title">Topics</h2>
			<div class="s-contents">
				<div class="s-item --event">
					<h3 class="subheading">EVENT</h3>
					<?php get_template_part(slug: "parts/swiper/topics-swiper"); ?>
				</div>
			</div>
		</div>
		<div class="s-inner">
			<div class="s-contents">
				<div class="s-item --news">
					<div class="news-pickup">
						<h2 class="s-title">Pick Up</h2>
						<a href="" class="n-p-link">
							<div class="n-p-card">
								<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
								<div class="description">
									<p class="text">テキストテキストテキストテキストテキストテキストテキストテキスト</p>
								</div>
							</div>
						</a>
					</div>
					<div class="news-wrap">
						<h3 class="subheading">NEWS</h3>
						<ul class="n-list">
							<li class="n-list-item"><a href="" class="n-list-link"><span class="date">25.7.30</span>譲渡会猛暑休みのお知らせ</a></li>
							<li class="n-list-item"><a href="" class="n-list-link"><span class="date">25.8.1</span>多目的な空きスペース利用者募集</a></li>
							<li class="n-list-item"><a href="" class="n-list-link"><span class="date">25.7.29</span>テキストテキストテキストテキストテキストテキストテキストテキスト</a></li>
							<li class="n-list-item"><a href="" class="n-list-link"><span class="date">25.7.29</span>テキストテキスト</a></li>
							<li class="n-list-item"><a href="" class="n-list-link"><span class="date">25.7.29</span>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section">
		<div class="s-inner">

			<img src="<?php echo esc_url(get_theme_file_uri('assets/images/slider/slider_img_01.jpg')); ?>" class="img" alt="">
		</div>
		<div class="s-slider-inner">
			<div class="s-contents">
				<div class="s-item --event">
					<?php get_template_part(slug: "parts/swiper/topics-swiper"); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_template_part(slug: "parts/footer"); ?>