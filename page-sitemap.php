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
		<h1 class="about_title_0">サイトマップ</h1>
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	1.
=========================================================================== -->
	<!-- アウター -->
	<div class="map_out">
		<!-- インナー -->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/'); ?>">トップページ</a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/'); ?>?id=link_top_2">ペットシッターのご利用がおすすめ</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/'); ?>?id=link_top_3">LOVEPET（ラブペット）について</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/'); ?>?id=link_top_4">メディア掲載実績</a></li>
				</ul>
				<!--map_inner_l-->
			</div>
			<!-- インナー（真ん中） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/first/'); ?>"><?php echo get_the_title( get_page_by_path('first') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/first/'); ?>?id=link_first_1">LOVEPET（ラブペット）の特徴</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/first/'); ?>?id=link_first_2">会員様特典</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/first/'); ?>?id=link_first_10">LOVEPET（ラブペット）のポイント</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/first/'); ?>?id=link_first_14">ペットシッター対応エリア</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（右側） -->
			<div class="map_inner_r">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/flow/'); ?>"><?php echo get_the_title( get_page_by_path('flow') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_1">1.ペットシッターのお申し込み方法</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_2">2.事前カウンセリング・ペットのお世話内容のご確認</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_3">3.ご契約</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_4">4. 鍵のお預かりについて</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_5">5. ペットカルテの作成について</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_6">6. ペットシッター当日の流れ</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/flow/'); ?>?id=link_flow_7">7. ペットシッターのシッター終了後</a></li>
				</ul>
				<!--map_inner_r -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>

		<!-- インナー-->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/job/'); ?>"><?php echo get_the_title( get_page_by_path('job') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_1">犬のお世話内容</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_2">猫のお世話内容</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_3">24時間ペットシッティング・宿泊コース</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_4">うさぎ・小動物のお世話内容</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_55">トリミングサロン・動物病院の通院代行</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_5">出張しつけ・ドッグトレーニング</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_6">ペット介護サービス</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_8">熱帯魚・爬虫類などのお世話内容</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/job/'); ?>?id=link_job_9">コンシェルジュサービス</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（真ん中） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/menu/'); ?>"><?php echo get_the_title( get_page_by_path('menu') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_1">シッター通常コース（1日1時間）</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_2">シッターショートコース（1回40分）</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_3">犬のお散歩代行通常コース（1回40分）</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_4">24時間ペットシッティングコース</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_5">ペットシッター宿泊コース</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_6">出張しつけ・ドッグトレーニング</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_7">ペット介護サービス</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_10">お得な回数券</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/menu/'); ?>?id=link_menu_9">共通料金について</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（右側） -->
			<div class="map_inner_r">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/sitter/'); ?>"><?php echo get_the_title( get_page_by_path('sitter') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/sitter/'); ?>?id=link_sitter_1">ペットシッターの資格取得一覧</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/sitter/'); ?>?id=link_sitter_2">有資格者ペットシッター紹介</a></li>
				</ul>
				<!--map_inner_r -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>

		<!-- インナー-->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/love/'); ?>"><?php echo get_the_title( get_page_by_path('love') ); ?></a></h2></li>
					<!-- <li class="map_datail"><a href="https://doubutsukyuen.org/" target="_blank">ペット災害対策推進協会</a></li>
					<li class="map_datail"><a href="http://onelove.cc/partner/" target="_blank">ONELOVE すべての犬に愛と家族を。</a>
					</li>
					<li class="map_datail"><a href="http://onelove.cc/" target="_blank">ONE LOVE</a></li>
					<li class="map_datail"><a href="http://www.minashigo.jp/" target="_blank">犬猫みなしご救援隊</a></li>
					<li class="map_datail"><a href="http://www.moudouken.net/index.php" target="_blank">日本盲導犬協会</a></li>
					<li class="map_datail"><a href="https://doubutsukyuen.org/" target="_blank">どうぶつ救援本部</a></li> -->
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（真ん中） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/safe/'); ?>"><?php echo get_the_title( get_page_by_path('safe') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_1">東京23区対応ペットシッターの防災訓練研修</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_7">犬・猫用震災ライフジャケット</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_8">犬・猫用防災ブーツ</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_9">猫用ハーネス&リード</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_10">愛犬用非常食セット</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_11">愛猫用非常食セット</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_12">小動物（うさぎ）用非常食</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_13">小動物（鳥）用非常食</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_15">業界初!! 24h遠隔操作カメラ</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_16">ペット見守りカメラの見え方</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/safe/'); ?>?id=link_safe_18">ペットシッターご利用時の注意事項</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（右側） -->
			<div class="map_inner_r">
				<!--map_inner_r -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>

		<!-- インナー -->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/question/'); ?>"><?php echo get_the_title( get_page_by_path('question') ); ?></a></h2></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（真ん中） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/hospital/'); ?>"><?php echo get_the_title( get_page_by_path('hospital') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/hospital/'); ?>?id=link_hospital_1">LOVEPET提携先動物病院様一覧</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（右側） -->
			<div class="map_inner_r">
				<!-- <ul>
					<li class="map_title"><h2><a href="11_photo.html">お客様写真館</a></h2></li>
				</ul> -->
				<!--map_inner_r -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>

		<!-- インナー-->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/voice/'); ?>"><?php echo get_the_title( get_page_by_path('voice') ); ?></a></h2></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（真ん中） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/order/'); ?>"><?php echo get_the_title( get_page_by_path('order') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/order/'); ?>?id=link_order_1">ペットシッターへのお電話でのお問い合わせ</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/order/'); ?>?id=link_order_2">ペットシッターのメールフォームお問い合わせ</a></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!-- インナー（右側） -->
			<div class="map_inner_r">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/about/'); ?>"><?php echo get_the_title( get_page_by_path('about') ); ?></a></h2></li>
					<li class="map_datail"><a href="<?php echo home_url('/about/'); ?>?id=link_about_1">代表挨拶</a></li>
					<li class="map_datail"><a href="<?php echo home_url('/about/'); ?>?id=link_about_2">LOVEPET（ラブペット）会社概要</a></li>
				</ul>
				<!--map_inner_r -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>

		<!-- インナー -->
		<div class="map_inner">
			<!-- インナー（左側） -->
			<div class="map_inner_l">
				<ul>
					<li class="map_title"><h2><a href="<?php echo home_url('/privacy/'); ?>"><?php echo get_the_title( get_page_by_path('privacy') ); ?></a></h2></li>
				</ul>
				<!--map_inner_l -->
			</div>
			<!--フロートクリア用-->
			<div class="clear"></div>
			<!--map_inner -->
		</div>
		<!--map_out-->
	</div>


<?php get_template_part('assets/inc/footer'); ?>