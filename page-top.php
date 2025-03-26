<?php
/* Template Name: トップページ */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_template_part('head2'); ?>
    <!-- local css -->
    <link rel="stylesheet" type="text/css" href="css/app.min.css">
    <link rel="stylesheet" type="text/css" href="css/shared.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <script src="js/jquery-3.6.3.min.js"></script>

    <title><?php the_title() ?></title>
    <meta name="description"
        content="買取専門店のおたからや。最短5分で査定、出張費無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取金額で幅広く買取させていただきます。">
    <link rel="canonical" href="https://www.otakaraya.jp/">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="買取専門店のおたからや - 最短5分で査定、出張費無料">
    <meta property="og:description"
        content="買取専門店のおたからや。最短5分で査定、出張費無料です。金・プラチナ・貴金属・ダイヤモンド・ブランド品・時計・バッグ・切手・古銭・着物・鉄道模型など、他社圧倒の高額買取金額で幅広く買取させていただきます。">
    <meta property="og:url" content="https://www.otakaraya.jp/">
    <meta property="og:site_name" content="金・貴金属ブランド買取のおたからや">

</head>


<?php wp_head(); ?>

<body id="mock_app">

    <?php get_header('common'); ?>



    <div class="fv_img_wrap">
        <img class="is-pc" src="images/index/OTAKARAYA_top_PC_EN.webp" alt="High-price purchases at Otakaraya">
        <img class="is-sp" src="images/index/OTAKARAYA_top_SP_EN.webp" alt="High-price purchases at Otakaraya">
    </div>

    <?php get_template_part('template-parts/license'); ?>
    <?php get_template_part('template-parts/shop-info'); ?>

    <main class="contents">
        <article class="contents__left">
            <section class="products_area handling_products_section">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                    Item yang Otakaraya terima
                    </h2>
                    <h3 class="titleMain--lead">
                        <p>Otakaraya menerima berbagai variasi item</p>
                    </h3>
                </div>

                <div class="products_area_content_wrap products_area_top_content_wrap">
                    <a href="/gold/">
                        <div class="products_area_top_content_img_wrap">
                            <img src="images/index/products_img1@2x.webp" alt="Pembelian emas & emas batangan">
                        </div>
                        <p class="products_area_text">Pembelian emas & emas batangan</p>
                    </a>
                    <a href="/jewelry/">
                        <div class="products_area_top_content_img_wrap">
                            <img src="images/index/products_img3@2x.webp" alt="Pembelian berlian & perhiasan">
                        </div>
                        <p class="products_area_text">Pembelian berlian & perhiasan</p>
                    </a>
                    <a href="/brand/">
                        <div class="products_area_top_content_img_wrap">
                            <img src="images/index/products_img4@2x.webp" alt="Pembelian tas & barang branded">
                        </div>
                        <p class="products_area_text">Pembelian tas & barang branded</p>
                    </a>
                    <a href="/watch/">
                        <div class="products_area_top_content_img_wrap">
                            <img src="images/index/products_img5@2x.webp" alt="Pembelian jam tangan">
                        </div>
                        <p class="products_area_text">Pembelian jam tangan</p>
                    </a>
            </section>
            <!-- おたからやの取り扱い商品 -->

            <!-- おたからやの取扱ブランド -->

            <section class="products_area handling_brand_section">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                    Brand yang diterima Otakaraya
                    </h2>
                    <h3 class="titleMain--lead">
                        <p>Otakaraya menerima berbagai macam merk. Di sini kami akan perkenalkan beberapa di antaranya.</p>
                    </h3>
                </div>

                <div class="products_area_content_wrap products_area_bottom_content_wrap">
                    <a href="/brand-tokei/rolex/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img1@4x.webp" alt="Pembelian Rolex">
                        </div>
                        <p class="products_area_text">Pembelian Rolex</p>
                    </a>
                    <a href="/brand-tokei/patekphilippe/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img2@4x.webp" alt="Pembelian Patek Philippe">
                        </div>
                        <p class="products_area_text">Pembelian Patek Philippe</p>
                    </a>
                    <a href="/brand-tokei/audemarspiguet/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img3@4x.webp" alt="Pembelian Audemars Piguet">
                        </div>
                        <p class="products_area_text">Pembelian Audemars Piguet</p>
                    </a>
                    <a href="/brand-tokei/vacheronconstantin/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img4@4x.webp" alt="Pembelian Vacheron Constantin">
                        </div>
                        <p class="products_area_text">Pembelian Vacheron Constantin</p>
                    </a>
                    <a href="/brand-tokei/lange-soehne/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img5@4x.webp" alt="Pembelian Lange & Söhne">
                        </div>
                        <p class="products_area_text">Pembelian Lange & Söhne</p>
                    </a>
                    <a href="/brand-tokei/omega/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img6@4x.webp" alt="Pembelian Omega">
                        </div>
                        <p class="products_area_text">Pembelian Omega</p>
                    </a>
                    <a href="/brand-tokei/iwc/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img7@4x.webp" alt="Pembelian IWC">
                        </div>
                        <p class="products_area_text">Pembelian IWC</p>
                    </a>
                    <a href="/brand/cartier/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img8@4x.webp" alt="Pembelian Cartier">
                        </div>
                        <p class="products_area_text">Pembelian Cartier</p>
                    </a>
                    <a href="/brand/louis-vuitton/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img9@4x.webp" alt="Pembelian Louis Vuitton">
                        </div>
                        <p class="products_area_text">Pembelian Louis Vuitton</p>
                    </a>
                    <a href="/brand/hermes/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img10@4x.webp" alt="Pembelian Hermes">
                        </div>
                        <p class="products_area_text">Pembelian Hermes</p>
                    </a>
                    <a href="/brand/chanel/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img11@4x.webp" alt="Pembelian Chanel">
                        </div>
                        <p class="products_area_text">Pembelian Chanel</p>
                    </a>
                    <a href="/brand/dior/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img12@4x.webp" alt="Pembelian Christian Dior">
                        </div>
                        <p class="products_area_text">Pembelian Christian Dior</p>
                    </a>
                    <a href="/brand/celine/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img13@4x.webp" alt="Pembelian Cartier">
                        </div>
                        <p class="products_area_text">Pembelian Cartier</p>
                    </a>
                    <a href="/brand/fendi/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img14@4x.webp" alt="Pembelian Fendi">
                        </div>
                        <p class="products_area_text">Pembelian Fendi</p>
                    </a>
                    <a href="/brand/gucci/">
                        <div class="products_area_img_wrap">
                            <img src="images/index/handling_brand_img15@4x.webp" alt="Pembelian Gucci">
                        </div>
                        <p class="products_area_text">Pembelian Gucci</p>
                    </a>
                </div>
            </section>
            <!-- おたからやの取り扱いブランド -->

            <!-- ctaセクション -->
            <div class="cta_band_img_area">
                <img class="is-pc" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_PC.webp" alt="今が売り時">
                <img class="is-sp" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_SP.webp" alt="今が売り時">
            </div>
            <!-- ctaセクション -->

            <!--     ▼▼▼おたからやが選ばれる理由▼▼▼     -->
            <section class="reason_section">
                <?php get_template_part('template-parts/otakaraya_sel'); ?>
            </section>
            <!--     ▲▲▲おたからやが選ばれる理由▲▲▲     -->

            <!-- ctaセクション -->
            <div class="cta_band_img_area">
                <img class="is-pc" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_PC.webp" alt="今が売り時">
                <img class="is-sp" style="width: 100%;" src="images/index/Now_is_the_time_to_sell_if_you're_unsure_SP.webp" alt="今が売り時">
            </div>
            <!-- ctaセクション -->

            <!--     ▼▼▼ 地域・社会活動への取り組み ▼▼▼     -->
            <section class="csr_section">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                        Kegiatan komunitas dan sosial (CSR) kami
                    </h2>
                </div>
                <div class="csr_section_content">
                    <img class="is-pc head_img" src="images/index/E-fran_Children's_Cafeteria_PC.webp">
                    <img class="is-sp head_img" src="images/index/2024_おたからやトップ_英語版1129.webp">

                    <div class="dining_room_area">
                        <div class="dining_room_area_ttl">
                            <p>Dukungan makanan melalui Kafetaria Anak-anak E-Fran</p>
                        </div>
                        <div class="dining_room_area_read">
                            <p>Kafetaria Anak-anak E-Fran merupakan kegiatan dukungan sosial yang mendistribusikan makanan bergizi dan bekal makan siang kepada anak-anak dua kali seminggu (150 makanan per minggu) di Jepang dan seminggu sekali (100 makanan) di Filipina.</p>
                        </div>

                        <div class="dining_room_img_area">
                            <div class="dining_room_img_area_wrap dining_room_img_area_wrap1">
                                <img src="images/index/top_page_link_menu4.webp" alt="Kegiatan distribusi makanan di Filipina">
                                <p class="dining_room_img_area_ttl">Kegiatan distribusi makanan di Filipina</p>
                                <p class="dining_room_img_area_text">Di Filipina, sebagian besar anak yang lahir dalam keluarga miskin terpaksa hidup dalam kemiskinan selama sisa hidup mereka.</p>
                            </div>
                            <div class="dining_room_img_area_wrap dining_room_img_area_wrap2">
                                <img src="images/index/top_page_link_menu5.webp" alt="Kegiatan distribusi makanan di Jepang">
                                <p class="dining_room_img_area_ttl">Kegiatan distribusi makanan di Jepang</p>
                                <p class="dining_room_img_area_text">Terutama di Kota Yokohama, Prefektur Kanagawa, kami mendistribusikan makanan bergizi kepada anak-anak di lima lokasi: "Yokohamabashi Shopping Street Bakauma Shokudo," "Living Creative Space Nishi (Guts Beat Nishi)," "Soto Zen Aokiyama Honkaku-ji Temple," "After-School Day Service / Fureai Plaza," and "Dagashi Shop Community Café Kodomono Mise." Kami menyediakan makanan sebanyak delapan kali sebulan untuk anak - anak yang membutuhkan.</p>
                            </div>
                            <div class="dining_room_img_area_wrap dining_room_img_area_wrap3">
                                <img src="images/index/top_page_link_menu2.webp" alt="Kegiatan bantuan darurat">
                                <p class="dining_room_img_area_ttl">Kegiatan bantuan darurat</p>
                                <p class="dining_room_img_area_text">Topan pada tahun 2021 dan kebakaran besar pada tahun 2023 di Filipina menyebabkan kerusakan besar.</p>
                            </div>
                            <div class="dining_room_img_area_wrap dining_room_img_area_wrap4">
                                <img src="images/index/top_page_link_menu3.webp" alt="Kegiatan kontribusi komunitas lokal">
                                <p class="dining_room_img_area_ttl">Kegiatan kontribusi komunitas lokal</p>
                                <p class="dining_room_img_area_text">Kegiatan kontribusi masyarakat ini dimulai atas permintaan Komite Kesejahteraan Lingkungan Nishi dan Komite Kesejahteraan Anak.</p>
                            </div>
                        </div>

                        <div class="btn__wrap btn__red">
                            <a href="https://e-fran.jp/contributions/ef-cafe.php">Klik di sini untuk informasi lebih lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="colBox">
                    <div class="col">
                        <a href="https://e-fran.jp/contributions/animal.php" class="img__link">
                            <div class="img">
                                <img src="images/index/Official_Supporter_of_AniDone.webp" alt="Donasi untuk organisasi kesejahteraan hewan">
                            </div>
                            <p class="csr_section_ttl">Donasi untuk organisasi kesejahteraan hewan</p>
                            <p class="csr_section_text">Kami berkontribusi terhadap kegiatan sosial terkait hewan dengan menyumbangkan sebagian keuntungan kami ke Animal Donation Public Interest Incorporated Association.</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://e-fran.jp/contributions/backpack.php" class="img__link">
                            <div class="img" style="border: 1px solid #eac588;">
                                <img src="images/index/Memories_of_Schoolbags_Gift_Program.webp" alt="Mendukung kemandirian melalui kegiatan pemberian hadiah tas sekolah yang berkesan">
                            </div>
                            <p class="csr_section_ttl">Mendukung kemandirian melalui kegiatan pemberian hadiah tas sekolah yang berkesan</p>
                            <p class="csr_section_text">Sebagai bagian dari kontribusi kami kepada masyarakat, E-Fran Co., Ltd. akan menyumbangkan tas sekolah yang tidak terpakai kepada anak-anak di Afghanistan.</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="https://e-fran.jp/contributions/food_drive.php" class="img__link">
                            <div class="img">
                                <img src="images/index/Food_Drive_Drop-off_Box.webp" alt="Menyiapkan kotak drop-off makanan">
                            </div>
                            <p class="csr_section_ttl">Menyiapkan kotak drop-off makanan</p>
                            <p class="csr_section_text">E-Fran Co., Ltd. telah menyiapkan kotak informasi pengumpulan makanan di dalam perusahaan sebagai bagian dari upaya SDGs untuk memecahkan masalah sosial seperti mengurangi sampah makanan.</p>
                        </a>
                    </div>
                </div>
            </section>
            <!--     ▲▲▲ 地域・社会活動への取り組み ▲▲▲     -->
        </article>
    </main>

    <?php get_footer('common'); ?>

    <script src="js/common.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/shared.js"></script>
    <script src="js/breadlist.js"></script>
    <script type="text/javascript" src="js/index_1.js" id="swv-js"></script>
    <script>
        document.querySelectorAll('.accordion-toggle').forEach(function(button) {
            button.addEventListener('click', function() {
                this.parentElement.classList.add('active');
                this.classList.add('hide');
            });
        });
        /*メインビジュアルユニット1*/
        $("#slide01").slick({
            asNavFor: "#thumbs01",
            prevArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_prev_white01.png" class="slide-arrow prev-arrow">',
            nextArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_next_white01.png" class="slide-arrow next-arrow">',
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 768, // 399px以下のサイズに適用
                settings: {
                    arrows: false,
                },
            }, ],
        })
        $("#thumbs01").slick({
            //ここにオプション
            asNavFor: "#slide01",
            slidesToShow: 4,
        });
        $("#thumbs01 .slick-slide").on("click", function() {
            let index = $(this).attr("data-slick-index")
            $("#slide01").slick("slickGoTo", index)
        })
        /* parts-flex */

        /* スライダー(PC,SP両方) */
        let sliders = ["flex-slider1", "flex-slider2", "flex-slider3", "flex-slider4", "flex-slider5"];
        sliders.forEach((slider) => {
            let elem = document.getElementById(slider);
            var slideCount = $(elem).children('.content__item').length;
            let slidesToShow = Math.min(slideCount, 4);
            if (slideCount < 5) {
                if (elem) {
                    $(elem).slick({
                        arrows: true, // 矢印あり
                        dots: true, // ドットあり
                        appendArrows: $("." + slider + '--arrow'),
                        appendDots: $("." + slider + '--dot'),
                        centerMode: false,
                        responsive: [{
                            breakpoint: 9999,
                            settings: {
                                slidesToShow: slidesToShow,
                                slidesToScroll: slidesToShow,
                                variableWidth: true,
                            }
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            }
                        }]
                    });
                }
            } else {
                if (elem) {
                    $(elem).slick({
                        arrows: true, // 矢印あり
                        dots: true, // ドットあり
                        appendArrows: $("." + slider + '--arrow'),
                        appendDots: $("." + slider + '--dot'),
                        autoplay: true,
                        autoplaySpeed: 5000,
                        centerMode: false,
                        responsive: [{
                            breakpoint: 9999,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                variableWidth: true,
                            }
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            }
                        }]
                    });
                }
            }
        });

        /* スライダー(SPのみ) */
        function checkBreakPoint() {
            let slidersScOnly = ["numbox-slider-sp1", "flex-slider-sp1", "flex-slider-sp2"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 767) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: true, // 矢印あり
                                dots: true, // ドットあり
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint();
        });

        checkBreakPoint();

        function checkBreakPoint2() {
            let slidersScOnly = ["columnbox01"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 767) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: true, // 矢印あり
                                dots: true, // ドットあり
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                // speed: 1000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint2();
        });

        checkBreakPoint2();

        // ドキュメントが準備完了時に以下のコードを実行
        $(function() {
            // HTML内のクラスが'dateString'である要素の内容を取得し、変数gold_Containerに格納
            var gold_Container = $('.gold_Container').html();

            // クラスが'gold_Container2'である要素に変数gold_Containerの内容を挿入
            $('.gold_Container2').html(gold_Container);
        });

        function checkBreakPoint2() {
            let slidersScOnly = ["columnbox_slid"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 1024) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: false,
                                dots: true,
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint2();
        });

        checkBreakPoint2();
    </script>
</body>

</html>