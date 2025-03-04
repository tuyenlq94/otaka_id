<footer id="footer" class="section_pd color_e60012 menu_font_size">

    <div class="footer_top_content">
        <img src="https://otakaraya.hk/assets/img/hongkong_logo.png" alt="">
        <div class="footer_top_content_text_area">
            <div class="footer_top_content_text">
                <a href="#buy">BUY</a>
            </div>
            <div class="footer_top_content_text">
                <a href="#sell">SELL</a>
            </div>
            <div class="footer_top_content_text">
                <a href="#consignment_sales">CONSIGNMENT SALES</a>
            </div>
            <div class="footer_top_content_text">
                <a href="https://wa.me/85290716119">CONTACT</a>
            </div>
        </div>
    </div>

    <div class="footer_bottom_content_wrap menu_font_size">
        <div class="footer_bottom_content_l">
            <div class="footer_bottom_haed" style="font-weight: 700;font-family: noto-sans-cjk-jp, sans-serif;">E-FRAN Co.</div>
            <div class="footer_bottom_text font_size_s">香港九龍佐敦彌敦道219莊士倫敦廣場G/F G01-G02</div>
            <div class="footer_bottom_text font_size_s">TEL:9071 6119</div>
        </div>
        <div class="footer_bottom_content_r">
            <div class="footer_bottom_content_img_area">
                <a href="https://www.instagram.com/otakaraya_hongkong/"><img src="https://otakaraya.hk/assets/img/i_icon.svg" alt="instagram"></a>
                <!-- <a href=""><img src="https://otakaraya.hk/assets/img/icon_f.webp" alt="facebook"></a> -->
                <a href="https://wa.me/85290716119"><img src="https://otakaraya.hk/assets/img/t_icon.svg" alt="call"></a>
            </div>
            <div class="footer_bottom_text_wrap">
                <!-- <div class="footer_bottom_text">隱私權政策</div> -->
                <a href="https://www.google.com/maps?ll=22.302479,114.169505&z=16&t=m&hl=ja&gl=JP&mapclient=embed&q=%E8%8E%8A%E5%A3%AB%E5%80%AB%E6%95%A6%E5%BB%A3%E5%A0%B4G/F+G01-G02+%E9%A6%99%E6%B8%AF%E4%B9%9D%E9%BE%8D%E4%BD%90%E6%95%A6%E5%BD%8C%E6%95%A6%E9%81%93219%E8%99%9F">
                    <div class="footer_bottom_text">MAP</div>
                </a>
            </div>
            <div class="copy footer_bottom_text" style="font-weight: 200;font-family: noto-sans-cjk-jp, sans-serif;">© <?php echo date("Y"); ?> OTAKARAYA JAPAN Inc.</div>
        </div>
    </div>

    <style>
        .page_top_area {
            position: fixed;
            right: 0.5%;
            width: 12%;
            z-index: 2;
            bottom: 1%;
        }

        .top_btn {
            width: 50%;
            margin: 5% 0 0 auto;
            display: block;
        }

        .footer_top_content_text a,
        .page_top_area a {
            display: block;
        }

        @media (max-width: 767px) {
            .page_top_area {
                width: 20%;
            }

        }

        @media (min-width: 768px) {
            .page_top_area {
                bottom: 20%;
            }

            .footer_top_content {
                margin-right: 5%;
            }

            .footer_bottom_content_wrap {
                margin-right: 5%;
            }
        }
    </style>

    <div class="page_top_area">
        <a href="https://wa.me/85290716119" class="whats_app_btn">
            <img src="https://otakaraya.hk/assets/img/hongkong_cta.png">
        </a>
        <a href="#header" class="top_btn">
            <img src="https://otakaraya.hk/assets/img/page_top_icon.webp">
        </a>
    </div>
    <?php wp_footer(); ?>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://otakaraya.hk/assets/js/script.js"></script>

<script>
    var splide1 = new Splide('.splide1', {
        type: 'loop',
        perPage: 1, // 中央に1つ表示
        focus: 'center', // 中央にフォーカス
        padding: {
            left: '26%', // 左右に少しのスペースを追加
            right: '50%'
        },
        gap: '5%', // スライド間のギャップ
        autoplay: true,
        interval: 3000,
        pauseOnHover: true,
        pagination: true,
        arrows: true,
        perMove: 1,
        flickPower: 20, // ドラッグの敏感度を低く設定

        breakpoints: {
            767: {
                perPage: 1, // スマートフォンでは1つ表示
                padding: {
                    left: '6%', // 左右に少しのスペースを追加
                    right: '51%'
                },
            },
        },
    });
    splide1.mount();


    // 2つ目のスライダーの初期化
    var splide2 = new Splide('.splide2', {
        type: 'loop',
        perPage: 1, // 中央に1つ表示
        focus: 'center', // 中央にフォーカス
        padding: {
            left: '25.5%', // 左右に少しのスペースを追加
            right: '50.6%'
        },
        gap: '5%', // スライド間のギャップ
        autoplay: true,
        interval: 3000,
        pauseOnHover: true,
        pagination: false,
        arrows: true,
        perMove: 1,
        flickPower: 20, // ドラッグの敏感度を低く設定

        breakpoints: {
            767: {
                perPage: 1, // スマートフォンでは1つ表示
                padding: {
                    left: '6%', // 左右に少しのスペースを追加
                    right: '51%'
                },
            },
        },
    });
    splide2.mount();
</script>