<!DOCTYPE html>
<html lang="ja">
<?php get_template_part('head'); ?>

<style>
    /* 高価買取時計 */

    /* 高価買取時計 */
</style>

<body class="categories_body">
    <?php get_header(); ?>
    <main>

        <!-- FV -->
        <div class="categories_mv_area">
            <picture>
                <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/tokei_pc.webp">
                <img style="width: 100%;" src="<?php echo get_template_directory_uri(); ?>/assets/img/mv/ct/tokei_sp.webp" alt="高價收購黃金">
            </picture>
        </div>
        <!-- FV -->


        <?php

        // 現在のページが投稿であるかどうかを確認
        if (is_single()) {
            echo '<h2>Single Post Page</h2>';
            echo '<p>Post Title: ' . get_the_title() . '</p>';
            echo '<p>Post Content: ' . get_the_content() . '</p>';
            echo '<p>Post ID: ' . get_the_ID() . '</p>';
            echo '<p>Post Type: ' . get_post_type() . '</p>';
            echo '<p>Post Slug: ' . get_post_field('post_name') . '</p>';
        }

        // 現在のページが固定ページであるかどうかを確認
        elseif (is_page()) {
            echo '<h2>Page</h2>';
            echo '<p>Page Title: ' . get_the_title() . '</p>';
            echo '<p>Page Content: ' . get_the_content() . '</p>';
            echo '<p>Page ID: ' . get_the_ID() . '</p>';
            echo '<p>Page Slug: ' . get_post_field('post_name') . '</p>';
        }

        // 現在のページがカスタム投稿タイプの投稿であるかどうかを確認
        elseif (is_singular('your_custom_post_type')) {
            echo '<h2>Custom Post Type Page</h2>';
            echo '<p>Post Title: ' . get_the_title() . '</p>';
            echo '<p>Post Content: ' . get_the_content() . '</p>';
            echo '<p>Post ID: ' . get_the_ID() . '</p>';
            echo '<p>Post Type: ' . get_post_type() . '</p>';
            echo '<p>Post Slug: ' . get_post_field('post_name') . '</p>';
        }

        // 現在のページがアーカイブページであるかどうかを確認
        elseif (is_archive()) {
            echo '<h2>Archive Page</h2>';
            if (is_category()) {
                echo '<p>Category Name: ' . single_cat_title('', false) . '</p>';
            } elseif (is_tag()) {
                echo '<p>Tag Name: ' . single_tag_title('', false) . '</p>';
            } elseif (is_author()) {
                echo '<p>Author: ' . get_the_author() . '</p>';
            } elseif (is_post_type_archive()) {
                echo '<p>Post Type Archive Name: ' . post_type_archive_title('', false) . '</p>';
            }
        }

        // 現在のページが検索結果ページであるかどうかを確認
        elseif (is_search()) {
            echo '<h2>Search Results Page</h2>';
            echo '<p>Search Query: ' . get_search_query() . '</p>';
        }

        // 現在のページが404エラーページであるかどうかを確認
        elseif (is_404()) {
            echo '<h2>404 Error Page</h2>';
            echo '<p>404 Error Message: Page not found.</p>';
        }

        // 現在のページがフロントページまたはホームページであるかどうかを確認
        elseif (is_front_page()) {
            echo '<h2>Front Page</h2>';
        } elseif (is_home()) {
            echo '<h2>Blog Home Page</h2>';
        }

        // 現在のページが検索結果ページであるかどうかを確認
        elseif (is_search()) {
            echo '<h2>Search Results</h2>';
            echo '<p>Search Query: ' . get_search_query() . '</p>';
        }

        // 現在のページのURLを表示
        echo '<h2>Current Page URL</h2>';
        echo '<p>' . esc_url(home_url(add_query_arg(array(), $_SERVER['REQUEST_URI']))) . '</p>';


        if (is_singular('gmt-master-ii-ss-126710blro')) {
            // 特定のカスタム投稿タイプのページの場合の処理
            echo 'This is a custom post type page.';
        }
        if (is_home()) {
            // フロントページまたはブログのホームページの場合の処理
            echo 'This is the home page.';
        } elseif (is_single()) {
            // 単一の投稿ページの場合の処理
            echo 'This is a single post.';
        } elseif (is_page()) {
            // 固定ページの場合の処理
            echo 'This is a page.';
        } elseif (is_category()) {
            // カテゴリーページの場合の処理
            echo 'This is a category page.';
        } elseif (is_tag()) {
            // タグページの場合の処理
            echo 'This is a tag page.';
        } elseif (is_archive()) {
            // アーカイブページの場合の処理
            echo 'This is an archive page.';
        } elseif (is_search()) {
            // 検索結果ページの場合の処理
            echo 'This is a search results page.';
        } elseif (is_404()) {
            // 404エラーページの場合の処理
            echo 'This is a 404 error page';
        } else {
            // その他のページの場合の処理
            echo 'This is another type of page.';
        }


        ?>


        <!-- 見出し -->
        <section class="header_text_section">
            <div class="header_text_area">
                <h1>OTAKARAYA<br class="is-sp"><span>的受歡迎鐘錶</span></h1>
                <div>
                    如果您想出售勞力士(Rolex)、歐米茄(OMEGA)、愛彼(Audemars Piguet)等名牌鐘錶的話，<br>
                    歡迎到全國店舖數量1000以上的OTAKARAYA！我們不定期有各種高價收購活動！<br>
                    除了手錶之外、懷錶、古董錶、什至是壞了的手錶也會收購。與其煩惱這些物品能不能出售之前，<br>
                    請先找我們免費查詢及估價。
                </div>
            </div>
        </section>
        <!-- 見出し -->

        <!-- 高価買取時計 -->

        <section class="high_priced_watches_section">

            <?php

            // 現在のタームオブジェクトを取得
            $term = get_queried_object();

            // タームのスラッグを取得
            $term_slug = $term->slug;

            // スラッグを表示
            echo '<h1>タクソノミーのスラッグ: ' . esc_html($term_slug) . '</h1>';





            $terms = get_terms(array(
                'taxonomy' => 'watch-category',
                'hide_empty' => false,
                // 空のタームも含める
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<ul>';
                foreach ($terms as $term) {
                    // タームのリンクを取得
                    $term_link = get_term_link($term);

                    // リンクの出力
                    echo '<li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li>';
                }
                echo '</ul>';
            } else {
                echo 'No genres found.';
            }

            ?>



            <?php
            // 親タームのスラッグを指定
            $parent_term_slug = $term_slug; // 親タームのスラッグ
            $taxonomy = 'watch-category'; // カスタムタクソノミーの名前

            // 親タームの情報を取得
            $parent_term = get_term_by('slug', $parent_term_slug, $taxonomy);

            // 親タームが存在する場合
            if ($parent_term) {
                // 親タームのIDを取得
                $parent_term_id = $parent_term->term_id;

                // 親タームに属する子タームを取得
                $child_terms = get_terms(array(
                    'taxonomy' => $taxonomy,
                    'child_of' => $parent_term_id,
                    'hide_empty' => false,
                ));

                // 子ターム名を格納するための配列
                $child_term_slugs = array();

                // 子タームが存在する場合
                if (!empty($child_terms) && !is_wp_error($child_terms)) {
                    foreach ($child_terms as $child_term) {
                        // 子タームのスラッグを配列に追加
                        $child_term_slugs[] = $child_term->slug;
                    }
                } else {
                    echo '<p>この親タームに属する子タームはありません。</p>';
                }
            } else {
                echo '<p>指定された親タームが見つかりません。</p>';
            }

            // カスタムタクソノミーのすべてのタームを取得
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'hide_empty' => true,
            )); ?>

            <div class="tab_area">
                <?php
                $tab_count = 1;

                foreach ($child_term_slugs as $term_slug) : ?>

                    <div class="tab<?php echo $tab_count; ?>">
                        <?php echo $term_slug; ?>
                    </div>
                <?php

                    $tab_count++;

                endforeach;
                ?>
            </div>


            <?php

            $tab_count = 1;

            // 子タームが存在する場合
            if (!empty($child_term_slugs)) :
                foreach ($child_term_slugs as $term_slug) :
                    // スラッグごとに投稿を取得
                    $args = array(
                        'post_type' => 'watch',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => $taxonomy,
                                'field'    => 'slug',
                                'terms'    => $term_slug,
                            ),
                        ),
                    );

                    $custom_query = new WP_Query($args);

                    // 現在のタームの情報を取得
                    $current_term = get_term_by('slug', $term_slug, $taxonomy);

            ?>

                    <div class="model_List<?php echo $tab_count; ?>">
                        <h1><?php echo esc_html($current_term->name); ?></h1>
                        <?php
                        if ($custom_query->have_posts()) :
                            while ($custom_query->have_posts()) : $custom_query->the_post();
                        ?>
                                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像を表示
                                        the_post_thumbnail('medium');
                                    }
                                    ?>
                                    <div class="entry-div">
                                        <a href="<?php the_permalink(); ?>">続きを読む</a>
                                    </div>
                                </article>
                        <?php
                            endwhile;
                        else :
                            echo '<p>このカテゴリーには投稿がありません。</p>';
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
            <?php

                    $tab_count++;
                endforeach;
            else :
                echo '<p>タームが見つかりません。</p>';
            endif;
            ?>

        </section>
        <!-- 高価買取時計 -->



    </main>

    <?php
    get_footer(); ?>

</body>





</html>