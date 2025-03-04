<style>
    .splide__list {
        height: auto;
        font-size: clamp(0.58em, 1vw, 2em);
    }

    /* ページネーションのスタイル */
    .splide__pagination {
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        width: 100%;
    }

    /* ページネーションの点（ドット）のスタイル */
    .splide__pagination__page {
        width: 10px;
        height: 10px;
        margin: 0 5px;
        background-color: #333;
        border-radius: 50%;
        cursor: pointer;
    }

    .splide__pagination__page.is-active {
        background: black;
    }

    /* 矢印ナビゲーションのスタイル */
    .splide__arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-70%);
        z-index: 1;
    }


    .splide__arrow svg {
        display: none;
    }

    .splide__arrow--next {
        background-image: url(https://otakaraya.hk/assets/img/icon/arrow_next.png);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .splide__arrow--prev {
        background-image: url(https://otakaraya.hk/assets/img/icon/arrow_prev.png);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .splide1 .splide__slide {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
    }

    .splide__slide img {
        vertical-align: bottom;
        width: 100%;
        height: auto;
        aspect-ratio: 1 / 1;
        object-fit: cover;
    }



    /* PC版 */
    @media (min-width: 768px) {
        .splide {
            margin: 0 8% 8%;
        }

        .splide__arrow--prev {
            left: -1em;
        }

        .splide__arrow--next {
            right: -1em;
        }
    }

    /* SP版 */
    @media (max-width: 767px) {
        .splide {
            margin: 0 0 16%;
        }
    }
</style>


<header id="header" class="menu_font_size">
    <div class="header_wrap">

        <div class="header_l">
            <div class="menu-btn_wrap">
                <div class="menu-btn_area">
                    <input type="checkbox" class="menu-btn" id="menu-btn">
                    <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
                    <div class="menu_text">MENU</div>
                    <ul class="menu">
                        <li class="top"><a href="#buy">買</a></li>
                        <li><a href="#sell">賣</a></li>
                        <li><a href="#consignment_sales">委託寄售</a></li>
                        <li><a href="#shop_info">店鋪資訊</a></li>
                        <!-- <li><a href="#q_a">Q&A</a></li> -->
                        <!-- <li><a href="#shop_info">APPLICATION AND INQUIRIES</a></li> -->
                    </ul>
                    <div class="menu_cover"></div>
                </div>
            </div>
            <img src="https://otakaraya.hk/assets/img/header_hongkong_logo.png" alt="">
        </div>

        <div class="header_r is-pc color_e60012">
            <a href="#buy">
                <div class="header_text">買</div>
            </a>
            <a href="#sell">
                <div class="header_text">賣</div>
            </a>
            <a href="#consignment_sales">
                <div class=" header_text">寄賣</div>
            </a>
        </div>
    </div>
</header>