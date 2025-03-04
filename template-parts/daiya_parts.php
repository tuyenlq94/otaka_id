<?php if (isset($_GET['mode']) && $_GET['mode'] === 'test') { ?>

    <!-- MOD_20240417 -->
    <div class="renew_2024_dia_titlebox is-sp">
        <h2 class="renew_2024_dia_title_h2">
            <img class="renew_2024_dia_title_l"
                src="../images/daiya/dia_image01_202404.png">
            <img class="renew_2024_dia_title_r"
                src="../images/daiya/dia_image02_202404.png">
            <p>
                鑽石收購參考價格表
            </p>
        </h2>
        <div class="renew_2024_dia_title_lead">
            <p>持有鑑定書的顧客或了解物品4C的顧客，<br />可以從以下模擬參考購買價格。</p>
        </div>
    </div>
    <!-- MOD_20240417 -->

    <!-- ▼▼▼為替計算▼▼▼ -->
    <?php

    // REST APIエンドポイントのURL
    $daiya_api_url = 'https://www.otakaraya.jp/daiya/wp-json/wp/v2/pages/24486/';

    // APIリクエストを実行
    $daiya_response = wp_remote_get($daiya_api_url);

    // エラーチェック
    if (is_wp_error($daiya_response)) {
        $daiya_error_message = $daiya_response->get_error_message();
        echo "Something went wrong: $daiya_error_message";
        return;
    }

    $daiya_body = wp_remote_retrieve_body($daiya_response);

    $daiya_data = json_decode($daiya_body, true);

    // 為替レート取得
    $rate_id = get_page_by_path('exchange_rate');
    $rate_id = $rate_id->ID;
    // 為替が取得できなかったら為替レート140とする
    $exchangeRate = get_field('kawase_rate', $rate_id);

    if (!is_numeric($exchangeRate)) {
        $exchangeRate = 140;
    }
    $exchangeRate = 100;


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
        $price = number_format(floor($price));
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
                    鑽石收購參考價格表
                </h2>
                <div class="titleMain--lead">
                    <p>持有鑑定書的顧客或了解物品4C的顧客，<br />可以從以下模擬參考購買價格。</p>
                </div>
            </div>
            <div class="carat_select">カラットを選ぶ</div>
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
                    <h3>鑽石收購參考價格表</h3>
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
                            <div class="btn__wrap btn__red is-pc">
                                <a href="/daiya/price/">查看鑽石收購參考價格表詳情請點此</a>
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
                                        <div id="price_table_calc" class="tab1 price">0<span class="value">&yen;</span></div>
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
                                        <div class="price"><input readonly="readonly" class="gold_price_table_calc_num" type="text"
                                                id="answer" value="0"><span class="value">&yen;</span></div>
                                    </div>

                                    <div class="form__answer--inner hasBorder">
                                        <div class="sumTitle">鑽石的參考價格</div>
                                        <div id="" class="tab2 price">0<span class="value">&yen;</span></div>
                                    </div>

                                    <div class="form__answer--inner">
                                        <div class="sumTitle">您的物品收購參考金額：</div>
                                        <div id="daiya_gold_calc" class="price">0<span class="value">&yen;</span></div>
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
                                    <div id="carat_only_price" class="price">0<span class="value">&yen;</span></div>
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
                                    <div class="price" id="carat_only_price2">0<span class="value">&yen;</span></div>
                                </div>

                                <div class="form__answer--inner">
                                    <div class="sumTitle">您的物品收購參考金額：</div>
                                    <div id="daiya_gold_calc2" class="price">0<span class="value">&yen;</span></div>
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
                            '<span class="value">円</span>');
                        $("#diamond_price_table_display_2 #price_table_calc").html(cell.text() +
                            '<span class="value">円</span>');

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
                        $("#daiya_gold_calc").html(gold_daiya_calc + '<span class="value">円</span>');

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
                        $(target).html(price + '<span class="value">円</span>');
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

                    var caratPrice = parseInt($("#carat_only_price2").text().replace(/[円,]/g, ''), 10);
                    var answer2 = parseInt($("#answer2").val().replace(/,/g, ''), 10);
                    var goldPriceVal = parseInt($("#simulation_select2").val().replace(/,/g, ''), 10);
                    var weight = parseFloat($("#weight2").val().replace(/,/g, ''));

                    var goldCalcPrice = goldPriceVal * weight;
                    if (isNaN(goldCalcPrice)) {
                        goldCalcPrice = 0;
                    }
                    // var total = caratPrice + answer2 + goldCalcPrice;
                    var total = caratPrice + answer2;

                    $("#daiya_gold_calc2").html(total.toLocaleString() + '<span class="value">円</span>');
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