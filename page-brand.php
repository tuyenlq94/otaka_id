<?php
/* Template Name: ブランドトップページ */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/lye5orr.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../css/common.min.css">
    <link rel="stylesheet" type="text/css" href="../css/parts.min.css">
    <!-- local css -->
    <link rel="stylesheet" type="text/css" href="../css/shared.css">
    <link rel="stylesheet" type="text/css" href="../css/brand.min.css">
    <link rel="stylesheet" type="text/css" href="../css/renew2024_3.css">
    <link rel="stylesheet" type="text/css" href="../css/wardog.css">
    <script src="../js/jquery-3.6.3.min.js"></script>
    <title><?php echo get_the_title(); ?></title>
    <meta name="description" content="ChanelやHermès、ルイヴィトンなどのブランド品の高価買取は全国1,300店舗の「おたからや」！バック・財布・アクセサリー等幅広い品目の商品を高価買取いたします。査定額に絶対の自信！無料査定・出張買取も承ります。">
    <link rel="canonical" href="/">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:description" content="ChanelやHermès、ルイヴィトンなどのブランド品の高価買取は全国1,300店舗の「おたからや」！バック・財布・アクセサリー等幅広い品目の商品を高価買取いたします。査定額に絶対の自信！無料査定・出張買取も承ります。">
    <meta property="og:url" content="/">
    <meta property="og:site_name" content="ブランド買取専門店のおたからや">
    <link rel="apple-touch-icon" href="../images/common/cropped-fav_512x512-180x180.png">
</head>

<?php get_template_part('head2'); ?>

<style>
    a.img__link .img::before,
    a.img__link .img::after {
        content: none;
    }

    a.img__link {
        pointer-events: none;
    }
</style>

<body id="brand">

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
                <span itemprop="name">Pembelian Barang Bermerek dengan Harga Tinggi</span>
                <meta itemprop="position" content="2">
            </li>
        </ol>
    </div>
    <div class="fv_img_wrap">
        <img class="is-pc" src="../images/brand/EN_2024_brand_TOP_PC.webp" alt="">
        <img class="is-sp" src="../images/brand/EN_2024_brand_TOP_SP.webp" alt="">
        <?php include __DIR__ . '/template-parts/fv_obi.php'; ?>
    </div>

    <?php get_template_part('template-parts/license'); ?>
    <?php get_template_part('template-parts/shop-info'); ?>

    <main class="contents">
        <article class="contents__left">
            <section class="is-pc">
                <!--     ▼▼▼ top_h2_text▼▼▼     -->
                <h2 class="titleHeading top_h2_text">
                    Kunjungi Toko Spesialisasi Pembelian Otakaraya untuk Menjual Barang bermerek Anda.</h2>
                <!--     ▲▲▲ top_h2_text▲▲▲     -->

                <div class="titleMain--lead">
                Hermès, Chanel, Louis Vuitton, dan merek internasional lainnya juga termasuk, item seperti tas, dompet, aksesoris, jam tangan, dan berbagai macam barang lainnya seperti cincin, kalung, gelang, dan anting-anting. <br />
                    Di Otakaraya, penilai kami yang berpengalaman secara akurat menilai barang bermerek, memastikan layanan yang andal dan dapat dipercaya di lebih dari 1.200 lokasi di seluruh negeri.
                </div>
            </section>
            <div class="renew_2024_brand_titlebox is-sp">
                <h2 class="titleHeading top_h2_text">
                Kunjungi Toko Spesialisasi Pembelian  Otakaraya untuk Menjual dan Menilai Barang bermerek Anda.
                </h2>
                <!--     ▲▲▲ top_h2_text▲▲▲     -->

                <div class="renew_2024_brand_title_lead">
                    <p>
                    Hermès, Chanel, Louis Vuitton, dan merek internasional lainnya juga termasuk, item seperti tas, dompet, aksesoris, jam tangan, dan berbagai macam barang lainnya seperti cincin, kalung, gelang, dan anting-anting.<br />
                        Di Otakaraya, penilai kami yang berpengalaman secara akurat menilai barang bermerek, memastikan layanan yang andal dan dapat dipercaya di lebih dari 1.200 lokasi di seluruh negeri.
                    </p>
                </div>
            </div>

            <?php get_template_part('template-parts/assessment_cta'); ?>

            <section class="is-pc">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                    Toko Spesialisasi Pembelian Otakaraya
                    </h2>
                </div>
                <div class="expensive_purchase_brand_repeat">
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./hermes/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/en_birkin.webp" alt="Pembelian Hermes"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> Pembelian Hermes </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./chanel/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/matelasse.webp" alt="pembelian Chanel"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Chanel </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./louis-vuitton/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/monogram.webp" alt="pembelian Louis Vuitton"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Louis Vuitton </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./harrywinston/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/lily.webp" alt="pembelian Harry Winston"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Harry Winston </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./vancleefarpels/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/alhambra.webp" alt="pembelian Van Cleef & Arpels"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Van Cleef & Arpels </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./tiffany/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/tsmile.webp" alt="Pembelian Tiffany"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> Pembelian Tiffany </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./cartier/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/lovering.webp" alt="pembelian Cartier"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Cartier </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./bvlgari/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/bzeroone.webp" alt="pembelian Bulgari"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Bulgari </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./gucci/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/ggmarmont.webp" alt="pembelian Gucci"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Gucci </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./dior/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/ladydior.webp" alt="pembelian Dior"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Dior </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./prada/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/saffiano.webp" alt="pembelian Prada"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Prada </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./chopard/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/happydiamond.webp" alt="pembelian Chopard"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Chopard </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                </div>
            </section>
            <!-- <section class="is-pc">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main"> <span>Specialized Purchase</span> Store Otakaraya</h2>
                </div>
                <div class="expensive_purchase_brand_repeat">
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./hermes/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/en_birkin.webp" alt="Pembelian Hermes"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> Pembelian Hermes </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./chanel/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/matelasse.webp" alt="pembelian Chanel"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Chanel </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./louis-vuitton/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/monogram.webp" alt="pembelian Louis Vuitton"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Louis Vuitton </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./harrywinston/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/lily.webp" alt="pembelian Harry Winston"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Harry Winston </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./vancleefarpels/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/alhambra.webp" alt="pembelian Van Cleef & Arpels"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Van Cleef & Arpels </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./tiffany/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/tsmile.webp" alt="Pembelian Tiffany"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> Pembelian Tiffany </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./cartier/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/lovering.webp" alt="pembelian Cartier"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Cartier </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./bvlgari/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/bzeroone.webp" alt="pembelian Bulgari"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Bulgari </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./gucci/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/ggmarmont.webp" alt="pembelian Gucci"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Gucci </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./dior/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/ladydior.webp" alt="pembelian Dior"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Dior </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./prada/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/saffiano.webp" alt="pembelian Prada"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Prada </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_itemwrap"> <a href="./chopard/" class="img__link">
                            <div class="expensive_purchase_brand_itembox img"> <img src="../images/brand/happydiamond.webp" alt="pembelian Chopard"> </div>
                            <h3 class="expensive_purchase_brand_item_h4"> pembelian Chopard </h3>
                        </a> </div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                    <div class="expensive_purchase_brand_item_dummy"></div>
                </div>
                <div class="expensive_purchase_brand_link btn__wrap btn__red"> <a href="../brand/brand_list.html">Lihat semua merek lain yang dibeli</a> </div>
            </section> -->
            <div class="renew_2024_expensive_purchase_brand_repeat is-sp">
                <div class="renew_2024_expensive_purchase_superbox">
                    <h2 class="titleHeading">Toko Spesialisasi Pembelian Otakaraya</h2>
                    <!-- １行-->
                    <div class="renew_2024_expensive_purchase_contentsbox">
                        <div class="renew_2024_expensive_purchase_contentsbox_flex">
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./hermes/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/en_birkin.webp" alt="Pembelian Hermes"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">Pembelian Hermes
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./chanel/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/matelasse.webp" alt="pembelian Chanel"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Chanel
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./louis-vuitton/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/monogram.webp" alt="pembelian Louis Vuitton"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Louis Vuitton
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./harrywinston/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/lily.webp" alt="pembelian Harry Winston"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Harry Winston
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./vancleefarpels/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/alhambra.webp" alt="pembelian Van Cleef & Arpels"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Van Cleef & Arpels
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./tiffany/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/tsmile.webp" alt="Pembelian Tiffany"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">Pembelian Tiffany
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./cartier/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/lovering.webp" alt="pembelian Cartier"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Cartier
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./bvlgari/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/bzeroone.webp" alt="pembelian Bulgari"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Bulgari
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./gucci/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/ggmarmont.webp" alt="pembelian Gucci"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Gucci
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./dior/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/ladydior.webp" alt="pembelian Dior"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Dior
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./prada/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/saffiano.webp" alt="pembelian Prada"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Prada
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                            <div class="renew_2024_expensive_purchase_itembox_wrap"> <a href="./chopard/" class="img__link">
                                    <div class="renew_2024_expensive_purchase_itembox">
                                        <div class="renew_2024_expensive_purchase_item_image"> <img src="../images/brand/happydiamond.webp" alt="pembelian Chopard"> </div>
                                        <h3 class="renew_2024_expensive_purchase_item_brand">pembelian Chopard
                                            <div class="renew_2024_expensive_purchase_item_arrow">
                                                <div></div>
                                            </div>
                                        </h3>
                                    </div>
                                </a> </div>
                        </div>
                        <div class="btn__wrap btn__red"> <a href="./brand_list/" class="gtm-list-brand-all">Lihat semua merek lain yang dibeli</a> </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/assessment_cta'); ?>

            <section>
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">
                    Referensi Harga Pembelian untuk Barang Bermerek
                    </h2>
                    <div class="titleMain--lead">
                        <p></p>
                    </div>
                </div>
                <div class="flex flex--hasItem4">
                    <!-- タブメニュー -->
                    <ul class="flex__tab">
                        <!-- タブ部分 -->
                        <li class="tab__item active"> <a> Louis Vuitton </a> </li>
                        <li class="tab__item "> <a> Hermes </a> </li>
                        <li class="tab__item "> <a> Saluran </a> </li>
                        <li class="tab__item "> <a> Yang lain </a> </li>
                    </ul>

                    <!-- スライダー部分 -->
                    <div class="flex__tabContents no_slider">
                        <div class="flex__content active flex_content_wrap">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52339/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/0d706217fe3dc0164f211f4966e2ec88-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram deauvilleMINI shoulder bag M45528 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram deauvilleMINI shoulder bag M45528</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">187,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52340/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/ede4fe21ef52470b785232855bb40615-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram deauville handbag M47270 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram deauville handbag M47270</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">93,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52341/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/0a22ef77b9da7e1ba187b0f59c52af6b-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Damier deauville handbag Ｎ47272 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Damier deauville handbag Ｎ47272</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">63,800<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52342/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/f4f68587f57520dc7072f094cd380d10-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton epi deauville handbag 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton epi deauville handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">60,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52343/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/285e245fa7e085337ec56368ffb8cec7-1-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram deauville handbag M42228 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram deauville handbag M42228</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">39,600<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/vanity/52335/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/369f3c8951bf7bf635073bc8b9591a80-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram reverse vanityNVPM vanity bag M45165 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram reverse vanityNVPM vanity bag M45165</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">279,400<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/deauville-louis-vuitton/52344/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/100f701f50758a0e238d41c9c301a987-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Damier deauville handbag  N47272 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Damier deauville handbag N47272</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">23,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/vanity/52336/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/98d312968fec0a4ed7e498fbc20fec15-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram Ink vanityPM vanity bag M57118 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram Ink vanityPM vanity bag M57118</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">146,300<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/vanity/52337/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/4946bd028173004be04b9abb3c0840b4-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram bowling・vanity handbag M47270 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram bowling・vanity handbag M47270</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">72,600<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/vanity/52338/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/3428ceffb66a4cc1a3a12249434ca3dd-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton Monogram Amfer Three vanity star shoulder bag M47275 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton Monogram Amfer Three vanity star shoulder bag M47275</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">46,200<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52235/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/9cecdda4808720085f4857745ab21aaf-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton epi Painted Dots twist shoulder bag M21695 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton epi Painted Dots twist shoulder bag M21695</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">397,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52236/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/0887991f1a6e78b45421192698f0d6fa-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton epi twistMM shoulder bag M57517 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton epi twistMM shoulder bag M57517</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">394,900<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52237/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/169d489933acbba63e44161764a214d0-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton twist one handlePM M57093 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton twist one handlePM M57093</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">348,700<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52238/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/2ea4bbf0ec9ec0577e5c2d0a7cf9cec4-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton high end twist one handleBB M59090 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton high end twist one handleBB M59090</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">280,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52239/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/c9bbb721cee18fce00fc557564f14743-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton twist one handle M57214 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton twist one handle M57214</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">243,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/louis-vuitton/twist/52240/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/3d9a136a813def87cafe0602cfd4e348-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Louis Vuitton epi twistPM shoulder bag M50332 收購參考價格"></p>
                                            <p class="content--name">Louis Vuitton epi twistPM shoulder bag M50332</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">242,000<span>円</span></p>
                                    </div>
                                </li>
                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  flex_content_wrap">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52212/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/73257361d43c669bb4b16fbab24dcb6c-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet black gold metal fittings U engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet black gold metal fittings U engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">737,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52213/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/6626829c3c7a1c896b4672c83d98eb59-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet bordeaux silver metal fittings □M engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet bordeaux silver metal fittings M engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">698,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52215/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/c54aff440bacbe396733d7e4abcd3b56-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet green silver metal fittings C engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet green silver metal fittings C engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">685,300<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52216/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/fca9637672b76b921fb35726df1bf0bd-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet to go black silver metal fittings U engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet to go black silver metal fittings U engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">ASK</p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52217/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/4ddb5548cea22d1aae3ca8a7b9cad78a-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet long to go B engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet long to go B engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">632,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52219/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/fd914f9ea94dfa2f9415fedd71d4c60f-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet long to go U engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet long to go U engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">556,600<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52222/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/46cefd061375097dcff9f4f55c38abcc-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet to go beige silver metal fittings U engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet to go beige silver metal fittings U engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">528,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52223/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/37dc46ae9bad0527603dfb05fe9eb781-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet B engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet B engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">350,900<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52227/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/9f45ae8f256490c16b22fbebd5034461-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet Y engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet Y engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">303,600<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52230/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/30ed8cd9756ab16cad8cde19bc607543-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet red gold metal fittings X engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet red gold metal fittings X engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">287,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52231/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/da20a9399acde97661b7b1ea58dd3e8d-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet greige silver metal fittings R engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet greige silver metal fittings R engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">235,400<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/ostrich/52232/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/8d49c9d0d71b3f73064ce34967b89d23-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet gray gold metal fittings T engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet gray gold metal fittings T engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">232,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-wallet/52234/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/149a1a5c48d4a74d8af5052464299e4c-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly wallet yellow silver metal fittings O engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly wallet yellow silver metal fittings O engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">132,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-sports/52187/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/ef2fc256d10c0adce7529b0f0ba95d29-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly sportsPM shoulder bag S engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly sportsPM shoulder bag S engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">1,146,200<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-sports/52188/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/76feb528e87e5bff87b526b0c39be479-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly sportsGM shoulder bag black gold metal fittings X engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly sportsGM shoulder bag black gold metal fittings X engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">772,200<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/hermes/kelly-sports/52189/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/7a5c0755b921814fb02f6d1c79239768-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Hermès Kelly sportsPM shoulder bag brown gold metal fittings T engraved 收購參考價格"></p>
                                            <p class="content--name">Hermès Kelly sportsPM shoulder bag brown gold metal fittings T engraved</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">727,100<span>円</span></p>
                                    </div>
                                </li>
                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  flex_content_wrap">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52403/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/fb0cbb7277f1751cd0baa7ad98580226-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel Matelasse wild stitch shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel Matelasse wild stitch shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">551,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52404/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/326b2fab1f2df74b2211709eded12d3c-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch handbag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">396,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52488/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/3d7f28db91a6d3e7d887ade4439f38f6-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag black silver metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag black silver metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">386,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52489/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/3cfaab11a2f49cf7f72221eb4ad45f02-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch handbag black gold metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch handbag black gold metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">309,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52496/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/8413e4dac82a08dd3b290c8c979daf76-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag black gold metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag black gold metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">301,400<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52498/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/28b0668cfa3fcf5d77e6233cbd057a9e-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">279,400<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52500/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/9c0907e31609567743a57b50d7a56f03-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch chain shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch chain shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">276,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52501/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/ffc55e015f2e961598f6dc755822c39c-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">266,200<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52502/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/c35acc9a9c6542b91109bc529ace50ef-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch handbag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">254,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52503/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/ab39f8a921718c914cc3358d9e92d929-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag beige gold metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag beige gold metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">225,500<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52504/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/610cf5d63b439f75d66ce6fd9fc42f7f-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">ASK</p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52505/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/4999ab75eb70b054685cf158375d46ae-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag black silver metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag black silver metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">209,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52506/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/fc710870c2f3fb2c0c5b76b4e3c2b5af-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch tote bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch tote bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">198,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52507/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/4d40dd304c88302564c63f2542414e6f-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">196,900<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52517/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/ab8adb32dda5496bd197cb485c72e9e9-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch tote bag 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch tote bag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">188,100<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/chanel/wildstitch/52518/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/f73aa156424fcfbf913a51c3f5e91148-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Chanel wild stitch shoulder bag white gold metal fittings 收購參考價格"></p>
                                            <p class="content--name">Chanel wild stitch shoulder bag white gold metal fittings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">ASK</p>
                                    </div>
                                </li>
                            </div>
                            <div class="flex_annitation">
                                *Gambar hanya untuk ilustrasi.<br>
                                *Referensi harga pembelian adalah untuk barang yang memiliki sertifikat penilaian atau keaslian.
                            </div>
                        </div>
                        <div class="flex__content  flex_content_wrap">
                            <div id="flex-slider" class="content__list flex--slide">
                                <li class="content__item"> <a href="../brand/result/else-top/37383/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/05313354cec29f8dbac5db142aaa9cc6-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Damiani Belle epoque necklace WG diamond 收購參考價格"></p>
                                            <p class="content--name">Damiani Belle epoque necklace WG diamond</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">408,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/37389/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/fd9ad28aa9a7ff79d0042853fdd25fa4-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Damiani Belle epoque necklace YG diamond 收購參考價格"></p>
                                            <p class="content--name">Damiani Belle epoque necklace YG diamond</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">378,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/37254/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/68dfd2e64ba293d23d188e396e49fbbe-300x300.webp" class="attachment-thumbnail size-thumbnail" alt="Graff Mini Butterfly Silhouette necklace 收購參考價格"></p>
                                            <p class="content--name">Graff Mini Butterfly Silhouette necklace</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">275,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/43148/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/aa489e56ffd75cf1307856c1e35ec6b3_03.webp" class="attachment-thumbnail size-thumbnail" alt="Dior Lady Dior leather black handbag 收購參考價格"></p>
                                            <p class="content--name">Dior Lady Dior leather black handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">256,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/16967/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/2972-1.webp" class="attachment-thumbnail size-thumbnail" alt="Loewe puzzle small sand classic calf beige handbag 收購參考價格"></p>
                                            <p class="content--name">Loewe puzzle small sand classic calf beige handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">161,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/16964/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/2944-1.webp" class="attachment-thumbnail size-thumbnail" alt="Loewe hammock bag leather canvas off white handbag 收購參考價格"></p>
                                            <p class="content--name">Loewe hammock bag leather canvas off white handbag</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">119,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/43210/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/20220418-217-1.webp" class="attachment-thumbnail size-thumbnail" alt="Boucheron quatre matching rings 收購參考價格"></p>
                                            <p class="content--name">Boucheron quatre matching rings</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">254,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/43209/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/20220218-11-1.webp" class="attachment-thumbnail size-thumbnail" alt="Boucheron quatre radiant リング 收購參考價格"></p>
                                            <p class="content--name">Boucheron quatre radiant ring</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">264,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/16403/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/20220418-1771_02.webp" class="attachment-thumbnail size-thumbnail" alt="Piaget rose diamond necklace 收購參考價格"></p>
                                            <p class="content--name">Piaget rose diamond necklace</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">506,000<span>円</span></p>
                                    </div>
                                </li>
                                <li class="content__item"> <a href="../brand/result/else-top/16346/" class="img__link">
                                        <div class="content_item_wrap">
                                            <p class="content__image img"> <img width="300" height="300" src="../images/brand/20220218-157_02.webp" class="attachment-thumbnail size-thumbnail" alt="Chopard happy diamond necklace 收購參考價格"></p>
                                            <p class="content--name">Chopard happy diamond necklace</p>
                                        </div>
                                    </a>
                                    <div class="content__text">
                                        <p class="content--title">Referensi Harga Pembelian</p>
                                        <p class="content--price">212,000<span>円</span></p>
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

            <?php get_template_part('template-parts/assessment_cta'); ?>


            <div class="renew_2024_brand_enchant_title is-sp">
                <h2 class="titleHeading">
                    Item bermerek dengan Penawaran Pembelian yang Ditingkatkan
                </h2>
            </div>
            <section class="is-pc">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleHeading">
                        Item bermerek dengan Penawaran Pembelian yang Ditingkatkan
                    </h2>
                </div>
                <div class="enhanced_purchaceitems_repeat_box">
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/bag.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/477_440_440-1.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle">Pembelian Tas</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/wallet.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/350-1.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle"> Pembelian Dompet</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/jewelry.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/e18dc60eec8c61e518b6ebc301c4fc18.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle">Pembelian Perhiasan</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/apparel.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/77ec6c8b0c0df04c50f47d28da41a96e.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle">Pembelian Pakaian</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/shoes.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/M0iioUqInMl2CKp8-1.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle"> Pembelian Sepatu bermerek</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand/goods.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/12a4b9ab44ed6fb297887b573fc5d0ac_02.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle"> Pembelian aksesoriss</h3>
                    </div>
                    <div class="enhanced_purchaceitems_itembox"><a href="../brand-tokei/index.html" class="img__link">
                            <div class="enhanced_purchaceitems_itemimgwrap img">
                                <p><img class="enhanced_purchaceitems_itemimage" src="../images/brand/2f2dacfc364ac5ecdcf8b67d903e4afa.webp"></p>
                            </div>
                        </a>
                        <h3 class="enhanced_purchaceitems_itemtitle">Pembelian jam tangan</h3>
                    </div>
                </div>
            </section>
            <section>
                <div class="renew_2024_enhanced_purchaceitems_box is-sp">
                    <div class="renew_2024_enhanced_purchaceitems_repeat_box">
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/bag.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/477_440_440-1.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Tas</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/wallet.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/350-1.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Dompet</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/jewelry.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/e18dc60eec8c61e518b6ebc301c4fc18.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Perhiasan</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/apparel.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/77ec6c8b0c0df04c50f47d28da41a96e.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Pakaian</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/shoes.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/M0iioUqInMl2CKp8-1.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Merek Sepatu</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand/goods.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/12a4b9ab44ed6fb297887b573fc5d0ac_02.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Barang-barang kecil</h3>
                        </div>
                        <div class="renew_2024_enhanced_purchaceitems_itembox"> <a href="../brand-tokei/index.html">
                                <div class="renew_2024_enhanced_purchaceitems_itemimgwrap img"> <img class="renew_2024_enhanced_purchaceitems_itemimage" src="../images/brand/2f2dacfc364ac5ecdcf8b67d903e4afa.webp">
                                    <div class="renew_2024_expensive_purchase_item_arrow">
                                        <div></div>
                                    </div>
                                </div>
                            </a>
                            <h3 class="renew_2024_enhanced_purchaceitems_itemtitle">Jam</h3>
                        </div>
                    </div>
                </div>
            </section>

            <div class="renew_2024_enhance_model_title is-sp">
                <h2 class="titleHeading" style="color:white;">
                Model item bermerek dengan Penawaran Pembelian yang Ditingkatkan
                </h2>
            </div>
            <section class="enhanced_additional_wrap">
                <div class="titleMain titleMain--wrapper is-pc">
                    <h2 class="titleHeading">
                    Model item bermerek dengan Penawaran Pembelian yang Ditingkatkan
                    </h2>
                </div>
                <div class="enhanced_additional_tabbox">
                    <div class="enhanced_additional_tabitem wd_active">
                        <div class="enhanced_additional_tabitem_inner">Hermes</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                    <div class="enhanced_additional_tabitem">
                        <div class="enhanced_additional_tabitem_inner">Saluran</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                    <div class="enhanced_additional_tabitem">
                        <div class="enhanced_additional_tabitem_inner">Louis Vuitton</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                    <div class="enhanced_additional_tabitem">
                        <div class="enhanced_additional_tabitem_inner">Van Cleef & Arpels</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                    <div class="enhanced_additional_tabitem">
                        <div class="enhanced_additional_tabitem_inner">Tiffany</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                    <div class="enhanced_additional_tabitem">
                        <div class="enhanced_additional_tabitem_inner">Yang lain</div>
                        <div class="enhanced_additional_tabitem_circle">
                            <div class="enhanced_additional_tabitem_arrow"></div>
                        </div>
                    </div>
                </div>
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/birkin/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/2798_440_440-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Birkin</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/kelly/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/f8247c092dad25f12c03dbe04d7a4a94-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Kelly</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/picotin/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/b95287bc96f9e4a8a1d81d8999480fc5.jpg"></div>
                                <div class="wd_contents3_item_name">Beli Picotin Lock</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/evelyne/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/232-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Evelyne</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/alebag/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/69c708710dec52cc715855ff5b46f8a6-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Herbag</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/herline/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/0408-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Produknya</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/fourre-tout/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/4253-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Fourre-tout</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/garden-party/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/b7a75b61ebd700852ded0d77fa21ba00.webp"></div>
                                <div class="wd_contents3_item_name">Beli Pesta Taman</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/constance/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/92-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Constance</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/hermes/beant/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/0955-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Bearn</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/chanel/matelasse/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/3810_440_440_03.webp"></div>
                                <div class="wd_contents3_item_name">Beli Matelasse</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/chanel/cambon/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/f2a562998d0c5459b5d134d3061b2b89-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli cambonline</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/chanel/boy-chanel/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/4d510fa1579fb82b7b09efa36f5d2f94.webp"></div>
                                <div class="wd_contents3_item_name">Beli Boy Chanel</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/chanel/newtravel/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/1518_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli NewTravel</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/chanel/camellia/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/4433_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Camelia</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/result/chanel/hukkokutote/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/8e4fbff81fb83c0afa0c965893047123-1_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Revival tote</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/keepall/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/450755c8e296ac1da7ba181cfd7c5b36_03.webp"></div>
                                <div class="wd_contents3_item_name">Beli Keepall</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/alma/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/30abaf399626a2b9a57fabef8fc9aa97_03.webp"></div>
                                <div class="wd_contents3_item_name">Beli Alma</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/onthego/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/2134_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli On the go</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="brand/louis-vuitton/neverfull/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/2482_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Never Full</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/capucines/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/0361_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Capucines</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/speedy/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/1309_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Speedy</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/louis-vuitton/pochette-accessoires/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/2439_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Pochette-Accessoires</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/vancleefarpels/alhambra/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/20220418-2273-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Alhambra</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/vancleefarpels/perlee/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/e9cfd75529105e774933c52194669493.webp"></div>
                                <div class="wd_contents3_item_name">Beli Perlee</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/tiffany/by-the-yard/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/46d00bf385babb467f9aad34694c0ea7.webp"></div>
                                <div class="wd_contents3_item_name">Beli By The Yard</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/tiffany/hardwear/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/1e9ce44083a3cf473e477367b41e8e97.webp"></div>
                                <div class="wd_contents3_item_name">Beli HardWear</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/tiffany/open-heart/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/aa1be126ce759d6d4618e6e474da00b8.webp"></div>
                                <div class="wd_contents3_item_name">Beli Open Heart</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/result/tiffany/atlas/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/22_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli Atlas</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
                <div class="enhanced_additional_contents_superbox">
                    <div class="enhanced_additional_contentsbox"><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/cartier/trinity/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/20220318-67-1.webp"></div>
                                <div class="wd_contents3_item_name">Beli Trinity</div>
                            </a></div>
                        <!-- wd_contents_itembox --><!-- wd_contents_itembox -->
                        <div class="wd_contents3_itembox"><a href="../brand/bvlgari/b-zero1/" class="img__link">
                                <div class="wd_contents3_item_image img"><img src="../images/brand/20220418-66_02.webp"></div>
                                <div class="wd_contents3_item_name">Beli B-zero1</div>
                            </a></div>
                        <!-- wd_contents_itembox -->
                        <div class="enhanced_additional_repeater02_dummy"></div>
                        <div class="enhanced_additional_repeater02_dummy"></div>
                    </div>
                    <!-- enhanced_additional_contentsbox -->
                </div>
                <!-- enhanced_additional_contents_superbox -->
            </section>
            <h2 class="renew_2024_titlesub">
                <div class="renew_2024_titlesub_topbar">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                Alasan Mengapa Sekarang Saat yang Tepat untuk Menjual Barang Bermerek
            </h2>
            <section style="margin-top:0px !important">
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Harga Barang Bermerek sedang Meningkat</h3>
                    <div class="wd_brandinfo_story">Dalam beberapa tahun terakhir, faktor-faktor seperti kenaikan biaya bahan baku, perubahan kondisi global, dan melemahnya yen telah menyebabkan banyak merek menaikkan harga produknya.<br>
                        <br>
                        Kenaikan harga produk ini berkorelasi langsung dengan kenaikan harga beli, sehingga sekarang adalah waktu yang tepat untuk menjual barang bermerek.
                    </div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Selain itu, seiring bertambahnya usia, harga pembeliannya cenderung menurun.</h3>
                    <div class="wd_brandinfo_story">Umumnya nilai barang bermerek cenderung menurun seiring berjalannya waktu. Oleh karena itu disarankan untuk menjualnya selagi nilainya masih tinggi.<br>
                        <br>
                        Jika Anda berpikir untuk menjual barang bermerek, silakan berkonsultasi dengan Otakaraya.
                    </div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Permintaan barang bermerek bekas pakai semakin meningkat</h3>
                    <div class="wd_brandinfo_story">Dalam beberapa tahun terakhir, permintaan global akan tas bermerek bekas pakai meningkat. Barang bekas dari Jepang khususnya sangat populer di luar negeri.
                    <br />
                    Dengan naiknya harga barang bermerek yang baru akibat inflasi, permintaan barang bermerek bekas pakai pun meningkat.</div>
                </div>
            </section>
            <h2 class="renew_2024_titlesub">
                <div class="renew_2024_titlesub_topbar">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                Kriteria Barang Bermerek yang Dijual dengan Harga Tinggi
            </h2>
            <section style="margin-top:0px !important">
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Model Klasik Populer</h3>
                    <div class="wd_brandinfo_story">Model klasik disukai terlepas dari tren atau zaman, sehingga permintaannya stabil. Akibatnya, model klasik sangat populer di pasar barang bekas, dan ketika diajukan untuk dinilai, kemungkinan besar akan mendapatkan harga yang tinggi.</div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Model atau Warna Edisi Terbatas yang langka</h3>
                    <div class="wd_brandinfo_story">Model edisi terbatas, warna khusus, dan item kolaborasi yang produksinya terbatas sangat berharga karena kelangkaannya. Ketika barang-barang tersebut sulit ditemukan, permintaan di pasar barang bekas meningkat sehingga lebih cenderung dibeli dengan harga tinggi.</div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Kondisi Bagus, Sedikit Goresan dan Tanda Pemakaian</h3>
                    <div class="wd_brandinfo_story">Kondisi barang sangat mempengaruhi harga penilaiannya. Barang yang sedikit tergores, tidak ada noda, dan minim tanda bekas pakai kemungkinan besar akan dijual dengan harga tinggi. Berhati-hatilah dengan kondisi barang merek Anda selama penggunaan dan penyimpanan untuk mencegah kerusakan.</div>
                </div>
            </section>
            <h2 class="renew_2024_titlesub">
                <div class="renew_2024_titlesub_topbar">
                    <div class="renew_2024_titlesub_topbar_center"></div>
                    <div class="renew_2024_titlesub_topbar_left"></div>
                    <div class="renew_2024_titlesub_topbar_right"></div>
                </div>
                Tips Menjual Barang Bermerek Dengan Harga Tinggi
            </h2>
            <section style="margin-top:0px !important">
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Lakukan Perawatan Sederhana</h3>
                    <div class="wd_brandinfo_story">Sebelum penilaian, lakukan pembersihan dasar, seperti menghilangkan kotoran.<br>
                        <br>
                        Namun, bergantung pada cara melakukannya, pembersihan dapat menyebabkan kerusakan, jadi pastikan untuk menggunakan metode yang sesuai dengan bahan barang tersebut, dan hanya membersihkan dalam batas yang aman.
                    </div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Sertakan aksesoris dengan barangnya saat penilaian</h3>
                    <div class="wd_brandinfo_story">Jika Anda memiliki aksesoris yang disertakan dengan barang bermerek saat dibeli, seperti kotak, tas, garansi, atau kartu garansi, pastikan untuk menyertakannya saat Anda mengirimkan barang untuk dinilai.<br>
                        <br>
                        Di Otakaraya, dimungkinkan untuk dapat penawarkan pembelian bernilai tinggi bahkan tanpa aksesoris, dan hal itu tidak diwajibkan.
                    </div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Mengirimkan beberapa item bermerek untuk dinilai secara bersamaan.</h3>
                    <div class="wd_brandinfo_story">Di Otakaraya, harga pembelian meningkat dengan "penilaian bersamaan", yaitu beberapa item merek dinilai secara bersamaan. Jika Anda memiliki barang-barang yang tidak diinginkan, seperti tas dan kalung, cincin dan anting-anting, silakan bawa sekaligus.</div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Memanfaatkan promo untuk meningkatkan hasil penilaian</h3>
                    <div class="wd_brandinfo_story">Disarankan juga untuk memanfaatkan promo guna meningkatkan hasil penilaian.<br>
                        <br>
                        Di Otakaraya, kami melakukan berbagai promo pembelian eksklusif.<br />
                        Dengan secara aktif menggunakan promo yang cocok dengan barang yang Anda jual, Anda mendapatkan harga pembelian yang lebih tinggi.
                    </div>
                </div>
                <div class="wd_brandinfo_item">
                    <h3 class="wd_brandinfo_title">Kirimkan barang Anda untuk dinilai ke Otakaraya</h3>
                    <div class="wd_brandinfo_story">Otakaraya, toko spesialisasi pembelian, menangani berbagai macam barang. Dikelola oleh penilai berpengalaman, dan memiliki rekam jejak yang baik dalam pembelian dengan harga yang tinggi.<br>
                        <br>
                        Jika Anda memiliki barang bermerek yang tidak diinginkan, bawalah ke Otakaraya.
                    </div>
                </div>
            </section>

            <section class="reason_section">
                <?php get_template_part('template-parts/otakaraya_sel'); ?>
            </section>

            <!-- reason_section    -->


            <?php get_template_part('template-parts/assessment_cta'); ?>

            <!-- assessment_cta    -->

            <section class="state_bad_purchase">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">Kami membeli barang bermerek dalam kondisi apa pun.</h2>
                    <div class="titleMain--lead">
                        <p>Walaupun ada goresan dan rusak pada barang, kami tetap membeli barang itu dengan senang hati.</p>
                    </div>
                </div>
                <div class="colBox colBox__col04 sp__col03">
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/yogore_beta-1.webp" alt=" Goresan"></p>
                        </div>
                        <p class="text text--center"> Goresan</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/hason-1.webp" alt="sobekan"></p>
                        </div>
                        <p class="text text--center">sobekan</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/hurui_design-1.webp" alt="dan desain lama."></p>
                        </div>
                        <p class="text text--center">dan desain lama.</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/yabure-1.webp" alt="kotoran"></p>
                        </div>
                        <p class="text text--center">kotoran</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/kadosure-1.webp" alt="Lecet di sudut"></p>
                        </div>
                        <p class="text text--center">Lecet di sudut</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/hiyake-1.webp" alt="kerusakan akibat sinar matahari"></p>
                        </div>
                        <p class="text text--center">kerusakan akibat sinar matahari</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/huzokuhin-1.webp" alt="aksesori hilang"></p>
                        </div>
                        <p class="text text--center">aksesori hilang</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/sabi-1.webp" alt="dan karat"></p>
                        </div>
                        <p class="text text--center">dan karat</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/831ccd57c832dbc9f80649d253aebaa5.webp" alt="Kulit retak"></p>
                        </div>
                        <p class="text text--center">Kulit retak</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/40652420a4303af82cf6795a82b97e6b.webp" alt="noda tinta"></p>
                        </div>
                        <p class="text text--center">noda tinta</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/e71016dd6f2f0f35db2ffcb2d0d09203.webp" alt="perubahan warna bagian dalam"></p>
                        </div>
                        <p class="text text--center">perubahan warna bagian dalam</p>
                    </div>
                    <div class="col">
                        <div class="img">
                            <p><img src="../images/brand/984200ea113b94d27d2ad9b86085a99d.webp" alt="dan kotoran pada kulit yang tidak dirawat."></p>
                        </div>
                        <p class="text text--center">dan kotoran pada kulit yang tidak dirawat.</p>
                    </div>
                </div>
            </section>
            <a href="/watch/">
                <img class="bar_brandwatch_purchase is-pc" src="../images/brand/ENbrand_watch_bnr.webp" alt="名牌手錶">
                <img class="bar_brandwatch_purchase is-sp" src="../images/brand/EN_brand_watch_bnr_sp.webp" alt="名牌手錶">
            </a>
            <section class="otakaraya_purchase_goods">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main">Cari dari Item Pembelian Otakaraya</h2>
                </div>
                <div class="colBox colBox__col04 sp__col03">
                    <div class="col"> <a href="https://www.otakaraya.jp/gold/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/1_kin.webp" alt="Pembelian Emas"></p>
                            </div>
                            <p class="text text--center">Pembelian Emas</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/platinum/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/2_pt.webp" alt="Pembelian Logam Mulia & Platinum"></p>
                            </div>
                            <p class="text text--center">Pembelian Logam Mulia & Platinum</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/daiya/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/3_daiya.webp" alt="Pembelian Berlian / Perhiasan"></p>
                            </div>
                            <p class="text text--center">Pembelian Berlian / Perhiasan</p>
                        </a> </div>
                    <div class="col"> <a href="../brand-tokei/index.html" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/4_tokei.webp" alt="Pembelian Jam Tangan Bermerek"></p>
                            </div>
                            <p class="text text--center">Pembelian Jam Tangan Bermerek</p>
                        </a> </div>
                    <div class="col"> <a href="/brand-tokei/rolex/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/17_rolex.webp" alt="Pembelian Rolex"></p>
                            </div>
                            <p class="text text--center">Pembelian Rolex</p>
                        </a> </div>
                    <div class="col"> <a href="/brand-tokei/omega/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/18_omega.webp" alt="Pembelian Omega"></p>
                            </div>
                            <p class="text text--center">Pembelian Omega</p>
                        </a> </div>
                    <div class="col"> <a href="./" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/5_brand.webp" alt="Pembelian barang bermerek"></p>
                            </div>
                            <p class="text text--center">Pembelian barang bermerek</p>
                        </a> </div>
                    <div class="col"> <a href="./hermes/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/19_hermes.webp" alt="Pembelian Hermes"></p>
                            </div>
                            <p class="text text--center">Pembelian Hermes</p>
                        </a> </div>
                    <div class="col"> <a href="./chanel/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/20_chanel.webp" alt="pembelian Chanel"></p>
                            </div>
                            <p class="text text--center">pembelian Chanel</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/kitte/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/6_kitte_hagaki.webp" alt="Pembelian perangko"></p>
                            </div>
                            <p class="text text--center">Pembelian perangko</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/gakki/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/21_gakki.webp" alt="Pembelian Alat Musik"></p>
                            </div>
                            <p class="text text--center">Pembelian Alat Musik</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/gold/oban-koban/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/22_koban.webp" alt="Pembelian Koin Langka Besar dan Kecil"></p>
                            </div>
                            <p class="text text--center">Pembelian Koin Langka Besar dan Kecil</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/gold/kinka-ginka/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/7_kinka_ginka.webp" alt="Pembelian koin emas, koin perak dan koin peringatan"></p>
                            </div>
                            <p class="text text--center">Pembelian koin emas, koin perak dan koin peringatan</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/tableware02/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/11_brand_syokki.webp" alt="Pembelian peralatan makan bermerek"></p>
                            </div>
                            <p class="text text--center">Pembelian peralatan makan bermerek</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/order_medal/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/9_kunsyo_medaru.webp" alt="Pembelian Medali & Dekorasi"></p>
                            </div>
                            <p class="text text--center">Pembelian Medali & Dekorasi</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/kosen-sihei/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/8_kosen.webp" alt="Pembelian Koin & Uang Kertas Lama"></p>
                            </div>
                            <p class="text text--center">Pembelian Koin & Uang Kertas Lama</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/antique/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/23_kottou.webp" alt="Pembelian Barang Antik"></p>
                            </div>
                            <p class="text text--center">Pembelian Barang Antik</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/kimono2/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/14_kimono.webp" alt="Pembelian Kimono"></p>
                            </div>
                            <p class="text text--center">Pembelian Kimono</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/picture02/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/15_kaiga.webp" alt="Pembelian Lukisan, Kaligrafi Gulungan Gantung Jepang, dan Karya Seni"></p>
                            </div>
                            <p class="text text--center">Pembelian Lukisan, Kaligrafi Gulungan Gantung Jepang, dan Karya Seni</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/camera02/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/10_kamera.webp" alt="Pembelian kamera"></p>
                            </div>
                            <p class="text text--center">Pembelian kamera</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/g-ticket/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/24_kinken.webp" alt="Pembelian voucher uang tunai & Kartu Telepon"></p>
                            </div>
                            <p class="text text--center">Pembelian voucher uang tunai & Kartu Telepon</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/gunsouhin/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/25_gunpuku.webp" alt="Pembelian Seragam Militer & Perlengkapan Militer"></p>
                            </div>
                            <p class="text text--center">Pembelian Seragam Militer & Perlengkapan Militer</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/liquor/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/26_yousyu.webp" alt="Pembelian Minuman Beralkohol ala Barat"></p>
                            </div>
                            <p class="text text--center">Pembelian Minuman Beralkohol ala Barat</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/hobby/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/27_hobby.webp" alt="Pembelian Model Kereta - Hobi"></p>
                            </div>
                            <p class="text text--center">Pembelian Model Kereta - Hobi</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/item/mobile/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/28_sumaho.webp" alt="Pembelian Smartphone & Ponsel"></p>
                            </div>
                            <p class="text text--center">Pembelian Smartphone & Ponsel</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/minicar/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/29_minicar.webp" alt="Pembelian Model Miniatur Mobil"></p>
                            </div>
                            <p class="text text--center">Pembelian Model Miniatur Mobil</p>
                        </a> </div>
                    <div class="col"> <a href="https://www.otakaraya.jp/kouboku/" class="img__link">
                            <div class="img">
                                <p><img src="../images/brand/kouboku_33.000000.webp" alt="Pembelian Kayu Aromatik"></p>
                            </div>
                            <p class="text text--center">Pembelian Kayu Aromatik</p>
                        </a> </div>
                </div>
            </section>
            <section class="faq_wrap">
                <div class="titleMain titleMain--wrapper">
                    <h2 class="titleMain--main"> Pertanyaan yang Sering Diajukan tentang Pembelian Barang Bermerek</h2>
                    <div class="titleMain--lead">
                        <p></p>
                    </div>
                </div>
                <div class="qa__wrap js__more--3th">
                    <!-- もっと見るなし -->


                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya menjual jam tangan meskipun baterainya mati?</dt>
                            <dd class="qa__list__a">Ya, Anda bisa. Kami telah berhasil membeli jam tangan otomatis dan jam tangan yang dioperasikan dengan baterai, walau baterainya habis.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya menjualnya lebih dari harga aslinya?                            </dt>
                            <dd class="qa__list__a">Untuk beberapa item, kami mungkin menawarkan harga pembelian lebih tinggi dari harga aslinya. Namun, banyak produk bermerek cenderung kehilangan nilainya seiring berjalannya waktu. Jika Anda tidak lagi berencana untuk menggunakan barang tersebut, disarankan untuk menjualnya lebih cepat.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah mungkin untuk membatalkan item yang saya minta penilaiannya?
                            </dt>
                            <dd class="qa__list__a">Ya, itu mungkin. Namun, harap dicatat bahwa pengembalian tidak dapat dilakukan apabila transaksi pembelian telah selesai.</dd>
                        </dl>
                    </div>

                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah Otakaraya membeli merek yang tidak tercantum di situs web?
                            </dt>
                            <dd class="qa__list__a">Ya, kami dapat membeli barang dari merek yang tidak tercantum di situs web. Jangan ragu untuk menghubungi kami, meskipun hanya satu item.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">

     Bisakah Otakaraya membeli barang yang sudah lama dibeli atau kondisinya buruk?</dt>
                            <dd class="qa__list__a">Ya, kami bisa. Kami memiliki rekam jejak pembelian barang yang sebelumnya ditolak oleh perusahaan lain karena alasan seperti 'lama', 'kotor', atau 'rusak akibat sinar matahari'. Jangan ragu untuk menghubungi kami.</dd>
                        </dl>
                    </div>

                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Berapa lama waktu yang dibutuhkan untuk penilaian di dalam toko?
                            </dt>
                            <dd class="qa__list__a">Untuk satu item, penilaian biasanya memakan waktu sekitar 5 hingga 15 menit, tergantung pada item dan kuantitasnya. Jika toko sedang sibuk, mungkin harus menunggu, jadi sebaiknya lakukan reservasi terlebih dahulu.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya melakukan reservasi untuk pembelian di toko?
                            </dt>
                            <dd class="qa__list__a">Ya, reservasi bisa dilakukan. Jangan ragu untuk menghubungi kami.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Berapa usia minimum untuk membeli?
                            </dt>
                            <dd class="qa__list__a">Siapa pun yang berusia 20 tahun ke atas dapat mengajukan penjualan barang. Pelanggan berusia 18 atau 19 tahun perlu memberikan formulir persetujuan atau surat kuasa. Kami tidak dapat memproses permintaan dari pelanggan di bawah 18 tahun.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah barang antik seperti perhiasan dan tas dibeli?                            </dt>
                            <dd class="qa__list__a">Kami mungkin menolak barang yang mengalami kerusakan yang sulit diperbaiki, misalnya tergores atau ternoda. Namun, beberapa item mungkin masih memenuhi syarat untuk pembelian bernilai tinggi, jadi silakan berkonsultasi dengan kami untuk detail lebih lanjut.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Haruskah saya membersihkan barang yang tergores atau ternoda sebelum membawanya?</dt>
                            <dd class="qa__list__a">Pembersihan dapat berdampak negatif terhadap hasil penilaian tergantung pada metode yang digunakan. Harap membawa barang apa adanya.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bagaimana cara menentukan hasil penilaian?
                            </dt>
                            <dd class="qa__list__a">Penilaian didasarkan pada faktor-faktor seperti nilai pasar barang, desain, ukuran, dan kondisi. Anda dapat merujuk pada daftar harga pembelian merek terkenal di bagian atas halaman untuk panduan.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Apakah nominal penilaian melalui telepon dapat berbeda dengan nominal pembelian?</dt>
                            <dd class="qa__list__a">Saat menilai melalui telepon, perkiraan didasarkan pada informasi yang Anda berikan. Penilaian akhir dapat bervariasi setelah item dinilai secara fisik. Untuk mendapatkan harga yang akurat, sebaiknya gunakan layanan "Pembelian diluar toko (Kunjungan Rumah)" atau "Pembelian di toko".</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya meminta penilaian tanpa memutuskan apakah akan menjualnya?
                            </dt>
                            <dd class="qa__list__a">Ya, kamu bisa. Kami menawarkan penilaian gratis, jadi jangan ragu untuk berkonsultasi dengan kami.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Bisakah saya mendapatkan penilaian untuk satu item saja?
                            </dt>
                            <dd class="qa__list__a">Ya, penilaian juga tersedia untuk satu item. Jika Anda membawa beberapa item, kami juga menawarkan penilaian massal yang nyaman.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">

     Mengapa barang bermerek dapat mempertahankan nilainya dan dijual dengan harga tinggi?</dt>
                            <dd class="qa__list__a">Sebab, pasokan tidak mampu memenuhi tingginya permintaan. Meskipun merek memiliki peredaran yang relatif besar dibandingkan barang merek lain, namun permintaan yang berlebihan seringkali membuat barang tersebut sulit diperoleh, sehingga tentu saja menaikkan harganya dan sangat mempengaruhi nilai penilaian.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Berapa harga barang bermerek yang bisa saya jual?
                            </dt>
                            <dd class="qa__list__a">Meskipun harga dapat berfluktuasi berdasarkan tren pasar terkini, barang bermerek umumnya memiliki nilai aset yang sangat tinggi, yang berarti kecil kemungkinannya untuk turun.</dd>
                        </dl>
                    </div>
                    <div class="qa__list js__more--item3">
                        <dl class="qa__list__inner">
                            <dt class="qa__list__q">Kapan waktu terbaik untuk menjual barang bermerek?
                            </dt>
                            <dd class="qa__list__a">Waktu terbaik untuk menjual barang bermerek bisa berbeda-beda. Ini bisa menjadi saat yang tepat untuk segera atau setelah menunggu nilainya meningkat seiring waktu. Tidak selalu jelas kapan momen penjualan yang ideal. Jika Anda berencana untuk menyimpan barang dalam jangka panjang sebelum dijual, penting untuk menjaganya dalam kondisi baik dan merawatnya secara berkala menggunakan metode penyimpanan yang tepat.</dd>
                        </dl>
                    </div>
                </div>
                <div class="btn__wrap btn__more js__more--btn3 gtm-more-qa"> <span>Lihat selengkapnya</span> </div>
            </section>
            <div class="titleMain titleMain--wrapper">
                <h2 class="titleMain--main"> <span>Pengenalan penilai</span> </h2>
            </div>
            <div class="content-inner">
                <section id="shop-leader02">
                    <div class="shop-leader_container bordersitecolor">
                        <div class="shop-leader_inner bordersitecolor">
                            <div class="shop-leader_profile relative">
                                <div class="shop-leader_head absolute">
                                    <h2 class="is-pc bgsitecolor bordersitecolor relative"><span class="noto thin" style="font-size: 26px; font-family: serif;">Juru taksir</span></h2>
                                    <h2 class="is-sp bgsitecolor bordersitecolor relative"><span class="noto thin" style="margin:-1rem 0 0 0; font-size: 26px; font-family: serif;">Juru taksir</span></h2>
                                </div>
                                <div class="shop-leader_head_shadow absolute">
                                    <div class="relative"></div>
                                </div>
                                <div class="imgbox absolute"><img src="../images/brand/25bd634c4c9a33639e17210a92b9927c.webp" alt=""></div>
                                <ul class="floatlist">
                                    <li class="shop-leader_name sitetextcolor" style="font-family: serif;"> <span class="noto ja" style="font-weight: bold;"> Shimodate</span><br>
                                        <span class="noto light en"></span>
                                    </li>
                                    <li class="shop-leader_info">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <th class="sitetextcolor"> <span class="noto">Hobi: </span> </th>
                                                    <td><span class="noto">Menonton pertandingan bisbol</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor"> <span class="noto">Ungkapan favorit: </span> </th>
                                                    <td><span class="noto">Upaya dengan satu tujuan</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor"> <span class="noto">Merk favorit: </span> </th>
                                                    <td><span class="noto">Hermes</span></td>
                                                </tr>
                                                <tr>
                                                    <th class="sitetextcolor"> <span class="noto">Contoh pembelian sebelumnya: </span> </th>
                                                    <td><span class="noto">Birkin Himalayan</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                            <p class="shop-leader_text"> <span class="noto">Otakaraya melakukan penilaian terhadap ribuan item merek setiap hari. Saat ini Otakaraya memiliki saluran penjualan internasional yang memungkinkan pembelian berdasarkan standar global. Karena melemahnya yen, Otakaraya kini dapat menawarkan harga yang lebih tinggi dengan menjual ke luar negeri dibandingkan sebelumnya. Kami yakin pelanggan kami akan puas, jadi silakan menggunakan layanan Otakaraya.<br>
                                    <br>
                                    Di Otakaraya, kami tidak hanya membeli barang-barang baru dan tidak terpakai tetapi juga barang-barang yang dibeli bertahun-tahun yang lalu, serta barang-barang yang rusak atau usang. Faktanya, banyak kejadian di mana barang yang dibeli lebih dari 10 tahun lalu dibeli kembali dengan harga lebih tinggi dari harga pembelian aslinya. Jika Anda memiliki barang tidak terpakai di rumah, silakan berkonsultasi dengan kami.</span> </p>
                            <div class="shop-detail_button clearfix"> </div>
                        </div>
                    </div>
                </section>
            </div>

            <?php get_template_part('template-parts/assessment_cta'); ?>


        </article>
        <!-- end content left -->

        <?php get_template_part('template-parts/side-menu'); ?>

    </main>


    <?php get_footer('common'); ?>

    <script src="../js/common.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/shared.js"></script>
    <script src="../js/breadlist.js"></script>
    <script type="text/javascript" src="../js/index_1.js" id="swv-js"></script>
    <script>
        $(window).on('load', function() {
            const moreNum2 = 2; // 1回あたり16個表示
            $('.js__more--item2:nth-child(n + ' + (moreNum2 + 1) + ')').addClass('is-hidden').hide();
            $('.js__more--btn2').on('click', function() {
                const hiddenItems = $(this).prev('.js__more--2th').children('.js__more--item2.is-hidden');
                hiddenItems.slice(0, moreNum2).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
                if (hiddenItems.length <= moreNum2) $(this).fadeOut(); // すべて表示されたら非表示
            });
        });
        $(window).on('load', function() {
            const moreNum5 = 5; // 1回あたり16個表示
            $('.js__more--item3:nth-child(n + ' + (moreNum5 + 1) + ')').addClass('is-hidden').hide();
            $('.js__more--btn3').on('click', function() {
                const hiddenItems = $(this).prev('.js__more--3th').children('.js__more--item3.is-hidden');
                hiddenItems.slice(0, moreNum5).removeClass('is-hidden').fadeIn(600); // フェードインしながら展開
                if (hiddenItems.length <= moreNum5) $(this).fadeOut(); // すべて表示されたら非表示
            });
        });

        $(function() {

            $(".enhanced_additional_contents_superbox").eq(0).show();

            $(".enhanced_additional_tabitem").click(
                function() {
                    if ($(this).hasClass("wd_active") == false) {
                        var tab_max = $(".enhanced_additional_tabitem").length;
                        var tab_i = $(".enhanced_additional_tabitem").index(this);
                        for (var temp_i = 0; temp_i < tab_max; temp_i++) {
                            if (temp_i == tab_i) {
                                $(".enhanced_additional_tabitem").eq(temp_i).addClass("wd_active");
                                $(".enhanced_additional_contents_superbox").eq(temp_i).fadeIn(200);
                            } else {
                                $(".enhanced_additional_tabitem").eq(temp_i).removeClass("wd_active");
                                $(".enhanced_additional_contents_superbox").eq(temp_i).hide();
                            }
                        }
                    }
                }
            );
        })
    </script>
    <script>
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
    </script>
    <script>
        /*メインビジュアルユニット1*/
        $("#slide01").slick({
            asNavFor: "#thumbs01",
            prevArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_prev_white01.png" class="slide-arrow prev-arrow">',
            nextArrow: '<img src="/app/wp-content/themes/otakaraya/assets/img/common/slide_next_white01.png" class="slide-arrow next-arrow">',
            autoplay: true,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 768, // 399px以下のサイズに適用
                settings: {
                    arrows: false,
                },
            }, ],
        })
        $("#thumbs01").slick({
            //ここにオプション
            asNavFor: "#slide01",
            slidesToShow: 4,
        });
        $("#thumbs01 .slick-slide").on("click", function() {
            let index = $(this).attr("data-slick-index")
            $("#slide01").slick("slickGoTo", index)
        })
        /* parts-flex */

        /* スライダー(PC,SP両方) */
        let sliders = ["flex-slider1", "flex-slider2", "flex-slider3", "flex-slider4", "flex-slider5"];
        sliders.forEach((slider) => {
            let elem = document.getElementById(slider);
            var slideCount = $(elem).children('.content__item').length;
            let slidesToShow = Math.min(slideCount, 4);
            if (slideCount < 5) {
                if (elem) {
                    $(elem).slick({
                        arrows: true, // 矢印あり
                        dots: true, // ドットあり
                        appendArrows: $("." + slider + '--arrow'),
                        appendDots: $("." + slider + '--dot'),
                        // speed: 1000,
                        //autoplay: true,
                        //autoplaySpeed: 5000,
                        centerMode: false,
                        responsive: [{
                            breakpoint: 9999,
                            settings: {
                                slidesToShow: slidesToShow,
                                slidesToScroll: slidesToShow,
                                variableWidth: true,
                            }
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            }
                        }]
                    });
                }
            } else {
                if (elem) {
                    $(elem).slick({
                        arrows: true, // 矢印あり
                        dots: true, // ドットあり
                        appendArrows: $("." + slider + '--arrow'),
                        appendDots: $("." + slider + '--dot'),
                        autoplay: true,
                        autoplaySpeed: 5000,
                        centerMode: false,
                        responsive: [{
                            breakpoint: 9999,
                            settings: {
                                slidesToShow: 4,
                                slidesToScroll: 4,
                                variableWidth: true,
                            }
                        }, {
                            breakpoint: 768,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            }
                        }]
                    });
                }
            }
        });

        /* スライダー(SPのみ) */
        function checkBreakPoint() {
            let slidersScOnly = ["numbox-slider-sp1", "flex-slider-sp1", "flex-slider-sp2"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 767) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: true, // 矢印あり
                                dots: true, // ドットあり
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint();
        });

        checkBreakPoint();

        function checkBreakPoint2() {
            let slidersScOnly = ["columnbox01"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 767) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: true, // 矢印あり
                                dots: true, // ドットあり
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                // speed: 1000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint2();
        });

        checkBreakPoint2();

        // ドキュメントが準備完了時に以下のコードを実行
        $(function() {
            // HTML内のクラスが'dateString'である要素の内容を取得し、変数gold_Containerに格納
            var gold_Container = $('.gold_Container').html();

            // クラスが'gold_Container2'である要素に変数gold_Containerの内容を挿入
            $('.gold_Container2').html(gold_Container);
        });

        function checkBreakPoint2() {
            let slidersScOnly = ["columnbox_slid"];
            let windowW = document.body.clientWidth;

            slidersScOnly.forEach((slider) => {
                let elem = document.getElementById(slider);
                if (elem) {
                    if (windowW <= 1024) {
                        if (!elem.classList.contains("slick-initialized")) {
                            $(elem).not('.slick-initialized').slick({
                                arrows: false,
                                dots: true,
                                appendArrows: $("." + slider + '--arrow'),
                                appendDots: $("." + slider + '--dot'),
                                autoplay: true,
                                autoplaySpeed: 5000,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                centerMode: true,
                                variableWidth: true,
                            })
                        }
                    } else {
                        if (elem.classList.contains("slick-initialized")) {
                            $(elem).slick('unslick');
                        }
                    }
                }
            });
        }

        jQuery(window).on('resize load', function() {
            checkBreakPoint2();
        });

        checkBreakPoint2();
    </script>
    <script>
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
                    // タブの選択状態を更新
                    $("#brand_tabs .list_katakana_brand_tabbox").removeClass("wd_active");
                    brandItems.forEach(item => item.style.display = 'none');
                    noResults.forEach(el => el.style.display = 'none');
                    activeTitle.textContent = '検索結果：';
                    return;
                }

                searchQuery = hiraganaToKatakana(searchQuery); // ひらがなをカタカナに変換

                // 検索結果に基づいてフィルタリング
                let hasResults = false;
                brandItems.forEach(item => {
                    const brandName = item.querySelector('.list_katakana_brand_en').textContent.toLowerCase(); // 英語名を小文字に変換
                    const brandKana = hiraganaToKatakana(item.querySelector('.list_katakana_brand_kana').textContent); // カタカナ名をひらがな変換後と比較

                    if (brandName.includes(searchQuery) || brandKana.includes(searchQuery)) {
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
    </script>
    <script>
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
    </script>
</body>

</html>