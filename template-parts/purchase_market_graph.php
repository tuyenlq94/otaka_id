<section class="rateSection">
    <div class="is-sp">
        <h3 class="renew_202404_calctool_title">
            Gold<br>
            Purchase Price<br>
            <span>Trend Graph</span>
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