<?php
/* Template Name: 金トップページ */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php get_template_part('head2'); ?>
    <!-- local css -->
    <link rel="stylesheet" type="text/css" href="../css/app.min.css">
    <link rel="stylesheet" type="text/css" href="../css/gold.min.css">
    <link rel="stylesheet" type="text/css" href="../css/result_child.min.css">
    <link rel="stylesheet" type="text/css" href="../css/gold_souba_10years.min.css">
    <link rel="stylesheet" href="../css/renew202404.css">
    <link rel="stylesheet" type="text/css" href="../css/shared.css">
    <link rel="stylesheet" type="text/css" href="../css/gold.css">
    <script src="../js/jquery-3.6.3.min.js"></script>
    <title>金・貴金属の高価買取 | 金・貴金属買取専門店のおたからや</title>

    <style>
        .flex__content .content__item {
            margin-bottom: 2em;
        }

        .flex__content .content__item .content--name {
            margin-top: 0.5em;
        }
    </style>

</head>

<?php wp_head(); ?>

<body id="gold">
    <?php get_header('common'); ?>
    <div id="topic__path" class="topic__path">
        <ol class="topic__path--list">
            <li class="topic__path--item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="../">
                    <span itemprop="name">Toko Spesialisasi Pembelian. Otakaraya TOP</span>
                </a>
                <meta itemprop="position" content="1">
            </li>
            <li class="topic__path--item"><span>Pembelian Emas</span></li>
        </ol>
    </div>

    <div class="fv_img_wrap">
        <img class="is-pc" src="../images/gold/gold_TOP_PC.webp" alt="">
        <img class="is-sp" src="../images/gold/gold_TOP_SP.webp" alt="">
        <?php include __DIR__ . '/template-parts/fv_obi.php'; ?>
    </div>


    <?php get_template_part('template-parts/license'); ?>
    <?php get_template_part('template-parts/shop-info'); ?>

    <div class="renew_2024_fv_salespoint is-sp">
        <!--     ▼▼▼ top_h2_text▼▼▼     -->
        <h2 class="titleHeading top_h2_text">
            Kunjungi toko spesialisasi pembelian Otakaraya untuk menjual dan menilai emas Anda
        </h2>
        <!--     ▲▲▲ top_h2_text▲▲▲     -->
    </div>
    <!-- フッター固定ボタン -->
    <div class="renew_2024_fv_lead is-sp">
        Kunjungi toko spesialisasi pembelian Otakaraya untuk menjual dan menilai emas Anda<br>
        Otakaraya memiliki lebih dari 1.300 toko di seluruh Jepang, dan di toko-toko ini, staf penilai profesional dan berpengalaman akan memberi Anda harga pembelian yang memuaskan Anda
    </div>
    <main class="contents">
        <article class="contents__left">
            <!--     ▼▼▼おたからやセールスポイント▼▼▼     -->
            <section>
                <!--     ▼▼▼ top_h2_text▼▼▼     -->
                <div class="is-pc">
                    <h2 class="titleHeading top_h2_text">
                    Kunjungi toko spesialisasi pembelian Otakaraya untuk menjual dan menilai emas Anda
                    </h2>
                </div>
                <!--     ▲▲▲ top_h2_text▲▲▲     -->

                <div class="titleMain--lead is-pc">
                    <p style="text-align: center; margin: 1rem;">
                    Kunjungi toko spesialisasi pembelian Otakaraya untuk menjual dan menilai emas Anda<br>
                    Otakaraya memiliki lebih dari 1.300 toko di seluruh Jepang, dan di toko-toko ini, staf penilai profesional dan berpengalaman akan memberi Anda harga pembelian yang memuaskan Anda
                    </p>
                </div>
            </section>
            <!--     ▲▲▲おたからやがセールスポイント▲▲▲     -->
            <p></p>
            <!-- バナー付CTA -->
            <section class="simple_cta_top">
                <?php get_template_part('template-parts/assessment_cta'); ?>
                <!-- ビデオ通話査定CTA -->
            </section>

            <?php get_template_part('template-parts/purchase_market_reference'); ?>
            <?php get_template_part('template-parts/calculation_tool'); ?>
            <section></section>
            <?php /* get_template_part('template-parts/purchase_market_graph'); */ ?>
            <section class="rateSection">
                <div class="is-sp">
                    <h3 class="renew_202404_calctool_title">
                        Grafik tren harga pembelian Emas
                        <img class="renew_2024_market_update_title graph_title_image" src="../images/gold/graph_title_image.png">
                    </h3>
                    <div class="renew_202404_graph_title_lead">
                        Kami menyediakan grafik yang menunjukkan harga emas (per gram) selama periode waktu yang berbeda.<br>
                        Selain harga hari ini, Anda juga bisa merujuk pada pergerakan selama 6 bulan atau 1 tahun terakhir.
                    </div>
                </div>
                <div class="shop__detail--rateGraph">
                    <h3 class="titleSub is-pc">Grafik tren harga pembelian Emas</h3>
                    <p class="is-pc">
                        Kami menyediakan grafik yang menunjukkan harga emas (per gram) selama periode waktu yang berbeda.<br>
                        Selain harga hari ini, Anda juga bisa merujuk pada pergerakan selama 6 bulan atau 1 tahun terakhir.
                    </p>
                    <div class="rateGraph__wrap">
                        <div class="rateGraph__inner--select form__wrap">
                            <div class="price-chart-header form__liner">
                                <select id="graph-select" class="form-control my-5">
                                    <option value="">select type</option>
                                    <optgroup label="gold">
                                        <option value="k24_ingot" selected="selected">Ingots (gold)</option>
                                        <option value="k24">K24</option>
                                        <option value="k23">K23</option>
                                        <option value="k22">K22</option>
                                        <option value="k21.6">K21.6</option>
                                        <option value="k20">K20</option>
                                        <option value="k18">K18</option>
                                        <option value="k14">K14</option>
                                        <option value="k12">K12</option>
                                        <option value="k10">K10</option>
                                        <option value="k9">K9</option>
                                        <option value="k8">K8</option>
                                        <option value="k5">K5</option>
                                    </optgroup>
                                    <optgroup label="platinum">
                                        <option value="pt_ingot">Ingots（platinum）</option>
                                        <option value="pt1000">Pt1000</option>
                                        <option value="pt950">Pt950</option>
                                        <option value="pt900">Pt900</option>
                                        <option value="pt850">Pt850</option>
                                        <option value="pt650">Pt650</option>
                                        <option value="pt500">Pt500</option>
                                        <option value="pt100">Pt100</option>
                                    </optgroup>
                                    <optgroup label="silver">
                                        <option value="sv_ingot">Ingots（silver）</option>
                                        <option value="sv1000">Sv1000</option>
                                        <option value="sv925">Sv925</option>
                                    </optgroup>
                                    <optgroup label="palladium">
                                        <option value="pd_ingot">Ingots（palladium）</option>
                                    </optgroup>
                                </select>
                            </div>
                            <p id="price-chart-legend" class="chart-legend">Ingots (gold) (S$/g)</p>
                        </div>
                        <div class="flex flex--hasItem6">
                            <ul class="flex__tab">
                                <li class="tab__item active"><a>1 month</a></li>
                                <li class="tab__item "><a>3 months</a></li>
                                <li class="tab__item "><a>6 months</a></li>
                                <li class="tab__item "><a>1 year</a></li>
                                <li class="tab__item "><a>3 years</a></li>
                                <li class="tab__item "><a>10 years</a></li>
                                <li class="tab__item "><a>20 years</a></li>
                                <li class="tab__item "><a>30 years</a></li>
                                <li class="tab__item "><a>entire duration</a></li>
                            </ul>
                            <div class="flex__tabContents no_slider">
                                <div class="flex__content active">
                                    <div class="">
                                        <canvas id="myChart1" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart2" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart3" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart4" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart5" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart6" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart7" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart8" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                                <div class="flex__content ">
                                    <div class="">
                                        <canvas id="myChart9" class="price-chart-canvas"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script defer="" src="../js/Chart.min.js"></script>
                        <script defer="" src="../js/moment.min.js"></script>
                        <script>
                            let inittype = 'k24_ingot';
                            var purity = "k24_ingot";
                            var _pagetmpl = 'page-top.php';
                        </script>


                        <?php

                        // REST APIエンドポイントのURL
                        $api_url = 'https://www.otakaraya.jp/gold/wp-json/wp/v2/pages/21255/';

                        // APIリクエストを実行
                        $response = wp_remote_get($api_url);

                        // エラーチェック
                        if (is_wp_error($response)) {
                            $error_message = $response->get_error_message();
                            echo "Something went wrong: $error_message";
                            return;
                        }

                        $body = wp_remote_retrieve_body($response);

                        $data = json_decode($body, true);

                        ?>

                        <?php
                        $price_gold_yd =  (int)$data['acf']['price_gold_yd'];
                        $price_pt_yd =  (int)$data['acf']['price_pt_yd'];
                        $price_pd_yd =  (int)$data['acf']['price_pd_yd'];
                        $price_sv_yd =  (int)$data['acf']['price_sv_yd'];
                        $price_gold =  (int)$data['acf']['price_gold'];
                        $price_pt =  (int)$data['acf']['price_pt'];
                        $price_pd =  (int)$data['acf']['price_pd'];
                        $price_sv =  (int)$data['acf']['price_sv'];
                        $price_update =  $data['acf']['price_update'];
                        $price_update = DateTime::createFromFormat('Ymd', $price_update);
                        $price_update = $price_update->format('Y年n月j日');

                        // APIのURL
                        $rate_api_url = "https://api.exchangerate-api.com/v4/latest/JPY";

                        // APIから為替レートを取得
                        $rate_response = file_get_contents($rate_api_url);
                        $rate_data = json_decode($rate_response, true);

                        // JPYからHKDのレートを取得
                        $exchange_rate_src = $rate_data['rates']['SGD'];
                        $exchange_rate = $exchange_rate_src * 0.919;
                        $pt_exchange_rate = $exchange_rate_src * 0.976;
                        $gold_commission = 40 * $exchange_rate_src;
                        $pt1000_commission = 70 * $exchange_rate_src;
                        $pt_commission = 80 * $exchange_rate_src;
                        $sv_commission = 5 * $exchange_rate_src;

                        // 各価格を香港ドルに変換
                        $price_gold = (int)($price_gold * $exchange_rate);
                        $price_pt = (int)($price_pt * $pt_exchange_rate);
                        $price_pd = (int)($price_pd * $exchange_rate_src);
                        $price_sv = (int)($price_sv * $exchange_rate_src);
                        ?>
                        <!-- <script defer="" src="../js/loadgraph_v4.js"> -->
                        <script>
                            (function($) {
                                var canvases = document.getElementsByClassName('price-chart-canvas');
                                var the_canvas = canvases[canvases.length - 1];
                                var goldChart = myChart1 = myChart2 = myChart3 = myChart4 = myChart5 = myChart6 = myChart7 = myChart8 = myChart9 = null;

                                $(function() {
                                    const calendarDraw2 = (c) => { // 過去の年度別の金買取相場(/souba/10years/)
                                        let _targetjson = "";
                                        switch (c) {
                                            case "k24_ingot":
                                                _targetjson = jsonret.data.k24_ingot.prices;
                                                break;
                                            case "pt_ingot":
                                                _targetjson = jsonret.data.pt_ingot.prices;
                                                break;
                                            case "sv_ingot":
                                                _targetjson = jsonret.data.sv_ingot.prices;
                                                break;
                                            case "pd_ingot":
                                                _targetjson = jsonret.data.pd_ingot.prices;
                                                break;
                                        }

                                        let yearArray = [];
                                        let _y = moment().format("YYYY");

                                        for (let i = 0; i < 11; i++) {
                                            let _checkYear = _y - i;
                                            let _tmp = [];
                                            $.each(_targetjson, function(index, value) {
                                                let _pDate = moment(value.date);
                                                let _pPrice = value.price;
                                                if (moment(_pDate).isSame(_checkYear + "-01-01", "year")) {
                                                    _tmp.push(_pPrice);
                                                }
                                            });
                                            yearArray[_y - i] = _tmp;
                                        }

                                        let _table = "";
                                        for (let i = 0; i < 11; i++) {
                                            let _max = Math.max.apply(null, yearArray[_y - i]);
                                            let _min = Math.min.apply(null, yearArray[_y - i]);
                                            let sum = 0;

                                            yearArray[_y - i].forEach(function(v) {
                                                sum += Number(v);
                                            });
                                            let _average = sum / yearArray[_y - i].length;
                                            _table += '<tr>';
                                            _table += '<th><span>' + (_y - i) + '<span>年</span></span></th>';
                                            _table += '<td><span>' + Number(_max).toLocaleString() + '<span>S$</span></span></td>';
                                            _table += '<td><span>' + Number(_min).toLocaleString() + '<span>S$</span></span></td>';
                                            _table += '<td><span>' + Number(Math.round(_average)).toLocaleString() + '<span>S$</span></span></td>';
                                            _table += '</tr>';
                                        }
                                        $("#yearpriceload").html(_table);
                                    }
                                    const drawChart = (pricesData, metal_type, exchange_rate_src) => {
                                        var maxTicksLimitNum = 10;
                                        if ($(".rateGraph__inner--graph").width() < 640) {
                                            maxTicksLimitNum = 10;
                                        }
                                        var timestamp = (new Date()).getTime();
                                        var id = metal_type + timestamp;
                                        $('#price-chart-last-update').text(moment(pricesData.header.last_modified.date).format("Y年M月D日 9:30") + '更新');
                                        var limit = 10800;
                                        var labels = [],
                                            labels2 = [],
                                            labels3 = [],
                                            labels4 = [],
                                            labels5 = [],
                                            labels6 = [],
                                            labels7 = [],
                                            labels8 = [],
                                            labels9 = [];
                                        var prices = [],
                                            prices2 = [],
                                            prices3 = [],
                                            prices4 = [],
                                            prices5 = [],
                                            prices6 = [],
                                            prices7 = [],
                                            prices8 = [],
                                            prices9 = [];
                                        var metal = pricesData.data[metal_type];

                                        if (metal_type.match("k")) {
                                            var bace_metal = pricesData.data['k24_ingot'];

                                        }
                                        if (metal_type.match("pt")) {
                                            var bace_metal = pricesData.data['pt_ingot'];
                                        }
                                        if (metal_type.match("sv")) {
                                            var bace_metal = pricesData.data['sv_ingot'];
                                        }
                                        if (metal_type.match("pd")) {
                                            var bace_metal = pricesData.data['pd_ingot'];
                                        }
                                        if (metal_type.match("k")) {
                                            var text = metal_type.replace('k', 'K');
                                        }
                                        if (metal_type.match("pt")) {
                                            var text = metal_type.replace('pt', 'Pt');
                                        }
                                        if (metal_type.match("sv")) {
                                            var text = metal_type.replace('sv', 'Sv');
                                        }
                                        if (metal_type.match("sv")) {
                                            var text = metal_type.replace('sv', 'Sv');
                                        }
                                        if (metal_type.match("pt_ingot")) {
                                            var text = "Ingots（platinum）";
                                        }
                                        if (metal_type.match("k24_ingot")) {
                                            var text = "Ingots（gold）";
                                        }
                                        if (metal_type.match("sv_ingot")) {
                                            var text = "Ingots （silver）";
                                        }
                                        if (metal_type.match("pd_ingot")) {
                                            var text = "Ingots（palladium）";
                                        }

                                        $('#price-chart-legend').text(text + " (S$/g)");
                                        $(the_canvas).siblings('.price-chart-header .todays-price-subtitle').text(text + " 買取価格相場 推移グラフ");

                                        function ChartDatePrice() {
                                            exchange_rate = exchange_rate_src * 0.919;
                                            pt_exchange_rate = exchange_rate_src * 0.976;
                                            gold_commission = 40 * exchange_rate_src;
                                            pt1000_commission = 70 * exchange_rate_src;
                                            pt_commission = 80 * exchange_rate_src;
                                            sv_commission = 5 * exchange_rate_src;
                                            bace_price = bace_metal[i].price;
                                            bace_price = Number(bace_price);
                                            var bace_metal_pd_ingot = pricesData.data.pd_ingot.prices[i].price;
                                            var plus_pt950 = bace_metal_pd_ingot * 0.02;
                                            var plus_pt900 = bace_metal_pd_ingot * 0.05;
                                            var plus_pt850 = bace_metal_pd_ingot * 0.08;
                                            if (metal_type == "k24_ingot") {
                                                bace_price = Math.round((bace_price * exchange_rate) * 100) / 100;
                                            }
                                            if (metal_type == "k24") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.99 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k23") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.94 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k22") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.91 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k21.6") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.89 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k20") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.82 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k18") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.75) * 100) / 100;
                                            }
                                            if (metal_type == "k17") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.66 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k14") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.57 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k12") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.48 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k10") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.40 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k9") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.36 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k8") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.30 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k7") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.25 - gold_commission) * 100) / 100;
                                            }
                                            if (metal_type == "k5") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.15 - gold_commission) * 100) / 100;
                                            }

                                            if (metal_type == "pt_ingot") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate) * 100) / 100;
                                            }
                                            if (metal_type == "pt1000") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.999 - pt1000_commission) * 100) / 100;
                                            }
                                            if (metal_type == "pt950") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.94 - pt_commission + plus_pt950) * 100) / 100;
                                            }
                                            if (metal_type == "pt900") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.895 - pt_commission + plus_pt900) * 100) / 100;
                                            }
                                            if (metal_type == "pt850") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.84 - pt_commission + plus_pt850) * 100) / 100;
                                            }
                                            if (metal_type == "pt650") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.64 - pt_commission) * 100) / 100;
                                            }
                                            if (metal_type == "pt500") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.49 - pt_commission) * 100) / 100;
                                            }
                                            if (metal_type == "pt100") {
                                                bace_price = Math.round((bace_price * pt_exchange_rate * 0.08 - pt_commission) * 100) / 100;
                                            }

                                            if (metal_type == "sv_ingot") {
                                                bace_price = Math.round((bace_price * exchange_rate) * 100) / 100;
                                            }
                                            if (metal_type == "sv1000") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.99 - sv_commission) * 100) / 100;
                                            }
                                            if (metal_type == "sv925") {
                                                bace_price = Math.round((bace_price * exchange_rate * 0.91 - sv_commission) * 100) / 100;
                                            }
                                            if (metal_type == "pd_ingot") {
                                                bace_price = Math.round((bace_price * exchange_rate_src) * 100) / 100;
                                            }
                                        }
                                        prices_bace = bace_metal.prices;
                                        prices_concat = prices_bace.concat();

                                        for (i_date = 1; i_date < 10; i_date++) {

                                            if (i_date == 1) { // 1ヶ月
                                                bace_metal = prices_concat.slice(0, 22); // 30
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels.push(moment(bace_metal[i].date).format("M/D"));

                                                    ChartDatePrice()

                                                    prices.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 2) { // 3ヶ月
                                                bace_metal = prices_concat.slice(0, 62); // 90
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels2.push(moment(bace_metal[i].date).format("M/D"));

                                                    ChartDatePrice()

                                                    prices2.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 3) { // 6ヶ月
                                                bace_metal = prices_concat.slice(0, 125); // 180
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels3.push(moment(bace_metal[i].date).format("M/D"));

                                                    ChartDatePrice()

                                                    prices3.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 4) { // 1年
                                                bace_metal = prices_concat.slice(0, 241); // 360
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels4.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices4.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 5) { // 3年
                                                bace_metal = prices_concat.slice(0, 712); // 1080
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels5.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices5.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 6) { // 10年
                                                bace_metal = prices_concat.slice(0, 2650); // 3600
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    // i = i + 5 ;

                                                    if (!bace_metal[i])
                                                        continue;

                                                    var _fmt = (_pagetmpl == 'page-souba_10years.php') ? 'YYYY/M' : 'YYYY'; // 10年相場ページは日付フォーマットが異なる
                                                    labels6.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices6.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }

                                            if (i_date == 7) { // 20年
                                                bace_metal = prices_concat.slice(0, 5100); // 7200
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    // 5件ごとスキップ
                                                    // i = i + 5 ;
                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels7.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices7.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 8) { // 30年
                                                bace_metal = prices_concat.slice(0, 7400); // 10800
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    // 5件ごとスキップ
                                                    // i = i + 5 ;

                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels8.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices8.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }
                                            if (i_date == 9) { // 全期間
                                                bace_metal = prices_concat;
                                                for (i = 0; i < bace_metal.length; i++) {
                                                    // 5件ごとスキップ
                                                    // i = i + 5 ;

                                                    if (!bace_metal[i])
                                                        continue;
                                                    labels9.push(moment(bace_metal[i].date).format("YYYY/M/D"));

                                                    ChartDatePrice()

                                                    prices9.push(bace_price);
                                                    if (i === limit) {
                                                        break;
                                                    }
                                                };
                                            }

                                        };

                                        labels6 = labels6.filter((_, index) => index % 10 === 0);
                                        prices6 = prices6.filter((_, index) => index % 10 === 0);
                                        labels7 = labels7.filter((_, index) => index % 20 === 0);
                                        prices7 = prices7.filter((_, index) => index % 20 === 0);
                                        labels8 = labels8.filter((_, index) => index % 30 === 0);
                                        prices8 = prices8.filter((_, index) => index % 30 === 0);
                                        labels9 = labels9.filter((_, index) => index % 40 === 0);
                                        prices9 = prices9.filter((_, index) => index % 40 === 0);
                                        only_once = 1;
                                        if (only_once == 1) {
                                            labels = labels.reverse();
                                            prices = prices.reverse();
                                            labels2 = labels2.reverse();
                                            prices2 = prices2.reverse();
                                            labels3 = labels3.reverse();
                                            prices3 = prices3.reverse();
                                            labels4 = labels4.reverse();
                                            prices4 = prices4.reverse();
                                            labels5 = labels5.reverse();
                                            prices5 = prices5.reverse();

                                            labels6 = labels6.reverse();
                                            prices6 = prices6.reverse();
                                            labels7 = labels7.reverse();
                                            prices7 = prices7.reverse();
                                            labels8 = labels8.reverse();
                                            prices8 = prices8.reverse();
                                            labels9 = labels9.reverse();
                                            prices9 = prices9.reverse();
                                            only_once == 0;
                                        }
                                        var maxPrice = Math.max.apply(null, prices);
                                        var minPrice = Math.min.apply(null, prices);
                                        var diff = maxPrice * 0.01; // 1%の差分を取得
                                        var suggestedMax = Math.round(maxPrice + diff); // maxPriceに1%の差分を追加して四捨五入
                                        var ctx = document.getElementById(id);
                                        if (goldChart != null) {
                                            goldChart.destroy()
                                        };
                                        if (myChart1 != null) {
                                            myChart1.destroy();
                                        }
                                        if (myChart2 != null) {
                                            myChart2.destroy();
                                        }
                                        if (myChart3 != null) {
                                            myChart3.destroy();
                                        }
                                        if (myChart4 != null) {
                                            myChart4.destroy();
                                        }
                                        if (myChart5 != null) {
                                            myChart5.destroy();
                                        }
                                        if (myChart6 != null) {
                                            myChart6.destroy();
                                        }
                                        if (myChart7 != null) {
                                            myChart7.destroy();
                                        }
                                        if (myChart8 != null) {
                                            myChart8.destroy();
                                        }
                                        if (myChart9 != null) {
                                            myChart9.destroy();
                                        }
                                        if ($("#simulation").width() < 640) {
                                            maxTicksLimitNum = 10;
                                        }

                                        myChart1 = new Chart("myChart1", { // 1ヶ月
                                            type: "line",
                                            data: {
                                                labels: labels,
                                                datasets: [{
                                                    label: "",
                                                    data: prices,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 3,
                                                    hitRadius: 3
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxTicksLimit: 7,
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: maxTicksLimitNum,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart2 = new Chart("myChart2", { // 3ヶ月
                                            type: "line",
                                            data: {
                                                labels: labels2,
                                                datasets: [{
                                                    label: "",
                                                    data: prices2,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 2,
                                                    hitRadius: 2
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            autoSkipPadding: 20,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333',
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart3 = new Chart("myChart3", { // 6ヶ月
                                            type: "line",
                                            data: {
                                                labels: labels3,
                                                datasets: [{
                                                    label: "",
                                                    data: prices3,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            autoSkipPadding: 20,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart4 = new Chart("myChart4", { // 1年
                                            type: "line",
                                            data: {
                                                labels: labels4,
                                                datasets: [{
                                                    label: "",
                                                    data: prices4,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            autoSkipPadding: 20,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart5 = new Chart("myChart5", { // 3年
                                            type: "line",
                                            data: {
                                                labels: labels5,
                                                datasets: [{
                                                    label: "",
                                                    data: prices5,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1,
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        yAlign: 'center',
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart6 = new Chart("myChart6", { // 10年
                                            type: "line",
                                            data: {
                                                labels: labels6,
                                                datasets: [{
                                                    label: "",
                                                    data: prices6,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {

                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },

                                                    }]
                                                }
                                            }
                                        });

                                        myChart7 = new Chart("myChart7", { // 20年
                                            type: "line",
                                            data: {
                                                labels: labels7,
                                                datasets: [{
                                                    label: "",
                                                    data: prices7,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart8 = new Chart("myChart8", { // 30年
                                            type: "line",
                                            data: {
                                                labels: labels8,
                                                datasets: [{
                                                    label: "",
                                                    data: prices8,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                        myChart9 = new Chart("myChart9", { // 全期間
                                            type: "line",
                                            data: {
                                                labels: labels9,
                                                datasets: [{
                                                    label: "",
                                                    data: prices9,
                                                    fill: false,
                                                    backgroundColor: "#98883a",
                                                    borderColor: "#98883a",
                                                    lineTension: 0.1,
                                                    borderWidth: 1,
                                                    radius: 1,
                                                    hitRadius: 1
                                                }],
                                            },
                                            options: {
                                                legend: {
                                                    display: false,
                                                },
                                                tooltips: {
                                                    callbacks: {
                                                        label: function(tooltipItem, data) {
                                                            var label = data.datasets[tooltipItem.datasetIndex].label || '';
                                                            label = tooltipItem.yLabel.toLocaleString();
                                                            return "S$" + label;
                                                        }
                                                    }
                                                },
                                                scales: {
                                                    xAxes: [{
                                                        gridLines: {
                                                            color: "#f0f0f0",
                                                        },
                                                        ticks: {
                                                            maxRotation: 45,
                                                            autoSkip: true,
                                                            maxTicksLimit: 7,
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }],
                                                    yAxes: [{
                                                        gridLines: {
                                                            color: "#f6f6f6",
                                                        },
                                                        ticks: {
                                                            // max: suggestedMax,
                                                            callback: function(label, index, labels) {
                                                                if (label == suggestedMax) {
                                                                    return '';
                                                                }
                                                                return "S$ " + label.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
                                                            },
                                                            fontSize: 12,
                                                            fontColor: '#333'
                                                        },
                                                    }]
                                                }
                                            }
                                        });
                                    }

                                    if (!!window.metalPricesData) {
                                        if ($("#simulation").width() < 640) {
                                            maxTicksLimitNum = 10;
                                        }
                                        drawChartSet(window.metalPricesData, inittype);

                                    } else {
                                        var time = moment().format('YYYYMMDDHHmm');
                                        $.ajax({
                                            method: 'get',
                                            url: '/rate_files_v2/crossdomain.php?url=https://www.otakaraya.jp/rate_files_v2/graph/graph-prices-full.json?time=' + time,
                                            contentType: 'application/json',
                                            dataType: 'json',
                                            success: function(ret) {
                                                window.metalPricesData = ret;
                                                drawChartSet(inittype);
                                                $('#graph-select').val(inittype);
                                                $('#graph-select').on('change', function() {
                                                    var type = $(this).val();
                                                    drawChartSet(type);
                                                });

                                                // 過去の年度別の金買取相場(/souba/10years/)
                                                setym = "2022-10";
                                                settype = "k24_ingot";
                                                jsonret = ret;
                                                window.metalPricesData = ret;
                                                calendarDraw2(settype);

                                            }
                                        });
                                    }

                                    const drawChartSet = (type) => {
                                        drawChart(window.metalPricesData, type, <?php echo $exchange_rate_src; ?>);
                                    }
                                });
                            })(jQuery);
                        </script>
                    </div>
                </div>
            </section>
            <!-- MOD_20240417 -->

            <?php get_template_part('template-parts/assessment_cta'); ?>
            <!-- ビデオ通話査定CTA -->

            <!-- MOD_20240417 -->

            <?php get_template_part('template-parts/gold_reference_purchase_prices'); ?>

            <div class="is-pc">
                <section class="brandinfo_section gold_top_brandinfo_section">
                    <div class="titleMain titleMain--wrapper" style="margin-bottom: 4rem;">
                        <h2 class="titleMain--main">
                            <span>Kenapa sekarang waktu yang tepat untuk menjual emas</span>
                        </h2>
                    </div>
                    <div class="fshoplist-target__list brand_about_repeat_parent_wrap is-pc">
                        <div class="fshoplist-target--ttl">
                            <h3 class="titleSub">Tiga poin penting saat menjual emas</h3>
                        </div>
                        <div class="fshoplist-target--item">
                            <div class="horizonlist horizonnumblist">
                                <div class="horizonlist--link">
                                    <div class="horizonlist--text">
                                        <h4 class="titleH4 title--left">Tren Harga Pembelian Emas</h4>
                                        <p>
                                            Harga emas berubah setiap hari. Harga per gramnya dapat mengalami fluktuasi hingga beberapa ratus yen dalam satu hari, dan semakin banyak emas yang Anda jual (semakin berat barangnya), semakin besar dampak fluktuasi harga tersebut.
                                        </p>
                                    </div>
                                </div>
                                <div class="horizonlist--link">
                                    <div class="horizonlist--text">
                                        <h4 class="titleH4 title--left">kemurnian emas</h4>
                                        <p>Emas ditandai dengan kemurnian (kandungannya), misalnya 24K, 22K, atau 18K. Semakin tinggi angka pada stempel, semakin langka dan semakin tinggi nilainya sebagai emas.
                                        </p>
                                    </div>
                                </div>
                                <div class="horizonlist--link">
                                    <div class="horizonlist--text">
                                        <h4 class="titleH4 title--left">berat emas</h4>
                                        <p>
                                            Referensi Harga Pembelian ditetapkan untuk setiap gram emas, sehingga nilai yang dinilai meningkat sebanding dengan beratnya. Dalam penilaian Otakaraya, kami mengukur beratnya hingga 0,1 gram terdekat dan menghitung nilai emas secara akurat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fshoplist-target__list brand_about_repeat_parent_wrap is-sp">
                        <div class="fshoplist-target--ttl">
                            <h3 class="titleSub">K24 買取の<br class="is-sp">
                                重要な３つのポイント</h3>
                        </div>
                        <div class="fshoplist-target--item">
                            <div class="horizonlist horizonnumblist">
                                <div class="horizonlist--link">
                                    <div class="sp_text_wrap">
                                        <h4 class="titleH4 title--left">Tren Harga Pembelian Emas</h4>
                                    </div>
                                    <div class="horizonlist--text">
                                        <p>
                                            Harga emas berubah setiap hari. Harga per gramnya dapat mengalami fluktuasi hingga beberapa ratus yen dalam satu hari, dan semakin banyak emas yang Anda jual (semakin berat barangnya), semakin besar dampak fluktuasi harga tersebut.
                                        </p>
                                    </div>
                                </div>
                                <div class="horizonlist--link">
                                    <div class="sp_text_wrap">
                                        <h4 class="titleH4 title--left">kemurnian emas</h4>
                                    </div>
                                    <div class="horizonlist--text">
                                        <p>Emas ditandai dengan kemurnian (kandungannya), misalnya 24K, 22K, atau 18K. Semakin tinggi angka pada stempel, semakin langka dan semakin tinggi nilainya sebagai emas.
                                        </p>
                                    </div>
                                </div>
                                <div class="horizonlist--link">
                                    <div class="sp_text_wrap">
                                        <h4 class="titleH4 title--left">berat emas</h4>
                                    </div>
                                    <div class="horizonlist--text">
                                        <p>
                                        Referensi Harga Pembelian ditetapkan untuk setiap gram emas, sehingga nilai yang dinilai meningkat sebanding dengan beratnya. Dalam penilaian Otakaraya, kami mengukur beratnya hingga 0,1 gram terdekat dan menghitung nilai emas secara akurat.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="brandinfo brandinfo_red_repeat">
                        <div class="brandinfo__main fshoplist-target__list">
                            <div class="brandinfo__header fshoplist-target--ttl">
                                <h3 class="brandinfo__header__title">
                                    Mengapa Otakaraya Bisa Menawarkan Pembelian Emas dengan Harga Tinggi
                                </h3>
                            </div>
                            <div class="fshoplist-target--item brandinfo__body no--image">
                                <div class="brandinfo__body__text brandinfo__body__text--top">
                                Sebagai toko khusus pembelian, Otakaraya tidak memiliki toko retail untuk menjual barang yang dibeli dari pelanggan.
                                Barang yang kami beli diperdagangkan tidak hanya di Jepang tetapi juga dengan perusahaan dan bisnis lain di 44 negara di seluruh dunia.<br />
                                    <br />
                                    Dengan menghilangkan biaya yang terkait dengan penjualan, kami dapat menawarkan pembelian dengan harga tinggi yang unik di Otakaraya.
                                </div>
                            </div>
                        </div>
                        <div class="brandinfo__main fshoplist-target__list">
                            <div class="brandinfo__header fshoplist-target--ttl">
                                <h3 class="brandinfo__header__title">Tren Harga Emas Selama 30 Tahun Terakhir</h3>
                            </div>
                            <div class="fshoplist-target--item brandinfo__body no--image">
                                <div class="brandinfo__body__text brandinfo__body__text--top">
                                30 tahun yang lalu, pada tahun 1990an, harga emas berada pada kisaran 1.000–1.500 yen per gram, yang merupakan nilai yang sangat rendah berdasarkan standar saat ini.
                                    <br />
                                    Namun karena kondisi sosial yang tidak stabil seperti runtuhnya Lehman Brothers dan krisis COVID-19, nilai emas sebagai "aset aman" meningkat dan harganya melonjak.
                                    <br />
                                    Pada tahun 2024, harga emas telah melampaui 10.000 yen per gram, mencapai titik tertinggi dalam sejarah.
                                </div>
                            </div>
                        </div>
                        <div class="brandinfo__main fshoplist-target__list">
                            <div class="brandinfo__header fshoplist-target--ttl">
                                <h3 class="brandinfo__header__title">Tips menjual emas dengan harga tinggi</h3>
                            </div>
                            <div class="fshoplist-target--item brandinfo__body no--image">
                                <div class="brandinfo__body__text brandinfo__body__text--top">
                                    <br>
                                    Kunci menjual emas dengan harga tinggi adalah “”menjual saat harga emas sedang tinggi”” dan “menjual ke toko khusus yang menawarkan harga beli tinggi.” Harga emas saat ini sedang melonjak sehingga menjadi waktu terbaik untuk menjualnya.<br />
                                    <br />
                                    Faktor penting adalah memilih toko pembelian yang tepat. Untuk pembelian emas, percayalah pada Otakaraya yang terkenal dengan harganya yang tinggi.<br>
                                    Dengan lebih dari 1.200 toko di seluruh negeri, penilai profesional kami akan menawarkan harga pembelian yang memuaskan Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="is-sp">
                <div class="renew_202404_sellreason_titlebox">
                    <h2 class="renew_202404_sellreason_title_h2">Kenapa sekarang waktu yang tepat untuk menjual emas</h2>
                    <h3 class="renew_202404_sellreason_title_h3">Tiga poin penting saat menjual emas</h3>
                    <img class="renew_2024_sellreason_title_image" src="../images/gold/point_stars.png">
                </div>
                <section class="renew_202404_sellreason_section">
                    <div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_1.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image01.jpg">
                        <h2 class="renew_202404_sellreason_item_title">Tren Harga Pembelian Emas</h2>
                        <div class="renew_202404_sellreason_item_story">
                            Harga emas berubah setiap hari. Harga per gramnya dapat mengalami fluktuasi hingga beberapa ratus yen dalam satu hari, dan semakin banyak emas yang Anda jual (semakin berat barangnya), semakin besar dampak fluktuasi harga tersebut.
                        </div>
                    </div>
                    <!-- renew_202404_sellreason_item -->

                    <div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_2.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image02.jpg">
                        <h2 class="renew_202404_sellreason_item_title">kemurnian emas</h2>
                        <div class="renew_202404_sellreason_item_story">
                        Emas ditandai dengan kemurnian (kandungannya), misalnya 24K, 22K, atau 18K. Semakin tinggi angka pada stempel, semakin langka dan semakin tinggi nilainya sebagai emas.
                        </div>
                    </div>
                    <!-- renew_202404_sellreason_item -->

                    <div class="renew_202404_sellreason_item"> <img class="renew_202404_sellreason_item_icon" src="../images/gold/point_3.webp"> <img class="renew_202404_sellreason_item_img" src="../images/gold/point_image03.jpg">
                        <h2 class="renew_202404_sellreason_item_title">berat emas</h2>
                        <div class="renew_202404_sellreason_item_story">
                            Referensi Harga Pembelian ditetapkan untuk setiap gram emas, sehingga nilai yang dinilai meningkat sebanding dengan beratnya. Dalam penilaian Otakaraya, kami mengukur beratnya hingga 0,1 gram terdekat dan menghitung nilai emas secara akurat.
                        </div>
                    </div>
                    <!-- renew_202404_sellreason_item -->
                    <h3 class="renew_202404_sellreason_shutter_title">
                        Mengapa Otakaraya Bisa Menawarkan Pembelian Emas dengan Harga Tinggi
                        <div class="renew_202404_sellreason_shutter_circle">
                            <div class="renew_202404_sellreason_shutter_arrow"></div>
                        </div>
                    </h3>
                    <div class="renew_202404_sellreason_shutter_story">
                        <p>
                            <span>Sebagai toko khusus pembelian, Otakaraya tidak memiliki toko retail untuk menjual barang yang dibeli dari pelanggan.</span>
                            Barang yang kami beli diperdagangkan tidak hanya di Jepang tetapi juga dengan perusahaan dan bisnis lain di 44 negara di seluruh dunia.
                        </p>
                        <p>
                        Dengan menghilangkan biaya yang terkait dengan penjualan, kami dapat menawarkan pembelian dengan harga tinggi yang unik di Otakaraya.
                        </p>
                    </div>
                    <h3 class="renew_202404_sellreason_shutter_title">
                        Tren Harga Emas Selama 30 Tahun Terakhir
                        <div class="renew_202404_sellreason_shutter_circle">
                            <div class="renew_202404_sellreason_shutter_arrow"></div>
                        </div>
                    </h3>
                    <div class="renew_202404_sellreason_shutter_story">
                        <p>
                            30 tahun yang lalu, pada tahun 1990an, harga emas berada pada kisaran 1.000–1.500 yen per gram, yang merupakan nilai yang sangat rendah berdasarkan standar saat ini.
                        </p>
                        <p>
                        Namun karena kondisi sosial yang tidak stabil seperti runtuhnya Lehman Brothers dan krisis COVID-19, nilai emas sebagai "aset aman" meningkat dan harganya melonjak.
                        </p>
                        <p>
                            <span>Pada tahun 2024, harga emas telah melampaui 10.000 yen per gram, mencapai titik tertinggi dalam sejarah.</span>
                        </p>
                    </div>
                    <h3 class="renew_202404_sellreason_shutter_title">
                    Tips menjual emas dengan harga tinggi
                        <div class="renew_202404_sellreason_shutter_circle">
                            <div class="renew_202404_sellreason_shutter_arrow"></div>
                        </div>
                    </h3>
                    <div class="renew_202404_sellreason_shutter_story">
                        <p>
                        Kunci menjual emas dengan harga tinggi adalah “”menjual saat harga emas sedang tinggi”” dan “menjual ke toko khusus yang menawarkan harga beli tinggi.” Harga emas saat ini sedang melonjak sehingga menjadi waktu terbaik untuk menjualnya.
                        Harga emas saat ini sedang meroket, jadi sekarang adalah waktu terbaik untuk menjualnya.
                        </p>
                        <p>
                        Faktor penting adalah memilih toko pembelian yang tepat. Untuk pembelian emas, percayalah pada Otakaraya yang terkenal dengan harganya yang tinggi.

                        Dengan lebih dari 1.200 toko di seluruh negeri, penilai profesional kami akan menawarkan harga pembelian yang memuaskan Anda.
                        </p>
                    </div>
                </section>
            </div>
            <!-- MOD_20240417 -->
            <?php get_template_part('template-parts/assessment_cta'); ?>

            <!-- MOD_20240417 -->

            <section class="reason_section">
                <?php get_template_part('template-parts/otakaraya_sel'); ?>
            </section>

            <!-- MOD_20240417 -->
            <section class="renew_2024_unknownok_section is-sp">
                <div class="renew_2024_unknownok_titlebox">
                    <h2 class="renew_2024_unknownok_title">
                       Jangan khawatir jika Anda tidak yakin dengan kemurnian barang emas yang akan Anda beli
                    </h2>
                    <img class="renew_2024_unknownok_title_image"
                        src="../images/gold/ok_photo_202404.png">
                </div>
                <div class="renew_2024_unknownok_item_titlebox first">
                    Tentang Kemurnian Emas
                    <div class="renew_2024_unknownok_item_title_circle">
                        <div class="renew_2024_unknownok_item_title_arrow"></div>
                    </div>
                </div>
                <div class="renew_2024_unknownok_item_storybox">
                    <p>
                    Nilai emas, seperti 24K atau 18K, ditandai menggunakan sistem unik yang disebut rasio 24 bagian.<br>
                    Selain stempel rasio 24 bagian, beberapa barang mungkin juga memiliki ciri khas, yaitu sertifikasi kemurnian dari otoritas pencetakan.
                    Meskipun ciri tersebut tidak secara langsung meningkatkan nilai emas, namun hal ini penting untuk memastikan keamanan transaksi, karena ada banyak jenis emas yang beredar di pasaran.
                    </p>
                    <p>
                    Khususnya untuk produk luar negeri, sulit menentukan kemurnian emas dari stempelnya.
                    Bahkan barang tanpa stempel pun dapat dibeli, jadi jangan ragu untuk berkonsultasi dengan kami.
                    </p>
                </div>
                <div class="renew_2024_unknownok_item_titlebox">
                Secara akurat mengukur kemurnian logam mulia yang tidak diketahui
                    <div class="renew_2024_unknownok_item_title_circle">
                        <div class="renew_2024_unknownok_item_title_arrow"></div>
                    </div>
                </div>
                <div class="renew_2024_unknownok_item_storybox">
                    <p>
                    Jika Anda tidak yakin dengan kemurniannya atau tidak ada stempelnya, jangan khawatir.<br />
                    Kami dapat secara akurat mengukur nilai emas atau alumunium dengan kemurnian rendah yang terbuat dari berbagai logam dalam waktu singkat, dan menawarkan pembelian tunai di tempat.<br />
                    Jangan ragu untuk menghubungi kami, meskipun toko lain menolak barang Anda.
                    </p>
                </div>
                <div class="renew_2024_unknownok_item_titlebox">
                Penilaian akan mempertimbangkan aksesoris perhiasan dan desain.
                    <div class="renew_2024_unknownok_item_title_circle">
                        <div class="renew_2024_unknownok_item_title_arrow"></div>
                    </div>
                </div>
                <div class="renew_2024_unknownok_item_storybox">
                    <p>
                    Di Otakaraya, saat membeli barang emas, kami tidak hanya mempertimbangkan nilai emas itu sendiri tetapi juga nilai aksesoris perhiasan dan desainnya.<br />
                    Sebagai toko khusus yang membeli berbagai macam logam mulia, Otakaraya menawarkan penilaian harga tinggi bagi Anda.
                    </p>
                </div>
            </section>
            <section class="brandinfo_section gold_top_brandinfo_section is-pc">
                <div class="titleMain titleMain--wrapper" style="margin-bottom: 4rem;">
                    <h2 class="titleMain--main">
                    Jangan khawatir jika Anda tidak yakin dengan kemurnian barang emas yang akan Anda beli
                    </h2>
                </div>
                <div class="brandinfo brandinfo_red_repeat">
                    <div class="brandinfo__main fshoplist-target__list">
                        <div class="brandinfo__header fshoplist-target--ttl">
                            <h3 class="brandinfo__header__title">Tentang Kemurnian Emas</h3>
                        </div>
                        <div class="fshoplist-target--item brandinfo__body no--image">
                            <div class="brandinfo__body__text brandinfo__body__text--top">
                                <p> Nilai emas, seperti 24K atau 18K, ditandai menggunakan sistem unik yang disebut rasio 24 bagian.
                                Selain stempel rasio 24 bagian, beberapa barang mungkin juga memiliki ciri khas, yaitu sertifikasi kemurnian dari otoritas pencetakan.
                                Meskipun ciri tersebut tidak secara langsung meningkatkan nilai emas, namun hal ini penting untuk memastikan keamanan transaksi, karena ada banyak jenis emas yang beredar di pasaran.<br />
                                    <br />
                                    Khususnya untuk produk luar negeri, sulit menentukan kemurnian emas dari stempelnya.
                                    Bahkan barang tanpa stempel pun dapat dibeli, jadi jangan ragu untuk berkonsultasi dengan kami.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="brandinfo__main fshoplist-target__list">
                        <div class="brandinfo__header fshoplist-target--ttl">
                            <h3 class="brandinfo__header__title">
                            Secara akurat mengukur kemurnian logam mulia yang tidak diketahui</h3>
                        </div>
                        <div class="fshoplist-target--item brandinfo__body no--image">
                            <div class="brandinfo__body__text brandinfo__body__text--top">
                                <p>
                                Jika Anda tidak yakin dengan kemurniannya atau tidak ada stempelnya, jangan khawatir.
                                Kami dapat secara akurat mengukur nilai emas atau alumunium dengan kemurnian rendah yang terbuat dari berbagai logam dalam waktu singkat, dan menawarkan pembelian tunai di tempat.
                                Jangan ragu untuk menghubungi kami, meskipun toko lain menolak barang Anda.</p>
                            </div>
                        </div>
                        <div class="brandinfo__main fshoplist-target__list">
                            <div class="brandinfo__header fshoplist-target--ttl">
                                <h3 class="brandinfo__header__title">
                                Penilaian akan mempertimbangkan aksesoris perhiasan dan desain.
                                </h3>
                            </div>
                            <div class="fshoplist-target--item brandinfo__body no--image">
                                <div class="brandinfo__body__text brandinfo__body__text--top">
                                    <p>
                                    Di Otakaraya, saat membeli barang emas, kami tidak hanya mempertimbangkan nilai emas itu sendiri tetapi juga nilai aksesoris perhiasan dan desainnya.
                                    Sebagai toko khusus yang membeli berbagai macam logam mulia, Otakaraya menawarkan penilaian harga tinggi bagi Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="renew_2024_top_gg_section is-sp" style="margin-top:0px !important;">
                <img class="renew_2024_top_gg_photo" src="../images/gold/photo_ito_sp.webp" alt="鑑定士の紹介">
                <div class="renew_2024_top_gg_profile_superbox">
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left"> 名前 </div>
                        <div class="renew_2024_top_gg_profile_right"> Ito </div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">Hobi</div>
                        <div class="renew_2024_top_gg_profile_right"> Menyemir sepatu</div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">Kalimat favorit</div>
                        <div class="renew_2024_top_gg_profile_right">Berani dan tak kenal takut.</div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">Merk favorit</div>
                        <div class="renew_2024_top_gg_profile_right"> Harry Winston</div>
                    </div>
                    <div class="renew_2024_top_gg_profile_flex">
                        <div class="renew_2024_top_gg_profile_left">Contoh pembelian sebelumnya</div>
                        <div class="renew_2024_top_gg_profile_right">Orin, emas batangan</div>
                    </div>
                    <div class="renew_2024_top_gg_storybox">
                    Di Otakaraya, saat membeli emas, kami menggunakan referensi harga pembelian emas per gram hari ini dan juga mempertimbangkan faktor-faktor seperti desain untuk menawarkan harga pembelian bernilai tinggi.
                    Kami telah menilai lebih dari 10.000 item di masa lalu, dan banyak pelanggan merasa puas dengan nilainya, seringkali melebihi ekspektasi mereka.
                    Selain itu, Otakaraya melengkapi seluruh tokonya dengan timbangan berat yang spesifik, sehingga kami dapat mengukur kandungan emas secara akurat.
                    </div>
                    <div class="renew_2024_top_gg_storybox">
                    Kami tidak hanya menawarkan harga yang kompetitif, tetapi kami juga berusaha memberikan layanan terbaik bagi pelanggan.
                    Kami lebih dari sekedar menilai barang; kami meluangkan waktu untuk memahami dan menghormati perasaan setiap pelanggan, memastikan mereka puas dengan penjelasan menyeluruh kami.
                    Kami berdedikasi untuk melayani Anda dengan ketulusan dan perhatian, dan kami menantikan kunjungan Anda ke Otakaraya.
                    </div>
                </div>
            </section>
            <section class="is-pc">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                        <span>Info Penilai</span>
                    </h2>
                </div>
                <div class="content-inner">
                    <section id="shop-leader02">
                        <div class="shop-leader_container bordersitecolor">
                            <div class="shop-leader_inner bordersitecolor">
                                <div class="shop-leader_profile relative">
                                    <div class="shop-leader_head absolute">
                                        <h2 class="is-pc bgsitecolor bordersitecolor relative">
                                            <span class="noto thin" style="font-size: 26px; font-family: serif;">
                                                Penilai
                                            </span>
                                        </h2>
                                        <h2 class="is-sp bgsitecolor bordersitecolor relative">
                                            <span class="noto thin" style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">
                                                Penilai
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="shop-leader_head_shadow absolute">
                                        <div class="relative"></div>
                                    </div>
                                    <div class="imgbox absolute"><img
                                            src="../images/gold/estimator_ito.webp" alt=""></div>
                                    <ul class="floatlist">
                                        <li class="shop-leader_name sitetextcolor" style="font-family: serif;">
                                            <span class="noto ja" style="font-weight: bold;">Ito</span>
                                        </li>
                                        <li class="shop-leader_info">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <th class="sitetextcolor">
                                                            <span class="noto">Hobi:</span>
                                                        </th>
                                                        <td><span class="noto">belanja</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="sitetextcolor">
                                                            <span class="noto">Kalimat favorit:</span>
                                                        </th>
                                                        <td><span class="noto">Jalani apa yang kau katakan dan bicaralah.</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="sitetextcolor">
                                                            <span class="noto">Merk favorit</span>
                                                        </th>
                                                        <td><span class="noto">Harry Winston</span></td>
                                                    </tr>
                                                    <tr>
                                                        <th class="sitetextcolor">
                                                            <span class="noto">Contoh pembelian sebelumnya</span>
                                                        </th>
                                                        <td>
                                                            <span class="noto">Orin, emas batangan</span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                                <p class="shop-leader_text">
                                    <span class="noto">
                                    Di Otakaraya, saat membeli emas, kami menggunakan referensi harga pembelian emas per gram hari ini dan juga mempertimbangkan faktor-faktor seperti desain untuk menawarkan harga pembelian bernilai tinggi.
                                    Kami telah menilai lebih dari 10.000 item di masa lalu, dan banyak pelanggan merasa puas dengan nilainya, seringkali melebihi ekspektasi mereka.
                                    Selain itu, Otakaraya melengkapi seluruh tokonya dengan timbangan berat yang spesifik, sehingga kami dapat mengukur kandungan emas secara akurat.
                                        <br /><br />
                                        Kami tidak hanya menawarkan harga yang kompetitif, tetapi kami juga berusaha memberikan layanan terbaik bagi pelanggan.
                                        Kami lebih dari sekedar menilai barang; kami meluangkan waktu untuk memahami dan menghormati perasaan setiap pelanggan, memastikan mereka puas dengan penjelasan menyeluruh kami.
                                        Kami berdedikasi untuk melayani Anda dengan ketulusan dan perhatian, dan kami menantikan kunjungan Anda ke Otakaraya.
                                    </span>
                                </p>
                                <div class="shop-detail_button clearfix"> </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>

            <!-- MOD_20240417 -->
            <div class="is-pc">
                <section>
                    <div class="titleMain titleMain--wrapper">
                        <h2 class="titleMain--main">
                        Kami akan membeli emas dalam kondisi apapun.
                        </h2>
                        <div class="titleMain--lead">
                            <p>Tidak soal jumlah emas sedikit, aksesoris rusak, atau keadaan apapun, kami dengan senang hati akan membeli.
                            </p>
                        </div>
                    </div>
                    <div class="colBox colBox__col04 sp__col03">
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/04-1.webp" alt="Emas bengkok atau putus"></p>
                                <p class="is-sp"><img src="../images/gold/04-1.webp" alt="Emas bengkok atau putus"></p>
                            </div>
                            <p class="text text--center">Emas bengkok atau putus</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/07-1.webp" alt="Emas tanpa stempel / sertifikat"></p>
                                <p class="is-sp"><img src="../images/gold/07-1.webp" alt="Emas tanpa stempel / sertifikat"></p>
                            </div>
                            <p class="text text--center">Emas tanpa stempel / sertifikat</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/02-1.webp" alt="Anting tunggal atau emas dalam jumlah kecil"></p>
                                <p class="is-sp"><img src="../images/gold/02-1.webp" alt="Anting tunggal atau emas dalam jumlah kecil"></p>
                            </div>
                            <p class="text text--center">Anting tunggal atau emas dalam jumlah kecil</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/03-1.webp" alt="Kepala ikat pinggang dari emas"></p>
                                <p class="is-sp"><img src="../images/gold/03-1.webp" alt="Kepala ikat pinggang dari emas"></p>
                            </div>
                            <p class="text text--center">Kepala ikat pinggang dari emas</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/06-1.webp" alt="Emas kelas industri"></p>
                                <p class="is-sp"><img src="../images/gold/06-1.webp" alt="Emas kelas industri"></p>
                            </div>
                            <p class="text text--center">Emas kelas industri</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/08-1-1.webp" alt="Nilai seni juga dipertimbangkan"></p>
                                <p class="is-sp"><img src="../images/gold/08-1-1.webp" alt="Nilai seni juga dipertimbangkan"></p>
                            </div>
                            <p class="text text--center">Nilai seni juga dipertimbangkan</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/01-1.webp" alt="Nilai antik juga dipertimbangkan"></p>
                                <p class="is-sp"><img src="../images/gold/01-1.webp" alt="Nilai antik juga dipertimbangkan"></p>
                            </div>
                            <p class="text text--center">Nilai antik juga dipertimbangkan</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/05-1-1.webp" alt="Gigi emas, gigi palsu emas"></p>
                                <p class="is-sp"><img src="../images/gold/05-1-1.webp" alt="Gigi emas, gigi palsu emas"></p>
                            </div>
                            <p class="text text--center">Gigi emas, gigi palsu emas</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc">
                                    <img src="../images/gold/7f88058f04264c8f8733783d51428759.webp"
                                        alt="Cincin dengan batu yang hilang">
                                </p>
                                <p class="is-sp">
                                    <img src="../images/gold/7f88058f04264c8f8733783d51428759.webp"
                                        alt="Cincin dengan batu yang hilang">
                                </p>
                            </div>
                            <p class="text text--center">Cincin dengan batu yang hilang</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc">
                                    <img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp"
                                        alt="Aksesori yang bernoda">
                                </p>
                                <p class="is-sp">
                                    <img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp"
                                        alt="Aksesori yang bernoda">
                                </p>
                            </div>
                            <p class="text text--center">Aksesori yang bernoda</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp"
                                        alt="Hanya liontin bagian atas"></p>
                                <p class="is-sp"><img src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp"
                                        alt="Hanya liontin bagian atas"></p>
                            </div>
                            <p class="text text--center">Hanya liontin bagian atas</p>
                        </div>
                        <div class="col">
                            <div class="img">
                                <p class="is-pc"><img src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp"
                                        alt="Bros dan bagian emasnya"></p>
                                <p class="is-sp"><img src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp"
                                        alt="Bros dan bagian emasnya"></p>
                            </div>
                            <p class="text text--center">Bros dan bagian emasnya</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="is-sp">
                <div class="renew_202404_statebad_titlebox">
                    <h2 class="renew_202404_statebad_title_h2">
                        Kami akan membeli emas dalam kondisi apapun.
                    </h2>
                    <div class="renew_202404_statebad_title_lead">
                    Tidak soal jumlah emas sedikit, aksesoris rusak, atau keadaan apapun, kami dengan senang hati akan membeli.
                    </div>
                </div>
                <section class="renew_202404_statebad_section">
                    <div class="renew_202404_statebad_itembox long">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/04-1.webp" alt="Emas bengkok atau putus">
                        </div>
                        Emas bengkok atau putus
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/07-1.webp" alt="Emas tanpa stempel / sertifikat">
                        </div>
                        Emas tanpa stempel / sertifikat
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/02-1.webp" alt="Anting tunggal atau emas dalam jumlah kecil">
                        </div>
                        Anting tunggal atau emas dalam jumlah kecil
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/03-1.webp" alt="Kepala ikat pinggang dari emas">
                        </div>
                        Kepala ikat pinggang dari emas
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/06-1.webp" alt="Emas kelas industri">
                        </div>
                        Emas kelas industri
                    </div>
                    <div class="renew_202404_statebad_itembox long">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/08-1-1.webp" alt="Nilai seni juga dipertimbangkan">
                        </div>
                        Nilai seni juga dipertimbangkan
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/01-1.webp" alt="Nilai antik juga dipertimbangkan">
                        </div>
                        Nilai antik juga dipertimbangkan
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/05-1-1.webp" alt="Gigi emas, gigi palsu emas">
                        </div>
                        Gigi emas, gigi palsu emas
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/7f88058f04264c8f8733783d51428759.webp" alt="Cincin dengan batu yang hilang">
                        </div>
                        Cincin dengan batu yang hilang
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img src="../images/gold/ec85d0541b60c1f7ba605bfca95b13d0.webp" alt="Aksesori yang bernoda">
                        </div>
                        Aksesori yang bernoda
                    </div>
                    <div class="renew_202404_statebad_itembox long">
                        <div class="renew_202404_statebad_image">
                            <img
                                src="../images/gold/38480b4ef7005b09bd7ed1a3e9dc1e52.webp" alt="Hanya liontin bagian atas">
                        </div>
                        Hanya liontin bagian atas
                    </div>
                    <div class="renew_202404_statebad_itembox">
                        <div class="renew_202404_statebad_image">
                            <img
                                src="../images/gold/f540432c0d452207e8eb30d72179e8ea.webp" alt="Bros dan bagian emasnya">
                        </div>
                        Bros dan bagian emasnya
                    </div>
                </section>
                <!-- renew_202404_statebad_section -->
            </div>

            <!-- MOD_20240417 -->
            <h2 class="renew_2024_titlesub follow is-sp">
                <div class="renew_2024_titlesub_topbar">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                Yang sering ditanyakan
            </h2>
            <section class="faq_section renew_2024">
                <div class="titleMain titleMain--wrapper is-pc">
                    <h2 class="titleMain--main">
                        Yang sering ditanyakan
                    </h2>
                </div>
                <div class="qa__wrap js__more--3th">
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bagaimana penilaian terhadap barang emas dari merk ternama dilakukan?
                            </dt>
                            <dd class="qa__list__a">
                            Cincin, kalung, dan item lainnya dari merk ternama, akan kami nilai harga emasnya dan nilai harga sebagai sebuah merek.<br>
                            Dalam beberapa kasus, nilai merek dapat menghasilkan harga yang jauh lebih tinggi dibandingkan nilai emas itu sendiri.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bisakah Otakaraya membeli item dengan kemurnian lebih rendah, seperti K10?
                            </dt>
                            <dd class="qa__list__a">
                            Ya, kami dapat membelinya. Misalnya, meskipun tidak ada stempel atau sertifikatnya, selama kami dapat memastikan bahwa barang tersebut mengandung sejumlah emas, kami akan dengan senang hati membelinya.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Saya punya aksesorisnya, tapi saya tidak mengetahui bahannya.
                            </dt>
                            <dd class="qa__list__a">
                            Jika Anda membawanya, kami akan memverifikasi materinya di tempat. Silakan berkonsultasi dengan kami.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bisakah Otakaraya membeli emas dalam jumlah kecil?
                            </dt>
                            <dd class="qa__list__a">
                            Berapapun jumlahnya, kami dengan senang hati akan menilai dan membeli barang Anda. Bahkan jika Anda tidak yakin apakah itu emas, kami menawarkan penilaian gratis, jadi jangan ragu untuk menghubungi kami.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Saya khawatir tetangga akan memperhatikan jika saya menggunakan layanan kunjungan rumah...
                            </dt>
                            <dd class="qa__list__a">
                            Saat penilai kami mengunjungi rumah Anda dengan mobil, mereka akan menggunakan kendaraan pribadi tanpa logo perusahaan, sehingga Anda bisa merasa nyaman.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bisakah Anda membeli barang tanpa aksesori?
                            </dt>
                            <dd class="qa__list__a">
                            Meskipun memiliki aksesori adalah hal yang ideal, kami dengan senang hati menilai dan membeli barang bahkan tanpa aksesori.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Mengapa identifikasi diperlukan?
                            </dt>
                            <dd class="qa__list__a">
                            Identifikasi penjual diwajibkan oleh Undang-undang Dealer Barang Antik, dan kami diwajibkan menyimpan catatan untuk tujuan tersebut. Ini tidak akan digunakan untuk alasan lain.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bolehkah sekadar melakukan penilaian terhadap emas dan logam mulia?
                            </dt>
                            <dd class="qa__list__a">
                            Ya tentu saja kami dengan senang hati memberikan penilaian meski tanpa ada komitmen untuk menjual.
Barang-barang yang Anda bawa mungkin menyimpan banyak kenangan—mungkin itu adalah sesuatu yang Anda beli dengan bonus pertama Anda, hadiah dari orang tua Anda untuk perayaan kedewasaan Anda, atau hadiah pernikahan dari nenek Anda.
Setiap barang memiliki ceritanya sendiri.
Anda mungkin bertanya-tanya, 'Berapa nilai barang yang saya simpan jika saya benar-benar menjualnya?'
Otakaraya dapat membantu menjawab pertanyaan itu.
Kami menawarkan berbagai metode penilaian yang disesuaikan dengan kebutuhan Anda, baik di toko atau melalui kunjungan rumah.
Silakan menggunakan layanan kami dan, setelah mendapatkan hasil penilaian, diskusikan dengan keluarga Anda.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bisakah Otakaraya membeli emas yang putus?
                            </dt>
                            <dd class="qa__list__a">
                            Kami akan dengan senang hati menilai dan membelinya.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah ada biaya appraisal (biaya autentikasi) untuk emas dan logam mulia?
                            </dt>
                            <dd class="qa__list__a">
                            Untuk emas, logam mulia, dan barang lainnya, kami tidak mengenakan biaya penilaian apa pun. Semua penilaian sepenuhnya gratis, jadi jangan khawatir.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah harga beli emas batangan berbeda-beda tergantung apakah ada stempel / sertifikatnya atau tidak?
                            </dt>
                            <dd class="qa__list__a">
                            Stempel / sertifikat merupakan indikasi penting mengenai 'merek dan kepercayaan' emas batangan. Selain itu, emas batangan sering kali diukir dengan nomor untuk mengidentifikasi pembeli aslinya.
Untuk barang tanpa tanda ini, sayangnya kami mungkin menolak membelinya. Pasalnya, dalam beberapa tahun terakhir, terdapat kasus penyelundupan emas batangan ke Jepang dari luar negeri, dan para penjahat sering kali melebur dan menjualnya untuk menyembunyikan asal usulnya.
Meskipun ada kasus di mana kami mungkin menolak untuk membeli, jika terdapat bukti pembelian atau penjelasan valid yang sesuai dengan asal barang, kami tetap dapat menawarkan harga pembelian yang sama dengan harga pembelian emas biasa. Silakan menghubungi kami untuk pertanyaan lebih lanjut.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah harga beli aksesoris emas dan emas batangan berbeda?
                            </dt>
                            <dd class="qa__list__a">
                            Iya, harga beli aksesoris dan emas batangan memang berbeda.
Pertama, emas batangan biasanya terbuat dari emas murni (K24). Ada berbagai merek emas batangan, dan hanya perusahaan yang diakui secara global yang diperbolehkan untuk mencap logo mereka pada emas batangan tersebut. Emas batangan dari merek yang sangat tepercaya diperdagangkan dengan harga lebih tinggi di pasar.
Selain itu, emas batangan diproses melalui berbagai tahapan di kilang untuk diubah menjadi emas batangan.
Biaya pemrosesan untuk tahapan ini sudah termasuk dalam harga pembelian, yang merupakan salah satu alasan mengapa ada perbedaan harga antara aksesori dan emas batangan.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah Otakaraya akan membeli kalung yang rantainya rusak?
                            </dt>
                            <dd class="qa__list__a">
                            Ya, kami dengan senang hati akan membeli kalung yang rantainya rusak. Sebagian besar barang ini dapat dengan mudah diperbaiki, jadi silakan membawanya.
                            Jika Anda mencoba memperbaikinya sendiri dengan alat seperti tang, hal ini dapat merusak barang dan mengurangi nilai aslinya. Kami merekomendasikan untuk membawa barang apa adanya dan berkonsultasi dengan kami.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah goresan atau kotoran mempengaruhi harga beli?
                            </dt>
                            <dd class="qa__list__a">
                            Meskipun lebih baik untuk memiliki barang dalam kondisi bersih, mencoba membersihkannya sendiri terkadang dapat menyebabkan goresan menyebar, sehingga berpotensi mengurangi nilainya.
Untuk kotoran, penggunaan bahan kimia atau metode pembersihan yang keras dapat menyebabkan barang tersebut kehilangan warna aslinya sehingga menurunkan kualitasnya. Oleh karena itu, sebaiknya jangan mencoba membersihkan barang tersebut sendiri.
Jika Anda khawatir dengan kotoran, seka perlahan menggunakan kain kering dan lembut, atau Anda dapat menggunakan deterjen ringan yang telah diencerkan.
Namun, karena perawatan emas dan logam mulia yang benar memerlukan pengetahuan khusus, sangat penting untuk menghindari melakukan apa pun yang dapat mempengaruhi kondisi barang tersebut. Jika Anda tidak yakin bagaimana cara melakukannya, silakan berkonsultasi dengan salah satu toko terdekat atau layanan pelanggan kami.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bisakah emas atau logam mulia tanpa stempel dinilai?
                            </dt>
                            <dd class="qa__list__a">
                            Ya, kami bisa membelinya.
Meskipun sebagian besar barang saat ini memiliki tanda, barang atau produk lama yang dibuat di luar negeri sering kali tidak memiliki tanda tersebut. Beberapa toko mungkin tidak menerima barang tanpa tanda, tetapi Otakaraya memiliki perangkat analisis sinar-X.
Hal ini memungkinkan kami mengukur kandungan emas atau logam mulia secara ilmiah, meskipun metode tradisional tidak dapat mendeteksinya
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Apakah koin emas besar dan kecil, koin emas asing, koin antik, dan koin lainnya dapat dibeli?
                            </dt>
                            <dd class="qa__list__a">
                            Tentu saja kami membeli koin emas besar dan kecil yang diterbitkan pada zaman Edo, serta uang lama (uang kertas dan koin) yang biasa disebut koin antik.
Koin emas asing, seperti ""Koin Emas Panda" Tiongkok, "Koin Emas Elang" Amerika, dan "Koin Emas Daun Maple" Kanada, sangat dicari di seluruh dunia.
Koin emas premium ini mungkin dievaluasi hanya berdasarkan kualitas dan berat emas di toko lain, namun di Otakaraya, kami mengevaluasi nilai keseluruhannya dan menawarkan harga pembelian yang tinggi.
Selain koin emas, kami juga membeli koin perak, paladium, koin platinum, koin peringatan, dan medali
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Berapa lama waktu yang dibutuhkan untuk "penilaian emas dan logam mulia"?
                            </dt>
                            <dd class="qa__list__a">
                            Waktu yang dibutuhkan untuk penilaian tergantung volume barang, tapi biasanya memakan waktu sekitar 5 hingga 15 menit.
Jika Anda tidak dapat mengunjungi toko atau tidak ada toko kami di sekitar Anda, Anda juga dapat menggunakan layanan kunjungan rumah. Pilih metode penilaian yang paling sesuai dengan Anda. Kami juga menerima konsultasi melalui telepon atau email.
Terlepas dari metode penilaian yang Anda pilih, harga penilaian yang ditawarkan tidak akan berubah.
Selain itu, semua layanan penilaian tidak dipungut biaya.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Kapan waktu terbaik untuk menjual emas dan logam mulia? Benarkah harga belinya berubah-ubah tergantung hari?
                            </dt>
                            <dd class="qa__list__a">
                            Harga pasaran diupdate setiap hari, jadi harga beli bisa berbeda-beda tergantung harinya.
Waktu terbaik untuk menjual adalah saat pasar emas sedang tinggi atau saat nilai tukar cenderung melemah terhadap yen.
Selain itu, selama masa ketidakstabilan global, kepercayaan terhadap mata uang kertas cenderung menurun, sehingga meningkatkan kepercayaan terhadap emas, dan akibatnya, harga pasar meningkat.
Dalam beberapa tahun terakhir, harga emas dan logam mulia berada dalam tren kenaikan jangka panjang, sehingga harga pembelian diperkirakan akan tinggi.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Bagaimana cara menentukan harga beli emas dan logam mulia?
                            </dt>
                            <dd class="qa__list__a">
                            Harga pembelian ditentukan berdasarkan tiga faktor: harga pasar yang diperbarui secara global, berat barang, dan kemurnian barang (seperti K24, K18). Selain itu, evaluasi komprehensif terhadap desain dan merek dipertimbangkan untuk menentukan harga pembelian. Kami berusaha untuk menawarkan harga pembelian yang lebih tinggi dibandingkan dengan perusahaan lain.
                            </dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">
                            Kapan waktu terbaik untuk menjual logam mulia?
                            </dt>
                            <dd class="qa__list__a">
                            Waktu terbaik untuk menjual logam mulia bisa berbeda-beda. Terkadang, waktu yang tepat datang dengan cepat, sementara dalam kasus lain, menyimpannya dalam jangka waktu yang lebih lama dapat meningkatkan nilainya. Tidak mungkin untuk mengatakan kapan waktu yang tepat. Jika Anda berencana menyimpannya dalam jangka panjang sebelum dijual, penting untuk menyimpannya dengan benar dan melakukan perawatan rutin untuk menjaga kondisinya.
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="btn__wrap btn__more js__more--btn3 gtm-more-qa">
                    <span>Lihat selengkapnya</span>
                </div>
            </section>
            <div class="wd_spacer is-pc"></div>

            <?php get_template_part('template-parts/assessment_cta'); ?>
        </article>
        <?php get_template_part('template-parts/side-menu'); ?>
    </main>


    <?php get_footer('common'); ?>
    <script src="../js/common.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/shared.js"></script>
    <script src="../js/breadlist.js"></script>
    <script src="../js/renew202404.js"></script>
    <script src="../js/vue.min.js"></script>
    <script src="../js/axios.min.js"></script>
    <script src="../js/japanese-holidays.min.js"></script>
    <script src="../js/price_load_ex_v2.js"></script>
    <script>
        //crossdomainのphpファイルのアップ先URL
        const crossdomain_file = "https://www.otakaraya.jp/rate_files_v2/crossdomain.php";
        //データを反映したいDOM要素のID
        const dom_id = ["#price", "#simulation", "#todayprice", "#gram_market_price"];
        Vue.use(PriceLoad, {
            _file: crossdomain_file,
            _dom: dom_id
        });
    </script>
    <script>
        $(window).on('load', function() {
            const moreNum31 = 3;
            $('.js__more--item31:nth-child(n + ' + (moreNum31 + 1) + ')').addClass('is-hidden').hide();
            $('.js__more--btn31').on('click', function() {
                const hiddenItems1 = $(this).prev('.js__more--31th').children('.js__more--item31.is-hidden');
                hiddenItems1.slice(0, moreNum31).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
                if (hiddenItems1.length <= moreNum31) $(this).fadeOut(); // すべて表示されたら非表示
            });
        });

        $(window).on('load', function() {
            const moreNum30 = 3;
            $('.js__more--item30:nth-child(n + ' + (moreNum30 + 1) + ')').addClass('is-hidden').hide();
            $('.js__more--btn30').on('click', function() {
                const hiddenItems2 = $(this).prev('.js__more--30th').children('.js__more--item30.is-hidden');
                hiddenItems2.slice(0, moreNum30).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
                if (hiddenItems2.length <= moreNum30) $(this).fadeOut(); // すべて表示されたら非表示
            });
        });

        $(function() {
            appear();
        })
        $(window).scroll(function() {
            appear();
        })

        function appear() {
            $(".renew_2024_market_countup").each(
                function() {
                    var now_screen_h = $(window).height();
                    var now_screen_w = $(window).width();
                    var ap_position = $(this).offset().top;
                    var gap = 0;
                    if ($(this).hasClass("wd_appear2")) {
                        gap += 80;
                    } else if ($(this).hasClass("wd_appear3")) {
                        gap += 160;
                    }
                    if ($(window).scrollTop() > ap_position - now_screen_h + gap) {

                        if ($(this).hasClass("done") == false) {

                            var price_text = $(this).text();
                            var price_num = parseInt(price_text.replace(",", ""));
                            //countupper( $(this) , price_num , 1000 ) ;
                            $(this).text(Math.abs(price_num));

                            $(this).addClass("done");

                        }

                    }
                }
            );
        }

        function countupper(obj, last, time) {
            if (last < 0) {
                last = last * -1;
            }
            $({
                countup: 0
            }).stop().animate({
                countup: last
            }, {
                progress: function() {
                    obj.text(Math.floor(this.countup).toLocaleString());
                },
                duration: time
            });
        }

        jQuery(function() {
            jQuery(document).on('click', '.w_tab', function() {
                $('.w_tab, .w_unit').removeClass('active');
                $('#answer, .weight').val('');

                if ($(this).hasClass('w_gram')) {
                    $('.w_gram').addClass('active');

                } else if ($(this).hasClass('w_oz')) {
                    $('.w_oz').addClass('active');
                    $('.w_oz .weight').prop('selectedIndex', 0);

                }
            });
        });



        function priceset() {
            // 読み込み時にselect二種類追加
            var k18val = jQuery('#k18val').text();
            k18val = k18val.replace(/,/g, '');

            var pt900 = jQuery('#pt900').text();
            var pt850 = jQuery('#pt850').text();
            pt900 = pt900.replace(/,/g, '');
            pt850 = pt850.replace(/,/g, '');
            pt900 = Math.round(pt900 / 2 + k18val / 2);
            pt850 = Math.round(pt850 / 2 + k18val / 2);

            var tool_bace_price = jQuery('#tool_bace_price').text();
            var pt_tool_bace_price = jQuery('#pt_tool_bace_price').text();
            var pd_tool_bace_price = jQuery('#pd_tool_bace_price').text();
            tool_bace_price = Number(tool_bace_price.replace(/,/g, ''));
            pt_tool_bace_price = Number(pt_tool_bace_price.replace(/,/g, ''));
            pd_tool_bace_price = Number(pd_tool_bace_price.replace(/,/g, ''));

            plus_pt950 = pd_tool_bace_price * 0.02;
            plus_pt900 = pd_tool_bace_price * 0.05;
            plus_pt850 = pd_tool_bace_price * 0.08;

            k24_price = Math.round(tool_bace_price * 0.99 - 40);
            k23_price = Math.round(tool_bace_price * 0.94 - 40);
            k22_price = Math.round(tool_bace_price * 0.91 - 40);
            k21_price = Math.round(tool_bace_price * 0.89 - 40);
            k20_price = Math.round(tool_bace_price * 0.82 - 40);
            k18_price = Math.round(tool_bace_price * 0.75);
            k14_price = Math.round(tool_bace_price * 0.57 - 40);
            k12_price = Math.round(tool_bace_price * 0.48 - 40);
            k10_price = Math.round(tool_bace_price * 0.40 - 40);
            k9_price = Math.round(tool_bace_price * 0.36 - 40);
            k8_price = Math.round(tool_bace_price * 0.30 - 40);
            k5_price = Math.round(tool_bace_price * 0.15 - 40);
            k7_price = Math.round(tool_bace_price * 0.25 - 40);
            k17_price = Math.round(tool_bace_price * 0.66 - 40);

            pt1000_price = Math.round(pt_tool_bace_price * 0.999 - 70);
            pt950_price = Math.round(pt_tool_bace_price * 0.94 - 80 + plus_pt950);
            pt900_price = Math.round(pt_tool_bace_price * 0.895 - 80 + plus_pt900);
            pt850_price = Math.round(pt_tool_bace_price * 0.84 - 80 + plus_pt850);
            pt650_price = Math.round(pt_tool_bace_price * 0.64 - 80);
            pt500_price = Math.round(pt_tool_bace_price * 0.49 - 80);
            pt100_price = Math.round(pt_tool_bace_price * 0.08 - 80);

            k18_half = k18_price / 2;
            pt900_half = pt900_price / 2;
            pt850_half = pt850_price / 2;
            k18_pt900_half = k18_half + pt900_half;
            k18_pt850_half = k18_half + pt850_half;

            var purity = 'gold-top';
        }


        jQuery(window).on("load", function() {
            setTimeout(() => {
                priceset();
            }, 2000);
        });

        //window.onload = priceset;
        document.addEventListener('DOMContentLoaded', function() {
            var select_state = document.getElementById("rateSimulation--select");
            jQuery(document).on('change', '#rateSimulation--select', function() {
                var text = jQuery('option:selected').val();
                multi();
            });

            jQuery(document).on('blur change', '.weight', function() {
                var text = jQuery(this).val() || jQuery('option:selected', '.weight').val();
                multi();
            });

            function multi() {
                var text = jQuery('#rateSimulation--select option:selected').val();
                var removed = text.replace(/,/g, '');
                var num = parseInt(removed, 10);
                var weight = jQuery(".weight").val() || jQuery('option:selected', '.weight').val();
                if (num) {
                    if (weight) {
                        var answer = num * weight;
                        answer = Math.round(answer);
                        answer = answer.toLocaleString();
                        jQuery('#answer').val(answer);
                    }
                }
                console.log(weight)
            }

            jQuery(function() {
                jQuery(document).on('mouseup keyup change', '.weight', function(e) {
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
        let cnt = document.getElementById('cat_list').childElementCount;
        if (cnt === 5) {
            let elements = document.querySelectorAll('.tab__item');
            let lastElement = elements[elements.length - 1];
            lastElement.classList.add('tab__item_others');
        }

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
        var itemCount = $('.latest_results_item').length;

        console.log(itemCount);

        // 要素の数が10個未満の場合に実行する処理
        if (itemCount < 11) {
            // ここに処理を記述
            console.log('latest_results_item のクラスが10個未満です');

            // 例えば、特定の要素にメッセージを追加する場合
            $('#message').text('There are less than 10 items.');
        }

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
    </script>
</body>

</html>