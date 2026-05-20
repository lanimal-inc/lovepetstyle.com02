<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

 <!-- ==========================================================================

	コンテンツ

=========================================================================== -->

  <!--タイトル（PC）-->
  <!--背景-->
  <div class="title_box">
    <!--パンくずリスト-->
    <?php get_template_part('assets/inc/breadcrumb'); ?>
    <!--フロートクリア用-->
    <div class="clear"></div>
    <!--アイコン-->
    <div class="section-maintitleWrap">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_9_question_l.png" class="center-block" alt="よくあるご質問">
      <div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターのよくあるご質問</h1></div>
    </div>
  </div>

  <!-- ==========================================================================
	1.
=========================================================================== -->
  <div class="question_1">

    <!--Q1-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">電話の受付時間の時間について教えて下さい。 </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3" style="margin: 60px auto 30px auto ;">
      お電話受付時間はAM9:00～PM18:00までとなります。年中無休となりますので、お気軽にお問合せ下さいませ。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q1-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">まずは一度お会いして、話しだけでも聞くことはできますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3" style="margin: 60px auto 30px auto ;">はい、もちろん大丈夫です。<br>
      システムのご説明や、サービス内容等、ホームページだけでは分からない部分をスタッフより直接ご説明させて頂きたく思います。<br>
      その際、ペットシッターをご利用にあたり、ご不安な点、ご不明な点はなんなりとお申し付け下さいませ。<br>
      私共も、1度お会いして、お客様からのご要望やペットシッター内容などをご確認して頂いたり、ペットとの相性も御座いますので、まずは1度お会いして決めて頂ければと思います。<br>
      ※契約に至らなかった場合、ご説明自体の料金は無料となりますが、お伺いするにあたり半蔵門駅より最寄り駅、もしくは最寄りのバス停までの往復交通費をご請求させていただきます。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q2-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">登録だけ済ませる事は可能ですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、もちろん大丈夫です。<br>
      1度ご登録頂くと、次回からお電話・メールのお申し込みだけでご利用を頂けます。当面利用する予定はないけど…という方も、いざとう時の為に登録のみでも承ります。　
      <!--question_text3-->
    </div>
    <hr>

    <!--Q3-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">打ち合わせではどういう事をするのですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">
      打ち合わせの際は、お客様のご自宅の方へお伺いさせて頂き、システムのご説明や当店のサービス内容を詳しく説明させて頂きます。飼い主様がご納得頂けましたら正式なご契約の流れとなります。<br>
      ご契約を頂けました際には、カルテにペットの日頃のお世話の様子を記入させて頂き、ペットシッター当日は万全の体制でお世話をさせて頂きます。尚、打ち合わせに関しては無料で行わせて頂いております。<br>
      詳しくは<span class="page_link"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_2" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q4-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q " style="	margin: 10px 0 40px 0 ;">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">ペットシッターを利用してみたいけど･･･どんな人が来るのか不安です </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3" style="margin: 60px auto 30px auto ;">初めてのご利用の方は皆さん同じ気持ちでお問い合わせ頂いております。<br>
      在籍ペットシッターは日厳しい研修を修了した身元の確実なペットシッターです。<br>
      更に飼い主様の不安を取る為、社員証の提示、在籍シッター全員に身元保証人を立てております。不安な気持ちが安心・安全に変わる事をお約束いたします。詳しくは<span class="page_link"><a
          href="<?php echo home_url('/sitter/'); ?>?id=link_sitter_2" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q5-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">女性のペットシッターさんを希望する事はできますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、勿論可能で御座います。<br>
      女性のペットシッターがいるので、一人暮らしの女性も安心してご利用頂ける様に、最大限の配慮を致しました。女性のペットシッター希望の方はお気軽にご相談下さい。優先的に女性のペットシッターを派遣させて頂きます。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q5-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">前回のお世話に入った同じシッターにまた来て頂く事はできますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3"><br>
      はい。前回のお世話にはったシッターをお世話にお伺いする事は可能です。ご希望の際は別途オプション料金￥1,100円（税込）を指名料として頂きます。<br>
      ペットシッターとペットの信頼関係がより強くなり、健康状態がより分かると共に安心とキメ細やかなお世話で飼い主様も今まで以上にご安心して頂けます。<br>
      メールでのお問合せでご希望の際は【お問合せ・ご要望】の欄にお電話でのお問合せの際は受付にお伝えください。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q6-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">どれぐらい前に申し込めば良いのでしょうか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">急なご依頼でも可能な限り対応させていただきます。但し、初めてのお客様の場合は特に初回打ち合わせがございますので、1週間前位を目安にご連絡頂ければ助かります。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q6-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">キャンセル料金はかかりますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">ご依頼日の前日より発生いたします。 <br>
      <br>
      前日…50％<br>
      当日…100％　となります。<br>
      <br>
      また、ご入金後のご予約確定となります為、ご入金予定日経過後、ご連絡が取れません場合は自動キャンセル扱いとさせて頂く場合がございます。何卒ご了承くださいませ。

      <!--question_text3-->
    </div>
    <hr>

    <!--Q7-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">来てもらう時間は指定できますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">基本的には、お客様とペットシッターとで相談をし、希望に沿える様にお伺いする時間を決めさせていただきます。<br>
      但し、繁忙期や天候状況、交通機関の乱れ等によって、多少の時間のズレが生じてしまう場合もありますので、予めご了承頂きます様、宜しくお願いします。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q8-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">衛生管理はどのように対応しているのですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、衛生管理の徹底を行っております。<br>
      具体的な内容と致しましては、各ペットシッターに専用のスリッパを持参させておりますので、素足や靴下で直にお客様のご自宅の床を踏まないように致しております。<br>
      又、お世話に入る際には必ず除菌スプレー等を使い、手や衣服等を除菌してからお世話に入る様にしております。詳しくは<span class="page_link"><a
          href="<?php echo home_url('/first/'); ?>?id=link_first_10" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q9-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">鍵の取り扱いはどの様に管理しているのですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、鍵のお取り扱いにつきましてシッター全員に厳しい研修制度・お世話に向かう際のお取り扱いに関しまして万全な体制・配慮を期しております。<br>
      更に、定期的なお客様には鍵の保管庫により厳重にLOVE
      PETの事務所にて保管・管理しております。お客様の目に見えない部分でも徹底した管理を行い、常にお客様の立場に立ち、安心してペットシッターをご利用して頂ける様、努力して参ります。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">鍵の返却はどの様にして貰えるのですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、鍵のご返却に関しましてはペットシッター終了後、お客様のご希望により、ポストや宅配ボックスへの返却、手渡し・レターパックライトによる郵送をご用意しております。<br>
      お客様のニーズに合わせ4つの中から鍵の返却方法をお選びください。詳しくはお打ち合わせの際にお気軽にご相談下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">2回目以降のお世話変更点はどのようにお伝えすれば宜しいですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3" style="margin: 60px auto 30px auto ;">2回目以降のご依頼の際には、原則的に初回打ち合わせの様な面談は行っておりません。<br>
      当店より初回ご利用時に発行致しました、飼い主様共有ファイルをご活用下さい。<br>
      飼い主様共用ファイル内にございます、お世話の変更・修正ページや伝言を書き込むページがございますので、そちらにご記入をお願い致します。<br>
      尚、変更点の提示がない場合は共用ファイルに記載のお世話内容となります。<br>
      ご依頼日前までに必ずご確認下さいませ。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">狂犬病、ワクチンの証明書の提示について </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">犬の場合は年に１回の狂犬病ワクチン。<br>
      基本的には犬、猫、小動物は混合ワクチンの接種、ノミ･ダニの駆除をお願いしております。<br>
      毎回の消毒など衛生面には注意をしていますが、色々なペットのお世話をする仕事柄、ワクチン接種をされていない場合、伝染病にかかっているペットのお世話は申し訳ありませんがお断りしております。 </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">噛み癖のあるペットのお世話は可能ですか？</div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">誠に申し訳ございませんが、噛み癖のあるペットのお世話は事故防止の為、お断りしております。 </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">投薬・目薬は可能ですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">投薬はご飯、おやつに混ぜて与える方法のみとさせて頂き、経口投与はお断りしております。<br>
    お打ち合わせ時、お世話当日のペットの状態（興奮・威嚇・隠れて出てこない等）により投薬をお断りする場合もあり、投薬を確約することは致しかねますので予めご了承ください。<br>
    目薬はお打ち合わせ時に確認をさせていただき、問題ないと判断した場合のみ対応させて頂きます。<br>
    お世話当日のペットの状態（興奮・威嚇・隠れて出てこない等）により目薬をお断りする場合もあり、目薬を確約することは致しかねますので予めご了承ください。<br>
    ※次回以降で内容に変更の場合、事前にお薬の写真を添えて投薬内容をお知らせください。事前のご連絡が無い場合、投薬方法が口径投与にご変更となりました場合、投薬はできかねます。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">インシュリンの注射や皮下点滴等は可能ですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">注射、点滴等の行為は医療行為となります為、お断りしております。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q10-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">担当するシッターと会えますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">ご要望の場合、事前の日程調整と別途手数料3,300円（税込）+交通費（非課税）にてお顔合わせをさせて頂きます。<br>
      但し、お時間が無い場合はお打合せ担当者からの徹底したお世話確認、引継ぎをし、ご希望がございましたら身分証の提示による身元開示も行っており、多くのお客様にご安心して頂いております。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q13-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">回数券ついて詳しく教えてください </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">多数特典付きのお得な回数券となっております！<br>
      ペットシッターの優先予約、24時間遠隔操作カメラ、繁忙期割増料金なしでご利用できます。<br>
      ※繁忙期期間中は24時間遠隔操作カメラは有料となります。<br>
      詳しい回数券のご説明は<span class="page_link"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_10" target="_blank">コチラ</a></span>へ
      <!--question_text3-->
    </div>
    <hr>

    <!--Q14-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">カメラについて詳しく教えてください </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">
      はい、業界初のカメラになります。外出先からPCは勿論、iPadやiPhone、各種スマートフォンを使ってペットシッター中の映像を確認できるカメラです。ペットシッター中、留守宅の監視、ペットの様子を24時間確認することができます。<br>
      【会員のお客様は標準サービスでご利用できます。大反響の為、カメラの台数に限りが御座いますので、お早目のご予約をお願い致します】<br>
      繁忙期期間中のご利用は、最長で3日間とさせて頂きますので予めご了承ください。<br>
      詳しくは<span class="page_link"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_15" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q15-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">緊急震災対策システムについて詳しく教えて下さい。 </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、こちらは業界初の震災対策システムになります。<br>
      万が一お世話の最中に大地震が起こってしまった場合、ペット防災指導員の指示の元、担当スタッフが、お打ち合わせの際にお聞きした避難場所、または事務所に備えている防災グッズで万全の体制でペットを保護できるように、できる限り努めさせていただきます。<br>
      そしてお客様との連絡を強化します。※当社が出来る限りの体制となっております。<br>
      また東京防災認定の研修も行っております。詳しくは<span class="page_link"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_15" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q16-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">お散歩代行について詳しく教えて下さい。 </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、食事やトイレの掃除はせず、お散歩だけをお願いしたいというお客様の為のコースとなっております。<br>
      お散歩代行コースは40分でご用意しております。飼い主様が日頃行なっているお散歩の時間に対応出来る形となっております。勿論、時間の延長も承っておりますので、1時間、2時間と長時間のお散歩も対応致します。<br>
      リードやお散歩バッグ、排泄の処理に必要なグッズ等はお客様の物をご利用させて頂きますので、予めご用意をお願い致します。<br>
      また、お散歩時の安全面を考えダブルリードを採用しております。お客様のリードと別にシッターが持参する肩掛けのリードも装着して安全にお散歩を致します。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q17-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">通常のペットシッターとは何が違うのでしょうか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">
      業界初による震災対策、24時間遠隔操作カメラ、会員様限定特典、お得なキャンペーン情報、大手企業との提携など万全な体制で、お客様の大切な家族をお守りします。シッター全員が厳しい研修過程を終えた有資格者【動物資格者】であり、飼い主様が旅行や仕事等で、留守番しているペットのお食事やお散歩代行をしております。当店の会員様は他店にない圧倒的なサービス＆得点がご利用できます。次世代ペットシッターとして各メディアから注目され取り上げられております。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q18-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">交通費について詳しく教えて下さい。 </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、基本的には公共の交通機関を利用して、お客様の最寄の駅及びバス停までの往復交通費（半蔵門駅からの計算）を頂いております。<span
        style="color:#603f26; font-weight:bold;">また、当店の店舗（千代田区一番町13−3）より徒歩10分圏内のお客様は出張費220円とし、</span>11分以上からは公共交通機関の交通費を頂きます。<br>
      ※東京23区外は別途出張費1,100円頂きます。<br>
      ※半蔵門駅からご自宅まで40分以上（Googlemapにて、平均ダイヤ平日12時の時間での検索）のお時間を要する場合、別途770円の出張費を頂きます。<br>
      ※最寄り駅からお客様ご住所で徒歩11分以上の方は最寄りのバス停料金を基準とさせて頂きます。尚、バス停が近くに無い場合は出張費として550円頂きます。<br>
      交通費に関しましては<span class="page_link"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_9" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q20-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q " style="	margin: 10px 0 40px 0 ;">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">人見知りが激しく神経質なネコですが、そんなネコでも大丈夫でしょうか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3" style="margin: 60px auto 30px auto ;">はい、もちろん大丈夫です。<br>
      そういった性格のネコの場合は食事やトイレの清掃は勿論致しますが、執拗に近づいたりせず、猫のストレスを一番与えない様に致しますので、ご安心下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q -->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">トリミングサロンや動物病院への送迎はしてくれますか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、LOVE
      PETでは飼い主様に代わりに動物のプロが大切なご家族をトリミングサロンや動物病院へ安全に送迎する「トリミングサロン＆動物病院通院代行コース」をご用意しております。ご利用にあたりまして様々な要件があります為、詳しくは<span
        class="page_link"><a href="<?php echo home_url('/job/'); ?>?id=link_job_55" target="_blank">コチラ</a></span>をご覧下さい。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q -->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">急患の場合でも動物病院への送迎は可能ですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">急患の場合、可能な限り対応をさせて頂きますので、まずはご相談ください。但し、当日のスケジュールの都合上お断りさせて頂く場合がございます。予めご了承くださいませ。
      <!--question_text3-->
    </div>
    <hr>

    <!--Q21-->
    <div class="question_text1">
      <!--文章-->
      <div class="question_Q ">Q.&nbsp; </div>
      <h2>
        <div class="question_text2">庭の植木の水やりもお願いしたのですが大丈夫ですか？ </div>
      </h2>
      <!--question_text1 -->
    </div>
    <div class="question_text3">はい、ペットシッター時間内で出来ることでしたら新聞の取り込みやお部屋の換気など、打合せの際に何なりと申しつけ下さい。
      <!--question_text3-->
    </div>

    <!-- /question_1-->
  </div>


<?php get_template_part('assets/inc/footer'); ?>