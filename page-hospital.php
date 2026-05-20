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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_10_hospital_l.png" class="center-block" alt="動物病院のご紹介">
			<div class="section-maintitle"><h1 class="section-maintitle_title">東京23区対応の提携動物病院のご紹介</h1></div>
		</div>
	</div>

	<!-- ==========================================================================
	1.
=========================================================================== -->
	<div class="hospital_1">
		<p class="flow_a_midashi3">お引っ越したばかりで、動物病院が決まってない方。近所で評判の良い動物病院を探している方。緊急により時間が無い方</p><br>
		<div class="love_text1">ペットと共に生活する上で、良い動物病院を選ぶ事は本当に大切な事です。<br>
			提携先の動物病院をご紹介させて頂く【動物病院紹介サービス】を行なっております。<br>
			飼い主様とペットが安心して暮らしていける環境を心より望んでいます。<br>
			お気軽にご相談下さいませ。
			<!--love_text1 -->
		</div>
		<!--hospital_1 -->
	</div>
	<div class="hospital_2">
		<div class="hospital_text1">
			<!-- ページリンク用 -->
			<div id="link_hospital_1"></div>
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title"><span class="section-title_small">LOVEPET（ラブペット）提携先</span><br>動物病院の一覧</h2>
			</div>
			<h3 class="hospital_kumei">渋谷区の提携動物病院</h3><br>
			<!--渋谷区-->
			<ul class="hospital_clinic">
				<li><h4 class="name">高木犬猫病院</h4>神宮前2-13-8<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3401-4672</li>
				<li><h4 class="name">東3丁目ペットクリニック</h4>恵比寿西2-4-7 NNステーツビル１階<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5489-2111</li>
				<li><h4 class="name">丸山ペットクリニック</h4>恵比寿南1-16-2<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5704-8889</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--港区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">港区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">麻布十番犬猫クリニック</h4>麻布十番2-8-5<br>メゾンアザブディックス401<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3457-8612</li>
				<li><h4 class="name">森動物病院</h4>麻布十番1-3-7<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3582-5876</li>
				<li><h4 class="name">ハルペッツクリニック東京</h4>西麻布3-6-3西麻布<br>フォレストプラザ1F<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-6804-3343</li>
				<li><h4 class="name">花澤犬猫医院</h4>六本木5丁目5－8<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3402-4105</li>
				<li><h4 class="name">アテナ動物病院赤坂</h4>赤坂6丁目15－15<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3224-1186</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--目黒区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">目黒区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">ウエストクロス動物病院</h4>青葉台1-18-7<br>プラウドフラット中目黒１階<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-6416-9533</li>
				<li><h4 class="name">グランパ動物病院</h4>上目黒5-4-8<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3792-4501</li>
				<li><h4 class="name">シンバ アニマルホスピタル</h4>大橋2-10-15<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5738-0055</li>
				<li><h4 class="name">駒場ペットクリニック</h4>駒場4-1-14 WIN駒場1F<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3460-2118</li>
				<li><h4 class="name">上目黒ペットクリニック</h4>上目黒2-30-10<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5773-0212</li>
			</ul>
			<!--/hospital_text1-->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--中央区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">中央区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">つきしま動物病院</h4>月島4-8-10<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-6219-6070</li>
				<li><h4 class="name">中央アニマルクリニック</h4>湊3-8-1<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3523-5075</li>
				<li><h4 class="name">小野寺動物病院</h4>佃3-3-6<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5144-5050</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--品川区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">品川区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">サイトウ動物病院</h4>南品川4丁目4－5－101<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3458-3991</li>
				<li><h4 class="name">荒川動物病院</h4>小山6丁目25－5<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3781-8265</li>
				<li><h4 class="name">平田動物病院</h4>中延2丁目11－2<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3781-0020</li>
				<li><h4 class="name">城南動物病院</h4>二葉4丁目21－3<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3785-9833</li>
			</ul>
			<!--/hospital_clinic-->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--江東区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">江東区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">ペットシティ動物病院 お台場</h4>青海1丁目3-15お台場パレット<br>タウンヴィーナスフォート<br><span
						class="icon-phone" style="font-size:10px;">&nbsp;</span>03-6457-1288</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--世田谷区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">世田谷区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">くすの木動物病院</h4>等々力2-1-2<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5706-8412</li>
				<li><h4 class="name">経堂村田動物病院</h4>赤堤1-43-1<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-6379-1150</li>
				<li><h4 class="name">フラン動物病院</h4>三軒茶屋2-51-30<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-6413-8122</li>
				<li><h4 class="name">ジェナー動物クリニック</h4>野沢4-7-5<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3414-1411</li>
				<li><h4 class="name">アルマ動物病院</h4>中町4-24-18-101<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5758-6658</li>
				<li><h4 class="name">箱崎動物病院</h4>北沢3-2-18<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5453-4710</li>
			</ul>
			<!--/hospital_clinic-->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--新宿区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">新宿区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">西新宿ペットクリニック</h4>西新宿4丁目30－9－102<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3299-1328</li>
				<li><h4 class="name">アーバン動物病院</h4>大久保2丁目3－16－102<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3204-1323</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--杉並区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">杉並区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">田中ペットクリニック</h4>高円寺南4-2-8<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-5306-5122</li>
				<li><h4 class="name">安達動物病院</h4>和田3-60-11<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3311-5678</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--中野区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">中野区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">斎藤動物病院</h4>本町5-4-5-108<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3381-1626</li>
				<li><h4 class="name">猪野塚動物病院</h4>弥生町3-10-7<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3372-1670</li>
				<li><h4 class="name">南中野どうぶつ病院</h4>南台3-6-16<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3380-5554</li>
			</ul>
			<!--/hospital_clinic -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--豊島区-->
		<div class="hospital_text1">
			<h3 class="hospital_kumei">豊島区の提携動物病院</h3><br>
			<ul class="hospital_clinic">
				<li><h4 class="name">ちはや動物病院</h4>千早2-30-12<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3974-8005<br>（夜間のお電話はご遠慮下さい）</li>
				<li><h4 class="name">マザーラブ動物病院</h4>長崎2-14-13<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3958-0580<br></li>
				<li><h4 class="name">久山獣医科病院</h4>北大塚1-2-13<br><span class="icon-phone"
						style="font-size:10px;">&nbsp;</span>03-3917-4796<br>（初診の方は予約制となっております）</li>
			</ul>
			<!--/hospital_text1 -->
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--hospital_2 -->
	</div>

<?php get_template_part('assets/inc/footer'); ?>