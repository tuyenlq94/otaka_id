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

// 英語圏様に日付のフォーマットを書き換え
$price_update = str_replace(["年", "月", "日"], "/", $price_update);
$price_update = explode("/", $price_update, -1);
$year = array_shift($price_update);
$price_update[] = $year;
$price_update = implode("/", $price_update);

// APIのURL
$rate_api_url = "https://api.exchangerate-api.com/v4/latest/JPY";


/* $rate_api_url_sg = "https://api.exchangerate-api.com/v4/latest/SGD";
$rate_response_sg = file_get_contents($rate_api_url_sg);
$rate_data_sg = json_decode($rate_response_sg, true);
var_dump($rate_data_sg['rates']); */




// APIから為替レートを取得
$rate_response = file_get_contents($rate_api_url);
$rate_data = json_decode($rate_response, true);

// JPYからSGDのレートを取得
$exchange_rate_src = $rate_data['rates']['SGD'];
$exchange_rate = $exchange_rate_src * 0.919;
$pt_exchange_rate = $exchange_rate_src * 0.976;
$gold_commission = 40 * $exchange_rate_src;
$pt1000_commission = 70 * $exchange_rate_src;
$pt_commission = 80 * $exchange_rate_src;
$sv_commission = 5 * $exchange_rate_src;


// 各価格をシンガポールドルに変換
$price_gold_yd = (int)($price_gold_yd * $exchange_rate);
$price_pt_yd = (int)($price_pt_yd * $pt_exchange_rate);
$price_pd_yd = (int)($price_pd_yd * $exchange_rate_src);
$price_sv_yd = (int)($price_sv_yd * $exchange_rate_src);
$price_gold = (int)($price_gold * $exchange_rate);
$price_pt = (int)($price_pt * $pt_exchange_rate);
$price_pd = (int)($price_pd * $exchange_rate_src);
$price_sv = (int)($price_sv * $exchange_rate_src);



// 本日
$plus_pt950 = $price_pd * 0.02;
$plus_pt900 = $price_pd * 0.05;
$plus_pt850 = $price_pd * 0.08;


$k24_price = round($price_gold * 0.99 - $gold_commission);
$k23_price = round($price_gold * 0.94 - $gold_commission);
$k22_price = round($price_gold * 0.91 - $gold_commission);
$k21_price = round($price_gold * 0.89 - $gold_commission);
$k20_price = round($price_gold * 0.82 - $gold_commission);
$k18_price = round($price_gold * 0.75);
$k17_price = round($price_gold * 0.66 - $gold_commission);
$k14_price = round($price_gold * 0.57 - $gold_commission);
$k12_price = round($price_gold * 0.48 - $gold_commission);
$k10_price = round($price_gold * 0.40 - $gold_commission);
$k9_price = round($price_gold * 0.36 - $gold_commission);
$k8_price = round($price_gold * 0.30 - $gold_commission);
$k7_price = round($price_gold * 0.25 - $gold_commission);
$k5_price = round($price_gold * 0.15 - $gold_commission);

$pt1000_price = round($price_pt * 0.999 - $pt1000_commission);
$pt950_price = round($price_pt * 0.94 - $pt_commission  + $plus_pt950);
$pt900_price = round($price_pt * 0.895 - $pt_commission  + $plus_pt900);
$pt850_price = round($price_pt * 0.84 - $pt_commission  + $plus_pt850);
$pt650_price = round($price_pt * 0.64 - $pt_commission);
$pt500_price = round($price_pt * 0.49 - $pt_commission);
$pt100_price = round($price_pt * 0.08 - $pt_commission);

$sv1000_price = round($price_sv * 0.99 - $sv_commission);
$sv925_price = round($price_sv * 0.91 - $sv_commission);

$k18_half = $k18_price / 2;
$pt900_half = $pt900_price / 2;
$pt850_half = $pt850_price / 2;
$k18_pt900_half = round($k18_half + $pt900_half);
$k18_pt850_half = round($k18_half + $pt850_half);



//昨日
$plus_pt950_yd = $price_pd_yd * 0.02;
$plus_pt900_yd = $price_pd_yd * 0.05;
$plus_pt850_yd = $price_pd_yd * 0.08;

$k24_price_yd = round($price_gold_yd * 0.99 - $gold_commission);
$k23_price_yd = round($price_gold_yd * 0.94 - $gold_commission);
$k22_price_yd = round($price_gold_yd * 0.91 - $gold_commission);
$k21_price_yd = round($price_gold_yd * 0.89 - $gold_commission);
$k20_price_yd = round($price_gold_yd * 0.82 - $gold_commission);
$k18_price_yd = round($price_gold_yd * 0.75);
$k14_price_yd = round($price_gold_yd * 0.57 - $gold_commission);
$k12_price_yd = round($price_gold_yd * 0.48 - $gold_commission);
$k10_price_yd = round($price_gold_yd * 0.40 - $gold_commission);
$k9_price_yd = round($price_gold_yd * 0.36 - $gold_commission);
$k8_price_yd = round($price_gold_yd * 0.30 - $gold_commission);
$k5_price_yd = round($price_gold_yd * 0.15 - $gold_commission);
$k7_price_yd = round($price_gold_yd * 0.25 - $gold_commission);
$k17_price_yd = round($price_gold_yd * 0.66 - $gold_commission);

$pt1000_price_yd = round($price_pt_yd * 0.999 - $pt1000_commission);
$pt950_price_yd = round($price_pt_yd * 0.94 - $pt_commission  + $plus_pt950_yd);
$pt900_price_yd = round($price_pt_yd * 0.895 - $pt_commission  + $plus_pt900_yd);
$pt850_price_yd = round($price_pt_yd * 0.84 - $pt_commission  + $plus_pt850_yd);
$pt650_price_yd = round($price_pt_yd * 0.64 - $pt_commission);
$pt500_price_yd = round($price_pt_yd * 0.49 - $pt_commission);
$pt100_price_yd = round($price_pt_yd * 0.08 - $pt_commission);

$sv1000_price_yd = round($price_sv_yd * 0.99 - $sv_commission);
$sv925_price_yd = round($price_sv_yd * 0.91 - $sv_commission);

$k18_half_yd = $k18_price_yd / 2;
$pt900_half_yd = $pt900_price_yd / 2;
$pt850_half_yd = $pt850_price_yd / 2;
$k18_pt900_half_yd = round($k18_half_yd + $pt900_half_yd);
$k18_pt850_half_yd = round($k18_half_yd + $pt850_half_yd);

$price_gold_diff = $price_gold - $price_gold_yd;
$price_pt_diff = $price_pt - $price_pt_yd;
$price_pd_diff = $price_pd - $price_pd_yd;
$price_sv_diff = $price_sv - $price_sv_yd;

$k24_price_diff = $k24_price - $k24_price_yd;
$k23_price_diff = $k23_price - $k23_price_yd;
$k22_price_diff = $k22_price - $k22_price_yd;
$k21_price_diff = $k21_price - $k21_price_yd;
$k20_price_diff = $k20_price - $k20_price_yd;
$k18_price_diff = $k18_price - $k18_price_yd;
$k14_price_diff = $k14_price - $k14_price_yd;
$k12_price_diff = $k12_price - $k12_price_yd;
$k10_price_diff = $k10_price - $k10_price_yd;
$k9_price_diff = $k9_price - $k9_price_yd;
$k8_price_diff = $k8_price - $k8_price_yd;
$k5_price_diff = $k5_price - $k5_price_yd;
$k7_price_diff = $k7_price - $k7_price_yd;
$k17_price_diff = $k17_price - $k17_price_yd;
$pt1000_price_diff = $pt1000_price - $pt1000_price_yd;
$pt950_price_diff = $pt950_price - $pt950_price_yd;
$pt900_price_diff = $pt900_price - $pt900_price_yd;
$pt850_price_diff = $pt850_price - $pt850_price_yd;
$pt650_price_diff = $pt650_price - $pt650_price_yd;
$pt500_price_diff = $pt500_price - $pt500_price_yd;
$pt100_price_diff = $pt100_price - $pt100_price_yd;
$sv1000_price_diff = $sv1000_price - $sv1000_price_yd;
$sv925_price_diff = $sv925_price - $sv925_price_yd;
$k18_pt900_half_diff = $k18_pt900_half - $k18_pt900_half_yd;
$k18_pt850_half_diff = $k18_pt850_half - $k18_pt850_half_yd;


?>


<!-- 金専門家コメントコンテンツスタイル金カテから移植箇所 -->

<style>
    .expert_comments_section_wrap {
        border: 1px solid #c3c3c3;
        padding: 10px;
        position: relative;
        padding-top: 30px;
        background-color: #fcf1dc;
        line-height: 2;
        border-radius: 5px;
    }

    .expert_comments_date {
        text-align: right;
        margin-bottom: 10px
    }

    .expert_comments_ttl {
        position: absolute;
        background-color: #d82300;
        top: -25px;
        padding: 5px 10px;
        font-size: 17px;
        color: white;
        border-radius: 15px 15px 0px 0px;
    }

    .profile_area {
        display: flex;
        padding: 10px;
        border-top: 1px solid #c3c3c3;
    }

    .expert_comments {
        margin-bottom: 10px;
    }

    .profile_text {
        border-radius: 5px;
    }

    .expert_comments_section {
        margin-top: 2rem;
    }

    .profile_area img {
        width: 100%;
        border: 1px solid #c3c3c3;
        border-radius: 5px;
    }

    .profile_img_wrap {
        max-width: 150px;
        position: relative;
        height: fit-content;
        margin-right: 10px;
    }


    .expert_comments_section {
        overflow: initial;
    }

    .expert_comments .expert_comments_section:nth-child(2) {
        display: none;
    }

    .name_text {
        position: absolute;
        bottom: 1px;
        background-color: #ffffff;
        width: calc(100% - 2px);
        text-align: center;
        left: 1px;
        border-radius: 0 0 4px 4px;

    }



    @media (max-width: 1100px) {
        .profile_img_wrap {
            max-width: 120px;
        }

        .profile_area {
            z-index: 10;
            align-items: flex-start;
            position: relative;
        }

        .profile_text {
            width: 100%;
            line-height: 1.3;
            font-size: 12px;
        }

        .expert_comments_section_wrap:after {
            left: 75%;
        }


        .expert_comments {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .expert_comments_section {
            margin-bottom: 1rem;
        }



        .expert_comments_section_wrap:after {
            border-right: 45px solid #fcf1dc00;
        }

        .expert_comments {
            position: relative;
        }

        .expert_comments_section_wrap {
            padding: 10px;

        }

        .expert_comments_ttl {
            position: initial;
            width: 100%;
        }

        .name_text {
            font-size: 12px;
        }
    }
</style>

<style>
    .table_pt td {
        width: 50%;
    }

    .expert_recent_comment {
        background: #fcf1dc;
        border: 1px solid #c3c3c3;
        padding: 1em;
        border-radius: 5px;
        margin: 50px auto;
        overflow: visible;
    }

    .expert_recent_comment .ex_comment_headline {
        background: #d82300;
        color: #fff;
        width: fit-content;
        line-height: 1;
        padding: .75em 1em;
        border-radius: 15px 15px 0 0;
        margin-top: -2.25em !important;
        margin-bottom: .5em;
    }

    .expert_recent_comment .ex_comment_wrap {
        padding-bottom: 1em;
        border-bottom: 1px solid #c3c3c3;
    }

    .expert_recent_comment .ex_comment_wrap .ex_comment {
        text-align: justify;
        font-size: min(4vw, 16px);
        line-height: 1.8;
        padding-bottom: 1em;
    }

    .expert_recent_comment .ex_comment_wrap .ex_comment_postdate {
        text-align: right;
    }

    .expert_recent_comment .ex_meta_wrap {
        padding-top: 1em;
        display: flex;
        align-items: flex-start;
    }

    .expert_recent_comment .ex_meta_wrap .ex_persona {
        width: min(33%, 140px);
        border-radius: 5px;
        border: 1px solid #c3c3c3;
        background: #fff;
    }

    .expert_recent_comment .ex_meta_wrap .ex_persona .ex_photo img {
        width: 100%;
        height: auto;
    }

    .expert_recent_comment .ex_meta_wrap .ex_persona .ex_name {
        line-height: 1;
        font-size: min(4vw, 16px);
        padding: .5em .5em;
        text-align: center;
    }

    .expert_recent_comment .ex_meta_wrap .ex_prof {
        padding-left: 1em;
        width: calc(100% - min(33%, 140px));
    }

    @media (max-width: 787px) {
        .expert_recent_comment .ex_meta_wrap .ex_persona .ex_name {
            font-size: 12px;
        }
    }
</style>

<!-- 金専門家コメントコンテンツスタイル金カテから移植箇所 -->


<style>
    .td--item {
        position: relative;
    }

    .text-red {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        margin-left: 2px;
        color: red;
    }

    .shop__detail--rateTable table tr td>span {
        position: relative;
    }

    .shop__detail--rateTable table tr th.rateTable--pd {
        background: #1b982a;
    }

    .text-blue {
        color: #0088ff;
    }

    .shop__detail--rateTable .titleH4 {
        margin: 1.5rem 0 1rem;
    }

    .table_sv td {
        width: 30%;
    }

    @media screen and (max-width: 600px) {
        .td--item {
            display: block;
        }

        .text-red {
            display: block !important;
            position: unset !important;
            margin-top: 5px;
            /* 上の要素との間隔を設定 */
        }
    }

    @media screen and (max-width: 767px) {
        table.table_pt tr td {
            width: 50%;
        }
    }
</style>

<section></section>

<section id="" class=" shop__detail--rate rateSection">
    <div class="shop__detail--rateTable" id="ratebox" v-cloak="">
        <h3 class="titleSub">
        Referensi harga beli emas dan platinum
        </h3>
        <p>
        Ini adalah harga emas, platinum, dan perak berdasarkan berbagai jenisnya<br>
        Harga yang tertera dibawah ini bervariasi tergantung bentuk item, untuk itu silakan menghubungi kami melalui telepon untuk detailnya.
        </p>
        <br>
        <p class="shop__detail__time visible text--right">
        Terakhir diperbarui:&nbsp;&nbsp;<?php echo $price_update; ?>
        </p>
        <h4 class="titleH4">
           Referensi harga pembelian Emas per gram
        </h4>
        <table>
            <tbody>
                <tr>
                    <th class="rateTable--gold" colspan="3">
                       Referensi harga pembelian Emas per gram

                    </th>
                </tr>
                <tr>
                    <td>Ingots（gold）<span><span>S$</span><?php echo number_format($price_gold); ?>
                            <br class="is-sp">
                            <?php if ($price_gold_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $price_gold_diff; ?></span>
                            <?php elseif ($price_gold_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $price_gold_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K24<span><span>S$</span><?php echo number_format($k24_price); ?>
                            <br class="is-sp">
                            <?php if ($k24_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k24_price_diff; ?></span>
                            <?php elseif ($k24_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k24_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K23<span><span>S$</span><?php echo number_format($k23_price); ?>
                            <br class="is-sp">
                            <?php if ($k23_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k23_price_diff; ?></span>
                            <?php elseif ($k23_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k23_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>K22<span><span>S$</span><?php echo number_format($k22_price); ?>
                            <br class="is-sp">
                            <?php if ($k22_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k22_price_diff; ?></span>
                            <?php elseif ($k22_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k22_price_diff; ?></span>
                            <?php endif; ?>
                    </td>

                    <td>K21.6<span><span>S$</span><?php echo number_format($k21_price); ?>
                            <br class="is-sp">
                            <?php if ($k21_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k21_price_diff; ?></span>
                            <?php elseif ($k21_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k21_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K20<span><span>S$</span><?php echo number_format($k20_price); ?>
                            <br class="is-sp">
                            <?php if ($k20_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k20_price_diff; ?></span>
                            <?php elseif ($k20_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k20_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>K18<span><span>S$</span><?php echo number_format($k18_price); ?>
                            <br class="is-sp">
                            <?php if ($k18_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k18_price_diff; ?></span>
                            <?php elseif ($k18_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k18_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K14<span><span>S$</span><?php echo number_format($k14_price); ?>
                            <br class="is-sp">
                            <?php if ($k14_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k14_price_diff; ?></span>
                            <?php elseif ($k14_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k14_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K12<span><span>S$</span><?php echo number_format($k12_price); ?>
                            <br class="is-sp">
                            <?php if ($k12_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k12_price_diff; ?></span>
                            <?php elseif ($k12_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k12_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>K10<span><span>S$</span><?php echo number_format($k10_price); ?>
                            <br class="is-sp">
                            <?php if ($k10_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k10_price_diff; ?></span>
                            <?php elseif ($k10_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k10_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K9<span><span>S$</span><?php echo number_format($k9_price); ?>
                            <br class="is-sp">
                            <?php if ($k9_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k9_price_diff; ?></span>
                            <?php elseif ($k9_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k9_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>K8<span><span>S$</span><?php echo number_format($k8_price); ?>
                            <br class="is-sp">
                            <?php if ($k8_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k8_price_diff; ?></span>
                            <?php elseif ($k8_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k8_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>K5<span><span>S$</span><?php echo number_format($k5_price); ?>
                            <br class="is-sp">
                            <?php if ($k5_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k5_price_diff; ?></span>
                            <?php elseif ($k5_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k5_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <th class="rateTable--gold" colspan="2">
                        Referensi harga pembelian campuran Emas dan Platinum per gram
                    </th>
                </tr>
                <tr>
                    <td id="pt900k18">Pt900 / K18 half<span><span>S$</span><?php echo number_format($k18_pt900_half); ?>
                            <br class="is-sp">
                            <?php if ($k18_pt900_half_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k18_pt900_half_diff; ?></span>
                            <?php elseif ($k18_pt900_half_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k18_pt900_half_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td id="pt850k18">Pt850 / K18 half<span><span>S$</span><?php echo number_format($k18_pt850_half); ?>
                            <br class="is-sp">
                            <?php if ($k18_pt850_half_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $k18_pt850_half_diff; ?></span>
                            <?php elseif ($k18_pt850_half_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $k18_pt850_half_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>

        <br><br>

        <div class="call_cta is-pc">
            <img src="../images/gold/share_PC.webp">
            <img src="../images/gold/compare_PC.webp">
            <img src="../images/gold/yakusoku_PC.webp">
        </div>
        <div class="call_cta is-sp">
            <img src="../images/gold/share_SP.webp">
            <img src="../images/gold/compare_SP.webp">
            <img src="../images/gold/yakusoku_SP.webp">
        </div>
        <!-- 今日の金相場に対する専門家の評価 -->

        <table class="table_pt">
            <tbody>
                <tr>
                    <th class="rateTable--pt" colspan="2">
                        Referensi harga pembelian Platinum per gram
                    </th>
                </tr>
                <tr>
                    <td>Ingots（platinum）<span><span>S$</span><?php echo number_format($price_pt); ?>
                            <br class="is-sp">
                            <?php if ($price_pt_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $price_pt_diff; ?></span>
                            <?php elseif ($price_pt_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $price_pt_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Pt1000<span><span>S$</span><?php echo number_format($pt1000_price); ?>
                            <br class="is-sp">
                            <?php if ($pt1000_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt1000_price_diff; ?></span>
                            <?php elseif ($pt1000_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt1000_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Pt950<span><span>S$</span><?php echo number_format($pt950_price); ?>
                            <br class="is-sp">
                            <?php if ($pt950_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt950_price_diff; ?></span>
                            <?php elseif ($pt950_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt950_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Pt900<span><span>S$</span><?php echo number_format($pt900_price); ?>
                            <br class="is-sp">
                            <?php if ($pt900_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt900_price_diff; ?></span>
                            <?php elseif ($pt900_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt900_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Pt850<span><span>S$</span><?php echo number_format($pt850_price); ?>
                            <br class="is-sp">
                            <?php if ($pt850_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt850_price_diff; ?></span>
                            <?php elseif ($pt850_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt850_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Pt650<span><span>S$</span><?php echo number_format($pt650_price); ?>
                            <br class="is-sp">
                            <?php if ($pt650_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt650_price_diff; ?></span>
                            <?php elseif ($pt650_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt650_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>Pt500<span><span>S$</span><?php echo number_format($pt500_price); ?>
                            <br class="is-sp">
                            <?php if ($pt500_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt500_price_diff; ?></span>
                            <?php elseif ($pt500_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt500_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Pt100<span><span>S$</span><?php echo number_format($pt100_price); ?>
                            <br class="is-sp">
                            <?php if ($pt100_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $pt100_price_diff; ?></span>
                            <?php elseif ($pt100_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $pt100_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <th class="rateTable--pd" colspan="3">
                    Referensi harga pembelian Palladium per gram
                    </th>
                </tr>
                <tr>
                    <td>Ingots（palladium）<span><span>S$</span><?php echo number_format($price_pd); ?>
                            <br class="is-sp">
                            <?php if ($price_pd_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $price_pd_diff; ?></span>
                            <?php elseif ($price_pd_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $price_pd_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table_sv">
            <tbody>
                <tr>
                    <th class="rateTable--sv" colspan="3">
                    Referensi harga pembelian Perak per gram
                    </th>
                </tr>
                <tr>
                    <td>Ingots<br class="is-sp">
                        （silver）<span><span>S$</span><?php echo number_format($price_sv); ?>
                            <br class="is-sp">
                            <?php if ($price_sv_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $price_sv_diff; ?></span>
                            <?php elseif ($price_sv_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $price_sv_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Sv1000<span><span>S$</span><?php echo number_format($sv1000_price); ?>
                            <br class="is-sp">
                            <?php if ($sv1000_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $sv1000_price_diff; ?></span>
                            <?php elseif ($sv1000_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $sv1000_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                    <td>Sv925<span><span>S$</span><?php echo number_format($sv925_price); ?>
                            <br class="is-sp">
                            <?php if ($sv925_price_diff > 0) : ?>
                                <span class="text-red" style="font-size: 0.5em;">S$+<?php echo $sv925_price_diff; ?></span>
                            <?php elseif ($sv925_price_diff < 0) : ?>
                                <span class="text-blue"><span style="font-size: 0.7em;">S$</span><?php echo $sv925_price_diff; ?></span>
                            <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<section></section>