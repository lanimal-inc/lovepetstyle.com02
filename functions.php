<?php
/*--------------------------------------------------
  アイキャッチ画像
--------------------------------------------------*/

add_filter( 'image_send_to_editor', 'remove_image_attribute', 10 );
add_filter( 'post_thumbnail_html', 'remove_image_attribute', 10 );
function remove_image_attribute( $html ){
$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
$html = preg_replace( '/class=[\'"]([^\'"]+)[\'"]/i', '', $html );
return $html;
}


/*--------------------------------------------------
  エディタ内のタグ設定でH１、H５以降削除
--------------------------------------------------*/

function custom_tiny_mce_formats( $settings ) {
  $screen = get_current_screen();

  // 現在の投稿タイプごとに設定を分岐
  if ( isset( $screen->post_type ) ) {
      switch ( $screen->post_type ) {
          case 'interview':
              $settings['block_formats'] = '見出し=h2;本文=p';
              break;
          case 'interview-shop':
              $settings['block_formats'] = '見出し=h3;本文=p';
              break;
          case 'special':
          case 'campaign':
              $settings['block_formats'] = '本文=p';
              break;
      }
  }

  // 何も選択していない場合、自動的に <p> タグを適用
  $settings['forced_root_block'] = 'p';

  return $settings;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_formats' );





function format_h2_with_spans($content) {
  return preg_replace_callback(
      '/<h2>(.*?)<\/h2>/s', // <h2> ～ </h2> をキャプチャ
      function ($matches) {
          $text = $matches[1];

          // すでに <span> が含まれている場合はスキップ
          if (preg_match('/<span>/', $text)) {
              return $matches[0]; // 元の <h2> をそのまま返す
          }

          // 改行タグ (<br>, <br />) を検出し、適切に変換
          $formatted_text = preg_replace(
              '/<br\s*\/?>/i', // <br> または <br /> を検出
              '</span><br><span>', // 必要な形式に置換
              trim($text)
          );

          // 最初と最後に <span> を追加
          return '<h2><span>' . $formatted_text . '</span></h2>';
      },
      $content
  );
}



function custom_tinymce_for_news($settings) {
  // 現在の管理画面がニュース投稿タイプかどうかを確認
  global $post;
  if (isset($post) && $post->post_type === 'news') {
      // 段落や見出しの設定を追加
      $settings['block_formats'] = '見出し=h2;中見出し=h3;本文=p';
      
      // ツールバーにフォントサイズメニューを追加
      $settings['toolbar1'] = 'formatselect,fontsizeselect,|,bold,underline,|,bullist,|,link,unlink';

      // フォントサイズのオプションを指定
      $settings['fontsize_formats'] = '8pt 10pt 12pt 14pt 18pt 24pt 36pt';
  }

  return $settings;
}
add_filter('tiny_mce_before_init', 'custom_tinymce_for_news');


/*--------------------------------------------------
  特定の固定ページでエディタを無効化
--------------------------------------------------*/
function hide_editor_with_css_for_specific_pages() {
  $target_ids = [8, 102 , 22 , 18 , 20 , 26 ,13, 24 , 2]; 

  $screen = get_current_screen();
  $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : null);
  
  if ($screen->post_type === 'page' && in_array((int)$post_id, $target_ids, true)) {
      echo '<style>#postdivrich { display:none !important; }</style>'; // 本文エディタをCSSで隠すだけ
  }
}
add_action('admin_head', 'hide_editor_with_css_for_specific_pages');



function custom_tinymce_valid_elements($init) {
  // brタグに class 属性を許可
  $init['extended_valid_elements'] = 'br[class]';
  return $init;
}
add_filter('tiny_mce_before_init', 'custom_tinymce_valid_elements');

/*--------------------------------------------------
  特定のカスタムページでエディタを無効化
--------------------------------------------------*/

function disable_editor_for_custom_post_types() {
    $screen = get_current_screen();

    // 投稿タイプが 'sitter' または 'record' の場合にエディタを無効化
    if (in_array($screen->post_type, ['sitter'])) {
        remove_post_type_support($screen->post_type, 'editor');
    }
}
add_action('admin_head', 'disable_editor_for_custom_post_types');

/*--------------------------------------------------
  初期の投稿を無効化
--------------------------------------------------*/

function remove_default_post_type_menu() {
    remove_menu_page('edit.php'); // 投稿メニューを非表示
}
add_action('admin_menu', 'remove_default_post_type_menu');

/*--------------------------------------------------
  ビジュアルエディタのフォント変更
--------------------------------------------------*/
function my_theme_add_editor_styles() {
  add_theme_support('editor-styles');
  add_editor_style('assets/css/editor-style.css'); // スタイルファイルを指定
}
add_action('after_setup_theme', 'my_theme_add_editor_styles');





/*--------------------------------------------------
  WP管理画面のメニューを非表示
--------------------------------------------------*/
// コメントメニューを非表示にする
function remove_comments_menu() {
  remove_menu_page('edit-comments.php'); // コメント
}
add_action('admin_menu', 'remove_comments_menu', 999);

// コメントのサブメニューも非表示にする
function remove_comments_submenus() {
  remove_submenu_page('edit-comments.php', 'edit-comments.php'); // コメント一覧
}
add_action('admin_menu', 'remove_comments_submenus', 999);



/*--------------------------------------------------
  トップページのみにスクリプトを読み込む
--------------------------------------------------*/
function enqueue_front_page_script() {
  if (is_front_page()) {
      wp_enqueue_script(
          'front-page-script', // スクリプトのハンドル名
          get_template_directory_uri() . '/assets/js/top.js', // スクリプトのパス
          array('jquery'), // 依存スクリプト
          null, // バージョン（必要なら指定）
          true // フッターで読み込む
      );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_front_page_script');


/*--------------------------------------------------
  canonical設定
--------------------------------------------------*/
function custom_aioseo_description_for_interview_and_news($description) {
  global $post;

  // 対象の投稿タイプを指定
  if (is_singular(['interview', 'news']) && isset($post->post_content)) {
      // 本文から最初の120文字を取得
      $content = strip_tags(strip_shortcodes($post->post_content)); // HTMLとショートコードを除去
      $content = preg_replace('/\s+/', ' ', $content); // 改行をスペースに置換
      $description = mb_strimwidth($content, 0, 120, '...', 'UTF-8'); // 120文字にトリミング
  }

  return $description;
}
add_filter('aioseop_description', 'custom_aioseo_description_for_interview_and_news');


/*--------------------------------------------------
  パンクズリスト設定
--------------------------------------------------*/

// パンくずリスト生成関数
function custom_breadcrumb() {
  echo '<ul class="content-inner04">';

  // トップページリンク
  echo '<li><a href="' . esc_url(home_url()) . '">
  <div class="img_wrap">
    <svg xmlns="http://www.w3.org/2000/svg" width="16.448" height="12.332" viewBox="0 0 16.448 12.332">
      <g id="家アイコン" transform="translate(0 -64.062)">
        <path id="パス_2501" data-name="パス 2501" d="M13.4,64.062H3.045L0,69.137H1.651v7.258H14.8V69.137h1.651Zm.362,11.3H2.682V69.137H13.766Z" fill="#222"/>
        <rect id="長方形_1060" data-name="長方形 1060" width="1.718" height="1.718" transform="translate(5.195 70.208)" fill="#222"/>
        <rect id="長方形_1061" data-name="長方形 1061" width="1.718" height="1.718" transform="translate(9.577 70.208)" fill="#222"/>
      </g>
    </svg>
  </div>TOP</a></li>';

  if (is_page()) {
      $post = get_post();
      $parents = get_post_ancestors($post);

      if (!empty($parents)) {
          $parents = array_reverse($parents);
          foreach ($parents as $parent_id) {
              echo '<li><span class="breadcrumb-arrow"></span><a href="' . get_permalink($parent_id) . '">' . get_the_title($parent_id) . '</a></li>';
          }
      }

      // 現在のページ（リンクなし）
      echo '<li><span class="breadcrumb-arrow"></span>' . get_the_title() . '</li>';
  }

  echo '</ul>';
}



/*--------------------------------------------------
  タクソノミー並び替え設定
--------------------------------------------------*/

function modify_record_categories_ordering() {
    global $wp_taxonomies;

    if (isset($wp_taxonomies['record_categories'])) {
        $wp_taxonomies['record_categories']->sort = true;
        $wp_taxonomies['record_categories']->args['orderby'] = 'term_order';
    }
}
add_action('init', 'modify_record_categories_ordering');


/*--------------------------------------------------
  用語集パーマリンクのスラッグを自動的に記事IDにする
--------------------------------------------------*/
// 1) コアがタイトルから自動生成する前に「空にしたらIDにする」を差し込む
add_filter('wp_insert_post_data', function ($data, $postarr) {
    $targets = array('record', 'news', 'voice');
    if (empty($data['post_type']) || !in_array($data['post_type'], $targets, true)) {
        return $data;
    }

    // 自動保存/リビジョン除外
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || wp_is_post_autosave($postarr['ID'] ?? 0) || wp_is_post_revision($postarr['ID'] ?? 0)) {
        return $data;
    }

    // 手動入力がある場合は尊重（$_POST['post_name'] が非空なら何もしない）
    if (isset($_POST['post_name']) && $_POST['post_name'] !== '') {
        return $data;
    }

    // 既存投稿でURL欄を空にして保存したケース：ここでIDにする
    // （新規は $postarr['ID'] が 0 のことが多いので、ここでは触らず save_post 側で対応）
    if (!empty($postarr['ID'])) {
        $data['post_name'] = (string) $postarr['ID'];
    }

    return $data;
}, 20, 2);

// 2) 新規作成直後（IDが付与された後）に、未入力だったらIDへ置換する保険
add_action('save_post', function ($post_id, $post, $update) {
    // 自動保存/リビジョン除外
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    $targets = array('record', 'news', 'voice');
    if (!in_array($post->post_type, $targets, true)) {
        return;
    }

    // 手動入力があれば尊重
    if (isset($_POST['post_name']) && $_POST['post_name'] !== '') {
        return;
    }

    // すでにIDスラッグなら何もしない
    $current = get_post_field('post_name', $post_id);
    if ($current === (string) $post_id) {
        return;
    }

    // 「新規作成（初回保存）」や「スラッグ未入力で保存」のときはIDへ
    wp_update_post(array(
        'ID'        => $post_id,
        'post_name' => (string) $post_id,
    ));
}, 20, 3);

/*--------------------------------------------------
  sitter紹介のパーマリンクをローマ字（sitter_roman）から自動生成
--------------------------------------------------*/
add_action('save_post', function($post_id, $post, $update) {

    // 自動保存/リビジョンは除外
    if ((defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) || wp_is_post_autosave($post_id) || wp_is_post_revision($post_id)) {
        return;
    }

    // 対象の投稿タイプのみ
    if ($post->post_type !== 'sitter') {
        return;
    }

    // 手動入力を優先するなら true（手動でパーマリンク欄に入力されたら、SCFより手動を採用）
    $respect_manual = true;
    if ($respect_manual && isset($_POST['post_name']) && $_POST['post_name'] !== '') {
        return;
    }

    // SCFの値を取得（保存タイミング差を考慮し、遅めの優先度でこのフックを登録しておくとより確実）
    $roman = get_post_meta($post_id, 'sitter_roman', true);
    if ($roman === '' || $roman === null) {
        return; // 未入力時は何もしない（必要ならここでIDなどにフォールバック可）
    }

    // スラッグ整形（例：'Yamada Hanako' -> 'yamada-hanako'）
    $slug = sanitize_title($roman);
    if ($slug === '') {
        return; // sanitizeの結果が空（全記号など）の場合は何もしない
    }

    // 既に同じなら更新不要
    if ($post->post_name === $slug) {
        return;
    }

    // 一意化（同名がいる場合は '-2' などが付く）
    $unique = wp_unique_post_slug(
        $slug,
        $post_id,
        get_post_status($post_id),
        get_post_type($post_id),
        $post->post_parent
    );

    // 無限ループ回避のため、変更がある場合だけ更新
    if ($unique !== $post->post_name) {
        // 一時的にこのフックを外してから更新してもOK（任意）
        remove_action('save_post', __FUNCTION__, 10);
        wp_update_post([
            'ID'        => $post_id,
            'post_name' => $unique,
        ]);
        add_action('save_post', __FUNCTION__, 10, 3);
    }

}, 999, 3); // ← 999 の遅い優先度にしておくと、SCFの保存後に動きやすい



/*--------------------------------------------------
  admin-scf
--------------------------------------------------*/
add_action('admin_enqueue_scripts', function () {
    // JS
    wp_enqueue_script(
        'common-admin-script',
        get_stylesheet_directory_uri() . '/assets/js/admin-scf.js',
        ['jquery'],
        time(), // キャッシュ回避用に強制的に現在時刻をバージョンにする
        true
    );

    // CSS（おまけ）
    wp_enqueue_style(
        'common-admin-style',
        get_stylesheet_directory_uri() . '/assets/css/admin-scf.css',
        [],
        time()
    );

    // JSにテーマのimagesディレクトリパスを渡す
    wp_localize_script('common-admin-script', 'scfImageBase', [
        'url' => get_template_directory_uri() . '/assets/img/'
    ]);
});



/*--------------------------------------------------
  動物ごとに画像を出力する関数
--------------------------------------------------*/
function get_pet_icon_svg($petCheck) {
    ob_start();

    $petCheck = (array)$petCheck;

    if (in_array('犬（ワンちゃん）', $petCheck)) {
        echo include_svg('/assets/svg/icon-dog.php');

    } elseif (in_array('猫（ネコちゃん）', $petCheck)) {
        echo include_svg('/assets/svg/icon-cat.php');

    } elseif (in_array('小動物', $petCheck)) {
        echo include_svg('/assets/svg/icon-littleanimal.php');

    } elseif (in_array('鳥', $petCheck)) {
        echo include_svg('/assets/svg/icon-bird.php');

    } elseif (in_array('魚', $petCheck)) {
        echo include_svg('/assets/svg/icon-fish.php');

    } elseif (in_array('その他', $petCheck)) {
        // ★ その他専用
       echo include_svg('/assets/svg/icon-bird.php');

    } else {
       echo include_svg('/assets/svg/icon-bird.php');
    }

    return ob_get_clean();
}



function get_petCheck_from_record_term($term) {

    // slugで完全に判定する（最重要）
    $map = [
        'dog'          => '犬（ワンちゃん）',
        'cat'          => '猫（ネコちゃん）',
        'small_animal' => '小動物',
        'bird'         => '鳥',
        'fish'         => '魚',
        'other_animal' => 'その他', // ★ これがないと出ない
    ];

    // slugが一致すれば必ず1つ返す
    if (isset($map[$term->slug])) {
        return [$map[$term->slug]];
    }

    // 万一どれにも当たらなければ「その他」
    return ['その他'];
}



/*--------------------------------------------------
  画像を出力する関数
--------------------------------------------------*/
function include_svg($relative_path) {
    $path = get_template_directory() . $relative_path;
    if (file_exists($path)) {
        include $path;
    }
}

/*--------------------------------------------------
  質問アイコンをタイトルから取得する関数
--------------------------------------------------*/
function include_question_icon_svg_by_index($index) {
  $map = [
    1 => '/assets/svg/icon-qaFlow.php',     // ご依頼について
    2 => '/assets/svg/icon-qaSitting.php',  // シッティングについて
    3 => '/assets/svg/icon-price.php',      // 料金について
    4 => '/assets/svg/icon-qaOther.php',    // その他
  ];

  if (!isset($map[(int)$index])) return;

  if (function_exists('include_svg')) {
    include_svg($map[(int)$index]);
  }
}


/*--------------------------------------------------
  アイキャッチがない場合に本文の1枚目、それもなければデフォルト画像を返す
--------------------------------------------------*/
function get_post_first_image($post_id) {
    // 1. アイキャッチが設定されていればそれを返す
    if (has_post_thumbnail($post_id)) {
        return get_the_post_thumbnail($post_id, 'medium');
    }

    // 2. 本文内の画像を探す
    $post = get_post($post_id);
    $content = $post->post_content;
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);

    if (!empty($matches[1][0])) {
        // 本文に画像があれば1枚目を表示
        $first_img = $matches[1][0];
        return '<img src="' . esc_url($first_img) . '" alt="' . esc_attr(get_the_title($post_id)) . '">';
    }

    // 3. どちらもなければデフォルト画像を返す
    $default_img = get_template_directory_uri() . '/assets/img/img_defaults01.webp';
    return '<img src="' . $default_img . '" alt="COMING SOON">';
}


/*--------------------------------------------------
    タイトルタグを自動生成
--------------------------------------------------*/
function lovepet_theme_setup() {
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'lovepet_theme_setup');