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
	<div class="title_box3 sec-title_bgnone">
		<!--パンくずリスト-->
		<?php get_template_part('assets/inc/breadcrumb'); ?>
		<br>
		<!--コピー-->
		<h1 class="about_title_0">東京23区対応の<br>ペットシッター<br class="sp">ご予約・お問い合わせ</h1>
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	直接お電話で
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_order_1"></div>
	<div class="order_1">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッターへのお電話でのお問い合わせ</h2>
		</div>

		<!--写真-->
		<!-- <span class="photo_45"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/16_order_p1.jpg" class="center-block" alt="オペレーターの写真"></span> -->

		<!--連絡先 -->
		<div class="order_contact">
			<p class="order_contact_text3">きて！よいシッター わんにゃんGO！</p>
			<p class="order_contact_text2 tel_link mobile_only">TEL 0120-984-125<br>info@lovepetstyle.jp</p>
			<p class="order_contact_text2 pc_only">TEL 0120-984-125<br>info@lovepetstyle.jp</p>
			<p class="order_contact_text3">電話受付：AM9:00〜PM18:00</p><br>
			<p class="order_contact_text2 tel_link mobile_only">TEL 03-5422-9962</p>
			<p class="order_contact_text2 pc_only">TEL 03-5422-9962</p>
			<p class="order_contact_text3">折り返しご連絡番号</p>
			<!--order_contact -->
		</div>
		<!--order_1 -->
	</div>
	<!-- ==========================================================================
	メールフォームから
=========================================================================== -->
	<!-- ページリンク用 -->
	<div id="link_order_2"></div>
	<div class="order_2">
		<!--タイトル-->
		<div class="section-header">
			<h2 class="section-title">ペットシッターのメールフォームお問い合わせ</h2>
		</div>
		<div class="love_text1">下記のメールフォームよりお問い合わせ下さい。（24時間365日）<br>
			<span style="color:#603f26; font-weight:bold;">フォームより送信されても正式なお申し込みではありません。まずはお気軽にお問合せ下さい。</span><br>
			尚、お返事はスグにできない場合も御座います。当日中には必ず（営業時間外は翌日の返信になります）ご返答致しますので、予め御了承下さい。<br>
			<!--love_text1 -->
		</div>
		<!--空白行-->
		<p style="height:50px; display: block;"></p>
		<!-- ========================================================

	【送信フォーム】

=========================================================== -->
		<div class="love_text1">
			<p><strong>※お問い合わせフォームは下にスクロールできます</strong></p>
		</div>
		<iframe
			src="https://docs.google.com/forms/d/e/1FAIpQLSf1KsBJSDxtIsOM6ZdwpIIIQgkiAybCVI1-3Vzz4kejNIcWgA/viewform?embedded=true"
			width="100%" height="700" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>


<?php get_template_part('assets/inc/footer'); ?>