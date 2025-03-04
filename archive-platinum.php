<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>

<style>
    /* プラチナポイントコンテンツ  */
    .point_platinum_section .point_section_header {
        text-align: center;
        background-color: #aa7c00;
        color: white;
        border-radius: 0.2em;
        margin-bottom: 2vw;
    }

    .point_platinum_section .point_row {
        width: 30%;
    }

    .point_platinum_section .point_section_content {
        display: flex;
        justify-content: space-between;
    }

    .point_platinum_section .point_row_content_top_text {
        text-align: center;
        color: #7a4d01;
    }

    .point_platinum_section .point_row_content_header {
        text-align: center;
        margin-bottom: 0.5em;
    }

    .point_platinum_section .point_row_content_text {
        margin-top: 0.5em;
    }

    .point_platinum_section .point_section_content {
        padding-bottom: 3em;
    }


    .point_platinum_section .point_content_wrap {
        background-color: #fdf4e1;
        padding: 2vw 4vw 4vw 4vw;
    }

    .point_platinum_section .point_row_content img {
        border-radius: 0.5em;
    }

    .only_text_content.point_section_content {
        padding-bottom: 0;
        align-items: center;
    }


    @media (min-width: 768px) {
        .point_platinum_section .point_section_header {
            font-size: 2em;
        }
    }

    @media (max-width: 767px) {
        .point_platinum_section .point_section_content {
            flex-direction: column;
            padding-bottom: 2em;
        }

        .point_platinum_section .point_row {
            width: 100%;
        }

        .point_platinum_section .point_row {
            padding-top: 7vw;
        }


        .point_section_header {
            font-size: 1.4em;
            padding: 2vw 0;
        }

        .point_platinum_section .point_content_wrap {
            padding: 8vw 4vw 4vw 4vw;
        }

    }

    /* プラチナポイントコンテンツ  */

    /* 今が売り時  */
    .now_sell_section_content {
        display: flex;
        gap: 5%;
        margin-bottom: 5%;
    }

    .now_sell_section_content img {
        width: 25%;
        height: 25%;
        border-radius: 0.5em;
        object-fit: cover;
    }

    .now_sell_section_text_ttl.content_ttl {
        margin-bottom: 0.5vw;
    }

    .now_sell_section_content_wrap {
        margin-top: 3vw;
    }

    @media (max-width: 767px) {
        .now_sell_section_content img {
            width: 45%;
            margin: auto;
        }

        .now_sell_section_content {
            flex-direction: column;
        }

        .now_sell_section_text_ttl.content_ttl {
            margin-bottom: 1.5vw;
            margin-top: 5vw;
        }


    }

    /* 今が売り時  */
</style>

<body class="categories_body">
    <?php get_header(); ?>
    <main>

        <!-- FV -->
        <div class="categories_mv_area">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/pt_pc.webp">
                <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/pt_sp.webp" alt="高價收購黃金">
            </picture>
        </div>
        <!-- FV -->

        <!-- 見出し -->
        <section class="header_text_section">
            <div class="header_text_area">
                <h1>如果您想放售鉑金，<br>
                    <span>請選擇收購價No.1</span>OTAKARAYA
                </h1>
                <div class="header_text_area_text">
                    珠寶和飾品中常見的鉑金。這種金屬擁有天然純淨銀白色，散發出潔白光芒。
                    鉑金經常與白金混淆，但請記住，白金是由金和其他金屬混合製成的合金，因此跟鉑金完全不同。
                    與容易生鏽和變質的銀相比，鉑金更堅固，對汗水等水分的抵抗力更強。因此鉑金作為飾品的原材料需求很高，同時也用作工業產品的催化劑。
                    鉑金目前全球存量僅是金的三分之一，是一種非常稀有的貴金屬。
                </div>
            </div>
        </section>
        <!-- 見出し -->




        <!-- 相場グラフ market_price_change -->
        <?php get_template_part('template-parts/market_price_change'); ?>
        <!-- 相場グラフ  -->

        <!-- 相場表 purchase_market_reference -->
        <?php get_template_part('template-parts/purchase_market_reference'); ?>
        <!-- 相場表  -->

        <!-- 計算ツール calculation_tool -->
        <?php get_template_part('template-parts/calculation_tool'); ?>
        <!-- 計算ツール  -->

        <!-- プラチナポイントコンテンツ -->
        <section class="point_section point_platinum_section">
            <div class="point_section_content_wrap Rounding">
                <div class="point_content_wrap">

                    <div class="point_section_header content_ttl">
                        OTAKARAYA<br class="is-sp">為何成為高價收購No1
                    </div>

                    <div class="point_section_content only_text_content is-pc">
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl">徹底削減成本</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl">純度不明的鉑金和其他公司無法估價的寶石我們也有可能收購</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl">專業的鑑定師不會錯過任何價值</div>
                            </div>
                        </div>
                    </div>

                    <div class="point_section_content">
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl is-sp">徹底削減成本</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img1.webp" alt="徹底削減成本">
                                <div class="point_row_content_text">把店鋪營運成本降低，透過維護內部化等削減成本，省下的將回饋給客人</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl is-sp">純度不明的鉑金和其他公司無法估價的寶石我們也有可能收購</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img2.webp" alt="純度不明的鉑金和其他公司無法估價的寶石我們也有可能收購">
                                <div class="point_row_content_text">不僅是純度較低的鉑金，或是其他公司無法估價的小鑽石，我們也會逐一仔細鑑定</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_header content_ttl is-sp">專業的鑑定師不會錯過任何價值</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img3.webp" alt="專業的鑑定師不會錯過任何價值">
                                <div class="point_row_content_text">OTAKARAYA的鑑定師經過嚴格專業的訓練，幫你發掘物品的隱藏價值，以高於其他公司的價格收購</div>
                            </div>
                        </div>
                    </div>

                    <div class="point_section_header content_ttl">
                        放售鉑金的要點
                    </div>

                    <div class="point_section_content">
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT1</div>
                                <div class="point_row_content_header content_ttl">重量</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img4.webp" alt="重量">
                                <div class="point_row_content_text">鉑金的價值根據當時的市場價格（重量ｇ單位）而變動，由此確定基本的金額</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT2</div>
                                <div class="point_row_content_header content_ttl">付屬品</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img5.webp" alt="付屬品">
                                <div class="point_row_content_text">由於鉑金經常作為配件使用，有時會鑲嵌鑽石等寶石。在這種情況下,每顆寶石也會成為鑑定的對象，並增加總收購金額。</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT3</div>
                                <div class="point_row_content_header content_ttl">設計</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point_platinum/img6.webp" alt="設計">
                                <div class="point_row_content_text">首飾的設計和品牌力量也會影響鑑定的金額。對於受歡迎的設計和高稀有度的商品，收購價格或會高於鉑金本身的價值。</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- プラチナポイントコンテンツ -->


        <!-- 今が売り時 -->
        <section class="now_sell_section">
            <div class="content_header">
                <h2>想賣鉑金的話就趁現在！</h2>
            </div>
            <div class="now_sell_section_content_wrap">
                <div class="now_sell_section_content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/now_sell/img1.webp" alt="設計">
                    <div class="now_sell_section_text_area">
                        <div class="now_sell_section_text_ttl content_ttl">
                            關於鉑金
                        </div>
                        <div class="now_sell_section_text">
                            鉑金擁有天然純淨銀白色，散發出潔白明亮的光芒，在珠寶和首飾中廣泛使用。<br>
                            鉑金經常與白金混淆，但請記住，白金是由金和其他金屬混合製成的合金，因此跟鉑金完全不同。<br>
                            鉑金目前全球存量僅是金的三分之一，每年採掘量只有金的二十分之一，是一種非常稀有的貴金屬。<br>
                            採掘出來的鉑金，三成以上用作工業產品的催化劑，比金更為不可或缺。<br>
                            鉑金容易受世界局勢和經濟狀況影響，變動波幅比較大，因此在出售鉑金時需要有慎重和迅速的判斷。<br>
                            OTAKARAYA在收購鉑金方面有豐富的經驗，能夠準確掌握最新市場行情並以高價收購。此外，我們有熟知鉑金的專業鑑定師進行嚴格評估，能夠識別高純度的鉑金並將其反映在評估價格中。沉睡中的珠寶飾品可能含有大量鉑金。請務必來OTAKARAYA進行一次評估。即使是少量鉑金也有其需求。
                        </div>
                    </div>
                </div>
                <div class="now_sell_section_content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/now_sell/img2.webp" alt="設計">
                    <div class="now_sell_section_text_area">
                        <div class="now_sell_section_text_ttl content_ttl">
                            賣鉑金的話愈早愈好
                        </div>
                        <div class="now_sell_section_text">
                            鉑金雖然比黃金更為珍貴稀有，但其工業用途比例較高，容易受到世界局勢和經濟狀況影響。當前世界局勢不穩定，再加上病毒的影響，鉑金的市場價格逐漸上漲，漲幅比以前更大。<br><br>

                            由於鉑金是一種容易受世界局勢影響的金屬，其價格隨時會下降。因此，趕現在市場價格較高，是個合適的出售時機。
                        </div>
                    </div>
                </div>
                <div class="now_sell_section_content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/now_sell/img3.webp" alt="設計">
                    <div class="now_sell_section_text_area">
                        <div class="now_sell_section_text_ttl content_ttl">
                            我們能高價收購的原因
                        </div>
                        <div class="now_sell_section_text">
                            鉑金的純度有很多種，價值也各有不同。以金錠為例，可以根據品牌、重量和純度來判斷其價值，但對於珠寶來說，用純度來鑑定較為困難。<br><br>

                            在OTAKARAYA，有專業的鉑金鑑定師，能夠準確識別鉑金的真正價值。此外，我們也使用專業的測量儀器進行鑑定，即使珠寶的保證書或鑑定書遺失了，也可以進行收購。<br><br>

                            OTAKARAYA不僅評估鉑金的價值，也評估產品的整體價值，。例如是Chanel或Harry Winston等高級品牌的產品，我們會給出符合品牌價值的價格。如果是獨一無二的原創設計作品，只要設計出色，我們也會將設計價值加到評估價格中。<br><br>

                            此外，我們不僅收購珠寶，也回購古董製品和工業製品中的鉑金。 「おたからや」會嚴格評估任何狀態的鉑金，並以相應的價格進行回購。即使在其他店被拒絕，也可以隨時向我們諮詢。自行判斷產品無法回購之前，不妨帶到OTAKARAYA來。即使是複雜的評估，我們也會免費進行。在我們過去的回購記錄中，有許多產品不僅是鉑金，還使用了其他稀有金屬，具有很高的價值。對於無法到店的客戶，我們也提供上門回收服務，全程不收取費用，歡迎隨時與我們聯絡。
                        </div>
                    </div>
                </div>
                <div class="now_sell_section_content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/now_sell/img4.webp" alt="設計">
                    <div class="now_sell_section_text_area">
                        <div class="now_sell_section_text_ttl content_ttl">
                            想賣鉑金的話請來OTAKARAYA
                        </div>
                        <div class="now_sell_section_text">
                            鉑金（白金），被譽為“貴金屬之王”，其價值和歷史可與黃金媲美。特別是鈍度100%的Pt1000，可視為資產以高價交易聞名。OTAKARAYA高價回收各種鉑金製品，項鍊、耳環、戒指等首飾，以及金錠、硬幣、鋼筆等。<br><br>

                            通過嚴格訓練的專業鑑定師會鑑定Pt1000、Pt999、Pt950、Pt900、Pt850的鈍度，並結合寶石和設計的附屬價值，盡可能用高價收購。<br>
                            為了令客人滿意，我們不僅着重專業的知識，還會詳細說明評估的過程。<br>
                            客人託付給我們的鉑金製品，都是世界上獨一無二的。不僅具有客觀價值，也包含很多珍貴的回憶。<br>
                            我們認為，估價和收購不僅是商業交易，而是透過這些珍貴的物品，與每位客人相遇。<br>
                            公司仝人以客人的感謝和笑容為動力，日夜提升鑑定能力。<br>
                            OTAKARAYA自創業以來，得到眾多客人的支持，是貴金屬收購行業的No.1。<br>
                            今後，我們將繼續努力，致力提供超越其他公司的估價和服務。為滿足不同顧客的需求，我們提供上門和店舖收購服務。<br>
                            鑑定費和上門費等費用全免，歡迎隨時諮詢。
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 今が売り時 -->


        <!-- // お客様の声 categories_voice -->
        <?php get_template_part('template-parts/categories_voice'); ?>
        <!-- お客様の声 -->


        <!-- よくある質問 categories_faq -->
        <?php get_template_part('template-parts/categories_faq'); ?>
        <!-- よくある質問 -->


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
</script>


</html>