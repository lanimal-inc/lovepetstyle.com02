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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_7_safe_l.png" class="center-block" alt="ペットシッターの安全安心対策">
			<div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターの安全安心対策</h1></div>
		</div>
	</div>

	<!-- ==========================================================================
	1.
=========================================================================== -->
	<div class="safe_1">
		<div class="love_p_s">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_p000.jpg" alt="ポスター">
			<!--love_p_s -->
		</div>

		<div class="love_text1">
			<p>私達は、東日本大震災の教訓を元に業界初の緊急震災対策システムを設置し、震災グッズの用意、23区内での避難場所の確保、ペットの保護、掲示板等でお客様と随時連絡が取れる様、幅広く飼い主様とペットをサポートし安心・安全を提供します。<br />
			</p>
			<p>万が一お世話の最中に大地震が起こってしまった場合、ペット防災指導員の指示の元、担当スタッフが、お打ち合わせの際にお聞きした避難場所、または事務所に備えている防災グッズで万全の体制でペットを保護できるように、できる限り努めさせていただきます。そしてお客様との連絡を強化します。
			</p>
			<p>私達はお客様が安心してペットシッターをご利用頂ける様、最大限の努力をしていきます。</p>
			<p>※当社が出来る限りの震災対応とさせていただきます。<br />
			</p>
			<p>最後に、震災によって被災された動物、保護犬、保護猫の義援金活動やボランティア活動へ積極的に参加させて頂いております。 </p>
			<!--love_text1 -->
		</div>
		<!--空白行-->
		<p style="height:25px; display: block;"></p>
		<div class="love_banner">
			<ul class="safe_banner_1">
				<li><a href="https://doubutsukyuen.org/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/nabber_kyuuen.jpg" alt="どうぶつ救援本部"
							class="onmouse01"></a></li>
			</ul>
			<ul class="safe_banner_2">
				<li><a href="http://www.minashigo.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner_minashigo.png"
							alt="犬猫みなしご救援隊" class="onmouse01"></a></li>
			</ul>
			<!--love_banner -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--love_1 -->
	</div>

	<!-- ==========================================================================
	2.防災訓練研修の様子
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_1"></div>
	<div class="safe_2">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">東京23区対応ペットシッターの防災訓練研修</h2>
		</div>
		<div class="love_text1">研修の際、東京防災センターによる震災体験、研修を行っております。
			<!--love_text1 -->
		</div>
		<!--写真-->
		<div class="love_p">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_p00.jpg" class="onmouse01" alt="防災訓練研修の様子_会場風景">
			<!--love_p -->
		</div>
		<!--safe_2 -->
	</div>

	<!-- ==========================================================================
	3.　1.身の安全の確保
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_2"></div>
	<div class="safe_3">
		<!--タイトル-->
		<div class="section-header_sav">
			<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>防災訓練研修その1</p>
			<h3 class="flow_a_midashi1"><strong>災害時のペットの安全確保</strong></h3>
		</div>
		<div class="love_text1">
			<p><span class="safe_midashi">揺れが止まるまで椅子やテーブルの下にペットと退避し、身の安全を確保致します。</span></p>
			<p>
			自宅の中で揺れを感じた場合は、テーブル等の下にペットと一緒に避難をし、家具の転倒等から身を守ります。又、散歩先であれば、まず建物から離れた上で窓ガラスの飛散に注意します。その後、安全な広い場所に退避し、身の安全を確保致します。</p>
			<!--love_text1 -->
		</div>
		<!--safe_3 -->
	</div>

	<!-- ==========================================================================
	4.　2.判断・指示
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_3"></div>
	<div class="safe_4">
		<!--タイトル-->
		<div class="section-header_sav">
			<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>防災訓練研修その2</p>
			<h3 class="flow_a_midashi1"><strong>緊急時のペットシッターの判断・指示</strong></h3>
		</div>
		<div class="love_text1">揺れが止まりましたら、ペット防災指導員より担当シッター全員に適切な判断・指示をさせて頂きます。<br>
			担当シッターは今の状態を的確に伝え、適切な判断・指示の元、訓練通り落ち着いて対応させて頂きます。ペットの側から離れず安心するよう興奮を抑えます。<p>&nbsp;</p>
			興奮されているペットに関しましては、落ち着かせる為に、当店で標準装備させて頂いているアロマを使用させて頂きます。<br>
			外を歩く際は、当店で標準装備させて頂いているブーツを履かせ、ガラスの破片や灰等から肉球を保護致します。
			<!--love_text1 -->
		</div>
		<!--safe_4 -->
	</div>

	<!-- ==========================================================================
	5.　3.避難
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_4"></div>
	<div class="safe_3">
		<!--タイトル-->
		<div class="section-header_sav">
			<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>防災訓練研修その3</p>
			<h3 class="flow_a_midashi1"><strong>ペットとの避難対応</strong></h3>
		</div>
		<div class="love_text1">
			<p><span class="safe_midashi">避難経路の確保をし、打ち合わせの際に決めていた避難場所へ速やかに移動致します。</span></p>
			<p>LOVE PETでは、事前の打ち合わせの際にお客様と相談をして避難場所を決めさせて頂く事は勿論の事、非常口や避難はしご、避難経路等の確認をし、確実に避難できる体制でシッティングに臨んでおります。</p>
			<p>基本的には自宅待機としますが、建物の倒壊の恐れや火事等により、自宅待機が困難と判断した場合は、最も安全な方法で避難させて頂きます。</p>
			<!--love_text1 -->
		</div>
		<!--safe_3 -->
	</div>

	<!-- ==========================================================================
	6.　4.状況の報告
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_5"></div>
	<div class="safe_4">
		<!--タイトル-->
		<div class="section-header_sav">
			<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>防災訓練研修その4</p>
			<h3 class="flow_a_midashi1"><strong>災害発生時の状況報告体制</strong></h3>
		</div>
		<div class="love_text1">
			<p><span class="safe_midashi">避難場所へ到着しましたら、お客様へ電話やメールをし、状況を報告致します。</span></p>
			<p>
			震災状況により、飼い主様と連絡が繋がらなかった場合は、LOVE PET震災専用掲示板【Twitter】を利用し、確実に状況を報告致します。又、打ち合わせの際に詳しくご説明をさせて頂きますのでどうぞご安心下さい。
			LOVE PET震災専用のTwitterは<span class="page_link"><a href="https://twitter.com/lovepet_ebisu"
					target="_blank">コチラ</a></span>をご覧下さい。
			飼い主様のお電話が繋がる際は震災・停電になった際も、お電話が繋がる電話機を使用しておりますので当店よりご連絡をさせて頂きます。</p>
			<!--love_text1 -->
		</div>
		<!--safe_4 -->
	</div>

	<!-- ==========================================================================
	7.　5.万が一の時は
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_6"></div>
	<div class="safe_3">
		<!--タイトル-->
		<div class="section-header_sav">
			<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>防災訓練研修その5</p>
			<h3 class="flow_a_midashi1"><strong>万が一の災害時ペットシッターの対応について</strong></h3>
		</div>
		<div class="love_text1">
			<p><span class="safe_midashi">お客様と連絡が取れない場合は、LOVE PETの事務所にて保護致します。</span></p>
			<p>万が一飼い主様と連絡が取れない場合、飼い主様宅保護・避難場所保護・事務所保護となります。事務所保護の場合は、交通機関・災害状況にもよりますがペット防災指導員が現地に向かいライフジャケット【ワンちゃん】・ハーネス【猫ちゃん】を持参し、シッター全員に指示、保護をいたします。その際は本社【半蔵門一番町13-3】へ避難をし、大切なペットを可能な限り保護いたします。<br>
			シッティング中以外の時間帯で地震が起こってしまった場合は、可能な限り様子を見に行き、ペットの様子をお客様に報告出来る様対応致します。<br>
			また飼い主様宅以外で保護する場合は【避難所・事務所】常備しておりますマナー袋・ペットシーツ・ライフジャケット・ハーネス・食器・保存食・ふき取りペーパーを用意しペットの生命保持に全力を尽くします。</p>
			<!--love_text1 -->
		</div>
		<!--safe_3 -->
	</div>

	<!-- ==========================================================================

	24時間遠隔操作カメラ

=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_camera">
	</div>
	<!-- ページリンク用 -->
	<div id="link_safe_15"></div>
	<!--タイトル（モバイル）-->
	<!--背景-->
	<div class="title_box2 mobile_only">
		<!--アイコン-->
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_title_mobile2.png" class="center-block" alt="24時間遠隔操作カメラ">
		<!--コピー-->
		<p class="flow_0_midashi1"></p>
		<!-- /title_box -->
	</div>

	<!--タイトル（PC）-->
	<!--背景-->
	<div class="title_box2 pc_only">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_7_safe_l4.png" class="center-block" alt="24時間遠隔操作カメラ">
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	1.
=========================================================================== -->
	<div class="safe_11">
		<div class="love_text1">
			外出先からPCは勿論、iPadやiPhone、各種スマートフォンを使ってシッティング中の映像を確認できるカメラです。このカメラを使えば、シッティング中の様子は勿論、シッティング以外の時間帯の留守宅の監視やペットの様子を確認することができます。(24時間利用の場合)<br>
			また、カメラのレンズ周囲に赤外線LEDを搭載しているので、周囲が暗くなっても赤外線撮影モードに切り替わり撮影が可能です。<br>
			赤外線モードでも通常でも画像は鮮明に見えますので、大切なペットの様子をしっかりと見る事ができます。<br>
			更にパスワードもお客様個人で設定できますので、第三者に見られる事も無くセキュ リティ対策は万全で安心してご利用頂けます。<br>
			カメラの設置にはインターネット環境も工事も不要です。置き型ですのでお家の壁に傷をつける事もございません。<br>
			接続もカンタン！電源さえあればご利用頂けます！
			<!--love_text1 -->
		</div>
		<!--safe_11-->
	</div>

	<!-- ==========================================================================
	2.カメラの見え方
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_16"></div>
	<div class="safe_4-2">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペット見守りカメラの見え方</h2>
		</div>
		<!--写真-->
		<div class="love_p_s">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_p08_2.jpg" alt="実際の図">
			<!--love_p_s -->
		</div>
		<div class="love_text1">24時間遠隔操作カメラは右の写真の様な形でご覧になれます。<br>
			スマホからしゃべりかけ機能を搭載していますので、大切な家族に話しかけることもできます。<br>
			更に、画面左上の円形の部分でカメラのパンチルトが可能なので、部屋全体を見渡す事が可能です。
			<!--love_text1 -->
		</div>
		<!--safe_4-2-->
	</div>

	<!-- ==========================================================================
	3.製品の特徴
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_17"></div>
	<div class="safe_3-2">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペット見守りカメラ製品の特徴</h2>
		</div>

		<h3 class="flow_a_midashi1">外出先からでも簡単モニタリング</h3>
		<div class="love_text2">
			外出先などの離れた場所のからシッティングの様子やペットの様子を簡単に、オンタイムでモニタリングが可能です。また、PCは勿論、iPadやiPhone、各種スマートフォンでモニタリングが可能なので、幅広いお客様にご利用頂けます。
			<!--love_text2 -->
		</div>
		<!--写真-->
		<div class="love_p_s">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_p10_2.jpg" alt="構成図">
			<!--love_p_s -->
		</div>
		<!--空白行-->
		<p style="height:30px; display: block;"></p>
		<h3 class="flow_a_midashi1">スマートフォンで簡単に<br class="sp">パンチルト閲覧が可能</h3>
		<div class="love_text2">PCは勿論のこと、iPadやiPhone、各種スマートフォンカメラで撮影している映像を簡単にリアルタイムで確認することができます。<br>
			気になるときにいつでもアクセスをして確認することができます。<br>
			更に、パン（首フリ）355°チルト（上下）120°の広範囲をカバー。<br>
			1台のネットワークカメラで部屋中を撮影できます。
			<!--love_text2 -->
		</div>
		<!--写真-->
		<div class="love_p_s"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/7_safe_p11_2.jpg" alt="操作図">
			<!--love_p_s-->
		</div>
		<!--safe_3-2-->
	</div>

	<!-- ==========================================================================
	4.注意事項
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_safe_18"></div>
	<div class="safe_10-2">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッター<br class="sp">ご利用時の注意事項</h2>
		</div>
		<div class="love_text3">※ご利用の際はお客様宅のコンセントを貸して頂きます。<br>
			※ご利用には専用のサイトへアクセスして頂く必要があります。予めご了承下さい。<br>
			※スマートフォンにてサービスをご利用の際は別途パケット通信料金が発生致します。ご利用にあたっては、パケット通信料定額サービスへのご加入を強くおすすめします。<br>
			※カメラの台数には限りが御座います。繁忙期期間中のご利用は、最長で３日間とさせて頂きます。予めご了承下さい。<br>
			※カメラは別途440円（税込）頂きます（回数券ご利用の方は通常期は無料ですが、繁忙期は有料となりますのであらかじめご了承ください。）<br>
			※定期ご利用のお客様は無料とさせて頂きます。大反響の為、お早めのご予約をお願いします。
			<!--love_text3 -->
		</div>
		<!--safe_10-2-->
	</div>


<?php get_template_part('assets/inc/footer'); ?>