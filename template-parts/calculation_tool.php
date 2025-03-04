<?php $slug = get_post(get_the_ID())->post_name; ?>

<?php if ($slug == 'kinka-ginka') : ?>
    <style>
        #simulation {
            margin-bottom: 2rem;
        }

        .shop__detail--rateSimulation .rateSimulation__wrap {
            align-items: flex-end !important;
        }

        @media (min-width: 768px) {
            .rateSimulation__wrap.form__wrap li label+.form__liner {
                margin-top: 51px !important;
            }

            .shop__detail--rateSimulation .rateSimulation__wrap li.form--symbol {
                margin: 0;
                padding: .75rem 0 .75rem 0;
            }
        }

        .form__wrap .form__liner select {
            padding: .75rem 40px .75rem 25px !important;
        }

        .form__wrap .form__liner input {
            padding: .45rem 40px .45rem 25px !important;
        }

        .w_tabs {
            display: flex;
            border-radius: 5px;
            overflow: hidden;
            width: fit-content;
            margin: 0 auto .5em auto;
        }

        .w_tabs .w_tab {
            width: 50%;
            font-size: 14px;
            text-align: center;
            background: #d3d3d3;
            color: #545454;
            cursor: pointer;
            line-height: 1;
            padding: .75em 1em;
            white-space: nowrap;
        }

        .w_tabs .w_tab.active {
            background: #d82300;
            color: #fff;
        }

        .w_unit {
            display: none;
        }

        .w_unit.active {
            display: block;
        }

        .weight::placeholder {
            font-size: 14px;
        }

        .weight:focus::placeholder {
            opacity: 0;
        }
    </style>
<?php endif; ?>


<style>
    #gold .form__wrap .form__liner--result::after {
        content: "S$";
    }
</style>
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

// JPYからSGDのレートを取得
$exchange_rate_src = $rate_data['rates']['SGD'];
$exchange_rate = $exchange_rate_src * 0.919;
$pt_exchange_rate = $exchange_rate_src * 0.976;
$gold_commission = 40 * $exchange_rate_src;
$pt1000_commission = 70 * $exchange_rate_src;
$pt_commission = 80 * $exchange_rate_src;
$sv_commission = 5 * $exchange_rate_src;


// 各価格をシンガポールドルに変換
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

?>

<section id="simulation" class="rateSection">

    <div class="shop__detail--rateSimulation">
        <div class="renew_202404_calctool_title is-sp">
            Kalkulator harga emas hari ini
            <img
                class="renew_2024_market_update_title"
                src="../images/gold/tool_title_image.png">
        </div>
        <div class="renew_202404_graph_title_lead is-sp"></div>
        <h3 class="titleSub is-pc">Kalkulator harga emas hari ini</h3>
        <p class="is-pc"></p>
        <ul class="rateSimulation__wrap form__wrap">
            <li>
                <label for="type">harga diri</label>
                <div class="form__liner">
                    <select id="rateSimulation--select">
                        <option value="" selected="selected">select type</option>
                        <option value="<?php echo $price_gold; ?>">Gold Ingots（gold）</option>
                        <option value="<?php echo $k24_price; ?>" <?php if ($slug == "24kin") {
                                                                        echo "selected";
                                                                    }; ?>>K24</option>
                        <option value="<?php echo $k23_price; ?>" <?php if ($slug == "23kin") {
                                                                        echo "selected";
                                                                    }; ?>>K23</option>
                        <option value="<?php echo $k22_price; ?>" <?php if ($slug == "22kin") {
                                                                        echo "selected";
                                                                    }; ?>>K22</option>
                        <option value="<?php echo $k21_price; ?>" <?php if ($slug == "21-6kin") {
                                                                        echo "selected";
                                                                    }; ?>>K21.6</option>
                        <option value="<?php echo $k20_price; ?>" <?php if ($slug == "20kin") {
                                                                        echo "selected";
                                                                    }; ?>>K20</option>
                        <option value="<?php echo $k18_price; ?>" <?php if ($slug == "18kin") {
                                                                        echo "selected";
                                                                    }; ?>>K18</option>
                        <?php if ($slug == "17kin") : ?><option selected value="<?php echo $k17_price; ?>">K17</option><?php endif; ?>
                        <option value="<?php echo $k14_price; ?>" <?php if ($slug == "14kin") {
                                                                        echo "selected";
                                                                    }; ?>>K14</option>
                        <option value="<?php echo $k12_price; ?>" <?php if ($slug == "12kin") {
                                                                        echo "selected";
                                                                    }; ?>>K12</option>
                        <option value="<?php echo $k10_price; ?>" <?php if ($slug == "10kin") {
                                                                        echo "selected";
                                                                    }; ?>>K10</option>
                        <option value="<?php echo $k9_price; ?>" <?php if ($slug == "9kin") {
                                                                        echo "selected";
                                                                    }; ?>>K9</option>
                        <option value="<?php echo $k8_price; ?>" <?php if ($slug == "8kin") {
                                                                        echo "selected";
                                                                    }; ?>>K8</option>
                        <?php if ($slug == "7kin") : ?><option selected value="<?php echo $k7_price; ?>">K7</option><?php endif; ?>
                        <option value="<?php echo $k5_price; ?>" <?php if ($slug == "5kin") {
                                                                        echo "selected";
                                                                    }; ?>>K5</option>
                        <option value="<?php echo $price_pt; ?>">Gold Ingots（platinum）</option>
                        <option value="<?php echo $pt1000_price; ?>" <?php if ($slug == "pt1000") {
                                                                            echo "selected";
                                                                        }; ?>>Pt1000</option>
                        <option value="<?php echo $pt950_price; ?>" <?php if ($slug == "pt950") {
                                                                        echo "selected";
                                                                    }; ?>>Pt950</option>
                        <option value="<?php echo $pt900_price; ?>" <?php if ($slug == "pt900") {
                                                                        echo "selected";
                                                                    }; ?>>Pt900</option>
                        <option value="<?php echo $pt850_price; ?>" <?php if ($slug == "pt850") {
                                                                        echo "selected";
                                                                    }; ?>>Pt850</option>
                        <option value="<?php echo $pt650_price; ?>" <?php if ($slug == "pt650") {
                                                                        echo "selected";
                                                                    }; ?>>Pt650</option>
                        <option value="<?php echo $pt500_price; ?>" <?php if ($slug == "pt500") {
                                                                        echo "selected";
                                                                    }; ?>>Pt500</option>
                        <option value="<?php echo $pt100_price; ?>" <?php if ($slug == "pt100") {
                                                                        echo "selected";
                                                                    }; ?>>Pt100</option>
                        <option value="<?php echo $k18_pt900_half; ?>">Pt900/K18 half</option>
                        <option value="<?php echo $k18_pt850_half; ?>">Pt850/K18 half</option>
                    </select>
                </div>
            </li>
            <li class="form--symbol">
                <p>×</p>
            </li>
            <li>
                <label for="weight">Weight</label>
                <div class="form__liner form__liner--weight w_unit w_gram active">
                    <input type="number" class="weight" min="1" max="100000" value="1" placeholder="グラムを入力">
                </div>
            </li>
            <li class="form--symbol">
                <p>=</p>
            </li>
            <li>
                <label for="result">Referensi daftar harga pembelian</label>
                <div class="form__liner form__liner--result">
                    <input type="text" id="answer" readonly="readonly" class="boxstyle">
                </div>
            </li>
        </ul>
    </div>
    <!-- /.shop__detail--rateSimulation -->
</section>





<script>
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
</script>

<section></section>