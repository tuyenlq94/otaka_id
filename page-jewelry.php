<?php
/* Template Name: 宝石トップページ */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <?php get_template_part('head2'); ?>


    <!-- local css -->


    <link rel="stylesheet" type="text/css" href="../css/jewelry.min.css">
    <link rel="stylesheet" href="../css/renew202404_2.css">
    <link rel="stylesheet" href="../css/vertical-m.css">
    <link rel="stylesheet" type="text/css" href="../css/shared.css">
    <link rel="stylesheet" type="text/css" href="../css/daiya.css">
    <title><?php echo get_the_title(); ?></title>

    <style>
        #jewelry .jewelrySoubaBox__table table .table__items .table__item.price::after {
            content: none;
        }

        #jewelry .jewelrySoubaBox__table table .table__items .table__item.price::before {
            font-size: 68.75%;
            font-weight: normal;
            content: "HK$";
        }

        #jewelry .jewelrySoubaBox__form .form__answer .price .value {
            font-size: inherit;
            font-weight: unset;
        }
    </style>
</head>


<body id="jewelry">
    <?php get_header('common'); ?>

    <div id="topic__path" class="topic__path">
        <ol class="topic__path--list">
            <li class="topic__path--item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="/">
                    <span itemprop="name">Toko Spesialisasi Pembelian. Otakaraya TOP</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="topic__path--item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <span itemprop="name">Pembelian Batu Permata / Perhiasan</span>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>

    <div class="fv_img_wrap">
        <img class="is-pc" src="../images/daiya/2024_diamondhouseki_TOP_PC.webp" alt="">
        <img class="is-sp" src="../images/daiya/2024_diamondhouseki_TOP_SP.webp" alt="">
        <?php include __DIR__ . '/template-parts/fv_obi.php'; ?>
    </div>

    <?php get_template_part('template-parts/license'); ?>
    <?php get_template_part('template-parts/shop-info'); ?>

    <main class="contents">
        <article class="contents__left">
            <section>
                <!--     ▼▼▼ top_h2_text▼▼▼     -->
                <h2 class="titleHeading top_h2_text">
                Kunjungi Spesialis Toko Pembelian Otakaraya untuk Menilai dan Menjual Batu Permata / Perhiasan Anda
                </h2> <!--     ▲▲▲ top_h2_text▲▲▲     -->
                <div class="head_text">
                Di Otakaraya, kami membeli berbagai macam barang, mulai dari batu mulia seperti Berlian, Rubi, Safir, dan Zamrud hingga perhiasan mewah yang dibuat dari Emas dan Platinum. Berlian dievaluasi berdasarkan 4C (karat, warna, kejernihan, dan potongan), sedangkan batu permata lainnya dinilai secara akurat oleh penilai ahli kami berdasarkan karakteristik dan kelangkaannya. Kami juga mempertimbangkan desain dan kondisi perhiasan, memastikan kami menawarkan harga yang memuaskan. Silakan berkonsultasi dengan kami jika Anda mempertimbangkan untuk menjual item Anda.
                </div>
            </section>
            <section class="simple_cta_top">
                <div class="kv_area">
                    <p class="is-pc"><img src="../images/daiya/diamond_banner_PC.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
                    </p>
                    <p class="is-sp"><img src="../images/daiya/diamond_banner_SP.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
                    </p>
                </div>
            </section>

            <?php get_template_part('template-parts/assessment_cta'); ?>



            <?php
            // モジュール化すると変数をスクリプトに渡せないため
            //  get_template_part('template-parts/daiya_parts');
            ?>
            <?php if (isset($_GET['mode']) && $_GET['mode'] === 'test') { ?>

                <!-- MOD_20240417 -->
                <div class="renew_2024_dia_titlebox is-sp">
                    <h2 class="renew_2024_dia_title_h2">
                        <img class="renew_2024_dia_title_l"
                            src="../images/daiya/dia_image01_202404.png">
                        <img class="renew_2024_dia_title_r"
                            src="../images/daiya/dia_image02_202404.png">
                        <p>

                        </p>
                    </h2>
                    <div class="renew_2024_dia_title_lead">
                        <p>

                        </p>
                    </div>
                </div>
                <!-- MOD_20240417 -->

                <!-- ▼▼▼為替計算▼▼▼ -->
                <?php

                // REST APIからデータを取得する関数
                function fetch_wp_api_data($url)
                {
                    $response = wp_remote_get($url);

                    // エラーチェック
                    if (is_wp_error($response)) {
                        echo "Something went wrong: " . $response->get_error_message();
                        return null;
                    }

                    return json_decode(wp_remote_retrieve_body($response), true);
                }


                // APIエンドポイントのURL
                $daiya_api_url = 'https://www.otakaraya.jp/daiya/wp-json/wp/v2/pages/24486/';
                $kawase_rate_api_url = 'https://www.otakaraya.jp/daiya/wp-json/wp/v2/pages/23897/';

                // APIリクエストを実行
                $daiya_data = fetch_wp_api_data($daiya_api_url);
                $kawase_rate_daiya_data = fetch_wp_api_data($kawase_rate_api_url);

                // データが取得できたかチェック
                if (!$daiya_data || !$kawase_rate_daiya_data) {
                    return; // エラーが出た場合は処理を中断
                }

                // 為替レート取得
                $exchangeRate = $kawase_rate_daiya_data['acf']['kawase_rate'];;

                if (!is_numeric($exchangeRate)) {
                    $exchangeRate = 140;
                }


                // ダイヤモンド買取相場価格表のhtmlソースを管理画面から取得
                $price_all = get_page_by_path('price_all');
                $price_all = $price_all->ID;
                $table = $daiya_data['acf']['souba_price_all'];
                $carat_num = [
                    ["value" => "0.1", "label" => "01ct"],
                    ["value" => "0.2", "label" => "02ct"],
                    ["value" => "0.3", "label" => "03ct"],
                    ["value" => "0.4", "label" => "04ct"],
                    ["value" => "0.5", "label" => "05ct"],
                    ["value" => "0.6", "label" => "06ct"],
                    ["value" => "0.7", "label" => "07ct"],
                    ["value" => "0.8", "label" => "08ct"],
                    ["value" => "0.9", "label" => "09ct"],
                    ["value" => "1.0", "label" => "1ct"],
                    ["value" => "2.0", "label" => "2ct"],
                    ["value" => "3.0", "label" => "3ct"],
                    ["value" => "4.0", "label" => "4ct"],
                    ["value" => "5.0", "label" => "5ct"],
                    ["value" => "6.0", "label" => "6ct"],
                    ["value" => "7.0", "label" => "7ct"],
                    ["value" => "8.0", "label" => "8ct"],
                    ["value" => "9.0", "label" => "9ct"],
                    ["value" => "10.0", "label" => "10ct"]
                ];
                $carat_value = array_column($carat_num, 'value');
                $carat_label = array_column($carat_num, 'label');



                $daiya_cut = $daiya_data['acf']['daiya_cut'];
                $daiya_clarity = $daiya_data['acf']['daiya_clarity'];
                $daiya_color = $daiya_data['acf']['daiya_color'];


                // 相場価格(金額)を一覧取得する
                $souba_num = preg_match_all('/\<td class\=\"table__item price\"\>([\d.]+)\<\/td\>/', $table, $m);

                // APIのURL
                $rate_api_url = "https://api.exchangerate-api.com/v4/latest/JPY";

                // APIから為替レートを取得
                $rate_response = file_get_contents($rate_api_url);

                // エラーチェック
                if ($rate_response === false) {
                    echo "Failed to fetch exchange rate.";
                    return;
                }

                $rate_data = json_decode($rate_response, true);

                // JPYからHKDのレートを取得
                $exchange_rate_src = $rate_data['rates']['HKD'];

                $kawase_price = [];
                $cnt = 0;
                // 相場価格に対しカラット数をかける
                foreach ($m[0] as $index => $value) {
                    $interval = 660; // $interval の初期値を設定(各カラットの要素数が660)
                    $carat_index = floor(($cnt) / $interval); // カラットのインデックスを計算

                    // インデックスが carat_value の範囲内にあるかどうかを確認し、それに応じて $ct_num を設定
                    if ($carat_index >= 0 && $carat_index < count($carat_value)) {
                        $ct_num = $carat_value[$carat_index];
                    } else {
                        $ct_num = $carat_value[0];
                    }
                    // 相場価格に対し為替レートをかける
                    preg_match('/\d+(\.\d+)?/', $value, $matches);
                    $num = $matches[0];
                    $result = $num * $exchangeRate;
                    // 10のくらいで繰り上げ
                    $price = ceil($result / 100) * 100;

                    $price = $price * $ct_num;
                    $price = number_format(floor($price * $exchange_rate_src));
                    array_push($kawase_price, $price);

                    $cnt++;
                }

                ?>

                <section>
                    <h2 class="renew_2024_titlesub follow is-sp">
                        <div class="renew_2024_titlesub_topbar">
                            <div class="renew_2024_titlesub_topbar_center"></div>
                            <div class="renew_2024_titlesub_topbar_left"></div>
                            <div class="renew_2024_titlesub_topbar_right"></div>
                        </div>
                    </h2>
                    <section>
                        <div class="titleMain titleMain--wrapper is-pc">
                            <h2 class="titleMain--main">

                            </h2>
                            <div class="titleMain--lead">
                                <p>

                                </p>
                            </div>
                        </div>
                        <div class="carat_select">select carat</div>
                        <div class="scroll-box">
                            <div class="f_area">
                                <div class="tabbox">0.1</div>
                                <div class="tabbox">0.2</div>
                                <div class="tabbox">0.3</div>
                                <div class="tabbox">0.4</div>
                                <div class="tabbox">0.5</div>
                                <div class="tabbox">0.6</div>
                                <div class="tabbox">0.7</div>
                                <div class="tabbox">0.8</div>
                                <div class="tabbox">0.9</div>
                                <div class="tabbox active">1.0</div>
                                <div class="tabbox">2.0</div>
                                <div class="tabbox">3.0</div>
                                <div class="tabbox">4.0</div>
                                <div class="tabbox">5.0</div>
                                <div class="tabbox">6.0</div>
                                <div class="tabbox">7.0</div>
                                <div class="tabbox">8.0</div>
                                <div class="tabbox">9.0</div>
                                <div class="tabbox">10.0</div>
                            </div>
                        </div>
                        <div class="jewelrySoubaBox">
                            <div class="jewelrySoubaBox__title">
                                <h3>Tabel Referensi Harga Pembelian berlian</h3>
                            </div>
                            <div class="jewelrySoubaBox__body">
                                <div class="jewelrySoubaBox__table">
                                    <!-- <div class="jewelry__category__time text--center">最終更新日：2024/01/16/</div> -->
                                    <div class="jewelry__category__time text--center">最後更新日期：2024/12/19</div>
                                    <div class="jewelrySoubaBox__table__scroll">
                                        <div id="pricelistframe" class="inner">
                                            <?php
                                            // カラットページの処理。一致するカラットに対応するコンテンツを表示
                                            echo $table;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="jewelrySoubaBox__table__attend">
                            <dl class="attendList">
                                <dt class="attendList__title">注意事項</dt>
                                <dd class="attendList__item">價格已包含稅。</dd>
                                <dd class="attendList__item">鑽石的等級可能會因簽發證書的認證機構不同而有所差異。</dd>
                                <dd class="attendList__item">此為圓形明亮式切割鑽石的價格。</dd>
                                <dd class="attendList__item">價格表僅供參考，並不保證收購價格。</dd>
                                <dd class="attendList__item">淨度為FL的鑽石一般不會在二手市場流通，因此不會在價格表中列出。</dd>
                                <dd class="attendList__item">顏色等級在N級以上的鑽石將被視為彩色鑽石，價格會根據個別情況處理。</dd>
                            </dl>
                        </section>
                        <section>
                            <div class="titleMain titleMain--wrapper is-pc">
                                <h2 class="titleMain--main">
                                    參考收購價格表的使用方法
                                </h2>
                            </div>
                            <h2 class="renew_2024_titlesub is-sp">
                                <div class="renew_2024_titlesub_topbar">
                                    <div class="renew_2024_titlesub_topbar_center"></div>
                                    <div class="renew_2024_titlesub_topbar_left"></div>
                                    <div class="renew_2024_titlesub_topbar_right"></div>
                                </div>
                                參考收購價格表的使用方法
                            </h2>
                            <div class="wd_carattable_superbox">
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_flex_arrowtext">
                                        大
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_l.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowbar">
                                        <div class="wd_carattable_flex_kind">
                                            克拉
                                        </div>
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_r.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowtext">
                                        小
                                    </div>
                                </div>
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_caratitem">10</div>
                                    <div class="wd_carattable_caratitem">5</div>
                                    <div class="wd_carattable_caratitem">3</div>
                                    <div class="wd_carattable_caratitem">1</div>
                                    <div class="wd_carattable_caratitem">0.9</div>
                                    <div class="wd_carattable_caratitem">0.8</div>
                                    <div class="wd_carattable_caratitem">0.7</div>
                                    <div class="wd_carattable_caratitem">0.6</div>
                                    <div class="wd_carattable_caratitem">0.5</div>
                                    <div class="wd_carattable_caratitem">0.4</div>
                                    <div class="wd_carattable_caratitem">0.3</div>
                                    <div class="wd_carattable_caratitem">0.2</div>
                                    <div class="wd_carattable_caratitem">0.1</div>
                                </div>
                            </div> <!-- wd_carattable_superbox -->
                            <div class="wd_carattable_superbox">
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_flex_arrowtext_s">
                                        淨度高
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_l.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowbar">
                                        <div class="wd_carattable_flex_kind">
                                            顏色
                                        </div>
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_r.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowtext_s">
                                        Low transparency
                                    </div>
                                </div>
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_coloritem">D</div>
                                    <div class="wd_carattable_coloritem">E</div>
                                    <div class="wd_carattable_coloritem">F</div>
                                    <div class="wd_carattable_coloritem">G</div>
                                    <div class="wd_carattable_coloritem">H</div>
                                    <div class="wd_carattable_coloritem">I</div>
                                    <div class="wd_carattable_coloritem">J</div>
                                    <div class="wd_carattable_coloritem">K</div>
                                    <div class="wd_carattable_coloritem">L</div>
                                    <div class="wd_carattable_coloritem">M</div>
                                </div>
                            </div> <!-- wd_carattable_superbox -->
                            <div class="wd_carattable_superbox">
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_flex_arrowtext">
                                        High
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_l.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowbar">
                                        <div class="wd_carattable_flex_kind">
                                            Cut
                                        </div>
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_r.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowtext">
                                        Low
                                    </div>
                                </div>
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_cutitem">3EX</div>
                                    <div class="wd_carattable_cutitem">EXELLENT</div>
                                    <div class="wd_carattable_cutitem">VERY <br class="is-sp">GOOD</div>
                                    <div class="wd_carattable_cutitem">GOOD</div>
                                    <div class="wd_carattable_cutitem">FAIR</div>
                                    <div class="wd_carattable_cutitem">POOR</div>
                                </div>
                            </div> <!-- wd_carattable_superbox -->


                            <div class="wd_carattable_superbox">
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_flex_arrowtext">
                                        High
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_l.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowbar">
                                        <div class="wd_carattable_flex_kind">
                                            Clarity
                                        </div>
                                    </div>
                                    <div class="wd_carattable_flex_arrowbox">
                                        <img src="../images/daiya/arrow_carathigh_r.png">
                                    </div>
                                    <div class="wd_carattable_flex_arrowtext">
                                        Low
                                    </div>
                                </div>
                                <div class="wd_carattable_flex">
                                    <div class="wd_carattable_clarityitem">IF</div>
                                    <div class="wd_carattable_clarityitem">VVS1</div>
                                    <div class="wd_carattable_clarityitem">VVS2</div>
                                    <div class="wd_carattable_clarityitem">VS1</div>
                                    <div class="wd_carattable_clarityitem">VS2</div>
                                    <div class="wd_carattable_clarityitem">SI1</div>
                                    <div class="wd_carattable_clarityitem">SI2</div>
                                    <div class="wd_carattable_clarityitem">I1</div>
                                    <div class="wd_carattable_clarityitem">I2</div>
                                    <div class="wd_carattable_clarityitem">I3</div>
                                </div>
                            </div> <!-- wd_carattable_superbox -->
                        </section>
                    </section>
                    <h3 class="renew_2024_titlesub is-sp">
                        <div class="renew_2024_titlesub_topbar">
                            <div class="renew_2024_titlesub_topbar_center"></div>
                            <div class="renew_2024_titlesub_topbar_left"></div>
                            <div class="renew_2024_titlesub_topbar_right"></div>
                        </div>
                        模擬持有鑑定書時的鑽石收購
                    </h3>
                    <section>
                        <section>
                            <div class="jewelrySoubaBox">
                                <!-- MOD_20240417 -->
                                <h3 class="titleSub is-pc">
                                    模擬持有鑑定書時的鑽石收購
                                </h3>

                                <!-- tab -->
                                <ul class="jewelrySoubaBox__header flex__tab">
                                    <li class="tab__item active"><a class="price_table_contents_nav1">只有寶石的狀態</a></li>
                                    <li class="tab__item"><a class="price_table_contents_nav2">附有金飾品的鑽石</a></li>
                                </ul>
                                <!-- contact -->
                                <div class="flex__tabContents kantei">
                                    <!-- tab1 鑑定書-->
                                    <div id="searchbox" class="tab1 searchbox jewelrySoubaBox__body flex__content active">
                                        <div class="jewelrySoubaBox__form">
                                            <p class="form__lead text--center">請查看鑑定書上記載的4C，並從下面表格確認收購參考金額。<br>
                                                即使沒有鑑定書，我們也會進行收購，歡迎隨時聯繫我們。</p>
                                            <dl>
                                                <dt><label for="carat">Carat</label></dt>
                                                <dd>
                                                    <div class="form__liner">
                                                        <select name="carat" id="jewelrySoubaBox__carat--select">
                                                            <option value="">請選擇克拉</option>
                                                            <option value="01ct">0.1ct</option>
                                                            <option value="02ct">0.2ct</option>
                                                            <option value="03ct">0.3ct</option>
                                                            <option value="04ct">0.4ct</option>
                                                            <option value="05ct">0.5ct</option>
                                                            <option value="06ct">0.6ct</option>
                                                            <option value="07ct">0.7ct</option>
                                                            <option value="08ct">0.8ct</option>
                                                            <option value="09ct">0.9ct</option>
                                                            <option value="1ct">1.0ct</option>
                                                            <option value="2ct">2.0ct</option>
                                                            <option value="3ct">3.0ct</option>
                                                            <option value="4ct">4.0ct</option>
                                                            <option value="5ct">5.0ct</option>
                                                            <option value="6ct">6.0ct</option>
                                                            <option value="7ct">7.0ct</option>
                                                            <option value="8ct">8.0ct</option>
                                                            <option value="9ct">9.0ct</option>
                                                            <option value="10ct">10.0ct</option>
                                                            <!-- <option value="03ct">0.3ct</option> -->
                                                        </select>
                                                    </div>
                                                </dd>
                                                <dt><label for="color">Colour</label></dt>
                                                <dd>
                                                    <div class="form__liner">
                                                        <select name="color" id="jewelrySoubaBox__color--select">
                                                            <option value="">請選擇顏色</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                            <option value="G">G</option>
                                                            <option value="H">H</option>
                                                            <option value="I">I</option>
                                                            <option value="J">J</option>
                                                            <option value="K">K</option>
                                                            <option value="L">L</option>
                                                            <option value="M">M</option>
                                                        </select>
                                                    </div>
                                                </dd>
                                                <dt><label for="clarity">Quolity</label></dt>
                                                <dd>
                                                    <div class="form__liner">
                                                        <select name="clarity" id="jewelrySoubaBox__clarity--select">
                                                            <option value="">請選擇淨度</option>
                                                            <option value="if">IF</option>
                                                            <option value="vvs1">VVS1</option>
                                                            <option value="vvs2">VVS2</option>
                                                            <option value="vs1">VS1</option>
                                                            <option value="vs2">VS2</option>
                                                            <option value="si1">SI1</option>
                                                            <option value="si2">SI2</option>
                                                            <option value="i1">I1</option>
                                                            <option value="i1-">I1-</option>
                                                            <option value="i2">I2</option>
                                                            <option value="i3">I3</option>
                                                            <!-- <option value="vvs1">VVS1</option> -->
                                                        </select>
                                                    </div>
                                                </dd>
                                                <dt><label for="cut">Cut</label></dt>
                                                <dd>
                                                    <div class="form__liner">
                                                        <select name="cut" id="jewelrySoubaBox__cut--select">
                                                            <option value="">請選擇切工</option>
                                                            <option value="3ex">3EX</option>
                                                            <option value="excellent">Excellent</option>
                                                            <option value="verygood">Verygood</option>
                                                            <option value="good">Good</option>
                                                            <option value="fair">Fair</option>
                                                            <option value="poor">Poor</option>
                                                            <!-- <option value="excellent">Excellent</option> -->
                                                        </select>
                                                    </div>
                                                </dd>
                                            </dl>
                                            <div class="btn__wrap btn__red">
                                                <button id="price-search" class="tab1 souba gtm-simu-daiya1" type="button">查詢此內容的收購參考金額</button>
                                            </div>

                                            <div class="form__answer">
                                                <div id="diamond_price_table_display_inner" class="form__answer--inner">
                                                    <div class="sumTitle">您的物品收購參考金額：</div>
                                                    <div id="price_table_calc" class="tab1 price"><span class="value">HK$</span>0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- tab2 鑑定書-->
                                    <div id="diamond_price_table_display_2" class="jewelrySoubaBox__body flex__content">
                                        <div id="price" class="jewelrySoubaBox__form">
                                            <p class="form__lead text--center">請查看鑑定書上記載的4C，並從下面表格確認收購參考金額。<br>
                                                即使沒有鑑定書，我們也會進行收購，歡迎隨時聯繫我們。</p>
                                            <dl>
                                                <dt><label for="carat">金飾品</label></dt>
                                                <dd>
                                                    <div class="form__wrap">
                                                        <div class="form__liner">
                                                            <select name="carat" id="simulation_select">
                                                                <option value="" selected="selected">金の品位</option>
                                                                <option v-bind:value="au_ingod_price">インゴット（金）</option>
                                                                <option v-bind:value="au_scrap[0].price">K24</option>
                                                                <option v-bind:value="au_scrap[1].price">K22</option>
                                                                <option v-bind:value="au_scrap[2].price">K21.6</option>
                                                                <option v-bind:value="au_scrap[3].price">K20</option>
                                                                <option v-bind:value="au_scrap[4].price">K18</option>
                                                                <option v-bind:value="au_scrap[5].price">K14</option>
                                                                <option v-bind:value="au_scrap[6].price">K10</option>
                                                                <option v-bind:value="au_scrap[7].price">K9</option>
                                                                <option v-bind:value="au_scrap[8].price">K18WG</option>
                                                                <option v-bind:value="au_scrap[9].price">K14WG</option>
                                                                <option v-bind:value="pt_ingod_price">インゴット（プラチナ）</option>
                                                                <option v-bind:value="pt_scrap[0].price">Pt1000</option>
                                                                <option v-bind:value="pt_scrap[1].price">Pt950</option>
                                                                <option v-bind:value="pt_scrap[2].price">Pt900</option>
                                                                <option v-bind:value="pt_scrap[3].price">Pt850</option>
                                                            </select>
                                                        </div>
                                                        <span class="form--symbol">x</span>
                                                        <div class="form__liner form__liner--weight">
                                                            <input type="number" id="weight" min="0" max="100000" placeholder="0">
                                                        </div>
                                                    </div>
                                                </dd>
                                                <dd class="border"></dd>
                                            </dl>
                                            <section id="tablelistbox">
                                                <div id="" class="tab2 searchbox">
                                                    <dl>
                                                        <dt><label for="carat">Carat</label></dt>
                                                        <dd>
                                                            <div class="form__liner">
                                                                <select name="carat" id="jewelrySoubaBox__carat--select">
                                                                    <option value="">請選擇克拉</option>
                                                                    <option value="01ct">0.1ct</option>
                                                                    <option value="02ct">0.2ct</option>
                                                                    <option value="03ct">0.3ct</option>
                                                                    <option value="04ct">0.4ct</option>
                                                                    <option value="05ct">0.5ct</option>
                                                                    <option value="06ct">0.6ct</option>
                                                                    <option value="07ct">0.7ct</option>
                                                                    <option value="08ct">0.8ct</option>
                                                                    <option value="09ct">0.9ct</option>
                                                                    <option value="1ct">1.0ct</option>
                                                                    <option value="2ct">2.0ct</option>
                                                                    <option value="3ct">3.0ct</option>
                                                                    <option value="4ct">4.0ct</option>
                                                                    <option value="5ct">5.0ct</option>
                                                                    <option value="6ct">6.0ct</option>
                                                                    <option value="7ct">7.0ct</option>
                                                                    <option value="8ct">8.0ct</option>
                                                                    <option value="9ct">9.0ct</option>
                                                                    <option value="10ct">10.0ct</option>
                                                                    <!-- <option value="03ct">0.3ct</option> -->
                                                                </select>
                                                            </div>
                                                        </dd>
                                                        <dt><label for="color">Colour</label></dt>
                                                        <dd>
                                                            <div class="form__liner">
                                                                <select name="color" id="jewelrySoubaBox__color--select">
                                                                    <option value="">請選擇顏色</option>
                                                                    <option value="D">D</option>
                                                                    <option value="E">E</option>
                                                                    <option value="F">F</option>
                                                                    <option value="G">G</option>
                                                                    <option value="H">H</option>
                                                                    <option value="I">I</option>
                                                                    <option value="J">J</option>
                                                                    <option value="K">K</option>
                                                                    <option value="L">L</option>
                                                                    <option value="M">M</option>
                                                                </select>
                                                            </div>
                                                        </dd>
                                                        <dt><label for="clarity">Quolity</label></dt>
                                                        <dd>
                                                            <div class="form__liner">
                                                                <select name="clarity" id="jewelrySoubaBox__clarity--select">
                                                                    <option value="">請選擇淨度</option>
                                                                    <option value="if">IF</option>
                                                                    <option value="vvs1">VVS1</option>
                                                                    <option value="vvs2">VVS2</option>
                                                                    <option value="vs1">VS1</option>
                                                                    <option value="vs2">VS2</option>
                                                                    <option value="si1">SI1</option>
                                                                    <option value="si2">SI2</option>
                                                                    <option value="i1">I1</option>
                                                                    <option value="i1-">I1-</option>
                                                                    <option value="i2">I2</option>
                                                                    <option value="i3">I3</option>
                                                                    <!-- <option value="vvs1">VVS1</option> -->
                                                                </select>
                                                            </div>
                                                        </dd>
                                                        <dt><label for="cut">Cut</label></dt>
                                                        <dd>
                                                            <div class="form__liner">
                                                                <select name="cut" id="jewelrySoubaBox__cut--select">
                                                                    <option value="">請選擇切工</option>
                                                                    <option value="3ex">3EX</option>
                                                                    <option value="excellent">Excellent</option>
                                                                    <option value="verygood">Verygood</option>
                                                                    <option value="good">Good</option>
                                                                    <option value="fair">Fair</option>
                                                                    <option value="poor">Poor</option>
                                                                    <!-- <option value="excellent">Excellent</option> -->
                                                                </select>
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                    <div class="btn__wrap btn__red">
                                                        <button id="" class="tab2 souba gtm-simu-daiya1" type="button">查詢此內容的收購參考金額</button>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="form__answer">

                                                <div class="form__answer--inner">
                                                    <div class="sumTitle">金的參考價格</div>
                                                    <div class="price">
                                                        <input readonly="readonly" class="gold_price_table_calc_num" type="text" id="answer" value="0">
                                                    </div>
                                                </div>

                                                <div class="form__answer--inner hasBorder">
                                                    <div class="sumTitle">鑽石的參考價格</div>
                                                    <div id="" class="tab2 price"><span class="value">HK$</span>0</div>
                                                </div>

                                                <div class="form__answer--inner">
                                                    <div class="sumTitle">您的物品收購參考金額：</div>
                                                    <div id="daiya_gold_calc" class="price"><span class="value">HK$</span>0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </section>
                    <h3 class="renew_2024_titlesub is-sp">
                        <div class="renew_2024_titlesub_topbar">
                            <div class="renew_2024_titlesub_topbar_center"></div>
                            <div class="renew_2024_titlesub_topbar_left"></div>
                            <div class="renew_2024_titlesub_topbar_right"></div>
                        </div>
                        模擬只知鑽石的克拉的鑽石收購
                    </h3>
                    <section>
                        <div id="price_table_contents1" class="jewelrySoubaBox">
                            <!-- MOD_20240417 -->
                            <h3 class="titleSub is-pc">
                                模擬只知鑽石的克拉的鑽石收購
                            </h3>

                            <!-- tab -->
                            <ul class="jewelrySoubaBox__header flex__tab">
                                <li class="tab__item active"><a>只有寶石的狀態</a></li>
                                <li class="tab__item"><a>附有金飾品的鑽石</a></li>
                            </ul>
                            <!-- contact -->
                            <div class="flex__tabContents">
                                <!-- tab1 -->
                                <div class="jewelrySoubaBox__body flex__content active">
                                    <div class="jewelrySoubaBox__form">
                                        <dl>
                                            <dt><label for="carat_only">カラット数</label></dt>
                                            <dd>
                                                <div id="carat_only_price_area" class="form__liner">
                                                    <select name="carat_only" id="jewelrySoubaBox__carat--select">
                                                        <option value="">カラット数を選択してください</option>
                                                        <option value="01ct">0.1ct</option>
                                                        <option value="02ct">0.2ct</option>
                                                        <option value="03ct">0.3ct</option>
                                                        <option value="04ct">0.4ct</option>
                                                        <option value="05ct">0.5ct</option>
                                                        <option value="06ct">0.6ct</option>
                                                        <option value="07ct">0.7ct</option>
                                                        <option value="08ct">0.8ct</option>
                                                        <option value="09ct">0.9ct</option>
                                                        <option value="1ct">1.0ct</option>
                                                        <option value="2ct">2.0ct</option>
                                                        <option value="3ct">3.0ct</option>
                                                        <option value="4ct">4.0ct</option>
                                                        <option value="5ct">5.0ct</option>
                                                        <option value="6ct">6.0ct</option>
                                                        <option value="7ct">7.0ct</option>
                                                        <option value="8ct">8.0ct</option>
                                                        <option value="9ct">9.0ct</option>
                                                        <option value="10ct">10.0ct</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="btn__wrap btn__red">
                                            <button id="carat_only_btn1" class="souba gtm-simu-daiya2" type="button">查詢此內容的收購參考金額</button>
                                        </div>

                                        <div class="form__answer">

                                            <div class="form__answer--inner">
                                                <div class="sumTitle">您的物品收購參考金額：</div>
                                                <div id="carat_only_price" class="price"><span class="value">HK$</span>0</div>
                                            </div>
                                        </div>
                                        <p class="caution">注意事項<br>
                                            ※模擬是假設顏色為「D」，淨度為「IF」，切工為「3EX」。</p>
                                    </div>
                                </div>
                                <!-- tab2 -->
                                <div id="simulation" class="carat_and_gold_price jewelrySoubaBox__body flex__content">
                                    <div class="jewelrySoubaBox__form">
                                        <dl>
                                            <dt><label for="carat">金飾品</label></dt>
                                            <dd>
                                                <div class="form__wrap">
                                                    <div class="form__liner">
                                                        <select name="carat" id="simulation_select2">
                                                            <option value="" selected="selected">金の品位</option>
                                                            <option v-bind:value="au_ingod_price">インゴット（金）</option>
                                                            <option v-bind:value="au_scrap[0].price">K24</option>
                                                            <option v-bind:value="au_scrap[1].price">K22</option>
                                                            <option v-bind:value="au_scrap[2].price">K21.6</option>
                                                            <option v-bind:value="au_scrap[3].price">K20</option>
                                                            <option v-bind:value="au_scrap[4].price">K18</option>
                                                            <option v-bind:value="au_scrap[5].price">K14</option>
                                                            <option v-bind:value="au_scrap[6].price">K10</option>
                                                            <option v-bind:value="au_scrap[7].price">K9</option>
                                                            <option v-bind:value="au_scrap[8].price">K18WG</option>
                                                            <option v-bind:value="au_scrap[9].price">K14WG</option>
                                                            <option v-bind:value="pt_ingod_price">インゴット（プラチナ）</option>
                                                            <option v-bind:value="pt_scrap[0].price">Pt1000</option>
                                                            <option v-bind:value="pt_scrap[1].price">Pt950</option>
                                                            <option v-bind:value="pt_scrap[2].price">Pt900</option>
                                                            <option v-bind:value="pt_scrap[3].price">Pt850</option>
                                                        </select>
                                                    </div>
                                                    <span class="form--symbol">x</span>
                                                    <div class="form__liner form__liner--weight">
                                                        <input type="number" id="weight2" min="0" max="100000" placeholder="0">
                                                    </div>
                                                </div>
                                            </dd>
                                            <dd class="border"></dd>
                                            <dt><label for="carat">Carat</label></dt>
                                            <dd>
                                                <div id="carat_only_price_area2" class="form__liner">
                                                    <select name="carat">
                                                        <option value="">請選擇克拉</option>
                                                        <option value="01ct">0.1ct</option>
                                                        <option value="02ct">0.2ct</option>
                                                        <option value="03ct">0.3ct</option>
                                                        <option value="04ct">0.4ct</option>
                                                        <option value="05ct">0.5ct</option>
                                                        <option value="06ct">0.6ct</option>
                                                        <option value="07ct">0.7ct</option>
                                                        <option value="08ct">0.8ct</option>
                                                        <option value="09ct">0.9ct</option>
                                                        <option value="1ct">1.0ct</option>
                                                        <option value="2ct">2.0ct</option>
                                                        <option value="3ct">3.0ct</option>
                                                        <option value="4ct">4.0ct</option>
                                                        <option value="5ct">5.0ct</option>
                                                        <option value="6ct">6.0ct</option>
                                                        <option value="7ct">7.0ct</option>
                                                        <option value="8ct">8.0ct</option>
                                                        <option value="9ct">9.0ct</option>
                                                        <option value="10ct">10.0ct</option>
                                                    </select>
                                                </div>
                                            </dd>
                                        </dl>
                                        <div class="btn__wrap btn__red">
                                            <button id="carat_only_btn2" class="souba gtm-simu-daiya2" type="button">查詢此內容的收購參考金額</button>
                                        </div>

                                        <div class="form__answer">

                                            <div class="form__answer--inner">
                                                <div class="sumTitle">金的參考價格</div>
                                                <div class="price"><input class="gold_price_table_calc_num" type="text" id="answer2"
                                                        readonly="readonly" value="0"><span class="value">&yen;</span></div>
                                            </div>

                                            <div class="form__answer--inner hasBorder">
                                                <div class="sumTitle">鑽石的參考價格</div>
                                                <div class="price" id="carat_only_price2"><span class="value">HK$</span>0</div>
                                            </div>

                                            <div class="form__answer--inner">
                                                <div class="sumTitle">您的物品收購參考金額：</div>
                                                <div id="daiya_gold_calc2" class="price"><span class="value">HK$</span>0</div>
                                            </div>
                                        </div>
                                        <p class="caution">注意事項<br>
                                            ※模擬是假設顏色為「D」，淨度為「IF」，切工為「3EX」。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end カラット -->
                    </section>
                </section>



                <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
                <script>
                    $(document).ready(function() {
                        jQuery(document).ready(function($) {
                            var $listWrap = $("#tablelistbox"); //鑑定書あり部分のID
                            var $priceWrap = $("#pricelistframe"); //価格相場のID
                            var $searchWrap = $("#searchbox"); //select部分のID
                            var $selects = $searchWrap.find("select");
                            var $submit = $("#price-search"); //検索ボタンのID
                            var theCls = "the-price"; //使っていない
                            var hdnCls = "hidden";
                            //searchboxとprice-searchが重要
                            //

                            //var hdnLoadingCls = "hidden-loading";
                            //$listWrap.find("." + hdnLoadingCls).removeClass(hdnLoadingCls);


                            var reachScorllIfSp = function() {
                                if ($searchWrap.hasClass('sp-searchbox')) {
                                    var parentScrollTo = $searchWrap.offset().top;
                                    var currentScroll = $(window).scrollTop();
                                    if (currentScroll < parentScrollTo) {
                                        $("html,body").animate({
                                            scrollTop: parentScrollTo,
                                        }, {
                                            duration: 400,
                                        });
                                    }
                                }
                            };

                            var reachScroll = function(reach, cell) {
                                var timer;
                                var itvlNum = 0;
                                $(cell).addClass(theCls);
                                $priceWrap.stop().animate({
                                    scrollTop: reach,
                                }, {
                                    duration: 500,
                                    complete: function() {
                                        timer = setInterval(function() {
                                            itvlNum++;
                                            if (itvlNum >= 5 && $(cell).hasClass(theCls)) {
                                                clearInterval(timer);
                                                return;
                                            }
                                            $(cell).toggleClass(theCls);
                                        }, 300);
                                    }
                                });
                            };



                            //鑑定書をお持ちお持ちの方はこちら
                            function updateElementsAndEvents(tab) {
                                $('.kantei .' + tab + '.searchbox').attr('id', null);
                                $('.kantei .' + tab + ' button').attr('id', null);
                                $('.kantei .' + tab + '.price').attr('id', null);


                                var otherTab = (tab === 'tab1') ? 'tab2' : 'tab1';
                                $('.kantei .' + otherTab + '.searchbox').attr('id', 'searchbox');
                                $('.kantei .' + otherTab + ' button').attr('id', 'price-search');
                                $('.kantei .' + otherTab + '.price').attr('id', 'price_table_calc');


                                var $searchWrap = $("#searchbox");
                                var $selects = $searchWrap.find("select");
                                var $submit = $("#price-search");

                                // Attach event handler to $submit
                                //鑑定書をお持ちお持ちの方はこちら
                                $submit.on('click', function() {
                                    $priceWrap.find('td').removeClass(theCls);

                                    var vals = {};
                                    var errors = "";
                                    $.each($selects, function(k, ele) {
                                        var sidx = $(ele).prop('selectedIndex');

                                        var name = $(ele).attr("name");
                                        var $cOpt = $($(ele).find('option').get(sidx));
                                        var v = ("conditions" === name && $cOpt.length) ? $cOpt.html() : $(ele).val();
                                        var isEmpty = (0 === sidx && ("--" === v || "" === v));
                                        if (isEmpty) {
                                            var label = $(ele).parent().parent().prev('dt').find('label').html();
                                            errors += label + "を選択してください\n";
                                        }
                                        vals[name] = v;

                                    });

                                    if (errors) {
                                        alert(errors);
                                        return;
                                    }

                                    var $reachWrap = {};
                                    var point = {
                                        x: {
                                            s: 'thead th:not(.none)',
                                            f: function(idx) {
                                                return ($(this).html() === condition_val) ? idx : null;
                                            },
                                        },
                                        y: {
                                            s: 'tbody th',
                                            f: function(idx) {
                                                return ($(this).html() === color_val) ? idx : null
                                            },
                                        },
                                    };
                                    var reachAdjust = 8;

                                    var applyCellReach = true;


                                    var ct_id = "#ct-" + vals.carat; //変更

                                    var clarity = vals.clarity;
                                    var cut = vals.cut;
                                    var color = vals.color;
                                    var reach_id = ct_id + "-" + clarity;
                                    $reachWrap = $(reach_id);

                                    point.x.s = 'thead th';
                                    point.x.f = function(idx) {
                                        return ($(this).hasClass(cut)) ? idx : null;
                                    };
                                    point.y.s = 'tbody td[class*="color"]';
                                    point.y.f = function(idx) {
                                        return ($(this).html() === color) ? idx : null;
                                    };

                                    reachAdjust = 5;

                                    applyCellReach = false;


                                    if (!$reachWrap.length) return;

                                    var $table = $('table');
                                    var x = $table.find(point.x.s).map(point.x.f).get(0);
                                    var y = $table.find(point.y.s).map(point.y.f).get(0);
                                    var cell = $reachWrap.find("tr").eq(y).find("td").eq(x);
                                    reachScorllIfSp();

                                    applyCellReach = (y > 0 && applyCellReach) || false;

                                    var reach = (applyCellReach) ? $(cell).position().top : $reachWrap.position().top;
                                    reach = reach - $priceWrap.position().top;
                                    reach = $priceWrap.scrollTop() + reach - reachAdjust;

                                    // スクロール
                                    // reachScroll(reach, cell);
                                    $("#diamond_price_table_display_inner #price_table_calc").html(cell.text() +
                                        '<span class="value">HK$</span>');
                                    $("#diamond_price_table_display_2 #price_table_calc").html(cell.text() +
                                        '<span class="value">HK$</span>');

                                    daiya_calc = cell.text();
                                    daiya_calc = daiya_calc.replace(/en/g, '');
                                    daiya_calc = daiya_calc.replace(/,/g, '');
                                    daiya_calc = Number(daiya_calc);
                                    simulation_select_val = $("#simulation_select").val();
                                    simulation_select_val = simulation_select_val.replace(/,/g, '');
                                    simulation_select_val = Number(simulation_select_val);
                                    weight_val = $("#weight").val();
                                    weight_val = Number(weight_val);
                                    simulation_select_val = simulation_select_val * weight_val;
                                    gold_daiya_calc = simulation_select_val + daiya_calc;
                                    gold_daiya_calc = String(gold_daiya_calc).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                                    $("#daiya_gold_calc").html(gold_daiya_calc + '<span class="value">HK$</span>');

                                });
                            }

                            // Initial setup
                            updateElementsAndEvents('tab2');

                            // Event handlers
                            $(".price_table_contents_nav2").on('click', function() {
                                updateElementsAndEvents('tab1');
                            });

                            $(".price_table_contents_nav1").on('click', function() {
                                updateElementsAndEvents('tab2');
                            });


                            // new
                            // ページロード時に価格データを取得
                            var carat_num = <?php echo wp_json_encode($carat_num) ?>;
                            var prices = {};
                            for (var i = 0; i < carat_num.length; i++) {
                                var label = carat_num[i]['label'];
                                var id = "#ct-" + label + "-if";
                                var price = $(id + " > tr:nth-child(1) > td:nth-child(2)").text();
                                prices[label] = price;
                            }

                            function updatePrice(carat, target) {
                                var price = prices[carat];
                                if (price) {
                                    $(target).html(price + '<span class="value">HK$</span>');
                                }
                            }

                            $("#carat_only_btn1").on('click', function() {
                                var carat_only_price_area = $("#carat_only_price_area select").val();
                                updatePrice(carat_only_price_area, "#carat_only_price");
                            });

                            $(document).on('click', '#carat_only_btn2', function() {
                                var carat_only_price_area2 = $("#carat_only_price_area2 select").val();
                                console.log("Selected carat: ", carat_only_price_area2);
                                updatePrice(carat_only_price_area2, "#carat_only_price2");

                                var caratPrice = parseInt($("#carat_only_price2").text().replace(/[HK$,]/g, ''), 10);
                                var answer2 = parseInt($("#answer2").val().replace(/,/g, ''), 10);
                                var goldPriceVal = parseInt($("#simulation_select2").val().replace(/,/g, ''), 10);
                                var weight = parseFloat($("#weight2").val().replace(/,/g, ''));

                                var goldCalcPrice = goldPriceVal * weight;
                                if (isNaN(goldCalcPrice)) {
                                    goldCalcPrice = 0;
                                }
                                // var total = caratPrice + answer2 + goldCalcPrice;
                                var total = caratPrice + answer2;

                                $("#daiya_gold_calc2").html(total.toLocaleString() + '<span class="value">HK$</span>');
                            });


                            $(".price_table_contents_nav").on('click', function() {
                                $("#price_table_contents1 #price_table_calc").text("0");
                                $("#price_table_contents2 #price_table_calc").text("0");
                            });

                            // タブ処理
                            $("a[href='#price_table_contents2']").on('click', function() {
                                $(".arrow_bottom_daiya_default").css("display", "block");
                                $(".arrow_bottom_gold_default").css("display", "none");
                                $(".arrow_bottom_gold").css("display", "block");
                                $(".arrow_bottom_daiya").css("display", "none");
                                $("#diamond_price_table_display_inner .price_table_calc_area").css("display", "none");
                                $(".prompt_text_daiya").css("display", "none");
                                $(".prompt_text_gold").css("display", "block");
                            });
                            $("a[href='#price_table_contents1']").on('click', function() {
                                $(".arrow_bottom_daiya_default").css("display", "none");
                                $(".arrow_bottom_daiya").css("display", "block");
                                $("#diamond_price_table_display_inner .price_table_calc_area").css("display", "flex");
                                $(".prompt_text_gold").css("display", "none");
                                $(".prompt_text_daiya").css("display", "block");
                            });
                            let clone1 = $(".calc_area").clone();
                            $(".cloned_gold_calc").append(clone1);


                        });
                        const ua = navigator.userAgent;
                        if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {

                            // タブ処理
                            $("a[href='#price_table_contents2']").on('click', function() {
                                $("#tablelistbox h2").css("margin-top", "680px");
                                $("a[href='#price_table_contents2'] .arrow_bottom_gold").css("display", "none")
                                $("a[href='#price_table_contents2'] .arrow_bottom").css("display", "block")
                            });
                            $("a[href='#price_table_contents1']").on('click', function() {
                                $("#tablelistbox h2").css("margin-top", "160%");
                            });

                        } else {
                            // pc


                            jQuery(document).ready(function($) {
                                input_width = $(".otkr-plicelist #searchbox p input").width();
                                text_width = 130
                                arrow_width = 15;
                                margin_width = 10;
                                arrow_text_width = text_width + arrow_width + margin_width;
                                arrow_text_width_calc = input_width - arrow_text_width;
                                arrow_text_width_calc = arrow_text_width_calc / 2;
                                arrow_text_width_calc = arrow_text_width_calc + 22;
                                $(".otkr-plicelist #searchbox p input").css("padding-right", arrow_text_width_calc);
                            });


                            // タブ処理
                            $("a[href='#price_table_contents2']").on('click', function() {
                                var windowWidth = $(window).width();

                                if (windowWidth >= 1361) {
                                    $("#tablelistbox > h2").css("margin-top", "650px");
                                } else {
                                    $("#tablelistbox > h2").css("margin-top", "650px");
                                }

                            });
                            $("a[href='#price_table_contents1']").on('click', function() {
                                $("#tablelistbox > h2").css("margin-top", "400px");

                            });
                        }

                    });
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {

                        function multi(selectId, weightId, answerId, answerCpId) {
                            var text = jQuery('#' + selectId + ' option:selected').val();
                            if (text === undefined) {
                                console.error('No selected option found for #' + selectId);
                                return;
                            }

                            var removed = text.replace(/,/g, '');
                            var num = parseInt(removed, 10);
                            var weight = jQuery("#" + weightId).val();

                            if (num) {
                                if (weight) {
                                    var _up = 0;

                                    var answer_cp = num * weight + _up * weight;
                                    answer_cp = Math.round(answer_cp).toLocaleString();
                                    jQuery('#' + answerCpId).text(answer_cp);

                                    var answer = num * weight;
                                    answer = Math.round(answer).toLocaleString();

                                    // ここで値を確認
                                    console.log("Calculated Answer:", answer);

                                    // 1. `val()` で `input` の値を設定
                                    jQuery('#' + answerId).val("HK$ " + answer);

                                    // 2. `setAttribute` も試してみる
                                    document.getElementById(answerId).setAttribute("value", "HK$ " + answer);

                                    // 値が正しくセットされたか確認
                                    console.log("Updated Input Value:", jQuery('#' + answerId).val());
                                }
                            }
                        }



                        jQuery(document).on('change', '#simulation_select', function() {
                            multi('simulation_select', 'weight', 'answer', 'answer_cp');
                        });

                        jQuery(document).on('change', '#weight', function() {
                            multi('simulation_select', 'weight', 'answer', 'answer_cp');
                        });

                        jQuery(document).on('change', '#simulation_select2', function() {
                            multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
                        });

                        jQuery(document).on('change', '#weight2', function() {
                            multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
                        });

                        jQuery(function() {
                            jQuery(document).on('mouseup keyup', '#weight, #weight2', function(e) {
                                var month = parseInt(jQuery(this).val());
                                var monthMax = parseInt(jQuery(this).attr('max'));
                                var monthMin = parseInt(jQuery(this).attr('min'));
                                if (month > monthMax) {
                                    jQuery(this).val(monthMax);
                                }
                                if (month < monthMin) {
                                    jQuery(this).val(monthMin);
                                }
                            });
                        });
                    });
                </script>

                <script src="https://www.otakaraya.jp/js/vue.min.js"></script>
                <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
                <script src="/rate_files_v2/japanese-holidays.min.js"></script>
                <script src="/rate_files_v2/price_load_ex.js"></script>
                <script>
                    //crossdomainのphpファイルのアップ先URL
                    const crossdomain_file = "https://www.otakaraya.jp/rate_files_v2/crossdomain.php";
                    //データを反映したいDOM要素のID
                    const dom_id = ["#price", "#simulation", "#todayprice"];
                    Vue.use(PriceLoad, {
                        _file: crossdomain_file,
                        _dom: dom_id
                    });
                </script>

            <?php } ?>



            <!-- MOD_20240417 -->
            <!-- MOD_20240417 -->
            <div class="renew_2024_dia_titlebox is-sp">
                <h2 class="renew_2024_dia_title_h2">
                    <img class="renew_2024_dia_title_l_leaf"
                        src="../images/daiya/dialeaf_l_202404.png">
                    <img class="renew_2024_dia_title_r_leaf"
                        src="../images/daiya/dialeaf_r_202404.png">
                    <p>
                    Pencapaian Pembelian Batu Permata dan Perhiasan dengan Harga Tinggi
                    </p>
                </h2>
                <div class="renew_2024_dia_title_lead">
                    <p>
                    Harap dicatat bahwa harga pembelian dapat berfluktuasi tergantung pada waktu dan kondisi pasar. Untuk evaluasi yang akurat, jangan ragu untuk menghubungi kami.
                    </p>
                </div>
            </div>
            <!-- MOD_20240417 -->

            <!-- MOD_20240417 ===================================================================== -->
            <div class="renew_2024_top_result_superbox is-sp">
                <div class="renew_2024_tab_superbox">
                    <div class="renew_2024_tabbox wd_active"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
                            src="../images/daiya/arrow_b_wh.png"><img
                            class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
                            src="../images/daiya/arrow_b_br.png">cincin</div>
                    <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
                            src="../images/daiya/arrow_b_wh.png"><img
                            class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
                            src="../images/daiya/arrow_b_br.png">kalung</div>
                    <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
                            src="../images/daiya/arrow_b_wh.png"><img
                            class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
                            src="../images/daiya/arrow_b_br.png">gelang</div>
                    <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
                            src="../images/daiya/arrow_b_wh.png"><img
                            class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
                            src="../images/daiya/arrow_b_br.png">bros</div>
                    <div class="renew_2024_result_contentsbox" style="display: block;">
                        <div class="renew_2024_result_contentsbox_flex">
                            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25167/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">K18 diamond ring 2.027 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,067,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25157/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.038 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">2,722,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25198/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/e067b3f2e82b77781fff1280b851e264-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.081 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">902,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25202/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.381 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">797,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25165/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.014 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,133,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25191/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.02 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,039,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25155/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.041 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">3,085,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-3carat/25163/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/35c50eeca24f55237026670b96a89506-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.587 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,138,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25159/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 5.227 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,787,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25193/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.378 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,006,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25161/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
                                                decoding="async" loading="lazy" sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">K18 diamond ring 2.636 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">1,490,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25196/">
                                    <div class="renew_2024_result_itembox">
                                        <div class="renew_2024_result_item_image"><img width="300" height="300"
                                                src="../images/daiya/171943538be9b67a3e95bc711cc8486e-300x300.webp"
                                                class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
                                                decoding="async" loading="lazy"
                                                sizes="100vw"></div>
                                        <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.109 ct</div>
                                        <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                        <div class="renew_2024_result_item_price">968,000<span class="unit">&yen;</span></div>
                                        <div class="renew_2024_result_item_arrow">
                                            <div></div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>
                        <div class="flex_annitation">
                            *Gambar hanya untuk ilustrasi.<br>
                            *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                        </div>

                        <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a> -->
                    </div>
                </div>
                <div class="renew_2024_result_contentsbox">
                    <div class="renew_2024_result_contentsbox_flex">
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-10carat/25181/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt850・Pt900 diamond necklace 15 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">1,177,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25223/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/905423510ed336395bc889700fa304c4-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 3.22 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">962,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25227/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K14WG diamond necklace 12.89 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">886,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-9carat/25232/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond necklace 9.77 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">869,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25236/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">diamond necklace 10.5 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">858,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25234/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm850 diamond necklace 10 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">891,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25230/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond necklace 50.554 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">3,448,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25057/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.016 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">2,101,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25225/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm950 diamond necklace 1.15 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">1,237,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25061/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 1.57 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">1,655,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25195/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/b0502e2e155fdc41573e71404d3185af-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.259 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">1,056,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-04carat/26200/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">diamond necklace Pt・Pm850 0.449ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">29,700<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26203/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-300x300.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">diamond necklace 1carat pt850</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">49,500<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26205/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-300x300.jpg"
                                            class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">diamond necklace 1carat Pt850・Pt900 combi</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">47,300<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26178/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">diamondnecklace 1.2carat</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">93,500<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25204/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/28830920d24c470a67e4e8e9e169e075-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 11.56 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">996,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="flex_annitation">
                        *Gambar hanya untuk ilustrasi.<br>
                        *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                    </div>

                    <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                    </div> -->
                </div>
                <div class="renew_2024_result_contentsbox">
                    <div class="renew_2024_result_contentsbox_flex">
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/bracelet/25119/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">18KT diamond Bracelet</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">331,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25123/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/67db17377b3f5a80d5f285853711b688-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                                            loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">325,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25121/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/8b866539057e26196caf7e304f67fee3-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet 2.05 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">326,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25090/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet 5.29 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">470,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25088/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet 3.134 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">543,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25148/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/ba044445792b4001d0473643075c8c7c-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet 4.48 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">258,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25114/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt850 K18 diamond Bracelet 5 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">363,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-08carat/25133/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond Bracelet 0.85 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">313,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25104/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">441,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25135/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail"
                                            alt="Pt･Pm850 diamond Bracelet bangle 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet bangle 5.00 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">286,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25049/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond Bracelet 10.52 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">671,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25117/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                                            loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">353,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                    <div class="flex_annitation">
                        *Gambar hanya untuk ilustrasi.<br>
                        *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                    </div>

                    <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                    </div> -->
                </div>
                <div class="renew_2024_result_contentsbox">
                    <div class="renew_2024_result_contentsbox_flex">
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25039/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond brooch 2.18 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">209,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25031/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/b41350ace8209492b075c4cf7b72d914-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond brooch 2.05 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">265,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25043/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
                                            loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond brooch</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">196,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25047/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
                                            loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond brooch</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">183,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25045/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond brooch 3 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">191,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25041/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/aa21bc1a6b34b677709687329b008c94-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt900 K14WG diamond brooch 3 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">199,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-01carat/25023/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 K18WG diamond brooch 0.171 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">278,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-1carat/25029/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond brooch 1.33 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">206,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25025/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/443950510d383275461a64262c74a98c-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond brooch 1.708 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">270,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25018/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/d8b27c064d525351330b2972bb04d351-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18WG diamond brooch 4.99 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">404,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25027/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond brooch 2.98 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">232,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25021/">
                                <div class="renew_2024_result_itembox">
                                    <div class="renew_2024_result_item_image"><img width="300" height="300"
                                            src="../images/daiya/0286d9de92e1490064443403958c7cc3-300x300.webp"
                                            class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
                                            decoding="async" loading="lazy" sizes="100vw"></div>
                                    <div class="renew_2024_result_item_name">K18 diamond brooch 5.4 ct</div>
                                    <div class="renew_2024_result_item_kaitori">Referensi Harga Pembelian</div>
                                    <div class="renew_2024_result_item_price">374,000<span class="unit">&yen;</span></div>
                                    <div class="renew_2024_result_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="flex_annitation">
                        *Gambar hanya untuk ilustrasi.<br>
                        *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                    </div>
                    <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a></div> -->
                </div>
            </div>


            </div>
            <section>
                <div class="titleMain titleMain--wrapper is-pc">
                    <h2 class="titleMain--main">
                    Pencapaian Pembelian Batu Permata dan Perhiasan dengan Harga Tinggi
                    </h2>
                    <div class="titleMain--lead">
                        <p>
                        Harap dicatat bahwa harga pembelian dapat berfluktuasi tergantung pada waktu dan kondisi pasar. Untuk evaluasi yang akurat, jangan ragu untuk menghubungi kami.
                        </p>
                    </div>
                </div>
                <div class="flex flex--hasItem4">
                    <!-- タブメニュー -->
                    <ul class="flex__tab is-pc">
                        <!-- タブ部分 -->
                        <li class="tab__item active"><a>cincin</a></li>
                        <li class="tab__item "><a>kalung</a></li>
                        <li class="tab__item "><a>gelang</a></li>
                        <li class="tab__item "><a>brooch</a></li>
                    </ul>
                    <!-- スライダー部分 -->
                    <div class="flex__tabContents no_slider is-pc">
                        <div class="flex__content active " style="align-items: stretch">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25196/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/171943538be9b67a3e95bc711cc8486e-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 3.109 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">968,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25202/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 2.381 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">797,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25198/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/e067b3f2e82b77781fff1280b851e264-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 2.081 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">902,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25193/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 2.378 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,006,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25191/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 3.02 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,039,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25167/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond ring 2.027 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,067,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25165/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 3.014 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,133,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25163/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/35c50eeca24f55237026670b96a89506-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 3.587 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,138,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25161/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond ring 2.636 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,490,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-5carat/25159/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 5.227 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,787,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25157/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 2.038 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">2,722,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25155/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond ring 3.041 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">3,085,000<span>&yen;</span></p>
                                    </div>
                                </li>

                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  " style="align-items: stretch">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/26205/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-300x300.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">diamond necklace 1carat Pt850・Pt900 combi</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">47,300<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/26203/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-300x300.jpg"
                                                    class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">diamond necklace 1carat pt850</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">49,500<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-04carat/26200/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">diamond necklace Pt・Pm850 0.449ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">29,700<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/26178/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">diamondnecklace 1.2carat</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">93,500<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25236/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">diamond necklace 10.5 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">858,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25234/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm850 diamond necklace 10 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">891,000<span>&yen;</span></p>
                                    </div>
                                </li>
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-9carat/25232/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond necklace 9.77 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">869,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25230/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond necklace 50.554 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">3,448,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25227/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K14WG diamond necklace 12.89 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">886,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/25225/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm950 diamond necklace 1.15 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,237,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25223/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/905423510ed336395bc889700fa304c4-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond necklace 3.22 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">962,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25204/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/28830920d24c470a67e4e8e9e169e075-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond necklace 11.56 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">996,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25195/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/b0502e2e155fdc41573e71404d3185af-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond necklace 2.259 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,056,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25181/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt850・Pt900 diamond necklace 15 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,177,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/25061/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond necklace 1.57 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,655,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25057/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond necklace 2.016 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">2,101,000<span>&yen;</span></p>
                                    </div>
                                </li>

                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  " style="align-items: stretch">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-4carat/25148/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/ba044445792b4001d0473643075c8c7c-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet 4.48 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">258,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-5carat/25135/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail"
                                                    alt="Pt･Pm850 diamond Bracelet bangle 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm850 diamond Bracelet bangle 5.00 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">286,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-08carat/25133/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond Bracelet 0.85 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">313,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/bracelet/25123/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/67db17377b3f5a80d5f285853711b688-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                                                    loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">325,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25121/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/8b866539057e26196caf7e304f67fee3-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet 2.05 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">326,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/bracelet/25119/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">18KT diamond Bracelet</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">331,000<span>&yen;</span></p>
                                    </div>
                                </li>
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/bracelet/25117/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                                                    loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">353,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-5carat/25114/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt850 K18 diamond Bracelet 5 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">363,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/bracelet/25104/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm850 diamond Bracelet</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">441,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-5carat/25090/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet 5.29 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">470,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25088/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond Bracelet 3.134 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">543,000<span>&yen;</span></p>
                                    </div>
                                </li>
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-10carat/25049/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond Bracelet 10.52 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">671,000<span>&yen;</span></p>
                                    </div>
                                </li>

                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  " style="align-items: stretch">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25045/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond brooch 3 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">191,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-brooch/25047/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
                                                    loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond brooch</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">183,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-brooch/25043/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
                                                    loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond brooch</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">196,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-3carat/25041/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/aa21bc1a6b34b677709687329b008c94-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt900 K14WG diamond brooch 3 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">199,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25039/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond brooch 2.18 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">209,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25031/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/b41350ace8209492b075c4cf7b72d914-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond brooch 2.05 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">265,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/25029/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond brooch 1.33 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">206,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-2carat/25027/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">Pt･Pm900 diamond brooch 2.98 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">232,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-1carat/25025/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/443950510d383275461a64262c74a98c-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond brooch 1.708 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">270,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-01carat/25023/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 K18WG diamond brooch 0.171 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">278,000<span>&yen;</span></p>
                                    </div>
                                </li>

                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-5carat/25021/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/0286d9de92e1490064443403958c7cc3-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18 diamond brooch 5.4 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">374,000<span>&yen;</span></p>
                                    </div>
                                </li>
                                <li class="content__item content_item_wrap align_items_stretch_parent">
                                    <a href="/daiya/result/daiya/daiya-4carat/25018/" class="img__link">
                                        <div class="content_image_wrap">
                                            <p class="content__image img">
                                            </p>
                                            <p class="content__image img"><img width="300" height="300"
                                                    src="../images/daiya/d8b27c064d525351330b2972bb04d351-300x300.webp"
                                                    class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
                                                    decoding="async" loading="lazy" sizes="100vw"></p>
                                            <p></p>
                                            <p class="content--name">K18WG diamond brooch 4.99 ct</p>
                                        </div>

                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">404,000<span>&yen;</span></p>
                                    </div>
                                </li>
                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- MOD_20240417 -->

            <?php get_template_part('template-parts/assessment_cta'); ?>
            <!-- MOD_20240417 -->
            <!--     ▼▼▼評価について2▼▼▼     -->

            <!-- MOD_20240417 -->
            <div class="is-pc">
                <section class="brandinfo_section">
                    <div class="titleMain titleMain--wrapper">
                        <h2 class="titleMain--main">
                            Poin untuk Pembelian dan Penilaian Diamond Harga Tinggi
                        </h2>
                        <div class="titleMain--lead">
                            <p>
                            Banyak orang yang mengetahui bahwa nilai berlian ditentukan oleh berat karatnya. Namun sebenarnya nilai Berlian juga dipengaruhi oleh 4C lainnya, yaitu potongan, kejernihan, dan warna.
                                <br><br>
                                Selain itu, faktor-faktor seperti merek, desain, kondisi, dan keberadaan aksesori juga dapat memengaruhi nilainya. Di Otakaraya, kami tidak hanya mengevaluasi 4C tetapi juga menilai dengan cermat faktor-faktor tambahan ini untuk menawarkan harga pembelian setinggi mungkin.
                            </p>
                        </div>
                    </div>

                    <div class="brandinfo brandinfo_red_repeat is-pc">
                        <div class="fshoplist-target__list brand_about_repeat_parent_wrap open is_table">
                            <div class="fshoplist-target--ttl">
                                <h3 class="titleSub">
                                Faktor-Faktor Yang Menentukan Nilai Sebuah Berlian
                                </h3>
                            </div>
                            <div class="fshoplist-target--item ">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Karat</h4>
                                            <div class="points_content_text">
                                                <p>Karat adalah satuan berat batu permata, dan 1 karat (ct) setara dengan 0,2 gram. Dalam kasus berlian, sertifikat yang dikeluarkan oleh lembaga gemologi dan penilai dalam negeri memberikan pengukuran yang tepat hingga tiga tempat desimal, meskipun dalam transaksi umum, sering kali dibulatkan menjadi dua tempat desimal.<br><br>
                                                Seiring bertambahnya berat karat, kelangkaan batu permata juga meningkat sehingga menyebabkan harganya naik secara signifikan. Bahkan dengan berlian dengan kualitas yang sama, ketika berat karatnya berlipat ganda, harganya belum tentu berlipat ganda. Khusus untuk angka bulat seperti 0.5ct atau 1.0ct, harganya cenderung naik tajam.<br><br>
                                                Dalam potongan ideal potongan bulat cemerlang, hubungan antara berat dan ukuran karat adalah sebagai berikut: Berlian 0,1 karat memiliki diameter kira-kira 3,0 mm, berlian 0,5 karat berukuran sekitar 5,2 mm, dan berlian 1,0 karat berukuran sekitar 6,5 mm.
                                                </p>
                                                <div class="horizonlist--captionImg">
                                                    <img src="../images/daiya/2024_diamond_carat_translation.webp" alt="Carat">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="fshoplist-target--item ">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Cut</h4>
                                            <div class="points_content_text">
                                                <p>Potongan adalah faktor penting dalam memaksimalkan kilaunya Berlian. Berlian dengan potongan yang sangat bagus memantulkan cahaya secara efektif, menghasilkan kilauan yang indah. Pemotongan tersebut dievaluasi dalam skala dari 'Sangat Baik' hingga 'Buruk' dalam lima tingkatan.<br><br>
                                                Evaluasi dibagi menjadi dua kategori: 'Proporsi' dan 'Selesai'. Proporsi mengacu pada ukuran, rasio, dan sudut segi dalam potongan bulat cemerlang. Ada 'bentuk ideal' untuk potongan ini yang memaksimalkan kecemerlangan, dan berlian diklasifikasikan menjadi lima tingkatan berdasarkan seberapa dekat berlian tersebut mendekati ideal ini.<br><br>
                                                Selanjutnya, Selesai dibagi lagi menjadi 'Polesan' dan 'Simetri'. Polesan mengevaluasi kualitas polesan berlian, sedangkan Simetri menilai susunan dan simetri segi-seginya, keduanya dalam skala lima tingkat.<br><br>
                                                Dengan cara ini, evaluasi potongan dilakukan berdasarkan 'Proporsi', 'Polesan', dan 'Simetri'. Berlian yang menerima peringkat 'Sangat Baik' tertinggi di semua area ini secara khusus disebut sebagai '3EX' (Triple Excellent). Selain itu, berlian yang memenuhi kriteria tertentu mungkin menunjukkan pola 'Hati dan Panah', ciri yang terlihat pada berlian dengan merek dagang 'Heart & Cupid'.<br><br>
                                                Berlian dengan '3EX' atau 'Heart & Cupid' dianggap sebagai berlian dengan kualitas tertinggi, dengan kecemerlangannya yang mudah terlihat dengan mata telanjang dan mendapat pujian tinggi karena potongannya yang luar biasa.</p>
                                                <div class="horizonlist--captionImg">
                                                    <!-- <span>02</span> -->
                                                    <img src="../images/daiya/2024_diamond_cut.webp" alt="Cut">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item ">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">

                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">kejelasan</h4>
                                            <div class="points_content_text">
                                                <p>Berlian umumnya memiliki inklusi internal dan ciri di permukaan (noda) yang sangat kecil. Derajat inklusi dan ciri di permukaan ini disebut "kejernihan," yang diperiksa oleh penilai terampil menggunakan kaca pembesar 10x dan dinilai menjadi 11 tingkat tergantung pada tingkatnya.<br><br>
                                                    Kejernihan dinilai dengan tingkatan sebagai berikut, dari tingkat tertinggi "FL (Flawless)" hingga tingkat terendah "I3".<br><br>
                                                    FL (Flawless): Tidak ada inklusi atau cacat yang terlihat pada pembesaran 10x, bahkan setelah dilihat oleh ahli permata.<br>
                                                    IF (Internally Flawless): Tidak ada inklusi yang terlihat di bawah pembesaran 10x, hanya noda kecil yang terlihat<br>
                                                    VVS1/VVS2 (Sangat, Sangat Sedikit Termasuk): Inklusi sangat sulit dideteksi pada pembesaran 10x.<br>
                                                    VS1/VS2 (Sangat Sedikit Termasuk): Inklusi kecil terlihat pada pembesaran 10x.<br>
                                                    SI1/SI2 (Sedikit Termasuk): Inklusi terlihat jelas di bawah pembesaran 10x.<br>
                                                    I1/I2/I3 (Termasuk): Inklusi terlihat pada pembesaran 10x atau bahkan dengan mata telanjang, sehingga secara signifikan mempengaruhi kejernihan berlian.<br><br>

                                                    Penilaian kejernihan tidak hanya ditentukan oleh ukuran inklusi, namun mempertimbangkan berbagai faktor seperti jumlah, lokasi, jenis, visibilitas, dan warna inklusi.</p>
                                                <div class="horizonlist--captionImg">
                                                    <!-- <span>03</span> -->
                                                    <img src="../images/daiya/2024_diamond_clarity.webp"
                                                        alt="Clarity">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item ">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Warna</h4>
                                            <div class="points_content_text">
                                                <p>Berlian dinilai warnanya dalam skala dari D hingga Z. Penilaian dimulai dengan D, yang mewakili berlian yang paling dekat dengan tidak berwarna, dan skala tersebut berlanjut seiring dengan semakin dalamnya warna berlian, hingga akhirnya mencapai Z. Semakin dekat berlian ke D, semakin tinggi nilainya, dan semakin jelas warnanya, mutunya cenderung menurun.<br><br>
                                                Penilaian warna faktor 4C ini terutama berlaku untuk warna kuning dan coklat. Berlian dengan warna lain, seperti merah muda atau biru, disebut sebagai 'berlian berwarna mewah' dan dievaluasi berdasarkan kriteria yang berbeda daripada 4C. Jika warna berlian melebihi Z, ia juga diklasifikasikan sebagai berlian berwarna mewah.<br><br>
                                                Secara umum, berlian dengan warna kuning atau kecoklatan dianggap kurang berharga, namun begitu mencapai level berlian berwarna mewah, kelangkaannya dapat meningkatkan nilainya. Akibatnya, berlian kuning dengan warna lebih dalam dari Z seringkali dapat ditukar dengan berlian D yang tidak berwarna karena kelangkaannya.<br><br>
                                                Selain itu, Anda mungkin pernah mendengar bahwa 'fluoresensi' berlian dapat memengaruhi gradasi warnanya. Namun, hal ini hanya berdampak kecil terhadap harga. Fluoresensi mengacu pada cahaya kebiruan yang dipancarkan berlian saat terkena sinar ultraviolet. Karena penilaian warna 4C didasarkan pada corak kuning, fluoresensi dapat memengaruhi tampilan warna berlian. Namun, kecuali jika fluoresensinya sangat kuat, hal ini tidak akan mempengaruhi nilai keseluruhan secara signifikan.
                                                </p>
                                                <div class="horizonlist--captionImg">
                                                    <!-- <span>04</span> -->
                                                    <img src="../images/daiya/2024_diamond_color.webp" alt="Color">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
                            <div class="fshoplist-target--ttl">
                                <h3 class="titleSub">Apa standar untuk mengevaluasi berlian?</h3>
                                <div class="high_price_purchase_points_content_lead"></div>
                            </div>
                            <div class="fshoplist-target--item
                                existence_img">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">

                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">
                                                Mengenai evaluasi kualitas berlian.
                                            </h4>
                                            <p class="points_content_text">
                                            Berlian dinilai berdasarkan empat kriteria: Carat / Karat (berat), Cut / Potongan (teknik pemolesan), Clarity / Kejernihan (transparansi), dan Colour / Warna. Diantaranya, "potongan" adalah satu-satunya kriteria yang dipengaruhi oleh keahlian manusia, dan merupakan faktor penting dalam menentukan pantulan kilauan berlian, bergantung pada kualitas tekniknya.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item existence_img">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">

                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">
                                                Mengenai perawatan dan pengolahan berlian.
                                            </h4>
                                            <p class="points_content_text">
                                            Berlian pada umumnya tidak diolah oleh manusia selain dipotong dan dipoles.
                                            Namun, ada pula yang diolah untuk meningkatkan kejernihan atau warnanya. Di Otakaraya, kami berupaya memberikan penilaian setinggi mungkin terhadap barang-barang pelanggan kami, jadi jangan ragu untuk menunjukkan kepada kami barang apa pun yang Anda ragu nilainya.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item existence_img">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">
                                            Mengenai asal muasal berlian.
                                            </h4>
                                            <p class="points_content_text">
                                            Berlian ditambang di berbagai negara di dunia, dengan negara-negara terkemuka termasuk Rusia, Botswana, dan Kanada. Nilai dan kualitas berlian umumnya dianggap tidak berbeda-beda berdasarkan asalnya. Namun, berlian yang ditambang dari tambang Jwaneng di Botswana sering kali dianggap memiliki kualitas terbaik. Pada tahun 2023, hanya ada 10 perusahaan secara global yang terlibat dalam penambangan berlian.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
                            <div class="fshoplist-target--ttl">
                                <h3 class="titleSub">
                                Warna Berlian dengan Harga Pembelian Tinggi
                                </h3>
                                <div class="high_price_purchase_points_content_lead"></div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>01</span>
                                            <img src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp"
                                                alt="Berlian Tak Berwarna">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Tak Berwarna</h4>
                                            <p class="points_content_text">Kualitasnya dinilai berdasarkan 4C, dan semakin besar, semakin transparan, dan semakin jernih berlian tersebut, semakin bernilai Berlian tersebut.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>02</span>
                                            <img src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp"
                                                alt="Berlian Merah">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Merah</h4>
                                            <p class="points_content_text">Berlian merah adalah yang paling langka dan paling berharga di antara berlian berwarna. Warnanya diurutkan sebagai berikut: Fancy Red, Fancy Purplish Red, dan Fancy Orangy Red, dalam urutan nilai menurun.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>03</span>
                                            <img src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp"
                                                alt="Berlian biru.">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian biru.</h4>
                                            <p class="points_content_text">
                                            Berlian ini merupakan berlian yang paling bernilai kedua setelah berlian merah dan jarang ditemukan di tambang-tambang utama di Afrika Selatan. Dianggap terbaik jika warnanya tidak terang atau keabu-abuan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>04</span>
                                            <img src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp"
                                                alt="Berlian Hijau">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Hijau</h4>
                                            <p class="points_content_text">Berlian Hijau sangat langka dan bernilai tinggi. Diantaranya, yang memiliki saturasi tinggi, seperti "Fancy Intense Green" dan "Fancy Vivid Green", mendapatkan harga premium.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>05</span>
                                            <img src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp"
                                                alt="Berlian Ungu">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Ungu</h4>
                                            <p class="points_content_text">
                                            Berlian Ungu, ada berbagai macam warna yang tersedia, dari terang hingga gelap. Semakin gelap dan jelas warnanya, semakin bernilai pula harganya.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>06</span>
                                            <img src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp"
                                                alt="Berlian Merah Muda">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Merah Muda</h4>
                                            <p class="points_content_text">Berlian merah muda dianggap sebagai salah satu berlian berwarna paling berharga karena persediaannya yang terbatas.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>07</span>
                                            <img src="../images/daiya/857520b29ac66eab447eba193215d84e.webp"
                                                alt="Berlian Oranye">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Oranye</h4>
                                            <p class="points_content_text">Berlian oranye termasuk langka dan lebih bernilai daripada berlian berwarna biasa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>08</span>
                                            <img src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp"
                                                alt="Berlian Kuning">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Kuning</h4>
                                            <p class="points_content_text">Warna ini relatif melimpah, tetapi tidak memiliki semburat jingga dan lebih bernilai jika warnanya mendekati warna kenari atau lemon.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>09</span>
                                            <img src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp"
                                                alt="Berlian Coklat">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Coklat</h4>
                                            <p class="points_content_text">
                                            Berlian coklat hadir dalam berbagai warna, seperti coklat kemerahan atau coklat kekuningan, dengan tingkat saturasi yang bervariasi. Mereka banyak digunakan dalam berbagai jenis perhiasan karena ketersediaannya, dan nilai jual kembali seringkali bergantung pada desainnya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fshoplist-target--item">
                                <div class="horizonlist horizonnumblist">
                                    <div class="horizonlist--link">
                                        <div class="horizonlist--img">
                                            <span>10</span>
                                            <img src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp"
                                                alt="Berlian Hitam">
                                        </div>
                                        <div class="horizonlist--text">
                                            <h4 class="titleH4 title--left">Berlian Hitam</h4>
                                            <p class="points_content_text">Berlian hitam dicirikan oleh inklusi besi atau grafit yang tersebar di seluruh batu. Berlian hitam alami sangatlah langka, dan semakin dalam dan kaya warna hitamnya, semakin tinggi nilainya.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="is-sp">
                <div class="renew_2024_top_pont_superbox">
                    <img class="renew_2024_top_pont_title_icon"
                        src="../images/daiya/point_image_202404.png">
                    <div class="renew_2024_top_pont_titlebox">
                        <h2 class="renew_2024_top_pont_title">
                        Poin untuk Pembelian dan Penilaian Diamond Harga Tinggi
                        </h2>
                        <div class="renew_2024_top_pont_story">
                        Banyak orang yang mengetahui bahwa nilai berlian ditentukan oleh berat karatnya. Namun sebenarnya nilai Berlian juga dipengaruhi oleh 4C lainnya, yaitu potongan, kejernihan, dan warna.<br><br>
                        Selain itu, faktor-faktor seperti merek, desain, kondisi, dan keberadaan aksesori juga dapat memengaruhi nilainya. Di Otakaraya, kami tidak hanya mengevaluasi 4C tetapi juga menilai dengan cermat faktor-faktor tambahan ini untuk menawarkan harga pembelian setinggi mungkin.
                        </div>
                    </div>
                    <div class="renew_2024_top_pont_item_titlebox">
                        <h3>Faktor-Faktor Yang Menentukan Nilai Sebuah Berlian</h3>
                        <div class="renew_2024_top_pont_item_title_circle">
                            <div></div>
                        </div>
                    </div>
                    <div class="renew_2024_top_pont_item_content is-sp">
                        <h4 class="renew_2024_top_point_item_h4"><span>01</span>Carat</h4>
                        <div class="renew_2024_top_point_item_story">
                        Karat adalah satuan berat batu permata, dan 1 karat (ct) setara dengan 0,2 gram. Dalam kasus berlian, sertifikat yang dikeluarkan oleh lembaga gemologi dan penilai dalam negeri memberikan pengukuran yang tepat hingga tiga tempat desimal, meskipun dalam transaksi umum, sering kali dibulatkan menjadi dua tempat desimal.<br><br>
                        Seiring bertambahnya berat karat, kelangkaan batu permata juga meningkat sehingga menyebabkan harganya naik secara signifikan. Bahkan dengan berlian dengan kualitas yang sama, ketika berat karatnya berlipat ganda, harganya belum tentu berlipat ganda. Khusus untuk angka bulat seperti 0.5ct atau 1.0ct, harganya cenderung naik tajam.<br><br>
                        Dalam potongan ideal potongan bulat cemerlang, hubungan antara berat dan ukuran karat adalah sebagai berikut: Berlian 0,1 karat memiliki diameter kira-kira 3,0 mm, berlian 0,5 karat berukuran sekitar 5,2 mm, dan berlian 1,0 karat berukuran sekitar 6,5 mm.
                            <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                                    src="../images/daiya/2024_diamond_carat_translation.webp" alt=""></div>
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>
                        <h4 class="renew_2024_top_point_item_h4"><span>02</span>Memotong</h4>
                        <div class="renew_2024_top_point_item_story">
                        Potongan adalah faktor penting dalam memaksimalkan kilaunya Berlian. Berlian dengan potongan yang sangat bagus memantulkan cahaya secara efektif, menghasilkan kilauan yang indah. Pemotongan tersebut dievaluasi dalam skala dari 'Sangat Baik' hingga 'Buruk' dalam lima tingkatan.<br><br>
                        Evaluasi dibagi menjadi dua kategori: 'Proporsi' dan 'Selesai'. Proporsi mengacu pada ukuran, rasio, dan sudut segi dalam potongan bulat cemerlang. Ada 'bentuk ideal' untuk potongan ini yang memaksimalkan kecemerlangan, dan berlian diklasifikasikan menjadi lima tingkatan berdasarkan seberapa dekat berlian tersebut mendekati ideal ini.<br><br>
                        Selanjutnya, Selesai dibagi lagi menjadi 'Polesan' dan 'Simetri'. Polesan mengevaluasi kualitas polesan berlian, sedangkan Simetri menilai susunan dan simetri segi-seginya, keduanya dalam skala lima tingkat.<br><br>
                        Dengan cara ini, evaluasi potongan dilakukan berdasarkan 'Proporsi', 'Polesan', dan 'Simetri'. Berlian yang menerima peringkat 'Sangat Baik' tertinggi di semua area ini secara khusus disebut sebagai '3EX' (Triple Excellent). Selain itu, berlian yang memenuhi kriteria tertentu mungkin menunjukkan pola 'Hati dan Panah', ciri yang terlihat pada berlian dengan merek dagang 'Heart & Cupid'.<br><br>
                        Berlian dengan '3EX' atau 'Heart & Cupid' dianggap sebagai berlian dengan kualitas tertinggi, dengan kecemerlangannya yang mudah terlihat dengan mata telanjang dan mendapat pujian tinggi karena potongannya yang luar biasa.
                            <div class="point_item_captionImg"><img
                                    class="renew_2024_top_point_item_h4_image"
                                    src="../images/daiya/2024_diamond_cut.webp" alt=""></div>
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>
                        <h4 class="renew_2024_top_point_item_h4"><span>03</span>Kejelasan</h4>
                        <div class="renew_2024_top_point_item_story">
                            Berlian umumnya memiliki inklusi internal dan ciri di permukaan (noda) yang sangat kecil. Derajat inklusi dan ciri di permukaan ini disebut "kejernihan," yang diperiksa oleh penilai terampil menggunakan kaca pembesar 10x dan dinilai menjadi 11 tingkat tergantung pada tingkatnya.<br><br>
                            Kejernihan dinilai dengan tingkatan sebagai berikut, dari tingkat tertinggi "FL (Flawless)" hingga tingkat terendah "I3".<br><br>
                            FL (Flawless): Tidak ada inklusi atau cacat yang terlihat pada pembesaran 10x, bahkan setelah dilihat oleh ahli permata.<br>
                            IF (Internally Flawless): Tidak ada inklusi yang terlihat di bawah pembesaran 10x, hanya noda kecil yang terlihat<br>
                            VVS1/VVS2 (Sangat, Sangat Sedikit Termasuk): Inklusi sangat sulit dideteksi pada pembesaran 10x.<br>
                            VS1/VS2 (Sangat Sedikit Termasuk): Inklusi kecil terlihat pada pembesaran 10x.<br>
                            SI1/SI2 (Sedikit Termasuk): Inklusi terlihat jelas di bawah pembesaran 10x.<br>
                            I1/I2/I3 (Termasuk): Inklusi terlihat pada pembesaran 10x atau bahkan dengan mata telanjang, sehingga secara signifikan mempengaruhi kejernihan berlian.<br><br>
                            Penilaian kejernihan tidak hanya ditentukan oleh ukuran inklusi, namun mempertimbangkan berbagai faktor seperti jumlah, lokasi, jenis, visibilitas, dan warna inklusi.
                            <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                                    src="../images/daiya/2024_diamond_clarity.webp" alt=""></div>
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>
                        <h4 class="renew_2024_top_point_item_h4"><span>04</span>Warna</h4>
                        <div class="renew_2024_top_point_item_story">
                        Berlian dinilai warnanya dalam skala dari D hingga Z. Penilaian dimulai dengan D, yang mewakili berlian yang paling dekat dengan tidak berwarna, dan skala tersebut berlanjut seiring dengan semakin dalamnya warna berlian, hingga akhirnya mencapai Z. Semakin dekat berlian ke D, semakin tinggi nilainya, dan semakin jelas warnanya, mutunya cenderung menurun.<br><br>
                        Penilaian warna faktor 4C ini terutama berlaku untuk warna kuning dan coklat. Berlian dengan warna lain, seperti merah muda atau biru, disebut sebagai 'berlian berwarna mewah' dan dievaluasi berdasarkan kriteria yang berbeda daripada 4C. Jika warna berlian melebihi Z, ia juga diklasifikasikan sebagai berlian berwarna mewah.<br><br>
                        Secara umum, berlian dengan warna kuning atau kecoklatan dianggap kurang berharga, namun begitu mencapai level berlian berwarna mewah, kelangkaannya dapat meningkatkan nilainya. Akibatnya, berlian kuning dengan warna lebih dalam dari Z seringkali dapat ditukar dengan berlian D yang tidak berwarna karena kelangkaannya.<br><br>
                        Selain itu, Anda mungkin pernah mendengar bahwa 'fluoresensi' berlian dapat memengaruhi gradasi warnanya. Namun, hal ini hanya berdampak kecil terhadap harga. Fluoresensi mengacu pada cahaya kebiruan yang dipancarkan berlian saat terkena sinar ultraviolet. Karena penilaian warna 4C didasarkan pada corak kuning, fluoresensi dapat memengaruhi tampilan warna berlian. Namun, kecuali jika fluoresensinya sangat kuat, hal ini tidak akan mempengaruhi nilai keseluruhan secara signifikan.
                            <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                                    src="../images/daiya/2024_diamond_color.webp" alt=""></div>
                        </div>
                    </div>
                    <div class="renew_2024_top_pont_item_titlebox">
                        <h3>Apa standar untuk mengevaluasi berlian?</h3>
                        <div class="renew_2024_top_pont_item_title_circle">
                            <div></div>
                        </div>
                    </div>
                    <div class="renew_2024_top_pont_item_content is-sp">
                        <h4 class="renew_2024_top_point_item_h4">Mengenai evaluasi kualitas berlian.</h4>
                        <div class="renew_2024_top_point_item_story">
                        Berlian dinilai berdasarkan empat kriteria: Carat / Karat (berat), Cut / Potongan (teknik pemolesan), Clarity / Kejernihan (transparansi), dan Colour / Warna. Diantaranya, "potongan" adalah satu-satunya kriteria yang dipengaruhi oleh keahlian manusia, dan merupakan faktor penting dalam menentukan pantulan kilauan berlian, bergantung pada kualitas tekniknya.
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>
                        <h4 class="renew_2024_top_point_item_h4">Mengenai perawatan dan pengolahan berlian.</h4>
                        <div class="renew_2024_top_point_item_story">Berlian pada umumnya tidak diolah oleh manusia selain dipotong dan dipoles.
                        Namun, ada pula yang diolah untuk meningkatkan kejernihan atau warnanya. Di Otakaraya, kami berupaya memberikan penilaian setinggi mungkin terhadap barang-barang pelanggan kami, jadi jangan ragu untuk menunjukkan kepada kami barang apa pun yang Anda ragu nilainya.
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>
                        <h4 class="renew_2024_top_point_item_h4">Mengenai asal muasal berlian.</h4>
                        <div class="renew_2024_top_point_item_story">
                        Berlian ditambang di berbagai negara di dunia, dengan negara-negara terkemuka termasuk Rusia, Botswana, dan Kanada. Nilai dan kualitas berlian umumnya dianggap tidak berbeda-beda berdasarkan asalnya. Namun, berlian yang ditambang dari tambang Jwaneng di Botswana sering kali dianggap memiliki kualitas terbaik. Pada tahun 2023, hanya ada 10 perusahaan secara global yang terlibat dalam penambangan berlian.</div>
                    </div>
                    <div class="renew_2024_top_pont_item_titlebox">
                        <h3>Warna Berlian dengan Harga Pembelian Tinggi</h3>
                        <div class="renew_2024_top_pont_item_title_circle">
                            <div></div>
                        </div>
                    </div>
                    <div class="renew_2024_top_pont_item_content is-sp"><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>01</span>Berlian Tak Berwarna</h4>
                        <div class="renew_2024_top_point_item_story">Kualitasnya dinilai berdasarkan 4C, dan semakin besar, semakin transparan, dan semakin jernih berlian tersebut, semakin bernilai Berlian tersebut.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>02</span>Berlian Merah</h4>
                        <div class="renew_2024_top_point_item_story">Berlian merah adalah yang paling langka dan paling berharga di antara berlian berwarna. Warnanya diurutkan sebagai berikut: Fancy Red, Fancy Purplish Red, dan Fancy Orangy Red, dalam urutan nilai menurun.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>03</span>Berlian biru.</h4>
                        <div class="renew_2024_top_point_item_story">Berlian ini merupakan berlian yang paling bernilai kedua setelah berlian merah dan jarang ditemukan di tambang-tambang utama di Afrika Selatan. Dianggap terbaik jika warnanya tidak terang atau keabu-abuan.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>04</span>Berlian Hijau</h4>
                        <div class="renew_2024_top_point_item_story">Berlian hijau sangat langka dan bernilai tinggi. Diantaranya, yang memiliki saturasi tinggi, seperti "Fancy Intense Green" dan "Fancy Vivid Green", mendapatkan harga premium.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>05</span>Berlian Ungu</h4>
                        <div class="renew_2024_top_point_item_story">Berlian ungu, ada berbagai macam warna yang tersedia, dari terang hingga gelap. Semakin gelap dan jelas warnanya, semakin bernilai pula harganya.
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>06</span>Berlian Merah Muda</h4>
                        <div class="renew_2024_top_point_item_story">Berlian merah muda dianggap sebagai salah satu berlian berwarna paling berharga karena persediaannya yang terbatas.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/857520b29ac66eab447eba193215d84e.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>07</span>Berlian Oranye</h4>
                        <div class="renew_2024_top_point_item_story">Berlian oranye termasuk langka dan lebih bernilai daripada berlian berwarna biasa.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>08</span>Berlian Kuning</h4>
                        <div class="renew_2024_top_point_item_story">Warna ini relatif melimpah, tetapi tidak memiliki semburat jingga dan lebih bernilai jika warnanya mendekati warna kenari atau lemon.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>09</span>Berlian Coklat</h4>
                        <div class="renew_2024_top_point_item_story">
                       Berlian coklat hadir dalam berbagai warna, seperti coklat kemerahan atau coklat kekuningan, dengan tingkat saturasi yang bervariasi. Mereka banyak digunakan dalam berbagai jenis perhiasan karena ketersediaannya, dan nilai jual kembali seringkali bergantung pada desainnya.</div>
                        <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
                            src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp" alt="">
                        <h4 class="renew_2024_top_point_item_h4"><span>10</span>Berlian Hitam</h4>
                        <div class="renew_2024_top_point_item_story">
                        Berlian hitam dicirikan oleh inklusi besi atau grafit yang tersebar di seluruh batu. Berlian hitam alami sangatlah langka, dan semakin dalam dan kaya warna hitamnya, semakin tinggi nilainya.</div>
                    </div>
                </div> <!-- renew_2024_top_pont_superbox -->
            </div>
            <!-- ▼▼▼変形ダイヤ説明▼▼▼ -->
            <section></section>
            <section class="transformation_description_section">
                <div class="titleMain--wrapper">
                    <h2 class="titleMain--main">
                    Apa itu Berlian Modifikasi?
                    </h2>
                    <div class="titleMain--lead">
                        <p>Berlian termodifikasi merupakan istilah umum untuk berlian yang dipotong dalam bentuk selain bulat (lingkaran sempurna), juga dikenal sebagai potongan cemerlang bulat. Potongan berlian bulat cemerlang merupakan potongan yang paling umum, tetapi ada juga banyak bentuk berlian lain yang dimodifikasi. Kami akan memperkenalkan beberapa di antaranya di sini.</p>
                    </div>
                </div>
                <div class="transformation_description_content_wrap">
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">1</span> -->
                                        <span class="transformation_description_content_text">Potongan Emerald</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
                                    <p>
                                    Berlian ini berbentuk persegi jika dilihat dari atas dan berundak jika dilihat dari samping, dan daya tariknya terletak pada kemampuan menikmati sepenuhnya transparansi dan kecemerlangan alami berlian. Dengan sedikit permukaan potongan dan lapisan akhir meja lebar yang diaplikasikan secara mewah, kemurnian alami berlian tersebut terpancar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">2</span> -->
                                        <span class="transformation_description_content_text">Potongan Oval</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
                                    <p>
                                    Ini adalah berlian yang dipotong menjadi bentuk oval, dengan 57 hingga 58 sisi, yang mendekati jumlah sisi yang diperlukan untuk bentuk bulat, dan digunakan dalam berbagai aksesoris, termasuk cincin. Memanfaatkan karakteristik bentuk oval, Anda dapat menikmati kesan berbeda tergantung pada rasio vertikal dan horizontal. Jumlah potongannya mendekati bentuk bulat, sehingga Anda dapat merasakan keindahan dan berat berlian tersebut.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">3</span> -->
                                        <span class="transformation_description_content_text">Potongan Trilliant</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
                                    <p>
                                    Itu adalah berlian yang dipotong menjadi bentuk 'trilliant' (segitiga), bukan bulat atau persegi. Jumlah standar segi adalah 43, dan memiliki kecemerlangan unik yang berbeda dari potongan bulat atau persegi. Variasinya bermacam-macam, mulai dari segitiga sama sisi dasar hingga yang sudutnya lebih lancip atau membulat, semuanya memiliki kilauan geometris yang kuat.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">4</span> -->
                                        <span class="transformation_description_content_text">Bentuk Heart</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
                                    <p>
                                    Dipotong berbentuk hati dan merupakan potongan Round Brilliant yang dimodifikasi. Bentuk hati dianggap paling bagus apabila berada di dalam persegi; bentuk apa pun yang lebar atau panjang dianggap bentuk yang tidak lazim. Kontur bentuk hati dipoles dengan tangan sedikit demi sedikit oleh para perajin, sehingga keterampilan pengerjaannya sangat memengaruhi keindahan karya tersebut.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">5</span> -->
                                        <span class="transformation_description_content_text">Potongan Princess</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
                                    <p>
                                    Potongan campuran mengombinasikan potongan Brilliant dan potongan Step untuk menghasilkan bentuk persegi yang cemerlang. Luas permukaan meja besar, yang memiliki keuntungan karena memerlukan lebih sedikit penggerindaan daripada potongan brilian bulat dan lebih mudah dipoles menjadi batu besar. Sudut-sudutnya mudah terkelupas, jadi tangani dengan hati-hati.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">6</span> -->
                                        <span class="transformation_description_content_text">Potongan Bentuk Buah Pir</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
                                    <p>
                                    Sesuai dengan namanya, Pear, dipotong menjadi bentuk buah pir. Seperti potongan bentuk hati, potongan ini merupakan variasi dari potongan bulat cemerlang dan memiliki 58 segi. Disebut juga tetesan air mata karena bentuknya menyerupai tetesan air mata.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">7</span> -->
                                        <span class="transformation_description_content_text">Potongan Radiant</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
                                    <p>
                                    Ini adalah potongan persegi atau persegi panjang yang merupakan kombinasi antara potongan Brilliant dan potongan Emerald. Dikembangkan oleh Henry Gross Byrd pada tahun 1977, potongan ini memiliki beberapa kemiripan dengan potongan Princess, tetapi aspek-aspeknya dipotong secara berbeda. Metode pemotongan ini juga umum digunakan untuk batu permata berwarna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transformation_description_content">
                        <div class="circle_btn_accordion_area">
                            <div class="circle_btn_accordion_include circle_btn_accordion_control">
                                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                                    <p class="transformation_description_content_ttl" style="position: relative;">
                                        <!-- <span style="position: absolute; left: -1em;">8</span> -->
                                        <span class="transformation_description_content_text">Potongan Marquise</span>
                                    </p>
                                    <img class="is-pc" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
                                </button>
                                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                                    <img class="is-sp" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
                                    <p>
                                    Ini adalah potongan berbentuk perahu di mana kedua ujung oval memanjang meruncing tajam. Diklasifikasikan sebagai salah satu potongan brilian, biasanya terdiri dari 58 segi, meskipun dapat juga dipotong menjadi 18 segi. Nama 'marquise' berasal dari istilah Perancis untuk 'marquis.' Bentuk berlian ini dinamai Madame de Pompadour, gundik Raja Louis XV dari Perancis, yang dianugerahi gelar marquise, dan dengan demikian, potongan tersebut dikenal sebagai 'marquise.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section></section><!-- MOD_20240417 -->
            <section class="certificate is-pc">
                <div class="titleMain titleMain--wrapper titleMain--mtPc128 titleMain--mtSp32">
                    <h2 class="titleMain--main">
                        Jika Anda ingin menjual Berlian, kunjungi Otakaraya!
                    </h2>
                </div>
                <section>
                    <h3 class="titleSub">Staf kami memiliki kualifikasi GG (Graduate Gemologist).</h3>
                    <p style="text-align: center;">
                        Kualifikasi Ahli Lulusan Gemologi (GG) merupakan kualifikasi untuk ahli gemologi yang dihormati secara global yang ditawarkan oleh GIA (Institut Gemologi Amerika), dan juga dikenal sebagai "lulusan Gemologi". Otakaraya memiliki anggota staf yang memiliki kualifikasi GG, dan juga secara teratur menyediakan pendidikan penilai melalui sistem pelatihannya. Hal ini memungkinkan kami untuk memberikan penilaian tingkat tinggi dan akurat terhadap batu permata apa pun.</p>

                    <div class="colBox colBox__col01">
                        <div class="col" style="display: flex; justify-content: space-between;">
                            <div class="img gg_holder_profile">
                                <img src="../images/daiya/568433d3328efc80e6346b56a8db47df.webp" alt="岩松利香のプロフィール">
                            </div>
                            <div class="gg_profile">
                                <h4 class="titleSub" style="color:black;">Rika Iwamatsu</h4>
                                <div class="profile">
                                    <nobr>
                                        <p class="profile1">Profil</p>
                                    </nobr>
                                    <p class="profile2">：<span>Bekerja di sebuah lembaga penilaian. Sejak itu, ia telah bekerja di bisnis penilaian berlian dan identifikasi permata selama hampir 30 tahun.
</span></p>
                                </div>
                                <p><span>Kualifikasi yang dimiliki</span>：<span>GG (diperoleh pada Mei 1994)</span>
                                </p>
                                <p><span>Tempat lahir</span>：Tokyo</p>
                                <p><span>Hobi</span>: Bepergian</p>
                            </div>
                        </div>
                    </div>
                    <div class="colBox colBox__col01">
                        <div class="col">
                            <div class="img">
                                <img class="custom-popup-img"
                                    src="../images/daiya/e3eeb8346efbe5cff2b0ba7d1f7c1987.webp" alt=GGの証明書>
                            </div>
                        </div>
                    </div>

                </section>


                <!-- appraisal_equips -->
                <section class="appraisal_equips">
                    <h3 class="titleSub">Peralatan penilaian terbaru Otakaraya</h3>
                    <div class="equip">
                        <div class="equip_img"><img src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
                                alt="Spektrofotometer Inframerah Dekat UV"></div>
                        <div class="equip_meta">
                            <p class="equip_title">Spektrofotometer Inframerah Dekat UV</p>
                            <p class="equip_explain">
                                Ketika cahaya tampak (cahaya yang dapat dilihat oleh mata manusia) melewati suatu zat, sebagian cahaya tersebut diserap oleh materi tersebut. Spektrofotometer Inframerah Dekat UV-Visible sangat baik dalam menganalisis panjang gelombang cahaya yang diserap. Di 'Otakaraya', instrumen ini digunakan untuk memeriksa perlakuan yang diterapkan pada berlian dan perlakuan pada mutiara putih berbahan dasar emas, sehingga memungkinkan penilaian akurat terhadap nilai permata tersebut.
                            </p>
                        </div>
                    </div>
                    <div class="equip">
                        <div class="equip_img"><img src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
                                alt="Spektrofotometer inframerah transformasi Fourier"></div>
                        <div class="equip_meta">
                            <p class="equip_title">Spektrofotometer inframerah transformasi Fourier</p>
                            <p class="equip_explain">
                                Spektrofotometer inframerah transformasi Fourier adalah instrumen presisi yang menganalisis sampel dengan menyinarinya dengan cahaya inframerah dan mengukur cahaya yang ditransmisikan atau dipantulkan. Di Otakaraya, kami menggunakan peralatan ini untuk melakukan berbagai macam inspeksi, termasuk memeriksa apakah batu giok telah diresapi resin dan mengidentifikasi berlian.
                            </p>
                        </div>
                    </div>
                    <div class="equip">
                        <div class="equip_img"><img src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
                                alt="Penentu Tipe I dan Tipe II"></div>
                        <div class="equip_meta">
                            <p class="equip_title">Penentu Tipe I dan Tipe II</p>
                            <p class="equip_explain">
                                Sampel ditempatkan di dalam determiner, dan sinar ultraviolet diterapkan untuk menilai berlian berdasarkan kecepatan transmisinya. Hanya dalam satu detik, perangkat ini dapat menentukan apakah berlian tersebut termasuk Tipe I (berlian alami) atau Tipe II (berlian bersuhu tinggi, bertekanan tinggi, atau berlian sintetis). Perangkat ini dapat menilai berlian lepas dan berlian yang dipasang di suatu tempat, sehingga memungkinkan pengukuran tanpa mengeluarkan batu dari tempat tersebut. Ini memberikan evaluasi yang cepat dan akurat tanpa merusak item Anda.</p>
                        </div>
                    </div>
                    <div class="equip">
                        <div class="equip_img"><img src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
                                alt="Penentu Moissanite"></div>
                        <div class="equip_meta">
                            <p class="equip_title">Penentu Moissanite</p>
                            <p class="equip_explain">Setelah membersihkan permukaan batu permata, letakkan alat pada sampel. Konduktivitas listrik yang diukur oleh perangkat tersebut digunakan untuk menentukan apakah batu tersebut adalah berlian atau moissanite. Mirip dengan penentu Tipe I dan II, alat ini memberikan penilaian instan dan akurat.</p>
                        </div>
                    </div>
                </section>
                <!-- appraisal_equips -->


                <section>
                    <h3 class="titleSub">Evaluasi Desain dan Nilai Merek</h3>
                    <p style="text-align: center;">
                        Di Otakaraya, kami tidak hanya menilai nilai intrinsik dari batu permata itu sendiri tetapi juga mempertimbangkan nilai merek dan desain saat menentukan hasil penilaian.<br><br>
                        Kami memastikan bahwa batu permata kecil sekalipun dievaluasi secara menyeluruh, dan kami dapat menawarkan pembelian terlepas dari apakah barang tersebut memiliki aksesoris atau kotak.
                    </p>
                </section>
                <section>
                    <h3 class="titleSub">Semua Biaya Terkait Pembelian Gratis.</h3>
                    <p style="text-align: center;">
                        Semua biaya, termasuk biaya penilaian dan biaya perjalanan, sepenuhnya gratis, tanpa beban pada pelanggan.<br>
                       Kami menawarkan berbagai metode pembelian, termasuk layanan di luar toko (kunjungan rumah), penilaian di toko kami, dan melalui online.
                    </p>
                </section>
                <section>
                    <h3 class="titleSub">Jaringan nasional di Jepang lebih dari 1.200 toko</h3>
                    <p style="text-align: center;">
                    Otakaraya memiliki lebih dari 1.200 toko di seluruh Jepang, jumlah terbanyak di antara semua toko yang melakukan pembelian kembali. Jika Anda membawanya ke toko Otakaraya terdekat, kami dapat memberi Anda uang tunai di hari yang sama.<br><br>
                       Kami juga memiliki rekam jejak perdagangan dengan 44 negara di seluruh dunia, dan melakukan banyak bisnis dengan individu maupun perusahaan dan bisnis. Selain berlian, kami juga membeli semua jenis batu permata, termasuk rubi dan safir.
                    </p>
                </section>
            </section>
            <section class="renew_2024_top_gg_profile_section is-sp" style="margin-top:0px !important;">
                <!-- MOD_20240417 -->
                <div class="renew_2024_dia_titlebox">
                    <h2 class="renew_2024_dia_title_h2">
                        <img class="renew_2024_dia_title_l_leaf"
                            src="../images/daiya/dialeaf_l_202404.png">
                        <img class="renew_2024_dia_title_r_leaf"
                            src="../images/daiya/dialeaf_r_202404.png">
                        <p>
                            Jika Anda ingin menjual Berlian, kunjungi Otakaraya!
                        </p>
                    </h2>
                    <h3 class="renew_2024_dia_title_subtitle_h3">
                        Staf kami memiliki kualifikasi GG (Graduate Gemologist).
                    </h3>
                </div>
                <!-- MOD_20240417 -->
                <div class="renew_2024_top_gg_desc">
                Kualifikasi Ahli Lulusan Gemologi (GG) merupakan kualifikasi untuk ahli gemologi yang dihormati secara global yang ditawarkan oleh GIA (Institut Gemologi Amerika), dan juga dikenal sebagai "lulusan Gemologi". Otakaraya memiliki anggota staf yang memiliki kualifikasi GG, dan juga secara teratur menyediakan pendidikan penilai melalui sistem pelatihannya. Hal ini memungkinkan kami untuk memberikan penilaian tingkat tinggi dan akurat terhadap batu permata apa pun.
                </div>
                <img class="renew_2024_top_gg_photo" src="../images/daiya/photo_iwamatsu_202404_en.webp" alt="岩松 ">
                <div class="renew_2024_top_gg_profile_superbox">
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">
                        Profil
                        </div>
                        <div class="renew_2024_top_gg_profile_right">
                        Bekerja di sebuah lembaga penilaian. Sejak itu, ia telah bekerja di bisnis penilaian berlian dan identifikasi permata selama hampir 30 tahun.
                        </div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">
                        Kualifikasi yang dimiliki
                        </div>
                        <div class="renew_2024_top_gg_profile_right">
                        GG (diperoleh pada Mei 1994)
                        </div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">
                        Tempat lahir
                        </div>
                        <div class="renew_2024_top_gg_profile_right">
                            Tokyo
                        </div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">
                        Hobi
                        </div>
                        <div class="renew_2024_top_gg_profile_right">
                        Bepergian
                        </div>
                    </div>
                    <div class="renew_2024_top_gg_profile_itembox">
                        <img class="renew_2024_top_gg_profile_gg_certificate_img"
                            src="../images/daiya/e3eeb8346efbe5cff2b0ba7d1f7c1987.webp" alt="GGの証明書">
                    </div>
                    <div class="renew_2024_top_gg_profile_itembox">
                        <!-- appraisal_equips -->
                        <section class="appraisal_equips">
                            <h3 class="renew_2024_top_point_item_h4">
                                Peralatan penilaian terbaru Otakaraya </h3>
                            <div class="equip">
                                <div class="equip_img"><img
                                        src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
                                        alt="Spektrofotometer Inframerah Dekat UV"></div>
                                <div class="equip_meta">
                                    <p class="equip_title">Spektrofotometer Inframerah Dekat UV</p>
                                    <p class="equip_explain">
                                        Ketika cahaya tampak (cahaya yang dapat dilihat oleh mata manusia) melewati suatu zat, sebagian cahaya tersebut diserap oleh materi tersebut. Spektrofotometer Inframerah Dekat UV-Visible sangat baik dalam menganalisis panjang gelombang cahaya yang diserap. Di 'Otakaraya', instrumen ini digunakan untuk memeriksa perlakuan yang diterapkan pada berlian dan perlakuan pada mutiara putih berbahan dasar emas, sehingga memungkinkan penilaian akurat terhadap nilai permata tersebut.
                                    </p>
                                </div>
                            </div>
                            <div class="equip">
                                <div class="equip_img"><img
                                        src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
                                        alt="Spektrofotometer inframerah transformasi Fourier"></div>
                                <div class="equip_meta">
                                    <p class="equip_title">Spektrofotometer inframerah transformasi Fourier</p>
                                    <p class="equip_explain">
                                        Spektrofotometer inframerah transformasi Fourier adalah instrumen presisi yang menganalisis sampel dengan menyinarinya dengan cahaya inframerah dan mengukur cahaya yang ditransmisikan atau dipantulkan. Di Otakaraya, kami menggunakan peralatan ini untuk melakukan berbagai macam inspeksi, termasuk memeriksa apakah batu giok telah diresapi resin dan mengidentifikasi berlian.
                                    </p>
                                </div>
                            </div>
                            <div class="equip">
                                <div class="equip_img"><img
                                        src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
                                        alt="Penentu Tipe I dan Tipe II"></div>
                                <div class="equip_meta">
                                    <p class="equip_title">Penentu Tipe I dan Tipe II</p>
                                    <p class="equip_explain">
                                    Sampel ditempatkan di dalam determiner, dan sinar ultraviolet diterapkan untuk menilai berlian berdasarkan kecepatan transmisinya. Hanya dalam satu detik, perangkat ini dapat menentukan apakah berlian tersebut termasuk Tipe I (berlian alami) atau Tipe II (berlian bersuhu tinggi, bertekanan tinggi, atau berlian sintetis). Perangkat ini dapat menilai berlian lepas dan berlian yang dipasang di suatu tempat, sehingga memungkinkan pengukuran tanpa mengeluarkan batu dari tempat tersebut. Ini memberikan evaluasi yang cepat dan akurat tanpa merusak item Anda.</p>
                                </div>
                            </div>
                            <div class="equip">
                                <div class="equip_img"><img
                                        src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
                                        alt="Penentu Moissanite"></div>
                                <div class="equip_meta">
                                    <p class="equip_title">Penentu Moissanite</p>
                                    <p class="equip_explain">Setelah membersihkan permukaan batu permata, letakkan alat pada sampel. Konduktivitas listrik yang diukur oleh perangkat tersebut digunakan untuk menentukan apakah batu tersebut adalah berlian atau moissanite. Mirip dengan penentu Tipe I dan II, alat ini memberikan penilaian instan dan akurat.</p>
                                </div>
                            </div>
                        </section>
                        <!-- appraisal_equips -->
                    </div>
                    <div class="renew_2024_top_gg_profile_itembox">

                        <h3 class="renew_2024_top_point_item_h4">
                            Evaluasi Desain dan Nilai Merek
                        </h3>
                        <div class="renew_2024_top_point_item_story">
                            Di Otakaraya, kami tidak hanya menilai nilai intrinsik dari batu permata itu sendiri tetapi juga mempertimbangkan nilai merek dan desain saat menentukan hasil penilaian.<br><br>
                            Kami memastikan bahwa batu permata kecil sekalipun dievaluasi secara menyeluruh, dan kami dapat menawarkan pembelian terlepas dari apakah barang tersebut memiliki aksesoris atau kotak.
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>

                        <h3 class="renew_2024_top_point_item_h4">
                            Semua Biaya Terkait Pembelian Gratis.
                        </h3>
                        <div class="renew_2024_top_point_item_story">
                            Semua biaya, termasuk biaya penilaian dan biaya perjalanan, sepenuhnya gratis, tanpa beban pada pelanggan.<br>
                           Kami menawarkan berbagai metode pembelian, termasuk layanan di luar toko (kunjungan rumah), penilaian di toko kami, dan melalui online.
                        </div>
                        <div class="renew_2024_top_point_item_bar"></div>

                        <h3 class="renew_2024_top_point_item_h4">
                            Jaringan nasional di Jepang lebih dari 1.300 toko
                        </h3>
                        <div class="renew_2024_top_point_item_story">
                           Otakaraya memiliki lebih dari 1.200 toko di seluruh Jepang, jumlah terbanyak di antara semua toko yang melakukan pembelian kembali. Jika Anda membawanya ke toko Otakaraya terdekat, kami dapat memberi Anda uang tunai di hari yang sama.<br><br>
                           Kami juga memiliki rekam jejak perdagangan dengan 44 negara di seluruh dunia, dan melakukan banyak bisnis dengan individu maupun perusahaan dan bisnis. Selain berlian, kami juga membeli semua jenis batu permata, termasuk rubi dan safir.
                        </div>
                    </div>
                </div>
            </section>
            <!-- renew_2024_top_gg_profile_section -->

            <section></section><!-- MOD_20240417 -->
            <div class="is-pc">
                <div class="wd_spacer is-pc"></div><!-- MOD_20240417 -->
                <section class="certificate">
                    <div class="titleMain titleMain--wrapper titleMain--mtPc128 titleMain--mtSp32">
                        <h2 class="titleMain--main">
                           Tentang sertifikat berlian
                        </h2>
                    </div>
                    <section>
                        <h3 class="titleSub">Apa itu sertifikat dan laporan identifikasi?</h3>
                        <p style="text-align: center;">
                           Sertifikat atau laporan identifikasi diberikan saat membeli berlian, merinci asal dan jenis berlian. Jika Anda memilikinya, harap membawa sertifikat dan tanda pengenal saat menjual berlian tersebut.
                        </p>
                    </section>
                    <section>
                        <div class="colBox colBox__col01">
                            <div class="col">
                                <div class="img">
                                    <img class="custom-popup-img" src="../images/daiya/kantei_org.webp"
                                        alt="鑑定書について">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="titleSub">GIA (Institut Gemologi Amerika)</h3>
                        <div class="colBox colBox__col01">
                            <div class="col">
                                <div class="img">
                                    <img class="custom-popup-img"
                                        src="../images/daiya/diamond_GIA.webp"
                                        alt="GIA (Institut Gemologi Amerika)">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h3 class="titleSub">Cara Membaca Sertifikat Penilaian Berlian</h3>
                        <ol class="num-content__lists">
                            <li class="num-content__list">
                                <dl>
                                    <dt>Potongan dan Bentuk</dt>
                                    <dd>
                                        <p>Bentuk berlian dan susunan seginya dijelaskan.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li class="num-content__list">
                                <dl>
                                    <dt>Berat (Karat)</dt>
                                    <dd>
                                        <p>Beratnya dievaluasi sebagai 1 karat = 0,2g (200mg).</p>
                                    </dd>
                                </dl>
                            </li>
                            <li class="num-content__list">
                                <dl>
                                    <dt>Warna (Color)</dt>
                                    <dd>
                                        <p>Intensitas warna berlian dievaluasi menggunakan GIA Master Stone (bersertifikat JJA/AGL) dengan nilai D hingga Z.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li class="num-content__list">
                                <dl>
                                    <dt>Kejernihan</dt>
                                    <dd>
                                        <p>Jumlah, ukuran, warna, dan lokasi inklusi pada berlian dievaluasi dalam tingkatan seperti FL, IF, VVS1–VVS2, VS1–VS2, SI1–SI2, I1–I3.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li class="num-content__list">
                                <dl>
                                    <dt>Potongan</dt>
                                    <dd>
                                        <p>Dengan menggunakan database GIA Facetware Cut Estimator dan penilaian visual, potongan tersebut dinilai sebagai Sangat Baik, Sangat Baik, Baik, Cukup Baik, atau Buruk.</p>
                                    </dd>
                                </dl>
                            </li>
                            <li class="num-content__list">
                                <dl>
                                    <dt>Fluoresensi</dt>
                                    <dd>
                                        <p>Warna dan kekuatan fluoresensi dievaluasi menggunakan batu induk fluoresensi dengan tingkatan Tidak Ada, Lemah, Sedang, Kuat, atau Sangat Kuat.</p>
                                    </dd>
                                </dl>
                            </li>
                        </ol>
                    </section>
                    <section>
                        <h3 class="titleSub">Sertifikat keaslian dapat diterbitkan kembali.</h3>
                        <p style="text-align: center;">
                            Sertifikat penilaian keaslian dapat diterbitkan kembali di toko perhiasan atau toko pembelian perhiasan khusus yang mempekerjakan ahli permata atau ahli penilai bersertifikat.
                            <br><br>
                           Ada biaya penggantian, yang bervariasi tergantung pada ukuran dan jumlah perhiasan serta tempat penggantiannya.<br>
                            Harganya pun bervariasi tergantung pada jumlah barang yang terdaftar, tetapi harga rata-ratanya sekitar 1.000 hingga 15.000 Yen.
                        </p>
                    </section>
                    <section>
                        <section>
                            <h3 class="titleSub">Pelanggan yang tidak memiliki sertifikat penilaian.</h3>
                            <p style="text-align: center;">
                                Di Otakaraya, penilaian dan pembelian dapat dilakukan bahkan tanpa sertifikat penilaian atau sertifikat identifikasi. Karena Otakaraya mempekerjakan ahli permata bersertifikat yang memiliki kualifikasi GG, mereka akan melakukan penilaian permata di tempat dan memberikan penilaian yang sesuai.
                            </p>

                        </section>
                    </section>
                    <section>
                        <div class="titleMain titleMain--wrapper">
                            <h2 class="titleMain--main">
                                Bahkan produk yang cacat pun dapat kami dibeli.
                            </h2>
                            <div class="titleMain--lead">
                                <p style="text-align: center;">
                                    Di Otakaraya, kami dapat menilai dan memperdagangkan produk yang memiliki kekurangan seperti desain lama, berkarat, kusam, bengkok, kotor, atau tanpa sertifikat penilaian atau garansi.
                                    <br><br>
                                    Penilai profesional kami menggunakan alat penilaian khusus untuk mengevaluasi barang Anda, sehingga kami dapat mengembalikan harga pembelian Anda sebanyak mungkin.
                                </p>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
            <section class="renew_2024_top_gg_profile_section is-sp" style="margin-top:0px !important;">
                <div class="renew_2024_titlesub_topbar follow">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                <div class="renew_2024_auth_titlebox">
                    <h2 class="renew_2024_auth_title_h2">
                       Tentang sertifikat berlian
                    </h2>
                    <h3 class="renew_2024_auth_title_about">
                        Apa itu sertifikat dan laporan identifikasi?
                    </h3>
                    <img class="renew_2024_auth_title_image"
                        src="../images/daiya/report_titleimage_202404.png">
                </div>
                <div class="renew_2024_top_gg_desc">
                    Sertifikat atau laporan identifikasi diberikan saat membeli berlian, merinci asal dan jenis berlian. Jika Anda memilikinya, harap membawa sertifikat dan tanda pengenal saat menjual berlian tersebut.
                </div>
                <div class="renew_2024_auth_item_superbox">
                    <img class="renew_2024_auth_item_innerimage custom-popup-img" src="../images/daiya/kantei_org.webp" alt="鑑定書について">
                    <h3 class="renew_2024_auth_title_about">
                        GIA (Institut Gemologi Amerika)
                    </h3>
                    <img class="renew_2024_auth_item_innerimage custom-popup-img"
                        src="../images/daiya/diamond_GIA.webp"
                        alt="GIA (Institut Gemologi Amerika)">
                    <h3 class="renew_2024_auth_title_about">
                        ダイヤモンド鑑定書の見方
                    </h3>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">01</div>
                            <div class="renew_2024_auth_howtoread_title">Potongan dan Bentuk</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">Bentuk berlian dan susunan seginya dijelaskan.
</div>
                    </div>
                    <div class="renew_2024_auth_howtoread_bar"></div>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">02</div>
                            <div class="renew_2024_auth_howtoread_title">Berat (Karat)</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">Beratnya dievaluasi sebagai 1 karat = 0,2g (200mg).</div>
                    </div>
                    <div class="renew_2024_auth_howtoread_bar"></div>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">03</div>
                            <div class="renew_2024_auth_howtoread_title">Warna (Color)</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">Intensitas warna berlian dievaluasi menggunakan GIA Master Stone (bersertifikat JJA/AGL) dengan nilai D hingga Z.
</div>
                    </div>
                    <div class="renew_2024_auth_howtoread_bar"></div>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">04</div>
                            <div class="renew_2024_auth_howtoread_title">Kejernihan</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">
                            Jumlah, ukuran, warna, dan lokasi inklusi pada berlian dievaluasi dalam tingkatan seperti FL, IF, VVS1–VVS2, VS1–VS2, SI1–SI2, I1–I3.
</div>
                    </div>
                    <div class="renew_2024_auth_howtoread_bar"></div>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">05</div>
                            <div class="renew_2024_auth_howtoread_title">Potongan</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">Dengan menggunakan database GIA Facetware Cut Estimator dan penilaian visual, potongan tersebut dinilai sebagai Sangat Baik, Sangat Baik, Baik, Cukup Baik, atau Buruk.
</div>
                    </div>
                    <div class="renew_2024_auth_howtoread_bar"></div>
                    <div class="renew_2024_auth_howtoread_itembox">
                        <div class="renew_2024_auth_howtoread_titlebox">
                            <div class="renew_2024_auth_howtoread_num">06</div>
                            <div class="renew_2024_auth_howtoread_title">Fluoresensi</div>
                        </div>
                        <div class="renew_2024_auth_howtoread_story">Warna dan kekuatan fluoresensi dievaluasi menggunakan batu induk fluoresensi dengan tingkatan Tidak Ada, Lemah, Sedang, Kuat, atau Sangat Kuat.</div>
                    </div>
                </div>
                <div class="renew_2024_auth_additional_superbox">
                    <h3 class="renew_2024_auth_additional_tilte">
                        <img class="renew_2024_auth_item_image"
                            src="../images/daiya/auth_item_check.png">
                        Sertifikat keaslian dapat diterbitkan kembali.
                    </h3>
                    <div class="renew_2024_auth_additional_story">
                        Sertifikat penilaian keaslian dapat diterbitkan kembali di toko perhiasan atau toko pembelian perhiasan khusus yang mempekerjakan ahli permata atau ahli penilai bersertifikat.
                        <br><br>
                       Ada biaya penggantian, yang bervariasi tergantung pada ukuran dan jumlah perhiasan serta tempat penggantiannya.<br>
                        Harganya pun bervariasi tergantung pada jumlah barang yang terdaftar, tetapi harga rata-ratanya sekitar 1.000 hingga 15.000 Yen.
                    </div>
                    <div class="renew_2024_auth_additional_bar"></div>
                    <h3 class="renew_2024_auth_additional_tilte">
                        <img class="renew_2024_auth_item_image"
                            src="../images/daiya/auth_item_check.png">
                        Pelanggan yang tidak memiliki sertifikat penilaian.
                    </h3>
                    <div class="renew_2024_auth_additional_story">
                        Di Otakaraya, penilaian dan pembelian dapat dilakukan bahkan tanpa sertifikat penilaian atau sertifikat identifikasi. Karena Otakaraya mempekerjakan ahli permata bersertifikat yang memiliki kualifikasi GG, mereka akan melakukan penilaian permata di tempat dan memberikan penilaian yang sesuai.
                    </div>
                </div>
                <!-- renew_2024_auth_additional_superbox -->
                <div class="renew_2024_auth_oldok_superbox">
                    <h2 class="renew_2024_auth_oldok_title">
                        <img class="renew_2024_auth_oldok_photo"
                            src="../images/daiya/ok_photo_202404.png">
                        <p>
                            Jangan khawatir jika Anda tidak yakin dengan kemurnian barang emas yang akan Anda beli
                        </p>
                    </h2>
                    <div class="renew_2024_auth_oldok_story">
                        Di Otakaraya, kami dapat menilai dan memperdagangkan produk yang memiliki kekurangan seperti desain lama, berkarat, kusam, bengkok, kotor, atau tanpa sertifikat penilaian atau garansi.
                        <br><br>
                        Penilai profesional kami menggunakan alat penilaian khusus untuk mengevaluasi barang Anda, sehingga kami dapat mengembalikan harga pembelian Anda sebanyak mungkin.
                    </div>
                </div>
                <!-- renew_2024_auth_oldok_superbox -->
            </section>
            <!--     ▲▲▲評価について▲▲▲     -->

            <section></section>
            <!--     ▲▲▲carat別買取▲▲▲     --><!-- MOD_20240417 -->
            <div class="titleMain titleMain--wrapper">
                <h2 class="titleMain--main">
                    <span>Pengenalan penilai</span>
                </h2>
            </div>
            <div class="content-inner">
                <section id="shop-leader02">
                    <div class="shop-leader_container bordersitecolor">
                        <div class="shop-leader_inner bordersitecolor">
                            <div class="shop-leader_profile relative">
                                <div class="shop-leader_head absolute">
                                    <h2 class="is-pc bgsitecolor bordersitecolor relative"><span class="noto thin"
                                            style="font-size: 26px; font-family: serif;">Juru taksir</span></h2>
                                    <h2 class="is-sp bgsitecolor bordersitecolor relative"><span class="noto thin"
                                            style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">Juru taksir</span></h2>
                                </div>
                                <div class="shop-leader_head_shadow absolute">
                                    <div class="relative"></div>
                                </div>
                                <div class="imgbox absolute">
                                    <img src=../images/daiya/568433d3328efc80e6346b56a8db47df.webp alt="">
                                </div>
                                <ul class="floatlist">
                                    <li class="shop-leader_name sitetextcolor" style="font-family: serif;">
                                        <span class="noto ja" style="font-weight: bold;"> Iwamatsu</span>
                                    </li>
                                    <li class="shop-leader_info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th class="sitetextcolor">
                                                        <span class="noto">Hobi</span>
                                                    </th>
                                                    <td>
                                                        <span class="noto">Bepergian</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor">
                                                        <span class="noto">Kutipan Favorit</span>
                                                    </th>
                                                    <td>
                                                        <span class="noto">'Tindakan berbicara lebih keras daripada kata-kata'</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor">
                                                        <span class="noto">Merek Favorit</span>
                                                    </th>
                                                    <td>
                                                        <span class="noto">Berlian dan Perhiasan</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor">
                                                        <span class="noto">Contoh Pembelian Sebelumnya</span>
                                                    </th>
                                                    <td>
                                                        <span class="noto">Berlian 10 karat</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                            <p class="shop-leader_text">
                                <span class="noto">Di Otakaraya, kami menilai ratusan batu permata setiap hari, baik besar maupun kecil. Nilai batu permata dapat sangat berfluktuasi tergantung pada berbagai faktor seperti 4C berlian yaitu, warna (Color), bentuk (Cut), berat (Carat), dan fluoresensi (Clarity). Otakaraya mengadakan lelang in-house, memungkinkan kami merespons permintaan batu permata harian dengan cepat dan sensitif. Terkait penilaian, kami memiliki staf profesional dan alat khusus untuk penguji berlian, yang memungkinkan evaluasi akurat di toko kami di seluruh negeri. Jika Anda tertarik menjual barang apa pun, silakan gunakan layanan Otakaraya.</span>
                            </p>
                            <div class="shop-detail_button clearfix">
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php get_template_part('template-parts/assessment_cta'); ?>
            <!-- MOD_20240417 -->

            <section class="reason_section">
                <?php get_template_part('template-parts/otakaraya_sel'); ?>
            </section>

            <!-- MOD_20240417 -->
            <h2 class="renew_2024_titlesub follow is-sp">
                <div class="renew_2024_titlesub_topbar">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                Pertanyaan yang sering diajukan tentang pembelian Berlian
            </h2>
            <section class="renew2024">
                <div class="titleMain titleMain--wrapper is-pc">
                    <h2 class="titleMain--main">
                        Pertanyaan yang sering diajukan tentang pembelian Berlian
                    </h2>
                    <div class="titleMain--lead">
                        <p></p>
                    </div>
                </div>
                <div class="qa__wrap js__more--3th">
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Kapan waktu terbaik untuk menjual berlian?</dt>
                            <dd class="qa__list__a">
                                Sulit untuk mengatakan kapan waktu terbaik untuk menjual berlian, karena waktunya mungkin tiba segera dan terkadang nilainya dapat meningkat jika Anda menunggu lebih lama. Jika Anda berencana untuk menyimpannya dalam jangka waktu lama sebelum menjualnya, maka perlu dijaga kondisinya tetap baik, jadi kami sarankan Anda menyimpannya dengan benar dan melakukan perawatan rutin.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya menjual tanpa sertifikat penilaian keaslian?</dt>
                            <dd class="qa__list__a">Ya, kami dapat membelinya. Penilai kami akan menilai 4C berlian (karat, warna, kejernihan, potongan) dan memberi Anda harga pembelian.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah desain mempengaruhi harga beli?</dt>
                            <dd class="qa__list__a">Untuk pembelian batu permata, kualitas berlian itu sendiri sangatlah penting. Bahkan dengan desain yang lebih tua, Otakaraya memastikan pembelian dengan nilai tinggi, sehingga Anda dapat yakin.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah bentuk berlian mempengaruhi harga beli?</dt>
                            <dd class="qa__list__a">
                            Ya, harga belinya bervariasi berdasarkan bentuknya. "Potongan Round Brilliant" adalah potongan berlian yang paling bernilai tinggi. Harga pembelian juga berubah tergantung pada kualitas berlian, jadi silakan manfaatkan layanan penilaian gratis kami.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah toko perhiasan akan menawarkan harga yang lebih tinggi?</dt>
                            <dd class="qa__list__a">
                            Selain berlian, batu permata, dan perhiasan, Otakaraya juga menangani berbagai macam barang seperti emas dan logam mulia, produk bermerek, dan jam tangan, sehingga ada berbagai macam channel penjualan. Artinya kami tidak perlu menyimpan inventaris dan dapat menawarkan harga setinggi mungkin.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah melee diamond (berlian pavé) juga dijual?</dt>
                            <dd class="qa__list__a">Ya, itu bisa kami beli. Perhiasan yang dihiasi melee diamond (berlian pavé) mungkin mendapat hasil penilaian lebih tinggi. Namun, batu lepas mungkin tidak memenuhi syarat untuk kami beli.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah ada diamond yang nilai belinya tinggi?</dt>
                            <dd class="qa__list__a">
                            Berlian di atas 1 karat, berlian dengan kualitas VS atau lebih tinggi, perhiasan berlian bermerek, dan berlian berwarna langka sering kali memiliki harga beli yang tinggi. Tidak hanya berlian tak berwarna, berlian natural pink, berlian biru, dan berlian kuning juga cenderung memiliki nilai beli yang lebih tinggi.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah ada sesuatu yang harus saya bawa untuk penilaian?</dt>

                            <dd class="qa__list__a">Jika Anda memiliki sertifikat penilaian, harap membawanya. Sertifikat tersebut berfungsi sebagai bukti nilai berlian, seperti nilai 4C, yang dapat meningkatkan kemungkinan memperoleh harga pembelian yang menguntungkan.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Barang apa saja yang bisa dibeli dengan harga tinggi?
                            </dt>
                            <dd class="qa__list__a">
                            Untuk pembelian diamond, item dengan grade 4C tinggi dipertimbangkan. Selain itu, kualitas batu disekitarnya, tidak hanya batu induk, juga berperan dalam penilaian. Jangan ragu untuk berkonsultasi dengan kami terlebih dahulu.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah 'depresiasi Yen / apresiasi yen' mempengaruhi harga beli?
                            </dt>
                            <dd class="qa__list__a">
                            Karena batu permata seperti berlian tidak diproduksi di Jepang, maka batu tersebut dipengaruhi oleh nilai tukar seperti depresiasi yen atau apresiasi yen. Ketika yen terdepresiasi, nilai (harga) meningkat, dan ketika harga di pasar barang bekas naik, harga beli menjadi lebih tinggi.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah Anda membeli kembali berlian yang dibeli sejak lama?
                            </dt>
                            <dd class="qa__list__a btn--more">
                            Ya, kami dapat membelinya. Bahkan barang yang dibeli sejak lama akan dinilai berdasarkan standar saat ini.<br>
                            Jika sertifikat penilaian disertakan, harga pembelian akan bervariasi bergantung pada lembaga penerbit dan waktu sertifikat.</dd>
                            <div class="qa__list__button gtm-more-qa"><button>Lihat selengkapnya</button></div>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah berlian lepas atau batu kasar dibeli?
                            </dt>
                            <dd class="qa__list__a">Ya, kami juga membeli berlian lepas dan batu kasar.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah ukuran batu permata mempengaruhi harga belinya?
                            </dt>
                            <dd class="qa__list__a">
                            Ya, ukuran batu permata memang mempengaruhi harga belinya. Jika ada dua berlian dengan kualitas yang sama, batu yang lebih besar dianggap lebih langka dan harga belinya bisa lebih tinggi.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Faktor apa saja yang mempengaruhi harga beli diamond?
                            </dt>
                            <dd class="qa__list__a">
                            Kualitas berlian yang dikenal dengan 4C dan ukurannya menjadi faktor utama yang mempengaruhi harga belinya.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Mengapa identifikasi diperlukan?
                            </dt>
                            <dd class="qa__list__a">Identifikasi penjual diwajibkan oleh Undang-Undang Dealer Barang Antik, dan kami diwajibkan menyimpan catatan untuk tujuan tersebut. Ini tidak akan digunakan untuk alasan lain apa pun.</dd>
                        </dl>
                    </div>
                </div>
                <div class="btn__wrap btn__more js__more--btn3 gtm-more-qa">
                    <span>Lihat selengkapnya</span>
                </div>
            </section>

            <?php get_template_part('template-parts/assessment_cta'); ?>
        </article>
        <?php get_template_part('template-parts/side-menu'); ?>
    </main>


    <script src="../js/jquery-3.6.3.min.js"></script>
    <script src="../js/renew202404_2.js"></script>
    <script src="../js/common_daiya.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/shared.js"></script>
    <script src="../js/breadlist.js"></script>


    <?php get_footer('common'); ?>


    <script>
        var carat_page = "";
        var carat_label = ["01ct", "02ct", "03ct", "04ct", "05ct", "06ct", "07ct", "08ct", "09ct", "1ct", "2ct", "3ct", "4ct", "5ct", "6ct", "7ct", "8ct", "9ct", "10ct"];

        // ページ表示時の選択されたタブの位置を中央に配置
        if (carat_page === '') {
            // caratページでなければ1caratをデフォルトに設定
            var startSlideIndex = 9;
            if (navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
                // ❶スマホのみに適用
                if ((startSlideIndex - 1) % 3 === 0) {
                    startSlideIndex = startSlideIndex - 1;
                }
            } else {
                startSlideIndex = startSlideIndex - 3;
            }
        } else {
            carat_page = carat_page + 'ct';
            if (navigator.userAgent.match(/(iPhone|iPod|Android.*Mobile)/i)) {
                // ❶スマホのみに適用
                var startSlideIndex = Math.min(carat_label.indexOf(carat_page), 20);
                console.log(startSlideIndex);
                if ((startSlideIndex - 1) % 3 === 0) {
                    startSlideIndex = startSlideIndex - 1;
                }
            } else {
                // ❷その他PC・タブレットに適用
                var startSlideIndex = Math.min(carat_label.indexOf(carat_page), 16);
                startSlideIndex = startSlideIndex - 3;
            }
        }

        $(function() {
            var slickOptions = {
                slide: '.tabbox',
                infinite: false,
                slidesToShow: 7,
                slidesToScroll: 3,
                responsive: [{
                    breakpoint: 782,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }, ]
            };
            $('.f_area').slick(slickOptions);
            $('.f_area').slick('slickGoTo', startSlideIndex);

            // caratタブクリック時の処理
            $(".tabbox").click(
                function() {
                    if ($(this).hasClass("active") == false) {
                        var list_i = $(".tabbox").index(this);
                        $(".tabbox").removeClass("active");
                        $(".tablelist").removeClass("active").hide();
                        $(".tab_selectbox").removeClass("active").hide();
                        $(".selectbox-5").removeClass("active").hide();
                        $(".tabbox").eq(list_i).addClass("active");
                        $(".ct-if").eq(list_i).addClass("active").stop().fadeIn(200);
                        $(".tab_selectbox").eq(list_i).addClass("active").stop().fadeIn(200);
                        $(".selectbox-5").eq(list_i).addClass("active").stop().fadeIn(200);
                    }
                    // 現状tablelistが全てのtbodyに設定されているので、caratごとに1つ設定するよう修正
                    // 同一caratにはct-01ctなどのクラスが設定されているので、セレクトボックスを選択したときはこのクラスでテーブルを切り替える。
                }
            );

            // クラリティセレクトボックス変化時の処理
            $(".tab_selectbox").change(function() {
                var selectedIndex = $(this).prop('selectedIndex');
                var selectedId = $(this).attr('id');
                $("." + selectedId).removeClass("active").hide();
                $("." + selectedId).eq(selectedIndex).addClass("active").stop().fadeIn(200);
            });
        });
        /* // 為替の計算結果を反映する
        var kawase_price = <?php echo wp_json_encode($kawase_price) ?>;
        var priceElements = document.querySelectorAll('.jewelrySoubaBox__table__scroll .table__items .price');
        if (kawase_price.length === priceElements.length) {
            priceElements.forEach(function(priceCell, index) {
                priceCell.textContent = kawase_price[index];
            });
        } else {
            // 要素数12540が正
            console.log('kawase_price' + kawase_price.length);
            console.log('priceElements' + priceElements.length);
            console.log("kawase_priceとpriceElementsの要素数が一致しません");
        } */

        $(document).ready(function() {
            jQuery(document).ready(function($) {
                var $listWrap = $("#tablelistbox"); //鑑定書あり部分のID
                var $priceWrap = $("#pricelistframe"); //価格相場のID
                var $searchWrap = $("#searchbox"); //select部分のID
                var $selects = $searchWrap.find("select");
                var $submit = $("#price-search"); //検索ボタンのID
                var theCls = "the-price"; //使っていない
                var hdnCls = "hidden";
                //searchboxとprice-searchが重要
                //

                //var hdnLoadingCls = "hidden-loading";
                //$listWrap.find("." + hdnLoadingCls).removeClass(hdnLoadingCls);


                var reachScorllIfSp = function() {
                    if ($searchWrap.hasClass('sp-searchbox')) {
                        var parentScrollTo = $searchWrap.offset().top;
                        var currentScroll = $(window).scrollTop();
                        if (currentScroll < parentScrollTo) {
                            $("html,body").animate({
                                scrollTop: parentScrollTo,
                            }, {
                                duration: 400,
                            });
                        }
                    }
                };

                var reachScroll = function(reach, cell) {
                    var timer;
                    var itvlNum = 0;
                    $(cell).addClass(theCls);
                    $priceWrap.stop().animate({
                        scrollTop: reach,
                    }, {
                        duration: 500,
                        complete: function() {
                            timer = setInterval(function() {
                                itvlNum++;
                                if (itvlNum >= 5 && $(cell).hasClass(theCls)) {
                                    clearInterval(timer);
                                    return;
                                }
                                $(cell).toggleClass(theCls);
                            }, 300);
                        }
                    });
                };



                //鑑定書をお持ちお持ちの方はこちら
                function updateElementsAndEvents(tab) {
                    $('.kantei .' + tab + '.searchbox').attr('id', null);
                    $('.kantei .' + tab + ' button').attr('id', null);
                    $('.kantei .' + tab + '.price').attr('id', null);


                    var otherTab = (tab === 'tab1') ? 'tab2' : 'tab1';
                    $('.kantei .' + otherTab + '.searchbox').attr('id', 'searchbox');
                    $('.kantei .' + otherTab + ' button').attr('id', 'price-search');
                    $('.kantei .' + otherTab + '.price').attr('id', 'price_table_calc');


                    var $searchWrap = $("#searchbox");
                    var $selects = $searchWrap.find("select");
                    var $submit = $("#price-search");

                    // Attach event handler to $submit
                    //鑑定書をお持ちお持ちの方はこちら
                    $submit.on('click', function() {
                        $priceWrap.find('td').removeClass(theCls);

                        var vals = {};
                        var errors = "";
                        $.each($selects, function(k, ele) {
                            var sidx = $(ele).prop('selectedIndex');

                            var name = $(ele).attr("name");
                            var $cOpt = $($(ele).find('option').get(sidx));
                            var v = ("conditions" === name && $cOpt.length) ? $cOpt.html() : $(ele).val();
                            var isEmpty = (0 === sidx && ("--" === v || "" === v));
                            if (isEmpty) {
                                var label = $(ele).parent().parent().prev('dt').find('label').html();
                                errors += label + "を選択してください\n";
                            }
                            vals[name] = v;

                        });

                        if (errors) {
                            alert(errors);
                            return;
                        }

                        var $reachWrap = {};
                        var point = {
                            x: {
                                s: 'thead th:not(.none)',
                                f: function(idx) {
                                    return ($(this).html() === condition_val) ? idx : null;
                                },
                            },
                            y: {
                                s: 'tbody th',
                                f: function(idx) {
                                    return ($(this).html() === color_val) ? idx : null
                                },
                            },
                        };
                        var reachAdjust = 8;

                        var applyCellReach = true;


                        var ct_id = "#ct-" + vals.carat; //変更

                        var clarity = vals.clarity;
                        var cut = vals.cut;
                        var color = vals.color;
                        var reach_id = ct_id + "-" + clarity;
                        $reachWrap = $(reach_id);

                        point.x.s = 'thead th';
                        point.x.f = function(idx) {
                            return ($(this).hasClass(cut)) ? idx : null;
                        };
                        point.y.s = 'tbody td[class*="color"]';
                        point.y.f = function(idx) {
                            return ($(this).html() === color) ? idx : null;
                        };

                        reachAdjust = 5;

                        applyCellReach = false;


                        if (!$reachWrap.length) return;

                        var $table = $('table');
                        var x = $table.find(point.x.s).map(point.x.f).get(0);
                        var y = $table.find(point.y.s).map(point.y.f).get(0);
                        var cell = $reachWrap.find("tr").eq(y).find("td").eq(x);
                        reachScorllIfSp();

                        applyCellReach = (y > 0 && applyCellReach) || false;

                        var reach = (applyCellReach) ? $(cell).position().top : $reachWrap.position().top;
                        reach = reach - $priceWrap.position().top;
                        reach = $priceWrap.scrollTop() + reach - reachAdjust;

                        // スクロール
                        // reachScroll(reach, cell);
                        $("#diamond_price_table_display_inner #price_table_calc").html(
                            '<span class="value">HK$</span>' + cell.text()
                        );

                        $("#diamond_price_table_display_2 #price_table_calc").html(
                            '<span class="value">HK$</span>' + cell.text()
                        );

                        daiya_calc = cell.text();
                        daiya_calc = daiya_calc.replace(/en/g, '');
                        daiya_calc = daiya_calc.replace(/,/g, '');
                        daiya_calc = Number(daiya_calc);
                        simulation_select_val = $("#simulation_select").val();
                        simulation_select_val = simulation_select_val.replace(/,/g, '');
                        simulation_select_val = Number(simulation_select_val);
                        weight_val = $("#weight").val();
                        weight_val = Number(weight_val);
                        simulation_select_val = simulation_select_val * weight_val;
                        gold_daiya_calc = simulation_select_val + daiya_calc;
                        gold_daiya_calc = String(gold_daiya_calc).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
                        $("#daiya_gold_calc").html('<span class="value">HK$</span>' + gold_daiya_calc);

                    });
                }

                // Initial setup
                updateElementsAndEvents('tab2');

                // Event handlers
                $(".price_table_contents_nav2").on('click', function() {
                    updateElementsAndEvents('tab1');
                });

                $(".price_table_contents_nav1").on('click', function() {
                    updateElementsAndEvents('tab2');
                });


                // new
                // ページロード時に価格データを取得
                var carat_num = [{
                    "value": "0.1",
                    "label": "01ct"
                }, {
                    "value": "0.2",
                    "label": "02ct"
                }, {
                    "value": "0.3",
                    "label": "03ct"
                }, {
                    "value": "0.4",
                    "label": "04ct"
                }, {
                    "value": "0.5",
                    "label": "05ct"
                }, {
                    "value": "0.6",
                    "label": "06ct"
                }, {
                    "value": "0.7",
                    "label": "07ct"
                }, {
                    "value": "0.8",
                    "label": "08ct"
                }, {
                    "value": "0.9",
                    "label": "09ct"
                }, {
                    "value": "1.0",
                    "label": "1ct"
                }, {
                    "value": "2.0",
                    "label": "2ct"
                }, {
                    "value": "3.0",
                    "label": "3ct"
                }, {
                    "value": "4.0",
                    "label": "4ct"
                }, {
                    "value": "5.0",
                    "label": "5ct"
                }, {
                    "value": "6.0",
                    "label": "6ct"
                }, {
                    "value": "7.0",
                    "label": "7ct"
                }, {
                    "value": "8.0",
                    "label": "8ct"
                }, {
                    "value": "9.0",
                    "label": "9ct"
                }, {
                    "value": "10.0",
                    "label": "10ct"
                }];
                var prices = {};
                for (var i = 0; i < carat_num.length; i++) {
                    var label = carat_num[i]['label'];
                    var id = "#ct-" + label + "-if";
                    var price = $(id + " > tr:nth-child(1) > td:nth-child(2)").text();
                    prices[label] = price;
                }

                function updatePrice(carat, target) {
                    var price = prices[carat];
                    if (price) {
                        $(target).html(price + '<span class="value">&yen;</span>');
                    }
                }

                $("#carat_only_btn1").on('click', function() {
                    var carat_only_price_area = $("#carat_only_price_area select").val();
                    updatePrice(carat_only_price_area, "#carat_only_price");
                });

                $(document).on('click', '#carat_only_btn2', function() {
                    var carat_only_price_area2 = $("#carat_only_price_area2 select").val();
                    console.log("Selected carat: ", carat_only_price_area2);
                    updatePrice(carat_only_price_area2, "#carat_only_price2");

                    var caratPrice = parseInt($("#carat_only_price2").text().replace(/[HK$,]/g, ''), 10);
                    var answer2 = parseInt($("#answer2").val().replace(/,/g, ''), 10);
                    var goldPriceVal = parseInt($("#simulation_select2").val().replace(/,/g, ''), 10);
                    var weight = parseFloat($("#weight2").val().replace(/,/g, ''));

                    var goldCalcPrice = goldPriceVal * weight;
                    if (isNaN(goldCalcPrice)) {
                        goldCalcPrice = 0;
                    }
                    // var total = caratPrice + answer2 + goldCalcPrice;
                    var total = caratPrice + answer2;

                    $("#daiya_gold_calc2").html(total.toLocaleString() + '<span class="value">&yen;</span>');
                });


                $(".price_table_contents_nav").on('click', function() {
                    $("#price_table_contents1 #price_table_calc").text("0");
                    $("#price_table_contents2 #price_table_calc").text("0");
                });

                // タブ処理
                $("a[href='#price_table_contents2']").on('click', function() {
                    $(".arrow_bottom_daiya_default").css("display", "block");
                    $(".arrow_bottom_gold_default").css("display", "none");
                    $(".arrow_bottom_gold").css("display", "block");
                    $(".arrow_bottom_daiya").css("display", "none");
                    $("#diamond_price_table_display_inner .price_table_calc_area").css("display", "none");
                    $(".prompt_text_daiya").css("display", "none");
                    $(".prompt_text_gold").css("display", "block");
                });
                $("a[href='#price_table_contents1']").on('click', function() {
                    $(".arrow_bottom_daiya_default").css("display", "none");
                    $(".arrow_bottom_daiya").css("display", "block");
                    $("#diamond_price_table_display_inner .price_table_calc_area").css("display", "flex");
                    $(".prompt_text_gold").css("display", "none");
                    $(".prompt_text_daiya").css("display", "block");
                });
                let clone1 = $(".calc_area").clone();
                $(".cloned_gold_calc").append(clone1);


            });
            const ua = navigator.userAgent;
            if (ua.indexOf('iPhone') > -1 || (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)) {

                // タブ処理
                $("a[href='#price_table_contents2']").on('click', function() {
                    $("#tablelistbox h2").css("margin-top", "680px");
                    $("a[href='#price_table_contents2'] .arrow_bottom_gold").css("display", "none")
                    $("a[href='#price_table_contents2'] .arrow_bottom").css("display", "block")
                });
                $("a[href='#price_table_contents1']").on('click', function() {
                    $("#tablelistbox h2").css("margin-top", "160%");
                });

            } else {
                // pc


                jQuery(document).ready(function($) {
                    input_width = $(".otkr-plicelist #searchbox p input").width();
                    text_width = 130
                    arrow_width = 15;
                    margin_width = 10;
                    arrow_text_width = text_width + arrow_width + margin_width;
                    arrow_text_width_calc = input_width - arrow_text_width;
                    arrow_text_width_calc = arrow_text_width_calc / 2;
                    arrow_text_width_calc = arrow_text_width_calc + 22;
                    $(".otkr-plicelist #searchbox p input").css("padding-right", arrow_text_width_calc);
                });


                // タブ処理
                $("a[href='#price_table_contents2']").on('click', function() {
                    var windowWidth = $(window).width();

                    if (windowWidth >= 1361) {
                        $("#tablelistbox > h2").css("margin-top", "650px");
                    } else {
                        $("#tablelistbox > h2").css("margin-top", "650px");
                    }

                });
                $("a[href='#price_table_contents1']").on('click', function() {
                    $("#tablelistbox > h2").css("margin-top", "400px");

                });
            }

        });

        function priceset() {
            // 読み込み時にselect二種類追加
            var k18val = jQuery('#k18val').text();
            k18val = k18val.replace(/,/g, '');

            var pt900 = jQuery('#pt900').text();
            var pt850 = jQuery('#pt850').text();
            //pt900 = pt900.replace(/,/g, '');
            //pt850 = pt850.replace(/,/g, '');
            //pt900 = pt900 / 2 + k18val / 2;
            //pt850 = pt850 / 2 + k18val / 2;
            //jQuery('#simulation_select').append(jQuery('<option>').html('Pt900/K18 半々').val(pt900));
            //jQuery('#simulation_select').append(jQuery('<option>').html('Pt850/K18 半々').val(pt850));
        }
        window.onload = priceset;
        document.addEventListener('DOMContentLoaded', function() {

            function multi(selectId, weightId, answerId, answerCpId) {
                var text = jQuery('#' + selectId + ' option:selected').val();
                if (text === undefined) {
                    console.error('No selected option found for #' + selectId);
                    return;
                }
                var removed = text.replace(/,/g, '');
                var num = parseInt(removed, 10);
                var weight = jQuery("#" + weightId).val();
                if (num) {
                    if (weight) {
                        var _up = 0;

                        var answer_cp = num * weight + _up * weight;
                        answer_cp = Math.round(answer_cp);
                        answer_cp = answer_cp.toLocaleString();

                        jQuery('#' + answerCpId).text(answer_cp);

                        var answer = num * weight;
                        answer = Math.round(answer);
                        answer = answer.toLocaleString();

                        jQuery('#' + answerId).val(answer);

                    }
                }
            }


            // 謎
            // jQuery(document).on('change', '#simulation_select', function() {
            //     multi('simulation_select', 'weight', 'answer', 'answer_cp');
            // });

            // jQuery(document).on('change', '#weight', function() {
            //     multi('simulation_select', 'weight', 'answer', 'answer_cp');
            // });

            jQuery(document).on('change', '#simulation_select2', function() {
                multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
            });

            jQuery(document).on('change', '#weight2', function() {
                multi('simulation_select2', 'weight2', 'answer2', 'answer_cp2');
            });

            jQuery(function() {
                jQuery(document).on('mouseup keyup', '#weight, #weight2', function(e) {
                    var month = parseInt(jQuery(this).val());
                    var monthMax = parseInt(jQuery(this).attr('max'));
                    var monthMin = parseInt(jQuery(this).attr('min'));
                    if (month > monthMax) {
                        jQuery(this).val(monthMax);
                    }
                    if (month < monthMin) {
                        jQuery(this).val(monthMin);
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const items = document.querySelectorAll('.latest_results_item');
            const loadMoreButton = document.querySelector('.js__more--btn10');
            let itemsToShow = 8;

            // 初期状態で8個表示
            function showItems() {
                items.forEach((item, index) => {
                    if (index < itemsToShow) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            // 最新結果が8個以下の場合、ボタンを非表示にする
            if (items.length <= 8) {
                loadMoreButton.style.display = 'none';
            } else {
                // ボタンクリック時にさらに8個表示
                loadMoreButton.addEventListener('click', function() {
                    itemsToShow += 8;
                    showItems();

                    // すべて表示された場合、ボタンを非表示に
                    if (itemsToShow >= items.length) {
                        loadMoreButton.style.display = 'none';
                    }
                });
            }

            // 初期表示を呼び出す
            showItems();
        });
        // latest_results_item のクラスを持つ要素の数を取得
        var itemCount = $('.latest_results_item').length;

        console.log(itemCount);

        // 要素の数が10個未満の場合に実行する処理
        if (itemCount < 11) {
            // ここに処理を記述
            console.log('latest_results_item のクラスが10個未満です');

            // 例えば、特定の要素にメッセージを追加する場合
            $('#message').text('There are less than 10 items.');
        }

        // HK$矢印アコーディオン
        const circle_btnSlideDown = function(el) {
            el.style.height = 'auto';
            let h = el.offsetHeight;
            el.style.height = '0px';
            el.offsetHeight;
            if (window.innerWidth <= 767) {
                el.style.transition = 'height 0.3s';
            } else {
                el.style.transition = 'height 0.0s';
            }

            el.style.height = h + 'px';
            el.setAttribute('aria-hidden', 'false');
        };

        circle_btnSlideUp = function(el) {
            let h = el.offsetHeight;
            el.style.height = h + 'px';
            el.offsetHeight;
            if (window.innerWidth <= 767) {
                el.style.transition = 'height 0.3s';
            } else {
                el.style.transition = 'height 0.0s';
            }

            el.style.height = '0px';
            el.setAttribute('aria-hidden', 'true');
        };

        const circle_btnAccordions = document.querySelectorAll('.circle_btn_accordion_include');
        circle_btnAccordions.forEach(function(accordion) {
            const circleAccordionBtns = accordion.querySelectorAll('.circle_btn_accordion');
            circleAccordionBtns.forEach(function(circle_AccordionBtn, index) {
                circle_AccordionBtn.addEventListener('click', function(e) {
                    const circle_btn_content = e.currentTarget.nextElementSibling;
                    const circle_btn_isActive = e.currentTarget.parentNode.classList.contains('active');

                    // SPのみ
                    if (window.innerWidth < 767) {
                        if (circle_btn_isActive) {
                            e.currentTarget.parentNode.classList.remove('active');
                            e.currentTarget.setAttribute('circle_btn_accordion_expanded', 'false');
                            circle_btnSlideUp(circle_btn_content);
                            return;
                        }
                    }

                    // クリックされたアコーディオンが閉じていた場合のみ開く
                    if (!circle_btn_isActive) {
                        e.currentTarget.parentNode.classList.add('active');
                        e.currentTarget.setAttribute('circle_btn_accordion_expanded', 'true');
                        circle_btnSlideDown(circle_btn_content);
                        console.log("test");
                    }

                    // スクロール制御のために上位階層のクラス名を変える
                    let container = accordion.closest('.circle_btn_accordion_control');
                    if (container !== null) {
                        if (e.currentTarget.parentNode.classList.contains('active')) {
                            container.classList.add('active');
                        } else {
                            container.classList.remove('active');
                        }
                    }
                });
            });
        });

        // HK$矢印アコーディオン
        document.addEventListener("DOMContentLoaded", function() {
            const listItems = document.querySelectorAll('.transformation_description_content_ttl');
            const isMobile = window.matchMedia("(max-width: 768px)").matches;

            listItems.forEach((item, index) => {
                let number = index + 1;

                if (isMobile && number < 10) {
                    number = "0" + number;
                }

                item.style.position = "relative";
                const span = document.createElement('span');
                span.style.position = "absolute";
                span.style.left = "-1em";
                span.textContent = number;
                item.prepend(span);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search_brand');
            const searchButton = document.getElementById('search_button');
            const activeTitle = document.getElementById('active_title');
            const brandItems = document.querySelectorAll('.list_katakana_brand_item_wrap');
            const noResults = document.querySelectorAll('.list_katakana_brand_none');

            // ひらがなをカタカナに変換する関数
            function hiraganaToKatakana(str) {
                return str.replace(/[\u3041-\u3096]/g, function(match) {
                    return String.fromCharCode(match.charCodeAt(0) + 0x60);
                });
            }

            function performSearch() {
                let searchQuery = searchInput.value.trim().toLowerCase(); // 検索キーワードを小文字に変換

                // 検索が空白の場合は全て非表示にし、何も表示しない
                if (searchQuery === "") {
                    brandItems.forEach(item => item.style.display = 'none');
                    noResults.forEach(el => el.style.display = 'none');
                    activeTitle.textContent = '検索結果：';
                    return;
                }

                searchQuery = hiraganaToKatakana(searchQuery); // ひらがなをカタカナに変換

                // 検索結果に基づいてフィルタring
                let hasResults = false;
                brandItems.forEach(item => {
                    const brandKana = hiraganaToKatakana(item.querySelector('.list_katakana_brand_kana').textContent); // カタカナ名を取得してひらがなからカタカナに変換

                    if (brandKana.includes(searchQuery)) {
                        item.style.display = 'block'; // 該当する場合表示
                        hasResults = true;
                    } else {
                        item.style.display = 'none'; // 該当しない場合非表示
                    }
                });

                // 検索結果がない場合の表示処理
                if (hasResults) {
                    noResults.forEach(el => el.style.display = 'none');
                } else {
                    noResults.forEach(el => el.style.display = 'block');
                }

                // 検索キーワードをタイトルに反映
                activeTitle.textContent = searchQuery ? `検索結果：${searchInput.value}` : '検索結果';
            }

            // 検索ボタンクリックイベント
            searchButton.addEventListener('click', performSearch);

            // Enterキーで検索をトリガー
            searchInput.addEventListener('keydown', function(event) {
                if (event.key === 'Enter') {
                    event.preventDefault();
                    performSearch();
                }
            });
        });
        $(function() {
            // カタカナ行の定義
            const kanaGroups = {
                "ア": ["ア", "イ", "ウ", "エ", "オ"],
                "カ": ["カ", "キ", "ク", "ケ", "コ", "ガ", "ギ", "グ", "ゲ", "ゴ"],
                "サ": ["サ", "シ", "ス", "セ", "ソ", "サ", "ジ", "ズ", "ゼ", "ゾ"],
                "タ": ["タ", "チ", "ツ", "テ", "ト", "ダ", "ヂ", "ヅ", "デ", "ド"],
                "ナ": ["ナ", "ニ", "ヌ", "ネ", "ノ"],
                "ハ": ["ハ", "ヒ", "フ", "ヘ", "ホ", "バ", "ビ", "ブ", "ベ", "ボ"],
                "マ": ["マ", "ミ", "ム", "メ", "モ"],
                "ヤ": ["ヤ", "ユ", "ヨ"],
                "ラ": ["ラ", "リ", "ル", "レ", "ロ"],
                "ワ": ["ワ", "ヲ", "ン"]
            };

            // 初期表示でア行を表示
            showBrandsByGroup("ア");

            // タブクリックイベント
            $("#brand_tabs .list_katakana_brand_tabbox").click(function() {
                const group = $(this).data("group");

                // タブの選択状態を更新
                $("#brand_tabs .list_katakana_brand_tabbox").removeClass("wd_active");
                $(this).addClass("wd_active");

                // タイトルの更新
                // $("#active_title").text(`${group}行`);
                $("#active_title").text(``);

                // 選択されたグループのブランドを表示
                showBrandsByGroup(group);
            });

            // グループに基づいてブランドを表示
            function showBrandsByGroup(group) {
                // 全てのブランドアイテムを非表示
                $(".list_katakana_brand_item_wrap").hide();

                // 該当するグループの文字リストを取得
                const validChars = kanaGroups[group] || [];

                // 有効な文字で始まるブランドを表示
                $(".list_katakana_brand_item_wrap").each(function() {
                    const brandGroup = $(this).data("group");
                    if (validChars.includes(brandGroup)) {
                        $(this).show(); // 一致するブランドを表示
                    }
                });

                // ブランドがない場合の表示処理
                if ($(".list_katakana_brand_item_wrap:visible").length === 0) {
                    $(".list_katakana_brand_none").show(); // ブランドがない場合のメッセージ
                } else {
                    $(".list_katakana_brand_none").hide(); // ブランドがある場合
                }
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            const headers = document.querySelectorAll('.accordion-header');

            headers.forEach(header => {
                header.addEventListener('click', function() {
                    const content = this.nextElementSibling;
                    const icon = this.querySelector('.accordion-icon');

                    if (content.classList.contains('open')) {
                        // 閉じる
                        content.style.maxHeight = null;
                        content.classList.remove('open');
                        icon.textContent = '＋'; // アイコンを「+」に
                    } else {
                        // 開く
                        content.style.maxHeight = content.scrollHeight + 'px';
                        content.classList.add('open');
                        icon.textContent = '－'; // アイコンを「-」に
                    }
                });
            });
        });


        $(function() {

            window.onload = function() {
                $('.modal-container').css('display', 'block');
            };



            var open = $('.modal-open'),
                close = $('.modal-close'),
                container = $('.modal-container');

            open.on('click', function() {
                container.addClass('active');
                return false;
            });
            close.on('click', function() {
                container.removeClass('active');
            });

            $(document).on('click', function(e) {
                if (!$(e.target).closest('.modal-body').length) {
                    container.removeClass('active');
                }
            });
        });


        $('.cm1').on("click", function() {
            $("#player3").removeClass('active');
            $("#player2").addClass('active');
            $(".player3_wrap").removeClass('active');
            $(".player2_wrap").addClass('active');
            $(".video_play2").addClass('play_active');
            $(".video_play3").removeClass('play_active');
            $('#player3').get(0).pause();
        })
        $('.cm2').on("click", function() {
            $("#player2").removeClass('active');
            $(".player3_wrap").addClass('active');
            $(".player2_wrap").removeClass('active');
            $("#player3").addClass('active');
            $(".video_play3").addClass('play_active');
            $(".video_play2").removeClass('play_active');
            $('#player2').get(0).pause();
        })

        $(function() {

            $('.modal-container').on('click', function() {
                setTimeout(function() {
                    if ($('.modal-container').hasClass('active')) {

                    } else {
                        $('#player2').get(0).pause();
                        $('#player3').get(0).pause();
                    }
                }, 100);
            });


            $('.video_play2').on('click', function() {
                if ($(this).hasClass('playActive')) {
                    $('#player2').get(0).pause();
                } else {
                    $('#player2').get(0).play();
                }
            });

            $('.video_play3').on('click', function() {
                if ($(this).hasClass('playActive')) {
                    $('#player3').get(0).pause();
                } else {
                    $('#player3').get(0).play();
                }
            });



            $('#player2').on('playing', function() {
                $('.video_play').addClass('playActive');
            });

            $("#player2").on('pause', function() {
                $('.video_play').removeClass('playActive');
            });

            $('#player3').on('playing', function() {
                $('.video_play').addClass('playActive');
            });

            $("#player3").on('pause', function() {
                $('.video_play').removeClass('playActive');
            });

        });

        document.addEventListener("DOMContentLoaded", function() {
            var lazyVideos = [].slice.call(document.querySelectorAll("video.lazy"));

            if ("IntersectionObserver" in window) {
                var lazyVideoObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(video) {
                        if (video.isIntersecting) {
                            for (var source in video.target.children) {
                                var videoSource = video.target.children[source];
                                if (typeof videoSource.tagName === "string" && videoSource.tagName === "SOURCE") {
                                    videoSource.src = videoSource.dataset.src;
                                }
                            }

                            video.target.load();
                            video.target.classList.remove("lazy");
                            lazyVideoObserver.unobserve(video.target);
                        }
                    });
                });

                lazyVideos.forEach(function(lazyVideo) {
                    lazyVideoObserver.observe(lazyVideo);
                });
            }
        });


        document.addEventListener("DOMContentLoaded", function() {

            function addNumberingToItemsInSection(parentSelector, childSelector, position = "relative", offset = 0, positionLeft = "0", text = "", spanClass = "numbering") {
                const parentElements = document.querySelectorAll(parentSelector);

                parentElements.forEach(parent => {
                    const listItems = parent.querySelectorAll(childSelector);

                    listItems.forEach((item, index) => {
                        let number = index + 1 + offset;

                        if (number < 10) {
                            number = "0" + number;
                        }

                        item.style.position = "relative";
                        const span = document.createElement('span');
                        span.style.position = position;
                        span.style.left = positionLeft;
                        span.textContent = number + text;

                        if (spanClass) {
                            span.classList.add(spanClass);
                        }

                        item.prepend(span);
                    });
                });
            }

            addNumberingToItemsInSection('.cta_section', '.cta_section_content_ttl', undefined, 0, undefined, '.');
            addNumberingToItemsInSection('.reason_section', '.reason_area_img_wrap', "absolute", 0, undefined, undefined, 'reason_numbering');

        });
    </script>
</body>

</html>