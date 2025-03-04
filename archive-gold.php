<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>

<style>
    /* ポイントコンテンツ  */
    .point_section_header {
        text-align: center;
        background-color: #aa7c00;
        color: white;
        font-size: 2em;
        padding: 0.6vw 0;
    }

    .point_row {
        width: 30%;
    }

    .point_section_content {
        display: flex;
        justify-content: space-between;
    }

    .point_row_content_top_text {
        text-align: center;
        color: #7a4d01;
    }

    .point_row_content_header {
        text-align: center;
        margin-bottom: 0.5em;
    }

    .point_row_content_text {
        margin-top: 0.5em;
    }

    .point_section_content {
        padding-bottom: 3em;
        border-bottom: 3px dotted #c78b00;
    }

    .point_content_bottom_area_ttl {
        margin-bottom: 0.2vw;
    }

    .point_content_bottom_area_ttl {
        position: relative;
    }

    .point_content_bottom_area {
        padding-left: 2vw;
    }

    .point_content_bottom_area_ttl::before {
        content: "";
        background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/icon1.svg);
        position: absolute;
        background-repeat: no-repeat;
        padding: 0.5vw;
        left: -1.5vw;
        top: 25%;
    }

    .point_content_bottom_area_text_wrap {
        margin-top: 2.5vw;
    }

    .point_content_wrap {
        background-color: #fdf4e1;
        padding: 2vw 4vw 4vw 4vw;
    }

    .point_row_content img {
        border-radius: 0.5em;
    }



    @media (max-width: 767px) {
        .point_section_content {
            flex-direction: column;
            padding-bottom: 2em;
        }

        .point_row {
            width: 100%;
        }

        .point_row {
            padding-top: 7vw;
        }

        .point_content_bottom_area_text_wrap {
            margin-top: 2.5vw;
        }

        .point_content_bottom_area {
            padding-left: 2em;
            padding-top: 3vw;
        }

        .point_content_bottom_area_ttl::before {
            padding: 10px;
            left: -25px;
            top: 4px;
        }

        .point_content_bottom_area_ttl {
            margin-bottom: 1vw;
        }

        .point_section_header {
            font-size: 1.4em;
            padding: 2vw 0;
        }

        .point_content_bottom_area .content_ttl,
        .purity_unknown_section .content_ttl {
            margin-bottom: 1vw;
        }

    }

    /* ポイントコンテンツ  */

    /* 純度不明コンテンツ */
    .purity_unknown_section_content {
        display: flex;
        gap: 0 4%;
    }

    .purity_unknown_section_content:not(:last-child) {
        margin-bottom: 4%;
    }

    .purity_unknown_section_content_wrap.Rounding {
        background-color: #fcf5e2;
        padding: 4vw;
    }

    .purity_unknown_section_content img {
        width: 10%;
    }

    @media (max-width: 767px) {
        .purity_unknown_section_content {
            flex-direction: column;
        }

        .purity_unknown_section_content img {
            width: 30%;
            margin: auto;
            margin-bottom: 4vw;
            margin-top: 6vw;
        }

    }


    /* 純度不明コンテンツ */

    /* どんなアイテムでもコンテンツ */
    .any_item_content_wrap {
        display: flex;
        flex-wrap: wrap;
        gap: 0 5%;
    }

    .any_item_content {
        width: 12.5%;
        margin-bottom: 3%;
        text-align: center;
    }

    @media (max-width: 767px) {
        .any_item_content_wrap {
            gap: 0 2%;
            justify-content: space-between;
        }

        .any_item_content {
            width: 46%;
            margin-bottom: 10%;
        }

    }

    /* どんなアイテムでもコンテンツ */
</style>

<body class="categories_body">
    <?php get_header(); ?>
    <main>

        <!-- FV -->
        <div class="categories_mv_area">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/gold_pc.webp">
                <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/gold_sp.webp" alt="高價收購黃金">
            </picture>
        </div>
        <!-- FV -->

        <!-- 見出し -->
        <section class="header_text_section">
            <div class="header_text_area">
                <h1>OTAKARAYA<br class="is-sp"><span>高價收購黃金</span></h1>
                <div>
                    OTAKARAYA高價收購黃金<br>
                    OTAKARAYA在日本全國有1000間以上的分店，收購專門店No1！<br>
                    經驗豐富的鑑定師遍佈日本全國，我們會提供令你滿意的收購價格。
                </div>
            </div>
        </section>
        <!-- 見出し -->




        <!-- 相場表 purchase_market_reference -->
        <?php get_template_part('template-parts/purchase_market_reference'); ?>
        <!-- 相場表  -->



        <!-- ポイントコンテンツ -->
        <section class="point_section point_gold_section">
            <div class="content_header">
                <h2>現在正是出售黃金的好時機！</h2>
            </div>
            <div class="point_section_content_wrap Rounding">
                <div class="point_section_header content_ttl">
                    放售黃金時的三個要點
                </div>
                <div class="point_content_wrap">
                    <div class="point_section_content">
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT1</div>
                                <div class="point_row_content_header content_ttl">黃金的收購價格水平</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point/img1.webp" alt="黃金的收購價格水平">
                                <div class="point_row_content_text">黃金價格每天都在變化，每克黃金的價格一天內可能會波動數十元或更多，您出售的黃金越多（越重），價格波動就越大。</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT2</div>
                                <div class="point_row_content_header content_ttl">黃金純度</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point/img2.webp" alt="黃金的收購價格水平">
                                <div class="point_row_content_text">金的純度（含量）各有不同，如 24K、22K或 18K金。標註的數字越高，黃金含量愈多，回收價愈高。</div>
                            </div>
                        </div>
                        <div class="point_row">
                            <div class="point_row_content">
                                <div class="point_row_content_top_text">POINT3</div>
                                <div class="point_row_content_header content_ttl">黃金重量</div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/point/img3.webp" alt="黃金的收購價格水平">
                                <div class="point_row_content_text">每克黃金都有一個參考回收價，估價會與黃金重量成正比OTAKARAYA的黃金重量的測量精確到 0.1 克，黃金的價值會被準確計算出來。</div>
                            </div>
                        </div>
                    </div>
                    <div class="point_content_bottom_area">
                        <div class="point_content_bottom_area_text_wrap">
                            <div class="point_content_bottom_area_ttl content_ttl">
                                為什麼OTAKARAYA可以高價收購黃金
                            </div>
                            <div class="point_content_bottom_area_text">
                                OTAKARAYA是一家專門從事收購的專門店，不僅在日本國內，我們也與世界44個國家的企業進行採購。因為沒有直營商店，降低了銷售時產生的成本，所以我們可以高價收購您的黃金。
                            </div>
                        </div>
                        <div class="point_content_bottom_area_text_wrap">
                            <div class="point_content_bottom_area_ttl content_ttl">
                                過去30年黃金市場的價格及趨勢
                            </div>
                            <div class="point_content_bottom_area_text">
                                30 年前的1990 年代，黃金價格每克約 1,000 至 1,500 日元，在今天是難以想像的。
                                然而，受雷曼事件和新冠疫情等不穩定的社會狀況的影響，被視為「安全資產」的黃金價格逐漸飆升。
                                截至2024年，黃金價格每克超過10,000日元，創歷史新高。
                            </div>
                        </div>
                        <div class="point_content_bottom_area_text_wrap">
                            <div class="point_content_bottom_area_ttl content_ttl">
                                高價出售黃金的技巧
                            </div>
                            <div class="point_content_bottom_area_text">
                                高價出售黃金的技巧是「在金價高的時候出售」和「賣給會以高價收購的專賣店」。
                                目前金價正在飆升，是賣出的最佳時機。
                                OTAKARAYA在日本擁有超過1000多間門市，被譽為高價收購NO.1，專業估價師將給您滿意的收購價格，請放心交給我們
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- ポイントコンテンツ -->

        <!-- 純度不明コンテンツ -->
        <section class="purity_unknown_section">
            <div class="content_header">
                <h2>不清楚純度的黃金也請放心交給我們吧</h2>
            </div>

            <div class="purity_unknown_section_content_wrap Rounding">
                <div class="purity_unknown_section_content">
                    <img class="purity_unknown_section_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/purity_unknown/img1.webp" alt="">
                    <div class="purity_unknown_section_content_text_area">
                        <div class="purity_unknown_section_content_ttl content_ttl">
                            關於黃金的品級
                        </div>
                        <div class="purity_unknown_section_content_text">
                            黃金的純度以24分率表示，如24K金、18K金、10K金等。除了刻有記印以外，某些黃金還會有造幣廠的刻印。
                            刻印不會直接提高黃金的價值，但由於市場上流通的黃金種類繁多，刻印對安全交易非常重要。
                            有部分海外製品沒有刻印，很難從肉眼判斷純度。但請放心，我們也會收購沒有刻印的黃金，請聯絡我們。
                        </div>
                    </div>
                </div>
                <div class="purity_unknown_section_content">
                    <img class="purity_unknown_section_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/purity_unknown/img2.webp" alt="">
                    <div class="purity_unknown_section_content_text_area">
                        <div class="purity_unknown_section_content_ttl content_ttl">
                            準確測量未知純度的貴金屬
                        </div>
                        <div class="purity_unknown_section_content_text">
                            如果您不確定貴金屬的純度，或者貴金屬上沒有刻印，請不要擔心。
                            即使是低純度的黃金或由多種金屬組成的合金，我們也能在短時間內精確測量其價值，並當場以現金收購。即使您的物品被其他商店拒收，也請隨時與我們聯繫。
                        </div>
                    </div>
                </div>
                <div class="purity_unknown_section_content">
                    <img class="purity_unknown_section_content_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/purity_unknown/img3.webp" alt="">
                    <div class="purity_unknown_section_content_text_area">
                        <div class="purity_unknown_section_content_ttl content_ttl">
                            在評估黃金首飾的價值時，我們會考慮珠寶的價值和配件的設計
                        </div>
                        <div class="purity_unknown_section_content_text">
                            OTAKARAYA在收購黃金產品時，不僅會評估黃金本身的價值，還會評估珠寶的價值和配件的設計。
                            OTAKARAYA是一家收購各種貴金屬的專門店，因此我們能夠提供高額的估價。
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- 純度不明コンテンツ -->


        <!-- どんなアイテムでもコンテンツ -->
        <section class="any_item_section">
            <div class="content_header">
                <h2 style="color: #000;">任何狀態的黃金我們也樂意收購，<br class="is-pc">即使是少量黃金或破損的配件。</h2>
            </div>
            <div class="any_item_content_wrap">
                <?php
                $i = 1;
                $varNames = array("彎曲或破損的黃金", "無刻印的黃金", "少量黃金，如一隻耳環", "腰帶的金屬配件", "工業用黃金", "考慮藝術價值", "考慮古董價值", "金牙、金假牙", "掉了寶石的戒指", "發黑的首飾", "只有吊墜的首飾", "胸針和其他金屬配件",);
                ?>
                <?php foreach ($varNames as $name) { ?>
                    <div class="any_item_content">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/any_item/img<?php echo $i; ?>.webp" alt="<?php echo $name; ?>">
                        <div class="any_item_content_text"><?php echo $name ?></div>
                    </div>
                <?php $i++;
                } ?>
            </div>
        </section>
        <!-- どんなアイテムでもコンテンツ -->

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





</html>