    
    <style>
        
#assessment_cta {
    margin: 2rem auto;
    position: relative;
    width: 100%;
    max-width: 1000px !important;
}

#assessment_cta .image-full {
    width: 100%;
}

#assessment_cta img {
    display: block;
    width: 100%;
    height: auto;
    margin: 0;
    padding: 0;
}

#assessment_cta .overlay-container {
    position: relative;
    width: 100%;
    background-color: #e70113;
}

#assessment_cta .overlay-images,
#assessment_cta .overlay-image {
    width: 100%;
    display: flex;
    justify-content: space-between;
}

#assessment_cta .overlay-image a {
    width: 100%;
    display: block;
}

#assessment_cta .overlay-images a {
    width: 50%;
    display: block;
}

#assessment_cta a img {
    width: 100%;
    height: auto;
    transition: opacity 0.3s ease;
    /* ホバー時のアニメーションを追加 */
}

/* ホバー時に半透明にする */
#assessment_cta .overlay-images a:hover img {
    opacity: 0.6;
}
@media (max-width: 767px) {
    #assessment_cta img.assessment_text {
        width: 60% !important;
        margin: auto;
        margin-bottom: 2%;
    }
}

        </style>
    <section>
        <section id="assessment_cta" class="is-pc">
            <div class="image-full">
                <?php
                // 現在のURLを取得
                $request_uri = $_SERVER['REQUEST_URI'];
                switch (true) {
                    case strpos($request_uri, '/gold/') !== false:
                        $img_url = "/images/gold/EN_2024_CTA_gold_1024_PC.webp";
                        $img_url_sp = "/images/gold/EN_2024_CTA_gold_1024_SP.webp";
                        break;
                    case strpos($request_uri, '/brand/') !== false:
                        $img_url = "/images/common/EN_2024_CTA_brand_1024_PC.webp";
                        $img_url_sp = "/images/common/EN_2024_CTA_brand_1024_SP.webp";
                        break;
                    case strpos($request_uri, '/watch/') !== false:
                        $img_url = "/images/common/EN_CTA_watch_PC.webp";
                        $img_url_sp = "/images/common/EN_CTA_watch_SP.webp";
                        break;
                    case strpos($request_uri, '/jewelry/') !== false:
                        $img_url = "/images/common/EN_2024_CTA_jewelry_1024_PC.webp";
                        $img_url_sp = "/images/common/EN_2024_CTA_jewelry_1024_SP.webp";
                        break;
                    default:
                        $img_url = "/images/common/EN_2024_CTA_app_1024_PC.webp";
                        $img_url_sp = "/images/common/EN_2024_CTA_app_1024_SP.webp";
                        break;
                }
                ?>
                <img src="<?php echo $img_url; ?>" alt="">
            </div>
            <div class="overlay-container">
                <div class="overlay-images">
                    <a href="https://wa.me/85290716119">
                        <img src="/images/common/mail_satei_en.webp" alt="メール査定のお申し込みはこちら" style="width: 90%; margin-left: 2em;">
                    </a>
                    <a href="tel:9071 6119">
                        <img src="/images/common/EN_online_satei_sp.webp" alt="オンライン査定のお申し込みはこちら">
                    </a>
                </div>
            </div>
            <img src="../images/common/tel_cta_PC_en.webp" alt="いつでも！どこでも！気軽にご相談ください">
        </section>

        <section id="assessment_cta" class="is-sp">
            <div class="image-full">
                <img src="<?php echo $img_url_sp; ?>" alt="">
            </div>
            <div class="overlay-container">
                <div class="overlay-image">
                    <a href="tel:9071 6119">
                        <img src="../images/common/EN_online_satei_sp.webp" alt="WEB写真査定のお申し込みはこちら">
                    </a>
                </div>
                <img class="assessment_img1" src="../images/common/EN_assessment_img1_sp.webp" alt="いつでも！どこでも！気軽にご相談ください">
            </div>
            <div class="overlay_container_wrap">
                <div class="overlay-container">
                    <img class="assessment_text" src="../images/common/EN_assessment_img4_sp.webp" alt="いつでも！どこでも！気軽にご相談ください">
                    <div class="overlay-image">
                        <a href="https://wa.me/85290716119">
                            <img src="../images/common/mail_satei_en.webp" alt="WEB写真査定のお申し込みはこちら">
                        </a>
                    </div>
                </div>
                <img src="../images/common/EN_assessment_img4_sp.webp">
            </div>
        </section>
    </section>