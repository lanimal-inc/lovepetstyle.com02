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
	<div class="title_box3 sec-title_bgnone">
		<!--パンくずリスト-->
		<?php get_template_part('assets/inc/breadcrumb'); ?>
		<br>
		<!--コピー-->
		<h1 class="about_title_0">東京23区対応の<br>ペットシッターLOVEPET<br class="sp">（ラブペット）について</h1>
		<!-- /title_box -->
	</div>
	<!-- ==========================================================================
	1.代表挨拶
=========================================================================== -->
	<!-- <div id="link_about_1"></div>
	<div class="about_1">
		<div class="section-header">
			<h2 class="section-title">代表挨拶</h2>
		</div>
		<div class="about_text ">
			弊社はペットシッター業務の一環とし、震災による被災された犬、猫のボランティア活動、保護犬、保護猫の殺処分ゼロ活動と共に、ペットシッター事業として展開して参りました。
			コンセプトとしては【人と動物が幸せに暮らせる環境作り】そして世界にも視野を向け動物と人がより良く共存する活動に取り組んでおります。
			また通常のペットシッターとは異なり、飼い主様とペットの安心、安全を一番に考え業界初による震災対策システムの導入、24時間遠隔操作カメラなど、他店にはない圧倒的なサービス内容、動物のプロであるシッターのお世話によりペットシッターの存在を身近に感じて頂き、飼い主様がご安心して外出して頂けるよう全力でお守り、愛情を注いでおります。
			在籍シッターは全て有資格者、厳しい研修、防災研修をクリアした大変優秀なシッターとなり前職は動物病院、ペット業界で活躍をしてきた何よりも動物が大好きなシッターのみを採用しております。
			皆様の大切なご家族のお世話、お留守、お困りの際はお気軽にご相談ください。言葉を話す事ができない愛する大切な家族だからこそ私共が側におります。
			全ては愛する大切な家族のために。いつの日も笑顔になって頂ける事をお約束いたします。
			<p>&nbsp;</p>
			<span style=" font-weight:bold; float: right;">代表　金子貴則</span>
			<div class="clear"></div>
		</div>
	</div> -->
	<!-- ==========================================================================
	1.会社概要
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_about_2"></div>
	<div class="about_back">
		<div class="about_text2">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">LOVEPET（ラブペット）会社概要</h2>
			</div>
			<table class="about_table">
				<tr>

					<th>所在地</th>
					<!-- <td>〒150-0013<br>
						東京都渋谷区恵比寿4-4-2クレスト恵比寿9F</td> -->
						<td>〒102-0082<br>
							東京都千代田区一番町13−3ラウンドクロス一番町 2F</td>
				</tr>
				<tr>
					<th>代表電話番号</th>
					<td>03-5422-9839</td>
				</tr>
				<tr>
					<th>FAX番号</th>
					<td>03-5422-9279</td>
				</tr>
				<tr>
					<th>URL</th>
					<td><span class="page_link"><a
								href="http://www.lovepetstyle.com">http://www.lovepetstyle.com</a></span></td>
				</tr>
				<!-- <tr>
					<th>代表</th>
					<td>金子貴則</td>
				</tr> -->
				<tr>
					<th>主要取引銀行</th>
					<td>みずほ銀行</td>
				</tr>
				<!-- <tr>

					<th>顧問税理士</th>
					<td>ステップ総合事務所</td>
				</tr> -->
				<!-- <tr>
					<th>顧問社会保険労務士</th>
					<td>春山国際労務管理事務所</td>
				</tr> -->
				<tr>
					<th>事業所の名称</th>
					<td>株式会社ラニマル</td>
				</tr>
				<tr>
					<th>事業所の所在地</th>
					<td>〒102-0082<br>
						東京都千代田区一番町13−3ラウンドクロス一番町 2F</td>
				</tr>
				<tr>
					<th>ご予約・お問い合わせ</th>
					<td>0120-984-125<br>
						<span class="page_link"><a href="<?php echo home_url('/order/'); ?>" target="_blank">ご予約・お問い合わせページ</a></span>
					</td>
				</tr>
				<tr>
					<th>メールアドレス</th>
					<td>info@lovepetstyle.jp</td>
				</tr>
				<tr>
					<th>動物取扱業種別</th>
					<td>訓練・保管</td>
				</tr>
				<tr>
					<th>登録番号</th>
					<td>【訓練】 20東京都訓第004788号<br>
						【保管】 20東京都保第004788号</td>
				</tr>
				<tr>
					<th>登録年月日</th>
					<td>平成27年８月11日</td>
				</tr>
				<tr>
					<th>登録の更新の年月日</th>
					<td>令和2年8月11日</td>
				</tr>
				<tr>
					<th>有効期限の末日</th>
					<td>令和7年８月10日</td>
				</tr>
				<tr>
					<th>動物取扱責任者</th>
					<td>川上裕也</td>
				</tr>
			</table>
			<!--/about_text2 -->
		</div>
		<!--about_back -->
	</div>


<?php get_template_part('assets/inc/footer'); ?>