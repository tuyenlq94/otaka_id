<?php
/* Template Name: LP */
?>


<html lang="ja">


<?php get_template_part('head'); ?>

<body>

  <?php get_header(); ?>

  <section class="fv_section">
    <div class="fv_img_area">
      <img class="is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/otakaraya_hongkong_fv_pc.webp" alt="">
      <img class="is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_fv_sp.webp" alt="">
    </div>

    <div class="license_area">

      <style>
        @media (max-width: 767px) {
          .char_area {
            width: 98%;
            margin: 10% auto;
            gap: 3%;
          }
        }
      </style>
    </div>

    <div class="char_area">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/img_c.webp" alt="">
      <div class="char_area_text_area">
        <h1 class="char_area_text_top">
          Providing high-value purchasing and shopping experiences with Japanese-style "Omotenashi" hospitality
        </h1>
        <p class="color_e60012">Over 1,200 specialized buying stores!</p>
        <p class="char_area_text_bottom">Experience OTAKARAYA's "Omotenashi" hospitality, cherished by customers for over 20 years</p>
      </div>

      <style>
        .char_area {
          display: flex;
          width: 70%;
          margin: 5% 0px 5% 20%;
          align-items: center;
          gap: 10%;
        }

        .char_area img {
          width: 28%;
          height: fit-content;
        }

        .char_area_text_top {
          font-size: clamp(1em, 2.0vw, 3em);
          line-height: 1.5;
        }

        .char_area p.color_e60012 {
          font-size: clamp(0.8em, 2vw, 3em);
          margin: 0;
        }

        .char_area_text_bottom {
          font-size: clamp(0.6em, 1.4vw, 3em);
          line-height: 1.7;
          margin: 3% 0 0 0;
        }

        @media (max-width: 767px) {
          .char_area_text_top {
            position: relative;
            left: -15%;
            z-index: 0;
            font-size: 14px;
            width: 110%;
          }

          .char_area_text_top:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: blur(20px);
            z-index: -1;
            background-color: #ffffff;
          }

          .char_area {
            width: 100%;
            margin: 10% 0;
            gap: 5%;
          }

          .char_area img {
            width: 35%;
            height: auto;
          }
        }
      </style>
    </div>


    <style>
      @media (min-width: 768px) {
        .fv_section .slide_wrap {
          margin: 0px 6%;
        }
      }
    </style>


  </section>






  <section class="buy_section" id="buy">
    <div class="decoration">
      <div class="decoration_text">BUY</div>
      <div class="decoration_bar"></div>
    </div>
    <div class="content_fv_area">

      <div class="content_fv_img_sp_wrap">
        <img class="content_fv_img_sp active is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/sp_hongkong_buy_slide1.webp" alt="">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/sp_hongkong_buy_slide2.webp" alt="">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/sp_hongkong_buy_slide3.webp" alt="">
      </div>


      <div class="content_fv_text_area">
        <div class="content_fv_text_t_wrap">
          <div class="content_fv_text_t color_e60012">
            Delivering Premium Japanese-Sourced Luxury Brands Directly to You
          </div>
          <div class="content_fv_text_b font_size_s">
            We offer a curated global selection of prestigious luxury items, including fine watches, designer handbags, and exquisite jewelry. At 'OTAKARAYA', our extensive collection of authentic luxury pieces ensures you'll discover the perfect brand you've been searching for! Explore our diverse selection to find your ideal luxury treasure.
          </div>
        </div>

        <div class="buy_section_text_t font_size_m">
          New items arriving weekly!
        </div>
        <div class="buy_section_text_b_area color_e60012">
          <span class="s_text">Approximately</span><br><span class="b_text">500</span><br><span class="s_text">items in stock!</span>
        </div>
      </div>

      <img class="content_fv_img active is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_buy_slide1.webp" alt="">
      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_buy_slide2.webp" alt="">
      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_buy_slide3.webp" alt="">

    </div>

    <div class="buy_section_b_area">
      <div class="buy_section_b_area_text_content_area">
        <div class="bottom_content_multiple">
          <h2 class="color_e60012">WATCH BRAND SELECTIONS</h2>
          <div class="pick_up_brand_content_area">
            ROLEX / PATEK PHILIPPE / AUDEMARS PIGUET / A.LANGE SOEHNE / BREGUET /
            VACHERON CONSTANTIN / CARTIER / OMEGA / IWC / etc...
          </div>
        </div>
        <div class="bottom_content_multiple">
          <h2 class="color_e60012">BAG BRAND SELECTIONS</h2>
          <div class="pick_up_brand_content_area">
            HERMES / CHANEL / LOUIS VITTON / GUCCI / CELINE / GOYARD / etc...
          </div>
        </div>
        <div class="bottom_content_multiple">
          <h2 class="color_e60012">JEWELRY BRAND SELECTIONS</h2>
          <div class="pick_up_brand_content_area">
            HARRY WINSTON / Vancleef & Arpels / Tiffany & co. / Bvlgari / GLAFF / Cartier / etc...
          </div>
        </div>
      </div>

      <?php get_template_part('template-parts/pick-up'); ?>

    </div>

    <a class="whats_app_btn_area" href="https://api.whatsapp.com/send/?phone=85290716119">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/whats_app_btn.png" alt="">
    </a>

  </section>

  <style>
    @media (min-width: 768px) {
      .sell_section .content_fv_img {
        width: 36%;
        margin-right: 10%;
      }

      .sell_section .content_fv_text_area {
        width: 36%;
      }

      .sell_section .content_fv_area {
        margin-bottom: 13%;
      }
    }


    .image-container {
      display: flex;
      align-items: stretch;
      /* 各アイテムを同じ高さにする */
      justify-content: center;
      gap: 20px;
      /* 各アイテムの間隔 */
    }

    .image-item {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
      justify-content: flex-start;
      flex: 1;
    }

    .image-item img {
      display: block;
      max-width: 100%;
      height: auto;
    }

    .image-item_text {
      margin-top: 10px;
      font-size: 16px;
    }

    .arrow {
      width: 0;
      height: 0;
      border-top: 1.5vw solid transparent;
      border-bottom: 1.5vw solid transparent;
      border-left: 1.5vw solid #e60012;
      align-self: center;
      margin-bottom: 5%;
    }

    .flow_area {
      margin: 0 15%;
      margin-bottom: 5%;
    }

    .choose_content {
      display: flex;
      flex-wrap: wrap;
      margin: 0 20%;
      gap: 2em 2em;
      justify-content: center;
    }

    .choose_content img {
      width: 31%;
    }



    .purchased_content_area {
      display: flex;
      gap: 1%;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .purchased_content_area img {
      width: 19%;
    }

    .pick_up_brand_content_area {
      padding: 3%;
      background-color: #f3f2f2;
      font-weight: 400;
      font-size: clamp(1em, 1.9vw, 3em);
      line-height: 1.8em;
    }

    .section_b_area_content {
      margin: 0 0.3%;
    }

    .sell_section .slide_wrap {
      margin: 0 0%;
    }

    .purchase_results_slide.font_size_s {
      font-size: clamp(0.55em, 1vw, 2em);
    }

    .results_price_text_wrap {
      display: flex;
      gap: 5%;
      margin: 3% 0 5%;
      align-items: center;
    }

    .results_price_text_head {
      padding: 2%;
      background-color: #e60012;
      color: #fff;
    }

    .date_condition {
      margin-bottom: 3%;
    }



    @media (max-width: 767px) {
      .pick_up_brand_content_area {
        margin: 0 3%;
      }

      .flow_area {
        margin: 0 20%;
      }

      .arrow {
        border-top: 5vw solid transparent;
        border-bottom: 5vw solid transparent;
        border-left: 5vw solid #e60012;
        margin-bottom: 0%;
        transform: rotate(90deg);
      }

      .image-container {
        gap: 10px;
        flex-direction: column;
      }

      .choose_content img {
        width: 47.5%;
      }


      .choose_content {
        margin: 0 3%;
        gap: 1rem 5%;
      }

      .purchased_content_area img {
        width: 49%;
        margin-bottom: 2%;
      }

      .sell_section .bottom_content_wrap {
        padding: 8% 0%;
        padding-top: 13%;
      }

      .sell_section .purchased_content_area {
        padding: 0 3%;
      }

    }
  </style>

  <section class="sell_section" id="sell">
    <div class="decoration">
      <div class="decoration_text">SELL</div>
      <div class="decoration_bar"></div>
    </div>
    <div class="content_fv_area">

      <div class="content_fv_img_sp_wrap">
        <img class="content_fv_img_sp active is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide1.jpg" alt="">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide3.jpg" alt="">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide4.jpg" alt="">
      </div>


      <div class="content_fv_text_area">
        <div class="content_fv_text_t_wrap">
          <div class="content_fv_text_t color_e60012">
            Professional Appraisers ×<br class="is-pc">AI Technology:<br>
            Experience the Industry's Fastest Premium Purchasing!
          </div>
          <div class="content_fv_text_b font_size_s">
            Bring your valuable items to "OTAKARAYA" - whether it's precious metals, jewels, watches, or luxury brands (including bags and jewelry). Our unique combination of expert appraisers and advanced AI technology ensures you'll receive higher prices and faster service than anywhere else. Join our many satisfied customers who have discovered the OTAKARAYA difference!
          </div>
        </div>


      </div>
      <img class="content_fv_img active is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide1.jpg" alt="">
      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide3.jpg" alt="">
      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_slide4.jpg" alt="">
    </div>


    <div class="sell_section_b_area">
      <div class="sell_section_ap_area">
        <div class="sell_section_ap_top_area">
          <div class="sell_section_ap_top_area_img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/no.1.webp" alt="">
            <p style="text-align: center;">*Based on evaluations received from <br class="is-pc">August 8-14, 2024</p>
          </div>
          <div class="sell_section_ap_top_area_graph">
            <div class="percent">
              <svg viewBox="0 0 180 180">
                <circle class="base" cx="90" cy="90" r="70"></circle>
                <circle class="line" cx="90" cy="90" r="70"></circle>
              </svg>
              <div class="number">
                <p>Customer <br>Satisfaction <br class="si-pc">Rate</p>
                <p class="title color_e60012">98<span>%</span></p>
              </div>
            </div>
            <p>*According to our in-house survey, this percentage reflects the proportion of respondents who were satisfied with our service and pricing.</p>
          </div>
        </div>
      </div>
    </div>

    <style>
      .number p {
        margin: 0;
      }

      .percent {
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: auto;
      }

      .percent svg {
        width: 100%;
        height: auto;
        transform: rotate(-90deg);
      }

      svg circle {
        fill: none;
        stroke-width: 30;
        stroke: #fff;
        stroke-dasharray: 440;
        stroke-dashoffset: 0;
      }

      svg circle.line {
        stroke-dashoffset: calc(440 - (440 * 98) / 100);
        stroke: #e60012;
        animation: none;
      }

      .sell_section_ap_top_area {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5%;
        font-family: serif;
        font-size: 0.5em;
      }


      .percent .number {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }

      .sell_section_ap_top_area_img {
        width: 45%;
        height: fit-content;
      }

      .sell_section_ap_top_area_graph {
        width: 25%;
      }

      .percent .number .title {
        font-size: clamp(3.5em, 6vw, 5em);
        line-height: 1;
      }

      .percent .number .title span {
        font-size: clamp(0.7em, 1vw, 3em);
      }

      .sell_section_reason_img {
        width: 70%;
        margin: 5% auto 10%;
      }

      @keyframes circleAnim {
        0% {
          stroke-dasharray: 0 440;
        }

        100% {
          stroke-dasharray: 440 440;
        }
      }

      .line {
        animation: circleAnim 1s forwards;
      }

      @media (max-width: 767px) {
        .percent .number .title {
          font-size: 50px;
        }

        .sell_section_ap_top_area_img {
          width: 95%;
        }

        .sell_section_ap_top_area {
          flex-direction: column;
        }

        .sell_section_ap_top_area_graph {
          width: 60%;
        }

        .sell_section_ap_top_area p {
          font-size: clamp(1em, 1vw, 3em);
          line-height: 2;
        }

        .sell_section_reason_img {
          width: 90%;
        }
      }

      .number p {
        font-size: clamp(1em, 1.5vw, 3em);
      }
    </style>

    <script>
      function startCircleAnimation(element) {
        element.querySelector('.line').style.animation = 'circleAnim 1s forwards';
      }

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            startCircleAnimation(entry.target);
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.5
      });

      document.querySelectorAll('.percent').forEach(percent => {
        observer.observe(percent);
      });
    </script>


    <div class="sell_section_reason_img">
      <img class="is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/otakaraya_hongkong_sell_reason_pc.webp" alt="">
      <img class="is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/otakaraya_hongkong_sell_reason_sp.webp" alt="">
    </div>



    <div class="flow_area">
      <h3 class="color_e60012">How to Sell With Us</h3>
      <div class="image-container">
        <div class="image-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_flow1.jpg" alt="">
          <div class="image-item_text">Bring your items to our location</div>
        </div>
        <div class="arrow"></div>
        <div class="image-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_flow2.jpg" alt="">
          <div class="image-item_text">Item appraisal</div>
        </div>
        <div class="arrow"></div>
        <div class="image-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_flow3.jpg" alt="">
          <div class="image-item_text">Receive our competitive offer</div>
        </div>
        <div class="arrow"></div>
        <div class="image-item">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_flow4.jpg" alt="">
          <div class="image-item_text">Get paid via bank transfer</div>
        </div>
      </div>
    </div>

    <a class="whats_app_btn_area" href="https://api.whatsapp.com/send/?phone=85290716119">
      <img src="<?php echo get_template_directory_uri() ?>/assets/img/whats_app_btn.png" alt="">
    </a>

    </div>


    <div class="bottom_content_wrap">
      <div class="bottom_content_multiple">
        <h2 class="color_e60012">Items We Buy</h2>
        <div class="purchased_content_area">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_purchased_items1.jpg" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_purchased_items2.jpg" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_purchased_items3.jpg" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_purchased_items4.jpg" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_sell_purchased_items5.jpg" alt="">
        </div>
      </div>

      <div class="bottom_content_multiple">
        <h2 class="color_e60012">Focus Brands for Purchase</h2>
        <div class="pick_up_brand_content_area">
          ROLEX / PATEK PHILIPPE / AUDEMARSPIGUET / PANERAI / GUCCI / LOUIS VUITTON /
          CHANEL / HERMES / DIOR / FENDI / GOYARD / CARTIER / VANCLEEF & ARPELS /
          BVLGARI / GRAFF

        </div>
      </div>

      <?php get_template_part('template-parts/purchase-results'); ?>


    </div>

  </section>

  <?php get_template_part('template-parts/cta'); ?>


  <style>
    .consign_section {
      margin-top: 11%;
    }

    .consign_section .choose_area {
      margin-bottom: 5%;
    }

    .consign_section .choose_content {
      margin: 0 10%;
    }

    .results_explanation {
      word-break: break-all;
    }



    .consign_section .content_fv_img {
      top: -10%;
      width: 37%;
      right: 10%;
    }



    @media (min-width: 768px) {
      .consign_section .content_fv_text_area {
        width: 35%;
      }

      .consign_section .content_fv_area {
        margin-bottom: 12%;
      }

    }

    @media (max-width: 767px) {
      .buy_img_area {
        width: 100%;
        margin: 15% 0;
      }

      .consign_section .choose_content img {
        width: 90%;
      }

      .consign_section .bottom_content_wrap {
        padding: 8% 0%;
      }

      .consign_section {
        margin-top: 20%;
      }

      .consign_section img.content_fv_img_sp.is-sp {
        margin: 0 0 0 auto;
      }




      .consign_section img.content_fv_img_sp.is-sp {
        left: 60%;
      }

      .consign_section .content_fv_text_t_wrap {
        padding-left: 25%;
      }

    }
  </style>



  <section class="consign_section" id="consignment_sales">

    <div class="decoration">
      <div class="decoration_text">CONSIGN</div>
      <div class="decoration_bar"></div>
    </div>
    <div class="content_fv_area">

      <div class="content_fv_img_sp_wrap">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_congsign_mv1.jpg" alt="">
        <img class="content_fv_img_sp is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_congsign_mv2.webp" alt="">
      </div>

      <div class="content_fv_text_area">
        <div class="content_fv_text_t_wrap">
          <div class="content_fv_text_t color_e60012">
            Consignment Service
          </div>
          <div class="content_fv_text_b font_size_s">
            We offer a professional consignment service that safely stores and markets your valuable items on your behalf. Upon successful sale, you'll receive your desired payment on the very same day. Leveraging our extensive market data and proven track record, we set optimal selling prices that maximize returns to our clients - making our service particularly attractive for those seeking the best value for their luxury items.
          </div>
        </div>
      </div>

      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_congsign_mv1.jpg" alt="">
      <img class="content_fv_img is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/hongkong_congsign_mv2.webp" alt="">

    </div>

    <div class="consign_section_b_area">

      <div class="choose_area">
        <h3 class="color_e60012">Consignment Service</h3>
        <div class="choose_content">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/adb_img1.webp" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/adb_img2.webp" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/adb_img3.webp" alt="">
          <img src="<?php echo get_template_directory_uri() ?>/assets/img/adb_img4.webp" alt="">
        </div>
      </div>

      <div class="buy_img_area">
        <img class="is-pc" src="<?php echo get_template_directory_uri() ?>/assets/img/buy_img.webp" alt="">
        <img class="is-sp" src="<?php echo get_template_directory_uri() ?>/assets/img/buy_img_sp.webp" alt="">
      </div>

      <a class="whats_app_btn_area" href="https://api.whatsapp.com/send/?phone=85290716119">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/whats_app_btn.png" alt="">
      </a>

    </div>

    <style>
      .consign_section_b_area {
        padding-bottom: 3%;
      }
    </style>
  </section>


  <?php get_template_part('template-parts/cta'); ?>



  <section class="info_section" id="shop_info">
    <div class="shop-info">
      <div class="shop-header">
        <h2 class="color_e60012">SHOP INFO</h2>
      </div>

      <div class="shop-content">
        <div class="shop-left">
          <iframe
            class="is-pc"
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3678.582085178455!2d114.16950548113327!3d22.302478702950918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6I6K5aOr5YCr5pWm5buj5aC0Ry9GIEcwMS1HMDIg6aaZ5riv5Lmd6b6N5L2Q5pWm5b2M5pWm6YGTMjE56Jmf!5e0!3m2!1sja!2sjp!4v1729847245166!5m2!1sja!2sjp"
            width="80%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

        <div class="shop-right">
          <div class="info-item">
            <span class="label">Contact Number</span>
            <span class="info">0000000000</span>
          </div>
          <div class="info-item">
            <span class="label">Business hour</span>
            <span class="info">11:00~21:00</span>
          </div>
          <div class="info-item">
            <span class="label">Regular Closing Day</span>
            <span class="info">Open Year-Round</span>
          </div>
          <div class="info-item">
            <span class="label">Address</span>
            <span class="info">住所住所住所住所住所住所</span>
          </div>
          <div class="info-item">
            <span class="label">Nearest Access</span>
            <span class="info">最寄最寄最寄最寄最寄最寄</span>
          </div>
        </div>
      </div>

      <iframe
        class="is-sp"
        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3678.582085178455!2d114.16950548113327!3d22.302478702950918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z6I6K5aOr5YCr5pWm5buj5aC0Ry9GIEcwMS1HMDIg6aaZ5riv5Lmd6b6N5L2Q5pWm5b2M5pWm6YGTMjE56Jmf!5e0!3m2!1sja!2sjp!4v1729847245166!5m2!1sja!2sjp"
        width="100%"
        height="30%"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>

    </div>



  </section>

  <style>
    .shop-info {
      width: 85%;
      text-align: center;
      margin-left: 5%;
    }

    .shop-content {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    @media (min-width: 768px) {
      .shop-left {
        flex: 1;
      }

      shop-info {
        width: 95%;
      }
    }


    .shop-right {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      padding: 2% 0 2% 0;
    }

    .info-item {
      display: flex;
      justify-content: space-between;
      align-items: baseline;
      margin-bottom: 1vw;
      font-size: 0.8em;
    }

    .info_section .label {
      font-weight: bold;
      background-color: #333333;
      color: white;
      padding: 10px;
      min-width: 150px;
      text-align: left;
      width: 40%;
      font-size: clamp(0.9em, 1vw, 3em);
      text-align: center;
      font-weight: 500;
    }

    .info_section .info {
      width: 50%;
      text-align: left;
      line-height: 1.5em;
    }

    .shop-images {
      display: flex;
      justify-content: space-between;
    }

    .shop-images img {
      width: 32%;
      height: auto;
    }

    .shop-images {
      padding: 2% 5%;
    }

    @media (max-width: 768px) {
      .info-item {
        flex-direction: column;
        margin-bottom: 2vw;
      }

      .info_section .label {
        width: 96%;
        padding: 10px 2%;
        text-align: left;
      }

      .info_section .info {
        padding-left: 0px;
        width: 100%;
        margin-top: 3%;
      }



      .shop-right {
        padding: 0% 0%;
      }

      .shop-images img {
        width: 90%;
        margin-top: 5%;
      }

      .shop-images {
        flex-direction: column;
        align-items: center;
        padding: 2% 5%;
      }
    }
  </style>


  <?php get_footer(); ?>

</body>




</html>