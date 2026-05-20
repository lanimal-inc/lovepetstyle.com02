<?php include 'assets/inc/head.php'; ?>
<?php get_template_part('assets/inc/header'); ?>

<?php
$slug = get_post( $post )->post_name;
?>
<main class="page-<?php echo esc_attr( $slug ); ?>_main page-sec">

	<!-- ==========================================================================

	コンテンツ

=========================================================================== -->
	<!--タイトル（モバイル）-->
	<!--背景-->
	<div class="title_box mobile_only">
		<!--アイコン-->
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/11_photo_title_mobile.png" class="center-block" alt="お客様写真館">
		<!--コピー-->
		<p class="flow_0_midashi1"></p>
		<!-- /title_box -->
	</div>

	<!--タイトル（PC）-->
	<!--背景-->
	<div class="title_box pc_only">
		<!--パンくずリスト-->
		<div class="topicPath">
			<a href="index.html">トップページ</a>
			<h1>お客様写真館</h1>
		</div>
		<!--フロートクリア用-->
		<div class="clear"></div>
		<!--アイコン-->
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contents_11_photo_l.png" class="center-block" alt="お客様写真館">
		<!--コピー-->
		<p class="flow_0_midashi1"></p>
		<!-- /title_box -->
	</div>
	<!-- ==========================================================================
	写真1枚目
=========================================================================== -->
	<!-- 外枠 -->
	<div id="out_box">
		<!-- インナー -->
		<div class="inner_box photo_1">
			<!--タイトル-->
			<h2><span class="photo_title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/11_photo_title01.png" class="center-block"
						alt="ご利用頂いているお客様達の可愛いペットちゃん達です"></span></h2>
			<!--写真-->
			<table class="photo_p">
				<tbody>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A01.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A02.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A03.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A04.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>渋谷区　K様<br>タイガちゃん</td>
						<td>渋谷区　K様<br>レオちゃん</td>
						<td>港区　N様<br>にゃあにゃちゃん</td>
						<td>品川区　H様<br>モコ君</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A05.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A06.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A07.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A08.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>港区　K様<br>ハロちゃん</td>
						<td>練馬区　S様<br>あくびちゃん</td>
						<td>渋谷区　F様<br>ジュニ君</td>
						<td>世田谷区　M様<br>メルルちゃん</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A09.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A10.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A11.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A12.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>渋谷区　S様<br>エリーちゃん</td>
						<td>港区　H様<br>クラシコ君</td>
						<td>新宿区　T様<br>ジル君</td>
						<td>品川区　Y様<br>ムック君</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A13.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A14.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A15.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_A16.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>北区　I様<br>ナツ君</td>
						<td>中野区　T様<br>ハク君</td>
						<td>港区　N様<br>クッキー君</td>
						<td>渋谷区　O様<br>チェリーちゃん</td>
					</tr>
				</tbody>
			</table>


			<!--inner_box photo_1 -->
		</div>
		<!-- ==========================================================================
	写真2枚目
=========================================================================== -->
		<!-- インナー -->
		<div class="inner_box photo_2">
			<!--写真-->
			<table class="photo_p">
				<tbody>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B01.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B02.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B03.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B04.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>港区　H様<br>ポパイ君</td>
						<td>港区　L様<br>キロロちゃん</td>
						<td>武蔵野市　Y様<br>レオ君</td>
						<td>豊島区　O様<br>ソラちゃん</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B05.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B06.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B07.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B08.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>渋谷区　K様<br>ウッティー君</td>
						<td>港区　Ｆ様<br>ノエルちゃん</td>
						<td>新宿区　T様<br>ココアちゃん</td>
						<td>大田区　Ｉ様<br>ラルフ君</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B09.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B10.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B11.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B12.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>調布市　Ｍ様<br>ラッシー君</td>
						<td>足立区　N様<br>ソラちゃん</td>
						<td>港区　A様<br>モンモン君</td>
						<td>目黒区　S様<br>猫君</td>
					</tr>
					<tr>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B13.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B14.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B15.jpg" alt="お客様写真">
						</th>
						<th><img class="deferred" src="<?php echo get_template_directory_uri(); ?>/assets/img/loader.gif" data-original="img/11_photo_B16.jpg" alt="お客様写真">
						</th>
					</tr>
					<tr>
						<td>渋谷区　S様<br>だい君</td>
						<td>港区　N様<br>ペッパーちゃん</td>
						<td>武蔵野市　Y様<br>レオ君</td>
						<td>新宿区　N様<br>ちくわちゃん</td>
					</tr>
				</tbody>
			</table>
			<!--inner_box photo_2 -->
		</div>
		<!-- ====================
	読み込みトリガー
======================= -->
		<div class="navigation">
			<p><a href="photo-2.html">Next</a></p>
		</div>

		<!-- /out_box -->
	</div>


<?php get_template_part('assets/inc/footer'); ?>