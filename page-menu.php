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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_4_menu_l.png" class="center-block" alt="料金プラン">
			<div class="section-maintitle"><h1 class="section-maintitle_title">ペットシッター料金プラン</h1></div>
		</div>
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	1.シッター通常コース（1日1時間）
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_1"></div>
	<div class="menu_box_01">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッター通常コース<br><span class="section-title_small">（1回60分）</span></h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th class="1_pet">ペットの種類</th>
						<th class="1_info">基本料金</th>
						<th class="1_info">追加１匹</th>
					</tr>
					<tr>
						<th class="1_pet">犬・猫・小動物</th>
						<td>¥5,720</td>
						<td>¥0</td>
					</tr>
					<tr>
						<th colspan="3" class="1_pet">
							※多頭・種類問わず同一料金となります。<br>
							※一度にお世話可能な匹数となります。</th>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">■延長30分･･･¥2,860<br>
				■シッター時間は１回１時間のお世話が基本となります。<br>

			</p>
			<!--文章（小）-->
			<p class="menu_text_2">※営業時間外は1,650円とさせて頂きます。<br>
				※料金は税込み価格となります。</p><br>
			<!--job_box_inner -->
		</div>

		<!-- シッティング料金の一例　グレーゾーン1段1組 -->
		<div class="glay_one_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">大型犬1匹と小型犬2匹の合計3匹のお世話を</p>
						<p class="glay_text_2">5回ご利用頂いた場合...</p>
						<p class="glay_midashi_2">合計 ¥5,720×5回＝¥28,600</p>
					</li>
				</ul>
			</div>
			<!-- グレーゾーン1段1組 -->
		</div>
		<!--空白行-->
		<p style="height:50px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、消費税、交通費、初回ご利用のお客様は初回登録料が別途かかります。詳しくは<span class="page_link"><a
					href="<?php echo home_url('/menu/'); ?>?id=link_menu_9" target="_blank">「共通料金について」</a></span>をご覧下さい。</p><br>
		<!--menu_box_01-->
	</div>
	<!-- ==========================================================================
	2.シッターショートコース（1回40分）
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_2"></div>
	<div class="menu_box_02">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッターショートコース<br><span class="section-title_small">（1回40分）</span></h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th>ペットの種類</th>
						<th>基本料金</th>
						<th>追加１匹</th>
					</tr>
					<tr>
						<th>犬・猫・小動物</th>
						<td>¥4,400</td>
						<td>¥0</td>

					</tr>
					<tr>
						<th colspan="3">※多頭・種類問わず同一料金となります。<br>
							※犬はお散歩なしのコースとなります。<br>
							※一度にお世話可能な匹数となります。</th>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">
				<!-- ■延長15分･･･¥1,100<br> -->
				■お散歩の必要が無いワンちゃんや猫ちゃん、小動物向けのコースとなります。1回40分のシッティングが基本となります。時間が余りましたら、遊びやブラッシング等を行います。<br>
				<!--文章（小）-->
			</p>
			<p class="menu_text_2">※営業時間外は1,650円とさせて頂きます。<br>
				※料金は税込み価格となります。</p><br>
			<!--job_box_inner -->
		</div>
		<!-- シッティング料金の一例　グレーゾーン2段1組 -->
		<div class="glay_two_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">小型犬2匹と猫1匹のお世話を</p>
						<p class="glay_text_2">3回ご利用頂いた場合...</p>
						<p class="glay_midashi_2">合計 ￥4,400×3回＝￥13,200</p>
					</li>
					<li>
						<p class="glay_text_2">猫3匹のお世話を</p>
						<p class="glay_text_2">2回ご利用頂いた場合...</p>
						<p class="glay_midashi_2">合計 ￥4,400×2回＝￥8,800</p>
					</li>
				</ul>
				<!--フロートクリア用-->
				<div class="clear"></div>
			</div>

			<!-- シッティング料金の一例　グレーゾーン2段1組 -->
		</div>
		<!--空白行-->
		<p style="height:50px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、消費税、交通費、初回ご利用のお客様は初回登録料が別途かかります。詳しくは<span class="page_link"><a
					href="<?php echo home_url('/menu/'); ?>?id=link_menu_9" target="_blank">「共通料金について」</a></span>をご覧下さい。</p><br>
		<!--menu_box_02-->
	</div>

	<!-- ==========================================================================
	3.お散歩代行通常コース（1回40分）
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_3"></div>
	<div class="menu_box_01">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">犬のお散歩代行通常コース<br><span class="section-title_small">（1回40分）</span></h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th>ペットの種類</th>
						<th>基本料金</th>
						<th>追加１匹</th>
					</tr>
					<tr>
						<th>犬</th>
						<td>¥4,950</td>
						<td>¥0</td>
					</tr>
					<tr>
						<th colspan="3">※多頭・種類問わず同一料金となります。<br>
							※一度にお散歩可能な匹数となります。</th>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">
				<!-- ■延長15分･･･¥1,100<br> -->
				■大型犬の場合は１匹ずつの散歩となります。あらかじめご了承下さい。<br>
				■お客様のいつものお散歩コース、又はご希望により、公園等でワンちゃんとのスキンシップを行います。<br>
			</p>
			<!--文章（小）-->
			<p class="menu_text_2">※料金は税込み価格となります。</p><br>
			<!--job_box_inner -->
		</div>
		<!-- シッティング料金の一例　グレーゾーン2段1組 -->
		<div class="glay_one_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">中型犬2匹のお散歩を3回ご利用頂いた場合...</p>
						<p class="glay_midashi_2">合計 ￥4,950×3回＝￥14,850</p>
					</li>
				</ul>
			</div>
			<!-- シッティング料金の一例　グレーゾーン2段1組 -->
		</div>
		<!--空白行-->
		<p style="height:20px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、消費税、交通費、初回ご利用のお客様は初回登録料が別途かかります。詳しくは<span class="page_link"><a
					href="<?php echo home_url('/menu/'); ?>?id=link_menu_9" target="_blank">「共通料金について」</a></span>をご覧下さい。</p><br>
		<!--menu_box_01-->
	</div>

	<!-- ==========================================================================
	4.24時間シッティングコース
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_4"></div>
	<div class="menu_box_03">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">24時間ペットシッティングコース</h2>
		</div>
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th>24時間（1匹）</th>
						<td>¥48,000</td>
					</tr>
					<tr>
						<th>追加1匹</th>
						<td>¥3,000</td>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">●24時間、LOVE PETのハイクラスなペットシッターがお客様の大切なペットを24時間お守り致します。<br>
				●なるべく同じシッターが在宅するように致しますが、スケジュールの都合上、違うシッターが代わりに入る場合がありますので、予め御了承下さい。<br>
				●交通費は無料サービス致します。</p>
			<!--文章（小）-->
			<p class="menu_text_2">※料金は税抜き価格となります。</p><br>
			<!--job_box_inner -->
		</div>
		<!-- シッティング料金の一例　グレーゾーン1段1組 -->
		<div class="glay_one_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">大型犬1匹で24時間コースをご利用後、</p>
						<p class="glay_text_2">次の日に1回シッティングした場合...</p>
						<p class="glay_text_2">24時間コース：￥48,000+犬（60分）：￥

							3,700</p>
						<p class="glay_midashi_2">合計 ￥48,000+￥3,700＝￥51,700</p>
					</li>
				</ul>
			</div>
			<!-- グレーゾーン1段1組 -->
		</div>
		<!--空白行-->
		<p style="height:20px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、消費税、初回ご利用のお客様は初回登録料として¥4,400加算させて頂きます。</p><br>
		<!--menu_box_03-->
	</div>

	<!-- ==========================================================================
	5.宿泊コース
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_5"></div>
	<div class="menu_box_01">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッター宿泊コース</h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th>1泊</th>
						<td>¥33,000</td>
					</tr>
					<tr>
						<th>追加1匹</th>
						<td>¥5,500</td>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">●宿泊コースの時間はPM 9：00～AM 9：00までとさせて頂きます。<br>
				●交通費は無料サービス致します。</p>
			<!--文章（小）-->
			<p class="menu_text_2">※料金は税抜き価格となります。</p><br>
			<!--job_box_inner -->
		</div>
		<!-- シッティング料金の一例　グレーゾーン1段1組 -->
		<div class="glay_one_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">小型犬2匹で宿泊コースを1泊ご利用後、</p>
						<p class="glay_text_2">次の日に1回シッティングした場合…</p>
						<p class="glay_text_2">宿泊コース：￥33,000+犬（60分）：￥5,500</p>
						<p class="glay_midashi_2">合計 ￥33,000+￥5,500＝￥38,500</p>
					</li>
				</ul>
			</div>
			<!-- グレーゾーン1段1組 -->
		</div>
		<!--空白行-->
		<p style="height:20px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、消費税、初回ご利用のお客様は初回登録料として¥4,400加算させて頂きます。</p><br>
		<!--menu_box_01-->
	</div>


	<!-- ==========================================================================
	7.ペット介護
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_7"></div>
	<div class="menu_box_03">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペット介護サービス</h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th></th>
						<th>要支援</th>
						<th>要介護A</th>
						<th>要介護B</th>
						<th>要介護C</th>
					</tr>
					<tr>
						<th>サイズ</th>
						<td>60分</td>
						<td>60分</td>
						<td>60分</td>
						<td>60分</td>
					</tr>
					<tr>
						<th>小型犬</th>
						<td>¥3,500</td>
						<td>¥4,000</td>
						<td>¥4,500</td>
						<td>¥5,000</td>
					</tr>
					<tr>
						<th>中型犬</th>
						<td>¥4,000</td>
						<td>¥5,000</td>
						<td>¥5,500</td>
						<td>¥6,000</td>
					</tr>
					<tr>
						<th>大型犬</th>
						<td>¥5,000</td>
						<td>¥6,000</td>
						<td>¥6,500</td>
						<td>¥7,000</td>
					</tr>
					<tr>
						<th>超大型犬</th>
						<td colspan="4">要相談</td>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">■延長15分･･･¥800<br>
				●要支援：日常生活に不自由はないが、虚弱な状態である。<br>
				●要介護Ａ：散歩の際に介助が必要。自力で後ろに戻る事ができない等。<br>
				●要介護Ｂ：自力で起き上がることが困難。食事や排泄にも介助が必要であり、痴呆が見られる。<br>
				●要介護Ｃ：寝たきりの状態。<br>
				●介護の状態は上記レベルに応じて料金が異なります。<br>
				●介護のレベルは初回のお打ち合わせの際に決定致します。<br>
				●容態に変化あった際には介護レベルを変更させて頂く場合があります。</p>
			<!--文章（小）-->
			<p class="menu_text_2">※料金は税抜き価格となります。</p><br>
			<!--job_box_inner -->
		</div>
		<!-- シッティング料金の一例　グレーゾーン2段1組 -->
		<div class="glay_two_1">
			<div>
				<h3 class="glay_title_4">ペットシッター料金の一例</h3>
				<ul>
					<li>
						<p class="glay_text_2">要支援の小型犬1匹の介護を90分利用した場合…</p>
						<p class="glay_text_2">小型犬：¥3,500+延長30分：¥1,600</p>
						<p class="glay_midashi_2">合計 ¥3,500+¥1,600＝¥5,100</p>
					</li>
					<li>
						<p class="glay_text_2">通常の小型犬1匹のお世話と、要介護Bを必要とする中型犬のお世話をそれぞれ60分利用した場合…</p>
						<p class="glay_text_2">小型犬：¥3,000+中型犬：¥5,500</p>
						<p class="glay_midashi_2">合計 ¥3,000+¥5,500＝¥8,500</p>
					</li>
				</ul>
				<!--フロートクリア用-->
				<div class="clear"></div>
			</div>
			<!-- グレーゾーン2段1組 -->
		</div>
		<!--空白行-->
		<p style="height:20px; display: block;"></p>
		<!--文章（小）-->
		<p class="menu_text_3">※上記金額の他、交通費、初回ご利用のお客様は初回登録料が別途かかります。詳しくは<span class="page_link"><a
					href="<?php echo home_url('/menu/'); ?>?id=link_menu_9" target="_blank">「共通料金について」</a></span>をご覧下さい。　</p><br>
		<!--menu_box_04-->
	</div>

	<!-- ==========================================================================
	10.お得な回数券
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_10"></div>
	<div class="menu_box_05 menu_ticket">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">お得な回数券</h2>
		</div>
		<!--文章（大）-->
		<p class="menu_text_1-2">
			<!-- 10回分の料金で11回ご利用頂けます。<br> -->
			その他多数特典付き！</p><br>
		<div class="job_box_inner menu_ticket_inner">
			<!--シッティング料金の一例-->
			<p class="menu_text_1">●回数券をご購入頂いた方は、通常・繁忙期に関しても優先予約をさせて頂きます。<br>
				●回数券の場合、繁忙期の割増料金は発生しませんので、断然おトクとなっております！<br>
				●急遽ご予定が変更になった場合でも回数券のお持ちの方はキャンセル料金は一切かかりません。<br>
				●ご購入頂いた種類・コース内容のみご利用となります。それ以外でのご利用は通常の契約で対応とさせて頂きます。<br>
				●回数券の有効期限は1年間となります。<br>
				●未使用の回数分の返金には応じかねます。<br>
				●回数券の方は、24時間遠隔操作カメラが無料となります。<br>※但し、繁忙期期間中は対象外とさせて頂きます。
			</p>
			<p class="menu_text_2">※料金は税抜き価格となります。</p>
			<!--job_box_inner -->
		</div>
		<!--menu_box_05-->
	</div>

	<!-- ==========================================================================
	9.共通料金について
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_menu_9"></div>
	<div class="menu_box_06">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">共通料金について</h2>
		</div>
		<!--インナー-->
		<div class="job_box_inner">
			<!--プライス表-->
			<table>
				<tbody>
					<tr>
						<th>会員登録料</th>
						<td style="text-align: left;">ペットの種類を問わず一律4,400円となります。<br>☆多数特典付き☆ </td>
					</tr>
					<tr>
						<th>再打合わせ料</th>
						<td style="text-align: left;">再打合わせの場合4,400円となります。</td>
					</tr>
					<tr>
						<th>交通費</th>
						<td style="text-align: left;">
							交通費は半蔵門駅を起点とし、お客様の最寄駅または最寄バス停を利用した最短ルート（Google Map 平日12時検索）にて算出した、ご自宅までの往復実費交通費となります。</td>
					</tr>
					<tr>
						<th>出張費</th>
						<td style="text-align: left;">
							当店（半蔵門）より 徒歩15分圏内のお客様：220円<br>
							半蔵門駅からご自宅までの所要時間が40分以上かかる場合、上記交通費とは別に770円の出張費を頂戴いたします。
						</td>
					</tr>
					<tr>
						<th>指名料</th>
						<td style="text-align: left;">ご希望のシッター指名料は1,100円となります。</td>
					</tr>
					<tr>
						<th>その他の費用</th>
						<td style="text-align: left;">■ゴールデンウィーク（4/29～5/10）<br>■シルバーウィーク（9/19～9/27）<br>
							■お盆期間（8/8～8/16）<br>■年末年始（12/26～1/3）<br>※繁忙期は2割増し料金となります。<br>
							■営業時間外は1,650円とさせて頂きます。<br>
							■遠隔操作カメラ440円別途料金を頂きます。<br>
							■お打ち合わせ時、ご契約に至らなかった場合でも、半蔵門から最寄り駅、もしくはバス停までの交通費をご請求させていただきます。</td>
					</tr>
					<tr>
						<th>キャンセル料</th>
						<td style="text-align: left;">■シッター前日 50％<br>■シッター当日 100％<br>
							※営業終了時間21時以降から、翌営業日のキャンセル扱いとなります。お気をつけください。</td>
					</tr>
					<tr>
						<th>ご利用可能な<br>クレジットカード</th>
						<td style="text-align: left;">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/visa.gif" alt="visaカード">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/master.gif" alt="masterカード">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/amex.gif" alt="amexカード">
							<br>
							※ご来店不要でカード決済可能です。
						</td>
					</tr>
				</tbody>
			</table>
			<!--文章（大）-->
			<p class="menu_text_1">ご利用料金は、基本的に前金となります。<br>シッター当日前に、銀行振込、またはカードでのお支払いをお願いしております。</p><br>
			<!--job_box_inner -->
		</div>
		<!--menu_box_06-->
	</div>

<?php get_template_part('assets/inc/footer'); ?>