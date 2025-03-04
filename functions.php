 <?php
   function my_theme_enqueue_styles()
   {
      wp_enqueue_style('main-styles', get_stylesheet_uri(), array(), filemtime(get_stylesheet_directory() . '/style.css'));
   }
   add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


   // functions.php またはプラグインファイルに追加

   // 管理バーをログインユーザーにのみ表示
   add_filter('show_admin_bar', function () {
      return is_user_logged_in();
   });





   // 管理画面にタクソノミーを追加
   function my_custom_column($columns)
   {
      $columns['faq_category'] = 'カテゴリ';
      return $columns;
   }
   add_filter('manage_faq_posts_columns', 'my_custom_column');

   function my_custom_column_id($column_name, $id)
   {
      $terms = get_the_terms($id, $column_name);
      if ($terms && !is_wp_error($terms)) {
         $menu_terms = array(); //変数名は任意
         foreach ($terms as $term) {
            $menu_terms[] = $term->name;
         }
         echo join(", ", $menu_terms);
      }
   }
   add_action('manage_faq_posts_custom_column', 'my_custom_column_id', 10, 2);

   //カテゴリーで絞り込みの追加
   function my_add_filter()
   {
      global $post_type;
      if ('faq' == $post_type) {
   ?>
       <select name="faq_category">
          <option value="">すべてのカテゴリー</option>
          <?php
            $terms = get_terms('faq_category');
            foreach ($terms as $term) {
            ?>
             <option value="<?php echo $term->slug; ?>" <?php if (isset($_GET['faq_category']) && $_GET['faq_category'] == $term->slug) {
                                                            print 'selected';
                                                         } ?>><?php echo $term->name; ?>
                　　　　　</option>
          <?php
            }
            ?>
       </select>
 <?php
      }
   }
   add_action('restrict_manage_posts', 'my_add_filter');



   // 香港ドルを自動で出力
   function generate_json_file()
   {
      // APIキーを設定
      // $api_key = 'da18414f3b3112bedab8162eec1333d99';  // ここに取得したAPIキーを入力してください

      // APIエンドポイントのURLを設定
      $base_currency = 'HKD';  // 香港ドルを指定
      $symbols = 'XAU,XAG,XPT,XPD';  // 金、銀、プラチナ、パラジウムを指定
      $endpoint = "https://api.metalpriceapi.com/v1/latest?api_key=$api_key&base=$base_currency&currencies=$symbols";

      // cURLセッションを初期化
      $ch = curl_init();

      // オプションを設定
      curl_setopt($ch, CURLOPT_URL, $endpoint);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      // APIリクエストを実行
      $response = curl_exec($ch);

      // レスポンスをデコード
      $data = json_decode($response, true);


      // エラーチェック
      if (curl_errno($ch)) {
      } else {
         // 為替レートを取得します
         $current_time =     current_time('mysql'); // 'mysql' フォーマットで現在の時刻を取得

         // 金価格
         // if (isset($data['rates']['HKDXAU'])) {
         //    $gold_price_per_oz_hkd = $data['rates']['HKDXAU'];
         //    $grams_per_troy_ounce = 31.1035;
         //    $gold_price_per_gram_hkd = $gold_price_per_oz_hkd / $grams_per_troy_ounce;
         // }

         // 銀価格
         // if (isset($data['rates']['HKDXAG'])) {
         //    $silver_price_per_oz_hkd = $data['rates']['HKDXAG'];
         //    $silver_price_per_gram_hkd = $silver_price_per_oz_hkd / $grams_per_troy_ounce;
         // }

         // プラチナ
         // if (isset($data['rates']['HKDXPT'])) {
         //    $platinum_price_per_oz_hkd = $data['rates']['HKDXPT'];
         //    $platinum_price_per_gram_hkd = $platinum_price_per_oz_hkd / $grams_per_troy_ounce;
         // }

         // パラジウム
         // if (isset($data['rates']['HKDXPD'])) {
         //    $palladium_price_per_oz_hkd = $data['rates']['HKDXPD'];
         //    $palladium_price_per_gram_hkd = $palladium_price_per_oz_hkd / $grams_per_troy_ounce;
         // }

         $gold_price_per_gram_hkd = 0;
         $silver_price_per_gram_hkd = 0;
         $platinum_price_per_gram_hkd = 0;
         $palladium_price_per_gram_hkd = 0;


         // 数字と現在時刻を含むデータ
         $data = array(
            'export_time' => $current_time,
            'gold' => $gold_price_per_gram_hkd,
            'silver' => $silver_price_per_gram_hkd,
            'platinum' => $platinum_price_per_gram_hkd,
            'palladium' => $palladium_price_per_gram_hkd
         );

         // JSONデータにエンコード
         $json_data = json_encode($data);

         // 保存するディレクトリとファイル名
         $upload_dir = wp_upload_dir();
         $file_path = $upload_dir['basedir'] . '/_gold_price.json';


         // 昨日の既存ファイルのバックアップ
         if (file_exists($file_path)) {
            $export_time = read_old_gold_price("export_time");
            $backup_path = $upload_dir['basedir'] . '/_gold_price_' . $export_time . '.json';
            rename($file_path, $backup_path);
         }


         $file_path = $upload_dir['basedir'] . '/gold_price.json';

         // 昨日のファイルをリネーム
         if (file_exists($file_path)) {
            $backup_path = $upload_dir['basedir'] . '/_gold_price.json';
            rename($file_path, $backup_path);
         }

         // JSONデータをファイルに書き込む
         file_put_contents($file_path, $json_data);
      }

      // cURLセッションをクローズ
      curl_close($ch);
   }
   // Cronイベントにフックする
   add_action('gold_price_output', 'generate_json_file');

   // Cronイベントのスケジュール設定（既に設定されていない場合）
   if (!wp_next_scheduled('gold_price_output')) {
      wp_schedule_event(time(), 'daily', 'gold_price_output');
   }









   // JSONファイルを読み込み、香港ドルの値を返す
   function read_gold_price($gold)
   {
      // JSONファイルのパスを指定します
      $upload_dir = wp_upload_dir();
      $json_file_path = $upload_dir['basedir'] . '/gold_price.json';

      // JSONファイルが存在するか確認します
      if (file_exists($json_file_path)) {

         // JSONファイルの内容を読み込む
         $json_data = file_get_contents($json_file_path);

         // JSONデータをデコードしてPHPの配列に変換する
         $data = json_decode($json_data, true);


         $price = $data[$gold];
         return $price;
      } else {
         return null; // ファイルが存在しない場合
      }
   }


   function read_old_gold_price($gold)
   {
      // JSONファイルのパスを指定します
      $upload_dir = wp_upload_dir();
      $json_file_path = $upload_dir['basedir'] . '/_gold_price.json';

      // JSONファイルが存在するか確認します
      if (file_exists($json_file_path)) {

         // JSONファイルの内容を読み込む
         $json_data = file_get_contents($json_file_path);

         // JSONデータをデコードしてPHPの配列に変換する
         $data = json_decode($json_data, true);


         $price = $data[$gold];
         return $price;
      } else {
         return null; // ファイルが存在しない場合
      }
   }

   add_action('rest_api_init', function () {
      register_rest_route('myplugin/v1', '/json', array(
         'methods' => 'GET',
         'callback' => 'myplugin_get_json',
      ));
   });

   function myplugin_get_json()
   {
      // JSONデータを作成
      $data = array(
         'name' => 'John Doe',
         'email' => 'john.doe@example.com',
         'age' => 30
      );

      // JSON形式でデータを返す
      return new WP_REST_Response($data, 200);
   }

   function custom_mime_types($mimes)
   {
      $mimes['webp'] = 'image/webp';
      return $mimes;
   }
   add_filter('upload_mimes', 'custom_mime_types');

   add_theme_support('title-tag');


   ?>