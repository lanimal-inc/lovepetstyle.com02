<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

<!-- ==========================================================================

	コンテンツ

=========================================================================== -->
<!--背景-->
<div class="title_box sec-title_box">
<!--パンくずリスト-->
<?php get_template_part('assets/inc/breadcrumb'); ?>
<!--フロートクリア用-->
<div class="clear"></div>
<!--アイコン-->
<div class="section-maintitleWrap">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_1_first_l.png" alt="初めてのお客様">
	<div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターが初めてのお客様へ</h1></div>
</div>
<!-- /title_box pc_only -->
</div>
<!-- ==========================================================================
	1.LOVE PETが選ばれる理由
=========================================================================== -->
<!--タイトル-->
<div class="first_2">
	<div class="section-header">
		<h2 class="section-title"><span class="section-title_small">東京23区で選ばれるペットシッター</span><br>LOVEPET（ラブペット）の<br class="sp">特徴</h2>
	</div>
	<!--キャッチコピー-->
	<!--写真-->
	<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p01_2.jpg" class="center-block" alt="家族の写真"></span>
	<div class="flow_a_text1">
		<!--文章-->
		<strong>有資格者によりペットのストレスが軽減し安心して外出できます。低料金・圧倒的なサービス内容！</strong><br>
		ペットシッターを一人でも多くの方にご利用され、身近な存在になれるように私達は、他店にはない<strong>『低料金・圧倒的なサービス内容』</strong>により有資格者が愛情込めてお世話します。厳しい研修過程を実施し、合格した有資格者のスタッフのみお世話に伺います。
					
		<p>&nbsp;</p>

					初めてご利用された飼い主様からは<strong>『感動の声』</strong>を多くの方から頂いております。ペットのストレスが軽減し、飼い主様がご帰宅された際には、愛するペットが元気な姿でお出迎えしてくれます。ご自宅を留守にする事が<strong>『不安から安心』</strong>に変わる事をお約束致します。<br>
		また、お散歩代行や長時間のお世話も大変お喜び頂いております。
					
		<p>&nbsp;</p>

					私共はお世話だけでなく<strong>『防災研修・動物看護』</strong>にも力を注ぎ、留守中の万が一にも徹底的に備え<strong>『安心・安全』</strong>をご提供します。<br>
		更に<strong>『飼い主様共用ファイル』</strong>により、お仕事でお忙しいお客様との連携・心の繋がり・安心感を大切にします。
		<p>&nbsp;</p>

					また<strong>『震災・停電になった際も、お電話が繋がる電話機』</strong>を使用しております。いかなる場合でも万全な体制により飼い主様にご安心いただけます。
		<p>&nbsp;</p>


					今後も皆様により一層ご満足いただけるよう、スタッフ一同努力邁進していきます。
		<p>&nbsp;</p>

					その他、<strong>『業界初のサービス・犬の出張トレーニング』</strong>など飼い主様とペットの架け橋になるよう全力で努めております。<br>
		又、多数の企業と提携をし、保護犬・保護猫の殺処分を無くす活動・ボランティア活動も積極的に行っております。
		<p>&nbsp;</p>

					この度はHPをご参照して頂きまして誠にありがとうございます。<br>
		ご質問等が御座いましたら、何なりとお申し付けください。<br>
		<!--/flow_a_text1 -->
	</div>
	<!--連絡先 -->
	<div class="order_contact_2">
		<p class="order_contact_text3_2">フリーダイヤル</p>
		<p class="order_contact_text2_2 tel_link mobile_only">☎︎&nbsp;0120-984-125</p>
		<br>
		<p class="order_contact_text2_2 pc_only">☎︎&nbsp;0120-984-125</p>
		<br>
		<p class="order_contact_text3_2">メールアドレス</p>
		<p class="order_contact_text2_2 tel_link mobile_only">info@lovepetstyle.jp</p>
		<p class="order_contact_text2_2 pc_only">info@lovepetstyle.jp</p>
		<!--order_contact -->
	</div>
<!-- /first_1 -->
</div>
<!-- ==========================================================================
	2.LOVEPET会員のお得な特典サービス
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_2"></div>
<div class="first_3">
<!--タイトル-->
<div class="section-header">
	<h2 class="section-title"><span class="section-title_small">ペットシッターLOVEPET（ラブペット）の</span><br>会員様特典</h2>
</div>

<!--景品--><!--回数券-->
<div class="first_2_text1">
<h3><span class="first_2_midashi1">【回数券】</span></h3>
<br>
<div class="first_2_text2">
当店の会員様はお得な回数券がご利用できます。優先予約、キャンセル料・繁忙期割増し料金なし、24時間遠隔操作カメラなど、様々な特典がつき大変お得にご利用できます。
詳しくは<span class="page_link"><a href="<?php echo home_url('/menu/'); ?>#link_menu_10" target="_blank">&nbsp;コチラ&nbsp;</a></span>をご覧ください。<br>
※但し、繁忙期期間中のみ24時間遠隔操作カメラは有料とさせて頂きます。
			</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_kaisuu.jpg" class="center-block" alt="LOVE PET回数券">
<!--フロートクリア用-->
<div class="clear"></div>
<!--first_2_text1 -->
</div>
<!-- /first_2 -->
</div>
<!-- ==========================================================================
	8.LOVEPETに任せたらここが安心その1
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_10"></div>
<div class="first_4">
<div class="section-header">
	<h2 class="section-title"><span class="section-title_small">安心して任せられるペットシッター</span><br>LOVEPET（ラブペット）のポイント</h2>
</div>
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント①</p>
	<h3 class="flow_a_midashi1"><strong>衛生管理を徹底した<br class="sp">清潔なシッティング</strong></h3>
</div>
<!--写真-->
<span class="flow_b_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p11.jpg" alt="除菌消臭水"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p11-2.png"
				alt="衛生管理"></span>
<div class="first_2_text1">シッター全員で衛生面の徹底を行い、清潔な状態でシッティングに入るようにしております。<br>
シッティングに入る際には、Pulizia（プリジア）という除菌消臭水を使用し、シッターの手や衣服の除菌消臭を行い、他所のペットの臭いを持ち込まない様に致します。Pulizia（プリジア）は強力な消臭効果があり、ペットの臭いや排泄物などの臭いなども瞬時に取り去ります。又、細菌、ウィルスのタンパク源を直接分解消滅させるので、ほとんどの菌・ウィルスに対応しておりますので、安心です。
			
<p>&nbsp;</p>

			除菌消臭スプレー以外では、シッター専用のスリッパを持参し、お客様のご自宅の床を素足や靴下のままで歩かない様に徹底致します。
<p>&nbsp;</p>

			また、当店ではお客様のご自宅へ入室の際、衛生管理の徹底に努めるべく、各スタッフの持ち物等（リュック・カバンなど）を置く際、下に引く大判ハンカチの導入いたしました。<br>
各スタッフの大判ハンカチは各入室前、入室後に除菌をしております。衛生面の【安心・安全】の強化を実施し、今後もより多くのお客様にご満足いただけるよう、尽力いたします。
			
<p>&nbsp;</p>

			お世話当日、担当シッターには洗面所における手洗いの許可をお願い致します。
			<!--first_2_text1 -->
</div>
<!-- /first_8 -->
</div>
<!-- ==========================================================================
	3.LOVEPETに任せたらここが安心その2
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_3"></div>
<div class="first_5">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント②</p>
	<h3 class="flow_a_midashi1"><strong>震災対策システムで<br class="sp">万が一でも安心</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p13.jpg" class="center-block" alt="震災グッズ"></span>
<div class="first_2_text1">
業界初！東日本大震災の教訓を元に、シッティング中に万が一首都圏で震度5強以上の大地震が起きてしまい、且つ交通機関が混乱した場合の対策として、様々な状況に対応ができる様、震災グッズを常備し、23区内での避難場所の確保、ペットの保護、掲示板等でお客様と随時連絡が取れる様、幅広く飼い主様とペットをサポートしていきます。
			
<p>&nbsp;</p>

			いつ起こるか分からない大地震に備え、STAFFは全員、定期的に防災センター等で避難訓練等の研修を行っております。どの様な事態でも冷静に・落ち着いて行動ができる様、教育しております。
<p>&nbsp;</p>

			幅広く飼い主様とペットをサポートし万全な体制で愛する大切な家族をお守りします。
<p>&nbsp;</p>

			ペットシッター業界で、震災対策システムを導入しているのはLOVE PETだけです。詳しくは<span class="page_link"><a
					href="<?php echo home_url('/safe/'); ?>" target="_blank">&nbsp;コチラ&nbsp;</a></span>へ
			<!--first_2_text1 -->
</div>
<!-- /first_3 -->
</div>
<!-- ==========================================================================
	4.LOVEPETに任せたらここが安心その3
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_4"></div>
<div class="first_6">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント③</p>
	<h3 class="flow_a_midashi1"><strong>24時間遠隔カメラによる<br class="sp">見守りが可能</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p13_2.jpg" class="center-block" alt="防犯カメラの写真"></span>
<div class="first_2_text1">
業界初！外出の際、家の中でお留守番をしている大切な家族（ペット）が、どの様にして過ごしているのか？ペットの様子だけではなく、お留守番での健康状態、防犯という部分でも、こちらの24時間遠隔操作カメラは多くの方にご利用を頂き、大反響となっております。<br>
インターネット環境を使用するカメラは、※ウイルスセキュリティ上の問題、お客様のパソコンのプライバシー問題があります<strong>※ご自宅にインターネット環境がなくても、パソコンを開く事なく、コンセントだけでご利用できる安心・安全なカメラを使用しております。</strong>
<p>&nbsp;</p>

			設置するにあたり難しい設定がなく設置したい場所、ペットの行動範囲を予測した場所などに、簡単に設置できお客様がパスワードを決めて頂くセキュリティ上の安心・安全のカメラを使用しているのはLOVE PETだけです！<br>
国内はもちろん海外からも24時間で好きな時に、24時間遠隔操作ができいつでもご覧になれます。
<p>&nbsp;</p>

			詳しいカメラの説明は<span class="page_link"><a href="<?php echo home_url('/safe/'); ?>#link_camera" target="_blank">&nbsp;コチラ&nbsp;</a></span>へ
			<!--first_2_text1 -->
</div>
<!-- /first_4 -->
</div>

<!-- ==========================================================================
	5.LOVEPETに任せたらここが安心その6
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_7"></div>
<div class="first_5">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント④</p>
	<h3 class="flow_a_midashi1"><strong>LINEでのお世話報告で<br class="sp">状況をすぐ確認！</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p05_2.jpg" class="center-block" alt="LINEの写真"></span>
<div class="first_2_text1">業界初としてLINEでのお世話報告書を開始し、飼い主様の安心と安全を強化します。各スタッフに1人1台専用スマホからLINEでお世話内容、ペットのお留守番写真、動画など
			を迅速・簡単にお送りできすぐに確認して頂けます。メール報告書と違い【お世話内容報告書メールが届かない？海外へのメール時間送信誤差の問題】が解決！<br>
飼い主様もご安心してお世話報告書が見る事が可能です。<br>
飼い主様も担当スタッフも、既読表示によりご確認している事が分かり安心です。<br>
※従来のメール報告書もお送りしておりますので、LINE報告書のご希望でない場合はお気軽にご相談ください。
			<!--first_2_text1 -->
</div>
<!-- /first_5 -->
</div>
<!-- ==========================================================================
	5.LOVEPETに任せたらここが安心その7
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_7"></div>
<div class="first_8">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント⑤</p>
	<h3 class="flow_a_midashi1"><strong>24時間シッティング・<br class="sp">宿泊コースを<br class="pc">導入し、<br class="sp">長時間のお世話にも対応</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p06.jpg" class="center-block" alt="シッティングの写真"></span>
<div class="first_2_text1">業界初！ショートコース40分や1時間のスタンダードなコースに加え、24時間のお世話や夜の宿泊コースなど幅広い時間帯でお客様のニーズに応えていきます。特に<span
				style="color:#603f26; font-weight:bold;">業界初</span>の24時間シッティングや宿泊コースに関しては、大切なペットを長時間1人でお留守番させるのは不安なお客様、寂しがり屋のペット、パピー、病気を抱えているペットの側にプロのシッターが常に一緒にいる事ができるので、安心して外出できます。少しの異変でも直ぐに気づく事ができ、お客様と常に連絡を取り合う事が出来ます。
			
<p>&nbsp;</p>

			大変ご好評を頂いているサービスです！
<p>&nbsp;</p>

			詳しいコースの説明等は<span class="page_link"><a href="<?php echo home_url('/job/'); ?>#link_camera" target="_blank">&nbsp;コチラ&nbsp;</a></span>へ
			<!--first_2_text1 -->
</div>
<!-- /first_5 -->
</div>

<!-- ==========================================================================
	7.LOVEPETに任せたらここが安心その9
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_9"></div>
<div class="first_11">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント⑥</p>
	<h3 class="flow_a_midashi1"><strong>男性シッターが在籍<br class="sp">しているからこそ<br class="pc">得られる、<br class="sp">万が一の時の安心・安全</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p07.jpg" class="center-block" alt="GPSの写真"></span>
<div class="first_2_text1">
			男性スタッフも在籍しております。男性スタッフだからこそできる手厚いサポートで、女性シッターとは違った「安心と安全」を提供していきます。 
<p>&nbsp;</p>
<h4><span class="first_2_midashi1">■大型犬等の引っ張りの強いワンちゃんのお散歩</span></h4>
<br>
引っ張る力が強いワンちゃんで、不安だったお客様は、安心してお任せ下さい。
<p>&nbsp;</p>
<h4><span class="first_2_midashi1">■2頭、3頭の多頭飼いのお散歩も対応可能です</span></h4>
<br>
男性シッターが在籍していますので、お散歩を任せるのが不安だったお客様も、安心してお任せ頂けます。
<p>&nbsp;</p>
<h4><span class="first_2_midashi1">■抱きかかえる状況に瞬時に対応出来ます</span></h4>
<br>
マンション等の玄関先からエレベーターの中、エントランスまで抱きかかえます。大型犬でも対応可能です。
			<!--first_2_text1 -->
</div>
<!-- /first_7 -->
</div>
<!-- ==========================================================================
	9.LOVEPETに任せたらここが安心その9
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_11"></div>
<div class="first_12">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント⑦</p>
	<h3 class="flow_a_midashi1"><strong>お客様の大切な鍵は<br class="sp">鍵の保管庫にて<br>厳重管理</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p12.png" class="center-block" alt="鍵の保管庫"></span>
<div class="first_2_text1">
			鍵のお取り扱いにつきましてシッター全員に厳しい研修制度・お世話に向かう際のお取り扱いに関しまして万全な体制・配慮を期しております。更に、定期的なお客様には鍵の保管庫により厳重に事務所にて保管・管理しております。お客様の目に見えない部分でも徹底した管理を行い、常にお客様の立場に立ち、安心してペットシッターをご利用して頂ける様、努力して参ります。
			
<p>&nbsp;</p>

			また ペットシッターが訪問の際、鍵をお預かりする「鍵預り証」及び、返却の際の「鍵返却証」の手交の他、社員証の提示、在籍シッター全員に身元保証人を立てております。<br>
どうぞご安心してお預けくださませ。
			<!--first_2_text1 -->
</div>
<!-- /first_9 -->
</div>

<!-- ==========================================================================
	10.LOVEPETに任せたらここが安心その10
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_13"></div>
<div class="first_5">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント⑧</p>
	<h3 class="flow_a_midashi1"><strong>ダブルリードを採用し<br>安心安全のお散歩</strong></h3>
</div>
<!--写真-->
<span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p14.jpg" class="center-block" alt="ダブルリードの写真"></span>
<!--文章-->
<div class="first_2_text1">ダブルリードを採用し、お客様のリードと別にシッターが持参する肩掛けのリードも装着して安全にお散歩を致します。<br>
お散歩の時の突然の走り出し等で手からリードが外れる心配もありません。<br>
安心・安全でお散歩ができるよう配慮しております。<br>
当店はお客様の大切な家族を一番に考えお守りします。
			<br>
</div>
<!--フロートクリア用-->
<div class="clear"></div>
<!-- /first_10 -->
</div>
<!-- ==========================================================================
	11.安心と信頼をご提供する10のお約束
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_13"></div>
<div class="first_8">
<!--タイトル-->
<div class="section-header_sav">
	<p class="section-title"><span class="section-title_small">LOVEPET（ラブペット）にペットのお世話をお任せください</span><br>安心ポイント⑨</p>
	<h3 class="flow_a_midashi1">お客様に「安心と信頼」を<br class="sp">ご提供する為<br>「10つのお約束」を遵守</h3>
</div>
<div class="first_2_text1">1.シッターは動物関係の資格を有するハイクラスなシッターが愛情を込めてお世話させて頂き、ダイレクトにお客様へご報告し、お客様とペットの架け橋になる事をお約束致します。
			
<p>&nbsp;</p>

			2.お客様から依頼されるペット全般の知識や取り扱いの全てに関してのスキルアップに努力し、お客様の抱えるペットの疑問等にもお答え致します。
<p>&nbsp;</p>

			3.STAFF全員がペットシッターの保険制度を含むペットシッター補償に加入し、万全を期して大切なペットのお世話をしております。
<p>&nbsp;</p>

			4.個人情報保護法に基づきお客様のプライバシー情報に対する守秘義務や顧客情報等を厳重に管理致します。
<p>&nbsp;</p>

			5.お客様のご自宅の鍵の管理は、鍵専用の金庫を用意し、厳重に管理・保管をさせて頂きます。
<p>&nbsp;</p>

			6.お世話に入るシッターは社員証の提示を行い、身元開示を致します。
			
<p>&nbsp;</p>

			7.ご自宅に伺う際に、常にスリッパや消毒・殺菌スプレーを携帯し、衛生管理の徹底を行ないペットの病気感染を防ぎ、清潔感のあるシッティングを行います。
<p>&nbsp;</p>

			8.繁忙期や予約状況により担当者が変更の場合は、前任者からの徹底したお世話確認、引継ぎをいたします。ご要望の場合、顔合わせをさせて頂きます。
			
<p>&nbsp;</p>

			9.急なご予定や、女性シッターご希望でも、会員のお客様はご安心してご連絡下さい。迅速に対応をさせて頂きます。
<p>&nbsp;</p>

			10.全てのシッターに防災訓練や、動物看護士の監修の下、応急処置の対処法等の研修も積極的に行います。
			<!--first_2_text1 -->
</div>
<!-- /first_11 -->
</div>
<!-- ==========================================================================
	12.営業エリア
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_first_14"></div>
<div class="first_5">
<!--タイトル-->
<div class="section-header">
	<h2 class="section-title"><span class="section-title_small">東京23区の</span><br>ペットシッター対応エリア</h2>
</div>
<!--キャッチコピー-->
<h3 class="flow_a_midashi1">東京23区</h3>
<br>
<!--写真-->
<span class="photo_80"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1_first_p09.png" class="center-block" alt="営業範囲"></span>
<div class="first_2_text1">
			※東京23区外は別途出張費1,100円頂きます。<br>
※半蔵門駅からご自宅まで40分以上（Googlemapにて、平均ダイヤ平日12時の時間での検索）のお時間を要する場合、別途770円の出張費を頂きます。<br>
※最寄り駅からお客様のご自宅まで徒歩11分以上の方は最寄りのバス停料金を基準とさせて頂きます。尚、バス停が近くに無い場合は出張費として550円頂きます。<br>
</div>
<!-- /first_12 -->
</div>

<?php get_template_part('assets/inc/footer'); ?>