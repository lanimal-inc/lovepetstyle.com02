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
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_5_sitter_l.png" class="center-block" alt="シッター紹介">
      <div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターのご紹介</h1></div>
    </div>
    <!-- /title_box -->
  </div>

  <!-- ==========================================================================
	1.資格取得一覧
=========================================================================== -->
  <!-- ページリンク用 -->
  <div id="link_sitter_1"></div>
  <div class="sitter_1">
    <!--タイトル-->
    <div class="section-header">
      <h2 class="section-title">ペットシッターの資格取得一覧</h2>
    </div>
    <div class="sitter_1_text1">
      <!--文章-->
      <ul class="sitter_list">
        <li>・認定ペットシッター士</li>
        <li>・ペット栄養管理士</li>
        <li>・JKC愛犬飼育管理士</li>
        <li>・公認トリマー初級</li>
        <li>・愛玩動物飼養管理士1級</li>
        <li>・公認動物管理士上級</li>
        <li>・日本小動物獣医師会認定看護師</li>
        <li>・JADペット介護士</li>
        <li>・認定AKIベーシックトレーナー</li>
        <li>・NPO法人福祉職能協会ドッグトレーナー1級取得</li>
        <li>・公認動物看護士上級</li>
        <li>・NPO法人福祉職能協会ドッググルーマー</li>
        <li>・ペット防災指導員</li>
      </ul>
      <!--/sitter_1_text1 -->
    </div>
    <!--フロートクリア用-->
    <div class="clear"></div>
    <!-- /sitter_1 -->
  </div>
  <!-- ==========================================================================
	2.有資格者シッター紹介 1
=========================================================================== -->
  <!-- ページリンク用 -->
  <div id="link_sitter_2"></div>
  <div class="sitter_2">
    <!--タイトル-->
    <div class="section-header">
      <h2 class="section-title">有資格者ペットシッター紹介</h2>
    </div>
    <div class="sitter_1_text1"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p01.jpg" class="center-block" alt="有資格者シッター紹介">
      <h3><span class="sitter_name1">統括責任者 </span><br><span class="sitter_name2">川上 裕也</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">サッカー観戦、映画鑑賞</div><br>
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">天は自ら助くる者を助く</div>
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">初めまして。責任者の川上裕也と申します。飼い主様の大切な家族でありますペットを愛情込めてお世話させて頂いております。<br>
      LOVE
      PETは、『ストレス軽減、普段通りの環境』を実現し、ご安心して外出して頂ける為の架け橋になりたいと強く願っております。そしてペットシッターをご存知なかった方に、1人でも多くの方に知って頂けるよう、私共は他社には無い『圧倒的なサービス・低価格』を実現し、『不安から安心』に変わり、多くの方から大変お喜びのお声を頂いております。又、一般的なペットシッターとは違い、大切な命・最愛なペットをお守りする事に力を入れ、震災対策やボランティア活動に全力を注いでおります。<br>
      最後に、皆様にご紹介させて頂きますシッターは有資格者、厳しい研修を終えた優秀なシッターとなります。
      <!--/sitter_1_text1 -->
    </div>
    <!-- /sitter_2 -->
  </div>
  <!-- ==========================================================================
	2.有資格者シッター紹介 3
=========================================================================== -->
  <div class="sitter_3">
    <div class="sitter_1_text1"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p03.jpg" class="center-block" alt="有資格者シッター紹介">
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br><span class="sitter_name2">木村 由枝</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">音楽、映画</div><br>
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">泰然自若</div>
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">はじめまして、こんにちは。木村由枝と申します。<br>
      私は、18年間動物病院で看護師兼トリマーとして働いてきました。
      そこで培ってきたものを、この仕事を通して役立てられたらと思います。<br>
      皆様が安心して大切な家族を預けられるよう、またワンちゃんネコちゃんの異変にいち早く気づいてあげられるよう、愛情いっぱいでお世話させていただきます。<br>
      ご心配事などございましたら、いつでもご相談ください。どうぞ、よろしくお願い致します。
      <!--/sitter_1_text1 -->
    </div>
    <!-- /sitter_4 -->
  </div>


  <!-- ==========================================================================
	2.有資格者シッター紹介 8
=========================================================================== -->
  <div class="sitter_2">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p2-01.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span>      <br>
      <span class="sitter_name2">石田 友紀</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">犬とお散歩をしながら季節を感じること。スポーツ 読書</div><br><br class="sp">
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">Don't worry. Be happy.</div>
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">はじめまして、こんにちは。<br>
      石田 友紀と申します。家族と保護猫とハスキー犬と暮らしております。<br>
      動物がそばにいるということ。動物のかわいい仕草は、人の心を豊かにし 和ませ 穏やかな気持ちにさせてくれます。<br>
      ペットと一緒に過ごす楽しさは、この上ない喜びです。<br>
      飼い主様の大切な家族である ワンちゃん 猫ちゃんのサポートを飼い主様と同じように愛情たっぷりで一生懸命お世話をさせて頂きます。<br>
      どうぞ宜しくお願い申し上げます。
      <!--/sitter_1_text1 -->
    </div>
    <!-- /sitter_3 -->
  </div>


  <!-- ==========================================================================
	2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_3">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p41.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span>      <br>
      <span class="sitter_name2">石川 淳実</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">愛犬とのお出かけ、ドライブ</div><br>
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">無いものを嘆くな。あるものを活かせ。</div><br class="sp">
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">はじめまして。石川淳実と申します。<br>
      子供の頃から犬と暮らし、今は10歳のトイプードルと共に人生を歩んでいます。<br>
      日々癒され、笑わせてもらい、時に助けてもらってきた犬たちに、「今度は私が今までもらってきた愛を返していきたい。動物たちの為に生きていきたい。」と思うようになり、数年前から保護犬保護猫のボランティア活動をさせて頂いています。<br>
      ボランティアをきっかけに動物関連の勉強をし始め、ペットシッター士の資格を取得し、全く異なる金融系企業からペットシッターへと転職致しました。<br>
      動物が大好きです。犬も猫も、一緒に暮らす全ての動物は皆、家族の一員だと思っています。そんな大切な家族の一人である動物たちには幸せと喜びを、そして飼い主様には安心と信頼を、それぞれお届け出来るよう、誠実に、心を込めてお世話させて頂きます。どうぞよろしくお願い致します！<!--/sitter_1_text1 -->
    </div>
    <!-- /sitter_3 -->
  </div>


  <!-- ==========================================================================
	2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_2">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p45.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span>      <br>
      <span class="sitter_name2">宮本 紫乃</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">動物番組の観賞。
        動物愛護団体さんのYouTubeを見て応援、勉強すること。動物との触れ合い。美味しい物を食べること。</div><br><br><br class="sp"><br class="sp">
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">至誠天に通ず。ありがとう。お陰様。</div><br class="sp">
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">初めまして 宮本紫乃と申します。<br>
      子供の頃から動物が大好きで 猫と犬と暮らして来ました。愛犬がシニアになり色々と病気を患いその事がきっかけで手作りごはんやおやつ作りを勉強し始め、そしてペット介護士の勉強もしました。看病、介助、介護をしている中で、これから先の人生
      動物にかかわる仕事に就きたいと思うようになり、今の私があります。<br>
      愛猫、愛犬には沢山の幸せをもらい、本当に色々なコトを学ばせてもらいました。その学びを通し少しでもお役に立てれば と思っています。<br>
      飼い主様にとって大切な愛する我が子であるコトをしっかり心に刻み、お世話させて頂くどの子も自分の子のように愛情と責任を持ってその子の個性を理解し、その子にあったお世話を心がけ飼い主様にも動物逹にも安心して頂けるよう、信頼して頂けるよう
      真心を込めて一生懸命お世話させて頂きます。<br>
      どうぞ宜しくお願い致します。
    </div>
    <!-- /sitter_3 -->
  </div>

  <!-- ==========================================================================
	2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_3">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p46.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
      <span class="sitter_name2">坂田 亜紀子</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">愛猫と遊ぶこと、散歩、サイクリング、美味しいものを食べること</div><br><br class="sp">
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">笑い門には福来る、為せば成る 為さねば成らぬ何事も
        成らぬは人の為さぬなりけり</div><br class="sp"><br class="sp">
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">初めまして。坂田亜紀子と申します。<br>
      私は子供の頃から動物が大好きで、今までに犬や猫、ウサギと暮らしてきました。現在は16歳と9歳の高齢猫達と穏やかに暮らしています。<br>
      ペットシッターになる前は長年医療関係の事務をしていましたが、ペットシッターの仕事に強く惹かれ勉強し、キャットシッター、キャットケアスペシャリスト、愛玩動物飼養管理士2級の資格を取得しました。<br>
      きっかけは、実家の中型犬（ラブラドール雑種）の介護でした。高齢の両親による老々介護。可愛いわが子を想いながらも大変な介護でした。<br>
      介護は動物も人間も同じ。人間のヘルパーさんの様に安心してお任せできる存在がいてくれたら動物も人間も幸せなのではないかと思いから、ペットシッターにたどり着きました。<br>
      お留守番のお世話は勿論、知識をもったシッターによる介護のお手伝いも、もっと広がればよいなと思います。<br>
      お話が出来ない動物たちは、表情や体調をよく観察して思いを汲み取ることが大切といつも思っています。<br>
      飼い主様の大切な我が子を安心してお任せしていただけるよう、我が子のように愛情をもって大切にお世話させていただきます。<br>
      どうぞよろしくお願いいたします。
    </div>
    <!-- /sitter_3 -->
  </div>

  <!-- ==========================================================================
	2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_2">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_p48.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
      <span class="sitter_name2">石渡 加奈子</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">映画鑑賞、愛猫とゆっくり過ごすこと</div><br><br class="sp">
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">長い目で見れば人生には無駄がない</div><br class="sp">
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">はじめまして、こんにちは。石渡加奈子と申します。<br>
      小学生の頃、家の庭に迷い込んでいた猫を家族に迎えて以来、ずっと猫や犬と共に暮らしてきました。<br>
      悲しいことがあっても、ふと気づくと側に居て笑顔にさせてくれる。平凡な毎日を、彩り豊かにして楽しませてくれる。そんなペットに関わる仕事がしたいと思い、ペットシッターになることを決めました。<br>
      旅行などでペットと離れた場所にいても、飼い主さまが安心できるよう、精一杯愛情を込めてお世話させていただきます。<br>
      どうぞ、よろしくお願い致します。
    </div>
    <!-- /sitter_3 -->
  </div>

  <!-- ==========================================================================
	2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_3">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitter_saitosatomi.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
      <span class="sitter_name2">齋藤 里美</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">温泉や銭湯巡り、カラオケ</div><br>
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">しあわせはいつもじぶんのこころがきめる、一生勉強一生青春</div><br class="sp">
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">
      初めまして、宮城県出身の齋藤里美と申します。<br>
      子供の頃から動物が好きでムツゴロウ王国に勤めるのが夢でした。
      そんな私の幼少期は常に家に保護犬や保護猫がおりました。
      社会人になり様々な職業を経験しペットシッターのお仕事に就きましたがコロナの影響で一度退きました。
      しかし動物に携わるお仕事にやり甲斐を感じており復帰する事に致しました。<br>
      現在は家族と猫と暮らしております。お客様の大切な家族のペット様を自分の家族同様に大切にお世話させて頂きます。どうぞ宜しくお願い致します。
    </div>
    <!-- /sitter_3 -->
  </div>

  <!-- ==========================================================================
2.有資格者シッター紹介 19
=========================================================================== -->
  <div class="sitter_2">
    <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitter_abeshiori.jpg" class="center-block" alt="有資格者シッター紹介" />
      <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
      <span class="sitter_name2">阿部 千織</span></h3>
      <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">美味しいものを探すこと</div><br>
      <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">一期一会</div>
      <!--/sitter_1_text1 -->
    </div>
    <div class="sitter_1_text1">初めまして、阿部千織と申します。<br>
      子供の頃より動物がいる環境の中で暮らしてまいりました。今は怪我で片目の見えないネコちゃんと暮らしております。<br>
      飼い主様とその大切なご家族様の幸せのお手伝いが出来れば、とペットシッターの道を選びました。飼い主様に安心して頂けるよう、愛情をもってお世話させて頂きます。<br>
      どうぞよろしくお願い致します。
    </div>
    <!-- /sitter_3 -->
  </div>


    <!-- ==========================================================================
	2.有資格者シッター紹介 19（2024/01/23追記）
=========================================================================== -->
<div class="sitter_3">
  <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitter_katoumei.jpg" class="center-block" alt="有資格者シッター紹介" />
    <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
    <span class="sitter_name2">加藤 芽生</span></h3>
    <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">韓国語の勉強</div><br>
    <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">現状維持は衰退</div>
    <!--/sitter_1_text1 -->
  </div>
  <div class="sitter_1_text1">はじめまして。加藤と申します。<br>
    物心がついた頃から動物が大好きでしたが実家の都合で長い間迎え入れることができませんでした。<br>
    社会人になり夢の一つであった現在の愛犬を飼うことになり、こんなにも人生が変わるのかと思うほど愛犬がいる生活に何度も救われました。<br>
    一生をかけてペットという存在に恩返しをしたいと思い、動物に携わるお仕事の一つとしてペットシッターを通じ日々勉強中です。<br>
    飼い主様にご安心して頂けるよう愛情を持ってお世話をさせて頂きますので、どうぞ宜しくお願い申し上げます。
  </div>
  <!-- /sitter_3 -->
</div>



  <!-- 追記20240409 -->


      <!-- ==========================================================================
	2.有資格者シッター紹介 19（2025/04/1追記）
=========================================================================== -->
<div class="sitter_2">
  <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitter_nakamurahiroko.jpg" class="center-block" alt="有資格者シッター紹介" />
    <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
    <span class="sitter_name2">中村 宏子</span></h3>
    <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">野球観戦、漢字ナンクロ、猫雑貨集め</div><br><br class="sp">
    <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">努力できることが才能である、先入観は可能を不可能にする</div><br class="sp">
    <!--/sitter_1_text1 -->
  </div>
  <div class="sitter_1_text1">初めまして。中村宏子と申します。<br>
    現在、甲状腺機能亢進症と慢性化した猫風邪のキャリアを持つ８歳の保護猫ちゃんを引き取り、家族と暮らしております。長年、教育業界におりました。<br>
    セカンドオピニオンでガンと診断された先代保護猫を亡くしたとき、知識の未熟さを知ったとともに、動物に関わる仕事を行い恩返しがしたいという気持ちが強まり、愛玩動物飼養管理士（１級）を取得、長毛種の愛猫のためにトリマーペットスタイリスト（JADP）も取得しました。近年の医療技術の進歩により、ペットの寿命も延びております。これからは動物介護関連の勉強もしたいと考えております。<br>
    私たちの使命は、お預かりした大切なお子さまを我が子のように愛情を注ぎ、責任を持ってお世話させていただくことはもちろん、アニマル・アドボケート（動物の代弁者）としてお子さまの健康管理や安全を確保し、幸福を守ることだと思います。<br>
    どうぞよろしくお願い申し上げます。
  </div>
  <!-- /sitter_3 -->
</div>



      <!-- ==========================================================================
	2.有資格者シッター紹介 19（2025/04/1追記）
=========================================================================== -->
<div class="sitter_3">
  <div class="sitter_1_text1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sitter_nakajimamfumiko.jpg" class="center-block" alt="有資格者シッター紹介" />
    <h3><span class="sitter_name1"><span class="area_tab">東京エリア</span>女性ペットシッター</span><br>
    <span class="sitter_name2">中嶋 芙美子</span></h3>
    <div class="sitter_dateil sitter_dateil_first"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil2.png" alt="趣味">愛犬とドライブ</div><br>
    <div class="sitter_dateil"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/5_sitter_dateil3.png" alt="好きな言葉">感謝</div>
    <!--/sitter_1_text1 -->
  </div>
  <div class="sitter_1_text1">はじめまして。お出かけ大好き柴犬と、ハンドリング得意なヒョウモントカゲモドキと同居中。<br>
    可能な限り、大好きな動物たちと触れ合いたいと思い、ペットシッターを志しました。
    どうしてもペットにお留守番をさせなければならない時、また、お世話が難しい状況下において、ご依頼主様と大切なご家族がノンストレスな日々を送ることができますよう、お手伝いさせて頂ければ幸いです。<br>
    皆さまと、その大切なご家族に会える日を楽しみにしております。
    宜しくお願い致します。
  </div>
  <!-- /sitter_3 -->
</div>


<?php get_template_part('assets/inc/footer'); ?>