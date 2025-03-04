<?php
/* Template Name: テストテンプレート */
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php get_template_part('head2'); ?>


  <!-- local css -->


  <link rel="stylesheet" type="text/css" href="../css/jewelry.min.css">
  <link rel="stylesheet" href="../css/renew202404_2.css">
  <link rel="stylesheet" href="../css/vertical-m.css">

  <link rel="stylesheet" type="text/css" href="../css/shared.css">
  <link rel="stylesheet" type="text/css" href="../css/daiya.css">
  <title><?php echo get_the_title(); ?></title>
</head>

<?php wp_head(); ?>

<body id="jewelry">
  <?php get_header('common'); ?>

  <div id="topic__path" class="topic__path">
    <ol class="topic__path--list">
      <li class="topic__path--item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="/">
          <span itemprop="name">收購專門店・OTAKARAYA首頁</span>
        </a>
        <meta itemprop="position" content="1">
      </li>
      <li class="topic__path--item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
        <span itemprop="name">鑽石・寶石收購</span>
        <meta itemprop="position" content="2">
      </li>
    </ol>
  </div>
  <div class="fv_img_wrap"></div>


  <div class="fv_img_wrap">
    <img class="is-pc" src="../images/daiya/jewelry_FV_PC_HK.webp" alt="損したくない!?なら絶対!高価買取「OTAKARAYA」">

    <img class="is-sp" src="../images/daiya/jewelry_FV_SP_HK.webp" alt="損したくない!?なら絶対!高価買取「OTAKARAYA」">
  </div>
  <!-- <div class="under_mv">
        <img class="is-pc" style="max-width: 1400px; margin: auto; width: 100%; margin-top: 1rem;" src="../images/daiya/2024_1216-1222キャンペーン_daiya_PC.webp" alt="買取金額UP!">
        <img class="is-sp" style="width:100%; margin-top: 1rem;" src="../images/daiya/2024_1216-1222キャンペーン_daiya_SP@2x.webp" alt="買取金額UP!">
    </div>
    <div class="renew_2024_fv_202404 is-sp">
        <a href="../web_contact.html" class="gtm-cta-fv">
            <img class="renew_2024_fv_bar202404" src="../images/daiya/Email_appraisal_jewelry_01.webp" alt="今すぐ査定額を知りたい方！">
        </a>
    </div> -->

  <main class="contents">
    <article class="contents__left">
      <section>
        <!--     ▼▼▼ top_h2_text▼▼▼     -->
        <h2 class="titleHeading top_h2_text">想高價放售和鑑定手錶就要來「OTAKARAYA」</h2> <!--     ▲▲▲ top_h2_text▲▲▲     -->
        <div class="head_text">鑽石是在地球深處高溫高壓下形成的最硬天然物質，
          其評價基於4C標準（克拉、顏色、淨度、切工）。<br />
          越接近無色的鑽石價值越高，切工的品質則影響其光輝。<br />
          「OTAKARAYA」目前正高價收購各類鑽石珠寶，
          如戒指和項鍊。專業鑑定師將準確評估您的鑽石品質，
          並提供滿意的價格。</div>
      </section>
      <section class="simple_cta_top">
        <div class="kv_area">
          <p class="is-pc"><img src="../images/daiya/diamond_banner_PC_HK.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
          </p>
          <p class="is-sp"><img src="../images/daiya/diamond_banner_SP_HK.webp" alt="眠っているダイアモンド　今、売らないと損するかも！？">
          </p>
        </div>
      </section>

      <?php get_template_part('template-parts/assessment_cta'); ?>



      <?php get_template_part('template-parts/daiya_parts'); ?>

      <!-- MOD_20240417 -->
      <!-- MOD_20240417 -->
      <div class="renew_2024_dia_titlebox is-sp">
        <h2 class="renew_2024_dia_title_h2">
          <img class="renew_2024_dia_title_l_leaf"
            src="../images/daiya/dialeaf_l_202404.png">
          <img class="renew_2024_dia_title_r_leaf"
            src="../images/daiya/dialeaf_r_202404.png">
          <p>鑽石的收購參考價格</p>
        </h2>
        <div class="renew_2024_dia_title_lead">
          <p>收購參考金額會根據時期和市場變動，歡迎隨時洽詢。</p>
        </div>
      </div>
      <!-- MOD_20240417 -->

      <!-- MOD_20240417 ===================================================================== -->
      <div class="renew_2024_top_result_superbox is-sp">
        <div class="renew_2024_tab_superbox">
          <div class="renew_2024_tabbox wd_active"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
              src="../images/daiya/arrow_b_wh.png"><img
              class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
              src="../images/daiya/arrow_b_br.png">戒指</div>
          <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
              src="../images/daiya/arrow_b_wh.png"><img
              class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
              src="../images/daiya/arrow_b_br.png">項鍊</div>
          <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
              src="../images/daiya/arrow_b_wh.png"><img
              class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
              src="../images/daiya/arrow_b_br.png">手鐲</div>
          <div class="renew_2024_tabbox"><img class="renew_2024_tab_arrow renew_2024_tab_arrow_wh"
              src="../images/daiya/arrow_b_wh.png"><img
              class="renew_2024_tab_arrow renew_2024_tab_arrow_br"
              src="../images/daiya/arrow_b_br.png">brooch</div>
          <div class="renew_2024_result_contentsbox" style="display: block;">
            <div class="renew_2024_result_contentsbox_flex">
              <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25167/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">K18 diamond ring 2.027 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,067,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25157/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.038 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">2,722,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25198/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/e067b3f2e82b77781fff1280b851e264-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.081 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">902,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25202/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.381 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">797,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25165/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.014 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,133,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25191/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.02 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,039,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25155/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.041 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">3,085,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-3carat/25163/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/35c50eeca24f55237026670b96a89506-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.587 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,138,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25159/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 5.227 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,787,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25193/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 2.378 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,006,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25161/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
                        decoding="async" loading="lazy" sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">K18 diamond ring 2.636 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">1,490,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
              <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25196/">
                  <div class="renew_2024_result_itembox">
                    <div class="renew_2024_result_item_image"><img width="150" height="150"
                        src="../images/daiya/171943538be9b67a3e95bc711cc8486e-150x150.webp"
                        class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
                        decoding="async" loading="lazy"
                        sizes="100vw"></div>
                    <div class="renew_2024_result_item_name">Pt･Pm900 diamond ring 3.109 ct</div>
                    <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                    <div class="renew_2024_result_item_price">968,000<span class="unit">&yen;</span></div>
                    <div class="renew_2024_result_item_arrow">
                      <div></div>
                    </div>
                  </div>
                </a></div>
            </div>
            <div class="flex_annitation">※圖片僅供參考<br>※收購參考金額適用於有鑑定書或證明書的物品。</div>

            <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a> -->
          </div>
        </div>
        <div class="renew_2024_result_contentsbox">
          <div class="renew_2024_result_contentsbox_flex">
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-10carat/25181/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt850・Pt900 diamond necklace 15 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">1,177,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25223/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/905423510ed336395bc889700fa304c4-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 3.22 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">962,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25227/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K14WG diamond necklace 12.89 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">886,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-9carat/25232/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond necklace 9.77 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">869,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25236/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">diamond necklace 10.5 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">858,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25234/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm850 diamond necklace 10 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">891,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25230/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond necklace 50.554 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">3,448,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25057/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.016 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">2,101,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25225/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm950 diamond necklace 1.15 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">1,237,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25061/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 1.57 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">1,655,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25195/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/b0502e2e155fdc41573e71404d3185af-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 2.259 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">1,056,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-04carat/26200/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">diamond necklace Pt・Pm850 0.449ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">29,700<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26203/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-150x150.jpg"
                      class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">diamond necklace 1carat pt850</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">49,500<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26205/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-150x150.jpg"
                      class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">diamond necklace 1carat Pt850・Pt900 combi</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">47,300<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/26178/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">diamondnecklace 1.2carat</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">93,500<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25204/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/28830920d24c470a67e4e8e9e169e075-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond necklace 11.56 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">996,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
          </div>
          <div class="flex_annitation">※圖片僅供參考
            <br>※收購參考金額適用於有鑑定書或證明書的物品。
          </div>

          <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                    </div> -->
        </div>
        <div class="renew_2024_result_contentsbox">
          <div class="renew_2024_result_contentsbox_flex">
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/bracelet/25119/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">18KT diamond Bracelet</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">331,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25123/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/67db17377b3f5a80d5f285853711b688-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                      loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">325,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25121/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/8b866539057e26196caf7e304f67fee3-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet 2.05 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">326,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25090/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet 5.29 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">470,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25088/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet 3.134 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">543,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25148/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/ba044445792b4001d0473643075c8c7c-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet 4.48 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">258,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25114/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt850 K18 diamond Bracelet 5 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">363,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-08carat/25133/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond Bracelet 0.85 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">313,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25104/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">441,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25135/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-150x150.webp"
                      class="attachment-thumbnail size-thumbnail"
                      alt="Pt･Pm850 diamond Bracelet バングル 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm850 diamond Bracelet バングル 5.00 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">286,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-10carat/25049/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond Bracelet 10.52 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">671,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/bracelet/25117/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                      loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond Bracelet</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">353,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
          </div>
          <div class="flex_annitation">※圖片僅供參考
            <br>※收購參考金額適用於有鑑定書或證明書的物品。
          </div>

          <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                    </div> -->
        </div>
        <div class="renew_2024_result_contentsbox">
          <div class="renew_2024_result_contentsbox_flex">
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-2carat/25039/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond brooch 2.18 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">209,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25031/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/b41350ace8209492b075c4cf7b72d914-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond brooch 2.05 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">265,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25043/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
                      loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond brooch</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">196,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-brooch/25047/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
                      loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond brooch</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">183,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25045/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond brooch 3 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">191,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-3carat/25041/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/aa21bc1a6b34b677709687329b008c94-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt900 K14WG diamond brooch 3 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">199,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-01carat/25023/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 K18WG diamond brooch 0.171 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">278,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap wd_long"><a href="/daiya/result/daiya/daiya-1carat/25029/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond brooch 1.33 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">206,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-1carat/25025/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/443950510d383275461a64262c74a98c-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond brooch 1.708 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">270,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-4carat/25018/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/d8b27c064d525351330b2972bb04d351-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18WG diamond brooch 4.99 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">404,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-2carat/25027/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">Pt･Pm900 diamond brooch 2.98 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">232,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a></div>
            <div class="renew_2024_result_itembox_wrap"><a href="/daiya/result/daiya/daiya-5carat/25021/">
                <div class="renew_2024_result_itembox">
                  <div class="renew_2024_result_item_image"><img width="150" height="150"
                      src="../images/daiya/0286d9de92e1490064443403958c7cc3-150x150.webp"
                      class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
                      decoding="async" loading="lazy" sizes="100vw"></div>
                  <div class="renew_2024_result_item_name">K18 diamond brooch 5.4 ct</div>
                  <div class="renew_2024_result_item_kaitori">收購參考價格</div>
                  <div class="renew_2024_result_item_price">374,000<span class="unit">&yen;</span></div>
                  <div class="renew_2024_result_item_arrow">
                    <div></div>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="flex_annitation">※圖片僅供參考
            <br>※收購參考金額適用於有鑑定書或證明書的物品。
          </div>
          <!-- <div class="btn__wrap btn__red"><a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a></div> -->
        </div>
      </div>


      </div>
      <section>
        <div class="titleMain titleMain--wrapper is-pc">
          <h2 class="titleMain--main">
            鑽石的收購參考價格 </h2>
          <div class="titleMain--lead">
            <p>收購參考金額會根據時期和市場變動，歡迎隨時洽詢。</p>
          </div>
        </div>
        <div class="flex flex--hasItem4">
          <!-- タブメニュー -->
          <ul class="flex__tab is-pc">
            <!-- タブ部分 -->
            <li class="tab__item active"><a>戒指</a></li>
            <li class="tab__item "><a>項鍊</a></li>
            <li class="tab__item "><a>手鐲</a></li>
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
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/171943538be9b67a3e95bc711cc8486e-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.109 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 3.109 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">968,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25202/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/4e6c6fbaed6c2eae401cc2bf9780c06a-1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.381 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 2.381 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">797,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25198/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/e067b3f2e82b77781fff1280b851e264-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.081 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 2.081 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">902,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25193/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/ba3ba147e1e10201825cbf7ed29a2027-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.378 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 2.378 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,006,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25191/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/fc1b88445fdfed2b273060b1abb8a780-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.02 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 3.02 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,039,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25167/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/27b0e8037216bcbeecb235ed5c88282a-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.027 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond ring 2.027 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,067,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25165/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/e5873ef7b27116ff2147fac0a8855aa4-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.014 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 3.014 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,133,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25163/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/35c50eeca24f55237026670b96a89506-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.587 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 3.587 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,138,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25161/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/da8fa4b2753b149e5662d9dda72976bb-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond ring 2.636 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond ring 2.636 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,490,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-5carat/25159/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/60fdf5d0f8ff8a5f1c109347692934f7-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 5.227 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 5.227 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,787,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25157/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/9e2d4f73e1d5b51f77554fd10544a2c5-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 2.038 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 2.038 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">2,722,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25155/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/78601aaaf41f819c9d8541725dcc8bdc-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond ring 3.041 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond ring 3.041 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">3,085,000<span>&yen;</span></p>
                  </div>
                </li>

              </div>
              <div class="flex_annitation">※圖片僅供參考
                <br>※收購參考金額適用於有鑑定書或證明書的物品。
              </div>
              <!-- <div class="btn__wrap btn__red">
                                <a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                            </div> -->
            </div>
            <div class="flex__content  " style="align-items: stretch">
              <div id="flex-slider" class="content__list flex--slide">
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/26205/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/ae65a7f7eb26d47380d54fa69f44687e-150x150.jpg"
                          class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat Pt850・Pt900 combi"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">diamond necklace 1carat Pt850・Pt900 combi</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">47,300<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/26203/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/c4e08d8f36be3877e44fc641d6a7648d-150x150.jpg"
                          class="attachment-thumbnail size-thumbnail" alt="diamond necklace 1carat pt850"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">diamond necklace 1carat pt850</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">49,500<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-04carat/26200/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/b8f9a66b7c1c0eaf3a43bd5dbb20d788-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="diamond necklace Pt・Pm850 0.449ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">diamond necklace Pt・Pm850 0.449ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">29,700<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/26178/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/99856989f40e8b5ee2e353374eafeee8-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="diamondnecklace 1.2carat"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">diamondnecklace 1.2carat</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">93,500<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25236/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/b8c211efa76fc22dc3cc0f32a8ff6bf9-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="diamond necklace 10.5 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">diamond necklace 10.5 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">858,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25234/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/042b8aef3c42fa8d689152c8e540b6ee-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond necklace 10 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm850 diamond necklace 10 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">891,000<span>&yen;</span></p>
                  </div>
                </li>
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-9carat/25232/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/9bb0dd2b83e15a6821b8c8b039e07836-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 9.77 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond necklace 9.77 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">869,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25230/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/749521b6c40a5dc258267feda0bd17cd-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond necklace 50.554 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond necklace 50.554 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">3,448,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25227/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/1bffa42f3c50b684bda418a2524eba53-1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K14WG diamond necklace 12.89 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K14WG diamond necklace 12.89 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">886,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/25225/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/3d04d3d616ad869772fa4a41f5b33ab5-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm950 diamond necklace 1.15 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm950 diamond necklace 1.15 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,237,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25223/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/905423510ed336395bc889700fa304c4-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 3.22 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond necklace 3.22 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">962,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25204/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/28830920d24c470a67e4e8e9e169e075-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 11.56 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond necklace 11.56 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">996,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25195/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/b0502e2e155fdc41573e71404d3185af-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.259 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond necklace 2.259 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,056,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25181/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/8e8561b5e8f90315505686d38c99fb16-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt850・Pt900 diamond necklace 15 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt850・Pt900 diamond necklace 15 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,177,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/25061/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/4167e23364eb7df4a8f8b88a9b5fe4e0-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 1.57 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond necklace 1.57 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">1,655,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25057/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/4cedb8d9fb64e09f1efb16e549c7bd74-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond necklace 2.016 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond necklace 2.016 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">2,101,000<span>&yen;</span></p>
                  </div>
                </li>

              </div>
              <div class="flex_annitation">※圖片僅供參考
                <br>※收購參考金額適用於有鑑定書或證明書的物品。
              </div>
              <!-- <div class="btn__wrap btn__red">
                                <a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                            </div> -->
            </div>
            <div class="flex__content  " style="align-items: stretch">
              <div id="flex-slider" class="content__list flex--slide">
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-4carat/25148/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/ba044445792b4001d0473643075c8c7c-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 4.48 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet 4.48 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">258,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-5carat/25135/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/a5f4a4a3014e58b0c2decd5ed20c4de7-150x150.webp"
                          class="attachment-thumbnail size-thumbnail"
                          alt="Pt･Pm850 diamond Bracelet バングル 5.00 ct" decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm850 diamond Bracelet バングル 5.00 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">286,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-08carat/25133/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/1f0316c4c9d73ab899709dde55b81aab-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 0.85 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond Bracelet 0.85 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">313,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/bracelet/25123/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/67db17377b3f5a80d5f285853711b688-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                          loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">325,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25121/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/8b866539057e26196caf7e304f67fee3-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 2.05 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet 2.05 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">326,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/bracelet/25119/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/5a0fa1c0cff0f36c526083ff2533fe7b-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="18KT diamond Bracelet"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">18KT diamond Bracelet</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">331,000<span>&yen;</span></p>
                  </div>
                </li>
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/bracelet/25117/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/672cac14d58a952c1ba49df15dd222c1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet" decoding="async"
                          loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">353,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-5carat/25114/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/f1517cbda0710f7320acec8c0498d1fb-1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt850 K18 diamond Bracelet 5 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt850 K18 diamond Bracelet 5 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">363,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/bracelet/25104/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/ddc9da983dc27b73737e8886f3d12ebd-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm850 diamond Bracelet"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm850 diamond Bracelet</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">441,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-5carat/25090/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/29da05cd0e7a127f2e8c2566286295d0-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 5.29 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet 5.29 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">470,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25088/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/ac2fa71c8317fa80b6c33f35d0ac1683-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond Bracelet 3.134 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond Bracelet 3.134 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">543,000<span>&yen;</span></p>
                  </div>
                </li>
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-10carat/25049/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/c2c4b281193055a9c2dc5e997b440362-1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond Bracelet 10.52 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond Bracelet 10.52 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">671,000<span>&yen;</span></p>
                  </div>
                </li>

              </div>
              <div class="flex_annitation">※圖片僅供參考
                <br>※收購參考金額適用於有鑑定書或證明書的物品。
              </div>
              <!-- <div class="btn__wrap btn__red">
                                <a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                            </div> -->
            </div>
            <div class="flex__content  " style="align-items: stretch">
              <div id="flex-slider" class="content__list flex--slide">
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25045/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/df4c68c6e996ce36c5bb65a08112cf11-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 3 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond brooch 3 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">191,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-brooch/25047/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/4fd501583effa092f8c496f7f84ca0cd-1-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch" decoding="async"
                          loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond brooch</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">183,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-brooch/25043/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/94102e05583b4c1d77d4d41b55bcafe2-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch" decoding="async"
                          loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond brooch</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">196,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-3carat/25041/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/aa21bc1a6b34b677709687329b008c94-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt900 K14WG diamond brooch 3 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt900 K14WG diamond brooch 3 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">199,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25039/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/fd818dd6f22b09f248ca991dd98e1f8f-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.18 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond brooch 2.18 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">209,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25031/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/b41350ace8209492b075c4cf7b72d914-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 2.05 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond brooch 2.05 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">265,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/25029/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/c39bed3f70e373cc41ba4cc9425b3b50-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 1.33 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond brooch 1.33 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">206,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-2carat/25027/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/1321e1b44c713db4a8fe84d90d997001-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="Pt･Pm900 diamond brooch 2.98 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">Pt･Pm900 diamond brooch 2.98 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">232,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-1carat/25025/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/443950510d383275461a64262c74a98c-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 1.708 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond brooch 1.708 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">270,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-01carat/25023/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/85646796326ff0e1bf5466e1e457c20a-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 K18WG diamond brooch 0.171 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 K18WG diamond brooch 0.171 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">278,000<span>&yen;</span></p>
                  </div>
                </li>

                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-5carat/25021/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/0286d9de92e1490064443403958c7cc3-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18 diamond brooch 5.4 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18 diamond brooch 5.4 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">374,000<span>&yen;</span></p>
                  </div>
                </li>
                <li class="content__item content_item_wrap align_items_stretch_parent">
                  <a href="/daiya/result/daiya/daiya-4carat/25018/" class="img__link">
                    <div class="content_image_wrap">
                      <p class="content__image img">
                      </p>
                      <p class="content__image img"><img width="150" height="150"
                          src="../images/daiya/d8b27c064d525351330b2972bb04d351-150x150.webp"
                          class="attachment-thumbnail size-thumbnail" alt="K18WG diamond brooch 4.99 ct"
                          decoding="async" loading="lazy" sizes="100vw"></p>
                      <p></p>
                      <p class="content--name">K18WG diamond brooch 4.99 ct</p>
                    </div>

                  </a>
                  <div class="content__text">
                    <p class="content--title">收購參考價格</p>
                    <p class="content--price">404,000<span>&yen;</span></p>
                  </div>
                </li>
              </div>
              <div class="flex_annitation">※圖片僅供參考
                <br>※收購參考金額適用於有鑑定書或證明書的物品。
              </div>
              <!-- <div class="btn__wrap btn__red">
                                <a href="../daiya/result.html" class="gtm-list-result">查看鑽石參考收購價格表請點此</a>
                            </div> -->
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
              鑽石的高價收購・鑑定要點</h2>
            <div class="titleMain--lead">
              <p>許多人可能知道鑽石的價值是由「克拉」決定的，但其實其他4C指標，如切工、淨度和顏色也會影響其價值。<br><br>此外，品牌、設計、狀態和是否有附屬品等因素也會影響價格。在「OTAKARAYA」，我們不僅評估4C，還會充分考量這些附加價值，為客人提供最高的收購金額。</p>
            </div>
          </div>

          <div class="brandinfo brandinfo_red_repeat is-pc">
            <div class="fshoplist-target__list brand_about_repeat_parent_wrap open is_table">
              <div class="fshoplist-target--ttl">
                <h3 class="titleSub">決定鑽石價值的因素</h3>
              </div>

              <div class="fshoplist-target--item ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">Carat</h4>
                      <div class="points_content_text">
                        <p>克拉是表示寶石重量的單位，1克拉（ct）相當於0.2克。特別是在鑽石中，日本國內鑑別和鑑定機構發行的鑑定書會標示精確至小數點後三位，而一般交易中多數會標示至小數點後兩位。<br><br>

                          克拉數越大，寶石的稀有價值也會提高，價格隨之大幅上升。假設是兩個相同品質的鑽石，如一個的克拉數是兩倍，價格不一定是另一個的兩倍。特別是當大小達到0.5ct或1.0ct等整數時，價格通常會大幅上升。<br><br>

                          以理想的圓形明亮式切工為例，重量與大小的關係如下：0.1ct的鑽石直徑約3.0mm，0.5ct的鑽石直徑約5.2mm，1.0ct的鑽石直徑約6.5mm。
                        </p>
                        <div class="horizonlist--captionImg">
                          <!-- <span>01</span> -->
                          <img src="../images/daiya/diamond_carat_HK.webp" alt="Carat">
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
                        <p>切工是令鑽石最大限度地散發閃耀光芒的重要因素。切工優秀的鑽石可以有效地反射光線並散發出美麗的光芒。切工等級從「Excellent」到「Poor」的 5 個等級進行評估。<br><br>

                          評價主要根據「Proportion 比例」和「Finish 修飾」兩部分。Proportion是針對圓形明亮式切割的鑽石中各切面大小、比例和角度進行評估。此切割方式有一個能讓鑽石發揮最大光芒的「理想形狀」，根據與該形狀的接近程度分為 5 個等級。<br><br>

                          另外，Finish進一步分為「Polish 打磨」和「Symmetry 對稱性」。Polish是根據拋光鑽石表面的品質進行評估，對稱度是根據每個切面的位置和對稱性分為 5 個等級進行評估。<br><br>

                          切工評價由「Proportion 比例」、「Polish 打磨」和「Symmetry 對稱」三個項目構成，在所有這些項目中獲得最高評級「Excellent 極優」的鑽石，則被特別稱為「3EX（Triple Excellent） 」。此外，滿足一定條件呈現心形或箭頭圖案的鑽石也可能具有稱為「Heart & Cupid 八心八箭（H&C）」的特徵。<br><br>

                          具備「3EX」或「Heart & Cupid 八心八箭」的鑽石，其耀眼的光芒可以用肉眼看到，被譽為是最高級的切割，並廣受高度評價。</p>
                        <div class="horizonlist--captionImg">
                          <!-- <span>02</span> -->
                          <img src="../images/daiya/diamond_cut_HK.webp" alt="Cut">
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
                      <h4 class="titleH4 title--left">Clarity</h4>
                      <div class="points_content_text">
                        <p>鑽石內部通常有微小的內含物或表面瑕疵。這些內含物和表面瑕疵程度的評估稱為「Clarity 淨度」，由經驗豐富鑑定師使用10倍放大鏡進行檢查，並根據其程度分為11個等級。<br><br>

                          淨度的等級從最高級別的「FL（無瑕）」到最低級別的「I3」進行評價，具體如下：<br><br>

                          FL（無瑕）：即使由經驗豐富的鑑定師在 10 倍放大鏡下觀察，也看不到內含物或表面瑕疵。<br>
                          IF（內部無瑕）：10 倍放大鏡下看不到內含物，只能看到輕微的表面瑕疵。<br>
                          VVS1/VVS2（極輕微內含物）：在 10 倍放大鏡下很難找到內含物。<br>
                          VS1/VS2（輕微內含物）：在 10 倍放大鏡下可以看到輕微內含物。<br>
                          SI1/SI2（微內含物）：10 倍放大鏡下可清晰看到內含物。<br>
                          I1/I2/I3（有明顯內含物）：在10倍放大鏡下或用肉眼可以看到內含物，這大大影響了鑽石的淨度。<br><br>

                          淨度評估不僅取決於內含物的大小，還要綜合考慮「數量、位置、種類、可見度、顏色」等諸多因素從而決定。</p>
                        <div class="horizonlist--captionImg">
                          <!-- <span>03</span> -->
                          <img src="../images/daiya/diamond_clarity_HK.webp"
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
                      <h4 class="titleH4 title--left">Color</h4>
                      <div class="points_content_text">
                        <p>鑽石的顏色從 D 到 Z 等級。它從無色的 D 色開始，隨著顏色變深，等級依序排列至 Z 色。越接近D等級的鑽石價值越高，而顏色越濃，評價則會下降。<br><br>

                          此 4C 顏色評級主要適用於帶有黃色或棕色色調的鑽石。對於其他顏色（例如粉紅色或藍色）的鑽石被稱為「Fancy Color Diamonds 彩色鑽石」，並使用其他標準來評估。此外，如果顏色比Z等級更深，也被視為彩鑽。<br><br>

                          一般來說，帶有黃色或棕色色調的鑽石被認為價值較低，但如果顏色深到足以被歸類為彩色鑽石，則由於其稀有性而變得價值高。因此，顏色濃於Z等級的黃色鑽石，其交易價格往往高於無色的D等級鑽石。<br><br>

                          雖然您可能聽說鑽石的「螢光性」會影響其顏色等級，但實際影響微乎其微。螢光性是鑽石暴露在紫外線下時發出的藍白色光。 4C的顏色評估是基於黃色調，因此螢光性的藍白色可能會影響外觀的顏色，但除非具有極強的螢光性，否則不會對評價影響不大。
                        </p>
                        <div class="horizonlist--captionImg">
                          <!-- <span>04</span> -->
                          <img src="../images/daiya/diamond_color_HK.webp" alt="Color">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
              <div class="fshoplist-target--ttl">
                <h3 class="titleSub">鑽石的評價標準是什麼？</h3>
                <div class="high_price_purchase_points_content_lead"></div>
              </div>
              <div class="fshoplist-target--item 
                                existence_img">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">關於鑽石的品質評價</h4>
                      <p class="points_content_text">鑽石是有評價標準的，其品質是根據Carat 克拉（重量）、Cut 切工（打磨技術）、Clarity（淨度）、Color（顏色）四個標準來評估的。其中，「切工」是唯一由人手完成的工序，切工技術的好壞對鑽石閃爍度影響非常重大，因此是非常重要的評價標準。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fshoplist-target--item 
                                existence_img">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">關於鑽石的加工處理</h4>
                      <p class="points_content_text">鑽石除了切割和打磨以外，通常不會有其他人為加工處理。然而，有些鑽石為了提高淨度和顏色，從而涉及人為加工處理。在 「OTAKARAYA」，我們努力全面評估您的物品，即使您對某些物品存有疑慮，也請放心帶來評估。</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fshoplist-target--item 
                                existence_img">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">關於鑽石的產地</h4>
                      <p class="points_content_text">鑽石採掘地遍布全球，主要產地包括俄羅斯、博茨瓦納、加拿大等。鑽石的價值和品質並不因其產地而改變。然而，據說來自博茨瓦納 Jwaneng 礦場出產的鑽石品質最高。截至2023年，全球僅有10家公司從事鑽石開採業務。</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fshoplist-target__list brand_about_repeat_parent_wrap open">
              <div class="fshoplist-target--ttl">
                <h3 class="titleSub">關於收購評價較高的鑽石顏色</h3>
                <div class="high_price_purchase_points_content_lead"></div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        01 </span>
                      <img src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp"
                        alt="無色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">無色鑽石</h4>
                      <p class="points_content_text">根據4C標準評價，鑽石越大、越清透，其價值越高。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        02 </span>
                      <img src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp"
                        alt="紅色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">紅色鑽石</h4>
                      <p class="points_content_text">紅鑽是所有彩色鑽石中最稀有且價值最高。其顏色等級順序為「Fancy Red」「Fancy Purplish Red」「Fancy Orangy Red」。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        03 </span>
                      <img src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp"
                        alt="藍色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">藍色鑽石</h4>
                      <p class="points_content_text">
                        價值僅次於紅色鑽石，主要產自南非的Premier礦場。好的藍色鑽石顏色鮮艷且不帶灰調。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        04 </span>
                      <img src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp"
                        alt="綠色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">綠色鑽石</h4>
                      <p class="points_content_text">極為罕見且珍貴。特別是顏色飽和度高的「Fancy Intense Green」和「Fancy Vivid Green」市場價值極高。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        05 </span>
                      <img src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp"
                        alt="紫色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">紫色鑽石</h4>
                      <p class="points_content_text">
                        顏色範圍從淡紫到深紫不等。顏色越深、越鮮明，價值越高。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        06 </span>
                      <img src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp"
                        alt="粉紅色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">粉紅色鑽石</h4>
                      <p class="points_content_text">因為產量極少，粉紅色鑽石被視為極高價值彩鑽之一。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        07 </span>
                      <img src="../images/daiya/857520b29ac66eab447eba193215d84e.webp"
                        alt="橙色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">橙色鑽石</h4>
                      <p class="points_content_text">與普通彩色鑽石相比，橙色鑽石非常稀有且價值極高。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        08 </span>
                      <img src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp"
                        alt="黃色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">黃色鑽石</h4>
                      <p class="points_content_text">產量相對較多的彩色鑽石，但不帶橙調，越接近金絲雀黃或檸檬黃，它的價值越高。</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        09 </span>
                      <img src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp"
                        alt="棕色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">棕色鑽石</h4>
                      <p class="points_content_text">
                        棕色鑽石有多種色調和飽和度，例如紅棕色和黃棕色，產量很大，廣泛用於各種飾物中。收購價格因設計款式而異。
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="fshoplist-target--item 
                                ">
                <div class="horizonlist horizonnumblist">
                  <div class="horizonlist--link">
                    <div class="horizonlist--img">
                      <span>
                        10 </span>
                      <img src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp"
                        alt="黑色鑽石">
                    </div>

                    <div class="horizonlist--text">
                      <h4 class="titleH4 title--left">黑色鑽石</h4>
                      <p class="points_content_text">天然黑色鑽石內部含有鐵礦石或石墨，被認為極為稀有。漆黑色澤越深，價值越高。</p>
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
            <h2 class="renew_2024_top_pont_title">鑽石的高價收購・鑑定要點</h2>
            <div class="renew_2024_top_pont_story">
              許多人可能知道鑽石的價值是由「克拉」決定的，但其實其他4C指標，如切工、淨度和顏色也會影響其價值。<br><br>此外，品牌、設計、狀態和是否有附屬品等因素也會影響價格。在「OTAKARAYA」，我們不僅評估4C，還會充分考量這些附加價值，為客人提供最高的收購金額。
            </div>
          </div>
          <div class="renew_2024_top_pont_item_titlebox">
            <h3>決定鑽石價值的因素</h3>
            <div class="renew_2024_top_pont_item_title_circle">
              <div></div>
            </div>
          </div>
          <div class="renew_2024_top_pont_item_content is-sp">
            <h4 class="renew_2024_top_point_item_h4"><span>01</span>Carat</h4>
            <div class="renew_2024_top_point_item_story">
              克拉是表示寶石重量的單位，1克拉（ct）相當於0.2克。特別是在鑽石中，日本國內鑑別和鑑定機構發行的鑑定書會標示精確至小數點後三位，而一般交易中多數會標示至小數點後兩位。<br><br>

              克拉數越大，寶石的稀有價值也會提高，價格隨之大幅上升。假設是兩個相同品質的鑽石，如一個的克拉數是兩倍，價格不一定是另一個的兩倍。特別是當大小達到0.5ct或1.0ct等整數時，價格通常會大幅上升。<br><br>

              以理想的圓形明亮式切工為例，重量與大小的關係如下：0.1ct的鑽石直徑約3.0mm，0.5ct的鑽石直徑約5.2mm，1.0ct的鑽石直徑約6.5mm。
              <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                  src="../images/daiya/2024_diamond_carat_translation.webp" alt=""></div>
            </div>
            <div class="renew_2024_top_point_item_bar"></div>
            <h4 class="renew_2024_top_point_item_h4"><span>02</span>Cut</h4>
            <div class="renew_2024_top_point_item_story">
              切工是令鑽石最大限度地散發閃耀光芒的重要因素。切工優秀的鑽石可以有效地反射光線並散發出美麗的光芒。切工等級從「Excellent」到「Poor」的 5 個等級進行評估。<br><br>

              評價主要根據「Proportion 比例」和「Finish 修飾」兩部分。Proportion是針對圓形明亮式切割的鑽石中各切面大小、比例和角度進行評估。此切割方式有一個能讓鑽石發揮最大光芒的「理想形狀」，根據與該形狀的接近程度分為 5 個等級。<br><br>

              另外，Finish進一步分為「Polish 打磨」和「Symmetry 對稱性」。Polish是根據拋光鑽石表面的品質進行評估，對稱度是根據每個切面的位置和對稱性分為 5 個等級進行評估。<br><br>

              切工評價由「Proportion 比例」、「Polish 打磨」和「Symmetry 對稱」三個項目構成，在所有這些項目中獲得最高評級「Excellent 極優」的鑽石，則被特別稱為「3EX（Triple Excellent） 」。此外，滿足一定條件呈現心形或箭頭圖案的鑽石也可能具有稱為「Heart & Cupid 八心八箭（H&C）」的特徵。<br><br>

              具備「3EX」或「Heart & Cupid 八心八箭」的鑽石，其耀眼的光芒可以用肉眼看到，被譽為是最高級的切割，並廣受高度評價。
              <div class="point_item_captionImg"><img
                  class="renew_2024_top_point_item_h4_image"
                  src="../images/daiya/2024_diamond_cut.webp" alt=""></div>
            </div>
            <div class="renew_2024_top_point_item_bar"></div>
            <h4 class="renew_2024_top_point_item_h4"><span>03</span>Clarity</h4>
            <div class="renew_2024_top_point_item_story">
              鑽石內部通常有微小的內含物或表面瑕疵。這些內含物和表面瑕疵程度的評估稱為「Clarity 淨度」，由經驗豐富鑑定師使用10倍放大鏡進行檢查，並根據其程度分為11個等級。<br><br>

              淨度的等級從最高級別的「FL（無瑕）」到最低級別的「I3」進行評價，具體如下：<br><br>

              FL（無瑕）：即使由經驗豐富的鑑定師在 10 倍放大鏡下觀察，也看不到內含物或表面瑕疵。<br>
              IF（內部無瑕）：10 倍放大鏡下看不到內含物，只能看到輕微的表面瑕疵。<br>
              VVS1/VVS2（極輕微內含物）：在 10 倍放大鏡下很難找到內含物。<br>
              VS1/VS2（輕微內含物）：在 10 倍放大鏡下可以看到輕微內含物。<br>
              SI1/SI2（微內含物）：10 倍放大鏡下可清晰看到內含物。<br>
              I1/I2/I3（有明顯內含物）：在10倍放大鏡下或用肉眼可以看到內含物，這大大影響了鑽石的淨度。<br><br>

              淨度評估不僅取決於內含物的大小，還要綜合考慮「數量、位置、種類、可見度、顏色」等諸多因素從而決定。
              <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                  src="../images/daiya/2024_diamond_clarity.webp" alt=""></div>
            </div>
            <div class="renew_2024_top_point_item_bar"></div>
            <h4 class="renew_2024_top_point_item_h4"><span>04</span>Color</h4>
            <div class="renew_2024_top_point_item_story">
              鑽石的顏色從 D 到 Z 等級。它從無色的 D 色開始，隨著顏色變深，等級依序排列至 Z 色。越接近D等級的鑽石價值越高，而顏色越濃，評價則會下降。<br><br>

              此 4C 顏色評級主要適用於帶有黃色或棕色色調的鑽石。對於其他顏色（例如粉紅色或藍色）的鑽石被稱為「Fancy Color Diamonds 彩色鑽石」，並使用其他標準來評估。此外，如果顏色比Z等級更深，也被視為彩鑽。<br><br>

              一般來說，帶有黃色或棕色色調的鑽石被認為價值較低，但如果顏色深到足以被歸類為彩色鑽石，則由於其稀有性而變得價值高。因此，顏色濃於Z等級的黃色鑽石，其交易價格往往高於無色的D等級鑽石。<br><br>

              雖然您可能聽說鑽石的「螢光性」會影響其顏色等級，但實際影響微乎其微。螢光性是鑽石暴露在紫外線下時發出的藍白色光。 4C的顏色評估是基於黃色調，因此螢光性的藍白色可能會影響外觀的顏色，但除非具有極強的螢光性，否則不會對評價影響不大。
              <div class="point_item_captionImg"><img class="renew_2024_top_point_item_h4_image"
                  src="../images/daiya/2024_diamond_color.webp" alt=""></div>
            </div>
          </div>
          <div class="renew_2024_top_pont_item_titlebox">
            <h3>鑽石的評價標準是什麼？</h3>
            <div class="renew_2024_top_pont_item_title_circle">
              <div></div>
            </div>
          </div>
          <div class="renew_2024_top_pont_item_content is-sp">
            <h4 class="renew_2024_top_point_item_h4">關於鑽石的品質評價</h4>
            <div class="renew_2024_top_point_item_story">
              鑽石是有評價標準的，其品質是根據Carat 克拉（重量）、Cut 切工（打磨技術）、Clarity（淨度）、Color（顏色）四個標準來評估的。其中，「切工」是唯一由人手完成的工序，切工技術的好壞對鑽石閃爍度影響非常重大，因此是非常重要的評價標準。
            </div>
            <div class="renew_2024_top_point_item_bar"></div>
            <h4 class="renew_2024_top_point_item_h4">關於鑽石的加工處理</h4>
            <div class="renew_2024_top_point_item_story">鑽石除了切割和打磨以外，通常不會有其他人為加工處理。<br />然而，有些鑽石為了提高淨度和顏色，從而涉及人為加工處理。在 「OTAKARAYA」，我們努力全面評估您的物品，即使您對某些物品存有疑慮，也請放心帶來評估。
            </div>
            <div class="renew_2024_top_point_item_bar"></div>
            <h4 class="renew_2024_top_point_item_h4">關於鑽石的產地</h4>
            <div class="renew_2024_top_point_item_story">鑽石採掘地遍布全球，主要產地包括俄羅斯、博茨瓦納、加拿大等。<br />鑽石的價值和品質並不因其產地而改變。然而，據說來自博茨瓦納 Jwaneng 礦場出產的鑽石品質最高。<br />截至2023年，全球僅有10家公司從事鑽石開採業務。</div>
          </div>
          <div class="renew_2024_top_pont_item_titlebox">
            <h3>關於收購評價較高的鑽石顏色</h3>
            <div class="renew_2024_top_pont_item_title_circle">
              <div></div>
            </div>
          </div>
          <div class="renew_2024_top_pont_item_content is-sp"><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/0179640947107c8ce4ea929f8fabf164.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>01</span>無色鑽石</h4>
            <div class="renew_2024_top_point_item_story">根據4C標準評價，鑽石越大、越清透，其價值越高。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/765829cc287d1ac17677d3b4bead81e6.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>02</span>紅色鑽石</h4>
            <div class="renew_2024_top_point_item_story">紅鑽是所有彩色鑽石中最稀有且價值最高。其顏色等級順序為「Fancy Red」「Fancy Purplish Red」「Fancy Orangy Red」。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/cccd2bc758949f98d64a7d337d76ec6a.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>03</span>藍色鑽石</h4>
            <div class="renew_2024_top_point_item_story">價值僅次於紅色鑽石，主要產自南非的Premier礦場。好的藍色鑽石顏色鮮艷且不帶灰調。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/a1d4aefe9a3a9eb13922078d8726347b.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>04</span>綠色鑽石</h4>
            <div class="renew_2024_top_point_item_story">極為罕見且珍貴。特別是顏色飽和度高的「Fancy Intense Green」和「Fancy Vivid Green」市場價值極高。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/dfd4f792d6329e44ef3f282e136cc0fa.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>05</span>紫色鑽石</h4>
            <div class="renew_2024_top_point_item_story">顏色範圍從淡紫到深紫不等。顏色越深、越鮮明，價值越高。
            </div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/58a97c8b6893da89264e714f7a43b3ea.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>06</span>粉紅色鑽石</h4>
            <div class="renew_2024_top_point_item_story">因為產量極少，粉紅色鑽石被視為極高價值彩鑽之一。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/857520b29ac66eab447eba193215d84e.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>07</span>橙色鑽石</h4>
            <div class="renew_2024_top_point_item_story">與普通彩色鑽石相比，橙色鑽石非常稀有且價值極高。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/bddb718ade6b729a59cc1c6244e39317.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>08</span>黃色鑽石</h4>
            <div class="renew_2024_top_point_item_story">產量相對較多的彩色鑽石，但不帶橙調，越接近金絲雀黃或檸檬黃，它的價值越高。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/c5c61e747e7ee3d7e6559b96051f425f.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>09</span>棕色鑽石</h4>
            <div class="renew_2024_top_point_item_story">
              棕色鑽石有多種色調和飽和度，例如紅棕色和黃棕色，產量很大，廣泛用於各種飾物中。收購價格因設計款式而異。</div>
            <div class="renew_2024_top_point_item_bar"></div><img class="renew_2024_top_point_item_h4_image"
              src="../images/daiya/532ae322efb836b3bb2878eec8606009.webp" alt="">
            <h4 class="renew_2024_top_point_item_h4"><span>10</span>黑色鑽石</h4>
            <div class="renew_2024_top_point_item_story">
              天然黑色鑽石內部含有鐵礦石或石墨，被認為極為稀有。漆黑色澤越深，價值越高。</div>
          </div>
        </div> <!-- renew_2024_top_pont_superbox -->
      </div>
      <!-- ▼▼▼変形ダイヤ説明▼▼▼ -->
      <section></section>
      <section class="transformation_description_section">
        <div class="titleMain--wrapper">
          <h2 class="titleMain--main">
            什麼是變形鑽石？
          </h2>
          <div class="titleMain--lead">
            <p>「變形鑽石」是被稱為圓形明亮式切割（正圓）以外形狀的鑽石的總稱。圓形明亮式切割是最經典的切割，但也有許多加工成其他形狀的變形鑽石（fancy-shaped），以下是一些常見的變形鑽石介紹：</p>
          </div>
        </div>
        <div class="transformation_description_content_wrap">
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">1</span>
                    <span class="transformation_description_content_text">祖母綠切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img1@4x.webp" alt="">
                  <p>從上面看呈現正方形或長方形，從側面看呈階梯形狀，可以充分享受鑽石原來的透明度和閃爍。切割面極少，奢華的寬檯面加工，突顯出鑽石原本的淨度。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">2</span>
                    <span class="transformation_description_content_text">橢圓形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img2@4x.webp" alt="">
                  <p>加工成橢圓形的鑽石，有57至58個切割面，數量上接近圓形切割鑽石，用於戒指等各種飾物配件。利用其橢圓形的特性，根據高度和寬度的比例，可以呈現不同的形象。由於切工數量接近圓形，因為也能感受到鑽石的美麗和厚重感。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">3</span>
                    <span class="transformation_description_content_text">三角形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img3@4x.webp" alt="">
                  <p>它不是圓形或方形，而是被加工成「三角形」形狀。標準切割數為43面，具有不同於正圓或正方形的獨特閃爍度。從基本的等邊形狀到尖角或圓角的形狀，具有強烈的幾何閃爍效果。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">4</span>
                    <span class="transformation_description_content_text">心形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img4@4x.webp" alt="">
                  <p>切割呈心形，是圓形明亮式切割的變形版。據說心形最理想的狀態是在一個正方形內，而那些較寬或縱向較長的則被認為是特殊形狀。心形的輪廓是由工匠一點一點手工打磨而成的，所以技巧很大程度影響了它的美觀。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">5</span>
                    <span class="transformation_description_content_text">公主方切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img5@4x.webp" alt="">
                  <p>結合了明亮式切割和階梯式切割的混合切割，以創造出閃爍的方形形狀。鑽石檯面面積大，具有比圓形明亮式切割的切削量少的優點，更容易加工成大粒鑽石。然而處理時要小心，因為角落很容易碎裂。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">6</span>
                    <span class="transformation_description_content_text">梨形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img6@4x.webp" alt="">
                  <p>梨形=顧名思義是梨形切割。與心形切割一樣，它是圓形明亮式切割的變體，有 58 個切割面。因為它的形狀像水滴，所以也被稱為水滴形。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">7</span>
                    <span class="transformation_description_content_text">雷迪恩形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img7@4x.webp" alt="">
                  <p>它是方形或矩形的切割，結合明亮式切割和祖母綠切割的特點。由亨利·格羅斯·伯德 (Henry Grossbard) 於 1977 年開發，與公主方形切割有一些相似之處，但切割面有所不同。這種切割方法也常用於有色寶石。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="transformation_description_content">
            <div class="circle_btn_accordion_area">
              <div class="circle_btn_accordion_include circle_btn_accordion_control">
                <button class="circle_btn_accordion" type="button" circle_btn_accordion_expanded="false">
                  <p class="transformation_description_content_ttl" style="position: relative;"><span style="position: absolute; left: -1em;">8</span>
                    <span class="transformation_description_content_text">馬眼形切割</span>
                  </p>
                  <img class="is-pc" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
                </button>
                <div class="circle_btn_accordion_list_wrap" aria-hidden="true" style="height: 0px; transition: height;">
                  <img class="is-sp" src="../images/daiya/transformation_description_img8@4x.webp" alt="">
                  <p>呈長橢圓形，兩端變尖的船形切割。它被歸類為明亮式切割，基本上由 58 個刻面組成，但也可以切磨成 18 個刻面。 Marquise在法語中是「侯爵」的意思，因為在創造這顆船形鑽石時，時尚領袖蓬巴杜夫人（法國國王路易十五的情婦）被賦予了「Marquise」侯爵夫人的稱號。</p>
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
            如果你想放售鑽石請到「OTAKARAYA」
          </h2>
        </div>
        <section>
          <h3 class="titleSub">持有GG資格者在場</h3>
          <p style="text-align: center;">
            GG（Graduate Gemomological）資格是由GIA（美國寶石學院）主辦的全球權威寶石鑑定師資格，被稱為「寶石學畢業生」。除了聘用GG資格持有者外，「OTAKARAYA」還透過我們的訓練系統定期提供鑑定師教育。因此，可以對任何寶石進行高精度、高水準、正確的鑑定。</p>

          <div class="colBox colBox__col01">
            <div class="col" style="display: flex; justify-content: space-between;">
              <div class="img gg_holder_profile">
                <img src="../images/daiya/568433d3328efc80e6346b56a8db47df.webp" alt="岩松利香のプロフィール">
              </div>
              <div class="gg_profile">
                <h4 class="titleSub" style="color:black;">岩松莉香</h4>
                <div class="profile">
                  <nobr>
                    <p class="profile1">Profile</p>
                  </nobr>
                  <p class="profile2">：<span>曾在鑑定機構工作。此後，他從事鑽石分級和寶石鑑定業務近 30 年。</span></p>
                </div>
                <p><span>持有資格</span>：<span>GG（1994年5月取得）</span>
                </p>
                <p><span>出生地</span>：東京都</p>
                <p><span>興趣</span>：旅遊</p>
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
          <h3 class="titleSub">「OTAKARAYA」的最新鑑定設備</h3>
          <div class="equip">
            <div class="equip_img"><img src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
                alt="紫外可見近紅外線分光光度計"></div>
            <div class="equip_meta">
              <p class="equip_title">紫外可見近紅外線分光光度計</p>
              <p class="equip_explain">
                當人眼可見的光（可見光）穿過材料時，部分光被材料吸收。紫外可見分光光度計和近紅外線分光光度計非常適合分析吸收光的波長，在 「OTAKARAYA」，我們使用該設備來檢查鑽石和金色系的白蝶珍珠的處理情況，能準確地確定寶石的價值。
              </p>
            </div>
          </div>
          <div class="equip">
            <div class="equip_img"><img src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
                alt="傅立葉轉換紅外線光譜儀"></div>
            <div class="equip_meta">
              <p class="equip_title">傅立葉轉換紅外線光譜儀</p>
              <p class="equip_explain">
                傅立葉轉換紅外線光譜儀是一種透過用紅外線光照射樣品並測量透射光或反射光來分析樣品的精密儀器。在 「OTAKARAYA」，我們使用該設備進行各種測試，包括檢查玉石是否浸樹脂處理以及識別鑽石等。
              </p>
            </div>
          </div>
          <div class="equip">
            <div class="equip_img"><img src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
                alt="I 型・II 型檢測儀"></div>
            <div class="equip_meta">
              <p class="equip_title">I 型・II 型檢測儀</p>
              <p class="equip_explain">
                將樣品放入分析儀中。透過紫外線的折射率來判斷鑽石的好壞。只需 1 秒鐘即可確定 I 類鑽石（天然鑽石）和 II 類鑽石（高溫高壓處理鑽石/合成鑽石）。 它不僅可以測定裸鑽，還可以測定已鑲嵌的鑽石，因此無需拆除亦可測量。可以立即做出準確的評估，而不會損壞您的物品。</p>
            </div>
          </div>
          <div class="equip">
            <div class="equip_img"><img src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
                alt="莫桑石檢測儀"></div>
            <div class="equip_meta">
              <p class="equip_title">莫桑石檢測儀</p>
              <p class="equip_explain">清除寶石表面的污垢後，將探頭應用於樣品。根據測得的電導率來判斷是鑽石還是莫桑石。就像I/II型檢測儀一樣，它可以進行即時且準確的評估。</p>
            </div>
          </div>
        </section>
        <!-- appraisal_equips -->


        <section>
          <h3 class="titleSub">評估設計和品牌價值</h3>
          <p style="text-align: center;">
            在「OTAKARAYA」，我們提出的評估價值不僅考慮了寶石本身的價值，還考慮了品牌價值和設計評價。<br><br>
            即使是細小的寶石，我們也不會忽視它，並且有或沒有配件或盒子的物品都能夠收購。
          </p>
        </section>
        <section>
          <h3 class="titleSub">所有收購手續費用全免</h3>
          <p style="text-align: center;">
            所有費用如鑑定費、上門出差費等都是全免的，您無需支付任何手續費用。<br>
            我們透過多種方式進行採購，包括上門、店內和線上評估收購。
          </p>
        </section>
        <section>
          <h3 class="titleSub">日本全國擁有1,300間以上門市</h3>
          <p style="text-align: center;">
            「OTAKARAYA」在全國擁有超過1,300家店鋪，是所有收購店鋪中規模最大的。<br>如果您將物品帶到當地附近的 「OTAKARAYA」 門市，當天就可以將其兌換成現金。<br><br>
            我們還擁有與全球 44 個國家開展業務的記錄，我們不僅與個人，而且還與公司和企業開展大量業務。<br>除了鑽石之外，我們還可以收購紅寶石、藍寶石等各類珠寶。
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
              如果你想放售鑽石請到「OTAKARAYA」
            </p>
          </h2>
          <h3 class="renew_2024_dia_title_subtitle_h3">
            持有GG資格者在場
          </h3>
        </div>
        <!-- MOD_20240417 -->




        <div class="renew_2024_top_gg_desc">
          GG（Graduate Gemomological）資格是由GIA（美國寶石學院）主辦的全球權威寶石鑑定師資格，被稱為「寶石學畢業生」。<br />
          除了聘用GG資格持有者外，「OTAKARAYA」還透過我們的訓練系統定期提供鑑定師教育。<br />
          因此，可以對任何寶石進行高精度、高水準、正確的鑑定。
        </div>


        <img class="renew_2024_top_gg_photo"
          src="../images/daiya/photo_iwamatsu_202404.jpg" alt="岩松 ">

        <div class="renew_2024_top_gg_profile_superbox">

          <div class="renew_2024_top_gg_profile_flex">
            <div class="renew_2024_top_gg_profile_left">
              Profile
            </div>
            <div class="renew_2024_top_gg_profile_right">
              曾在鑑定機構工作。此後，他從事鑽石分級和寶石鑑定業務近 30 年。
            </div>
          </div>

          <div class="renew_2024_top_gg_profile_flex">
            <div class="renew_2024_top_gg_profile_left">
              持有資格
            </div>
            <div class="renew_2024_top_gg_profile_right">
              GG（1994年5月取得）
            </div>
          </div>

          <div class="renew_2024_top_gg_profile_flex">
            <div class="renew_2024_top_gg_profile_left">
              出生地
            </div>
            <div class="renew_2024_top_gg_profile_right">
              東京都
            </div>
          </div>

          <div class="renew_2024_top_gg_profile_flex">
            <div class="renew_2024_top_gg_profile_left">
              興趣
            </div>
            <div class="renew_2024_top_gg_profile_right">
              旅遊
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
                「OTAKARAYA」的最新鑑定設備 </h3>
              <div class="equip">
                <div class="equip_img"><img
                    src="../images/daiya/8429090fa4171a8ce59873218128502a.webp"
                    alt="紫外可見近紅外線分光光度計"></div>
                <div class="equip_meta">
                  <p class="equip_title">紫外可見近紅外線分光光度計</p>
                  <p class="equip_explain">
                    當人眼可見的光（可見光）穿過材料時，部分光被材料吸收。紫外可見分光光度計和近紅外線分光光度計非常適合分析吸收光的波長，在 「OTAKARAYA」，我們使用該設備來檢查鑽石和金色系的白蝶珍珠的處理情況，能準確地確定寶石的價值。
                  </p>
                </div>
              </div>
              <div class="equip">
                <div class="equip_img"><img
                    src="../images/daiya/3b83232250cb59ab1761d1e66521fde9.webp"
                    alt="傅立葉轉換紅外線光譜儀"></div>
                <div class="equip_meta">
                  <p class="equip_title">傅立葉轉換紅外線光譜儀</p>
                  <p class="equip_explain">
                    傅立葉轉換紅外線光譜儀是一種透過用紅外線光照射樣品並測量透射光或反射光來分析樣品的精密儀器。在 「OTAKARAYA」，我們使用該設備進行各種測試，包括檢查玉石是否浸樹脂處理以及識別鑽石等。
                  </p>
                </div>
              </div>
              <div class="equip">
                <div class="equip_img"><img
                    src="../images/daiya/0609b87cd0ef7ac42d7e05f14aa2451f.webp"
                    alt="I 型・II 型檢測儀"></div>
                <div class="equip_meta">
                  <p class="equip_title">I 型・II 型檢測儀</p>
                  <p class="equip_explain">將樣品放入分析儀中。透過紫外線的折射率來判斷鑽石的好壞。只需 1 秒鐘即可確定 I 類鑽石（天然鑽石）和 II 類鑽石（高溫高壓處理鑽石/合成鑽石）。 它不僅可以測定裸鑽，還可以測定已鑲嵌的鑽石，因此無需拆除亦可測量。可以立即做出準確的評估，而不會損壞您的物品。</p>
                </div>
              </div>
              <div class="equip">
                <div class="equip_img"><img
                    src="../images/daiya/5592cdbaa593d89e3ab7da0e4768e03f.webp"
                    alt="莫桑石檢測儀"></div>
                <div class="equip_meta">
                  <p class="equip_title">莫桑石檢測儀</p>
                  <p class="equip_explain">清除寶石表面的污垢後，將探頭應用於樣品。根據測得的電導率來判斷是鑽石還是莫桑石。就像I/II型檢測儀一樣，它可以進行即時且準確的評估。</p>
                </div>
              </div>
            </section>
            <!-- appraisal_equips -->
          </div>


          <div class="renew_2024_top_gg_profile_itembox">

            <h3 class="renew_2024_top_point_item_h4">
              評估設計和品牌價值
            </h3>
            <div class="renew_2024_top_point_item_story">
              在「OTAKARAYA」，我們提出的評估價值不僅考慮了寶石本身的價值，還考慮了品牌價值和設計評價。<br><br>
              即使是細小的寶石，我們也不會忽視它，並且有或沒有配件或盒子的物品都能夠收購。
            </div>
            <div class="renew_2024_top_point_item_bar"></div>

            <h3 class="renew_2024_top_point_item_h4">
              所有收購手續費用全免
            </h3>
            <div class="renew_2024_top_point_item_story">
              所有費用如鑑定費、上門出差費等都是全免的，您無需支付任何手續費用。<br>
              我們透過多種方式進行採購，包括上門、店內和線上評估收購。
            </div>
            <div class="renew_2024_top_point_item_bar"></div>

            <h3 class="renew_2024_top_point_item_h4">
              日本全國擁有1,300間以上門市
            </h3>
            <div class="renew_2024_top_point_item_story">
              「OTAKARAYA」在全國擁有超過1,300家店鋪，是所有收購店鋪中規模最大的。<br>如果您將物品帶到當地附近的 「OTAKARAYA」 門市，當天就可以將其兌換成現金。<br><br>
              我們還擁有與全球 44 個國家開展業務的記錄，我們不僅與個人，而且還與公司和企業開展大量業務。<br>除了鑽石之外，我們還可以收購紅寶石、藍寶石等各類珠寶。
            </div>
          </div>
        </div>
      </section> <!-- renew_2024_top_gg_profile_section -->
      <section></section><!-- MOD_20240417 -->
      <div class="is-pc">
        <!-- MOD_20240417 -->
        <section class="certificate">
          <div class="titleMain titleMain--wrapper titleMain--mtPc128 titleMain--mtSp32">
            <h2 class="titleMain--main">
              關於鑽石鑑定書
            </h2>
          </div>

          <section>
            <h3 class="titleSub">什麼是鑑定書？</h3>
            <p style="text-align: center;">
              鑑定書是當您購買鑽石時，您將收到一份顯示鑽石的起源和種類的鑑定書。
              <br><br>
              如果您持有鑑定書，請放售時一同攜帶過來。
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
            <h3 class="titleSub">GIA（美國寶石研究院）</h3>
            <div class="colBox colBox__col01">
              <div class="col">
                <div class="img">
                  <img class="custom-popup-img"
                    src="../images/daiya/diamond_GIA.webp"
                    alt="GIA（美國寶石研究院）">
                </div>
              </div>
            </div>
          </section>

          <section>
            <h3 class="titleSub">如何看鑽石的鑑定書</h3>
            <ol class="num-content__lists">
              <li class="num-content__list">
                <dl>
                  <dt>切工・形狀</dt>
                  <dd>
                    <p>有鑽石的形狀和切面排列。</p>
                  </dd>
                </dl>
              </li>
              <li class="num-content__list">
                <dl>
                  <dt>重量（克拉）</dt>
                  <dd>
                    <p>1克拉＝0.2克（200毫克），以此評估重量。</p>
                  </dd>
                </dl>
              </li>
              <li class="num-content__list">
                <dl>
                  <dt>顏色的等級</dt>
                  <dd>
                    <p>使用GIA對比石（JJA/AGL認證）對鑽石的顏色深淺進行D~Z各級別的評估。</p>
                  </dd>
                </dl>
              </li>
              <li class="num-content__list">
                <dl>
                  <dt>淨度的等級</dt>
                  <dd>
                    <p>根據鑽石內含物的數量、大小、顏色和位置，級別分為FL、IF、VVS1~VVS2、VS1~VS2、SI1~SI2、I1~I3進行評估。</p>
                  </dd>
                </dl>
              </li>
              <li class="num-content__list">
                <dl>
                  <dt>切工的等級</dt>
                  <dd>
                    <p>根據GIA Facetware Cut Estimator數據庫和目視評估，級別分為Excellent、Very Good、Good、Fair、Poor進行評估。</p>
                  </dd>
                </dl>
              </li>
              <li class="num-content__list">
                <dl>
                  <dt>螢光性</dt>
                  <dd>
                    <p>使用螢光對比石評估發光時的顏色及光的強度，級別分為None、Faint、Medium、Strong、Very Strong進行評估。</p>
                  </dd>
                </dl>
              </li>
            </ol>
          </section>
          <section>
            <h3 class="titleSub">鑑定書可以重新發行。</h3>
            <p style="text-align: center;">
              鑑別書則可以在擁有鑑定專業機構或寶石鑑定士資格的珠寶店或寶石收購專門店進行再發行。<br><br>
              再發行需要手續費，費用根據寶石的大小和數量以及再發行地點而有所不同。此外，記載項目的多少也會影響費用，通常為1,000至15,000日圓之間。
            </p>

          </section>
          <section>
            <section>
              <h3 class="titleSub">沒有鑑定書的客戶</h3>
              <p style="text-align: center;">
                「OTAKARAYA」可以在沒有鑑定書或鑑別書的情況下進行評估和收購。我們擁有持有寶石鑑定士資格的GG專業人員，能夠當場對寶石進行鑑定，並提供適當的評估金額。
              </p>

            </section>
          </section>

          <section>
            <div class="titleMain titleMain--wrapper">
              <h2 class="titleMain--main">
                有瑕疵的商品也能進行收購。
              </h2>
              <div class="titleMain--lead">
                <p style="text-align: center;">
                  不論是設計較舊式、有生鏽、變色、彎曲或污垢，沒有鑑定書或證書的商品，「OTAKARAYA」也能進行鑑定評估和交易。

                  <br><br>
                  專業的鑑定師會使用專業的工具進行鑑定評估，因此我們能夠最大限度地提高收購金額回饋給客戶。

                </p>
              </div>
            </div>
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
            關於鑽石鑑定書
          </h2>
          <h3 class="renew_2024_auth_title_about">
            什麼是鑑定書？
          </h3>
          <img class="renew_2024_auth_title_image"
            src="../images/daiya/report_titleimage_202404.png">
        </div>

        <div class="renew_2024_top_gg_desc">
          鑑定書是當您購買鑽石時，您將收到一份顯示鑽石的起源和種類的鑑定書。
          <br><br>
          如果您持有鑑定書，請放售時一同攜帶過來。
        </div>

        <div class="renew_2024_auth_item_superbox">

          <img class="renew_2024_auth_item_innerimage custom-popup-img"
            src="../images/daiya/kantei_org.webp" alt="鑑定書について">



          <h3 class="renew_2024_auth_title_about">
            GIA（美國寶石研究院）
          </h3>
          <img class="renew_2024_auth_item_innerimage custom-popup-img"
            src="../images/daiya/diamond_GIA.webp" alt="GIA（美國寶石研究院）">


          <h3 class="renew_2024_auth_title_about">
            diamond鑑定書の見方
          </h3>

          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">01</div>
              <div class="renew_2024_auth_howtoread_title">切工・形狀</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">有鑽石的形狀和切面排列。</div>
          </div>
          <div class="renew_2024_auth_howtoread_bar"></div>
          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">02</div>
              <div class="renew_2024_auth_howtoread_title">重量（克拉）</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">1克拉＝0.2克（200毫克），以此評估重量。</div>
          </div>
          <div class="renew_2024_auth_howtoread_bar"></div>
          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">03</div>
              <div class="renew_2024_auth_howtoread_title">顏色的等級</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">使用GIA對比石（JJA/AGL認證）對鑽石的顏色深淺進行D~Z各級別的評估。</div>
          </div>
          <div class="renew_2024_auth_howtoread_bar"></div>
          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">04</div>
              <div class="renew_2024_auth_howtoread_title">淨度的等級</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">
              根據鑽石內含物的數量、大小、顏色和位置，級別分為FL、IF、VVS1~VVS2、VS1~VS2、SI1~SI2、I1~I3進行評估。</div>
          </div>
          <div class="renew_2024_auth_howtoread_bar"></div>
          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">05</div>
              <div class="renew_2024_auth_howtoread_title">切工的等級</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">根據GIA Facetware Cut Estimator數據庫和目視評估，級別分為Excellent、Very Good、Good、Fair、Poor進行評估。</div>
          </div>
          <div class="renew_2024_auth_howtoread_bar"></div>
          <div class="renew_2024_auth_howtoread_itembox">
            <div class="renew_2024_auth_howtoread_titlebox">
              <div class="renew_2024_auth_howtoread_num">06</div>
              <div class="renew_2024_auth_howtoread_title">螢光性</div>
            </div>
            <div class="renew_2024_auth_howtoread_story">使用螢光對比石評估發光時的顏色及光的強度，級別分為None、Faint、Medium、Strong、Very Strong進行評估。</div>
          </div>

        </div>

        <div class="renew_2024_auth_additional_superbox">
          <h3 class="renew_2024_auth_additional_tilte">
            <img class="renew_2024_auth_item_image"
              src="../images/daiya/auth_item_check.png">
            鑑定書可以重新發行。
          </h3>
          <div class="renew_2024_auth_additional_story">
            鑑別書則可以在擁有鑑定專業機構或寶石鑑定士資格的珠寶店或寶石收購專門店進行再發行。
            <br><br>
            再發行需要手續費，費用根據寶石的大小和數量以及再發行地點而有所不同。此外，記載項目的多少也會影響費用，通常為1,000至15,000日圓之間。
          </div>

          <div class="renew_2024_auth_additional_bar"></div>

          <h3 class="renew_2024_auth_additional_tilte">
            <img class="renew_2024_auth_item_image"
              src="../images/daiya/auth_item_check.png">
            沒有鑑定書的客戶
          </h3>
          <div class="renew_2024_auth_additional_story">
            「OTAKARAYA」可以在沒有鑑定書或鑑別書的情況下進行評估和收購。我們擁有持有寶石鑑定士資格的GG專業人員，能夠當場對寶石進行鑑定，並提供適當的評估金額。
          </div>

        </div> <!-- renew_2024_auth_additional_superbox -->

        <div class="renew_2024_auth_oldok_superbox">
          <h2 class="renew_2024_auth_oldok_title">
            <img class="renew_2024_auth_oldok_photo"
              src="../images/daiya/ok_photo_202404.png">
            <p>
              即使是有瑕疵的商品，<br>我們也可以回收，<br>請放心
            </p>
          </h2>
          <div class="renew_2024_auth_oldok_story">
            不論是設計較舊式、有生鏽、變色、彎曲或污垢，沒有鑑定書或證書的商品，「OTAKARAYA」也能進行鑑定評估和交易。

            <br><br>
            專業的鑑定師會使用專業的工具進行鑑定評估，因此我們能夠最大限度地提高收購金額回饋給客戶。

          </div>
        </div> <!-- renew_2024_auth_oldok_superbox -->
      </section> <!--     ▲▲▲評価について▲▲▲     -->


      <section></section>
      <!--     ▲▲▲carat別買取▲▲▲     --><!-- MOD_20240417 -->
      <div class="titleMain titleMain--wrapper">
        <h2 class="titleMain--main">
          <span>鑑定師介紹</span>
        </h2>
      </div>
      <div class="content-inner">
        <section id="shop-leader02">
          <div class="shop-leader_container bordersitecolor">
            <div class="shop-leader_inner bordersitecolor">
              <div class="shop-leader_profile relative">
                <div class="shop-leader_head absolute">
                  <h2 class="is-pc bgsitecolor bordersitecolor relative"><span class="noto thin"
                      style="font-size: 26px; font-family: serif;">估價員</span></h2>
                  <h2 class="is-sp bgsitecolor bordersitecolor relative"><span class="noto thin"
                      style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">估價員</span></h2>
                </div>
                <div class="shop-leader_head_shadow absolute">
                  <div class="relative"></div>
                </div>
                <div class="imgbox absolute"><img
                    src=../images/daiya/568433d3328efc80e6346b56a8db47df.webp alt=""></div>
                <ul class="floatlist">
                  <li class="shop-leader_name sitetextcolor" style="font-family: serif;">
                    <span class="noto ja" style="font-weight: bold;"> 岩松</span>
                    <!-- <br>
                                        <span class="noto light en">iwamatsu</span> -->
                  </li>
                  <li class="shop-leader_info">
                    <table>
                      <tbody>
                        <tr>
                          <th class="sitetextcolor">
                            <span class="noto">興趣</span>
                          </th>
                          <td>
                            <span class="noto">旅行</span>
                          </td>
                        </tr>
                        <tr>
                          <th class="sitetextcolor">
                            <span class="noto">喜歡的名言</span>
                          </th>
                          <td>
                            <span class="noto">有言實行</span>
                          </td>
                        </tr>

                        <tr>
                          <th class="sitetextcolor">
                            <span class="noto">喜歡的品牌</span>
                          </th>
                          <td>
                            <span class="noto">鑽石・寶石</span>
                          </td>
                        </tr>


                        <tr>
                          <th class="sitetextcolor">
                            <span class="noto">過去的收購案例</span>
                          </th>
                          <td>
                            <span class="noto">10克拉鑽石</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                </ul>
              </div>
              <p class="shop-leader_text">
                <span class="noto">OTAKARAYA每天都會評估數百件大小不一的寶石。寶石的估價會因鑽石的4C標準、顏色、形狀、重量、螢光性等多種因素而有所不同。OTAKARAYA擁有自己的拍賣會，能夠靈活應對每天變化的寶石需求。此外，我們配備了專業的鑑定人員和鑽石測試儀等專業鑑定工具，因此全國各門市都能提供即時而準確的評估服務。如有感興趣的貴重物品，歡迎隨時選擇OTAKARAYA</span>
              </p>
              <div class="shop-detail_button clearfix">
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php get_template_part('template-parts/assessment_cta'); ?>
      <!-- MOD_20240417 -->

      <?php get_template_part('template-parts/otakaraya_sel'); ?>

      <!-- MOD_20240417 -->
      <h2 class="renew_2024_titlesub follow is-sp">
        <div class="renew_2024_titlesub_topbar">
          <div class="renew_2024_titlesub_topbar_center"></div>
          <div class="renew_2024_titlesub_topbar_left"></div>
          <div class="renew_2024_titlesub_topbar_right"></div>
        </div>
        鑽石收購的常見問題
      </h2>

      <section class="renew2024">
        <div class="titleMain titleMain--wrapper is-pc">
          <h2 class="titleMain--main">
            鑽石收購的常見問題
          </h2>
          <div class="titleMain--lead">
            <p></p>
          </div>
        </div>
        <div class="qa__wrap js__more--3th">
          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">什麼時候是鑽石最佳的放售時機？</dt>

              <dd class="qa__list__a">鑽石最佳的放售時機有可能立即到臨，也有可能等待較長時間才能提高價值，因此無法一概而論。如果考慮長期保管後再放售，則需要妥善保管，建議定期進行適當的維護。</dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">沒有鑑定書也可以收購嗎？</dt>

              <dd class="qa__list__a">是的，我們可以收購。公司的鑑定員會鑑定鑽石的4C（克拉、顏色、淨度、切工），並提供相應的收購金額。</dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">設計會影響收購金額嗎？</dt>

              <dd class="qa__list__a">在寶石收購中，鑽石本身的等級是非常重要的。即使是設計偏舊式，「OTAKARAYA」也能提供高價收購，請放心！</dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">鑽石的形狀會影響收購金額嗎？</dt>

              <dd class="qa__list__a">
                是的，收購金額會因形狀而異。在鑽石中，「圓形明亮式切割」為評價最高的切割方式。鑽石的等級也會影響收購金額，歡迎隨時使用我們的免費評估服務！
              </dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">寶石收購專門店會提供更高的收購價格嗎？</dt>

              <dd class="qa__list__a">
                除了鑽石、寶石和珠寶，「OTAKARAYA」同時涵蓋黃金、貴金屬、名牌商品和手錶等多個範疇，擁有廣泛的銷售渠道。因此，我們能夠在不積壓存貨的情況下，提供更具競爭力的收購價格。
              </dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">可以收購小鑽石（密镶）嗎？</dt>

              <dd class="qa__list__a">是的，我們可以收購。加了小鑽石（鋪鑽）的珠寶在評估時有機會提高其價值。不過，裸石的情況下可能無法收購。</dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">有能高價收購的鑽石嗎？</dt>

              <dd class="qa__list__a">
                1克拉以上的鑽石、VS等級以上的鑽石、名牌鑽石珠寶以及稀有的彩色鑽石都會有較高的收購金額。不僅無色透明的鑽石，天然的粉紅鑽石、藍鑽石和黃鑽石的收購金額也傾向於較高。
              </dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">在評估時應攜帶哪些物品？</dt>

              <dd class="qa__list__a">如果您有鑑定書，請務必攜帶。鑑定書能證明鑽石的4C等級等價值，一同攜帶將增加獲得更好的收購金額的可能性。</dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">可以高價收購的商品是什麼？</dt>

              <dd class="qa__list__a">

                在鑽石收購中，4C等級較高的商品會獲得更好的價格。此外，除了主石的等級，也會評估周邊副石的等級。歡迎隨時諮詢！</dd>

            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">「日圓貶值或升值」會影響收購金額嗎？</dt>

              <dd class="qa__list__a">

                鑽石等寶石並非在日本出產，因此會受到日圓貶值或升值等匯率變化影響。當日圓貶值時，價格會上升，二手市場價格也會上漲，因此收購金額會提高。
              </dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">很久以前購買的鑽石也可以收購嗎？</dt>

              <dd class="qa__list__a btn--more">
                是的，我們可以收購。即使是以前購買的物品，我們也會根據現在的評估標準進行評估。如果附有鑑定書，則根據鑑定書的發行機構和發行時間，對收購金額作調整</dd>
              <div class="qa__list__button gtm-more-qa"><button>查看更多</button></div>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">會收購裸石和原石嗎？
              </dt>

              <dd class="qa__list__a">我們也收購裸石和原石。</dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">寶石的大小會影響收購金額嗎？</dt>

              <dd class="qa__list__a">
                寶石的大小也會影響收購金額。如果有兩顆同等級的鑽石，較大的寶石因其稀有性更高，通常收購金額會更高。</dd>



            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">鑽石的收購金額受哪些因素影響？</dt>

              <dd class="qa__list__a">
                在評估鑽石時，4C的質量和大小是非常重要。</dd>
            </dl>
          </div>

          <div class="qa__list js__more--item3">
            <dl class="qa__list__inner">
              <dt class="qa__list__q">為什麼需要身分證明文件？</dt>

              <dd class="qa__list__a">根據日本的古物營業法的規定，我們需記錄出售者的身分，但不會將其用於其他目的。</dd>
            </dl>
          </div>
        </div>
        <div class="btn__wrap btn__more js__more--btn3 gtm-more-qa">
          <span>查看更多</span>
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
    // 為替の計算結果を反映する
    var kawase_price = ["9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "3,990", "3,660", "3,330", "3,000", "2,330", "1,670", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "3,990", "3,660", "3,330", "3,000", "2,330", "1,670", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "9,840", "9,020", "8,200", "7,380", "5,740", "4,100", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "8,630", "7,920", "7,200", "6,480", "5,040", "3,600", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "7,800", "7,150", "6,500", "5,850", "4,550", "3,250", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "6,130", "5,620", "5,110", "4,600", "3,580", "2,560", "3,990", "3,660", "3,330", "3,000", "2,330", "1,670", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "5,480", "5,020", "4,570", "4,110", "3,200", "2,290", "5,480", "5,020", "4,570", "4,110", "3,200", "2,290", "3,620", "3,320", "3,020", "2,720", "2,120", "1,510", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "8,910", "8,170", "7,430", "6,690", "5,200", "3,720", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "5,480", "5,020", "4,570", "4,110", "3,200", "2,290", "5,480", "5,020", "4,570", "4,110", "3,200", "2,290", "3,620", "3,320", "3,020", "2,720", "2,120", "1,510", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,890", "7,230", "6,580", "5,920", "4,610", "3,290", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "7,150", "6,550", "5,960", "5,360", "4,170", "2,980", "6,310", "5,790", "5,260", "4,740", "3,690", "2,630", "6,310", "5,790", "5,260", "4,740", "3,690", "2,630", "4,920", "4,510", "4,100", "3,690", "2,870", "2,050", "4,920", "4,510", "4,100", "3,690", "2,870", "2,050", "3,250", "2,980", "2,710", "2,440", "1,900", "1,360", "7,060", "6,470", "5,880", "5,290", "4,120", "2,940", "7,060", "6,470", "5,880", "5,290", "4,120", "2,940", "7,060", "6,470", "5,880", "5,290", "4,120", "2,940", "6,410", "5,870", "5,340", "4,810", "3,740", "2,670", "6,410", "5,870", "5,340", "4,810", "3,740", "2,670", "5,670", "5,190", "4,720", "4,250", "3,310", "2,360", "5,670", "5,190", "4,720", "4,250", "3,310", "2,360", "4,370", "4,000", "3,640", "3,280", "2,550", "1,820", "4,370", "4,000", "3,640", "3,280", "2,550", "1,820", "2,790", "2,560", "2,320", "2,090", "1,630", "1,160", "6,310", "5,790", "5,260", "4,740", "3,690", "2,630", "6,310", "5,790", "5,260", "4,740", "3,690", "2,630", "6,310", "5,790", "5,260", "4,740", "3,690", "2,630", "5,760", "5,280", "4,800", "4,320", "3,360", "2,400", "5,760", "5,280", "4,800", "4,320", "3,360", "2,400", "5,020", "4,600", "4,180", "3,760", "2,930", "2,090", "5,020", "4,600", "4,180", "3,760", "2,930", "2,090", "3,720", "3,410", "3,100", "2,790", "2,170", "1,550", "3,720", "3,410", "3,100", "2,790", "2,170", "1,550", "2,420", "2,220", "2,020", "1,810", "1,410", "1,010", "5,290", "4,850", "4,410", "3,970", "3,090", "2,210", "5,290", "4,850", "4,410", "3,970", "3,090", "2,210", "5,290", "4,850", "4,410", "3,970", "3,090", "2,210", "4,830", "4,430", "4,030", "3,620", "2,820", "2,020", "4,830", "4,430", "4,030", "3,620", "2,820", "2,020", "4,370", "4,000", "3,640", "3,280", "2,550", "1,820", "4,370", "4,000", "3,640", "3,280", "2,550", "1,820", "3,160", "2,900", "2,630", "2,370", "1,850", "1,320", "3,160", "2,900", "2,630", "2,370", "1,850", "1,320", "2,050", "1,880", "1,710", "1,540", "1,200", "860", "4,460", "4,090", "3,720", "3,350", "2,600", "1,860", "4,460", "4,090", "3,720", "3,350", "2,600", "1,860", "4,460", "4,090", "3,720", "3,350", "2,600", "1,860", "3,990", "3,660", "3,330", "3,000", "2,330", "1,670", "3,990", "3,660", "3,330", "3,000", "2,330", "1,670", "3,620", "3,320", "3,020", "2,720", "2,120", "1,510", "3,620", "3,320", "3,020", "2,720", "2,120", "1,510", "2,600", "2,390", "2,170", "1,950", "1,520", "1,090", "2,600", "2,390", "2,170", "1,950", "1,520", "1,090", "1,770", "1,620", "1,470", "1,330", "1,030", "740", "3,720", "3,410", "3,100", "2,790", "2,170", "1,550", "3,720", "3,410", "3,100", "2,790", "2,170", "1,550", "3,720", "3,410", "3,100", "2,790", "2,170", "1,550", "3,350", "3,070", "2,790", "2,510", "1,950", "1,400", "3,350", "3,070", "2,790", "2,510", "1,950", "1,400", "2,970", "2,730", "2,480", "2,230", "1,740", "1,240", "2,970", "2,730", "2,480", "2,230", "1,740", "1,240", "2,140", "1,960", "1,780", "1,610", "1,250", "890", "2,140", "1,960", "1,780", "1,610", "1,250", "890", "1,490", "1,370", "1,240", "1,120", "870", "620", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "27,100", "24,840", "22,580", "20,340", "15,820", "11,300", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "24,320", "22,300", "20,260", "18,240", "14,200", "10,140", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "20,800", "19,060", "17,340", "15,600", "12,140", "8,680", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "16,720", "15,320", "13,920", "12,540", "9,760", "6,960", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "21,160", "19,400", "17,640", "15,880", "12,360", "8,820", "21,160", "19,400", "17,640", "15,880", "12,360", "8,820", "18,380", "16,860", "15,320", "13,780", "10,720", "7,660", "18,380", "16,860", "15,320", "13,780", "10,720", "7,660", "14,480", "13,280", "12,080", "10,860", "8,460", "6,040", "14,480", "13,280", "12,080", "10,860", "8,460", "6,040", "10,960", "10,040", "9,140", "8,220", "6,400", "4,580", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "23,400", "21,440", "19,500", "17,540", "13,660", "9,760", "21,160", "19,400", "17,640", "15,880", "12,360", "8,820", "21,160", "19,400", "17,640", "15,880", "12,360", "8,820", "18,380", "16,860", "15,320", "13,780", "10,720", "7,660", "18,380", "16,860", "15,320", "13,780", "10,720", "7,660", "14,480", "13,280", "12,080", "10,860", "8,460", "6,040", "14,480", "13,280", "12,080", "10,860", "8,460", "6,040", "10,960", "10,040", "9,140", "8,220", "6,400", "4,580", "20,600", "18,900", "17,180", "15,460", "12,020", "8,600", "20,600", "18,900", "17,180", "15,460", "12,020", "8,600", "20,600", "18,900", "17,180", "15,460", "12,020", "8,600", "18,560", "17,020", "15,480", "13,920", "10,840", "7,740", "18,560", "17,020", "15,480", "13,920", "10,840", "7,740", "16,160", "14,820", "13,460", "12,120", "9,420", "6,740", "16,160", "14,820", "13,460", "12,120", "9,420", "6,740", "12,620", "11,580", "10,520", "9,480", "7,380", "5,260", "12,620", "11,580", "10,520", "9,480", "7,380", "5,260", "9,480", "8,680", "7,900", "7,100", "5,540", "3,960", "17,820", "16,340", "14,860", "13,380", "10,400", "7,440", "17,820", "16,340", "14,860", "13,380", "10,400", "7,440", "17,820", "16,340", "14,860", "13,380", "10,400", "7,440", "16,160", "14,820", "13,460", "12,120", "9,420", "6,740", "16,160", "14,820", "13,460", "12,120", "9,420", "6,740", "14,120", "12,940", "11,760", "10,580", "8,240", "5,880", "14,120", "12,940", "11,760", "10,580", "8,240", "5,880", "10,780", "9,880", "8,980", "8,080", "6,280", "4,500", "10,780", "9,880", "8,980", "8,080", "6,280", "4,500", "7,980", "7,320", "6,660", "6,000", "4,660", "3,340", "15,600", "14,300", "13,000", "11,700", "9,100", "6,500", "15,600", "14,300", "13,000", "11,700", "9,100", "6,500", "15,600", "14,300", "13,000", "11,700", "9,100", "6,500", "13,920", "12,760", "11,600", "10,440", "8,120", "5,800", "13,920", "12,760", "11,600", "10,440", "8,120", "5,800", "12,260", "11,240", "10,220", "9,200", "7,160", "5,120", "12,260", "11,240", "10,220", "9,200", "7,160", "5,120", "8,920", "8,180", "7,440", "6,700", "5,200", "3,720", "8,920", "8,180", "7,440", "6,700", "5,200", "3,720", "6,700", "6,140", "5,580", "5,020", "3,900", "2,800", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "12,820", "11,740", "10,680", "9,620", "7,480", "5,340", "11,700", "10,720", "9,760", "8,780", "6,840", "4,880", "11,700", "10,720", "9,760", "8,780", "6,840", "4,880", "10,400", "9,540", "8,680", "7,800", "6,080", "4,340", "10,400", "9,540", "8,680", "7,800", "6,080", "4,340", "7,440", "6,820", "6,200", "5,580", "4,340", "3,100", "7,440", "6,820", "6,200", "5,580", "4,340", "3,100", "5,400", "4,940", "4,500", "4,040", "3,140", "2,260", "10,400", "9,540", "8,680", "7,800", "6,080", "4,340", "10,400", "9,540", "8,680", "7,800", "6,080", "4,340", "10,400", "9,540", "8,680", "7,800", "6,080", "4,340", "9,480", "8,680", "7,900", "7,100", "5,540", "3,960", "9,480", "8,680", "7,900", "7,100", "5,540", "3,960", "8,540", "7,840", "7,120", "6,420", "4,980", "3,560", "8,540", "7,840", "7,120", "6,420", "4,980", "3,560", "6,320", "5,800", "5,260", "4,740", "3,700", "2,640", "6,320", "5,800", "5,260", "4,740", "3,700", "2,640", "4,460", "4,100", "3,720", "3,360", "2,600", "1,860", "8,920", "8,180", "7,440", "6,700", "5,200", "3,720", "8,920", "8,180", "7,440", "6,700", "5,200", "3,720", "8,920", "8,180", "7,440", "6,700", "5,200", "3,720", "7,980", "7,320", "6,660", "6,000", "4,660", "3,340", "7,980", "7,320", "6,660", "6,000", "4,660", "3,340", "7,240", "6,640", "6,040", "5,440", "4,240", "3,020", "7,240", "6,640", "6,040", "5,440", "4,240", "3,020", "5,200", "4,780", "4,340", "3,900", "3,040", "2,180", "5,200", "4,780", "4,340", "3,900", "3,040", "2,180", "3,720", "3,420", "3,100", "2,800", "2,180", "1,560", "105,810", "96,990", "88,170", "79,350", "61,710", "44,100", "91,890", "84,210", "76,560", "68,910", "53,610", "38,280", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "69,600", "63,810", "58,020", "52,200", "40,620", "29,010", "61,260", "56,160", "51,060", "45,960", "35,730", "25,530", "52,920", "48,510", "44,100", "39,690", "30,870", "22,050", "47,340", "43,380", "39,450", "35,520", "27,630", "19,740", "41,760", "38,280", "34,800", "31,320", "24,360", "17,400", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "89,100", "81,660", "74,250", "66,810", "51,990", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "75,180", "68,910", "62,640", "56,370", "43,860", "31,320", "64,050", "58,710", "53,370", "48,030", "37,350", "26,700", "58,470", "53,610", "48,720", "43,860", "34,110", "24,360", "50,130", "45,960", "41,760", "37,590", "29,250", "20,880", "44,550", "40,830", "37,140", "33,420", "26,010", "18,570", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "77,970", "71,460", "64,980", "58,470", "45,480", "32,490", "69,600", "63,810", "58,020", "52,200", "40,620", "29,010", "64,050", "58,710", "53,370", "48,030", "37,350", "26,700", "58,470", "53,610", "48,720", "43,860", "34,110", "24,360", "55,680", "51,060", "46,410", "41,760", "32,490", "23,220", "47,340", "43,380", "39,450", "35,520", "27,630", "19,740", "41,760", "38,280", "34,800", "31,320", "24,360", "17,400", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "66,810", "61,260", "55,680", "50,130", "39,000", "27,840", "61,260", "56,160", "51,060", "45,960", "35,730", "25,530", "58,470", "53,610", "48,720", "43,860", "34,110", "24,360", "55,680", "51,060", "46,410", "41,760", "32,490", "23,220", "52,920", "48,510", "44,100", "39,690", "30,870", "22,050", "44,550", "40,830", "37,140", "33,420", "26,010", "18,570", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "58,470", "53,610", "48,720", "43,860", "34,110", "24,360", "55,680", "51,060", "46,410", "41,760", "32,490", "23,220", "52,920", "48,510", "44,100", "39,690", "30,870", "22,050", "50,130", "45,960", "41,760", "37,590", "29,250", "20,880", "47,340", "43,380", "39,450", "35,520", "27,630", "19,740", "41,760", "38,280", "34,800", "31,320", "24,360", "17,400", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "50,130", "45,960", "41,760", "37,590", "29,250", "20,880", "47,340", "43,380", "39,450", "35,520", "27,630", "19,740", "44,550", "40,830", "37,140", "33,420", "26,010", "18,570", "41,760", "38,280", "34,800", "31,320", "24,360", "17,400", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "22,290", "20,430", "18,570", "16,710", "13,020", "9,300", "41,760", "38,280", "34,800", "31,320", "24,360", "17,400", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "22,290", "20,430", "18,570", "16,710", "13,020", "9,300", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "39,000", "35,730", "32,490", "29,250", "22,740", "16,260", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "22,290", "20,430", "18,570", "16,710", "13,020", "9,300", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "16,710", "15,330", "13,920", "12,540", "9,750", "6,960", "36,210", "33,180", "30,180", "27,150", "21,120", "15,090", "33,420", "30,630", "27,840", "25,080", "19,500", "13,920", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "22,290", "20,430", "18,570", "16,710", "13,020", "9,300", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "16,710", "15,330", "13,920", "12,540", "9,750", "6,960", "13,920", "12,780", "11,610", "10,440", "8,130", "5,820", "30,630", "28,080", "25,530", "22,980", "17,880", "12,780", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "27,840", "25,530", "23,220", "20,880", "16,260", "11,610", "25,080", "22,980", "20,880", "18,810", "14,640", "10,440", "22,290", "20,430", "18,570", "16,710", "13,020", "9,300", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "16,710", "15,330", "13,920", "12,540", "9,750", "6,960", "13,920", "12,780", "11,610", "10,440", "8,130", "5,820", "11,160", "10,230", "9,300", "8,370", "6,510", "4,650", "19,500", "17,880", "16,260", "14,640", "11,370", "8,130", "16,710", "15,330", "13,920", "12,540", "9,750", "6,960", "16,710", "15,330", "13,920", "12,540", "9,750", "6,960", "13,920", "12,780", "11,610", "10,440", "8,130", "5,820", "13,920", "12,780", "11,610", "10,440", "8,130", "5,820", "13,920", "12,780", "11,610", "10,440", "8,130", "5,820", "11,160", "10,230", "9,300", "8,370", "6,510", "4,650", "11,160", "10,230", "9,300", "8,370", "6,510", "4,650", "8,370", "7,680", "6,960", "6,270", "4,890", "3,480", "8,370", "7,680", "6,960", "6,270", "4,890", "3,480", "163,320", "149,720", "136,120", "122,520", "95,280", "68,080", "137,360", "125,920", "114,480", "103,000", "80,120", "57,240", "126,200", "115,680", "105,200", "94,680", "73,640", "52,600", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "96,520", "88,480", "80,440", "72,400", "56,320", "40,240", "81,680", "74,880", "68,080", "61,280", "47,640", "34,040", "70,560", "64,680", "58,800", "52,920", "41,160", "29,400", "63,120", "57,840", "52,600", "47,360", "36,840", "26,320", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "133,640", "122,520", "111,360", "100,240", "77,960", "55,680", "126,200", "115,680", "105,200", "94,680", "73,640", "52,600", "115,080", "105,480", "95,920", "86,320", "67,120", "47,960", "103,960", "95,280", "86,640", "77,960", "60,640", "43,320", "89,080", "81,680", "74,240", "66,840", "52,000", "37,120", "77,960", "71,480", "64,960", "58,480", "45,480", "32,480", "66,840", "61,280", "55,680", "50,120", "39,000", "27,840", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "118,800", "108,880", "99,000", "89,080", "69,320", "49,520", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "103,960", "95,280", "86,640", "77,960", "60,640", "43,320", "96,520", "88,480", "80,440", "72,400", "56,320", "40,240", "85,400", "78,280", "71,160", "64,040", "49,800", "35,600", "7,440", "6,840", "6,200", "5,600", "4,360", "3,120", "63,120", "57,840", "52,600", "47,360", "36,840", "26,320", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "107,640", "98,680", "89,720", "80,760", "62,800", "44,880", "100,240", "91,880", "83,520", "75,160", "58,480", "41,760", "92,800", "85,080", "77,360", "69,600", "54,160", "38,680", "89,080", "81,680", "74,240", "66,840", "52,000", "37,120", "81,680", "74,880", "68,080", "61,280", "47,640", "34,040", "70,560", "64,680", "58,800", "52,920", "41,160", "29,400", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "92,800", "85,080", "77,360", "69,600", "54,160", "38,680", "89,080", "81,680", "74,240", "66,840", "52,000", "37,120", "85,400", "78,280", "71,160", "64,040", "49,800", "35,600", "81,680", "74,880", "68,080", "61,280", "47,640", "34,040", "74,240", "68,080", "61,880", "55,680", "43,320", "30,960", "66,840", "61,280", "55,680", "50,120", "39,000", "27,840", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "74,240", "68,080", "61,880", "55,680", "43,320", "30,960", "70,560", "64,680", "58,800", "52,920", "41,160", "29,400", "66,840", "61,280", "55,680", "50,120", "39,000", "27,840", "63,120", "57,840", "52,600", "47,360", "36,840", "26,320", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "37,120", "34,040", "30,960", "27,840", "21,680", "15,480", "63,120", "57,840", "52,600", "47,360", "36,840", "26,320", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "37,120", "34,040", "30,960", "27,840", "21,680", "15,480", "33,440", "30,640", "27,840", "25,080", "19,520", "13,920", "59,400", "54,440", "49,520", "44,560", "34,680", "24,760", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "37,120", "34,040", "30,960", "27,840", "21,680", "15,480", "33,440", "30,640", "27,840", "25,080", "19,520", "13,920", "29,720", "27,240", "24,760", "22,280", "17,360", "12,400", "55,680", "51,040", "46,400", "41,760", "32,480", "23,200", "52,000", "47,640", "43,320", "39,000", "30,320", "21,680", "48,280", "44,240", "40,240", "36,200", "28,160", "20,120", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "37,120", "34,040", "30,960", "27,840", "21,680", "15,480", "33,440", "30,640", "27,840", "25,080", "19,520", "13,920", "29,720", "27,240", "24,760", "22,280", "17,360", "12,400", "26,000", "23,840", "21,680", "19,520", "15,160", "10,840", "44,560", "40,840", "37,120", "33,440", "26,000", "18,560", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "40,840", "37,440", "34,040", "30,640", "23,840", "17,040", "37,120", "34,040", "30,960", "27,840", "21,680", "15,480", "33,440", "30,640", "27,840", "25,080", "19,520", "13,920", "29,720", "27,240", "24,760", "22,280", "17,360", "12,400", "29,720", "27,240", "24,760", "22,280", "17,360", "12,400", "26,000", "23,840", "21,680", "19,520", "15,160", "10,840", "22,280", "20,440", "18,560", "16,720", "13,000", "9,280", "18,560", "17,040", "15,480", "13,920", "10,840", "7,760", "29,720", "27,240", "24,760", "22,280", "17,360", "12,400", "26,000", "23,840", "21,680", "19,520", "15,160", "10,840", "26,000", "23,840", "21,680", "19,520", "15,160", "10,840", "22,280", "20,440", "18,560", "16,720", "13,000", "9,280", "22,280", "20,440", "18,560", "16,720", "13,000", "9,280", "22,280", "20,440", "18,560", "16,720", "13,000", "9,280", "18,560", "17,040", "15,480", "13,920", "10,840", "7,760", "18,560", "17,040", "15,480", "13,920", "10,840", "7,760", "14,880", "13,640", "12,400", "11,160", "8,680", "6,200", "14,880", "13,640", "12,400", "11,160", "8,680", "6,200", "301,600", "276,450", "251,350", "226,200", "175,950", "125,700", "241,300", "221,150", "201,050", "180,950", "140,750", "100,550", "213,450", "195,650", "177,850", "160,100", "124,500", "88,950", "176,350", "161,650", "146,950", "132,250", "102,850", "73,500", "148,500", "136,100", "123,750", "111,350", "86,650", "61,900", "125,300", "114,850", "104,400", "93,950", "73,100", "52,200", "106,750", "97,850", "88,950", "80,050", "62,250", "44,500", "92,800", "85,100", "77,350", "69,600", "54,150", "38,700", "83,550", "76,600", "69,600", "62,650", "48,750", "34,800", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "245,900", "225,450", "204,950", "184,450", "143,450", "102,500", "222,700", "204,150", "185,600", "167,050", "129,950", "92,800", "199,500", "182,900", "166,250", "149,650", "116,400", "83,150", "162,400", "148,900", "135,350", "121,800", "94,750", "67,700", "139,200", "127,600", "116,000", "104,400", "81,200", "58,000", "116,000", "106,350", "96,700", "87,000", "67,700", "48,350", "97,450", "89,350", "81,200", "73,100", "56,850", "40,600", "83,550", "76,600", "69,600", "62,650", "48,750", "34,800", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "199,500", "182,900", "166,250", "149,650", "116,400", "83,150", "180,950", "165,900", "150,800", "135,750", "105,550", "75,400", "167,050", "153,150", "139,200", "125,300", "97,450", "69,600", "143,850", "131,850", "119,900", "107,900", "83,900", "59,950", "129,950", "119,100", "108,300", "97,450", "75,800", "54,150", "111,350", "102,100", "92,800", "83,550", "65,000", "46,400", "92,800", "85,100", "77,350", "69,600", "54,150", "38,700", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "167,050", "153,150", "139,200", "125,300", "97,450", "69,600", "153,150", "140,350", "127,600", "114,850", "89,350", "63,800", "139,200", "127,600", "116,000", "104,400", "81,200", "58,000", "129,950", "119,100", "108,300", "97,450", "75,800", "54,150", "120,650", "110,600", "100,550", "90,500", "70,400", "50,300", "106,750", "97,850", "88,950", "80,050", "62,250", "44,500", "88,200", "80,850", "73,500", "66,150", "51,450", "36,750", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "148,500", "136,100", "123,750", "111,350", "86,650", "61,900", "139,200", "127,600", "116,000", "104,400", "81,200", "58,000", "129,950", "119,100", "108,300", "97,450", "75,800", "54,150", "120,650", "110,600", "100,550", "90,500", "70,400", "50,300", "111,350", "102,100", "92,800", "83,550", "65,000", "46,400", "97,450", "89,350", "81,200", "73,100", "56,850", "40,600", "83,550", "76,600", "69,600", "62,650", "48,750", "34,800", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "125,300", "114,850", "104,400", "93,950", "73,100", "52,200", "116,000", "106,350", "96,700", "87,000", "67,700", "48,350", "111,350", "102,100", "92,800", "83,550", "65,000", "46,400", "106,750", "97,850", "88,950", "80,050", "62,250", "44,500", "97,450", "89,350", "81,200", "73,100", "56,850", "40,600", "88,200", "80,850", "73,500", "66,150", "51,450", "36,750", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "55,700", "51,050", "46,400", "41,800", "32,500", "23,200", "97,450", "89,350", "81,200", "73,100", "56,850", "40,600", "92,800", "85,100", "77,350", "69,600", "54,150", "38,700", "88,200", "80,850", "73,500", "66,150", "51,450", "36,750", "83,550", "76,600", "69,600", "62,650", "48,750", "34,800", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "55,700", "51,050", "46,400", "41,800", "32,500", "23,200", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "88,200", "80,850", "73,500", "66,150", "51,450", "36,750", "83,550", "76,600", "69,600", "62,650", "48,750", "34,800", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "55,700", "51,050", "46,400", "41,800", "32,500", "23,200", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "78,900", "72,300", "65,750", "59,200", "46,050", "32,900", "74,250", "68,050", "61,900", "55,700", "43,350", "30,950", "69,600", "63,800", "58,000", "52,200", "40,600", "29,000", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "55,700", "51,050", "46,400", "41,800", "32,500", "23,200", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "41,800", "38,300", "34,800", "31,350", "24,400", "17,400", "65,000", "59,550", "54,150", "48,750", "37,900", "27,100", "60,350", "55,300", "50,300", "45,250", "35,200", "25,150", "55,700", "51,050", "46,400", "41,800", "32,500", "23,200", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "41,800", "38,300", "34,800", "31,350", "24,400", "17,400", "37,150", "34,050", "30,950", "27,850", "21,700", "15,500", "32,500", "29,800", "27,100", "24,400", "18,950", "13,550", "51,050", "46,800", "42,550", "38,300", "29,800", "21,300", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "46,400", "42,550", "38,700", "34,800", "27,100", "19,350", "41,800", "38,300", "34,800", "31,350", "24,400", "17,400", "37,150", "34,050", "30,950", "27,850", "21,700", "15,500", "37,150", "34,050", "30,950", "27,850", "21,700", "15,500", "32,500", "29,800", "27,100", "24,400", "18,950", "13,550", "32,500", "29,800", "27,100", "24,400", "18,950", "13,550", "27,850", "25,550", "23,200", "20,900", "16,250", "11,600", "23,200", "21,300", "19,350", "17,400", "13,550", "9,700", "361,920", "331,740", "301,620", "271,440", "211,140", "150,840", "289,560", "265,380", "241,260", "217,140", "168,900", "120,660", "256,140", "234,780", "213,420", "192,120", "149,400", "106,740", "211,620", "193,980", "176,340", "158,700", "123,420", "88,200", "178,200", "163,320", "148,500", "133,620", "103,980", "74,280", "150,360", "137,820", "125,280", "112,740", "87,720", "62,640", "128,100", "117,420", "106,740", "96,060", "74,700", "53,400", "111,360", "102,120", "92,820", "83,520", "64,980", "46,440", "100,260", "91,920", "83,520", "75,180", "58,500", "41,760", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "295,080", "270,540", "245,940", "221,340", "172,140", "123,000", "267,240", "244,980", "222,720", "200,460", "155,940", "111,360", "239,400", "219,480", "199,500", "179,580", "139,680", "99,780", "194,880", "178,680", "162,420", "146,160", "113,700", "81,240", "167,040", "153,120", "139,200", "125,280", "97,440", "69,600", "139,200", "127,620", "116,040", "104,400", "81,240", "58,020", "116,940", "107,220", "97,440", "87,720", "68,220", "48,720", "100,260", "91,920", "83,520", "75,180", "58,500", "41,760", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "239,400", "219,480", "199,500", "179,580", "139,680", "99,780", "217,140", "199,080", "180,960", "162,900", "126,660", "90,480", "200,460", "183,780", "167,040", "150,360", "116,940", "83,520", "172,620", "158,220", "143,880", "129,480", "100,680", "71,940", "155,940", "142,920", "129,960", "116,940", "90,960", "64,980", "133,620", "122,520", "111,360", "100,260", "78,000", "55,680", "111,360", "102,120", "92,820", "83,520", "64,980", "46,440", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "200,460", "183,780", "167,040", "150,360", "116,940", "83,520", "183,780", "168,420", "153,120", "137,820", "107,220", "76,560", "167,040", "153,120", "139,200", "125,280", "97,440", "69,600", "155,940", "142,920", "129,960", "116,940", "90,960", "64,980", "144,780", "132,720", "120,660", "108,600", "84,480", "60,360", "128,100", "117,420", "106,740", "96,060", "74,700", "53,400", "105,840", "97,020", "88,200", "79,380", "61,740", "44,100", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "178,200", "163,320", "148,500", "133,620", "103,980", "74,280", "167,040", "153,120", "139,200", "125,280", "97,440", "69,600", "155,940", "142,920", "129,960", "116,940", "90,960", "64,980", "144,780", "132,720", "120,660", "108,600", "84,480", "60,360", "133,620", "122,520", "111,360", "100,260", "78,000", "55,680", "116,940", "107,220", "97,440", "87,720", "68,220", "48,720", "100,260", "91,920", "83,520", "75,180", "58,500", "41,760", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "150,360", "137,820", "125,280", "112,740", "87,720", "62,640", "139,200", "127,620", "116,040", "104,400", "81,240", "58,020", "133,620", "122,520", "111,360", "100,260", "78,000", "55,680", "128,100", "117,420", "106,740", "96,060", "74,700", "53,400", "116,940", "107,220", "97,440", "87,720", "68,220", "48,720", "105,840", "97,020", "88,200", "79,380", "61,740", "44,100", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "66,840", "61,260", "55,680", "50,160", "39,000", "27,840", "116,940", "107,220", "97,440", "87,720", "68,220", "48,720", "111,360", "102,120", "92,820", "83,520", "64,980", "46,440", "105,840", "97,020", "88,200", "79,380", "61,740", "44,100", "100,260", "91,920", "83,520", "75,180", "58,500", "41,760", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "66,840", "61,260", "55,680", "50,160", "39,000", "27,840", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "105,840", "97,020", "88,200", "79,380", "61,740", "44,100", "100,260", "91,920", "83,520", "75,180", "58,500", "41,760", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "66,840", "61,260", "55,680", "50,160", "39,000", "27,840", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "94,680", "86,760", "78,900", "71,040", "55,260", "39,480", "89,100", "81,660", "74,280", "66,840", "52,020", "37,140", "83,520", "76,560", "69,600", "62,640", "48,720", "34,800", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "66,840", "61,260", "55,680", "50,160", "39,000", "27,840", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "50,160", "45,960", "41,760", "37,620", "29,280", "20,880", "78,000", "71,460", "64,980", "58,500", "45,480", "32,520", "72,420", "66,360", "60,360", "54,300", "42,240", "30,180", "66,840", "61,260", "55,680", "50,160", "39,000", "27,840", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "50,160", "45,960", "41,760", "37,620", "29,280", "20,880", "44,580", "40,860", "37,140", "33,420", "26,040", "18,600", "39,000", "35,760", "32,520", "29,280", "22,740", "16,260", "61,260", "56,160", "51,060", "45,960", "35,760", "25,560", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "55,680", "51,060", "46,440", "41,760", "32,520", "23,220", "50,160", "45,960", "41,760", "37,620", "29,280", "20,880", "44,580", "40,860", "37,140", "33,420", "26,040", "18,600", "44,580", "40,860", "37,140", "33,420", "26,040", "18,600", "39,000", "35,760", "32,520", "29,280", "22,740", "16,260", "39,000", "35,760", "32,520", "29,280", "22,740", "16,260", "33,420", "30,660", "27,840", "25,080", "19,500", "13,920", "27,840", "25,560", "23,220", "20,880", "16,260", "11,640", "591,080", "541,870", "492,589", "443,310", "344,820", "246,329", "480,689", "440,650", "400,610", "360,500", "280,420", "200,340", "428,750", "392,980", "357,280", "321,580", "250,109", "178,640", "357,280", "327,530", "297,710", "267,960", "208,460", "148,890", "298,830", "273,910", "248,989", "224,140", "174,300", "124,529", "253,329", "232,259", "211,120", "190,050", "147,770", "105,560", "220,850", "202,440", "184,100", "165,690", "128,869", "92,050", "194,880", "178,640", "162,400", "146,160", "113,680", "81,200", "175,420", "160,790", "146,160", "131,530", "102,340", "73,080", "162,400", "148,890", "135,380", "121,799", "94,780", "67,690", "474,179", "434,700", "395,150", "355,670", "276,640", "197,610", "435,190", "398,930", "362,670", "326,410", "253,889", "181,370", "402,710", "369,180", "335,650", "302,050", "234,919", "167,860", "331,310", "303,660", "276,080", "248,499", "193,270", "138,040", "279,300", "256,059", "232,749", "209,510", "162,960", "116,409", "233,869", "214,410", "194,880", "175,420", "136,430", "97,440", "207,900", "190,540", "173,250", "155,890", "121,309", "86,660", "181,930", "166,740", "151,620", "136,430", "106,120", "75,810", "162,400", "148,890", "135,380", "121,799", "94,780", "67,690", "149,450", "136,990", "124,529", "112,070", "87,150", "62,299", "396,270", "363,230", "330,190", "297,220", "231,139", "165,130", "363,790", "333,480", "303,170", "272,860", "212,240", "151,620", "337,820", "309,610", "281,470", "253,329", "197,050", "140,770", "298,830", "273,910", "248,989", "224,140", "174,300", "124,529", "259,839", "238,209", "216,510", "194,880", "151,620", "108,290", "220,850", "202,440", "184,100", "165,690", "128,869", "92,050", "194,880", "178,640", "162,400", "146,160", "113,680", "81,200", "168,910", "154,840", "140,770", "126,699", "98,560", "70,420", "149,450", "136,990", "124,529", "112,070", "87,150", "62,299", "136,430", "125,089", "113,680", "102,340", "79,590", "56,840", "331,310", "303,660", "276,080", "248,499", "193,270", "138,040", "311,780", "285,810", "259,839", "233,869", "181,930", "129,919", "292,320", "267,960", "243,599", "219,240", "170,520", "121,799", "272,860", "250,109", "227,360", "204,610", "159,180", "113,680", "240,379", "220,360", "200,340", "180,250", "140,210", "100,170", "201,390", "184,590", "167,860", "151,060", "117,459", "83,930", "175,420", "160,790", "146,160", "131,530", "102,340", "73,080", "155,890", "142,940", "129,919", "116,969", "91,000", "64,959", "136,430", "125,089", "113,680", "102,340", "79,590", "56,840", "123,479", "113,190", "102,900", "92,610", "72,030", "51,450", "285,810", "262,009", "238,209", "214,410", "166,740", "119,139", "266,350", "244,159", "221,970", "199,780", "155,400", "111,020", "253,329", "232,259", "211,120", "190,050", "147,770", "105,560", "240,379", "220,360", "200,340", "180,250", "140,210", "100,170", "214,410", "196,490", "178,640", "160,790", "125,089", "89,320", "181,930", "166,740", "151,620", "136,430", "106,120", "75,810", "155,890", "142,940", "129,919", "116,969", "91,000", "64,959", "142,940", "131,039", "119,139", "107,240", "83,370", "59,569", "129,919", "119,139", "108,290", "97,440", "75,810", "54,180", "116,969", "107,240", "97,440", "87,710", "68,250", "48,720", "233,869", "214,410", "194,880", "175,420", "136,430", "97,440", "214,410", "196,490", "178,640", "160,790", "125,089", "89,320", "201,390", "184,590", "167,860", "151,060", "117,459", "83,930", "188,370", "172,690", "157,010", "141,330", "109,900", "78,540", "175,420", "160,790", "146,160", "131,530", "102,340", "73,080", "155,890", "142,940", "129,919", "116,969", "91,000", "64,959", "142,940", "131,039", "119,139", "107,240", "83,370", "59,569", "129,919", "119,139", "108,290", "97,440", "75,810", "54,180", "116,969", "107,240", "97,440", "87,710", "68,250", "48,720", "103,950", "95,270", "86,660", "77,980", "60,689", "43,330", "233,869", "214,410", "194,880", "175,420", "136,430", "97,440", "214,410", "196,490", "178,640", "160,790", "125,089", "89,320", "201,390", "184,590", "167,860", "151,060", "117,459", "83,930", "188,370", "172,690", "157,010", "141,330", "109,900", "78,540", "175,420", "160,790", "146,160", "131,530", "102,340", "73,080", "155,890", "142,940", "129,919", "116,969", "91,000", "64,959", "142,940", "131,039", "119,139", "107,240", "83,370", "59,569", "129,919", "119,139", "108,290", "97,440", "75,810", "54,180", "116,969", "107,240", "97,440", "87,710", "68,250", "48,720", "103,950", "95,270", "86,660", "77,980", "60,689", "43,330", "194,880", "178,640", "162,400", "146,160", "113,680", "81,200", "181,930", "166,740", "151,620", "136,430", "106,120", "75,810", "168,910", "154,840", "140,770", "126,699", "98,560", "70,420", "162,400", "148,890", "135,380", "121,799", "94,780", "67,690", "149,450", "136,990", "124,529", "112,070", "87,150", "62,299", "136,430", "125,089", "113,680", "102,340", "79,590", "56,840", "123,479", "113,190", "102,900", "92,610", "72,030", "51,450", "116,969", "107,240", "97,440", "87,710", "68,250", "48,720", "103,950", "95,270", "86,660", "77,980", "60,689", "43,330", "97,440", "89,320", "81,200", "73,080", "56,840", "40,600", "181,930", "166,740", "151,620", "136,430", "106,120", "75,810", "168,910", "154,840", "140,770", "126,699", "98,560", "70,420", "155,890", "142,940", "129,919", "116,969", "91,000", "64,959", "149,450", "136,990", "124,529", "112,070", "87,150", "62,299", "136,430", "125,089", "113,680", "102,340", "79,590", "56,840", "123,479", "113,190", "102,900", "92,610", "72,030", "51,450", "110,460", "101,220", "92,050", "82,880", "64,469", "46,060", "103,950", "95,270", "86,660", "77,980", "60,689", "43,330", "97,440", "89,320", "81,200", "73,080", "56,840", "40,600", "91,000", "83,370", "75,810", "68,250", "53,060", "37,940", "123,479", "113,190", "102,900", "92,610", "72,030", "51,450", "116,969", "107,240", "97,440", "87,710", "68,250", "48,720", "110,460", "101,220", "92,050", "82,880", "64,469", "46,060", "103,950", "95,270", "86,660", "77,980", "60,689", "43,330", "97,440", "89,320", "81,200", "73,080", "56,840", "40,600", "97,440", "89,320", "81,200", "73,080", "56,840", "40,600", "91,000", "83,370", "75,810", "68,250", "53,060", "37,940", "77,980", "71,470", "64,959", "58,519", "45,500", "32,479", "64,959", "59,569", "54,180", "48,720", "37,940", "27,090", "52,010", "47,670", "43,330", "38,990", "30,379", "21,700", "77,980", "71,470", "64,959", "58,519", "45,500", "32,479", "71,470", "65,519", "59,569", "53,620", "41,720", "29,819", "71,470", "65,519", "59,569", "53,620", "41,720", "29,819", "64,959", "59,569", "54,180", "48,720", "37,940", "27,090", "58,519", "53,620", "48,720", "43,890", "34,160", "24,360", "58,519", "53,620", "48,720", "43,890", "34,160", "24,360", "52,010", "47,670", "43,330", "38,990", "30,379", "21,700", "52,010", "47,670", "43,330", "38,990", "30,379", "21,700", "45,500", "41,720", "37,940", "34,160", "26,530", "18,970", "38,990", "35,770", "32,479", "29,259", "22,750", "16,239", "675,520", "619,280", "562,960", "506,640", "394,080", "281,520", "549,360", "503,600", "457,840", "412,000", "320,480", "228,960", "490,000", "449,120", "408,320", "367,520", "285,840", "204,160", "408,320", "374,320", "340,240", "306,240", "238,240", "170,160", "341,520", "313,040", "284,560", "256,160", "199,200", "142,320", "289,520", "265,440", "241,280", "217,200", "168,880", "120,640", "252,400", "231,360", "210,400", "189,360", "147,280", "105,200", "222,720", "204,160", "185,600", "167,040", "129,920", "92,800", "200,480", "183,760", "167,040", "150,320", "116,960", "83,520", "185,600", "170,160", "154,720", "139,200", "108,320", "77,360", "541,920", "496,800", "451,600", "406,480", "316,160", "225,840", "497,360", "455,920", "414,480", "373,040", "290,160", "207,280", "460,240", "421,920", "383,600", "345,200", "268,480", "191,840", "378,640", "347,040", "315,520", "284,000", "220,880", "157,760", "319,200", "292,640", "266,000", "239,440", "186,240", "133,040", "267,280", "245,040", "222,720", "200,480", "155,920", "111,360", "237,600", "217,760", "198,000", "178,160", "138,640", "99,040", "207,920", "190,560", "173,280", "155,920", "121,280", "86,640", "185,600", "170,160", "154,720", "139,200", "108,320", "77,360", "170,800", "156,560", "142,320", "128,080", "99,600", "71,200", "452,880", "415,120", "377,360", "339,680", "264,160", "188,720", "415,760", "381,120", "346,480", "311,840", "242,560", "173,280", "386,080", "353,840", "321,680", "289,520", "225,200", "160,880", "341,520", "313,040", "284,560", "256,160", "199,200", "142,320", "296,960", "272,240", "247,440", "222,720", "173,280", "123,760", "252,400", "231,360", "210,400", "189,360", "147,280", "105,200", "222,720", "204,160", "185,600", "167,040", "129,920", "92,800", "193,040", "176,960", "160,880", "144,800", "112,640", "80,480", "170,800", "156,560", "142,320", "128,080", "99,600", "71,200", "155,920", "142,960", "129,920", "116,960", "90,960", "64,960", "378,640", "347,040", "315,520", "284,000", "220,880", "157,760", "356,320", "326,640", "296,960", "267,280", "207,920", "148,480", "334,080", "306,240", "278,400", "250,560", "194,880", "139,200", "311,840", "285,840", "259,840", "233,840", "181,920", "129,920", "274,720", "251,840", "228,960", "206,000", "160,240", "114,480", "230,160", "210,960", "191,840", "172,640", "134,240", "95,920", "200,480", "183,760", "167,040", "150,320", "116,960", "83,520", "178,160", "163,360", "148,480", "133,680", "104,000", "74,240", "155,920", "142,960", "129,920", "116,960", "90,960", "64,960", "141,120", "129,360", "117,600", "105,840", "82,320", "58,800", "326,640", "299,440", "272,240", "245,040", "190,560", "136,160", "304,400", "279,040", "253,680", "228,320", "177,600", "126,880", "289,520", "265,440", "241,280", "217,200", "168,880", "120,640", "274,720", "251,840", "228,960", "206,000", "160,240", "114,480", "245,040", "224,560", "204,160", "183,760", "142,960", "102,080", "207,920", "190,560", "173,280", "155,920", "121,280", "86,640", "178,160", "163,360", "148,480", "133,680", "104,000", "74,240", "163,360", "149,760", "136,160", "122,560", "95,280", "68,080", "148,480", "136,160", "123,760", "111,360", "86,640", "61,920", "133,680", "122,560", "111,360", "100,240", "78,000", "55,680", "267,280", "245,040", "222,720", "200,480", "155,920", "111,360", "245,040", "224,560", "204,160", "183,760", "142,960", "102,080", "230,160", "210,960", "191,840", "172,640", "134,240", "95,920", "215,280", "197,360", "179,440", "161,520", "125,600", "89,760", "200,480", "183,760", "167,040", "150,320", "116,960", "83,520", "178,160", "163,360", "148,480", "133,680", "104,000", "74,240", "163,360", "149,760", "136,160", "122,560", "95,280", "68,080", "148,480", "136,160", "123,760", "111,360", "86,640", "61,920", "133,680", "122,560", "111,360", "100,240", "78,000", "55,680", "118,800", "108,880", "99,040", "89,120", "69,360", "49,520", "267,280", "245,040", "222,720", "200,480", "155,920", "111,360", "245,040", "224,560", "204,160", "183,760", "142,960", "102,080", "230,160", "210,960", "191,840", "172,640", "134,240", "95,920", "215,280", "197,360", "179,440", "161,520", "125,600", "89,760", "200,480", "183,760", "167,040", "150,320", "116,960", "83,520", "178,160", "163,360", "148,480", "133,680", "104,000", "74,240", "163,360", "149,760", "136,160", "122,560", "95,280", "68,080", "148,480", "136,160", "123,760", "111,360", "86,640", "61,920", "133,680", "122,560", "111,360", "100,240", "78,000", "55,680", "118,800", "108,880", "99,040", "89,120", "69,360", "49,520", "222,720", "204,160", "185,600", "167,040", "129,920", "92,800", "207,920", "190,560", "173,280", "155,920", "121,280", "86,640", "193,040", "176,960", "160,880", "144,800", "112,640", "80,480", "185,600", "170,160", "154,720", "139,200", "108,320", "77,360", "170,800", "156,560", "142,320", "128,080", "99,600", "71,200", "155,920", "142,960", "129,920", "116,960", "90,960", "64,960", "141,120", "129,360", "117,600", "105,840", "82,320", "58,800", "133,680", "122,560", "111,360", "100,240", "78,000", "55,680", "118,800", "108,880", "99,040", "89,120", "69,360", "49,520", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "207,920", "190,560", "173,280", "155,920", "121,280", "86,640", "193,040", "176,960", "160,880", "144,800", "112,640", "80,480", "178,160", "163,360", "148,480", "133,680", "104,000", "74,240", "170,800", "156,560", "142,320", "128,080", "99,600", "71,200", "155,920", "142,960", "129,920", "116,960", "90,960", "64,960", "141,120", "129,360", "117,600", "105,840", "82,320", "58,800", "126,240", "115,680", "105,200", "94,720", "73,680", "52,640", "118,800", "108,880", "99,040", "89,120", "69,360", "49,520", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "104,000", "95,280", "86,640", "78,000", "60,640", "43,360", "141,120", "129,360", "117,600", "105,840", "82,320", "58,800", "133,680", "122,560", "111,360", "100,240", "78,000", "55,680", "126,240", "115,680", "105,200", "94,720", "73,680", "52,640", "118,800", "108,880", "99,040", "89,120", "69,360", "49,520", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "111,360", "102,080", "92,800", "83,520", "64,960", "46,400", "104,000", "95,280", "86,640", "78,000", "60,640", "43,360", "89,120", "81,680", "74,240", "66,880", "52,000", "37,120", "74,240", "68,080", "61,920", "55,680", "43,360", "30,960", "59,440", "54,480", "49,520", "44,560", "34,720", "24,800", "89,120", "81,680", "74,240", "66,880", "52,000", "37,120", "81,680", "74,880", "68,080", "61,280", "47,680", "34,080", "81,680", "74,880", "68,080", "61,280", "47,680", "34,080", "74,240", "68,080", "61,920", "55,680", "43,360", "30,960", "66,880", "61,280", "55,680", "50,160", "39,040", "27,840", "66,880", "61,280", "55,680", "50,160", "39,040", "27,840", "59,440", "54,480", "49,520", "44,560", "34,720", "24,800", "59,440", "54,480", "49,520", "44,560", "34,720", "24,800", "52,000", "47,680", "43,360", "39,040", "30,320", "21,680", "44,560", "40,880", "37,120", "33,440", "26,000", "18,560", "1,018,890", "934,020", "849,060", "764,190", "594,360", "424,530", "910,350", "834,480", "758,610", "682,740", "531,000", "379,350", "835,110", "765,540", "695,970", "626,400", "487,170", "348,030", "709,920", "650,700", "591,570", "532,440", "414,090", "295,830", "584,640", "535,950", "487,170", "438,480", "341,010", "243,630", "501,120", "459,360", "417,600", "375,840", "292,320", "208,800", "417,600", "382,770", "348,030", "313,200", "243,630", "174,060", "367,470", "336,870", "306,270", "275,670", "214,380", "153,180", "300,690", "275,670", "250,560", "225,540", "175,410", "125,280", "258,930", "237,330", "215,820", "194,220", "151,020", "107,910", "901,980", "826,830", "751,680", "676,440", "526,140", "375,840", "826,830", "757,890", "689,040", "620,100", "482,310", "344,520", "759,960", "696,690", "633,330", "569,970", "443,340", "316,710", "634,770", "581,850", "528,930", "476,100", "370,260", "264,510", "534,510", "489,960", "445,410", "400,860", "311,850", "222,750", "467,730", "428,760", "389,790", "350,820", "272,880", "194,940", "400,860", "367,470", "334,080", "300,690", "233,910", "167,040", "342,450", "313,920", "285,390", "256,860", "199,800", "142,740", "283,950", "260,280", "236,700", "213,030", "165,690", "118,350", "242,190", "222,030", "201,870", "181,710", "141,300", "100,980", "743,310", "681,390", "619,380", "557,460", "433,620", "309,690", "693,180", "635,400", "577,620", "519,930", "404,370", "288,810", "643,050", "589,500", "535,950", "482,310", "375,120", "268,020", "542,880", "497,610", "452,430", "407,160", "316,710", "226,260", "476,100", "436,410", "396,720", "357,030", "277,740", "198,360", "417,600", "382,770", "348,030", "313,200", "243,630", "174,060", "367,470", "336,870", "306,270", "275,670", "214,380", "153,180", "309,060", "283,320", "257,580", "231,750", "180,270", "128,790", "258,930", "237,330", "215,820", "194,220", "151,020", "107,910", "225,540", "206,730", "187,920", "169,110", "131,580", "93,960", "593,010", "543,600", "494,190", "444,780", "345,960", "247,140", "542,880", "497,610", "452,430", "407,160", "316,710", "226,260", "509,490", "467,010", "424,530", "382,140", "297,180", "212,310", "467,730", "428,760", "389,790", "350,820", "272,880", "194,940", "425,970", "390,420", "354,960", "319,500", "248,490", "177,480", "384,210", "352,170", "320,130", "288,180", "224,100", "160,110", "334,080", "306,270", "278,370", "250,560", "194,940", "139,230", "283,950", "260,280", "236,700", "213,030", "165,690", "118,350", "233,910", "214,380", "194,940", "175,410", "136,440", "97,470", "208,800", "191,430", "174,060", "156,600", "121,860", "87,030", "501,120", "459,360", "417,600", "375,840", "292,320", "208,800", "467,730", "428,760", "389,790", "350,820", "272,880", "194,940", "442,620", "405,810", "368,910", "332,010", "258,210", "184,500", "409,230", "375,120", "341,010", "306,990", "238,770", "170,550", "384,210", "352,170", "320,130", "288,180", "224,100", "160,110", "342,450", "313,920", "285,390", "256,860", "199,800", "142,740", "300,690", "275,670", "250,560", "225,540", "175,410", "125,280", "258,930", "237,330", "215,820", "194,220", "151,020", "107,910", "217,170", "199,080", "180,990", "162,900", "126,720", "90,540", "192,150", "176,130", "160,110", "144,090", "112,050", "80,100", "434,340", "398,070", "361,890", "325,710", "253,350", "180,990", "400,860", "367,470", "334,080", "300,690", "233,910", "167,040", "375,840", "344,520", "313,200", "281,880", "219,240", "156,600", "342,450", "313,920", "285,390", "256,860", "199,800", "142,740", "317,430", "290,970", "264,510", "238,050", "185,130", "132,300", "283,950", "260,280", "236,700", "213,030", "165,690", "118,350", "258,930", "237,330", "215,820", "194,220", "151,020", "107,910", "233,910", "214,380", "194,940", "175,410", "136,440", "97,470", "200,430", "183,780", "167,040", "150,390", "117,000", "83,520", "175,410", "160,830", "146,160", "131,580", "102,330", "73,080", "350,820", "321,570", "292,320", "263,070", "204,660", "146,160", "317,430", "290,970", "264,510", "238,050", "185,130", "132,300", "292,320", "268,020", "243,630", "219,240", "170,550", "121,860", "275,670", "252,630", "229,680", "206,730", "160,830", "114,840", "258,930", "237,330", "215,820", "194,220", "151,020", "107,910", "242,190", "222,030", "201,870", "181,710", "141,300", "100,980", "225,540", "206,730", "187,920", "169,110", "131,580", "93,960", "208,800", "191,430", "174,060", "156,600", "121,860", "87,030", "183,780", "168,480", "153,180", "137,880", "107,190", "76,590", "158,760", "145,530", "132,300", "119,070", "92,610", "66,150", "292,320", "268,020", "243,630", "219,240", "170,550", "121,860", "275,670", "252,630", "229,680", "206,730", "160,830", "114,840", "267,300", "244,980", "222,750", "200,430", "155,970", "111,420", "250,560", "229,680", "208,800", "187,920", "146,160", "104,400", "233,910", "214,380", "194,940", "175,410", "136,440", "97,470", "217,170", "199,080", "180,990", "162,900", "126,720", "90,540", "200,430", "183,780", "167,040", "150,390", "117,000", "83,520", "175,410", "160,830", "146,160", "131,580", "102,330", "73,080", "167,040", "153,180", "139,230", "125,280", "97,470", "69,660", "142,020", "130,140", "118,350", "106,560", "82,890", "59,220", "267,300", "244,980", "222,750", "200,430", "155,970", "111,420", "250,560", "229,680", "208,800", "187,920", "146,160", "104,400", "233,910", "214,380", "194,940", "175,410", "136,440", "97,470", "225,540", "206,730", "187,920", "169,110", "131,580", "93,960", "217,170", "199,080", "180,990", "162,900", "126,720", "90,540", "200,430", "183,780", "167,040", "150,390", "117,000", "83,520", "175,410", "160,830", "146,160", "131,580", "102,330", "73,080", "158,760", "145,530", "132,300", "119,070", "92,610", "66,150", "150,390", "137,880", "125,280", "112,770", "87,750", "62,640", "125,280", "114,840", "104,400", "93,960", "73,080", "52,200", "183,780", "168,480", "153,180", "137,880", "107,190", "76,590", "175,410", "160,830", "146,160", "131,580", "102,330", "73,080", "167,040", "153,180", "139,230", "125,280", "97,470", "69,660", "158,760", "145,530", "132,300", "119,070", "92,610", "66,150", "150,390", "137,880", "125,280", "112,770", "87,750", "62,640", "142,020", "130,140", "118,350", "106,560", "82,890", "59,220", "133,650", "122,490", "111,420", "100,260", "78,030", "55,710", "125,280", "114,840", "104,400", "93,960", "73,080", "52,200", "108,630", "99,540", "90,540", "81,450", "63,360", "45,270", "91,890", "84,240", "76,590", "68,940", "53,640", "38,340", "125,280", "114,840", "104,400", "93,960", "73,080", "52,200", "117,000", "107,190", "97,470", "87,750", "68,220", "48,780", "108,630", "99,540", "90,540", "81,450", "63,360", "45,270", "100,260", "91,890", "83,520", "75,240", "58,500", "41,760", "100,260", "91,890", "83,520", "75,240", "58,500", "41,760", "91,890", "84,240", "76,590", "68,940", "53,640", "38,340", "83,520", "76,590", "69,660", "62,640", "48,780", "34,830", "75,240", "68,940", "62,640", "56,430", "43,920", "31,320", "66,870", "61,290", "55,710", "50,130", "39,060", "27,900", "58,500", "53,640", "48,780", "43,920", "34,110", "24,390", "1,967,200", "1,803,300", "1,639,300", "1,475,400", "1,147,600", "819,700", "1,456,900", "1,335,500", "1,214,100", "1,092,700", "849,900", "607,100", "1,280,600", "1,173,800", "1,067,100", "960,400", "747,000", "533,600", "1,002,200", "918,700", "835,200", "751,600", "584,600", "417,600", "798,000", "731,500", "665,000", "598,500", "465,500", "332,500", "658,900", "604,000", "549,100", "494,200", "384,400", "274,600", "547,500", "501,900", "456,300", "410,600", "319,400", "228,200", "464,000", "425,300", "386,700", "348,000", "270,700", "193,400", "389,800", "357,300", "324,800", "292,300", "227,400", "162,400", "334,100", "306,300", "278,400", "250,600", "194,900", "139,200", "1,484,700", "1,361,000", "1,237,200", "1,113,500", "866,100", "618,600", "1,262,000", "1,156,800", "1,051,700", "946,500", "736,200", "525,900", "1,150,600", "1,054,800", "958,900", "863,000", "671,200", "479,500", "937,200", "859,100", "781,000", "702,900", "546,700", "390,500", "760,900", "697,500", "634,100", "570,700", "443,900", "317,100", "621,700", "569,900", "518,100", "466,300", "362,700", "259,100", "510,400", "467,900", "425,300", "382,800", "297,800", "212,700", "436,200", "399,800", "363,500", "327,100", "254,400", "181,800", "361,900", "331,800", "301,600", "271,500", "211,100", "150,800", "315,500", "289,200", "263,000", "236,700", "184,100", "131,500", "1,197,000", "1,097,300", "997,500", "897,800", "698,300", "498,800", "1,076,400", "986,700", "897,000", "807,300", "627,900", "448,500", "992,900", "910,200", "827,400", "744,700", "579,200", "413,700", "863,000", "791,100", "719,200", "647,300", "503,400", "359,600", "705,300", "646,500", "587,700", "529,000", "411,400", "293,900", "584,600", "535,900", "487,200", "438,500", "341,100", "243,600", "473,300", "433,800", "394,400", "355,000", "276,100", "197,200", "399,000", "365,800", "332,500", "299,300", "232,800", "166,300", "334,100", "306,300", "278,400", "250,600", "194,900", "139,200", "297,000", "272,200", "247,500", "222,700", "173,300", "123,800", "1,002,200", "918,700", "835,200", "751,600", "584,600", "417,600", "918,700", "842,100", "765,600", "689,000", "535,900", "382,800", "853,700", "782,600", "711,400", "640,300", "498,000", "355,700", "760,900", "697,500", "634,100", "570,700", "443,900", "317,100", "649,600", "595,500", "541,300", "487,200", "378,900", "270,700", "538,200", "493,400", "448,500", "403,700", "314,000", "224,300", "436,200", "399,800", "363,500", "327,100", "254,400", "181,800", "371,200", "340,300", "309,300", "278,400", "216,600", "154,700", "306,300", "280,700", "255,200", "229,700", "178,700", "127,600", "278,400", "255,200", "232,000", "208,800", "162,400", "116,000", "807,300", "740,100", "672,800", "605,500", "471,000", "336,400", "742,400", "680,500", "618,600", "556,800", "433,100", "309,300", "696,000", "638,000", "580,000", "522,000", "406,000", "290,000", "649,600", "595,500", "541,300", "487,200", "378,900", "270,700", "593,900", "544,400", "494,900", "445,400", "346,500", "247,500", "482,600", "442,300", "402,100", "361,900", "281,500", "201,100", "399,000", "365,800", "332,500", "299,300", "232,800", "166,300", "343,400", "314,800", "286,200", "257,500", "200,300", "143,100", "194,900", "178,700", "162,400", "146,200", "113,700", "81,200", "259,900", "238,200", "216,600", "194,900", "151,600", "108,300", "621,700", "569,900", "518,100", "466,300", "362,700", "259,100", "575,300", "527,400", "479,500", "431,500", "335,600", "239,800", "538,200", "493,400", "448,500", "403,700", "314,000", "224,300", "501,100", "459,400", "417,600", "375,800", "292,300", "208,800", "454,700", "416,800", "378,900", "341,100", "265,300", "189,500", "417,600", "382,800", "348,000", "313,200", "243,600", "174,000", "352,700", "323,300", "293,900", "264,500", "205,700", "147,000", "306,300", "280,700", "255,200", "229,700", "178,700", "127,600", "259,900", "238,200", "216,600", "194,900", "151,600", "108,300", "232,000", "212,700", "193,400", "174,000", "135,400", "96,700", "501,100", "459,400", "417,600", "375,800", "292,300", "208,800", "464,000", "425,300", "386,700", "348,000", "270,700", "193,400", "436,200", "399,800", "363,500", "327,100", "254,400", "181,800", "408,300", "374,300", "340,300", "306,300", "238,200", "170,200", "380,500", "348,800", "317,100", "285,400", "222,000", "158,600", "352,700", "323,300", "293,900", "264,500", "205,700", "147,000", "315,500", "289,200", "263,000", "236,700", "184,100", "131,500", "278,400", "255,200", "232,000", "208,800", "162,400", "116,000", "241,300", "221,200", "201,100", "181,000", "140,800", "100,600", "213,500", "195,700", "177,900", "160,100", "124,500", "89,000", "454,700", "416,800", "378,900", "341,100", "265,300", "189,500", "426,900", "391,300", "355,700", "320,200", "249,000", "177,900", "399,000", "365,800", "332,500", "299,300", "232,800", "166,300", "371,200", "340,300", "309,300", "278,400", "216,600", "154,700", "343,400", "314,800", "286,200", "257,500", "200,300", "143,100", "324,800", "297,800", "270,700", "243,600", "189,500", "135,400", "297,000", "272,200", "247,500", "222,700", "173,300", "123,800", "259,900", "238,200", "216,600", "194,900", "151,600", "108,300", "222,700", "204,200", "185,600", "167,100", "130,000", "92,800", "194,900", "178,700", "162,400", "146,200", "113,700", "81,200", "380,500", "348,800", "317,100", "285,400", "222,000", "158,600", "352,700", "323,300", "293,900", "264,500", "205,700", "147,000", "334,100", "306,300", "278,400", "250,600", "194,900", "139,200", "315,500", "289,200", "263,000", "236,700", "184,100", "131,500", "297,000", "272,200", "247,500", "222,700", "173,300", "123,800", "278,400", "255,200", "232,000", "208,800", "162,400", "116,000", "259,900", "238,200", "216,600", "194,900", "151,600", "108,300", "241,300", "221,200", "201,100", "181,000", "140,800", "100,600", "213,500", "195,700", "177,900", "160,100", "124,500", "89,000", "185,600", "170,200", "154,700", "139,200", "108,300", "77,400", "232,000", "212,700", "193,400", "174,000", "135,400", "96,700", "222,700", "204,200", "185,600", "167,100", "130,000", "92,800", "213,500", "195,700", "177,900", "160,100", "124,500", "89,000", "204,200", "187,200", "170,200", "153,200", "119,100", "85,100", "194,900", "178,700", "162,400", "146,200", "113,700", "81,200", "185,600", "170,200", "154,700", "139,200", "108,300", "77,400", "176,400", "161,700", "147,000", "132,300", "102,900", "73,500", "167,100", "153,200", "139,200", "125,300", "97,500", "69,600", "157,800", "144,600", "131,500", "118,400", "92,100", "65,800", "148,500", "136,100", "123,800", "111,400", "86,700", "61,900", "148,500", "136,100", "123,800", "111,400", "86,700", "61,900", "139,200", "127,600", "116,000", "104,400", "81,200", "58,000", "130,000", "119,100", "108,300", "97,500", "75,800", "54,200", "120,700", "110,600", "100,600", "90,500", "70,400", "50,300", "120,700", "110,600", "100,600", "90,500", "70,400", "50,300", "111,400", "102,100", "92,800", "83,600", "65,000", "46,400", "111,400", "102,100", "92,800", "83,600", "65,000", "46,400", "102,100", "93,600", "85,100", "76,600", "59,600", "42,600", "92,800", "85,100", "77,400", "69,600", "54,200", "38,700", "92,800", "85,100", "77,400", "69,600", "54,200", "38,700", "7,516,000", "6,889,800", "6,263,400", "5,637,000", "4,384,400", "3,131,800", "5,753,000", "5,273,600", "4,794,200", "4,314,800", "3,356,000", "2,397,200", "4,918,000", "4,508,200", "4,098,400", "3,688,600", "2,868,800", "2,049,200", "4,175,600", "3,827,600", "3,479,800", "3,131,800", "2,435,800", "1,740,000", "3,433,400", "3,147,200", "2,861,200", "2,575,000", "2,002,800", "1,430,600", "2,821,000", "2,585,800", "2,350,800", "2,115,800", "1,645,600", "1,175,400", "2,319,800", "2,126,600", "1,933,200", "1,740,000", "1,353,200", "966,600", "1,948,600", "1,786,400", "1,624,000", "1,461,600", "1,136,800", "812,000", "1,651,800", "1,514,200", "1,376,400", "1,238,800", "963,600", "688,200", "1,429,000", "1,310,000", "1,191,000", "1,071,800", "833,600", "595,600", "6,124,200", "5,613,800", "5,103,600", "4,593,200", "3,572,600", "2,551,800", "5,196,400", "4,763,400", "4,330,200", "3,897,200", "3,031,200", "2,165,200", "4,546,800", "4,168,000", "3,789,000", "3,410,200", "2,652,400", "1,894,600", "3,804,400", "3,487,400", "3,170,400", "2,853,400", "2,219,400", "1,585,200", "3,155,000", "2,892,000", "2,629,200", "2,366,200", "1,840,400", "1,314,600", "2,542,600", "2,330,600", "2,118,800", "1,907,000", "1,483,200", "1,059,400", "2,097,200", "1,922,400", "1,747,600", "1,572,800", "1,223,400", "873,800", "1,781,600", "1,633,200", "1,484,800", "1,336,200", "1,039,400", "742,400", "1,521,800", "1,395,000", "1,268,200", "1,141,400", "887,800", "634,200", "1,317,800", "1,208,000", "1,098,200", "988,400", "768,800", "549,200", "5,010,800", "4,593,200", "4,175,600", "3,758,000", "2,923,000", "2,087,800", "4,546,800", "4,168,000", "3,789,000", "3,410,200", "2,652,400", "1,894,600", "4,082,800", "3,742,600", "3,402,400", "3,062,200", "2,381,800", "1,701,200", "3,433,400", "3,147,200", "2,861,200", "2,575,000", "2,002,800", "1,430,600", "2,876,600", "2,636,800", "2,397,200", "2,157,400", "1,678,000", "1,198,600", "2,282,800", "2,092,600", "1,902,200", "1,712,000", "1,331,600", "951,200", "1,911,600", "1,752,200", "1,593,000", "1,433,800", "1,115,200", "796,600", "1,577,600", "1,446,000", "1,314,600", "1,183,200", "920,200", "657,400", "1,373,400", "1,259,000", "1,144,600", "1,030,000", "801,200", "572,400", "1,206,400", "1,105,800", "1,005,400", "904,800", "703,800", "502,800", "4,268,400", "3,912,800", "3,557,000", "3,201,400", "2,490,000", "1,778,600", "3,897,200", "3,572,600", "3,247,800", "2,923,000", "2,273,400", "1,624,000", "3,619,000", "3,317,400", "3,015,800", "2,714,200", "2,111,000", "1,508,000", "3,062,200", "2,807,000", "2,551,800", "2,296,600", "1,786,400", "1,276,000", "2,598,200", "2,381,800", "2,165,200", "1,948,600", "1,515,600", "1,082,600", "2,097,200", "1,922,400", "1,747,600", "1,572,800", "1,223,400", "873,800", "1,781,600", "1,633,200", "1,484,800", "1,336,200", "1,039,400", "742,400", "1,466,200", "1,344,000", "1,221,800", "1,099,600", "855,400", "611,000", "1,280,600", "1,173,800", "1,067,200", "960,400", "747,000", "533,600", "1,132,200", "1,037,800", "943,400", "849,200", "660,400", "471,800", "3,526,200", "3,232,200", "2,938,400", "2,644,600", "2,057,000", "1,469,200", "3,247,800", "2,977,200", "2,706,400", "2,435,800", "1,894,600", "1,353,200", "3,062,200", "2,807,000", "2,551,800", "2,296,600", "1,786,400", "1,276,000", "2,691,000", "2,466,800", "2,242,600", "2,018,200", "1,569,800", "1,121,400", "2,319,800", "2,126,600", "1,933,200", "1,740,000", "1,353,200", "966,600", "1,893,000", "1,735,200", "1,577,600", "1,419,800", "1,104,400", "788,800", "1,633,200", "1,497,200", "1,361,000", "1,225,000", "952,800", "680,600", "1,354,800", "1,242,000", "1,129,000", "1,016,200", "790,400", "564,600", "1,187,800", "1,088,800", "989,800", "890,800", "693,000", "495,000", "1,058,000", "969,800", "881,600", "793,400", "617,200", "440,800", "2,691,000", "2,466,800", "2,242,600", "2,018,200", "1,569,800", "1,121,400", "2,524,000", "2,313,600", "2,103,400", "1,893,000", "1,472,400", "1,051,800", "2,338,400", "2,143,600", "1,948,600", "1,753,800", "1,364,200", "974,400", "2,134,200", "1,956,400", "1,778,600", "1,600,800", "1,245,000", "889,400", "1,967,200", "1,803,400", "1,639,400", "1,475,400", "1,147,600", "819,800", "1,707,400", "1,565,200", "1,422,800", "1,280,600", "996,000", "711,400", "1,484,800", "1,361,000", "1,237,200", "1,113,600", "866,200", "618,600", "1,262,000", "1,156,800", "1,051,800", "946,600", "736,200", "526,000", "1,132,200", "1,037,800", "943,400", "849,200", "660,400", "471,800", "1,002,200", "918,800", "835,200", "751,600", "584,600", "417,600", "2,152,800", "1,973,400", "1,794,000", "1,614,600", "1,255,800", "897,000", "1,985,800", "1,820,400", "1,654,800", "1,489,400", "1,158,400", "827,400", "1,855,800", "1,701,200", "1,546,600", "1,392,000", "1,082,600", "773,400", "1,744,600", "1,599,200", "1,453,800", "1,308,400", "1,017,600", "727,000", "1,633,200", "1,497,200", "1,361,000", "1,225,000", "952,800", "680,600", "1,521,800", "1,395,000", "1,268,200", "1,141,400", "887,800", "634,200", "1,354,800", "1,242,000", "1,129,000", "1,016,200", "790,400", "564,600", "1,169,200", "1,071,800", "974,400", "877,000", "682,200", "487,200", "1,058,000", "969,800", "881,600", "793,400", "617,200", "440,800", "928,000", "850,600", "773,400", "696,000", "541,400", "386,800", "1,837,400", "1,684,200", "1,531,200", "1,378,000", "1,071,800", "765,600", "1,707,400", "1,565,200", "1,422,800", "1,280,600", "996,000", "711,400", "1,596,000", "1,463,000", "1,330,000", "1,197,000", "931,000", "665,000", "1,484,800", "1,361,000", "1,237,200", "1,113,600", "866,200", "618,600", "1,373,400", "1,259,000", "1,144,600", "1,030,000", "801,200", "572,400", "1,280,600", "1,173,800", "1,067,200", "960,400", "747,000", "533,600", "1,187,800", "1,088,800", "989,800", "890,800", "693,000", "495,000", "1,039,400", "952,800", "866,200", "779,600", "606,400", "433,200", "946,600", "867,600", "788,800", "710,000", "552,200", "394,400", "853,800", "782,600", "711,400", "640,400", "498,000", "355,800", "1,484,800", "1,361,000", "1,237,200", "1,113,600", "866,200", "618,600", "1,410,600", "1,293,000", "1,175,400", "1,058,000", "822,800", "587,800", "1,336,200", "1,225,000", "1,113,600", "1,002,200", "779,600", "556,800", "1,262,000", "1,156,800", "1,051,800", "946,600", "736,200", "526,000", "1,206,400", "1,105,800", "1,005,400", "904,800", "703,800", "502,800", "1,132,200", "1,037,800", "943,400", "849,200", "660,400", "471,800", "1,058,000", "969,800", "881,600", "793,400", "617,200", "440,800", "928,000", "850,600", "773,400", "696,000", "541,400", "386,800", "853,800", "782,600", "711,400", "640,400", "498,000", "355,800", "779,600", "714,600", "649,600", "584,600", "454,800", "324,800", "761,000", "697,600", "634,200", "570,800", "444,000", "317,200", "723,800", "663,600", "603,200", "543,000", "422,200", "301,600", "686,800", "629,600", "572,400", "515,000", "400,600", "286,200", "649,600", "595,600", "541,400", "487,200", "379,000", "270,800", "612,600", "561,400", "510,400", "459,400", "357,400", "255,200", "575,400", "527,400", "479,600", "431,600", "335,600", "239,800", "538,200", "493,400", "448,600", "403,800", "314,000", "224,400", "519,800", "476,400", "433,200", "389,800", "303,200", "216,600", "501,200", "459,400", "417,600", "375,800", "292,400", "208,800", "482,600", "442,400", "402,200", "362,000", "281,600", "201,200", "352,800", "323,400", "294,000", "264,600", "205,800", "147,000", "334,200", "306,400", "278,400", "250,600", "195,000", "139,200", "315,600", "289,200", "263,000", "236,800", "184,200", "131,600", "297,000", "272,200", "247,600", "222,800", "173,400", "123,800", "278,400", "255,200", "232,000", "208,800", "162,400", "116,000", "278,400", "255,200", "232,000", "208,800", "162,400", "116,000", "260,000", "238,200", "216,600", "195,000", "151,600", "108,400", "260,000", "238,200", "216,600", "195,000", "151,600", "108,400", "241,400", "221,200", "201,200", "181,000", "140,800", "100,600", "241,400", "221,200", "201,200", "181,000", "140,800", "100,600", "18,372,600", "16,841,400", "15,310,500", "13,779,600", "10,717,500", "7,655,400", "14,753,700", "13,524,300", "12,294,900", "11,065,500", "8,606,400", "6,147,600", "12,526,800", "11,482,800", "10,439,100", "9,395,100", "7,307,400", "5,219,700", "10,578,300", "9,696,600", "8,815,200", "7,933,800", "6,170,700", "4,407,600", "8,351,100", "7,655,400", "6,959,400", "6,263,400", "4,871,700", "3,479,700", "6,820,200", "6,252,000", "5,683,500", "5,115,300", "3,978,600", "2,841,900", "5,428,500", "4,976,100", "4,523,700", "4,071,300", "3,166,500", "2,262,000", "4,454,100", "4,083,000", "3,711,600", "3,340,500", "2,598,300", "1,855,800", "3,563,400", "3,266,400", "2,969,400", "2,672,400", "2,078,700", "1,484,700", "2,922,900", "2,679,600", "2,436,000", "2,192,400", "1,705,200", "1,218,000", "15,588,900", "14,289,900", "12,990,600", "11,691,600", "9,093,600", "6,495,300", "13,779,600", "12,631,200", "11,482,800", "10,334,700", "8,038,200", "5,741,400", "11,830,800", "10,845,000", "9,859,200", "8,873,100", "6,901,500", "4,929,600", "9,882,300", "9,058,800", "8,235,300", "7,411,800", "5,764,800", "4,117,800", "7,794,600", "7,145,100", "6,495,300", "5,845,800", "4,546,800", "3,247,800", "6,263,400", "5,741,400", "5,219,700", "4,697,700", "3,653,700", "2,610,000", "5,010,900", "4,593,300", "4,175,700", "3,758,100", "2,922,900", "2,088,000", "4,036,500", "3,700,200", "3,363,900", "3,027,300", "2,354,700", "1,682,100", "3,368,400", "3,087,600", "2,807,100", "2,526,300", "1,965,000", "1,403,700", "2,756,100", "2,526,300", "2,296,800", "2,067,000", "1,607,700", "1,148,400", "13,362,000", "12,248,400", "11,134,800", "10,021,500", "7,794,600", "5,567,400", "11,970,000", "10,972,500", "9,975,000", "8,977,500", "6,982,500", "4,987,500", "10,299,900", "9,441,600", "8,583,300", "7,725,000", "6,008,400", "4,291,800", "8,768,700", "8,038,200", "7,307,400", "6,576,600", "5,115,300", "3,653,700", "6,959,400", "6,379,500", "5,799,600", "5,219,700", "4,059,600", "2,899,800", "5,706,600", "5,231,100", "4,755,600", "4,280,100", "3,329,100", "2,377,800", "4,593,300", "4,210,500", "3,827,700", "3,444,900", "2,679,600", "1,914,000", "3,758,100", "3,444,900", "3,131,700", "2,818,500", "2,192,400", "1,566,000", "3,173,700", "2,909,100", "2,644,800", "2,380,200", "1,851,300", "1,322,400", "2,589,000", "2,373,300", "2,157,600", "1,941,900", "1,510,200", "1,078,800", "11,134,800", "10,206,900", "9,279,000", "8,351,100", "6,495,300", "4,639,500", "10,160,700", "9,313,800", "8,467,200", "7,620,600", "5,927,100", "4,233,600", "9,047,100", "8,293,200", "7,539,300", "6,785,400", "5,277,600", "3,769,800", "7,516,200", "6,889,800", "6,263,400", "5,637,000", "4,384,500", "3,131,700", "6,402,600", "5,869,200", "5,335,500", "4,802,100", "3,735,000", "2,667,900", "5,150,100", "4,720,800", "4,291,800", "3,862,500", "3,004,200", "2,145,900", "4,175,700", "3,827,700", "3,479,700", "3,131,700", "2,436,000", "1,740,000", "3,479,700", "3,189,900", "2,899,800", "2,610,000", "2,029,800", "1,449,900", "3,006,600", "2,756,100", "2,505,600", "2,254,800", "1,753,800", "1,252,800", "2,421,900", "2,220,300", "2,018,400", "1,816,500", "1,413,000", "1,009,200", "9,186,300", "8,420,700", "7,655,400", "6,889,800", "5,358,900", "3,827,700", "8,351,100", "7,655,400", "6,959,400", "6,263,400", "4,871,700", "3,479,700", "7,655,400", "7,017,300", "6,379,500", "5,741,400", "4,465,800", "3,189,900", "6,541,800", "5,996,700", "5,451,600", "4,906,500", "3,816,000", "2,725,800", "5,567,400", "5,103,600", "4,639,500", "4,175,700", "3,247,800", "2,319,900", "4,593,300", "4,210,500", "3,827,700", "3,444,900", "2,679,600", "1,914,000", "3,758,100", "3,444,900", "3,131,700", "2,818,500", "2,192,400", "1,566,000", "3,257,100", "2,985,600", "2,714,400", "2,442,900", "1,899,900", "1,357,200", "2,783,700", "2,551,800", "2,319,900", "2,088,000", "1,623,900", "1,160,100", "2,282,700", "2,092,500", "1,902,300", "1,712,100", "1,331,700", "951,300", "6,541,800", "5,996,700", "5,451,600", "4,906,500", "3,816,000", "2,725,800", "5,845,800", "5,358,900", "4,871,700", "4,384,500", "3,410,100", "2,436,000", "5,428,500", "4,976,100", "4,523,700", "4,071,300", "3,166,500", "2,262,000", "5,010,900", "4,593,300", "4,175,700", "3,758,100", "2,922,900", "2,088,000", "4,593,300", "4,210,500", "3,827,700", "3,444,900", "2,679,600", "1,914,000", "4,036,500", "3,700,200", "3,363,900", "3,027,300", "2,354,700", "1,682,100", "3,479,700", "3,189,900", "2,899,800", "2,610,000", "2,029,800", "1,449,900", "2,978,700", "2,730,600", "2,482,200", "2,234,100", "1,737,600", "1,241,100", "2,561,100", "2,347,800", "2,134,200", "1,920,900", "1,494,000", "1,067,100", "2,143,500", "1,965,000", "1,786,500", "1,607,700", "1,250,400", "893,400", "5,567,400", "5,103,600", "4,639,500", "4,175,700", "3,247,800", "2,319,900", "5,150,100", "4,720,800", "4,291,800", "3,862,500", "3,004,200", "2,145,900", "4,732,500", "4,338,000", "3,943,800", "3,549,300", "2,760,600", "1,971,900", "4,314,900", "3,955,200", "3,595,800", "3,236,100", "2,517,000", "1,797,900", "3,758,100", "3,444,900", "3,131,700", "2,818,500", "2,192,400", "1,566,000", "3,340,500", "3,062,100", "2,783,700", "2,505,600", "1,948,800", "1,392,000", "3,062,100", "2,807,100", "2,551,800", "2,296,800", "1,786,500", "1,275,900", "2,700,300", "2,475,300", "2,250,300", "2,025,300", "1,575,300", "1,125,300", "2,282,700", "2,092,500", "1,902,300", "1,712,100", "1,331,700", "951,300", "1,865,100", "1,709,700", "1,554,300", "1,398,900", "1,088,100", "777,300", "3,869,400", "3,546,900", "3,224,700", "2,902,200", "2,257,200", "1,612,500", "3,646,800", "3,342,900", "3,039,000", "2,735,100", "2,127,300", "1,519,500", "3,451,800", "3,164,400", "2,876,700", "2,589,000", "2,013,600", "1,438,500", "3,117,900", "2,858,100", "2,598,300", "2,338,500", "1,818,900", "1,299,300", "2,811,600", "2,577,300", "2,343,000", "2,108,700", "1,640,100", "1,171,500", "2,561,100", "2,347,800", "2,134,200", "1,920,900", "1,494,000", "1,067,100", "2,338,500", "2,143,500", "1,948,800", "1,753,800", "1,364,100", "974,400", "2,115,900", "1,939,500", "1,763,100", "1,587,000", "1,234,200", "881,700", "1,809,600", "1,658,700", "1,508,100", "1,357,200", "1,055,700", "754,200", "1,614,600", "1,480,200", "1,345,500", "1,211,100", "942,000", "672,900", "2,867,400", "2,628,300", "2,389,500", "2,150,700", "1,672,800", "1,194,900", "2,728,200", "2,500,800", "2,273,400", "2,046,300", "1,591,500", "1,136,700", "2,589,000", "2,373,300", "2,157,600", "1,941,900", "1,510,200", "1,078,800", "2,421,900", "2,220,300", "2,018,400", "1,816,500", "1,413,000", "1,009,200", "2,282,700", "2,092,500", "1,902,300", "1,712,100", "1,331,700", "951,300", "2,143,500", "1,965,000", "1,786,500", "1,607,700", "1,250,400", "893,400", "1,976,700", "1,812,000", "1,647,300", "1,482,600", "1,153,200", "823,800", "1,725,900", "1,582,200", "1,438,500", "1,294,500", "1,006,800", "719,400", "1,531,200", "1,403,700", "1,275,900", "1,148,400", "893,400", "638,100", "1,308,600", "1,199,400", "1,090,500", "981,300", "763,200", "545,400", "1,364,100", "1,250,400", "1,136,700", "1,023,300", "795,900", "568,500", "1,308,600", "1,199,400", "1,090,500", "981,300", "763,200", "545,400", "1,252,800", "1,148,400", "1,044,000", "939,600", "730,800", "522,000", "1,197,000", "1,097,400", "997,500", "897,900", "698,400", "498,900", "1,141,500", "1,046,400", "951,300", "856,200", "666,000", "475,800", "1,058,100", "969,900", "881,700", "793,500", "617,100", "441,000", "974,400", "893,400", "812,100", "730,800", "568,500", "406,200", "918,900", "842,100", "765,600", "689,100", "536,100", "382,800", "863,100", "791,100", "719,400", "647,400", "503,400", "359,700", "835,200", "765,600", "696,000", "626,400", "487,200", "348,000", "584,700", "536,100", "487,200", "438,600", "341,100", "243,600", "556,800", "510,600", "464,100", "417,600", "324,900", "232,200", "529,200", "485,100", "441,000", "396,900", "308,700", "220,500", "501,300", "459,600", "417,600", "375,900", "292,500", "208,800", "473,400", "433,800", "394,500", "355,200", "276,300", "197,400", "445,500", "408,300", "371,400", "334,200", "260,100", "185,700", "417,600", "382,800", "348,000", "313,200", "243,600", "174,000", "417,600", "382,800", "348,000", "313,200", "243,600", "174,000", "390,000", "357,300", "324,900", "292,500", "227,400", "162,600", "390,000", "357,300", "324,900", "292,500", "227,400", "162,600", "30,806,400", "28,239,200", "25,672,000", "23,104,800", "17,970,400", "12,836,000", "24,496,800", "22,455,200", "20,414,000", "18,372,800", "14,290,000", "10,207,200", "21,527,600", "19,733,600", "17,939,600", "16,145,600", "12,557,600", "8,970,000", "17,816,000", "16,331,200", "14,846,400", "13,362,000", "10,392,800", "7,423,200", "13,733,200", "12,588,800", "11,444,400", "10,300,000", "8,011,200", "5,722,400", "10,764,000", "9,866,800", "8,970,000", "8,072,800", "6,278,800", "4,485,200", "8,536,800", "7,825,600", "7,114,000", "6,402,800", "4,980,000", "3,557,200", "7,052,400", "6,464,400", "5,876,800", "5,289,200", "4,114,000", "2,938,400", "5,753,200", "5,273,600", "4,794,400", "4,314,800", "3,356,000", "2,397,200", "4,639,600", "4,253,200", "3,866,400", "3,480,000", "2,706,400", "1,933,200", "25,981,200", "23,816,400", "21,651,200", "19,486,000", "15,156,000", "10,825,600", "22,826,400", "20,924,400", "19,022,000", "17,120,000", "13,315,600", "9,511,200", "19,857,200", "18,202,400", "16,547,600", "14,892,800", "11,583,600", "8,274,000", "16,516,800", "15,140,400", "13,764,000", "12,387,600", "9,634,800", "6,882,000", "12,805,200", "11,738,000", "10,671,200", "9,604,000", "7,469,600", "5,335,600", "10,021,600", "9,186,400", "8,351,200", "7,516,000", "5,846,000", "4,175,600", "7,980,000", "7,315,200", "6,650,000", "5,985,200", "4,655,200", "3,325,200", "6,681,200", "6,124,400", "5,567,600", "5,010,800", "3,897,200", "2,784,000", "5,382,000", "4,933,600", "4,485,200", "4,036,400", "3,139,600", "2,242,800", "4,268,400", "3,912,800", "3,557,200", "3,201,600", "2,490,000", "1,778,800", "23,568,800", "21,604,800", "19,640,800", "17,676,800", "13,748,400", "9,820,400", "20,414,000", "18,712,800", "17,011,600", "15,310,400", "11,908,400", "8,506,000", "18,187,200", "16,671,600", "15,156,000", "13,640,400", "10,609,200", "7,578,000", "15,032,000", "13,779,600", "12,526,800", "11,274,000", "8,768,800", "6,263,600", "12,062,800", "11,057,600", "10,052,400", "9,047,200", "7,036,800", "5,026,400", "9,464,800", "8,676,000", "7,887,200", "7,098,800", "5,521,200", "3,943,600", "7,423,200", "6,804,800", "6,186,000", "5,567,600", "4,330,400", "3,093,200", "6,124,400", "5,614,000", "5,103,600", "4,593,200", "3,572,800", "2,552,000", "5,010,800", "4,593,200", "4,175,600", "3,758,000", "2,923,200", "2,088,000", "3,897,200", "3,572,800", "3,248,000", "2,923,200", "2,273,600", "1,624,000", "19,857,200", "18,202,400", "16,547,600", "14,892,800", "11,583,600", "8,274,000", "18,187,200", "16,671,600", "15,156,000", "13,640,400", "10,609,200", "7,578,000", "15,774,400", "14,460,000", "13,145,600", "11,830,800", "9,202,000", "6,572,800", "13,733,200", "12,588,800", "11,444,400", "10,300,000", "8,011,200", "5,722,400", "11,320,400", "10,377,200", "9,434,000", "8,490,400", "6,603,600", "4,717,200", "8,908,000", "8,165,600", "7,423,200", "6,681,200", "5,196,400", "3,711,600", "7,052,400", "6,464,400", "5,876,800", "5,289,200", "4,114,000", "2,938,400", "5,753,200", "5,273,600", "4,794,400", "4,314,800", "3,356,000", "2,397,200", "4,639,600", "4,253,200", "3,866,400", "3,480,000", "2,706,400", "1,933,200", "3,711,600", "3,402,400", "3,093,200", "2,784,000", "2,165,200", "1,546,800", "16,331,200", "14,970,400", "13,609,200", "12,248,400", "9,526,800", "6,804,800", "15,217,600", "13,949,600", "12,681,600", "11,413,200", "8,877,200", "6,340,800", "13,547,600", "12,418,400", "11,289,600", "10,160,800", "7,902,800", "5,644,800", "12,062,800", "11,057,600", "10,052,400", "9,047,200", "7,036,800", "5,026,400", "10,021,600", "9,186,400", "8,351,200", "7,516,000", "5,846,000", "4,175,600", "7,980,000", "7,315,200", "6,650,000", "5,985,200", "4,655,200", "3,325,200", "6,495,600", "5,954,400", "5,412,800", "4,871,600", "3,789,200", "2,706,400", "5,382,000", "4,933,600", "4,485,200", "4,036,400", "3,139,600", "2,242,800", "4,268,400", "3,912,800", "3,557,200", "3,201,600", "2,490,000", "1,778,800", "3,526,400", "3,232,400", "2,938,400", "2,644,800", "2,057,200", "1,469,200", "11,691,600", "10,717,600", "9,743,200", "8,768,800", "6,820,400", "4,871,600", "10,949,600", "10,036,800", "9,124,400", "8,212,000", "6,387,200", "4,562,400", "10,207,200", "9,356,400", "8,506,000", "7,655,200", "5,954,400", "4,253,200", "9,093,600", "8,336,000", "7,578,000", "6,820,400", "5,304,800", "3,789,200", "7,980,000", "7,315,200", "6,650,000", "5,985,200", "4,655,200", "3,325,200", "7,052,400", "6,464,400", "5,876,800", "5,289,200", "4,114,000", "2,938,400", "5,753,200", "5,273,600", "4,794,400", "4,314,800", "3,356,000", "2,397,200", "4,825,200", "4,423,200", "4,021,200", "3,619,200", "2,814,800", "2,010,800", "3,897,200", "3,572,800", "3,248,000", "2,923,200", "2,273,600", "1,624,000", "3,340,800", "3,062,400", "2,784,000", "2,505,600", "1,948,800", "1,392,000", "9,464,800", "8,676,000", "7,887,200", "7,098,800", "5,521,200", "3,943,600", "8,908,000", "8,165,600", "7,423,200", "6,681,200", "5,196,400", "3,711,600", "8,351,200", "7,655,200", "6,959,600", "6,263,600", "4,871,600", "3,480,000", "7,423,200", "6,804,800", "6,186,000", "5,567,600", "4,330,400", "3,093,200", "6,681,200", "6,124,400", "5,567,600", "5,010,800", "3,897,200", "2,784,000", "5,938,800", "5,444,000", "4,948,800", "4,454,000", "3,464,400", "2,474,400", "5,196,400", "4,763,600", "4,330,400", "3,897,200", "3,031,200", "2,165,200", "4,454,000", "4,082,800", "3,711,600", "3,340,800", "2,598,400", "1,856,000", "3,711,600", "3,402,400", "3,093,200", "2,784,000", "2,165,200", "1,546,800", "2,969,600", "2,722,000", "2,474,400", "2,227,200", "1,732,400", "1,237,200", "5,753,200", "5,273,600", "4,794,400", "4,314,800", "3,356,000", "2,397,200", "5,382,000", "4,933,600", "4,485,200", "4,036,400", "3,139,600", "2,242,800", "5,122,400", "4,695,200", "4,268,400", "3,841,600", "2,988,000", "2,134,400", "4,714,000", "4,321,200", "3,928,400", "3,535,600", "2,750,000", "1,964,400", "4,231,600", "3,878,800", "3,526,400", "3,173,600", "2,468,400", "1,763,200", "3,897,200", "3,572,800", "3,248,000", "2,923,200", "2,273,600", "1,624,000", "3,526,400", "3,232,400", "2,938,400", "2,644,800", "2,057,200", "1,469,200", "3,080,800", "2,824,000", "2,567,200", "2,310,800", "1,797,200", "1,283,600", "2,709,600", "2,484,000", "2,258,000", "2,032,400", "1,580,800", "1,129,200", "2,412,800", "2,211,600", "2,010,800", "1,809,600", "1,407,600", "1,005,600", "4,120,000", "3,776,800", "3,433,600", "3,090,000", "2,403,600", "1,716,800", "3,934,400", "3,606,800", "3,278,800", "2,950,800", "2,295,200", "1,639,600", "3,748,800", "3,436,400", "3,124,000", "2,811,600", "2,186,800", "1,562,000", "3,526,400", "3,232,400", "2,938,400", "2,644,800", "2,057,200", "1,469,200", "3,340,800", "3,062,400", "2,784,000", "2,505,600", "1,948,800", "1,392,000", "3,192,000", "2,926,000", "2,660,000", "2,394,000", "1,862,000", "1,330,000", "2,784,000", "2,552,000", "2,320,000", "2,088,000", "1,624,000", "1,160,000", "2,450,000", "2,245,600", "2,041,600", "1,837,600", "1,429,200", "1,020,800", "2,190,000", "2,007,600", "1,825,200", "1,642,400", "1,277,600", "912,800", "1,856,000", "1,701,200", "1,546,800", "1,392,000", "1,082,800", "773,600", "2,004,400", "1,837,600", "1,670,400", "1,503,200", "1,169,200", "835,200", "1,930,400", "1,769,200", "1,608,400", "1,447,600", "1,126,000", "804,400", "1,856,000", "1,701,200", "1,546,800", "1,392,000", "1,082,800", "773,600", "1,744,800", "1,599,200", "1,454,000", "1,308,400", "1,017,600", "727,200", "1,633,200", "1,497,200", "1,361,200", "1,225,200", "952,800", "680,800", "1,522,000", "1,395,200", "1,268,400", "1,141,600", "888,000", "634,400", "1,447,600", "1,327,200", "1,206,400", "1,086,000", "844,400", "603,200", "1,336,400", "1,225,200", "1,113,600", "1,002,400", "779,600", "556,800", "1,262,000", "1,156,800", "1,052,000", "946,800", "736,400", "526,000", "1,188,000", "1,088,800", "990,000", "890,800", "693,200", "495,200", "854,000", "782,800", "711,600", "640,400", "498,000", "356,000", "816,800", "748,800", "680,800", "612,800", "476,400", "340,400", "779,600", "714,800", "649,600", "584,800", "454,800", "324,800", "742,400", "680,800", "618,800", "556,800", "433,200", "309,600", "705,600", "646,800", "588,000", "529,200", "411,600", "294,000", "668,400", "612,800", "556,800", "501,200", "390,000", "278,400", "631,200", "578,400", "526,000", "473,600", "368,400", "263,200", "631,200", "578,400", "526,000", "473,600", "368,400", "263,200", "594,000", "544,400", "495,200", "445,600", "346,800", "247,600", "594,000", "544,400", "495,200", "445,600", "346,800", "247,600", "53,818,500", "49,333,500", "44,848,500", "40,364,000", "31,394,000", "22,424,500", "41,987,500", "38,489,000", "34,990,000", "31,491,000", "24,493,000", "17,495,000", "35,956,500", "32,960,000", "29,963,500", "26,967,500", "20,974,500", "14,982,000", "29,925,000", "27,431,500", "24,937,500", "22,444,000", "17,456,500", "12,469,000", "23,429,500", "21,477,500", "19,525,000", "17,572,500", "13,667,500", "9,762,500", "17,862,500", "16,374,000", "14,885,500", "13,397,000", "10,420,000", "7,443,000", "13,918,500", "12,759,000", "11,599,000", "10,439,000", "8,119,500", "5,799,500", "10,903,000", "9,994,500", "9,086,000", "8,177,500", "6,360,000", "4,543,000", "8,815,500", "8,080,500", "7,346,000", "6,611,500", "5,142,500", "3,673,000", "7,191,500", "6,592,000", "5,993,000", "5,393,500", "4,195,000", "2,996,500", "45,003,500", "41,253,000", "37,503,000", "33,752,500", "26,252,000", "18,751,500", "38,276,000", "35,086,500", "31,897,000", "28,707,000", "22,328,000", "15,948,500", "33,172,500", "30,408,500", "27,644,000", "24,879,500", "19,351,000", "13,822,000", "27,605,500", "25,305,000", "23,004,500", "20,704,000", "16,103,000", "11,502,500", "22,038,000", "20,201,500", "18,365,000", "16,528,500", "12,855,500", "9,182,500", "16,702,500", "15,310,500", "13,918,500", "12,527,000", "9,743,000", "6,959,500", "12,759,000", "11,695,500", "10,632,500", "9,569,000", "7,443,000", "5,316,500", "10,207,000", "9,356,500", "8,506,000", "7,655,500", "5,954,500", "4,253,000", "8,119,500", "7,443,000", "6,766,000", "6,089,500", "4,736,500", "3,383,000", "6,727,500", "6,167,000", "5,606,500", "5,045,500", "3,924,500", "2,803,500", "38,740,000", "35,512,000", "32,283,500", "29,055,000", "22,598,500", "16,142,000", "33,868,500", "31,046,000", "28,224,000", "25,401,500", "19,757,000", "14,112,000", "29,229,000", "26,793,500", "24,357,500", "21,922,000", "17,050,500", "12,179,000", "25,053,500", "22,966,000", "20,878,000", "18,790,000", "14,614,500", "10,439,000", "19,718,000", "18,075,000", "16,432,000", "14,788,500", "11,502,500", "8,216,000", "15,310,500", "14,034,500", "12,759,000", "11,483,000", "8,931,500", "6,379,500", "11,831,000", "10,845,000", "9,859,000", "8,873,500", "6,901,500", "4,929,500", "9,511,000", "8,718,500", "7,926,000", "7,133,500", "5,548,500", "3,963,000", "7,655,500", "7,017,500", "6,379,500", "5,741,500", "4,466,000", "3,190,000", "6,495,500", "5,954,500", "5,413,000", "4,871,500", "3,789,000", "2,706,500", "34,564,500", "31,684,000", "28,804,000", "25,923,500", "20,162,500", "14,402,000", "30,157,000", "27,644,000", "25,131,000", "22,618,000", "17,591,500", "12,565,500", "26,213,500", "24,029,000", "21,844,500", "19,660,000", "15,291,500", "10,922,500", "22,502,000", "20,626,500", "18,751,500", "16,876,500", "13,126,000", "9,376,000", "17,862,500", "16,374,000", "14,885,500", "13,397,000", "10,420,000", "7,443,000", "13,918,500", "12,759,000", "11,599,000", "10,439,000", "8,119,500", "5,799,500", "10,903,000", "9,994,500", "9,086,000", "8,177,500", "6,360,000", "4,543,000", "8,815,500", "8,080,500", "7,346,000", "6,611,500", "5,142,500", "3,673,000", "7,191,500", "6,592,000", "5,993,000", "5,393,500", "4,195,000", "2,996,500", "6,031,500", "5,529,000", "5,026,500", "4,524,000", "3,518,500", "2,513,500", "28,533,000", "26,155,500", "23,777,500", "21,400,000", "16,644,500", "11,889,000", "25,749,500", "23,603,500", "21,458,000", "19,312,000", "15,020,500", "10,729,000", "22,734,000", "20,839,500", "18,945,000", "17,050,500", "13,261,500", "9,472,500", "19,486,000", "17,862,500", "16,238,500", "14,614,500", "11,367,000", "8,119,500", "15,774,500", "14,460,000", "13,145,500", "11,831,000", "9,202,000", "6,573,000", "12,295,000", "11,270,500", "10,246,000", "9,221,500", "7,172,000", "5,123,000", "9,975,000", "9,144,000", "8,312,500", "7,481,500", "5,819,000", "4,156,500", "8,351,500", "7,655,500", "6,959,500", "6,263,500", "4,871,500", "3,480,000", "6,727,500", "6,167,000", "5,606,500", "5,045,500", "3,924,500", "2,803,500", "5,567,500", "5,103,500", "4,639,500", "4,176,000", "3,248,000", "2,320,000", "19,950,000", "18,287,500", "16,625,000", "14,962,500", "11,637,500", "8,312,500", "18,326,500", "16,799,000", "15,272,000", "13,745,000", "10,690,500", "7,636,000", "16,702,500", "15,310,500", "13,918,500", "12,527,000", "9,743,000", "6,959,500", "14,846,500", "13,609,500", "12,372,000", "11,135,000", "8,660,500", "6,186,000", "12,295,000", "11,270,500", "10,246,000", "9,221,500", "7,172,000", "5,123,000", "10,439,000", "9,569,000", "8,699,500", "7,829,500", "6,089,500", "4,350,000", "9,047,500", "8,293,500", "7,539,500", "6,785,500", "5,277,500", "3,770,000", "7,655,500", "7,017,500", "6,379,500", "5,741,500", "4,466,000", "3,190,000", "6,263,500", "5,741,500", "5,219,500", "4,697,500", "3,654,000", "2,610,000", "5,103,500", "4,678,500", "4,253,000", "3,828,000", "2,977,500", "2,126,500", "14,614,500", "13,397,000", "12,179,000", "10,961,000", "8,525,500", "6,089,500", "13,687,000", "12,546,000", "11,405,500", "10,265,000", "7,984,000", "5,703,000", "12,991,000", "11,908,500", "10,825,500", "9,743,000", "7,578,000", "5,413,000", "12,063,000", "11,057,500", "10,052,500", "9,047,500", "7,037,000", "5,026,500", "10,439,000", "9,569,000", "8,699,500", "7,829,500", "6,089,500", "4,350,000", "9,047,500", "8,293,500", "7,539,500", "6,785,500", "5,277,500", "3,770,000", "7,887,500", "7,230,000", "6,573,000", "5,915,500", "4,601,000", "3,286,500", "6,959,500", "6,379,500", "5,799,500", "5,219,500", "4,060,000", "2,900,000", "5,799,500", "5,316,500", "4,833,000", "4,350,000", "3,383,000", "2,416,500", "4,639,500", "4,253,000", "3,866,500", "3,480,000", "2,706,500", "1,933,500", "8,119,500", "7,443,000", "6,766,000", "6,089,500", "4,736,500", "3,383,000", "7,887,500", "7,230,000", "6,573,000", "5,915,500", "4,601,000", "3,286,500", "7,423,500", "6,805,000", "6,186,000", "5,567,500", "4,330,500", "3,093,000", "6,959,500", "6,379,500", "5,799,500", "5,219,500", "4,060,000", "2,900,000", "6,495,500", "5,954,500", "5,413,000", "4,871,500", "3,789,000", "2,706,500", "6,031,500", "5,529,000", "5,026,500", "4,524,000", "3,518,500", "2,513,500", "5,567,500", "5,103,500", "4,639,500", "4,176,000", "3,248,000", "2,320,000", "5,103,500", "4,678,500", "4,253,000", "3,828,000", "2,977,500", "2,126,500", "4,639,500", "4,253,000", "3,866,500", "3,480,000", "2,706,500", "1,933,500", "3,712,000", "3,402,500", "3,093,000", "2,784,000", "2,165,500", "1,546,500", "5,799,500", "5,316,500", "4,833,000", "4,350,000", "3,383,000", "2,416,500", "5,567,500", "5,103,500", "4,639,500", "4,176,000", "3,248,000", "2,320,000", "5,335,500", "4,891,000", "4,446,500", "4,002,000", "3,112,500", "2,223,500", "5,103,500", "4,678,500", "4,253,000", "3,828,000", "2,977,500", "2,126,500", "4,639,500", "4,253,000", "3,866,500", "3,480,000", "2,706,500", "1,933,500", "4,408,000", "4,040,500", "3,673,000", "3,306,000", "2,571,500", "1,836,500", "4,083,000", "3,743,000", "3,402,500", "3,062,500", "2,382,000", "1,701,500", "3,758,000", "3,445,000", "3,132,000", "2,818,500", "2,192,500", "1,566,000", "3,201,500", "2,934,500", "2,668,000", "2,401,000", "1,867,500", "1,334,000", "2,784,000", "2,552,000", "2,320,000", "2,088,000", "1,624,000", "1,160,000", "2,784,000", "2,552,000", "2,320,000", "2,088,000", "1,624,000", "1,160,000", "2,645,000", "2,424,500", "2,204,000", "1,983,500", "1,543,000", "1,102,000", "2,505,500", "2,297,000", "2,088,000", "1,879,000", "1,461,500", "1,044,000", "2,366,500", "2,169,000", "1,972,000", "1,775,000", "1,380,500", "986,000", "2,227,000", "2,041,500", "1,856,000", "1,670,500", "1,299,500", "928,000", "2,134,500", "1,956,500", "1,778,500", "1,601,000", "1,245,000", "889,500", "1,995,000", "1,829,000", "1,662,500", "1,496,500", "1,164,000", "831,500", "1,902,500", "1,744,000", "1,585,500", "1,427,000", "1,110,000", "793,000", "1,717,000", "1,574,000", "1,431,000", "1,287,500", "1,001,500", "715,500", "1,577,500", "1,446,000", "1,315,000", "1,183,500", "920,500", "657,500", "1,160,000", "1,063,500", "967,000", "870,000", "677,000", "483,500", "1,067,500", "978,500", "889,500", "800,500", "622,500", "445,000", "1,021,000", "936,000", "851,000", "766,000", "595,500", "425,500", "974,500", "893,500", "812,000", "731,000", "568,500", "406,000", "974,500", "893,500", "812,000", "731,000", "568,500", "406,000", "928,000", "851,000", "773,500", "696,000", "541,500", "387,000", "882,000", "808,500", "735,000", "661,500", "514,500", "367,500", "835,500", "766,000", "696,000", "626,500", "487,500", "348,000", "789,000", "723,000", "657,500", "592,000", "460,500", "329,000", "742,500", "680,500", "619,000", "557,000", "433,500", "309,500", "94,645,800", "86,758,800", "78,871,800", "70,984,800", "55,210,200", "39,436,200", "76,830,600", "70,428,000", "64,025,400", "57,622,800", "44,817,600", "32,013,000", "65,695,800", "60,220,800", "54,746,400", "49,272,000", "38,322,600", "27,373,200", "55,117,800", "50,524,200", "45,931,200", "41,338,200", "32,152,200", "22,965,600", "43,983,000", "40,317,600", "36,652,200", "32,987,400", "25,656,600", "18,326,400", "33,404,400", "30,621,000", "27,837,000", "25,053,600", "19,486,200", "13,918,800", "26,167,200", "23,986,800", "21,805,800", "19,625,400", "15,264,000", "10,903,200", "20,043,000", "18,372,600", "16,702,200", "15,032,400", "11,691,600", "8,351,400", "15,867,600", "14,545,200", "13,222,800", "11,900,400", "9,256,200", "6,611,400", "12,805,200", "11,738,400", "10,671,000", "9,604,200", "7,470,000", "5,335,800", "82,398,000", "75,531,600", "68,664,600", "61,798,200", "48,065,400", "34,332,600", "70,984,800", "65,069,400", "59,154,000", "53,238,600", "41,407,800", "29,577,000", "61,798,200", "56,648,400", "51,498,600", "46,348,800", "36,049,200", "25,749,600", "51,777,000", "47,462,400", "43,147,800", "38,833,200", "30,203,400", "21,574,200", "41,199,000", "37,765,800", "34,332,600", "30,899,400", "24,033,000", "17,166,600", "31,177,800", "28,579,800", "25,981,200", "23,383,200", "18,187,200", "12,990,600", "23,940,000", "21,945,000", "19,950,000", "17,955,000", "13,965,000", "9,975,000", "18,929,400", "17,352,000", "15,774,600", "14,197,200", "11,042,400", "7,887,600", "15,032,400", "13,779,600", "12,526,800", "11,274,000", "8,769,000", "6,263,400", "11,970,000", "10,972,800", "9,975,000", "8,977,800", "6,982,800", "4,987,800", "72,376,200", "66,345,000", "60,313,800", "54,282,600", "42,219,600", "30,157,200", "62,911,800", "57,669,000", "52,426,800", "47,184,000", "36,699,000", "26,213,400", "54,839,400", "50,269,200", "45,699,600", "41,129,400", "31,989,600", "22,849,800", "46,766,400", "42,869,400", "38,971,800", "35,074,800", "27,280,800", "19,486,200", "37,302,000", "34,193,400", "31,084,800", "27,976,200", "21,759,600", "15,542,400", "28,950,600", "26,538,000", "24,125,400", "21,713,400", "16,888,200", "12,063,000", "22,269,600", "20,413,800", "18,558,000", "16,702,200", "12,990,600", "9,279,000", "17,537,400", "16,076,400", "14,614,800", "13,153,200", "10,230,600", "7,307,400", "13,918,800", "12,759,000", "11,599,200", "10,439,400", "8,119,200", "5,799,600", "11,413,200", "10,462,200", "9,511,200", "8,560,200", "6,658,200", "4,755,600", "64,025,400", "58,690,200", "53,354,400", "48,019,200", "37,348,200", "26,677,200", "56,509,200", "51,800,400", "47,091,000", "42,382,200", "32,964,000", "23,545,800", "48,715,200", "44,655,600", "40,596,000", "36,536,400", "28,417,200", "20,298,000", "42,034,200", "38,531,400", "35,028,600", "31,525,800", "24,520,200", "17,514,600", "33,682,800", "30,876,000", "28,069,200", "25,262,400", "19,648,800", "14,034,600", "26,724,000", "24,496,800", "22,269,600", "20,043,000", "15,589,200", "11,134,800", "20,599,800", "18,883,200", "17,166,600", "15,450,000", "12,016,800", "8,583,600", "16,146,000", "14,800,200", "13,455,000", "12,109,200", "9,418,200", "6,727,800", "12,805,200", "11,738,400", "10,671,000", "9,604,200", "7,470,000", "5,335,800", "10,578,600", "9,696,600", "8,815,200", "7,933,800", "6,171,000", "4,407,600", "53,725,800", "49,248,600", "44,771,400", "40,294,200", "31,340,400", "22,386,000", "48,715,200", "44,655,600", "40,596,000", "36,536,400", "28,417,200", "20,298,000", "42,034,200", "38,531,400", "35,028,600", "31,525,800", "24,520,200", "17,514,600", "36,188,400", "33,172,800", "30,157,200", "27,141,600", "21,109,800", "15,078,600", "29,229,000", "26,793,600", "24,357,600", "21,922,200", "17,050,200", "12,178,800", "23,383,200", "21,435,000", "19,486,200", "17,537,400", "13,640,400", "9,743,400", "18,929,400", "17,352,000", "15,774,600", "14,197,200", "11,042,400", "7,887,600", "15,032,400", "13,779,600", "12,526,800", "11,274,000", "8,769,000", "6,263,400", "11,970,000", "10,972,800", "9,975,000", "8,977,800", "6,982,800", "4,987,800", "10,021,800", "9,186,600", "8,351,400", "7,516,200", "5,845,800", "4,176,000", "35,353,200", "32,407,200", "29,461,200", "26,515,200", "20,622,600", "14,730,600", "32,569,800", "29,855,400", "27,141,600", "24,427,200", "18,999,000", "13,570,800", "29,785,800", "27,303,600", "24,821,400", "22,339,200", "17,375,400", "12,411,000", "27,002,400", "24,751,800", "22,501,800", "20,251,800", "15,751,200", "11,251,200", "22,548,000", "20,669,400", "18,790,200", "16,911,000", "13,153,200", "9,395,400", "18,929,400", "17,352,000", "15,774,600", "14,197,200", "11,042,400", "7,887,600", "15,867,600", "14,545,200", "13,222,800", "11,900,400", "9,256,200", "6,611,400", "13,083,600", "11,993,400", "10,903,200", "9,813,000", "7,632,000", "5,451,600", "10,857,000", "9,952,200", "9,047,400", "8,142,600", "6,333,000", "4,524,000", "9,186,600", "8,421,000", "7,655,400", "6,889,800", "5,359,200", "3,828,000", "25,888,800", "23,731,200", "21,574,200", "19,416,600", "15,102,000", "10,787,400", "23,940,000", "21,945,000", "19,950,000", "17,955,000", "13,965,000", "9,975,000", "22,269,600", "20,413,800", "18,558,000", "16,702,200", "12,990,600", "9,279,000", "20,599,800", "18,883,200", "17,166,600", "15,450,000", "12,016,800", "8,583,600", "18,094,200", "16,586,400", "15,078,600", "13,570,800", "10,555,200", "7,539,600", "15,310,800", "14,034,600", "12,759,000", "11,482,800", "8,931,600", "6,379,800", "13,083,600", "11,993,400", "10,903,200", "9,813,000", "7,632,000", "5,451,600", "11,134,800", "10,207,200", "9,279,000", "8,351,400", "6,495,600", "4,639,800", "9,186,600", "8,421,000", "7,655,400", "6,889,800", "5,359,200", "3,828,000", "7,794,600", "7,145,400", "6,495,600", "5,845,800", "4,546,800", "3,247,800", "13,918,800", "12,759,000", "11,599,200", "10,439,400", "8,119,200", "5,799,600", "13,083,600", "11,993,400", "10,903,200", "9,813,000", "7,632,000", "5,451,600", "12,248,400", "11,227,800", "10,207,200", "9,186,600", "7,145,400", "5,103,600", "11,413,200", "10,462,200", "9,511,200", "8,560,200", "6,658,200", "4,755,600", "10,300,200", "9,441,600", "8,583,600", "7,725,000", "6,008,400", "4,291,800", "9,465,000", "8,676,000", "7,887,600", "7,098,600", "5,521,200", "3,943,800", "8,351,400", "7,655,400", "6,959,400", "6,263,400", "4,872,000", "3,480,000", "7,516,200", "6,889,800", "6,263,400", "5,637,000", "4,384,800", "3,132,000", "6,681,000", "6,124,200", "5,567,400", "5,011,200", "3,897,600", "2,784,000", "5,845,800", "5,359,200", "4,872,000", "4,384,800", "3,410,400", "2,436,000", "7,794,600", "7,145,400", "6,495,600", "5,845,800", "4,546,800", "3,247,800", "7,516,200", "6,889,800", "6,263,400", "5,637,000", "4,384,800", "3,132,000", "7,237,800", "6,634,800", "6,031,800", "5,428,800", "4,222,200", "3,016,200", "6,959,400", "6,379,800", "5,799,600", "5,220,000", "4,059,600", "2,899,800", "6,681,000", "6,124,200", "5,567,400", "5,011,200", "3,897,600", "2,784,000", "6,402,600", "5,869,200", "5,335,800", "4,802,400", "3,735,000", "2,668,200", "6,124,200", "5,614,200", "5,103,600", "4,593,600", "3,573,000", "2,551,800", "5,567,400", "5,103,600", "4,639,800", "4,176,000", "3,247,800", "2,320,200", "4,732,800", "4,338,000", "3,943,800", "3,549,600", "2,760,600", "1,972,200", "4,176,000", "3,828,000", "3,480,000", "3,132,000", "2,436,000", "1,740,000", "3,675,000", "3,368,400", "3,062,400", "2,756,400", "2,143,800", "1,531,200", "3,507,600", "3,215,400", "2,923,200", "2,631,000", "2,046,600", "1,461,600", "3,340,800", "3,062,400", "2,784,000", "2,505,600", "1,948,800", "1,392,000", "3,174,000", "2,909,400", "2,644,800", "2,380,200", "1,851,600", "1,322,400", "3,062,400", "2,807,400", "2,551,800", "2,296,800", "1,786,800", "1,276,200", "2,895,600", "2,653,800", "2,412,600", "2,171,400", "1,689,000", "1,206,600", "2,728,200", "2,500,800", "2,273,400", "2,046,600", "1,591,800", "1,137,000", "2,617,200", "2,398,800", "2,181,000", "1,962,600", "1,526,400", "1,090,800", "2,505,600", "2,296,800", "2,088,000", "1,879,200", "1,461,600", "1,044,000", "2,394,000", "2,194,800", "1,995,000", "1,795,800", "1,396,800", "997,800", "1,503,600", "1,378,200", "1,252,800", "1,127,400", "877,200", "626,400", "1,447,800", "1,327,200", "1,206,600", "1,086,000", "844,800", "603,600", "1,392,000", "1,276,200", "1,160,400", "1,044,000", "812,400", "580,200", "1,336,200", "1,225,200", "1,113,600", "1,002,600", "780,000", "556,800", "1,281,000", "1,174,200", "1,067,400", "960,600", "747,000", "534,000", "1,225,200", "1,123,200", "1,021,200", "919,200", "714,600", "510,600", "1,169,400", "1,072,200", "974,400", "877,200", "682,200", "487,200", "1,113,600", "1,021,200", "928,200", "835,200", "649,800", "464,400", "1,058,400", "970,200", "882,000", "793,800", "617,400", "441,000", "1,002,600", "919,200", "835,200", "751,800", "585,000", "417,600", "110,420,100", "101,218,600", "92,017,100", "82,815,600", "64,411,900", "46,008,900", "89,635,700", "82,166,000", "74,696,300", "67,226,600", "52,287,200", "37,348,500", "76,645,100", "70,257,600", "63,870,800", "57,484,000", "44,709,700", "31,935,400", "64,304,100", "58,944,900", "53,586,400", "48,227,900", "37,510,900", "26,793,200", "51,313,500", "47,037,200", "42,760,900", "38,485,300", "29,932,700", "21,380,800", "38,971,800", "35,724,500", "32,476,500", "29,229,200", "22,733,900", "16,238,600", "30,528,400", "27,984,600", "25,440,100", "22,896,300", "17,808,000", "12,720,400", "23,383,500", "21,434,700", "19,485,900", "17,537,800", "13,640,200", "9,743,300", "18,512,200", "16,969,400", "15,426,600", "13,883,800", "10,798,900", "7,713,300", "14,939,400", "13,694,800", "12,449,500", "11,204,900", "8,715,000", "6,225,100", "96,131,000", "88,120,200", "80,108,700", "72,097,900", "56,076,300", "40,054,700", "82,815,600", "75,914,300", "69,013,000", "62,111,700", "48,309,100", "34,506,500", "72,097,900", "66,089,800", "60,081,700", "54,073,600", "42,057,400", "30,041,200", "60,406,500", "55,372,800", "50,339,100", "45,305,400", "35,237,300", "25,169,900", "48,065,500", "44,060,100", "40,054,700", "36,049,300", "28,038,500", "20,027,700", "36,374,100", "33,343,100", "30,311,400", "27,280,400", "21,218,400", "15,155,700", "27,930,000", "25,602,500", "23,275,000", "20,947,500", "16,292,500", "11,637,500", "22,084,300", "20,244,000", "18,403,700", "16,563,400", "12,882,800", "9,202,200", "17,537,800", "16,076,200", "14,614,600", "13,153,000", "10,230,500", "7,307,300", "13,965,000", "12,801,600", "11,637,500", "10,474,100", "8,146,600", "5,819,100", "84,438,900", "77,402,500", "70,366,100", "63,329,700", "49,256,200", "35,183,400", "73,397,100", "67,280,500", "61,164,600", "55,048,000", "42,815,500", "30,582,300", "63,979,300", "58,647,400", "53,316,200", "47,984,300", "37,321,200", "26,658,100", "54,560,800", "50,014,300", "45,467,100", "40,920,600", "31,827,600", "22,733,900", "43,519,000", "39,892,300", "36,265,600", "32,638,900", "25,386,200", "18,132,800", "33,775,700", "30,961,000", "28,146,300", "25,332,300", "19,702,900", "14,073,500", "25,981,200", "23,816,100", "21,651,000", "19,485,900", "15,155,700", "10,825,500", "20,460,300", "18,755,800", "17,050,600", "15,345,400", "11,935,700", "8,525,300", "16,238,600", "14,885,500", "13,532,400", "12,179,300", "9,472,400", "6,766,200", "13,315,400", "12,205,900", "11,096,400", "9,986,900", "7,767,900", "5,548,200", "74,696,300", "68,471,900", "62,246,800", "56,022,400", "43,572,900", "31,123,400", "65,927,400", "60,433,800", "54,939,500", "49,445,900", "38,458,000", "27,470,100", "56,834,400", "52,098,200", "47,362,000", "42,625,800", "33,153,400", "23,681,000", "49,039,900", "44,953,300", "40,866,700", "36,780,100", "28,606,900", "20,433,700", "39,296,600", "36,022,000", "32,747,400", "29,472,800", "22,923,600", "16,373,700", "31,178,000", "28,579,600", "25,981,200", "23,383,500", "18,187,400", "12,990,600", "24,033,100", "22,030,400", "20,027,700", "18,025,000", "14,019,600", "10,014,200", "18,837,000", "17,266,900", "15,697,500", "14,127,400", "10,987,900", "7,849,100", "14,939,400", "13,694,800", "12,449,500", "11,204,900", "8,715,000", "6,225,100", "12,341,700", "11,312,700", "10,284,400", "9,256,100", "7,199,500", "5,142,200", "62,680,100", "57,456,700", "52,233,300", "47,009,900", "36,563,800", "26,117,000", "56,834,400", "52,098,200", "47,362,000", "42,625,800", "33,153,400", "23,681,000", "49,039,900", "44,953,300", "40,866,700", "36,780,100", "28,606,900", "20,433,700", "42,219,800", "38,701,600", "35,183,400", "31,665,200", "24,628,100", "17,591,700", "34,100,500", "31,259,200", "28,417,200", "25,575,900", "19,891,900", "14,208,600", "27,280,400", "25,007,500", "22,733,900", "20,460,300", "15,913,800", "11,367,300", "22,084,300", "20,244,000", "18,403,700", "16,563,400", "12,882,800", "9,202,200", "17,537,800", "16,076,200", "14,614,600", "13,153,000", "10,230,500", "7,307,300", "13,965,000", "12,801,600", "11,637,500", "10,474,100", "8,146,600", "5,819,100", "11,692,100", "10,717,700", "9,743,300", "8,768,900", "6,820,100", "4,872,000", "41,245,400", "37,808,400", "34,371,400", "30,934,400", "24,059,700", "17,185,700", "37,998,100", "34,831,300", "31,665,200", "28,498,400", "22,165,500", "15,832,600", "34,750,100", "31,854,200", "28,958,300", "26,062,400", "20,271,300", "14,479,500", "31,502,800", "28,877,100", "26,252,100", "23,627,100", "18,376,400", "13,126,400", "26,306,000", "24,114,300", "21,921,900", "19,729,500", "15,345,400", "10,961,300", "22,084,300", "20,244,000", "18,403,700", "16,563,400", "12,882,800", "9,202,200", "18,512,200", "16,969,400", "15,426,600", "13,883,800", "10,798,900", "7,713,300", "15,264,200", "13,992,300", "12,720,400", "11,448,500", "8,904,000", "6,360,200", "12,666,500", "11,610,900", "10,555,300", "9,499,700", "7,388,500", "5,278,000", "10,717,700", "9,824,500", "8,931,300", "8,038,100", "6,252,400", "4,466,000", "30,203,600", "27,686,400", "25,169,900", "22,652,700", "17,619,000", "12,585,300", "27,930,000", "25,602,500", "23,275,000", "20,947,500", "16,292,500", "11,637,500", "25,981,200", "23,816,100", "21,651,000", "19,485,900", "15,155,700", "10,825,500", "24,033,100", "22,030,400", "20,027,700", "18,025,000", "14,019,600", "10,014,200", "21,109,900", "19,350,800", "17,591,700", "15,832,600", "12,314,400", "8,796,200", "17,862,600", "16,373,700", "14,885,500", "13,396,600", "10,420,200", "7,443,100", "15,264,200", "13,992,300", "12,720,400", "11,448,500", "8,904,000", "6,360,200", "12,990,600", "11,908,400", "10,825,500", "9,743,300", "7,578,200", "5,413,100", "10,717,700", "9,824,500", "8,931,300", "8,038,100", "6,252,400", "4,466,000", "9,093,700", "8,336,300", "7,578,200", "6,820,100", "5,304,600", "3,789,100", "16,238,600", "14,885,500", "13,532,400", "12,179,300", "9,472,400", "6,766,200", "15,264,200", "13,992,300", "12,720,400", "11,448,500", "8,904,000", "6,360,200", "14,289,800", "13,099,100", "11,908,400", "10,717,700", "8,336,300", "5,954,200", "13,315,400", "12,205,900", "11,096,400", "9,986,900", "7,767,900", "5,548,200", "12,016,900", "11,015,200", "10,014,200", "9,012,500", "7,009,800", "5,007,100", "11,042,500", "10,122,000", "9,202,200", "8,281,700", "6,441,400", "4,601,100", "9,743,300", "8,931,300", "8,119,300", "7,307,300", "5,684,000", "4,060,000", "8,768,900", "8,038,100", "7,307,300", "6,576,500", "5,115,600", "3,654,000", "7,794,500", "7,144,900", "6,495,300", "5,846,400", "4,547,200", "3,248,000", "6,820,100", "6,252,400", "5,684,000", "5,115,600", "3,978,800", "2,842,000", "9,093,700", "8,336,300", "7,578,200", "6,820,100", "5,304,600", "3,789,100", "8,768,900", "8,038,100", "7,307,300", "6,576,500", "5,115,600", "3,654,000", "8,444,100", "7,740,600", "7,037,100", "6,333,600", "4,925,900", "3,518,900", "8,119,300", "7,443,100", "6,766,200", "6,090,000", "4,736,200", "3,383,100", "7,794,500", "7,144,900", "6,495,300", "5,846,400", "4,547,200", "3,248,000", "7,469,700", "6,847,400", "6,225,100", "5,602,800", "4,357,500", "3,112,900", "7,144,900", "6,549,900", "5,954,200", "5,359,200", "4,168,500", "2,977,100", "6,495,300", "5,954,200", "5,413,100", "4,872,000", "3,789,100", "2,706,900", "5,521,600", "5,061,000", "4,601,100", "4,141,200", "3,220,700", "2,300,900", "4,872,000", "4,466,000", "4,060,000", "3,654,000", "2,842,000", "2,030,000", "4,287,500", "3,929,800", "3,572,800", "3,215,800", "2,501,100", "1,786,400", "4,092,200", "3,751,300", "3,410,400", "3,069,500", "2,387,700", "1,705,200", "3,897,600", "3,572,800", "3,248,000", "2,923,200", "2,273,600", "1,624,000", "3,703,000", "3,394,300", "3,085,600", "2,776,900", "2,160,200", "1,542,800", "3,572,800", "3,275,300", "2,977,100", "2,679,600", "2,084,600", "1,488,900", "3,378,200", "3,096,100", "2,814,700", "2,533,300", "1,970,500", "1,407,700", "3,182,900", "2,917,600", "2,652,300", "2,387,700", "1,857,100", "1,326,500", "3,053,400", "2,798,600", "2,544,500", "2,289,700", "1,780,800", "1,272,600", "2,923,200", "2,679,600", "2,436,000", "2,192,400", "1,705,200", "1,218,000", "2,793,000", "2,560,600", "2,327,500", "2,095,100", "1,629,600", "1,164,100", "1,754,200", "1,607,900", "1,461,600", "1,315,300", "1,023,400", "730,800", "1,689,100", "1,548,400", "1,407,700", "1,267,000", "985,600", "704,200", "1,624,000", "1,488,900", "1,353,800", "1,218,000", "947,800", "676,900", "1,558,900", "1,429,400", "1,299,200", "1,169,700", "910,000", "649,600", "1,494,500", "1,369,900", "1,245,300", "1,120,700", "871,500", "623,000", "1,429,400", "1,310,400", "1,191,400", "1,072,400", "833,700", "595,700", "1,364,300", "1,250,900", "1,136,800", "1,023,400", "795,900", "568,400", "1,299,200", "1,191,400", "1,082,900", "974,400", "758,100", "541,800", "1,234,800", "1,131,900", "1,029,000", "926,100", "720,300", "514,500", "1,169,700", "1,072,400", "974,400", "877,100", "682,500", "487,200", "126,194,400", "115,678,400", "105,162,400", "94,646,400", "73,613,600", "52,581,600", "102,440,800", "93,904,000", "85,367,200", "76,830,400", "59,756,800", "42,684,000", "87,594,400", "80,294,400", "72,995,200", "65,696,000", "51,096,800", "36,497,600", "73,490,400", "67,365,600", "61,241,600", "55,117,600", "42,869,600", "30,620,800", "58,644,000", "53,756,800", "48,869,600", "43,983,200", "34,208,800", "24,435,200", "44,539,200", "40,828,000", "37,116,000", "33,404,800", "25,981,600", "18,558,400", "34,889,600", "31,982,400", "29,074,400", "26,167,200", "20,352,000", "14,537,600", "26,724,000", "24,496,800", "22,269,600", "20,043,200", "15,588,800", "11,135,200", "21,156,800", "19,393,600", "17,630,400", "15,867,200", "12,341,600", "8,815,200", "17,073,600", "15,651,200", "14,228,000", "12,805,600", "9,960,000", "7,114,400", "109,864,000", "100,708,800", "91,552,800", "82,397,600", "64,087,200", "45,776,800", "94,646,400", "86,759,200", "78,872,000", "70,984,800", "55,210,400", "39,436,000", "82,397,600", "75,531,200", "68,664,800", "61,798,400", "48,065,600", "34,332,800", "69,036,000", "63,283,200", "57,530,400", "51,777,600", "40,271,200", "28,765,600", "54,932,000", "50,354,400", "45,776,800", "41,199,200", "32,044,000", "22,888,800", "41,570,400", "38,106,400", "34,641,600", "31,177,600", "24,249,600", "17,320,800", "31,920,000", "29,260,000", "26,600,000", "23,940,000", "18,620,000", "13,300,000", "25,239,200", "23,136,000", "21,032,800", "18,929,600", "14,723,200", "10,516,800", "20,043,200", "18,372,800", "16,702,400", "15,032,000", "11,692,000", "8,351,200", "15,960,000", "14,630,400", "13,300,000", "11,970,400", "9,310,400", "6,650,400", "96,501,600", "88,460,000", "80,418,400", "72,376,800", "56,292,800", "40,209,600", "83,882,400", "76,892,000", "69,902,400", "62,912,000", "48,932,000", "34,951,200", "73,119,200", "67,025,600", "60,932,800", "54,839,200", "42,652,800", "30,466,400", "62,355,200", "57,159,200", "51,962,400", "46,766,400", "36,374,400", "25,981,600", "49,736,000", "45,591,200", "41,446,400", "37,301,600", "29,012,800", "20,723,200", "38,600,800", "35,384,000", "32,167,200", "28,951,200", "22,517,600", "16,084,000", "29,692,800", "27,218,400", "24,744,000", "22,269,600", "17,320,800", "12,372,000", "23,383,200", "21,435,200", "19,486,400", "17,537,600", "13,640,800", "9,743,200", "18,558,400", "17,012,000", "15,465,600", "13,919,200", "10,825,600", "7,732,800", "15,217,600", "13,949,600", "12,681,600", "11,413,600", "8,877,600", "6,340,800", "85,367,200", "78,253,600", "71,139,200", "64,025,600", "49,797,600", "35,569,600", "75,345,600", "69,067,200", "62,788,000", "56,509,600", "43,952,000", "31,394,400", "64,953,600", "59,540,800", "54,128,000", "48,715,200", "37,889,600", "27,064,000", "56,045,600", "51,375,200", "46,704,800", "42,034,400", "32,693,600", "23,352,800", "44,910,400", "41,168,000", "37,425,600", "33,683,200", "26,198,400", "18,712,800", "35,632,000", "32,662,400", "29,692,800", "26,724,000", "20,785,600", "14,846,400", "27,466,400", "25,177,600", "22,888,800", "20,600,000", "16,022,400", "11,444,800", "21,528,000", "19,733,600", "17,940,000", "16,145,600", "12,557,600", "8,970,400", "17,073,600", "15,651,200", "14,228,000", "12,805,600", "9,960,000", "7,114,400", "14,104,800", "12,928,800", "11,753,600", "10,578,400", "8,228,000", "5,876,800", "71,634,400", "65,664,800", "59,695,200", "53,725,600", "41,787,200", "29,848,000", "64,953,600", "59,540,800", "54,128,000", "48,715,200", "37,889,600", "27,064,000", "56,045,600", "51,375,200", "46,704,800", "42,034,400", "32,693,600", "23,352,800", "48,251,200", "44,230,400", "40,209,600", "36,188,800", "28,146,400", "20,104,800", "38,972,000", "35,724,800", "32,476,800", "29,229,600", "22,733,600", "16,238,400", "31,177,600", "28,580,000", "25,981,600", "23,383,200", "18,187,200", "12,991,200", "25,239,200", "23,136,000", "21,032,800", "18,929,600", "14,723,200", "10,516,800", "20,043,200", "18,372,800", "16,702,400", "15,032,000", "11,692,000", "8,351,200", "15,960,000", "14,630,400", "13,300,000", "11,970,400", "9,310,400", "6,650,400", "13,362,400", "12,248,800", "11,135,200", "10,021,600", "7,794,400", "5,568,000", "47,137,600", "43,209,600", "39,281,600", "35,353,600", "27,496,800", "19,640,800", "43,426,400", "39,807,200", "36,188,800", "32,569,600", "25,332,000", "18,094,400", "39,714,400", "36,404,800", "33,095,200", "29,785,600", "23,167,200", "16,548,000", "36,003,200", "33,002,400", "30,002,400", "27,002,400", "21,001,600", "15,001,600", "30,064,000", "27,559,200", "25,053,600", "22,548,000", "17,537,600", "12,527,200", "25,239,200", "23,136,000", "21,032,800", "18,929,600", "14,723,200", "10,516,800", "21,156,800", "19,393,600", "17,630,400", "15,867,200", "12,341,600", "8,815,200", "17,444,800", "15,991,200", "14,537,600", "13,084,000", "10,176,000", "7,268,800", "14,476,000", "13,269,600", "12,063,200", "10,856,800", "8,444,000", "6,032,000", "12,248,800", "11,228,000", "10,207,200", "9,186,400", "7,145,600", "5,104,000", "34,518,400", "31,641,600", "28,765,600", "25,888,800", "20,136,000", "14,383,200", "31,920,000", "29,260,000", "26,600,000", "23,940,000", "18,620,000", "13,300,000", "29,692,800", "27,218,400", "24,744,000", "22,269,600", "17,320,800", "12,372,000", "27,466,400", "25,177,600", "22,888,800", "20,600,000", "16,022,400", "11,444,800", "24,125,600", "22,115,200", "20,104,800", "18,094,400", "14,073,600", "10,052,800", "20,414,400", "18,712,800", "17,012,000", "15,310,400", "11,908,800", "8,506,400", "17,444,800", "15,991,200", "14,537,600", "13,084,000", "10,176,000", "7,268,800", "14,846,400", "13,609,600", "12,372,000", "11,135,200", "8,660,800", "6,186,400", "12,248,800", "11,228,000", "10,207,200", "9,186,400", "7,145,600", "5,104,000", "10,392,800", "9,527,200", "8,660,800", "7,794,400", "6,062,400", "4,330,400", "18,558,400", "17,012,000", "15,465,600", "13,919,200", "10,825,600", "7,732,800", "17,444,800", "15,991,200", "14,537,600", "13,084,000", "10,176,000", "7,268,800", "16,331,200", "14,970,400", "13,609,600", "12,248,800", "9,527,200", "6,804,800", "15,217,600", "13,949,600", "12,681,600", "11,413,600", "8,877,600", "6,340,800", "13,733,600", "12,588,800", "11,444,800", "10,300,000", "8,011,200", "5,722,400", "12,620,000", "11,568,000", "10,516,800", "9,464,800", "7,361,600", "5,258,400", "11,135,200", "10,207,200", "9,279,200", "8,351,200", "6,496,000", "4,640,000", "10,021,600", "9,186,400", "8,351,200", "7,516,000", "5,846,400", "4,176,000", "8,908,000", "8,165,600", "7,423,200", "6,681,600", "5,196,800", "3,712,000", "7,794,400", "7,145,600", "6,496,000", "5,846,400", "4,547,200", "3,248,000", "10,392,800", "9,527,200", "8,660,800", "7,794,400", "6,062,400", "4,330,400", "10,021,600", "9,186,400", "8,351,200", "7,516,000", "5,846,400", "4,176,000", "9,650,400", "8,846,400", "8,042,400", "7,238,400", "5,629,600", "4,021,600", "9,279,200", "8,506,400", "7,732,800", "6,960,000", "5,412,800", "3,866,400", "8,908,000", "8,165,600", "7,423,200", "6,681,600", "5,196,800", "3,712,000", "8,536,800", "7,825,600", "7,114,400", "6,403,200", "4,980,000", "3,557,600", "8,165,600", "7,485,600", "6,804,800", "6,124,800", "4,764,000", "3,402,400", "7,423,200", "6,804,800", "6,186,400", "5,568,000", "4,330,400", "3,093,600", "6,310,400", "5,784,000", "5,258,400", "4,732,800", "3,680,800", "2,629,600", "5,568,000", "5,104,000", "4,640,000", "4,176,000", "3,248,000", "2,320,000", "4,900,000", "4,491,200", "4,083,200", "3,675,200", "2,858,400", "2,041,600", "4,676,800", "4,287,200", "3,897,600", "3,508,000", "2,728,800", "1,948,800", "4,454,400", "4,083,200", "3,712,000", "3,340,800", "2,598,400", "1,856,000", "4,232,000", "3,879,200", "3,526,400", "3,173,600", "2,468,800", "1,763,200", "4,083,200", "3,743,200", "3,402,400", "3,062,400", "2,382,400", "1,701,600", "3,860,800", "3,538,400", "3,216,800", "2,895,200", "2,252,000", "1,608,800", "3,637,600", "3,334,400", "3,031,200", "2,728,800", "2,122,400", "1,516,000", "3,489,600", "3,198,400", "2,908,000", "2,616,800", "2,035,200", "1,454,400", "3,340,800", "3,062,400", "2,784,000", "2,505,600", "1,948,800", "1,392,000", "3,192,000", "2,926,400", "2,660,000", "2,394,400", "1,862,400", "1,330,400", "2,004,800", "1,837,600", "1,670,400", "1,503,200", "1,169,600", "835,200", "1,930,400", "1,769,600", "1,608,800", "1,448,000", "1,126,400", "804,800", "1,856,000", "1,701,600", "1,547,200", "1,392,000", "1,083,200", "773,600", "1,781,600", "1,633,600", "1,484,800", "1,336,800", "1,040,000", "742,400", "1,708,000", "1,565,600", "1,423,200", "1,280,800", "996,000", "712,000", "1,633,600", "1,497,600", "1,361,600", "1,225,600", "952,800", "680,800", "1,559,200", "1,429,600", "1,299,200", "1,169,600", "909,600", "649,600", "1,484,800", "1,361,600", "1,237,600", "1,113,600", "866,400", "619,200", "1,411,200", "1,293,600", "1,176,000", "1,058,400", "823,200", "588,000", "1,336,800", "1,225,600", "1,113,600", "1,002,400", "780,000", "556,800", "141,968,700", "130,138,200", "118,307,700", "106,477,200", "82,815,300", "59,154,300", "115,245,900", "105,642,000", "96,038,100", "86,434,200", "67,226,400", "48,019,500", "98,543,700", "90,331,200", "82,119,600", "73,908,000", "57,483,900", "41,059,800", "82,676,700", "75,786,300", "68,896,800", "62,007,300", "48,228,300", "34,448,400", "65,974,500", "60,476,400", "54,978,300", "49,481,100", "38,484,900", "27,489,600", "50,106,600", "45,931,500", "41,755,500", "37,580,400", "29,229,300", "20,878,200", "39,250,800", "35,980,200", "32,708,700", "29,438,100", "22,896,000", "16,354,800", "30,064,500", "27,558,900", "25,053,300", "22,548,600", "17,537,400", "12,527,100", "23,801,400", "21,817,800", "19,834,200", "17,850,600", "13,884,300", "9,917,100", "19,207,800", "17,607,600", "16,006,500", "14,406,300", "11,205,000", "8,003,700", "123,597,000", "113,297,400", "102,996,900", "92,697,300", "72,098,100", "51,498,900", "106,477,200", "97,604,100", "88,731,000", "79,857,900", "62,111,700", "44,365,500", "92,697,300", "84,972,600", "77,247,900", "69,523,200", "54,073,800", "38,624,400", "77,665,500", "71,193,600", "64,721,700", "58,249,800", "45,305,100", "32,361,300", "61,798,500", "56,648,700", "51,498,900", "46,349,100", "36,049,500", "25,749,900", "46,766,700", "42,869,700", "38,971,800", "35,074,800", "27,280,800", "19,485,900", "35,910,000", "32,917,500", "29,925,000", "26,932,500", "20,947,500", "14,962,500", "28,394,100", "26,028,000", "23,661,900", "21,295,800", "16,563,600", "11,831,400", "22,548,600", "20,669,400", "18,790,200", "16,911,000", "13,153,500", "9,395,100", "17,955,000", "16,459,200", "14,962,500", "13,466,700", "10,474,200", "7,481,700", "108,564,300", "99,517,500", "90,470,700", "81,423,900", "63,329,400", "45,235,800", "94,367,700", "86,503,500", "78,640,200", "70,776,000", "55,048,500", "39,320,100", "82,259,100", "75,403,800", "68,549,400", "61,694,100", "47,984,400", "34,274,700", "70,149,600", "64,304,100", "58,457,700", "52,612,200", "40,921,200", "29,229,300", "55,953,000", "51,290,100", "46,627,200", "41,964,300", "32,639,400", "23,313,600", "43,425,900", "39,807,000", "36,188,100", "32,570,100", "25,332,300", "18,094,500", "33,404,400", "30,620,700", "27,837,000", "25,053,300", "19,485,900", "13,918,500", "26,306,100", "24,114,600", "21,922,200", "19,729,800", "15,345,900", "10,961,100", "20,878,200", "19,138,500", "17,398,800", "15,659,100", "12,178,800", "8,699,400", "17,119,800", "15,693,300", "14,266,800", "12,840,300", "9,987,300", "7,133,400", "96,038,100", "88,035,300", "80,031,600", "72,028,800", "56,022,300", "40,015,800", "84,763,800", "77,700,600", "70,636,500", "63,573,300", "49,446,000", "35,318,700", "73,072,800", "66,983,400", "60,894,000", "54,804,600", "42,625,800", "30,447,000", "63,051,300", "57,797,100", "52,542,900", "47,288,700", "36,780,300", "26,271,900", "50,524,200", "46,314,000", "42,103,800", "37,893,600", "29,473,200", "21,051,900", "40,086,000", "36,745,200", "33,404,400", "30,064,500", "23,383,800", "16,702,200", "30,899,700", "28,324,800", "25,749,900", "23,175,000", "18,025,200", "12,875,400", "24,219,000", "22,200,300", "20,182,500", "18,163,800", "14,127,300", "10,091,700", "19,207,800", "17,607,600", "16,006,500", "14,406,300", "11,205,000", "8,003,700", "15,867,900", "14,544,900", "13,222,800", "11,900,700", "9,256,500", "6,611,400", "80,588,700", "73,872,900", "67,157,100", "60,441,300", "47,010,600", "33,579,000", "73,072,800", "66,983,400", "60,894,000", "54,804,600", "42,625,800", "30,447,000", "63,051,300", "57,797,100", "52,542,900", "47,288,700", "36,780,300", "26,271,900", "54,282,600", "49,759,200", "45,235,800", "40,712,400", "31,664,700", "22,617,900", "43,843,500", "40,190,400", "36,536,400", "32,883,300", "25,575,300", "18,268,200", "35,074,800", "32,152,500", "29,229,300", "26,306,100", "20,460,600", "14,615,100", "28,394,100", "26,028,000", "23,661,900", "21,295,800", "16,563,600", "11,831,400", "22,548,600", "20,669,400", "18,790,200", "16,911,000", "13,153,500", "9,395,100", "17,955,000", "16,459,200", "14,962,500", "13,466,700", "10,474,200", "7,481,700", "15,032,700", "13,779,900", "12,527,100", "11,274,300", "8,768,700", "6,264,000", "53,029,800", "48,610,800", "44,191,800", "39,772,800", "30,933,900", "22,095,900", "48,854,700", "44,783,100", "40,712,400", "36,640,800", "28,498,500", "20,356,200", "44,678,700", "40,955,400", "37,232,100", "33,508,800", "26,063,100", "18,616,500", "40,503,600", "37,127,700", "33,752,700", "30,377,700", "23,626,800", "16,876,800", "33,822,000", "31,004,100", "28,185,300", "25,366,500", "19,729,800", "14,093,100", "28,394,100", "26,028,000", "23,661,900", "21,295,800", "16,563,600", "11,831,400", "23,801,400", "21,817,800", "19,834,200", "17,850,600", "13,884,300", "9,917,100", "19,625,400", "17,990,100", "16,354,800", "14,719,500", "11,448,000", "8,177,400", "16,285,500", "14,928,300", "13,571,100", "12,213,900", "9,499,500", "6,786,000", "13,779,900", "12,631,500", "11,483,100", "10,334,700", "8,038,800", "5,742,000", "38,833,200", "35,596,800", "32,361,300", "29,124,900", "22,653,000", "16,181,100", "35,910,000", "32,917,500", "29,925,000", "26,932,500", "20,947,500", "14,962,500", "33,404,400", "30,620,700", "27,837,000", "25,053,300", "19,485,900", "13,918,500", "30,899,700", "28,324,800", "25,749,900", "23,175,000", "18,025,200", "12,875,400", "27,141,300", "24,879,600", "22,617,900", "20,356,200", "15,832,800", "11,309,400", "22,966,200", "21,051,900", "19,138,500", "17,224,200", "13,397,400", "9,569,700", "19,625,400", "17,990,100", "16,354,800", "14,719,500", "11,448,000", "8,177,400", "16,702,200", "15,310,800", "13,918,500", "12,527,100", "9,743,400", "6,959,700", "13,779,900", "12,631,500", "11,483,100", "10,334,700", "8,038,800", "5,742,000", "11,691,900", "10,718,100", "9,743,400", "8,768,700", "6,820,200", "4,871,700", "20,878,200", "19,138,500", "17,398,800", "15,659,100", "12,178,800", "8,699,400", "19,625,400", "17,990,100", "16,354,800", "14,719,500", "11,448,000", "8,177,400", "18,372,600", "16,841,700", "15,310,800", "13,779,900", "10,718,100", "7,655,400", "17,119,800", "15,693,300", "14,266,800", "12,840,300", "9,987,300", "7,133,400", "15,450,300", "14,162,400", "12,875,400", "11,587,500", "9,012,600", "6,437,700", "14,197,500", "13,014,000", "11,831,400", "10,647,900", "8,281,800", "5,915,700", "12,527,100", "11,483,100", "10,439,100", "9,395,100", "7,308,000", "5,220,000", "11,274,300", "10,334,700", "9,395,100", "8,455,500", "6,577,200", "4,698,000", "10,021,500", "9,186,300", "8,351,100", "7,516,800", "5,846,400", "4,176,000", "8,768,700", "8,038,800", "7,308,000", "6,577,200", "5,115,600", "3,654,000", "11,691,900", "10,718,100", "9,743,400", "8,768,700", "6,820,200", "4,871,700", "11,274,300", "10,334,700", "9,395,100", "8,455,500", "6,577,200", "4,698,000", "10,856,700", "9,952,200", "9,047,700", "8,143,200", "6,333,300", "4,524,300", "10,439,100", "9,569,700", "8,699,400", "7,830,000", "6,089,400", "4,349,700", "10,021,500", "9,186,300", "8,351,100", "7,516,800", "5,846,400", "4,176,000", "9,603,900", "8,803,800", "8,003,700", "7,203,600", "5,602,500", "4,002,300", "9,186,300", "8,421,300", "7,655,400", "6,890,400", "5,359,500", "3,827,700", "8,351,100", "7,655,400", "6,959,700", "6,264,000", "4,871,700", "3,480,300", "7,099,200", "6,507,000", "5,915,700", "5,324,400", "4,140,900", "2,958,300", "6,264,000", "5,742,000", "5,220,000", "4,698,000", "3,654,000", "2,610,000", "5,512,500", "5,052,600", "4,593,600", "4,134,600", "3,215,700", "2,296,800", "5,261,400", "4,823,100", "4,384,800", "3,946,500", "3,069,900", "2,192,400", "5,011,200", "4,593,600", "4,176,000", "3,758,400", "2,923,200", "2,088,000", "4,761,000", "4,364,100", "3,967,200", "3,570,300", "2,777,400", "1,983,600", "4,593,600", "4,211,100", "3,827,700", "3,445,200", "2,680,200", "1,914,300", "4,343,400", "3,980,700", "3,618,900", "3,257,100", "2,533,500", "1,809,900", "4,092,300", "3,751,200", "3,410,100", "3,069,900", "2,387,700", "1,705,500", "3,925,800", "3,598,200", "3,271,500", "2,943,900", "2,289,600", "1,636,200", "3,758,400", "3,445,200", "3,132,000", "2,818,800", "2,192,400", "1,566,000", "3,591,000", "3,292,200", "2,992,500", "2,693,700", "2,095,200", "1,496,700", "2,255,400", "2,067,300", "1,879,200", "1,691,100", "1,315,800", "939,600", "2,171,700", "1,990,800", "1,809,900", "1,629,000", "1,267,200", "905,400", "2,088,000", "1,914,300", "1,740,600", "1,566,000", "1,218,600", "870,300", "2,004,300", "1,837,800", "1,670,400", "1,503,900", "1,170,000", "835,200", "1,921,500", "1,761,300", "1,601,100", "1,440,900", "1,120,500", "801,000", "1,837,800", "1,684,800", "1,531,800", "1,378,800", "1,071,900", "765,900", "1,754,100", "1,608,300", "1,461,600", "1,315,800", "1,023,300", "730,800", "1,670,400", "1,531,800", "1,392,300", "1,252,800", "974,700", "696,600", "1,587,600", "1,455,300", "1,323,000", "1,190,700", "926,100", "661,500", "1,503,900", "1,378,800", "1,252,800", "1,127,700", "877,500", "626,400", "157,743,000", "144,598,000", "131,453,000", "118,308,000", "92,017,000", "65,727,000", "128,051,000", "117,380,000", "106,709,000", "96,038,000", "74,696,000", "53,355,000", "109,493,000", "100,368,000", "91,244,000", "82,120,000", "63,871,000", "45,622,000", "91,863,000", "84,207,000", "76,552,000", "68,897,000", "53,587,000", "38,276,000", "73,305,000", "67,196,000", "61,087,000", "54,979,000", "42,761,000", "30,544,000", "55,674,000", "51,035,000", "46,395,000", "41,756,000", "32,477,000", "23,198,000", "43,612,000", "39,978,000", "36,343,000", "32,709,000", "25,440,000", "18,172,000", "33,405,000", "30,621,000", "27,837,000", "25,054,000", "19,486,000", "13,919,000", "26,446,000", "24,242,000", "22,038,000", "19,834,000", "15,427,000", "11,019,000", "21,342,000", "19,564,000", "17,785,000", "16,007,000", "12,450,000", "8,893,000", "137,330,000", "125,886,000", "114,441,000", "102,997,000", "80,109,000", "57,221,000", "118,308,000", "108,449,000", "98,590,000", "88,731,000", "69,013,000", "49,295,000", "102,997,000", "94,414,000", "85,831,000", "77,248,000", "60,082,000", "42,916,000", "86,295,000", "79,104,000", "71,913,000", "64,722,000", "50,339,000", "35,957,000", "68,665,000", "62,943,000", "57,221,000", "51,499,000", "40,055,000", "28,611,000", "51,963,000", "47,633,000", "43,302,000", "38,972,000", "30,312,000", "21,651,000", "39,900,000", "36,575,000", "33,250,000", "29,925,000", "23,275,000", "16,625,000", "31,549,000", "28,920,000", "26,291,000", "23,662,000", "18,404,000", "13,146,000", "25,054,000", "22,966,000", "20,878,000", "18,790,000", "14,615,000", "10,439,000", "19,950,000", "18,288,000", "16,625,000", "14,963,000", "11,638,000", "8,313,000", "120,627,000", "110,575,000", "100,523,000", "90,471,000", "70,366,000", "50,262,000", "104,853,000", "96,115,000", "87,378,000", "78,640,000", "61,165,000", "43,689,000", "91,399,000", "83,782,000", "76,166,000", "68,549,000", "53,316,000", "38,083,000", "77,944,000", "71,449,000", "64,953,000", "58,458,000", "45,468,000", "32,477,000", "62,170,000", "56,989,000", "51,808,000", "46,627,000", "36,266,000", "25,904,000", "48,251,000", "44,230,000", "40,209,000", "36,189,000", "28,147,000", "20,105,000", "37,116,000", "34,023,000", "30,930,000", "27,837,000", "21,651,000", "15,465,000", "29,229,000", "26,794,000", "24,358,000", "21,922,000", "17,051,000", "12,179,000", "23,198,000", "21,265,000", "19,332,000", "17,399,000", "13,532,000", "9,666,000", "19,022,000", "17,437,000", "15,852,000", "14,267,000", "11,097,000", "7,926,000", "106,709,000", "97,817,000", "88,924,000", "80,032,000", "62,247,000", "44,462,000", "94,182,000", "86,334,000", "78,485,000", "70,637,000", "54,940,000", "39,243,000", "81,192,000", "74,426,000", "67,660,000", "60,894,000", "47,362,000", "33,830,000", "70,057,000", "64,219,000", "58,381,000", "52,543,000", "40,867,000", "29,191,000", "56,138,000", "51,460,000", "46,782,000", "42,104,000", "32,748,000", "23,391,000", "44,540,000", "40,828,000", "37,116,000", "33,405,000", "25,982,000", "18,558,000", "34,333,000", "31,472,000", "28,611,000", "25,750,000", "20,028,000", "14,306,000", "26,910,000", "24,667,000", "22,425,000", "20,182,000", "15,697,000", "11,213,000", "21,342,000", "19,564,000", "17,785,000", "16,007,000", "12,450,000", "8,893,000", "17,631,000", "16,161,000", "14,692,000", "13,223,000", "10,285,000", "7,346,000", "89,543,000", "82,081,000", "74,619,000", "67,157,000", "52,234,000", "37,310,000", "81,192,000", "74,426,000", "67,660,000", "60,894,000", "47,362,000", "33,830,000", "70,057,000", "64,219,000", "58,381,000", "52,543,000", "40,867,000", "29,191,000", "60,314,000", "55,288,000", "50,262,000", "45,236,000", "35,183,000", "25,131,000", "48,715,000", "44,656,000", "40,596,000", "36,537,000", "28,417,000", "20,298,000", "38,972,000", "35,725,000", "32,477,000", "29,229,000", "22,734,000", "16,239,000", "31,549,000", "28,920,000", "26,291,000", "23,662,000", "18,404,000", "13,146,000", "25,054,000", "22,966,000", "20,878,000", "18,790,000", "14,615,000", "10,439,000", "19,950,000", "18,288,000", "16,625,000", "14,963,000", "11,638,000", "8,313,000", "16,703,000", "15,311,000", "13,919,000", "12,527,000", "9,743,000", "6,960,000", "58,922,000", "54,012,000", "49,102,000", "44,192,000", "34,371,000", "24,551,000", "54,283,000", "49,759,000", "45,236,000", "40,712,000", "31,665,000", "22,618,000", "49,643,000", "45,506,000", "41,369,000", "37,232,000", "28,959,000", "20,685,000", "45,004,000", "41,253,000", "37,503,000", "33,753,000", "26,252,000", "18,752,000", "37,580,000", "34,449,000", "31,317,000", "28,185,000", "21,922,000", "15,659,000", "31,549,000", "28,920,000", "26,291,000", "23,662,000", "18,404,000", "13,146,000", "26,446,000", "24,242,000", "22,038,000", "19,834,000", "15,427,000", "11,019,000", "21,806,000", "19,989,000", "18,172,000", "16,355,000", "12,720,000", "9,086,000", "18,095,000", "16,587,000", "15,079,000", "13,571,000", "10,555,000", "7,540,000", "15,311,000", "14,035,000", "12,759,000", "11,483,000", "8,932,000", "6,380,000", "43,148,000", "39,552,000", "35,957,000", "32,361,000", "25,170,000", "17,979,000", "39,900,000", "36,575,000", "33,250,000", "29,925,000", "23,275,000", "16,625,000", "37,116,000", "34,023,000", "30,930,000", "27,837,000", "21,651,000", "15,465,000", "34,333,000", "31,472,000", "28,611,000", "25,750,000", "20,028,000", "14,306,000", "30,157,000", "27,644,000", "25,131,000", "22,618,000", "17,592,000", "12,566,000", "25,518,000", "23,391,000", "21,265,000", "19,138,000", "14,886,000", "10,633,000", "21,806,000", "19,989,000", "18,172,000", "16,355,000", "12,720,000", "9,086,000", "18,558,000", "17,012,000", "15,465,000", "13,919,000", "10,826,000", "7,733,000", "15,311,000", "14,035,000", "12,759,000", "11,483,000", "8,932,000", "6,380,000", "12,991,000", "11,909,000", "10,826,000", "9,743,000", "7,578,000", "5,413,000", "23,198,000", "21,265,000", "19,332,000", "17,399,000", "13,532,000", "9,666,000", "21,806,000", "19,989,000", "18,172,000", "16,355,000", "12,720,000", "9,086,000", "20,414,000", "18,713,000", "17,012,000", "15,311,000", "11,909,000", "8,506,000", "19,022,000", "17,437,000", "15,852,000", "14,267,000", "11,097,000", "7,926,000", "17,167,000", "15,736,000", "14,306,000", "12,875,000", "10,014,000", "7,153,000", "15,775,000", "14,460,000", "13,146,000", "11,831,000", "9,202,000", "6,573,000", "13,919,000", "12,759,000", "11,599,000", "10,439,000", "8,120,000", "5,800,000", "12,527,000", "11,483,000", "10,439,000", "9,395,000", "7,308,000", "5,220,000", "11,135,000", "10,207,000", "9,279,000", "8,352,000", "6,496,000", "4,640,000", "9,743,000", "8,932,000", "8,120,000", "7,308,000", "5,684,000", "4,060,000", "12,991,000", "11,909,000", "10,826,000", "9,743,000", "7,578,000", "5,413,000", "12,527,000", "11,483,000", "10,439,000", "9,395,000", "7,308,000", "5,220,000", "12,063,000", "11,058,000", "10,053,000", "9,048,000", "7,037,000", "5,027,000", "11,599,000", "10,633,000", "9,666,000", "8,700,000", "6,766,000", "4,833,000", "11,135,000", "10,207,000", "9,279,000", "8,352,000", "6,496,000", "4,640,000", "10,671,000", "9,782,000", "8,893,000", "8,004,000", "6,225,000", "4,447,000", "10,207,000", "9,357,000", "8,506,000", "7,656,000", "5,955,000", "4,253,000", "9,279,000", "8,506,000", "7,733,000", "6,960,000", "5,413,000", "3,867,000", "7,888,000", "7,230,000", "6,573,000", "5,916,000", "4,601,000", "3,287,000", "6,960,000", "6,380,000", "5,800,000", "5,220,000", "4,060,000", "2,900,000", "6,125,000", "5,614,000", "5,104,000", "4,594,000", "3,573,000", "2,552,000", "5,846,000", "5,359,000", "4,872,000", "4,385,000", "3,411,000", "2,436,000", "5,568,000", "5,104,000", "4,640,000", "4,176,000", "3,248,000", "2,320,000", "5,290,000", "4,849,000", "4,408,000", "3,967,000", "3,086,000", "2,204,000", "5,104,000", "4,679,000", "4,253,000", "3,828,000", "2,978,000", "2,127,000", "4,826,000", "4,423,000", "4,021,000", "3,619,000", "2,815,000", "2,011,000", "4,547,000", "4,168,000", "3,789,000", "3,411,000", "2,653,000", "1,895,000", "4,362,000", "3,998,000", "3,635,000", "3,271,000", "2,544,000", "1,818,000", "4,176,000", "3,828,000", "3,480,000", "3,132,000", "2,436,000", "1,740,000", "3,990,000", "3,658,000", "3,325,000", "2,993,000", "2,328,000", "1,663,000", "2,506,000", "2,297,000", "2,088,000", "1,879,000", "1,462,000", "1,044,000", "2,413,000", "2,212,000", "2,011,000", "1,810,000", "1,408,000", "1,006,000", "2,320,000", "2,127,000", "1,934,000", "1,740,000", "1,354,000", "967,000", "2,227,000", "2,042,000", "1,856,000", "1,671,000", "1,300,000", "928,000", "2,135,000", "1,957,000", "1,779,000", "1,601,000", "1,245,000", "890,000", "2,042,000", "1,872,000", "1,702,000", "1,532,000", "1,191,000", "851,000", "1,949,000", "1,787,000", "1,624,000", "1,462,000", "1,137,000", "812,000", "1,856,000", "1,702,000", "1,547,000", "1,392,000", "1,083,000", "774,000", "1,764,000", "1,617,000", "1,470,000", "1,323,000", "1,029,000", "735,000", "1,671,000", "1,532,000", "1,392,000", "1,253,000", "975,000", "696,000"];
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
    }

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
              '<span class="value">&yen;</span>');
            $("#diamond_price_table_display_2 #price_table_calc").html(cell.text() +
              '<span class="value">&yen;</span>');

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
            $("#daiya_gold_calc").html(gold_daiya_calc + '<span class="value">&yen;</span>');

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

    // 円矢印アコーディオン
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

    // 円矢印アコーディオン
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
      var current_time = new Date();
      var current_hours = current_time.getHours();
      var current_minutes = current_time.getMinutes();
      var current_time_string = current_hours.toString().padStart(2, '0') + ":" + current_minutes.toString().padStart(2, '0');

      var start_time = "21:00";
      var end_time = "08:00";

      var is_night_time = false;

      if (start_time < end_time) {
        // 範囲が一日をまたがない場合の処理
        if (current_time_string >= start_time && current_time_string <= end_time) {
          is_night_time = true;
        }
      } else {
        // 範囲が一日をまたぐ場合の処理
        if (current_time_string >= start_time || current_time_string <= end_time) {
          is_night_time = true;
        }
      }

      console.log("Current Time: " + current_time_string + is_night_time);
      if (is_night_time) {
        // Append style for hiding footer image on mobile
        var style = document.createElement("style");
        style.textContent = `
                    @media (max-width: 768px) {
                        .footer__cta img {
                            display: none;
                        }
                    }
                `;
        document.head.appendChild(style);

        // Load Chatbot script
        (function() {
          var w = window,
            d = document;
          var s = "https://app.chatplus.jp/cp.js";
          d["__cp_d"] = "https://app.chatplus.jp";
          d["__cp_c"] = "84a59a76_1";
          var a = d.createElement("script"),
            m = d.getElementsByTagName("script")[0];
          a.async = true, a.src = s, m.parentNode.insertBefore(a, m);
        })();
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