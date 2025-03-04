<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>

<body>
	<?php get_header(); ?>
	<main>

		<?php
		get_template_part('template-parts/mv');
		echo "kpkjojoj";
		get_template_part('template-parts/purchased_items');

		get_template_part('template-parts/appraisal_flow');

		get_template_part('template-parts/brands');

		get_template_part('template-parts/otakaraya_auction');

		get_template_part('template-parts/faq');

		// get_template_part('template-parts/carousel');

		// get_template_part('template-parts/reason');

		// get_template_part('template-parts/products');


		// get_template_part('template-parts/purchases');

		// get_template_part('template-parts/voice');

		?>

	</main>

	<?php
	get_footer(); ?>

</body>



<script>
	jQuery(function() {

		var footer = $('.footer__sitemap').innerHeight();

		window.onscroll = function() {
			var point = window.pageYOffset;
			var docHeight = $(document).height();
			var dispHeight = $(window).height();

			if (point > docHeight - dispHeight - footer) {
				$('.side_link_wrap').addClass('is-hidden');
			} else {
				$('.side_link_wrap').removeClass('is-hidden');
			}
		};
	});

	const endpoint = 'https://www.otakaraya.jp/gold/wp-json/wp/v2/pages/21255/';

	fetch(endpoint)
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.json();
		})
		.then(data => {
			// ACFで定義したカスタムフィールド「price_gold」の値を取得
			const priceGold = data.acf.price_gold;

			console.log('Price Gold:', priceGold);
		})
		.catch(error => {
			console.error('Fetch error:', error);
		});
</script>


</html>