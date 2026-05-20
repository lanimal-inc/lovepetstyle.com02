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
		<h1 class="about_title_0">個人情報保護方針<br class="sp">（プライバシーポリシー）</h1>
		<!-- /title_box -->
	</div>

	<!-- ==========================================================================
	1.
=========================================================================== -->
	<div class="privacy_1">
		<p class="privacy_midashi">LOVE PET（以下当社）では、個人情報に関する法令およびその他の規範を遵守し、お客様の大切な個人情報の保護に万全を尽くします。</p><br>
		<div class="privacy_2">
			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">個人情報の収集について</h2>
			</div>
			<div class="about_text">当社では、次のような場合に必要な範囲で個人情報を収集することがあります。<br>
				・当社へのお問い合わせ時 <br>
				・当社へのサービスお申し込み時
				<!--about_text -->
			</div>

			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">個人情報の利用目的について</h2>
			</div>
			<div class="about_text">当社は、お客様から収集した個人情報を次の目的で利用いたします。<br>
				・お客様への連絡のため<br>
				・お客様からのお問い合せに対する回答のため <br>
				・お客様へのサービス提供のため
				<!--about_text -->
			</div>

			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">個人情報の第三者提供について</h2>
			</div>
			<div class="about_text">当社では、お客様より取得した個人情報を第三者に開示または提供することはありません。<br>
				ただし、次の場合は除きます。<br>
				・ご本人の同意がある場合 <br>
				・警察からの要請など、官公署からの要請の場合<br>
				・法律の適用を受ける場合
				<!--about_text -->
			</div>

			<!--タイトル-->
			<div class="section-header">
				<h2 class="section-title">個人情報の開示・訂正について</h2>
			</div>
			<div class="about_text">当社は、お客様ご本人からの自己情報の開示、訂正、削除等のお求めがあった場合は、確実に応じます。<br>
				・ご本人の同意がある場合<br>
				・警察からの要請など、官公署からの要請の場合<br>
				・法律の適用を受ける場合
				<!--about_text-->
			</div>

			<!--privacy_2 -->
		</div>
		<!--privacy_1 -->
	</div>


<?php get_template_part('assets/inc/footer'); ?>