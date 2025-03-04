<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>

<body>

    <?php get_header(); ?>
    <main>

        金投稿

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