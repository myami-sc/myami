<?php get_template_part(slug: "parts/header"); ?>


<main class="main">
	<div class="inner">
		<div class="kv">
			<?php get_template_part(slug: "parts/swiper/main-swiper"); ?>
		</div>
	</div>
	<div class="section">
		<div class="s-inner">
			<h2 class="s-title">Topics</h2>
			<?php get_template_part(slug: "parts/swiper/topics-swiper"); ?>
		</div>
	</div>
</main>

<?php get_template_part(slug: "parts/footer"); ?>