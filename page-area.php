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
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_17_area.png" class="center-block" alt="対応エリア">
			<div class="section-maintitle"><h1 class="section-maintitle_title">東京23区対応のペットシッター対応エリア</h1></div>
		</div>
	</div>
	<!-- ==========================================================================
	1.お申込
=========================================================================== -->
	<!-- ページリンク用 -->
	<!-- <div id="link_flow_1"></div>
	<div class="">
		<div class="sec_inner erea_box_link">
			<div class="erea_box_link_in">
				<a href="#tokyo" class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_link_tokyo_bottom.png" alt="東京エリア"></a>
			</div>
		</div>
	</div> -->
	<!-- ==========================================================================
	2.ご説明 ・3.ご契約
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="tokyo" class="erea_box_bg">
		<div class="sec_inner erea_box_bg_in">
			<div class="section-header">
				<h2 class="section-title"><span class="section-title_small">東京23区で選ばれるペットシッター</span><br>LOVEPET（ラブペット）の対応エリア</h2>
			</div>
			<div class="erea_box_sec">
				<div class="erea_box_sec01">
					<h3>東京23区のペットシッター<br class="sp">対応エリア一覧</h3>
					<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_map_v251114.png" alt="東京エリア"></div>
					<p>東京23区（千代田区、中央区、港区、新宿区、文京区、台東区、墨田区、江東区、品川区、目黒区、大田区、世田谷区、渋谷区、中野区、杉並区、豊島区、北区、荒川区、板橋区、練馬区、足立区、葛飾区、江戸川区）</p>
				</div>
				<div class="erea_box_sec02">
					<h3>東京都23区の<br class="sp">ペットシッター紹介</h3>
					<div class="erea_box_sec02_sitter">
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter01.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>木村 由枝</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter02.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>石田 友紀</h4>
						</div>
						<!-- <div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter03.png" alt=""></div>
							<h4>本郷 美佳子</h4>
						</div> -->
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter04.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>石川 淳実</h4>
						</div>
						<!-- <div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter05.png" alt=""></div>
							<h4>村田 めぐみ</h4>
						</div> -->
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter06.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>宮本 紫乃</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter07.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>坂田 亜紀子</h4>
						</div>
						<!-- <div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter08.png" alt=""></div>
							<h4>永島 幹</h4>
						</div> -->
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter09.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>石渡 加奈子</h4>
						</div>
						<!-- <div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter10.png" alt=""></div>
							<h4>宇都宮 千里</h4>
						</div> -->
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter11.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>小針 早貴</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter14.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>齋藤 里美</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter12.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>阿部 千織</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter13.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>菊地 杏樹</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter17.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>加藤 芽生</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter15.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>中村 宏子</h4>
						</div>
						<div class="erea_box_sitter_person">
							<div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_sitter16.png" alt=""></div>
							<h4><span class="area_tab">東京エリア女性ペットシッター</span>中嶋 芙美子</h4>
						</div>
					<!-- 17ラスト -->
				</div>
				<div class="erea_box_sec02_button">
					<div class="button"><a href="<?php echo home_url('/sitter/'); ?>" target="_blank" class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_btn_sitter.png" alt="シッター情報を詳しく見る"></a></div>
					<div class="button"><a href="<?php echo home_url('/order/'); ?>" target="_blank" class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_btn_contact.png" alt="お問い合わせ"></a></div>
				</div>
				</div>
				<div class="erea_box_sec03">
					<h3>LOVEPET（ラブペット）<br class="sp">営業所情報</h3>
					<div class="erea_box_sec03_in">
						<div class="txtArea">
							<h4 class="txtArea__left"><div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_adress.png" alt="住所"></div>住所</h4>
							<p class="txtArea__right">〒102-0082 東京都千代田区一番町13−3ラウンドクロス一番町 ２F</p>
						</div>
						<div class="txtArea">
							<h4 class="txtArea__left"><div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_time.png" alt="時間"></div>時間</h4>
							<p class="txtArea__right">AM9:00〜PM21:00</p>
						</div>
						<div class="txtArea">
							<h4 class="txtArea__left"><div class="imgArea"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/17_area_tell.png" alt="電話番号"></div>電話番号</h4>
							<p class="txtArea__right">0120-984-125（AM9:00〜PM21:00）</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_template_part('assets/inc/footer'); ?>