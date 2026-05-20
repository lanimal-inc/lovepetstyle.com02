<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

<!-- ==========================================================================

	コンテンツ

=========================================================================== -->
	<div class="title_box">
		<!--パンくずリスト-->
		<?php get_template_part('assets/inc/breadcrumb'); ?>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--アイコン-->
		<div class="section-maintitleWrap">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_2_frow_l.png" class="center-block" alt="ご利用の流れ">
			<div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッターご利用の流れ</h1></div>
		</div>
	</div>
	<!-- ==========================================================================
	1.お申込
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_flow_1"></div>
	<div class="flow_a flow_w">
		<!--タイトル-->
		<div class="section-header">
			<div class="section-title"><span class="section-title_small">ご利用の流れその1</span><br><h2>ペットシッターの<br class="sp">お申し込み方法</h2></div>
		</div>
		<!--キャッチコピー-->
		<p class="flow_a_midashi1"><strong>初めてご利用になるお客様へ</strong></p><br>
		<div class="flow_a_text1">
			<!--文章-->
			<p class="flow_a_text1_l">
				具体的な料金のお見積もりやペットシッターの内容等、「直接説明を聞いた上で安心してペットシッターの依頼を決めたい！」というお客様の為に、お客様のご自宅、ご都合の宜しい場所、時間等をお電話やメール相談にて、有資格者によるペットシッターの説明を行っています。<br>通常のご利用の場合は、お出掛けの日程が決まり次第、ご連絡頂けるとスムーズに日程が決まります。又、繁忙期【GW・お盆・シルバーウィーク・年末年始】は大変な混雑が予想されますので、お早めにお申し込みください。
			</p>
			<p class="flow_a_text1_r">
				その他、急な出張やご予定によるお世話依頼は、STAFFまでご相談下さい。<br><strong>勿論、説明を聞いた上でご検討して頂ければ幸いです。その際のシステム説明・お見積もりを無料にてさせて頂きます。</strong><br>大切な家族の事なので皆様に安心してご利用頂く為に、お気軽にご連絡、ご相談ください。<br><strong>LOVEPETは皆様の家族をお守りします。</strong>
			</p><br>
			<!--flow_a_text1 -->
		</div>
		<!--本文1のフロートクリア用-->
		<div class="clear"></div>
		<!--リンクバナー-->
		<p class="flow_a_rezave">
			<!-- PC用 -->
			<span class="pc_only"><a href="<?php echo home_url('/order/'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_reserve_off.png"
						alt="予約ボタン"></a></span><br>
			<!-- モバイル用 -->
			<span class="mobile_only"><a href="<?php echo home_url('/order/'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/top_p_reserve_mobile.png"
						alt="予約ボタン"></a></span><br>
		</p>
		<!--文章-->
		<p class="flow_a_text2">折り返しお電話（TEL03-5422-9962）させて頂き、打ち合わせの日程を決定させて頂きます。<br>メールでのお問い合わせに関してまして当日に必ずご返信をさせて頂きます。
		</p>
		<!--flow_a -->
	</div>
	<!-- ==========================================================================
	2.ご説明 ・3.ご契約
=========================================================================== -->
<!-- ページリンク用 -->
<div id="link_flow_2"></div>
<div class="flow_b">
		<!--タイトル-->
		<div class="section-header">
			<div class="section-title"><span class="section-title_small">ご利用の流れその2</span><br><h2>事前カウンセリング・ペットのお世話内容のご確認</h2></div>
		</div>
		<!--文章-->
		<p class="flow_b_text1">
			ご利用日の一週間前までに、お打合せ担当者がお客様宅に伺いしまして、システムや、サービスについてのご説明を致します。ご不明な点は納得いただけるまでご質問ください。ご説明自体の料金は無料となりますが、お伺いをするにあたり、半蔵門駅から最寄り駅、もしくはバス停までの交通費をご請求させていただきます。
		</p><br>

		<!--写真-->
		<span class="flow_b_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_b_photo1.jpg" style="margin: 0 10 0 0;" alt="名刺交換"><img
				src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_b_photo2.jpg" alt="シッター説明"></span>
</div>

<div class="flow_c flow_w">
	<!-- ページリンク用 -->
	<div id="link_flow_3"></div>
	<!--タイトル-->
	<div class="section-header">
		<div class="section-title"><span class="section-title_small">ご利用の流れその3</span><br><h2>ご契約</h2></div>
	</div>
	<!--リンクバナー-->
	<!-- PC用 -->
	<span class="flow_a_btn_plan pc_only"><a href="<?php echo home_url('/menu/'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_p01_off.png"
				alt="予約ボタン"></a></span><br>
	<!-- モバイル用 -->
	<span class="flow_a_btn_plan mobile_only"><a href="<?php echo home_url('/menu/'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_p01.png"
				alt="予約ボタン"></a></span><br>
	<!--flow_b -->
</div>
	<!-- ==========================================================================
	4. 鍵のお預かり
=========================================================================== -->

<div class="flow_cnone">
	<!-- ページリンク用 -->
	<div id="link_flow_4"></div>
		<!--タイトル-->
		<div class="section-header">
			<div class="section-title"><span class="section-title_small">ご利用の流れその4</span><br><h2>鍵のお預かりについて</h2></div>
		</div>
		<div class="flow_c_auto">
			<!--写真-->
			<span class="flow_c_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_c_photo.jpg" class="center-block" alt="鍵のお預かり"></span>
			<div class="flow_c_inner_1">
				<!--見出し-->
				<h3 class="flow_c_midashi1">鍵のお受け渡し方法について</h3>
				<!--項目-->
				<table class="job_koumoku">
					<tr class="job_koumoku_2">
						<td colspan="3">ポスト・宅配ボックス</td>
						<td colspan="3">コンシェルジュ</td>
					</tr>
					<tr class="job_koumoku_1">
						<td colspan="2">郵送<sup>※1</sup></td>
						<td colspan="2">ご指定の場所<sup>※2</sup></td>
						<td colspan="2">鍵の保管庫<sup>※3</sup></td>
					</tr>
				</table>
				<!--注釈-->
				<p class="flow_c_text1"><sup>※1</sup>【レターパックライト・スマートレター】は、お世話の5日前までにお願いします。<br>
					<sup>※2</sup>&nbsp;スタッフが鍵をご指定の場所までお受け取りに伺う際は、別途3,000円頂きます。<br>
					<sup>※3</sup>&nbsp;定期的なお世話の場合は厳重に事務所保管させて頂きます。<br>
					※事務所へのお持ち込みは受付時間　平日午前9時～午後18時まで（土日祝はご相談下さい。）とさせて頂きます。
				</p>
				<!--/flow _c_inner_1-->
			</div>
			<!--/flow_c_auto-->
		</div>

		<!-- グレーゾーン2段1組 -->
		<div class="glay_two_1">
			<div>
				<h3 class="glay_title_1">室内飼育・室外飼育でのお世話の違い</h3>
				<ul>
					<li>
						<p class="glay_midashi_1">室内でのお世話</p>
						<p class="glay_text_1">
							事前にお客様宅の鍵をお預かりし、その際に「鍵の預かり証」を発行致します。事前にお世話する部屋を決めている場合には、そのお部屋以外には入室致しませんのでご安心ください。</p>
					</li>
					<li>
						<p class="glay_midashi_1">室外のみ</p>
						<p class="glay_text_1">お客様宅の鍵はお預かりせずに外でのお世話となります。ペットシッター内容は室内の場合と同じです。</p>
					</li>
				</ul>
				<!--フロートクリア用-->
				<div class="clear"></div>
			</div>
			<!--グレーゾーン2段1組 -->
		</div>
		<!--flow_c -->
</div>
	<!-- ==========================================================================
	5. カルテの作成
=========================================================================== -->
<div class="flow_c">
<!-- ページリンク用 -->
	<div id="link_flow_5"></div>
	<div class="flow_d">
		<!--タイトル-->
		<div class="section-header">
			<div class="section-title"><span class="section-title_small">ご利用の流れその5</span><br><h2>ペットカルテの作成について</h2></div>
		</div>
		<!--写真-->
		<span class="flow_d_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_d_photo1.jpg" style="margin: 0 10 0 0;" alt="カウンセリング1"><img
				src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_d_photo2.jpg" alt="カウンセリング2"></span>
		<!--文章-->
		<p class="flow_d_text1">
			ペットの年齢や健康状態、日頃の生活の様子、フードの保管場所や量、おトイレの掃除、お散歩をする場合は、お散歩ルートの確認など、必要事項を聞かせて頂いた上でペットのカルテを作成致します。このカルテを元に当日のお世話を行いますので、ご協力を宜しくお願い致します。
		</p><br>

		<!-- グレーゾーン1段1組 -->
		<div class="glay_one_1">
			<div>
				<h3 class="glay_title_2">2回目以降ご利用のお客様について（特に前回と同様の内容であれば省略させて頂きます。）</h3>
				<ul>
					<li>
						<p class="glay_text_1">■郵便物の受け取りやお花への水やり等、必要がございましたらご遠慮無くお申し付け下さい。<br>
							■初めのカルテとお世話内容の変更等が御座いましたらメールにてご遠慮なくお申し付け下さい。<br>
							■引越し等でカルテを変更する場合の際は、別途4,400円（税込）+往復交通費を頂きます。<br>
							■お顔合わせが必要な場合は別途3,300円（税込）+往復交通費を頂きます。</p>
					</li>
				</ul>
			</div>
			<!-- グレーゾーン1段1組 -->
		</div>
		<!--flow_d -->
	</div>
</div>
	<!-- ==========================================================================
	6. シッター当日・7. シッター終了後
=========================================================================== -->
	<!-- ページリンク用 -->
<div class="flow_cnone">
	<div id="link_flow_6"></div>
	<!--タイトル-->
	<div class="section-header">
		<div class="section-title"><span class="section-title_small">ご利用の流れその6</span><br><h2>ペットシッター当日の流れ</h2></div>
	</div>
	<div class="flow_e_box">
			<!--写真-->
			<span class="flow_e_photo1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2_frow_e_photo.jpg" class="center-block" alt="シッター風景"></span>
			<!--テキスト-->
			<p class="flow_e_text3">ご指定の時間にペットシッターがお客様宅にお伺いし心を込めてペットのお世話をさせて頂きます。</p>
			<!--/flow_e_box-->
		<!--フロートクリア用-->
		<div class="clear"></div>
	</div>
</div>
	
<div class="flow_c flow_w">
		<!-- ページリンク用 -->
		<div id="link_flow_7"></div>
		<!--タイトル-->
		<div class="section-header">
			<div class="section-title"><span class="section-title_small">ご利用の流れその7</span><br><h2>ペットシッターの<br class="sp">シッター終了後</h2></div>
		</div>
		<div class="flow_e_box">
			<!--文章-->
			<p class="flow_e_text_4">■飼い主様のご不安を少しでも取り除けるよう、ペットの様子やお世話の内容を事細かく<span
					style="color:#603f26; font-weight:bold;">メール（写真付き）かLINE、手書きの報告書</span>にて報告させて頂きます。
				<br>※弊社のアドレス<strong>【info@lovepetstyle.jp】</strong>またはお打合せの際に担当シッターのアドレスのご登録をお願い致します。<br>■ご希望の方には携帯やパソコンのメール宛にペットシッター中の画像や動画などを添付し、
				お送りもしますので、お気軽にお申し付けください。<br>■室内でのお世話の場合は、電気・戸締まりを再確認し鍵をかけて終了となります。 <br><span
					style="color:#603f26; font-weight:bold;">（鍵をかけた際は、施錠されてる事を二度確認をし退出させて頂きます）</span></p>
			<div class="flow_e_inner_1">
				<!--見出し-->
				<h3 class="flow_c_midashi1 ">鍵のご返却方法について</h3>
				<!--項目-->
				<table class="frow_e_table">
					<tr>
						<td>ポスト・宅配ボックス<sup>※1</sup></td>
						<td>コンシェルジュ</td>
					</tr>
					<tr>
						<td>ご指定の場所<sup>※2</sup></td>
						<td>郵送</td>
					</tr>
				</table>
				<!--注釈-->

				<p class="flow_c_text1"><sup>※1</sup>レターパックライト（事務手数料800円頂きます。）<br>
					<sup>※2</sup>&nbsp;スタッフが鍵をご指定の場所までご返却に伺う際は、別途3,000円頂きます。<br>
					※事務所での受け取りは受付時間　平日午前9時～午後18時まで（土日祝はご相談下さい。）とさせて頂きます。
				</p>
				<!--/flow _e_inner_1-->
			</div>
			<!--/flow_e_box-->
		</div>
		<!--flow_e -->
	</div>
</div>
	<div class="flow_f">
		<!-- グレーゾーン 2段2組 -->
		<div class="glay_two_2">
			<div>
				<ul>
					<li>
						<h3 class="glay_title_1">ペットシッターサービスについて</h3>
						<p class="glay_text_1">お留守番中のペットの事は、何かと気になりませんか？
							「ペットシッター当日に連絡して欲しい」などのご希望があれば、携帯電話、LINE電話より、ご連絡してご報告することも可能です。<br>
							また、ペットのその時の画像や動画などもメール、LINEに添付して送ることもできます。その他ご希望などありましたら、お気軽にご相談ください。</p>
					</li>
					<li>
						<h3 class="glay_title_1">ペットシッターをご利用になるお客様へのお願い</h3>
						<p class="glay_text_1">■ごはん・リード・おもちゃ・うんちの処理袋・ブラシ等はお客様のほうでご用意下さい。<br>
							■おやつをあげる場合は、あらかじめご用意下さい。<br>
							■ペットシッターはお客様の大切なペットをお世話しています。安全には万全を期しておりますが、万が一の場合のためにお客様と必ず連絡がとれるようご協力下さい。<br>
							■ペットにとって危険な物は置かないで下さい。</p>
					</li>
				</ul>
				<!--フロートクリア用-->
				<div class="clear"></div>
			</div>
			<!-- グレーゾーン 2段2組 -->
		</div>
		<!--flow_f-->
	</div>

<?php get_template_part('assets/inc/footer'); ?>